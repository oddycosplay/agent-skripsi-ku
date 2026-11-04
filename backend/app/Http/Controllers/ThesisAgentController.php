<?php

namespace App\Http\Controllers;

use App\Services\AcademicSkillOrchestrator;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class ThesisAgentController extends Controller
{
    protected AcademicSkillOrchestrator $orchestrator;

    public function __construct(AcademicSkillOrchestrator $orchestrator)
    {
        $this->orchestrator = $orchestrator;
    }

    // Tahap 1: Cari Judul & Filter Kaprodi
    public function generateTitles(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'raw_idea' => 'required|string',
            'preferred_stack' => 'required|array',
        ]);

        $result = $this->orchestrator->executeSkill(
            '01_skill_pencari_judul_dan_filter_kaprodi.md',
            [],
            "Ide mentah: {$validated['raw_idea']}. Stack: " . implode(', ', $validated['preferred_stack'])
        );

        $projectId = DB::table('thesis_projects')->insertGetId([
            'user_id' => $request->user()->id ?? 1,
            'raw_idea' => $validated['raw_idea'],
            'preferred_stack' => json_encode($validated['preferred_stack']),
            'problem_statements_json' => json_encode($result),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['project_id' => $projectId, 'data' => $result]);
    }

    // Tahap 2-5: Eksekusi Bab Berantai dengan State Injection
    public function executeStep(Request $request, int $projectId): JsonResponse
    {
        $validated = $request->validate([
            'skill_file' => 'required|string',
            'user_instruction' => 'required|string',
            'target_column' => 'required|in:problem_statements_json,literature_gap_json,system_design_json,testing_metrics_json,chapter_drafts_json'
        ]);

        $project = DB::table('thesis_projects')->where('id', $projectId)->firstOrFail();

        $currentState = [
            'approved_title' => $project->approved_title,
            'sdlc_method' => $project->sdlc_method,
            'problems' => json_decode($project->problem_statements_json, true),
            'literature_gap' => json_decode($project->literature_gap_json, true),
            'system_design' => json_decode($project->system_design_json, true),
            'testing_metrics' => json_decode($project->testing_metrics_json, true),
        ];

        $result = $this->orchestrator->executeSkill(
            $validated['skill_file'],
            $currentState,
            $validated['user_instruction']
        );

        DB::table('thesis_projects')->where('id', $projectId)->update([
            $validated['target_column'] => json_encode($result),
            'updated_at' => now(),
        ]);

        return response()->json(['project_id' => $projectId, 'output' => $result]);
    }

    // Tahap 6: Simulator Dosen Penguji Sidang
    public function simulateDefense(Request $request, int $projectId): JsonResponse
    {
        $project = DB::table('thesis_projects')->where('id', $projectId)->firstOrFail();
        $fullState = [
            'title' => $project->approved_title,
            'problems' => json_decode($project->problem_statements_json, true),
            'design' => json_decode($project->system_design_json, true),
            'testing' => json_decode($project->testing_metrics_json, true),
            'chat_history' => json_decode($project->defense_simulation_logs ?? '[]', true),
        ];

        $reply = $this->orchestrator->executeSkill(
            '08_skill_simulator_dosen_penguji_sidang.md',
            $fullState,
            $request->input('student_answer', 'Mulai sesi sidang dan ajukan pertanyaan penguji pertama.')
        );

        return response()->json($reply);
    }
}
