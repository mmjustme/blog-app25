<?php  require_once VIEWS_INC . "/header.inc.php"; ?>

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
        <div class="main-sidebar">
            <div class="sidebar-group">
                <h3>Recent Posts</h3>
                <ul>
                    <?php foreach ($res_posts as $res_post): ?>
                        <li>
                            <a href="post/<?= $res_post['slug'] ?>"><?= $res_post['title'] ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </main>

</div>

<?php require_once VIEWS_INC . "/footer.inc.php"; ?>
