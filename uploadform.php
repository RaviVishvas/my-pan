<?php

session_start();
include_once 'dbinc.php';

?>


<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="uplodes page">
<title>My Pan uploads</title>
<meta name="viewport" content="width=device-width , initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Ravi vishvas">
<link rel="stylesheet" href="../panstyle.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background:linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)); ">

    <div class="row">
      <div class="col-md-2 col-lg-3 col-sm-1">

       </div>
    <div class="col-md-8 col-lg-6 col-sm-10 s">
    <form  style="margin-top: 4vh;
    margin-bottom: 5vh;
    height: auto;
    -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
  -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
  box-shadow: 8px 9px 11px 5px rgba(0,0,0,0.75);
  padding: 11px;"class="upload" action="upload.php" method="POST" enctype="multipart/form-data">

    <h3>Upload files here as mentioned below </h3>

    <h6> Make sure that all files are choosen(none of the inputs are blank) before hitting the upload button :</h6>
    <div class="form-group">
       <label for="upload">please upload the image of applicants-signature(< 200kb ;jpg, jpeg):</label>
       <input type="file"  name="file" required>

     </div>

     <div class="form-group">
        <label for="upload">please upload the image of applicant AadhaarCard(< 200kb ;jpg, jpeg):</label>
        <input type="file"  name="file2" required>

      </div>

      <div class="form-group">
         <label for="upload"> please upload the passport size photos of applicant(< 200kb ;jpg, jpeg ):</label>
         <input type="file"  name="file3" required>

       </div>

       <div class="form-group">
          <label for="upload"> please upload recent downloded pdf file (< 200kb ;pdf ):</label>
          <input type="file"  name="file4" required>

        </div>

       <div class="form-group">
          <button  class="btn btn-success" type="submit" name="submit"> Upload </button>

        </div>
        <!--error messages-->
<?php

$fullurl= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($fullurl, "invalidfile") == true){
  echo "<p class='error;' >you have choosen an invalid file!</p>";
  exit();
}
if(strpos($fullurl, "upload=error") == true){
  echo "<p class='error;' >here is an error in upload, plaese try again!</p>";
  exit();
}
if(strpos($fullurl, "filesizeexceeded") == true){
  echo "<p class='error;' >your file size is too big!</p>";
  exit();
}
if(strpos($fullurl, "uploads=success") == true){
  echo "<p class='success;' >files are successfully uploaded!</p>";
  exit();
}


 ?>

    </form>

    </div>
    <div class="col-md-2 col-lg-3 col-sm-1"> </div>
  </div>
</body>
</html>
