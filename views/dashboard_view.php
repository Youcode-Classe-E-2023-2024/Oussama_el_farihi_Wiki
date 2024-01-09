<style>
    .dashboard-padding {
        padding-top: 4.5rem
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light d-md-none">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>

<section class="dashboard-padding bg-dark">
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-2 bg-secondary d-none d-md-block min-vh-100">
                <h4 class="text-white p-3"><a class="text-white" href="index.php?page=dashboard">Dashboard</a></h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php?page=categories">Manage Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php?page=tags">Manage Tags</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php?page=archive">Archive Wikis</a>
                    </li>
                </ul>
            </div>

            <div class="collapse d-md-none" id="sidebarCollapse">
                <div class="bg-secondary p-3">
                    <h4 class="text-white">Dashboard</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php?page=categories">Manage Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php?page=tags">Manage Tags</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php?page=archive">Archive Wikis</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-10">
            <div class="row">
                    <div class="col-lg-12">
                        <h3 class="text-white text-center mt-5 mb-4">Statistics & Charts</h3>
                    </div>
                </div>
                
                
                <div class="row text-white mb-4">
                    <div class="col-md-4 mb-3">
                        <div class="card bg-primary">
                            <div class="card-body">
                                <h5 class="card-title">Total Visits</h5>
                                <h2 class="card-text">1,234</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card bg-success">
                            <div class="card-body">
                                <h5 class="card-title">New Users</h5>
                                <h2 class="card-text">567</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card bg-info">
                            <div class="card-body">
                                <h5 class="card-title">Total Sales</h5>
                                <h2 class="card-text">$8,924</h2>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="bg-white p-4 rounded">
                            <canvas id="visitsChart"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="bg-white p-4 rounded">
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>