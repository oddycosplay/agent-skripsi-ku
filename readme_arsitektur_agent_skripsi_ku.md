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
