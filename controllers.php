<?php
require_once 'connection.php';
session_start();
//sign up resident
if(isset($_POST['addres'])){
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $age = $_POST['age'];
    $street = $_POST['street'];
    $purok = $_POST['purok'];
    $barangay = $_POST['barangay'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = md5($_POST['password']);
    $civil = $_POST['civil'];


    $sql = "INSERT INTO `resident`(`ID`, `LASTNAME`, `FIRSTNAME`, `MI`, `AGE`, `STREET`, `PUROK`, `BRGY`, `EMAIL`, `CONTACT`, `PASSWORD`, `STATUS`,`CIVILSTATUS`) VALUES (null,'$lastname','$firstname','$middlename','$age','$street','$purok','$barangay','$email','$contact','$password','PENDING','$civil')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Successfully Registered!');window.location.href='index.php';</script>";
    }

}
//approve resident
if(isset($_POST['acceptid'])){
    $acceptid = $_POST['acceptid'];
    $sql = "UPDATE `resident` SET `STATUS`='ACCEPTED' WHERE `ID` = '$acceptid'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo 'success';

    }
}
//reject the user 
if(isset($_POST['rejectbtn'])){
    $rejectid = $_POST['rejectbtn'];
    $sql = "DELETE FROM `resident`  WHERE `ID` = '$rejectid'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo 'success';
    }
}

//login

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    if($username == 'admin@admin.com' && $password == md5('admin')){
        echo "<script>alert('Successfully Logged In!');window.location.href='admin/index.php';</script>";
    }else{
        $sql = "SELECT * FROM `resident` WHERE `EMAIL` = '$username' AND `PASSWORD` = '$password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            if($row['STATUS'] == 'ACCEPTED'){
                $_SESSION['id'] = $row['ID'];
                echo "<script>alert('Successfully Logged In!');window.location.href='resident/index.php';</script>";
            }else{
                echo "<script>alert('Your Account is not yet accepted!');window.location.href='index.php';</script>";
            }
        }else{
            echo "<script>alert('Invalid Credentials!');window.location.href='index.php';</script>";
        }
    }

}

//make a request of documents
if(isset($_POST['request'])){
    $document = $_POST['document'];
    $purpose = $_POST['purpose'];

    $sql =  "INSERT INTO `request`(`USERID`, `DOCU`, `PURPOSE`, `STATUS`) VALUES ('".$_SESSION['id']."','$document','$purpose','PENDING')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Successfully Requested!');window.location.href='resident/index.php';</script>";
    }
}

//accept docu 
if(isset($_POST['abtn'])){
    $abtn = $_POST['abtn'];
    $sql = "UPDATE `request` SET `STATUS`='ACCEPTED' WHERE `ID` = '$abtn'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo 'success';
    }
}

//reject 
if(isset($_POST['rbtn'])){
    $rbtn = $_POST['rbtn'];
    $sql = "UPDATE `request` SET `STATUS`='REJECTED' WHERE `ID` = '$rbtn'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo 'success';
    }
}
//success request 
if(isset($_POST['rrbtn'])){
    $rrbtn = $_POST['rrbtn'];
    $sql = "UPDATE `request` SET `STATUS`='SUCCESS' WHERE `ID` = '$rrbtn'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo 'success';
    }
}
//add blotter
if(isset($_POST['addblotter'])){
    $id  = $_POST['id']; 
    $datehapped = $_POST['datehapped'];
    $compainant = $_POST['compainant'];
    $personto = $_POST['personto'];
    $place = $_POST['place'];
    $descp = $_POST['descp'];

    $sql = "INSERT INTO `blotter`(`REPORTUSERID`, `DATEHAPPEN`, `COMPLAINANT`, `PERSONTOCOMPLAIN`, `PLACEOF`, `DESCRIPTION`, `ACTIONTAKEN`, `STATUS`)  VALUES ('$id','$datehapped','$compainant','$personto','$place','$descp','NO','PENDING')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Successfully Reported!');window.location.href='resident/index.php';</script>";
    }
}
if(isset($_POST['updateblotter'])){
    $idb = $_POST['idb'];
    $action  = $_POST['action'];
    $status = $_POST['status'];

    $sql = "UPDATE `blotter` SET  `ACTIONTAKEN` = '$action',`STATUS`='$status' WHERE ID ='$idb'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Successfully Updated!');window.location.href='admin/b.php';</script>";
    }
}
?>