<html>
    <head></head>
    <body>
    <?php
            if(isset($_SESSION['user_id'])){
                echo '<div class="lpage">
                <div class="col">
                <table>';
                require_once "tables.php";
                echo '</table>
                </div>
                </div>
                <div class="foot">
                <div class="data">
                    <p>You are logged in..</p>
                    <p><form action="../fwcproject/assets/php/logout.php" method="post"> <input type="submit" value="Click to logout" name="logout" class="logbtn"></form></p>
                </div>
            </div>';
            }
            /*if(isset($_GET['getform'])){
                echo '
                <div>
                </div>
                ';
            }*/else{
                echo 'invalid entry';
            }
    ?>   
    </body>
</html>