# Foxiz CSS Reference — v1.2
## `foxiz-child/style.css` — Complete Class Documentation

> **Read this file before writing any HTML for a post.** Every class available to you is documented here with its exact property values as they exist in the deployed stylesheet (v1.0.3). Do not invent class names. Do not guess colour values. If a class is not listed here, it does not exist.

---

## HOW THE STYLESHEET WORKS — READ THIS FIRST

The stylesheet has three layers, applied in this order:

### Layer 1 — Base styles
Define all component appearance. CSS variables are used wherever colour depends on the per-post palette (`--cv-accent`, `--cv-hero-bg`, etc.), so those components automatically update when you set the variables.

### Layer 2 — Foxiz `!important` override block
Foxiz theme has its own high-specificity stylesheet rules that target content divs and override background colours, text colours, and grid layouts — even in light mode. Without this block, white cards would turn grey, grids would collapse to 1 column, and text colours would be wrong.

This block fires in **both light and dark mode**. It is NOT a dark mode toggle. It simply locks every component's intended appearance against Foxiz's interference. White cards stay white. Dark sections stay dark. Grids stay multi-column. Nothing changes between light and dark mode for these components.

### Layer 3 — Dark mode exception
The only two `body[data-theme="dark"]` rules in the entire file. Only pull quote text changes in dark mode — it lightens to `#e2e8f0` / `#94a3b8`. Everything else is identical in both modes.

### Consequence for writing posts

You write zero `!important` rules. You write zero `body[data-theme="dark"]` rules. You write zero `[data-wp-dark-mode-ignore]` rules. All three layers are handled by the global sheet. Per-post styles contain only CSS variables and the three accent-dependent values.

---

## CSS VARIABLES — SET THESE IN EVERY POST

All 11 variables belong inside `.content-visual { }` in the per-post `<style>` block.

| Variable | Used By | Typical Format |
|---|---|---|
| `--cv-accent` | Stat values, icon colours, bar fills, `.cv-h1-accent`, `.cv-tl-year`, `.cv-tl-dot-current`, `.cv-sc-new .cv-sc-model`, `.cv-stat-val` | Vivid hex e.g. `#e85d04` |
| `--cv-hero-bg` | Hero gradient | `linear-gradient(135deg, #stop1, #stop2)` |
| `--cv-hero-sub-color` | Hero subtitle text + stat labels | Muted light hex e.g. `#fed7aa` |
| `--cv-badge-color` | Hero badge pill text | Light hex e.g. `#fde68a` |
| `--cv-glow` | Radial glow in hero top-right | `rgba(r,g,b,0.18)` |
| `--cv-wow-bg` | WOW callout gradient | `linear-gradient(135deg, [accent], [accent-dark])` |
| `--cv-hl` | Highlighted table row background | `rgba(r,g,b,0.09)` |
| `--cv-img-border` | Image block border + spec card new-model border | `rgba(r,g,b,0.28)` |
| `--cv-sc-new-bg` | Mobile spec new-model pill background | `rgba(r,g,b,0.12)` |
| `--cv-cc-featured-bg` | Featured competitor card background | `rgba(r,g,b,0.10)` |
| `--cv-table-head-bg` | Table header background | Dark hex — usually `#0f172a` |

**Default fallback values** (renders if variable is not set):
`--cv-hero-bg` → `linear-gradient(135deg,#0d3d2e,#1a5c42)` | `--cv-accent` → `#ff6b35` | `--cv-glow` → `rgba(255,107,53,0.18)` | `--cv-badge-color` → `#6ee7b7` | `--cv-hero-sub-color` → `#a7f3d0` | `--cv-wow-bg` → `linear-gradient(135deg,#ff6b35,#e84c11)` | `--cv-hl` → `#fff5f0` | `--cv-img-border` → `#fbd0bf` | `--cv-sc-new-bg` → `#fff5f0` | `--cv-cc-featured-bg` → `#fff5f0` | `--cv-table-head-bg` → `#0f172a`

---

## RESET

```
.content-visual *, ::before, ::after  →  box-sizing: border-box; margin: 0; padding: 0;
```

---

## CONTAINER & SPACING

