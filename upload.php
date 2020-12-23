<?php
session_start();

if (isset($_POST['submit'])) {
include_once 'dbinc.php';

//signature

  $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
      $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
          $fileError = $_FILES['file']['error'];
          $fileTmpName = $_FILES['file']['tmp_name'];
          // grab the extension
          $fileExt = explode('.', $fileName);
           $fileActualExt = strtolower(end($fileExt));

    $Allowed = array('jpg', 'jpeg');

    if (in_array($fileActualExt, $Allowed)) {
      if ($fileError=== 0) {
        if ($fileSize < 200000) {
          $fileNewName = uniqid('', true).".".$fileActualExt;
          $foldname = $_SESSION['u_email'];
          $fileDestination = "../uploads/ $foldname/". $fileNewName;
          move_uploaded_file($fileTmpName, $fileDestination);


        } else {
          header("Location: uploadform.php?filesizeexceeded");
    exit();
        }

      }else{
        header("Location: uploadform.php?upload=error");
exit();
      }
    }
    else{
      header("Location: uploadform.php?invalidfile");
exit();
    }


    //Aadhar card
    $file2 = $_FILES['file2'];

      $file2Name = $_FILES['file2']['name'];
        $file2Size = $_FILES['file2']['size'];
          $file2Type = $_FILES['file2']['type'];
            $file2Error = $_FILES['file2']['error'];
            $file2TmpName = $_FILES['file2']['tmp_name'];
            // grab the extension
            $file2Ext = explode('.', $file2Name);
             $file2ActualExt = strtolower(end($file2Ext));

      $Allowed2 = array('jpg', 'jpeg');

      if (in_array($file2ActualExt, $Allowed2)) {
        if ($file2Error=== 0) {
          if ($file2Size < 200000) {
            $file2NewName = uniqid('', true).".".$file2ActualExt;
            $fold2name = $_SESSION['u_email'];
            $file2Destination = "../uploads/ $fold2name/". $file2NewName;
            move_uploaded_file($file2TmpName, $file2Destination);


          } else {
            header("Location: uploadform.php?filesizeexceeded");
      exit();
          }

        }else{
          header("Location: uploadform.php?upload=error");
  exit();
        }
      }
      else{
        header("Location: uploadform.php?invalidfile");
  exit();
      }



                                //photos
                                $file3 = $_FILES['file3'];

                                  $file3Name = $_FILES['file3']['name'];
                                    $file3Size = $_FILES['file3']['size'];
                                      $file3Type = $_FILES['file3']['type'];
                                        $file3Error = $_FILES['file3']['error'];
                                        $file3TmpName = $_FILES['file3']['tmp_name'];
                                        // grab the extension
                                        $file3Ext = explode('.', $file3Name);
                                         $file3ActualExt = strtolower(end($file3Ext));

                                  $Allowed3 = array('jpg', 'jpeg');

                                  if (in_array($file3ActualExt, $Allowed3)) {
                                    if ($file3Error=== 0) {
                                      if ($file3Size < 200000) {
                                        $file3NewName = uniqid('', true).".".$file3ActualExt;
                                        $fold3name = $_SESSION['u_email'];
                                        $file3Destination = "../uploads/ $fold3name/".$file3NewName;
                                        move_uploaded_file($file3TmpName, $file3Destination);




                                      } else {
                                        header("Location: uploadform.php?filesizeexceeded");
                                  exit();
                                      }

                                    }else{
                                      header("Location: uploadform.php?upload=error");
                              exit();
                                    }
                                  }
                                  else{
                                    header("Location: uploadform.php?invalidfile");
                              exit();
                                  }


                                                // PDf
                                                $file4 = $_FILES['file4'];

                                                  $file4Name = $_FILES['file4']['name'];
                                                    $file4Size = $_FILES['file4']['size'];
                                                      $file4Type = $_FILES['file4']['type'];
                                                        $file4Error = $_FILES['file4']['error'];
                                                        $file4TmpName = $_FILES['file4']['tmp_name'];
                                                        // grab the extension
                                                        $file4Ext = explode('.', $file4Name);
                                                         $file4ActualExt = strtolower(end($file4Ext));

                                                  $Allowed4 = array('pdf');

                                                  if (in_array($file4ActualExt, $Allowed4)) {
                                                    if ($file4Error=== 0) {
                                                      if ($file4Size < 200000) {
                                                        $file4NewName = uniqid('', true).".".$file4ActualExt;
                                                        $fold4name = $_SESSION['u_email'];
                                                        $file4Destination = "../uploads/ $fold4name/".$file4NewName;
                                                        move_uploaded_file($file4TmpName, $file4Destination);

                                                        header("Location: ishupan.php?uploads=success");
                                                        exit();
                                                      } else {
                                                        header("Location: uploadform.php?filesizeexceeded");
                                                  exit();
                                                      }

                                                    }else{
                                                      header("Location: uploadform.php?upload=error");
                                              exit();
                                                    }
                                                  }
                                                  else{
                                                    header("Location: uploadform.php?invalidfile");
                                              exit();
                                                  }

}else{
  header("Location: ishupan.php?");
exit();
}


 ?>
