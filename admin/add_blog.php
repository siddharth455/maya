<?php require 'auth.php'; ?>

<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $author = trim($_POST['author']);
    $date = trim($_POST['date']) ?: date('Y-m-d'); // default to today
    $content = trim($_POST['content']);
    $tagsInput = $_POST['tags'] ?? '';
    $tagsArray = array_filter(array_map('trim', explode(',', $tagsInput)));

    // TOC checkbox
    $enableTOC = isset($_POST['enable_toc']);

    // Upload image
    $uploadDir = __DIR__ . '/uploads/';
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0775, true);

    $imagePath = '';
    if (!empty($_FILES['image']['name'])) {
        $imageName = time() . "_" . basename($_FILES['image']['name']);
        $targetPath = $uploadDir . $imageName;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
            $imagePath = 'admin/uploads/' . $imageName;
        }
    }

    // Load existing blogs
    $dataFile = __DIR__ . '/data/blogs.json'; // correct path
    $blogs = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

    // Generate unique ID
    $id = uniqid();

    // Add new blog
    $blogs[$id] = [
        'title' => $title,
        'author' => $author,
        'date' => $date,
        'content' => $content,
        'image' => $imagePath,
        'tags' => $tagsArray,
        'show_toc' => $enableTOC
    ];

    // Save to JSON
    $result = file_put_contents($dataFile, json_encode($blogs, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    if (!$result) {
        die("Error: Could not save blog. Check file permissions.");
    }

    // Redirect to admin dashboard
    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Blog Post</title>
    <script src="https://cdn.jsdelivr.net/npm/tinymce@6.8.3/tinymce.min.js" referrerpolicy="origin"></script>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background: #f4f6f8; }
        .container { background: #fff; padding: 25px; max-width: 1100px; margin: 20px auto; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; margin-bottom: 20px; }
        input, textarea { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 6px; font-size: 1rem; }
        label { font-weight: 600; display: block; margin-bottom: 5px; }
        button { padding: 10px 20px; background: #007BFF; color: white; border: none; border-radius: 6px; cursor: pointer; font-size: 1rem; }
        button:hover { background: #0056b3; }
        .logout { float: right; background-color: #dc3545; color: white; padding: 8px 12px; text-decoration: none; border-radius: 6px; font-size: 0.9rem; }
        .logout:hover { background-color: #c82333; }
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
        <h2>Add New Blog Post</h2>
        <form method="post" enctype="multipart/form-data">
            <label>Title</label>
            <input type="text" name="title" required>

            <label>Author</label>
            <input type="text" name="author">

            <label>Date</label>
            <input type="date" name="date">

            <label>Tags (comma separated)</label>
            <input type="text" name="tags" placeholder="e.g. Education, Scholarships">

            <label>Content</label>
            <textarea name="content" id="editor"></textarea>

            <label>Upload Image</label>
            <input type="file" name="image">

            <div class="toc-item">
                <input type="checkbox" id="toc1" name="enable_toc" />
                <label for="toc1">Show Table of Contents</label>
            </div>

            <button type="submit">Add Post</button>
        </form>
    </div>

    <script>
        tinymce.init({
            selector: '#editor',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount toc',
            toolbar: 'undo redo | blocks | bold italic underline | link image media | align lineheight | numlist bullist checklist | table | removeformat',
            height: 400,
            toc_depth: 3,
            toc_header: 'Table of Contents'
        });
    </script>
</body>
</html>
