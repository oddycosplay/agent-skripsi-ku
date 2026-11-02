# Agent Skripsi Ku

A domain-specific AI writing skill for academic research, thesis development, and technical documentation.

Agent Skripsi Ku is a custom skill package designed to support students and researchers in producing structured academic writing, literature analysis, and system design documentation using AI assistants such as Gemini, Claude, and ChatGPT.

## Overview

This project packages a reusable skill named `skripsi-writer` for:
- thesis and proposal writing
- academic paraphrasing and anti-sloppy writing workflow
- literature review and research gap synthesis
- citation and reference management
- UML, ERD, and system engineering documentation
- structured output aligned with academic writing standards

## Why This Project?

Many academic workflows still rely on manual, repetitive writing processes. This project aims to create a more intelligent, structured, and reusable writing assistant that helps researchers convert raw ideas into coherent academic outputs with clearer logic and stronger documentation quality.

## Key Features

- End-to-end academic writing workflow from chapter I to chapter V
- Research question and objective formulation support
- Literature review and related work synthesis
- Academic paraphrasing aligned with formal language standards
- Technical documentation support for UML, ERD, and system design
- Ready-to-install skill structure for supported AI environments

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
```

## Skill Location

The main skill file is located at:

```text
skills/skripsi-writer/SKILL.md
```

This skill defines the writing workflow and academic rules used by the assistant.

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

1. Open ChatGPT and create a custom GPT or project
2. Open `Instructions` or `Custom Instructions`
3. Copy the content of `skills/skripsi-writer/SKILL.md`
4. Save and activate the GPT/project

This allows the same methodology and writing rules to be used in a custom AI assistant.

## Example Prompts

- "Gunakan skill ini untuk menyusun BAB I proposal skripsi dengan judul ..."
- "Buatkan tabel penelitian terdahulu dan analisis gap penelitian untuk topik ..."
- "Buatkan use case, activity diagram, ERD, dan kebutuhan sistem untuk ..."
- "Parafrasekan bab ini agar sesuai gaya ilmiah dan anti-plagiarism"

## Project Goal

This project demonstrates how to build a specialized AI assistant for academic support, combining writing discipline, knowledge structure, and technical documentation in a reusable skill format.

## License

This project is licensed under the MIT License. See [LICENSE](LICENSE) for details.

## About

`agent-skripsi-ku` is a practical implementation of a domain-specific AI writing system, designed to support research workflows in an organized, reusable, and scalable manner.
