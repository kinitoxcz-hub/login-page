<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN PAGE PHP DAY 1</title>
    </head>
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background: lightblue;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 150vh;
    margin: 12px;
}
.login-box { 
    background: white;
    width: 200px;
    padding: 50px;
    border-radius: 5px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0,0);
    text-align: center;
}
.logo {
    width: 100px;
    margin-bottom: 20px;
}
.login-box h2 { 
    margin-bottom: 20px;
    color: black;
}
.input-field { 
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 2px solid lightcoral;
    border-radius: 10px;
    font-size: 12px;
}
.btn { 
    width: 100%;
    padding: 20px; 
    background: blue;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 12px;
    margin-top: 15px;
}
.btn-hover { 
    background: darkcyan;
}
.error { 
    color: red;
    margin-bottom: 15px;
    font-size: 12px;
}
h2 { 
    color: blue;
}
</style>
</head>
<body>
    <div class="login-box">
        <img src="fb" class="logo">
        <h2>LOGIN</h2>
<?php
if(isset($_SESSION['error'])) { 
    echo "<p class='error'>".$_SESSION['error']."</p>";
    unset($_SESSION["error"]);
}
?>
        <form action="authentication.php" method="POST">
            <input type="name" name="username" placeholder="ENTER USERNAME" required class="input-field">
            <input type="password" name="password" placeholder="ENTER PASSWORD" required class="input-field">
            <input type="submit" class="btn"></button>
</form>
</div>
</body>
</html>