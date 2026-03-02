# Transcript → WordPress Block Handoff — Foxiz v1.2

## 🚀 AUTO-TRIGGER INSTRUCTION — READ THIS FIRST

**If you are reading this file, your job is already defined. Do not ask the user what to do.**

You have been given this handoff file, the CSS reference file (`FOXIZ_CSS_REFERENCE_v1_2.md`), and a transcript file. That is all you need. Immediately begin executing the full workflow below — Phase A through the final outputs — without asking any clarifying questions. The user wants **two deliverables**: (1) a complete Japanese WordPress HTML block, and (2) an SEO-optimised WordPress post title in a plain text file. Both must be produced. Start now.

**Read the CSS reference file before writing any HTML.** It documents every available class, every exact colour value, and every mobile behaviour. Do not invent classes. Do not guess colour values. If a class is not in the reference, it does not exist.

If anything in the transcript is ambiguous, make the best editorial judgment and proceed. Do not stop to ask.

---

## ⚡ SITE ARCHITECTURE — READ BEFORE STARTING

**This site runs the Foxiz WordPress theme with a child theme (`foxiz-child`). It does NOT use the WP Dark Mode plugin.** Two global files load on every page:

**`foxiz-child/style.css`** — all component CSS, all Foxiz `!important` override protections, the pull quote dark mode rule. Documented in full in `FOXIZ_CSS_REFERENCE_v1_2.md`.

**`foxiz-child/functions.php`** — enqueues parent theme stylesheet, the child stylesheet, and **Font Awesome 6.5.2** from cdnjs. FA6 uses `fa-solid fa-icon-name` syntax.

### What the global stylesheet already handles — do NOT repeat any of this in the post `<style>`:

- CSS reset (`box-sizing`, `margin`, `padding`)
- Container (`.cv-container`), spacing (`.cv-mb`), all grids (`.cv-grid-2/3/4`)
- All card base styles: `.cv-card`, `.cv-dark`, `.cv-wow`
- All hero layout: `.cv-hero`, `.cv-hero::before`, `.cv-hero-badge`, `.cv-h1`, `.cv-h1-accent`, `.cv-hero-sub`, `.cv-hero-stats`, `.cv-hero-stat`, `.cv-stat-val`, `.cv-stat-label`
- All tables: `.cv-table-wrap`, `.cv-table`, `.cv-tr-hl`, `.cv-tbl-pc`, `.cv-tbl-mobile`, dark section table overrides
- All image components: `.cv-img-block`, `.cv-img-main`, `.cv-img-landscape`, `.cv-img-credit`
- All pros/cons, progress bars, tags, timeline, verdict boxes, hierarchy cards, competitor cards, mobile spec cards, source block, Noto icon size classes
- All Foxiz `!important` override protection for every component (both light and dark mode)
- The only two `body[data-theme="dark"]` rules — pull quote text colour only
- Full `@media (max-width: 640px)` breakpoint for all of the above
- **Font Awesome loaded globally via `functions.php` — do NOT add a `<link>` tag in the post**

### What each post `<style>` block must contain — and ONLY this:

1. **CSS variables** — the 11 per-article palette values
2. **`.cv-ins-dark` text colour** — global sheet sets background/border only; text colour is accent-dependent, set per post
3. **Pull quote background** — accent-tinted per post: `.content-visual .cv-pull-quote { background: rgba(r,g,b,0.09); }`
4. **Hero title `clamp()` override** — tuned to actual title length
5. **`.cv-img-trio` / `.cv-img-duo` CSS** — only if used in this post (not in global sheet)
6. **`.cv-warn` CSS** — only if a warning box is used in this post (not in global sheet)
7. **Any truly unique one-off CSS** only this specific post needs

**The post `<style>` block should be 5–20 lines (excluding trio/duo/warn additions). If it exceeds that without those additions, you are duplicating global CSS — stop and remove the duplicates.**

### Correct per-post `<style>` template:

```css
/* Per-post palette — all base component CSS is in foxiz-child/style.css */
/* Do NOT add dark mode rules here — handled globally */
.content-visual {
  --cv-accent:          [vivid accent hex];
  --cv-hero-bg:         linear-gradient(135deg, [stop1], [stop2], [stop3]);
  --cv-hero-sub-color:  [muted light colour for hero subtitle and stat labels];
  --cv-badge-color:     [hero badge text colour];
  --cv-glow:            rgba([r],[g],[b],0.18);
  --cv-wow-bg:          linear-gradient(135deg, [accent], [accent-dark]);
  --cv-hl:              rgba([r],[g],[b],0.09);
  --cv-img-border:      rgba([r],[g],[b],0.28);
  --cv-sc-new-bg:       rgba([r],[g],[b],0.12);
  --cv-cc-featured-bg:  rgba([r],[g],[b],0.10);
  --cv-table-head-bg:   [dark colour for table headers — usually #0f172a];
}

/* cv-ins-dark text colour (accent-dependent — cannot live in global sheet) */
.content-visual .cv-ins-dark { color: [accent-appropriate light colour]; }

/* Pull quote background only — text colour handled by foxiz-child/style.css */
.content-visual .cv-pull-quote { background: rgba([r],[g],[b],0.09); }

/* Hero title size tuned to actual title length */
.content-visual .cv-h1 { font-size: clamp([min], [vw], [max]); }

/* Add .cv-img-trio / .cv-img-duo CSS here only if images are used in this post */
/* Add .cv-warn CSS here only if a warning box is used in this post */
```

### ⚠️ Pull quote text colour is handled globally — never set it per-post

The global stylesheet handles pull quote text colour for both light and dark mode. The per-post style sets **only the background tint** (accent-dependent). Never add `cv-pull-quote-text` or `cv-pull-quote-attr` colour rules to the per-post style.

> ⛔ **WHY THIS MATTERS — documented from a real bug:**
> Per-post `<style>` blocks are inline and load after the external stylesheet — they win the cascade. If you set `.cv-pull-quote-text { color: #0f172a; }` in the per-post style, it overrides the global `body[data-theme="dark"] .content-visual .cv-pull-quote-text { color: #e2e8f0 !important; }` rule. Result: pull quote text appears dark on a dark background in dark mode — unreadable. The fix is to never set pull quote text colour per-post.

### ⚠️ No `wp-dark-mode-ignore` anywhere — Foxiz does not use that plugin

