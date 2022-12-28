<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <title>LOGIN PAGE</title>
</head>

<body>
<div class="container">
    <div class="logo">
        <img src="public/img/logo.svg">
    </div>
    <div class="login-container">
        <form class="login" action="login" method="POST">
            <div class="messages">
                <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <input name="email" type="text" placeholder="Email@...">
            <input name="password" type="password" placeholder="Password...">
            <button type="submit">Log In</button>
            <button type="submit">I do not have an account yet</button>
            <button type="submit">I do not remember my password</button>
        </form>
    </div>
</div>
</body>