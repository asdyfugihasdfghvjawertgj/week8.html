<?php
session_start();
$name="";
$nameerror="";
$titleen="";
$titleenerror="";
$nameen="";
$nameenerror="";
$surnameen="";
$surnameenerror="";
$titleth="";
$titletherror="";
$nameth="";
$nametherror="";
$surnameth="";
$surnametherror="";
$nationality="";
$nationalityerror="";
$country="";
$countryerror="";
$school="";
$schoolerror="";
$email="";
$emailerror="";
$code="";
$codeerror="";
$mobile="";
$mobileerror="";
include('header.php');
if (isset($_POST['register'])) {
	
	if (!empty($_POST['citizan'])) {
		$name=$_POST['citizan'];
		//echo "$name";
	}
	else{
		$nameerror="<span style='color:red'>Please enter Citizan ID or Passport No.</span>";
	}
	if (!empty($_POST['titleen'])) {
		$titleen=$_POST['titleen'];
		//echo "$titleen";
	}
	else{
		$titleenerror="<span style='color:red'>Please select Title(EN)</span>";
		
	}
	if (!empty($_POST['nameen'])) {
		$nameen=$_POST['nameen'];
		//echo "$nameen";
	}
	else{
		$nameenerror="<span style='color:red'>Please select Nmae(EN)</span>";
			}
	if (!empty($_POST['surnameen'])) {
		$surnameen=$_POST['surnameen'];
		//echo "$surnameen";
	}
	else{
		$surnameenerror="<span style='color:red'>Please enter Surname(EN)</span>";
		
	}
	if (!empty($_POST['titleth'])) {
		$titleth=$_POST['titleth'];
		//echo "$titleth";
	}
	else{
		$titletherror="<span style='color:red'>Please enter Title(TH)</span>";
		
	}
	if (!empty($_POST['nameth'])) {
		$nameth=$_POST['nameth'];
	}
	else{
		$nametherror="<span style='color:red'>Please enter Name(TH)</span>";
		
	}
	if (!empty($_POST['surnameth'])) {
		$surnameth=$_POST['surnameth'];
	}
	else{
		$surnametherror="<span style='color:red'>Please enter Surname(TH)</span>";
		
	}
	if (!empty($_POST['nationality'])) {
		$nationality=$_POST['nationality'];
	}
	else{
		$nationalityerror="<span style='color:red'>Please enter Nationality</span>";
		
	}
	if (!empty($_POST['country'])) {
		$country=$_POST['country'];
	}
	else{
		$countryerror="<span style='color:red'>Please enter Country</span>";
		
	}
	if (!empty($_POST['school'])) {
		$school=$_POST['school'];

	}
	else{
		$schoolerror="<span style='color:red'>Please enter School</span>";
		
	}
	if (!empty($_POST['email'])) {
		$email=$_POST['email'];

	}
	else{
		$emailerror="<span style='color:red'>Please enter Email</span>";
		
	}
	if (!empty($_POST['code'])) {
		$code=$_POST['code'];

	}
	else{
		$codeerror="<span style='color:red'>Please enter Code</span>";
		
	}
	if (!empty($_POST['mobile'])) {
		$mobile=$_POST['mobile'];

	}
	else{
		$mobileerror="<span style='color:red'>Please enter Mobile</span>";
		
	}
	if (!empty($name) && !empty($titleen) && !empty($nameen) && !empty($surnameen) && !empty($titleth) && !empty($nameth) && !empty($surnameth) && !empty($nationality) && !empty($country) && !empty($school) && !empty($email) && !empty($code) && !empty($mobile)) {
		$_SESSION['input1']=$name;
		$_SESSION['input2']=$titleen;
		$_SESSION['input3']=$nameen;
		$_SESSION['input4']=$surnameen;
		$_SESSION['input5']=$titleth;
		$_SESSION['input6']=$nameth;
		$_SESSION['input7']=$surnameth;
		$_SESSION['input8']=$nationality;
		$_SESSION['input9']=$country;
		$_SESSION['input10']=$school;
		$_SESSION['input11']=$email;
		$_SESSION['input12']=$code;
		$_SESSION['input13']=$mobile;
		header('location:datalist.php');
	}
}
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="jquery.min.js"></script>
</head>
<style type="text/css">
h1{
	position: relative;
	top:-160px;
	color: blue;
	opacity: 0.3;

	}
	#show1{
		display: none;
	}

</style>
<body>
<!--register in image-->	
<h1 style="text-align: center;">REGISTER</h1>
<!--title register-->
<div class="container">
	<h4 style="color: black;" class="font-weight-bold">REGISTER</h4>
	<div style="background-color: darkblue; width: 30px;height: 5px;"></div>
