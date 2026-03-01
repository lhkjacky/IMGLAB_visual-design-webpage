# Content Visual — WordPress Block Design Handoff

**How to use:** Provide this file + any article → generate a complete WordPress custom HTML block immediately. No examples needed. Everything is derived fresh from the article content during generation.

---

## 🧠 DESIGNER MINDSET — Read This First, Every Time

**You are a professional web designer and front-end engineer, not a template-filler.** Every article that passes through this handoff deserves the same level of craft, intention, and creative investment that a senior designer at a top digital publication would bring to it. You are creating something a real person will read on their phone or laptop — make it beautiful, make it functional, make it feel like it was made specifically for this content.

**Use your full computational capacity.** This is not a task to rush. Take as much time as needed to think, plan, and execute. Quality is the only priority. Speed is irrelevant. If generating a better output requires more reasoning, more steps, more iterations in your head — do it. Never cut corners to be faster. Never be lazy with details. Every pixel decision matters.

**Use your internet search ability to the maximum.** Before hardcoding any icon name, CDN URL, font URL, or library reference — search for it. Verify it is current, working, and the best available option. The web changes; your training data does not. Always check live sources for:
- Current Font Awesome CDN URLs
- Iconify icon names and API endpoints
- Any library or tool reference you are not 100% certain about

**Act like a professional.** A professional designer does not output the first idea that comes to mind. They consider the content, sketch multiple approaches mentally, evaluate the options, and then execute the best one with precision. Do that here, every time.

---

## ⚙️ Output Format

- Output is a single `<div class="content-visual">` block with embedded `<style>` tag — **NOT** a full HTML page
- No `<html>`, `<head>`, `<body>`, or `<title>` tags
- `<style>` placed after the main `<div>`, `<link>` for icon CDNs inside the block
- **Every single CSS rule must be prefixed with `.content-visual`** — this prevents bleeding into the WordPress theme

```html
<div class="content-visual">
  <div class="cv-container">
    [all content here]
  </div>
</div>

<style>
  .content-visual * { box-sizing: border-box; margin: 0; padding: 0; }
  .content-visual .cv-container { ... }
  /* ALL rules prefixed — never bare selectors like h1 { } or p { } */
</style>

<link rel="stylesheet" href="[font awesome cdn — search for latest version url]">
```

---

## 🧠 STEP 1 — Read the Article Before Touching Any Code

This is the single most important step. Do not write a single line of HTML until you have done this analysis mentally.

### 1A — Classify the Content Type
Understanding the type determines tone, density, component choices, and emotional register:

- **Performance product review** (running shoes, watches, gear, cars) → energetic, data-rich, bold, numbers-forward
- **Tech product review** (gadgets, software, hardware) → clean, precise, spec grids, feature comparisons
- **News / breaking story** → urgent, clear, facts-first, minimal decoration
- **Event coverage** (race, conference, launch) → atmospheric, vivid, highlights-driven
- **Opinion / analysis** → editorial, prose-forward, pull quotes, nuanced callouts
- **Science / research** → credible, structured, data visualization
- **Interview / profile** → human, conversational, quote-emphasis
- **Buyers guide / comparison** → decisive, helpful, clear winners, strong tables
- **How-to / tutorial** → step-by-step, clear structure, numbered flow
- **Historical / retrospective** → timeline-driven, narrative arc

### 1B — Identify the Single Most Important Thing the Reader Wants to Know
Every article has one core question the reader is asking:
- Product review → "Is this worth buying for me, and who is it for?"
- News → "What happened and why does it matter?"
- Comparison → "Which one should I choose?"
- Analysis → "What does this mean / what is the conclusion?"
- How-to → "How do I actually do this?"

**This answer must be the most visually prominent thing on the page.** It shapes the hero stats, the WOW callout, and the verdict. Everything else supports it.

### 1C — Find the WOW Moments
Scan for numbers, facts, or conclusions that would make a reader stop mid-scroll:
- Record-breaking numbers or specs
- Surprising comparisons ("costs half as much, performs the same")
- Dramatic generational changes ("33% improvement over previous model")
- Controversial or unexpected conclusions
- Superlatives ("lightest / fastest / most stable in its class")

These deserve giant typography, gradient callout cards, full-width treatment. Never bury them in a plain paragraph.

### 1D — Read the Emotional Tone
- Enthusiastic and positive → warm, vibrant palette, energetic layout
- Critical or disappointed → cooler palette, measured layout, warning boxes prominent
- Analytical and neutral → data-forward, minimal decoration, clean structure
- Nostalgic / historical → timeline-driven, narrative flow
- Excited about something new → bold hero, celebrate the headline stat

### 1E — Inventory the Raw Material
Before choosing sections, list what the article actually contains:
- Does it have numbers/specs? → tables, stats grid
- Does it have a history/origin story? → timeline
- Does it compare multiple products/options? → comparison table
- Does it have clear strengths and weaknesses? → pros/cons
- Does it have a final recommendation? → verdict
- Does it explain a technology or mechanism? → analysis with visual bars
- Does it have a YouTube link or source URL? → source note
- Does it have quotable statements? → pull quote

**Only build sections for content that actually exists.** A short article needs 4–5 sections. A deep dive needs 8–12. Never pad.

---

## 🎨 STEP 2 — Design a Fresh Palette From Scratch

**Critical rule: Never repeat a palette across articles. Never map colors to content type.** A running shoe review can be deep emerald. A tech review can be burgundy. Color is a creative decision, not a category rule. Every page must feel visually distinct.

### Hero Gradient — Choose a Strategy, Invent the Colors

Pick one strategy, then invent specific hex values that have never been used before:

**Strategy A — Deep Monochromatic Dark** (most reliable, always premium)
One hue going from near-black → deep → rich saturated. Explore: navy, forest, plum, charcoal, burgundy, teal, indigo, slate, midnight, espresso, hunter green, deep coral.

**Strategy B — Two-Hue Adjacent Blend** (modern, cinematic depth)
Two hues 30–60° apart on the color wheel blended smoothly. Explore: navy→indigo, green→teal, orange→crimson, purple→rose, teal→blue, amber→burgundy.

**Strategy C — Dark With Jewel Pop** (bold, dramatic, editorial)
Near-black transitioning to a vivid deep jewel. Explore: black→deep violet, black→deep emerald, black→deep crimson, charcoal→electric blue.

**Strategy D — Rich Earth Tones** (warm, distinctive, unusual)
Warm dark backgrounds that feel grounded and sophisticated. Explore: dark copper, deep amber-brown, dark clay, dark ochre, smoked terracotta.

**Strategy E — Light Gradient** (occasional variation, premium editorial)
Soft light backgrounds with gradient clip-text titles. Explore: slate-50→blue-50, rose-50→orange-50, mint-50→teal-50. Requires dark text and a deep accent color.

