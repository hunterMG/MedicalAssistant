<?php
error_reporting(0);
$mysqli = new mysqli("localhost", "id2064581_root", "mY_1099", "id2064581_medical");
$email = $_POST["email"];
$password = $_POST["password"];
#$email = "1@1.com";
#$password = md5(md5("1111222"));
$name = null;
$stmt = $mysqli->stmt_init();
if($stmt->prepare( "SELECT * FROM USER WHERE id = ? AND pswd = ?")){
    $stmt->bind_param( "ss", $email, $password);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result( $id, $pswd, $name, $addr);
}
$response = array();
$response["success"] = false;

while($stmt->fetch()){
    $response["success"] = true;
    $response["name"] = $name;
}
$stmt->close();
$mysqli->close();
echo json_encode($response);
?>
