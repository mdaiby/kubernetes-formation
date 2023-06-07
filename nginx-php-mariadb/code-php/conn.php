<?php
        $conn = mysqli_connect("db","root","root");

// Check connection
        if (mysqli_connect_errno()){
                        echo "Failed to connect DB : " . mysqli_connect_error();
                }

?>
