<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThesisAgentController;

Route::prefix('v1/thesis')->group(function () {
    Route::post('/titles/generate', [ThesisAgentController::class, 'generateTitles']);
    Route::post('/{projectId}/execute-step', [ThesisAgentController::class, 'executeStep']);
    Route::post('/{projectId}/defense-simulator', [ThesisAgentController::class, 'simulateDefense']);
});
