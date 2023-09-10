<?php
$firstName=$_POST{'firstName'}
$LastName=$_POST{'LastName'}
$gender=$_POST{'Gendere'}
$emall=$_POST{'Emall'}
$password=$_POST{'Password'}
$numder=$_POST{'Numder'}

//database coonecction
$conn = new mysqli('locah=lhost','roon','','test')
if(conn->connect_error){
    echo"$conn->connect_error";
    die("connection failed:". $sonn->connect_error);

}else{
    $stmt = $conn->prepare("insert into registrtion(firstName,LastName,Gendere,Emall,Password,Numder)(?,?,?,?,?)");
    $stmt->bind_param("sssssi", $firstName,$LastName,$Gender,$Emall,$Password,$Numder);
    $execval = $stmt->execval();
    echo $execval
    echo "registration-successfully..."
    $stmt->class();
    $stmt->class();

}
?>