Do NOT add `wp-dark-mode-ignore` to any element's class list. Do NOT add `data-wp-dark-mode-ignore` as an attribute on any element, including the root div. Do NOT write any `[data-wp-dark-mode-ignore]` CSS rules. None of this exists on the Foxiz site. The global `foxiz-child/style.css` handles all dark mode protection using `!important` overrides and `body[data-theme="dark"]` selectors.

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
4. Source priority: **Brand official site > RunRepeat > Running Warehouse > recognised publications > all else**

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
If the user tests a URL and confirms the pattern, you may apply that same correction to other IDs from the same CDN — but note that you are doing so, and still ask the user to verify a sample before treating the whole batch as confirmed.

### B4 — The Image Description Rule (CRITICAL — Past Mistakes Were Made Here)

> **This rule was also violated in a past session. Fabricated descriptions were applied to images that had never been viewed.**

#### The exact mistake that was made:
Three images were labelled "Cobalt Burst / Light Orange", "White / Black", and "Seashell / Sun Coral" based on the press release text listing three colorways. None of those images had been viewed. The labels were completely invented. The images were actually all showing the same colorway from different angles — the labels were entirely wrong.

#### The rule going forward:

**You may only describe what you have actually seen.**

- If you have **viewed the image** (via image search, web fetch, or the user has shown it to you) → you may write a specific descriptive label (angle, colorway, feature shown)
- If you have **not viewed the image** → use only a generic neutral label like「公式プロダクトショット」or「製品画像」— never guess at colorway, angle, or content
- **Never infer visual content from filenames, ID numbers, or adjacent text.** A filename like `712946.jpg` tells you nothing about what colour or angle is shown.
- **Product codes can sometimes be decoded** — e.g. ASICS product code `1013A177-400` where `400` is a known ASICS colour code for Cobalt Burst. This is acceptable to use as a label IF you have verified the colour code convention from an authoritative source. But this is the exception, not the rule.

#### Alt text doubles as the filename (Smart Auto Upload plugin):
The user's WordPress setup uses "Smart Auto Upload Images" with `%image_alt%` as the filename pattern. This means the `alt` attribute of every `<img>` tag becomes the filename saved to the WordPress media library. Write alt texts as clean, lowercase, hyphenated English descriptors that will make good filenames:

✅ Good: `asics-superblast-3-cobalt-burst-front`
✅ Good: `asics-superblast-3-midsole-lateral-official`
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

### B6 — Image Components and Mobile Behaviour

**`cv-img-block`, `cv-img-main`, `cv-img-landscape`, `cv-img-credit` are in the global stylesheet — do NOT add their CSS to the per-post style.** See CSS reference for exact rules.

**`cv-img-trio` and `cv-img-duo` are NOT in the global sheet — add their CSS per-post:**

```css
/* 3-column product image trio */
.content-visual .cv-img-trio {
  display: grid; grid-template-columns: repeat(3, 1fr); gap: 0.75rem; margin-bottom: 1.5rem;
}
.content-visual .cv-img-trio-item {
  background: white; border-radius: 0.875rem; overflow: hidden; border: 1px solid var(--cv-img-border);
}
.content-visual .cv-img-trio-item .cv-img-main { aspect-ratio: 1/1; object-fit: cover; }
.content-visual .cv-img-trio-label {
  font-size: 0.7rem; font-weight: 600; color: #475569;
  text-align: center; padding: 0.4rem 0.5rem 0.5rem;
  background: #f8fdfd; border-top: 1px solid var(--cv-img-border);
}
@media (min-width: 641px) and (max-width: 900px) {
  .content-visual .cv-img-trio { grid-template-columns: 1fr 1fr; }
  .content-visual .cv-img-trio-item:last-child { grid-column: span 2; }
  .content-visual .cv-img-trio-item:last-child .cv-img-main { aspect-ratio: 2/1; }
}
@media (max-width: 640px) {
  .content-visual .cv-img-trio { grid-template-columns: 1fr; gap: 0.5rem; margin-bottom: 0.625rem; }
  .content-visual .cv-img-trio-item { border-radius: 0; border-left: none; border-right: none; }
  .content-visual .cv-img-trio-item .cv-img-main { aspect-ratio: 3/2; }
}

/* 2-column image duo */
.content-visual .cv-img-duo { display: grid; grid-template-columns: 1fr 1fr; }
.content-visual .cv-img-duo-item:first-child { border-right: 1px solid var(--cv-img-border); }
.content-visual .cv-img-duo-item .cv-img-main { aspect-ratio: 4/3; object-fit: cover; }
.content-visual .cv-img-duo-label {
  font-size: 0.68rem; color: #64748b; padding: 0.4rem 0.75rem 0.5rem;
  background: #f8fdfd; border-top: 1px solid var(--cv-img-border);
  line-height: 1.4; min-height: 2.2rem; display: flex; align-items: center;
}
@media (max-width: 640px) {
  .content-visual .cv-img-duo { grid-template-columns: 1fr; }
  .content-visual .cv-img-duo-item:first-child { border-right: none; border-bottom: 1px solid var(--cv-img-border); }
  .content-visual .cv-img-duo-item .cv-img-main { aspect-ratio: 3/2; }
}
```

**HTML structure for image components:**
```html
<!-- Single landscape image — cv-img-block CSS is in global sheet, no per-post CSS needed -->
<div class="cv-img-block cv-mb">
  <img src="[verified URL]" alt="[brand-model-description-year]" class="cv-img-main cv-img-landscape">
  <div class="cv-img-credit">© [Brand] / <a href="[source URL]" target="_blank" rel="noopener">[Source Name]</a> — 公式プレス素材</div>
</div>

<!-- 3-column trio — requires per-post cv-img-trio CSS -->
<div class="cv-img-trio cv-mb">
  <div class="cv-img-trio-item">
    <img src="[verified URL]" alt="[brand-model-detail]" class="cv-img-main">
    <div class="cv-img-trio-label">[Label — only if visually confirmed]</div>
  </div>
  <!-- repeat × 2 -->
  <div class="cv-img-credit" style="grid-column:1/-1;">© [Brand] / [Source] — 公式プレス素材</div>
</div>

<!-- 2-column duo — requires per-post cv-img-duo CSS -->
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
  <div class="cv-img-credit">© [Brand] / [Source] — 公式プレス素材</div>
</div>
```

---

## 🏗️ PHASE C — HTML STRUCTURE & FILE RULES

> **These rules are mandatory and non-negotiable. Violating them causes broken WordPress excerpts, dark mode failures, and mobile layout bugs.**

### C1 — MANDATORY FILE STRUCTURE ORDER

