<?php 
include('func.php'); 
if(!isset($_SESSION['username']))
 echo "session expired";

else
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

      <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">


    <nav  class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Global City Hospital</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
                <input class="form-control mr-sm-2" type="text" placeholder="enter contact number" aria-label="Search" name="contact">
                <input type="submit" class="btn btn-outline-light my-2 my-sm-0 btn btn-outline-light" id="inputbtn" name="search_submit" value="Search">
            </form>
        </div>
    </nav>

</head>

<body style="padding-top: 50px;">

    <div class="jumbotron" style="background: url('images/head.jpeg') no-repeat; background-size:cover; height:300px; ">
    </div>
    <div class="container-fluid" style="margin-top:50px;">  
        <!-- <div class="row">
            <div class="col-md-4"> -->
        <!-- <div class="list-group">
                    <a href="" class="list-group-item active" style="background-color:#3498DB ; color:#ffffff; border-color:#3498DB; ">Appointment</a>
                    <a href="patient_details.php" class="list-group-item ">Payment Status</a>
                    <a href="" class="list-group-item ">Prescription</a>
                    <a href="" class="list-group-item ">Doctor's Section</a>
                    <a href="" class="list-group-item ">Attendance</a>
                </div>
                <hr> -->

        <!-- <div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
    </div>
  </div>
</div> -->

        <!-- <div class="list-group">
                    <a href="" class="list-group-item active" style="background-color:#3498DB ; color:#ffffff; border-color:#3498DB; ">Staff</a>
                    <a href="" class="list-group-item ">Staff Details</a>
                    <a href="" class="list-group-item ">Add New Staff</a>
                    <a href="" class="list-group-item ">Remove Staff Member</a>
                </div> -->
        <!-- </div>
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
                                <option value="Paid">Paid</option>
                                <option value="ATM">ATM</option>
                            </select><br>
                            <input type="submit" class="btn btn-primary" name="pat_submit" id="" value="Create Appointment">
                        </form>

                    </div>
                </div>
            </div>
         <div class="col-md-1"></div> -->
        <!-- <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="card">
                    <div class="card-body">
                        <form class="form-group" method="post" action="func.php">
                            <input type="text" name="contact" class="form-control" placeholder="enter contact"><br>
                            <select name="status" class="form-control">
                                <option value="paid">paid</option>
                                <option value="pay later">pay later</option>
                            </select><br>
                            <hr>
                            <input type="submit" value="update" name="update_data" class="btn btn-primary">
                        </form>
                    </div>
                </div><br><br>
            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                <form class="form-group" method="post" action="func.php">
                    <label>Doctors name: </label>
                    <input type="text" name="name" placeholder="enter doctors name" class="form-control">
                    <br>
                    <input type="submit" name="doc_sub" value="Add Doctor" class="btn btn-primary">
                </form>
            </div>
            <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...</div>
        </div>
    </div>

    </div>
    </div> -->

        <!-- ok -->
        <div class="row">
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Appointment</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Payment Status</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Prescription</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Doctor's Section</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Attendance</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
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
                                        <!-- <option value="Dr Khant from 6pm to 8pm">Dr khant from 6pm to 8pm</option>
                                        <option value="Dr Khant from 4pm to 6pm">Dr Maw from 4pm to 6pm</option> -->
                                        
                                        <?php display_docs();?>
                                    </select><br>
                                    <label for="">Payment :</label>
                                    <select id="" name="payment" class="form-control">
                                        <option value="Paid">Paid</option>
                                        <option value="Pay Later">Pay Later</option>
                                    </select><br>
                                    <input type="submit" class="btn btn-primary" name="pat_submit" id="" value="Create Appointment">
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card">
                            <div class="card-body" style="background-color:#3498DB ; color:#ffffff; ">
                                Payment
                            </div>
                            <div class="card-body">
                                <form class="form-group" action="func.php" method="post">
                                    <!-- <label for="">First Name :</label> -->
                                    <input type="text" name="contact" class="form-control" placeholder="enter contact"><br>
                                    <select name="status" id="" class="form-control">
                                        <option value="Paid">Paid</option>
                                        <option value="Pay Later">Pay later</option>
                                    </select><br>
                                    <hr>
                                    <input type="submit" value="update" name="update_data" class="btn btn-primary">
                                </form>
                            </div>
                        </div><br><br>

                    </div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">hello</div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                        <div class="card">
                            <div class="card-body" style="background-color:#3498DB ; color:#ffffff; ">
                                Payment
                            </div>
                            <div class="card-body">
                                <form action="func.php" method="post" class="form-group">
                                    <label for="">Doctor's name :</label>
                                    <input type="text" name="name" class="form-control" placeholder="enter doctor's name">
                                    <br>
                                    <input type="submit" name="doc_sub" id="" value="Add doctor" class="btn btn-primary">

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

     <!-- <!-- fontawsome - -->
    <script src="https://kit.fontawesome.com/c32fd13ede.js" crossorigin="anonymous"></script>


      sweet alert.js
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


