<html>
    <head>
        <title>Title 1</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <!-- start of navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: darkblue">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="#">Brand</a> -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <div class="user">
                <label style="color: white; font-size: 30">Facebook</label>
                <ul class="nav navbar-nav navbar-right" >
                    <form>
                    <label style="color: white; padding-top: 10px">Username</label>
                        <input type="text" name="username" placeholder="username">
                        <label style="color: white; padding-top: 10px">Password</label>
                        <input type="password" name="password" placeholder="password">
                        <button type="button" class="btn btn-link btn-sm" data-toggle="modal" data-target="#myLogin"><a href="file:///C:/Users/Rahee/Documents/project/index.html#"><span class="glyphicon glyphicon-user"></span></a>Login</button>
                    </form>
                </ul>
                </div>
            </div>
        </nav><br><br>
        <!-- end of navbar -->
        <body style="background-color: #dfe3ee">
        <div class="container">
        <div class="row">
        <div class="col-sm-8">
        <div class="facebook">
            <img src="images/fb.jpg" style="width: 100%; height: 500px">
        </div>
        </div>
        <div class="col-sm-4">
            
                <h2 style="color: black">Create an Account</h2>
                <h3 style="color: black">It's free and always will be.</h3>
                <!-- Form Starts -->
                <div id="form">
                    <form action="#" method="POST">
                       
                        <input type="text" name="firstname" placeholder="First Name..">
                        
                        <input type="text" name="lastname" placeholder="Last Name.."><br><br>
                       
                        <input type="text" name="mail" placeholder="mobile number or email"><br><br>
                        <input type="password" id="password" name="password" placeholder="password"><br><br>
                        <label>Birthday</label><br>
                        <input type="date" name="date"><h6> Why do I need to provide my date of birth?</h6><br><br>
                        <input type="radio" name="gender" value="male" checked> Male
                        <input type="radio" name="gender" value="female"> Female
                        <input type="radio" name="gender" value="other" checked> Other<br><br>
                        
                        <input type="submit" name="submit" value="Create New Account" style="background-color: green; color: white">
                       
                    </form>
                </div>
                <!-- Frorm Ends -->

            </div>
            </div>
        </div>
        </body>
    </html>
    <?php
    if (isset ($_POST ['submit']))
    {
    extract($_POST);
    
//connect to the server
   $connect=mysqli_connect("localhost", "root", "", "fb");
//query
    $query="INSERT INTO facebook VALUES ('$firstname', '$lastname', '$mail', '$gender');";
    //execute the query
    mysqli_query($connect, "$query");
    echo "successfull";
    }
    ?>