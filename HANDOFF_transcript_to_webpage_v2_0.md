# Transcript → WordPress Block Handoff v2.0

## 🚀 AUTO-TRIGGER INSTRUCTION — READ THIS FIRST

**If you are reading this file, your job is already defined. Do not ask the user what to do.**

You have been given this handoff file and a transcript file. That is all you need. Immediately begin executing the full workflow below — Phase A through the final outputs — without asking any clarifying questions. The user wants **two deliverables**: (1) a complete Japanese WordPress HTML block, and (2) an SEO-optimised WordPress post title in a plain text file. Both must be produced. Start now.

If anything in the transcript is ambiguous, make the best editorial judgment and proceed. Do not stop to ask.

---

## ⚡ WHAT'S NEW IN v2.0 — READ BEFORE ANYTHING ELSE

**The site now has a global shared stylesheet loaded by the WordPress child theme (`woodmart-child/style.css`). This changes what goes in each post's `<style>` block.**

### What the global stylesheet already handles (do NOT repeat in the post `<style>`):

- All CSS reset rules
- All layout: `.cv-container`, `.cv-mb`, grids (`.cv-grid-2/3/4`), `.cv-pros-cons`
- All card base styles: `.cv-card`, `.cv-dark`, `.cv-wow`
- All typography: `.cv-h1`, `.cv-hero-badge`, `.cv-hero-stats`, `.cv-stat-val`, `.cv-stat-label`, `.cv-hero-sub`
- All tables: `.cv-table`, `.cv-tr-hl`, `.cv-tbl-pc`, `.cv-tbl-mobile`
- Dark table overrides: `.cv-dark .cv-table td`, `.cv-dark .cv-tr-hl td` etc.
- All pros/cons: `.cv-pros`, `.cv-cons`, `.cv-pci`, `.cv-pct` etc.
- All progress bars: `.cv-bar-row`, `.cv-bar-track`, `.cv-bar-fill`, `.cv-bar-lbl`
- All insight boxes: `.cv-ins-blue`, `.cv-ins-green`, `.cv-ins-amber`
- `.cv-ins-dark` base styles (background and border using hardcoded fallback)
- All timeline: `.cv-timeline`, `.cv-tl-item`, `.cv-tl-dot`, `.cv-tl-year` etc.
- All tags: `.cv-tag-blue/green/red/amber/purple`
- All verdict: `.cv-vbox`, `.cv-vlist`
- All hierarchy cards: `.cv-hier`, `.cv-hier-name`, `.cv-hier-body`
- All competitor cards: `.cv-cc`, `.cv-cctag-pro/con`
- All mobile spec cards: `.cv-sc-row`, `.cv-sc-new`, `.cv-sc-old`
- All source note: `.cv-source`, `.cv-source-link`
- All Noto icon sizes: `.cv-noto-lg/md/sm`
- All WP Dark Mode universal overrides for the above (the global `[data-wp-dark-mode-ignore]` block)
- The full mobile breakpoint `@media (max-width: 640px)` for all of the above
- Font Awesome is loaded globally — **do NOT add a Font Awesome `<link>` tag in the post**

### What each post's `<style>` block MUST still contain:

The post `<style>` block is now small. It contains **only** the things that are unique to that article's palette and cannot be in the global stylesheet:

**1. CSS variables block (required for every post):**
```html
<style>
.content-visual {
  --cv-accent: [vivid accent color];
  --cv-hero-bg: linear-gradient(135deg, [stop1], [stop2], [stop3]);
  --cv-hero-sub-color: [muted light color for hero subtitle and stat labels];
  --cv-badge-color: [light color for hero badge text];
  --cv-glow: rgba([accent-rgb], 0.18);
  --cv-wow-bg: linear-gradient(135deg, [accent], [accent-dark]);
  --cv-hl: [light accent tint for highlighted table rows, ~10% opacity on white];
  --cv-img-border: [light accent tint for image block borders];
  --cv-sc-new-bg: [light accent tint for mobile spec new model pill];
  --cv-cc-featured-bg: [light accent tint for featured competitor card];
  --cv-table-head-bg: [dark color for table header — usually #0f172a or accent-dark];
}
</style>
```

**2. WP Dark Mode per-post overrides (required — covers variable-driven rules the global sheet cannot override):**
```css
[data-wp-dark-mode-ignore] .cv-hero { background: var(--cv-hero-bg) !important; }
[data-wp-dark-mode-ignore] .cv-wow { background: var(--cv-wow-bg) !important; }
[data-wp-dark-mode-ignore] .cv-stat-val { color: var(--cv-accent) !important; }
[data-wp-dark-mode-ignore] .cv-h1-accent { color: var(--cv-accent) !important; }
[data-wp-dark-mode-ignore] .cv-card .cv-tr-hl td { background: var(--cv-hl) !important; }
[data-wp-dark-mode-ignore] .cv-sc-new { background: var(--cv-sc-new-bg) !important; border-color: var(--cv-img-border) !important; }
[data-wp-dark-mode-ignore] .cv-sc-new .cv-sc-model { color: var(--cv-accent) !important; }
```

**3. `.cv-ins-dark` text color (required — global sheet sets background/border only, text color is accent-dependent):**
```css
[data-wp-dark-mode-ignore] .cv-ins-dark { color: [accent-appropriate light color] !important; }
```

**4. Any per-article additions that don't exist in the global sheet** (e.g. special one-off component, custom font size tweak, unique layout variation). Keep these minimal.

### Critical `cv-tr-hl` scoping rule (learned from a real bug):

The highlighted row override in the post `<style>` **MUST be scoped to `.cv-card`**:

```css
/* CORRECT — only affects white card tables, not dark section tables */
[data-wp-dark-mode-ignore] .cv-card .cv-tr-hl td { background: var(--cv-hl) !important; }

/* WRONG — bleeds into dark section tables, making light-background rows appear there too */
[data-wp-dark-mode-ignore] .cv-tr-hl td { background: var(--cv-hl) !important; }
```

The global stylesheet already handles `.cv-dark .cv-tr-hl` with its own correct colors. Scoping to `.cv-card` ensures the two never interfere.

---

## 🌐 PHASE A — TRANSCRIPT PROCESSING & TRANSLATION

*Complete all steps in this phase before touching any design or code. The quality of everything downstream depends on getting this right.*

### A1 — Clean and Filter the Raw Transcript

The transcript is raw spoken content. Before anything else, mentally filter it:

**Include:**
- All substantive content about the main topic (product specs, comparisons, personal experience, analysis, conclusions)
- Factual claims, numbers, observations, test results
- Opinions and recommendations that are specific and actionable

