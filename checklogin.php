<?php session_start();
include("include/config.php");
error_reporting(0);

if (isset($_POST['login'])) {
    echo $username = $_POST['username'];
    echo $loginpassword = $_POST['loginpassword'];
    echo "<br>";
    echo $hasedpassword = hash('sha256',$password);

try{
    $ret = "SELECT * FROM userdata WHERE (username=:uname || loginpassword=:loginpassword)";
    $queryt = $dbh -> prepare($ret);
    $queryt->bindParam(':uname',$username,PDO::PARAM_STR);
    $queryt->bindParam(':loginpassword',$loginpassword,PDO::PARAM_STR);
    $queryt-> execute();
    $results = $queryt -> fetchAll(PDO::FETCH_OBJ);
 
    if($queryt-> rowCount() > 0){
        echo "<script type='text/javascript'>";
        echo "alert('เข้าสู่ระบบเรียบร้อยแล้ว!');";
        echo "document.location='index.php';";
        echo "</script>";
    }else {
        echo "<script type='text/javascript'>";
        echo "alert('username หรือ password ไม่ถูกต้อง');";
        echo "document.location='login.php';";
        echo "</script>";
    }
}catch(PDOException $e){
    exit("Error:". $e->getMessage());
}

}

?>