```
LINE 1:   <div class="content-visual">
LINE 2:   <!-- Article Title | WordPress Block -->
LINE 3+:  ALL HTML CONTENT
NEAR END: </div><!-- /cv-container -->
          </div><!-- /content-visual -->
LAST:     <style> ... per-post CSS variables only ... </style>
```

**Why this order is mandatory:** WordPress Custom HTML blocks use the first few lines of text as the post excerpt. If `<style>` appears before the HTML content, raw CSS becomes the excerpt — broken and visible to readers.

> ✅ CORRECT:
> ```html
> <div class="content-visual">
> <!-- Article Title | WordPress Block — Font Awesome loaded globally, no <link> needed -->
> <div class="cv-container">
> <!-- all article content here -->
> </div>
> </div>
>
> <style>
> /* Per-post palette variables only */
> /* All base component CSS is in foxiz-child/style.css — do not repeat it */
> </style>
> ```

> ⛔ WRONG — style before content:
> ```html
> <style>/* CSS */</style>
> <div class="content-visual">...</div>
> ```

**The `<div class="content-visual">` must be the absolute first line of the file.**
**The `<style>` block must be the absolute last thing in the file.**
**No `<link>` tag anywhere** — Font Awesome loads globally via `functions.php`.

### C2 — ROOT CONTAINER AND DARK MODE

The root div is simply:
```html
<div class="content-visual">
```

No `data-wp-dark-mode-ignore` attribute. No `wp-dark-mode-ignore` class. No attributes at all beyond the class. The root container is a plain wrapper.

**Dark mode is handled entirely by `foxiz-child/style.css`.** The global sheet has two layers of dark mode protection:

**Layer 1 — Foxiz `!important` override block:** Protects every component's intended appearance against Foxiz theme's own higher-specificity rules. This fires in **both light and dark mode** — components look identical in both. White cards stay white. Dark sections stay dark. Grids stay multi-column. This is NOT a dark mode toggle — it's a protection against Foxiz's own stylesheet interference.

**Layer 2 — Pull quote dark mode:** The only two `body[data-theme="dark"]` rules in the entire stylesheet. Only pull quote text lightens in dark mode (`#e2e8f0` / `#94a3b8`).

You write **zero** dark mode CSS in a per-post style. It is all handled globally.

> ⛔ **DOCUMENTED MISTAKE (Foxiz v1.0 → v1.1):** The previous handoff version described the Foxiz `!important` override block as "dark mode CSS." This is wrong. Those rules protect components in BOTH modes. The only actual dark mode rules are the two `body[data-theme="dark"]` pull quote rules. This distinction matters because it explains why you should never write `body[data-theme="dark"]` per-post — the only thing it would affect is the pull quote, which is already handled globally.

---

## 🧠 DESIGNER MINDSET — Read This Every Time

**You are a professional web designer and front-end engineer, not a template-filler.** Every article deserves the same level of craft and creative investment that a senior designer at a top digital publication would bring to it. You are creating something a real person will read on their phone or laptop — make it beautiful, functional, and feel like it was made specifically for this content.

**Use your full computational capacity.** This is not a task to rush. Quality is the only priority. Speed is irrelevant. Take as much time as needed to think, plan, and execute. Never cut corners. Every decision matters.

**Use your internet search ability to the maximum.** Before hardcoding any icon name, CDN URL, or library reference — search for it. Verify it is current and working. Always check live sources for:
- Current Font Awesome icon names (FA6 syntax: `fa-solid fa-icon-name`)
- Iconify icon names and API endpoints
- Any reference you are not 100% certain about from your training data

**Act like a professional.** A professional designer does not output the first idea that comes to mind. They consider the content, evaluate multiple approaches mentally, and execute the best one with precision. Do that here, every time.

---

## ⚙️ Output Format

- Output is a single `<div class="content-visual">` block — **NOT** a full HTML page
- No `<html>`, `<head>`, `<body>`, or `<title>` tags
- No `<link>` tag for Font Awesome — it is loaded globally by `functions.php`
- No `wp-dark-mode-ignore` classes anywhere
- No `data-wp-dark-mode-ignore` attributes anywhere
- `<style>` block at the very bottom — palette variables + `cv-ins-dark` + pull quote background + hero title size only
- **Every CSS rule in the per-post `<style>` must be prefixed with `.content-visual`**

```html
<div class="content-visual">
  <!-- Post Title | WordPress Block -->
  <div class="cv-container">
    [all content here]
  </div>
</div>

<style>
  .content-visual { --cv-accent: ...; --cv-hero-bg: ...; /* etc. */ }
  .content-visual .cv-ins-dark { color: ...; }
  .content-visual .cv-pull-quote { background: rgba(...); }
  .content-visual .cv-h1 { font-size: clamp(...); }
</style>
```

---

## 🧠 STEP 1 — Read the Article Before Touching Any Code

This is the single most important step. Do not write a single line of HTML until you have done this analysis mentally.

### 1A — Classify the Content Type

- **Performance product review** (running shoes, watches, gear, cars) → energetic, data-rich, bold, numbers-forward
- **Tech product review** (gadgets, software, hardware) → clean, precise, spec grids, feature comparisons
- **News / breaking story** → urgent, clear, facts-first, minimal decoration
- **Event coverage** (race, conference, launch) → atmospheric, vivid, highlights-driven
- **Opinion / analysis** → editorial, prose-forward, pull quotes, nuanced callouts
- **Science / research** → credible, structured, data visualisation
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

**Critical rule: Never repeat a palette across articles. Never map colours to content type.** A running shoe review can be deep emerald. A tech review can be burgundy. Colour is a creative decision, not a category rule. Every page must feel visually distinct.

### Hero Gradient — Choose a Strategy, Invent the Colours

Pick one strategy, then invent specific hex values that have never been used before:

**Strategy A — Deep Monochromatic Dark** (most reliable, always premium)
One hue going from near-black → deep → rich saturated. Explore: navy, forest, plum, charcoal, burgundy, teal, indigo, slate, midnight, espresso, hunter green, deep coral.

**Strategy B — Two-Hue Adjacent Blend** (modern, cinematic depth)
Two hues 30–60° apart on the colour wheel blended smoothly. Explore: navy→indigo, green→teal, orange→crimson, purple→rose, teal→blue, amber→burgundy.

**Strategy C — Dark With Jewel Pop** (bold, dramatic, editorial)
Near-black transitioning to a vivid deep jewel. Explore: black→deep violet, black→deep emerald, black→deep crimson, charcoal→electric blue.

