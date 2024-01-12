<header class="masthead">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1><?= htmlspecialchars($wiki['title']) ?></h1>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p><?= nl2br(htmlspecialchars($wiki['content'])) ?></p>
                <!-- Optionally, add author and date -->
                <p class="post-meta">
                    Posted by
                    <a href="#!"><?= htmlspecialchars($wiki['name']) ?></a>
                    on <?= date('F j, Y', strtotime($wiki['date_created'])) ?>
                </p>
            </div>
        </div>
    </div>
</article>