**Exclude entirely — do not translate or mention:**
- Channel intros/outros, subscribe/like/comment calls-to-action
- Sponsor segments unrelated to the main topic
- Off-topic tangents, filler phrases, repeated verbal tics ("you know", "like", "right", etc.)
- Timestamps, chapter markers, auto-generated noise
- Price mentions — prices change constantly and vary by region. Omit all price information.

### A2 — Extract the Core Narrative

Identify before writing a single word of Japanese:
1. **Main subject** — what product, event, technology, or story is this about?
2. **Primary thesis** — what is the creator's main conclusion or point of view?
3. **Key data points** — numbers, specs, comparisons, benchmarks that anchor the content
4. **Narrative arc** — background → details → analysis → conclusion
5. **Target reader** — who would benefit most from this content?

### A3 — Translation Protocol: Search First, Write Second

Translation is the most failure-prone step. A mistranslated brand name, technology term, or material name makes the entire article meaningless to Japanese readers. **For every item in the following categories, search the web for the correct Japanese equivalent before writing it.**

---

#### Brand and Product Names

Always search for the official Japanese name used by the brand in Japan. Check the brand's Japanese website, Japanese Amazon listing, or Japanese retailer pages. Never guess katakana transliteration.

Examples of the correct search-first approach:
- "Vomero" → ボメロ (not ヴォメロ) — verify on Nike Japan official site
- "Saucony" → サッカニー (not サコニー) — verify on Saucony Japan

Apply this same search discipline to **every** brand name, product line name, and model name in the content.

#### Technology and Material Names

Search "[term] 日本語" or "[term] [category] 意味" to find the established Japanese translation used by industry publications. Do not guess or transliterate technical terms.

Examples of categories requiring this treatment:
- Running shoe tech: ZoomX, ReactX, FF TURBO, PWRRUN+, PEBA foam, carbon fiber plate, rocker geometry, stack height, heel-to-toe drop, heel counter, outsole rubber, Vibram, Continental rubber
- Electronics tech: processor names, GPU names, sensor names, display technology names, codec names
- Sports/medical terms: pronation, supination, VO2max, lactate threshold, cadence
- Materials science terms: graphene, carbon nanotube, aramid fiber

If no established Japanese translation exists, use the English term in katakana — but verify that this is indeed the industry convention by searching first.

#### Unit Conversions — Always Calculate, Never Just Relabel

Every unit conversion must be mathematically correct. Multiply by the correct conversion factor. Round appropriately. Never swap the label without doing the math.

| Source Unit | Target Unit | Conversion Rule |
|---|---|---|
| miles | km | Multiply by 1.60934. Round to 1 decimal. e.g. 26.2 miles = 42.2 km |
| oz (weight) | g | Multiply by 28.3495. Round to nearest gram. e.g. 8.8 oz = 250 g |
| lbs | kg | Multiply by 0.453592. Round to 2 decimal places. |
| inches | cm | Multiply by 2.54. Round to 1 decimal. |
| °F | °C | (°F - 32) × 5/9. Round to 1 decimal. |
| fl oz | ml | Multiply by 29.5735. Round to nearest ml. |
| min/mile (pace) | min/km | Divide by 1.60934. e.g. 6:00/mile = 3:44/km. **Critical:** treat "6:30" as 6 minutes 30 seconds (6.5 minutes total), not 6.3 minutes. Convert the seconds component separately to avoid errors. |

⚠️ If the transcript gives a value and you are unsure of the original unit, search for the spec on the official brand website or RunRepeat to confirm the correct value in metric before publishing.

#### Shoe Specs Standard

