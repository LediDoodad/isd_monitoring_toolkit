<?php
    include '../../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT * FROM tblposition WHERE positionID = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "name" => $row['positionNAME'],
        "type" => $row['positionTYPE']
    );
    echo json_encode($output);
