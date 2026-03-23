<?php require 'auth.php'; ?>

<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

/* ✅ NEW: SLUG FUNCTION */
function createSlug($text) {
    $text = strtolower($text);
    $text = preg_replace('/[^a-z0-9]+/', '-', $text);
    return trim($text, '-');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $author = trim($_POST['author']);
    $date = trim($_POST['date']) ?: date('Y-m-d');
    $content = trim($_POST['content']);

    // ✅ Tags from dropdown
    $tagsArray = $_POST['tags'] ?? [];

    // ✅ CREATE SLUG
    $slug = createSlug($title);

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
    $dataFile = __DIR__ . '/data/blogs.json';
    $blogs = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

    // Generate unique ID
    $id = uniqid();

    // ✅ Add new blog WITH SLUG
    $blogs[$id] = [
        'title' => $title,
        'slug' => $slug, // 🔥 NEW FIELD
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

    // Redirect
    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Blog Post</title>
    <script src="https://cdn.jsdelivr.net/npm/tinymce@6.8.3/tinymce.min.js"></script>

    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background: #f4f6f8; }
        .container { background: #fff; padding: 25px; max-width: 1100px; margin: 20px auto; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; margin-bottom: 20px; }
        input, textarea, select { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 6px; font-size: 1rem; }
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

        <!-- TAG DROPDOWN -->
        <label>Tags (Select Department)</label>
        <select name="tags[]" multiple required size="6">
            <option value="CSE">CSE</option>
            <option value="Engineering">Engineering</option>
            <option value="Pharmacy">Pharmacy</option>
            <option value="Commerce">Commerce</option>
            <option value="HM">HM</option>
            <option value="Life & Applied">Life & Applied</option>
            <option value="Education">Education</option>
            <option value="Agriculture">Agriculture</option>
            <option value="Nursing">Nursing</option>
            <option value="Health Sciences">Health Sciences</option>
            <option value="Paramedical">Paramedical</option>
            <option value="Arts">Arts</option>
            <option value="Law">Law</option>
            <option value="Vocational">Vocational</option>
            <option value="Ashtvakra">Ashtvakra</option>
        </select>

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
    height: 400
});
</script>

</body>
</html>