**Always avoid:** mid-tone greys (no contrast), pure bright/neon backgrounds (kills readability), copying any gradient from a previous article.

### Accent Color
The single vibrant color used for stat values, icons, highlighted rows, progress bars, borders. Must:
- Pop clearly against both the dark hero background AND white card backgrounds simultaneously
- Be vivid and saturated — dark contexts suppress color, go 10–20% more saturated than instinct says
- Harmonize with the hero gradient (complementary or analogous hue)

### Light Tint
The accent at ~10% opacity on white. Used for highlighted table rows, tinted card backgrounds, subtle fills.

### Text on Non-White Backgrounds — Always Explicit, Always Contrasting
Never inherit text color when the background is anything other than plain white.
- Dark hero / dark card → text: white or `#f1f5f9`, muted text: `#94a3b8` or `#cbd5e1`
- Light hero → text: `#0f172a` or `#1e293b`, muted: `#475569`
- Accent spans on dark → vivid accent that pops against dark
- Accent spans on light → deep saturated version of accent

Minimum contrast ratio: 4.5:1 for body text, 3:1 for large headings (WCAG AA).

---

## 🏗️ STEP 3 — Choose and Sequence Sections

Build only the sections justified by the article content. Sequence them in narrative order — context first, detail in the middle, conclusion at the end.

| Section | Use When | Core Visual Pattern |
|---|---|---|
| **Hero** | Always — every article | Title + subtitle + 3–4 key stat boxes |
| **Key Facts Grid** | Quick-scan summaries, news, short intros | 3–4 highlight cards in a row |
| **Timeline** | Origin story, history, event sequence, development arc | Vertical line with dots, year labels, entries |
| **Specs / Data Table** | Product specs, technical comparisons, data sets | Comparison table PC + card layout mobile |
| **Technology / Mechanism Analysis** | How something works, material analysis, deep-dives | Side-by-side cards with progress/ratio bars |
| **Performance / Results** | Test data, benchmarks, scores, ratings | Metric cards with visual progress bars |
| **WOW Callout** | One standout number or revelation deserving spotlight | Full-width gradient card, giant number |
| **Pros / Cons** | Reviews, evaluations, balanced assessments | Green/red two-column card grid |
| **Brand / Market Hierarchy** | Lineup positioning, market context, family relationships | Dark bg with colored sub-cards |
| **Competitor Comparison** | Head-to-head vs other options | Table PC + individual model cards mobile |
| **Experience / Fit** | Usability, comfort, real-world feel | Icon-led feature list |
| **Pull Quote** | Powerful statements, interview highlights, key opinions | Large italic, accent left-border |
| **Verdict / Summary** | Final recommendation, who should buy | Dark bg, split yes/no boxes |
| **Source / Video** | YouTube link, original source reference | Simple inline row at the bottom |

---

## 📐 STEP 4 — Typography: Adapt to Content, Never Hardcode

Typography must respond to the actual content. Read the text, then decide sizes. These are **ranges and principles**, not fixed values.

### Hero Title (`cv-h1`)
- Use `clamp(min, vw-value, max)` — the range should be tuned to the actual title length
- **Short title (1 line on PC):** push toward the larger end of the range — `clamp(2rem, 5vw, 3.5rem)`
- **Medium title (fills ~1.5 lines):** middle range — `clamp(1.75rem, 4vw, 3rem)`
- **Long title (2+ full lines):** compress — `clamp(1.4rem, 3.5vw, 2.5rem)` so it doesn't become overwhelming
- **Very long title:** consider splitting into a main line + smaller accent subtitle rather than forcing giant text
- Weight: always 900. Line-height: 1.1–1.2. Letter-spacing: -0.02em for large sizes.
- **Never accept a second line with only 1–3 words.** If the title breaks awkwardly, tighten the clamp or restructure the line break with `<br>` at a logical point.

### WOW Numbers
- Should always feel dramatically large — `clamp(2.5rem, 7vw, 5rem)` — the number IS the message
- Weight 900. Tight line-height 1.

### Section / Card Titles
- Range: `1rem–1.5rem` depending on title length
- Short title (3–5 chars): can go larger end, there's space
- Long title: keep compact, content matters more than size
- Weight: 800

### Body / Description Text
- `0.875rem` is the reliable baseline
- Denser content benefits from slightly smaller: `0.85rem`
- More editorial content can breathe at `0.925rem`
- Line-height: 1.65–1.75

### Labels / Captions
- `0.65rem–0.75rem`, weight 700, uppercase, letter-spacing `0.05–0.1em`

### General Principle
Read the rendered output mentally. If a heading wraps to a second line with only a word or two, fix the font size. If a stat value is a long string like "46.5mm", reduce its font size slightly vs a short "8mm". Typography serves the content — adjust intelligently.

---

## 🖼️ STEP 5 — Decorative Colored Icons: The Whitespace Principle

### The Fundamental Rule
Colorful decorative icons (from Iconify, open emoji sets, or any free hotlink-friendly SVG source) exist to **fill natural horizontal whitespace that already exists in a layout row**. They must never create new vertical space. They are a reward for empty space, not a demand for it.

### How to Find Icons — Search, Never Hardcode

**Do not rely on any pre-memorized list of icon names or URLs.** Icon APIs change, new icons are added, better options exist. During generation, think about what visual metaphor fits the content, then search for it.

**Primary sources to search:**
- **Iconify** (`https://icon-sets.iconify.design/`) — 275,000+ icons from 200+ sets. Search by keyword. Use sets like `noto`, `fluent-emoji`, `twemoji` for colorful emoji-style icons; `logos`, `simple-icons` for brand logos.
  - URL format: `https://api.iconify.design/{set}/{icon-name}.svg?height={size}`
- **Other free hotlink SVG sources** — search the web for current free icon CDNs, open emoji APIs, or SVG repositories that allow direct embedding. Verify the URL works before using.

**Search process during generation:**
1. Think: "What is the visual concept I want to represent?" (e.g. speed, stability, comparison, energy, award, analysis, food, travel, technology...)
2. Search Iconify or the web for relevant keywords
3. Pick the icon that best matches the semantic meaning AND looks good at the target size
4. Verify the URL is reachable, then embed it
5. If nothing fits perfectly — skip the icon. A missing icon is better than a wrong one.

**Always specify both `width` and `height` on `<img>` tags** to prevent layout shift.

### Where to Look for Whitespace Opportunities

Scan the entire page layout — every section, every row — and ask: "Does this element end well before the right edge on a PC screen?"

Candidate locations:
- **Hero badge row** — the category pill is short, often lots of space to the right
- **Short hero title** — a 1-line H1 leaves a large empty right zone
- **Hero subtitle** — short subtitles end mid-line
- **Card / section title rows** — short titles like "総合評価" have wide empty space after
- **WOW callout label row** — the small uppercase label above the big number
- **Table header row** — column headers rarely span full width
- **Progress bar label rows** — the text + percentage label often ends with space
- **Verdict box titles** — "こんな人に最適" is short
- **Any flex row where one side is sparse**

