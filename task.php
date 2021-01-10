<?php
$insert = false;
if(isset($_POST['name'])){
    
    $server = "localhost";
    $username = "root";
    $password = "";
   
    $con = mysqli_connection($server,$username,$password);
    
    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }
   

    $Firstname = $_POST['FirstName'];
    $Lastname = $_POST['LastName'];
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    $phone = $_POST['phone'];
    $Designation = $_POST['Designation'];
    $gender = $_POST['gender'];
    $Hobbies = $_POST['Hobbies'];
    $sql ="INSERT INTO `trip`.`test` (`FirstName`,`LasttName`,`email`,`birthday`, `phone`, `Designation`, `gender`, `Hobbies`) 
    VALUES ('$Firstname','$Lasttname', '$email', '$birthday', '$phone', '$Designation','$gender', '$Hobbies', current_timestamp());";
    echo $sql;
    
    if($con->query($sql) == true){
        echo "Successfully inserted";

   
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}

?>
<!DOCTYPE html>
<html>
<head>
<style>
.custom{
   text-align: center;
}
.cust1{
   color:#00008B;
   font: 28px Poppins, sans-serif;
}
.btn{
  background-color: #00008B;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}</style>
</head>
<body style="background-color:#FFA500;">
<div class="custom">
<div class="cust1">
<h2>Registration Form</h2>
</div>
<form>
<label for="FirstName"><b>First Name</b></label>
   <input type="text" placeholder="Enter Firstname" name="FirstName" id="FirstName"><br><br>
<label for="LastName"><b>Last Name</b></label>
   <input type="text" placeholder="Enter Lastname" name="LastName" id="LastName"><br><br>
   <label for="email"><b>Email</b></label></t>
   <input type="text" placeholder="Enter Email" name="email" id="email" required><br><br>
 <label for="birthday"><b>Birthday</b></label>
  <input type="date" id="birthday" name="birthday"><br><br>
<label for="phone"><b>Enter your phone number<b></label>
<input type="tel" placeholder="Enter Phone number "id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br><br>
<label for="Designation"><b>Designation</b></label>
   <input type="text" placeholder="Enter Designation" name="Designation" id="Designation"><br><br>
<label for="Gender"><b>Gender</b></label><br><br>
<input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label></br></br>
<label for="Hobbies"><b>Hobbies</b></label><br><br>
<input type="checkbox" name="vehicle" value="Bike">Reading<br>
<input type="checkbox" name="vehicle" value="Car">Dancing<br> 
<input type="checkbox" name="vehicle" value="Car">Sports<br> 
<input type="checkbox" name="vehicle" value="Car">Music<br></br></br>
 <input type="submit" class="btn" value="Submit">
</form>
</div>
</body>
</html>