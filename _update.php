
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="align-content: center" >
            <form action="update.php" role="form"  method="post" enctype="multipart/form-data" id="update-form" class="shadow-lg p-3 mb-5 bg-white">
                <h1>Update <?php  echo $name?> </h1>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="postName" value="<?php echo $name?>" style="padding: 20px">
                </div>
                <div class="form-group">
                    <label for="">Github</label>
                    <input type="url" class="form-control" name="githubUrl" value="<?php echo $github?>">
                </div>
                <div class="form-group">
                    <label for="">Youtube</label>
                    <input type="url" class="form-control" name="youtubeUrl" value="<?php echo $youtube?>">
                </div>

                <div class="form-group">
                     <textarea name="description" id="" cols="53" rows="9" ><?echo $description?></textarea>
                </div>
                <div class="form-group">
                    <input type="text" hidden name="tourImgText" value="<?php echo $image?>" >
                    <input type="file"  name="postImg" value="<?php echo $image?>" >
                </div>
                <input type="text" name="id" hidden value="<?php echo $id ?>">
                <div style="text-align: center">
                    <button type="submit" class="btn btn-info btn-lg" name="updateBtn" style="margin-top:10px"><i class="fas fa-pen-square"></i></button>
                    <a href="delete.php?id=<?php echo $id;
                    ?>" class="btn btn-danger btn-lg" style="margin-top:10px"><i class="fas fa-trash-alt"></i></a>
                </div>
            </form>

        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="min-height:30px ">
            <img src="<?php echo $image?>" alt="" class="img-fluid shadow-lg p-1 mb-5 bg-white " style="width: 100%">
            <p class="lead  shadow-lg p-1 mb-5 " style="text-align: justify;padding: 30px">
                <?php echo $description ?>
            </p>
        </div>
    </div>
</div>

<br>