<?php
$id = $_GET['id'];
require_once '../connection.php';

$sql = "SELECT * FROM blotter WHERE ID ='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>
<?php
require '../connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
  <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Brgy Online Support System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="b.php">Blotter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="accounts.php">Accounts</a>
        </li>
        
      </ul>
      <form action="logout.php" class="d-flex" role="search">
        
        <button class="btn btn-outline-success btn-sm " type="submit">Log Out</button>
      </form>
    </div>
  </div>
</nav>
<div class="container-fluid mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Blotter Issue
                <a  href="b.php" class="btn btn-sm btn-danger float-end">Back</a>
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                            <div class="mb-2">
                                <label for="date" class="form-label">Date Happened</label>
                                <input type="date" name="datehapped" class="form-control" value="<?php echo $row['DATEHAPPEN']?>">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Complainant</label>
                                <input type="text" class="form-control" name="compainant" value="<?php echo $row['COMPLAINANT']?>">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Person to Complain</label>
                                <input type="text" class="form-control" name="personto" value="<?php echo $row['PERSONTOCOMPLAIN']?>">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Location of Incidence</label>
                                <input type="text" name="place"  class="form-control" value="<?php echo $row['PLACEOF']?>">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Description</label>
                                <textarea name="descp"  class="form-control" id="" cols="30" rows="5"><?php echo $row['DESCRIPTION']?>
                                </textarea>
                            </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="text-center">Action</h2>
                    <form action="../controllers.php" method="post">
                        <input type="hidden" name="idb" value="<?php echo $row['ID'];?>">
                        <div class="mb-2">
                            <label for="" class="form-label">Action taken</label>
                            <textarea name="action" class="form-control" id="" cols="30" rows="5"></textarea>
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Status</label>
                            <select name="status" id="" class="form-select">
                                <option value="Resolve">Resolving</option>
                                <option value="Resolve">Resolve</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <button type="submit" name="updateblotter" class="btn btn-sm btn-success float-end">Update Blotter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>