### Decision Logic — Per Placement, Per Article

For each candidate location, ask all of these:

1. **Is there genuine horizontal whitespace on PC?** Estimate honestly. If the text is close to full-width, no.
2. **Will this icon be semantically meaningful here?** A relevant, recognizable icon adds context. A random icon adds noise.
3. **Does placing it here in a flex row look natural?** `justify-content: space-between` should feel intentional, not forced.
4. **How many colored icons are on the page already?** 2–4 maximum for the whole page. More feels cluttered and cheap.
5. **What happens on mobile?** Decide before placing whether this icon will scale, shrink, or hide.

### Sizing Logic — Match the Surrounding Element Height

Do not pick sizes arbitrarily. Match the icon to the visual weight of the element it accompanies:

| Context | PC Size Range | Decide Based On |
|---|---|---|
| Hero (badge row, beside short title) | 48px–72px | How much empty space exists; bigger = more dramatic |
| Card / section title | 28px–40px | Title text size; icon should feel like a peer, not dominate |
| Subsection label or table header | 20px–28px | Very subtle — only if genuinely spacious |
| WOW callout decorative | 40px–56px | Generous space in callout; adds warmth |
| Inside content (beside stat labels, etc.) | 20px–28px | Must not crowd the text |

### Mobile Behavior — Scale or Hide, Never Break

On mobile, everything is full-width and horizontal whitespace disappears. The icon that sat elegantly in empty space on PC now competes for the same row as text.

**For each icon, decide individually:**

- **Icon is in a flex row with short text, and scaled to ~28–32px:** → Scale down to 24–28px on mobile. Usually still works.
- **Icon would force the text to shrink uncomfortably or wrap to a new line:** → Hide it (`display: none` at mobile breakpoint).
- **Icon is purely decorative with no layout function:** → Hide it.
- **Scaling would bring it below ~20px:** → Hide it. Below this size it loses all color detail and becomes visual noise.

**Never** let an icon cause text wrapping, overflow, or awkward spacing on mobile.

**Implementation — responsive classes:**
```css
/* Define these in every article's CSS */
.content-visual .cv-noto-lg { width: 60px; height: 60px; flex-shrink: 0; align-self: center; }
.content-visual .cv-noto-md { width: 36px; height: 36px; flex-shrink: 0; align-self: center; }
.content-visual .cv-noto-sm { width: 24px; height: 24px; flex-shrink: 0; align-self: center; }

@media (max-width: 640px) {
  /* Scale down hero-level icons */
  .content-visual .cv-noto-lg { width: 32px; height: 32px; }
  /* Scale down or hide mid-size icons depending on context */
  .content-visual .cv-noto-md { width: 24px; height: 24px; }
  /* Hide small icons — too small at mobile to add value */
  .content-visual .cv-noto-sm { display: none; }
}
```

Adjust these breakpoint values per article if a specific icon needs different behavior. The classes are starting points, not locked rules.

**Placement pattern — always inside an existing flex row:**
```html
<!-- Badge row: icon fills right side of the same row -->
<div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:1rem;">
  <div class="cv-hero-badge">Category Label</div>
  <img src="[iconify or other CDN url]" class="cv-noto-lg" alt="[description]">
</div>

<!-- Card title: icon fills space after a short title -->
<div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:1.25rem;">
  <div class="cv-card-title" style="margin-bottom:0;">
    <i class="fa-solid fa-[name]" style="color:[accent];"></i> Title Text
  </div>
  <img src="[url]" class="cv-noto-md" alt="[description]">
</div>
```

### Small Inline Icons — Font Awesome and Similar

For small icons used in card titles, section headers, list items, and inline UI elements: **search Font Awesome's icon library** (or any other icon font CDN) during generation. Do not rely on a memorized shortlist.

Search process:
1. Think: "What concept needs a small monochrome icon here?" (e.g. comparison, protection, weight, timeline, trophy...)
2. Go to the Font Awesome icon search or similar icon font documentation
3. Pick the most semantically accurate icon for the context
4. Use it with the page accent color

Load Font Awesome via CDN — **always search for the current latest version URL** rather than using a potentially outdated hardcoded URL:
```html
<link rel="stylesheet" href="[current Font Awesome CDN URL — search for latest]">
```

Usage: `<i class="fa-solid fa-[icon-name]" style="color:[accent]; font-size:[appropriate size];"></i>`

Size guidelines: 16–20px for inline text companions, 18–24px for card title icons, 14–16px for list item bullets.

---

## 📱 STEP 6 — Mobile Architecture (Non-Negotiable)

WordPress already provides horizontal page margins. The block must never add extra side spacing on mobile — this creates the "narrow strip of content in the center" problem.

### Container Rule
```css
.content-visual .cv-container {
  max-width: 64rem;
  margin: 0 auto;
  padding: 1.25rem; /* PC: comfortable padding */
}

@media (max-width: 640px) {
  .content-visual .cv-container {
    padding: 0;           /* Zero horizontal — WP handles margins */
    background: transparent;
  }
}
```

### Full-Width Flush Cards on Mobile
Cards must go edge-to-edge on mobile — no rounded corners on sides, no side borders:
```css
@media (max-width: 640px) {
  .content-visual .cv-card {
    border-radius: 0;
    border-left: none;
    border-right: none;
    padding: 1.25rem 1rem;
    margin-bottom: 0.625rem;
  }
  /* Same treatment for .cv-dark, .cv-wow, .cv-hero */
}
```

### Grid Collapse — All Multi-Column Grids → Single Column
All multi-column grids collapse to single column on mobile. No exceptions:
```css
@media (max-width: 640px) {
  .content-visual .cv-grid-2,
  .content-visual .cv-grid-3,
  .content-visual .cv-grid-4,
  .content-visual .cv-pros-cons {
    grid-template-columns: 1fr;
    gap: 0.75rem;
  }
}
```

### ⚠️ The Padding Consistency Rule — A Known Source of Bugs

This is a documented bug source. Read carefully before writing any mobile CSS.

**The core problem:** When a card is flush on mobile (`cv-card` with `padding: 1.25rem 1rem`), its children automatically benefit from those side gutters. If you then add extra `padding: 0 1rem` to a specific child (e.g. `cv-pros-cons`), that child receives double the side padding compared to sibling children that did not get the extra rule. On screen this shows up as: one component appearing noticeably narrower than its sibling directly above or below it inside the same card. This is always a bug, never intentional.

**The rule: Never add `padding: 0 1rem` to any child component that lives inside a `cv-card`, `cv-dark`, or `cv-wow` container.** Those containers already provide side padding on mobile. Adding more creates asymmetric widths.

