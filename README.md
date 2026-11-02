# AGENT SKRIPSI KU

A portfolio-ready AI skill for academic writing, thesis development, and system engineering documentation.

This project packages a custom skill named `skripsi-writer` that helps generate structured academic content for proposal and thesis writing, including research problem formulation, literature review synthesis, UML/ERD design, and technical documentation aligned with UNPAM academic standards.

## Why this project?

This repository is designed for users who want a reusable writing assistant specialized in:

- Proposal and thesis writing
- Academic paraphrasing and anti-plagiarism writing flow
- Citation and reference management
- Literature review and research gap analysis
- UML, ERD, system design, and technical documentation
- Structured output suitable for academic tasks and research projects

## Core Features

- Academic writing workflow for Bab I to Bab V
- Thesis proposal and final report structure guidance
- Anti-sloppy writing and scientific language rules
- Standardized academic output using research writing conventions
- Technical design support with diagrams and systematic documentation
- Ready-to-install skill package for supported AI environments

## Repository Structure

```text
agent-skripsi-ku/
├── README.md
├── LICENSE
├── AGENT_SKRIPSI_ODDY.md
├── skills/
│   └── skripsi-writer/
│       └── SKILL.md
└── references/
    └── (reference materials for academic and technical guidance)
```

## Skill Overview

The main skill file is located here:

```text
skills/skripsi-writer/SKILL.md
```

This skill provides a practical workflow for:

- identifying research context
- formulating problems and objectives
- organizing writing structure from chapter I to chapter V
- synthesizing literature review and research gap
- building design documentation and system analysis
- preparing academic presentation and discussion materials

## Quick Install

```bash
git clone https://github.com/oddycosplay/agent-skripsi-ku.git
cd agent-skripsi-ku
```

## Install in Gemini

```bash
mkdir -p ~/.gemini/skills
cp -r skills/skripsi-writer ~/.gemini/skills/
```

Windows PowerShell:

```powershell
New-Item -ItemType Directory -Force -Path "$HOME/.gemini/skills" | Out-Null
Copy-Item -Recurse -Force ".\skills\skripsi-writer" "$HOME/.gemini/skills/"
```

Then open Gemini and select the `skripsi-writer` skill.

## Install in Claude

```bash
mkdir -p ~/.claude/skills
cp -r skills/skripsi-writer ~/.claude/skills/
```

Windows PowerShell:

```powershell
New-Item -ItemType Directory -Force -Path "$HOME/.claude/skills" | Out-Null
Copy-Item -Recurse -Force ".\skills\skripsi-writer" "$HOME/.claude/skills/"
```

If your Claude client does not auto-detect the folder, copy the content of `skills/skripsi-writer/SKILL.md` into custom instructions or project instructions manually.

## Use in ChatGPT

ChatGPT does not natively use the `SKILL.md` folder structure like Gemini or Claude. The recommended approach is:

1. Open `ChatGPT > Create GPT` or a project workspace.
2. Go to `Instructions` or `Custom Instructions`.
3. Copy the content of `skills/skripsi-writer/SKILL.md`.
4. Save and activate the project or GPT.

This allows the same methodology and writing rules to be used inside a custom ChatGPT assistant.

## Example Usage

You can prompt with examples like:

- "Gunakan skill oddy untuk menyusun BAB I proposal skripsi dengan judul ..."
- "Buatkan tabel penelitian terdahulu dan analisis gap penelitian untuk topik ..."
- "Buatkan use case, activity diagram, ERD, dan tabel kebutuhan sistem untuk ..."
- "Parafrasekan bab ini agar sesuai gaya bahasa ilmiah dan lolos anti-plagiarism"

## Project Goal

This project demonstrates a practical approach to building domain-specific AI assistants that can support academic work with structured, repeatable, and context-aware guidance.

## License

This project is licensed under the MIT License. See [LICENSE](LICENSE) for details.

## About

`agent-skripsi-ku` is a specialized AI writing skill designed to support academic research workflows in a clear, structured, and reusable way.
