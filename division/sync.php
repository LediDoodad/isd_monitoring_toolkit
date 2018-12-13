<?php
    include '../config/database.php';
    $sql = mysqli_query($connect, "SELECT * FROM division");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
        $button =
        '<a name="edit" id="'.$row['id'].'" class="btn-sm btn-floating amber"><i class="fas fa-edit" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>
        <a name="delete" id="'.$row['id'].'" class="btn-sm btn-floating red"><i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></a>';
        $output['data'][] = array(
            $row['divcode' ],
            $row['divname' ],
            $button
        );
    }
    echo json_encode($output);
