# Nomad Core v1.0

> Developed by **Pure Code**

`Nomad Core` is our signature, production-ready WordPress framework engineered to deliver elite site speeds, structural security, and uncompromised design fidelity. By bypassing heavy, legacy visual page builders, it bridges modern front-end engineering paradigms with native WordPress architectures.

## The Tech Stack

- **Core Engine:** WordPress (Stable Monolithic Minimalist)
- **CSS Pre-processing:** Tailwind CSS v4 (Native CSS-First `@theme` configuration via direct CLI pipeline)
- **Animation Layer:** Vanilla JS (Intersection Observer API / `requestAnimationFrame`) + Hardware-accelerated CSS Variables
- **Dynamic Optimization:** Native WebP/AVIF media delivery, inline SVG icons, locally hosted asset typography
- **Localization Strategy:** Single-canvas runtime rendering mapped for TranslatePress (Instant LTR ⇄ RTL mirror compatibility)

## Repository Strategy

- `main` — Production-stable releases and active live build states.
- `develop` — Framework aggregation and testing.
- `feature/*` — Non-breaking, modular expansion branches (e.g., `feature/acf-integration`).

---

## Requirements

- PHP 8.1+
- Node.js 18+
- WordPress 6.3+

## Setup

```bash
cd wp-content/themes/nomad-core
npm install
npm run build
```

Then activate **Nomad Core** in WP Admin → Appearance → Themes.

## Development

```bash
npm run watch
```

Watches `assets/css/src.css` and recompiles to `assets/css/style.css` on every change.

## Folder Structure

```
nomad-core/
├── assets/
│   ├── css/
│   │   ├── src.css        ← Tailwind source (edit this)
│   │   └── style.css      ← Compiled output (git-ignored)
│   ├── js/
│   │   └── main.js        ← ES Module entry point
│   ├── fonts/
│   ├── icons/
│   └── images/
├── inc/
│   ├── setup.php          ← Theme support, nav menus, content width
│   ├── enqueue.php        ← Asset loading and preload hints
│   ├── accessibility.php  ← ARIA filters
│   └── helpers.php        ← Utility functions (nomad_get_image, etc.)
├── template-parts/        ← Reusable partials via get_template_part()
├── languages/             ← Translation files (.pot)
└── functions.php          ← Loader only — no logic here
```

## Theme Hooks

Nomad Core exposes action hooks for per-project customisation without modifying core files:

| Hook | Location |
|------|----------|
| `nomad_before_header` | Before `<header>` |
| `nomad_after_header` | After `<header>` |
| `nomad_before_main` | Before `<main>` |
| `nomad_after_main` | After `<main>` |
| `nomad_before_footer` | Before `<footer>` |
| `nomad_after_footer` | After `<footer>` |

## Notes

- `style.css` at the theme root is **not** a stylesheet. WordPress requires it to identify the theme. All styles live in `assets/css/src.css`.
- Compiled CSS (`assets/css/style.css`) and `node_modules/` are git-ignored. Always run `npm run build` after cloning.
- All theme functions are prefixed `nomad_` to avoid conflicts.
- Text domain: `nomad-core`

---
For framework implementation policies or deployment standards, contact the core engineering team at Pure Code.
