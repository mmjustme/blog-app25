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
