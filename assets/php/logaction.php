<?php
require_once "databae.php";
if(isset($_GET['cverify'])){
    echo 'this is to verify';
}
if(isset($_POST['lbtn'])){
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    if(isset($_GET['cverify'])){
        echo 'verification';
        exit();
    }
    if(empty($uid)||empty($pwd)){
        header('Location: ../../index.php?error=emptyfields');
        exit();
    }else{
        $selectdata = mysqli_query($conn, "SELECT * FROM `user` WHERE `EMAIL` = '".$uid."' OR `USERID` = '".$uid."'") or exit(mysqli_error($conn));
    }
    if(mysqli_num_rows($selectdata)){
        $row = mysqli_fetch_assoc($selectdata);
        $res = password_verify($pwd, $row['PASSWORD']);
        if($res){
            session_start();
            $_SESSION['user_id'] = $row['USERID'];
            $_SESSION['EMAIL'] = $row['EMAIL'];
            $_SESSION['verify'] = $row['VERIFICATION'];
            if($row['VERIFICATION']== 1){
                header("Location: ../../");
                exit();
            }else{
                header("Location: ../../index.php?nv");
                exit();
            }
        }else{
            header('Location: ../../index.php?error=wrongpwd');
            exit();
        }
    }else{
        header('Location: ../../index.php?error=usernotfound');
        exit();
    }
}
if(isset($_POST['sbtn'])){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
    $userid = $name.strval(rand(2000, 4));
    $v=0;
    if(empty($name)||empty($mail)||empty($pwd)){
        header('Location: ../../index.php?error=emptyfields');
        exit();
    }
    $select = mysqli_query($conn, "SELECT `EMAIL` FROM `user` WHERE `EMAIL` = '".$mail."'") or exit(mysqli_error($conn));
    if(mysqli_num_rows($select)) {
        exit('This email is already being used');
    }
    else{
        $insert = mysqli_query($conn, "INSERT INTO `user`(`NAME`, `EMAIL`, `USERID`, `VERIFICATION`, `PASSWORD`) VALUES ('$name','$mail','$userid','$v','$pwd')");
        if($insert){
            header("Location: ../../index.php?login");
            exit();
        }
        else{
            echo 'Error'.mysqli_error($conn);
        }
    }
}
?>