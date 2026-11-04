<div align="center">

# Agent Skripsi Ku

### Asisten penulisan akademik berbasis AI untuk proses penelitian yang lebih terarah.

Mendampingi penyusunan proposal dan skripsi, kajian pustaka, serta dokumentasi perancangan sistem dalam satu alur kerja yang terstruktur.

[Mulai Menggunakan](#mulai-menggunakan) · [Fitur](#fitur-utama) · [Contoh Prompt](#contoh-prompt)

</div>

---

## Tentang Proyek

**Agent Skripsi Ku** adalah paket *skill* AI yang membantu mahasiswa dan peneliti mengelola pekerjaan akademik secara lebih sistematis. Proyek ini mengemas panduan penulisan, prinsip kejujuran akademik, dan dokumentasi rekayasa sistem dalam *skill* bernama `skripsi-writer`.

Skill ini dirancang sebagai pendamping proses, bukan pengganti penilaian akademik, arahan dosen pembimbing, maupun verifikasi sumber. Pengguna tetap bertanggung jawab memeriksa akurasi data, kutipan, referensi, dan kesesuaian naskah dengan pedoman institusi.

## Fitur Utama

- **Alur penulisan proposal dan skripsi:** panduan terstruktur dari Bab I hingga Bab V.
- **Kajian pustaka dan sintesis penelitian:** membantu menyusun tinjauan penelitian terdahulu dan mengidentifikasi celah penelitian berdasarkan sumber yang dapat diverifikasi.
- **Penulisan akademik:** mendukung parafrase, konsistensi istilah, dan penggunaan bahasa Indonesia formal. Hasil tetap perlu ditinjau dan disunting oleh penulis.
- **Sitasi dan referensi:** mendukung pengelolaan sitasi dengan gaya APA, IEEE, dan acuan UNPAM.
- **Dokumentasi sistem:** membantu menyusun artefak UML, ERD, rancangan basis data, serta skenario pengujian.
- **Pemeriksaan konsistensi:** mendorong keselarasan antara masalah, tujuan, kebutuhan, rancangan, dan hasil penelitian.

> **Catatan akademik:** Skill ini tidak menjamin skor kemiripan tertentu, kelulusan pemeriksaan plagiarisme, atau penerimaan naskah oleh institusi. Selalu cantumkan sumber yang benar dan ikuti kebijakan akademik yang berlaku.

## Isi Repositori

```text
agent-skripsi-ku/
├── README.md
├── LICENSE
├── AGENT_SKRIPSI_ODDY.md
└── skills/
    └── skripsi-writer/
        └── SKILL.md
```

- [`AGENT_SKRIPSI_ODDY.md`](AGENT_SKRIPSI_ODDY.md): cetak biru fitur dan panduan penggunaan Agent Skripsi Oddy.
- [`skills/skripsi-writer/SKILL.md`](skills/skripsi-writer/SKILL.md): definisi utama skill, alur kerja, dan aturan penulisan.

## Mulai Menggunakan

Klon repositori ini:

```bash
git clone https://github.com/oddycosplay/agent-skripsi-ku.git
cd agent-skripsi-ku
```

### Gemini

Salin folder skill ke direktori skill Gemini:

```bash
mkdir -p ~/.gemini/skills
cp -r skills/skripsi-writer ~/.gemini/skills/
```

Di Windows PowerShell:

```powershell
New-Item -ItemType Directory -Force -Path "$HOME/.gemini/skills" | Out-Null
Copy-Item -Recurse -Force ".\skills\skripsi-writer" "$HOME/.gemini/skills/"
```

### Claude

Salin folder skill ke direktori skill Claude:

```bash
mkdir -p ~/.claude/skills
cp -r skills/skripsi-writer ~/.claude/skills/
```

Di Windows PowerShell:

```powershell
New-Item -ItemType Directory -Force -Path "$HOME/.claude/skills" | Out-Null
Copy-Item -Recurse -Force ".\skills\skripsi-writer" "$HOME/.claude/skills/"
```

Jika klien Claude yang digunakan tidak mendeteksi folder tersebut secara otomatis, salin isi `skills/skripsi-writer/SKILL.md` ke instruksi khusus atau instruksi proyek.

### ChatGPT

Untuk menggunakan panduan ini di GPT kustom atau proyek ChatGPT:

1. Buka `skills/skripsi-writer/SKILL.md`.
2. Salin isi file tersebut ke bagian instruksi GPT kustom atau proyek.
3. Sesuaikan instruksi dengan kebutuhan dan kebijakan akademik yang berlaku.

Dukungan terhadap format folder `SKILL.md` dapat berbeda antarplatform. Periksa dokumentasi platform yang digunakan untuk metode pemasangan terbaru.

## Contoh Prompt

- “Gunakan skill ini untuk membantu menyusun kerangka Bab I proposal skripsi dengan judul …”
- “Bantu analisis beberapa penelitian terdahulu berikut dan susun matriks perbandingannya.”
- “Periksa keselarasan rumusan masalah, tujuan, dan batasan penelitian pada draf ini.”
- “Bantu rancang use case, activity diagram, ERD, dan kebutuhan sistem berdasarkan requirement berikut.”
- “Tinjau bahasa akademik pada bagian ini tanpa mengubah makna dan tanpa menambahkan fakta baru.”

## Prinsip Penggunaan

1. Berikan konteks penelitian, data, dan kebutuhan yang memadai sebelum meminta bantuan.
2. Jangan meminta atau menggunakan referensi, data, maupun hasil penelitian yang tidak dapat diverifikasi.
3. Verifikasi setiap sitasi dan klaim terhadap sumber aslinya.
4. Tinjau kembali hasil AI, sesuaikan dengan pedoman kampus, dan konsultasikan keputusan akademik dengan dosen pembimbing.

## Kontribusi

Masukan untuk perbaikan dokumentasi, alur kerja, dan fitur sangat terbuka. Silakan buat *issue* untuk mendiskusikan usulan atau laporkan masalah melalui GitHub.

## Lisensi

Proyek ini menggunakan lisensi MIT. Lihat [`LICENSE`](LICENSE) untuk informasi selengkapnya.

---

<div align="center">

**Agent Skripsi Ku** · *Menata proses akademik, satu langkah lebih terarah.*

</div>
