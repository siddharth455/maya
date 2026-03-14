<?php require "common/header.php"; ?>

<?php
// Load blogs
$dataFile = __DIR__ . "/admin/data/blogs.json";
$blogs = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

// Get blog by ?id= param
$blogId = $_GET['id'] ?? null;
if (!$blogId || !isset($blogs[$blogId])) {
    die("<h2>Blog not found</h2>");
}
$blog = $blogs[$blogId];

// Prepare data
$title = $blog['title'];
$author = $blog['author'] ?? 'Admin';
$date = $blog['date'] ?? '';
$image = $blog['image'] ?? "assets/img/blog/default.jpg";
$content = $blog['content'];
$tags = $blog['tags'] ?? [];
$showToc = $blog['show_toc'] ?? false; // check if TOC is enabled

// For sidebar: sort blogs by latest
$recentBlogs = array_slice(array_reverse($blogs, true), 0, 5, true);

// Collect categories from all blogs
$categories = [];
foreach ($blogs as $b) {
    if (!empty($b['tags'])) {
        foreach ($b['tags'] as $t) {
            $categories[$t] = true;
        }
    }
}
$categories = array_keys($categories);

// Generate TOC if enabled
$tocHtml = '';
if ($showToc) {
    preg_match_all('/<h([1-6])>(.*?)<\/h[1-6]>/', $content, $matches, PREG_SET_ORDER);
    if ($matches) {
        $tocHtml .= '<div class="blog-toc mb-30"><h4>Table of Contents</h4><ul>';
        $usedSlugs = [];
        foreach ($matches as $match) {
            $level = $match[1];
            $text = strip_tags($match[2]);
            $slug = strtolower(trim(preg_replace('/[^a-z0-9]+/', '-', $text), '-'));

            // Ensure slug is unique
            $originalSlug = $slug;
            $i = 1;
            while (in_array($slug, $usedSlugs)) {
                $slug = $originalSlug . '-' . $i;
                $i++;
            }
            $usedSlugs[] = $slug;

            // Add id to heading in content
            $content = str_replace($match[0], "<h$level id='$slug'>{$match[2]}</h$level>", $content);

            // TOC item without checkbox
            $tocHtml .= "<li class='toc-level-$level'><a href='#$slug'>$text</a></li>";
        }
        $tocHtml .= '</ul></div>';
    }
}
?>

<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" 
        style="background-image:url(assets/uploads/maya.webp);">
        <div class="container">
            <h2>Blog Details</h2>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i> Blog Details</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <!-- Blog Content -->
            <div class="col-xl-9 col-lg-8">
                <div class="blog-details-wrap mr-40">
                    <div class="blog-details-top">
                        <img src="<?php echo $image; ?>" alt="">
                        <div class="blog-details-content-wrap">
                            <div class="b-details-meta-wrap">
                                <div class="b-details-meta">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> <?php echo htmlspecialchars($date); ?></li>
                                        <li><i class="fa fa-user"></i> <?php echo htmlspecialchars($author); ?></li>
                                    </ul>
                                </div>
                                <?php if (!empty($tags)) : ?>
                                    <span><?php echo htmlspecialchars($tags[0]); ?></span>
                                <?php endif; ?>
                            </div>

                            <h3><?php echo htmlspecialchars($title); ?></h3>

                            <!-- Table of Contents -->
                            <?php if ($tocHtml) echo $tocHtml; ?>

                            <!-- Blog Content -->
                            <?php echo $content; ?>

                            <!-- Tags -->
                            <div class="blog-share-tags">
                                <div class="blog-tag">
                                    <ul>
                                        <?php foreach ($tags as $tag): ?>
                                            <li><a href="#"><?php echo htmlspecialchars($tag); ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-style">

                    <!-- Recent Posts -->
                    <div class="sidebar-recent-post mb-35">
                        <div class="sidebar-title mb-40">
                            <h4>Recent Posts</h4>
                        </div>
                        <div class="recent-post-wrap">
                            <?php foreach ($recentBlogs as $id => $b): ?>
                                <div class="single-recent-post">
                                    <div class="recent-post-img">
                                        <a href="blog-single.php?id=<?php echo $id; ?>">
                                            <img src="<?php echo $b['image'] ?? 'assets/img/blog/default.jpg'; ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h5><a href="blog-single.php?id=<?php echo $id; ?>">
                                            <?php echo htmlspecialchars($b['title']); ?>
                                        </a></h5>
                                        <span><?php echo htmlspecialchars($b['author'] ?? "Admin"); ?></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="sidebar-tag-wrap">
                        <div class="sidebar-title mb-40">
                            <h4>Categories</h4>
                        </div>
                        <div class="sidebar-tag">
                            <ul>
                                <?php foreach ($categories as $cat): ?>
                                    <li><a href="#"><?php echo htmlspecialchars($cat); ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* TOC styling */
.blog-toc {
    border: 1px solid #ddd;
    padding: 15px;
    background: #f9f9f9;
    border-radius: 5px;
}

.blog-toc ul {
    list-style: none;
    padding-left: 0;
    margin: 0;
}

.blog-toc li {
    margin-bottom: 8px;
}

.blog-toc li a {
    text-decoration: none;
    color: #007bff;
}

.blog-toc li a:hover {
    text-decoration: underline;
}

/* Indent TOC by heading level */
.toc-level-2 { padding-left: 15px; }
.toc-level-3 { padding-left: 30px; }
.toc-level-4 { padding-left: 45px; }
.toc-level-5 { padding-left: 60px; }
.toc-level-6 { padding-left: 75px; }
</style>

<script>
// Smooth scroll for TOC links
document.querySelectorAll('.blog-toc a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            window.scrollTo({
                top: target.offsetTop - 100, // adjust offset if header exists
                behavior: 'smooth'
            });
        }
    });
});
</script>

<?php require "common/footer.php"; ?>
