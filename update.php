<?php require_once 'config.php';
$name = $github = $youtube= $description =$image = $image_text= '';
$name_err = $github_err = $youtube_err = $description_err =$image_err = '';

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["postImg"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

function cleanYoutubeUrl($theurl){
    $youtube = str_replace("watch?v=","embed/", $theurl);
    return $youtube;
//"https://www.youtube.com/watch?v=XmC-iK3YfDg
//"https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1"
//https://www.youtube.com/embed/uZiOB3zU5ak?controls=0"
}
// src="https://www.youtube.com/embed/uZiOB3zU5ak" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
if(isset($_POST['updateBtn']) && !empty($_POST['id'])){
    $id = $_POST['id'];

    $input_name = trim($_POST['postName'],' ');
    $input_github = trim($_POST['githubUrl'],' ');
//    $input_youtube= trim($_POST['youtubeUrl'], ' ');
    $input_youtube = cleanYoutubeUrl($_POST['youtubeUrl']);
    $input_description = trim($_POST['description'],' ');
    $input_image = $target_file;
//    validate inputs
    if(empty($input_name)){
        $name_err = "Please enter the name of the tour";
    }else{
        $name = $input_name;
    }
    if(empty($input_github)){
        $github_err = "Please enter the github  url";
    }else{
        $github = $input_github;
    }
    if(empty($input_youtube)){
        $youtube_err = "Please enter the youtube  url";
    }else{
       $youtube = $input_youtube;
    }
    if(empty($input_description)){
        $description_err = "Description cannot be left empty";
    }else{
        $description = $input_description;
    }

    if(empty($input_image )){
        $image_text = $_POST['postImg'];
    }else{
        $image  = $input_image ;
    }

    if($target_file == 'uploads/'){
        $image = $_POST['tourImgText'];
        $sql = "UPDATE `projects` SET `name`='$name',`image`='$image',`github`='$github',`description`='$description',`youtube`='$youtube' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            header("location: details.php?id=$id");
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }else{
        $check = getimagesize($_FILES["postImg"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (move_uploaded_file($_FILES["postImg"]["tmp_name"], $target_file)) {
            $sql = "UPDATE projects SET name='$name',image='$image',github='$github',description='$description',youtube='$youtube' WHERE id='$id'";
            if (mysqli_query($conn, $sql)) {
                header("location: details.php?id=$id");
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        mysqli_close($conn);
    }
}
?>
