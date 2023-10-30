<?php
session_start();
$id = $_SESSION['id'];
require_once '../connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residence</title>
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
      </ul>
      <form action="logout.php" class="d-flex" role="search">
        
        <button class="btn btn-outline-success btn-sm " type="submit">Log Out</button>
      </form>
    </div>
  </div>
</nav>
<div class="container mt-5">
    <div class="row">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-center">Request Documents</h5>
                    </div>
                    <form action="../controllers.php" method="post">
                        <div class="card-body">
                            <div class="mb-2">
                                <label for="docu" class="form-label">Document Type</label>
                                <select name="document" id="document" class="form-select">
                                    <option value=""selected disabled>Choose</option>
                                    <option value="Barangay Clearance">Barangay Clearance</option>
                                    <option value="Barangay Indigency">Barangay Indigency</option>
                                    <option value="Barangay Residency">Barangay Residency</option>
                                    <option value="First Time Job Seeker">First Time Job Seeker</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="pupose" class="form-label">Purpose</label>
                                <textarea name="purpose" id="purpose" cols="30" rows="5" class="form-control" placeholder="Enter ......"></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" name="request" class="btn btn-sm btn-primary">Request</button>
                        </div>
                    </form>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        <h5 class="text-center">Blotter</h5>
                    </div>
                    <div class="card-body">
                        <form action="../controllers.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $id;?>">
                            <div class="mb-2">
                                <label for="date" class="form-label">Date Happened</label>
                                <input type="date" name="datehapped" class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Complainant</label>
                                <input type="text" class="form-control" name="compainant">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Person to Complain</label>
                                <input type="text" class="form-control" name="personto">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Location of Incidence</label>
                                <input type="text" name="place"  class="form-control">
                            </div>
                            <div class="mb-2">
                                <label for="" class="form-label">Description</label>
                                <textarea name="descp"  class="form-control" id="" cols="30" rows="5"></textarea>
                            </div>
                        
                    </div>
                    <div class="card-footer">
                      <button type="submit" name="addblotter" class="btn btn btn-sm btn-primary">Submit Blotter</button>  
                    </div>
                    </form>
                   
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-center">My Request Status</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-stripped">
                            <thead class="bg-dark">
                                <tr>
                                    <th class="text-white">Documents</th>
                                    <th class="text-white">Purpose</th>
                                    <th class="text-white">Status</th>
                                    <th class="text-white">Date Requested</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM `request` WHERE USERID='$id'";
                                $result = mysqli_query($conn,$sql);
                                foreach($result as $row){
                                    ?>
                                    <tr>
                                        <td><?php echo $row['DOCU']?></td>
                                        <td><?php echo $row['PURPOSE']?></td>
                                        <td><?php echo $row['STATUS']?></td>
                                       
                                        <td><?php echo date("M, d, Y H:m:s",strtotime($row['DATEP']))?></td>
                                        
                                    </tr>
                                    <?php
                                }



                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>