**Weight:** Always verify for 27cm (US9 Men's equivalent) in grams. If the transcript states a weight for a different size, find the correct 27cm figure from RunRepeat, Running Warehouse, or the brand's official spec sheet. Never use an estimated weight.

**Stack height, drop, heel-to-toe differential, midsole materials:** Always verify against brand official specs or RunRepeat before including. Transcripts frequently misquote specs from memory.

### A4 — Handling Conflicting Data

If the transcript gives a spec that contradicts what you find on an authoritative source:

1. Use the **official brand specification** as the authoritative value
2. If the brand site and RunRepeat disagree, note the discrepancy in the text
3. Never use random forum posts, blog posts from unknown sources, or unverified web data
4. Source priority: **Brand official site > RunRepeat > Running Warehouse > recognized publications > all else**

### A5 — Japanese Writing Style

**Journalistic register.** Write as a professional journalist for a respected Japanese publication — the tone of Nikkei, Gizmodo Japan, or Runner's World Japan. This means:

- Factual, balanced, engaging — no hype, no exclamation marks, no sensational phrases
- Smooth paragraph prose for narrative sections; bullet lists only for specs, pros/cons, and step-by-step items
- Smooth transitions that create narrative flow from section to section
- Objective analysis with subtle storytelling
- Never use promotional language or calls to action

### A6 — Content Scope

This handoff handles any content type, not only running shoes. Apply the same search-first translation discipline to electronics reviews, news articles, event coverage, how-to guides, comparisons, and any other topic.

---

## 🖼️ PHASE B — IMAGES

*Complete this phase after the article content is written but before generating the final HTML. Images must be contextual, verified, and properly attributed. This phase has caused serious mistakes in the past — read every rule carefully.*

### B1 — Image Philosophy

Images must serve the content. Every image placed on the page must visually match the section it accompanies:

- **Lifestyle/action shot** → after hero, shows the product in use, sets the scene
- **Product flat shots (multiple angles/colorways)** → after specs section, shows what the reader will buy
- **Detail/technical shots (midsole, outsole, upper)** → beside or after technical analysis sections
- **Never** place a single large image at the top and call it done — contextual placement throughout the page is always better

Aim for **3–5 images** distributed across the page. More than 5 risks slowing the page and looking cluttered. Fewer than 3 feels thin.

### B2 — Where to Find Official Images

Always prefer official brand sources in this priority order:

1. **Brand corporate press room** (e.g. `corp.asics.com/en/press`, `news.nike.com`, `pressroom.adidas.com`) — highest authority, intended for media use
2. **Brand EMEA / regional newsrooms** (e.g. `news-emea.asics.com`) — often contains the largest gallery of press images
3. **TheNewsMarket** (`thenewsmarket.com/Previews/[BRAND]/`) — ASICS and many brands distribute press images here
4. **Brand official product pages** (`asics.com`, `nike.com`, etc.) — product images are official but may be harder to deep-link
5. **Running Warehouse, Clever Training** — clean product shots, generally safe for review context

Never use images from random blogs, forums, or unverified aggregator sites.

### B3 — The URL Verification Rule (CRITICAL — Past Mistakes Were Made Here)

> **This is the most important rule in Phase B. It was violated in a past session and caused multiple broken images to ship to the user.**

#### The exact mistake that was made:
A press newsroom page contained thumbnail image URLs with a size subfolder embedded:
`https://preview.thenewsmarket.com/Previews/ASIC/StillAssets/320x320/712946.jpg`

Instead of using this exact URL, the URL was modified — the size subfolder `/320x320/` was swapped for `/640x640/` and `/1920x1080/` to try to get larger images. This was a **pure guess** based on a common CDN pattern. The modified URLs returned 404 errors. The correct URL (without any size subfolder) was:
`https://preview.thenewsmarket.com/Previews/ASIC/StillAssets/712946.jpg`

#### The rule going forward:

**Step 1 — Extract URLs exactly as found.**
Copy image URLs character-for-character from the source HTML. Do not modify, abbreviate, or restructure them in any way.

**Step 2 — Verify every URL before including it.**
Use the `web_fetch` tool to attempt to load each image URL. If `web_fetch` succeeds and returns image data, the URL is confirmed live. If it fails or returns an error, the URL is dead — do not use it.

If `web_fetch` is unavailable or blocked for a specific URL, explicitly tell the user: *"I cannot verify this URL from my environment. Please test it in your browser before publishing."* Then include it as a candidate with a clear warning, not as a confirmed working link.

**Step 3 — Never include an unverified URL in the final HTML.**
A broken image in the published article is worse than no image. If you cannot confirm a URL works, omit it and note the omission to the user.

**Step 4 — If the user confirms a URL pattern works, apply it consistently.**
If the user tests a URL and confirms the pattern, you may apply that same correction to other IDs from the same CDN — but note in your response that you are doing so, and still ask the user to verify a sample before treating the whole batch as confirmed.

### B4 — The Image Description Rule (CRITICAL — Past Mistakes Were Made Here)

**You may only describe what you have actually seen.**

- If you have **viewed the image** → you may write a specific descriptive label
- If you have **not viewed the image** → use only a generic neutral label like「公式プロダクトショット」or「製品画像」— never guess at colorway, angle, or content
- **Never infer visual content from filenames, ID numbers, or adjacent text.**

#### Alt text doubles as the filename (Smart Auto Upload plugin):
Write alt texts as clean, lowercase, hyphenated English descriptors:

✅ Good: `asics-superblast-3-cobalt-burst-light-orange-front`
❌ Bad: `ASICS SUPERBLAST 3 — ミッドソール側面ビュー`

Rules: lowercase only, hyphens, include brand + model + detail + year, no Japanese/special chars, max ~60 characters, describe only what you have confirmed.

### B5 — Attribution (Required)

**Inline credit under each image:**
```html
<div class="cv-img-credit">© [Brand] / [Source name] — 公式プレス素材</div>
```

**Page-level attribution footer** (at the very bottom of the article, before closing `</div>`):
```html
<div style="padding:0.75rem 1rem; font-size:0.7rem; color:#94a3b8; line-height:1.7; border-top:1px solid #e2e8f0; margin-top:0.5rem;">
  <strong style="color:#64748b;">画像出典：</strong>本ページの製品画像は[Brand]の公式プレスリリース素材を使用しています。画像の著作権は[Brand]に帰属します。本記事は[Brand]とは独立したレビュー記事であり、ブランドとは関係ありません。
</div>
```

### B6 — Mobile Image Behavior

The global stylesheet already handles `.cv-img-block`, `.cv-img-main`, `.cv-img-landscape`, and their mobile rules. Do not repeat these in the post `<style>`.

For image trios and duos, add only the CSS that is not in the global sheet:

**3-column product image trio** (not in global sheet — add to post style if used):
```css
.content-visual .cv-img-trio { display:grid; grid-template-columns:repeat(3,1fr); gap:0.75rem; margin-bottom:1.5rem; }
.content-visual .cv-img-trio-item { background:white; border-radius:0.875rem; overflow:hidden; border:1px solid var(--cv-img-border, #fbd0bf); }
.content-visual .cv-img-trio-item .cv-img-main { aspect-ratio:1/1; object-fit:cover; }
.content-visual .cv-img-trio-label { font-size:0.7rem; font-weight:600; color:#475569; text-align:center; padding:0.4rem 0.5rem 0.5rem; background:#f8fdfd; border-top:1px solid var(--cv-img-border, #fbd0bf); }
@media (min-width:641px) and (max-width:900px) {
  .content-visual .cv-img-trio { grid-template-columns:1fr 1fr; }
  .content-visual .cv-img-trio-item:last-child { grid-column:span 2; }
  .content-visual .cv-img-trio-item:last-child .cv-img-main { aspect-ratio:2/1; }
}
@media (max-width:640px) {
  .content-visual .cv-img-trio { grid-template-columns:1fr; gap:0.5rem; margin-bottom:0.625rem; }
  .content-visual .cv-img-trio-item { border-radius:0; border-left:none; border-right:none; }
  .content-visual .cv-img-trio-item .cv-img-main { aspect-ratio:3/2; }
}
```

**2-column image duo** (not in global sheet — add to post style if used):
```css
.content-visual .cv-img-duo { display:grid; grid-template-columns:1fr 1fr; }
.content-visual .cv-img-duo-item:first-child { border-right:1px solid var(--cv-img-border, #fbd0bf); }
.content-visual .cv-img-duo-item .cv-img-main { aspect-ratio:4/3; object-fit:cover; }
.content-visual .cv-img-duo-label { font-size:0.68rem; color:#64748b; padding:0.4rem 0.75rem 0.5rem; background:#f8fdfd; border-top:1px solid var(--cv-img-border, #fbd0bf); line-height:1.4; min-height:2.2rem; display:flex; align-items:center; }
@media (max-width:640px) {
  .content-visual .cv-img-duo { grid-template-columns:1fr; }
  .content-visual .cv-img-duo-item:first-child { border-right:none; border-bottom:1px solid var(--cv-img-border, #fbd0bf); }
  .content-visual .cv-img-duo-item .cv-img-main { aspect-ratio:3/2; }
}
```

---

## 🏗️ PHASE C — HTML STRUCTURE & FILE RULES

> **These rules are mandatory and non-negotiable.**

### C1 — MANDATORY FILE STRUCTURE ORDER

**The correct order of the output file, top to bottom:**

```
LINE 1:   <div class="content-visual" data-wp-dark-mode-ignore="true">
LINE 2:   <!-- Article comment — NO Font Awesome link (it's loaded globally) -->
LINE 3+:  ALL HTML CONTENT (hero, cards, sections, images, footer...)
NEAR END: </div><!-- /cv-container -->
          </div><!-- /content-visual -->
LAST:     <style> ... per-post CSS variables and overrides only ... </style>
```

**Why this order is mandatory:** WordPress Custom HTML blocks use the first few lines of text as the post excerpt. If `<style>` appears before the HTML content, raw CSS becomes the excerpt.

> ⛔ Do NOT add a `<link>` tag for Font Awesome. It is loaded globally by `functions.php`.

### C2 — WP DARK MODE COMPATIBILITY

The site uses **WP Dark Mode plugin v5.0.9 (Sapphire preset)**. The global stylesheet handles most overrides. The post `<style>` handles the remaining palette-specific overrides.

#### Protection strategy:

**Part 1 — Root container:**
```html
<div class="content-visual" data-wp-dark-mode-ignore="true">
```

**Part 2 — `wp-dark-mode-ignore` on every element:**
Every `div`, `p`, `span`, `strong`, `i`, `h1`–`h6`, `ul`, `ol`, `li`, `table`, `th`, `td` etc. must have `wp-dark-mode-ignore` in its class list — **except `cv-container`**.

> ⛔ **`<i>` tags are the single most commonly missed element.** Always add `wp-dark-mode-ignore` to every `<i>` tag.

**Part 3 — `cv-container` intentionally has NO `wp-dark-mode-ignore`:**
This lets its background go transparent in dark mode.

**Part 4 — Per-post `<style>` block (at the bottom of the file):**

```html
<style>
/* Per-post palette variables */
.content-visual {
  --cv-accent: [accent];
  --cv-hero-bg: linear-gradient(135deg, [stop1], [stop2], [stop3]);
  --cv-hero-sub-color: [muted];
  --cv-badge-color: [badge text color];
  --cv-glow: rgba([accent-rgb], 0.18);
  --cv-wow-bg: linear-gradient(135deg, [accent], [accent-dark]);
  --cv-hl: [accent tint];
  --cv-img-border: [accent light border];
  --cv-sc-new-bg: [accent tint];
  --cv-cc-featured-bg: [accent tint];
  --cv-table-head-bg: [dark color for table headers];
}

/* WP Dark Mode — per-post variable overrides */
[data-wp-dark-mode-ignore] .cv-hero { background: var(--cv-hero-bg) !important; }
[data-wp-dark-mode-ignore] .cv-wow { background: var(--cv-wow-bg) !important; }
[data-wp-dark-mode-ignore] .cv-stat-val { color: var(--cv-accent) !important; }
[data-wp-dark-mode-ignore] .cv-h1-accent { color: var(--cv-accent) !important; }
[data-wp-dark-mode-ignore] .cv-card .cv-tr-hl td { background: var(--cv-hl) !important; }
[data-wp-dark-mode-ignore] .cv-sc-new { background: var(--cv-sc-new-bg) !important; border-color: var(--cv-img-border) !important; }
[data-wp-dark-mode-ignore] .cv-sc-new .cv-sc-model { color: var(--cv-accent) !important; }
[data-wp-dark-mode-ignore] .cv-ins-dark { color: [accent-appropriate light color] !important; }

/* [Add any per-article one-off rules below this line only if genuinely needed] */
</style>
```

---

## 🧠 DESIGNER MINDSET — Read This First, Every Time

**You are a professional web designer and front-end engineer, not a template-filler.** Every article that passes through this handoff deserves the same level of craft, intention, and creative investment that a senior designer at a top digital publication would bring to it.

**Use your full computational capacity.** Quality is the only priority. Never cut corners. Every detail matters.

**Use your internet search ability to the maximum.** Before using any icon name, CDN URL, brand name, or spec — search for it. Verify it is current and correct.

---

## ⚙️ Output Format

- Output is a single `<div class="content-visual">` block — **NOT** a full HTML page
- No `<html>`, `<head>`, `<body>`, or `<title>` tags
- No `<link>` for Font Awesome — it is loaded globally
- `<style>` placed at the very bottom — contains CSS variables + per-post overrides only
- The `<style>` block is now typically **8–20 lines**, not 300+

---

## 🧠 STEP 1 — Read the Article Before Touching Any Code

This is the single most important step. Do not write a single line of HTML until you have done this analysis mentally.

### 1A — Classify the Content Type
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

**This answer must be the most visually prominent thing on the page.**

### 1C — Find the WOW Moments
Scan for numbers, facts, or conclusions that would make a reader stop mid-scroll. These deserve giant typography, gradient callout cards, full-width treatment. Never bury them in a plain paragraph.

### 1D — Read the Emotional Tone
- Enthusiastic and positive → warm, vibrant palette, energetic layout
- Critical or disappointed → cooler palette, measured layout, warning boxes prominent
- Analytical and neutral → data-forward, minimal decoration, clean structure

### 1E — Inventory the Raw Material
Before choosing sections, list what the article actually contains. **Only build sections for content that actually exists.** A short article needs 4–5 sections. A deep dive needs 8–12. Never pad.

---

## 🎨 STEP 2 — Design a Fresh Palette From Scratch

**Critical rule: Never repeat a palette across articles. Never map colors to content type.** Every page must feel visually distinct.

### Hero Gradient — Choose a Strategy, Invent the Colors

Pick one strategy, then invent specific hex values that have never been used before:

- **Strategy A — Deep Monochromatic Dark**: One hue going from near-black → deep → rich saturated
- **Strategy B — Two-Hue Adjacent Blend**: Two hues 30–60° apart on the color wheel
- **Strategy C — Dark With Jewel Pop**: Near-black transitioning to a vivid deep jewel
- **Strategy D — Rich Earth Tones**: Warm dark backgrounds, grounded and sophisticated
- **Strategy E — Light Gradient**: Soft light backgrounds with dark text (occasional variation)

### Accent Color
Must pop clearly against both dark hero AND white card backgrounds. Be vivid and saturated.

### CSS Variables Checklist
For every new palette, define all of the following:
- `--cv-accent` — the main vivid color
- `--cv-hero-bg` — the hero gradient
- `--cv-hero-sub-color` — muted light for hero subtitle/labels
- `--cv-badge-color` — hero badge text color
- `--cv-glow` — radial glow color in hero (accent at ~18% opacity)
- `--cv-wow-bg` — WOW callout gradient
- `--cv-hl` — table highlight row tint (~8–12% accent on white)
- `--cv-img-border` — image block border color (light accent)
- `--cv-sc-new-bg` — mobile spec new model pill background
- `--cv-cc-featured-bg` — featured competitor card background
- `--cv-table-head-bg` — table header background (usually `#0f172a` or accent-dark)

---

## 🏗️ STEP 3 — Choose and Sequence Sections

Build only the sections justified by the article content. Sequence them in narrative order.

| Section | Use When | Core Visual Pattern |
|---|---|---|
| **Hero** | Always — every article | Title + subtitle + 3–4 key stat boxes |
| **Key Facts Grid** | Quick-scan summaries, news, short intros | 3–4 highlight cards in a row |
| **Timeline** | Origin story, history, event sequence | Vertical line with dots, year labels |
| **Specs / Data Table** | Product specs, technical comparisons | Comparison table PC + card layout mobile |
| **Technology / Analysis** | How something works, material deep-dive | Side-by-side cards with progress bars |
| **Performance / Results** | Test data, benchmarks, scores | Metric cards with visual progress bars |
| **WOW Callout** | One standout number or revelation | Full-width gradient card, giant number |
| **Pros / Cons** | Reviews, evaluations, balanced assessments | Green/red two-column card grid |
| **Brand / Market Hierarchy** | Lineup positioning, market context | Dark bg with colored sub-cards |
| **Competitor Comparison** | Head-to-head vs other options | Table PC + individual model cards mobile |
| **Experience / Fit** | Usability, comfort, real-world feel | Icon-led feature list |
| **Pull Quote** | Powerful statements, key opinions | Large italic, accent left-border |
| **Verdict / Summary** | Final recommendation, who should buy | Dark bg, split yes/no boxes |
| **Source / Video** | YouTube link, original source reference | Simple inline row at the bottom |

---

## 📐 STEP 4 — Typography: Adapt to Content, Never Hardcode

Typography must respond to the actual content. These are **ranges and principles**, not fixed values.

### Hero Title (`cv-h1`)
- Use `clamp(min, vw-value, max)` tuned to the actual title length
- Short title: `clamp(2rem, 5vw, 3.5rem)` — Medium: `clamp(1.75rem, 4vw, 3rem)` — Long: `clamp(1.4rem, 3.5vw, 2.5rem)`
- Weight: 900. Line-height: 1.1–1.2. Letter-spacing: -0.02em
- **Never accept a second line with only 1–3 words.** Use `<br>` at a logical break point if needed.

> ⚠️ The global stylesheet sets `cv-h1` font-size to `clamp(1.75rem, 4.5vw, 3rem)` as a default. **Override this in the post `<style>` if the actual title length requires it.**

### WOW Numbers
`clamp(2.5rem, 7vw, 5rem)`, weight 900, line-height 1.

### Section / Card Titles
`1rem–1.5rem` depending on title length. Weight: 800.

> ⚠️ The global stylesheet sets `cv-card-title` to `1.1rem`. Override in post `<style>` for specific cards if needed.

### Body / Description Text
`0.875rem` baseline, line-height 1.65–1.75.

---

## 🖼️ STEP 5 — Decorative Colored Icons: The Whitespace Principle

Colorful decorative icons exist to **fill natural horizontal whitespace that already exists**. They must never create new vertical space.

### How to Find Icons — Search, Never Hardcode

**Do not rely on any pre-memorized list of icon names or URLs.** During generation, think about the visual metaphor needed, then search for it.

**Primary sources:**
- **Iconify** (`https://icon-sets.iconify.design/`) — URL format: `https://api.iconify.design/{set}/{icon-name}.svg?height={size}`

### Font Awesome Icons
Font Awesome is already loaded globally. Use icons directly without any `<link>` tag:
```html
<i class="fa-solid fa-[icon-name] wp-dark-mode-ignore" style="color:[accent];"></i>
```

Search Font Awesome for icon names — never guess from memory.

### Sizing Logic
| Context | PC Size Range |
|---|---|
| Hero (badge row, beside short title) | 48px–72px |
| Card / section title | 28px–40px |
| WOW callout decorative | 40px–56px |
| Inside content | 20px–28px |

### Mobile Behavior
The global stylesheet handles `.cv-noto-lg/md/sm` sizing. Decide per article if an icon needs to hide on mobile by adding `display:none` in the post `<style>` mobile block.

---

## 📱 STEP 6 — Mobile Architecture (Non-Negotiable)

The global stylesheet handles all the core mobile rules. The post does not need to repeat them. However, be aware of:

### The Padding Consistency Rule — A Known Source of Bugs

**Never add `padding: 0 1rem` to any child component that lives inside a `cv-card`, `cv-dark`, or `cv-wow` container.** Those containers already provide side padding on mobile. Adding more creates asymmetric widths.

The correct rule:
```css
/* CORRECT — scope to .cv-card to avoid dark section interference */
[data-wp-dark-mode-ignore] .cv-card .cv-tr-hl td { background: var(--cv-hl) !important; }
```

### Table Strategy — Always Dual Representation

Every complex table needs two representations — PC table and mobile cards. The global stylesheet already handles the `.cv-tbl-pc` / `.cv-tbl-mobile` visibility switching.

**Mobile spec/comparison row pattern:**
```html
<div class="cv-sc-row wp-dark-mode-ignore">
  <div class="cv-sc-label wp-dark-mode-ignore">SPEC NAME</div>
  <div style="display:flex; gap:0.625rem;">
    <div class="cv-sc-new wp-dark-mode-ignore">
      <span class="cv-sc-model wp-dark-mode-ignore">MODEL A</span>
      <span class="wp-dark-mode-ignore">[value]</span>
    </div>
    <div class="cv-sc-old wp-dark-mode-ignore">
      <span class="cv-sc-model wp-dark-mode-ignore">MODEL B</span>
      <span class="wp-dark-mode-ignore">[value]</span>
    </div>
  </div>
</div>
```

**Mobile competitor card pattern:**
```html
<div class="cv-cc [cv-cc-featured] wp-dark-mode-ignore">
  <div class="cv-cc-name wp-dark-mode-ignore">Model Name</div>
  <div class="cv-cc-row wp-dark-mode-ignore">
    <span class="cv-cctag cv-cctag-pro wp-dark-mode-ignore">強み</span>
    <span class="wp-dark-mode-ignore">[description]</span>
  </div>
  <div class="cv-cc-row wp-dark-mode-ignore">
    <span class="cv-cctag cv-cctag-con wp-dark-mode-ignore">弱点</span>
    <span class="wp-dark-mode-ignore">[description]</span>
  </div>
</div>
```

---

## 🧩 STEP 7 — Component Reference

All components below use classes provided by the global stylesheet. No extra CSS needed unless noted.

### Hero
```html
<div class="cv-hero wp-dark-mode-ignore">
  <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:1rem;">
    <div class="cv-hero-badge wp-dark-mode-ignore">CATEGORY · YEAR</div>
    <!-- Noto icon here IF whitespace exists AND icon is semantically relevant -->
  </div>
  <h1 class="cv-h1 wp-dark-mode-ignore">Main Title <span class="cv-h1-accent wp-dark-mode-ignore">Accent</span></h1>
  <p class="cv-hero-sub wp-dark-mode-ignore">Subtitle text</p>
  <div class="cv-hero-stats wp-dark-mode-ignore">
    <div class="cv-hero-stat wp-dark-mode-ignore">
      <div class="cv-stat-val wp-dark-mode-ignore">VALUE</div>
      <div class="cv-stat-label wp-dark-mode-ignore">Label</div>
    </div>
    <!-- repeat x 3 or 4 -->
  </div>
</div>
```

### White Card
```html
<div class="cv-card wp-dark-mode-ignore">
  <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:1.25rem;">
    <div class="cv-card-title wp-dark-mode-ignore" style="margin-bottom:0;">
      <i class="fa-solid fa-[icon] wp-dark-mode-ignore" style="color:var(--cv-accent);"></i>
      Section Title
    </div>
    <!-- Noto icon only if title is short and genuine whitespace exists -->
  </div>
  [content]
</div>
```

### Dark Section
```html
<div class="cv-dark wp-dark-mode-ignore">
  <div class="cv-card-title wp-dark-mode-ignore" style="color:white;">
    <i class="fa-solid fa-[icon] wp-dark-mode-ignore" style="color:var(--cv-accent);"></i>
    Section Title
  </div>
  <!-- ALL text inside must explicitly be white or light — never inherit -->
  [content]
</div>
```

### WOW Callout
```html
<div class="cv-wow wp-dark-mode-ignore">
  <div class="cv-wow-label wp-dark-mode-ignore">
    <i class="fa-solid fa-[icon] wp-dark-mode-ignore" style="margin-right:0.4rem;"></i> SECTION LABEL
  </div>
  <div class="cv-wow-number wp-dark-mode-ignore">[THE BIG NUMBER]</div>
  <div class="cv-wow-body wp-dark-mode-ignore">Context explaining why this number matters</div>
</div>
```

### Timeline
```html
<div class="cv-timeline wp-dark-mode-ignore">
  <div class="cv-tl-item wp-dark-mode-ignore">
    <div class="cv-tl-dot wp-dark-mode-ignore"></div>
    <div class="cv-tl-content wp-dark-mode-ignore">
      <div class="cv-tl-year wp-dark-mode-ignore">YEAR</div>
      <div class="cv-tl-title wp-dark-mode-ignore">Entry Title</div>
      <p class="cv-tl-body wp-dark-mode-ignore">Description</p>
    </div>
  </div>
</div>
```

### Progress Bars
```html
<div class="cv-bar-row wp-dark-mode-ignore">
  <div class="cv-bar-lbl wp-dark-mode-ignore">
    <span class="wp-dark-mode-ignore">Label</span>
    <span class="wp-dark-mode-ignore" style="color:var(--cv-accent); font-weight:900;">VALUE%</span>
  </div>
  <div class="cv-bar-track wp-dark-mode-ignore">
    <div class="cv-bar-fill wp-dark-mode-ignore" style="width:VALUE%; background:linear-gradient(to right,var(--cv-accent),[accent-dark]);"></div>
  </div>
</div>
```

### Pros / Cons
```html
<div class="cv-pros-cons wp-dark-mode-ignore">
  <div class="cv-pros wp-dark-mode-ignore">
    <div class="cv-pct cv-pct-pro wp-dark-mode-ignore">
      <i class="fa-solid fa-thumbs-up wp-dark-mode-ignore"></i> 良い点
    </div>
    <div class="cv-pcl wp-dark-mode-ignore">
      <div class="cv-pci cv-pci-pro wp-dark-mode-ignore">
        <i class="fa-solid fa-circle-check cv-pci-icon-pro wp-dark-mode-ignore"></i>
        <span class="wp-dark-mode-ignore">Pro item text</span>
      </div>
    </div>
  </div>
  <div class="cv-cons wp-dark-mode-ignore">
    <!-- mirror structure with con styling -->
  </div>
</div>
```

### Comparison Table (with dual mobile representation)
```html
<!-- PC TABLE -->
<div class="cv-table-wrap cv-tbl-pc wp-dark-mode-ignore">
  <table class="cv-table wp-dark-mode-ignore">
    <thead><tr class="wp-dark-mode-ignore"><th class="wp-dark-mode-ignore">Col 1</th><th class="wp-dark-mode-ignore">Col 2</th></tr></thead>
    <tbody>
      <tr class="cv-tr-hl wp-dark-mode-ignore"><td class="wp-dark-mode-ignore">highlighted row</td></tr>
      <tr class="wp-dark-mode-ignore"><td class="wp-dark-mode-ignore">regular row</td></tr>
    </tbody>
  </table>
</div>
<!-- MOBILE CARDS -->
<div class="cv-tbl-mobile wp-dark-mode-ignore">
  <!-- Use appropriate mobile pattern based on table structure -->
</div>
```

### Insight Boxes
```html
<div class="cv-ins-blue wp-dark-mode-ignore"><strong class="wp-dark-mode-ignore">💡 Label:</strong> Blue insight</div>
<div class="cv-ins-green wp-dark-mode-ignore"><strong class="wp-dark-mode-ignore">✅ Label:</strong> Green note</div>
<div class="cv-ins-amber wp-dark-mode-ignore"><strong class="wp-dark-mode-ignore">⚠️ Label:</strong> Amber warning</div>
<div class="cv-ins-dark wp-dark-mode-ignore"><strong class="wp-dark-mode-ignore">Label:</strong> Dark insight — on dark background sections</div>
```

### Warning Box
```html
<div class="cv-warn wp-dark-mode-ignore">
  <i class="fa-solid fa-triangle-exclamation cv-warn-icon wp-dark-mode-ignore"></i>
  <p class="cv-warn-text wp-dark-mode-ignore">Warning content</p>
</div>
```

> ⚠️ `.cv-warn` is not in the global stylesheet. Add its CSS to the post `<style>` if used:
```css
.content-visual .cv-warn { background:#fef9c3; border:2px solid #f59e0b; border-radius:0.75rem; padding:1rem; display:flex; gap:0.75rem; align-items:flex-start; margin-top:1rem; }
.content-visual .cv-warn-icon { color:#d97706; font-size:1.1rem; flex-shrink:0; margin-top:0.1rem; }
.content-visual .cv-warn-text { font-size:0.875rem; color:#78350f; line-height:1.65; margin:0; }
```

### Pull Quote
```html
<div class="wp-dark-mode-ignore" style="border-left:4px solid var(--cv-accent); padding:1rem 1.5rem; background:var(--cv-hl); border-radius:0 0.75rem 0.75rem 0; margin:1.5rem 0;">
  <p class="wp-dark-mode-ignore" style="font-size:1.05rem; font-style:italic; font-weight:600; color:#0f172a; line-height:1.65; margin:0;">"Quote text"</p>
  <p class="wp-dark-mode-ignore" style="font-size:0.8rem; color:#64748b; margin-top:0.5rem; margin-bottom:0;">— Attribution</p>
</div>
```

### Verdict
```html
<div class="cv-dark wp-dark-mode-ignore">
  <div class="cv-card-title wp-dark-mode-ignore" style="color:white;">
    <i class="fa-solid fa-flag-checkered wp-dark-mode-ignore" style="color:var(--cv-accent);"></i> 総合評価
  </div>
  <p class="wp-dark-mode-ignore" style="color:#cbd5e1; font-size:0.9rem; margin-bottom:1.25rem; line-height:1.65;">Summary sentence</p>
  <div class="cv-grid-2 wp-dark-mode-ignore" style="gap:0.875rem; margin-bottom:1.25rem;">
    <div class="cv-vbox wp-dark-mode-ignore">
      <div class="cv-vtitle wp-dark-mode-ignore" style="color:#4ade80;">✓ こんな人に最適</div>
      <ul class="cv-vlist wp-dark-mode-ignore">
        <li class="wp-dark-mode-ignore">Who this is for</li>
      </ul>
    </div>
    <div class="cv-vbox wp-dark-mode-ignore">
      <div class="cv-vtitle wp-dark-mode-ignore" style="color:#f87171;">✗ 別のシューズを検討すべき人</div>
      <ul class="cv-vlist wp-dark-mode-ignore">
        <li class="wp-dark-mode-ignore">Who should look elsewhere</li>
      </ul>
    </div>
  </div>
</div>
```

### Tag Pills
```html
<span class="cv-tag cv-tag-blue wp-dark-mode-ignore">Tag</span>
<span class="cv-tag cv-tag-green wp-dark-mode-ignore">Tag</span>
<span class="cv-tag cv-tag-red wp-dark-mode-ignore">Tag</span>
<span class="cv-tag cv-tag-amber wp-dark-mode-ignore">Tag</span>
<span class="cv-tag cv-tag-purple wp-dark-mode-ignore">Tag</span>
```

---

## 📐 STEP 8 — Per-Post `<style>` Block (The Only CSS Needed)

This replaces the 300-line CSS foundation from v1.5. The post `<style>` is now small.

```html
<style>
/* ===== PER-POST PALETTE ===== */
.content-visual {
  --cv-accent: [vivid accent hex];
  --cv-hero-bg: linear-gradient(135deg, [stop1], [stop2], [stop3]);
  --cv-hero-sub-color: [muted light color for hero text];
  --cv-badge-color: [badge text color];
  --cv-glow: rgba([accent-r], [accent-g], [accent-b], 0.18);
  --cv-wow-bg: linear-gradient(135deg, [accent], [accent-darker]);
  --cv-hl: [accent at ~10% opacity, for highlighted table rows];
  --cv-img-border: [accent at ~25% opacity, for image block borders];
  --cv-sc-new-bg: [accent tint for mobile spec new model pill];
  --cv-cc-featured-bg: [accent tint for featured competitor card];
  --cv-table-head-bg: [dark color for table headers, usually #0f172a];
}

/* ===== WP DARK MODE — PER-POST VARIABLE OVERRIDES ===== */
[data-wp-dark-mode-ignore] .cv-hero { background: var(--cv-hero-bg) !important; }
[data-wp-dark-mode-ignore] .cv-wow { background: var(--cv-wow-bg) !important; }
[data-wp-dark-mode-ignore] .cv-stat-val { color: var(--cv-accent) !important; }
[data-wp-dark-mode-ignore] .cv-h1-accent { color: var(--cv-accent) !important; }
[data-wp-dark-mode-ignore] .cv-card .cv-tr-hl td { background: var(--cv-hl) !important; }
[data-wp-dark-mode-ignore] .cv-sc-new { background: var(--cv-sc-new-bg) !important; border-color: var(--cv-img-border) !important; }
[data-wp-dark-mode-ignore] .cv-sc-new .cv-sc-model { color: var(--cv-accent) !important; }
[data-wp-dark-mode-ignore] .cv-ins-dark { color: [accent-light or appropriate light color] !important; }

/* ===== PER-ARTICLE ADDITIONS (only if truly needed) ===== */
/* Example: custom font size for a specific card title */
/* Example: cv-warn styles if that component is used */
/* Example: cv-img-trio/duo styles if those image layouts are used */
</style>
```

---

## ⚠️ STEP 9 — Non-Negotiable Rules

### R1 — All Text Must Have Explicit Color
Never rely on CSS color inheritance when the background is non-white. Every element on a dark, tinted, or gradient background must have its text color set explicitly.

### R2 — Fresh Palette Every Article
Never reuse a hero gradient, accent color, or overall palette. Color is a creative decision.

### R3 — Dual Table Representation for Complex Tables
Any table with long text, multiple columns, or Japanese/CJK content must have both a PC table and a mobile card layout.

### R4 — Noto Icons Fill Whitespace, Never Create It
An icon on its own row is wrong. An icon inside an existing flex row, filling empty space, is right.

### R5 — Icons Are Always Searched, Never Hardcoded
Think about the visual concept, search Iconify or Font Awesome for the best match, verify, use it.

### R6 — Typography Adapts to Content
Override the global `clamp()` values in the post `<style>` when the actual title length requires it.

### R7 — Mobile Is Tested Mentally Before Output
Simulate the page at ~390px before finalizing. Check for overflow, inconsistent widths, broken icons.

### R8 — Section Count Matches Article Depth
500–800 words → 4–5 sections. 1000–2000 words → 6–8. 2000+ words → 8–12. Never pad.

### R9 — Color is Semantic Inside Components
Green for good, red for bad in comparison context. Pros = green. Cons = red. Warnings = amber.

### R10 — Visual Rhythm Across the Whole Page
Never repeat the same card style more than 2–3 times in a row.

### R11 — Every Decision Is Content-Driven, Not Pattern-Driven
Read the article, think about what serves the reader, then decide.

### R12 — Consistent Component Width Within a Section
All sibling components inside the same card must render at the same effective width on mobile.

### R13 — No Price Information
Never include any price or cost information.

### R14 — Specs Must Be Verified Before Publishing
Always verify weight, stack height, drop from brand official, RunRepeat, or equivalent.

### R15 — Units Must Be Calculated, Not Relabeled
Use the conversion factors in Phase A3. Running pace: treat seconds as seconds, not decimals.

### R16 — Image URLs Must Be Verified Before Use
Use `web_fetch` to test each URL. A broken image is worse than no image.

### R17 — Never Describe an Image You Have Not Seen
Use only generic neutral labels for images you have not viewed.

### R18 — Image Alt Text Is Also the WordPress Filename
Lowercase, hyphens, no Japanese characters, max ~60 characters, describe only confirmed content.

### R19 — `<div>` First, `<style>` Last — Always
`<div class="content-visual">` is line 1. `<style>` is the absolute last thing in the file.

### R19b — No Font Awesome `<link>` Tag in the Post
Font Awesome is loaded globally by `functions.php`. Never add a `<link>` tag to the post HTML.

### R20 — SEO Title Is a Required Second Deliverable
Produce two files: (1) the HTML block, and (2) a plain text file with the Japanese SEO post title.

SEO title rules:
- Written in **Japanese**
- **SEO-optimised** — front-load the most searched keywords
- **Engaging** — create curiosity or clearly promise value
- **Under 80 characters** (Google truncates at ~60 on desktop)
- **End with 1–2 relevant emojis**
- No date, price, or information that will become stale

### R21 — Mobile Cards Must Keep Rounded Corners
Never use `border-radius: 0` on cards on mobile. Edge-to-edge but with rounded corners preserved.

### R22 — `wp-dark-mode-ignore` on Every Element Except `cv-container`
Every div, p, span, strong, i, h1-h6, ul, ol, li, table, th, td must have `wp-dark-mode-ignore` in its class. The one exception is `cv-container`.

### R23 — Never Add `wp-dark-mode-ignore` or CSS Background to `cv-container`
The container must stay transparent. Never add `wp-dark-mode-ignore` to its class or `background` in any CSS rule targeting it.

### R24 — `cv-tr-hl` Override Must Be Scoped to `.cv-card` (NEW in v2.0)
The `[data-wp-dark-mode-ignore] .cv-tr-hl td` override in the post `<style>` **must** include `.cv-card` in the selector. Without this scope, the light highlight background bleeds into dark section tables, making rows invisible. Always write:
```css
[data-wp-dark-mode-ignore] .cv-card .cv-tr-hl td { background: var(--cv-hl) !important; }
```
Never write:
```css
[data-wp-dark-mode-ignore] .cv-tr-hl td { background: ... !important; }
```

### R25 — Do Not Repeat Global Stylesheet CSS in the Post (NEW in v2.0)
The global `woodmart-child/style.css` already contains all base component styles, all WP Dark Mode universal overrides, and the full mobile breakpoint. Never copy any of these into the post `<style>` block. The post `<style>` should be 8–25 lines maximum. If it is growing beyond 30 lines, you are probably repeating global rules unnecessarily.

---

## ✅ PRE-SUBMISSION CHECKLIST

Run through this before finalizing. Do not skip steps.

**Translation & Content**
- [ ] All brand and product names verified against official Japanese sources
- [ ] All technology and material terms searched and confirmed in Japanese
- [ ] All units properly converted with correct math
- [ ] Running pace converted correctly (seconds treated as seconds, not decimals)
- [ ] All specs verified against brand official, RunRepeat, or equivalent
- [ ] No price information included anywhere
- [ ] Article reads as professional Japanese journalism — no hype, no exclamation marks

**Structure**
- [ ] Output is `<div class="content-visual">` block — not a full HTML page
- [ ] `<div class="content-visual" data-wp-dark-mode-ignore="true">` is the absolute first line
- [ ] `<style>` is the absolute last thing in the file
- [ ] **No `<link>` tag for Font Awesome** — it is loaded globally
- [ ] Post `<style>` block contains only: CSS variables + per-post WP Dark Mode overrides + any truly unique additions
- [ ] Post `<style>` block is under 30 lines (if longer, check for unnecessary repetition of global rules)
- [ ] SEO title plain-text file produced alongside the HTML file

**WP Dark Mode**
- [ ] `wp-dark-mode-ignore` is in the `class` of every element EXCEPT `cv-container`
- [ ] Every `<i>` icon tag has `wp-dark-mode-ignore` — including inside `.cv-dark` sections
- [ ] `data-wp-dark-mode-ignore` appears ONLY on the root `<div class="content-visual">` line
- [ ] `cv-container` opening tag reads exactly `<div class="cv-container">` — no `wp-dark-mode-ignore`
- [ ] `cv-tr-hl` override in post `<style>` is scoped to `.cv-card` (R24)

**Mobile**
- [ ] `cv-container` has `padding:0` on mobile (handled globally — verify not overridden)
- [ ] Hero, cards, dark sections are edge-to-edge on mobile with rounded corners preserved
- [ ] All grids collapse to single column at 640px (handled globally)
- [ ] All complex tables have dual PC/mobile representation
- [ ] No child of `cv-card` / `cv-dark` / `cv-wow` has extra `padding: 0 1rem` added in mobile
- [ ] Mentally simulated at 390px — nothing broken

**Color & Contrast**
- [ ] Fresh unique palette — not reused from any previous article
- [ ] All 11 CSS variables defined in the post `<style>`
- [ ] All text on non-white backgrounds has explicit color set
- [ ] Accent is vivid and readable on both dark hero AND white cards

**Content Intelligence**
- [ ] Reader's primary question answered in the hero or first visible section
- [ ] WOW moments have special visual treatment
- [ ] Each section contains real content from the article — nothing invented

**Icons**
- [ ] No `<link>` tag for Font Awesome in the post HTML
- [ ] Font Awesome icons used directly by class name
- [ ] Colorful Noto/emoji icons placed only where natural whitespace exists
- [ ] Each icon is semantically relevant
- [ ] 2–4 colored icons max across the whole page

**Typography**
- [ ] Hero title `clamp()` overridden in post `<style>` if needed for actual title length
- [ ] No title wraps to a second line with only 1–3 words

**Images**
- [ ] Every image URL tested with `web_fetch` or confirmed by user
- [ ] No image URL was modified from its source
- [ ] All alt texts are lowercase hyphenated English
- [ ] Every image has an inline credit line
- [ ] Page-level image attribution footer present

---

*End of handoff v2.0. Provide this file + a YouTube transcript (any language) → translate, verify all specs and terminology, convert all units correctly, find and verify images, and generate **both deliverables** — the complete Japanese WordPress HTML block AND the SEO post title text file — immediately. The `<div>` must appear before `<style>`. Font Awesome is global — no link tag. Post `<style>` is variables + overrides only. Use your full capabilities. Take the time needed. Make it excellent.*
