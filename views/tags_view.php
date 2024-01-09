<style>
    .dashboard-padding {
        padding-top: 4.5rem
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light d-md-none">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse"
        aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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
                        <h3 class="text-white text-center mt-5 mb-4">Managing Tags</h3>
                    </div>
                    <!------------------- start data table----------------------------------------------->
                    <div class="container-xl">
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#addEmployeeModal">
                                    <i class="material-icons">&#xE147;</i> <span>Add New Tags</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive mt-4">
                        <table class="table table-dark table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Thomas Hardy</td>
                                    <td>
                                        <button type="button" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#editEmployeeModal">
                                            <i class="material-icons" data-toggle="tooltip" title="Edit"
                                                style="color: yellow;">&#xE254;</i>
                                        </button>

                                        <button type="button" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#deleteEmployeeModal">
                                            <i class="material-icons" data-toggle="tooltip" title="Delete"
                                                style="color: red;">&#xE872;</i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Add Tag</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-success" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Tag</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-info" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Delete Modal HTML -->
        <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Tag</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete this tag?</p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!------------------- end   data table----------------------------------------------->
    </div>
    </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        // Activate Bootstrap tooltip
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
    });
</script>