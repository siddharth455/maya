STATIC BLOG & EVENTS — DEPLOYMENT NOTES
========================================

WHAT'S IN THIS ZIP
-------------------
- blog.php                          -> static blog listing page
- event.php                         -> static events listing page
- blog-agriculture-at-maya-devi-university.php   -> the 1 blog post (static)
- event-*.php (9 files)             -> the 9 events (static)
- assets/uploads/*.webp             -> optimized images for all posts/events
  (originals were 5,000–8,500px wide and up to 9.7MB; resized to
  1600px max width and converted to WebP, biggest is now ~184KB)

HOW TO DEPLOY
-------------
1. Upload all the .php files to your site root (same folder as your
   existing blog.php / event.php — this will overwrite those two).
2. Upload the assets/uploads/*.webp files into your existing assets/uploads/
   folder (won't overwrite anything, these are new filenames).
3. DELETE the /admin folder entirely — nothing in these pages depends on
   it anymore (no more JSON files, no login, no add/edit/delete).

These pages still use require "common/header.php" and
require "common/footer.php" exactly like before, so your site header,
footer, nav, CSS and JS are untouched.

ADDING A NEW BLOG POST OR EVENT (now that there's no admin panel)
-------------------------------------------------------------------
1. Copy an existing page that matches (e.g. copy
   event-mushroom-cultivation-training.php for a new event, or
   blog-agriculture-at-maya-devi-university.php for a new blog post).
2. Rename it to a URL-friendly slug, e.g. event-annual-sports-day-2026.php
3. Update inside the file:
   - $page_title, $page_description, $canonical_url, $og_image
   - the JSON-LD block (headline/name, date, image, description)
   - the image src, title, date, author, and content in the body
4. Add a matching card to blog.php or event.php so it shows up in the
   listing (there's a comment in both files marking where to add it).
5. If it's an event page, also update the "More Events" sidebar on a
   couple of your other event pages so the new one gets linked to.

NOTES ON THE DATA
------------------
- Some of the event content you gave me had leftover formatting/tracking
  markup pasted in from a chat tool (div/span wrappers, data-* attributes).
  I stripped all of that out and kept just the real paragraphs, headings,
  bold/italic, and lists.
- 3 events didn't have an explicit "slug" in the source data (Searching
  Eyes Hackathon, Holi Celebration, Disaster Management Workshop), so I
  generated short filenames for them the same way the old code did
  (lowercased, non-alphanumeric characters replaced with hyphens).
- No event start "time" existed in the source data, so the time-of-day
  was dropped from these pages entirely — only day/month is shown, same
  as what the old event.php grid displayed.
