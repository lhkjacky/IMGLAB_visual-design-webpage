# Transcript → WordPress Block Handoff v1.4

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
The AI environment cannot reach external networks via curl. Therefore: use the `web_fetch` tool to attempt to load each image URL. If `web_fetch` succeeds and returns image data, the URL is confirmed live. If it fails or returns an error, the URL is dead — do not use it.

If `web_fetch` is unavailable or blocked for a specific URL, explicitly tell the user: *"I cannot verify this URL from my environment. Please test it in your browser before publishing."* Then include it as a candidate with a clear warning, not as a confirmed working link.

**Step 3 — Never include an unverified URL in the final HTML.**
A broken image in the published article is worse than no image. If you cannot confirm a URL works, omit it and note the omission to the user.

**Step 4 — If the user confirms a URL pattern works, apply it consistently.**
If the user tests a URL and confirms the pattern (e.g. "without the size subfolder it works"), you may apply that same correction to other IDs from the same CDN — but note in your response that you are doing so, and still ask the user to verify a sample before treating the whole batch as confirmed.

### B4 — The Image Description Rule (CRITICAL — Past Mistakes Were Made Here)

> **This rule was also violated in a past session. Fabricated descriptions were applied to images that had never been viewed.**

#### The exact mistake that was made:
Three images were labelled "Cobalt Burst / Light Orange", "White / Black", and "Seashell / Sun Coral" based on the press release text listing three colorways. None of those images had been viewed. The labels were completely invented. The images were actually all showing the same colorway from different angles — the labels were entirely wrong.

#### The rule going forward:

**You may only describe what you have actually seen.**

- If you have **viewed the image** (via image search, web fetch, or the user has shown it to you) → you may write a specific descriptive label (angle, colorway, feature shown)
- If you have **not viewed the image** → use only a generic neutral label like「公式プロダクトショット」or「製品画像」— never guess at colorway, angle, or content
- **Never infer visual content from filenames, ID numbers, or adjacent text.** A filename like `712946.jpg` tells you nothing about what color or angle is shown. A press release mentioning three colorways does not tell you which image ID corresponds to which colorway.
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
  .content-visual .cv-img-trio-item:last-child .cv-img-main { aspect-ratio: 2/1; }
}

/* Mobile: single column — product images are too small at 3-col on phone */
@media (max-width: 640px) {
  .content-visual .cv-img-trio { grid-template-columns: 1fr; gap: 0.5rem; margin-bottom: 0.625rem; }
  .content-visual .cv-img-trio-item { border-radius: 0; border-left: none; border-right: none; }
  .content-visual .cv-img-trio-item .cv-img-main { aspect-ratio: 3/2; }
}
```

**2-column image duo (side-by-side detail shots):**
```css
.content-visual .cv-img-duo { display: grid; grid-template-columns: 1fr 1fr; }
.content-visual .cv-img-duo-item:first-child { border-right: 1px solid [accent-tint-border]; }
.content-visual .cv-img-duo-item .cv-img-main { aspect-ratio: 4/3; object-fit: cover; }
.content-visual .cv-img-duo-label {
  font-size: 0.68rem; color: #64748b; padding: 0.4rem 0.75rem 0.5rem;
  background: #f8fdfd; border-top: 1px solid [accent-tint-border]; line-height: 1.4;
  min-height: 2.2rem; display: flex; align-items: center;
}

/* Mobile: stack vertically */
@media (max-width: 640px) {
  .content-visual .cv-img-duo { grid-template-columns: 1fr; }
  .content-visual .cv-img-duo-item:first-child { border-right: none; border-bottom: 1px solid [accent-tint-border]; }
  .content-visual .cv-img-duo-item .cv-img-main { aspect-ratio: 3/2; }
}
```

**HTML structure for each image component:**
```html
<!-- Single landscape image -->
<div class="cv-img-block cv-mb">
  <img src="[verified URL]" alt="[brand-model-description-year]" class="cv-img-main cv-img-landscape">
  <div class="cv-img-credit">© [Brand] / <a href="[source URL]" target="_blank" rel="noopener">[Source Name]</a></div>
