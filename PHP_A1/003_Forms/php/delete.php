<?php
function deletebooking($id){

    $sql="DELETE FROM bs_reservations WHERE id='".$orderID."'";
    $result=mysql_query($sql) or die("oopsy, error when tryin to delete events 2");

}


?>