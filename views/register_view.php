<section class="min-vh-100 d-flex justify-content-center align-items-center bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h5 class="text-white text-center mt-5 mb-4">Create Your Account</h5>
                <form id="registerForm">
                    <div class="form-group mb-3">
                        <input class="form-control py-4 w-100" name="name" type="text" placeholder="Full Name" required/>
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control py-4 w-100" name="email" type="email" placeholder="Email Address" required/>
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control py-4 w-100" name="password" type="password" placeholder="Password" required/>
                    </div>
                    <div class="form-group mb-4">
                        <button class="btn btn-primary w-100" name="submit" type="submit">Register</button>
                    </div>
                    <div class="text-center">
                        <span class="text-white-50">Already have an account?</span>
                        <a href="index.php?page=login" class="text-primary font-weight-bold">Login here <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    document.getElementById('registerForm').addEventListener('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);

    fetch('index.php?page=register', {
            method: 'post',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
</script>