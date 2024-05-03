<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <title>Farmer Registration Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
    <script>
    function state() {
        var a = document.getElementById('states').value;
        var array = [];

        if (a === 'Baringo') {
            array = ['Baringo Central', 'Baringo North', 'Baringo South', 'East Pokot', 'Koibatek', 'Marigat'];
        } else if (a === 'Bomet') {
            array = ['Bomet Central', 'Bomet East', 'Bomet West', 'Chepalungu', 'Konoin', 'Sotik'];
        } else if (a === 'Bungoma') {
            array = ['Bokoli', 'Bumula', 'Bungoma Central', 'Bungoma East', 'Bungoma North', 'Bungoma South', 'Cheptais', 'Kabuchai', 'Kanduyi', 'Kimilili', 'Mt. Elgon', 'Sirisia', 'Tongaren', 'Webuye East', 'Webuye West'];
        } else if (a === 'Busia') {
            array = ['Budalangi', 'Bunyala', 'Butula', 'Nambale', 'Samia', 'Tesio', 'Matayos'];
        } else if (a === 'Elgeyo Marakwet') {
            array = ['Keiyo North', 'Keiyo South', 'Marakwet East', 'Marakwet West'];
        } else if (a === 'Embu') {
            array = ['Manyatta', 'Runyenjes', 'Gachoka', 'Mbeere North', 'Mbeere South'];
        } else if (a === 'Garissa') {
            array = ['Balambala', 'Dadaab', 'Fafi', 'Garissa Township', 'Ijara', 'Lagdera'];
        } else if (a === 'Homa Bay') {
            array = ['Homa Bay Town', 'Kasipul Kabondo', 'Kabondo Kasipul', 'Karachuonyo', 'Ndhiwa', 'Rangwe', 'Suba North', 'Suba South'];
        } else if (a === 'Isiolo') {
            array = ['Isiolo North', 'Isiolo South', 'Garbatula', 'Merti'];
        } else if (a === 'Kajiado') {
            array = ['Isinya', 'Kajiado Central', 'Kajiado East', 'Kajiado North', 'Kajiado West', 'Loitokitok', 'Magadi'];
        } else if (a === 'Kakamega') {
            array = ['Butere', 'Kakamega Central', 'Kakamega East', 'Kakamega North', 'Kakamega South', 'Khwisero', 'Lugari', 'Lurambi', 'Malava', 'Matungu', 'Mumias East', 'Mumias West', 'Navakholo'];
        } else if (a === 'Kericho') {
            array = ['Ainamoi', 'Belgut', 'Bureti', 'Kipkelion East', 'Kipkelion West', 'Sigowet'];
        } else if (a === 'Kiambu') {
            array = ['Gatundu North', 'Gatundu South', 'Githunguri', 'Juja', 'Kabete', 'Kiambaa', 'Kiambu Town', 'Kikuyu', 'Limuru', 'Lari', 'Ruiru', 'Thika Town', 'Turkana East', 'Turkana North', 'Turkana South', 'Turkana West'];
        } else if (a === 'Kilifi') {
            array = ['Ganze', 'Kaloleni', 'Kilifi North', 'Kilifi South', 'Magarini', 'Malindi', 'Rabai'];
        } else if (a === 'Kirinyaga') {
            array = ['Gichugu', 'Kirinyaga Central', 'Kirinyaga East', 'Kirinyaga West', 'Mwea East', 'Mwea West'];
        } else if (a === 'Kisii') {
            array = ['Bobasi', 'Bomachoge Borabu', 'Bomachoge Chache', 'Bonchari', 'Kitutu Chache North', 'Kitutu Chache South', 'Nyamache', 'Sameta/Mokwerero'];
        } else if (a === 'Kisumu') {
            array = ['Kisumu Central', 'Kisumu East', 'Kisumu West', 'Muhoroni', 'Nyakach', 'Nyando', 'Seme'];
        } else if (a === 'Kitui') {
            array = ['Ikutha', 'Kabati', 'Kalawa', 'Kauwi', 'Kivou', 'Kitui Central', 'Kyuso', 'Matinyani', 'Mutito', 'Mwingi Central', 'Mwingi North', 'Mwingi West', 'Mutomo', 'Tseikuru'];
        } else if (a === 'Kwale') {
            array = ['Kinango', 'Lunga Lunga', 'Matuga', 'Msambweni'];
        } else if (a === 'Laikipia') {
            array = ['Laikipia East', 'Laikipia North', 'Laikipia West', 'Nyahururu'];
        } else if (a === 'Lamu') {
            array = ['Lamu East', 'Lamu West'];
        } else if (a === 'Machakos') {
            array = ['Athi River', 'Kangundo', 'Kathiani', 'Machakos Town', 'Masinga', 'Matungulu', 'Mavoko', 'Mbooni', 'Yatta'];
        } else if (a === 'Makueni') {
            array = ['Kaiti', 'Kibwezi East', 'Kibwezi West', 'Kilome', 'Makueni', 'Mbooni East', 'Mbooni West'];
        } else if (a === 'Mandera') {
            array = ['Banisa', 'Lafey', 'Mandera Central', 'Mandera East', 'Mandera North', 'Mandera West'];
        } else if (a === 'Marsabit') {
            array = ['Laisamis', 'Marsabit Central', 'Marsabit South', 'North Horr', 'Saku'];
        } else if (a === 'Meru') {
            array = ['Buuri', 'Igembe Central', 'Igembe North', 'Igembe South', 'Imenti Central', 'Imenti North', 'Imenti South', 'Meru Central', 'Tigania Central', 'Tigania East', 'Tigania West'];
        } else if (a === 'Migori') {
            array = ['Awendo', 'Kuria East', 'Kuria West', 'Mabera', 'Nyatike', 'Rongo', 'Suna East', 'Suna West'];
        } else if (a === 'Mombasa') {
            array = ['Changamwe', 'Jomvu', 'Kisauni', 'Likoni', 'Mvita', 'Nyali'];
        } else if (a === 'Murang\'a') {
            array = ['Gatanga', 'Gatundu South', 'Gatundu North', 'Kahuro', 'Kandara', 'Kangema', 'Kigumo', 'Maragua', 'Mathioya', 'Muranga South'];
        } else if (a === 'Nairobi City') {
            array = ['Dagoretti North', 'Dagoretti South', 'Embakasi Central', 'Embakasi East', 'Embakasi North', 'Embakasi South', 'Embakasi West', 'Kamukunji', 'Kasarani', 'Langata', 'Makadara', 'Mathare', 'Nairobi Central', 'Roysambu', 'Starehe', 'Westlands'];
        } else if (a === 'Nakuru') {
            array = ['Bahati', 'Gilgil', 'Kuresoi North', 'Kuresoi South', 'Molo', 'Naivasha', 'Nakuru East', 'Nakuru West', 'Njoro', 'Rongai', 'Subukia'];
        } else if (a === 'Nandi') {
            array = ['Aldai', 'Chesumei', 'Emgwen', 'Mosop', 'Nandi Central', 'Nandi East', 'Nandi North', 'Nandi South', 'Tinderet'];
        } else if (a === 'Narok') {
            array = ['Emurua Dikirr', 'Kilgoris', 'Narok East', 'Narok North', 'Narok South', 'Narok West', 'Trans Mara East', 'Trans Mara West'];
        } else if (a === 'Nyamira') {
            array = ['Borabu', 'Manga', 'Masaba North', 'Masaba South', 'Nyamira North', 'Nyamira South'];
        } else if (a === 'Nyandarua') {
            array = ['Kinangop', 'Kipipiri', 'Ndaragwa', 'Ol Kalou', 'Ol Jorok'];
        } else if (a === 'Nyeri') {
            array = ['Kieni East', 'Kieni West', 'Mathira East', 'Mathira West', 'Mukurweini', 'Nyeri Central', 'Tetu'];
        } else if (a === 'Samburu') {
            array = ['Samburu Central', 'Samburu East', 'Samburu North', 'Samburu West'];
        } else if (a === 'Siaya') {
            array = ['Alego Usonga', 'Bondo', 'Gem', 'Rarieda', 'Ugunja', 'Ugenya'];
        } else if (a === 'Taita Taveta') {
            array = ['Mwatate', 'Taveta', 'Voi', 'Wundanyi'];
        } else if (a === 'Tana River') {
            array = ['Bura', 'Garsen', 'Galole'];
        } else if (a === 'Tharaka Nithi') {
            array = ['Chuka', 'Igambang\'ombe', 'Maara', 'Muthambi', 'Tharaka'];
        } else if (a === 'Trans Nzoia') {
            array = ['Cherang\'any', 'Endebess', 'Kwanza', 'Saboti', 'Kiminini'];
        } else if (a === 'Turkana') {
            array = ['Kang\'atotha', 'Kibish', 'Lodwar', 'Loima', 'Turkana Central', 'Turkana East', 'Turkana North', 'Turkana South'];
        } else if (a === 'Uasin Gishu') {
            array = ['Ainabkoi', 'Kapseret', 'Kesses', 'Moiben', 'Soy', 'Turbo'];
        } else if (a === 'Vihiga') {
            array = ['Emuhaya', 'Hamisi', 'Luanda', 'Sabatia', 'Vihiga'];
        } else if (a === 'Wajir') {
            array = ['Eldas', 'Tarbaj', 'Wajir East', 'Wajir North', 'Wajir South', 'Wajir West'];
        } else if (a === 'West Pokot') {
            array = ['Chepareria', 'Kacheliba', 'Kapenguria', 'Pokot Central', 'Pokot North', 'Pokot South'];
        } else if (a === 'Other') {
            array = ['Unknown'];
        }

        var string = "";
        for (let i = 0; i < array.length; i++) {
            string = string + "<option>" + array[i] + "</option>";
        }
        string = "<select name='district'>" + string + "</select>"
        document.getElementById('district').innerHTML = string;
    }
