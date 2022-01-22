<?php
//session_start();
require_once "databae.php";
/*if(isset($_SESSION['user_id'])){
    echo 'its working here';
    if(isset($_GET['tcode'])){  
        //echo $_GET['tcode'];  
        echo 'woring';
        $tutors = mysqli_query($conn, "SELECT * FROM `tutors` WHERE `TOPICCODE`='".$_GET['tcode']."'");
        if(mysqli_num_rows($tutors) > 0){
            header("Location: backwork.php?getform");
            while($trow = mysqli_fetch_assoc($tutors)){
                require_once "onlogin.php";
            }
        }else{
            echo 'not tutors available';
        }
    }
}else{
    echo 'not logged in';
    //header("Location: ../../");
}*/
if(isset($_GET['tcode'])){
           
    $tutors = mysqli_query($conn, "SELECT * FROM `tutors` WHERE `TOPICCODE`='".$_GET['tcode']."'");
    echo '
            <div class="lpage">
                <div class="box">            
                TUTOR'."'".'S AVAILABLE ARE :                 
                <table>
                <tr>
                    <td class="si"><h2>NAME</h2></td>
                    <td class="si"><h2>CONTACT</h2></td>
                    <td class="si"><h2>EMAIL</h2></td>
                    <td class="si"><h2>TOPIC CODE</h2></td>
                    <td class="si"><h2>BUTTON</h2></td>
                </tr>';
    if(mysqli_num_rows($tutors) > 0){
        $n = mysqli_num_rows($tutors);
        while($trow = mysqli_fetch_assoc($tutors)){
                echo $n.'
                <tr>
                    <td class="si"><a>'.$trow['TNAME'].'</a></td>
                    <td class="si"><a>'.$trow['CONTACT'].'</a></td>
                    <td class="si"><a>'.$trow['MAIL'].'</a></td>
                    <td class="si"><a>'.$trow['TOPICCODE'].'</a></td>
                    <td class="si"><a href="../fwcproject/assets/php/book.php?book='.$trow['USERID'].'" class="logbtn bk">CLICK TO BOOK</a></td>
                </tr>
                </table>
                </div>
            </div>
            ';    
        }
    }else{
        echo 'no tutors available';
    }
}
?>