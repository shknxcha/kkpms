<!DOCTYPE html>
<html>
<head>
    <title>Login Koperasi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login">
        <img class="img" src="images/img.jpeg" style="width: 100px; height: 100px; border-radius: 50%;"/>
        <h2> LOGIN</h2>
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "<div class='alert' style='font-size: 15px; color: red;'>Username dan Password tidak sesuai</div>";
            }
        }

     ?>
     <br>
<form action="cek.php" method="POST">
		
        <div class="input-group">
            <input type="text" name="username" autofocus autocomplete="off" required="">
            <span>Username</span>
        </div>
        <div class="input-group">
            <input type="password" name="password" autofocus autocomplete="off" required="">
            <span>Password</span>
        </div>
        <div class="input-group">
            <input type="submit" value="Login">
    </div>
</form>

</body>
</html>
           