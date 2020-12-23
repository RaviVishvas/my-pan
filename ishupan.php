<?php

  include_once 'dbinc.php';
session_start();

?>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="pan form page">
<title>My Pan form</title>
<meta name="viewport" content="width=device-width , initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
  <link rel="stylesheet" href="../animate.css">
</head>
<body style="background:rgba(235, 239, 185, 0.45098039215686275);">
     <div class="jumbotron text-center">
       <h1 class="text-success fadeIndown animated" >My Pan</h1>
       <p class="slideInLeft animated">get your pan in easy step</p>
     </div>
     <!--this dynamic tabs -->
     <div class="container fadeIn animated delay-1s">
       <ul class="nav nav-tabs" role="tablist">
         <li class="nav-item"><a class="nav-link active"  data-toggle="tab" href="#home" role="tab">Home</a>
         </li>
         <li class="nav-item"><a class="nav-link"  data-toggle="tab" href="#aboutus" role="tab">Aboutus</a>
         </li>
         <li class="nav-item"><a class="nav-link"  data-toggle="tab" href="#contacts" role="tab">Contacts</a>
         </li>
         <li class="nav-item"><a class="nav-link" href="uploadform.php">UpLoads</a>
         </li>
       </ul>
       <div class="tab-content">
         <div class="tab-pane  active " id="home" role="tabpanel"><br>
<h4>Home </h4>
<p >This is the way you can get your pan easily. <b>Just fill out this form & you will get your pan.</b>We provide you that much of simplicity to be done this for your pan.     </p>
         </div>
         <div class="tab-pane fade" id="aboutus" role="tabpanel"><br>
<h3>Aboutus</h3>
<p>We are now doing some to make it easily to have increased number of pan users . This is not official nsdl site, its a private site to collect pan details of users. We'll trt to make this user more friendly.<br> </p>
         </div>
         <div class="tab-pane fade" id="contacts" role="tabpanel"><br>
<h3>Contacts</h3>
<p>I am ishu lodhi still getting you close to pan.
I will do my best.<br>
<div style=" margin-top:30px;" class="container text-center wow zoomIn" data-wow-delay="0.8s">
  <img src="panimg/rds.jpeg" class="rounded-circle" style="box-shadow:2px 2px 7px black;" alt="Developer img" width="170" height="175">
  <p style="font-weight:650; font-size:18px; margin-bottom:0;">Ishu Lodhi</p>
  <p style="font-size:16px; font-weight:600; text-align:center; margin-bottom:0;">Founder&Content Manager</p>

    <a href=" "><i style="color:rgb(84, 92, 99); padding-right:4px;" class="fab fa-instagram "></i></a>
    <a href=""><i style="color:rgb(84, 92, 99); font-size:17px; padding-right:4px;" class="fab fa-facebook-f"></i></a>

</div>
My contact number :<b>7999293354</b> <br>
Email :<b>ishupansrj@gmail.com</b> </p>
         </div>
       </div>
     </div>

     <!--logout button-->
     <div class="container">
     <form style="padding:0px 0px 5px 0px;" class="container" action="logout.php" method="POST">
     <button type="submit" class="btn btn-secondary bounceInUp animated delay-1s" name="submit">LogOut </button>
     </form>
     </div>
<br>


     <!--form radio buttons -->

     <div class="container">
  <form class="" action="makepdf.php" method="POST">
    <div class="bg-seconder">
    <h5><b>A. </b>  full name (full expanded name to be mentioned as appeaering in proof of identity/date of birth/ address documents :initials are not permitted )</h5>
  </div>
<h5 class="text-secondary">1.  please select your title as applicable</h5><br>
        <div class="form-check-inline">
        <lable class="form-check-lable">
         <input type="radio"  class="form-check-input" name="prefix" value="Shri">Shri
       </lable>
     </div>
        <div class="form-check-inline">
        <lable class="form-check-lable">
         <input type="radio"  class="form-check-input" name="prefix" value="Shrimati">Shrimati
       </lable>
        </div>
        <div class="form-check-inline">
        <lable class="form-check-lable">
         <input type="radio"  class="form-check-input" name="prefix" value="Kumari">Kumari
       </lable>
        </div>
        <div class="form-check-inline">
        <lable class="form-check-lable">
         <input type="radio"  class="form-check-input" name="prefix" value="M/s">M/s
       </lable>
        </div>
  <!-- name -->
    <div class="form-group">
      <label for="last name"> Last name</label>
      <input type="text" class="form-control"name="lastname" placeholder="last name" required>

    </div>
    <div class="form-group">
      <label for="name"> First name</label>
      <input type="text" class="form-control"name="firstname" placeholder="first name" required>

    </div>
    <div class="form-group">
      <label for=" name"> Middle name</label>
      <input type="text" class="form-control"name="middlename" placeholder="middle name" required>

    </div>
    <!--Abbreviations-->
    <div class="bg-secondary">

