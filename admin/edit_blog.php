<?php require 'auth.php'; ?>

<?php
// Enable error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

$dataFile = __DIR__ . "/data/blogs.json";
$blogs = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

$id = $_GET['id'] ?? '';
if (!isset($blogs[$id])) exit("Blog post not found.");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $blogs[$id]['title'] = trim($_POST['title']);
    $blogs[$id]['author'] = trim($_POST['author']);
    $blogs[$id]['date'] = trim($_POST['date']) ?: date('Y-m-d');
    $blogs[$id]['content'] = trim($_POST['content']);

    // ✅ UPDATED TAG HANDLING
    $blogs[$id]['tags'] = $_POST['tags'] ?? [];

    // TOC checkbox
    $blogs[$id]['show_toc'] = isset($_POST['enable_toc']);

    // Image upload
    if (!empty($_FILES['image']['name'])) {
        $uploadDir = __DIR__ . '/uploads/';
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0775, true);
        $imageName = time() . "_" . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . $imageName)) {
            $blogs[$id]['image'] = 'admin/uploads/' . $imageName;
        }
    }

    // Save updated blogs
    $result = file_put_contents($dataFile, json_encode($blogs, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    if (!$result) die("Error: Could not update blog. Check file permissions.");

    header("Location: admin.php");
    exit();
}

// existing tags for pre-select
$currentTags = $blogs[$id]['tags'] ?? [];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Blog Post</title>
    <script src="https://cdn.jsdelivr.net/npm/tinymce@6.8.3/tinymce.min.js"></script>

    <style>
        body { font-family: Arial; padding: 20px; background: #f4f6f8; }
        .container { background: #fff; padding: 25px; max-width: 1100px; margin: auto; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        input, textarea, select { width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 6px; }
        label { font-weight: 600; }
        button { padding: 10px 20px; background: #28a745; color: #fff; border: none; border-radius: 6px; }
        img { border-radius: 6px; margin-top: 10px; }
    </style>
</head>

<body>
<div class="container">
    <h2>Edit Blog Post</h2>

    <form method="post" enctype="multipart/form-data">

        <label>Title</label>
        <input type="text" name="title" value="<?= htmlspecialchars($blogs[$id]['title']) ?>" required>

        <label>Author</label>
        <input type="text" name="author" value="<?= htmlspecialchars($blogs[$id]['author'] ?? '') ?>">

        <label>Date</label>
        <input type="date" name="date" value="<?= htmlspecialchars($blogs[$id]['date'] ?? '') ?>">

        <!-- ✅ TAG DROPDOWN WITH PRESELECT -->
        <label>Tags</label>
        <select name="tags[]" multiple size="6" required>
            <?php
            $allTags = [
                "CSE","Engineering","Pharmacy","Commerce","HM",
                "Life & Applied","Education","Agriculture","Nursing",
                "Health Sciences","Paramedical","Arts","Law","Vocational","Ashtvakra"
            ];

            foreach ($allTags as $tag) {
                $selected = in_array($tag, $currentTags) ? 'selected' : '';
                echo "<option value='$tag' $selected>" . ucfirst($tag) . "</option>";
            }
            ?>
        </select>

        <label>Content</label>
        <textarea name="content" id="editor"><?= htmlspecialchars($blogs[$id]['content']) ?></textarea>

        <label>Current Image</label><br>
        <?php if (!empty($blogs[$id]['image'])): ?>
            <img src="<?= $blogs[$id]['image'] ?>" width="200"><br>
        <?php endif; ?>

        <label>Replace Image</label>
        <input type="file" name="image">

        <div>
            <input type="checkbox" name="enable_toc" <?= !empty($blogs[$id]['show_toc']) ? 'checked' : '' ?>>
            Show Table of Contents
        </div>

        <button type="submit">Update Blog</button>
    </form>
</div>

<script>
tinymce.init({
    selector: '#editor',
    height: 300
});
</script>

</body>
</html>