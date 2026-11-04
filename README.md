# Agent Skripsi Ku

A domain-specific AI writing skill for academic research, thesis development, and technical documentation.

`agent-skripsi-ku` is a reusable skill package designed to assist students, researchers, and academic writers in producing structured academic writing, literature analysis, system design documentation, and technical reports using AI assistance.

## Overview

This repository contains a custom skill named `skripsi-writer` for:

- proposal and thesis writing
- academic paraphrasing and anti-sloppy writing workflow
- literature review and research gap synthesis
- citation and reference management
- UML, ERD, and system engineering documentation
- structured output aligned with academic writing standards

## What Is Included

- `AGENT_SKRIPSI_ODDY.md` — complete blueprint and guidance for academic writing and system engineering workflows
- `skills/skripsi-writer/SKILL.md` — main reusable skill definition used by AI assistants
- `LICENSE` — MIT license

## Repository Structure

```text
agent-skripsi-ku/
├── README.md
├── LICENSE
├── AGENT_SKRIPSI_ODDY.md
├── skills/
│   └── skripsi-writer/
│       └── SKILL.md
└── .gitignore (if present in your local clone)
```

## Skill Location

The main skill definition is located at:

```text
skills/skripsi-writer/SKILL.md
```

This file defines the academic workflow, writing rules, quality gates, and technical documentation expectations used by the assistant.

## Quick Start

```bash
git clone https://github.com/oddycosplay/agent-skripsi-ku.git
cd agent-skripsi-ku
```

## Installation

### Gemini

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

### Claude

```bash
mkdir -p ~/.claude/skills
cp -r skills/skripsi-writer ~/.claude/skills/
```

Windows PowerShell:

```powershell
New-Item -ItemType Directory -Force -Path "$HOME/.claude/skills" | Out-Null
Copy-Item -Recurse -Force ".\skills\skripsi-writer" "$HOME/.claude/skills/"
```

If your Claude client does not auto-detect the skill folder, copy the contents of `skills/skripsi-writer/SKILL.md` into custom instructions or project instructions manually.

### ChatGPT

ChatGPT does not natively use the `SKILL.md` folder structure in the same way as Gemini or Claude. The recommended approach is:

1. Open ChatGPT and create a custom GPT or project.
2. Open `Instructions` or `Custom Instructions`.
3. Copy the content of `skills/skripsi-writer/SKILL.md`.
4. Save and activate the GPT or project.

This allows the same methodology and writing rules to be applied within a custom AI assistant.

## Example Prompts

- "Gunakan skill ini untuk menyusun BAB I proposal skripsi dengan judul ..."
- "Buatkan tabel penelitian terdahulu dan analisis gap penelitian untuk topik ..."
- "Buatkan use case, activity diagram, ERD, dan kebutuhan sistem untuk ..."
- "Parafrasekan bab ini agar sesuai gaya ilmiah dan anti-plagiarism"
- "Buatkan draf Bab III yang sesuai dengan template skripsi UNPAM 4.0"

## Project Goal

This project demonstrates how to build a specialized AI assistant for academic support by combining writing discipline, knowledge structure, and technical documentation in a reusable skill format.

## Benefits

- structured academic writing workflow
- stronger academic writing quality and anti-sloppy writing checks
- reusable AI skill for thesis-related tasks
- aligned with technical documentation standards for software/system projects

## License

This project is licensed under the MIT License. See [LICENSE](LICENSE) for details.

## About

`agent-skripsi-ku` is a practical implementation of a domain-specific AI writing system designed to support research workflows in an organized, reusable, and scalable manner.
