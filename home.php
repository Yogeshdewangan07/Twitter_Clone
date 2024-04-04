<?php
session_start();
include "php/config.php";
if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter Clone</title>
    <link rel="favicon" type="image/png" href="logo/twitter-logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="twitter-clone.css">
</head>

<body class="hero-section">
    <header class="header-panel" id="header-panel">
        <div class="parent-nav-panel">
            <div class="nav-panel">
                <div class="nav-container">
                    <div class="logo">
                        <h2><a href="#">
                                <i class="fa-brands fa-twitter fa-lg" style="color: #1d9bf0;"></i>
                        </a></h2>
                    </div>
                    <div class="nav-bar">
                        <nav class="nav-section">
                            <a href="#">
                                <div class="nav-box">
                                    <div class="nav-icon"><i class="fa-solid fa-house fa-lg"></i></div>
                                    <div class="nav-span"><span>Home</span></div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="nav-box">
                                    <div class="nav-icon"><i class="fa-solid fa-magnifying-glass fa-lg"></i></div>
                                    <div class="nav-span"><span>Explore</span></div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="nav-box">
                                    <div class="nav-icon"><i class="fa-regular fa-bell fa-lg"></i></div>
                                    <div class="nav-span"><span>Notifications</span></div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="nav-box">
                                    <div class="nav-icon"><i class="fa-regular fa-envelope fa-lg"></i></div>
                                    <div class="nav-span"><span>Messages</span></div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="nav-box">
                                    <div class="nav-icon"><i class="far fa-list-alt fa-lg"></i></div>
                                    <div class="nav-span"><span>Lists</span></div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="nav-box">
                                    <div class="nav-icon"><i class="fas fa-user-friends fa-lg"></i></div>
                                    <div class="nav-span"><span>Communities</span></div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="nav-box">
                                    <div class="nav-icon"><i class="fas fa-user-check fa-lg"></i></div>
                                    <div class="nav-span"><span>Verified</span></div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="nav-box">
                                    <div class="nav-icon"><i class="fa-regular fa-user fa-lg"></i></div>
                                    <div class="nav-span"><span>Profile</span></div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="nav-box">
                                    <div class="nav-icon"><i class="fas fa-chevron-circle-down fa-lg"></i></div>
                                    <div class="nav-span"><span>More</span></div>
                                </div>
                            </a>
                        </nav>
                    </div>
                    <div class="tweet-button">
                        <a href="#">
                            <div class="tweet-span">
                                <span>Tweet</span>
                            </div>
                        </a>
                    </div>
                </div>

                <?php
                    $query = mysqli_query($conn, "select * from users where unique_id = {$_SESSION['unique_id']}");
                    if(mysqli_num_rows($query)>0){
                        $row = mysqli_fetch_assoc($query);
                        $name = $row['name'];
                        $user_img = $row['image'];
                    }
                ?>

                <div class="user-panel">
                    <div class="user-panel-box">
                        <div class="user-box">
                            <div class="user-img">
                                <img src="php/images/<?php echo $row['image']; ?>">
                            </div>
                            <div class="user-name">
                                <div class="username-box">
                                    <div class="namespan">
                                        <span><?php echo $row['name']; ?></span>
                                    </div>
                                    <div class="user-name-span">
                                        <span>@<?php echo $row['name']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="user-more-icon" onclick="tooltipButton(this)">
                                <i class="fa-solid fa-ellipsis-vertical fa-rotate-90"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="main-container">
            <div class="main-sub-container">
                <div class="sub-section1">
                    <div class="main-section" id="main-section">
                        <div class="main-box1">
                            <div class="main-sub-box">
                                <div class="main-sub-box1">
                                    <div class="main-head4">
                                        <div class="main-head1">
                                            <div class="main-head2">
                                                <div class="main-head3">
                                                    <h2><span>Home</span></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-sub-box02">
                                    <nav class="main-nav-area">
                                        <div class="main-nav">
                                            <div class="main-nav-option" id="nav-opt1">
                                                <a href="#">
                                                    <div class="nav-option1 for-border" id="option1">
                                                        <div class="nav-option2">
                                                            <span>For you</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="main-nav-option" id="nav-opt2">
                                                <a href="#">
                                                    <div class="nav-option1" id="option2">
                                                        <div class="nav-option2">
                                                            <span>Following</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="main-box2">
                            <div class="main-sub-box2">
                                <div class="main-sub-area2">
                                    <div class="main-box2-section">
                                        <div class="main-box2-user">
                                            <div class="user-img">
                                                <img src="php/images/<?php echo $row['image']; ?>">
                                            </div>
                                        </div>
                                        <div class="main-box2-creater" id="main-box2-creater">
                                            <form action="" method="POST" enctype="multipart/form-data">
                                            <div class="write-container" id="write-container">
                                                <div id="tweet-box">
                                                    <div for="textarea" class="textarea">
                                                        <textarea id="text" name="status" placeholder="What is Happening?!"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-container" id="media-container">
                                                <div class="media-area">
                                                    <div class="media-icon-box">
                                                        <div class="media-icon" role="button" id="input-img"><i class="fa-regular fa-image"></i>
                                                        </div>
                                                        <input type="file" accept="image/jpeg, image/png, image/webp, image/gif, video/mp4, video/quicktime" id="input-media" name="file">
                                                        <div class="media-icon" role="button"><i class="fas fa-gift"></i></div>
                                                        <div class="media-icon" role="button"><i class="fa-solid fa-square-poll-vertical"></i></div>
                                                        <div class="media-icon" role="button"><i class="fa-regular fa-face-smile"></i></div>
                                                        <div class="media-icon" role="button"><i class="fa-regular fa-calendar"></i></div>
                                                        <div class="media-icon" role="button"><i class="fa-solid fa-location-dot"></i></div>
                                                    </div>
                                                    <div class="media-button" id="tweet-button">
                                                        <div class="post-button">
                                                            <div class="post-span button">
                                                                <input id="tweetButton" type="submit" name="submit" value="Tweet">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-box3-a" id="main-box3-a">
                        
    <?php 

        $sql = mysqli_query($conn, "select * from tweets where unique_id = '{$_SESSION['unique_id']}' order by created_at desc");
        if($sql){
            while($row = mysqli_fetch_assoc($sql)) {
            $post_id = $row['post_id'];
            $status = $row['status'];
            $image = $row['image'];
            $video = $row['video'];
            $created_at = $row['created_at'];

            echo '
            <div class="main-sub-box3 for-hover">
        <div class="tweet-container">
            <div class="dummy-tweet-box"></div>
            <article>
                <div class="tweet-box">
                    <div class="tweet-sub-box">
                        <div class="twitter-user-img">
                            <div class="user-img">
                                <img src="php/images/'. $user_img .'">
                            </div>
                        </div>
                        <div class="twitter-post-section">
                            <div class="tweet-user-box1">
                                <div class="tweet-row1">
                                    <div class="tweet-u-b">
                                        <div class="tweet-u-b1">
                                            <div class="t-u-a">
                                                <a href="#">
                                                    <div class="a-user">
                                                        <div><span>
                                                        '. $name .'</span></div>
                                                        <div><img src="logo/Blue-Tick.png" style="width:14px; height:14px; margin-left:4px;margin-right:4px;"></div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="t-u-s">
                                                <span>@'. $name .' . '. $created_at .'</span>
                                            </div>
                                        </div>
                                        <div class="tweet-u-b2" onclick="optionButton(this)">
                                            <i class="fa-solid fa-ellipsis-vertical fa-rotate-90"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="tweet-row2">
                                    <div class="t-thought">
                                       <span>'. $status .'</span>
                                    </div>
                                </div>
                                <div class="tweet-media">
                                ';
                               
                               if(!empty($image) && empty($video)){
                                    echo '<img src="php/images/'.$image.'">';
                               } if(empty($image) && !empty($video)){
                                    echo '
                                    <video controls>
                                        <source src="php/images/'.$video.'" type="video/mp4">
                                    </video>
                                    ';
                               }

                                echo '
                                </div>
                                <div class="activity-container">
                                    <div class="activity-section">
                                        <div class="react-box-card">
                                            <div class="react-section">
                                                <div class="react-container comment">
                                                    <div class="react-icon"><i class="far fa-comment"></i></div>
                                                    <div class="react-span"><span>1902</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="react-box-card">
                                            <div class="react-section">
                                                <div class="react-container retweet">
                                                    <div class="react-box"><i class="fa-solid fa-retweet"></i></div>
                                                    <div class="react-span"><span>1745</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="react-box-card">
                                            <div class="react-section">
                                                <div class="react-container like">
                                                    <div class="react-box "><i class="fa-regular fa-heart"></i></div>
                                                    <div class="react-span "><span>8902</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="react-box-card">
                                            <div class="react-container view">
                                                <div class="react-box"><i class="fa-solid fa-chart-simple"></i></div>
                                                <div class="react-span"><span>596.2k</span></div>
                                            </div>
                                        </div>
                                        <div class="react-box-card share">
                                            <div class="react-container ">
                                                <div class="react-box"><i class="fa-solid fa-arrow-up-from-bracket"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <div class="custom-container" id="custom-container" style="display: none;">
        <div class="custom-section">
            <div class="custom-box">
                <div class="custom-icon">
                    <i class="fa-solid fa-pen"></i>
                </div>
                <div class="custom-span">
                    <span>Edit</span>
                </div>
            </div>
            <div class="custom-box" data-post_id='. $post_id .' onclick="deletePost(this)">
                <div class="custom-icon">
                    <i class="fa-solid fa-trash"></i>
                </div>
                <div class="custom-span">
                    <span>Delete</span>
                </div>
            </div>
        </div>
        <div class="cross-icon" id="cross-icon" onclick="closeTab(this)">
            <i class="fa-regular fa-circle-xmark"></i>
        </div>
    </div>
        </div>
    </div>
            ';
            }
        }
    ?>

    
