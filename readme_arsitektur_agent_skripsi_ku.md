# 🎓 Agent Skripsi-Ku: Academic AI Skill Package & Prompt Chaining Architecture

Repositori ini berisi kumpulan **10 Modul Skill AI (`.md`)** dan rancangan arsitektur **Prompt Chaining** untuk aplikasi asisten akademik penyusunan skripsi Program Studi Sistem Informasi / Teknik Informatika. 

Seluruh modul dirancang berdasarkan bedah struktur standar akademik, metodologi rekayasa perangkat lunak (seperti *Model-V SDLC*

📂 Struktur Repositori
Plaintext
agent-skripsi-ku/
├── README.md                                              # Dokumentasi Arsitektur & Integrasi Backend
├── skills/
│   ├── 01_skill_pencari_judul_dan_filter_kaprodi.md       # Kurator Judul & Auto-Reject Kaprodi
│   ├── 02_skill_generator_outline_skripsi_4_0.md          # Generator Outline Bab I - V (Traceable)
│   ├── 03_skill_penulis_bab_1_pendahuluan.md              # Author Bab I (Piramida Terbalik)
│   ├── 04_skill_penulis_bab_2_landasan_teori.md           # Author Bab II & Kerangka Berpikir
│   ├── 05_skill_penulis_bab_3_analisa_dan_perancangan.md  # System Analyst Bab III (UML & ERD)
│   ├── 06_skill_penulis_bab_4_implementasi_dan_pengujian.md # QA Engineer Bab IV (Whitebox V(G) & UAT)
│   ├── 07_skill_penentu_gap_dan_literatur_review.md       # Ekstraktor Research GAP & Matriks Jurnal
│   ├── 08_skill_simulator_dosen_penguji_sidang.md         # Simulator Sidang (7 Radar Penguji Killer)
│   ├── 09_skill_penunjang_bab5_abstrak_dan_kuesioner.md   # Generator Bab V, Abstrak, Kuesioner & PPT
│   └── 10_skill_penunjang_generator_kode_diagram.md       # Generator Kode Mermaid.js & PlantUML
└── database/
    └── schema.sql                                         # Skema Tabel Penyimpanan State JSON
🔗 1. Arsitektur Alur Data (Prompt Chaining Pipeline)Agar setiap bab sinkron dan tidak terjadi halusinasi antar-tahap (misalnya Use Case di Bab 3 berbeda dengan Tabel Pengujian di Bab 4), sistem menyimpan State/Context JSON secara terpusat di database dan menyuntikkannya ke tahap berikutnya:Cuplikan kodegraph TD
    A[Input Ide Mentah Mahasiswa] --> B(Skill 01: Pencari Judul & Filter Kaprodi)
    B -->|Lock Judul & Metode SDLC| C(Skill 02: Generator Outline 4.0)
    B -->| State Masalah & Metode| D(Skill 07: Penentu GAP & Literatur Review)
    C --> E(Skill 03: Penulis Bab I Pendahuluan)
    D --> F(Skill 04: Penulis Bab II Landasan Teori)
    E -->|Lock Identifikasi, Rumusan & Tujuan| G(Skill 05: Analisa & Perancangan Bab III)
    G <-->|Generate Script Visual| H(Skill 10: Generator Diagram Mermaid/PlantUML)
    G -->|Lock Aktor, Use Case & Tabel DB| I(Skill 06: Implementasi & Pengujian Bab IV)
    I -->|Lock Hasil Uji & Rumusan| J(Skill 09: Penunjang Bab V, Abstrak, Kuesioner)
    E & F & G & I & J -->|Full Project State JSON| K((Skill 08: Simulator Dosen Penguji Sidang))
Tahapan Eksekusi:Tahap 1 (01_pencari_judul): Menerima input masalah mentah mahasiswa $\rightarrow$ Menghasilkan 3 rekomendasi judul, metode SDLC (seperti Model-V), dan stack teknologi (seperti PHP, Laravel, dan MySQL). Mahasiswa memilih 1 judul untuk dikunci ke dalam tabel thesis_projects.Tahap 2 (02_outline & 07_gap_literatur): Mengambil judul terpilih + daftar jurnal referensi $\rightarrow$ Menghasilkan matriks penelitian terdahulu dan pohon outline yang mengunci jumlah Identifikasi Masalah (4 poin), Rumusan Masalah (3 poin), dan Tujuan Penelitian (4 poin).Tahap 3 (03_bab1 & 04_bab2): Mengambil State dari Tahap 2 $\rightarrow$ Menulis narasi Bab I dan Bab II secara otomatis dengan menjaga konsistensi sitasi.Tahap 4 (05_bab3 & 10_generator_diagram): Mengambil Tujuan Penelitian dari Bab I $\rightarrow$ Mengekstrak daftar Actors (Superadmin, Admin, Anggota, Guest), Use Cases, serta Tabel Database (users, posts, archives, events, dll.) menjadi kode Mermaid.js/PlantUML dan kamus data.Tahap 5 (06_bab4 & 09_bab5_penunjang): Mengambil Daftar Use Case dari Bab III $\rightarrow$ Menurunkan skenario Black Box Testing, menghitung metrik White Box Cyclomatic Complexity $V(G)$ dari potongan kode controller, serta mengolah tabel kuesioner UAT Skala Likert.Tahap 6 (08_dosen_penguji): Membaca seluruh JSON dari Bab I–V $\rightarrow$ Membandingkan diagram vs kamus data untuk mencari inkonsistensi dan menembakkan pertanyaan sidang secara interaktif.📦 2. Standar Skema JSON (Structured Output Schema)Gunakan fitur responseSchema / responseMimeType: "application/json" pada Gemini API agar output AI selalu berformat JSON murni yang siap disimpan ke database dan di-render di frontend (React/Vite).A. Payload & Response: 01_pencari_judulRequest Payload (Frontend $\rightarrow$ Backend):JSON{
  "student_id": "231011700231",
  "study_program": "Sistem Informasi",
  "raw_idea": "Mau bikin web organisasi mahasiswa HMSI buat gantiin pencatatan di Word dan sebar info di WA/IG",
  "preferred_stack": ["PHP", "Laravel", "MySQL"]
}
Expected AI JSON Output:JSON{
  "kaprodi_check": {
    "is_rejected": false,
    "warning_notes": "Ide awal masih terlihat seperti CRUD biasa. Wajib ditambahkan metode SDLC formal (seperti Model-V) dan pengujian terukur (White Box & UAT) agar layak secara akademik."
  },
  "recommendations": [
    {
      "option_id": 1,
      "formal_title": "PERANCANGAN APLIKASI MANAJEMEN INFORMASI DENGAN MODEL-V BERBASIS WEB PADA HIMPUNAN MAHASISWA SISTEM INFORMASI UNIVERSITAS PAMULANG",
      "sdlc_method": "Model-V (V-Model SDLC)",
      "testing_methods": ["White Box (Cyclomatic Complexity)", "Black Box", "User Acceptance Testing (Skala Likert)"],
      "core_problems": [
        "Laporan informasi keorganisasian hanya menggunakan Microsoft Office tanpa database sehingga rentan hilang data.",
        "Data administrasi keorganisasian hanya menggunakan Microsoft Office & WhatsApp tanpa platform khusus.",
        "Penyebaran informasi akademik & organisasi hanya melalui Instagram & WhatsApp sehingga kurang efektif.",
        "Anggota tidak mengetahui agenda kegiatan organisasi sehingga minim literasi."
      ],
      "novelty_value": "Integrasi verifikasi dan validasi di setiap tahap pengembangan menggunakan Model-V serta pembagian hak akses berlapis (Superadmin/Pembina, Admin/BPH, Anggota, dan Guest)."
    }
  ]
}
B. Payload & Response: 05_bab3 & 10_generator_diagramExpected AI JSON Output:JSON{
  "actors": [
    { "name": "Superadmin", "role_desc": "Pembina Organisasi (Full Access + Kelola Admin)" },
    { "name": "Admin", "role_desc": "Pengurus BPH (Kelola Arsip, Organisasi, Konten, Agenda)" },
    { "name": "Anggota", "role_desc": "Anggota LDKO (Kelola Blog milik sendiri, Lihat Agenda)" },
    { "name": "Guest", "role_desc": "Pengunjung umum (Melihat halaman utama BASI)" }
  ],
  "uml_diagrams": {
    "use_case_plantuml": "@startuml\nleft to right direction\nactor Superadmin\nactor Admin\nactor Anggota\nactor Guest\nrectangle \"Sistem Informasi HMSI\" {\n  Superadmin --> (Mengelola Data Admin)\n  Admin --> (Mengelola Data Arsip)\n  Anggota --> (Mengelola Data Blog)\n  Guest --> (Melihat BASI)\n}\n@enduml",
    "sequence_login_mermaid": "sequenceDiagram\n  actor User\n  participant FormLogin\n  participant LoginController\n  participant Users\n  participant Dashboard\n  User->>FormLogin: 1: Klik login()\n  FormLogin->>LoginController: 1.1: Input username, password()\n  LoginController->>Users: 1.1.1: getUser_role()\n  Users->>Users: 1.1.1.1: validatedData()\n  LoginController->>Dashboard: 2: Menampilkan Dashboard user_role()"
  },
  "database_schema": [
    {
      "table_name": "archives",
      "columns": [
        { "name": "id", "type": "bigint(20)", "attributes": "UNSIGNED", "nullable": false, "key": "PRIMARY KEY" },
        { "name": "title", "type": "varchar(50)", "nullable": false },
        { "name": "slug", "type": "varchar(255)", "nullable": false, "key": "UNIQUE" },
        { "name": "type", "type": "enum('Surat Masuk','Surat Keluar','Surat Internal','Laporan','Lain-lain')", "nullable": false }
      ]
    }
  ]
}
C. Payload & Response: 06_bab4 (Kalkulator White Box & UAT)Expected AI JSON Output:JSON{
  "white_box_testing": {
    "module_name": "LoginController@authenticate",
    "edges_E": 10,
    "nodes_N": 9,
    "predicates_P": 2,
    "regions_R": 3,
    "cyclomatic_complexity_VG": 3,
    "independent_paths": [
      "Path 1: 1 - 2 - 7 - 8 - 9 (if (2) = false)",
      "Path 2: 1 - 2 - 3 - 5 - 6 - 9 (if (2) = true & if (3) = false)",
      "Path 3: 1 - 2 - 3 - 4 - 9 (if (2) = true & if (3) = true)"
    ],
    "flow_graph_mermaid": "graph TD\n  1((1)) --> 2{2}\n  2 -- true --> 3{3}\n  2 -- false --> 7((7))\n  3 -- true --> 4((4))\n  3 -- false --> 5((5))\n  5 --> 6((6))\n  7 --> 8((8))\n  4 --> 9((9))\n  6 --> 9\n  8 --> 9"
  },
  "uat_summary": {
    "scale_max": 4,
    "groups": [
      { "actor": "Admin (BPH)", "respondents": 15, "questions": 13, "total_score": 726, "max_score": 780, "percentage": 93.08, "interpretation": "Sangat Setuju" },
      { "actor": "Anggota", "respondents": 14, "questions": 13, "total_score": 662, "max_score": 728, "percentage": 90.93, "interpretation": "Sangat Setuju" },
      { "actor": "Superadmin (Pembina)", "respondents": 1, "questions": 13, "total_score": 43, "max_score": 52, "percentage": 82.70, "interpretation": "Sangat Setuju" }
    ]
  }
}
⚙️ 3. Implementasi Backend (Laravel Service Orchestrator)Simpan ke-10 berkas .md di dalam direktori storage/app/skills/ pada proyek Laravel Anda, lalu gunakan Service Class berikut untuk memanggil Gemini API secara berantai:PHP<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class AcademicSkillOrchestrator
{
    protected string $apiKey;
    protected string $model = 'gemini-2.5-flash';

    public function __construct()
    {
        $this->apiKey = config('services.gemini.api_key');
    }

    /**
     * Memuat isi file .md sebagai System Prompt
     */
    protected function loadSkillMarkdown(string $skillFilename): string
    {
        return Storage::disk('local')->get("skills/{$skillFilename}");
    }

    /**
     * Eksekusi Skill dengan Context Injection dari tahap sebelumnya
     */
    public function executeSkill(string $skillFilename, array $projectState, string$userPrompt): array
    {
        $systemInstruction = $this->loadSkillMarkdown($skillFilename);

        // Gabungkan state proyek (Bab sebelumnya) agar sinkron (Traceability)
        $contextBlock = "=== STATE PROYEK SKRIPSI SAAT INI (JSON) ===\n"
                      . json_encode($projectState, JSON_PRETTY_PRINT)
                      . "\n===========================================\n\n"
                      . "INSTRUKSI USER:\n" . $userPrompt;

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post("https://generativelanguage.googleapis.com/v1beta/models/{$this->model}:generateContent?key={$this->apiKey}", [
            'system_instruction' => [
                'parts' => [
                    ['text' => $systemInstruction]
                ]
            ],
            'contents' => [
                [
                    'role' => 'user',
                    'parts' => [
                        ['text' => $contextBlock]
                    ]
                ]
            ],
            'generationConfig' => [
                'temperature' => 0.3, // Rendah agar konsisten secara akademik
                'responseMimeType' => 'application/json',
            ]
        ]);

        return json_decode($response->json('candidates.0.content.parts.0.text'), true);
    }
}
🗄️ 4. Skema Database (thesis_projects)Gunakan skema tabel MySQL/PostgreSQL berikut untuk menyimpan state antar-skill:SQLCREATE TABLE thesis_projects (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT UNSIGNED NOT NULL,
    approved_title VARCHAR(255) NULL,
    sdlc_method VARCHAR(100) NULL,
    
    -- Menyimpan State JSON antar-skill agar sinkron
    problem_statements_json JSON NULL,  -- Output dari Skill 01 & 03 (Identifikasi, Rumusan, Tujuan)
    literature_gap_json JSON NULL,      -- Output dari Skill 04 & 07 (10 Jurnal & Tabel GAP)
    system_design_json JSON NULL,       -- Output dari Skill 05 & 10 (Aktor, Use Case, ERD, Mermaid Code)
    testing_metrics_json JSON NULL,     -- Output dari Skill 06 (Blackbox, Whitebox V(G), UAT Likert)
    
    -- Menyimpan riwayat chat simulasi sidang
    defense_simulation_logs JSON NULL,  -- Output dari Skill 08 (Dosen Penguji)
    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
Cuplikan kode
http://googleusercontent.com/immersive_entry_chip/1

### Cara Menjalankan di Komputer Anda:
Karena lingkungan AI tidak memiliki akses langsung ke kredensial autentikasi GitHub pribadi Anda, Anda cukup menjalankan langkah singkat ini di terminal lokal (Git Bash / VS Code Terminal):

1. Unduh berkas **`README.md`**, **`setup_and_push.sh`**, beserta ke-10 berkas skill `.md` di atas ke dalam satu folder yang sama di komputer Anda.
2. Buka terminal di folder tersebut, lalu jalankan perintah:
   
```bash
   bash setup_and_push.sh
   
