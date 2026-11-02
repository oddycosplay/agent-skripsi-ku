# Standar Dokumentasi Teknis, Perancangan Sistem (UML & ERD), dan Pengujian

Dokumen referensi ini mengatur tata cara penyusunan dokumentasi teknis rekayasa perangkat lunak dan sistem informasi pada Bab III dan Bab IV skripsi agar seluruh alur **sinkron 100%** antara kebutuhan fungsional, *workflow*, UML, basis data (ERD & Struktur Tabel), UI, API, autentikasi, dan tabel pengujian.

---

## 1. Aturan Sinkronisasi Arsitektur (Mandatory Sync Gate)

Setiap artefak perancangan yang dibuat di dalam skripsi wajib mematuhi aturan keterlacakan (*traceability*) berikut:
1. Setiap masalah pada **Bab I (Identifikasi Masalah)** harus terjawab oleh minimal satu kebutuhan fungsional pada **Analisis Kebutuhan Sistem**.
2. Setiap kebutuhan fungsional harus direpresentasikan sebagai *Use Case* di dalam **Use Case Diagram**.
3. Setiap *Use Case* utama wajib memiliki:
   - **Tabel Deskripsi / Skenario Use Case**
   - **Activity Diagram** (dengan pemisahan lajur *swimlane* Aktor dan Sistem)
   - **Sequence Diagram** (Aktor -> Boundary/UI -> Control/Controller -> Entity/Model)
   - **Rancangan Antarmuka (UI/Wireframe)**
   - **Skenario Pengujian Black Box Testing** pada Bab IV.
4. Setiap objek *Entity* pada **Sequence Diagram** dan **Class Diagram** wajib memiliki entitas yang bersesuaian pada **ERD**, **Relasi Tabel**, dan **Spesifikasi Struktur Tabel Basis Data**.

---

## 2. Standar Pemodelan UML (Unified Modeling Language)

### A. Use Case Diagram & Tabel Skenario Use Case
Setiap gambar *Use Case Diagram* wajib diikuti dengan penjelasan aktor dan tabel skenario untuk masing-masing *use case* menggunakan format berikut:

| Atribut | Deskripsi |
| :--- | :--- |
| **Nama Use Case** | [Nama Fungsionalitas, misal: Mengelola Pemesanan / Reservasi] |
| **Aktor** | [Aktor Utama dan Aktor Pendukung] |
| **Deskripsi Singkat** | [Penjelasan tujuan fungsionalitas dalam 1-2 kalimat] |
| **Prakondisi (*Pre-condition*)** | [Kondisi yang harus terpenuhi sebelum use case dimulai, misal: Aktor telah berhasil login] |
| **Pascakondisi (*Post-condition*)** | [Kondisi sistem dan basis data setelah use case selesai dijalankan] |

**Alur Utama (*Basic Flow*) & Alur Alternatif (*Alternative/Exception Flow*):**

| Langkah | Aksi Aktor | Reaksi Sistem |
| :---: | :--- | :--- |
| 1 | Membuka halaman menu layanan/fitur. | Menampilkan daftar data atau formulir masukan. |
| 2 | Mengisi data pada formulir dan menekan tombol simpan/kirim. | Memvalidasi kelengkapan dan format data masukan. |
| 3 | - | *Alur Alternatif 3a (Data Tidak Valid):* Menampilkan pesan peringatan kesalahan validasi dan kembali ke langkah 2. |
| 4 | - | Menyimpan data ke dalam tabel basis data dan menampilkan notifikasi berhasil. |

---

### B. Activity Diagram
- Wajib memisahkan aktivitas antara **Aktor** dan **Sistem** (dan pihak eksternal bila ada, seperti *Payment Gateway*).
- Dimulai dengan satu *Initial Node* (lingkaran hitam penuh) dan diakhiri dengan *Activity Final Node* (lingkaran mata sapi).
- Setiap percabangan keputusan (*Decision Node*) wajib memiliki minimal dua jalur keluar dengan label kondisi yang tegas (misal: `[Valid]` dan `[Tidak Valid]`).

---

### C. Sequence Diagram
- Gunakan komponen standar MVC / ECB (*Entity-Control-Boundary*):
  1. `Actor` (Pengguna/Admin)
  2. `Boundary` (Halaman UI / View)
  3. `Control` (Controller / Service Logic)
  4. `Entity` (Model / Tabel Basis Data)