```
.cv-container
  max-width: 64rem
  margin: 0 auto
  padding: 1.25rem
  font-family: ui-sans-serif, system-ui, -apple-system, sans-serif
  color: #334155
  background: transparent

  MOBILE (≤640px): padding: 0; background: transparent

.cv-mb
  margin-bottom: 1.5rem
  MOBILE: margin-bottom: 0.625rem
```

---

## HERO

```
.cv-hero
  border-radius: 1.25rem
  padding: 2.25rem 2rem
  margin-bottom: 1.5rem
  position: relative; overflow: hidden
  background: var(--cv-hero-bg)

  MOBILE: padding: 1.5rem 1rem; border-radius: 1.25rem (KEPT); margin-bottom: 0.625rem

.cv-hero::before
  Decorative radial glow — position: absolute; top: -60px; right: -60px
  width: 280px; height: 280px
  background: radial-gradient(circle, var(--cv-glow) 0%, transparent 70%)
  pointer-events: none

.cv-hero-badge
  display: inline-flex; align-items: center
  background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2)
  padding: 0.3rem 0.875rem; border-radius: 9999px (pill)
  font-size: 0.8rem; font-weight: 600
  color: var(--cv-badge-color)

.cv-h1
  color: white; font-weight: 900; line-height: 1.15; letter-spacing: -0.02em
  font-size: clamp(1.75rem, 4.5vw, 3rem)  ← ALWAYS OVERRIDE PER-POST to suit title length
  margin-bottom: 0.75rem

.cv-h1-accent
  color: var(--cv-accent)   ← inline span inside cv-h1

.cv-hero-sub
  font-size: 0.9rem; line-height: 1.65; margin-bottom: 1.75rem
  color: var(--cv-hero-sub-color)

.cv-hero-stats
  display: grid; grid-template-columns: repeat(4,1fr); gap: 0.75rem
  Foxiz override: !important on display + columns to prevent collapse
  MOBILE: grid-template-columns: repeat(2,1fr) !important; gap: 0.5rem
  ⚠️ Hero stats go 2-COLUMN on mobile (2×2 layout) — NOT 1 column

.cv-hero-stat
  background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.12)
  border-radius: 0.75rem; padding: 0.875rem; text-align: center

.cv-stat-val
  font-size: 1.25rem; font-weight: 900; color: var(--cv-accent)

.cv-stat-label
  font-size: 0.65rem; margin-top: 0.2rem; line-height: 1.3
  color: var(--cv-hero-sub-color)
```

---

## CARDS

```
.cv-card
  background: white  ← enforced !important by Foxiz override block
  border-radius: 1rem; padding: 1.75rem; margin-bottom: 1.5rem
  border: 1px solid #e2e8f0  ← enforced !important
  color: #334155  ← enforced !important

  MOBILE: border-left: none; border-right: none
          border-radius: 1rem (KEPT); padding: 1.25rem 1rem; margin-bottom: 0.625rem
  ⚠️ Side borders removed on mobile — rounded corners are ALWAYS preserved

.cv-card-title
  font-size: 1.1rem; font-weight: 800
  color: #0f172a  ← enforced !important
  margin-bottom: 1.25rem; display: flex; align-items: center; gap: 0.6rem

.cv-dark
  background: linear-gradient(135deg,#1e293b,#0f172a)  ← enforced !important
  border-radius: 1rem; padding: 1.75rem; margin-bottom: 1.5rem

  MOBILE: border-radius: 1rem (KEPT); padding: 1.25rem 1rem; margin-bottom: 0.625rem

.cv-dark .cv-card-title
  color: white  ← enforced !important

.cv-body
  font-size: 0.875rem; color: #475569; line-height: 1.75
  ← For body paragraphs inside cards

--- Utility text classes ---

.cv-card-body
  color: #374151  ← enforced !important; line-height: 1.7
  Use for body text inside white cards instead of inline style

.cv-reviewer-name
  font-size: 0.85rem; font-weight: 800
  color: #0f172a  ← enforced !important

.cv-muted
  font-size: 0.73rem; color: #64748b  ← enforced !important
  Use for secondary/caption text
```

---

## WOW CALLOUT

