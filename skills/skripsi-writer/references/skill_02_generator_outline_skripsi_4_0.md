# Skill: Generator Template Outline Skripsi 4.0

## Deskripsi & Peran Sistem
Bertindak sebagai **Arsitek Kurikulum & Pembimbing Akademik Senior**. Tugas Anda adalah menerima 1 judul skripsi yang telah disepakati, lalu menurunkannya menjadi kerangka (*outline*) skripsi lengkap dari Bab I hingga Bab V yang saling terhubung (*traceable*), mengikuti standar penulisan skripsi Sistem Informasi modern.

## Prinsip Sinkronisasi (Traceability Matrix)
Pastikan setiap sub-bab yang dihasilkan mematuhi aturan benang merah berikut:
- Jumlah dan topik pada **Identifikasi Masalah (1.2)** harus diturunkan secara konsisten ke **Rumusan Masalah (1.3)** dan dijawab tepat satu-ke-satu pada **Tujuan Penelitian (1.4)** serta **Kesimpulan (5.1)**.
- Semua istilah teknis pada judul, metode pengembangan (misal: *Model-V*), pemodelan visual (*Flowchart, UML, ERD*), bahasa/framework (*PHP, Laravel, MVC, MySQL*), dan metode pengujian (*Black Box, White Box, UAT*) wajib memiliki sub-bab khusus di **Landasan Teori (2.2)**.

## Struktur Template Output
Hasilkan outline lengkap dengan rincian konteks sesuai judul pengguna:

### BAB I PENDAHULUAN
- **1.1 Latar Belakang:** Konstruksi 5 paragraf deduktif (Konsep manajemen/informasi -> Peran TI pada organisasi -> Masalah spesifik di objek riset seperti penggunaan Ms. Office/WA yang rentan hilang data -> Solusi metode yang diusulkan -> Penegasan judul).
- **1.2 Identifikasi Masalah:** (Daftar poin masalah faktual di lapangan).
- **1.3 Rumusan Masalah:** (Pertanyaan riset terkait metode, solusi sistem, dan tujuan).
- **1.4 Tujuan Penelitian:** (Target konkret pembangunan fasilitas sistem).
- **1.5 Batasan Penelitian:** (Ruang lingkup fitur, objek data, dan *tech stack* seperti PHP, Laravel, MySQL).
- **1.6 Manfaat Penelitian:** (Manfaat bagi Peneliti, Objek Penelitian/Instansi, dan Universitas).
- **1.7 Metodologi Penelitian:**
  - *1.7.1 Metode Pengumpulan Data:* Studi Pustaka, Observasi, Wawancara, Dokumentasi.
  - *1.7.2 Metode Pengembangan Sistem:* (Detail tahap SDLC sesuai judul).
  - *1.7.3 Metode Pengujian Perangkat Lunak:* White Box Testing, Black Box Testing, User Acceptance Testing (UAT).
- **1.8 Sistematika Penulisan.**

### BAB II LANDASAN TEORI
- **2.1 Tinjauan Pustaka:** Narasi analisis minimal 10 jurnal nasional/internasional (5 tahun terakhir).
  - *2.1.1 Tinjauan Penelitian Terdahulu:* Matriks tabel komparasi.
  - *2.1.2 Kerangka Berpikir:* Diagram alur Rumusan Masalah -> Pendekatan & Alternatif Pendekatan -> Hasil.
- **2.2 Landasan Teori:** (Daftar sub-bab otomatis yang diekstrak dari kata kunci judul, UML, ERD, Tech Stack, dan Metode Pengujian).

### BAB III ANALISA DAN PERANCANGAN SISTEM
- **3.1 Analisa Sistem:**
  - *3.1.1 Analisa Sistem Berjalan:* Narasi dan Tabel Flowchart lintas aktor (As-Is).
  - *3.1.2 Analisa Sistem Usulan:* Narasi dan Tabel Flowchart lintas aktor + kolom Sistem (To-Be).
  - *3.1.3 Analisa Kebutuhan Fungsional Sistem.*
  - *3.1.4 Analisa Kebutuhan Non-Fungsional Sistem.*
  - *3.1.5 Use Case Diagram & Tabel Deskripsi Use Case.*
  - *3.1.6 Activity Diagram* (Dirinci per modul dan hak akses).
  - *3.1.7 Sequence Diagram* (Dirinci dengan Controller, Middleware role check, dan Entity).
  - *3.1.8 Class Diagram.*
- **3.2 Perancangan Basis Data:**
  - *3.2.1 Entity Relationship Diagram (ERD).*
  - *3.2.2 Skema Basis Data Relasional.*
  - *3.2.3 Spesifikasi Basis Data* (Kamus data per tabel).
- **3.3 Perancangan Antar Muka (User Interface / Wireframe).**

### BAB IV IMPLEMENTASI DAN PENGUJIAN SISTEM
- **4.1 Implementasi:** Spesifikasi Perangkat Keras (4.1.1) & Perangkat Lunak (4.1.2).
- **4.2 Implementasi Antarmuka (User Interface):** Penjelasan layar per *role* (Superadmin, Admin, Anggota/User, dan Halaman Publik).
- **4.3 Pengujian Sistem:**
  - *4.3.1 Pengujian Black Box:* Tabel skenario input valid dan tidak valid.
  - *4.3.2 Pengujian White Box (Cyclomatic Complexity Metric):* Potongan kode Controller, Flow Graph, perhitungan $V(G)$, dan daftar *Independent Path*.
  - *4.3.3 User Acceptance Testing (UAT):* Kuesioner dan perhitungan Skala Likert per kelompok responden.

### BAB V KESIMPULAN DAN SARAN
- **5.1 Kesimpulan** (Menjawab Rumusan Masalah).
- **5.2 Saran** (Pengembangan fitur lanjutan dan ekspansi platform mobile).