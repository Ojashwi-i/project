<?php include 'connect.php' ?>

<?php
function insertData($conn, $table) {
  if (!empty($_POST["title"]) && !empty($_FILES["image"]["name"]) && !empty($_POST["content"])) {
    $title = $_POST["title"];
    $image = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    $destination = "images/" . $image;
    move_uploaded_file($tmp_name, $destination);
    $content = $_POST["content"];

    // TODO: Use prepared statements instead of directly inserting data into the query.
    $sql = "INSERT INTO `$table` (`title`, `content`, `image`) VALUES ('$title','$content','$image')";
    $query = $conn->query($sql);

    if ($query) {
      // Insertion successful
    } else {
      echo "failed";
    }
  } else {
    echo "no data";
  }
}

// Insert data into the "blog" table
if (isset($_POST["save"])) {
  insertData($conn, "blog");
}

// Insert data into the "draft" table
if (isset($_POST["draft"])) {
  insertData($conn, "draft");
  header('location:draft.php');
}
?>



