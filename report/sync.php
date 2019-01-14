<?php
    include '../config/database.php';
    $sql = mysqli_query($connect, "SELECT reportID , userinfoFIRSTNAME , userinfoSURNAME , userinfoMIDDLENAME , infosystemABBREVIATION , reportCATEGORY , reportPRIORITY , reportSEVERITY , reportSTATUS , reportDATE , reportFIXEDDATE FROM tblreports
                                    INNER JOIN tbluserinfo ON tbluserinfo.userinfoID = tblreports.userID
                                    INNER JOIN tblinfosystem ON tblinfosystem.infosystemID = tblreports.systemID");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
      $button =
      '<div class="row button-group text-white " role="group" aria-label="First group">
          <a class="btn btn-warning waves-effect waves-light" name="edit" id="'.$row['reportID'].'">Edit</a>
          <a class="btn btn-danger waves-effect waves-light" name="delete" id="'.$row['reportID'].'">Delete</a>
      </div>
      ';
        $output['data'][] = array(
            $row['reportID'],
            $row['userinfoSURNAME'],
            $row['infosystemABBREVIATION'],
            $row['reportCATEGORY'],
            $row['reportPRIORITY'],
            $row['reportSEVERITY'],
            $row['reportSTATUS'],
            $row['reportDATE'],
            $row['reportFIXEDDATE'],
            $button


        );
    }
    echo json_encode($output);