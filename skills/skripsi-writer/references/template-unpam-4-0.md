# Standar Format dan Sistematika Template Skripsi UNPAM 4.0

Dokumen referensi ini mendefinisikan standar tata tulis, tipografi, struktur dokumen, dan sistematika penulisan Proposal (Pra-UAPS) maupun Laporan Skripsi penuh berdasarkan pedoman Universitas Pamulang (UNPAM) 4.0, baik untuk rumpun Ilmu Komputer (Sistem Informasi / Teknik Informatika) maupun rumpun ilmu umum (Kuantitatif, Kualitatif, dan R&D).

---

## 1. Spesifikasi Kertas, Tipografi, dan Tata Letak

| Parameter | Ketentuan Standar UNPAM |
| :--- | :--- |
| **Ukuran & Jenis Kertas** | HVS Putih A4 (210 mm x 297 mm), minimal 70-80 gram, cetak satu sisi (tidak bolak-balik). |
| **Margin Pengetikan** | **Tepi Kiri (Left):** 4 cm<br>**Tepi Atas (Top):** 3 cm (atau 4 cm sesuai pedoman prodi spesifik)<br>**Tepi Kanan (Right):** 3 cm<br>**Tepi Bawah (Bottom):** 3 cm |
| **Huruf (Font) Naskah** | `Times New Roman`, ukuran **12 pt** untuk seluruh teks utama. |
| **Huruf (Font) Sampul/Hardcover** | `Tahoma` atau `Times New Roman` (sesuai ketentuan fakultas), kapital penuh (*UPPERCASE*), rata tengah (*centered alignment*), tinta kuning emas di atas sampul *hardcover*. |
| **Spasi Baris (Line Spacing)** | **Spasi 2 (Ganda)** untuk laporan skripsi akhir atau **Spasi 1,5** untuk proposal skripsi (Pra-UAPS).<br>**Spasi 1 (Tunggal)** untuk Abstrak, kutipan langsung >= 4 baris, judul tabel/gambar, dan entri Daftar Pustaka. |
| **Perataan Teks (Alignment)** | Rata kanan-kiri (*Justified*) untuk seluruh paragraf isi. |
| **Alinea Baru (Indentasi)** | Masuk 5 ketukan (atau *First Line Indent* sekitar 1,25 cm) dari batas kiri bidang pengetikan. |
| **Penomoran Halaman** | **Bagian Kepala:** Angka Romawi kecil (`i, ii, iii, iv, ...`) di bagian tengah bawah.<br>**Bagian Tubuh & Ekor:** Angka Arab (`1, 2, 3, ...`) di sudut **kanan atas** (berjarak 1,5 cm dari atas dan 3 cm dari kanan), **kecuali** halaman awal setiap BAB baru ditempatkan di **tengah bawah** (1,5 cm dari tepi bawah). |
| **Penomoran Bab & Sub-bab** | **Judul Bab:** Angka Romawi besar (`BAB I`, `BAB II`, dst.), huruf kapital penuh, tebal (*bold*), simetris di tengah.<br>**Sub-bab:** Angka Arab dipisah titik tanpa titik di akhir (`1.1`, `1.2`, `1.2.1`), *Title Case* (huruf kapital di awal kata kecuali kata tugas/sambung). |

---

## 2. Struktur Bagian Kepala (Preliminaries)

Urutan halaman pada Bagian Kepala adalah sebagai berikut:

