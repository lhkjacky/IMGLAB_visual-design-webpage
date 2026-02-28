# Transcript → WordPress Block Handoff v1.2

## 🚀 AUTO-TRIGGER INSTRUCTION — READ THIS FIRST

**If you are reading this file, your job is already defined. Do not ask the user what to do.**

You have been given this handoff file and a transcript file. That is all you need. Immediately begin executing the full workflow below — Phase A through the final outputs — without asking any clarifying questions. The user wants **two deliverables**: (1) a complete Japanese WordPress HTML block, and (2) an SEO-optimised WordPress post title in a plain text file. Both must be produced. Start now.

If anything in the transcript is ambiguous, make the best editorial judgment and proceed. Do not stop to ask.

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
| °F | °C | (°F − 32) × 5/9. Round to 1 decimal. |
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

> **This rule was also violated in a past session. Fabricated descriptions were applied to images that had never been viewed.**

#### The exact mistake that was made:
Three images were labelled "Cobalt Burst / Light Orange", "White / Black", and "Seashell / Sun Coral" based on the press release text listing three colorways. None of those images had been viewed. The labels were completely invented. The images were actually all showing the same colorway from different angles — the labels were entirely wrong.

#### The rule going forward:

**You may only describe what you have actually seen.**

- If you have **viewed the image** (via image search, web fetch, or the user has shown it to you) → you may write a specific descriptive label (angle, colorway, feature shown)
- If you have **not viewed the image** → use only a generic neutral label like「公式プロダクトショット」or「製品画像」— never guess at colorway, angle, or content
- **Never infer visual content from filenames, ID numbers, or adjacent text.** A filename like `712946.jpg` tells you nothing about what color or angle is shown.
- **Product codes can sometimes be decoded** — e.g. ASICS product code `1013A177-400` where `400` is a known ASICS color code for Cobalt Burst. This is acceptable to use as a label IF you have verified the color code convention from an authoritative source. But this is the exception, not the rule.

#### Alt text doubles as the filename (Smart Auto Upload plugin):
The user's WordPress setup uses "Smart Auto Upload Images" with `%image_alt%` as the filename pattern. This means the `alt` attribute of every `<img>` tag becomes the filename saved to the WordPress media library. Write alt texts as clean, lowercase, hyphenated English descriptors that will make good filenames:

