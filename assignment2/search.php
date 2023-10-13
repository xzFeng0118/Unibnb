<?php
include ('db_conn.php');
include ('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>housedetail</title>
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
       <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="index.php">UniBnB</a>
                    </li>
                </ul>
                <!-- <?php //-------if there is no session, display login button ?> -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item active float-right">
                        <a type="button" class="btn btn-link" data-toggle="modal" data-target="#loginModal">Login</a>
                        <a type="button" class="btn btn-link" data-toggle="modal" data-target="#regiModal">Create Account</a>
                    </li>
                </ul>
                <!-- <?php //else display logout button ?>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a type = "button" class="nav-link float-right" href = "logout.php">Logout</a>
                    </li>
                </ul>
                <?php  ?> -->

        </nav>
    </header>
    <form>
        <div class="form-group row">
            <div class="col-6">
                <input type="search" class="form-control" id="searchinput" placeholder="Destination">
            </div>
            <div class="col-6">
                <select  class = "form-control" name="regicity" id="regicity" >
                    <option  class = "form-control" selected disabled>Select city</option>
                    <option  class = "form-control" value="Horbart">Horbart</option>
                    <option  class = "form-control" value="Sydney">Sydney</option>
                    <option  class = "form-control" value="Canberra">Canberra</option>
                    <option  class = "form-control" value="Melbourne">Melbourne</option>
                    <option  class = "form-control" value="Geelong">Geelong</option>
                    <option  class = "form-control" value="Adelaide">Adelaide</option>
                    <option  class = "form-control" value="Brisbane">Brisbane</option>
                    <option  class = "form-control" value="Perth">Perth</option>
                </select>
            </div>
            <div class="col-4">
                <input type="date" class="form-control" id="startdate">
            </div>
            <div class="col-4">
                <input type="date" class="form-control" id="enddate">
            </div>
            <div class="col-4">
                <select id="Guests" class="form-control">
                    <option selected disabled>Guest</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="col-12">
                <button class="btn btn-light btn-block" type="submit">Search</button>
            </div>
        </div>
    </form>
    <br>
    <h1>Searching list</h1>
    <div class="content">
        <table class="table text-center" frame= "box">
            <tr>
                <td rowspan="3"><img class = "" src="" alt=""></td>
                <td colspan="2">city:</td>
                <td colspan="2">location:</td>
                <td rowspan="2">price:</td>
            </tr>
            <tr>
                <td>how many room?</td>
                <td>how many bathroom?</td>
                <td>max clinet</td>
                <td>whole rental?</td>
            </tr>
            <tr>
                <td>garage?</td>
                <td>smoking?</td>
                <td>internet</td>
                <td>pet</td>
                <td><button class = "btn btn-danger" type = "submit" id = "book" name = "book">Book</button></td>
            </tr>
        </table>

    </div>

    <!-- Registration Modal Form -->
    <div class="modal fade" id="regiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">CREATE ACCOUNT</h5>
                </div>
                <div class="modal-body">
                    <form role = "form" class="regiForm" action = "register_engine.php" method = "post">
                        <div class="form-row col-12">
                            <label for="inputaccess">Are you registering as a client or host?</label>
                            <select id="inputaccess" class="form-control">
                                <option disabled>Select your choice</option>
                                <option >host</option>
                                <option >client</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="regifname">First Name</label>
                                <input class = "form-control" type="text" id="regifname" name = "regifname" placeholder="Enter your first name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="regilname">Last Name</label>
                                <input class = "form-control" type="text" id="regilname" name = "regilname" placeholder="Enter your last name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="regiemail">Email address</label>
                                <input class = "form-control" type="email" id="regiemail" name = "regiemail" placeholder="Enter email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="regimobile">Mobile</label>
                                <input class = "form-control" type="text" id="regimobile" name = "regimobile" placeholder="Enter your mobile number">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="regipwd">Password</label>
                                <input class = "form-control" type="password" id="regipwd" name = "regipwd" placeholder="Password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="comfirmpwd">Mobile</label>
                                <input class = "form-control" type="password" id="comfirmpwd" name = "comfirmpwd" placeholder="Re-type your password">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="regiaddress">Address</label>
                                <input class = "form-control" type="text" id="regiaddress" name = "regiaddress" placeholder="Address">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="regicity">City</label>
                                <select  class = "form-control" name="regicity" id="regicity" >
                                    <option  class = "form-control" disabled>Select city</option>
                                    <option  class = "form-control" value="Horbart">Horbart</option>
                                    <option  class = "form-control" value="Sydney">Sydney</option>
                                    <option  class = "form-control" value="Canberra">Canberra</option>
                                    <option  class = "form-control" value="Melbourne">Melbourne</option>
                                    <option  class = "form-control" value="Geelong">Geelong</option>
                                    <option  class = "form-control" value="Adelaide">Adelaide</option>
                                    <option  class = "form-control" value="Brisbane">Brisbane</option>
                                    <option  class = "form-control" value="Perth">Perth</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary col-3" data-dismiss="modal">Cancel</button>
                    <button class = "btn btn-primary col-3 float-right" type = "submit" id = "register" name = "register">Register</button>
                </div>                       
            </div>
        </div>
    </div>

    





<script type="text/javascript" src = "script.js"></script>
</body>
</html>