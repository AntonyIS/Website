<?php


function clean_data($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['postBtn'])){
    $name = $github = $youtube = $description = '';
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $name = clean($_POST['name']);
    $github = clean($_POST['github']);
    $youtube = clean($_POST['youtube']);
    $description = clean($_POST['description']);

    $image = ltrim($target_file);
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
//        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO `projects`(`id`, `name`, `image`, `github`, `description`, `youtube`) VALUES (NULL,'$name','$image','$github','$description','$youtube')";
        include 'config.php';
        if(mysqli_query($conn,$sql)){
            header('location:index.php');
        }else{
            echo "Saving unsuccessfull";
            echo mysqli_error($conn);
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
include "header.php";
?>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data" style="margin-bottom: 55px">
                    <fieldset class="border p-2">
                        <legend class="w-auto" >Post project</legend>
                        <div class="form-group" style="padding: 0px 10px 0px 10px">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name..." required>
                        </div>
                        <div class="form-group"   style="padding: 0px 10px 10px 10px">
                            <label for="github">Github</label>
                            <input type="url" name="github" class="form-control" placeholder="Github link...">
                        </div>
                        <div class="form-group"   style="padding: 0px 10px 10px 10px">
                            <label for="youtube">Youtube</label>
                            <input type="url" name="youtube" class="form-control" placeholder="Youtube link...">
                        </div>
                        <div class="form-group"   style="padding: 0px 10px 10px 10px">
                            <textarea name="description" id="" cols="32" rows="10" placeholder="Description...."></textarea>
                        </div>
                        <div class="form-group"   style="padding: 0px 10px 10px 10px">
                            <input type="file" name="image" class="">
                        </div>
                        <button type="submit"  name="postBtn" class="btn btn-block" style="background-color: orange">Post project</button>
                    </fieldset>
                </form>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
        </div>
    </div>
<?php include "footer.php";?>