- Penomoran pesan (*message numbering*: `1: inputData()`, `2: validate()`, `3: save()`, `4: returnStatus()`) harus berurutan dari atas ke bawah.

---

### D. Class Diagram
- Setiap kelas memuat tiga kompartemen:
  1. **Nama Kelas** (misal: `User`, `Booking`, `Vehicle`, `Payment`)
  2. **Atribut** beserta visibilitas dan tipe datanya (`- id: bigint`, `- status: enum`)
  3. **Metode/Operasi** (`+ createBooking()`, `+ verifyPayment()`)
- Cantumkan kardinalitas/multiplisitas relasi secara eksplisit (`1`, `1..*`, `0..*`, `0..1`).

---

## 3. Standar Perancangan Basis Data (ERD & Spesifikasi Tabel)

1. **Entity Relationship Diagram (ERD):**
   - Menunjukkan entitas, atribut (beserta penanda *Primary Key* dan *Foreign Key*), relasi (kata kerja aktif/pasif), dan derajat kardinalitas (*One-to-One*, *One-to-Many*, *Many-to-Many*).
2. **Spesifikasi Tabel Basis Data:**
   Setiap tabel wajib didokumentasikan dengan struktur standar berikut:

   **Nama Tabel:** `nama_tabel`
   **Primary Key:** `id`
   **Foreign Key:** `user_id` (referensi ke `users.id`)
   **Fungsi Tabel:** Menyimpan data transaksi ...

| No | Nama Field | Tipe Data | Ukuran | Constraint / Keterangan |
| :---: | :--- | :--- | :---: | :--- |
| 1 | `id` | `BIGINT` | 20 | *Primary Key*, *Auto Increment*, *Not Null* |
| 2 | `user_id` | `BIGINT` | 20 | *Foreign Key* (`users.id`), *Not Null* |
| 3 | `kode_transaksi` | `VARCHAR` | 30 | *Unique*, *Not Null* |
| 4 | `status` | `ENUM` | - | `'pending'`, `'confirmed'`, `'completed'`, `'cancelled'` |
| 5 | `created_at` | `TIMESTAMP` | - | Waktu pembuatan rekaman data |
| 6 | `updated_at` | `TIMESTAMP` | - | Waktu pembaruan rekaman data |

---

## 4. Standar Pengujian Perangkat Lunak (Bab IV)

### A. Black Box Testing (Equivalence Partitioning & Boundary Value Analysis)
Sajikan pengujian setiap modul utama (Autentikasi, Manajemen Data Master, Transaksi Utama, Pelaporan) dalam tabel terstruktur:

| ID Uji | Modul / Fitur | Skenario Pengujian | Data Masukan (*Test Data*) | Hasil yang Diharapkan (*Expected Result*) | Hasil Pengamatan (*Actual Result*) | Kesimpulan |
| :---: | :--- | :--- | :--- | :--- | :--- | :---: |
| TC-01 | Login | Login dengan kredensial valid | Email terdaftar, Password benar | Sistem mengautentikasi sesi dan mengarahkan ke halaman Dashboard | Mengarahkan ke halaman Dashboard sesuai hak akses | **Valid** |
| TC-02 | Login | Login dengan password salah | Email terdaftar, Password salah | Sistem menolak akses dan menampilkan pesan *"Email atau kata sandi salah"* | Menampilkan pesan kesalahan dan tetap di halaman Login | **Valid** |

### B. White Box Testing (Basis Path Testing)
Jika penelitian menyertakan *White Box Testing*:
1. Konversi potongan algoritma/fungsi utama menjadi urutan nomor baris prosedur.
2. Gambarkan **Flowgraph** (Node dan Edge).
3. Hitung **Cyclomatic Complexity** $V(G)$ dengan rumus:
   - $V(G) = E - N + 2$ (di mana $E$ = jumlah busur/*edge*, $N$ = jumlah simpul/*node*), atau
   - $V(G) = P + 1$ (di mana $P$ = jumlah *predicate node* / simpul keputusan).
4. Tentukan himpunan **Independent Path** sejumlah nilai $V(G)$ dan uji setiap jalur dengan kasus uji nyata.
