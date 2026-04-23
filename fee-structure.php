<?php require "common/header.php"?>
<?php
// =============================================
// FEE STRUCTURE PAGE - fee-structure.php
// Add your header: include('header.php');
// Add your footer: include('footer.php');
// =============================================

// --- DEPARTMENT DATA ---
// Add your actual PDF paths in 'pdf' key
// You can add/remove departments as needed
$departments = [
    [
        'id'       => 'csea',
        'icon'     => 'bi-cpu-fill',
        'label'    => 'School of Computer Engineering & Applications',
        'color'    => 'green',
        'schools'  => [
            ['name' => 'School of Computer Engineering & Applications', 'pdf' => 'assets/uploads/fee/Computer_Engineering_Applications_m.pdf'],
        ],
    ],
    [
        'id'       => 'engg',
        'icon'     => 'bi-gear-fill',
        'label'    => 'School of Engineering',
        'color'    => 'blue',
        'schools'  => [
            ['name' => 'School of Engineering', 'pdf' => 'assets/uploads/fee/Engineering_m.pdf'],
        ],
    ],
    [
        'id'       => 'pharma',
        'icon'     => 'bi-capsule-pill',
        'label'    => 'School of Pharmacy',
        'color'    => 'green',
        'schools'  => [
            ['name' => 'School of Pharmacy', 'pdf' => 'assets/uploads/fee/Pharmacy_m.pdf'],
        ],
    ],
    [
        'id'       => 'commerce',
        'icon'     => 'bi-currency-rupee',
        'label'    => 'School of Commerce & Management',
        'color'    => 'blue',
        'schools'  => [
            ['name' => 'School of Commerce & Management', 'pdf' => 'assets/uploads/fee/Commerce_Management_m.pdf'],
        ],
    ],
    [
        'id'       => 'hotel',
        'icon'     => 'bi-building-fill',
        'label'    => 'School of Hotel Management & Tourism',
        'color'    => 'green',
        'schools'  => [
            ['name' => 'School of Hotel Management & Tourism', 'pdf' => 'assets/uploads/fee/Hotel_Management_Tourism_m.pdf'],
        ],
    ],
    [
        'id'       => 'lifesci',
        'icon'     => 'bi-flower1',
        'label'    => 'School of Life & Applied Science',
        'color'    => 'blue',
        'schools'  => [
            ['name' => 'School of Life & Applied Science', 'pdf' => 'assets/uploads/fee/Life_Applied_Sciences_m.pdf'],
        ],
    ],
    [
        'id'       => 'agri',
        'icon'     => 'bi-tree-fill',
        'label'    => 'School of Agriculture & Technology',
        'color'    => 'blue',
        'schools'  => [
            ['name' => 'School of Agriculture & Technology', 'pdf' => 'assets/uploads/fee/Agriculture_Technology_m.pdf'],
        ],
    ],
    [
        'id'       => 'nursing',
        'icon'     => 'bi-heart-pulse-fill',
        'label'    => 'School of Nursing',
        'color'    => 'green',
        'schools'  => [
            ['name' => 'School of Nursing', 'pdf' => 'assets/uploads/fee/Nursing_m.pdf'],
        ],
    ],
    [
        'id'       => 'health',
        'icon'     => 'bi-hospital-fill',
        'label'    => 'School of Health Sciences',
        'color'    => 'blue',
        'schools'  => [
            ['name' => 'School of Health Sciences', 'pdf' => 'assets/uploads/fee/Health_Sciences_m.pdf'],
        ],
    ],
    [
        'id'       => 'arts',
        'icon'     => 'bi-palette-fill',
        'label'    => 'School of Arts & Humanities',
        'color'    => 'blue',
        'schools'  => [
            ['name' => 'School of Arts & Humanities', 'pdf' => 'assets/uploads/fee/Arts_Humanities_m.pdf'],
        ],
    ],
    [
        'id'       => 'law',
        'icon'     => 'bi-bank2',
        'label'    => 'School of Law & Legal Studies',
        'color'    => 'green',
        'schools'  => [
            ['name' => 'School of Law & Legal Studies', 'pdf' => 'assets/uploads/fee/Law_Legal_Studies_m.pdf'],
        ],
    ],
    [
        'id'       => 'skill',
        'icon'     => 'bi-tools',
        'label'    => 'School of Skill Development & Vocational Studies',
        'color'    => 'blue',
        'schools'  => [
            ['name' => 'School of Skill Development & Vocational Studies', 'pdf' => 'assets/uploads/fee/Skill_Development_Vocational_Studies_m.pdf'],
        ],
    ],
];
?>
<!-- Bootstrap 5 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700&family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">

