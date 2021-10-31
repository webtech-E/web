<html>
<head>
	<link rel="stylesheet" href="style/sign.css">
	<style>
.error {color: #FF0000;}
</style>
</head>

<body>


<!--php validation-->
<?php
// connetion to database
	$conn = mysqli_connect("localhost","root","","bloodhub");
	

// define variables and set to empty values
$full_nameErr = $emailErr = $passwordErr = $c_passwordErr =$genderErr = $phone_numberErr= $passerror= "";
$full_name = $email = $password =$c_password = $gender = $phone_number =$city =$post_code =$blood_group= $massage1="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["full_name"])) {
    $full_nameErr = "Name is required";
  } else {
    $full_name = test_input($_POST["full_name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  if (empty($_POST["password"])) {
    $passwordErr = "Password 
	is required";
  } else {
    $password = test_input($_POST["password"]);
  }
	
  if (empty($_POST["c_password"])) {
    $c_passwordErr = "Confirm password is required";
  } else {
    $c_password = test_input($_POST["c_password"]);
  }
  
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
  
  if (empty($_POST["phone_number"])) {
    $phone_numberErr = "Phone number is required";
  } else {
    $phone_number = test_input($_POST["phone_number"]);
  }
  if (empty($_POST["city"])) {
    $city = "";
  } else {
    $city = test_input($_POST["city"]);
  }
 /* if (empty($_POST["post_code"])) {
    $post_code = "";
  } else {
    $post_code = test_input($_POST["post_code"]);
  }*/
  if (empty($_POST["blood_group"])) {
    $blood_group = "";
  } else {
    $blood_group = test_input($_POST["blood_group"]);
  }
  
  // query here
   if ($_POST["c_password"] == $_POST["password"]) {
	   
	   $query = "INSERT INTO sign(full_name,email,password,gender,phone_number,city,blood_group) VALUES ('$full_name','$email','$password','$gender','$phone_number','$city','$blood_group')";
	   $query_run = mysqli_query($conn,$query);
	  
	   if($query_run)
	   {
		   $massage1 =  "Register Successfully";
		   //$password = test_input($_POST["c_password"]);
	   }
	   else{
		   $massage2 =  "Register Failed";
	   }
	   
		   
  // $password = test_input($_POST["c_password"]);
  } 
  else {
	  $passerror= "not match";
    $c_password = test_input($_POST["c_password"]);
  }
  
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// file start

$myfile = fopen("sign.txt", "a") or die("Unable to open file!");
fwrite($myfile, "Name: ".$full_name."\n");
fwrite($myfile, "Email: ".$email."\n");
fwrite($myfile, "Password: ".$password."\n");
fwrite($myfile, "Confrim-Password: ".$c_password."\n");
fwrite($myfile, "Gender: ".$gender."\n");
fwrite($myfile, "Phone-Number: ".$phone_number."\n");
fwrite($myfile, "City: ".$city."\n");
//fwrite($myfile, "Post-Code: ".$post_code."\n");
fwrite($myfile, "Blood-Group: ".$blood_group."\n");
fwrite($myfile, "******* "."\n");
fclose($myfile);


?>

<section>
  <div class="container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" && "file.php">
	
	<div>
			  <strong><h1 style="text-align: center; color: green"><?php echo $massage1;?></h1></strong>

	</div>
	<div >
			<h1 style="text-align: center;">SINGUP</h1>
			<hr class="white-bar">
	</div>		
		
		
	<div class="step step-1 ">
        <div class="form-group">
          <label for="full-name">Full Name</label>
          <input type="text" id="fullName" name="full_name" placeholder="input your name">
		  <span class="error">* <?php echo $full_nameErr;?></span>
		</div>
        
        <div class="form-group">
          <label for="email">Email(must be uniqe)</label>
		  <input type="text" id="email" name="email" placeholder="input you email">
			<span class="error">* <?php echo $emailErr;?></span>
		</div>
	
		<div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password"  placeholder="Password" class="form-control" >
			  <span class="error">* <?php echo $passwordErr;?></span>
			</div><!--End form-group-->
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password"  placeholder="Confirm Password" class="form-control">

				<span class="error">* <?php echo $c_passwordErr;echo $passerror; ?></span>
			</div>
		<div class="form-group">
			
		</div>	
		<div  >
		<table>
		<tr>
			<td>Gender</td>
			<td>:</td>
			<td>
			<input type="radio" name="gender" value="Male"> &nbsp; Male
			<input type="radio" name="gender" value="Female"> &nbsp; Female
			<input type="radio" name="gender" value="Others"> &nbsp; Others
			<span class="error">* <?php echo $genderErr;?></span>
			</td>
		</tr>
		</table>	
		
		
		<!-- date of not need now
		</div>	
		 <div class="form-inline">
              <br><label for="name">Date of Birth :</label>
              <select class="form-group2" id="date" name="date" style="margin-bottom:10px;" >
                <option value="">---Date---</option>
                <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
              </select>
              <select class="form-group2" name="month" id="month" style="margin-bottom:10px;" >
                <option value="">---Month---</option>
                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
              <select class="form-group2" id="year" name="year" style="margin-bottom:10px;">
                <option value="">---Year---</option>
                <option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option>
              </select>
            </div>
		-->
		
		
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" id="phone" name="phone_number" placeholder="+880********">
			<span class="error">* <?php echo $phone_numberErr;?></span>
		</div>
        
		<div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city"  >
	<option value="">-- Select --</option><optgroup title="Dhaka Division" label="&raquo;Dhaka Division"></optgroup><option value="Bisho Road" >Bisho Road</option><option value="Farmgate" >Farmgate</option><option value="Koratuli" >Koratoli</option><option value="Mirpur" >Mirpur</option><option value="Mirpur 11" >Mirpur 11</option><option value="Uttora" >Uttora</option><option value="Poonch" >Poonch</option><option value="Sudhnati" >Sudhnati</option><optgroup title="Chattogram Division" label="&raquo; Chattogram Division"></optgroup><option value="Bayazid Bostami" >Bayazid Bostami</option><option value="Baluchara" >Balachara</option><option value="Muradpur" >Muradpur</option><option value="Cox's Bazar" >Cox's Bazar</option><option value="Bandarban" >Bandarban</option><option value="Gwadar" >Gwadar</option><option value="Jafarabad" >Jafarabad</option><option value="Jhal Magsi" >Jhal Magsi</option><option value="Kalat" >Kalat</option><option value="Kech" >Kech</option><option value="Kharan" >Kharan</option><option value="Khuzdar" >Khuzdar</option><option value="Kohlu" >Kohlu</option><option value="Lasbela" >Lasbela</option><option value="Loralai" >Loralai</option><option value="Mastung" >Mastung</option><option value="Musakhel" >Musakhel</option><option value="Naseerabad" >Naseerabad</option><option value="Nushki" >Nushki</option><option value="Panjgur" >Panjgur</option><option value="Pishin" >Pishin</option><option value="Qilla Abdullah" >Qilla Abdullah</option><option value="Qilla Saifullah" >Qilla Saifullah</option><option value="Quetta" >Quetta</option><option value="Sibi" >Sibi</option><option value="Zhob" >Zhob</option><option value="Ziarat" >Ziarat</option><optgroup title="Federally Administered Tribal Areas (FATA" label="&raquo; Federally Administered Tribal Areas (FATA"></optgroup><option value="Bajaur Agency" >Bajaur Agency</option><option value="Khyber Agency" >Khyber Agency</option><option value="Kurram Agency" >Kurram Agency</option><option value="Mohmand Agency" >Mohmand Agency</option><option value="North Waziristan Agency" >North Waziristan Agency</option><option value="Orakzai Agency" >Orakzai Agency</option><option value="South Waziristan Agency" >South Waziristan Agency</option><optgroup title="Islamabad Capital" label="&raquo; Islamabad Capital"></optgroup><option value="Islamabad" >Islamabad</option><optgroup title="North-West Frontier Province (NWFP)" label="&raquo; North-West Frontier Province (NWFP)"></optgroup><option value="Abbottabad" >Abbottabad</option><option value="Bannu" >Bannu</option><option value="Batagram" >Batagram</option><option value="Buner" >Buner</option><option value="Charsadda" >Charsadda</option><option value="Chitral" >Chitral</option><option value="Dera Ismail Khan" >Dera Ismail Khan</option><option value="Dir Lower" >Dir Lower</option><option value="Dir Upper" >Dir Upper</option><option value="Hangu" >Hangu</option><option value="Haripur" >Haripur</option><option value="Karak" >Karak</option><option value="Kohat" >Kohat</option><option value="Kohistan" >Kohistan</option><option value="Lakki Marwat" >Lakki Marwat</option><option value="Malakand" >Malakand</option><option value="Mansehra" >Mansehra</option><option value="Mardan" >Mardan</option><option value="Nowshera" >Nowshera</option><option value="Peshawar" >Peshawar</option><option value="Shangla" >Shangla</option><option value="Swabi" >Swabi</option><option value="Swat" >Swat</option><option value="Tank" >Tank</option><optgroup title="Punjab" label="&raquo; Punjab"></optgroup><option value="Alipur" >Alipur</option><option value="Attock" >Attock</option><option value="Bahawalnagar" >Bahawalnagar</option><option value="Bahawalpur" >Bahawalpur</option><option value="Bhakkar" >Bhakkar</option><option value="Chakwal" >Chakwal</option><option value="Chiniot" >Chiniot</option><option value="Dera Ghazi Khan" >Dera Ghazi Khan</option><option value="Faisalabad" >Faisalabad</option><option value="Gujranwala" >Gujranwala</option><option value="Gujrat" >Gujrat</option><option value="Hafizabad" >Hafizabad</option><option value="Jhang" >Jhang</option><option value="Jhelum" >Jhelum</option><option value="Kasur" >Kasur</option><option value="Khanewal" >Khanewal</option><option value="Khushab" >Khushab</option><option value="Lahore" >Lahore</option><option value="Layyah" >Layyah</option><option value="Lodhran" >Lodhran</option><option value="Mandi Bahauddin" >Mandi Bahauddin</option><option value="Mianwali" >Mianwali</option><option value="Multan" >Multan</option><option value="Muzaffargarh" >Muzaffargarh</option><option value="Nankana Sahib" >Nankana Sahib</option><option value="Narowal" >Narowal</option><option value="Okara" >Okara</option><option value="Pakpattan" >Pakpattan</option><option value="Rahim Yar Khan" >Rahim Yar Khan</option><option value="Rajanpur" >Rajanpur</option><option value="Rawalpindi" >Rawalpindi</option><option value="Sahiwal" >Sahiwal</option><option value="Sargodha" >Sargodha</option><option value="Sheikhupura" >Sheikhupura</option><option value="Shekhupura" >Shekhupura</option><option value="Sialkot" >Sialkot</option><option value="Toba Tek Singh" >Toba Tek Singh</option><option value="Vehari" >Vehari</option><optgroup title="Sindh" label="&raquo; Sindh"></optgroup><option value="Badin" >Badin</option><option value="Dadu" >Dadu</option><option value="Ghotki" >Ghotki</option><option value="Hyderabad" >Hyderabad</option><option value="Jacobabad" >Jacobabad</option><option value="Jamshoro" >Jamshoro</option><option value="Karachi" >Karachi</option><option value="Kashmore" >Kashmore</option><option value="Khairpur" >Khairpur</option><option value="Larkana" >Larkana</option><option value="Matiari" >Matiari</option><option value="Mirpur Khas" >Mirpur Khas</option><option value="Naushahro Feroze" >Naushahro Feroze</option><option value="Nawabshah" >Nawabshah</option><option value="Qambar Shahdadkot" >Qambar Shahdadkot</option><option value="Sanghar" >Sanghar</option><option value="Shikarpur" >Shikarpur</option><option value="Sukkur" >Sukkur</option><option value="Tando Allahyar" >Tando Allahyar</option><option value="Tando Muhammad Khan" >Tando Muhammad Khan</option><option value="Tharparkar" >Tharparkar</option><option value="Thatta" >Thatta</option><option value="Umerkot" >Umerkot</option></select>
			
			<!-- post code not need now
			</div>
        <div class="form-group">
          <label for="postCode">Post Code</label>
          <input type="text" id="postCode" name="post_code">
		  
		</div> -->
		
		<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-group" id="blood_group" name="blood_group" >
                <option value="">---Select Your Blood Group---</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O+</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
				
              </select>
			 
            </div>
			
        <a href="index.php"> <button onclick="alertBox()" type="button" class="back-btn">BACK</button></a>
	<button onclick="confirmationBox()" type="submit" class="submit-btn" value="Submit" name="submit">SUBMIT</button>

	 <script>
        function alertBox(){
            alert("Blood-HUb: This" +
                       " is an Alert Box.");
					   return;
        }
  
        function confirmationBox(){
            confirm("Blood-HUb: This" +
                     " is a Confirmation Box.");
					 return;
        }
      </script>
	  </div>

    </form>
	</div>
  </div>
</section>
</body>
</html>
