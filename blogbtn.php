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
        <div class="row m-0 p-0">
            <div class="col-3 m-0 profile_container">
                <div class="profile">
                    <div class="profile_pic"></div>
                    <h3>Ashim Pandey</h3><br>
                    <h6>@ashim.pandey99</h6>
                    <div class="info">
                        <div class="flex">
                            <h6>Total Blog Views</h6>
                            <h6 class="number">number</h6>
                        </div>
                        <div class="flex">
                        <h6>Total Comments</h6>
                        <h6 class="number">number</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9 m-0 p-0">
                <a href="blog.php"><img src="/images/Create.png" alt="" width="100px" height="100px"></a>
            </div>
        </div>
    </div>
</body>

</html>