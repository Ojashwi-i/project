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
  <link rel="stylesheet" href="blog.css">
  <title>Document</title>
</head>

<body>

  <div class="row p-0 main">
    <div class="col-sm-3 p-0"></div>
    <div class="col-sm-6 p-0 blog">
      
      <a href="blogbtn.php" class="btn btn-danger back"><i class="fas fa-xmark"></i></a>
      <div class="row">
        
        <form action="upload.php" method="post">

          <div class="col-12 mb-2 blogcontent">
            <label for="title">Title:</label>
            <textarea type="text" name="title" id="title" class="form-control title"></textarea>
          </div>

          <div class="col-12 mb-2 blogcontent">
            <label for="image">Image:</label>
            <input style="font-size: 20px; color:#007599" type="file" name="image" id="images" class="form-control">
          </div>

          <div class="col-12 blogcontent">
            <label for="content">Content:</label>
            <textarea type="text" name="content" id="content" class="form-control content"></textarea>
          </div>

            <a href="save.php" class="btn btn-primary btns mt-1 draft" name="draft">Save to Drafts</a>
            <a href="save.php" class="btn btn-primary btns  mt-1 save" name="save">Save to Blogs</a>

        </form>

      </div>

    </div>
    <div class="col-sm-3 p-0"></div>
  </div>

</body>

</html>