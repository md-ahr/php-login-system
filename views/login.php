<?php include_once "./partials/header.php"; ?>

    <div class="container d-grid align-items-center w-25 h-100">
        <div class="card border-0 shadow-sm">
            <div class="card-header border-bottom-0 px-4">
                <h5 class="text-capitalize py-3 px-2 mb-0">Login form</h5>
            </div>
            <div class="card-body p-4">
                <form action="" method="post" class="px-2">
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control py-2" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control py-2" />
                    </div>
                    <div class="form-group mt-4 mb-2">
                        <input type="submit" class="btn btn-primary fw-semibold px-4 py-2" value="Submit" />
                    </div>
                    <div class="mt-3">
                        <p class="small mb-0">Don't have any account? Please <a href="/php/login-system/views/register.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include_once "./partials/header.php"; ?>