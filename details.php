<?php

//fetch tour from the database
include "config.php";

//session_start();
//$id=$name=$description=$image='';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT `id`, `name`, `image`, `github`, `description`, `youtube` FROM `projects` WHERE id=$id";

    $result = mysqli_query($conn, $sql) or die($id);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $image = $row['image'];
    $github = $row['github'];
    $description = $row['description'];
    $youtube = $row['youtube'];


}
include 'header.php';
?>
<div class="container-fluid" id="detial-section" style="margin-bottom: 10px;background-image: url(<?php echo $image?>)">
</div>
<div class="container">
    <h2 style="text-align: center;color: orange"><?php echo $name;?></h2>
    <hr>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <img src="<?php echo $image; ?>" alt="" class="img-thumbnail shadow-lg p-1 mb-5 bg-white">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
            <p class="lead form-group shadow-lg p-1 mb-5 bg-white">
                <?php echo $description ;?>
            </p>
            <div class="row" style="text-align: right;margin-top: -20px">
                <a href="<?php echo $github?>" >
                    <i class='fab fa-github ' style='font-size:36px'></i>
                </a>
                <a href="<?php echo $youtube?>" >
                    <i class='fab fa-youtube ' style='font-size:36px'></i>
                </a>
                <a href="https://twitter.com/intent/tweet?button_hashtag=LoveTwitter&ref_src=twsrc%5Etfw" data-show-count="false">
                    <i class='fab fa-twitter ' style='font-size:36px'></i>
                </a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <iframe width="1114" height="315"
                    src="<?php echo $youtube ?>">
            </iframe>
        </div>
    </div>
</div>

<?php
if(isset($_SESSION['loggedin']))
{
    include '_update.php';
}



include 'footer.php'?>
