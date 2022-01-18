<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body style="padding-top: 50px;">

    <div class="jumbotron" style="background: url('images/head.jpeg') no-repeat; background-size:cover; height:300px; ">
    </div>
    <div class="container-fluid" style="margin-top:50px;">
        <div class="row">
            <div class="col-md-4">
                <div class="list-group">
                    <a href="" class="list-group-item active" style="background-color:#3498DB ; color:#ffffff; border-color:#3498DB; ">Appointment</a>
                    <a href="patient_details.php" class="list-group-item ">Payment Status</a>
                    <!-- <a href="" class="list-group-item ">Prescription</a> -->
                    <a href="" class="list-group-item ">Doctor's Section</a>
                    <a href="" class="list-group-item ">Attendance</a>
                </div>
                <hr>
                <!-- <div class="list-group">
                    <a href="" class="list-group-item active" style="background-color:#3498DB ; color:#ffffff; border-color:#3498DB; ">Staff</a>
                    <a href="" class="list-group-item ">Staff Details</a>
                    <a href="" class="list-group-item ">Add New Staff</a>
                    <a href="" class="list-group-item ">Remove Staff Member</a>
                </div> -->
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body" style="background-color:#3498DB ; color:#ffffff; ">
                        Create an Appointment
                    </div>
                    <div class="card-body">

                        <form class="form-group" action="func.php" method="post">
                            <label for="">First Name :</label>
                            <input type="text" name="fname" class="form-control"><br>
                            <label for="">Last Name :</label>
                            <input type="text" name="lname" class="form-control"><br>
                            <label for="">Email id :</label>
                            <input type="text" name="email" class="form-control"><br>
                            <label for="">Contact Number:</label>
                            <input type="text" name="contact" class="form-control"><br>
                            <label for="">Doctor :</label>
                            <select id="" name="docapp" class="form-control">
                                <option value="Dr Khant from 6pm to 8pm">Dr khant from 6pm to 8pm</option>
                                <option value="Dr Khant from 4pm to 6pm">Dr Maw from 4pm to 6pm</option>
                            </select><br>
                            <label for="">Payment :</label>
                            <select id="" name="payment" class="form-control">
                                <option value="Dr Khant from 6pm to 8pm">Paid</option>
                                <option value="Dr Khant from 4pm to 6pm">ATM</option>
                            </select><br>
                            <input type="submit" class="btn btn-primary" name="pat_submit" id="" value="Create Appointment">
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>


    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<!-- sweet alert.js -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            Swal.fire({
        title: 'Hello!',
        text: 'Have a greate Day.',
        imageUrl: 'images/doc.jpg',
        imageWidth: 200,
        imageHeight: 200,
        imageAlt: 'Custom image',
            })
        });
    </script>

</body>

</html>