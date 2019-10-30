<?php
//check if the $_GET superglobal has the data(id)
include 'config.php';

if($_GET['id']){
    $id = $_GET['id'];
    $sql = "DELETE FROM `projects` WHERE id='$id'";
    echo "
<script type='text/javascript'>
    alert('Are your sure??')
</script>
";
    if(mysqli_query($conn, $sql)){
        header("location:index.php");
    }else{
        header("location:details.php?id=$id");
    }
}
?>