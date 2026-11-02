# Standar Penulisan Ilmiah, Parafrase Akademik, Sitasi, dan Filter Anti-Slop

Dokumen referensi ini mengatur gaya bahasa akademik, teknik parafrase bebas plagiasi (Turnitin-safe), tata cara sitasi ilmiah (APA 7th Edition, IEEE, dan Standar Acuan UNPAM), serta aturan ketat pencegahan gaya bahasa robotik AI (*Anti-Slop*).

---

## 1. Kaidah Bahasa Indonesia Ilmiah (EYD V & KBBI)

1. **Sudut Pandang Objektif & Impersonal:**
   - Dilarang menggunakan kata ganti orang pertama atau kedua seperti *"saya"*, *"aku"*, *"kami"*, *"kita"*, atau *"Anda"* di dalam tubuh utama skripsi (Bab I s.d. Bab V).
   - Gunakan bentuk pasif (awalan *di-* atau *ter-*) atau sebutkan istilah **"penulis"** / **"peneliti"** secara terbatas bila diperlukan.
   - *Contoh Salah:* "Kami membuat tabel database menggunakan MySQL agar sistem kami cepat."
   - *Contoh Benar:* "Perancangan basis data direalisasikan menggunakan Relational Database Management System (RDBMS) MySQL guna menjamin integritas dan efisiensi akses data transaksi."
2. **Penulisan Istilah Asing:**
   - Seluruh istilah asing yang belum diserap ke dalam KBBI wajib ditulis dengan huruf miring (*italics*), seperti *use case diagram*, *black box testing*, *stakeholder*, *framework*, *online booking*, *human error*.
3. **Kepadatan dan Kohesi Paragraf:**
   - Satu paragraf akademik minimal terdiri atas **4 hingga 6 kalimat** yang memuat: (1) Kalimat utama (*topic sentence*), (2) Kalimat penjelas/elaborasi konseptual, (3) Bukti data empiris atau kutipan referensi, dan (4) Kalimat analisis atau transisi ke paragraf berikutnya.
   - Hindari paragraf yang hanya terdiri dari 1-2 kalimat pendek yang terputus-putus.

---

## 2. Filter Anti-Slop untuk Penulisan Ilmiah (Wajib Diterapkan)

Untuk memastikan naskah skripsi terasa ditulis secara autentik oleh akademisi manusia dan lolos uji kemiripan (*similarity check* / Turnitin), terapkan aturan berikut tanpa pengecualian:

1. **Larangan Karakter Em Dash:**
   - **DILARANG KERAS** menggunakan karakter *em dash* dalam kalimat mana pun. Gunakan tanda koma (`,`), titik dua (`:`), titik koma (`;`), atau tanda kurung `()` sesuai kaidah EYD V.
2. **Larangan Frasa Klise AI (*AI Slop Phrases*):**
   - Hindari pembuka dan penutup generik khas AI seperti:
     - *"Di era digital yang berkembang sangat pesat dewasa ini..."* (Ganti dengan konteks industri atau fenomena spesifik objek penelitian).
     - *"Tidak dapat dipungkiri bahwa..."* / *"Seperti dua sisi mata uang..."*
     - *"Secara keseluruhan, dapat disimpulkan dengan sangat jelas bahwa..."*
     - *"Hadir sebagai solusi revolusioner yang tanpa batas..."*
3. **Larangan Fabrikasi Referensi & Data (Zero Hallucination Gate):**
   - **DILARANG** mengarang nama penulis, tahun terbit, judul jurnal, DOI, atau angka statistik fiktif.
   - Jika suatu data empiris (misalnya jumlah transaksi bulanan pada instansi atau nama kepala bagian) belum diberikan oleh pengguna, wajib tulis secara eksplisit: `"Belum ditentukan pada requirement."` atau gunakan penanda jujur yang jelas untuk diisi pengguna.
   - Saat diminta mencari literatur/jurnal, gunakan alat pencarian web (`search_web`) untuk mengambil jurnal nyata yang terpublikasi (Google Scholar, Garuda, SINTA, IEEE, DOAJ) dan cantumkan sumber aslinya.

