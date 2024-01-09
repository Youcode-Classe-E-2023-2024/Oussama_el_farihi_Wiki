<section class="min-vh-100 d-flex justify-content-center align-items-center bg-dark">
    <div class="container-fluid">
        <div class="row">
            <!-- Dashboard Sidebar -->
            <div class="col-md-2 bg-secondary min-vh-100">
                <h4 class="text-white p-3">Dashboard</h4>
                <!-- Sidebar content like navigation links can go here -->
            </div>
            
            <!-- Dashboard Content -->
            <div class="col-md-10">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="text-white text-center mt-5 mb-4">Statistics & Charts</h3>
                    </div>
                </div>
                
                <!-- Statistics Cards -->
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
                
                <!-- Charts Row -->
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <!-- Chart container -->
                        <div class="bg-white p-4 rounded">
                            <canvas id="visitsChart"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <!-- Chart container -->
                        <div class="bg-white p-4 rounded">
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Include Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Example of initializing a chart using Chart.js
    const visitsCtx = document.getElementById('visitsChart').getContext('2d');
    const visitsChart = new Chart(visitsCtx, {
        // Chart configuration goes here
    });

    const salesCtx = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(salesCtx, {
        // Chart configuration goes here
    });
</script>
