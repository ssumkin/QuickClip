<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="assets/style/profile.css">
</head>
<body>

    <?php include 'header.php' ?>

    <main>
        <nav>
            <div class="logo">
                <img src="assets/images/logo.png" alt="">
            </div>
            <div class="">
                <div id="profile">
                    <a href="profile.php">프로필</a>
                </div>
                <div id="upload">
                    <a href="upload.php">업로드</a>
                </div>
                <div id="search">
                    <a href="">검색</a>
                    <div>평소엔 안보이다가 버튼 누르면 샤샤삭 뜨는거</div>
                </div>
            </div>
            
            <div>
                <div id="message">
                    <a href="massage.php">메세지</a>
                </div>
                <div id="alarm">
                    <a href="">알람</a>
                    <div>평소엔 안보이다가 버튼 누르면 샤샤삭 뜨는거</div>
                </div>
            </div>
            
            <div>
                <div id="logout">
                    <a href="logoutAction.php">로그아웃</a>
                </div>
            </div>
        </nav>

        <div class="profile-container">
            <div class="profile-content">
                <div class="profile-img">
                    <img src="" alt="">
                </div>

                <div></div>

            </div>

            <div class="profile-post-container">
                <div class="profile-post">
                    <a href="">
                        <div class="post-thumbnail">
                            <img src="" alt="">
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </main>
</body>
</html>