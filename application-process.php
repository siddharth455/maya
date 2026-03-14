<?php
$page_title = "Admission Process 2026 | Maya Devi University Dehradun";
$page_description = "Learn about the admission process at Maya Devi University, Dehradun including eligibility, documents required, and how to apply.";
$canonical_url = "https://maya.edu.in/application-process.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<section class="applyFlow-wrap">
  <div class="applyFlow-inner">

    <!-- LEFT: step selector -->
    <div class="applyFlow-left">
      <h2 class="applyFlow-title">Steps to Follow</h2>

      <div class="applyFlow-scroll">
        <div class="applyFlow-tiles" id="applyFlow-tiles">

          <div class="applyFlow-tile active" data-step="0">
            <span class="applyFlow-number">1</span>
            <p>Registration Form</p>
          </div>

          <div class="applyFlow-tile" data-step="1">
            <span class="applyFlow-number">2</span>
            <p>Application Form</p>
          </div>

          <div class="applyFlow-tile" data-step="2">
            <span class="applyFlow-number">3</span>
            <p>Pay Application Fee</p>
          </div>

          <div class="applyFlow-tile" data-step="3">
            <span class="applyFlow-number">4</span>
            <p>Verification & Admission</p>
          </div>

        </div>
      </div>

      <!-- EXPANDED PANEL -->
      <div class="applyFlow-panel" id="applyFlow-panel">
        <h3 id="applyFlow-panel-title">Step 1 — Registration Form</h3>
        <p id="applyFlow-panel-desc">
          Start by registering your account with basic contact and personal details.
        </p>

        <a href="https://admissions.maya.edu.in" target="_blank" class="applyFlow-btn">
          Apply Now →
        </a>
      </div>
    </div>

    <!-- RIGHT FIXED IMAGE -->
    <aside class="applyFlow-side">
      <div class="applyFlow-image"></div>
      <div class="applyFlow-overlay"></div>
      <div class="applyFlow-tagline">
        <h3 class="text-white">Aspire to Inspire</h3>
        <p class="text-white">Shape your future with confidence.</p>
      </div>
    </aside>

  </div>
</section>

<style>
/* ---------- WRAPPER ---------- */
.applyFlow-wrap {
  padding: 50px 20px;
  background: #fff;
  font-family: "Poppins", sans-serif;
}
.applyFlow-inner {
  max-width: 1300px;
  margin: 10px auto;
  display: grid;
  grid-template-columns: 1fr 420px;
  gap: 40px;
  align-items: start;
}

/* ---------- LEFT ---------- */
.applyFlow-title {
  font-size: 30px;
  margin-bottom: 20px;
  font-weight: 800;
}

.applyFlow-scroll {
  overflow-x: auto;
  padding-bottom: 8px;
}
.applyFlow-scroll::-webkit-scrollbar {
  height: 6px;
}
.applyFlow-scroll::-webkit-scrollbar-thumb {
  background: #ccc;
  border-radius: 6px;
}

.applyFlow-tiles {
  display: flex;
  gap: 14px;
  min-width: max-content;
}

.applyFlow-tile {
  padding: 16px 20px;
  border-radius: 12px;
  cursor: pointer;
  background: #f4f6f7;
  border: 1px solid transparent;
  transition: 0.3s ease;
  text-align: center;
  width: 160px;
}
.applyFlow-number {
  display: block;
  font-size: 22px;
  font-weight: 800;
  color: #00a651;
}
.applyFlow-tile p {
  margin: 6px 0 0;
  font-size: 14px;
  color: #333;
}

.applyFlow-tile.active {
  background: #fff;
  border-color: #00a651;
  box-shadow: 0 6px 20px rgba(0,0,0,0.07);
}

/* ---------- EXPANDED PANEL ---------- */
.applyFlow-panel {
  margin-top: 25px;
  padding: 20px;
  border-radius: 14px;
  border: 1px solid rgba(0,0,0,0.06);
  background: #ffffff;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
  transition: 0.4s ease;
}

.applyFlow-panel h3 {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 8px;
}
.applyFlow-panel p {
  color: #555;
  margin-bottom: 16px;
}
.applyFlow-btn {
  background: #00a651;
  color: #fff;
  padding: 10px 16px;
  border-radius: 8px;
  text-decoration: none;
  font-weight: 700;
  font-size: 14px;
  display: inline-block;
}