**Strategy D — Rich Earth Tones** (warm, distinctive, unusual)
Warm dark backgrounds that feel grounded and sophisticated. Explore: dark copper, deep amber-brown, dark clay, dark ochre, smoked terracotta.

**Strategy E — Light Gradient** (occasional variation, premium editorial)
Soft light backgrounds with gradient clip-text titles. Explore: slate-50→blue-50, rose-50→orange-50, mint-50→teal-50. Requires dark text and a deep accent colour.

**Always avoid:** mid-tone greys (no contrast), pure bright/neon backgrounds (kills readability), copying any gradient from a previous article.

### Accent Colour

The single vibrant colour used for stat values, icons, highlighted rows, progress bars, borders. Must:
- Pop clearly against both the dark hero background AND white card backgrounds simultaneously
- Be vivid and saturated — dark contexts suppress colour, go 10–20% more saturated than instinct says
- Harmonise with the hero gradient (complementary or analogous hue)

### Light Tint

The accent at ~9–12% opacity on white. Used for highlighted table rows, tinted card backgrounds, subtle fills.

### Text on Non-White Backgrounds — Always Explicit, Always Contrasting

Never inherit text colour when the background is anything other than plain white.
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
| **Brand / Market Hierarchy** | Lineup positioning, market context, family relationships | Dark bg with coloured sub-cards |
| **Competitor Comparison** | Head-to-head vs other options | Table PC + individual model cards mobile |
| **Experience / Fit** | Usability, comfort, real-world feel | Icon-led feature list |
| **Pull Quote** | Powerful statements, interview highlights, key opinions | Accent left-border, italic text |
| **Verdict / Summary** | Final recommendation, who should buy | Dark bg, split yes/no boxes |
| **Source / Video** | YouTube link, original source reference | Simple inline row at the bottom |

---

## 📐 STEP 4 — Typography: Adapt to Content, Never Hardcode

Typography must respond to the actual content. Read the text, then decide sizes. These are **ranges and principles**, not fixed values.

### Hero Title (`cv-h1`)

The global stylesheet sets the default `clamp(1.75rem, 4.5vw, 3rem)` — always override this per-post in the `<style>` to suit the actual title length:
- **Short title (1 line on PC):** push toward larger — `clamp(2rem, 5vw, 3.5rem)`
- **Medium title (fills ~1.5 lines):** middle range — `clamp(1.75rem, 4vw, 3rem)`
- **Long title (2+ full lines):** compress — `clamp(1.4rem, 3.5vw, 2.5rem)`
- **Very long title:** consider splitting with a `<br>` at a logical point

Weight: always 900. Line-height: 1.1–1.2. Letter-spacing: -0.02em for large sizes.
**Never accept a second line with only 1–3 words.** If the title breaks awkwardly, tighten the clamp or add a `<br>`.

### WOW Numbers
Should always feel dramatically large — `clamp(2.5rem, 7vw, 5rem)` — the number IS the message. Weight 900. Tight line-height 1.

### Section / Card Titles
Range: `1rem–1.5rem` depending on title length. Short title (3–5 chars): can go larger. Long title: keep compact. Weight: 800.

### Body / Description Text
`0.875rem` is the reliable baseline. Denser content: `0.85rem`. More editorial content: `0.925rem`. Line-height: 1.65–1.75.

### Labels / Captions
`0.65rem–0.75rem`, weight 700, uppercase, letter-spacing `0.05–0.1em`.

### General Principle
Read the rendered output mentally. If a heading wraps to a second line with only a word or two, fix the font size. If a stat value is a long string like "46.5mm", reduce its font size slightly vs a short "8mm". Typography serves the content — adjust intelligently.

---

## 🖼️ STEP 5 — Decorative Coloured Icons: The Whitespace Principle

### The Fundamental Rule
Colourful decorative icons (from Iconify, open emoji sets, or any free hotlink-friendly SVG source) exist to **fill natural horizontal whitespace that already exists in a layout row**. They must never create new vertical space. They are a reward for empty space, not a demand for it.

### How to Find Icons — Search, Never Hardcode

**Do not rely on any pre-memorised list of icon names or URLs.** Icon APIs change, new icons are added, better options exist. During generation, think about what visual metaphor fits the content, then search for it.

**Primary sources to search:**
- **Iconify** (`https://icon-sets.iconify.design/`) — 275,000+ icons from 200+ sets. Search by keyword. Use sets like `noto`, `fluent-emoji`, `twemoji` for colourful emoji-style icons.
  - URL format: `https://api.iconify.design/{set}/{icon-name}.svg?height={size}`
- **Other free hotlink SVG sources** — search the web for current free icon CDNs that allow direct embedding. Verify the URL works before using.

**Search process during generation:**
1. Think: "What is the visual concept I want to represent?" (e.g. speed, stability, comparison, energy, award, analysis...)
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
- **Card / section title rows** — short titles have wide empty space after
- **WOW callout label row** — the small uppercase label above the big number
- **Table header row** — column headers rarely span full width
- **Progress bar label rows** — the text + percentage label often ends with space
- **Verdict box titles** — often short
- **Any flex row where one side is sparse**

### Decision Logic — Per Placement, Per Article

For each candidate location, ask all of these:

1. **Is there genuine horizontal whitespace on PC?** Estimate honestly. If the text is close to full-width, no.
2. **Will this icon be semantically meaningful here?** A relevant, recognisable icon adds context. A random icon adds noise.
3. **Does placing it here in a flex row look natural?** `justify-content: space-between` should feel intentional, not forced.
4. **How many coloured icons are on the page already?** 2–4 maximum for the whole page. More feels cluttered and cheap.
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

### Mobile Behaviour — Scale or Hide, Never Break

On mobile, everything is full-width and horizontal whitespace disappears. The icon that sat elegantly in empty space on PC now competes for the same row as text.

**For each icon, decide individually:**

- **Icon is in a flex row with short text, and scaled to ~28–32px:** → Scale down to 24–28px on mobile. Usually still works.
- **Icon would force the text to shrink uncomfortably or wrap to a new line:** → Hide it (`display: none` at mobile breakpoint).
- **Icon is purely decorative with no layout function:** → Hide it.
- **Scaling would bring it below ~20px:** → Hide it. Below this size it loses all colour detail and becomes visual noise.

**Never** let an icon cause text wrapping, overflow, or awkward spacing on mobile.

