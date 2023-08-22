<?php include 'connect.php' ?>

<?php
$title = $content = $image = " ";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM draft WHERE id = $id";
    $result = $conn->query($sql);
    if ($result) {
        $row = $result->fetch_assoc();
        $title = $row['title'];
        $content = $row['content'];
        $image = $row['image'];
        } else {
            echo "failed";
        }
    }


if (isset($_POST["save"]) && !empty($_POST["title"]) && !empty($_FILES["image"]["name"]) && !empty($_POST["content"])) {
    $id=$_GET['id_new'];
    $title = $_POST["title"];
    $image = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    $destination = "images/" . $image;
    move_uploaded_file($tmp_name, $destination);
    $content = $_POST["content"];

    $sql = "INSERT INTO `blog` (`title`, `content`, `image`) VALUES ('$title','$content','$image')";
    $delete = "DELETE FROM `draft` WHERE id = $id";
    $query = $conn->query($sql);
    $query2 = $conn->query($delete);

    if ($query) {
        header('location:save.php');
    } else {
        echo "failed";
    }

    if ($query2) {
    } else {
        echo "failed";
    }
}

if(isset($_POST['draft']) && !empty($_POST["title"]) && !empty($_FILES["image"]["name"]) && !empty($_POST["content"])){
    $id=$_GET['id_new'];
    $title = $_POST["title"];
    $image = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    $destination = "images/" . $image;
    move_uploaded_file($tmp_name, $destination);
    $content = $_POST["content"];

    $sql="UPDATE `draft` SET `title`='$title',`content`='$content',`image`='$image' WHERE id = $id";
    $query= $conn->query($sql);
    if ($query){
        header('location:draft.php');
    }else{
        echo "failed";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/03afbd77fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="blog.css">
    <title>Document</title>
</head>

<body>

    <div class="row p-0 main">
        <div class="col-sm-3 p-0"></div>
        <div class="col-sm-6">

            <a href="draft.php" class="back"><i class="fas fa-xmark"></i></a>

            <div class="row">

                <form action="update.php?id_new=<?php echo $id; ?>" class="blog" method="post" enctype="multipart/form-data">

                    <div class="col-12 mb-2 blogcontent">
                        <!-- <label for="title">Title:</label> -->
                        <php echo $vtitle; ?>
                            <textarea type="text" name="title" id="title" placeholder="Title..." class="form-control title"><?php echo $title; ?></textarea>
                    </div>

                    <div class="col-12 mb-2 blogcontent">
                        <!-- <label for="image">Image:</label> -->
                        <input style="font-size: 20px;" type="file" name="image" id="image" class="form-control">
                    </div>

                    <div class="col-12 blogcontent">
                        <!-- <label for="content">Content:</label> -->
                        <textarea type="text" name="content" id="content" placeholder="Content..." class="form-control content"><?php echo $content; ?></textarea>
                    </div>

                    <div class="col-12 blogcontent">
                        <label for="catergories">Catergory</label>
                        <select class="form-select" name="categories" id="categories">
                            <option value="">Adventure</option>
                            <option value="">Sightseeing</option>
                            <option value="">News</option>
                            <option value="">Trekking</option>
                            <option value="">Historical</option>
                            <option value="">Health and fitness</option>
                            <option value="">Fashion</option>
                            <option value="">Photography</option>
                        </select>
                        <button type="submit" class="btn btn-primary btns  mt-4" name="save">Save to Blogs</button>
                        <button type="submit" class="btn btn-primary btns mt-4 draft" name="draft">Save to Drafts</button>
                    </div>

                </form>


            </div>

        </div>
        <div class="col-sm-3 p-0"></div>
    </div>

</body>