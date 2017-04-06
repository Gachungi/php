<!DOCTYPE html>
<html>
    <head>
        <title>Title 1</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <div class="container">
        <body style="background-color: pink;  font-size: 20px">
            <h3 style="color: brown">Forms</h3>
            <!-- Form Starts -->
            <div id="form">
                <form action="#" method="POST">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="First Name.."><br><br>
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Last Name.."><br><br>
                    <label for="country">Gender</label>
                    <input type="radio" name="gender" value="male" checked> Male
                    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="other" checked> Other<br><br>
                    <label for="num">Tell No</label>
                    <input type="number" id="num" name="number" placeholder="Your Tell No"><br><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="goods">Clothes</label><br>
                            <input type="checkbox" name="clothes[]" id="clothes" value="dress">Dress
                            <input type="checkbox" name="clothes[]" id="clothes" value="skirt">Skirt
                            
                        </div>
                        <div class="col-sm-4">
                            <label for="quantity">Quantity</label><br>
                            <select name="quantity">
                                <option name="quantity" >500</option>
                                <option name="cost" >400</option>
                                <option name="cost" >450</option>
                                <option name="cost" >200</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="Cost">Cost</label><br>
                            <select name="cost">
                                <option name="cost" >500</option>
                                <option name="cost" >400</option>
                                <option name="cost" >450</option>
                                <option name="cost" >200</option>
                            </select><br><br><br>
                        </div>
                    </div>
                    <label for="num">Total</label>
                    <input type="number" id="num" name="total" placeholder="Total"><br><br>
                    
                    <input type="submit" value="submit" name="submit">
                </form>
            </div>
            <!-- Frorm Ends -->
        </body>
    </div>
</html>
<?php

if (isset ($_POST ['submit']))
{
extract($_POST);
echo "My name is $firstname $lastname <br>";
echo " My gender is $gender <br>";
echo " My contact is $number <br>";

}
$total = $cost*$quantity;
echo "Dear $firstname your bill is $total";

?>