</div>
<!--registration form-->
<div class="container bg-light mt-5">
<form method="POST">
	<div class="row pt-3">
		<div class="col-md-12">
			<div class="form-group">
				<label>Citizan ID Passport No.<span style="color: red;">*</span></label>
				<input type="text" name="citizan" class="form-control" value=<?php echo $name; ?>>
				<span><?php echo $nameerror; ?></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Title(EN)<span style="color: red;">*</span></label>
				<br>
				<select name="titleen" style="width: 100%; height: 40px;">
				<option <?php if (isset($titleen) && $titleen=="") echo "selected";?>></option>
        		<option <?php if (isset($titleen) && $titleen=="Mr.") echo "selected";?>>Mr.</option>
        		<option <?php if (isset($titleen) && $titleen=="Ms.") echo "selected";?>>Ms.</option>
        		<option <?php if (isset($titleen) && $titleen=="Mrs.") echo "selected";?>>Mrs.</option>
    </select>
				<span><?php echo $titleenerror; ?></span>
			</div>
		</div>
	</div>
	<div class="row">
	<div class="col-md-6">
		<div class="form-group">
				<label>Name(EN)<span style="color: red;">*</span></label>
				<input type="text" name="nameen" class="form-control" value=<?php echo $nameen; ?>>
				<span><?php echo $nameenerror; ?></span>
		</div>
	</div>
		<div class="col-md-6">
				<label>Surname(EN)<span style="color: red;">*</span></label>
				<input type="text" name="surnameen" class="form-control" value=<?php echo $surnameen; ?> >
				<span><?php echo $surnameenerror; ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Title(TH)<span style="color: red;">*</span></label>
				<br>
				<select name="titleth" style="width: 100%; height: 40px;">
				<option <?php if (isset($titleth) && $titleth=="") echo "selected";?>></option>
        		<option <?php if (isset($titleth) && $titleth=="นาย") echo "selected";?>>นาย</option>
        		<option <?php if (isset($titleth) && $titleth=="นางสา") echo "selected";?>>นางสา</option>
        		<option <?php if (isset($titleth) && $titleth=="นาง") echo "selected";?>>นาง</option>
				</select>
				<span><?php echo $titletherror; ?></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label>Name(TH)<span style="color: red;">*</span></label>
				<input type="text" name="nameth" class="form-control" value=<?php echo $nameth; ?>>
				<span><?php echo $nametherror; ?></span>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label>Surname(TH)<span style="color: red;">*</span></label>
				<input type="text" name="surnameth" class="form-control" value=<?php echo $surnameth; ?>>
				<span><?php echo $surnametherror; ?></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Nationality<span style="color: red;">*</span></label>
				<br>
				<select name="nationality" style="width: 100%; height: 40px;">
				<option <?php if (isset($nationality) && $nationality=="") echo "selected";?>></option>
        		<option <?php if (isset($nationality) && $nationality=="Burmese") echo "selected";?>>Burmese</option>
        		<option <?php if (isset($nationality) && $nationality=="Thai") echo "selected";?>>Thai</option>
        		<option <?php if (isset($nationality) && $nationality=="Cambodia") echo "selected";?>>Cambodia</option>
				</select>
				<span><?php echo $nationalityerror; ?></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Current Living Country<span style="color: red;">*</span></label>
				<br>
				<select name="country" style="width: 100%; height: 40px;">
				<option <?php if (isset($country) && $country=="") echo "selected";?>></option>
        		<option <?php if (isset($country) && $country=="Living Inside Thailand") echo "selected";?>>Living Inside Thailand</option>
        		<option <?php if (isset($country) && $country=="Living Outside Thailand") echo "selected";?>>Living Outside Thailand</option>
				</select>
				<span><?php echo $countryerror; ?></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>School<span style="color: red;">*</span></label>
				<br>
				<select name="school" style="width: 100%; height: 40px;">
				<option <?php if (isset($school) && $school=="") echo "selected";?>></option>
        		<option <?php if (isset($school) && $school=="10 January 1979 High School, Cambodia") echo "selected";?>>10 January 1979 High School, Cambodia</option>
        		<option <?php if (isset($school) && $school=="AB Paterson College, Australia") echo "selected";?>>AB Paterson College, Australia</option>
        		<option <?php if (isset($school) && $school=="Abasyn University, Pakistan") echo "selected";?>>Abasyn University, Pakistan</option>
        		<option <?php if (isset($school) && $school=="") echo "selected";?>></option>
        		<option <?php if (isset($school) && $school=="Abdul Wali Khan University Mardan, Pakistan") echo "selected";?>>Abdul Wali Khan University Mardan, Pakistan</option>
        		<option <?php if (isset($school) && $school=="Abia State University, Nigeria") echo "selected";?>>Abia State University, Nigeria</option>
        		<option <?php if (isset($school) && $school=="Abo Akademi University, Finland") echo "selected";?>>Abo Akademi University, Finland</option>
				</select>
				<span><?php echo $schoolerror; ?></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Email<span style="color: red;">*</span></label>
				<input type="text" name="email" class="form-control" value=<?php echo $email; ?>>
				<span><?php echo $emailerror; ?></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label>Country Code<span style="color: red;">*</span></label>
				<br>
				<select name="code" style="width: 100%; height: 40px;">
				<option <?php if (isset($code) && $code=="") echo "selected";?>></option>
        		<option <?php if (isset($code) && $code=="+258 (Mozambique)") echo "selected";?>>+258 (Mozambique)</option>
        		<option <?php if (isset($code) && $code=="+95 (Myanmar)") echo "selected";?>>+95 (Myanmar)</option>
        		<option <?php if (isset($code) && $code=="+264 (Namibia)") echo "selected";?>>+264 (Namibia)</option>
        		<option <?php if (isset($code) && $code=="+674 (Nauru)") echo "selected";?>>+674 (Nauru)</option>
        		<option <?php if (isset($code) && $code=="+977 (Nepal)") echo "selected";?>>+977 (Nepal)</option>
        		<option <?php if (isset($code) && $code=="+31 (Netherlands)") echo "selected";?>>+31 (Netherlands)</option>
				</select>
				<span><?php echo $codeerror; ?></span>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label>Mobile<span style="color: red;">*</span></label>
				<input type="text" name="mobile" class="form-control" value=<?php echo $mobile; ?>>
				<span><?php echo $mobileerror; ?></span>
			</div>
		</div>
	</div>
	<div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" name="register" class="btn-success p-2" style="text-align: center; border-radius: 5%; border:1px solid green; width: 100px;">Register</button>
	</div>
	</form>
</div>
</body>
</html>