<style>
/* ============================================
   CSS VARIABLES & BASE
============================================ */
:root {
    --green:      #10c45c;
    --green-dark: #0aa34c;
    --green-soft: #e6faf0;
    --blue:       #307ad5;
    --blue-dark:  #2566b8;
    --blue-soft:  #e8f0fb;
    --gray-50:    #f8f9fa;
    --gray-100:   #f1f3f5;
    --gray-200:   #e9ecef;
    --gray-400:   #ced4da;
    --gray-600:   #6c757d;
    --gray-800:   #343a40;
    --text:       #1a1f2e;
    --radius-sm:  8px;
    --radius-md:  14px;
    --radius-lg:  22px;
    --shadow-sm:  0 2px 10px rgba(0,0,0,.07);
    --shadow-md:  0 6px 28px rgba(0,0,0,.10);
    --font-head:  'Sora', sans-serif;
    --font-body:  'DM Sans', sans-serif;
    --transition: .25s cubic-bezier(.4,0,.2,1);
}

*, *::before, *::after { box-sizing: border-box; }

body {
    font-family: var(--font-body);
    color: var(--text);
    background: var(--gray-50);
}

/* ============================================
   HERO BANNER
============================================ */
.fee-hero {
    background: linear-gradient(135deg, #0f2447 0%, #1a4a8a 50%, #10593e 100%);
    padding: 70px 0 90px;
    position: relative;
    overflow: hidden;
}
.fee-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        radial-gradient(circle at 15% 50%, rgba(16,196,92,.18) 0%, transparent 55%),
        radial-gradient(circle at 85% 30%, rgba(48,122,213,.22) 0%, transparent 55%);
}
.fee-hero::after {
    content: '';
    position: absolute;
    bottom: -1px;
    left: 0; right: 0;
    height: 54px;
    background: var(--gray-50);
    clip-path: ellipse(55% 100% at 50% 100%);
}
.fee-hero .hero-tag {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    background: rgba(255,255,255,.12);
    border: 1px solid rgba(255,255,255,.2);
    color: #fff;
    font-size: .75rem;
    font-weight: 600;
    letter-spacing: .08em;
    text-transform: uppercase;
    padding: 5px 14px;
    border-radius: 50px;
    margin-bottom: 18px;
    backdrop-filter: blur(6px);
}
.fee-hero h1 {
    font-family: var(--font-head);
    font-size: clamp(2rem, 5vw, 3.2rem);
    font-weight: 700;
    color: #fff;
    line-height: 1.15;
    margin-bottom: 16px;
}
.fee-hero h1 span { color: var(--green); }
.fee-hero p {
    color: rgba(255,255,255,.72);
    font-size: 1.05rem;
    max-width: 520px;
}
.hero-stat-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255,255,255,.1);
    border: 1px solid rgba(255,255,255,.18);
    border-radius: 50px;
    padding: 8px 18px;
    color: #fff;
    font-size: .85rem;
    backdrop-filter: blur(6px);
    margin: 4px;
}
.hero-stat-pill i { font-size: 1rem; }