✅ Good: `asics-superblast-3-cobalt-burst-light-orange-front`
✅ Good: `asics-superblast-3-midsole-lateral-official`
✅ Good: `asics-superblast-3-running-lifestyle-2026`
❌ Bad: `ASICS SUPERBLAST 3 — ミッドソール側面ビュー` (Japanese characters, special chars, caps)
❌ Bad: `image1` (meaningless)
❌ Bad: `asics-superblast-3-white-black-side` (if you haven't confirmed the image is white/black)

Rules for alt text filenames:
- Lowercase only
- Hyphens between words, no spaces or underscores
- Include brand + model + descriptive detail + year if space allows
- No Japanese characters, no special characters, no slashes
- Max ~60 characters
- Must reflect only what you have **actually confirmed** about the image

### B5 — Attribution (Required)

These are editorial review articles using brand press images. Attribution is required on every image.

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

Images must work well on mobile. Apply these CSS rules for all image components:

**Single full-width image:**
```css
.content-visual .cv-img-block {
  background: white; border-radius: 1rem; overflow: hidden;
  border: 1px solid [accent-tint-border]; margin-bottom: 1.5rem;
}
.content-visual .cv-img-main { width: 100%; height: auto; display: block; object-fit: cover; }
.content-visual .cv-img-landscape { max-height: 420px; object-fit: cover; object-position: center; }
.content-visual .cv-img-credit {
  font-size: 0.68rem; color: #94a3b8; padding: 0.45rem 1rem;
  text-align: right; background: #f8fdfd; border-top: 1px solid [accent-tint-border];
}
.content-visual .cv-img-credit a { color: [accent-muted]; text-decoration: none; }

@media (max-width: 640px) {
  /* Keep rounded corners on mobile — edge-to-edge but still rounded */
  .content-visual .cv-img-block { border-radius: 0.75rem; border-left: none; border-right: none; margin-bottom: 0.625rem; }
  .content-visual .cv-img-landscape { max-height: 220px; }
}
```

**3-column product image trio:**
```css
.content-visual .cv-img-trio {
  display: grid; grid-template-columns: repeat(3, 1fr); gap: 0.75rem; margin-bottom: 1.5rem;
}
.content-visual .cv-img-trio-item {
  background: white; border-radius: 0.875rem; overflow: hidden; border: 1px solid [accent-tint-border];
}
.content-visual .cv-img-trio-item .cv-img-main { aspect-ratio: 1/1; object-fit: cover; }
.content-visual .cv-img-trio-label {
  font-size: 0.7rem; font-weight: 600; color: #475569;
  text-align: center; padding: 0.4rem 0.5rem 0.5rem;
  background: #f8fdfd; border-top: 1px solid [accent-tint-border];
}

/* Tablet: 2 columns */
@media (min-width: 641px) and (max-width: 900px) {
  .content-visual .cv-img-trio { grid-template-columns: 1fr 1fr; }
  .content-visual .cv-img-trio-item:last-child { grid-column: span 2; }
}

/* Mobile: single column */
@media (max-width: 640px) {
  .content-visual .cv-img-trio { grid-template-columns: 1fr; gap: 0.5rem; }
}
```

---

## 🏗️ PHASE C — HTML STRUCTURE & FILE RULES

> **These rules are mandatory and non-negotiable. Violating them causes broken WordPress excerpts, dark mode failures, and mobile layout bugs. Read every rule before writing a single line of HTML.**

### C1 — MANDATORY FILE STRUCTURE ORDER

**The correct order of the output file, top to bottom:**

```
LINE 1:   <div class="content-visual" data-wp-dark-mode-ignore="true">
LINE 2:   <!-- Article comment / Font Awesome link -->
LINE 3+:  ALL HTML CONTENT (hero, cards, sections, images, footer...)
NEAR END: </div><!-- /cv-container -->
          </div><!-- /content-visual -->
LAST:     <style> ... all CSS ... </style>
```

**Why this order is mandatory:**

WordPress Custom HTML blocks use the first few lines of text as the post excerpt. If `<style>` appears before the HTML content, the raw CSS (including comments like `/* ===== WP DARK MODE PROTECTION =====`) becomes the excerpt — which is ugly and broken for readers.

**The `<div class="content-visual">` must be the absolute first line of the file.**
**The `<style>` block must be the absolute last thing in the file.**

> ⛔ WRONG — DO NOT DO THIS:
> ```html
> <div class="content-visual">
> <link ...>
> <style>
>   /* all CSS */
> </style>
> <!-- content starts here -->
> <div class="cv-container">
> ```

> ✅ CORRECT:
> ```html
> <div class="content-visual" data-wp-dark-mode-ignore="true">
> <!-- Article title | WordPress Block -->
> <link rel="stylesheet" href="[Font Awesome CDN]">
> 
> <div class="cv-container">
> <!-- all article content here -->
> </div><!-- /cv-container -->
> </div><!-- /content-visual -->
> 
> <style>
> /* all CSS here */
> </style>
> ```

Verify this structure before saving. Do not output until it is correct.

### C2 — WP DARK MODE COMPATIBILITY

The site uses **WP Dark Mode plugin v5.0.9 with the Sapphire preset**. This plugin applies dark background and light text colors with `!important` to every HTML element by tag name (`div`, `p`, `span`, `strong`, etc.) when dark mode is active. Without protection, it will override all your card backgrounds and text colors.

#### How the plugin works (so you can fight it correctly):

The Sapphire preset applies this CSS to every matching tag:
```css
background-color: var(--wp-dark-mode-secondary-background-color, #212121) !important;
color: var(--wp-dark-mode-text-color, #f0f0f0) !important;
```

Elements are excluded from this rule only if they have the class `wp-dark-mode-ignore` **directly on themselves** (not just on a parent). The selector is `:not(.wp-dark-mode-ignore)` — so only the element itself having the class counts. A parent having it does NOT protect children automatically.

#### The protection strategy — two parts working together:

**Part 1: Root container attributes**

The outermost `<div class="content-visual">` must always have:
- `data-wp-dark-mode-ignore="true"` attribute
- This gives us the `[data-wp-dark-mode-ignore]` ancestor selector for high-specificity CSS overrides

```html
<div class="content-visual" data-wp-dark-mode-ignore="true">
```

**Part 2: Add `wp-dark-mode-ignore` class to every HTML element**

Every `div`, `p`, `span`, `strong`, `i`, `h1`–`h6`, `ul`, `ol`, `li`, etc. in the HTML body must have `wp-dark-mode-ignore` in its class list. This directly prevents the plugin from overriding that element.

```html
<!-- Every element gets the class -->
<div class="wp-dark-mode-ignore cv-card cv-mb">
  <div class="wp-dark-mode-ignore cv-card-title">
    <i class="wp-dark-mode-ignore fa-solid fa-microchip" style="color:#00e6b4;"></i>
    Section Title
  </div>
  <p class="wp-dark-mode-ignore cv-body">Body text here</p>
</div>
```

**Part 3: CSS overrides using `[data-wp-dark-mode-ignore]` ancestor selector**

In the `<style>` block, re-declare every class that sets a background or color using the `[data-wp-dark-mode-ignore]` ancestor selector prefix. This gives higher specificity than the plugin's tag-based rules, allowing our `!important` values to win:

```css
[data-wp-dark-mode-ignore] .cv-card             { background: white !important; border-color: #e2e8f0 !important; }
[data-wp-dark-mode-ignore] .cv-card-title       { color: #0f172a !important; }
[data-wp-dark-mode-ignore] .cv-dark             { background: linear-gradient(135deg,#1e293b,#0f172a) !important; }
[data-wp-dark-mode-ignore] .cv-hero             { background: linear-gradient(135deg,...) !important; }
[data-wp-dark-mode-ignore] .cv-pros             { background: #f0fdf4 !important; border-color: #bbf7d0 !important; }
/* ... and so on for every class with a color or background */
```

#### Dark mode design philosophy — what to protect vs what to let go dark:

The goal is NOT to force the entire block to look like light mode inside a dark page (that creates an ugly white island). The goal is:

- **`cv-container`**: Do NOT add `wp-dark-mode-ignore`. Let it go transparent so the dark page background shows through naturally.
- **All inner sections with intentional colors** (hero, dark cards, wow callout, pros/cons, tinted boxes, insight boxes, tags): Add `wp-dark-mode-ignore` to every element and protect their colors with `[data-wp-dark-mode-ignore]` CSS overrides.
- **White cards (`cv-card`)**: Keep `wp-dark-mode-ignore` on every element and protect them with `background: white !important` — white cards look fine on a dark page background as distinct content surfaces.

This means the page naturally integrates with dark mode (transparent container background) while all intentional design colors remain exactly as designed.

#### Complete CSS protection block to include in every article:

Place this at the top of the `<style>` block (which is at the bottom of the file):

```css
/* ===== WP DARK MODE PROTECTION =====
   wp-dark-mode-ignore is on every element to block the plugin from overriding colors.
   cv-container has NO wp-dark-mode-ignore so its background goes transparent in dark mode,
   letting the dark page background show through naturally.
   All colored sections are fully protected via [data-wp-dark-mode-ignore] + !important.
   ===== */

/* --- Cards and neutral surfaces --- */
[data-wp-dark-mode-ignore] .cv-card             { background: white !important; border-color: #e2e8f0 !important; }
[data-wp-dark-mode-ignore] .cv-card-title       { color: #0f172a !important; }
[data-wp-dark-mode-ignore] .cv-body             { color: #475569 !important; }
[data-wp-dark-mode-ignore] .cv-sep              { border-color: #e2e8f0 !important; }
[data-wp-dark-mode-ignore] .cv-source           { background: white !important; border-color: #e2e8f0 !important; }
[data-wp-dark-mode-ignore] .cv-source-lbl       { color: #64748b !important; }
[data-wp-dark-mode-ignore] .cv-source-link      { color: #1d4ed8 !important; }
[data-wp-dark-mode-ignore] .cv-img-block        { background: white !important; border-color: #e2e8f0 !important; }
[data-wp-dark-mode-ignore] .cv-img-credit       { color: #94a3b8 !important; background: #f8fdfd !important; border-color: #d4ede8 !important; }

/* --- Hero section --- */
[data-wp-dark-mode-ignore] .cv-hero             { background: linear-gradient(135deg, [STOP1], [STOP2], [STOP3]) !important; }
[data-wp-dark-mode-ignore] .cv-hero-badge       { background: rgba(255,255,255,0.10) !important; color: [ACCENT-LIGHT] !important; border-color: rgba(255,255,255,0.18) !important; }
[data-wp-dark-mode-ignore] .cv-hero-stat        { background: rgba(255,255,255,0.07) !important; border-color: rgba(255,255,255,0.10) !important; }
[data-wp-dark-mode-ignore] .cv-h1               { color: #ffffff !important; }
[data-wp-dark-mode-ignore] .cv-h1-accent        { color: [ACCENT] !important; }
[data-wp-dark-mode-ignore] .cv-hero-sub         { color: [HERO-MUTED] !important; }
[data-wp-dark-mode-ignore] .cv-stat-val         { color: [ACCENT] !important; }
[data-wp-dark-mode-ignore] .cv-stat-val-sm      { color: [ACCENT] !important; }
[data-wp-dark-mode-ignore] .cv-stat-label       { color: [HERO-MUTED] !important; }

/* --- WOW callout --- */
[data-wp-dark-mode-ignore] .cv-wow              { background: linear-gradient(135deg, [STOP1], [STOP2]) !important; color: white !important; }
[data-wp-dark-mode-ignore] .cv-wow-body         { color: #cbd5e1 !important; }
[data-wp-dark-mode-ignore] .cv-wow-number       { color: [ACCENT] !important; }
[data-wp-dark-mode-ignore] .cv-wow-label        { color: [ACCENT-LIGHT] !important; }

/* --- Dark section --- */
[data-wp-dark-mode-ignore] .cv-dark             { background: linear-gradient(135deg,#1e293b,#0f172a) !important; }
[data-wp-dark-mode-ignore] .cv-dark .cv-card-title { color: white !important; }

/* --- Tinted section --- */
[data-wp-dark-mode-ignore] .cv-tinted           { background: linear-gradient(135deg, [TINT-START], [TINT-END]) !important; border-color: [TINT-BORDER] !important; }

/* --- Pros / Cons --- */
[data-wp-dark-mode-ignore] .cv-pros             { background: #f0fdf4 !important; border-color: #bbf7d0 !important; }
[data-wp-dark-mode-ignore] .cv-cons             { background: #fff5f5 !important; border-color: #fecaca !important; }
[data-wp-dark-mode-ignore] .cv-pct-pro          { color: #15803d !important; }
[data-wp-dark-mode-ignore] .cv-pct-con          { color: #dc2626 !important; }
[data-wp-dark-mode-ignore] .cv-pci              { color: #334155 !important; }
[data-wp-dark-mode-ignore] .cv-pci-icon-pro     { color: #22c55e !important; }
[data-wp-dark-mode-ignore] .cv-pci-icon-con     { color: #f87171 !important; }

/* --- Tables --- */
[data-wp-dark-mode-ignore] .cv-table th         { background: [TABLE-HEADER-BG] !important; color: [TABLE-HEADER-TEXT] !important; }
[data-wp-dark-mode-ignore] .cv-table td         { color: #334155 !important; border-color: #e2e8f0 !important; }
[data-wp-dark-mode-ignore] .cv-table tr:hover td { background: [ACCENT-TINT] !important; }
[data-wp-dark-mode-ignore] .cv-tr-hl td         { background: [ACCENT-TINT] !important; }
[data-wp-dark-mode-ignore] .cv-spec-good        { color: #15803d !important; }
[data-wp-dark-mode-ignore] .cv-spec-note        { color: #64748b !important; }

/* --- Mobile spec cards --- */
[data-wp-dark-mode-ignore] .cv-sc-row           { border-color: #f1f5f9 !important; }
[data-wp-dark-mode-ignore] .cv-sc-new           { background: [ACCENT-TINT] !important; border-color: [ACCENT-LIGHT-BORDER] !important; }
[data-wp-dark-mode-ignore] .cv-sc-old           { background: #f8fafc !important; border-color: #e2e8f0 !important; }
[data-wp-dark-mode-ignore] .cv-sc-new .cv-sc-model { color: [ACCENT] !important; }
[data-wp-dark-mode-ignore] .cv-sc-old .cv-sc-model { color: #94a3b8 !important; }
[data-wp-dark-mode-ignore] .cv-sc-val           { color: #0f172a !important; }
[data-wp-dark-mode-ignore] .cv-sc-label         { color: #64748b !important; }

/* --- Progress bars --- */
[data-wp-dark-mode-ignore] .cv-bar-track        { background: #e2e8f0 !important; }
[data-wp-dark-mode-ignore] .cv-bar-lbl          { color: #0f172a !important; }
[data-wp-dark-mode-ignore] .cv-bar-caption      { color: #64748b !important; }

/* --- Verdict boxes --- */
[data-wp-dark-mode-ignore] .cv-vbox             { background: rgba(255,255,255,0.07) !important; border-color: rgba(255,255,255,0.12) !important; }
[data-wp-dark-mode-ignore] .cv-vlist li         { color: #e2e8f0 !important; }

/* --- Hierarchy cards --- */
[data-wp-dark-mode-ignore] .cv-hier             { background: rgba(255,255,255,0.07) !important; border-color: rgba(255,255,255,0.12) !important; }
[data-wp-dark-mode-ignore] .cv-hier-center      { background: rgba([ACCENT-R],[ACCENT-G],[ACCENT-B],0.1) !important; border-color: rgba([ACCENT-R],[ACCENT-G],[ACCENT-B],0.3) !important; }
[data-wp-dark-mode-ignore] .cv-hier-name        { color: white !important; }
[data-wp-dark-mode-ignore] .cv-hier-body        { color: #94a3b8 !important; }

/* --- Insight boxes --- */
[data-wp-dark-mode-ignore] .cv-ins-blue         { background: #eff6ff !important; color: #1e40af !important; border-color: #3b82f6 !important; }
[data-wp-dark-mode-ignore] .cv-ins-green        { background: #f0fdf4 !important; color: #15803d !important; border-color: #22c55e !important; }
[data-wp-dark-mode-ignore] .cv-ins-amber        { background: #fffbeb !important; color: #92400e !important; border-color: #f59e0b !important; }

/* --- Tag pills --- */
[data-wp-dark-mode-ignore] .cv-tag-teal         { background: #ccfbef !important; color: #0b5563 !important; }
[data-wp-dark-mode-ignore] .cv-tag-blue         { background: #dbeafe !important; color: #1d4ed8 !important; }
[data-wp-dark-mode-ignore] .cv-tag-green        { background: #dcfce7 !important; color: #15803d !important; }
[data-wp-dark-mode-ignore] .cv-tag-amber        { background: #fef3c7 !important; color: #92400e !important; }
[data-wp-dark-mode-ignore] .cv-tag-red          { background: #fee2e2 !important; color: #dc2626 !important; }
[data-wp-dark-mode-ignore] .cv-tag-purple       { background: #f3e8ff !important; color: #7c3aed !important; }
```

> ⚠️ **Every time you create a new article with a new palette, update the `[PLACEHOLDER]` values in this block to match the new article's colors.** Do not copy-paste old color values from a previous article.

> ⚠️ **Any inline `style=""` attribute that sets `color`, `background`, or `border-color` on an element that has `wp-dark-mode-ignore` does NOT need `!important` added — the class-based CSS overrides above handle it. Only add `!important` to inline styles if the element does NOT have `wp-dark-mode-ignore` (which should be rare).**

---

## 🎨 STEP 1 — Content Analysis Before Any Design Decision

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
1. Think: "What is the visual concept I want to represent?"
2. Search Iconify or the web for relevant keywords
3. Pick the icon that best matches the semantic meaning AND looks good at the target size
4. Verify the URL is reachable, then embed it
5. If nothing fits perfectly — skip the icon. A missing icon is better than a wrong one.

**Always specify both `width` and `height` on `<img>` tags** to prevent layout shift.

### Where to Look for Whitespace Opportunities

Scan the entire page layout and ask: "Does this element end well before the right edge on a PC screen?"

Candidate locations:
- **Hero badge row** — the category pill is short, often lots of space to the right
- **Short hero title** — a 1-line H1 leaves a large empty right zone
- **Card / section title rows** — short titles like "総合評価" have wide empty space after
- **WOW callout label row** — the small uppercase label above the big number

### Decision Logic — Per Placement, Per Article

1. **Is there genuine horizontal whitespace on PC?** Estimate honestly.
2. **Will this icon be semantically meaningful here?**
3. **How many colored icons are on the page already?** 2–4 maximum for the whole page.
4. **What happens on mobile?** Decide before placing whether this icon will scale or hide.

### Sizing Logic

| Context | PC Size Range |
|---|---|
| Hero (badge row, beside short title) | 48px–72px |
| Card / section title | 28px–40px |
| Subsection label or table header | 20px–28px |
| WOW callout decorative | 40px–56px |

### Mobile Behavior — Scale or Hide, Never Break

```css
.content-visual .cv-noto-lg { width:60px; height:60px; flex-shrink:0; align-self:center; }
.content-visual .cv-noto-md { width:36px; height:36px; flex-shrink:0; align-self:center; }
.content-visual .cv-noto-sm { width:24px; height:24px; flex-shrink:0; align-self:center; }

@media (max-width: 640px) {
  .content-visual .cv-noto-lg { width:32px; height:32px; }
  .content-visual .cv-noto-md { width:22px; height:22px; }
  .content-visual .cv-noto-sm { display:none; }
}
```

### Small Inline Icons — Font Awesome

Load Font Awesome via CDN — always search for the current latest version URL:
```html
<link rel="stylesheet" href="[current Font Awesome CDN URL — search for latest]">
```

Usage: `<i class="fa-solid fa-[icon-name]" style="color:[accent];"></i>`

---

## 📱 STEP 6 — Mobile Architecture (Non-Negotiable)

WordPress already provides horizontal page margins. The block must never add extra side spacing on mobile.

### Container Rule
```css
.content-visual .cv-container {
  max-width: 64rem;
  margin: 0 auto;
  padding: 1.25rem; /* PC padding */
}

@media (max-width: 640px) {
  .content-visual .cv-container {
    padding: 0; /* Zero out — WordPress handles margins */
    background: transparent;
  }
}
```

### Sections Go Full-Width and Edge-to-Edge on Mobile — WITH Rounded Corners

On mobile, hero, cards, dark sections, and wow callouts stretch edge-to-edge (no side borders, no side margin). **However, rounded corners must be kept on mobile** — do not set `border-radius:0` on cards. The combination of edge-to-edge + rounded corners is the correct mobile treatment.

```css
@media (max-width: 640px) {
  /* Edge-to-edge but KEEP rounded corners */
  .content-visual .cv-hero   { border-radius: 1.25rem; border-left: none; border-right: none; padding: 1.5rem 1rem; margin-bottom: 0.625rem; }
  .content-visual .cv-card   { border-radius: 1rem;    border-left: none; border-right: none; padding: 1.25rem 1rem; margin-bottom: 0.625rem; }
  .content-visual .cv-dark   { border-radius: 1rem;    padding: 1.25rem 1rem; margin-bottom: 0.625rem; }
  .content-visual .cv-wow    { border-radius: 1rem;    padding: 1.25rem 1rem; margin-bottom: 0.625rem; }
  .content-visual .cv-tinted { border-radius: 1rem;    border-left: none; border-right: none; padding: 1.25rem 1rem; margin-bottom: 0.625rem; }
  .content-visual .cv-source { border-radius: 0.75rem; border-left: none; border-right: none; }
  .content-visual .cv-img-block { border-radius: 0.75rem; border-left: none; border-right: none; margin-bottom: 0.625rem; }
}
```

> ⛔ **DO NOT use `border-radius: 0` on cards or sections on mobile.** This was a past mistake. Cards should always have rounded corners — on both PC and mobile. The original handoff file contained `border-radius:0` in the mobile breakpoint which was wrong and has been corrected.

### The Double-Gutter Bug — Never Add Extra Padding Inside Cards on Mobile

```css
/* ⚠️ NEVER DO THIS: */
@media (max-width: 640px) {
  .content-visual .cv-pros-cons { padding: 0 1rem; } /* WRONG — creates double gutter */
  .content-visual .cv-grid-2    { padding: 0 1rem; } /* WRONG */
}

/* Components inside cv-card already inherit the card's padding.
   Adding more side padding makes them narrower than sibling components.
   ONLY add explicit padding to components that are NOT inside a padded parent. */
```

### Table Strategy — Always Dual Representation

```css
.content-visual .cv-tbl-pc     { display: block; }
.content-visual .cv-tbl-mobile { display: none; }

@media (max-width: 640px) {
  .content-visual .cv-tbl-pc     { display: none; }
  .content-visual .cv-tbl-mobile { display: block; }
}
```

---

## 🧩 STEP 7 — Component Reference

### Hero
```html
<div class="wp-dark-mode-ignore cv-hero">
  <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:1rem;" class="wp-dark-mode-ignore">
    <div class="wp-dark-mode-ignore cv-hero-badge">CATEGORY · YEAR</div>
    <!-- Noto icon here IF genuine whitespace exists -->
  </div>
  <h1 class="wp-dark-mode-ignore cv-h1">Main Title <span class="wp-dark-mode-ignore cv-h1-accent">Accent</span></h1>
  <p class="wp-dark-mode-ignore cv-hero-sub">Subtitle text</p>
  <div class="wp-dark-mode-ignore cv-hero-stats">
    <div class="wp-dark-mode-ignore cv-hero-stat">
      <div class="wp-dark-mode-ignore cv-stat-val">VALUE</div>
      <div class="wp-dark-mode-ignore cv-stat-label">Label</div>
    </div>
  </div>
</div>
```

### White Card
```html
<div class="wp-dark-mode-ignore cv-card cv-mb">
  <div class="wp-dark-mode-ignore cv-card-title">
    <i class="wp-dark-mode-ignore fa-solid fa-[icon]" style="color:[accent];"></i> Section Title
  </div>
  <!-- content — every element must have wp-dark-mode-ignore -->
</div>
```

### Dark Section
```html
<div class="wp-dark-mode-ignore cv-dark cv-mb">
  <div class="wp-dark-mode-ignore cv-card-title" style="color:white;">
    <i class="wp-dark-mode-ignore fa-solid fa-[icon]" style="color:[accent];"></i> Section Title
  </div>
  <!-- ALL text inside must explicitly be white or light — never inherit -->
</div>
```

### Tinted Section
```html
<div class="wp-dark-mode-ignore cv-tinted cv-mb">
  <div class="wp-dark-mode-ignore cv-card-title">...</div>
  <!-- content -->
</div>
```

### WOW Callout
```html
<div class="wp-dark-mode-ignore cv-wow cv-mb">
  <div class="wp-dark-mode-ignore cv-wow-label">
    <i class="wp-dark-mode-ignore fa-solid fa-[icon]" style="margin-right:0.4rem;"></i> LABEL
  </div>
  <div class="wp-dark-mode-ignore cv-wow-number">[BIG NUMBER]</div>
  <div class="wp-dark-mode-ignore cv-wow-body">Context text</div>
</div>
```

### Pros / Cons
```html
<div class="wp-dark-mode-ignore cv-pros-cons">
  <div class="wp-dark-mode-ignore cv-pros">
    <div class="wp-dark-mode-ignore cv-pct cv-pct-pro">
      <i class="wp-dark-mode-ignore fa-solid fa-thumbs-up"></i> 長所
    </div>
    <div class="wp-dark-mode-ignore cv-pcl">
      <div class="wp-dark-mode-ignore cv-pci cv-pci-pro">
        <i class="wp-dark-mode-ignore fa-solid fa-circle-check cv-pci-icon-pro"></i>
        <span class="wp-dark-mode-ignore">Pro item text</span>
      </div>
    </div>
  </div>
  <div class="wp-dark-mode-ignore cv-cons">
    <!-- mirror with con styling -->
  </div>
</div>
```

### Comparison Table (dual representation)
```html
<!-- PC TABLE -->
<div class="wp-dark-mode-ignore cv-table-wrap cv-tbl-pc">
  <table class="cv-table">
    <thead><tr>
      <th class="wp-dark-mode-ignore">Col 1</th>
      <th class="wp-dark-mode-ignore">Col 2</th>
    </tr></thead>
    <tbody>
      <tr class="cv-tr-hl">
        <td class="wp-dark-mode-ignore">value</td>
      </tr>
    </tbody>
  </table>
</div>

<!-- MOBILE CARDS -->
<div class="wp-dark-mode-ignore cv-tbl-mobile">
  <div class="wp-dark-mode-ignore cv-sc-row">
    <div class="wp-dark-mode-ignore cv-sc-label">SPEC</div>
    <div style="display:flex; gap:0.625rem;" class="wp-dark-mode-ignore">
      <div class="wp-dark-mode-ignore cv-sc-new">
        <span class="wp-dark-mode-ignore cv-sc-model">MODEL A</span>
        <span class="wp-dark-mode-ignore cv-sc-val">value</span>
      </div>
      <div class="wp-dark-mode-ignore cv-sc-old">
        <span class="wp-dark-mode-ignore cv-sc-model">MODEL B</span>
        <span class="wp-dark-mode-ignore cv-sc-val">value</span>
      </div>
    </div>
  </div>
</div>
```

### Insight Boxes
```html
<div class="wp-dark-mode-ignore cv-ins-blue"><strong class="wp-dark-mode-ignore">💡 Label:</strong> Blue insight — neutral helpful info</div>
<div class="wp-dark-mode-ignore cv-ins-green"><strong class="wp-dark-mode-ignore">✅ Label:</strong> Green note — positive confirmation</div>
<div class="wp-dark-mode-ignore cv-ins-amber"><strong class="wp-dark-mode-ignore">⚠️ Label:</strong> Amber — caution or warning</div>
```

### Pull Quote
```html
<div style="border-left:4px solid [accent]; padding:1rem 1.5rem; background:[accent-tint]; border-radius:0 0.75rem 0.75rem 0; margin:0 0 1.5rem;" class="wp-dark-mode-ignore">
  <p style="font-size:1.05rem; font-style:italic; font-weight:600; color:#0f172a; line-height:1.65; margin:0;" class="wp-dark-mode-ignore">"Quote text here"</p>
  <p style="font-size:0.8rem; color:#64748b; margin-top:0.5rem; margin-bottom:0;" class="wp-dark-mode-ignore">— Attribution</p>
</div>
```

### Verdict
```html
<div class="wp-dark-mode-ignore cv-dark cv-mb">
  <div class="wp-dark-mode-ignore cv-card-title" style="color:white;">
    <i class="wp-dark-mode-ignore fa-solid fa-flag-checkered" style="color:[accent];"></i> 総合評価：どちらを選ぶべきか
  </div>
  <p style="color:#cbd5e1; font-size:0.875rem; line-height:1.7; margin-bottom:1.25rem;" class="wp-dark-mode-ignore">Summary sentence</p>
  <div class="wp-dark-mode-ignore cv-grid-2" style="gap:0.875rem; margin-bottom:1.25rem;">
    <div class="wp-dark-mode-ignore cv-vbox">
      <div class="wp-dark-mode-ignore cv-vtitle" style="color:#4ade80;">✓ こんな人に最適</div>
      <ul class="wp-dark-mode-ignore cv-vlist">
        <li class="wp-dark-mode-ignore">Who this is for</li>
      </ul>
    </div>
    <div class="wp-dark-mode-ignore cv-vbox">
      <div class="wp-dark-mode-ignore cv-vtitle" style="color:#f87171;">✗ 別のシューズを検討すべき人</div>
      <ul class="wp-dark-mode-ignore cv-vlist">
        <li class="wp-dark-mode-ignore">Who should look elsewhere</li>
      </ul>
    </div>
  </div>
</div>
```

### Timeline
```html
<div class="wp-dark-mode-ignore cv-timeline">
  <div class="wp-dark-mode-ignore cv-tl-item">
    <div class="wp-dark-mode-ignore cv-tl-dot"></div>
    <div class="wp-dark-mode-ignore cv-tl-content">
      <div class="wp-dark-mode-ignore cv-tl-year">YEAR</div>
      <div class="wp-dark-mode-ignore cv-tl-title">Entry Title</div>
      <p class="wp-dark-mode-ignore cv-tl-body">Entry description</p>
    </div>
  </div>
</div>
```

### Progress Bars
```html
<div class="wp-dark-mode-ignore cv-bar-row">
  <div class="wp-dark-mode-ignore cv-bar-lbl">
    <span class="wp-dark-mode-ignore">Label</span>
    <span style="color:[accent]; font-weight:900;" class="wp-dark-mode-ignore">VALUE%</span>
  </div>
  <div class="wp-dark-mode-ignore cv-bar-track">
    <div class="wp-dark-mode-ignore cv-bar-fill" style="width:VALUE%; background:linear-gradient(to right,[accent],[accent-dark]);"></div>
  </div>
</div>
```

### Tag Pills
```html
<span class="wp-dark-mode-ignore cv-tag cv-tag-blue">Tag</span>
<span class="wp-dark-mode-ignore cv-tag cv-tag-green">Tag</span>
<span class="wp-dark-mode-ignore cv-tag cv-tag-red">Tag</span>
<span class="wp-dark-mode-ignore cv-tag cv-tag-amber">Tag</span>
<span class="wp-dark-mode-ignore cv-tag cv-tag-purple">Tag</span>
```

---

## 📐 STEP 8 — CSS Foundation

Include this in every article. Replace all `[placeholder]` values with article-specific palette colors. **Remember: this entire `<style>` block goes at the very bottom of the file, after all HTML content.**

```css
/* ===== WP DARK MODE PROTECTION ===== */
/* [Insert the full protection block from Phase C2 here, with placeholders filled in] */

/* ===== RESET ===== */
.content-visual *, .content-visual ::before, .content-visual ::after {
  box-sizing: border-box; margin: 0; padding: 0;
}

/* ===== CONTAINER ===== */
/* NOTE: cv-container has NO wp-dark-mode-ignore class — it goes transparent in dark mode */
.content-visual .cv-container {
  max-width: 64rem; margin: 0 auto; padding: 1.25rem;
  font-family: "Hiragino Sans", "ヒラギノ角ゴシック", "Yu Gothic", "游ゴシック", ui-sans-serif, system-ui, sans-serif;
  color: #334155; background: [page bg — #f8fafc or #ffffff];
}
.content-visual .cv-mb { margin-bottom: 1.5rem; }

/* ===== HERO ===== */
.content-visual .cv-hero {
  background: linear-gradient(135deg, [STOP1], [STOP2], [STOP3]);
  border-radius: 1.25rem; padding: 2.25rem 2rem; margin-bottom: 1.5rem;
  position: relative; overflow: hidden;
}
.content-visual .cv-hero::before {
  content:''; position:absolute; top:-60px; right:-60px; width:280px; height:280px;
  background:radial-gradient(circle, rgba([AR],[AG],[AB],0.18) 0%, transparent 70%);
  border-radius:50%; pointer-events:none;
}
.content-visual .cv-hero-badge {
  display:inline-flex; align-items:center;
  background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.2);
  padding:0.3rem 0.875rem; border-radius:9999px;
  font-size:0.8rem; font-weight:600; color:[ACCENT-LIGHT];
}
.content-visual .cv-h1 {
  color: #ffffff;
  font-size: clamp([MIN], [VW]vw, [MAX]); font-weight:900;
  line-height:1.15; letter-spacing:-0.02em; margin-bottom:0.75rem;
}
.content-visual .cv-h1-accent { color: [ACCENT]; }
.content-visual .cv-hero-sub { font-size:0.9rem; color:[HERO-MUTED]; margin-bottom:1.75rem; line-height:1.65; }
.content-visual .cv-hero-stats { display:grid; grid-template-columns:repeat(4,1fr); gap:0.75rem; }
.content-visual .cv-hero-stat {
  background:rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.12);
  border-radius:0.75rem; padding:0.875rem; text-align:center;
}
.content-visual .cv-stat-val { font-size:[tuned to value length]; font-weight:900; color:[ACCENT]; }
.content-visual .cv-stat-label { font-size:0.68rem; color:[HERO-MUTED]; margin-top:0.2rem; line-height:1.3; }

/* ===== CARDS ===== */
.content-visual .cv-card { background:white; border-radius:1rem; padding:1.75rem; margin-bottom:1.5rem; border:1px solid #e2e8f0; }
.content-visual .cv-card-title { font-size:1.15rem; font-weight:800; color:#0f172a; margin-bottom:1.25rem; display:flex; align-items:center; gap:0.6rem; }
.content-visual .cv-dark { background:linear-gradient(135deg,#1e293b,#0f172a); border-radius:1rem; padding:1.75rem; margin-bottom:1.5rem; }
.content-visual .cv-dark .cv-card-title { color:white; }
.content-visual .cv-tinted {
  background:linear-gradient(135deg,[TINT-START],[TINT-END]);
  border:1px solid [TINT-BORDER]; border-radius:1rem; padding:1.75rem; margin-bottom:1.5rem;
}

/* ===== WOW ===== */
.content-visual .cv-wow { background:linear-gradient(135deg,[WOW-START],[WOW-END]); border-radius:1rem; padding:1.75rem; text-align:center; color:white; margin-bottom:1.5rem; }
.content-visual .cv-wow-label { font-size:0.75rem; font-weight:700; opacity:0.85; letter-spacing:0.12em; text-transform:uppercase; margin-bottom:0.6rem; color:[ACCENT-LIGHT]; }
.content-visual .cv-wow-number { font-size:clamp(2.5rem,7vw,5rem); font-weight:900; line-height:1; margin-bottom:0.6rem; color:[ACCENT]; }
.content-visual .cv-wow-body { font-size:0.9rem; color:#cbd5e1; max-width:40rem; margin:0 auto; line-height:1.65; }

/* ===== GRIDS ===== */
.content-visual .cv-grid-2 { display:grid; grid-template-columns:1fr 1fr; gap:1.25rem; }
.content-visual .cv-grid-3 { display:grid; grid-template-columns:repeat(3,1fr); gap:1.25rem; }
.content-visual .cv-grid-4 { display:grid; grid-template-columns:repeat(4,1fr); gap:1rem; }

/* ===== TABLES ===== */
.content-visual .cv-table-wrap { overflow-x:auto; border-radius:0.75rem; }
.content-visual .cv-table { width:100%; border-collapse:collapse; font-size:0.875rem; }
.content-visual .cv-table th { background:[TABLE-HEADER-BG]; color:[TABLE-HEADER-TEXT]; padding:0.75rem 1rem; font-weight:700; text-align:left; font-size:0.8rem; }
.content-visual .cv-table td { padding:0.7rem 1rem; border-bottom:1px solid #e2e8f0; color:#334155; vertical-align:middle; }
.content-visual .cv-table tr:last-child td { border-bottom:none; }
.content-visual .cv-table tr:hover td { background:[ACCENT-TINT]; }
.content-visual .cv-tr-hl td { background:[ACCENT-TINT]; }
.content-visual .cv-spec-good { color:#15803d; font-weight:700; }
.content-visual .cv-spec-note { color:#64748b; font-size:0.78rem; }
.content-visual .cv-tbl-pc { display:block; }
.content-visual .cv-tbl-mobile { display:none; }

/* ===== MOBILE SPEC CARDS ===== */
.content-visual .cv-sc-row { border-bottom:1px solid #f1f5f9; padding:0.875rem 0; }
.content-visual .cv-sc-row:last-child { border-bottom:none; padding-bottom:0; }
.content-visual .cv-sc-label { font-size:0.72rem; font-weight:700; color:#64748b; text-transform:uppercase; letter-spacing:0.05em; margin-bottom:0.5rem; }
.content-visual .cv-sc-new, .content-visual .cv-sc-old { flex:1; border-radius:0.5rem; padding:0.625rem 0.75rem; display:flex; flex-direction:column; gap:0.2rem; }
.content-visual .cv-sc-new { background:[ACCENT-TINT]; border:1px solid [ACCENT-LIGHT-BORDER]; }
.content-visual .cv-sc-old { background:#f8fafc; border:1px solid #e2e8f0; }
.content-visual .cv-sc-model { font-size:0.62rem; font-weight:800; text-transform:uppercase; letter-spacing:0.07em; }
.content-visual .cv-sc-new .cv-sc-model { color:[ACCENT]; }
.content-visual .cv-sc-old .cv-sc-model { color:#94a3b8; }

/* ===== PROS / CONS ===== */
.content-visual .cv-pros-cons { display:grid; grid-template-columns:repeat(2,1fr); gap:1rem; }
.content-visual .cv-pros { background:#f0fdf4; border:1px solid #bbf7d0; border-radius:0.75rem; padding:1.1rem; }
.content-visual .cv-cons { background:#fff5f5; border:1px solid #fecaca; border-radius:0.75rem; padding:1.1rem; }
.content-visual .cv-pct { font-size:0.875rem; font-weight:800; margin-bottom:0.75rem; display:flex; align-items:center; gap:0.4rem; }
.content-visual .cv-pct-pro { color:#15803d; }
.content-visual .cv-pct-con { color:#dc2626; }
.content-visual .cv-pcl { display:flex; flex-direction:column; gap:0.5rem; }
.content-visual .cv-pci { display:flex; gap:0.5rem; align-items:flex-start; font-size:0.84rem; line-height:1.55; color:#334155; }
.content-visual .cv-pci-pro .cv-pci-icon-pro { color:#22c55e; flex-shrink:0; margin-top:0.1rem; }
.content-visual .cv-pci-con .cv-pci-icon-con { color:#f87171; flex-shrink:0; margin-top:0.1rem; }

/* ===== PROGRESS BARS ===== */
.content-visual .cv-bar-row { margin-bottom:1rem; }
.content-visual .cv-bar-lbl { display:flex; justify-content:space-between; font-size:0.84rem; font-weight:600; color:#0f172a; margin-bottom:0.35rem; }
.content-visual .cv-bar-track { background:#e2e8f0; border-radius:9999px; height:0.625rem; }
.content-visual .cv-bar-fill { height:0.625rem; border-radius:9999px; }
.content-visual .cv-bar-caption { font-size:0.72rem; color:#64748b; margin-top:0.25rem; }

/* ===== VERDICT ===== */
.content-visual .cv-vbox { background:rgba(255,255,255,0.07); border:1px solid rgba(255,255,255,0.12); border-radius:0.75rem; padding:1.1rem; }
.content-visual .cv-vtitle { font-size:0.875rem; font-weight:800; margin-bottom:0.625rem; }
.content-visual .cv-vlist { list-style:none; padding:0; display:flex; flex-direction:column; gap:0.45rem; }
.content-visual .cv-vlist li { font-size:0.84rem; color:#e2e8f0; line-height:1.5; padding-left:0.875rem; position:relative; }
.content-visual .cv-vlist li::before { content:'›'; position:absolute; left:0; color:rgba(255,255,255,0.4); }

/* ===== HIERARCHY CARDS ===== */
.content-visual .cv-hier { background:rgba(255,255,255,0.07); border:1px solid rgba(255,255,255,0.12); border-radius:0.75rem; padding:1.1rem; }
.content-visual .cv-hier-center { background:rgba([AR],[AG],[AB],0.1); border-color:rgba([AR],[AG],[AB],0.3); }
.content-visual .cv-hier-cat { font-size:0.65rem; font-weight:700; text-transform:uppercase; letter-spacing:0.07em; margin-bottom:0.35rem; }
.content-visual .cv-hier-name { font-size:0.95rem; font-weight:800; color:white; margin-bottom:0.35rem; }
.content-visual .cv-hier-body { font-size:0.78rem; color:#94a3b8; line-height:1.5; }

/* ===== INSIGHT / WARNING BOXES ===== */
.content-visual .cv-ins-blue { background:#eff6ff; border-left:4px solid #3b82f6; border-radius:0 0.5rem 0.5rem 0; padding:0.875rem 1rem; font-size:0.875rem; color:#1e40af; line-height:1.6; margin-bottom:1rem; }
.content-visual .cv-ins-green { background:#f0fdf4; border-left:4px solid #22c55e; border-radius:0 0.5rem 0.5rem 0; padding:0.875rem 1rem; font-size:0.875rem; color:#15803d; line-height:1.6; margin-bottom:1rem; }
.content-visual .cv-ins-amber { background:#fffbeb; border-left:4px solid #f59e0b; border-radius:0 0.5rem 0.5rem 0; padding:0.875rem 1rem; font-size:0.875rem; color:#92400e; line-height:1.6; margin-bottom:1rem; }
.content-visual .cv-warn { background:#fef9c3; border:2px solid #f59e0b; border-radius:0.75rem; padding:1rem; display:flex; gap:0.75rem; align-items:flex-start; margin-top:1rem; }
.content-visual .cv-warn-icon { color:#d97706; font-size:1.1rem; flex-shrink:0; margin-top:0.1rem; }
.content-visual .cv-warn-text { font-size:0.875rem; color:#78350f; line-height:1.65; margin:0; }

/* ===== TAGS ===== */
.content-visual .cv-tag { display:inline-block; padding:0.15rem 0.55rem; border-radius:9999px; font-size:0.7rem; font-weight:700; margin:0.1rem; }
.content-visual .cv-tag-teal   { background:#ccfbef; color:#0b5563; }
.content-visual .cv-tag-blue   { background:#dbeafe; color:#1d4ed8; }
.content-visual .cv-tag-green  { background:#dcfce7; color:#15803d; }
.content-visual .cv-tag-amber  { background:#fef3c7; color:#92400e; }
.content-visual .cv-tag-red    { background:#fee2e2; color:#dc2626; }
.content-visual .cv-tag-purple { background:#f3e8ff; color:#7c3aed; }

/* ===== BODY TEXT ===== */
.content-visual .cv-body { font-size:0.875rem; color:#475569; line-height:1.75; margin-bottom:1rem; }
.content-visual .cv-body:last-child { margin-bottom:0; }

/* ===== TIMELINE ===== */
.content-visual .cv-timeline { position:relative; padding-left:1.5rem; }
.content-visual .cv-timeline::before { content:''; position:absolute; left:0; top:0.5rem; bottom:0; width:2px; background:#e2e8f0; }
.content-visual .cv-tl-item { position:relative; padding-bottom:1.5rem; }
.content-visual .cv-tl-item:last-child { padding-bottom:0; }
.content-visual .cv-tl-dot { position:absolute; left:-1.65rem; top:0.35rem; width:12px; height:12px; border-radius:50%; background:#cbd5e1; border:2px solid white; box-shadow:0 0 0 2px #e2e8f0; }
.content-visual .cv-tl-dot-current { background:[ACCENT]; box-shadow:0 0 0 3px rgba([AR],[AG],[AB],0.25); }
.content-visual .cv-tl-year { font-size:0.68rem; font-weight:700; color:[ACCENT]; text-transform:uppercase; letter-spacing:0.08em; margin-bottom:0.15rem; }
.content-visual .cv-tl-title { font-size:0.925rem; font-weight:700; color:#0f172a; }
.content-visual .cv-tl-body { font-size:0.85rem; color:#475569; line-height:1.7; margin-top:0.35rem; }

/* ===== IMAGES ===== */
.content-visual .cv-img-block { background:white; border-radius:1rem; overflow:hidden; border:1px solid #e2e8f0; margin-bottom:1.5rem; }
.content-visual .cv-img-main { width:100%; height:auto; display:block; object-fit:cover; }
.content-visual .cv-img-landscape { max-height:400px; object-fit:cover; object-position:center; }
.content-visual .cv-img-credit { font-size:0.68rem; color:#94a3b8; padding:0.45rem 1rem; text-align:right; background:#f8fdfd; border-top:1px solid #d4ede8; }

/* ===== NOTO ICON SIZE CLASSES ===== */
.content-visual .cv-noto-lg { width:60px; height:60px; flex-shrink:0; align-self:center; }
.content-visual .cv-noto-md { width:36px; height:36px; flex-shrink:0; align-self:center; }
.content-visual .cv-noto-sm { width:24px; height:24px; flex-shrink:0; align-self:center; }

/* ===== SOURCE NOTE ===== */
.content-visual .cv-source { background:white; border:1px solid #e2e8f0; border-radius:0.75rem; padding:0.875rem 1.25rem; margin-top:0.75rem; display:flex; align-items:center; gap:1rem; }
.content-visual .cv-source-lbl { font-size:0.7rem; font-weight:700; color:#64748b; text-transform:uppercase; margin-bottom:0.15rem; }
.content-visual .cv-source-link { font-size:0.875rem; color:#1d4ed8; text-decoration:none; font-weight:600; }

/* ===== SEPARATOR ===== */
.content-visual .cv-sep { border:none; border-top:1px solid #e2e8f0; margin:1.25rem 0; }

/* ===== MOBILE BREAKPOINT ===== */
@media (max-width: 640px) {

  /* Zero out horizontal padding — WordPress handles page margins */
  .content-visual .cv-container { padding:0; background:transparent; }
  .content-visual .cv-mb { margin-bottom:0.625rem; }

  /* Edge-to-edge but KEEP rounded corners — never use border-radius:0 on cards */
  .content-visual .cv-hero   { border-radius:1.25rem; padding:1.5rem 1rem; margin-bottom:0.625rem; }
  .content-visual .cv-card   { border-radius:1rem; border-left:none; border-right:none; padding:1.25rem 1rem; margin-bottom:0.625rem; }
  .content-visual .cv-dark   { border-radius:1rem; padding:1.25rem 1rem; margin-bottom:0.625rem; }
  .content-visual .cv-wow    { border-radius:1rem; padding:1.25rem 1rem; margin-bottom:0.625rem; }
  .content-visual .cv-tinted { border-radius:1rem; border-left:none; border-right:none; padding:1.25rem 1rem; margin-bottom:0.625rem; }
  .content-visual .cv-source { border-radius:0.75rem; border-left:none; border-right:none; }
  .content-visual .cv-img-block { border-radius:0.75rem; border-left:none; border-right:none; margin-bottom:0.625rem; }
  .content-visual .cv-img-landscape { max-height:220px; }

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

  /* Noto icons: scale down or hide */
  .content-visual .cv-noto-lg { width:32px; height:32px; }
  .content-visual .cv-noto-md { width:22px; height:22px; }
  .content-visual .cv-noto-sm { display:none; }

  /*
   * ⚠️ PADDING BUG PREVENTION:
   * NEVER add padding:0 1rem to cv-pros-cons, cv-grid-2, or cv-grid-3 here.
   * These components sit inside cv-card which already gives them 1.25rem 1rem padding.
   * Extra side padding creates a double-gutter, making those components narrower than siblings.
   */

  /* Rounded inner components */
  .content-visual .cv-pros, .content-visual .cv-cons { border-radius:0.625rem; }
  .content-visual .cv-vbox, .content-visual .cv-hier { border-radius:0.5rem; }
  .content-visual .cv-ins-blue,
  .content-visual .cv-ins-green,
  .content-visual .cv-ins-amber { border-radius:0.5rem; }
}
```

---

## ⚠️ STEP 9 — Non-Negotiable Rules

### R1 — All Text Must Have Explicit Color
Never rely on CSS color inheritance when the background is non-white. Every element on a dark, tinted, or gradient background must have its text color set explicitly.

### R2 — Fresh Palette Every Article
Never reuse a hero gradient, accent color, or overall palette. Every page must have its own visual identity.

### R3 — Dual Table Representation for Complex Tables
Any table with long text, multiple columns, or Japanese/CJK content must have both a PC table and a mobile card layout.

### R4 — Noto Icons Fill Whitespace, Never Create It
An icon on its own row is wrong. An icon inside an existing flex row, filling space that was already empty, is right.

### R5 — Icons Are Always Searched, Never Hardcoded
Think about the visual concept needed, search Iconify or other current free icon sources, verify the URL, use it. Never rely on memorized icon names.

### R6 — Typography Adapts to Content
Adjust `clamp()` values to fit the actual content. A second line with 1–2 words means the font size is too large. Long stat values need smaller font-size than short ones.

### R7 — Mobile Is Tested Mentally Before Output
Simulate the page at ~390px width before finalizing. Walk through every section top to bottom. Fix any overflow, width inconsistency, or icon breakage before outputting.

### R8 — Section Count Matches Article Depth
- 500–800 words → 4–5 sections max
- 1000–2000 words → 6–8 sections
- 2000+ words → 8–12 sections

### R9 — Color is Semantic Inside Components
Comparison tables: green for relatively good values, red for relatively bad. Pros sections use green. Cons use red/orange. Warning boxes use amber. These are universal signals.

### R10 — Visual Rhythm Across the Whole Page
Never repeat the same card style more than 2–3 times in a row. Alternate between white cards, dark sections, tinted sections, gradient callouts.

### R11 — Every Decision Is Content-Driven, Not Pattern-Driven
No fixed templates. The article content determines everything. Read the article, think about what serves the reader, then decide.

### R12 — Consistent Component Width Within a Section
All sibling grid-type components inside the same card must render at the same effective width on both PC and mobile.

### R13 — No Price Information
Never include any price or cost information from the transcript.

### R14 — Specs Must Be Verified Before Publishing
Never output a weight, stack height, drop, or other spec without first verifying from an authoritative source.

### R15 — Units Must Be Calculated, Not Relabeled
Every unit conversion must be mathematically correct. Running pace: always treat seconds separately — "6:30" is 6.5 minutes, not 6.3.

### R16 — Image URLs Must Be Verified Before Use
Never include an image URL unless confirmed working via `web_fetch`. A broken image is worse than no image.

### R17 — Never Describe an Image You Have Not Seen
Use only generic neutral labels for images you haven't viewed. Never guess colorway, angle, or content from filenames.

### R18 — Image Alt Text Is Also the WordPress Filename
Write alt texts as clean, lowercase, hyphenated English. No Japanese characters, no special characters, no spaces. Max ~60 characters.

### R19 — `<div>` First, `<style>` Last — Always

> **This is one of the most important structural rules. Violating it causes WordPress to use raw CSS as the post excerpt, which is ugly and broken.**

**Mandatory file order:**
1. `<div class="content-visual" data-wp-dark-mode-ignore="true">` — **absolute first line**
2. HTML comment + Font Awesome `<link>` tag
3. All article HTML content (`cv-container`, all sections, images, footer)
4. Closing `</div>` tags
5. `<style>` block — **absolute last thing in the file**

Never put `<style>` anywhere except the very bottom of the file.

### R20 — `wp-dark-mode-ignore` on Every Element Except `cv-container`

Every `div`, `p`, `span`, `strong`, `i`, `h1`–`h6`, `ul`, `ol`, `li`, etc. in the HTML must include `wp-dark-mode-ignore` in its class list — **except `cv-container`**. The `cv-container` element intentionally has no `wp-dark-mode-ignore` so its background goes transparent in dark mode, letting the dark page show through.

### R21 — Mobile Cards Must Have Rounded Corners

Never use `border-radius: 0` on cards, hero, dark sections, or WOW callouts in the mobile breakpoint. The correct mobile treatment is: **edge-to-edge** (no side borders, no side margin) **with rounded corners preserved**. See the mobile CSS template in Step 8.

### R22 — SEO Title Is a Required Second Deliverable

Every run of this workflow must produce **two output files**:

**File 1 — The HTML block** (`[slug].html`)

**File 2 — The SEO post title** (`[slug]-title.txt`)
- Written in **Japanese**
- SEO-optimised — front-load the most searched keywords
- Engaging and click-worthy
- Natural — reads like a human wrote it
- Under 80 characters if possible
- End with 1–2 relevant emojis
- No price, date, or information that will become stale

Example:
```
アシックス スーパーブラスト3 vs メガブラスト｜どちらを買うべきか？違いを徹底比較 👟🔥
```

---

## ✅ PRE-OUTPUT CHECKLIST

Run through this before saving any file. Do not skip steps.

**File Structure**
- [ ] `<div class="content-visual" data-wp-dark-mode-ignore="true">` is the absolute first line
- [ ] `<style>` block is the absolute last thing in the file — after all HTML content and closing divs
- [ ] No CSS appears before the HTML content
- [ ] Output is a WordPress Custom HTML block — not a full HTML page (no `<html>`, `<head>`, `<body>` tags)

**WP Dark Mode Compatibility**
- [ ] `cv-container` does NOT have `wp-dark-mode-ignore` class (intentionally transparent in dark mode)
- [ ] Every other element (`div`, `p`, `span`, `strong`, `i`, `h1`–`h6`, `ul`, `ol`, `li`) has `wp-dark-mode-ignore` in its class list
- [ ] The `[data-wp-dark-mode-ignore]` CSS protection block is included at the top of the `<style>` block
- [ ] All `[PLACEHOLDER]` values in the protection block are filled with the article's actual colors
- [ ] Colored sections (hero, dark, wow, tinted, pros/cons, insight boxes) are protected with `!important` overrides

**CSS Scoping**
- [ ] Every CSS rule is prefixed with `.content-visual` — no bare selectors that could leak into the rest of the page

**Translation & Content**
- [ ] All brand and product names verified against official Japanese sources — not guessed
- [ ] All technology and material terms searched and confirmed in Japanese
- [ ] All units properly converted with correct math
- [ ] Running pace converted correctly — seconds treated as seconds, not decimals
- [ ] All specs verified against brand official, RunRepeat, or equivalent authoritative source
- [ ] No price information included anywhere
- [ ] Article reads as professional Japanese journalism — no hype, no exclamation marks

**Mobile**
- [ ] `cv-container` has `padding:0` on mobile
- [ ] Cards are edge-to-edge on mobile but **retain rounded corners** — `border-radius` is NOT zero
- [ ] All grids collapse to single column at 640px
- [ ] Complex tables have dual PC/mobile representation
- [ ] No double-gutter bug: no extra `padding: 0 1rem` added to grid children inside padded cards
- [ ] Noto icons have defined mobile behavior (scale or hide)
- [ ] Mentally simulated at 390px — nothing broken, nothing cramped

**Color & Contrast**
- [ ] Fresh unique palette — not reused from any previous article
- [ ] All text on non-white backgrounds has explicit color set
- [ ] Accent is vivid and readable on both dark hero AND white cards
- [ ] Pros/cons sections use green/red tones

**Content Intelligence**
- [ ] Reader's primary question answered in the hero or first visible section
- [ ] WOW moments have special visual treatment — not buried in plain text
- [ ] Each section contains real content from the article — nothing invented

**Icons**
- [ ] Font Awesome CDN link present (latest version URL searched, not hardcoded)
- [ ] Colorful Noto/emoji icons only where natural whitespace exists
- [ ] 2–4 colored icons max across the whole page
- [ ] No colored icon creates a new vertical row

**Typography**
- [ ] Hero title `clamp()` tuned to actual title length
- [ ] No title wraps to a second line with only 1–3 words
- [ ] Stat values with long strings use smaller font-size

**Images**
- [ ] Every image URL tested with `web_fetch` before inclusion
- [ ] No image URL modified from its source
- [ ] No image has a specific label unless the image was actually viewed
- [ ] All alt texts are lowercase hyphenated English — valid as WordPress filenames
- [ ] Every image has an inline `© [Brand]` credit line
- [ ] Page-level image attribution footer present at bottom

**Deliverables**
- [ ] HTML file saved and presented to user
- [ ] SEO title `.txt` file saved and presented to user alongside HTML file

---

*End of handoff v1.2. Provide this file + a transcript (any language) → translate, verify all specs and terminology, convert all units, find and verify images, and generate both deliverables immediately. The `<div>` must be first. The `<style>` must be last. `wp-dark-mode-ignore` on every element except `cv-container`. Rounded corners preserved on mobile. Use your full capabilities. Take the time needed. Prioritize quality above all else.*
