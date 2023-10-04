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

        <?php
        include 'connection.php';
        $ids = $_GET['id'];
        $showqurry = "select * from test123table where id={$ids}";
        $shodata = mysqli_query($conn, $showqurry);
        $arrdata = mysqli_fetch_array($shodata);

        if (isset($_POST['submit'])) {
            $idupdate = $_GET['id'];
            $id = $_POST['id'];
            $name = $_POST['name'];
            $mobile = $_POST['mobile'];
            $query = "update test123table set id=$id, name='$name', mobile='$mobile' where id=$idupdate";
            $res = mysqli_query($conn, $query);

            if ($res) {
        ?>
                <script>
                    alert("Data Update Sucessfully")
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("Data Not Update")
                </script>
        <?php
            }
        }
        ?>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $arrdata['name']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">id</label>
            <input type="number" class="form-control" name="id" value="<?php echo $arrdata['id']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" name="mobile" value="<?php echo $arrdata['mobile']; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Updated</button>
        <br />
        <br />
        <a href="displaydata.php">Check Orders List</a>
    </form>
</body>

</html>