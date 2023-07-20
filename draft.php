<?php include 'connect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="draft.css">
    <title>Document</title>
</head>
<body>
<div class="drafts">

</div>
<?php

$sql = "SELECT * FROM `draft`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>




<!-- <p> <?php //echo $row["title"]; ?> </p>
<img src="images/<?php //echo $row['image']; ?>" alt="image" width="100px" height="100px"> -->

<?php
    }
}

?>

</body>
</html>