/* ---------- RIGHT IMAGE ---------- */
.applyFlow-side {
  position: relative;
  height: 362px;
  border-radius: 16px;
  overflow: hidden;
}
.applyFlow-image {
  position: absolute;
  inset: 0;
  background: url('assets/uploads/apply.webp') center/cover no-repeat;
  transform: scale(1);
  transition: transform 1s ease;
}
.applyFlow-side:hover .applyFlow-image {
  transform: scale(1.06);
}
.applyFlow-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(0,0,0,0.55), rgba(0,0,0,0.1));
}
.applyFlow-tagline {
  position: absolute;
  bottom: 20px;
  left: 20px;
  color: #fff;
}
.applyFlow-tagline h3 {
  font-size: 24px;
  margin: 0;
  font-weight: 700;
}
.applyFlow-tagline p {
  margin: 4px 0 0;
  font-size: 14px;
}

/* ---------- RESPONSIVE ---------- */
/* ===== Responsive overrides (append after your current CSS) ===== */

/* Tablet / small-desktop breakpoint: allow tiles to wrap and avoid horizontal scroll */
@media (max-width: 991px) {
  /* make the two-column layout stack into one column */
  .applyFlow-inner {
    grid-template-columns: 1fr !important;
    gap: 22px;
    padding-left: 16px;
    padding-right: 16px;
  }

  /* place image below the left flow content */
  .applyFlow-left { order: 1; }
  .applyFlow-side  { order: 2; width: 100%; height: 320px; }

  /* allow tiles to wrap into multiple rows (no horizontal overflow) */
  .applyFlow-tiles {
    display: flex;
    flex-wrap: wrap !important;
    gap: 12px;
    justify-content: center;
    align-items: stretch;
    min-width: 0; /* important: allow wrapping */
  }

  /* remove horizontal scrolling UX on smaller screens */
  .applyFlow-scroll {
    overflow-x: visible !important;
    padding-bottom: 0;
  }

  /* make tiles flexible and responsive */
  .applyFlow-tile {
    flex: 1 1 180px;   /* grow / shrink with available space */
    min-width: 140px;
    max-width: 48%;    /* two-per-row look on medium narrow screens */
    width: auto;
    padding: 12px 14px;
    box-sizing: border-box;
  }

  /* make the active tile visually consistent on stacked layout */
  .applyFlow-tile.active {
    box-shadow: 0 8px 22px rgba(0,0,0,0.06);
  }

  /* expanded panel flows full width below the tiles */
  .applyFlow-panel {
    width: 100%;
    margin-top: 12px;
    padding: 16px;
  }

  /* ensure the image container fills width with preserved visual */
  .applyFlow-side {
    border-radius: 12px;
    overflow: hidden;
  }
  .applyFlow-image {
    background-position: center;
    background-size: cover;
  }
}

/* Mobile adjustments: make tiles single-column & tighten spacing */
@media (max-width: 480px) {
  .applyFlow-tiles {
    gap: 10px;
  }
  .applyFlow-tile {
    flex: 1 1 100%;
    min-width: 0;
    max-width: 100%;
    padding: 10px 12px;
    text-align: left;
  }

  .applyFlow-number { font-size: 18px; }
  .applyFlow-tile p { font-size: 13px; }

  .applyFlow-title { font-size: 20px; text-align: left; }

  .applyFlow-panel {
    padding: 14px;
    text-align: left;
  }

  .applyFlow-side { height: 220px; }
  .applyFlow-tagline h3 { font-size: 18px; }
  .applyFlow-tagline p { font-size: 13px; }
}

/* Safety clamp: avoid any accidental horizontal overflow */

</style>

<script>
const stepData = [
  {
    title: "Step 1 — Registration Form",
    desc: "Start by registering your account with basic contact and personal details."
  },
  {
    title: "Step 2 — Application Form",
    desc: "Fill out the information and upload documents for verification."
  },
  {
    title: "Step 3 — Pay Application Fee",
    desc: "Proceed to secure payment to submit your application."
  },
  {
    title: "Step 4 — Verification & Admission",
    desc: "After verification, you will receive detailed admission instructions."
  }
];

const tiles = document.querySelectorAll(".applyFlow-tile");
const panelTitle = document.getElementById("applyFlow-panel-title");
const panelDesc = document.getElementById("applyFlow-panel-desc");

tiles.forEach(tile => {
  tile.addEventListener("click", () => {
    tiles.forEach(t => t.classList.remove("active"));
    tile.classList.add("active");

    const index = tile.getAttribute("data-step");

    panelTitle.textContent = stepData[index].title;
    panelDesc.textContent = stepData[index].desc;
  });
});
</script>
