<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Explore Our Blogs</h1>
                            <span class="subheading">the best blogs ever</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php foreach ($wikis as $wiki): ?>
                <div class="post-preview">
                    <a href="index.php?page=wiki&id=<?= $wiki['id'] ?>">
                        <h2 class="post-title"><?= htmlspecialchars($wiki['title']) ?></h2>
                        <h3 class="post-subtitle"><?= htmlspecialchars(substr($wiki['content'], 0, 150)) ?>...</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!"><?= htmlspecialchars($wiki['author_name']) ?></a> <!-- Assuming you have author's name -->
                        on <?= date('F j, Y', strtotime($wiki['date_created'])) ?>
                    </p>
                </div>
                <hr class="my-4" />
            <?php endforeach; ?>
            <!-- Pager -->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
        </div>
    </div>
</div>
        