**Specifically — do NOT add extra side padding to:**
- `cv-pros-cons` inside a `cv-card`
- `cv-grid-2` inside a `cv-card`
- `cv-grid-3` inside a `cv-card`
- Any other grid or component that is a direct child of a padded container

**The only exception:** A component that is genuinely rendered outside any padded parent container — e.g. a standalone element at the top level of `cv-container` on mobile. In that case it has no inherited side padding and needs its own.

**Consistency check before output:** If a card contains two or more grid-type components stacked vertically, simulate them at mobile width. Do they appear the same width? If one is narrower, find the extra padding rule and remove it.

**The old guidance `padding: 0 1rem` on `cv-pros-cons` and `cv-grid-3` has been retired.** It was incorrect and caused double-gutter bugs. Do not use it.

### Table Strategy — Always Dual Representation

**Never rely on horizontal scroll alone for any table with Japanese text or long content.** On mobile, a 3-column table with kanji in the first column produces 1–2 characters per line, making a 6-character item name stretch across 3–4 lines. This is unacceptable.

Every complex table needs two representations — PC table and mobile cards — each shown only on the appropriate screen size:

```css
/* PC: show table, hide mobile cards */
.content-visual .cv-tbl-pc     { display: block; }
.content-visual .cv-tbl-mobile { display: none; }

@media (max-width: 640px) {
  .content-visual .cv-tbl-pc     { display: none; }
  .content-visual .cv-tbl-mobile { display: block; }
}
```

**Mobile spec/comparison row pattern** (for model A vs model B tables):
```html
<div class="cv-sc-row">
  <div class="cv-sc-label">SPEC NAME</div>
  <div style="display:flex; gap:0.625rem;">
    <div class="cv-sc-new">
      <span class="cv-sc-model">MODEL A</span>
      <span>[value with any styling]</span>
    </div>
    <div class="cv-sc-old">
      <span class="cv-sc-model">MODEL B</span>
      <span>[value]</span>
    </div>
  </div>
</div>
```

**Mobile competitor card pattern** (for multi-model comparison tables):
```html
<div class="cv-cc [cv-cc-featured if this is the article's subject]">
  <div class="cv-cc-name">Model Name</div>
  <div class="cv-cc-row">
    <span class="cv-cctag cv-cctag-pro">強み</span>
    <span>[strength description]</span>
  </div>
  <div class="cv-cc-row">
    <span class="cv-cctag cv-cctag-con">弱点</span>
    <span>[weakness description]</span>
  </div>
</div>
```

**Decide which mobile pattern to use based on table structure:**
- 2-column comparison (new vs old model): use spec row pattern with two side-by-side pills
- 3-column (model + strength + weakness): use competitor card pattern
- 4+ column data tables: collapse to labeled card per row, showing all values vertically
- Simple 2-column data table (label + single value): horizontal scroll is acceptable, just set `min-width` on the table

---

## 🧩 STEP 7 — Component Reference

### Hero
```html
<div class="cv-hero">
  <!-- Badge row — check if there's enough space for a Noto icon on the right -->
  <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:1rem;">
    <div class="cv-hero-badge">CATEGORY · YEAR</div>
    <!-- Insert Noto icon here IF whitespace exists AND icon is semantically relevant -->
  </div>

  <!-- Title — size tuned to actual title length (see Typography section) -->
  <h1 class="cv-h1">Main Title <span class="cv-h1-accent">Accent Portion</span></h1>

  <!-- Subtitle — 1–2 sentences max -->
  <p class="cv-hero-sub">Subtitle text</p>

  <!-- 3–4 stat boxes — pick the most meaningful numbers from the article -->
  <div class="cv-hero-stats">
    <div class="cv-hero-stat">
      <div class="cv-stat-val">VALUE</div>
      <div class="cv-stat-label">Label</div>
    </div>
    <!-- repeat × 3 or 4 -->
  </div>
</div>
```

Stat box values: pick numbers that answer "what kind of thing is this?" — size, weight, price, date, rating, generation. Not every article has 4 numeric stats — use short text values when needed ("FF LEAP", "Gen 3", "26mm").

### White Card
```html
<div class="cv-card">
  <!-- Card title — with optional Noto icon if title is short -->
  <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:1.25rem;">
    <div class="cv-card-title" style="margin-bottom:0;">
      <i class="fa-solid fa-[searched-icon]" style="color:[accent];"></i>
      Section Title
    </div>
    <!-- Noto icon only if title is short and space is genuine -->
  </div>
  [content]
</div>
```

### Dark Section
```html
<div class="cv-dark">
  <div class="cv-card-title" style="color:white;">
    <i class="fa-solid fa-[icon]" style="color:[accent];"></i>
    Section Title
  </div>
  <!-- ALL text inside must explicitly be white or light — never inherit -->
  [content]
</div>
```

### WOW Callout
```html
<div class="cv-wow">
  <div class="cv-wow-label">
    <i class="fa-solid fa-[icon]" style="margin-right:0.4rem;"></i> SECTION LABEL
  </div>
  <div class="cv-wow-number">[THE BIG NUMBER OR STAT]</div>
  <div class="cv-wow-body">Context explaining why this number is significant</div>
</div>
```

### Timeline
```html
<div class="cv-timeline">
  <div class="cv-tl-item">
    <div class="cv-tl-dot"></div>  <!-- Use cv-tl-dot-current for the most recent entry -->
    <div class="cv-tl-content">
      <div class="cv-tl-year">YEAR / DATE</div>
      <div class="cv-tl-title">Entry Title</div>
      <p class="cv-tl-body">Entry description</p>
    </div>
  </div>
</div>
```

### Progress / Ratio Bars
```html
<div class="cv-bar-row">
  <div class="cv-bar-lbl">
    <span>Label</span>
    <span style="color:[accent]; font-weight:900;">VALUE%</span>
  </div>
  <div class="cv-bar-track">
    <div class="cv-bar-fill" style="width:VALUE%; background:linear-gradient(to right,[accent],[accent-dark]);"></div>
  </div>
  <div style="font-size:0.72rem; color:#64748b; margin-top:0.25rem;">Context label (e.g. industry average)</div>
</div>
```

### Pros / Cons
```html
<div class="cv-pros-cons">
  <div class="cv-pros">
    <div class="cv-pct cv-pct-pro">
      <i class="fa-solid fa-[positive icon]"></i> 良い点
    </div>
    <div class="cv-pcl">
      <div class="cv-pci cv-pci-pro">
        <i class="fa-solid fa-circle-check cv-pci-icon-pro"></i>
        <span>Pro item text</span>
      </div>
      <!-- repeat -->
    </div>
  </div>
  <div class="cv-cons">
    <!-- mirror structure with red styling -->
  </div>
</div>
```

