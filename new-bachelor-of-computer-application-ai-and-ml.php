<?php
/* ==========================================================================
   COURSE REDESIGN — BCA with Specialization in AI & ML
   File : new-bachelor-of-computer-application-ai-and-ml.php
   The live page (bachelor-of-computer-application-ai-and-ml.php) is untouched;
   every fact below comes from it.
   Kit  : common/mx-kit.php · assets/css/mx.css · assets/js/mx.js
   ========================================================================== */
$page_title = "BCA AI & ML in Dehradun | Maya Devi University";
$page_description = "Enroll in BCA Artificial Intelligence and Machine Learning at Maya Devi University, Dehradun with hands-on AI project training.";
$canonical_url = "https://maya.edu.in/bachelor-of-computer-application-ai-and-ml.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";

require_once __DIR__ . '/common/mx-kit.php';

$DEPT = 'new-best-computer-engineering-college-in-dehradun-uttarakhand.php';

$facts = [
    ['seat',   '60',  'Total students'],
    ['clock',  '3',   'Years'],
    ['credit', '120', 'Credits'],
    ['sem',    '6',   'Semesters'],
];

/* the three layers of the curriculum, as the course description puts it */
$pillars = [
    ['Core computer science', 'Programming, data structures and databases — a strong foundation in computer applications and IT.'],
    ['AI &amp; ML depth', 'Machine learning algorithms, deep learning, natural language processing, computer vision and data analytics.'],
    ['Built by doing', 'Hands-on projects, labs and real-world applications where you develop intelligent systems that solve problems across industries.'],
];

$topics = [
    ['code',   'Programming', 'Core'],
    ['layers', 'Data structures', 'Core'],
    ['db',     'Databases', 'Core'],
    ['globe',  'Web &amp; emerging tech', 'Core'],
    ['chart',  'Machine learning algorithms', 'Specialisation'],
    ['brain',  'Deep learning', 'Specialisation'],
    ['text',   'Natural language processing', 'Specialisation'],
    ['eye',    'Computer vision', 'Specialisation'],
];

$features = [
    'Strong foundation in Computer Applications and IT',
    'Industry-oriented curriculum with practical exposure',
    'Focus on programming, databases, web, and emerging technologies',
    'Enhances problem-solving and analytical skills',
    'Prepares students for higher studies and IT careers',
];

$roles = [
    'AI Engineer', 'Machine Learning Developer', 'Data Scientist', 'NLP Specialist',
    'Software Developer / Programmer', 'Web Designer / Web Developer', 'Database Administrator',
    'System Analyst / IT Support Executive', 'Higher studies &amp; research in AI',
];

$related = [
    ['Bachelor of Computer Application (BCA)', 'bachelor-of-computer-application.php', 'assets/uploads/bca.webp', 'Undergraduate program in computer applications, focusing on software development and IT skills.'],
    ['BCA with Specialization in Data Science', 'bachelor-of-computer-application-data-science.php', 'assets/uploads/data-science.webp', 'BCA program with a focus on data science and analytics for IT applications.'],
    ['BCA with Specialization in Cyber Security', 'bachelor-of-computer-application-cyber-security.php', 'assets/uploads/cyber-security.webp', 'BCA program specializing in cyber security for protecting IT systems and data.'],
];

$page_schema = '<script type="application/ld+json">' . json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Course',
    'name' => 'BCA with Specialization in Artificial Intelligence and Machine Learning (AIML)',
    'description' => 'A three-year undergraduate program that equips students with a strong foundation in computer applications and in-depth knowledge and practical skills in AI and ML.',
    'url' => $canonical_url,
    'provider' => ['@type' => 'CollegeOrUniversity', 'name' => 'Maya Devi University', 'url' => 'https://maya.edu.in/'],
    'educationalCredentialAwarded' => 'Bachelor of Computer Applications',
    'timeRequired' => 'P3Y',
    'numberOfCredits' => 120,
    'coursePrerequisites' => 'Pass with 50% aggregate marks in 10+2 (with English) or equivalent.',
    'hasCourseInstance' => ['@type' => 'CourseInstance', 'courseMode' => 'Onsite', 'location' => ['@type' => 'Place', 'name' => 'Maya Devi University, Selaqui, Dehradun, Uttarakhand']],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

require "common/header.php";
mx_head();
?>

