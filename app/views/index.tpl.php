<?php require_once INCS . "/header.inc.php"; ?>

<div class="container">
    <main class="main">
        <div class="main-content">

            <?php foreach ($posts as $post): ?>
                <article class="card">
                    <h3 class="card-title">
                        <a href="post/<?= $post['slug'] ?>"><?= $post['title'] ?></a>
                    </h3>
                    <p class="card-content"><?= $post['desc'] ?></p>
                </article>
            <?php endforeach; ?>
        </div>
        <?php require_once INCS . "/sidebar.inc.php"; ?>
    </main>
</div>

<?php require_once INCS . "/footer.inc.php"; ?>
