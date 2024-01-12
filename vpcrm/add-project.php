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
        <div class="row">
            <div class="col-md-8">
                <h1 class="mb-5">Add Project</h1>
            </div>
        </div>

        <form action="<?php echo WEBSITE_URL;?>add-project-server.php" method="post" enctype="multipart/form-data">
            <div class="row g-3">
                <div class="col">
                    <label class="mb-2" for="">Poject Name</label>
                    <input name="project_name" type="text" class="form-control" placeholder="project name"
                        aria-label="project name">
                </div>
                <div class="col">
                    <label class="mb-2" for="">Select Category</label>
                    <select class="form-select" aria-label="example" name="project_category">
                        <?php
                            $category_query = mysqli_query($conn,"SELECT * FROM `project_category`")or die(mysqli_error($conn));
                            while($s = mysqli_fetch_array($category_query)){
                            $cat_name = $s['category_name'];
                            $cat_id = $s['category_id'];
                        ?>
                        <option value="<?php echo $cat_id;?>"><?php echo $cat_name;?></option>
                        <?php
                        } 
                        ;?>
                    </select>
                </div>
                <div class="col-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Project Discription</label>
                    <textarea name="project_disc" class="form-control" id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>
                <div class="col">
                    <label class="mb-2" for="">Poject Date Year</label>
                    <input name="project_date" type="number" class="form-control" placeholder="Project Date"
                        aria-label="project name">
                </div>
                <div class="col">
                    <label class="mb-2" for="">Poject Image</label>
                    <input type="file" name="project_image" id="image" accept=".jpg, .png, .jpeg">
                </div>
                <div class="col-12">
                    <label class="mb-2" for="">Poject SEO</label>
                    <input name="project_seo" type="text" class="form-control" placeholder="Project SEO"
                        aria-label="project name">
                </div>
            </div>
            <button class="btn btn-primary mt-5" type="submit">Submit</button>
        </form>
    </div>
    <?php include "downscript.php";?>
</body>

</html>