```
.cv-wow
  background: var(--cv-wow-bg)  ← enforced !important
  border-radius: 1rem; padding: 1.75rem
  text-align: center; color: white; margin-bottom: 1.5rem

  MOBILE: border-radius: 1rem (KEPT); padding: 1.25rem 1rem; margin-bottom: 0.625rem

.cv-wow-label
  font-size: 0.75rem; font-weight: 700; opacity: 0.85
  letter-spacing: 0.12em; text-transform: uppercase; margin-bottom: 0.6rem

.cv-wow-number
  font-size: clamp(2.5rem,7vw,5rem); font-weight: 900; line-height: 1
  margin-bottom: 0.6rem; color: white

.cv-wow-body
  font-size: 0.9rem; opacity: 0.92; max-width: 40rem; margin: 0 auto; line-height: 1.65
```

---

## GRIDS

```
.cv-grid-2   →   display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem
                 MOBILE: grid-template-columns: 1fr !important; gap: 0.75rem

.cv-grid-3   →   display: grid; grid-template-columns: repeat(3,1fr); gap: 1.25rem
                 MOBILE: grid-template-columns: 1fr !important; gap: 0.75rem

.cv-grid-4   →   display: grid; grid-template-columns: repeat(4,1fr); gap: 1rem
                 MOBILE: grid-template-columns: 1fr !important; gap: 0.75rem

All desktop grid display+column rules are enforced with !important (Foxiz override block).
Mobile collapses them with !important at the breakpoint.
```

---

## IMAGES (in global sheet — do NOT add to per-post style)

```
.cv-img-block
  background: white  ← enforced !important
  border-radius: 1rem; overflow: hidden
  border: 1px solid var(--cv-img-border); margin-bottom: 1.5rem

  MOBILE: border-left: none; border-right: none
          border-radius: 0.75rem (KEPT); margin-bottom: 0.625rem

.cv-img-main
  width: 100%; height: auto; display: block; object-fit: cover

.cv-img-landscape
  max-height: 420px; object-fit: cover; object-position: center
  MOBILE: max-height: 220px

.cv-img-credit
  font-size: 0.68rem; color: #94a3b8; padding: 0.45rem 1rem
  text-align: right; background: #f8fdfd
  border-top: 1px solid var(--cv-img-border)
```

⚠️ `cv-img-trio`, `cv-img-trio-item`, `cv-img-trio-label`, `cv-img-duo`, `cv-img-duo-item`, `cv-img-duo-label` are **NOT** in the global sheet. Add their CSS per-post when used. See Phase B6 for complete CSS templates.

---

## TABLES

```
.cv-table-wrap   →   overflow-x: auto

.cv-table   →   width: 100%; border-collapse: collapse; font-size: 0.875rem

.cv-table thead tr   →   background: var(--cv-table-head-bg); color: white

.cv-table th   →   padding: 0.8rem 0.875rem; text-align: left; font-weight: 700; color: white

.cv-table tbody tr   →   border-bottom: 1px solid #f1f5f9

.cv-table td   →   padding: 0.8rem 0.875rem; color: #334155; vertical-align: top

.cv-table td:first-child   →   font-weight: 600; color: #0f172a

.cv-tr-hl   →   background: var(--cv-hl)   ← accent-tinted highlighted row

--- Inside white cards (.cv-card), Foxiz override block enforces: ---
.cv-card .cv-table td             →  color: #334155 !important
.cv-card .cv-table td:first-child →  color: #0f172a !important
.cv-card .cv-table tbody tr       →  border-bottom-color: #f1f5f9 !important
.cv-card .cv-tr-hl td             →  background: var(--cv-hl) !important

--- Inside dark sections (.cv-dark): ---
.cv-dark .cv-table td             →  color: #e2e8f0 !important
.cv-dark .cv-table td:first-child →  color: #94a3b8 !important; font-weight: 600
.cv-dark .cv-table tbody tr       →  border-bottom-color: rgba(255,255,255,0.08) !important
.cv-dark .cv-tr-hl                →  background: rgba(255,255,255,0.08) !important
.cv-dark .cv-tr-hl td             →  color: #e2e8f0 !important
.cv-dark .cv-tr-hl td:first-child →  color: #94a3b8 !important; font-weight: 600

.cv-spec-good   →   color: #15803d   ← green for positive values in tables

--- Table show/hide: ---
.cv-tbl-pc      →   display: block (PC)   →   display: none !important (mobile ≤640px)
.cv-tbl-mobile  →   display: none (PC)    →   display: block !important (mobile ≤640px)
```

⚠️ There is no `.cv-spec-note` class. For note/caption text under table cells, use inline `style="color:#64748b;"` or `.cv-muted`.

