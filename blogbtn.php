<?php include 'connect.php'  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/03afbd77fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="blogbtn.css">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <div class="row mb-0 mx-0 mt-5 p-0">
            <div class="col-3 m-0 profile_container">
                <div class="profile">
                    <div class="profile_pic"></div>
                    <h3>Ashim Pandey</h3><br>
                    <h6 class="main_name">@ashim.pandey99</h6>
                    <div class="info">
                        <div class="d-flex">
                            <h6>Total Blog Views</h6>
                            <h6 style="margin: 0px 0px 0px 58px;" class="number">5523</h6>
                        </div>
                        <div class="d-flex">
                            <h6>Total Comments</h6>
                            <h6 style="margin: 0px 0px 0px 58px;" class="number">621</h6>
                        </div>
                        <div class="d-flex">
                            <p>Member Since:</p>
                            <p style="margin: 3px 0px 0px 3px;" class="date">01 Jan 2022</p>
                        </div>

                    </div>
                    <div class="btns">
                        <button class="btn1">Edit profile</button> <br>
                        <button class="btn2">Change Password</button>
                    </div>
                </div>
            </div>
            <div class="col-9 m-0 sections_container">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="blogbtn.php">Create Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="draft.php">Draft</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="save.php">My Blogs</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="">My Favourite Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">My Bookmark Blogs</a>
                    </li>
                </ul>

                <div class="blogbtn">
                <h6>Want to share your travel experience?</h6>
                <h1 style="margin: 0px 0px 60px;">Create A Blog Now !</h1>
                <a href="blog.php"><img src="/images/Create.png" alt="" width="100px" height="100px"></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>