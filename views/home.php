<div class="content">
    <h2>Listes de produit</h2>

    <form action="index.php?page=home" method="POST">
        <input type="text" name="name" id="name" placeholder="Nouveau fruit">
        <button type="submit">Envoyer</button>
        <?php if ($error) : ?>
            <span><?= $error ?></span>
        <?php endif; ?>
    </form>

    <ul>
        <?php foreach ($fruits as $fruit) : ?>
            <li><?= $fruit['name'] ?></li>
            <a href="index.php?page=edit&id=<?= $fruit['id'] ?>">Modifier</a>
            <a href="index.php?page=delete&id=<?= $fruit['id'] ?>">Supprimer</a>
        <?php endforeach; ?>
    </ul>
</div>