---

## PROGRESS BARS

```
.cv-bar-row   →   margin-bottom: 0.75rem

.cv-bar-lbl
  display: flex; justify-content: space-between
  font-size: 0.85rem; font-weight: 600
  color: #0f172a  ← enforced !important
  margin-bottom: 0.35rem

.cv-bar-track
  background: #e2e8f0  ← enforced !important
  border-radius: 9999px; height: 0.625rem (10px)

.cv-bar-fill
  height: 0.625rem; border-radius: 9999px
  Set width + background via inline style:
  style="width:VALUE%; background:linear-gradient(to right,[accent],[accent-dark]);"
```

⚠️ There is no `.cv-bar-caption` class. For context text under a bar, use a plain `<div>` with inline `style="font-size:0.72rem; color:#64748b; margin-top:0.25rem;"`.

---

## INSIGHT BOXES

```
.cv-ins-blue
  background: #eff6ff  ← enforced !important
  border-left: 4px solid #3b82f6
  border-radius: 0.5rem; padding: 1rem; font-size: 0.875rem
  color: #1e3a8a  ← enforced !important  ← NOTE: #1e3a8a not #1e40af
  margin-top: 1.25rem; line-height: 1.65

.cv-ins-green
  background: #f0fdf4  ← enforced !important
  border-left: 4px solid #22c55e
  border-radius: 0.5rem; padding: 1rem; font-size: 0.875rem
  color: #166634  ← enforced !important  ← NOTE: #166634 not #15803d
  margin-top: 1rem; line-height: 1.65

.cv-ins-amber
  background: #fffbeb  ← enforced !important
  border-left: 4px solid #f59e0b
  border-radius: 0.5rem; padding: 1rem; font-size: 0.875rem
  color: #92400e  ← enforced !important
  line-height: 1.65

.cv-ins-dark
  background: rgba(255,107,53,0.12)   ← orange-tinted, designed for dark section use
  border: 1px solid rgba(255,107,53,0.3)
  border-radius: 0.5rem; padding: 1rem
  margin-top: 1.25rem; font-size: 0.875rem; line-height: 1.65
  TEXT COLOUR: NOT SET IN GLOBAL SHEET — set per-post:
  .content-visual .cv-ins-dark { color: [accent-light colour]; }
  Use inside .cv-dark sections only.
```

---

## TIMELINE

```
.cv-timeline
  position: relative; padding-left: 1.5rem
  Vertical line: ::before → left: 0; top: 0.5rem; bottom: 0; width: 2px; background: #e2e8f0

.cv-tl-item
  position: relative; padding-bottom: 1.5rem
  Last child: padding-bottom: 0

.cv-tl-dot
  position: absolute; left: -1.65rem; top: 0.35rem
  width: 12px; height: 12px; border-radius: 50%
  background: #cbd5e1; border: 2px solid white; box-shadow: 0 0 0 2px #e2e8f0

.cv-tl-dot-current
  background: var(--cv-accent)
  box-shadow: 0 0 0 3px rgba(255,107,53,0.25)
  ← Add to dot of the most recent timeline entry

.cv-tl-year
  font-size: 0.68rem; font-weight: 700; color: var(--cv-accent)
  text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 0.15rem

.cv-tl-title   →   font-size: 0.925rem; font-weight: 700; color: #0f172a

.cv-tl-body    →   font-size: 0.85rem; color: #475569; line-height: 1.7; margin-top: 0.35rem
```

---

## TAGS / PILLS

```
.cv-tag
  display: inline-block; padding: 0.15rem 0.5rem
  border-radius: 9999px; font-size: 0.7rem; font-weight: 700; margin: 0.1rem

Available colour variants (all enforced !important):
.cv-tag-blue    background: #dbeafe  color: #1d4ed8
.cv-tag-green   background: #dcfce7  color: #15803d
.cv-tag-red     background: #fee2e2  color: #dc2626
.cv-tag-amber   background: #fef3c7  color: #92400e
.cv-tag-purple  background: #f3e8ff  color: #7c3aed
```

⚠️ There is NO `.cv-tag-teal` class. Do not use it — it will render without any colour.

---

## PROS / CONS