---

## 3. Teknik Parafrase Akademik (Lolos Turnitin < 20%)

Saat melakukan parafrase dari jurnal atau buku referensi, jangan sekadar mengganti kata dengan sinonim per kata (*word-for-word synonym swapping*), melainkan gunakan metode **Sintesis Tiga Langkah**:

1. **Restrukturisasi Sintaksis:** Ubah struktur kalimat dari aktif ke pasif (atau sebaliknya), atau ubah urutan klausa sebab-akibat tanpa mengubah makna ilmiah aslinya.
2. **Abstraksi Konseptual:** Tangkap ide inti dari temuan peneliti sebelumnya, lalu tuliskan kembali menggunakan terminologi teknis yang selaras dengan variabel penelitian saat ini.
3. **Integrasi Analitis:** Gabungkan kutipan dengan analisis relevansinya terhadap objek penelitian.
   - *Teks Asli:* "Metode Prototype sangat cocok digunakan ketika pengguna belum mengetahui secara pasti kebutuhan sistem di awal pengembangan (Pressman, 2015)."
   - *Hasil Parafrase Akademik:* "Pendekatan *Prototype Model* dipilih karena kemampuannya dalam mengakomodasi ketidakpastian spesifikasi kebutuhan pengguna pada fase awal rekayasa perangkat lunak melalui evaluasi purwarupa secara iteratif (Pressman, 2015)."

---

## 4. Standar Sitasi dan Daftar Pustaka

Agent wajib konsisten menggunakan gaya sitasi yang diminta pengguna (default: **APA 7th Edition** untuk naskah modern UNPAM, atau **Sistem Acuan UNPAM / IEEE** bila diminta khusus).

### A. Gaya APA Edisi ke-7 (American Psychological Association)
* **Kutipan Dalam Teks (*In-Text Citation*):**
  - **Kutipan Naratif (di awal/tengah kalimat):**
    - 1 Penulis: Menurut Laudon (2020), sistem informasi merupakan...
    - 2 Penulis: Pressman dan Maxim (2020) menyatakan bahwa...
    - >= 3 Penulis: Pratama dkk. (2023) atau Pratama *et al.* (2023) mengemukakan bahwa...
  - **Kutipan Parentetis (di akhir kalimat):**
    - `... meningkatkan efisiensi operasional (Laudon, 2020).`
    - `... melalui pengujian fungsional (Pressman & Maxim, 2020; Pratama dkk., 2023).`
* **Format Daftar Pustaka APA 7th:**
  - **Jurnal Ilmiah:**
    `Nama Belakang, Inisial. (Tahun). Judul artikel jurnal dalam huruf kecil kecuali awal kalimat. *Nama Jurnal*, *Volume*(Nomor), Halaman awal-akhir. https://doi.org/xxxx`
  - **Buku Teks:**
    `Nama Belakang, Inisial. (Tahun). *Judul buku dicetak miring* (Edisi ke-x). Nama Penerbit.`

### B. Gaya Petunjuk Teknis Acuan Klasik UNPAM
* **Kutipan Dalam Teks:**
  - Mencantumkan nama akhir penulis dan tahun/halaman: `(Harandi 152)` atau `(Wismoyo dkk. 1990: 260)`.
* **Daftar Acuan:**
  - Buku: `Atkinson, L.V. *Pascal Programming*. New York: Free Press, 1980.`
  - Jurnal/Majalah: `Bernstein, P.A. and D.W. Shipman. "The Correctness of Concurrency Control Mechanism in a System for Distributed Database." *ACM Trans on Database System*, 5 (1980), 52-68.`

### C. Gaya IEEE (Institute of Electrical and Electronics Engineers)
* **Kutipan Dalam Teks:** Menggunakan nomor urut dalam kurung siku `[1]`, `[2, 3]`, `[4]-[6]`.
* **Daftar Pustaka:** Diurutkan berdasarkan urutan kemunculan sitasi di dalam naskah.
