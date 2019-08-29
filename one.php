<?php
// connect to database;
$host = "127.0.0.1";
$dbuser = "root";
$pwd  = "";
$dbname = "test";

$db = new mysqli( $host, $dbuser, $pwd, $dbname);
if( $db->connect_errno <>0 ){
    die("fail to connect");
    echo $db->connect_error;
    exit;
}

$sql = "SELECT * from msg order by id DESC";
$mysqli_result = $db->query($sql);
if( $mysqli_result === false){
    echo "sql wrong";
    exit;
}



//$rows = [];
//while( $row = $mysqli_result->fetch_array(MYSQLI_ASSOC)){
//    $rows[]=$row;
//}
//var_dump($rows);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF8">
    <title>Forum</title>
    <link rel="stylesheet" type="text/css" href="Style_forum.css"/>

</head>
<body>
<div class="wrap">
    <!------------Send message------------------->
    <div class="add">
        <form action="save.php" method="post">
                <textarea name="content" class="content" cols="50" rows="5">

                </textarea>
            <input name="user" class="user" type="text"/>
            <input class="btn" type="submit" value="Send"/>
        </form>
    </div>


    <div class="msg">
        <div class="info">
            <span class="user">user name</span>
            <span class="time">time</span>
        </div>

    </div>
    <div class="content">
              lkajdflkajdlkfjalkdfjlkadfadlfjalfjaf
    </div>





</div>
</body>

</html>