**Implementation — use the global size classes (PC sizes are set in `foxiz-child/style.css`):**
```css
/* Global sheet already sets PC sizes — cv-noto-lg: 56px, cv-noto-md: 36px, cv-noto-sm: 24px */
/* Global sheet already sets mobile sizes — cv-noto-lg: 32px, cv-noto-md: 22px, cv-noto-sm: hidden */
/* Add per-post overrides only if a specific icon needs different mobile behaviour: */
@media (max-width: 640px) {
  .content-visual .cv-noto-lg { width: 28px; height: 28px; } /* example: hide entirely if needed */
}
```

The global classes are starting points. Override per article if a specific icon needs different behaviour.

**Placement pattern — always inside an existing flex row:**
```html
<!-- Badge row: icon fills right side of the same row -->
<div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:1rem;">
  <div class="cv-hero-badge">CATEGORY · YEAR</div>
  <img src="[iconify or other CDN url]" class="cv-noto-lg" alt="[description]" width="56" height="56">
</div>

<!-- Card title: icon fills space after a short title -->
<div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:1.25rem;">
  <div class="cv-card-title" style="margin-bottom:0;">
    <i class="fa-solid fa-[name]" style="color:[accent];"></i> Title Text
  </div>
  <img src="[url]" class="cv-noto-md" alt="[description]" width="36" height="36">
</div>
```

### Small Inline Icons — Font Awesome 6

Font Awesome 6.5.2 is loaded globally (`fa-solid fa-icon-name` syntax). **Search FA6's icon library** during generation — do not rely on a memorised shortlist.

Search process:
1. Think: "What concept needs a small monochrome icon here?" (e.g. comparison, protection, weight, timeline, trophy...)
2. Search Font Awesome icon library for the best match
3. Pick the most semantically accurate icon for the context
4. Use it with the page accent colour

Usage: `<i class="fa-solid fa-[icon-name]" style="color:[accent]; font-size:[appropriate size];"></i>`

Size guidelines: 16–20px for inline text companions, 18–24px for card title icons, 14–16px for list item bullets.

---

## 📱 STEP 6 — Mobile Architecture (Non-Negotiable)

WordPress already provides horizontal page margins. The block must never add extra side spacing on mobile — this creates the "narrow strip of content in the centre" problem. The global stylesheet handles this correctly — do not override it.

### Container Rule

The global stylesheet already applies:
```css
/* PC */
.content-visual .cv-container { max-width: 64rem; margin: 0 auto; padding: 1.25rem; }

/* Mobile */
@media (max-width: 640px) {
  .content-visual .cv-container { padding: 0; background: transparent; }
}
```
Do not add any `padding` to `cv-container` in the per-post style.

### Full-Width Flush Cards on Mobile — Rounded Corners Preserved

The global stylesheet already handles:
```css
@media (max-width: 640px) {
  .content-visual .cv-card  { border-radius: 1rem; border-left: none; border-right: none;
                               padding: 1.25rem 1rem; margin-bottom: 0.625rem; }
  /* Same treatment for .cv-dark and .cv-wow */
}
```
Cards go edge-to-edge on mobile (no side borders) but **keep rounded corners**. Never set `border-radius: 0` on mobile.

### Grid Collapse — All Multi-Column Grids → Single Column

The global stylesheet already handles:
```css
@media (max-width: 640px) {
  .content-visual .cv-grid-2,
  .content-visual .cv-grid-3,
  .content-visual .cv-grid-4,
  .content-visual .cv-pros-cons { grid-template-columns: 1fr; gap: 0.75rem; }
}
```
Exception: `.cv-hero-stats` collapses to **2 columns** (2×2), not 1. This is intentional.

### ⚠️ The Padding Consistency Rule — A Known Source of Bugs

This is a documented bug source. Read carefully before writing any mobile CSS.

**The core problem:** When a card is flush on mobile (`cv-card` with `padding: 1.25rem 1rem`), its children automatically benefit from those side gutters. If you then add extra `padding: 0 1rem` to a specific child (e.g. `cv-pros-cons`), that child receives double the side padding compared to sibling children that did not get the extra rule. On screen this shows up as: one component appearing noticeably narrower than its sibling directly above or below it inside the same card. This is always a bug, never intentional.

**The rule: Never add `padding: 0 1rem` to any child component that lives inside a `cv-card`, `cv-dark`, or `cv-wow` container.** Those containers already provide side padding on mobile. Adding more creates asymmetric widths.

**Specifically — do NOT add extra side padding to:**
- `cv-pros-cons` inside a `cv-card`
- `cv-grid-2` inside a `cv-card`
- `cv-grid-3` inside a `cv-card`
- Any other grid or component that is a direct child of a padded container

**The only exception:** A component genuinely rendered outside any padded parent container — e.g. a standalone element at the top level of `cv-container` on mobile. In that case it has no inherited side padding and needs its own.

**Consistency check before output:** If a card contains two or more grid-type components stacked vertically, simulate them at mobile width. Do they appear the same width? If one is narrower, find the extra padding rule and remove it.

### Table Strategy — Always Dual Representation

**Never rely on horizontal scroll alone for any table with Japanese text or long content.** On mobile, a 3-column table with kanji in the first column produces 1–2 characters per line, making a 6-character item name stretch across 3–4 lines. This is unacceptable.

Every complex table needs two representations — PC table and mobile cards — each shown only on the appropriate screen size. The global stylesheet handles the show/hide (`cv-tbl-pc` / `cv-tbl-mobile`).

**Mobile spec/comparison row pattern** (model A vs model B):
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

**Mobile competitor card pattern** (multi-model comparison):
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
- 4+ column data tables: collapse to labelled card per row, showing all values vertically
- Simple 2-column data table (label + single value): horizontal scroll is acceptable, set `min-width` on the table

---

## 🧩 STEP 7 — Component Reference

**Consult `FOXIZ_CSS_REFERENCE_v1_2.md` for exact class names, colour values, and mobile behaviour before writing any component.**

### Hero
```html
<div class="cv-hero">
  <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:1rem;">
    <div class="cv-hero-badge">CATEGORY · YEAR</div>
    <!-- Noto icon here IF whitespace exists AND icon is semantically relevant -->
  </div>
  <h1 class="cv-h1">Main Title <span class="cv-h1-accent">Accent Portion</span></h1>
  <p class="cv-hero-sub">Subtitle — 1–2 sentences max</p>
  <div class="cv-hero-stats">
    <div class="cv-hero-stat">
      <div class="cv-stat-val">VALUE</div>
      <div class="cv-stat-label">Label</div>
    </div>
    <!-- repeat × 3 or 4 -->
  </div>
</div>
```

