<?php include 'database.php'; ?>
<?php

if(isset($_POST['name']) && isset($_POST['shout'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $shout = mysqli_real_escape_string($con, $_POST['shout']);
	$ip_addr = $_SERVER['REMOTE_ADDR'];
    
    date_default_timezone_set('Asia/Tbilisi');
    $date = date('h:i:s a',time());
    
    $query = "INSERT INTO shouts (name, shout, date, remote_ip_addr) ";
    $query .= "VALUES ('$name', '$shout', '$date', '$ip_addr')";
    
    if(!mysqli_query($con, $query)){
        echo "Error Occured ".mysqli_error($con);
    }
    else{
        echo '<li>'.$name.': [ '.$date.' ]'.' -- '.$shout.'</li>';
    }
}

?>