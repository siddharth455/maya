<?php
$page_title = "University Events & Activities | Maya Devi University Dehradun";
$page_description = "Explore latest events, seminars, workshops, and academic activities at Maya Devi University, Dehradun.";
$canonical_url = "https://maya.edu.in/event-details.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>

<?php
// Load events FIRST (IMPORTANT)
$dataFile = __DIR__ . '/admin/data/events.json';
$events = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

// ✅ SLUG FUNCTION (ADDED)
function createSlug($text) {
    $text = strtolower($text);
    $text = preg_replace('/[^a-z0-9]+/', '-', $text);
    return trim($text, '-');
}

// ✅ GET BY SLUG (REPLACED ID LOGIC)
$slug = $_GET['slug'] ?? '';
$event = null;

foreach ($events as $key => $e) {
    $checkSlug = createSlug($e['slug'] ?? $e['title']);
    if ($checkSlug === createSlug($slug)) {
        $event = $e;
        break;
    }
}

// More events (excluding current)
$moreEvents = [];
foreach ($events as $key => $e) {
    if ($event && $event['title'] === $e['title']) continue;
    $moreEvents[$key] = $e;
}
?>
<?php
$base_path = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\') . '/';
?>
<base href="<?= $base_path ?>">
<?php require "common/header.php"; ?>

<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95"
         style="background-image:url(assets/img/bg/breadcrumb-bg-2.jpg);">
        <div class="container">
            <h2>Event Details</h2>
            <p>Learn more about this event and its details.</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="event.php">Home</a>
                    <span><i class="fa fa-angle-double-right"></i>Event Details</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="event-details-area pt-130">
    <div class="container">
        <div class="row">
            <!-- LEFT MAIN CONTENT -->
            <div class="col-xl-9 col-lg-8">
                <div class="event-left-wrap mr-40">
                    <div class="event-description">
                        <?php if ($event): ?>

                            <?php if (!empty($event['image'])): ?>
                                <img src="<?php echo 'admin/' . htmlspecialchars($event['image']); ?>"
                                     alt="<?php echo htmlspecialchars($event['title']); ?>"
                                     class="event-detail-img">
                            <?php endif; ?>

                            <?php
                                $date = strtotime($event['date']);
                                $day = date("jS", $date);
                                $month = date("M", $date);
                                $time = date("h:i a", $date);
                            ?>
                            <div class="event-date-green">
                                <span><i class="fa fa-calendar"></i> <?php echo "$day $month"; ?></span>
                                <span><i class="fa fa-clock-o"></i> <?php echo "$time"; ?></span>
                            </div>

                            <h3 class="mt-20"><?php echo htmlspecialchars($event['title']); ?></h3>
                            <div class="event-meta-author mb-10">
                                <i class="fa fa-user"></i>
                                <span>By <?php echo htmlspecialchars($event['author']); ?></span>
                            </div>

                            <div class="event-content"><?php echo $event['content']; ?></div>

                        <?php else: ?>
                            <h3>Event not found!</h3>
                            <p>The event you are looking for does not exist or has been removed.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- SIDEBAR -->
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-style">
                    <div class="sidebar-about mb-40">
                        <div class="sidebar-title mb-20">
                            <h4>More Events</h4>
                        </div>

                        <?php if (!empty($moreEvents)): ?>
                            <div class="more-events-grid">
                                <?php 
                                $count = 0;
                                foreach ($moreEvents as $key => $ev): 
                                    if ($count++ >= 4) break;

                                    $evDate = strtotime($ev['date']);
                                    $evDay = date("jS", $evDate);
                                    $evMonth = date("M", $evDate);
                                    $evTime = date("h:i a", $evDate);

                                    $shortDesc = strip_tags($ev['content']);
                                    $words = explode(" ", $shortDesc);
                                    $shortText = implode(" ", array_slice($words, 0, 7)) . "...";

                                    // ✅ SLUG FOR SIDEBAR
                                    $evSlug = createSlug($ev['slug'] ?? $ev['title']);
                                ?>
                                    <div class="event-card">
                                        <!-- ✅ UPDATED LINK -->
                                        <a href="event-details.php?slug=<?= $evSlug ?>">
                                            <div class="event-card-img">
                                                <img src="<?php echo 'admin/' . htmlspecialchars($ev['image']); ?>" 
                                                     alt="<?php echo htmlspecialchars($ev['title']); ?>">
                                            </div>
                                            <div class="event-card-body">
                                                <h5><?php echo htmlspecialchars($ev['title']); ?></h5>
                                                <p class="event-card-date">
                                                    <i class="fa fa-calendar"></i> <?php echo "$evDay $evMonth"; ?>
                                                    &nbsp;
                                                    <i class="fa fa-clock-o"></i> <?php echo $evTime; ?>
                                                </p>
                                                <p class="event-card-desc"><?php echo htmlspecialchars($shortText); ?></p>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php else: ?>
                            <p>No other events available.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
/* =========== MAIN EVENT SECTION =========== */
.event-detail-img {
    width: 100%;
    height: 500px;
    object-fit: cover;
    border-radius: 8px;
    display: block;
    margin-bottom: 15px;
}

.event-date-green {
    background: #1fa463;
    color: #fff;
    padding: 10px 18px;
    border-radius: 5px;
    display: inline-flex;
    gap: 15px;
    align-items: center;
    font-size: 14px;
    font-weight: 500;
}

.event-date-green i {
    margin-right: 5px;
    color: #fff;
}

.event-meta-author {
    color: #555;
    font-size: 14px;
    margin-top: 10px;
}

.event-content p {
    margin-bottom: 20px;
    color: #444;
    line-height: 1.7;
}

/* =========== SIDEBAR SECTION =========== */
.sidebar-title h4 {
    font-weight: 700;
    font-size: 18px;
    border-left: 4px solid #1fa463;
    padding-left: 10px;
}

.more-events-grid {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.event-card {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.event-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.12);
}

.event-card a {
    text-decoration: none;
    color: inherit;
    display: block;
}

.event-card-img img {
    width: 100%;
    height: 160px;
    object-fit: cover;
    display: block;
}

.event-card-body {
    padding: 12px 14px;
}

.event-card-body h5 {
    font-size: 15px;
    font-weight: 600;
    color: #222;
    margin-bottom: 8px;
}

.event-card-date {
    font-size: 13px;
    color: #1fa463;
    font-weight: 500;
    margin-bottom: 6px;
}

.event-card-date i {
    margin-right: 4px;
}

.event-card-desc {
    font-size: 13px;
    color: #666;
    line-height: 1.5;
}
</style>
<?php
$base_path = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\') . '/';
?>
<base href="<?= $base_path ?>">
<?php require "common/footer.php"; ?>