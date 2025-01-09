<?php require "components/header.php" ?>
<?php require "components/navbar.php" ?>
 <h1>Blogs</h1>


<form>
<input name='search_query' value='<?=$_GET["search_query"] ?? "" ?>' />
<button>Meklet</button>
</form>

<?php if (count($posts) == 0) { ?>
<p>Ei nahui</p>
<?php } ?>

<ul>
<?php foreach ($posts as $post){ ?>
    <li> <?= $post["content"] ?> </li>
<?php } ?>
</ul>
    
</body>
</html>

