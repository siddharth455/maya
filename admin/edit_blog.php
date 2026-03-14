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
    $tagsInput = $_POST['tags'] ?? '';
    $blogs[$id]['tags'] = array_filter(array_map('trim', explode(',', $tagsInput)));

    // ✅ TOC checkbox
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

    // Save updated blogs to JSON
    $result = file_put_contents($dataFile, json_encode($blogs, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    if (!$result) die("Error: Could not update blog. Check file permissions.");

    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Blog Post</title>
    <script src="https://cdn.jsdelivr.net/npm/tinymce@6.8.3/tinymce.min.js" referrerpolicy="origin"></script>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background: #f4f6f8; }
        .container { background: #fff; padding: 25px; max-width: 1100px; margin: 20px auto; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; margin-bottom: 20px; }
        input, textarea { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 6px; font-size: 1rem; }
        label { font-weight: 600; display: block; margin-bottom: 5px; }
        button { padding: 10px 20px; background: #28a745; color: white; border: none; border-radius: 6px; cursor: pointer; font-size: 1rem; }
        button:hover { background: #1e7e34; }
        .logout { float: right; background-color: #dc3545; color: white; padding: 8px 12px; text-decoration: none; border-radius: 6px; font-size: 0.9rem; }
        .logout:hover { background-color: #c82333; }
        img { border-radius: 6px; margin-top: 10px; }
        .toc-item {
            display: flex;
            align-items: center;
            gap: 8px;
            padding-bottom: 15px;
        }
        .toc-item input[type="checkbox"] {
            margin: 0;
            width: 16px;
            height: 16px;
        }
        .toc-item label {
            margin: 0;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <a class="logout" href="logout.php">Logout</a>
        <h2>Edit Blog Post</h2>
        <form method="post" enctype="multipart/form-data">
            <label>Title</label>
            <input type="text" name="title" value="<?= htmlspecialchars($blogs[$id]['title']) ?>" required>

            <label>Author</label>
            <input type="text" name="author" value="<?= htmlspecialchars($blogs[$id]['author'] ?? '') ?>">

            <label>Date</label>
            <input type="date" name="date" value="<?= htmlspecialchars($blogs[$id]['date'] ?? '') ?>">

            <label>Tags (comma separated)</label>
            <input type="text" name="tags" value="<?= htmlspecialchars(implode(', ', $blogs[$id]['tags'] ?? [])) ?>">

            <label>Content</label>
            <textarea name="content" id="editor"><?= htmlspecialchars($blogs[$id]['content']) ?></textarea>

            <label>Current Image</label><br>
            <?php if (!empty($blogs[$id]['image'])): ?>
                <img src="<?= $blogs[$id]['image'] ?>" alt="Blog Image" width="200"><br>
            <?php else: ?>
                <p>No image uploaded.</p>
            <?php endif; ?>

            <label>Replace Image</label>
            <input type="file" name="image">

            <!-- TOC checkbox -->
            <div class="toc-item">
                <input type="checkbox" id="toc1" name="enable_toc" <?= !empty($blogs[$id]['show_toc']) ? 'checked' : '' ?> />
                <label for="toc1">Show Table of Contents</label>
            </div>

            <button type="submit">Update Blog Post</button>
        </form>
    </div>

    <script>
        tinymce.init({
            selector: '#editor',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount toc',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media | align lineheight | numlist bullist checklist | emoticons charmap | table | toc | removeformat',
            height: 300
        });
    </script>
</body>
</html>
