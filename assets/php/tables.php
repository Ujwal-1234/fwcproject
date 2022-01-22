<?php
require_once "databae.php";

$get = mysqli_query($conn, "SELECT * FROM `subjects`");
if(mysqli_num_rows($get) > 0){
    while($row = mysqli_fetch_assoc($get)){
    echo '
    <tr>
        <td class="si"><a href="../../fwcproject/index.php?tcode='.$row['TOPICCODE'].'">'.$row['SUBJECT'].'</a></td>
        <td class="si"><a href="../../fwcproject/index.php?tcode='.$row['TOPICCODE'].'">'.$row['TOPIC'].'</a></td>
        <td class="si"><a href="../../fwcproject/index.php?tcode='.$row['TOPICCODE'].'">'.$row['TOPICCODE'].'</a></td>
    </tr>
    ';      
    }
}else{
    echo 'no results found';
}
?>