<?php include 'header.php'; ?>

<?php include 'landing_page.php'?>



    <div class="container" style="margin-top: 20px;height: 78vh" id="projects">
<!--        <h1 class="shadow-lg p-1 mb-5 bg-white" style="text-align: center;padding-top: 30px">Apps</h1>-->
        <hr>

        <?php


        include 'config.php';
        $sql = "SELECT * FROM `projects`";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)> 0){

            echo "<div class='row' id='#section-one'>";
            while($row = mysqli_fetch_array($result)) {
                $image = $row['image'];
                $name = $row['name'];
                $github = $row['github'];
                $description= $row['description'];
                $youtube= $row['youtube'];
                $id = $row['id'];


                echo "<div class='col-xs-4 col-sm-4 col-md-6 col-lg-4' id='item' >";
                echo "<div class='img-thumbnail shadow-lg p-1 mb-5 bg-white' id='item_css'>";
                echo "<a href='details.php?id=$id' style='text-decoration: none'>";
                ?>
                <p class="lead"  id="effecD" style="display: none">
                      <?php echo  $description?>
                </p>
                <?php
                echo "<img src='$image' alt='' class='card-img' style='height: 218px;' id='$id'>";
                ?>

                <?php
                echo "<div class='caption'>";
                echo "<p class='lead ' style='text-align: center;margin-top: 8px;color:orange;font-weight: bold'>$name</p>";
                echo "<hr>";

                echo "</div>";
                echo "</a>";
                echo "</div>";
                echo "</div>";

            }
            echo "</div>";

        }else{
            echo "<div>No apps</div>";
        };
        ?>
    </div>
<div class="container-fluid" style="background-color:orange;height: 94vh;" id="latestTech" >
    <div class="">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding-top: 100px;padding-left: 100px">
                <h2>Trending technologies </h2>
                <p class="lead">
                    Artificial intelligence (AI) is the simulation of human intelligence processes by machines,
                    especially computer systems. These processes include learning (the acquisition of information
                    and rules for using the information)
                </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"  style="padding-top: 100px">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="sel1">
                        <img src="uploads/code2.jpeg" alt="" class="img-thumbnail" style="height:200px;width;300" id="touch1">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="sel2">
                        <img src="uploads/code4.jpeg" alt="" class="img-thumbnail" style="display: none" id="touch2">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="padding-top: 80px">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="sel3">
                        <img src="uploads/code1.jpeg" alt="" class="img-thumbnail" style="height: 23vh;display: none" id="touch3">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" id="sel4">
                        <img src="uploads/code3.jpeg" alt="" class="img-thumbnail" id="touch4" style="height:200px;width;300">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"  style="padding-top: 100px;">
                <h2>Trending technologies </h2>
                <p class="lead">
                    Machine learning (ML) is the scientific study of algorithms and statistical models that computer
                    systems use to perform a specific task without using explicit instructions, relying on patterns
                    and inference instead. It is seen as a subset of artificial intelligence. Machine learning algorithms

                </p>
            </div>
        </div>
    </div>
</div>
<!--<div class="container-fluid" style="margin-top: 40px;height: 60vh;background-color: #ffffff">-->
<!--    <div class="container">-->
<!--        <h1 class="shadow-lg p-1 mb-5 bg-white" style="text-align: center;padding-top: 30px">Technologies</h1>-->
<!--       <div class="row">-->
<!--           <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">-->
<!--               <div>-->
<!--                   <i class="fab fa-python " style="font-size: 200px" id="py"></i>-->
<!--               </div>-->
<!--           </div>-->
<!--           <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">-->
<!--               <div>-->
<!--                   <i class="fab fa-js " style="font-size: 200px" id="js"></i>-->
<!--               </div>-->
<!--           </div>-->
<!--           <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">-->
<!--               <div>-->
<!--                   <i class="fab fa-java" style="font-size: 200px" id="jv"></i>-->
<!--               </div>-->
<!--           </div>-->
<!--           <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">-->
<!--               <div>-->
<!--                   <i class="fab fa-php" style="font-size: 200px" id="php"></i>-->
<!--               </div>-->
<!--           </div>-->
<!--       </div>-->
<!--        <div class="row">-->
<!--            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">-->
<!--                <div>-->
<!--                    <i class="fab fa-node " style="font-size: 200px" id="py"></i>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">-->
<!--                <div>-->
<!--                    <i class="fab fa-android " style="font-size: 200px" id="js"></i>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">-->
<!--                <div>-->
<!--                    <i class="fab fa-react" style="font-size: 200px" id="jv"></i>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">-->
<!--                <div>-->
<!--                    <i class="fab fa-database" style="font-size: 200px" id="php"></i>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div>
                    <p class="lead" style="text-align: center;display: none" id="py_">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        quod tempora tenetur voluptatibus!!
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div>
                    <div>
                        <p class="lead" style="text-align: center;display: none" id="js_">
                            Lorem ipsum dolor sit amet, consectetur adipisicing pariatur
                            quod tempora tenetur voluptatibus!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div>
                    <p class="lead" style="text-align: center;display: none" id="jv_">
                        Lorem ipsum dolor sit amet, consectetur adipisicing pariatur
                        quod tempora tenetur voluptatibus!
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div>
                    <p class="lead" style="text-align: center;display: none" id="php_">
                        Lorem ipsum dolor sit amet, consectetur adipisicing pariatur
                        quod tempora tenetur voluptatibus!
                    </p>
                </div>
            </div>
        </div>
<!--    </div>-->
<!--</div>-->

<?php include 'footer.php';?>
