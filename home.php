<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/home.css">
</head>
<body>
    <?php include 'header.php' ?> 

    <main>
        <?php include 'nav.html' ?>

        <div class="pro-container">
            <div class="sub-container">
                 
                <div class="post-container">
                    <div class="post-wrap">
                        <div class="profile-wrap row row-cols-auto">
                            <div class="profile-img-wrap col">
                                <!-- 유저에 따라 이미지 다르게 나오기 -->
                                <img src="assets/images/default_profile.png" alt="">
                            </div>

                            <!-- 업로드 유저 닉네임 나오도록 -->
                            <div class="profile-name-wrap col">
                                <span class="profile-name">sungjae926</span>
                            </div>
                        
                            <!-- 업로드 후 지난 시간 표시 -->
                            <div class="upload-time-wrap col">
                                <div class="upload-time">•<span></span></div>
                            </div> 
                         
                        </div>


                        <div class="content-wrap">
                            <div class="content">
                                <img src="assets/images/posttest.png" alt="">
                            </div>
                            <div class="sound">

                            </div>
                        </div>

                        <div class="reaction-wrap row row-cols-auto">
                            <div class="heart-wrap col">
                                <!-- 좋아요 눌렀는지에 따라 달라지게 -->
                                <i class="fa-regular fa-heart"></i>
                                <!-- <i class="fa-solid fa-heart"></i> -->
                            </div>

                            <div class="comment-button-wrap col">
                                <i class="fa-regular fa-comment"></i>
                            </div>

                            <div class="message-wrap col">
                                <i class="fa-solid fa-paper-plane"></i>
                            </div>

                            <div class="save-wrap col">
                                <i class="fa-solid fa-tags"></i>
                            </div>
                        </div>

                        <div class="content-text-wrap">
                            <span class="name">sungjae926</span><span class="content-text"></span>
                        </div>


                        <div class="coment-wrap">
                        <textarea aria-label="댓글 달기..." placeholder="댓글 달기..." autocomplete="off" autocorrect="off" class="" dir=""></textarea>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

 
    <?php include 'footer.php' ?>
</body>
</html>