<?php
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$services=$_REQUEST['services'];
$phone=$_REQUEST['phone'];
$mesage=$_REQUEST['mesage'];

if(!empty($fname)|| !empty($lname) || !empty($email) || !empty($services) || !empty($phone) || !empty($mesage)){

    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="contactUs";
 
    $conn = new mysqLi($host,$dbUsername,$dbPassword,$dbname);
    if(mysqli_connect_error()){
      die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else{
        $sqL ="INSERT into submit(fname,lname,email,services,phone,mesage)
        value('$fname','$lname','$email','$services','$phone','$mesage')";
        if($conn->query($sqL)){
            echo "Thanx for contact us";
        }else{
        echo "Error:".$sqL ."<br>" .$conn->error;
    }
    $conn->close();
}
}
?>