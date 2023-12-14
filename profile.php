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
        <?php include 'nav.html' ?>



        <div class="pro-container">
            <div class="sub-container">
                <div class="profile-content-wrap">
                    <div class="profile-img">
                        <img src="assets/images/default_profile.png" alt="">
                    </div>
                        
                    <div class="profile-content">
                        <div class="profile row row-cols-auto">
                            <div class="name col">
                                sungjae926
                            </div>

                            <div class="profile-modify col">
                                <a href="">
                                    프로필 편집
                                </a>
                            </div>

                            <div class="fllow-button col">
                                팔로우
                                팔로잉
                            </div>

                            <div class="massage-button col">
                                메세지 보내기
                            </div>

                        </div>

                        <div class="post-fllow">
                            <ul class="row row-cols-auto">
                                <li class="col">게시물 <span class="post-count"></span></li>
                                <li class="col">팔로워 <span class="fllower"></span></li>
                                <li class="col">팔로우 <span class="fllow"></span></li>
                            </ul>
                        </div>

                        <div class="public-relations">
                        🧗🏻‍♂️ @uzzuguzz <br>
                        운동일기 <br>
                        🏋🏻‍♂️ S.135kg / B.85kg / D.150kg
                        </div>
                    </div>

                </div>

                <div class="profile-post-container row row-cols-auto"> 
                    <div class="my-post-list">
                        게시물
                    </div>
                    <div class="post-container col"> 
                        <a href="">
                            <img src="" alt="">
                        </a>
                    </div>

                    <div class="post-container col">
                        <a href="">
                            <img src="" alt="">
                        </a>
                    </div>

                    <div class="post-container col">
                        <a href="">
                            <img src="" alt="">
                        </a>
                    </div>

                    <div class="post-container col">
                        <a href="">
                            <img src="" alt="">
                        </a>
                    </div>
                    
                    <div class="post-container col">
                        <a href="">
                            <img src="" alt="">
                        </a>
                    </div>

 
                </div>
            </div>
        </div>
    </main>

   

    <?php include 'footer.php' ?>
</body>
</html>