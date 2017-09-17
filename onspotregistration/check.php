<?php

include('connect.php');
$c=$_REQUEST['userid'];

if($_POST['show']){
	$row=mysql_fetch_array(mysql_query("SELECT * from `techtix` WHERE userid='$c'"));
	 }
	
?>
<?php

if($_POST['upd'])
{
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
$m=$_REQUEST['id'];
$def="UPDATE `techtix` SET  name='$name', email='$emailid', phone='$contactno', address='$address', collegename='$college', robo_t_racer='$robo1', turbulance='$robo2', wreselmania='$robo3', wilsoccer='$robo4', clue inquisitor='$cmind1', math mania='$cmind2', rubiks cube='$cmind3', suduku='$cmind4', cs 1.6='$game1', nfsmw='$game2', fifa10='$game3', codeweaver='$engg1', decpher='$engg2', hurtlocker='$engg3', workshop1='$work1',  where id='$m'";
if(mysql_query($def)){ echo "updated";}
} ?>






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

		<input type="text" name="userid" id="textfield" placeholder="enter user id"/><input type="submit" name="show" id="button" value="Show" />
		<fieldset>
                       
			<legend>
				Required!
			</legend>
			<label>
				<span>Name: </span>
				<input value="<?php echo $row['name']; ?>" class="validate[required,custom[onlyLetterSp]] text-input" type="text" name="name" id="onlyascii" />
			</label>
						<label>
				<span>College Name: </span>
				<input value="<?php echo $row['collegename']; ?>" class="validate[required] text-input" type="text" name="cname" id="optional" />
			</label>
			<!--<legend>
				Placeholder & required
			</legend>-->
			<label>
				<span>Email Id: </span>
				<input value="<?php echo $row['email']; ?>" class="validate[required,custom[email]] text-input" type="text" name="email" id="email" />
			</label>
			
			
			<br/>
            <legend>
				Topic:
			</legend>
            	<div style="width:20%">
				<span>Robo_T_Racer :</span>
				<input class="checkbox" type="checkbox" name="robo1" id="maxcheck1" value="5" <?php if( $row['robo_t_racer']==5){ echo "checked"; } ?> /><br/>
                <span>Turbulance :</span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="robo2" id="maxcheck1" value="5" <?php if( $row['turbulance']==5){ echo "checked"; } ?>/><br/>
				<span>Wrestlemania  :</span>
				&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="robo3" id="maxcheck1" value="5" <?php if( $row['wreselmania']==5){ echo "checked"; } ?>/><br/>
				<span>Wild Soccer:</span>
				&nbsp;&nbsp;&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="robo4" id="maxcheck1" value="5" <?php if( $row['wilsoccer']==5){ echo "checked"; } ?>/><br/>
			
			</div>
            
            	<div style="width:20%; margin-left:40%; margin-top:-11%">
				<span>CS 1.6:</span>
				&nbsp;&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="game1" id="maxcheck1" value="5" <?php if( $row['cs 1.6']==5){ echo "checked"; } ?>/><br/>
                <span>NFS MW :</span>
				<input class="checkbox" type="checkbox" name="game2" id="maxcheck1" value="5" <?php if( $row['nfsmw']==5){ echo "checked"; } ?>/><br/>
				<span>FIFA 08:</span>
				&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="game3" id="maxcheck1" value="5" <?php if( $row['fifa10']==5){ echo "checked"; } ?>/><br/><br/>
			
			</div>
				
                
                	<div style="width:20%; margin-left:60%; margin-top:-11%">
				<span>Codeweaver :</span>
				<input class=" checkbox" type="checkbox" name="engg1" id="maxcheck1" value="5" <?php if( $row['codeweaver']==5){ echo "checked"; } ?>/><br/>
                <span>DE'C'IPHER :</span>
				&nbsp;<input class="checkbox" type="checkbox" name="engg2" id="maxcheck1" value="5" <?php if( $row['decpher']==5){ echo "checked"; } ?>/><br/>
				<span>Hurtlocker :</span>
				&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="engg3" id="maxcheck1" value="5" <?php if( $row['hurtlocker']==5){ echo "checked"; } ?>/><br/>
				
				<span>seminar :</span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="work1" id="maxcheck1" value="5" <?php if( $row['workshop1']==5){ echo "checked"; } ?>/><br/><br/>
			
			</div>
            
            	<div style="width:20%; margin-left:20%; margin-top:-12%">
				<span>Clue Inquisitor :</span>
				<input class=" checkbox" type="checkbox" name="cmind1" id="maxcheck1" value="5" <?php if( $row['clue inquisitor']==5){ echo "checked"; } ?>/><br/>
                <span>Math Mania:</span>
				&nbsp;&nbsp;&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="cmind2" id="maxcheck1" value="5" <?php if( $row['math mania']==5){ echo "checked"; } ?>/><br/>
				<span>Rubiks Cube:</span>
				&nbsp;&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="cmind3" id="maxcheck1" value="5" <?php if( $row['rubiks cube']==5){ echo "checked"; } ?>/><br/>
				<span>Sudoku :</span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="checkbox" type="checkbox" name="cmind4" id="maxcheck1" value="5" <?php if( $row['suduku']==5){ echo "checked"; } ?>/><br/>
			
			</div>
			
			
		</fieldset>
			
            
            
            
            
            
            <fieldset>
			<legend>
				Optional
			</legend>
			<label>
				<span>Phone no: </span>
				<input value="<?php echo $row['phone']; ?>"  text-input" type="text" name="phone" id="telephone"/>
			</label>
						<label>
				<span>Address: </span>
				<textarea  text-input" rows="2" cols="20" name="address" id="ta" ><?php echo $row['address']; ?></textarea>
			</label>
		
			
			 <input type="text" name="id" id="textfield3" size="2" readonly="readonly" hidden="true" value="<?php echo $row['id']; ?>"/></td>
		</fieldset>
	
		<input class="submit" type="submit" value="UPDATE" name="upd"/><hr/>
	
	</form>
<?php
//include('header_footer/footer_map.html');
?>
</body>
</html>