Stat box values: pick numbers that answer "what kind of thing is this?" — size, weight, date, rating, generation. Not every article has 4 numeric stats — use short text values when needed ("FF LEAP", "Gen 3", "26mm").

### White Card
```html
<div class="cv-card cv-mb">
  <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:1.25rem;">
    <div class="cv-card-title" style="margin-bottom:0;">
      <i class="fa-solid fa-[searched-icon]" style="color:[accent];"></i> Section Title
    </div>
    <!-- Noto icon only if title is short and space is genuine -->
  </div>
  [content]
</div>
```

### Dark Section
```html
<div class="cv-dark cv-mb">
  <div class="cv-card-title" style="color:white;">
    <i class="fa-solid fa-[icon]" style="color:[accent];"></i> Section Title
  </div>
  <!-- ALL text inside must explicitly be white or light — never inherit -->
  [content]
</div>
```

Note: `.cv-dark .cv-card-title` defaults to white via the global sheet. All body text inside dark sections must be set explicitly — use inline `style="color:#cbd5e1;"` or `style="color:#94a3b8;"` as appropriate.

### WOW Callout
```html
<div class="cv-wow cv-mb">
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
    <div class="cv-tl-dot"></div>  <!-- use cv-tl-dot-current for most recent entry -->
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
      <i class="fa-solid fa-thumbs-up"></i> 良い点
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
    <div class="cv-pct cv-pct-con">
      <i class="fa-solid fa-thumbs-down"></i> 気になる点
    </div>
    <div class="cv-pcl">
      <div class="cv-pci cv-pci-con">
        <i class="fa-solid fa-circle-xmark cv-pci-icon-con"></i>
        <span>Con item text</span>
      </div>
    </div>
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
  <!-- Use appropriate mobile pattern from Step 6 based on table structure -->
</div>
```

### Warning Box (add CSS per-post — not in global sheet)
```html
<div class="cv-warn cv-mb">
  <i class="fa-solid fa-triangle-exclamation cv-warn-icon"></i>
  <p class="cv-warn-text">Warning content</p>
</div>
```
Per-post CSS:
```css
.content-visual .cv-warn {
  background: #fffbeb; border: 1px solid #fcd34d; border-radius: 0.75rem;
  padding: 1rem 1.25rem; display: flex; gap: 0.75rem; align-items: flex-start;
  margin-bottom: 1.5rem;
}
.content-visual .cv-warn-icon { color: #d97706; font-size: 1.1rem; flex-shrink: 0; margin-top: 0.1rem; }
.content-visual .cv-warn-text { font-size: 0.875rem; color: #92400e; line-height: 1.65; margin: 0; }
```

### Insight Boxes
```html
<div class="cv-ins-blue"><strong>💡 ポイント：</strong>Blue insight — neutral helpful info</div>
<div class="cv-ins-green"><strong>✅ 補足：</strong>Green note — positive confirmation</div>
<div class="cv-ins-amber"><strong>⚠️ 注意：</strong>Amber — caution or nuance</div>
<div class="cv-ins-dark"><strong>ポイント：</strong>Dark insight — use inside cv-dark sections only</div>
```

### Pull Quote
```html
<div class="cv-pull-quote cv-mb">
  <p class="cv-pull-quote-text">"Quote text here"</p>
  <p class="cv-pull-quote-attr">— Attribution</p>
</div>
```
Per-post style — background tint only:
```css
.content-visual .cv-pull-quote { background: rgba([r],[g],[b],0.09); }
```

> ⚠️ Never set `cv-pull-quote-text` or `cv-pull-quote-attr` colour per-post. The global sheet sets text colour and handles dark mode. See Phase C C2 for the full explanation of why.

### Brand / Market Hierarchy (inside `cv-dark`)
```html
<div class="cv-grid-3">
  <div class="cv-hier">
    <div class="cv-hier-cat" style="color:[accent];">TIER LABEL</div>
    <div class="cv-hier-name">Product Name</div>
    <div class="cv-hier-body">Description</div>
  </div>
  <div class="cv-hier cv-hier-center"><!-- featured/current item — brighter bg --></div>
  <div class="cv-hier"><!-- etc. --></div>
</div>
```

### Verdict (inside `cv-dark`)
```html
<div class="cv-dark cv-mb">
  <div class="cv-card-title" style="color:white;">
    <i class="fa-solid fa-flag-checkered" style="color:[accent];"></i> 総合評価
  </div>
  <p style="color:#cbd5e1; font-size:0.9rem; line-height:1.7; margin-bottom:1.25rem;">Summary sentence</p>
  <div class="cv-grid-2" style="gap:0.875rem; margin-bottom:1.25rem;">
    <div class="cv-vbox">
      <div class="cv-vtitle" style="color:#4ade80;">✓ こんな人に最適</div>
      <ul class="cv-vlist"><li>Who this is for</li></ul>
    </div>
    <div class="cv-vbox">
      <div class="cv-vtitle" style="color:#f87171;">✗ 別の選択肢を検討すべき人</div>
      <ul class="cv-vlist"><li>Who should look elsewhere</li></ul>
    </div>
  </div>
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

### Source / Video Note
```html
<div class="cv-source cv-mb">
  <div>
    <div class="cv-source-lbl">出典 / 参考動画</div>
    <a href="[URL]" class="cv-source-link" target="_blank" rel="noopener">[Title or description]</a>
  </div>
