<div class="container-fluid"
     style="height: 97vh;
     background-color: orange;
     color: white;
     padding-top:6%;

    ">
    <div class="" style="padding:0px 50px 0px 50px">
        <div class="row" style="margin-bottom: 15px">
            <div class="col-xs-12-col-sm-12 col-md-4 col-lg-4 col-xl-4" id="inner-section" style="padding-left: 10px;border: 3px solid white">
                <h1>Hi</h1>
                <p>I'm Antony Injila <br>A Software Developer</p>
            </div>
            <div class="col-xs-12-col-sm-12 col-md-8 col-lg-8 col-xl-8" >
                <p class="lead">
                    A versatile and professional Geographic Information System graduate with a commitment to and
                    experience of developing innovative and creative software solutions. A Geographer by training and
                    a Geo-spatial technology enthusiast with experience in Spatial Data Collection, Spatial Data Analysis,
                    Network Analysis and Imagery Analysis. Have gained computer programming experience during my
                    gap years with exposure to software development and focus on Computer Science for
                    Geographers. Actively looking for a software developer position with a fast paced and ambitious
                    company that can offer development-training, project based learning and mentoring program.
                </p>
            </div>
            <div class="container">
                <div class="bd-example" style="padding-top: 70px;padding-bottom: 20px">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <i class="fab fa-android " style="font-size: 200px" id="js"></i>
                                <i class="fab fa-react " style="font-size: 200px" id="js"></i>
                                <i class="fab fa-node " style="font-size: 200px" id="js"></i>
                                <i class="fab fa-git" style="font-size: 200px" id="js"></i>
                            </div>
                            <div class="carousel-item">
                                <img src="images/django.png" alt="" style="height: 200px;width: 200px;">
                                <img src="images/flask2.jpeg" alt="" style="height: 200px;width: 200px;border-radius: 35px">
                                <img src="images/react1.png" alt="" style="height: 200px;width: 300px">
                                <img src="images/node1.png" alt="" style="height: 200px;width: 300px">
                            </div>
                            <div class="carousel-item">
                                <img src="images/django.png" alt="" style="height: 200px;width: 200px">
                                <img src="images/flask2.jpeg" alt="" style="height: 200px;width: 200px;border-radius: 35px">
                                <img src="images/react1.png" alt="" style="height: 200px;width: 300px">
                                <img src="images/node1.png" alt="" style="height: 200px;width: 300px">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true" style="color: green"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true" style="color: black"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="margin-top: -200px">
    <div class="container">
        <div class="row">

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <?php
                if(isset($_GET['success_msg'])){
                    $success = $_GET['success_msg'];
                    echo "<p class='lead bg-success' style='padding: 15px;color: white;border-radius: 25px'>$success</p>";
                }
                ?>
                <img src="uploads/favicon.jpg" alt="" class="shadow-lg p-1 mb-2 bg-orange"
                style="height: 340px;width: 340px ;border-radius:50%;border: 5px solid white"
                >
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
        </div>
    </div>
</div>
