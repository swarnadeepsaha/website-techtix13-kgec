<?php 

include('connect.php');
$name=$_REQUEST['name'];//ist database//
$college=$_REQUEST['cname'];
$address=$_REQUEST['address'];
$contactno=$_REQUEST['phone'];
$emailid=$_REQUEST['email'];
$robo1 =$_REQUEST['robo1'];
$robo2 =$_REQUEST['robo2'];
$robo3 =$_REQUEST['robo3'];
$robo4 =$_REQUEST['robo4'];
$cmind1 =$_REQUEST['cmind1'];
$cmind2 =$_REQUEST['cmind2'];
$cmind3 =$_REQUEST['cmind3'];
$cmind4 =$_REQUEST['cmind4'];
$game1 =$_REQUEST['game1'];
$game2 =$_REQUEST['game2'];
$game3 =$_REQUEST['game3'];
$engg1 =$_REQUEST['engg1'];
$engg2 =$_REQUEST['engg2'];
$engg3 =$_REQUEST['engg3'];
$work1 =$_REQUEST['work1'];
$sql='SELECT * FROM techtix'." order by id desc" ;
$result = mysql_query($sql) or die ("Error in query: $query " . mysql_error()); 
$row = mysql_fetch_assoc($result);
$userno=$row['id']+1;
$userid="KGE2KTCH@L" . $userno;  


if($_POST['sub'])
{
	$sql="INSERT INTO `tchtix_register`.`techtix` (`id`, `userid`, `name`, `email`, `phone`, `address`, `collegename`, `robo_t_racer`, `turbulance`, `wreselmania`, `wilsoccer`, `clue inquisitor`, `math mania`, `rubiks cube`, `suduku`, `cs 1.6`, `nfsmw`, `fifa10`, `codeweaver`, `decpher`, `hurtlocker`, `workshop1`, `workshop2`, `workshop3`, `workshop4`) VALUES (NULL, '$userid', '$name', '$emailid', '$contactno', '$address', '$college', '$robo1', '$robo2', '$robo3', '$robo4', '$cmind1', '$cmind2', '$cmind3', '$cmind4', '$game1', '$game2', '$game3', '$engg1', '$engg2', '$engg3', '$work1', '0', '0', '0');";
if(mysql_query($sql))
{
	
	//require('fpdf.php');
//class PDF extends FPDF
//{
	//function Header()
//{
	  //  $this->Image('pdfimage.png',15,6,180);
		//$this->Cell(200);
		//$this->Ln(43);

//}
//}
//$pdf=new PDF();
//$pdf->AliasNbPages();
//$pdf->AddPage();
//$pdf->SetFont('courier','',12);

	//$pdf->Cell(10);
    //$pdf->Cell(0,10,'NAME:'.$name,0,1);
	//$pdf->Cell(10);
   // $pdf->Cell(0,10,'ID:'.$userid,0,1);
	
	//$pdf->Cell(10);
	//$pdf->Cell(0,10,'COLLEGE NAME:'.$college,0,1);
	//$pdf->Cell(10);
	//$pdf->Cell(0,10,'EMAIL ID:'.$emailid,0,1);
	//$pdf->Cell(10);
	//$pdf->Cell(0,10,'MOBILE:'.$contactno,0,1);
      //  $pdf->Cell(10);
	//$pdf->Cell(0,10,'***Download this INFO page.You have to attend with this info.***',0,1);
 // $pdf->Cell(10);
	//$pdf->Cell(0,10,'***For More check out given email id.***',0,1);
//$pdf->Output();



$email_to = $emailid;
$success_message = "Thank you for contacting us. We will get in touch shortly.";
$site_name = "Team Techtix"; 

$email = trim($_POST['email']);
$submitted = $_POST['submitted'];

if(isset($submitted)){
	if($email === '' || $email === $emailid ) {
		$email_empty = true;
		$error = true;
	} elseif (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", $email)){
		$email_unvalid = true;
		$error = true;	
	}
}

if(isset($error)){
		echo '<span class="error_notice"><ul>';
		if($email_empty){
			echo '<li>Please enter your email address</li>';
		} elseif ($email_unvalid) {
			echo '<li>Please enter a valid email address</li>'; 
		} else {
			echo '<li>An error has occurred while sending your message. Please try again later.</li>';
		}
		echo "</ul></span>";
}

if(!isset($error)){
		$subject = 'Regestration TECHTIX 2K13';
                $site_name = 'Team Techtix';
                $reply='media@tchtix.com';
		$body = "Email: you have successfully submitted your registration form.Your Registration id is:".$userid."
for more upgradation email us at media@tchtix.com
thank you for Registration. 
fore more querries contact:1.Swarnadeep Saha (9735395821) 2.Sandip Mondal (9046271971)";
		$headers = 'From: ' . $site_name . '' . "\r\n" . 'Reply-To: ' . $reply . '' . "\r\n" .
	'Content-type: text/html; charset=utf-8' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
		mail($email_to, $subject, $body, $headers);
		
		echo '<span class="success_notice">' . $success_message . '</span>';
	}
	
	}
	else{
		?>
        <div style="color:#E22525; font-size:16px; margin-left:250px;">
        <?php
		echo "This email id is already exist!!!!!! ";
		?>
        </div>
        <?php
		}
		
 
}
 
?>



