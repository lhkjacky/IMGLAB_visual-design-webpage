# WordPress Article Block System — Private Repo

Personal workflow for converting YouTube transcripts into Japanese WordPress article blocks.

---

## What This Is

A handoff-driven system. Give Claude two files — the handoff + a transcript — and it produces a complete, production-ready Japanese WordPress Custom HTML block plus an SEO post title. No back and forth, no ambiguity.

---

## Repo Contents

| File | Purpose |
|---|---|
| `HANDOFF_transcript_to_webpage_vX_X.md` | The master instruction file. Give this to Claude every time. |
| `README.md` | This file — changelog and notes |

---

## How to Use

1. Open a new Claude conversation
2. Upload the latest `HANDOFF_transcript_to_webpage_vX_X.md`
3. Upload the YouTube transcript (any language — Claude translates)
4. Claude produces two files: the `.html` block and the `-title.txt`
5. Paste the HTML into a WordPress Custom HTML block
6. Paste the title into the post title field

---

## WordPress Setup Notes

- **Theme:** WoodMart
- **Dark mode plugin:** WP Dark Mode v5.0.9, Sapphire preset
- **Image upload plugin:** Smart Auto Upload Images — uses `%image_alt%` as filename pattern, so alt text must be lowercase hyphenated English
- **PHP:** `max_input_vars = 2000` set via ConoHa Wing control panel → php.ini (needed for WoodMart theme, default 1000 was too low)
- **Custom CSS active site-wide:**
  ```css
  html[data-wp-dark-mode-active] {
    .widgettitle, .widget-title { color: unset !important; }
    legend, h1, h2, h3, h4, h5, h6, .title { color: unset !important; }
  }
  ```

---

## Changelog

### v1.2 — 2026-03-01
**What broke, what was fixed, what was learned.**

**Bug: WordPress excerpt showing raw CSS**
- Root cause: `<style>` block was placed near the top of the file, right after the opening `<div>`. WordPress reads the first few lines of a Custom HTML block as the post excerpt — so the CSS comment `/* ===== WP DARK MODE PROTECTION =====` was appearing as the excerpt publicly.
- Fix: `<style>` block moved to the **absolute bottom** of the file. All HTML content comes first. The `<div class="content-visual">` must be line 1. The `<style>` must be the last thing.
- Added to handoff: Phase C1 with WRONG vs CORRECT examples, R19 rewritten to be explicit.

**Bug: WP Dark Mode plugin overriding card colors in dark mode**
- Root cause: WP Dark Mode v5.0.9 (Sapphire preset) applies `background !important` and `color !important` to every HTML element by tag name. The `:not(.wp-dark-mode-ignore)` exclusion only works if the class is on the **element itself** — a parent having it does not protect children.
- Fix (two-part):
  1. Add `wp-dark-mode-ignore` class to **every** `div`, `p`, `span`, `i`, `h1`–`h6`, `ul`, `li`, etc. in the HTML
  2. Add `[data-wp-dark-mode-ignore]` ancestor selector prefix to all color/background CSS rules with `!important` — this gives higher specificity than the plugin's tag-based rules
- Exception: `cv-container` intentionally has **no** `wp-dark-mode-ignore` — its background goes transparent in dark mode, letting the dark page show through naturally instead of creating a white island
- Added to handoff: Phase C2 with full explanation, complete CSS protection block template with placeholders

**Bug: Mobile cards had sharp square corners**
- Root cause: Mobile breakpoint CSS had `border-radius: 0` on `cv-card`, `cv-hero`, `cv-dark`, `cv-wow`, `cv-tinted`, `cv-source`, and `cv-img-block`. This was incorrect — cards should be edge-to-edge (no side borders) but still have rounded corners on mobile.
- Fix: Mobile breakpoint updated to `border-radius: 1rem` on cards, `1.25rem` on hero, `0.75rem` on source/image blocks
- Added to handoff: R21, updated mobile CSS template in Step 8, updated checklist

**What NOT to do (learned the hard way):**
- Do not try to make the entire block "light mode only" by putting `wp-dark-mode-ignore` on `cv-container` — it creates an ugly white box on a dark page
- Do not try to fight the plugin with CSS variable overrides (`--wp-dark-mode-secondary-background-color: unset`) — the plugin uses hardcoded fallback values in `var()` calls and this doesn't work
- Do not use `color-scheme: light` on the container — same problem

---

### v1.1 — (previous version)
- Initial production-ready handoff
- Covered: translation protocol, unit conversion, image verification, mobile architecture, dual table representation, icon whitespace principle, pros/cons, verdict, dark sections, WOW callout, typography clamp, CSS scoping

---

## Notes on WP Dark Mode Plugin

Currently on v5.0.9. Latest available is v5.3.3. Staying on v5.0.9 until the current fix is stable and tested. Before upgrading:
- Test on a staging copy or take a full backup first
- WoodMart theme had conflicts with a previous WP Dark Mode upgrade — verify compatibility before pushing to production
- The `wp-dark-mode-ignore` approach in the handoff was built and tested against v5.0.9 Sapphire preset specifically — behavior may differ on newer versions

---

## Key Design Rules (Quick Reference)

- Every article gets a **fresh, unique palette** — never reuse colors from a previous article
- `<div>` first, all HTML, `<style>` last
- `wp-dark-mode-ignore` on every element except `cv-container`
- Mobile cards: edge-to-edge but **rounded corners always preserved**
- No `padding: 0 1rem` on grid children inside padded cards (double-gutter bug)
- Dual table representation for any complex table (PC table + mobile cards)
- Image alt text = WordPress filename — lowercase, hyphenated English only
- Never include prices — they change and vary by region
- Always verify specs from official brand source or RunRepeat before publishing
- Two deliverables every run: `.html` block + `-title.txt` SEO title
