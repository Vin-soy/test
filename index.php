<?php
$sname = "localhost";
$uname = "root"; 
$password = "";
$db_name = "image";

$conn = mysqli_connect($sname, $uname, $password, $db_name);
if (!$conn) {
    echo "Connection failed!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        .img {
            width:200px; 
            height:200px;
            border-radius: 100%;
        }
    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="picture" accept="image/*">
        <input type="submit" name="submit" value="Upload">
    </form>
    <br>
    <h3>Display Image</h3>
    <?php 
    $sel = "SELECT * FROM pictures";
    $que = mysqli_query($conn,$sel);

    $output = "";

    if(mysqli_num_rows($que)){
       $output .= "<h3>Pag upload sa</h3>";
    }

    $row = mysqli_fetch_array($que);
        echo  "<img src='".$row['name']."';'>";
        
    ?>
</body>
<?php 
if(isset($_POST['submit'])){
    $file = $_FILES['picture']['name'];

    $query = "INSERT INTO pictures(name) VALUES('$file')";
    $result = mysqli_query($conn,$query);

    if($result) {
        move_uploaded_file($_FILES['picture']['tmp_name'], "$file");
    }
}
?>
</html>