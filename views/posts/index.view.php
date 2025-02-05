<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>
 <h1>Blogs</h1>


<form>
<input value='<?= $_GET['content'] ?? "" ?>'  name='content'/>
<button>Meklet</button>
</form>

<ul>
<?php foreach ($posts as $post){ ?>
    <li><a href="show?id=<?= $post["id"] ?>"> <?= htmlspecialchars($post["content"]) ?></a></li>
<?php } ?>
</ul>

<?php require "views/components/footer.php" ?>
