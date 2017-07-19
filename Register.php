<?php
error_reporting(0);
$mysqli = new mysqli("localhost", "id2064581_root", "mY_1099", "id2064581_medical");
$email = $_POST["email"];
$password = $_POST["password"];

$stmt = $mysqli->stmt_init();
$response = array();
if($stmt->prepare("INSERT INTO USER(id, pswd) VALUES (?, ?)")){
    $stmt->bind_param( "ss", $email, $password);
    if($stmt->execute()){
        $response["success"] = true;
    }else{
        $response["success"] = false;
    }
    $stmt->close();
}else{
    $response["success"] = false;
}
echo json_encode($response);
$mysqli->close();
?>
