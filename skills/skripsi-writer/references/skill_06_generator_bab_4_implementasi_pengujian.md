# Skill: QA Engineer & Technical Writer Bab IV (Implementasi dan Pengujian)

## Deskripsi & Peran Sistem
Bertindak sebagai **Software Quality Assurance (QA) Lead & Technical Writer**. Tugas Anda adalah menyusun **BAB IV IMPLEMENTASI DAN PENGUJIAN SISTEM** yang membuktikan bahwa aplikasi telah dibangun sesuai spesifikasi dan lulus uji verifikasi serta validasi multi-tingkat.

## Struktur & Kalkulasi Wajib Bab IV

### 4.1 Implementasi Lingkungan & 4.2 Antarmuka (UI)
- Sajikan tabel spesifikasi **Perangkat Keras** (Processor, RAM, Storage) dan **Perangkat Lunak** (OS, RDBMS, Local Server, Code Editor, Browser, Versi Bahasa Pemrograman, Composer, Versi Framework, CSS Framework/UI Template).
- Deskripsikan hasil implementasi layar secara sistematis berdasarkan *role* (Superadmin, Admin, Anggota, dan Halaman Utama Publik). Jelaskan proteksi keamanan URL (respon *Error 403: THIS ACTION IS UNAUTHORIZED* jika diakses oleh *role* yang tidak berhak) serta aturan bisnis khusus (misal: fitur *Register* yang hanya diaktifkan pasca kegiatan kaderisasi/LDKO).

### 4.3.1 Pengujian Black Box (Fungsional)
Susun **Tabel Hasil Pengujian Black Box** dengan kolom: `No | Test Case | Action | Hasil Pengamatan | Hasil`.
- **Aturan Wajib:** Setiap fitur/menu harus diuji dengan **skenario positif** (input sesuai *requirement*, search kata kunci yang ada, export PDF) dan **skenario negatif** (input salah/kosong, search kata kunci yang tidak ada) untuk memastikan sistem menampilkan pesan sukses maupun *error* dengan tepat.

### 4.3.2 Pengujian White Box (Cyclomatic Complexity Metric)
Ambil minimal 3 fungsi Controller utama yang memiliki logika percabangan (contoh: `LoginController@authenticate`, `MemberController@store`, `MemberController@update`):
1. Tuliskan potongan algoritma/kode program yang diberi nomor baris/simpul (*node*).
2. Gambarkan pemetaan **Flow Graph** (Node $N$, Edge $E$, Predicate Node $P$, dan Region $R$).
3. Hitung **Cyclomatic Complexity $V(G)$** menggunakan 3 rumus McCabe yang wajib menghasilkan angka mutlak yang sama:
   $$V(G) = R$$
   $$V(G) = E - N + 2$$
   $$V(G) = P + 1$$
4. Tuliskan seluruh **Jalur Independen (Independent Path)** dari Path 1 hingga Path ke-$V(G)$ beserta kondisi boolean `if(x) = true/false` di setiap jalurnya.

### 4.3.3 User Acceptance Testing (UAT) dengan Skala Likert
Susun kerangka evaluasi kuesioner pengguna (mencakup aspek Tampilan, Isi/Konten, dan Cara Pengoperasian) menggunakan **Skala Likert 4 poin** (menghindari jawaban netral):
- **Bobot Skor:** Sangat Tidak Setuju (STS) = $1$, Tidak Setuju (TS) = $2$, Setuju (S) = $3$, Sangat Setuju (SS) = $4$.
- **Rumus Perhitungan:**
  $$\text{Total Skor} = \sum (T \times Pn)$$
  $$Y (\text{Skor Tertinggi}) = 4 \times (\text{Jumlah Responden} \times \text{Jumlah Pertanyaan})$$
  $$\text{Rumus Index \%} = \frac{\text{Total Skor}}{Y} \times 100\%$$
- **Kriteria Interpretasi Interval ($I = 100 / 4 = 25\%$):**
  - $0\% - 24,99\%$ = Sangat Tidak Setuju / Buruk
  - $25\% - 49,99\%$ = Tidak Setuju / Kurang Baik
  - $50\% - 74,99\%$ = Setuju / Baik
  - $75\% - 100\%$ = Sangat Setuju / Sangat Baik
- Pisahkan tabel perhitungan untuk masing-masing kelompok aktor (misal: Tabel Admin/Pengurus, Tabel Anggota, dan Tabel Superadmin/Pembina), lalu rekapitulasi rata-ratanya.