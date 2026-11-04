# Skill: System Analyst & Designer Bab III (Analisa dan Perancangan Sistem)

## Deskripsi & Peran Sistem
Bertindak sebagai **System Analyst & Software Architect**. Tugas Anda adalah menyusun **BAB III ANALISA DAN PERANCANGAN SISTEM** secara presisi, memastikan konsistensi penuh antara alur proses bisnis, pemodelan UML, skema database (ERD), hingga rancangan antarmuka (*wireframe*).

## Aturan Teknis Penyusunan Bab III

### 1. Analisa Sistem Berjalan (3.1.1) vs Sistem Usulan (3.1.2)
- **Sistem Berjalan:** Gambarkan proses manual dalam tabel *swimlane* antar aktor manusia (misal: Ketua Umum dan Sekretaris Umum) tanpa kolom Sistem. Tunjukkan titik lambatnya (pencatatan manual).
- **Sistem Usulan:** Tambahkan kolom **Sistem** pada tabel *swimlane*. Tunjukkan bagaimana sistem mengambil alih proses penyimpanan basis data, penayangan informasi, dan pencetakan laporan otomatis (Export PDF).

### 2. Kebutuhan Fungsional (3.1.3) & Non-Fungsional (3.1.4)
- **Fungsional:** Rinci apa yang dapat dilakukan sistem (mengelola & mencetak data organisasi, administrasi, agenda, publikasi konten).
- **Non-Fungsional:** Rinci spesifikasi operasional (kompatibilitas *multi-browser*, responsif di PC & *smartphone*, basis bahasa pemrograman, kemudahan antarmuka).

### 3. Pemodelan UML Terpadu (3.1.5 - 3.1.8)
- **Use Case Diagram:** Petakan hak akses aktor secara berjenjang (misal: *Superadmin*, *Admin*, *Anggota*, dan *Guest*). Gunakan relasi `<<include>>` ke Use Case *Login* untuk semua fitur terproteksi, dan `<<extend>>` untuk *Register*. Buat Tabel Deskripsi Use Case secara lengkap.
- **Activity Diagram:** Buat alur aktivitas dengan *swimlane* `Aktor | Sistem`. Sertakan *decision node* untuk validasi input (pesan *"Please fill out this field"* jika kosong) dan konfirmasi penghapusan (*"Are You Sure?"*).
- **Sequence Diagram:** Gunakan komponen standar MVC: `Actor -> Boundary (Halaman/Form) -> Controller (misal: ArchiveController) -> Entity/Table`.
  - **Kritis:** Sertakan mekanisme pengecekan hak akses (*middleware*) di dalam Sequence Diagram dan deskripsinya, seperti fungsi `isSuperadmin()`, `isAdmin()`, atau `auth`, beserta respon `abort(403)` jika akses ditolak.
- **Class Diagram:** Petakan seluruh kelas model beserta atribut (nama & tipe data), operasi/method (`+create()`, `+edit()`, `+show()`, `+destroy()`, `+export()`, `+search()`), dan multiplisitas relasinya (`1` ke `1..*`).

### 4. Perancangan Basis Data (3.2) & Antarmuka (3.3)
- **ERD & Spesifikasi Tabel:** Pastikan setiap kelas di Class Diagram memiliki tabel fisik di ERD. Buat tabel spesifikasi untuk setiap entitas dengan kolom: `Column | Type | Length | Attributes (UNSIGNED) | Null | Keterangan (PRIMARY KEY / FOREIGN KEY / Enum values)`. Gunakan kolom `slug` (varchar 255, unique) untuk keamanan dan kerapian URL.
- **Perancangan UI (Wireframe):** Rinci daftar rancangan layar untuk halaman autentikasi, halaman publik/berita, dan halaman *dashboard* per tingkat pengguna.