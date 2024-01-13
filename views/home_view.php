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
             <!-- Search Form -->
<form action="index.php?page=home" method="get" class="search-form">
    <div class="input-group mb-4">
        <input type="text" class="form-control" placeholder="Search wikis..." name="search" id="search-input" aria-label="Search wikis">
        <select name="search_type" id="search-type" class="form-control">
            <option value="title">Title</option>
            <option value="tag">Tag</option>
            <option value="category">Category</option>
        </select>
        <button class="btn btn-outline-primary" type="submit">Search</button>
    </div>
</form>
<div id="search-results-container"></div>
            <?php foreach ($wikis as $wiki): ?>
                <div class="post-preview">
                    <a href="index.php?page=wiki&id=<?= $wiki['id'] ?>">
                        <h2 class="post-title"><?= htmlspecialchars($wiki['title']) ?></h2>
                        <h3 class="post-subtitle"><?= htmlspecialchars(substr($wiki['content'], 0, 150)) ?>...</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!"><?= htmlspecialchars($wiki['author_name']) ?></a>
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

<script>
    const searchInput = document.getElementById("search-input");
    const resultsContainer = document.getElementById("search-results-container");
    const searchType = document.getElementById("search-type");

    searchInput.addEventListener("input", () => {
        if (searchInput.value !== "") {
            getSearchedResults();
        } else {
            resultsContainer.innerHTML = "";
        }
    });

    function getSearchedResults() {
    resultsContainer.innerHTML = "";
    $.get(
        
        `index.php?page=home&search_bar&search_${searchType.value}=true&input_value=${encodeURIComponent(searchInput.value)}`,
        (data) => {
            let searchedData = JSON.parse(data);
            if (searchedData.length === 0) {
                resultsContainer.innerHTML = '<p>No results found.</p>';
                return;
            }

            searchedData.forEach((item) => {
                let itemHtml = `
                    <div class="searched-item my-6">
                        <div class="container">
                            <h2>${item.title}</h2>
                            <p>${item.content.substring(0, 150)}...</p>
                            <a href="index.php?page=wiki&id=${item.id}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                `;
                resultsContainer.innerHTML += itemHtml;
            });
        }
    );
}

</script>
        