1. **Halaman Sampul (Cover Luar):** Memuat Judul Skripsi (kapital), jenis dokumen (`SKRIPSI` atau `SEMINAR PROPOSAL`), Logo Universitas Pamulang, teks `Oleh:`, Nama Mahasiswa, NIM, Nama Program Studi, Nama Fakultas, `UNIVERSITAS PAMULANG`, Tempat (`TANGERANG SELATAN` / `PAMULANG`), dan Tahun.
2. **Halaman Judul Dalam:** Sama dengan halaman sampul, dicetak di atas kertas HVS putih dengan keterangan spesifikasi: *"Diajukan Untuk Melengkapi Salah Satu Syarat Memperoleh Gelar Sarjana ..."*.
3. **Lembar Pernyataan Bukan Plagiat:** Berisi identitas mahasiswa (NIM, Nama, Program Studi, Fakultas, Jenjang Pendidikan), judul skripsi, pernyataan keaslian karya ilmiah, tanggal, tanda tangan di atas Materai 10.000.
4. **Lembar Persetujuan:** Memuat identitas mahasiswa, judul skripsi, pernyataan *"Skripsi ini telah diperiksa dan disetujui untuk diajukan sidang"*, ditandatangani oleh Dosen Pembimbing (beserta NIDN) dan diketahui oleh Ketua Program Studi (beserta NIDN).
5. **Lembar Pengesahan:** Memuat pernyataan kelulusan di hadapan dewan penguji, ditandatangani oleh Penguji I, Penguji II, Dosen Pembimbing, dan Ketua Program Studi lengkap dengan NIDN.
6. **Kata Pengantar:** Maksimal 1-2 halaman, berisi ungkapan syukur, tujuan penulisan skripsi, serta ucapan terima kasih berurutan mulai dari:
   - Ketua Yayasan Sasmita Jaya
   - Rektor Universitas Pamulang
   - Dekan Fakultas terkait Universitas Pamulang
   - Ketua Program Studi terkait Universitas Pamulang
   - Dosen Pembimbing Skripsi
   - Pihak instansi/objek penelitian dan keluarga/rekan.
7. **Abstrak (Bahasa Indonesia) & Abstract (Bahasa Inggris):**
   - Maksimal **200 kata** (1 spasi), tidak mencantumkan kutipan/sitasi.
   - Terdiri dari 3-4 paragraf ringkas yang mencakup: (a) Konteks & masalah utama beserta ruang lingkupnya, (b) Metode penelitian dan metode pengembangan/analisis yang digunakan, (c) Hasil utama yang diperoleh, serta (d) Kesimpulan dan kata kunci (*Keywords*: 3-5 frasa).
   - Di bagian bawah dicantumkan metadata fisik: `xi + [jumlah] halaman; [jumlah] gambar; [jumlah] tabel; [jumlah] lampiran; Daftar acuan: [jumlah] ([tahun awal]-[tahun akhir])`.
8. **Daftar Isi, Daftar Gambar, Daftar Tabel, Daftar Simbol, dan Daftar Lampiran.**

---

## 3. Sistematika Bagian Tubuh (BAB I - BAB V)

Agent mendukung dua varian struktur utama sesuai pedoman UNPAM 4.0:
- **Varian A:** Rumpun Ilmu Komputer / Sistem Informasi / Teknik Informatika (Pengembangan Sistem, Rekayasa Perangkat Lunak, Algoritma/SPK/Data Mining).
- **Varian B:** Rumpun Penelitian Umum (Kuantitatif, Kualitatif, Bisnis, Hukum, Sosial, Sastra, Pendidikan).

### BAB I: PENDAHULUAN
* **1.1 Latar Belakang Masalah**
  - Disusun dengan pola deduktif (Umum ke Khusus) atau induktif (Khusus ke Umum) secara kohesif dan mengalir antarparagraf.
  - Wajib memuat struktur: **Fenomena/Konteks Industri -> Objek Penelitian -> Masalah Spesifik pada Objek (didukung data/fakta empiris) -> Dampak jika masalah tidak diselesaikan -> Solusi dan Metode yang ditawarkan -> Keunggulan metode berdasarkan referensi jurnal terdahulu -> Kontribusi penelitian**.
* **1.2 Identifikasi Masalah**
  - Rincian masalah faktual yang ditemukan pada objek penelitian berdasarkan uraian latar belakang (ditulis dalam butir-butir analitis).
* **1.3 Rumusan Masalah**
  - Pertanyaan penelitian (*research questions*) yang terukur, spesifik, dan selaras dengan identifikasi masalah (menggunakan kalimat tanya: *Bagaimana merancang...*, *Bagaimana menerapkan...*, *Seberapa besar pengaruh...*).
* **1.4 Batasan Masalah**
  - Ruang lingkup penelitian (cakupan fitur/modul, metode, objek/wilayah, platform teknologi, pengguna, dan data yang dibahas maupun yang tidak dibahas) agar penelitian terfokus.
* **1.5 Tujuan Penelitian**
  - Pernyataan deklaratif yang menjawab setiap poin pada Rumusan Masalah secara sinkron (1-ke-1).
* **1.6 Manfaat Penelitian**
  - Dibagi menjadi Manfaat Teoritis/Akademis (bagi Universitas Pamulang, pengembangan ilmu, dan peneliti selanjutnya) serta Manfaat Praktis (bagi instansi/objek penelitian dan pengguna).
