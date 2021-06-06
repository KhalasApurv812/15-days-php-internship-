<?php


$host= "localhost";
$username= "root";
$passwd= "";
$dbname= "db_internship";

$connection=mysqli_connect($host, $username, $passwd,$dbname);
 if($_POST){
     $name= $_POST['text1'];
     $gender= $_POST['text2'];
     $mobile= $_POST['text3'];
     
    $q = mysqli_query($connection,
        "insert into tbl_user(user_name,user_gender,user_mobile)  value('{$name}', '{$gender}', '${mobile}')")
          or die("Error". mysqli_error($connection)); 
    if($q)
{
    echo "<script>alert('Rcord added')</script>";
}
 }
?>

<html>
    <body>
        <form method="post">
            Name: <input type="text" name="text1"/><br>
            Gender: <select name="text2">
                <option>Male</option>
                 <option>Female</option>
            </select><br>
            Mobile No: <input type="number" name="text3"><br>
            <input type="submit"/>
            
        </form>
    </body>
</html>
