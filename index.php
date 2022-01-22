<?php
session_start();
?>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="error">
            <p>
                <?php
                if(isset($_GET['error'])){
                    if($_GET['error']=='emptyfields'){
                       echo ' <label>ERROR : FILL ALL THE FIELDS..</label>';
                    }elseif($_GET['error']=='usernotfound'){
                        echo ' <label>ERROR : INVALID USER !!</label>';
                    }elseif($_GET['error'] == 'couldnotverify'){
                        echo '<label>ERROR : FAILED TO SEND VERIFICATION MAIL !! CONTACT CARE</label>';
                    }
                }
                ?>
            </p> 
        </div>
        <div class="head">
            <?php
            if(!isset($_SESSION['user_id'])){
                require_once "assets/pages/header.html";
            }else{
                require_once "assets/pages/lheader.html";
            }
            ?>
        </div>
        <div class="content">
            <?php
            if(isset($_GET['login'])){
                echo '<p class="signsuc">WELCOME ... PLEASE <input type="submit" class="logbtn" onclick="show()" value="Login"> TO CONTINUE</p>';
            }elseif(isset($_SESSION['user_id'])){
               // echo "The logged in USER is : ".$_SESSION['user_id'];
                if(isset($_GET['nv']) || $_SESSION['verify'] == 0){
                    require_once "assets/pages/nv.html";
                }elseif(isset($_GET['tcode'])){
                    require_once "assets/php/backwork.php";
                }
                elseif(isset($_GET['commailsent'])){
                    echo "<p style='text-align:center;'>mail sent to tutor and student check your mail and contact tutor</p>";                    
                }
                else{
                    require_once "assets/php/onlogin.php";
                }
            }else{
                require_once "assets/pages/onload.html";
            }
            ?>          
        </div>
    </body>
</html>