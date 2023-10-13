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
    <title>Account</title>
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
                <div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="index.php">UniBnB</a>
                        </li>
                    </ul>
                </div>
                <div class="logout">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a type = "button" class="nav-link float-right" href = "logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div> 
        </nav>
    </header>
    <div class="content">
        <div class="table-responsive p-4">
            <!-- account     is visible to all identity -->
            <div class="content">    
                <br><br>
                <h1>Account</h1>
                <a type="button" href = #edit_modal class="btn  btn-pramiry open-edit float-right" id="<?= $row['id']; ?>">Edit</a>
                <!-- <button class = "btn btn-primary float-right" data-toggle="modal" data-target="#regiModal">Change your password </button> -->
            <table class="table table-bordered table-striped">
                <?php
                $query = "SELECT * FROM members where id = '$session_id'";
                $result= $mysqli->query($query);
                while ($row = $result->fetch_array(MYSQLI_ASSOC)){
                // while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td>First Name:</td>
                    <td><?php echo $row['firstname'];?></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><?php echo $row['lastname'];?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?php echo $row['email'];?></td>
                </tr>
                <tr>
                    <td>Phone number:</td>
                    <td><?php echo $row['phone'];?></td>
                </tr>
                <tr>
                    <td>ABN number:</td>
                    <td><?php echo $row['abn'];?></td>
                </tr>
                <tr>
                    <td>Identity</td>
                    <td><?php echo $row['access'];?></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><?php echo $row['password'];?></td>
                </tr>
                <?php };
                ?>
            </table>
            </div>
        </div>
    </div>
    <!-- memberslist        is visible to manager -->
    <div class="content">
        <?php
        //if access is manager, display all memberslist and  allhouse list
        if($session_access == "manager"){
        ?>
        <div class="content memberslist">
        <br><br>
        <h1>memberslist</h1><br><br>
        <table class="table table-bordered table-striped">
            <?php
            $query = "SELECT * FROM members";
            $result= $mysqli->query($query);
            while($row = mysqli_fetch_array($result)){
            ?>
            <thead>
                <th>ID</th>
                <th>First Name</th>
                <th>last Name</th>
                <th>email</th>
                <th>phone</th>
                <th>ABN number</th>
                <th>Identity</th>
                <th colspan = "2">Action</th>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $row ['id'] ;?></td>
                    <td><?php echo $row ['firstname'] ;?></td>
                    <td><?php echo $row ['lastname'] ;?></td>
                    <td><?php echo $row ['email'] ;?></td>
                    <td><?php echo $row ['phone'] ;?></td>
                    <td><?php echo $row ['abn'] ;?></td>
                    <td><?php echo $row ['access'] ;?></td>
                    <td><a href = #edit_modal class="btn  btn-dark open-edit" id="">Edit</a></td>
                    <td><a href="process.php?delete=" class = "btn btn-danger"> Delete</a></td>
                </tr>
            </tbody>
            <?php };
            ?>
        </table>
        </div>
     <!-- allhouseslist is visible to manager -->
        <div class="content allhouseslist">
        <br><br>
        <h1>All houseslist</h1><br><br>
        <table class="table table-bordered table-striped">
        <?php
            $query = "SELECT * FROM houses";
            $result= $mysqli->query($query);
            while($row = mysqli_fetch_array($result)){
            ?>
        <thead>
            <th>House ID</th>
            <th>owner</th>
            <th>Location</th>
            <th>City</th>
            <th>price</th>
            <th>max of client</th>
            <th>room</th>
            <th>bathroom</th>
            <th>start of date</th>
            <th>end of date </th>
            <th>whole house</th>
            <th>garage</th>
            <th>smoking</th>
            <th>internet</th>
            <th>pet</th>
            <th colspan = "2">Action</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row ['houseid'] ;?></td>
                <td><?php echo $row ['hostid'] ;?></td>
                <td><?php echo $row ['location'] ;?></td>
                <td><?php echo $row ['city'] ;?></td>
                <td><?php echo $row ['price'] ;?></td>
                <td><?php echo $row ['maxclient'] ;?></td>
                <td><?php echo $row ['room'] ;?></td>
                <td><?php echo $row ['bathroom'] ;?></td>
                <td><?php echo $row ['startdate'] ;?></td>
                <td><?php echo $row ['enddate'] ;?></td>
                <td><?php echo $row ['wholehouse'] ;?></td>
                <td><?php echo $row ['garage'] ;?></td>
                <td><?php echo $row ['smoking'] ;?></td>
                <td><?php echo $row ['internet'] ;?></td>
                <td><?php echo $row ['pet'] ;?></td>
                <td><a href = #edit_modal class="btn  btn-dark open-edit" id="">Edit</a></td>
                <td><a href="process.php?delete=" class = "btn btn-danger"> Delete</a></td>
            </tr>
        </tbody>
        <?php };
            ?>
        </table>
        </div>
    </div>
    <!-- housedlist is visible to host -->
    <div class="content houseslist">
        <?php } else if ($session_access == "host"){  // display houselist 
        ?>
        <br><br>
        <h1>houseslist</h1><br><br>
        <table class="table table-bordered table-striped">
        <thead>
            <th>House ID</th>
            <th>Location</th>
            <th>City</th>
            <th>price</th>
            <th>max of client</th>
            <th>room</th>
            <th>bathroom</th>
            <th>start of date</th>
            <th>end of date </th>
            <th>whole house</th>
            <th>garage</th>
            <th>smoking</th>
            <th>internet</th>
            <th>pet</th>
            <th colspan = "2">Action</th>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href = #edit_modal class="btn  btn-dark open-edit" id="">Edit</a></td>
                <td><a href="process.php?delete=" class = "btn btn-danger"> Delete</a></td>
            </tr>
        </tbody>
        </table>
    </div>
    <!-- bookinglist is visible to client -->
    <div class="content bookinglist">
        <?php }else{  // display bookinglist 
        ?>
        <br><br>
        <h1>bookinglist</h1><br><br>
        <table class="table table-bordered table-striped">
        <thead>
            <th>Location</th>
            <th>City</th>
            <th>price</th>
            <th>max of client</th>
            <th>room</th>
            <th>bathroom</th>
            <th>start of date</th>
            <th>end of date </th>
            <th>whole house</th>
            <th>garage</th>
            <th>smoking</th>
            <th>internet</th>
            <th>pet</th>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <?php };
    ?>
    </div>
    <?php
    include ('edit.php');
    ?>
    <script type="text/javascript" src = "script.js"></script>
</body>
</html>