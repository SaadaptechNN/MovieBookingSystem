<!-- connection_start -->
<?php

$con = mysqli_connect('localhost', 'root', '', 'movie_ticket_reservation_system');
if (!$con) {
   echo "Connection Failed";
}


?>
<!-- connection_end -->
