<?php   

$department_id = $_GET["did"];

//连接数据库
$server = "localhost";
$username = "root";
$password = "123456";
$database = "ajax";

$conn = new mysqli($server,$username,$password,$database);

if ($conn->connect_error) {
    die("连接失败: ".$conn->connect_error);
} 
$conn->query("SET NAMES 'UTF8'");
$sqlstr = "SELECT ajaxgroup.id as id ,ajaxgroup.groupName as 'group' FROM department JOIN ajaxgroup ON department.id = ajaxgroup.department_id WHERE department.id = ".$department_id;
$result = $conn->query($sqlstr);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo '<option value="'.$row["id"].'">'.$row["group"].'</option>';
    }
}

$conn->close();
?>