```
.cv-pros-cons
  display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem
  Foxiz override: !important on display + columns
  MOBILE: grid-template-columns: 1fr !important; gap: 0.75rem

.cv-pros
  background: #f0fdf4  ← enforced !important
  border: 1px solid #bbf7d0  ← enforced !important
  border-radius: 0.75rem; padding: 1.25rem
  MOBILE: border-radius: 0.625rem

.cv-cons
  background: #fef2f2  ← enforced !important  ← NOTE: #fef2f2 not #fff5f5
  border: 1px solid #fecaca  ← enforced !important
  border-radius: 0.75rem; padding: 1.25rem
  MOBILE: border-radius: 0.625rem

.cv-pct
  font-size: 0.95rem; font-weight: 800; margin-bottom: 0.875rem
  display: flex; align-items: center; gap: 0.4rem

.cv-pct-pro   →   color: #166534  ← enforced !important  ← dark green
.cv-pct-con   →   color: #991b1b  ← enforced !important  ← dark red

.cv-pcl   →   display: flex; flex-direction: column; gap: 0.625rem

.cv-pci
  background: white  ← enforced !important
  border-radius: 0.5rem; padding: 0.75rem; display: flex; gap: 0.6rem
  align-items: flex-start; font-size: 0.85rem; line-height: 1.5

.cv-pci-pro
  border-left: 3px solid #22c55e
  color: #166534  ← enforced !important

.cv-pci-con
  border-left: 3px solid #ef4444
  color: #991b1b  ← enforced !important

.cv-pci-icon-pro   →   color: #22c55e  ← enforced !important; font-size: 0.85rem; flex-shrink: 0; margin-top: 0.15rem
.cv-pci-icon-con   →   color: #ef4444  ← enforced !important  ← NOTE: #ef4444 not #f87171
```

---

## VERDICT BOXES (use inside `.cv-dark`)

```
.cv-vbox
  background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.12)
  border-radius: 0.75rem; padding: 1.1rem
  MOBILE: border-radius: 0.5rem

.cv-vtitle
  font-size: 0.875rem; font-weight: 800; margin-bottom: 0.625rem
  Set colour explicitly: style="color:#4ade80;" for positive, style="color:#f87171;" for negative

.cv-vlist
  list-style: none; padding: 0; display: flex; flex-direction: column; gap: 0.45rem

.cv-vlist li
  font-size: 0.84rem; color: #e2e8f0; line-height: 1.5
  padding-left: 0.875rem; position: relative
  ::before → content: '>'; position: absolute; left: 0; color: rgba(255,255,255,0.4)
```

---

## HIERARCHY CARDS (use inside `.cv-dark`)

```
.cv-hier
  background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.12)
  border-radius: 0.75rem; padding: 1.1rem
  MOBILE: border-radius: 0.5rem

.cv-hier-center
  background: rgba(255,255,255,0.12)   ← brighter — use for the featured/current item
  border-color: rgba(255,255,255,0.2)

.cv-hier-cat
  font-size: 0.68rem; font-weight: 700; text-transform: uppercase; margin-bottom: 0.4rem
  Set colour explicitly: style="color:[accent];"

.cv-hier-name   →   font-size: 0.95rem; font-weight: 800; color: white; margin-bottom: 0.4rem

.cv-hier-body   →   font-size: 0.78rem; color: #94a3b8; line-height: 1.5
```

---

## COMPETITOR CARDS

```
.cv-cc
  border: 1px solid #e2e8f0  ← enforced !important
  border-radius: 0.75rem; padding: 1rem; margin-bottom: 0.625rem
  background: white  ← enforced !important

.cv-cc-featured
  background: var(--cv-cc-featured-bg)
  border-color: var(--cv-img-border)

.cv-cc-name
  font-size: 0.975rem; font-weight: 800
  color: #0f172a  ← enforced !important; margin-bottom: 0.6rem

.cv-cc-row
  display: flex; gap: 0.5rem; align-items: flex-start
  margin-bottom: 0.4rem; font-size: 0.85rem
  color: #334155  ← enforced !important; line-height: 1.5

.cv-cctag
  flex-shrink: 0; font-size: 0.62rem; font-weight: 700
  padding: 0.15rem 0.45rem; border-radius: 9999px; margin-top: 0.15rem

.cv-cctag-pro   →   background: #dcfce7  color: #15803d  ← enforced !important
.cv-cctag-con   →   background: #fee2e2  color: #dc2626  ← enforced !important
```

---