* **1.7 Metodologi Penelitian** *(Opsional di Bab I jika dirinci penuh pada Bab III)*
  - Ringkasan metode pengumpulan data (Observasi, Wawancara, Studi Pustaka, Kuesioner) dan metode pengembangan sistem/analisis data.
* **1.8 Sistematika Penulisan**
  - Uraian ringkas cakupan isi dari BAB I hingga BAB V.

---

### BAB II: TINJAUAN PUSTAKA / LANDASAN TEORI
* **2.1 Penelitian Terdahulu (*State of the Art*)**
  - Mengkaji minimal **5 hingga 10 jurnal ilmiah** (nasional terakreditasi SINTA atau internasional bereputasi) dalam kurun waktu **5 tahun terakhir**.
  - Disajikan dalam bentuk uraian kritis per penelitian dan **Tabel Matriks Perbandingan Penelitian Terdahulu** (No, Nama Peneliti & Tahun, Judul Penelitian, Metode, Hasil/Temuan Utama, Perbedaan / *Research Gap* dengan penelitian saat ini).
* **2.2 Landasan Teori**
  - Memaparkan teori-teori dasar, konsep domain permasalahan, metode analisis/algoritma (beserta rumus matematis jika ada), metode pengembangan perangkat lunak (Waterfall, Prototype, Agile, Scrum, RAD), perangkat pemodelan (UML, ERD), serta teknologi/bahasa pemrograman yang digunakan.
  - Setiap sub-bab teori wajib menyertakan sitasi akademik yang valid dan menghubungkannya dengan konteks penelitian (bukan sekadar salin-tempel definisi kamus).
* **2.3 Kerangka Pemikiran (dan Hipotesis bila Kuantitatif)**
  - Narasi logis yang menghubungkan kondisi awal/masalah, pendekatan/metode, hingga solusi/hasil akhir, dilengkapi dengan **Bagan Kerangka Pemikiran** (dapat divisualisasikan dengan Mermaid Flowchart).

---

### BAB III: METODOLOGI PENELITIAN / ANALISIS DAN PERANCANGAN
*(Catatan: Pada template UNPAM Sistem Informasi / Teknik Informatika terbaru, Bab III dapat berupa **Metode Penelitian** atau **Analisa dan Perancangan**, disesuaikan dengan ketetapan prodi mahasiswa).*

* **Format Bab III sebagai Metodologi Penelitian:**
  - **3.1 Tahapan Penelitian:** Diagram alir (*flowchart*) tahapan riset dari awal hingga akhir beserta penjelasannya.
  - **3.2 Waktu dan Tempat Penelitian:** Lokasi/alamat instansi objek penelitian dan tabel jadwal penelitian (*Gantt Chart* / *Milestone* aktivitas bulanan/mingguan).
  - **3.3 Metode Pengumpulan Data:** Observasi, Wawancara (beserta instrumen elisitasi), Studi Pustaka, Kuesioner.
  - **3.4 Metode Pengembangan Sistem / Metode Analisis Data:** Penjelasan tahapan SDLC (mis. tahapan *Prototype*, *Agile*, atau *Waterfall*) atau tahapan perhitungan algoritma/statistik yang diterapkan langsung pada skenario penelitian.
  - **3.5 Analisis Kebutuhan Sistem:** Analisis Sistem Berjalan (*Activity Diagram* sistem berjalan), Analisis Masalah (mis. *Fishbone* atau *PIECES*), Kebutuhan Fungsional & Non-Fungsional (atau Elisitasi Tahap I, II, III, dan *Final Draft*).

* **Format Bab III sebagai Analisis dan Perancangan Sistem:**
  - **3.1 Analisis Sistem:** Analisis Sistem Berjalan, Analisis Masalah, Analisis Kebutuhan Fungsional & Non-Fungsional.
  - **3.2 Perancangan Basis Data:** Normalisasi (1NF, 2NF, 3NF), *Entity Relationship Diagram* (ERD), Transformasi/Relasi Tabel, dan Spesifikasi Struktur Tabel Basis Data (Nama Field, Tipe Data, Ukuran, Keterangan/Constraint).
  - **3.3 Perancangan Aplikasi (UML):**
    - *Use Case Diagram* beserta Tabel Skenario/Deskripsi *Use Case* (Aktor, Prakondisi, Alur Normal, Alur Alternatif, Pascakondisi).
    - *Activity Diagram* Sistem Usulan (memisahkan *swimlane* Aktor dan Sistem).
    - *Sequence Diagram* untuk setiap *Use Case* utama (Actor, Boundary/View, Control/Controller, Entity/Model).
    - *Class Diagram* yang sinkron dengan struktur tabel dan arsitektur aplikasi.
  - **3.4 Perancangan Antarmuka (*User Interface / Wireframe*):** Rancangan tata letak layar untuk setiap halaman utama.