<h5><b>B. </b> Abbreviations of the above name,as you would like it,to be printed on PAN card</h5></div>
<p class="text-secondary"> please write here</p>

  <div class="fonm-group">
  <input type="text" class="form-control" name="Abbr" required>
  </div>
  <!--nick name-->
  <div class="bg-secondary"><h5><b>C. </b> Have you ever been knwon by any other name?</h5></div>

  <div class="form-check-inline">
    <lable class="form-check-lable">
     <input type="radio"  class="form-check-input" name="nick" value="yes">Yes
   </lable>
    </div>

    <div class="form-check-inline">
    <lable class="form-check-lable">
     <input type="radio"  class="form-check-input" name="nick" value="no">No
   </lable>
    </div>

  <p>if yes,please give that other name</p>
    <div class="form-check-inline">
    <lable class="form-check-lable">
     <input type="radio"  class="form-check-input" name="nprefix" value="Shri">Shri
   </lable>
    </div>

    <div class="form-check-inline">
    <lable class="form-check-lable">
     <input type="radio"  class="form-check-input" name="nprefix" value="Shrimati">Shrimati
   </lable>
    </div>

    <div class="form-check-inline">
    <lable class="form-check-lable">
     <input type="radio"  class="form-check-input" name="nprefix" value="Kumari">Kumari
   </lable>
    </div>

    <div class="form-check-inline">
    <lable class="form-check-lable">
     <input type="radio"  class="form-check-input" name="nprefix" value="M/s">M/s
   </lable>
    </div>

    <!--nick name sequence-->
    <div class="form-group">
      <label for="last name"> Last name</label>
      <input type="text" class="form-control"name="nlastname" placeholder="last name">

    </div>
    <div class="form-group">
      <label for="name"> First name</label>
      <input type="text" class="form-control"name="nfirstname" placeholder="first name">

    </div>
    <div class="form-group">
      <label for=" name"> Middle name</label>
      <input type="text" class="form-control"name="nmiddlename" placeholder="middle name">

    </div>

  <!--gender selection-->
