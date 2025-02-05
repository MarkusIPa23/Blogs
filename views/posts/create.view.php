<?php
$pageTitle = "Izveidot bloga ierakstu";

try {
    $pdo = new PDO("mysql:host=localhost;dbname=blog", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Savienojuma kļūda: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = trim($_POST['content'] ?? '');
    
    if (!empty($content)) {
        $sql = "INSERT INTO posts (content) VALUES (:content)";
        $params = ["content" => $content];

        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);


        header("Location: /");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
</head>
<body>

<ul>
    <li><a href="/">blogi</a></li>
</ul>

<h1>Izveidot bloga ierakstu!</h1>

<form method="POST" onsubmit="return captureContent()">
    <label for="content">Contents:</label>
    <div id="content" contenteditable="true"></div>
    <input type="hidden" id="textContent" name="content">
    <button type="submit">Izveidot</button>
</form>

<script>
    function captureContent() {
        const content = document.getElementById('content').innerText.trim();
        if (content === '') {
            return false;
        }
        document.getElementById('textContent').value = content;
        return true;
    }
</script>

</body>
</html>