---

### BAB IV: HASIL DAN PEMBAHASAN / IMPLEMENTASI DAN PENGUJIAN
* **4.1 Lingkungan Implementasi Sistem**
  - Spesifikasi Perangkat Keras (*Hardware*) dan Perangkat Lunak (*Software*) pengembangan maupun operasional.
* **4.2 Implementasi Basis Data dan Sistem / Antarmuka**
  - Dokumentasi implementasi tabel basis data dan tangkapan layar (*screenshot*) antarmuka sistem yang telah dibangun beserta penjelasan alur fungsionalnya.
  - *(Jika Bab III hanya berisi Metodologi, maka seluruh Perancangan UML, ERD, Struktur Tabel, dan Rancangan Layar dimuat terlebih dahulu di awal Bab IV sebelum sub-bab Implementasi).*
* **4.3 Pengujian Sistem (*System Testing*)**
  - **Black Box Testing:** Pengujian fungsional berbasis skenario uji (*Test Case ID, Modul/Fitur, Skenario Uji, Data Masukan, Hasil yang Diharapkan, Hasil Pengamatan, Status Kesimpulan Valid/Tidak Valid*).
  - **White Box Testing (Bila diperlukan):** *Flowgraph*, perhitungan *Cyclomatic Complexity* $V(G) = E - N + 2$, *Independent Path*, dan uji jalur logika utama.
  - **Pengujian Pengguna / UAT (User Acceptance Testing) atau Perhitungan Metode:** Hasil kuesioner *usability* (mis. SUS / skala Likert) atau pembuktian perhitungan manual vs sistem.
* **4.4 Pembahasan Hasil Penelitian**
  - Interpretasi kritis terhadap hasil implementasi dan pengujian, menjawab bagaimana solusi yang dibangun menyelesaikan masalah pada Bab I serta membandingkannya dengan penelitian terdahulu pada Bab II.

---

### BAB V: PENUTUP
* **5.1 Kesimpulan**
  - Berisi jawaban ringkas, padat, dan tegas atas setiap butir **Rumusan Masalah** pada Bab I dan **Tujuan Penelitian**, didasarkan sepenuhnya pada bukti hasil di Bab IV. Jumlah poin kesimpulan harus sinkron dengan jumlah rumusan masalah.
* **5.2 Saran**
  - Rekomendasi konkret dan aplikatif untuk pengembangan sistem/penelitian selanjutnya (mis. penambahan fitur yang masuk dalam batasan masalah, peningkatan keamanan, integrasi platform baru) serta saran operasional bagi instansi objek penelitian.

---

## 4. Ketentuan Tabel, Gambar, dan Daftar Pustaka

1. **Penomoran dan Judul Gambar:**
   - Nomor gambar menggunakan angka Arab sesuai bab (`Gambar 1.1`, `Gambar 3.1`, dst.).
   - Judul gambar diletakkan **di bawah gambar**, rata tengah (*center*), menggunakan huruf kapital di awal kata, tanpa diakhiri tanda titik. Jika dikutip dari sumber lain, cantumkan `[Sumber: Nama, Tahun]` atau `(Sumber: Data Olahan Penulis, Tahun)`.
2. **Penomoran dan Judul Tabel:**
   - Nomor tabel menggunakan angka Arab sesuai bab (`Tabel 2.1`, `Tabel 4.1`, dst.).
   - Judul tabel diletakkan **di atas tabel**, rata tengah atau rata kiri sesuai konsistensi template prodi. Jika tabel terpotong ke halaman berikutnya, cantumkan `Tabel X.Y (Lanjutan)` beserta header kolomnya.
3. **Daftar Pustaka (Daftar Acuan):**
   - Disusun alfabetis berdasarkan nama belakang penulis pertama, spasi 1, dengan indentasi menggantung (*hanging indent* 5 ketukan pada baris kedua dan seterusnya).
   - Setiap referensi yang tertulis di Daftar Pustaka **wajib** tercantum kutipannya di dalam teks tubuh skripsi, dan sebaliknya.
