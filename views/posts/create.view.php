<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izveidot bloga ierakstu</title>
</head>
<body>

<ul>
    <li><a href="/">blogi</a></li>
</ul>

<h1>Izveidot bloga ierakstu!</h1>

<form method="POST" onsubmit="return captureContent()">
    <label for="content">Contents:</label>
    <div id="content" contenteditable="true" placeholder="Ievadiet bloga ierakstu..."></div>
    <input type="text" id="textContent" name="content">
    <button type="submit">Izveidot</button>
</form>

<h2>Jaunākais bloga ieraksts:</h2>
<p><?= nl2br(htmlspecialchars($_POST['content'] ?? '')) ?></p>

<script>
    function captureContent() {
        const content = document.getElementById('content').innerText;
        document.getElementById('hiddenContent').value = content;
        return true;
    }
</script>

</body>
</html>
