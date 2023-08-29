<?php include 'connect.php' ?>

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
    <div class="col-sm-3">
      <div class="row m-0 p-0">
        <div class="col-12 m-0 p-0 profile_container">
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
            <div class="profile-btns">
              <button class="btn1">Edit profile</button> <br>
              <button class="btn2">Change Password</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-6">

      <a href="blogbtn.php" class="back"><i class="fas fa-xmark"></i></a>

      <div class="row m-0 p-0">

        <form action="blog.php" class="blog" method="post" enctype="multipart/form-data">

          <div class="col-12 mb-2 blogcontent">
            <!-- <label for="title">Title:</label> -->
            <textarea type="text" name="title" id="title" placeholder="Title..." class="form-control title"></textarea>
          </div>

          <div class="col-12 mb-2 blogcontent">
            <!-- <label for="image">Image:</label> -->
            <input style="font-size: 20px;" type="file" name="image" id="image" class="form-control">
          </div>

          <div class="col-12 blogcontent">
            <!-- <label for="content">Content:</label> -->
            <textarea type="text" name="content" id="content" placeholder="Content..." class="form-control content"></textarea>
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

        <?php //include 'upload.php' ?>
      </div>

    </div>
    <div class="col-sm-3">

      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#mymodal">
        Create a Blog
      </button>

      <div class="modal fade" id="mymodal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <div class="modal-header">
              <h4 class="modal-title">Modal Heading</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form action="blog.php" class="blog" method="post" enctype="multipart/form-data">

              <!-- Modal body -->
              <div class="modal-body">
                <div class="row m-0 p-0">

                    <div class="col-12 mb-2 blogcontent">
                      <!-- <label for="title">Title:</label> -->
                      <textarea type="text" name="title" id="title" placeholder="Title..." class="form-control title"></textarea>
                    </div>

                    <div class="col-12 mb-2 blogcontent">
                      <!-- <label for="image">Image:</label> -->
                      <input style="font-size: 20px;" type="file" name="image" id="image" class="form-control">
                    </div>

                    <div class="col-12 blogcontent">
                      <!-- <label for="content">Content:</label> -->
                      <textarea type="text" name="content" id="content" placeholder="Content..." class="form-control content"></textarea>
                    </div>

                    <!-- <div class="col-12 blogcontent">
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
                    </div> -->

                  </div>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary btns  mt-4" name="save">Save to Blogs</button>
                  <button type="submit" class="btn btn-primary btns mt-4 draft" name="draft">Save to Drafts</button>
                </div>
                <?php include 'upload.php' ?>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>