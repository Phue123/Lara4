<?php
var_dump($_SERVER);
echo $_SERVER['REQUEST_METHOD'];

if($_SERVER['REQUEST_METHOD']=='GET'){
    setcookie("name","David",time()+100);
    //header('location:day8_success.php');
    $date=date('D/M/Y');
    echo $date;
    $timestamp=time();
    echo $timestamp;
    echo date('d/m/y h:m:s',$timestamp);
    echo date_default_timezone_get();
    date_default_timezone_set('Asia/yangon');
    echo date_default_timezone_get();
    echo "<br>";
    echo date('d/m/y h:m:s',$timestamp);

    echo "<br>";
    $yesterday=date('d-m-Y',strtotime('yesterday'));
    echo $yesterday;
    echo "<br>";
    $tomorrow=date('d-m-Y',strtotime('tomorrow'));
    echo $tomorrow;
    echo "<br>";
    $new_date=date('d-m-Y',strtotime('originale date'));
    echo "new date :". $new_date;
}
else
{

}
?>