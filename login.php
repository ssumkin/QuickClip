<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/login.css">
</head>
<body>

    <?php include 'header.php' ?>

    <main>
        <div class="container">
            <form action="loginAction.php" method="post">
                <div class="login-wrap">
                        <div class="logo">
                            <img src="assets/images/logo.png" alt="">
                        </div>

                        <div class="input-wrap">
                            <i class="fa-solid fa-user-secret"></i>
                            <input type="text" name="userID" placeholder="ID">
                        </div>

                        <div class="input-wrap">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="userPassword" placeholder="PASSWORD">
                        </div>
                        
                        <div class="input-wrap submit">
                            <input type="submit" value="로그인">
                        </div>
                    </div>
            </form>
        </div>
    </main>


</body>
</html>