<?php
$email= $password ='';
$emailError = $passwordError = '';

function clean($data){
    if(!empty($data)){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }else{
        return "Error";
    }


};
if(isset($_POST['loginBtn'])){
    $email = clean($_POST['email']);
    $password= $_POST['password'];

    if($email === "injilaantony@gmail.com" and $password === "pass1234"){
        session_start();
        $_SESSION['loggedin'] = true;
        $success_msg = "Login Successful";
        header('location:index.php?success_msg='.$success_msg);
    }

}

include 'header.php';
?>
<div class="row" style="margin: 200px 1px 310px 1px">
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
            <fieldset class="border p-2"  >
                <legend class="w-auto" >Antony Injila<?php include 'components/deco.php'?></legend>
                <div class="form-group" style="padding: 0px 10px 0px 10px">
                    <label for="email"></label>
                    <input type="email" name="email" class="form-control" placeholder="Email.." required>
                </div>
                <div class="form-group"   style="padding: 0px 10px 10px 10px">
                    <label for="email"></label>
                    <input type="password" name="password" class="form-control" placeholder="Password.." required>
                </div>
                <button type="submit"  name="loginBtn" class="btn btn-block" style="background-color: orange">Login</button>
            </fieldset>
        </form>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
</div>


<?php include 'footer.php'?>
