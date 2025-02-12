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

<form action="" method="POST">
    <label for="content">Ievadi bloga ierakstu:</label>
    <input type="text" name="content" id="content" value="<?= htmlspecialchars($_POST['content'] ?? '')  ?>">
    
    

    <button type="submit">Saglabāt</button>
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
<?php if (isset($errors["content"])): ?>
        <p class="error"><?= $errors["content"] ?></p>
    <?php endif; ?>

   <?php if (empty($errors)) {} ?>

</body>
</html>
