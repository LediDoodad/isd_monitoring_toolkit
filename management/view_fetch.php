<?php
    include '../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT userinfo.id , sname , fname , mname , extname , divname , secname , postitle , gender , username FROM userinfo INNER JOIN section ON section.secid = userinfo.sec_id  INNER JOIN division ON division.divid = userinfo.div_id INNER JOIN useracc ON useracc.id = userinfo.id INNER JOIN position ON position.posid = userinfo.pos_id WHERE userinfo.id = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "userid" => $row['id'],
        "sname" => $row['sname'],
        "fname" => $row['fname'],
        "mname" => $row['mname'],
        "extname" => $row['extname'],
        "divsel" => $row['divname'],
        "secsel" => $row['secname'],
        "possel" => $row['postitle'],
        "gender" => $row['gender'],
        "username" => $row['username']
    );
    echo json_encode($output);