</script>


    <style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
    .myfooter {
        background-color: #292b2c;

        color: goldenrod;
        margin-top: 15px;
    }

    .aligncenter {
        text-align: center;
    }

    a {
        color: goldenrod;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    nav {
        background-color: #292b2c;
    }

    .navbar-custom {
        background-color: #292b2c;
    }

    /* change the brand and text color */
    .navbar-custom .navbar-brand,
    .navbar-custom .navbar-text {
        background-color: #292b2c;
    }

    .navbar-custom .navbar-nav .nav-link {
        background-color: #292b2c;
    }

    .navbar-custom .nav-item.active .nav-link,
    .navbar-custom .nav-item:hover .nav-link {
        background-color: #292b2c;
    }


    .mybtn {
        border-color: green;
        border-style: solid;
    }


    .right {
        display: flex;
    }

    .left {
        display: none;
    }

    .cart {
        /* margin-left:10px; */
        margin-right: -9px;
    }

    .profile {
        margin-right: 2px;

    }

    .login {
        margin-right: -2px;
        margin-top: 12px;
        display: none;
    }

    .searchbox {
        width: 60%;
    }

    .lists {
        display: inline-block;
    }

    .moblists {
        display: none;
    }

    .logins {
        text-align: center;
        margin-right: -30%;
        margin-left: 35%;
    }
  body{
        margin: 0;
        font-size: .9rem;
        font-weight: 400;
        line-height: 1.6;
        color: #212529;
        text-align: left;
        background-color: #f5f8fa;
    }

    .my-form, .login-form
    {
        font-family: Raleway, sans-serif;
    }

    .my-form
    {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .my-form .row
    {
        margin-left: 0;
        margin-right: 0;
    }

    .login-form
    {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .login-form .row
    {
        margin-left: 0;
        margin-right: 0;
    }
    @media only screen and (min-device-width:320px) and (max-device-width:480px) {
        /* .mycarousel {
            display: none;
        }

        .firstimage {
            height: auto;
            width: 90%;
        }

        .card {
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;

        }

        .col {
            margin-top: 20px;
        } */

        .right {
            display: none;
            background-color: #ff5500;
        }

        /* 
            .settings{
            margin-left:79%;
        } */
        .left {
            display: flex;
        }

        .moblogo {
            display: none;
        }

        .logins {
            text-align: center;
            margin-right: 35%;
            padding: 15px;
        }

        .searchbox {
            width: 95%;
            margin-right: 5%;
            margin-left: 0%;
        }

        .moblists {
            display: inline-block;
            text-align: center;
            width: 100%;
        }
        /* .pic{
        height:auto;
    } */
    
    /* .mobtext{
        display:none;
    }
    .destext{
        display:inline-block;
        width:90%;
        margin-left: 5%;
        margin-right: 5%;
    } */
    }
    </style>
</head>

<body>
 
<main class="my-form">
		<div class="cotainer">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header" style="background-color:#292b2c"><h4 style="font-style:bold;color:goldenrod">Farmer Registration<h4></div>
						<div class="card-body border border-dark">
							<form name="my-form" action="FarmerRegister.php" method="post">
								<div class="form-group row">
									<label for="full_name" class="col-md-4 col-form-label text-md-right"><i class="fas fa-user mr-2"></i><b>Full Name</b></label>
									<div class="col-md-6">
										<input type="text" id="full_name" class="form-control border border-dark" name="name" placeholder="Enter Your Name" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="phone_number" class="col-md-4 col-form-label text-md-right"><i class="fas fa-phone-alt mr-2"></i><b>Phone Number</b></label>
									<div class="col-md-6">
										<input type="text" id="phone_number" class="form-control border border-dark" name="phonenumber" placeholder="Phone Number" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="present_address" class="col-md-4 col-form-label text-md-right"><i class="fas fa-home mr-2"></i><b>Present Address</b></label>
									<div class="col-md-6">
										<textarea type="text" id="present_address" class="form-control border border-dark" rows="4" name="address" placeholder="Address" required></textarea>
									</div>
								</div>	
							
                                <div class="form-group row">
                                    <label for="states" class="col-md-4 col-form-label text-md-right"><b><i class="fas fa-globe-americas mr-2"></i>State</b></label>
                                    <div class="col-md-6">
                                        <select name="statevalue" id="states" onchange="state()" class="form-control border border-dark">
                                            <option value="0">-- Select County --</option>
        <option value="Baringo">Baringo</option>
        <option value="Bomet">Bomet</option>
        <option value="Bungoma">Bungoma</option>
        <option value="Busia">Busia</option>
        <option value="Elgeyo Marakwet">Elgeyo Marakwet</option>
        <option value="Embu">Embu</option>
        <option value="Garissa">Garissa</option>
        <option value="Homa Bay">Homa Bay</option>
        <option value="Isiolo">Isiolo</option>
        <option value="Kajiado">Kajiado</option>
        <option value="Kakamega">Kakamega</option>
        <option value="Kericho">Kericho</option>
        <option value="Kiambu">Kiambu</option>
        <option value="Kilifi">Kilifi</option>
        <option value="Kirinyaga">Kirinyaga</option>
        <option value="Kisii">Kisii</option>
        <option value="Kisumu">Kisumu</option>
        <option value="Kitui">Kitui</option>
        <option value="Kwale">Kwale</option>
        <option value="Laikipia">Laikipia</option>
        <option value="Lamu">Lamu</option>
        <option value="Machakos">Machakos</option>
        <option value="Makueni">Makueni</option>
        <option value="Mandera">Mandera</option>
        <option value="Marsabit">Marsabit</option>
        <option value="Meru">Meru</option>
        <option value="Migori">Migori</option>
        <option value="Mombasa">Mombasa</option>
        <option value="Murang'a">Murang'a</option>
        <option value="Nairobi City">Nairobi City</option>
        <option value="Nakuru">Nakuru</option>
        <option value="Nandi">Nandi</option>
        <option value="Narok">Narok</option>
        <option value="Nyamira">Nyamira</option>
        <option value="Nyandarua">Nyandarua</option>
        <option value="Nyeri">Nyeri</option>
        <option value="Samburu">Samburu</option>
        <option value="Siaya">Siaya</option>
        <option value="Taita Taveta">Taita Taveta</option>
        <option value="Tana River">Tana River</option>
        <option value="Tharaka Nithi">Tharaka Nithi</option>
        <option value="Trans Nzoia">Trans Nzoia</option>
        <option value="Turkana">Turkana</option>
        <option value="Uasin Gishu">Uasin Gishu</option>
        <option value="Vihiga">Vihiga</option>
        <option value="Wajir">Wajir</option>
        <option value="West Pokot">West Pokot</option>
                                           
                              
                                            
                                        </select>
                                    </div>
                                </div>    
                                <div class="form-group row">
                                    <label for="states" class="col-md-4 col-form-label text-md-right"><b><i class="fas fa-globe-americas mr-2"></i>District</b></label>
                                    <div class="col-md-6">
                                        <select name="district" id="district" class="form-control border border-dark">>
                                            <option>Select District</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
									<label for="account2" class="col-md-4 col-form-label text-md-right"><i class="fas fa-pencil-alt mr-2"></i><b>PAN No.</b></label>
									<div class="col-md-6">
										<input type="text" id="account2" class="form-control border border-dark" name="pan" placeholder="Pan number" required>
									</div>
								</div>

                                <div class="form-group row">
									<label for="account1" class="col-md-4 col-form-label text-md-right"><i class="fas fa-university mr-2"></i><b>Bank Account No.</b></label>
									<div class="col-md-6">
										<input type="text" id="account1" class="form-control border border-dark" name="account" placeholder="Bank Account number" required>
									</div>
								</div>


								<div class="form-group row">
									<label for="p1" class="col-md-4 col-form-label text-md-right"><i class="fas fa-lock mr-2"></i><b>Password</b></label>
									<div class="col-md-6">
										<input id="p1" class="form-control border border-dark" type="password" name="password" placeholder="Password" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="p2" class="col-md-4 col-form-label text-md-right"><i class="fas fa-lock mr-2"></i><b>Confirm Password</b></label>
									<div class="col-md-6">
										<input id="p2" class="form-control border border-dark" type="password" name="confirmpassword" placeholder="Confirm Password" required>
									</div>
								</div>

								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary " style="background-color:#292b2c;color:goldenrod"   name="register" value="Register">
										Register
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
   
</body>

</html>


<?php

include("../Includes/db.php");

if (isset($_POST['register'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $account = mysqli_real_escape_string($con, $_POST['account']);
    $pan = mysqli_real_escape_string($con, $_POST['pan']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);
    $district = mysqli_real_escape_string($con, $_POST['district']);
    $state = mysqli_real_escape_string($con, $_POST['statevalue']);

    // Use MD5 hashing for password encryption
    $encryption = md5($password);

    if (strcmp($password, $confirmpassword) == 0) {

        $query = "INSERT INTO farmerregistration (farmer_name,farmer_phone,
                farmer_address, farmer_state, farmer_district,
                farmer_pan,farmer_bank,farmer_password) 
                VALUES ('$name','$phonenumber','$address',
                '$state','$district','$pan','$account',
                '$encryption')";

        $run_register_query = mysqli_query($con, $query);
        echo "<script>console.log('Successfully Inserted');</script>";
        echo "<script>window.open('FarmerLogin.php','_self')</script>";
    } else if (strcmp($password, $confirmpassword) != 0) {
        echo "<script>
				alert('Password and Confirm Password Should be same');
			</script>";
    }
}

?>