</div>
```

### Utility Text Classes (use instead of inline colour styles)
```html
<p class="cv-card-body">Body text inside white cards — colour #374151</p>
<span class="cv-reviewer-name">Reviewer name — #0f172a, bold</span>
<span class="cv-muted">Secondary / caption text — #64748b, small</span>
```

---

## 📐 STEP 8 — Per-Post `<style>` Block

**The global `foxiz-child/style.css` handles all base component CSS, all Foxiz override protection, and the pull quote dark mode rule. Do not copy any of it into the post.**

Complete template:

```css
/* ===== PER-POST PALETTE ===== */
/* All base component CSS and Foxiz overrides are in foxiz-child/style.css */
/* Do NOT add dark mode rules here — handled globally */
/* Do NOT add wp-dark-mode-ignore rules — this site does not use that plugin */
.content-visual {
  --cv-accent:          [vivid accent hex];
  --cv-hero-bg:         linear-gradient(135deg, [stop1], [stop2], [stop3]);
  --cv-hero-sub-color:  [muted light colour for hero subtitle and stat labels];
  --cv-badge-color:     [hero badge text colour];
  --cv-glow:            rgba([r],[g],[b],0.18);
  --cv-wow-bg:          linear-gradient(135deg, [accent], [accent-dark]);
  --cv-hl:              rgba([r],[g],[b],0.09);
  --cv-img-border:      rgba([r],[g],[b],0.28);
  --cv-sc-new-bg:       rgba([r],[g],[b],0.12);
  --cv-cc-featured-bg:  rgba([r],[g],[b],0.10);
  --cv-table-head-bg:   [dark colour for table headers — usually #0f172a];
}

/* cv-ins-dark text colour (accent-dependent — cannot live in global sheet) */
.content-visual .cv-ins-dark { color: [accent-appropriate light colour]; }

/* Pull quote background only — text colour handled by foxiz-child/style.css */
.content-visual .cv-pull-quote { background: rgba([r],[g],[b],0.09); }

/* Hero title size tuned to actual title length */
.content-visual .cv-h1 { font-size: clamp([min], [vw], [max]); }

/* ===== ADD BELOW ONLY IF USED IN THIS POST ===== */
/* .cv-img-trio CSS (see Phase B6)                  */
/* .cv-img-duo CSS (see Phase B6)                   */
/* .cv-warn CSS (see Step 7)                        */
/* Any truly unique one-off rules for this post     */
```

---

## ⚠️ STEP 9 — Non-Negotiable Rules

### R1 — All Text Must Have Explicit Colour
Never rely on CSS colour inheritance when the background is non-white. Every element on a dark, tinted, or gradient background must have its text colour set explicitly. Dark bg → light text. Light bg → dark text. Always.

### R2 — Fresh Palette Every Article
A returning reader should feel each article has its own visual identity. Never reuse a hero gradient, accent colour, or overall palette. Colour is a creative decision, not a category shortcut.

### R3 — Dual Table Representation for Complex Tables
Any table with long text, multiple columns, or Japanese/CJK content must have both a PC table and a mobile card layout. The PC table is hidden on mobile; the mobile cards are hidden on PC.

### R4 — Noto Icons Fill Whitespace, Never Create It
An icon on its own row is wrong. An icon inside an existing flex row, filling space that was already empty, is right. If there is no natural whitespace, there is no icon.

### R5 — Icons Are Always Searched, Never Hardcoded
Do not reference a memorised list of icon names. Think about the visual concept needed, search Iconify or other current free icon sources for the best match, verify the URL, use it. If nothing fits the content well, skip the icon.

### R6 — Typography Adapts to Content
Title length, value length, text density — all affect font sizes. Adjust `clamp()` values to fit the actual content. A second line with 1–2 words means the font size is too large. A stat value that is a long string needs a smaller `font-size` than a short one. Read the content, tune the sizes.

### R7 — Mobile Is Tested Mentally Before Output
Simulate the page at ~390px width before finalising. Walk through every section top to bottom. Ask: does anything overflow? Does any component appear narrower than its siblings in the same section without reason? Does any icon break the flow? Fix before outputting. Do not skip this step.

### R8 — Section Count Matches Article Depth
- 500–800 words → 4–5 sections max
- 1000–2000 words → 6–8 sections
- 2000+ words → 8–12 sections
Never add sections to pad. Never combine unrelated content into one section to save space — if the content is there, give it proper treatment.

### R9 — Colour is Semantic Inside Components
Comparison tables: green for relatively good values, red for relatively bad values — based on context, not absolute thresholds. The same number can be green in one article and red in another. Pros sections use green tones. Cons sections use red/orange tones. Warning boxes use amber. These are universal human signals, not arbitrary decoration.

### R10 — Visual Rhythm Across the Whole Page
Never repeat the same card style more than 2–3 times in a row. Alternate between white cards, dark sections, 2-col grids, 3-col grids, tinted gradient callouts. The page should have a visual rhythm that makes the eye want to scroll — not a monotonous stack of identical boxes.

### R11 — Every Decision Is Content-Driven, Not Pattern-Driven
There are no fixed templates. The article content determines section choice, icon placement, typography sizing, table structure, mobile behaviour, and layout density. Read the article, think about what serves the reader, then make the best decision for that specific content. Be intelligent. Be flexible. Adapt.

### R12 — Consistent Component Width Within a Section
All sibling grid-type components inside the same card or container must render at the same effective width on both PC and mobile. If a `cv-grid-2` with progress bars spans 100% of the card, a `cv-pros-cons` in the same card must also span 100%. If they differ, diagnose the padding stack — the most common cause is extra padding applied to one but not the other. Find it and remove it.

### R13 — No Price Information
Prices change constantly and vary by region. Never include any price or cost information from the transcript.

### R14 — Specs Must Be Verified Before Publishing
Never output a weight, stack height, drop measurement, or other technical spec without first verifying it from an authoritative source (brand official, RunRepeat, Running Warehouse, or equivalent). If verification fails, omit the spec or note it as unverified.

### R15 — Units Must Be Calculated, Not Relabelled
Every unit conversion must be mathematically correct. Use the conversion factors in Phase A3. Never replace a unit label without doing the math. This applies to distances, weights, temperatures, and paces. Running pace (min/mile → min/km) requires special care: always treat the seconds component separately — "6:30" is 6.5 minutes, not 6.3.

### R16 — Image URLs Must Be Verified Before Use
Never include an image URL in the final HTML unless it has been confirmed to work. Use `web_fetch` to test each URL. If the environment cannot reach the URL, tell the user explicitly and ask them to confirm. A broken image on a published page is worse than no image. Never modify a URL found in a source page without verifying the modified URL actually resolves. See Phase B3 for the full protocol.

### R17 — Never Describe an Image You Have Not Seen
Never write a colorway name, angle description, feature label, or any specific visual description for an image unless you have actually viewed it. If you have not viewed it, use only a generic neutral label. Filenames and ID numbers tell you nothing about visual content. See Phase B4 for the full protocol.

### R18 — Image Alt Text Is Also the WordPress Filename
The user's Smart Auto Upload plugin uses `%image_alt%` as the filename pattern. Every `alt` attribute becomes the saved filename. Write alt texts as clean, lowercase, hyphenated English with no Japanese characters, no special characters, and no spaces. Make them descriptive enough to be useful as filenames. Never write a specific descriptor you cannot confirm.

### R19 — `<div>` First, `<style>` Last — Always

> **WordPress uses the first lines of a Custom HTML block as the post excerpt. If `<style>` appears before the HTML content, raw CSS becomes the excerpt — broken and visible to readers.**

**Mandatory file order:**
1. `<div class="content-visual">` — **absolute first line**, nothing before it
2. HTML comment
3. All article HTML content
4. Closing `</div>` tags
5. `<style>` block — **absolute last thing in the file**

Never put `<style>` anywhere except the very bottom of the file. Verify before saving.

### R19b — No Font Awesome `<link>` Tag in Posts

Font Awesome 6.5.2 is loaded globally by `functions.php`. **Never add a `<link rel="stylesheet" href="...font-awesome...">` tag anywhere in the post HTML.** The icons will work without it. Adding the link causes a redundant load.

### R20 — SEO Title Is a Required Second Deliverable

Every run of this workflow must produce **two output files**, not one:

**File 1 — The HTML block** (`[slug].html`) — the complete `<div class="content-visual">…</div>` WordPress block.

**File 2 — The SEO post title** (`[slug]-title.txt`) — a plain text file containing a single WordPress post title. Rules:
- Written in **Japanese**
- **SEO-optimised** — front-load the most searched keyword(s); match the language real readers use when searching
- **Engaging and click-worthy** — create curiosity or clearly promise value; avoid generic phrasing
- **Natural** — reads like a human wrote it, not a keyword list
- **Under 80 characters** if possible (Google truncates at ~60 characters on desktop; 80 is the safe outer limit)
- **End with 1–2 relevant emojis** placed after the title text
- Do not include a date, price, or any information that will become stale quickly

**Example format:**
```
アシックス スーパーブラスト3 vs メガブラスト｜どちらを買うべきか？違いを徹底比較 👟🔥
```

Both files must be saved to the output directory and presented to the user together.

### R21 — Mobile Cards Must Keep Rounded Corners
Never use `border-radius: 0` on cards, hero, dark sections, wow callouts, or image blocks in the mobile breakpoint. The correct mobile treatment is edge-to-edge (no side borders) **with rounded corners preserved**. This matches native mobile app conventions and looks polished.

### R22 — No `wp-dark-mode-ignore` Anywhere
This site does not use the WP Dark Mode plugin. Never add `wp-dark-mode-ignore` to any element's class list. Never add `data-wp-dark-mode-ignore` as an attribute on any element. Never write any `[data-wp-dark-mode-ignore]` CSS rules. The root div is simply `<div class="content-visual">`.

### R23 — Never Add Pull Quote Text Colour to Per-Post Style
Only the background tint goes in the per-post style. Text colour is set globally and handles dark mode. Per-post styles load after the external stylesheet and override it — setting colour per-post breaks dark mode readability. See Phase C2 for the full explanation.

### R24 — Post `<style>` Block Must Not Exceed 20 Lines (excluding trio/duo/warn additions)
The palette variables + `cv-ins-dark` + pull quote background + hero title size = ~16 lines. If you are significantly over 20 lines without trio/duo/warn additions, you are duplicating global CSS — remove the duplicates. The global stylesheet handles all base component CSS.

### R25 — `cv-container` Must Have No Extra Classes or Attributes
The container opening tag must read exactly `<div class="cv-container">` — no `wp-dark-mode-ignore`, no other classes, no attributes. The container is a transparent wrapper. It intentionally has no background so the page background shows through between sections.

---

## ✅ PRE-SUBMISSION CHECKLIST

Run every item before saving the final file. Do not skip.

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
- [ ] `<div class="content-visual">` is the absolute first line — no attributes beyond the class
- [ ] `<style>` is the absolute last thing in the file
- [ ] No `<link>` tag for Font Awesome anywhere in the HTML
- [ ] No `wp-dark-mode-ignore` class on any element anywhere
- [ ] No `data-wp-dark-mode-ignore` attribute on any element anywhere
- [ ] No `[data-wp-dark-mode-ignore]` rules in the `<style>` block
- [ ] No `body[data-theme="dark"]` rules in the per-post `<style>`
- [ ] No `cv-pull-quote-text` or `cv-pull-quote-attr` colour rules in per-post `<style>`
- [ ] Every CSS rule in per-post `<style>` is prefixed with `.content-visual`
- [ ] `cv-container` opening tag reads exactly `<div class="cv-container">` — nothing else
- [ ] Section count matches article depth — no padding, no missing sections
- [ ] SEO title plain-text file produced alongside the HTML file

**Mobile**
- [ ] Hero stats: 2×2 grid on mobile (NOT 1 column — this is intentional)
- [ ] All other grids: single column on mobile
- [ ] All complex tables have dual PC/mobile representation
- [ ] No child of `cv-card` / `cv-dark` / `cv-wow` has extra `padding: 0 1rem` in mobile breakpoint
- [ ] All sibling grid-type components within the same card are the same width on mobile
- [ ] Mentally simulated at 390px — nothing broken, nothing cramped, nothing inconsistently sized
- [ ] Cards, hero, dark sections: edge-to-edge on mobile but rounded corners preserved — NOT `border-radius: 0`
- [ ] Image blocks: edge-to-edge on mobile (no side borders) but still have border-radius
- [ ] Image trio collapses to single column on mobile — not 3 tiny thumbnails
- [ ] Image duo stacks vertically on mobile
- [ ] All Noto icons have defined mobile behaviour via size class

**Colour & Contrast**
- [ ] Fresh unique palette — not reused from any previous article
- [ ] All text on non-white backgrounds has explicit colour set
- [ ] Accent is vivid and readable on both dark hero AND white cards
- [ ] Pros/cons sections use green/red tones (human instinct)
- [ ] Comparison tables use semantic colour based on relative context
- [ ] Warning boxes amber, insight boxes blue/green

**Content Intelligence**
- [ ] Reader's primary question answered in the hero or first visible section
- [ ] WOW moments have special visual treatment — not buried in plain text
- [ ] Each section contains real content from the article — nothing invented

**Icons**
- [ ] Small inline icons searched from FA6 library — not guessed
- [ ] Colourful Noto/emoji icons placed only where natural whitespace exists
- [ ] Each icon is semantically relevant to its surrounding content
- [ ] 2–4 coloured icons max across the whole page
- [ ] No coloured icon creates a new vertical row

**Typography**
- [ ] Hero title `clamp()` overridden in per-post style to suit actual title length
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

*End of handoff. Provide this file + `FOXIZ_CSS_REFERENCE_v1_2.md` + a YouTube transcript → translate, verify all specs and terminology, convert all units correctly, find and verify images, and generate **both deliverables** — the complete Japanese WordPress HTML block AND the SEO post title text file. The `<div>` must appear before `<style>`. Use your full capabilities. Take the time needed. Make it excellent.*
