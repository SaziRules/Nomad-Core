# Nomad Core

**Developed by [Pure Code](https://purecode.studio)**

Production-ready, code-first WordPress starter theme. No page builders. No Bootstrap. Tailwind CSS v4, Vanilla JS ES Modules, strict WordPress coding standards.

## Requirements

- PHP 8.1+
- Node.js 18+
- WordPress 6.3+

## Setup

```bash
cd wp-content/themes/pure-core
npm install
npm run build
```

Then activate **Nomad Core** in WP Admin → Appearance → Themes.

## Development

```bash
npm run watch
```

Watches `assets/css/src.css` and recompiles to `assets/css/style.css` on every change.

## Folder structure

```
pure-core/
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

## Theme hooks

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

- `style.css` at the theme root is **not** a stylesheet. It is required by WordPress to register the theme. All styles live in `assets/css/src.css`.
- Compiled CSS (`assets/css/style.css`) and `node_modules/` are git-ignored. Always run `npm run build` after cloning.
- All theme functions are prefixed `nomad_` to avoid conflicts.
- Text domain: `nomad-core`