</div>

<!-- 3-column trio -->
<div class="cv-img-trio cv-mb">
  <div class="cv-img-trio-item">
    <img src="[verified URL]" alt="[brand-model-detail]" class="cv-img-main">
    <div class="cv-img-trio-label">[Label — only if visually confirmed]</div>
  </div>
  <!-- repeat × 2 -->
  <div class="cv-img-credit" style="grid-column:1/-1;">© [Brand] / [Source]</div>
</div>

<!-- 2-column duo -->
<div class="cv-img-block cv-mb">
  <div class="cv-img-duo">
    <div class="cv-img-duo-item">
      <img src="[verified URL]" alt="[brand-model-detail-1]" class="cv-img-main">
      <div class="cv-img-duo-label">[Label — only if visually confirmed]</div>
    </div>
    <div class="cv-img-duo-item">
      <img src="[verified URL]" alt="[brand-model-detail-2]" class="cv-img-main">
      <div class="cv-img-duo-label">[Label — only if visually confirmed]</div>
    </div>
  </div>
  <div class="cv-img-credit">© [Brand] / [Source]</div>
</div>
```

---

## 🏗️ PHASE C — HTML STRUCTURE & FILE RULES

> **These rules are mandatory and non-negotiable. Violating them causes broken WordPress excerpts, dark mode failures, and mobile layout bugs.**

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

**Why this order is mandatory:** WordPress Custom HTML blocks use the first few lines of text as the post excerpt. If `<style>` appears before the HTML content, raw CSS (including comments like `/* ===== WP DARK MODE PROTECTION =====`) becomes the excerpt — ugly and broken for readers.

**The `<div class="content-visual">` must be the absolute first line of the file.**
**The `<style>` block must be the absolute last thing in the file.**

> ⛔ WRONG:
> ```html
> <div class="content-visual">
> <link ...>
> <style>/* CSS */</style>
> <!-- content starts AFTER style — WRONG -->
> ```

> ✅ CORRECT:
> ```html
> <div class="content-visual" data-wp-dark-mode-ignore="true">
> <!-- Title | WordPress Block -->
> <link rel="stylesheet" href="[Font Awesome CDN]">
> <div class="cv-container">
> <!-- all article content here -->
> </div>
> </div>
>
> <style>
> /* ALL CSS here — at the very bottom */
> </style>
> ```

### C2 — WP DARK MODE COMPATIBILITY

The site uses **WP Dark Mode plugin v5.0.9 (Sapphire preset)**. This plugin applies `background-color` and `color` with `!important` to every HTML element by tag name when dark mode is active. Without protection it will override all card backgrounds and text colors.

#### How the plugin works:

The plugin's rule is roughly:
```css
html.wp-dark-mode-active body div:not(.wp-dark-mode-ignore) {
  background: var(--wp-dark-mode-secondary-background-color, #212121) !important;
}
```

The `:not(.wp-dark-mode-ignore)` check requires the class **directly on the element itself** — a parent having it does NOT protect children.

#### Protection strategy:

**Part 1 — Root container:**
```html
<div class="content-visual" data-wp-dark-mode-ignore="true">
```
This gives us `[data-wp-dark-mode-ignore]` as a high-specificity ancestor selector in CSS.

**Part 2 — `wp-dark-mode-ignore` on every element:**
Every `div`, `p`, `span`, `strong`, `i`, `h1`–`h6`, `ul`, `ol`, `li` in the HTML body must have `wp-dark-mode-ignore` in its class list — **except `cv-container`** (see Part 3).

> ⚠️ **`<i>` tags are the single most commonly missed element.** The `<i>` tag used for Font Awesome icons requires `wp-dark-mode-ignore` in its class — always, including when it is inside a `.cv-dark` section and already has an explicit `style="color:..."`. Without it, the plugin overrides the icon color with `!important`, which cascades and makes the parent title text appear black against the dark background. See the Documented Mistake (v1.3 → v1.4) above.

```html
<div class="cv-dark wp-dark-mode-ignore">
  <div class="cv-card-title wp-dark-mode-ignore" style="color:white;">
    <i class="fa-solid fa-person-running wp-dark-mode-ignore" style="color:#f4a0b8;"></i>  ← wp-dark-mode-ignore REQUIRED
    走行テスト：ペース別インプレッション
  </div>
</div>

<div class="wp-dark-mode-ignore cv-card cv-mb">
  <div class="wp-dark-mode-ignore cv-card-title">
    <i class="wp-dark-mode-ignore fa-solid fa-microchip" style="color:#00e6b4;"></i>
    Section Title
  </div>
  <p class="wp-dark-mode-ignore cv-body">Body text here</p>
</div>
```

**Part 3 — `cv-container` intentionally has NO `wp-dark-mode-ignore`:**
This lets its background go transparent in dark mode so the dark page background shows through naturally — avoiding the jarring "white island on dark page" problem. All inner colored sections are fully protected via CSS.

> ⛔ **DOCUMENTED MISTAKE (v1.2 → v1.3):** In a past session, `wp-dark-mode-ignore` was incorrectly added to `cv-container`, AND a `[data-wp-dark-mode-ignore] .cv-container { background: ... !important; }` override was included in the CSS protection block. Both of these are wrong. The container must have **no** `wp-dark-mode-ignore` class and **no** CSS background protection. Any such rule forces a light background on the container in dark mode, which is the exact "white island" problem this architecture is designed to avoid.
>
> **Mandatory self-check before saving the file:**
> 1. Search your HTML for `cv-container`. Confirm the opening tag reads exactly: `<div class="cv-container">` — no `wp-dark-mode-ignore` in its class list.
> 2. Search your `<style>` block for `cv-container`. The only rules that should appear are the base layout rules (max-width, padding, font-family) and the mobile `padding:0; background:transparent;` rule. If you find `[data-wp-dark-mode-ignore] .cv-container`, delete it immediately.
> 3. These two checks take ten seconds. Do not skip them.

> ⛔ **DOCUMENTED MISTAKE (v1.3 → v1.4) — Two separate failures, both confirmed in a real session:**
>
> **Mistake A — `<i>` icon tags missing `wp-dark-mode-ignore` inside `.cv-dark` sections.**
> The HTML was:
> ```html
> <div class="cv-card-title wp-dark-mode-ignore" style="color:white;">
>   <i class="fa-solid fa-person-running" style="color:#f4a0b8;"></i>  ← MISSING wp-dark-mode-ignore
>   走行テスト：ペース別インプレッション
> </div>
> ```
> The WP Dark Mode plugin overrode the `<i>` element's color with `!important`, and this cascaded to make the entire title text appear black against the dark background. The fix is simple: **every `<i>` tag must have `wp-dark-mode-ignore` in its class, including `<i>` tags inside `.cv-dark` sections.** This is now mandatory in Part 2 and the checklist.
>
> **Mistake B — `[data-wp-dark-mode-ignore] .cv-dark .cv-card-title { color: white !important; }` was absent from the CSS protection block.**
> This rule is present in this template (see Part 4 below), but was omitted when generating the protection block in the actual output. Without it, the broader `.cv-card-title { color: #0f172a !important; }` rule wins — making titles inside dark sections appear dark. **Before finalising, verify this exact rule is present in the generated CSS protection block.** It is now a named checklist item.
>
> **Mistake C — `cv-container` was given a light background color (`background: #fdf6f9`) in the article CSS.**
> The Step 8 CSS template previously showed `background: [page bg]` as a placeholder, which invited this mistake. The correct value is always `background: transparent` — the container must never have a solid background. It has been corrected in Step 8 below.

**Part 4 — CSS overrides using `[data-wp-dark-mode-ignore]` ancestor selector:**

Place this protection block at the TOP of the `<style>` block (which is at the bottom of the file). Replace all `[PLACEHOLDERS]` with the article's actual palette colors:

```css
/* ===== WP DARK MODE PROTECTION ===== */
/* cv-container has no wp-dark-mode-ignore — goes transparent in dark mode.
   Every other element has the class. Colors enforced below with !important. */

[data-wp-dark-mode-ignore] .cv-card             { background: white !important; border-color: #e2e8f0 !important; }
[data-wp-dark-mode-ignore] .cv-card-title       { color: #0f172a !important; }
[data-wp-dark-mode-ignore] .cv-body             { color: #475569 !important; }
[data-wp-dark-mode-ignore] .cv-sep              { border-color: #e2e8f0 !important; }
[data-wp-dark-mode-ignore] .cv-source           { background: white !important; border-color: #e2e8f0 !important; }
[data-wp-dark-mode-ignore] .cv-source-lbl       { color: #64748b !important; }
[data-wp-dark-mode-ignore] .cv-source-link      { color: #1d4ed8 !important; }
[data-wp-dark-mode-ignore] .cv-img-block        { background: white !important; border-color: #e2e8f0 !important; }
[data-wp-dark-mode-ignore] .cv-img-credit       { color: #94a3b8 !important; background: #f8fdfd !important; }

[data-wp-dark-mode-ignore] .cv-hero             { background: linear-gradient(135deg,[STOP1],[STOP2],[STOP3]) !important; }
[data-wp-dark-mode-ignore] .cv-hero-badge       { background: rgba(255,255,255,0.10) !important; color:[ACCENT-LIGHT] !important; border-color: rgba(255,255,255,0.18) !important; }
[data-wp-dark-mode-ignore] .cv-hero-stat        { background: rgba(255,255,255,0.07) !important; border-color: rgba(255,255,255,0.10) !important; }
[data-wp-dark-mode-ignore] .cv-h1               { color: #ffffff !important; }
[data-wp-dark-mode-ignore] .cv-h1-accent        { color: [ACCENT] !important; }
[data-wp-dark-mode-ignore] .cv-hero-sub         { color: [HERO-MUTED] !important; }
[data-wp-dark-mode-ignore] .cv-stat-val         { color: [ACCENT] !important; }
[data-wp-dark-mode-ignore] .cv-stat-label       { color: [HERO-MUTED] !important; }

[data-wp-dark-mode-ignore] .cv-wow              { background: linear-gradient(135deg,[WOW-START],[WOW-END]) !important; color: white !important; }
[data-wp-dark-mode-ignore] .cv-wow-body         { color: #cbd5e1 !important; }
[data-wp-dark-mode-ignore] .cv-wow-number       { color: [ACCENT] !important; }
[data-wp-dark-mode-ignore] .cv-wow-label        { color: [ACCENT-LIGHT] !important; }

[data-wp-dark-mode-ignore] .cv-dark             { background: linear-gradient(135deg,#1e293b,#0f172a) !important; }
[data-wp-dark-mode-ignore] .cv-dark .cv-card-title { color: white !important; }
[data-wp-dark-mode-ignore] .cv-tinted           { background: linear-gradient(135deg,[TINT-START],[TINT-END]) !important; border-color: [TINT-BORDER] !important; }

[data-wp-dark-mode-ignore] .cv-pros             { background: #f0fdf4 !important; border-color: #bbf7d0 !important; }
[data-wp-dark-mode-ignore] .cv-cons             { background: #fff5f5 !important; border-color: #fecaca !important; }
[data-wp-dark-mode-ignore] .cv-pct-pro          { color: #15803d !important; }
[data-wp-dark-mode-ignore] .cv-pct-con          { color: #dc2626 !important; }
[data-wp-dark-mode-ignore] .cv-pci              { color: #334155 !important; }
[data-wp-dark-mode-ignore] .cv-pci-icon-pro     { color: #22c55e !important; }
[data-wp-dark-mode-ignore] .cv-pci-icon-con     { color: #f87171 !important; }

[data-wp-dark-mode-ignore] .cv-table th         { background: [TABLE-HEADER-BG] !important; color: [TABLE-HEADER-TEXT] !important; }
[data-wp-dark-mode-ignore] .cv-table td         { color: #334155 !important; border-color: #e2e8f0 !important; }
[data-wp-dark-mode-ignore] .cv-table tr:hover td { background: [ACCENT-TINT] !important; }
[data-wp-dark-mode-ignore] .cv-tr-hl td         { background: [ACCENT-TINT] !important; }
[data-wp-dark-mode-ignore] .cv-spec-good        { color: #15803d !important; }
[data-wp-dark-mode-ignore] .cv-spec-note        { color: #64748b !important; }

[data-wp-dark-mode-ignore] .cv-sc-row           { border-color: #f1f5f9 !important; }
[data-wp-dark-mode-ignore] .cv-sc-new           { background: [ACCENT-TINT] !important; border-color: [ACCENT-LIGHT-BORDER] !important; }
[data-wp-dark-mode-ignore] .cv-sc-old           { background: #f8fafc !important; border-color: #e2e8f0 !important; }
[data-wp-dark-mode-ignore] .cv-sc-new .cv-sc-model { color: [ACCENT] !important; }
[data-wp-dark-mode-ignore] .cv-sc-old .cv-sc-model { color: #94a3b8 !important; }
[data-wp-dark-mode-ignore] .cv-sc-val           { color: #0f172a !important; }
[data-wp-dark-mode-ignore] .cv-sc-label         { color: #64748b !important; }

[data-wp-dark-mode-ignore] .cv-bar-track        { background: #e2e8f0 !important; }
[data-wp-dark-mode-ignore] .cv-bar-lbl          { color: #0f172a !important; }
[data-wp-dark-mode-ignore] .cv-bar-caption      { color: #64748b !important; }

[data-wp-dark-mode-ignore] .cv-vbox             { background: rgba(255,255,255,0.07) !important; border-color: rgba(255,255,255,0.12) !important; }
[data-wp-dark-mode-ignore] .cv-vlist li         { color: #e2e8f0 !important; }
[data-wp-dark-mode-ignore] .cv-hier             { background: rgba(255,255,255,0.07) !important; border-color: rgba(255,255,255,0.12) !important; }
[data-wp-dark-mode-ignore] .cv-hier-name        { color: white !important; }
[data-wp-dark-mode-ignore] .cv-hier-body        { color: #94a3b8 !important; }

[data-wp-dark-mode-ignore] .cv-ins-blue         { background: #eff6ff !important; color: #1e40af !important; border-color: #3b82f6 !important; }
[data-wp-dark-mode-ignore] .cv-ins-green        { background: #f0fdf4 !important; color: #15803d !important; border-color: #22c55e !important; }
[data-wp-dark-mode-ignore] .cv-ins-amber        { background: #fffbeb !important; color: #92400e !important; border-color: #f59e0b !important; }

[data-wp-dark-mode-ignore] .cv-tag-teal         { background: #ccfbef !important; color: #0b5563 !important; }
[data-wp-dark-mode-ignore] .cv-tag-blue         { background: #dbeafe !important; color: #1d4ed8 !important; }
[data-wp-dark-mode-ignore] .cv-tag-green        { background: #dcfce7 !important; color: #15803d !important; }
[data-wp-dark-mode-ignore] .cv-tag-amber        { background: #fef3c7 !important; color: #92400e !important; }
[data-wp-dark-mode-ignore] .cv-tag-red          { background: #fee2e2 !important; color: #dc2626 !important; }
[data-wp-dark-mode-ignore] .cv-tag-purple       { background: #f3e8ff !important; color: #7c3aed !important; }
```

> ⚠️ For every new article: update all `[PLACEHOLDER]` values to match the new palette. Never copy old colors from a previous article.

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

### Full-Width Flush Cards on Mobile — Rounded Corners Preserved
Cards must go edge-to-edge on mobile (no side borders) but **keep rounded corners**:
```css
@media (max-width: 640px) {
  .content-visual .cv-card {
    border-radius: 1rem;
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
  color: #334155; background: transparent; /* NEVER set a solid background — must stay transparent so dark mode page bg shows through */
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

  /* Full-width flush sections — edge-to-edge but KEEP rounded corners (never use border-radius:0 on cards) */
  .content-visual .cv-hero   { border-radius:1.25rem; padding:1.5rem 1rem; margin-bottom:0.625rem; }
  .content-visual .cv-card   { border-radius:1rem; border-left:none; border-right:none; padding:1.25rem 1rem; margin-bottom:0.625rem; }
  .content-visual .cv-dark   { border-radius:1rem; padding:1.25rem 1rem; margin-bottom:0.625rem; }
  .content-visual .cv-wow    { border-radius:1rem; padding:1.25rem 1rem; margin-bottom:0.625rem; }
  .content-visual .cv-tinted { border-radius:1rem; border-left:none; border-right:none; padding:1.25rem 1rem; margin-bottom:0.625rem; }
  .content-visual .cv-source { border-radius:0.75rem; border-left:none; border-right:none; }

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
  .content-visual .cv-noto-lg { width:32px; height:32px; }
  .content-visual .cv-noto-md { width:22px; height:22px; }
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

### R13 — No Price Information
Prices change constantly and vary by region. Never include any price or cost information from the transcript.

### R14 — Specs Must Be Verified Before Publishing
Never output a weight, stack height, drop measurement, or other technical spec without first verifying it from an authoritative source (brand official, RunRepeat, Running Warehouse, or equivalent). If verification fails, omit the spec or note it as unverified.

### R15 — Units Must Be Calculated, Not Relabeled
Every unit conversion must be mathematically correct. Use the conversion factors in Phase A3. Never replace a unit label without doing the math. This applies to distances, weights, temperatures, and paces. Running pace (min/mile → min/km) requires special care: always treat the seconds component separately — "6:30" is 6.5 minutes, not 6.3.

### R16 — Image URLs Must Be Verified Before Use
Never include an image URL in the final HTML unless it has been confirmed to work. Use `web_fetch` to test each URL. If the environment cannot reach the URL, tell the user explicitly and ask them to confirm. A broken image on a published page is worse than no image. Never modify a URL found in a source page (e.g. changing a size subfolder) without verifying the modified URL actually resolves. See Phase B3 for the full protocol.

### R17 — Never Describe an Image You Have Not Seen
Never write a colorway name, angle description, feature label, or any specific visual description for an image unless you have actually viewed it. If you have not viewed it, use only a generic neutral label. Filenames and ID numbers tell you nothing about visual content. See Phase B4 for the full protocol.

### R18 — Image Alt Text Is Also the WordPress Filename
The user's Smart Auto Upload plugin uses `%image_alt%` as the filename pattern. Every `alt` attribute becomes the saved filename. Write alt texts as clean, lowercase, hyphenated English with no Japanese characters, no special characters, and no spaces. Make them descriptive enough to be useful as filenames. Never write a specific descriptor you cannot confirm (e.g. a colorway name you haven't verified visually).

### R19 — `<div>` First, `<style>` Last — Always

> **WordPress uses the first lines of a Custom HTML block as the post excerpt. If `<style>` appears before the HTML content, raw CSS becomes the excerpt — broken and visible to readers.**

**Mandatory file order:**
1. `<div class="content-visual" data-wp-dark-mode-ignore="true">` — **absolute first line**
2. HTML comment + Font Awesome `<link>` tag
3. All article HTML content
4. Closing `</div>` tags
5. `<style>` block — **absolute last thing in the file**

Never put `<style>` anywhere except the very bottom of the file. Verify before saving.

### R20 — SEO Title Is a Required Second Deliverable

Every run of this workflow must produce **two output files**, not one:

**File 1 — The HTML block** (`[slug].html`)
The complete `<div class="content-visual">…</div>` WordPress block as described throughout this document.

**File 2 — The SEO post title** (`[slug]-title.txt`)
A plain text file containing a single WordPress post title. Rules for this title:

- Written in **Japanese**
- **SEO-optimised** — front-load the most searched keyword(s); match the language real readers use when searching
- **Engaging and click-worthy** — create curiosity or clearly promise value; avoid generic phrasing
- **Natural** — reads like a human wrote it, not a keyword list
- **Under 80 characters** if possible (Google truncates at ~60 characters on desktop; 80 is the safe outer limit)
- **End with 1–2 relevant emojis** placed after the title text for visual appeal in search results and social sharing
- Do not include a date, price, or any information that will become stale quickly

**Example format of the .txt file contents:**
```
アシックス スーパーブラスト3 vs メガブラスト｜どちらを買うべきか？違いを徹底比較 👟🔥
```

Both files must be saved to the output directory and presented to the user together.

### R21 — Mobile Cards Must Keep Rounded Corners

Never use `border-radius: 0` on cards, hero, dark sections, wow callouts, or image blocks in the mobile breakpoint. The correct mobile treatment is **edge-to-edge** (no side borders, no side margin from the block) **with rounded corners preserved**. This matches native mobile app conventions and looks polished. The CSS in Step 8 already reflects this — do not override it back to zero.

### R22 — `wp-dark-mode-ignore` on Every Element Except `cv-container`

Every `div`, `p`, `span`, `strong`, `i`, `h1`–`h6`, `ul`, `ol`, `li`, `table`, `th`, `td`, etc. in the HTML body must include `wp-dark-mode-ignore` in its class list. The one intentional exception is `cv-container` — it has no `wp-dark-mode-ignore` so its background goes transparent in dark mode, letting the dark page background show through naturally. See Phase C2 for the full explanation and CSS protection block.

### R23 — Never Add `wp-dark-mode-ignore` or a CSS Background Override to `cv-container`

> **This rule exists because the exact opposite mistake was made in a real session. It is documented here so it is never repeated.**

The `cv-container` div must have **no** `wp-dark-mode-ignore` class and **no** `[data-wp-dark-mode-ignore] .cv-container { background: ... }` rule in the CSS protection block. Both are wrong for the same reason: they lock a light background onto the container in dark mode, creating the "white island on dark page" problem that the entire dark mode architecture is designed to prevent.

The container's job is to be a transparent wrapper. Hero, cards, dark sections, and WOW callouts are the colored islands — they are all individually protected. The space between them should be the dark page background.

**Before finalising any output, run these two checks:**
1. Search the HTML for `cv-container`. The opening tag must read exactly `<div class="cv-container">` with nothing else in its class.
2. Search the `<style>` block for `cv-container`. Delete any line that matches `[data-wp-dark-mode-ignore] .cv-container`. It should not exist.

Run through this carefully before finalizing. Do not skip steps. Take the time. This checklist exists because the quality of the output depends on catching mistakes before they reach the reader.

**Translation & Content**
- [ ] All brand and product names verified against official Japanese sources — not guessed
- [ ] All technology and material terms searched and confirmed in Japanese
- [ ] All units properly converted with correct math (miles→km, oz→g, °F→°C, min/mile→min/km)
- [ ] Running pace converted correctly — seconds treated as seconds, not decimals (6:30 = 6.5 min, not 6.3)
- [ ] All specs verified against brand official, RunRepeat, or equivalent authoritative source
- [ ] Conflicting specs resolved using brand official as authority
- [ ] No price information included anywhere
- [ ] All off-topic, promotional, and filler content removed from transcript
- [ ] Article reads as professional Japanese journalism — no hype, no exclamation marks

**Structure**
- [ ] Output is `<div class="content-visual">` block — not a full HTML page
- [ ] **`<div>` is the absolute first line of the file** — `<div class="content-visual" data-wp-dark-mode-ignore="true">` appears before any CSS, links, or comments
- [ ] **`<style>` is the absolute last thing in the file** — all HTML content comes before it. WordPress uses first lines as post excerpt; CSS must never appear first.
- [ ] Every CSS rule prefixed with `.content-visual` — no bare selectors
- [ ] Font Awesome (or icon font) loaded via current CDN URL (searched, not hardcoded)
- [ ] Section count matches article depth — no padding, no missing sections
- [ ] SEO title plain-text file produced alongside the HTML file
- [ ] **WP Dark Mode: `wp-dark-mode-ignore` is on every element EXCEPT `cv-container`**
- [ ] **WP Dark Mode: every `<i>` icon tag has `wp-dark-mode-ignore` — including icons inside `.cv-dark` sections — verified by scanning all `<i>` tags in the HTML**
- [ ] **WP Dark Mode: CSS protection block contains `[data-wp-dark-mode-ignore] .cv-dark .cv-card-title { color: white !important; }` — verified by searching the `<style>` block for this exact rule**
- [ ] **WP Dark Mode: `cv-container` opening tag has NO `wp-dark-mode-ignore` class — verified by searching the HTML**
- [ ] **WP Dark Mode: CSS protection block has NO `[data-wp-dark-mode-ignore] .cv-container` rule — verified by searching the `<style>` block**
- [ ] **WP Dark Mode: `[data-wp-dark-mode-ignore]` CSS protection block included at top of `<style>`**
- [ ] **WP Dark Mode: all `[PLACEHOLDER]` values in protection block filled with article's actual colors**

**Mobile**
- [ ] `cv-container` has `padding:0` on mobile
- [ ] Hero, cards, dark sections are edge-to-edge on mobile — **but rounded corners are preserved, NOT set to zero**
- [ ] All grids collapse to single column at 640px
- [ ] All complex tables have dual PC/mobile representation
- [ ] All Noto icons have defined mobile behavior (scale or hide)
- [ ] **No double-gutter bug:** No child of `cv-card` / `cv-dark` / `cv-wow` has extra `padding: 0 1rem` added in the mobile breakpoint
- [ ] **Sibling width consistency:** All grid-type components within the same card section are the same width on mobile. Visually verified.
- [ ] Mentally simulated at 390px — nothing broken, nothing cramped, nothing inconsistently sized
- [ ] Image blocks are edge-to-edge on mobile (no side borders) but still have border-radius
- [ ] Image trio collapses to single column on mobile — not 3 tiny thumbnails
- [ ] Image duo stacks vertically on mobile

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

**Images**
- [ ] Every image URL tested with `web_fetch` or confirmed by user before inclusion
- [ ] No image URL was modified from its source (no size subfolder swaps, no guesses)
- [ ] No image has a specific colorway/angle label unless that image was actually viewed
- [ ] All alt texts are lowercase hyphenated English — valid as WordPress filenames
- [ ] Alt texts describe only what is confirmed, not what is guessed
- [ ] Every image has an inline `© [Brand]` credit line
- [ ] Page-level image attribution footer present at bottom of article
- [ ] Images are contextually placed next to the section they visually relate to
- [ ] 3–5 images total — not one big dump at the top

---

*End of handoff. Provide this file + a YouTube transcript (any language) → translate, verify all specs and terminology, convert all units correctly, find and verify images, and generate **both deliverables** — the complete Japanese WordPress HTML block AND the SEO post title text file — immediately. The `<div>` must appear before `<style>` in the HTML file. Use your full capabilities. Take the time needed. Prioritize quality above all else. Make it excellent.*
