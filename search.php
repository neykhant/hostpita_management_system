
<?php
$con = mysqli_connect('localhost', 'root', '', 'hmsdb');
// include_once('func.php');

if (isset($_POST['search_submit'])) {

    $contact = $_POST['contact'];
    $query = "select * from doctorapp where contact='$contact' ";
    $result = mysqli_query($con, $query);
    if ($result)
        echo "
            <!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Hospital Management System</title>

    <!-- bootstrap css -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>


</head>
<body style='background-color:#3498DB;color:white;text-align:center;padding-top:50px;'>
  <div class='container' style='text-align:left;'>
  <center><h3>Search Results</h3></center><br>
  <table class='table table-hover'>
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Contact</th>
      <th>Doctor</th>
      <th>Payment</th>
    </tr>
  </thead>
  <tbody>
";

    while ($row = mysqli_fetch_assoc($result)) {
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $contact = $row['contact'];
        $doctor = $row['docapp'];
        $payment = $row['payment'];
        echo "
     <tr>
     <td>$fname</td>
     <td>$lname</td>
     <td>$email</td>
     <td>$contact</td>
     <td>$doctor</td>
     <td>$payment</td>
     </tr>
     ";
    }

    echo '</tbody></table></div> 
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>';
}
