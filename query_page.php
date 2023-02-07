<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>query_page</title>
    <link rel="stylesheet" href="assets/css/query_page.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<div class="body">
    <div class="first">
        <h1>Contact Us</h1>
        <p>At Food4change we welcome questions, comments and quotation requests. Please reach out to us and we will demonstrate how we can be your trusted partner in the production and distributuion of a quality organic food, at home and around the world.</p>
    </div>
    <div  class="second">
        <div>
            <h2>General Enqueries</h2>
            <p>Email:sales@Matoz.com</p>
            <p>telephone:01672356453</p>
            <p>Fax:(306)975-9867</p>
        </div>
        <div>
            <h2>Delta British Columbia</h2>
            <p>100-8151 churchill street east</p>
            <p>Delta, British Columbia</p>
            <p>v4K 0C2, Canada</p>
        </div>
    </div>
    <h2>Questions?</h2>
    <form action="query_page_action.php" method="post">
        <div class="form_div">
            <div>
                <h2>Contact Info</h2>
                <label for="name" class="label">Name</label>
                <input type="text" name="name">
                <label for="mobile" class="label">Mobile</label>
                <input type="text" name="mobile">
                <label for="email" class="label">Email</label>
                <input type="email" name="email">
            </div>
            <div>
                <h2>Questions?Comments</h2>
                <label for="message">Your Query</label>
                <textarea name="message" cols="23" rows="10" class="query_label">
                    </textarea>
            </div>
        </div>
        <button>Insert Query</button>
    </form>
</div>
    <div class="background"></div>
    <?php 
        include "footer.php";
    ?>
</body>
</html>