<?php
include("./connect.php");
$query = "select * from message";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./partials/header.php") ?>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>

    <?php include("admin nav.php") ?>

    <div class="container" style='margin-top:130px;'>
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-9">
                <h3 class="text-primary"><i class="fa fa-envelope"></i> Inbox </h3>
                <hr>

                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr class="bg-dark text-white">
                            <td>Id</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Number</td>
                            <td>Message</td>
                        </tr>
                        <tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['number'] ?></td>
                                <td><?php echo $row['message'] ?></td>
                        </tr>
                    <?php
                            }
                    ?>
                    </table>
                </div>


                <!-- <?php include("./partials/footer.php") ?> -->
</body>

</html>