<?php

class dbconnect
{
    function connect()
    {
        $connection=mysqli_connect("localhost","root","","end_point");
				return $connection;
    }
}

?>