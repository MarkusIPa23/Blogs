<?php include_once 'views/components/header.php'; ?>

<h1>Izveidot bloga ierakstu!</h1>

<form method="POST">
    <label>
        Nosaukums:
        <input name="content"required />
    </label>
    <br>
    <label>
        Ieraksta saturs:
        <textarea name="content" required></textarea>
    </label>
    <br>
    <button type="submit">Ievietot</button>
</form>

<?php include_once 'views/components/footer.php'; ?>
