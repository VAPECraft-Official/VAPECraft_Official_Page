<?php
// The token in this page was fa93haofelnabi94hala4a6

if ($_GET['token'] != "fa93haofelnabi94hala4a6") {
    echo json_encode(array("code" => 0, "information" => "Unknown token", "state" => "fail"));
    return 0;    
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<form action="create.php" method="post">
    <input name="token" value="a03jdfc2ef5ff3aea7cen8hl2asse3886" style="display: none;" />
    <input name="content" />
    <button type="submit">提交更改</button>
</form>
