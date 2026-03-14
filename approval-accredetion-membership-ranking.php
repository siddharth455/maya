<!DOCTYPE html>
<html lang="en">
<head>
    <?php
$page_title = "Approvals, Accreditations & Rankings | Maya Devi University";
$page_description = "Explore approvals, accreditations, memberships, and university rankings of Maya Devi University, Dehradun.";
$canonical_url = "https://maya.edu.in/approval-accreditation-membership-ranking.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>

</head>
<body>
<?php require "common/header.php"?>
<section class="doctoral-hero">
    <div class="container-research">
        <h1>Rankings & Accreditations</h1>
       
    </div>
</section>
<section class="ranking-section">
    <div class="container">


        <div class="ranking-grid">

            <div class="ranking-card">
                <img src="assets/uploads/icon/rank-1.webp" alt="Government of Uttarakhand">
            </div>

            <div class="ranking-card">
                <img src="assets/uploads/icon/rank-2.png" alt="University Grants Commission">
            </div>

            <div class="ranking-card">
                <img src="assets/uploads/icon/rank-3.png" alt="Pharmacy Council of India">
            </div>

            <div class="ranking-card">
                <img src="assets/uploads/icon/rank-4.webp" alt="National Council for Teacher Education">
            </div>

            <div class="ranking-card">
                <img src="assets/uploads/icon/rank-5.png" alt="Bar Council of India">
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
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 25px;
    align-items: center;
}

/* Logo Card */
.ranking-card {
    background: #ffffff;
    border: 1px solid #dcdcdc;
    padding: 30px 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 150px;
}

.ranking-card img {
    max-width: 100%;
    max-height: 90px;
    object-fit: contain;
}

/* Responsive */
@media (max-width: 768px) {
    .ranking-title {
        font-size: 32px;
        margin-bottom: 35px;
    }

    .ranking-card {
        height: 130px;
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