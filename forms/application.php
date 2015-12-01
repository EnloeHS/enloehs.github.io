<?php

$mtime = microtime(); 

$mtime = explode(" ",$mtime); 

$mtime = $mtime[1] + $mtime[0]; 

$tstart = $mtime;

?>

<html>

<head>

<link href=style.txt type="text/css" rel=stylesheet>

<title>Summer Studies at Enloe High School</title>

<script type="text/javascript">

if (navigator.userAgent.indexOf("MSIE")!=-1) { document.writeln("<link rel='stylesheet' type='text/css' href='./ie.css'>"); } else {

if (navigator.userAgent.indexOf("Mozilla")!=-1) { document.writeln("<link rel='stylesheet' type='text/css' href='./mozilla.css'>"); } else {

document.writeln("<link rel='stylesheet' type='text/css' href='./ie.css'>"); } }

</script>

<title></title>

<style type="text/css">

<!--

.style1 {color: #FF0000}

-->

</style>

</head>

<body>

<div class="nav">

<div class="links">

  <p><a href="./">General Information</a><br />

      <a href="./calendar.pdf">Calendar</a><br />

      <a href="./bulletin.pdf" target="_blank">Summer School Bulletin and Acknowledgement Form</a><br />

      Online Course Registration <font color="#FF0000">Closed</font><br>

      <a href="./documents.html">Other Summer School Documents</a><br />

      <a href="http://enloehs.wcpss.net">Enloe High School</a><br />

    </p>

  </div>

<div class="titlebox">

  <p align="left"><span class="pgtitle">Summer Studies 2010<br />

    </span>

      <span class="school">At Enloe High School</span>

      <br />

      <font color="#990000" size="4"></font></p>

  <p align="left"><span class="style1">*</span>      <span class="style1">Submitting this form does not guarantee a seat. You will be notified if you have been enrolled after all applications have been considered and evaluated based upon enrollment criteria.</span><br />

    </p>

</div>

</div><br>

<form name=form action=confirm.php method=post>

<div style="background-color: #E0E0E0; border: 1px solid black; border-bottom: 1px dashed black; margin-right: 15px; padding: 5px; text-align: justify; width: 500px; font-size: 10pt;">

	<b>Personal Contact Information</b>

</div>

<div style="margin-right: 15px; border-left: 1px solid black; padding: 10px; text-align: left; width: 500px;">

	<p><b>Name:</b>	  <input name="namefull" size=81 style="margin-left: 1px; margin-top: 0px; font-size: 9pt;">

	  <br>

	  <br>

	  <b>Address:</b>	  <input name="addresshome" size=78 style="margin-top: 0px; font-size: 9pt;">

	  <br>

	  <br>

	  <b>Home Phone:</b>

	  <input name="phonehome" size=11 style="margin-top: 0px; font-size: 9pt;">

	  <b>Emergency:</b> 

	  <input name="phoneemergency1" size=12 style="margin-top: 0px; font-size: 9pt; margin-left: 2px">

	  <b>Work:</b>

	  <input name="phoneemergency2" size=12 style="margin-top: 0px; font-size: 9pt; margin-left: 1px">

	  <br>

	  <br>

	  <b>Base School (If not attending Enloe):</b> 

	  <input name="baseschool" value="" size=36 style="margin-top: 0px; font-size: 9pt;">

    </p>

	<p><b>Base School #:</b>	  <input name="baseschoolnumber" size=12 style="margin-top: 0px; font-size: 9pt;">

	  <br>

      <br>

	  <b>Student NCWISE ID Number:</b>	  <input name="ncwiseid" size=11 style="margin-left: 2px; margin-top: 0px; font-size: 9pt;">

	  <font color="#FF0000">*Required Field</font><br>

	  <br>

	  </center>

	  <b>Grade 2009-10:</b>

		<input name="currentgrade" type="radio" value="8th">

		8th &nbsp;&nbsp;

		<input name="currentgrade" type="radio" value="9th">

		9th &nbsp;&nbsp;

		<input name="currentgrade" type="radio" value="10th">

		10th &nbsp;

		<input name="currentgrade" type="radio" value="11th">

		11th &nbsp;

		<input name="currentgrade" type="radio" value="12th">

		12th &nbsp;

      <br>

      <br>

	    <b>Year of Graduation:</b> 

		<input name="yeargrad" type="radio" value="2010">

		2010

		<input name="yeargrad" type="radio" value="2011">

		2011

		<input name="yeargrad" type="radio" value="Other">

		Other (2012,2013,2014)

    </p>

</div>

<div style="background-color: #E0E0E0; border: 1px solid black; border-bottom: 1px dashed black; margin-right: 15px; padding: 5px; text-align: justify; width: 500px; font-size: 10pt;">

	<b>Course Information</b>

</div>

<div style="margin-right: 15px; border-left: 1px solid black; padding: 10px; text-align: left; width: 500px;">

	<b>Course Name:</b> (<i>select the one that applies</i>)<br><br>

	<div style="margin-left: 20px;">

	<b><u>Repeat Credit</u> (NovaNet)</b><br>

		<input name="course" type="radio" value="English I">

		10212E - English I<b> </b><br>

		<input name="course" type="radio" value="English II">

	  10222D - English II<b> </b><br>

		<input name="course" type="radio" value="English III"> 

		10232B - English III<b> </b><br>

		<input name="course" type="radio" value="English IV"> 

		10242D - English IV<b> </b><br>

            <input name="course" type="radio" value="Alegbra I"> 

		20232B - Alegebra I<br>

		<input name="course" type="radio" value="Alegebra II"> 

		20242C - Algebra II<b> </b><br>

		<input name="course" type="radio" value="Geometry"> 

		20302B - Geometry<b> </b><br>

		<input name="course" type="radio" value="Tech Math I"> 

		20152B - Tech Math I<b> </b><br>

		<input name="course" type="radio" value="Tech Math II"> 

		20172A - Tech Math II<br>

		<input name="course" type="radio" value="Civics and Economics"> 

		40522A - Civics and Economics<b> </b><br>

		<input name="course" type="radio" value="US History">

		40212C - US History<br>

		<input name="course" type="radio" value="World History"> 

		40242D - World History<br>

		<input name="course" type="radio" value="Biology"> 

		30202E - Biology<b> </b><br>

		<input name="course" type="radio" value="Earth Science"> 

		30402G - Earth Science<br>

		<input name="course" type="radio" value="Eviron Science"> 

		30422A - Eviron Science<br>

		<input name="course" type="radio" value="Physical Science"> 

		30102E - Physical Science<b> </b><br>

	</div>

	<br>

	<div style="margin-left: 20px;">

	  <p><b><u>First Time Credit</u></b><br>

		<br>

            <input name="course" type="radio" value="Healthful Living 1">

            90112A - Healthful Living 1 (1.0 Credit)<br>

            <input name="course" type="radio" value="Healthful Living 1A">

            99852E - Healthful Living 1A (.5 Credit)<b> </b><br>

            <input name="course" type="radio" value="Healthful Living 1I">

            99852I - Healthful Living 1B (.5 Credit)<b> </b><br>

	      <input name="course" type="radio" value="Algebra II (Honors)">

	      20245B - Algebra II (Honors)<b> </b><br>

        <input name="course" type="radio" value="Pre-Calculus (Honors)">

        20705C - Pre-Calculus (Honors)<b> </b></p>

    </div>

	<br>

</div>

<div style="background-color: #E0E0E0; border: 1px solid black; border-bottom: 1px dashed black; margin-right: 15px; padding: 5px; text-align: justify; width: 500px; font-size: 10pt;">

	<b>Emergency Contact Information</b>

</div>

<div style="margin-right: 15px; border-left: 1px solid black; padding: 10px; text-align: left; width: 500px;">

	<b>Name:</b> <input name="emergencyname" size=81 style="margin-left: 1px; margin-top: 0px; font-size: 9pt;"><br><br>

	<b>Relationship:</b> <input name="emergencyrelation" size=73 style="margin-left: 2px; margin-top: 0px; font-size: 9pt;"><br><br>

	<b>Phone Number:</b> <input name="emergencyphone" size=70 style="margin-left: 1px; margin-top: 0px; font-size: 9pt;">

</div>

<div style="background-color: #E0E0E0; border: 1px solid black; border-bottom: 1px dashed black; margin-right: 15px; padding: 5px; text-align: justify; width: 500px; font-size: 10pt;">

	<b>Allergies / Medical Conditions</b>

</div>

<div style="margin-right: 15px; border-left: 1px solid black; padding: 10px; text-align: left; width: 500px;">

	<i>List below any allergies and/or medications which apply to the student</i>:<br><br>

	<textarea name="medicalconditions" rows=5 cols=56></textarea>

</div>

<div style="background-color: #E0E0E0; border: 1px solid black; border-bottom: 1px dashed black; margin-right: 15px; padding: 5px; text-align: justify; width: 500px; font-size: 10pt;">

	<b>Transportation Information</b>

</div>

<div style="margin-right: 15px; border-left: 1px solid black; border-bottom: 1px solid black; padding: 10px; text-align: left; width: 500px;">

	<b><input name="transport" type="radio" value="Carpool">Carpool<br>

	<input name="transport" type="radio" value="Personal">Personal Transportation<br></b>

	<div style="margin-left: 21px;">

		<b>Make / Model:</b> <input name="make" size=67 style="margin-left: 1px; margin-top: 0px; font-size: 9pt;"><br>

		<b>License Tag:</b> <input name="license" size=67 style="margin-left: 12px; margin-top: 0px; font-size: 9pt;">

	</div>

	<br>

</div>

<br>

<input name="Input" type=button value="Submit Application">

<input name="Button" type=button value="Clear Form">

<br><br>

</center>

<i>The information you have entered will be stored in a secure location on the Enloe High School server and directed to the attention of the administration charged with the responsibility of organizing summer education.

<br><br>

<hr size="1">

<br>

<center>

<i>Summer Studies at Enloe High School</i><br><font style="font-size: 2px;"><br></font>

Site Design and Content Copyright &copy; <a href="/clubs/webmasters/">The Webmasters Club of Enloe High School</a><font style="font-size: 2px;">

</font>

<br>

<br>

<?

$mtime = microtime(); 

$mtime = explode(" ",$mtime); 

$mtime = $mtime[1] + $mtime[0]; 

$tend = $mtime; 

$totaltime = ($tend - $tstart); 

// printf ("Page loaded in %f seconds", $totaltime);

?>

</i>

</form>

</body>

</html>

