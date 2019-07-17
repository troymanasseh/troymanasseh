 
<?php
//initialize input
$titleDeedNo=filter_input(INPUT_POST, 'titleDeedNo');
$district=filter_input(INPUT_POST, 'district');
$fullname=filter_input(INPUT_POST,'fullname');
$IDnumber=filter_input(INPUT_POST,'IDnumber');
$email=filter_input(INPUT_POST,'email');
$telephone=filter_input(INPUT_POST,'telephone');
$cellphone=filter_input(INPUT_POST,'cellphone');
$purpose=filter_input(INPUT_POST,'purpose');



$ser="localhost";
$username="root";
$password="";
$dbname="feedback";


//connection
$conn= new mysqli($ser,$username,$password,$dbname);


$sql="insert into scoop(titleDeedNo,district,fullname,IDnumber,email,telephone,cellphone,purpose)
values('$titleDeedNo','$district','$fullname','$IDnumber','$email','$telephone','$cellphone','$purpose')";


mysqli_select_db($conn,"feedback");
$conn->query($sql);


if (mysql_query($sql, $conn)) {



                                  echo "success";}






$conn->close();
}



else

{






echo"no connection";

$conn->close();


}







?>