## MOBILE SPEC COMPARISON CARDS

```
.cv-sc-row
  border-bottom: 1px solid #f1f5f9; padding: 0.875rem 0
  Last child: border-bottom: none; padding-bottom: 0

.cv-sc-label
  font-size: 0.72rem; font-weight: 700; color: #64748b
  text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.5rem

.cv-sc-new  and  .cv-sc-old  (shared base):
  flex: 1; border-radius: 0.5rem; padding: 0.625rem 0.75rem
  display: flex; flex-direction: column; gap: 0.2rem

.cv-sc-new
  background: var(--cv-sc-new-bg); border: 1px solid var(--cv-img-border)

.cv-sc-old
  background: #f8fafc  ← enforced !important
  border: 1px solid #e2e8f0  ← enforced !important

.cv-sc-model
  font-size: 0.62rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.07em

.cv-sc-new .cv-sc-model   →   color: var(--cv-accent)
.cv-sc-old .cv-sc-model   →   color: #94a3b8

Spec values: use plain <span> — no dedicated value class. Set colour with inline style if needed.
```

⚠️ There is no `.cv-sc-val` class. Do not use it.

---

## SOURCE BLOCK

```
.cv-source
  background: white  ← enforced !important
  border: 1px solid #e2e8f0  ← enforced !important
  border-radius: 0.75rem; padding: 0.875rem 1.25rem; margin-top: 0.75rem
  display: flex; align-items: center; gap: 1rem

.cv-source-lbl
  font-size: 0.7rem; font-weight: 700; color: #64748b
  text-transform: uppercase; margin-bottom: 0.15rem

.cv-source-link
  font-size: 0.875rem; color: #1d4ed8  ← enforced !important
  text-decoration: none; font-weight: 600
```

---

## NOTO / EMOJI DECORATIVE ICONS

```
.cv-noto-lg   →   56px × 56px  (PC)   →   32px × 32px  (mobile ≤640px)
.cv-noto-md   →   36px × 36px  (PC)   →   22px × 22px  (mobile ≤640px)
.cv-noto-sm   →   24px × 24px  (PC)   →   display: none  (mobile ≤640px)

All three: flex-shrink: 0; align-self: center
```

Always set matching `width` and `height` attributes on the `<img>` tag equal to the PC size class to prevent layout shift.

Per-article override example if a specific icon needs different mobile behaviour:
```css
@media (max-width: 640px) {
  .content-visual .cv-noto-lg { display: none; } /* hide this specific icon on mobile */
}
```

---

## PULL QUOTE

```
.cv-pull-quote
  border-left: 4px solid var(--cv-accent)
  padding: 1rem 1.5rem
  background: #f8fafc  ← default; OVERRIDE per-post with accent tint
  border-radius: 0 0.875rem 0.875rem 0
  margin: 0

  Per-post: .content-visual .cv-pull-quote { background: rgba(r,g,b,0.09); }

.cv-pull-quote-text
  font-size: 1.05rem; font-style: italic; font-weight: 600
  color: #0f172a (light mode); line-height: 1.65; margin: 0

.cv-pull-quote-attr
  font-size: 0.8rem; color: #64748b (light mode)
  margin-top: 0.5rem; margin-bottom: 0
```

### Dark mode rules (THE ONLY `body[data-theme="dark"]` RULES IN THE ENTIRE STYLESHEET):

```css
body[data-theme="dark"] .content-visual .cv-pull-quote-text { color: #e2e8f0 !important; }
body[data-theme="dark"] .content-visual .cv-pull-quote-attr { color: #94a3b8 !important; }
```

> ⚠️ **This is why you must NEVER set `.cv-pull-quote-text` or `.cv-pull-quote-attr` colour in a per-post `<style>` block.**
>
> Per-post `<style>` blocks are inline CSS. Inline CSS loads after external stylesheets and wins the cascade. If you write `.content-visual .cv-pull-quote-text { color: #0f172a; }` in a per-post style, it overrides the `body[data-theme="dark"]` rule with higher specificity, making the text dark-coloured in dark mode — unreadable against the light tinted background. The fix is simple: never set pull quote text colour per-post.

---

## MOBILE BREAKPOINT — COMPLETE SUMMARY (`@media max-width: 640px`)