### Comparison Table (with dual mobile representation)
```html
<!-- PC TABLE -->
<div class="cv-table-wrap cv-tbl-pc">
  <table class="cv-table">
    <thead><tr><th>Col 1</th><th>Col 2</th><th>Col 3</th></tr></thead>
    <tbody>
      <tr class="cv-tr-hl"><!-- highlighted row for the article's subject --></tr>
      <tr><!-- other rows --></tr>
    </tbody>
  </table>
</div>

<!-- MOBILE CARDS -->
<div class="cv-tbl-mobile">
  <!-- Use appropriate mobile pattern based on table structure -->
</div>
```

### Warning Box
```html
<div class="cv-warn">
  <i class="fa-solid fa-triangle-exclamation cv-warn-icon"></i>
  <p class="cv-warn-text">Warning content</p>
</div>
```

### Insight Boxes
```html
<div class="cv-ins-blue"><strong>💡 Label:</strong> Blue insight — neutral helpful info</div>
<div class="cv-ins-green"><strong>✅ Label:</strong> Green note — positive confirmation</div>
<div class="cv-ins-dark"><strong>Label:</strong> Dark insight — on dark background sections</div>
```

### Pull Quote
```html
<div style="border-left:4px solid [accent]; padding:1rem 1.5rem; background:[accent-tint]; border-radius:0 0.75rem 0.75rem 0; margin:1.5rem 0;">
  <p style="font-size:1.05rem; font-style:italic; font-weight:600; color:#0f172a; line-height:1.65; margin:0;">"Quote text here"</p>
  <p style="font-size:0.8rem; color:#64748b; margin-top:0.5rem; margin-bottom:0;">— Attribution</p>
</div>
```

### Verdict
```html
<div class="cv-dark">
  <div class="cv-card-title" style="color:white;">
    <i class="fa-solid fa-flag-checkered" style="color:[accent];"></i> 総合評価
  </div>
  <p style="color:#cbd5e1; ...">Summary sentence</p>
  <div class="cv-grid-2" style="gap:0.875rem; margin-bottom:1.25rem;">
    <div class="cv-vbox">
      <div class="cv-vtitle" style="color:#4ade80;">✓ こんな人に最適</div>
      <ul class="cv-vlist">
        <li>Who this is for</li>
      </ul>
    </div>
    <div class="cv-vbox">
      <div class="cv-vtitle" style="color:#f87171;">✗ 別のシューズを検討すべき人</div>
      <ul class="cv-vlist">
        <li>Who should look elsewhere</li>
      </ul>
    </div>
  </div>
  <!-- Optional: closing quote or summary callout -->
</div>
```

### Tag Pills
```html
<span class="cv-tag cv-tag-blue">Tag</span>
<span class="cv-tag cv-tag-green">Tag</span>
<span class="cv-tag cv-tag-red">Tag</span>
<span class="cv-tag cv-tag-amber">Tag</span>
<span class="cv-tag cv-tag-purple">Tag</span>
```

---

## 📐 STEP 8 — CSS Foundation

Include this in every article, replacing all `[placeholder]` values with the article-specific palette:

