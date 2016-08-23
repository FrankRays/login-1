<html>
<head>
    <title>Signup!</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script></head>
<body>
<h1><p align="center">*Name*</p></h1>
<h1><p align="center">*Address*</p></h1>
<div class="container">
    <div class="row">
        <form action="signup.php" class="form" method="POST" />
        <div class="form-group"><label for="">First Name: </label><input type="text" class="form-control" name="first_name"></div>
        <div class="form-group"><label for="">Last Name: </label><input type="text" class="form-control" name="last_name"></div>
        <div class="form-group"><label for="">User Name: </label><input type="text" class="form-control" name="user_name"></div>
        <div class="form-group"><label for="">Password: </label><input type="password" class="form-control"
                                                                name="password1"></div>
        <div class="form-group"><label for="">Confirm Password: </label><input type="password" class="form-control"
                                                                name="password2"></div>
        <div class="form-group"><label for="">Email: </label><input type="email" class="form-control"
                                                                   name="email"></div>
        <div class="form-group"><label for="">Address: </label><input type="text" class="form-control" name="address"></div>
        <div class="form-group"><label for="">Contact Number: </label><input type="text" class="form-control" name="contact_number"></div>
        <div class="form-group"><label for="">Date Of Birth: </label><input type="text" class="form-control" name="date_of_birth"></div>
        <div class="form-group"><label for="">Gender: <br><input type="checkbox" name="gender" value="1">Male<br>
                <input type="checkbox" name="gender" value="0">Female<br>
                <input type="checkbox" name="gender" value="3">Other
            </label></div>

        <div style="float: left; margin-left:2px;" class="form-group"><label for=""></label><button type="text"
                                                                                                    class=" btn btn-info"> Submit</div>
        <div style="float: right; margin-right:2%;"> <a href="form.php" class="btn btn-info">Reset</a></div>

        </form>

        <div></div>

    </div>

    <p align="buttom">
        <!--------------------------------------------------mero footer------------------------------------------------------------>
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <div class="container">
    <p align="center">Copyright &copy; 2016 All Rights Reserved www.*****.com<br />"Design &
        Develop" by
        <a target="_blank" href="https://www.facebook.com/ashwin.me.1">Ashwin Rana</a><br/>For email:****@*****
        .com</p>
</div>
</div>
<!--Page Created Date: 1:40 AM 8/24/2016-->
</p>

</body>
</html>