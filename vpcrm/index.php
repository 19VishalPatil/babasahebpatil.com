<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'upscript.php';?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo COMPANY_NAME;?></title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-end">
            <div class="col-md-8">
                <h1 class="mb-5">View Movie</h1>
            </div>
            <div class="col-md-4">
                <a href="<?php echo WEBSITE_URL;?>add-project.php" class="btn btn-light">
                    Add Movie
                </a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sr.No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $project_query = mysqli_query($conn, "SELECT * FROM `project` ORDER BY `project_date`") or die(mysqli_error($conn));
                    $serial_number = 1; // Initialize the serial number outside the loop

                    while ($s = mysqli_fetch_array($project_query)) {
                        $project_name = $s['project_name'];
                        $project_date = $s['project_date'];
                        $project_img = $s['project_img'];
                        ?>
                <tr>
                    <th scope="row"><?php echo $serial_number; ?></th>
                    <td><?php echo $project_name; ?></td>
                    <td><?php echo $project_date; ?></td>
                    <td>
                        <img class="img-fluid" width="100" src="./assets/images/projects/<?php echo $project_img; ?>"
                            alt="">
                    </td>
                    <td>
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <?php
                        $serial_number++; // Increment the serial number for the next iteration
                    }
                    ;?>

            </tbody>
        </table>
    </div>
    <?php include "downscript.php";?>
</body>

</html>