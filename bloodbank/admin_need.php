<?php
require("connect.php");
$query = "select * from need_blood";
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
                <h3 class="text-primary"><i class="fa fa-procedures"></i> Need Blood </h3>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr class="bg-dark text-white">
                            <td>Id</td>
                            <td>Name</td>
                            <td>Gender</td>
                            <td>Blood Group</td>
                            <td>Body Weight</td>
                            <td>Email</td>
                            <td>Number</td>
                            <td>City</td>
                            <td>Address</td>
                            <td>New Doner</td>
                            <td>Address</td>
                            <td>New Doner</td>
                        </tr>
                        <tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['gender'] ?></td>
                                <td><?php echo $row['blood'] ?></td>
                                <td><?php echo $row['bunit'] ?></td>
                                <td><?php echo $row['dname'] ?></td>
                                <td><?php echo $row['city'] ?></td>
                                <td><?php echo $row['address'] ?></td>
                                <td><?php echo $row['contact'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['date'] ?></td>
                                <td><?php echo $row['reason'] ?></td>
                        </tr>
                    <?php
                            }
                    ?>
                    </table>
                </div>


                <!-- <?php include("./partials/footer.php") ?> -->
</body>

</html>