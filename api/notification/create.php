<?php
// The token in this page was a03jdfc2ef5ff3aea7cen8hl2asse3886

$token = $_POST['token'];
$content = $_POST['content'];

if ($token != "a03jdfc2ef5ff3aea7cen8hl2asse3886" or !isset($_POST['content'])) {
    echo json_encode(array("code" => 0, "information" => "Unknown token or content", "state" => "fail"));
    return 0; } else {
    file_put_contents("notice.txt", date('Y.m.d').' 公告：'.$content);
    echo json_encode(array("code" => 1, "information" => "Successfully", "state" => "successful"));
    return 1; }
 