<div class="main-sub-box3 for-hover">
                                <div class="tweet-container">
                                    <div class="dummy-tweet-box"></div>
                                    <article>
                                        <div class="tweet-box">
                                            <div class="tweet-sub-box">
                                                <div class="twitter-user-img">
                                                    <div class="user-img">
                                                        <img src="logo/dp-img3.jpg">
                                                    </div>
                                                </div>
                                                <div class="twitter-post-section">
                                                    <div class="tweet-user-box1">
                                                        <div class="tweet-row1">
                                                            <div class="tweet-u-b">
                                                                <div class="tweet-u-b1">
                                                                    <div class="t-u-a">
                                                                        <a href="#">
                                                                            <div class="a-user">
                                                                                <div><span>
                                                                                        Velina Tchakarova</span></div>
                                                                                <div><img src="logo/Blue-Tick.png" style="width:14px; height:14px; margin-left:4px;margin-right:4px;"></div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="t-u-s">
                                                                        <span>@vtchakarova . 19h</span>
                                                                    </div>
                                                                </div>
                                                                <div class="tweet-u-b2" onclick="optionButton(this)">
                                                                    <i class="fa-solid fa-ellipsis-vertical fa-rotate-90"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tweet-row2">
                                                            <div class="t-thought">
                                                                <span>Happy #IndependenceDay, India <img src="logo/india.svg" style="width:20px; height:20px;">! This is #India's year given its role in #G20, #BRICS, #QUAD, and many more international forums. #geopolitics #Velsig</span>
                                                                <span class="hash-tag">
                                                                    #India #IndependenceDay #HarGharTiranga@narendramodi
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="tweet-media" id="tweet-vedio">
                                                            <video controls class="landscape portrait">
                                                                <source src="logo/twitter-vedio2.mp4" type="video/mp4">
                                                            </video>
                                                        </div>
                                                        <div class="activity-container">
                                                            <div class="activity-section">
                                                                <div class="react-box-card">
                                                                    <div class="react-section">
                                                                        <div class="react-container comment">
                                                                            <div class="react-icon"><i class="far fa-comment"></i></div>
                                                                            <div class="react-span"><span>1902</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="react-box-card">
                                                                    <div class="react-section">
                                                                        <div class="react-container retweet">
                                                                            <div class="react-box"><i class="fa-solid fa-retweet"></i></div>
                                                                            <div class="react-span"><span>1745</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="react-box-card">
                                                                    <div class="react-section">
                                                                        <div class="react-container like">
                                                                            <div class="react-box "><i class="fa-regular fa-heart"></i></div>
                                                                            <div class="react-span "><span>8902</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="react-box-card">
                                                                    <div class="react-container view">
                                                                        <div class="react-box"><i class="fa-solid fa-chart-simple"></i></div>
                                                                        <div class="react-span"><span>596.2k</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="react-box-card share">
                                                                    <div class="react-container ">
                                                                        <div class="react-box"><i class="fa-solid fa-arrow-up-from-bracket"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="main-sub-box3 for-hover">
                                <div class="tweet-container">
                                    <div class="dummy-tweet-box"></div>
                                    <article>
                                        <div class="tweet-box">
                                            <div class="tweet-sub-box">
                                                <div class="twitter-user-img">
                                                    <div class="user-img">
                                                        <img src="logo/dp-img1.jpg">
                                                    </div>
                                                </div>
                                                <div class="twitter-post-section">
                                                    <div class="tweet-user-box1">
                                                        <div class="tweet-row1">
                                                            <div class="tweet-u-b">
                                                                <div class="tweet-u-b1">
                                                                    <div class="t-u-a">
                                                                        <a href="#">
                                                                            <div class="a-user">
                                                                                <div><span>Geert Wilders</span></div>
                                                                                <div><img src="logo/Blue-Tick.png" style="width:14px; height:14px; margin-left:4px;margin-right:4px;"></div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="t-u-s">
                                                                        <span>@geertwilderspvv · 1h</span>
                                                                    </div>
                                                                </div>
                                                                <div class="tweet-u-b2" onclick="optionButton(this)">
                                                                    <i class="fa-solid fa-ellipsis-vertical fa-rotate-90"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tweet-row2">
                                                            <div class="t-thought">
                                                                <span>Congratulations #India with your Independence Day on August 15! A strong and true democracy, secular, but with a dominant Hindu identity and values. I cherish my friendship with the Indian and Hindu people.

                                                                    I love you India ❤️
                                                                </span>
                                                                <span class="hash-tag"> #independanceday
                                                                    #IndependenceDayIndia
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="tweet-media">
                                                            <img src="logo/tiranga.jpg">
                                                        </div>
                                                        <div class="activity-container">
                                                            <div class="activity-section">
                                                                <div class="react-box-card">
                                                                    <div class="react-section">
                                                                        <div class="react-container comment">
                                                                            <div class="react-icon"><i class="far fa-comment"></i></div>
                                                                            <div class="react-span"><span>15</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="react-box-card">
                                                                    <div class="react-section">
                                                                        <div class="react-container retweet">
                                                                            <div class="react-box"><i class="fa-solid fa-retweet"></i></div>
                                                                            <div class="react-span"><span>17</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="react-box-card">
                                                                    <div class="react-section">
                                                                        <div class="react-container like">
                                                                            <div class="react-box "><i class="fa-regular fa-heart"></i></div>
                                                                            <div class="react-span "><span>361</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="react-box-card">
                                                                    <div class="react-container view">
                                                                        <div class="react-box"><i class="fa-solid fa-chart-simple"></i></div>
                                                                        <div class="react-span"><span>42.6k</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="react-box-card share">
                                                                    <div class="react-container ">
                                                                        <div class="react-box"><i class="fa-solid fa-arrow-up-from-bracket"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="main-sub-box3 for-hover">
                                <div class="tweet-container">
                                    <div class="dummy-tweet-box"></div>
                                    <article>
                                        <div class="tweet-box">
                                            <div class="tweet-sub-box">
                                                <div class="twitter-user-img">
                                                    <div class="user-img">
                                                        <img src="logo/dp-isro.jpg">
                                                    </div>
                                                </div>
                                                <div class="twitter-post-section">
                                                    <div class="tweet-user-box1">
                                                        <div class="tweet-row1">
                                                            <div class="tweet-u-b">
                                                                <div class="tweet-u-b1">
                                                                    <div class="t-u-a">
                                                                        <a href="#">
                                                                            <div class="a-user">
                                                                                <div><span>ISRO</span></div>
                                                                                <div><img src="logo/Blue-Tick.png" style="width:14px; height:14px; margin-left:4px;margin-right:4px;"></div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="t-u-s">
                                                                        <span>@isro . 2h</span>
                                                                    </div>
                                                                </div>
                                                                <div class="tweet-u-b2" onclick="optionButton(this)">
                                                                    <i class="fa-solid fa-ellipsis-vertical fa-rotate-90"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tweet-row2">
                                                            <div class="t-thought">
                                                                <span>Chandrayaan-3 Mission:
                                                                    India celebrates #InternationalMoonDay 2023 by propelling Chandrayaan-3 🛰️ a step closer to the Moon.

                                                                    The fourth orbit-raising maneuver (Earth-bound perigee firing) is performed successfully from ISTRAC/ISRO, Bengaluru.

                                                                    The next firing is planned for July 25, 2023, between 2 and 3 pm IST.</span>
                                                                <span class="hash-tag">#Chandrayaan3</span>
                                                            </div>
                                                        </div>
                                                        <div class="tweet-media">
                                                            <img src="logo/chandrayaan3.jpg">
                                                        </div>
                                                        <div class="activity-container">
                                                            <div class="activity-section">
                                                                <div class="react-box-card">
                                                                    <div class="react-section">
                                                                        <div class="react-container comment">
                                                                            <div class="react-icon"><i class="far fa-comment"></i></div>
                                                                            <div class="react-span"><span>105</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="react-box-card">
                                                                    <div class="react-section">
                                                                        <div class="react-container retweet">
                                                                            <div class="react-box"><i class="fa-solid fa-retweet"></i></div>
                                                                            <div class="react-span"><span>1700</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="react-box-card">
                                                                    <div class="react-section">
                                                                        <div class="react-container like">
                                                                            <div class="react-box "><i class="fa-regular fa-heart"></i></div>
                                                                            <div class="react-span "><span>12.8k</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="react-box-card">
                                                                    <div class="react-container view">
                                                                        <div class="react-box"><i class="fa-solid fa-chart-simple"></i></div>
                                                                        <div class="react-span"><span>773.4k</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="react-box-card share">
                                                                    <div class="react-container ">
                                                                        <div class="react-box"><i class="fa-solid fa-arrow-up-from-bracket"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="main-box3-b" style="display: none;" id="main-box3-b">

                            <div class="main-box3-section">
                                <div class="main-box3-container">
                                    <div class="box3-head">
                                        <span>Welcome to Twitter!</span>
                                    </div>
                                    <div class="box3-text">
                                        <span>This is the best place to see what's happening in your world. Find some people and topics to follow now.</span>
                                    </div>
                                    <a href="#" class="box3-link">
                                        <div class="box3-span">
                                            <span>Let's go!</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="sub-section2">
                    <div class="section2-container">
                        <div class="side-section">
                            <div class="side-bar">
                                <div class="side-box1">
                                    <div class="search-box">
                                        <form action="#">
                                            <div class="form-section">
                                                <div class="search-icon">
                                                    <i class="fa-solid fa-magnifying-glass fa-lg"></i>
                                                </div>
                                                <div class="form-input-search">
                                                    <input class="searchInput" type="text" placeholder="Search Twitter">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="dummy-box"></div>
                                <div class="side-box2">
                                    <div class="verified-section">
                                        <div class="section1">
                                            <span>Get Verified</span>
                                        </div>
                                        <div class="section2">
                                            <span>Subscribe to unlock new features.</span>
                                        </div>
                                        <a href="#">
                                            <div class="section3">
                                                <span class="a-span">Get Verified</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="side-box3">
                                    <div class="heading-section">
                                        <div class="sub-heading">
                                            <h2>What's happening</h2>
                                        </div>
                                    </div>
                                    <div class="live-section for-hover">
                                        <div class="live-sub-section">
                                            <div class="live-box1">
                                                <div class="live-heading1">
                                                    <div class="live-span"><span>FIFA Women's World Cup</span></div>
                                                    <div class="live-span"><span>.</span></div>
                                                    <div class="live-span"><span>LIVE</span></div>
                                                </div>
                                                <div class="live-heading2">
                                                    <span>Canada vs Australia</span>
                                                </div>
                                            </div>
                                            <div class="live-box2">
                                                <img src="logo/img1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trending-section for-hover">
                                        <div class="trending-tweet">
                                            <div class="trending-area">
                                                <div class="topic-area"><span>Science . Trending</span></div>
                                                <div class="trending-topic"><span>#Chandrayaan3</span></div>
                                                <div class="tweet-count"><span>11.4K Tweets</span></div>
                                                <div class="more-icon">
                                                    <div class="icon-box">
                                                        <i class="fa-solid fa-ellipsis-vertical fa-rotate-90"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trending-section for-hover">
                                        <div class="trending-tweet">
                                            <div class="trending-area">
                                                <div class="topic-area"><span>Trending in India</span></div>
                                                <div class="trending-topic"><span>#Gurugram</span></div>
                                                <div class="tweet-count"><span>17K Tweets <a href="#" class="hash-tag">#gurugram</a></span></div>
                                                <div class="more-icon">
                                                    <div class="icon-box">
                                                        <i class="fa-solid fa-ellipsis-vertical fa-rotate-90"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trending-section for-hover">
                                        <div class="trending-tweet">
                                            <div class="trending-area">
                                                <div class="topic-area"><span>Entertainment . Trending</span></div>
                                                <div class="trending-topic"><span>#ElvishIsTheBoss</span></div>
                                                <div class="tweet-count"><span>363K Tweets</span></div>
                                                <div class="more-icon">
                                                    <div class="icon-box">
                                                        <i class="fa-solid fa-ellipsis-vertical fa-rotate-90"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trending-section for-hover">
                                        <div class="trending-tweet">
                                            <div class="trending-area">
                                                <div class="topic-area"><span>Trending in India</span></div>
                                                <div class="trending-topic"><span>#ElvishArmy</span></div>
                                                <div class="tweet-count"><span>69.4K Tweets</span></div>
                                                <div class="more-icon">
                                                    <div class="icon-box">
                                                        <i class="fa-solid fa-ellipsis-vertical fa-rotate-90"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="show-more-section for-hover">
                                        <a href="#">
                                            <div class="show-more">
                                                <span>Show more</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="side-box4">
                                    <div class="follow-section">
                                        <div class="follow-sub-section">
                                            <div class="heading-section">
                                                <div class="sub-heading">
                                                    <h2>Who to follow</h2>
                                                </div>
                                            </div>
                                            <div class="follow-container">
                                                <div class="follow-sub-container">
                                                    <div class="follow-sub-area">
                                                        <div class="user-img follow-img">
                                                            <img src="logo/img3.jpg">
                                                        </div>
                                                        <div class="user-area">
                                                            <div class="user-sub-area">
                                                                <div class="user-name-box">
                                                                    <div class="name-span"><span>Deserted Places</span></div>
                                                                    <div class="username-span"><span>@Desertedpicx</span></div>
                                                                </div>
                                                                <div class="follow-area">
                                                                    <div class="follow-button">
                                                                        <span>Follow</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="follow-sub-container">
                                                    <div class="follow-sub-area">
                                                        <div class="user-img follow-img">
                                                            <img src="logo/img4.jpg">
                                                        </div>
                                                        <div class="user-area">
                                                            <div class="user-sub-area">
                                                                <div class="user-name-box">
                                                                    <div class="name-span"><span>Dr Narottam Mishra</span><img src="logo/Blue-Tick.png"></div>
                                                                    <div class="username-span"><span>@drnarottammisra</span></div>
                                                                </div>
                                                                <div class="follow-area">
                                                                    <div class="follow-button">
                                                                        <span>Follow</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="follow-sub-container">
                                                    <div class="follow-sub-area">
                                                        <div class="user-img follow-img">
                                                            <img src="logo/img5.jpg">
                                                        </div>
                                                        <div class="user-area">
                                                            <div class="user-sub-area">
                                                                <div class="user-name-box">
                                                                    <div class="name-span"><span>Conde Nast Traveller</span><img src="logo/Golden-icon.png"></div>
                                                                    <div class="username-span"><span>@cntraveller</span></div>
                                                                </div>
                                                                <div class="follow-area">
                                                                    <div class="follow-button">
                                                                        <span>Follow</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="show-more-section for-hover">
                                                <a href="#">
                                                    <div class="show-more">
                                                        <span>Show more</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="side-box5">
                                    <nav class="footer-navbar">
                                        <a href="#"><span>Terms of Service</span></a>
                                        <a href="#"><span>Privacy Policy</span></a>
                                        <a href="#"><span>Cookie Policy</span></a>
                                        <a href="#"><span>Accessibility</span></a>
                                        <a href="#"><span>Ads info</span></a>
                                        <div class="footer-box1">
                                            <div class="footer-more">
                                                <span>More</span>
                                                <i class="fa-solid fa-ellipsis-vertical fa-rotate-90"></i>
                                            </div>
                                        </div>
                                        <div class="footer-box1">
                                            <span>© 2023 X Corp.</span>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

   
    <div class="custom-container tooltip" id="tooltip" style="display: none;">
        <div class="custom-section">
            <div class="custom-box">
                <div class="custom-span">
                    <span>Add an existing account</span>
                </div>
            </div>
            <div class="custom-box">
                <div class="custom-span">
                    <a href="php/logout.php?logout_id=<?php echo $_SESSION['unique_id']; ?>"><span>Log out @<?php echo $name; ?></span></a>
                </div>
            </div>
        </div>
        <div class="cross-icon cross" id="cross-icon" onclick="closeTab2(this)">
            <i class="fa-regular fa-circle-xmark"></i>
        </div>
    </div>

    <script src="JavaScript/twitter-clone.js"></script>
    <script src="JavaScript/tweet.js"></script>
    <script src="JavaScript/delete.js"></script>
</body>

</html>