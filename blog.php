<?php
$page_title = "University Blog | Maya Devi University Dehradun";
$page_description = "Read the latest updates, academic news, research insights, and campus activities at Maya Devi University, Dehradun.";
$canonical_url = "https://maya.edu.in/blog.php";
$og_image = "https://maya.edu.in/assets/uploads/campus-2.jpeg";
?>
<?php require "common/header.php"?>

<?php
// Load blogs dynamically
$dataFile = __DIR__ . "/admin/data/blogs.json";
$blogs = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

// Collect categories
$allCategories = [];
foreach($blogs as $b) {
    if(!empty($b['tags'])) {
        foreach($b['tags'] as $t) $allCategories[$t]=true;
    }
}
$categories = array_keys($allCategories);
sort($categories);
array_unshift($categories, 'All'); // Add "All"

// Get selected category
$selectedCategory = $_GET['category'] ?? 'All';

// Filter by category
$filteredBlogs = [];
foreach($blogs as $id => $b) {
    if($selectedCategory === 'All' || in_array($selectedCategory, $b['tags'] ?? [])) {
        $filteredBlogs[$id] = $b;
    }
}

// Search filter
$searchQuery = trim($_GET['search'] ?? '');
if($searchQuery) {
    $filteredBlogs = array_filter($filteredBlogs, function($b) use($searchQuery){
        return stripos($b['title'], $searchQuery)!==false || stripos($b['content'], $searchQuery)!==false;
    });
}

// Pagination
$perPage = 9;
$totalBlogs = count($filteredBlogs);
$totalPages = ceil($totalBlogs/$perPage);
$page = max(1, intval($_GET['page'] ?? 1));
$offset = ($page-1)*$perPage;
$blogsPage = array_slice(array_reverse($filteredBlogs, true), $offset, $perPage, true);
?>

<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url(assets/uploads/maya.webp);">
        <div class="container">
            <h2>Blogs</h2>
            <p>Explore the latest insights, campus stories, and academic innovations from Maya Devi University — where ideas shape the future.</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Blog Grid</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <!-- Blog Grid -->
            <div class="col-xl-9 col-lg-8">
                <div class="blog-all-wrap mr-40">
                    <div class="row">
                        <?php if(!empty($blogsPage)): ?>
                            <?php foreach($blogsPage as $id => $b):
                                $img = $b['image'] ?? 'assets/img/blog/default.jpg';
                                $title = $b['title'] ?? '';
                                $excerpt = substr(strip_tags($b['content']),0,100).'...';
                                $author = $b['author'] ?? 'Admin';
                                $date = $b['date'] ?? '';
                                $tags = $b['tags'] ?? [];
                            ?>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 d-flex mb-3">
                                <div class="single-blog  d-flex flex-column" style="flex:1;">
                                    <div class="blog-img">
                                        <a href="blog-single.php?id=<?=$id?>"><img src="<?=$img?>" alt="<?=$title?>"></a>
                                    </div>
                                    <div class="blog-content-wrap d-flex flex-column flex-grow-1">
                                        <?php if(!empty($tags)) echo "<span>".htmlspecialchars($tags[0])."</span>"; ?>
                                        <div class="blog-content flex-grow-1">
                                            <h4><a href="blog-single.php?id=<?=$id?>"><?=$title?></a></h4>
                                            <p><?=$excerpt?></p>
                                        </div>
                                        <div class="blog-meta d-flex justify-content-between align-items-center mt-auto">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-user"></i> <?=$author?></a></li>
                                            </ul>
                                            <div class="blog-date">
                                                <a href="#"><i class="fa fa-calendar-o"></i> <?=$date?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No blogs found.</p>
                        <?php endif; ?>
                    </div>

                    <!-- Pagination -->
                    <?php if($totalPages>1): ?>
                        <div class="pro-pagination-style text-center mt-25">
                            <ul>
                                <?php if($page>1): ?>
                                    <li><a class="prev" href="?page=<?=$page-1?>&category=<?=urlencode($selectedCategory)?>&search=<?=urlencode($searchQuery)?>"><i class="fa fa-angle-double-left"></i></a></li>
                                <?php endif; ?>
                                <?php for($p=1;$p<=$totalPages;$p++): ?>
                                    <li><a class="<?=($p==$page?'active':'')?>" href="?page=<?=$p?>&category=<?=urlencode($selectedCategory)?>&search=<?=urlencode($searchQuery)?>"><?=$p?></a></li>
                                <?php endfor; ?>
                                <?php if($page<$totalPages): ?>
                                    <li><a class="next" href="?page=<?=$page+1?>&category=<?=urlencode($selectedCategory)?>&search=<?=urlencode($searchQuery)?>"><i class="fa fa-angle-double-right"></i></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-style">
                    <!-- Search -->
                    <div class="sidebar-search mb-40">
                        <div class="sidebar-title mb-40"><h4>Search</h4></div>
                        <form method="get" action="blog.php">
                            <input type="text" name="search" placeholder="Search" value="<?=htmlspecialchars($searchQuery)?>">
                            <input type="hidden" name="category" value="<?=htmlspecialchars($selectedCategory)?>">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <!-- About Us -->
                    <div class="sidebar-about mb-40">
                        <div class="sidebar-title mb-15"><h4>About Us</h4></div>
                        <p>Maya Devi University, Dehradun, is dedicated to fostering academic excellence and holistic development through innovative education, research, and industry collaboration.</p>
                     
                        <div class="sidebar-social">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="sidebar-tag-wrap mb-35">
                        <div class="sidebar-title mb-40"><h4>Categories</h4></div>
                        <div class="sidebar-tag">
                            <ul>
                                <?php foreach($categories as $cat): ?>
                                    <li><a href="blog.php?category=<?=urlencode($cat)?>&search=<?=urlencode($searchQuery)?>" <?=($cat==$selectedCategory?'style="font-weight:bold;"':'')?>><?=htmlspecialchars($cat)?></a></li>
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
.single-blog {
    display: flex;
    flex-direction: column;
    height: 100%;
    border: 1px solid #eee;
    border-radius: 8px;
    overflow: hidden;
    background: #fff;
}
.single-blog .blog-img {
    width: 100%;
    height: 200px;
    overflow: hidden;
    flex-shrink: 0;
}
.single-blog .blog-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.single-blog .blog-content-wrap {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
    padding: 5px;
}
.single-blog .blog-content {
    flex-grow: 2;
}
.pro-pagination-style {
    margin-top: 40px;
}
</style>

<?php require "common/footer.php"?>
