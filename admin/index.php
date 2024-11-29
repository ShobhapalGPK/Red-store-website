<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="style.css">
     </head>
<body>
    <div class="container-fluid" >
        <div class="box">
            <h1>Login</h1>
            <hr>
          <div class="form">
            <form action="adminlogincode.php" method="post">
                <input type="email" name="email" placeholder="Username" require>
                <input type="password" name="password" placeholder="Password">
                <a href="">Forget Password?</a>
                <button class="btn" name="btn">Login</button>
            </form>
            </div>
        </div>

    </div>
</body>
</html>