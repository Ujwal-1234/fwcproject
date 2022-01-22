<?php
session_start();
require_once "assets/php/databae.php";
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="head">
        <?php
        if(isset($_SESSION['verify'])){
            if($_SESSION['verify']==1){
                header("Location: index.php");            
            }
            elseif(isset($_GET['verify'])){
                echo '<p style="text-align:center; padding:20px;"> Registered Email : '.$_SESSION['EMAIL'].'</p>';
                require_once "assets/pages/vsent.html";
            }
        }
        
        if(isset($_GET['cverify'])){    
                if(!isset($_SESSION['user_id'])){
                    require_once "assets/php/verify.php";
                }else{
                    $verify = mysqli_query($conn, "UPDATE `user` SET `VERIFICATION` = '1' WHERE `USERID` = '".$_SESSION['user_id']."'");     
                    if($verify){
                        $select = mysqli_query($conn, "SELECT `VERIFICATION` FROM `user` WHERE `USERID`='".$_SESSION['user_id']."'");
                        $vr = mysqli_fetch_assoc($select);
                        $_SESSION['verify']= $vr['VERIFICATION'];
                        header("Location: ../../fwcproject/");
                        exit();
                    }else{
                        header("Location: index.php?error=couldnotverify");
                        exit();
                    }    
                }
        }
        ?>
        </div>
    </body>
</html>