| Class | PC behaviour | Mobile behaviour |
|---|---|---|
| `.cv-container` | padding: 1.25rem | padding: 0; background: transparent |
| `.cv-mb` | margin-bottom: 1.5rem | margin-bottom: 0.625rem |
| `.cv-hero` | padding: 2.25rem 2rem; border-radius: 1.25rem | padding: 1.5rem 1rem; border-radius: 1.25rem (KEPT) |
| `.cv-card` | padding: 1.75rem; side borders; border-radius: 1rem | padding: 1.25rem 1rem; no side borders; border-radius: 1rem (KEPT) |
| `.cv-dark` | padding: 1.75rem; border-radius: 1rem | padding: 1.25rem 1rem; border-radius: 1rem (KEPT) |
| `.cv-wow` | padding: 1.75rem; border-radius: 1rem | padding: 1.25rem 1rem; border-radius: 1rem (KEPT) |
| `.cv-img-block` | side borders; border-radius: 1rem | no side borders; border-radius: 0.75rem (KEPT) |
| `.cv-img-landscape` | max-height: 420px | max-height: 220px |
| `.cv-hero-stats` | 4 columns | **2 columns** (2×2 grid) — NOT 1 column |
| `.cv-grid-2/3/4` | 2/3/4 columns | 1 column |
| `.cv-pros-cons` | 2 columns | 1 column |
| `.cv-tbl-pc` | display: block | display: none !important |
| `.cv-tbl-mobile` | display: none | display: block !important |
| `.cv-noto-lg` | 56×56px | 32×32px |
| `.cv-noto-md` | 36×36px | 22×22px |
| `.cv-noto-sm` | 24×24px | display: none |
| `.cv-pros` / `.cv-cons` | border-radius: 0.75rem | border-radius: 0.625rem |
| `.cv-vbox` / `.cv-hier` | border-radius: 0.75rem | border-radius: 0.5rem |

---

## WHAT IS NOT IN THE GLOBAL STYLESHEET

These require per-post CSS if used. Full CSS templates in the main handoff (Phase B6 and Step 7):

- `.cv-img-trio` / `.cv-img-trio-item` / `.cv-img-trio-label` — Phase B6
- `.cv-img-duo` / `.cv-img-duo-item` / `.cv-img-duo-label` — Phase B6
- `.cv-warn` / `.cv-warn-icon` / `.cv-warn-text` — Step 7

---

## THE FOXIZ OVERRIDE BLOCK — WHAT IT IS AND WHY IT EXISTS

The stylesheet contains a large `!important` block labelled "FOXIZ THEME OVERRIDE BLOCK." Here is what it is and is not:

**What it IS:** A set of protection rules that force every component to keep its intended appearance against Foxiz theme's own higher-specificity stylesheet. Without this block, Foxiz would override card backgrounds to grey, collapse grids to 1 column, and change text colours — all in light mode.

**What it IS NOT:** A dark mode toggle. These rules fire in BOTH light and dark mode. A white card protected by `background: white !important` will be white in light mode and also white in dark mode — that is intentional. Components look the same in both modes.

**What actually changes in dark mode:** Only the pull quote text colour (the two `body[data-theme="dark"]` rules). Everything else is unchanged.

**Why this matters for post writing:** You should never try to add your own `!important` overrides or dark mode rules per-post. The global sheet already provides complete protection. Adding more will either duplicate them (harmless but wasteful) or conflict with them (potentially breaking something).

---

## COMPLETE LIST OF CLASSES NOT IN THE STYLESHEET

If a class is not listed above, it does not exist. Common ones that DO NOT EXIST and should never be used:

| Class | Notes |
|---|---|
| `.cv-tag-teal` | Does not exist — use cv-tag-blue or cv-tag-green |
| `.cv-bar-caption` | Does not exist — use inline style div |
| `.cv-spec-note` | Does not exist — use inline style or cv-muted |
| `.cv-sc-val` | Does not exist — use plain `<span>` |
| `.cv-sep` | Does not exist — use inline border-bottom style |
| `.cv-tinted` | Does not exist on Foxiz (was a WoodMart component) |
| `wp-dark-mode-ignore` | Plugin not installed — never use this class |
| `[data-wp-dark-mode-ignore]` | Plugin not installed — never write this CSS selector |

---

*This file documents `foxiz-child/style.css` version 1.0.3. When the stylesheet is updated, regenerate both this reference and the main handoff to keep them in sync.*