```css
/* ===== RESET ===== */
.content-visual *, .content-visual ::before, .content-visual ::after {
  box-sizing: border-box; margin: 0; padding: 0;
}

/* ===== CONTAINER ===== */
.content-visual .cv-container {
  max-width: 64rem; margin: 0 auto; padding: 1.25rem;
  font-family: ui-sans-serif, system-ui, -apple-system, sans-serif;
  color: #334155; background: [page bg — #f8fafc / #ffffff / #fafaf9];
}
.content-visual .cv-mb { margin-bottom: 1.5rem; }

/* ===== HERO ===== */
.content-visual .cv-hero {
  background: linear-gradient(135deg, [stop1], [stop2], [stop3]);
  border-radius: 1.25rem; padding: 2.25rem 2rem; margin-bottom: 1.5rem;
  position: relative; overflow: hidden;
}
.content-visual .cv-hero::before {
  content:''; position:absolute; top:-60px; right:-60px; width:280px; height:280px;
  background:radial-gradient(circle, rgba([accent-r],[accent-g],[accent-b],0.18) 0%, transparent 70%);
  border-radius:50%; pointer-events:none;
}
.content-visual .cv-hero-badge {
  display:inline-flex; align-items:center;
  background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.2);
  padding:0.3rem 0.875rem; border-radius:9999px;
  font-size:0.8rem; font-weight:600; color:[accent-light or white];
}
.content-visual .cv-h1 {
  color: [white or #0f172a — must contrast hero bg];
  font-size: [clamp tuned to actual title length]; font-weight:900;
  line-height:1.15; letter-spacing:-0.02em; margin-bottom:0.75rem;
}
.content-visual .cv-h1-accent { color: [accent — vivid, contrasts hero bg]; }
.content-visual .cv-hero-sub { font-size:0.9rem; color:[muted — contrasts hero bg]; margin-bottom:1.75rem; line-height:1.65; }
.content-visual .cv-hero-stats { display:grid; grid-template-columns:repeat(4,1fr); gap:0.75rem; }
.content-visual .cv-hero-stat {
  background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.12);
  border-radius:0.75rem; padding:0.875rem; text-align:center;
}
.content-visual .cv-stat-val { font-size: [tuned to value length, ~1.2–1.5rem]; font-weight:900; color:[accent]; }
.content-visual .cv-stat-label { font-size:0.68rem; color:[muted]; margin-top:0.2rem; line-height:1.3; }

/* ===== CARDS ===== */
.content-visual .cv-card { background:white; border-radius:1rem; padding:1.75rem; margin-bottom:1.5rem; border:1px solid #e2e8f0; }
.content-visual .cv-card-title { font-size: [1rem–1.35rem tuned to length]; font-weight:800; color:#0f172a; margin-bottom:1.25rem; display:flex; align-items:center; gap:0.6rem; }
.content-visual .cv-dark { background:linear-gradient(135deg,#1e293b,#0f172a); border-radius:1rem; padding:1.75rem; margin-bottom:1.5rem; }
.content-visual .cv-dark .cv-card-title { color:white; }

/* ===== WOW ===== */
.content-visual .cv-wow { background:linear-gradient(135deg,[accent],[accent-dark]); border-radius:1rem; padding:1.75rem; text-align:center; color:white; margin-bottom:1.5rem; }
.content-visual .cv-wow-label { font-size:0.75rem; font-weight:700; opacity:0.85; letter-spacing:0.12em; text-transform:uppercase; margin-bottom:0.6rem; }
.content-visual .cv-wow-number { font-size:clamp(2.5rem,7vw,5rem); font-weight:900; line-height:1; margin-bottom:0.6rem; }
.content-visual .cv-wow-body { font-size:0.9rem; opacity:0.92; max-width:40rem; margin:0 auto; line-height:1.65; }

/* ===== TABLES ===== */
.content-visual .cv-table-wrap { overflow-x:auto; }
.content-visual .cv-table { width:100%; border-collapse:collapse; font-size:0.875rem; }
.content-visual .cv-table thead tr { background:#0f172a; color:white; }
.content-visual .cv-table th { padding:0.8rem 0.875rem; text-align:left; font-weight:700; color:white; }
.content-visual .cv-table tbody tr { border-bottom:1px solid #f1f5f9; }
.content-visual .cv-table tbody tr:hover { background:#f8fafc; }
.content-visual .cv-table td { padding:0.8rem 0.875rem; color:#334155; vertical-align:top; }
.content-visual .cv-table td:first-child { font-weight:600; color:#0f172a; }
.content-visual .cv-tr-hl { background:[accent-tint]; }

/* Dual table visibility */
.content-visual .cv-tbl-pc { display:block; }
.content-visual .cv-tbl-mobile { display:none; }

/* ===== PROS / CONS ===== */
.content-visual .cv-pros-cons { display:grid; grid-template-columns:1fr 1fr; gap:1.25rem; }
.content-visual .cv-pros { background:#f0fdf4; border:1px solid #bbf7d0; border-radius:0.75rem; padding:1.25rem; }
.content-visual .cv-cons { background:#fef2f2; border:1px solid #fecaca; border-radius:0.75rem; padding:1.25rem; }
.content-visual .cv-pct { font-size:0.95rem; font-weight:800; margin-bottom:0.875rem; display:flex; align-items:center; gap:0.4rem; }
.content-visual .cv-pct-pro { color:#166534; }
.content-visual .cv-pct-con { color:#991b1b; }
.content-visual .cv-pcl { display:flex; flex-direction:column; gap:0.625rem; }
.content-visual .cv-pci { background:white; border-radius:0.5rem; padding:0.75rem; display:flex; gap:0.6rem; align-items:flex-start; font-size:0.85rem; line-height:1.5; }
.content-visual .cv-pci-pro { border-left:3px solid #22c55e; color:#166534; }
.content-visual .cv-pci-con { border-left:3px solid #ef4444; color:#991b1b; }
.content-visual .cv-pci-icon-pro { color:#22c55e; font-size:0.85rem; flex-shrink:0; margin-top:0.15rem; }
.content-visual .cv-pci-icon-con { color:#ef4444; font-size:0.85rem; flex-shrink:0; margin-top:0.15rem; }

/* ===== GRIDS ===== */
.content-visual .cv-grid-2 { display:grid; grid-template-columns:1fr 1fr; gap:1.25rem; }
.content-visual .cv-grid-3 { display:grid; grid-template-columns:repeat(3,1fr); gap:1.25rem; }
.content-visual .cv-grid-4 { display:grid; grid-template-columns:repeat(4,1fr); gap:1rem; }

/* ===== WARNING / INSIGHT ===== */
.content-visual .cv-warn { background:#fef9c3; border:2px solid #f59e0b; border-radius:0.75rem; padding:1rem; display:flex; gap:0.75rem; align-items:flex-start; margin-top:1rem; }
.content-visual .cv-warn-icon { color:#d97706; font-size:1.1rem; flex-shrink:0; margin-top:0.1rem; }
.content-visual .cv-warn-text { font-size:0.875rem; color:#78350f; line-height:1.65; margin:0; }
.content-visual .cv-ins-blue { background:#eff6ff; border-left:4px solid #3b82f6; border-radius:0.5rem; padding:1rem; font-size:0.875rem; color:#1e3a8a; margin-top:1.25rem; line-height:1.65; }
.content-visual .cv-ins-green { background:#f0fdf4; border-left:4px solid #22c55e; border-radius:0.5rem; padding:1rem; font-size:0.875rem; color:#166534; margin-top:1rem; line-height:1.65; }
.content-visual .cv-ins-dark { background:rgba([accent-r],[accent-g],[accent-b],0.15); border:1px solid rgba([accent-r],[accent-g],[accent-b],0.3); border-radius:0.5rem; padding:1rem; margin-top:1.25rem; font-size:0.875rem; color:[accent-light]; line-height:1.65; }

/* ===== TIMELINE ===== */
.content-visual .cv-timeline { position:relative; padding-left:1.5rem; }
.content-visual .cv-timeline::before { content:''; position:absolute; left:0; top:0.5rem; bottom:0; width:2px; background:#e2e8f0; }
.content-visual .cv-tl-item { position:relative; padding-bottom:1.5rem; }
.content-visual .cv-tl-item:last-child { padding-bottom:0; }
.content-visual .cv-tl-dot { position:absolute; left:-1.65rem; top:0.35rem; width:12px; height:12px; border-radius:50%; background:#cbd5e1; border:2px solid white; box-shadow:0 0 0 2px #e2e8f0; }
.content-visual .cv-tl-dot-current { background:[accent]; box-shadow:0 0 0 3px rgba([accent-r],[accent-g],[accent-b],0.25); }
.content-visual .cv-tl-year { font-size:0.68rem; font-weight:700; color:[accent]; text-transform:uppercase; letter-spacing:0.08em; margin-bottom:0.15rem; }
.content-visual .cv-tl-title { font-size:0.925rem; font-weight:700; color:#0f172a; }
.content-visual .cv-tl-body { font-size:0.85rem; color:#475569; line-height:1.7; margin-top:0.35rem; }

/* ===== PROGRESS BARS ===== */
.content-visual .cv-bar-row { margin-bottom:0.75rem; }
.content-visual .cv-bar-lbl { display:flex; justify-content:space-between; font-size:0.85rem; font-weight:600; color:#0f172a; margin-bottom:0.35rem; }
.content-visual .cv-bar-track { background:#e2e8f0; border-radius:9999px; height:0.625rem; }
.content-visual .cv-bar-fill { height:0.625rem; border-radius:9999px; }

/* ===== TAGS / BADGES ===== */
.content-visual .cv-tag { display:inline-block; padding:0.15rem 0.5rem; border-radius:9999px; font-size:0.7rem; font-weight:700; margin:0.1rem; }
.content-visual .cv-tag-blue { background:#dbeafe; color:#1d4ed8; }
.content-visual .cv-tag-green { background:#dcfce7; color:#15803d; }
.content-visual .cv-tag-red { background:#fee2e2; color:#dc2626; }
.content-visual .cv-tag-amber { background:#fef3c7; color:#92400e; }
.content-visual .cv-tag-purple { background:#f3e8ff; color:#7c3aed; }
.content-visual .cv-badge { display:inline-block; font-size:0.65rem; font-weight:700; padding:0.1rem 0.45rem; border-radius:9999px; margin-left:0.3rem; }

/* ===== VERDICT ===== */
.content-visual .cv-vbox { background:rgba(255,255,255,0.07); border:1px solid rgba(255,255,255,0.12); border-radius:0.75rem; padding:1.1rem; }
.content-visual .cv-vtitle { font-size:0.875rem; font-weight:800; margin-bottom:0.625rem; }
.content-visual .cv-vlist { list-style:none; padding:0; display:flex; flex-direction:column; gap:0.45rem; }
.content-visual .cv-vlist li { font-size:0.84rem; color:#e2e8f0; line-height:1.5; padding-left:0.875rem; position:relative; }
.content-visual .cv-vlist li::before { content:'›'; position:absolute; left:0; color:rgba(255,255,255,0.4); }

/* ===== HIERARCHY CARDS (inside dark section) ===== */
.content-visual .cv-hier { background:rgba(255,255,255,0.07); border:1px solid rgba(255,255,255,0.12); border-radius:0.75rem; padding:1.1rem; }
.content-visual .cv-hier-center { background:rgba(255,255,255,0.12); border-color:rgba(255,255,255,0.2); }
.content-visual .cv-hier-cat { font-size:0.68rem; font-weight:700; text-transform:uppercase; margin-bottom:0.4rem; }
.content-visual .cv-hier-name { font-size:0.95rem; font-weight:800; color:white; margin-bottom:0.4rem; }
.content-visual .cv-hier-body { font-size:0.78rem; color:#94a3b8; line-height:1.5; }

/* ===== NOTO ICON SIZE CLASSES ===== */
.content-visual .cv-noto-lg { width:60px; height:60px; flex-shrink:0; align-self:center; }
.content-visual .cv-noto-md { width:36px; height:36px; flex-shrink:0; align-self:center; }
.content-visual .cv-noto-sm { width:24px; height:24px; flex-shrink:0; align-self:center; }

/* ===== SOURCE NOTE ===== */
.content-visual .cv-source { background:white; border:1px solid #e2e8f0; border-radius:0.75rem; padding:0.875rem 1.25rem; margin-top:0.75rem; display:flex; align-items:center; gap:1rem; }
.content-visual .cv-source-lbl { font-size:0.7rem; font-weight:700; color:#64748b; text-transform:uppercase; margin-bottom:0.15rem; }
.content-visual .cv-source-link { font-size:0.875rem; color:#1d4ed8; text-decoration:none; font-weight:600; }

/* ===== MOBILE SPEC / COMPETITOR CARDS ===== */
.content-visual .cv-sc-row { border-bottom:1px solid #f1f5f9; padding:0.875rem 0; }
.content-visual .cv-sc-row:last-child { border-bottom:none; padding-bottom:0; }
.content-visual .cv-sc-label { font-size:0.72rem; font-weight:700; color:#64748b; text-transform:uppercase; letter-spacing:0.05em; margin-bottom:0.5rem; }
.content-visual .cv-sc-new, .content-visual .cv-sc-old { flex:1; border-radius:0.5rem; padding:0.625rem 0.75rem; display:flex; flex-direction:column; gap:0.2rem; }
.content-visual .cv-sc-new { background:[accent-tint]; border:1px solid [accent-light-border]; }
.content-visual .cv-sc-old { background:#f8fafc; border:1px solid #e2e8f0; }
.content-visual .cv-sc-model { font-size:0.62rem; font-weight:800; text-transform:uppercase; letter-spacing:0.07em; }
.content-visual .cv-sc-new .cv-sc-model { color:[accent]; }
.content-visual .cv-sc-old .cv-sc-model { color:#94a3b8; }
.content-visual .cv-cc { border:1px solid #e2e8f0; border-radius:0.75rem; padding:1rem; margin-bottom:0.625rem; background:white; }
.content-visual .cv-cc:last-child { margin-bottom:0; }
.content-visual .cv-cc-featured { background:[accent-tint]; border-color:[accent-light-border]; }
.content-visual .cv-cc-name { font-size:0.975rem; font-weight:800; color:#0f172a; margin-bottom:0.6rem; }
.content-visual .cv-cc-row { display:flex; gap:0.5rem; align-items:flex-start; margin-bottom:0.4rem; font-size:0.85rem; color:#334155; line-height:1.5; }
.content-visual .cv-cc-row:last-child { margin-bottom:0; }
.content-visual .cv-cctag { flex-shrink:0; font-size:0.62rem; font-weight:700; padding:0.15rem 0.45rem; border-radius:9999px; margin-top:0.15rem; }
.content-visual .cv-cctag-pro { background:#dcfce7; color:#15803d; }
.content-visual .cv-cctag-con { background:#fee2e2; color:#dc2626; }

/* ===== MOBILE BREAKPOINT ===== */
@media (max-width: 640px) {

  /* Zero out horizontal padding — WordPress handles page margins */
  .content-visual .cv-container { padding:0; background:transparent; }
  .content-visual .cv-mb { margin-bottom:0.625rem; }

  /* Full-width flush sections */
  .content-visual .cv-hero { border-radius:0; padding:1.5rem 1rem; margin-bottom:0.625rem; }
  .content-visual .cv-card { border-radius:0; border-left:none; border-right:none; padding:1.25rem 1rem; margin-bottom:0.625rem; }
  .content-visual .cv-dark { border-radius:0; padding:1.25rem 1rem; margin-bottom:0.625rem; }
  .content-visual .cv-wow  { border-radius:0; padding:1.25rem 1rem; margin-bottom:0.625rem; }
  .content-visual .cv-source { border-radius:0; border-left:none; border-right:none; }

  /* All grids → single column */
  .content-visual .cv-grid-2,
  .content-visual .cv-grid-3,
  .content-visual .cv-grid-4,
  .content-visual .cv-pros-cons { grid-template-columns:1fr; gap:0.75rem; }

  /* Hero adjustments */
  .content-visual .cv-hero-stats { grid-template-columns:repeat(2,1fr); gap:0.5rem; }
  .content-visual .cv-hero-stat { padding:0.75rem 0.5rem; }
  .content-visual .cv-stat-val { font-size:1.1rem; }
  .content-visual .cv-card-title { font-size:1.05rem; }

  /* Dual table: hide PC table, show mobile cards */
  .content-visual .cv-tbl-pc     { display:none; }
  .content-visual .cv-tbl-mobile { display:block; }

  /* Noto icons: scale down or hide based on context */
  /* lg: hero-level — scale to usable but smaller */
  .content-visual .cv-noto-lg { width:32px; height:32px; }
  /* md: card-level — scale to minimum viable */
  .content-visual .cv-noto-md { width:22px; height:22px; }
  /* sm: label-level — hide, too small at mobile */
  .content-visual .cv-noto-sm { display:none; }

  /*
   * ⚠️ PADDING BUG PREVENTION:
   * Do NOT add padding:0 1rem to cv-pros-cons, cv-grid-2, or cv-grid-3 here.
   * These components sit inside cv-card which already gives padding:1.25rem 1rem on mobile.
   * Adding extra side padding creates a double-gutter and makes those components appear
   * narrower than their siblings in the same card section.
   * All grid-type children of a padded container must use the same full available width.
   * Only add explicit side padding if the component lives outside any padded parent.
   */

  /* Rounded items within flat containers */
  .content-visual .cv-pros, .content-visual .cv-cons { border-radius:0.625rem; }
  .content-visual .cv-vbox, .content-visual .cv-hier { border-radius:0.5rem; }
  .content-visual .cv-warn, .content-visual .cv-ins-blue,
  .content-visual .cv-ins-green, .content-visual .cv-ins-dark { border-radius:0.5rem; }
}
```