/* ============================================
   SEARCH BAR
============================================ */
.fee-search-wrap {
    margin-top: -28px;
    position: relative;
    z-index: 10;
    margin-bottom: 40px;
}
.fee-search-box {
    background: #fff;
    border-radius: var(--radius-md);
    box-shadow: var(--shadow-md);
    padding: 10px 12px 10px 20px;
    display: flex;
    align-items: center;
    gap: 10px;
    border: 1.5px solid var(--gray-200);
    transition: border-color var(--transition), box-shadow var(--transition);
}
.fee-search-box:focus-within {
    border-color: var(--blue);
    box-shadow: 0 0 0 3px rgba(48,122,213,.12), var(--shadow-md);
}
.fee-search-box i { color: var(--gray-600); font-size: 1.1rem; }
.fee-search-box input {
    border: none;
    outline: none;
    flex: 1;
    font-family: var(--font-body);
    font-size: .95rem;
    color: var(--text);
    background: transparent;
}
.fee-search-box input::placeholder { color: var(--gray-600); }
.search-clear-btn {
    border: none;
    background: var(--gray-100);
    color: var(--gray-600);
    border-radius: var(--radius-sm);
    width: 34px; height: 34px;
    display: none;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    flex-shrink: 0;
    font-size: .95rem;
    transition: background var(--transition);
}
.search-clear-btn.visible { display: flex; }
.search-clear-btn:hover { background: var(--gray-200); }

/* ============================================
   SIDEBAR NAV (DEPARTMENTS)
============================================ */
.dept-sidebar {
    position: sticky;
    top: 80px;
}
.sidebar-title {
    font-family: var(--font-head);
    font-size: .7rem;
    font-weight: 700;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: var(--gray-600);
    margin-bottom: 10px;
    padding: 0 4px;
}
.dept-nav {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 3px;
}
.dept-nav-item {
    border-radius: var(--radius-sm);
    overflow: hidden;
}
.dept-nav-btn {
    width: 100%;
    display: flex;
    align-items: center;
    gap: 11px;
    padding: 10px 14px;
    border: none;
    background: transparent;
    color: var(--gray-800);
    font-family: var(--font-body);
    font-size: .88rem;
    font-weight: 500;
    cursor: pointer;
    border-radius: var(--radius-sm);
    text-align: left;
    transition: all var(--transition);
    position: relative;
}
.dept-nav-btn .dept-icon {
    width: 32px; height: 32px;
    border-radius: 8px;
    display: flex; align-items: center; justify-content: center;
    font-size: .9rem;
    flex-shrink: 0;
    transition: all var(--transition);
}
.dept-nav-btn.green-btn .dept-icon {
    background: var(--green-soft);
    color: var(--green-dark);
}
.dept-nav-btn.blue-btn .dept-icon {
    background: var(--blue-soft);
    color: var(--blue-dark);
}
.dept-nav-btn:hover {
    background: var(--gray-100);
}
.dept-nav-btn.active {
    background: var(--gray-100);
    color: var(--text);
    font-weight: 600;
}
.dept-nav-btn.active.green-btn .dept-icon {
    background: var(--green);
    color: #fff;
}
.dept-nav-btn.active.blue-btn .dept-icon {
    background: var(--blue);
    color: #fff;
}
.dept-nav-btn.active::before {
    content: '';
    position: absolute;
    left: 0; top: 20%; bottom: 20%;
    width: 3px;
    border-radius: 0 3px 3px 0;
}
.dept-nav-btn.active.green-btn::before { background: var(--green); }
.dept-nav-btn.active.blue-btn::before  { background: var(--blue); }
.dept-nav-btn .school-count {
    margin-left: auto;
    font-size: .72rem;
    font-weight: 600;
    padding: 2px 8px;
    border-radius: 50px;
}
.dept-nav-btn.green-btn .school-count { background: var(--green-soft); color: var(--green-dark); }
.dept-nav-btn.blue-btn .school-count  { background: var(--blue-soft);  color: var(--blue-dark); }

/* Mobile horizontal dept scroll */
.dept-mobile-scroll {
    display: none;
    gap: 8px;
    overflow-x: auto;
    padding-bottom: 8px;
    scrollbar-width: none;
    margin-bottom: 20px;
}
.dept-mobile-scroll::-webkit-scrollbar { display: none; }
.dept-mobile-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    white-space: nowrap;
    padding: 8px 14px;
    border-radius: 50px;
    border: 1.5px solid var(--gray-300);
    background: #fff;
    font-size: .8rem;
    font-weight: 500;
    cursor: pointer;
    color: var(--gray-800);
    transition: all var(--transition);
    flex-shrink: 0;
}
.dept-mobile-pill.active-green {
    background: var(--green);
    border-color: var(--green);
    color: #fff;
}
.dept-mobile-pill.active-blue {
    background: var(--blue);
    border-color: var(--blue);
    color: #fff;
}

