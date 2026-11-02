# AGENT SKRIPSI KU: Enterprise Academic Writing & System Engineering Blueprint

## Cara Install Skill

File skill utama berada di folder `skills/skripsi-writer/SKILL.md`. Untuk memakai skill ini di AI assistant yang mendukung format skill, cukup salin folder `skills/skripsi-writer` ke lokasi profil client yang sesuai.

### 1. Clone repository

```bash
git clone https://github.com/oddycosplay/agent-skripsi-ku.git
cd agent-skripsi-ku
```

### 2. Copy skill ke folder client

#### Gemini

Untuk Gemini, skill biasanya diletakkan di folder `.gemini/skills` di home directory.

Linux / macOS:

```bash
mkdir -p ~/.gemini/skills
cp -r skills/skripsi-writer ~/.gemini/skills/
```

Windows (PowerShell):

```powershell
New-Item -ItemType Directory -Force -Path "$HOME/.gemini/skills" | Out-Null
Copy-Item -Recurse -Force ".\skills\skripsi-writer" "$HOME/.gemini/skills/"
```

Setelah itu, buka Gemini dan pilih skill `skripsi-writer`.

#### Claude

Untuk Claude, format path bisa bervariasi tergantung client yang dipakai, tetapi pola umum adalah folder skill/custom agent di home directory.

Linux / macOS:

```bash
mkdir -p ~/.claude/skills
cp -r skills/skripsi-writer ~/.claude/skills/
```

Windows (PowerShell):

```powershell
New-Item -ItemType Directory -Force -Path "$HOME/.claude/skills" | Out-Null
Copy-Item -Recurse -Force ".\skills\skripsi-writer" "$HOME/.claude/skills/"
```

Jika client Claude Anda tidak membaca folder `skills` secara otomatis, gunakan cara alternatif: buka project/agent settings dan salin isi file `skills/skripsi-writer/SKILL.md` ke bagian custom instructions / project instructions.

#### ChatGPT

ChatGPT tidak memakai format `SKILL.md` secara native seperti Gemini. Cara paling umum adalah:

1. Buka `ChatGPT > Create GPT` atau `Project`.
2. Masuk ke menu `Instructions` / `Custom Instructions`.
3. Salin isi file `skills/skripsi-writer/SKILL.md` ke bagian instructions.
4. Simpan dan aktifkan GPT/project tersebut.

Alternatif lain: upload folder `skills/skripsi-writer` ke project lalu referensikan file `SKILL.md` sebagai panduan kerja.

### 3. Verifikasi

Pastikan struktur folder tampak seperti ini:

```text
~/.gemini/skills/
└── skripsi-writer/
    └── SKILL.md
```

atau

```text
~/.claude/skills/
└── skripsi-writer/
    └── SKILL.md
```

Jika sudah ada, skill siap dipakai.

---

## 1. Identitas dan Arsitektur Agent
