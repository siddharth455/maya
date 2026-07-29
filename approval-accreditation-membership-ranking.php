<?php
$page_title = "Approvals, Accreditations & Rankings | Maya Devi University";
$page_description = "Explore approvals, accreditations, memberships, and university rankings of Maya Devi University, Dehradun.";
$canonical_url = "https://maya.edu.in/approval-accreditation-membership-ranking.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>

<?php require "common/header.php"?>
<section class="doctoral-hero">
    <div class="container-research">
        <h1>Approvals, Accreditations & Rankings</h1>
        <p>Maya Devi University's programs are recognized by India's statutory education and professional-council
        bodies, and the university's performance is tracked by independent global and national ranking agencies.
        Details of each are below.</p>
    </div>
</section>

<section class="ranking-section">
    <div class="container">
        <h2 class="ranking-title">Statutory Approvals &amp; Accreditations</h2>

        <div class="ranking-grid">

            <div class="ranking-card">
                <img loading="lazy" src="assets/uploads/icon/rank-1.webp" alt="Government of Uttarakhand approval">
                <h3>Government of Uttarakhand</h3>
                <p>Maya Devi University is established and approved by an Act of the Government of Uttarakhand,
                authorizing it to function as a state private university and award degrees.</p>
            </div>

            <div class="ranking-card">
                <img loading="lazy" src="assets/uploads/icon/rank-2.png" alt="University Grants Commission (UGC) recognition">
                <h3>University Grants Commission (UGC)</h3>
                <p>UGC is the statutory body of the Government of India responsible for coordinating, determining,
                and maintaining standards of higher education across the country. Maya Devi University is listed
                among UGC-recognized universities.</p>
            </div>

            <div class="ranking-card">
                <img loading="lazy" src="assets/uploads/icon/rank-3.png" alt="Pharmacy Council of India (PCI) approval">
                <h3>Pharmacy Council of India (PCI)</h3>
                <p>PCI is the statutory regulatory body governing pharmacy education and practice in India. The
                university's pharmacy programs operate under PCI approval.</p>
            </div>

            <div class="ranking-card">
                <img loading="lazy" src="assets/uploads/icon/rank-4.webp" alt="National Council for Teacher Education (NCTE) recognition">
                <h3>National Council for Teacher Education (NCTE)</h3>
                <p>NCTE oversees the planned and coordinated development of teacher education in India and sets
                the norms and standards for B.Ed and related programs. The university's education programs are
                run under NCTE recognition.</p>
            </div>

            <div class="ranking-card">
                <img loading="lazy" src="assets/uploads/icon/rank-5.png" alt="Bar Council of India (BCI) approval">
                <h3>Bar Council of India (BCI)</h3>
                <p>BCI is the statutory body that regulates legal education and the legal profession in India. The
                university's law programs are approved by the BCI.</p>
            </div>

        </div>

        <h2 class="ranking-title" style="margin-top:60px;">Rankings</h2>

        <div class="ranking-grid">

            <div class="ranking-card">
                <img loading="lazy" src="assets/uploads/icon/rank-1.webp" alt="WURI ranking">
                <h3>WURI Ranking</h3>
                <p>The World's Universities with Real Impact (WURI) ranking evaluates universities on innovation,
                entrepreneurship, and real-world impact rather than only traditional research metrics.</p>
            </div>

            <div class="ranking-card">
                <img loading="lazy" src="assets/uploads/icon/rank-2.png" alt="Times Higher Education (THE) World University Rankings">
                <h3>Times Higher Education (THE) Rankings</h3>
                <p>THE World University Rankings is one of the most widely referenced global university rankings,
                assessing teaching, research, knowledge transfer, and international outlook.</p>
            </div>

            <div class="ranking-card">
                <img loading="lazy" src="assets/uploads/icon/rank-3.png" alt="National Institutional Ranking Framework (NIRF) ranking">
                <h3>NIRF Ranking</h3>
                <p>The National Institutional Ranking Framework (NIRF) is the Government of India's official
                methodology for ranking institutions of higher education across categories such as university,
                engineering, and management.</p>
            </div>

            <div class="ranking-card">
                <img loading="lazy" src="assets/uploads/icon/rank-4.webp" alt="Times Higher Education (THE) Impact Rankings">
                <h3>THE Impact Rankings</h3>
                <p>THE Impact Rankings assess universities against the United Nations' Sustainable Development
                Goals (SDGs), measuring real-world social and economic impact.</p>
            </div>

        </div>
    </div>
</section>

<?php require "common/footer.php"?>
<style>
    /* Rankings & Accreditations */
.ranking-section {
    padding: 60px 0 70px;
    background: #ffffff;
}

.ranking-title {
    text-align: center;
    font-size: 42px;
    font-weight: 700;
    color: #0a8a00;
    margin-bottom: 50px;
}

/* Grid */
.ranking-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 25px;
    align-items: stretch;
}

/* Card */
.ranking-card {
    background: #ffffff;
    border: 1px solid #dcdcdc;
    border-radius: 10px;
    padding: 24px 20px 28px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.ranking-card img {
    max-width: 100%;
    max-height: 70px;
    object-fit: contain;
    margin-bottom: 14px;
}

.ranking-card h3 {
    font-size: 18px;
    font-weight: 700;
    color: #0a1121;
    margin: 0 0 10px;
}

.ranking-card p {
    font-size: 14px;
    line-height: 1.55;
    color: #444;
    margin: 0;
}

/* Responsive */
@media (max-width: 768px) {
    .ranking-title {
        font-size: 32px;
        margin-bottom: 35px;
    }
}

    .container-research {
    width: 90%;
    max-width: 1200px;
    margin: auto;
}

/* Hero */
.doctoral-hero {
    background: linear-gradient(135deg, #25d067ff, #01203eff);
    color: #fff !important;
    padding: 70px 0;
    text-align: center;
}

.doctoral-hero h1 {
    font-size: 42px;
    margin-bottom: 10px;
    color: #fff !important;
}
.doctoral-hero p {
    color: #fff !important;
}
</style>