/* ============================================
   CONTENT PANEL
============================================ */
.content-panel {
    background: #fff;
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-sm);
    border: 1.5px solid var(--gray-200);
    overflow: hidden;
    min-height: 600px;
}
.dept-pane { display: none; }
.dept-pane.active { display: block; }

/* Panel Header */
.panel-header {
    padding: 24px 28px 20px;
    border-bottom: 1.5px solid var(--gray-100);
    position: relative;
    gap: 10px !important;
    overflow: hidden;
}
.panel-header::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 4px;
}
.panel-header.green-header::before { background: linear-gradient(90deg, var(--green), #5ef09e); }
.panel-header.blue-header::before  { background: linear-gradient(90deg, var(--blue), #74b3ff); }
.panel-header .ph-icon {
    width: 48px; height: 48px;
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.4rem;
    margin-bottom: 12px;
}
.panel-header.green-header .ph-icon { background: var(--green-soft); color: var(--green-dark); }
.panel-header.blue-header  .ph-icon { background: var(--blue-soft);  color: var(--blue-dark); }
.panel-header h2 {
    font-family: var(--font-head);
    font-size: 1.3rem;
    font-weight: 700;
    margin: 0 0 4px;
}
.panel-header p {
    color: var(--gray-600);
    font-size: .85rem;
    margin: 0;
}

/* School Sub-tabs */
.school-tabs-wrap {
    padding: 16px 28px 0;
    border-bottom: 1.5px solid var(--gray-100);
    overflow-x: auto;
    scrollbar-width: none;
}
.school-tabs-wrap::-webkit-scrollbar { display: none; }
.school-tabs {
    display: flex;
    gap: 2px;
    list-style: none;
    padding: 0;
    margin: 0;
    white-space: nowrap;
}
.school-tab-btn {
    border: none;
    background: transparent;
    font-family: var(--font-body);
    font-size: .85rem;
    font-weight: 500;
    color: var(--gray-600);
    padding: 9px 16px 12px;
    cursor: pointer;
    border-bottom: 2.5px solid transparent;
    transition: all var(--transition);
    white-space: nowrap;
}
.school-tab-btn:hover { color: var(--text); }
.school-tab-btn.active.green-tab {
    color: var(--green-dark);
    border-bottom-color: var(--green);
}
.school-tab-btn.active.blue-tab {
    color: var(--blue-dark);
    border-bottom-color: var(--blue);
}

/* PDF Viewer Area */
.pdf-viewer-wrap {
    padding: 24px 28px;
    position: relative;
}
.school-pane { display: none; }
.school-pane.active { display: block; }

.pdf-toolbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 16px;
    padding: 12px 16px;
    background: var(--gray-50);
    border-radius: var(--radius-sm);
    border: 1px solid var(--gray-200);
}
.pdf-toolbar .pdf-title {
    font-family: var(--font-head);
    font-weight: 600;
    font-size: .9rem;
    display: flex;
    align-items: center;
    gap: 8px;
    color: var(--text);
}
.pdf-toolbar-actions { display: flex; gap: 8px; align-items: center; }
.pdf-action-btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 14px;
    border-radius: var(--radius-sm);
    font-family: var(--font-body);
    font-size: .8rem;
    font-weight: 600;
    cursor: pointer;
    transition: all var(--transition);
    border: 1.5px solid;
    text-decoration: none;
}
.btn-green-outline {
    color: var(--green-dark);
    border-color: var(--green);
    background: var(--green-soft);
}
.btn-green-outline:hover { background: var(--green); color: #fff; }
.btn-blue-outline {
    color: var(--blue-dark);
    border-color: var(--blue);
    background: var(--blue-soft);
}
.btn-blue-outline:hover { background: var(--blue); color: #fff; }

.pdf-embed-container {
    width: 100%;
    height: 600px;
    border-radius: var(--radius-sm);
    overflow: hidden;
    border: 1.5px solid var(--gray-200);
    background: var(--gray-50);
    position: relative;
}
.pdf-embed-container embed,
.pdf-embed-container iframe {
    width: 100%;
    height: 100%;
    border: none;
    display: block;
}
.pdf-fallback {
    display: none;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100%;
    gap: 16px;
    padding: 40px;
    text-align: center;
}
.pdf-fallback i { font-size: 3rem; color: var(--gray-400); }
.pdf-fallback p { color: var(--gray-600); font-size: .9rem; }

/* No results state */
.no-results {
    display: none;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 80px 40px;
    text-align: center;
    gap: 12px;
}
.no-results i { font-size: 2.5rem; color: var(--gray-400); }
.no-results h4 { font-family: var(--font-head); font-weight: 600; font-size: 1.1rem; color: var(--gray-800); }
.no-results p  { color: var(--gray-600); font-size: .88rem; }

/* ============================================
   INFO CARDS (bottom strip)
============================================ */
.info-strip {
    margin-top: 36px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 16px;
}
.info-card {
    background: #fff;
    border-radius: var(--radius-md);
    border: 1.5px solid var(--gray-200);
    padding: 20px;
    display: flex;
    align-items: flex-start;
    gap: 14px;
    transition: box-shadow var(--transition), transform var(--transition);
}
.info-card:hover {
    box-shadow: var(--shadow-md);
    transform: translateY(-2px);
}
.info-card .ic-icon {
    width: 42px; height: 42px;
    border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.1rem;
    flex-shrink: 0;
}
.ic-green { background: var(--green-soft); color: var(--green-dark); }
.ic-blue  { background: var(--blue-soft);  color: var(--blue-dark); }
.info-card h5 {
    font-family: var(--font-head);
    font-weight: 600;
    font-size: .88rem;
    margin: 0 0 4px;
}
.info-card p {
    font-size: .8rem;
    color: var(--gray-600);
    margin: 0;
}

/* ============================================
   RESPONSIVE
============================================ */
@media (max-width: 991px) {
    .dept-sidebar { display: none !important; }
    .dept-mobile-scroll { display: flex !important; }
    .pdf-embed-container { height: 480px; }
}
@media (max-width: 575px) {
    .panel-header { padding: 18px 16px 14px; }
    .school-tabs-wrap { padding: 12px 16px 0; }
    .pdf-viewer-wrap { padding: 16px; }
    .pdf-embed-container { height: 380px; }
    .pdf-toolbar { flex-direction: column; align-items: flex-start; }
    .fee-hero { padding: 50px 0 70px; }
}

/* ============================================
   ANIMATIONS
============================================ */
@keyframes fadeSlide {
    from { opacity: 0; transform: translateY(10px); }
    to   { opacity: 1; transform: translateY(0); }
}
.dept-pane.active  { animation: fadeSlide .25s ease; }
.school-pane.active { animation: fadeSlide .2s ease; }

/* Label enhancement */
.dept-nav-btn .btn-label {
    line-height: 1.3;
    display: block;
}

/* Scroll enhancement for long names */
.school-tabs-wrap {
    background: #fafafa;
    border-bottom: 2px solid var(--gray-100);
}
.school-tab-btn {
    font-size: .82rem;
    padding: 12px 20px;
    letter-spacing: 0.01em;
}

/* Spinner & Loading */
.pdf-loader {
    position: absolute;
    inset: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: #fff;
    z-index: 5;
    gap: 15px;
    transition: opacity .4s ease, visibility .4s ease;
}
.pdf-loader p {
    font-size: .85rem;
    color: var(--gray-600);
    font-weight: 500;
    margin: 0;
}
.pdf-embed-container[data-loaded="true"] .pdf-loader {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
}

.pdf-frame {
    width: 100%;
    height: 100%;
    border: none;
    display: block;
}

/* Highlight searched items */
.dept-nav-btn.search-hidden { display: none; }
.dept-mobile-pill.search-hidden { display: none; }

@media (max-width: 767px) {
    .dept-mobile-pill {
        padding: 10px 18px;
        font-size: .85rem;
    }
    .panel-header h2 { font-size: 1.15rem; }
}
</style>
<!-- Page Content -->

<!-- ===== HERO ===== -->
<section class="fee-hero">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-tag">
                    <i class="bi bi-mortarboard-fill"></i>
                    Academic Fee Structure
                </div>
                <h1>Explore Fee Structure<br>Across <span>All Departments</span></h1>
                <p>Transparent and detailed fee information for all schools and programmes offered at our university for the current academic year.</p>
                <div class="mt-4">
                    <!-- <span class="hero-stat-pill"><i class="bi bi-building"></i> <?= count($departments) ?> Departments</span>
                    <span class="hero-stat-pill"><i class="bi bi-journals"></i> <?= array_sum(array_map(fn($d)=>count($d['schools']), $departments)) ?> Schools</span> -->
                    <span class="hero-stat-pill"><i class="bi bi-calendar-check"></i> 2026–27</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== MAIN ===== -->
<div class="container" style="padding-bottom:60px;">

    <!-- Search Bar -->
    <div class="fee-search-wrap">
        <div class="fee-search-box">
            <i class="bi bi-search"></i>
            <input type="text" id="deptSearch" placeholder="Search department or school…" autocomplete="off">
            <button class="search-clear-btn" id="searchClear" title="Clear search">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
    </div>

    <!-- Mobile dept pills -->
    <div class="dept-mobile-scroll" id="mobilePills">
        <?php foreach($departments as $i => $dept): ?>
        <button class="dept-mobile-pill <?= $i===0 ? 'active-'.$dept['color'] : '' ?>"
                data-target="<?= $dept['id'] ?>"
                data-color="<?= $dept['color'] ?>">
            <i class="bi <?= $dept['icon'] ?>"></i>
            <?= $dept['label'] ?>
        </button>
        <?php endforeach; ?>
    </div>

    <div class="row g-4">

        <!-- Sidebar -->
        <div class="col-lg-3">
            <div class="dept-sidebar">
                <div class="sidebar-title">Departments</div>
                <ul class="dept-nav" id="deptNav">
                    <?php foreach($departments as $i => $dept): ?>
                    <li class="dept-nav-item">
                        <button class="dept-nav-btn <?= $dept['color'] ?>-btn <?= $i===0?'active':'' ?>"
                                data-target="<?= $dept['id'] ?>"
                                data-color="<?= $dept['color'] ?>"
                                data-label="<?= strtolower($dept['label']) ?>">
                            <span class="dept-icon"><i class="bi <?= $dept['icon'] ?>"></i></span>
                            <span class="btn-label"><?= $dept['label'] ?></span>
                            <span class="school-count"><?= count($dept['schools']) ?></span>
                        </button>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <div class="no-results" id="sidebarNoResults">
                    <i class="bi bi-search"></i>
                    <h4>No match found</h4>
                    <p>Try a different keyword</p>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="col-lg-9">
            <div class="content-panel" id="contentPanel">
                <?php foreach($departments as $i => $dept): ?>
                <div class="dept-pane <?= $i===0?'active':'' ?>" id="pane-<?= $dept['id'] ?>">

                    <!-- Panel Header -->
                    <div class="panel-header <?= $dept['color'] ?>-header">
                        <div class="ph-icon"><i class="bi <?= $dept['icon'] ?>"></i></div>
                        <h2><?= $dept['label'] ?> — Fee Structure</h2>
                        <p><?= count($dept['schools']) ?> school<?= count($dept['schools'])>1?'s':'' ?> &nbsp;·&nbsp; Academic Year 2026–27</p>
                    </div>

                    <!-- School Sub-Tabs -->
                    <div class="school-tabs-wrap">
                        <ul class="school-tabs">
                            <?php foreach($dept['schools'] as $si => $school): ?>
                            <li>
                                <button class="school-tab-btn <?= $si===0?'active '.$dept['color'].'-tab':'' ?>"
                                        data-school="<?= $dept['id'] ?>-<?= $si ?>">
                                    <?= $school['name'] ?>
                                </button>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- PDF Panes -->
                    <div class="pdf-viewer-wrap">
                        <?php foreach($dept['schools'] as $si => $school): ?>
                        <div class="school-pane <?= $si===0?'active':'' ?>" id="<?= $dept['id'] ?>-<?= $si ?>">

                            <!-- Toolbar -->
                            <div class="pdf-toolbar">
                                <div class="pdf-title">
                                    <i class="bi bi-file-earmark-pdf-fill" style="color:#e74c3c;font-size:1.1rem;"></i>
                                    <?= $school['name'] ?> — Fee Structure
                                </div>
                                <div class="pdf-toolbar-actions">
                                    <a href="<?= $school['pdf'] ?>" target="_blank"
                                       class="pdf-action-btn btn-<?= $dept['color'] ?>-outline">
                                        <i class="bi bi-box-arrow-up-right"></i> Open in Tab
                                    </a>
                                    <a href="<?= $school['pdf'] ?>" download
                                       class="pdf-action-btn btn-<?= $dept['color'] ?>-outline">
                                        <i class="bi bi-download"></i> Download
                                    </a>
                                </div>
                            </div>

                            <!-- PDF Embed -->
                            <div class="pdf-embed-container" data-loaded="false">
                                <!-- Loading Spinner -->
                                <div class="pdf-loader">
                                    <div class="spinner-border text-primary" style="width: 2rem; height: 2rem;" role="status"></div>
                                    <p>Loading Fee Structure...</p>
                                </div>
                                
                                <iframe data-src="<?= $school['pdf'] ?>#toolbar=1&navpanes=0&scrollbar=1&view=FitH"
                                        class="pdf-frame"></iframe>

                                <!-- Fallback if embed not supported -->
                                <div class="pdf-fallback">
                                    <i class="bi bi-file-earmark-pdf"></i>
                                    <p>Your browser does not support inline PDF viewing.</p>
                                    <a href="<?= $school['pdf'] ?>" target="_blank"
                                       class="pdf-action-btn btn-<?= $dept['color'] ?>-outline">
                                        <i class="bi bi-eye"></i> View PDF
                                    </a>
                                </div>
                            </div>

                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>
                <?php endforeach; ?>
            </div>

            <!-- Info Strip -->
            <div class="info-strip">
                <div class="info-card">
                    <div class="ic-icon ic-green"><i class="bi bi-shield-check"></i></div>
                    <div>
                        <h5>Verified & Official</h5>
                        <p>All fee structures are sourced directly from respective school registrars.</p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="ic-icon ic-blue"><i class="bi bi-telephone-fill"></i></div>
                    <div>
                        <h5>Need Help?</h5>
                        <p>Contact the admissions office for fee-related queries and waivers.</p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="ic-icon ic-green"><i class="bi bi-clock-history"></i></div>
                    <div>
                        <h5>Last Updated</h5>
                        <p>Fee structures are updated at the start of every academic year.</p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="ic-icon ic-blue"><i class="bi bi-piggy-bank-fill"></i></div>
                    <div>
                        <h5>Scholarships</h5>
                        <p>Merit and need-based scholarships are available across all departments.</p>
                    </div>
                </div>
            </div>

        </div><!-- /col -->
    </div><!-- /row -->
</div><!-- /container -->

<?php /* include('footer.php'); */ ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
(function () {
    /* -------  PDF loading logic  ------- */
    function loadPdf(paneId) {
        const pane = document.getElementById(paneId);
        if (!pane) return;
        
        const container = pane.querySelector('.pdf-embed-container');
        const frame = pane.querySelector('.pdf-frame');
        
        if (frame && !frame.src) {
            // Set loading state
            container.setAttribute('data-loaded', 'false');
            
            // Set src from data-src
            const source = frame.getAttribute('data-src');
            frame.src = source;
            
            // Handle load completion
            frame.onload = () => {
                container.setAttribute('data-loaded', 'true');
            };
            
            // Fallback for cases where onload might not fire or takes too long
            setTimeout(() => {
                container.setAttribute('data-loaded', 'true');
            }, 8000); 
        }
    }

    /* -------  Department switching  ------- */
    function activateDept(id, color) {
        // Sidebar
        document.querySelectorAll('.dept-nav-btn').forEach(b => {
            b.classList.toggle('active', b.dataset.target === id);
        });
        // Mobile pills
        document.querySelectorAll('.dept-mobile-pill').forEach(p => {
            p.className = 'dept-mobile-pill';
            if (p.dataset.target === id) p.classList.add('active-' + color);
            // Ensure the active pill is visible in the scroll
            if (p.dataset.target === id) p.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
        });
        // Content panes
        document.querySelectorAll('.dept-pane').forEach(p => {
            p.classList.toggle('active', p.id === 'pane-' + id);
        });
        
        // Load the PDF for the active school in this dept
        const activeSchoolPane = document.querySelector(`#pane-${id} .school-pane.active`);
        if (activeSchoolPane) {
            loadPdf(activeSchoolPane.id);
        }
    }

    document.querySelectorAll('.dept-nav-btn').forEach(btn => {
        btn.addEventListener('click', () => activateDept(btn.dataset.target, btn.dataset.color));
    });
    document.querySelectorAll('.dept-mobile-pill').forEach(pill => {
        pill.addEventListener('click', () => activateDept(pill.dataset.target, pill.dataset.color));
    });

    /* -------  School sub-tab switching  ------- */
    document.querySelectorAll('.school-tab-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const panel = btn.closest('.dept-pane');
            const color = panel.querySelector('.panel-header').className.includes('green') ? 'green' : 'blue';
            // Tabs
            panel.querySelectorAll('.school-tab-btn').forEach(t => {
                t.classList.remove('active', 'green-tab', 'blue-tab');
            });
            btn.classList.add('active', color + '-tab');
            // Panes
            panel.querySelectorAll('.school-pane').forEach(p => p.classList.remove('active'));
            const targetPaneId = btn.dataset.school;
            document.getElementById(targetPaneId).classList.add('active');
            
            // Load PDF on click
            loadPdf(targetPaneId);
            
            // Scroll tab into view
            btn.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
        });
    });

    /* -------  Search  ------- */
    const searchInput  = document.getElementById('deptSearch');
    const searchClear  = document.getElementById('searchClear');
    const noResults    = document.getElementById('sidebarNoResults');

    searchInput.addEventListener('input', function () {
        const q = this.value.trim().toLowerCase();
        searchClear.classList.toggle('visible', q.length > 0);

        let visible = 0;
        document.querySelectorAll('.dept-nav-btn').forEach(btn => {
            const label = btn.dataset.label || (btn.querySelector('.btn-label').textContent || '').toLowerCase();
            const hide  = q && !label.includes(q);
            btn.classList.toggle('search-hidden', hide);
            if (!hide) visible++;
        });
        document.querySelectorAll('.dept-mobile-pill').forEach(pill => {
            const label = (pill.textContent || '').toLowerCase();
            pill.classList.toggle('search-hidden', q && !label.includes(q));
        });

        noResults.style.display = (q && visible === 0) ? 'flex' : 'none';

        // Auto-activate first visible dept
        if (q && visible > 0) {
            const firstVisible = document.querySelector('.dept-nav-btn:not(.search-hidden)');
            if (firstVisible) activateDept(firstVisible.dataset.target, firstVisible.dataset.color);
        }
    });

    searchClear.addEventListener('click', () => {
        searchInput.value = '';
        searchInput.dispatchEvent(new Event('input'));
        searchInput.focus();
    });

    /* -------  Initial Load  ------- */
    window.addEventListener('load', () => {
        const firstPane = document.querySelector('.school-pane.active');
        if (firstPane) {
            loadPdf(firstPane.id);
        }
    });

})();
</script>
<?php require "common/footer.php"?>