<div class="bg-secondary"><h5><b>D. </b> Gender (for individual applicannt only)</h5>
</div>

  <div class="form-check-inline">
    <lable class="form-check-lable">
     <input type="radio"  class="form-check-input" name="Gender" value="male">Male
   </lable>
    </div>

    <div class="form-check-inline">
    <lable class="form-check-lable">
     <input type="radio"  class="form-check-input" name="Gender" value="female">Female
   </lable>
    </div>

  <!-- DoB -->

  <div class="bg-secondary wrap">
   <h5><b>E. </b>Date of birth/incorporation/Agreement/<br>Partnership/Formation of body of individuals or association of person</h5>
 </div>

  <p class="text-secondary">enter in dd-mm-yyyy form</p>

  <div class="form-group">
    <input type="text" class="form-control" name="dob" placeholder="DOB" required>
  </div>

    <!--parents name-->

    <div class=" bg-secondary">
    <h5><b>F. </b>Details of parents <b>(applicable only for individual applicant)</b></h5>
    </div>

      <!--father name-->
      <p><b>fathers name(Mandatory, Even married woman should fill the fathers name only)</b></p>
      <div class="form-group">
        <label for="last name">Last name/ Sername</label>
        <input type="text" class="form-control"name="flastname" placeholder="last name" required>

      </div>

      <div class="form-group">
        <label for="name"> First name</label>
        <input type="text" class="form-control"name="ffirstname" placeholder="first name" required>

      </div>

      <div class="form-group">
        <label for=" name"> Middle name</label>
        <input type="text" class="form-control"name="fmiddlename" placeholder="middle name" required>

      </div>
      <!--mothers name-->

    <p><b> Mothers name</b></p>
      <div class="form-group">
        <label for="last name"> Last name/Sername</label>
        <input type="text" class="form-control"name="mlastname" placeholder="last name" required>

      </div>

      <div class="form-group">
        <label for="name"> First name</label>
        <input type="text" class="form-control"name="mfirstname" placeholder="first name" required>

      </div>

      <div class="form-group">
        <label for=" name"> Middle name</label>
        <input type="text" class="form-control"name="mmiddlename" placeholder="middle name" required>

      </div>

      <p>Select the name of either father or mother which you may like to be printed on pan card </p>
      <div class="form-check-inline">
      <lable class="form-check-lable">
       <input type="radio"  class="form-check-input" name="printp" >Fathers name
     </lable>
      </div>

      <div class="form-check-inline">
      <lable class="form-check-lable">
       <input type="radio"  class="form-check-input" name="printp">Mothers name
     </lable>
      </div>

    <!--address-->

      <div class="bg-secondary">
  <h5><b>G. </b> Address</h5></div>

    <h6>Residense address</h6>
    <div class="form-group">
      <label for="address">Flat/room/door/block no. </label>
      <input type="text" class="form-control"name="flat1" value="" required>

    </div>

    <div class="form-group">
      <label for="address"> Name of building/village </label>
      <input type="text" class="form-control"name="buld1" value="" required>

    </div>

    <div class="form-group">
      <label for="address"> Road/street/lane/post office</label>
      <input type="text" class="form-control"name="strt1" value="" required>

    </div>

     <div class="form-group">
        <label for="address"> Area /locality/taluka/Sub-division</label>
        <input type="text" class="form-control"name="sdiv1" value="" required>

      </div>

      <div class="form-group">
         <label for="address">Town/city/district</label>
         <input type="text" class="form-control"name="twn1" value="" required>

       </div>

        <div class="form-group">
           <label for="address">State/ Union territory </label>
           <input type="text" class="form-control"name="stat1" value="" required>

         </div>

         <div class="form-group">
             <label for="address">Country </label>
             <input type="text" class="form-control"name="des1" value="" required>

           </div>

           <div class="form-group">
              <label for="address"> Pincode /Zipcode</label>
              <input type="text" class="form-control"name="pcod1" value="" required>

            </div>


    <h6 style="font-size:22px;">Office address :</h6>
    <div class="form-group">
      <label for="of name">Name of office </label>
      <input type="text" class="form-control"name="ofname" value="">

    </div>

    <div class="form-group">
      <label for="address">Flat/room/door/block no. </label>
      <input type="text" class="form-control"name="oflat" value="">

    </div>

    <div class="form-group">
      <label for="address"> Name of building/village </label>
      <input type="text" class="form-control"name="obuld" value="">

    </div>

    <div class="form-group">
      <label for="address"> Road/street/lane/post office</label>
      <input type="text" class="form-control"name="ostrt" value="">

    </div>

     <div class="form-group">
        <label for="address"> Area /locality/taluka/Sub-division</label>
        <input type="text" class="form-control"name="osdiv" value="">

      </div>

      <div class="form-group">
         <label for="address">Town/city/district</label>
         <input type="text" class="form-control"name="otwn" value="">

       </div>

       <div class="form-group">
           <label for="address">State/ Union territory </label>
           <input type="text" class="form-control"name="ostat" value="">

         </div>

          <div class="form-group">
             <label for="address">Country </label>
             <input type="text" class="form-control"name="odes" value="">

           </div>

           <div class="form-group">
              <label for="address"> Pincode /Zipcode</label>
              <input type="text" class="form-control"name="opcod" value="">

            </div>

            <p style="font-weight:600;">Address for communication:</p>

            <div class="form-check-inline">
            <lable class="form-check-lable">
             <input type="radio"  class="form-check-input" name="comm" value="Residense">Residense
           </lable>
            </div>

            <div class="form-check-inline">
            <lable class="form-check-lable">
             <input type="radio"  class="form-check-input" name="comm" value="Office">Office
           </lable>
            </div>

<!--contact details-->

<div class=" bg-secondary">
<h5><b>H.</b>Telephone number & Email details</h5>
</div>

  <div class="form-group">
    <label for="phone num">Telephone/Mobile number :</label>
    <input type="text" class="form-control"name="pnum" value="Phone" required>

  </div>

  <div class="form-group">
    <label for="email">E-mail :</label>
    <input type="text" class="form-control"name="email" value="Email">

  </div>

<!--status-->

<div class=" bg-secondary">
<h5><b>I. </b>Status of applicant</h5>
</div>

<h6>please select status. as applicable</h6>
<select class="form-group " name="sts">
  <option value="individual">Individual</option>
  <option value="Hindu undivided family">Hindu undivided family</option>
  <option value="Company">Company</option>
  <option value="Trusts">Trusts</option>
  <option value="Body of individuals">Body of individuals</option>
  <option value="Local authority"> Local authority</option>
  <option value="Goverment">Goverment</option>
  <option value="Partnership firm">Partnership firm</option>
  <option value="Artifitials juridical person">Artifitials juridical person</option>
  <option value="Association of persons">Association of persons</option>
  <option value="Limited liability Partnership">Limited liability Partnership</option>
</select>
<!--company registretion -->

<div class=" bg-secondary">
<h5><b>J. </b>Registretion number(for company ,firm,LLPs etc.)</h5>
</div>
<div class="form-group">
  <input type="text" name="comprnum" value="">
</div>

<!--aadhar-->

<div class=" bg-secondary">
<h5><b>K. </b>In case of a person, who is required to quote Aadhaar number or Enrolment ID of Aadhaar application as per section <b>139A</b></h5>
</div>
<p>Please mention your AADHAAR number(if alloted) :</p>
<div class="form-group">
  <input type="text" name="aadhaarnum" value="" >
