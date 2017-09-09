<?php   

//连接数据库
$server = "localhost";
$username = "root";
$password = "123456";
$database = "ajax";

$conn = new mysqli($server,$username,$password,$database);

if ($conn->connect_error) {
    die("连接失败: ".$conn->connect_error);
} 

$sqlstr = "SELECT * FROM `company`";
$result = $conn->query($sqlstr);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo '<option value="'.$row["id"].'">'.$row["company"].'</option>';
    }
}

$conn->close();
?>