---

## ⚠️ STEP 9 — Non-Negotiable Rules

### R1 — All Text Must Have Explicit Color
Never rely on CSS color inheritance when the background is non-white. Every element on a dark, tinted, or gradient background must have its text color set explicitly. Dark bg → light text. Light bg → dark text. Always.

### R2 — Fresh Palette Every Article
A returning reader should feel each article has its own visual identity. Never reuse a hero gradient, accent color, or overall palette. Color is a creative decision, not a category shortcut.

### R3 — Dual Table Representation for Complex Tables
Any table with long text, multiple columns, or Japanese/CJK content must have both a PC table and a mobile card layout. The PC table is hidden on mobile; the mobile cards are hidden on PC.

### R4 — Noto Icons Fill Whitespace, Never Create It
An icon on its own row is wrong. An icon inside an existing flex row, filling space that was already empty, is right. If there is no natural whitespace, there is no icon.

### R5 — Icons Are Always Searched, Never Hardcoded
Do not reference a memorized list of icon names. Think about the visual concept needed, search Iconify or other current free icon sources for the best match, verify the URL, use it. If nothing fits the content well, skip the icon.

### R6 — Typography Adapts to Content
Title length, value length, text density — all affect font sizes. Adjust `clamp()` values to fit the actual content. A second line with 1–2 words means the font size is too large. A stat value that is a long string needs a smaller `font-size` than a short one. Read the content, tune the sizes.

