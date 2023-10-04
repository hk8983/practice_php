<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'links.php' ?>
</head>

<body class="container my-4">
    <h1 class="mb-4">Contact Us</h1>
    <form method="POST" action="">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">id</label>
            <input type="number" class="form-control" name="id">
        </div>
        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" name="mobile">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Save</button>
        <br />
        <br />
        <a href="displaydata.php">Check Orders</a>
    </form>
</body>

</html>

<?php

include 'connection.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $insertquery = "insert into test123table(id,name,mobile) values('$id','$name', '$mobile')";

    $res = mysqli_query($conn, $insertquery);

    if ($res) {
?>
        <script>
            alert("Data Submited Sucessfully")
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Data Not Submited")
        </script>
<?php
    }
}
?>