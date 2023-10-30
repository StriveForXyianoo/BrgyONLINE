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
                        <th>Name</th>
                        <th>Age</th>
                        <th>Civil Status</th>
                        <th>Address</th>
                        <th>Document</th>
                        <th>Purpose</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT * FROM `request` WHERE ( `STATUS` = 'PENDING' OR `STATUS` = 'REJECTED' OR `STATUS` ='ACCEPTED')  ORDER BY `DATEP` DESC";
                $result = mysqli_query($conn, $sql);
                foreach($result as $row){
                  ?>
                  <tr>
                   <td><?php
                   $userid = $row['USERID'];
                   $sql = "SELECT * FROM `resident` WHERE `ID` = '$userid'";
                    $result = mysqli_query($conn, $sql);
                    $row2 = mysqli_fetch_assoc($result);
                    echo $row2['LASTNAME'].', '.$row2['FIRSTNAME'].' '.$row2['MI'];
                   ?></td>
                    <td><?php echo $row2['AGE'];?></td>
                    <td><?php echo $row2['CIVILSTATUS'];?></td>
                    <td><?php echo 'Purok '.$row2['PUROK'].', '.$row2['STREET']?></td>
                    <td><?php echo $row['DOCU'];?></td>
                    <td><?php echo $row['PURPOSE'];?></td>
                    <td><?php echo $row['STATUS'];?></td>
                    <td>
                      <?php
                      if($row['STATUS']=='ACCEPTED'){
                          ?>
                          <button class=" btn btn-sm btn-warning rrbtn" data-id="<?php  echo $row['ID']?>">Done</button>
                          <?php
                      }else{
                        ?>
                        <button class=" btn btn-sm btn-primary abtn" data-id="<?php  echo $row['ID']?>">Accept</button>
                        <button class=" btn btn-sm btn-danger rbtn" data-id="<?php  echo $row['ID']?>">Reject</button>
                        <?php
                      }
                      ?>
                      
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
<script>
     $(document).ready(function(){
        $('.abtn').click(function(){
            var abtn = $(this).data('id');

            Swal.fire({
                icon: 'warning',
                title: 'Are you sure?',
                text: 'You want to accept this document ?',
                showCancelButton: true,
                confirmButtonText: 'Yes, accept it!',
                cancelButtonText: 'No, keep it'
            }).then((result)=>{
                if(result.isConfirmed){
                    $.ajax({
                        url: '../controllers.php',
                        type: 'post',
                        data: {abtn: abtn},
                        success:function(data){
                            Swal.fire({
                                icon: 'success',
                                title:  ' Successfully Accepted',
                                confirmButtonText: 'Ok'
                            }).then((result)=>{
                                if(result.isConfirmed){
                                    location.reload();
                                }
                            })
                        }
                    })
                }
            })
        })
    });
    $(document).ready(function(){
        $('.rrbtn').click(function(){
            var rrbtn = $(this).data('id');

            Swal.fire({
                icon: 'warning',
                title: 'Are you sure?',
                text: 'You want to set the status to done this document ?',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No'
            }).then((result)=>{
                if(result.isConfirmed){
                    $.ajax({
                        url: '../controllers.php',
                        type: 'post',
                        data: {rrbtn: rrbtn},
                        success:function(data){
                            Swal.fire({
                                icon: 'success',
                                title:  ' Successfully Accepted',
                                confirmButtonText: 'Ok'
                            }).then((result)=>{
                                if(result.isConfirmed){
                                    location.reload();
                                }
                            })
                        }
                    })
                }
            })
        })
    });
    
    $(document).ready(function(){
        $('.rbtn').click(function(){
            var rbtn = $(this).data('id');

            Swal.fire({
                icon: 'warning',
                title: 'Are you sure?',
                text: 'You want to reject this document ?',
                showCancelButton: true,
                confirmButtonText: 'Yes, rejected it!',
                cancelButtonText: 'No, keep it'
            }).then((result)=>{
                if(result.isConfirmed){
                    $.ajax({
                        url: '../controllers.php',
                        type: 'post',
                        data: {rbtn: rbtn},
                        success:function(data){
                            Swal.fire({
                                icon: 'success',
                                title: 'Successfully Rejected',
                                confirmButtonText: 'Ok'
                            }).then((result)=>{
                                if(result.isConfirmed){
                                    location.reload();
                                }
                            })
                        }
                    })
                }
            })
        })
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>