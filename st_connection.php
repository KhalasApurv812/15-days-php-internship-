
<?php

$host = "localhost";
$username ="root";
$passwd = "";
$dbname = "db_student";

$connection = mysqli_connect($host, $username, $passwd, $dbname); 
if($_POST){
    
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $dob = $_POST['txt3'];
    $email = $_POST['txt4'];
    $mobile = $_POST['txt5'];
    $address = $_POST['txt6'];
    $pincode = $_POST['txt7'];
    $blodgroup = $_POST['txt8'];
    $passwd = $_POST['txt9']; 
    
    $q = mysqli_query($connection,
        "insert into tbl_student(st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_pincode,st_blodgroup,st_password)
        value('{$name}','{$gender}','{$dob}','{$email}','{$mobile}','{$address}','{$pincode}','{$blodgroup}','{$passwd}' )")
        or die("Error".mysqli_error($connection));

if($q)
{
   echo "<script>alert('Rcord added')</script>";
}
}

?>

<html>
    <body>
        <h1>Student Registration Form</h1>
        <form method="post">
            Name: <input type="name" name="txt1"/><br><br>
            Gender: <select name="txt2">
                <option>Male</option>
                <option>Female</option>
            </select>  <br><br>
            DOB: <input type="date" name="txt3"/><br><br>
            Email:<input type="email" name="txt4"/><br><br>
            Mobile:<input type="number" name="txt5"/><br><br>
            Address:<input type="address" name="txt6"/><br><br>
            Pincode: <input type="number" name="txt7"/><br><br>
            Blodgroup: <input type="text" name="txt8"/><br><br>
            Password: <input type="password" name="txt9"/><br><br>
            
            <input type="Submit"/>
            <input type="Reset"/>
        </form> 
    </body>
</html> 