<?php
session_start();

if (isset($_POST['submit'])) {

    include_once 'dbinc.php';



require_once __DIR__ . '/vendor/autoload.php';

// grab data
$prefix = $_POST['prefix'];
//name
$lname = $_POST['lastname'];
$fname = $_POST['firstname'];
$mname = $_POST['middlename'];

//Abbreviations
$abbr = $_POST['Abbr'];

//nick name radio
$nick = $_POST['nick'];

//nick name prefix
$nprefix = $_POST['nprefix'];

//nick name sequence
$nlname = $_POST['nlastname'];
$nfname = $_POST['nfirstname'];
$nmname = $_POST['nmiddlename'];

//gender
$gender = $_POST['Gender'];

//DOB
$dob = $_POST['dob'];

//father name
$flname = $_POST['flastname'];
$ffname = $_POST['ffirstname'];
$fmname = $_POST['fmiddlename'];


//mother name
$mlname = $_POST['mlastname'];
$mfname = $_POST['mfirstname'];
$mmname = $_POST['mmiddlename'];

//print perant radio
$printp = $_POST['printp'];

//Residense address
$flat1 = $_POST['flat1'];
$buld1 = $_POST['buld1'];
$strt1 = $_POST['strt1'];
$sdiv1 = $_POST['sdiv1'];
$twn1 = $_POST['twn1'];
$stat1 = $_POST['stat1'];
$des1 = $_POST['des1'];
$pcod1 = $_POST['pcod1'];

//office address
$ofname = $_POST['ofname'];
$oflat = $_POST['oflat'];
$obuld = $_POST['obuld'];
$ostrt = $_POST['ostrt'];
$osdiv = $_POST['osdiv'];
$otwn = $_POST['otwn'];
$ostat = $_POST['ostat'];
$odes = $_POST['odes'];
$opcod = $_POST['opcod'];

//comm address radio
$comm = $_POST['comm'];

//contact Details
$pnum = $_POST['pnum'];
$email = $_POST['email'];

//status
$sts = $_POST['sts'];

//company registretion
$comprnum = $_POST['comprnum'];

//AADhaar
$aadhaarnum = $_POST['aadhaarnum'];
$aadhaarenid = $_POST['aadhaarenid'];
$aadhaarname = $_POST['aadhaarname'];

//Income
$income = $_POST['income'];
$bpcod = $_POST['bpcod'];

//representative assesse
$rpprefix = $_POST['rpprefix'];
$rplname = $_POST['rplastname'];
$rpfname = $_POST['rpfirstname'];
$rpmname = $_POST['rpmiddlename'];

//ra address
$rpflat = $_POST['rpflat'];
$rpbuld = $_POST['rpbuld'];
$rpstrt = $_POST['rpstrt'];
$rpsdiv = $_POST['rpsdiv'];
$rptwn = $_POST['rptwn'];
$rpstat = $_POST['rpstat'];
$rpdes = $_POST['rpdes'];
$rppcod = $_POST['rppcod'];

//proof of identity
$nameofproof = $_POST['nameofproof'];

//declaration
$dname = $_POST['dname'];
$place = $_POST['place'];
$date = $_POST['date'];

//create new PDf instance
$mpdf = new \Mpdf\Mpdf();

//create our pdf
$data ='';

$data ="<strong> Date :</strong>". date("Y-m-d"). "<br>". date("l"). " ,Time :". date('h:i:sa') ."<br>";

$data .="<h1> Pan details : </h1>  ".'<br>';

//Add Details
$data .='<h5><b>A. </b>  full name (full expanded name to be mentioned as appeaering in proof of identity/date of birth/ address documents :initials are not permitted )</h5> <br> 1.  please select your title as applicable: <br>'. $prefix .'<br>';
//name
$data .= '<h5> Last name :</h5>'.$lname .'<br>';
$data .= '<h5> First name :</h5>'.$fname .'<br>';
$data .= '<h5> Middle name :</h5>'.$mname .'<br>';

//Abbreviations
$data .= '<h5><b>B. </b> Abbreviations of the above name,as you would like it,to be printed on PAN card</h5>'.$abbr .'<br>';

//nick name
if ($nick) {
  $data .= '<h5><b>C. </b> Have you ever been knwon by any other name?, answer :</h5>'.$lname .'<br>';
  $data .= '<h5>Nick name:<br> title :</h5>'.$nprefix .'<br>';
  $data .= '<h5> Last name :</h5>'.$nlname .'<br>';
  $data .= '<h5> First name :</h5>'.$nfname .'<br>';
  $data .= '<h5> Middle name :</h5>'.$nmname .'<br>';
}

//Gender
$data .= '<h5><b>D. </b> Gender (for individual applicannt only) : </h5>'.$gender .'<br>';

//DOB
$data .= '   <h5><b>E. </b>Date of birth/incorporation/Agreement/<br>Partnership/Formation of body of individuals or association of person :</h5>'.$dob .'<br>';

//parents details
$data .= '<h5><b>F. </b>Details of parents <b>(applicable only for individual applicant)</b></h5> <br>  <p><b>fathers name(Mandatory, Even married woman should fill the fathers name only) :</b><br> Last name :</p>'.$flname .'<br>';
$data .= '<h5> First name :</h5>'.$ffname.'<br>';
$data .= '<h5> Middle name :</h5>'.$fmname.'<br>';

//mother name
$data .= '<h5><b>Mothers name</b> last name :</h5>'.$mlname .'<br>';
$data .= '<h5> First name :</h5>'.$mfname .'<br>';
$data .= '<h5> Middle name :</h5>'.$mmname .'<br>';

$data .= '<p>select the name of either father or mother which you may like to be printed on pan card : </p>'.$printp .'<br>';

//address
$data .= '  <h6>Residense address</h6> <br> Flat/room/door/block no. '.$flat1 .'<br>';
$data .= '<p>Name of building/village :</p>'.$buld1 .'<br>';
$data .= '<p> Road/street/lane/post office :</p>'.$strt1 .'<br>';
$data .= '<p>Area /locality/taluka/Sub-division :</p>'.$sdiv1 .'<br>';
$data .= '<p>Town/city/district :</p>'.$twn1 .'<br>';
$data .= '<p>State/ Union territory :</p>'.$stat1 .'<br>';
$data .= '<p>Country :</p>'.$des1 .'<br>';
$data .= '<p>Pincode /Zipcode :</p>'.$pcod1 .'<br>';

//Office address
$data .= '  <h6 style="font-size:22px;">Office address :</h6>'.$ofname .'<br>';
$data .= '  <p> Flat/room/door/block no. </p> '.$oflat .'<br>';
$data .= '<p>Name of building/village :</p>'.$obuld .'<br>';
$data .= '<p> Road/street/lane/post office :</p>'.$ostrt .'<br>';
$data .= '<p>Area /locality/taluka/Sub-division :</p>'.$osdiv .'<br>';
$data .= '<p>Town/city/district :</p>'.$otwn .'<br>';
$data .= '<p>State/ Union territory :</p>'.$ostat .'<br>';
$data .= '<p>Country :</p>'.$odes .'<br>';
$data .= '<p>Pincode /Zipcode :</p>'.$opcod .'<br>';

//communication
$data .= '<h5 style="font-weight:600;">Address for communication>:</h5>'.$comm .'<br>';

// contacts
$data .= '<h5><b>H.</b>Telephone number & Email details</h5> <br>Telephone/Mobile number :'.$pnum .'<br>';
$data .= '<h5> E-mail :</h5>'.$email .'<br>';

//status
$data .= '<h5><b>I. </b>Status of applicant :</h5>'.$sts .'<br>';

//comp registretion
$data .= '<h5><b>J. </b>Registretion number(for company ,firm,LLPs etc.) :</h5>'.$comprnum .'<br>';

//Aadhaar details
$data .= '<h5><b>K. </b>In case of a person, who is required to quote Aadhaar number or Enrolment ID of Aadhaar application as per section <b>139A</b> :</h5> <br> <p>Please mention your AADHAAR number(if alloted) :</p>'.$aadhaarnum .'<br>';
$data .= '<p>if Aadhaar is not alloted, mention the enrolment ID of Aadhaar application :</p>'.$aadhaarenid .'<br>';
$data .= '<h6>Name as per AADHAaR letter or as per the Enrolment ID of Aadhar application(As printed) :</h6>'.$aadhaarname .'<br>';

//Income
$data .= '<h5><b>L. </b>Source of income :</h5>'.$income .'<br>';

// bussiness code
$data .= '<p class="text-secondery">Business/profesion code :</p>'.$bpcod .'<br>';

//representative assesse
$data .= '<h5><b>M. </b>Representative Assesse(RA)</h5> <br> <p>Full name,address of representative assesse,who is assessible under the income Tax  ACT in respect of the person, whose particulars have been given in the column 1-13 </p>
<p><b>Full expanded name(initials are not permitted): </b> <br> title :</p> '.$rpprefix .'<br>';

//RA name
$data .= '<h5> Last name :</h5>'.$rplname .'<br>';
$data .= '<h5> First name :</h5>'.$rpfname .'<br>';
$data .= '<h5> Middle name :</h5>'.$rpmname .'<br>';

//RA Address
$data .= ' <h6>address:</h6> <br> <p> Flat/room/door/block no. </p> '.$rpflat .'<br>';
$data .= '<p>Name of building/village :</p>'.$rpbuld .'<br>';
$data .= '<p> Road/street/lane/post office :</p>'.$rpstrt .'<br>';
$data .= '<p>Area /locality/taluka/Sub-division :</p>'.$rpsdiv .'<br>';
$data .= '<p>Town/city/district :</p>'.$rptwn .'<br>';
$data .= '<p>State/ Union territory :</p>'.$rpstat .'<br>';
$data .= '<p>Country :</p>'.$rpdes .'<br>';
$data .= '<p>Pincode /Zipcode :</p>'.$rppcod .'<br>';

//proof of identity
$data .= '<h5><b>N. </b> Document submitted as Proof of identity(POI), Proof of address(POA), Proof of date of birth(POB) </h5> <br> <p>  Name of Document you have enclosed as proof of identity/ address/ DOB :<p/>'.$nameofproof .'<br>';

//declaration
$data .= '<h5><b>O. </b> Self declaration</h5> <br> I/We-'.$dname . ', the applicant, in the capacity of -'.$place .',do hereby dwclare that what is stated above is true to the best of my/our information and belief -'.$date. '<br>';

//Write PDf
$mpdf->WriteHTML($data);
$mpdf->Output( 'pan.pdf', 'D');
  header("Location: uploadform.php?submitsuccessfull");
  exit();
  }
else {
  header("Location: ../ishupan.php?submit=error");
}
 ?>