</div>

<p>if Aadhaar is not alloted, mention the enrolment ID of Aadhaar application</p>
<div class="form-group">
  <input type="text" name="aadhaarenid" value="" >
</div>

<h6>Name as per AADHAaR letter or as per the Enrolment ID of Aadhar application(As printed) </h6>
<div class="form-group">
  <input type="text" name="aadhaarname" value="" required>
</div>

<!--income-->
<div class=" bg-secondary">
<h5><b>L. </b>Source of income </h5>
</div>
<select class="" name="income" required>
  <option value="Salary"> Salary</option>
  <option value=" Business/profession"> Business/profession</option>
  <option value="Income by house property"> Income by house property </option>
  <option value="Capital Gains"> Capital Gains</option>
  <option value="Other Sourc"> Other Source </option>
  <option value="No income"> No income</option>
</select>
<p class="text-secondery">Business/profesion code:</p>
<input type="text" name="bpcod" value="">

<!--representative assesse-->

<div class=" bg-secondary">
<h5><b>M. </b>Representative Assesse(RA)</h5>
</div>
<p>Full name,address of representative assesse,who is assessible under the income Tax  ACT in respect of the person, whose particulars have been given in the column 1-13 </p>
<p><b>Full expanded name(initials are not permitted): </b></p>

<h6 class="text-secondary">1.  please select title as applicable</h6><br>

        <div class="form-check-inline">
        <lable class="form-check-lable">
         <input type="radio"  class="form-check-input" name="$rpprefix" value="rpShri">Shri
       </lable>
     </div>

        <div class="form-check-inline">
        <lable class="form-check-lable">
         <input type="radio"  class="form-check-input" name="$rpprefix" value="rpShrimati">Shrimati
       </lable>
        </div>

        <div class="form-check-inline">
        <lable class="form-check-lable">
         <input type="radio"  class="form-check-input" name="$rpprefix" value="rpKumari">Kumari
       </lable>
        </div>

        <div class="form-check-inline">
        <lable class="form-check-lable">
         <input type="radio"  class="form-check-input" name="$rpprefix" value="rpM/s">M/s
       </lable>
        </div>

  <!-- name -->
    <div class="form-group">
      <label for="last name"> Last name</label>
      <input type="text" class="form-control" name="rplastname" value="last name">

    </div>
    <div class="form-group">
      <label for="name"> First name</label>
      <input type="text" class="form-control" name="rpfirstname" value="first name">

    </div>
    <div class="form-group">
      <label for=" name"> Middle name</label>
      <input type="text" class="form-control" name="rpmiddlename" value="middle name">

    </div>
<h6>address:</h6>

<div class="form-group">
  <label for="address">Flat/room/door/block no. </label>
  <input type="text" class="form-control"name="rpflat" value="">

</div>

<div class="form-group">
  <label for="address"> Name of building/village </label>
  <input type="text" class="form-control"name="rpbuld" value="">

</div>

<div class="form-group">
  <label for="address"> Road/street/lane/post office</label>
  <input type="text" class="form-control"name="rpstrt" value="">

</div>

 <div class="form-group">
    <label for="address"> Area /locality/taluka/Sub-division</label>
    <input type="text" class="form-control"name="rpsdiv" value="">

  </div>

  <div class="form-group">
     <label for="address">Town/city/district</label>
     <input type="text" class="form-control"name="rptwn" value="">

   </div>

   <div class="form-group">
       <label for="address">State/ Union territory </label>
       <input type="text" class="form-control"name="rpstat" value="">

     </div>

      <div class="form-group">
         <label for="address">Country </label>
         <input type="text" class="form-control"name="rpdes" value="">

       </div>

       <div class="form-group">
          <label for="address"> Pincode /Zipcode</label>
          <input type="text" class="form-control"name="rppcod" value="">

        </div>

<!--proof of identity-->

<div class=" bg-secondary">
<h5><b>N. </b> Document submitted as Proof of identity(POI), Proof of address(POA), Proof of date of birth(POB) </h5>
</div>
<label for="identity"> Name of Document you have enclosed as proof of identity/ address/ DOB</label>
<input type="text" name="nameofproof" value="" required>

<!--declaration-->
<div class=" bg-secondary">
<h5><b>O. </b> Self declaration</h5>
</div>
<p>I/We <input type="text" name="dname" value="" required>, the applicant, in the capacity of <input type="text" name="capacity" value="" required>do hereby dwclare that what is stated above is true to the best of my/our information and belief </p>
<p>place:<input type="text" name="place" value="" required> </p>
<p>date:<input type="text" name="date" value="" required> </p>



   <div class="form-group">
      <button  class="btn btn-success wow heartBeat" type="submit" name="submit"> Submit</button>

    </div>

</form>
</div>

<!-- js link cdn -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
