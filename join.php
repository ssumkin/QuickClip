<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="assets/style/login.css">
</head>
<body>

    <?php include 'header.php' ?>

    <main>
        <div class="container">
            
            <div class="login-wrap">
                <form action="joinAction.php" method="post">
                        <div class="logo">
                            <img src="assets/images/logo.png" alt="">
                        </div>

                        <div class="input-wrap"> 
                            <i class="fa-regular fa-user"></i> 
                            <input type="text" name="userID" placeholder="아이디">
                        </div>

                        <div class="input-wrap">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="userPassword" placeholder="비밀번호">
                        </div>

                        <div class="input-wrap">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="userPasswordCheck" placeholder="비밀번호 확인">
                        </div>

                        <div class="input-wrap">
                            <i class="fa-regular fa-envelope"></i>
                            <input type="email" name="userEmail" placeholder="이메일">
                        </div>

                        <div class="input-wrap">
                            <i class="fa-solid fa-pen-to-square"></i>
                            <input type="text" name="userName" placeholder="이름">
                        </div>

                        <div class="input-wrap">
                            <i class="fa-solid fa-cake-candles"></i>
                            <input type="text" name="userBirth" placeholder="생년월일">
                        </div>
 
                        
                        <div class="input-wrap submit">
                            <input type="submit" value="회원가입">
                        </div> 
                </form> 

                <div class="line"></div>


                <div class="sign-move">
                    계정이 있으신가요? <a href="login.php">로그인</a>
                </div>
                
            </div>
            
        </div>
    </main>


</body>
</html>