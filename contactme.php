<?php

$to = $subject = $fullnames = $message = $mail ='';
function clean($data){
    if(!empty($data)){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = str_replace("\n.", "\n..", $data);
        return $data;
    }else{
        return "Error";
    }
};
if(isset($_POST['emailBtn'])){

    $subject = clean($_POST['subject']);
    $fullnames = clean($_POST['fullnames']);
    $message = clean($_POST['message']);
    $email = clean($_POST['email']);
    $to = 'injilaantony@gmail.com';
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
    $headers .= 'From: <in>' . "\r\n";
    $headers .= 'Full names: <$fullnames>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";
//    $message_sent = mail('injilaantony@gmail.com','my subject','hello world');
//
//    if ( mail($to, 'test', 'heloo buddy', $headers)) {
//        $success_send= "You have successfully email Antony. He will get back to you as soon as he can";
//        header('location:contactme.php?success_send='.$success_send);
//        exit();
//    } else {
//        $error_send= "You have unsuccessfully email Antony.Please try again after few 10 seconds";
//        header('location:index.php?error_send='.$error_send);
//        exit();
//    }
}

?>
<hr id="rule">
<div class="container-fluid" style="height: 70vh;" id="contact">

    <div class="container">
        <div class="row" style="margin-top: 30px">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" id="deco1">

            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <?php
                     if(isset($_GET['success_send'])){
                         $success = $_SESSION['success_send'];
                         echo "<p class='lead text-success'>$success</p>";
                     }
                    if(isset($_GET['error_send'])){
                        $success = $_SESSION['error_send'];
                        echo "<p class='lead text-danger'>$success</p>";
                    }
                ?>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" style="border-radius: 25px;border:1px solid orange" class="shadow-lg p-1 mb-5 bg-white">
                   <div style="padding: 20px">
                       <h2 style="margin: 5px;text-align: center">Contact me</h2>
                       <input type="text" name="to" value="injilaantony@gmail.com" aria-hidden="true" hidden>
                       <div class="form-group">
                           <label for="subject" >Email</label>
                           <input type="email" name="email" placeholder="Email..." class="form-control"  >
                       </div>
                       <div class="form-group">
                           <label for="subject" >Subject:</label>
                           <input type="text" name="subject" placeholder="Subject..." class="form-control"  >
                       </div>
                       <div class="form-group" style="padding-left: 5px">
                           <label for="subject" >Fullnames:</label>
                           <input type="text" name="fullnames" placeholder="Fullnames" class="form-control" >
                       </div>
                       <div class="form-group">
                           <label for="message" style="text-align: right">Message:</label>
                           <textarea name="message" class="form-control" rows="5" id="comment"></textarea>
                       </div>
                       <button type="submit"  name="emailBtn" class="btn btn-block" style="background-color: orange">Send email</button>
                   </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">

            </div>
        </div>
    </div>
</div>
