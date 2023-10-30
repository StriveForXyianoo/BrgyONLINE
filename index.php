<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <script src="https://kit.fontawesome.com/035aa9de22.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
    h2{
        font-family: Arial, Helvetica, sans-serif;
        font-size: x-large;
    }
</style>
</head>
<body>
    <div class="containter mt-5">
        <h2 class="text-center">Barangay Online Support System</h2>

        <div class="row mt-5">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="tex-center">Please Log In</h5>
                    </div>
                    <div class="card-body">
                        <form action="controllers.php" method="post">
                            <div class="mb-2">
                                <label for="" class="frorm-label"><i class="fa-solid fa-envelope"></i> &nbsp;&nbsp;Email</label>
                                <input type="email" name="username" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <label for="" class="frorm-label"><i class="fa-solid fa-lock"></i> &nbsp;&nbsp;Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="mb-2">
                                <button type="submit" name="login" class="btn btn-sm btn-primary"><i class="fa-solid fa-right-to-bracket"></i> &nbsp;&nbsp;Log In</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <a href="createaccount.php" class="float-end"> <i class="fa-solid fa-plus"></i>&nbsp;&nbsp;Create Account</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>