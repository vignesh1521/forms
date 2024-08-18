<!DOCTYPE html> 
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css?v=<?= filemtime('style.css')?>">
	<script type="text/javascript"  defer src="java.js?v=<?=filemtime('java.js') ?>"></script>
	<title>test</title>

</head>
<body >

<div id="body">
<div id="img" class="img" style="background-size:cover;">
</div>
</div>

 <div class="login-page">
 </div>
 	
 	<div class="login-form" id="login_form">
 		<h2>Register your team</h2>
 	<form method="post">
 			<p>Team Name<span>*</span></p>
 			<input type="text" required="" id="team_name" name="team_name" placeholder="Team Name">
 			<p>Team Leader Name<span>*</span></p>
 			<input type="text"  required="" id="leader_name" name="leader_name" placeholder="Team Leader Name">
 			<p>Leader phone no:<span>*</span></p>
 			<input type="number"  required="" id="leader_no" name="leader_no" placeholder="Phone Number">
 			<p>Player name 1<span>*</span></p>
 			<input type="text"   required="" id="palyer1" name="Player_name1" placeholder="Player name 1">
 			<p>Player name 2<span>*</span></p>
 			<input type="text"   required="" id="palyer2" name="Player_name2" placeholder="Player name 2">
 			 			<p>Player name 3<span>*</span></p>
 			<input type="text"  required="" id="palyer3" name="Player_name3" placeholder="Player name 3">
 			 			<p>Player(substitute) Name<span>*</span></p>
 			<input type="text" id="palyer_sub" required="" name="Player_sub" placeholder="Player(substitute)">
 			

 				<p class="create_account" style="text-align:left;">By clikcking 'Register' you agree to our<a href="#"> Terms of services</a></p>
 		<span id="error"></span>
 		<input type="submit" name="" class="btn" value="Submit" >
 		</form>

 	</div>

</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $team_name = $_POST["team_name"];
    $leader_name = $_POST["leader_name"];
    $leader_phone = $_POST["leader_no"];
    $player1 = $_POST["Player_name1"];
    $player2 = $_POST["Player_name2"];
    $player3 = $_POST["Player_name3"];
    $player_sub = $_POST["Player_sub"];

    if (!empty($team_name) && !empty($leader_name) && !empty($leader_phone) && !empty($player1) && !empty($player_sub)) {
        if (preg_match('/^\d{10}$/', $leader_phone)) {
            $text='*Tournament Registration*
Team Name : '. $team_name.'
Leader Name : '.$leader_name.'
Leader Number :'.$leader_phone.'
Player 1: '.$player1.'
Player 2: '.$player2.'
Player 3: '.$player3.'
Player Sub : '.$player_sub;
$encodedMessage = urlencode($text);

        	$message="https://api.whatsapp.com/send?phone=6382979232&text=".$encodedMessage;
        	
        	header("Location: " . $message);

        } else {
             echo "<script>window.location.href = '/?msg=Enter%20a%20Valid%20Phone%20Number';</script>"; 

        }
    } else {
        
             echo "<script>window.location.href = '/?msg=Enter%20All%20Feilds';</script>"; 
        
    };
};
if(isset($_GET['msg'])) {
    $message = $_GET['msg'];
    $message= htmlspecialchars($message);
    echo "<script>
let error=document.getElementById(\"error\");
error.style.display=\"block\"
error.innerHTML=\"$message\"</script>";

    }
?>


 