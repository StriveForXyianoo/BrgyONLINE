<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid mt-5">
        <div class="card">
            <div class="card-header">
                <h5>Please Complete All Information</h5>
            </div>
            <div class="card-body">
               <form action="controllers.php" method="post">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-2">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" name="lastname" id="lastname" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="firstname" class="form-label">First  Name</label>
                            <input type="text" name="firstname" id="firstname" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="middlename" class="form-label">Middle Initial</label>
                            <input type="text" name="middlename" id="middlename" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="age" class="form-label">Age</label>
                            <input type="text" name="age" id="age" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="age" class="form-label">Civil Status</label>
                            <input type="text" name="civil" id="civil" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="mb-2">
                            <label for="street" class="form-label">Street</label>
                            <input type="text" name="street" id="street" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="purok" class="form-label">Purok</label>
                            <input type="text" name="purok" id="purok" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="barangay" class="form-label">Barangay</label>
                            <input type="text" name="barangay" id="barangay" value="Bliss Village, City of ilagan, Isabela" class="form-control" readonly>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="mb-2">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="mb-2"><label for="Contact Number" class="form-label">Contact Number</label>
                            <input type="text" name="contact" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="mb-2">
                            <button type="submit" name="addres" class="btn btn-sm btn-primary float-end">Submit</button>
                            
                        </div>
                    </div>
                </div>
               </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>