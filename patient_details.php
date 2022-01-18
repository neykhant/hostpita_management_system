
<?php 
require_once("func.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
    <div class="jumbotron" style="background: url('images/4.jpg') no-repeat; background-size:cover; height:300px; ">
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body" style="background-color:#3498DB ; color:#ffffff; ">
                <div class="row">
                    <div class="col-md-2"><a href="admin-panel.php" class="btn btn-light">Go Back</a></div>

                    <div class="col-md-2">
                        <h5>Patient Details</h5>
                    </div>
                    <div class="col-md-8">
                        <form action="patient_search.php" class="form-group" method="post">
                            <div class="row">
                                <div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="enter content"></div>
                                <div class="col-md-2"><input type="submit" value="Search" name="patient_search_submit" class="btn btn-light"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card-body" style="background-color:#3498DB; color:#ffffff; ">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email id</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Doctor Appointment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php get_patient_details(); ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>