<?php
$page_title = "University Events | Maya Devi University Dehradun";
$page_description = "Stay updated with latest events, seminars, workshops, and campus activities at Maya Devi University, Dehradun.";
$canonical_url = "https://maya.edu.in/event.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php"; ?>

<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-3.jpg);">
        <div class="container">
            <h2>Event Grid</h2>
            <p>Check out our latest events and conferences.</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i> Event Grid</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <?php
            $dataFile = __DIR__ . '/admin/data/events.json';

            if (file_exists($dataFile)) {
                $events = json_decode(file_get_contents($dataFile), true);

                uasort($events, function($a, $b) { return strtotime($b['date']) - strtotime($a['date']); });
                if (!empty($events)) {
                    foreach ($events as $id => $event) {

                        $day   = !empty($event['date']) ? date("jS", strtotime($event['date'])) : '';
                        $month = !empty($event['date']) ? date("M", strtotime($event['date'])) : '';
                        $time  = !empty($event['date']) ? date("h:i a", strtotime($event['date'])) : '';

                        $image = !empty($event['image']) ? 'admin/' . $event['image'] : 'assets/img/event/default.jpg';

                        // ✅ ONLY ADDITION (SLUG)
                        $slugText = $event['slug'] ?? $event['title'];
                        $slugText = strtolower($slugText);
                        $slug = preg_replace('/[^a-z0-9]+/', '-', $slugText);
                        $slug = trim($slug, '-');
                        ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="single-event mb-30 event-gray-bg">
                                <div class="event-img">
                                    <!-- ✅ UPDATED LINK -->
                                    <a href="event-details.php?slug=<?= $slug ?>">
                                        <img src="<?php echo htmlspecialchars($image); ?>" alt="">
                                    </a>
                                    <div class="event-date-wrap">
                                        <span class="event-date"><?php echo $day; ?></span>
                                        <span><?php echo $month; ?></span>
                                    </div>
                                </div>
                                <div class="event-content">
                                    <h3>
                                        <!-- ✅ UPDATED LINK -->
                                        <a href="event-details.php?slug=<?= $slug ?>">
                                            <?php echo htmlspecialchars($event['title']); ?>
                                        </a>
                                    </h3>
                                    <p><?php echo strip_tags($event['content']); ?></p>
                                    <div class="event-meta-wrap">
                                        <div class="event-meta">
                                            <i class="fa fa-user"></i>
                                            <span><?php echo htmlspecialchars($event['author']); ?></span>
                                        </div>
                                        <div class="event-meta">
                                            <i class="fa fa-clock-o"></i>
                                            <span><?php echo $time; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                } else {
                    echo "<p class='text-center'>No events available right now.</p>";
                }
            } else {
                echo "<p class='text-center'>Events file not found: " . htmlspecialchars($dataFile) . "</p>";
            }
            ?>
        </div>
    </div>
</div>

<?php require "common/footer.php"; ?>

<style>
/* ✅ Add spacing between cards */
.event-area .col-lg-4,
.event-area .col-md-6 {
    padding: 15px;
}

/* ✅ Uniform image size */
.event-img img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 6px;
}

/* ✅ Card cleanup */
.single-event {
    display: flex;
    flex-direction: column;
    height: auto; /* only as tall as content */
    margin-bottom: 30px;
}

/* ✅ Event content spacing */
.event-content {
    display: flex;
    flex-direction: column;
    flex-grow: 0;
}

.event-content h3 {
    margin-top: 10px;
    margin-bottom: 10px;
}

/* Limit content text to 3 lines */
.event-content p {
    margin-bottom: 10px;
    display: -webkit-box;
    -webkit-line-clamp: 3;  /* show only 3 lines */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}


/* ✅ Keep meta aligned neatly */
.event-meta-wrap {
    display: flex;
    justify-content: space-between;
    margin-top: auto;
}
</style>