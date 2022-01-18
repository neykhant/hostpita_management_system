<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "hmsdb");
if (isset($_POST["login_submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "select * from logintb where username='$username'  and password='$password'  ";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {

        $_SESSION["username"]=$username;

        header("location:admin-panel2.php");
    } else {
        // echo "<script>alert("Invalid username and password)</script>";
        // echo "<script>window.open("index.php", "_self")</script>";

        // echo "<script>alert('Error login..')</script>";
        // echo "<script>window.location ='index.php'</script>";
        header("Location:error.php");
    }
}

if (isset($_POST["pat_submit"])) {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $docapp = $_POST["docapp"];
    $payment = $_POST["payment"];

    $query = "insert into doctorapp (fname, lname, email, contact, docapp, payment) values
     ('$fname','$lname','$email','$contact','$docapp', '$payment')";

    $result = mysqli_query($con, $query);
    if ($result) {
        echo "<script>alert('Appointment registered .')</script>";
        // echo "<script>window.location("admin-panel.php")</script>";
        header("location:admin-panel2.php");
    }
}



function get_patient_details()
{
    global $con;

    $query = "select * from doctorapp";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $fname = $row["fname"];
        $lname = $row["lname"];
        $email = $row["email"];
        $contact = $row["contact"];
        $docapp = $row["docapp"];
        echo "
        <tr>
             <!-- <th>1</th> -->
             <td>$fname</td>
             <td>$lname</td>
             <td>$email</td>
             <td>$contact</td>
             <td>$docapp</td>
        </tr>
        ";
    }
}


if(isset($_POST["update_data"])){

    $contact=$_POST["contact"];
    $status=$_POST["status"];
    $query="update doctorapp set payment='$status' where contact='$contact' ";
    $result=mysqli_query($con,$query);

    if($result)
    header("location:update.php");
}

function display_docs(){
    global $con;
    $query= "select * from doctb";
    $result=mysqli_query($con, $query);
    while($row=mysqli_fetch_assoc($result)){
        $name=$row["name"];
        // echo "<option value=" ".$name." ">".$name."</option>";
        // echo "<option value='$name'>$name</option>";

        echo '<option value="'.$name.'">'.$name.'</option>';
    }
}

if(isset($_POST["doc_sub"])){
    $name=$_POST["name"];
    $query="insert into doctb(name) values ('$name') ";
    $result=mysqli_query($con, $query);

    if($result)
    header("location:adddoc.php");
}

