
<html>
<head>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body bgcolor="#95a5a6">
<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="#">anif.com.np / user login</a>
</nav>
<br><br>
<form action="admin.php" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" class="form-control"  placeholder="Username" name="username">

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Sign In</button>
        <div class="content-inline" id="data"><?php echo $data; ?></div>
    </div>

</form>

<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<script src="bootstrap.min.js"></script>
<script src=tether.min.js""></script>
</body>
</html>