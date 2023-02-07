<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <link rel="stylesheet" href="assets/css/login.css"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="icon" href="assets/images/logo.png";
    </head>
    <body>
        <div class="container">
            <form action="chkuser.php" method="post">
                <h1>Login Here</h1>
                <label for="mobile">Mobile</label>
                <input type="text" placeholder="mobile" id="mobile" autocomplete="off" name="mobile">
                <label for="password">Password</label>
                <input type="password" placeholder="password" id="password" name="password">
                <button>Login</button>
                <a class="backtohome" href="guest.php">Back to Home</a>
            </form>
        </div>
    </body>
</html>