<main class="mx">
    <div class="mx-progress" aria-hidden="true"><i></i></div>

    <!-- ================= HERO ================= -->
    <section class="mx-chero" aria-label="BCA with Specialization in AI and ML">
        <div class="mx-wrap">
            <nav aria-label="Breadcrumb">
                <ol class="mx-crumbs" data-mx="fade">
                    <li><a href="new-home-4.php">Home</a></li>
                    <li><a href="<?php echo $DEPT; ?>">Computer Engineering &amp; Applications</a></li>
                    <li aria-current="page">BCA (AIML)</li>
                </ol>
            </nav>
            <div class="mx-chero__in">
                <div>
                    <div class="mx-chero__code" data-mx><b>Undergraduate</b> School of Computer Engineering &amp; Applications</div>
                    <h1 class="mx-h1" data-mx="split">BCA with <em>AI &amp; Machine Learning</em></h1>
                    <p class="mx-lead" data-mx style="--d:.35s">A cutting-edge three-year undergraduate program designed to meet the growing demand for intelligent technologies — a strong foundation in computer applications, with in-depth knowledge and practical skills in AI and ML.</p>
                    <div class="mx-actions" data-mx style="--d:.45s">
                        <a class="mx-btn mx-btn--solid" href="https://admissions.maya.edu.in" rel="noopener"><span>Apply now</span><?php echo mx_icon('arrow'); ?></a>
                        <a class="mx-btn" href="#eligibility"><span>Check eligibility</span><?php echo mx_icon('arrow-d'); ?></a>
                    </div>
                </div>
                <figure class="mx-chero__pic" data-mx="clip" style="--d:.1s">
                    <img src="<?php echo mx_img('assets/uploads/ai.jpeg'); ?>" alt="BCA AI and ML students in the AI lab at Maya Devi University" width="900" height="990" fetchpriority="high" data-mx-par="0.05">
                </figure>
            </div>
        </div>
        <div class="mx-wrap">
            <div class="mx-facts">
                <?php foreach ($facts as $i => $f): ?>
                    <div class="mx-fact" data-mx style="--d:<?php echo $i * 0.08; ?>s">
                        <?php echo mx_icon($f[0]); ?>
                        <div><strong data-count="<?php echo $f[1]; ?>"><?php echo $f[1]; ?></strong><span><?php echo $f[2]; ?></span></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ================= SUB NAV ================= -->
    <nav class="mx-subnav" aria-label="On this page" data-mx-subnav>
        <div class="mx-wrap mx-subnav__in">
            <ul>
                <li><a href="#overview">Overview</a></li>
                <li><a href="#curriculum">What you learn</a></li>
                <li><a href="#eligibility">Eligibility</a></li>
                <li><a href="#careers">Careers</a></li>
                <li><a href="#admission">Admission</a></li>
                <li><a href="#related">Related</a></li>
            </ul>
            <a class="mx-btn mx-btn--solid" href="https://admissions.maya.edu.in" rel="noopener"><span>Apply</span><?php echo mx_icon('arrow'); ?></a>
        </div>
    </nav>

    <!-- ================= OVERVIEW ================= -->
    <section class="mx-sec" id="overview">
        <div class="mx-wrap">
            <div class="mx-about">
                <div><span class="mx-kicker" data-mx><b>01</b> Overview</span></div>
                <div>
                    <p class="mx-statement mx-statement--wide" data-mx-words>Learn to build <em>intelligent systems</em> that solve complex problems across industries — from your first line of code to <em>deep learning.</em></p>
                    <div class="mx-two" style="margin-top:clamp(40px,5vw,64px)">
                        <div class="mx-body" data-mx>
                            <p>The curriculum blends core computer science subjects — like programming, data structures, and databases — with advanced topics such as machine learning algorithms, deep learning, natural language processing (NLP), computer vision, and data analytics.</p>
                        </div>
                        <div class="mx-body" data-mx style="--d:.12s">
                            <p>This specialization prepares students for dynamic careers in one of the most promising fields of technology. Graduates can pursue roles such as AI Engineer, Machine Learning Developer, Data Scientist, or NLP Specialist, or continue with higher studies and research in emerging AI technologies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= CURRICULUM ================= -->
    <section class="mx-sec mx-sec--paper2" id="curriculum">
        <div class="mx-wrap">
            <div class="mx-head">
                <div class="mx-head__side"><span class="mx-kicker" data-mx><b>02</b> What you learn</span></div>
                <h2 class="mx-h2" data-mx="split">Three layers, <em>one degree.</em></h2>
            </div>
            <div class="mx-pillars" style="margin-bottom:clamp(96px,10vw,140px)">
                <?php foreach ($pillars as $i => $p): ?>
                    <div class="mx-pillar" data-mx style="--d:<?php echo $i * 0.12; ?>s">
                        <span class="mx-pillar__n"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                        <h3><?php echo $p[0]; ?></h3>
                        <p><?php echo $p[1]; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="mx-topics">
                <?php foreach ($topics as $i => $t): ?>
                    <div class="mx-topic" data-mx style="--d:<?php echo ($i % 4) * 0.07; ?>s">
                        <?php echo mx_icon($t[0]); ?>
                        <div><small><?php echo $t[2]; ?></small><br><b><?php echo $t[1]; ?></b></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ================= ELIGIBILITY + FEATURES ================= -->
    <section class="mx-sec" id="eligibility">
        <div class="mx-wrap mx-two">
            <div class="mx-elig" data-mx="clip">
                <span class="mx-kicker"><b>03</b> Eligibility</span>
                <p>Pass with 50% aggregate marks in 10+2 (with English) or equivalent.</p>
                <div class="mx-actions" style="margin-top:32px;position:relative;z-index:1">
                    <a class="mx-btn mx-btn--dark" href="https://admissions.maya.edu.in" rel="noopener"><span>Start application</span><?php echo mx_icon('arrow'); ?></a>
                </div>
            </div>
            <div>
                <span class="mx-kicker" data-mx>Key features</span>
                <h2 class="mx-h3" style="margin:18px 0 26px;font-size:clamp(1.6rem,3vw,2.4rem)" data-mx>Why this program</h2>
                <ul class="mx-ticks">
                    <?php foreach ($features as $i => $f): ?>
                        <li data-mx style="--d:<?php echo $i * 0.07; ?>s"><?php echo mx_icon('check'); ?><span><?php echo $f; ?></span></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <!-- ================= CAREERS ================= -->
    <section class="mx-sec mx-sec--dark" id="careers">
        <div class="mx-wrap">
            <div class="mx-head">
                <div class="mx-head__side"><span class="mx-kicker" data-mx><b>04</b> Career prospects</span></div>
                <div>
                    <h2 class="mx-h2" data-mx="split">Where this degree <em>takes you.</em></h2>
                    <p class="mx-lead" style="margin-top:22px" data-mx>Opportunities in IT firms, startups, and government sectors — or onward to higher studies and research.</p>
                </div>
            </div>
            <div class="mx-roles">
                <?php foreach ($roles as $i => $r): ?>
                    <div class="mx-role" data-mx style="--d:<?php echo ($i % 3) * 0.08; ?>s"><small><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></small><b><?php echo $r; ?></b></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ================= ADMISSION ================= -->
    <section class="mx-sec mx-sec--green" id="admission">
        <div class="mx-wrap">
            <div class="mx-head">
                <div class="mx-head__side"><span class="mx-kicker" data-mx><b>05</b> Admission</span></div>
                <h2 class="mx-h2" data-mx="split">Four steps to <em>your seat.</em></h2>
            </div>
            <ol class="mx-steps">
                <?php foreach (mx_steps() as $i => $s): ?>
                    <li class="mx-step" data-mx style="--d:<?php echo $i * 0.15; ?>s">
                        <div class="mx-step__n"><b><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></b><i></i></div>
                        <div><h3><?php echo $s[0]; ?></h3><p><?php echo $s[1]; ?></p></div>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </section>

    <!-- ================= PARTNERS ================= -->
    <section class="mx-sec mx-sec--tight mx-sec--white" aria-label="Industry partners">
        <div class="mx-wrap" style="margin-bottom:28px">
            <span class="mx-kicker" data-mx>Industry partners</span>
        </div>
        <div class="mx-logos"><div class="mx-logos__track">
            <?php for ($k = 0; $k < 2; $k++) for ($i = 1; $i <= 14; $i++) echo '<figure><img src="assets/img/brand-logo/' . $i . '.webp" alt="' . ($k ? '' : 'Industry partner logo') . '" loading="lazy" width="150" height="100"></figure>'; ?>
        </div></div>
    </section>

    <!-- ================= RELATED ================= -->
    <section class="mx-sec" id="related">
        <div class="mx-wrap">
            <div class="mx-head">
                <div class="mx-head__side"><span class="mx-kicker" data-mx><b>06</b> Related</span></div>
                <div class="mx-head__row">
                    <h2 class="mx-h2" data-mx="split">Other <em>BCA</em> paths.</h2>
                    <a class="mx-link" href="<?php echo $DEPT; ?>" data-mx>All programs in the school <?php echo mx_icon('arrow-ur'); ?></a>
                </div>
            </div>
            <div class="mx-cards3">
                <?php foreach ($related as $i => $c): ?>
                    <article class="mx-card" data-mx style="--d:<?php echo $i * 0.1; ?>s">
                        <div class="mx-card__img"><img src="<?php echo mx_img($c[2]); ?>" alt="" loading="lazy" width="640" height="480"><span class="mx-card__tag">BCA</span></div>
                        <div class="mx-card__body">
                            <h3 class="mx-card__title"><a href="<?php echo $c[1]; ?>"><?php echo $c[0]; ?></a></h3>
                            <p class="mx-card__text"><?php echo $c[3]; ?></p>
                            <div class="mx-card__meta">
                                <span><?php echo mx_icon('credit'); ?>120 credits</span>
                                <span><?php echo mx_icon('clock'); ?>3 Years</span>
                                <span class="mx-card__go"><?php echo mx_icon('arrow'); ?></span>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ================= CTA ================= -->
    <section class="mx-sec mx-sec--dark mx-cta">
        <span class="mx-cta__mark" aria-hidden="true" data-mx-par="0.08"></span>
        <div class="mx-wrap mx-cta__grid">
            <h2 class="mx-cta__big" data-mx="split">Build what <em>thinks.</em></h2>
            <div class="mx-cta__side" data-mx style="--d:.3s">
                <p>Total students: 60 per batch. Applications are open for 2026–27.</p>
                <div class="mx-actions">
                    <a class="mx-btn mx-btn--green" href="https://admissions.maya.edu.in" rel="noopener"><span>Apply now</span><?php echo mx_icon('arrow'); ?></a>
                    <a class="mx-btn mx-btn--light" href="contact.php"><span>Talk to a counsellor</span></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php mx_foot(); ?>
<?php require "common/footer.php"; ?>