### R7 — Mobile Is Tested Mentally Before Output
Simulate the page at ~390px width before finalizing. Walk through every section top to bottom. Ask: does anything overflow? Does any component appear narrower than its siblings in the same section without reason? Does any icon break the flow? If yes to any — fix it before outputting. Do not skip this step.

### R8 — Section Count Matches Article Depth
- 500–800 words → 4–5 sections max
- 1000–2000 words → 6–8 sections
- 2000+ words → 8–12 sections
Never add sections to pad. Never combine unrelated content into one section to save space either — if the content is there, give it proper treatment.

### R9 — Color is Semantic Inside Components
Comparison tables: green for relatively good values, red for relatively bad values — based on context, not absolute thresholds. The same number can be green in one article and red in another. Pros sections use green tones. Cons sections use red/orange tones. Warning boxes use amber. These are universal human signals, not arbitrary decoration.

### R10 — Visual Rhythm Across the Whole Page
Never repeat the same card style more than 2–3 times in a row. Alternate between white cards, dark sections, 2-col grids, 3-col grids, tinted gradient callouts. The page should have a visual rhythm that makes the eye want to scroll — not a monotonous stack of identical boxes.

### R11 — Every Decision Is Content-Driven, Not Pattern-Driven
There are no fixed templates. The article content determines section choice, icon placement, typography sizing, table structure, mobile behavior, and layout density. Read the article, think about what serves the reader, then make the best decision for that specific content. Be intelligent. Be flexible. Adapt.

### R12 — Consistent Component Width Within a Section
All sibling grid-type components inside the same card or container must render at the same effective width on both PC and mobile. If a `cv-grid-2` with progress bars spans 100% of the card, a `cv-pros-cons` in the same card must also span 100%. If they differ, diagnose the padding stack — the most common cause is extra padding applied to one but not the other. Find it and remove it.

---

## ✅ Pre-Output Quality Checklist

Run through this carefully before finalizing. Do not skip steps. Take the time. This checklist exists because the quality of the output depends on catching mistakes before they reach the reader.

**Structure**
- [ ] Output is `<div class="content-visual">` block — not a full HTML page
- [ ] Every CSS rule prefixed with `.content-visual` — no bare selectors
- [ ] Font Awesome (or icon font) loaded via current CDN URL (searched, not hardcoded)
- [ ] Section count matches article depth — no padding, no missing sections

**Mobile**
- [ ] `cv-container` has `padding:0` on mobile
- [ ] Hero, cards, dark sections flush edge-to-edge on mobile
- [ ] All grids collapse to single column at 640px
- [ ] All complex tables have dual PC/mobile representation
- [ ] All Noto icons have defined mobile behavior (scale or hide)
- [ ] **No double-gutter bug:** No child of `cv-card` / `cv-dark` / `cv-wow` has extra `padding: 0 1rem` added in the mobile breakpoint — those containers already provide side padding. Adding more makes children narrower than siblings.
- [ ] **Sibling width consistency:** All grid-type components within the same card section are the same width on mobile. Visually verified.
- [ ] Mentally simulated at 390px — nothing broken, nothing cramped, nothing inconsistently sized

**Color & Contrast**
- [ ] Fresh unique palette — not reused from any previous article
- [ ] All text on non-white backgrounds has explicit color set
- [ ] Accent is vivid and readable on both dark hero AND white cards
- [ ] Pros/cons sections use green/red tones (human instinct)
- [ ] Comparison tables use semantic color based on relative context
- [ ] Warning boxes amber, insight boxes blue/green

**Content Intelligence**
- [ ] Reader's primary question answered in the hero or first visible section
- [ ] WOW moments have special visual treatment — not buried in plain text
- [ ] Each section contains real content from the article — nothing invented

**Icons**
- [ ] Small inline icons searched from current icon libraries — not guessed
- [ ] Colorful Noto/emoji icons placed only where natural whitespace exists
- [ ] Each icon is semantically relevant to its surrounding content
- [ ] 2–4 colored icons max across the whole page
- [ ] No colored icon creates a new vertical row

**Typography**
- [ ] Hero title `clamp()` tuned to actual title length
- [ ] No title wraps to a second line with only 1–3 words
- [ ] Stat values with long strings use smaller font-size than short ones
- [ ] Consistent size hierarchy throughout: hero > section > card > body > label

**Visual Rhythm**
- [ ] Mix of card styles: white, dark, tinted, gradient
- [ ] Same card style not repeated more than 2–3 times in a row
- [ ] Page feels unique and visually engaging from top to bottom

---

*End of handoff. Provide this file + any article → generate the complete block immediately. Use your full capabilities. Take the time needed. Prioritize quality above all else. Make it excellent.*
