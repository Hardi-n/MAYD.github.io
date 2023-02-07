<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <link rel="stylesheet" href="assets\css\signup.css"> 
        <link rel="icon" href="assets/images/logo.png">
    </head>
    <body>
        <div class="container">
             <form action="after_sign_up.php" method="post">
                <h1>SIGN UP HERE</h1>
                <label for="username">name</label>
                <input type="text" placeholder="name" id="username" name="name" autocomplete="off">
                <label for="email">Email</label>
                <input type="text" placeholder="email" name="email" autocomplete="off">
                <label for="mobile">Mobile</label>
                <input type="text" placeholder="mobile" name="mobile" autocomplete="off">
                <label for="address">Address</label>
                <input type="text" placeholder="address" name="address" autocomplete="off">
                <label for="password">Password</label>
                <input type="password" placeholder="password"name="password" id="password">
                <button>SIGN UP</button>
                <a href="guest.php" class="backtohome">Back to Home</a>
             </form>
        </div>
    </body>
</html>