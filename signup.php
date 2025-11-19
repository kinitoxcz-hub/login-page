<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>

    <style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background: cyan;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;

    }
    .container{
        background: white;
        width: 350px;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0);

    }
    h2{
        text-align: center;
        margin-bottom: 20x;

    }
    input[type=text], input[type=email], input[type=password] {
        width: 100px;
        padding: 10px;
        margin: 10px 0;
        border: 2px solid lightblue;
        border-radius: 10px;

    }
    button {
        width: 100%;
        padding: 13px;
        background: blue;
        color: black;
        border: none;
        border-radius: none;
        cursor: pointer;
        font-size: 12px;

    }
    button:hover {
        background: cyan;

    }
    error {
        color: red;
        margin-bottom: 12px;
        font-size: 12px;
        text-align: center;

    }
    .success {
        color: green;
        margin: 12px;
        text-align: center;


    }
</style>
</head>
<body>
    <div class="container">
    <h2>CREATE AN ACCOUNT</h2>

    <?php
    if(isset($_GET['msg'])) {
        echo "<p class='success'> ". htmlspecialchars(string: $_GET['msg']) ."</php>";
    }
    if(isset($_GET['error'])) {
        echo "<p class='error'> ". htmlspecialchars(string: $_GET['error']) ."</php>";
    }
    ?>
    <form action="signup_process.php" method="POST">
        <input type="text" name="name" placeholder="Full name" required>
        <input type="email" name="email" placeholder="enter email" required>
        <input type="password" name="password" placeholder="password" required>
        <button type="submit"> SIGN UP</button>

    </form>
</div>
</body>
</html>
