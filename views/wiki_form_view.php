<?php
if (!isset($_SESSION['id'])) {
    header("Location: index.php?page=login");
    exit;
}
?>

<section class="min-vh-100 d-flex justify-content-center align-items-center bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h5 class="text-white text-center mt-5 mb-4">Create a New Wiki</h5>
                <form>
                    <div class="form-group mb-3">
                        <input class="form-control py-4 w-100" type="text" placeholder="Wiki Title" required/>
                    </div>
                    <div class="form-group mb-3">
                        <textarea class="form-control py-4 w-100" rows="8" placeholder="Full Article Content" required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="text-white-50">Category:</label>
                        <select class="form-control py-2 w-100" required>
                            <option value="">Select a Category</option>
                            <option value="history">History</option>
                            <option value="science">Science</option>
                            <option value="technology">Technology</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="imageUpload" class="text-white-50">Upload Images:</label>
                        <input type="file" class="form-control-file">
                    </div>
                    <div class="form-group mb-4">
                        <button class="btn btn-primary w-100" type="submit">Create Wiki</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>