<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name="Description" content="Techtix :One of the Largest Techno-Management Fest in India" />
<meta name="Keywords" content="Techtix :One of the Largest Techno-Management Fest in India, Kalyani Government College(KGEC), technical fest, techfest, 2013, Kalyani, KGEC,regestration, 
   Government Engineering College, WBUT, events, workshops, guests, lectures, robotics, robotix, puzzle, engineering,exhibitions, my KGEC, sponsors, management, 
   think, create, enjoy, April 11-13" />
<meta name="Author" content="Techtix 2k13" />
<meta property="og:title" content="Techtix 2k13" />
<meta property="og:url" content="http://www.tchtix.com" />
<meta property="og:image" content="http://tchtix.com/logo/techtix_logo.png" />
<meta property="og:description" content="Techtix :One of the Largest Techno-Management Fest in India" />

<meta name=”robots” content=”all, follow” />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Registration</title>
	<link rel="stylesheet" href="css_reg/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="css_reg/template.css" type="text/css"/>
	
	
	
	
     
	<script src="js_reg/jquery-1.8.2.min.js" type="text/javascript">
	</script>
	<script src="js_reg/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="js_reg/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine();
		});

		/**
		*
		* @param {jqObject} the field where the validation applies
		* @param {Array[String]} validation rules for this field
		* @param {int} rule index
		* @param {Map} form options
		* @return an error string if validation failed
		*/
		function checkHELLO(field, rules, i, options){
			if (field.val() != "HELLO") {
				// this allows to use i18 for the error msgs
				return options.allrules.validate2fields.alertText;
			}
		}
	</script>
</head>
<body>
<?php	
//include('header_footer/header.html');
?>
	<form id="formID" class="formular" method="post">

		<input type="text" name="textfield" id="textfield" placeholder="enter user id"/><input type="submit" name="show" id="button" value="Show" />
		<fieldset>
                       
			<legend>
				Required!
			</legend>
			<label>
				<span>Name: </span>
				<input value="" class="validate[required,custom[onlyLetterSp]] text-input" type="text" name="name" id="onlyascii" />
			</label>
						<label>
				<span>College Name: </span>
				<input value="" class="validate[required] text-input" type="text" name="cname" id="optional" />
			</label>
			<!--<legend>
				Placeholder & required
			</legend>-->
			<label>
				<span>Email Id: </span>
				<input value="" class="validate[required,custom[email]] text-input" type="text" name="email" id="email" />
			</label>
			
			
			<br/>
            <legend>
				Topic:
			</legend>
            	<div style="width:20%">
				<span>Robo_T_Racer :</span>
				<input class="checkbox" type="checkbox" name="robo1" id="maxcheck1" value="5"/><br/>
                <span>Turbulance :</span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="robo2" id="maxcheck1" value="5"/><br/>
				<span>Wrestlemania  :</span>
				&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="robo3" id="maxcheck1" value="5"/><br/>
				<span>Wild Soccer:</span>
				&nbsp;&nbsp;&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="robo4" id="maxcheck1" value="5"/><br/>
			
			</div>
            
            	<div style="width:20%; margin-left:40%; margin-top:-11%">
				<span>CS 1.6:</span>
				&nbsp;&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="game1" id="maxcheck1" value="5"/><br/>
                <span>NFS MW :</span>
				<input class="checkbox" type="checkbox" name="game2" id="maxcheck1" value="5"/><br/>
				<span>FIFA 08:</span>
				&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="game3" id="maxcheck1" value="5"/><br/><br/>
			
			</div>
				
                
                	<div style="width:20%; margin-left:60%; margin-top:-11%">
				<span>Codeweaver :</span>
				<input class=" checkbox" type="checkbox" name="engg1" id="maxcheck1" value="5"/><br/>
                <span>DE'C'IPHER :</span>
				&nbsp;<input class="checkbox" type="checkbox" name="engg2" id="maxcheck1" value="5"/><br/>
				<span>Hurtlocker :</span>
				&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="engg3" id="maxcheck1" value="5"/><br/>
				
				<span>seminar :</span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="work1" id="maxcheck1" value="5"/><br/><br/>
			
			</div>
            
            	<div style="width:20%; margin-left:20%; margin-top:-12%">
				<span>Clue Inquisitor :</span>
				<input class=" checkbox" type="checkbox" name="cmind1" id="maxcheck1" value="5"/><br/>
                <span>Math Mania:</span>
				&nbsp;&nbsp;&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="cmind2" id="maxcheck1" value="5"/><br/>
				<span>Rubiks Cube:</span>
				&nbsp;&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="cmind3" id="maxcheck1" value="5"/><br/>
				<span>Sudoku :</span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="cmind4" id="maxcheck1" value="5"/><br/>
			
			</div>
			
			
		</fieldset>
			
            
            
            
            
            
            <fieldset>
			<legend>
				Optional
			</legend>
			<label>
				<span>Phone no: </span>
				<input value=""  text-input" type="text" name="phone" id="telephone"/>
			</label>
						<label>
				<span>Address: </span>
				<textarea  text-input" rows="2" cols="20" name="address" id="ta" ></textarea>
			</label>
		
			
			
		</fieldset>
	
		<input class="submit" type="submit" value="Submit" name="sub"/><hr/>
	
	</form>
<?php
//include('header_footer/footer_map.html');
?>
</body>
</html>