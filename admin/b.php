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
        <div class="card-body">
            <table class="table table-hover table-stripped table-bordered">
                <thead class="bg-info">
                    <tr>
                        <th>Complainant</th>
                        <th>Person to Complain</th>
                        <th>Date Happen</th>
                        <th>Location of Incidence</th>
                        <th>Decscription of Incidence</th>
                        <th>Action Taken</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
               <?php
               $sql = "SELECT * FROM `blotter`";
               $result = mysqli_query($conn,$sql);
               foreach($result as $row){
                ?>
                <tr>
                    <td><?php echo $row['COMPLAINANT'] ?></td>
                    <td><?php echo $row['PERSONTOCOMPLAIN'] ?></td>
                    <td><?php echo $row['DATEHAPPEN'] ?></td>
                    <td><?php echo $row['PLACEOF'] ?></td>
                    <td><?php echo $row['DESCRIPTION'] ?></td>
                    <td><?php echo $row['ACTIONTAKEN'] ?></td>
                    <td><?php echo $row['STATUS'] ?></td>
                    <td>
                        <a href="viewblotter.php?id=<?php echo $row['ID']?>" class="btn btn-sm btn-warning">View</a>
                    </td>
                </tr>
                <?php
               }
               ?> 
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>