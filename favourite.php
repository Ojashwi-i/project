<?php include 'connect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/03afbd77fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="draft.css">
    <title>Document</title>
</head>
<body>
    
<?php

if (isset($_GET["id"])) {
    $user_id = $_GET["id"];
    // echo $user_id;
    $sql = "SELECT * FROM `draft` WHERE Id=$user_id";
    // echo $sql;
    $result= $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { ?>

            <div class="drafts">
                <div class="imgspace">
                    <img src="images/<?php echo $row['image']; ?>" alt="image">
                </div>
                <div>
                    <div class="content1">           
                        <h5 class="title"><?php echo $row["title"]; ?></h5>
                        <div class="icons">
                            <i class="fa-regular fa-heart margin"></i>
                            <i class="fa-regular fa-bookmark margin"></i>
                            <i class="fa-solid fa-trash margin"></i>
                            <i class="fa-solid fa-eye margin"></i>
                        </div>
                    </div>
                    <div class="content2">
                        <div style="color: red;">Draft</div>
                        <div class="margin">Date</div>
                        <div style="margin-left: 415px;">Comments</div>
                        <div class="margin">0 Views</div>
                    </div>
                </div>
            </div>
    <?php
        }
    }
}

?>

</body>
</html>