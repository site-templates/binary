# Binary — design system

## Atmosphere
One column, one row, two states. Binary is a personal site with nothing on it
but a person and their lists: a 640px column of near-white paper (or near-black,
if that is the room you are in), a single grotesque at two weights, and a
monospace that appears only where something is being measured. There are no
cards, no shadows, no filled panels and no illustration. The whole interaction
language is one row that lights up when you point at it, and one disc in the
corner that turns the site inside out.

Restraint here is a commitment, not an absence. Adding a surface to this design
is how you break it.

## Colors
| Token | Light | Dark | Role |
|---|---|---|---|
| canvas | `#FCFCFC` | `#0E0E10` | the page, and the only background there is |
| surface | `#F1F1EF` | `#1A1A1D` | the row's hover bleed, code wells, `<pre>` |
| ink | `#16161A` | `#F4F4F5` | titles, row content, body emphasis |
| muted | `#6A6A73` | `#97979F` | body copy, section labels, dates, nav |
| line | `#E7E7E4` | `#26262A` | hairlines and dividers — never text |
| accent | `#1B48E0` | `#8FA8FF` | link hover, focus rings |
| accent-ink | `#FFFFFF` | `#0E0E10` | text on an accent fill |

**Colour strategy: restrained.** The accent is a spice measured in hairlines. It
appears on a link you are hovering and on a focus ring, and nowhere else — there
is no accent button, no accent panel, no accent heading. Everything else is the
neutral ramp. If a new element seems to need a colour, it needs a weight change
instead.

Both halves clear WCAG AA on their own ground: muted is 5.2:1 in light and 6.7:1
in dark, the accent 6.7:1 and 8.5:1. `line` is decorative only and never carries
text.

## Typography
- **Schibsted Grotesk** is the only family for reading. Display and text are the
  same face; the display voice is a *treatment* — weight 500 and `-0.03em`
  tracking via `.display-page` — not a second font. This is deliberate: a
  personal index has no room for a second personality.
- **Fragment Mono** is the measurement voice. Dates, years, periods, the 404
  code, the sign-off, `<code>`. It never sets a sentence, and it is never used
  to make something look technical.
- Page display (`display-page`): `clamp(1.75rem, 1.2rem + 2.4vw, 2.5rem)` / 1.1.
  Used for `h1` on Writing, Projects, About, Now, entries and 404.
- **The home page has no display type at all.** Its largest element is the name
  at 16px. That page is a person, not a headline, and the quietness is the point.
- Body: `text-base/7` on mobile, `text-[0.9375rem]/7` from `sm:`. Prose measure
  caps at 68ch, other copy at 58–64ch. Nothing on the site is below 16px on a
  phone; the mono meta tier is `text-sm` and carries no prose.
- Section labels (`h2` on the lists) are **muted**, so they read as chrome and
  the rows read as content. Row titles are ink. That weight-and-colour step is
  the entire hierarchy on an index page.

## Spacing & radius
The column is `max-w-[40rem]` with `px-6`, and the header, every section, and
the footer all share it — the name in the bar sits exactly above the first
paragraph. List sections use `pt-14` with no bottom padding, so a heading always
has more space above it than below: the gap belongs to the section it opens.

Radius is nearly absent: `10px` on the row bleed, `min(1vw, 8–10px)` on images,
`rounded-full` on the avatar and the switch. **There are no shadows anywhere, in
either theme.** Separation is whitespace first, then a hairline.

## Components
**The row** is the design system. Every list on the site — writing, projects,
now-entries, elsewhere links, keep-reading — is the same element, and only the
columns change: a date here, a year and a status there, a domain somewhere else.
On hover its `::before` field bleeds `12px` into both gutters (radius 10px,
120ms) so the highlight reads as the row briefly becoming visible rather than as
a button appearing underneath; an arrow slides in from `-4px` beside the title.
`focus-visible` reaches the same state plus an accent ring, so keyboard and
pointer see the same site.

**The switch** is the signature. A disc with one half filled, in the corner of
the header. Pressing it turns the disc 180° on a slight overshoot and the site
changes state. The theme is stamped on `<html>` by an inline head script before
first paint, so there is no flash; an untouched visitor follows their system
setting, and an explicit choice outranks it from then on. Without JavaScript the
site still resolves correctly through `prefers-color-scheme`.

**The layouts that break the column**: only two. The Writing, Projects and Now
lists move their mono meta into a left column at `md:`, making an asymmetric
index. A project page opens with a 16:9 cover at `max-w-4xl` — the one image-led
composition in the template — then a `dl` meta grid, then the reading column.

## Voice
First person, lowercase handle, complete sentences, no exclamation marks. Titles
are claims rather than topics: "The interface that explains itself", not "On
interfaces". Specific numbers over adjectives — four million people, twelve
kilobytes, nine hundred users. Say what a thing cost, and admit the part that
went wrong; a personal site that only reports wins is a CV.

## Anti-patterns
- No cards. If content needs grouping, use whitespace, then a hairline.
- No shadows, no glass, no gradients, no gradient text.
- No second font family, and no serif anywhere.
- No accent fills, no coloured badges, no status pills.
- No scroll reveals and no entrance animation — the page is complete at paint,
  which also means a screenshot or a hidden tab can never capture it blank. All
  motion is a response to a pointer or a key.
- No icon in a coloured tile, no emoji as iconography.
- No section numbering, no eyebrow above a heading.

## Tokens
```css
@theme {
    --color-canvas: #FCFCFC;
    --color-surface: #F1F1EF;
    --color-ink: #16161A;
    --color-muted: #6A6A73;
    --color-line: #E7E7E4;
    --color-accent: #1B48E0;
    --color-accent-ink: #FFFFFF;

    --font-sans: "Schibsted Grotesk", ui-sans-serif, system-ui, sans-serif;
    --font-display: "Schibsted Grotesk", ui-sans-serif, system-ui, sans-serif;
    --font-mono: "Fragment Mono", ui-monospace, SFMono-Regular, monospace;
}
```
The dark half redefines exactly these variables under `.dark` (and under
`prefers-color-scheme: dark` for anyone whose script never ran), so no component
carries a `dark:` utility and no markup ever names a colour. Retuning the whole
site is one edit in `resources/css/site.css`.
