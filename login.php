<?php

@require_once("db_connection.php");
include "sql.php";
$sql = new sql();
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
      function CheckLogin() {
      if(!empty($_POST['kf_id']) && !empty($_POST['pass']))
      {
          $kfid = $_POST['kf_id'];
					$pass = $_POST['pass'];
					
					//$sql = "SELECT * FROM participants_participant,auth_user WHERE participants_participant.kf_id='$kfid' AND auth_user.password=sha1('$pass')";

					$sql = "select * from participants_participant where kf_id='$kfid'";
          $result = mysqli_query($GLOBALS['connect'],$sql);
					$row = mysqli_fetch_assoc($result);

					$sql1 = "select * from auth_user where id='$row[user_id]'";
					$result1 = mysqli_query($GLOBALS['connect'],$sql1);
					$row1 = mysqli_fetch_assoc($result1);

          if($result1 && $row1>0)
          {
              if($row['verified']==0)
              {
                  echo '<script>';
                  echo 'setTimeout(function(){swal("warning", "Please Verify First", "warning")},50)';
                  //echo 'setTimeout(function(){window.location.href = "https://kiitfest.org/index.html";},800)';
                  echo '</script>';
                  
              }
              else if($row1['password'] == sha1($pass))
              {
                  $_SESSION['valid_participant'] = $row['unique_id'];
									echo '<script>';
                  echo 'setTimeout(async function(){await swal("Congratulations!", "Sucessfuly login", "success")},50)';
                  echo '</script>';
                  if($result)
                  {
                     echo "<script>";
                     echo 'setTimeout(function(){window.location.href = "index.php";},700)';
                     echo "</script>";
                  }
							}
							else
							{
									echo '<script>';
									echo 'setTimeout(function(){swal("warning", "Password Or KF_ID does not match", "warning")},50)';
									echo '</script>';
							}
          }
          else
          {
              echo '<script>';
              echo 'setTimeout(function(){swal("warning", "Password Or KF_ID does not match", "warning")},50)';
              echo '</script>';
          }
      }
    }
        
     if(isset($_POST["submit"])) {
       CheckLogin();
       unset($_POST);
       // header(location:$_SERVER["PHP_SELF"]);
       //header('Location: '.$_SERVER["PHP_SELF"]);
       mysqli_close($GLOBALS['connect']);
       $boolen = false;
    } 

  }  

?>
<!DOCTYPE html>
<?php include "trac.php"; ?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
	<title>Login Here</title>
	
  <link href="https://fonts.googleapis.com/css?family=Lato:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106122426-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-106122426-5');
</script>

</head>
<style>
/* colors */
html {
  width: 100%;
  height: 100%;
}

body {
  background-color: #eff3f4;
  position: relative;
  width: 100%;
  height: 100%;
  font-size: 16px;
  font-family: 'Lato', sans-serif;
  font-weight: 400;
  -webkit-font-smoothing: antialiased;
}

form {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  display: block;
  width: 100%;
  max-width: 400px;
  background-color: #FFF;
  margin: 0;
  padding: 2.25em;
  box-sizing: border-box;
  border: solid 1px #DDD;
  border-radius: .5em;
  font-family: 'Lato', sans-serif;
}
form .svgContainer {
  position: relative;
  width: 200px;
  height: 200px;
  margin: 0 auto 1em;
  border-radius: 50%;
  background: none;
  border: solid 2.5px #3A5E77;
  overflow: hidden;
  pointer-events: none;
}
form .svgContainer div {
  position: relative;
  width: 100%;
  height: 0;
  overflow: hidden;
  padding-bottom: 100%;
}
form .svgContainer .mySVG {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
}
form .inputGroup {
  margin: 0 0 2em;
  padding: 0;
  position: relative;
}
form .inputGroup:last-of-type {
  margin-bottom: 0;
}
form label {
  margin: 0 0 12px;
  display: block;
  font-size: 1.25em;
  color: #217093;
  font-weight: 700;
  font-family: inherit;
}
form input[type='email'], form input[type="text"], form input[type='password'] {
  display: block;
  margin: 0;
  padding: 0 1em 0;
  background-color: #f3fafd;
  border: solid 2px #217093;
  border-radius: 4px;
  -webkit-appearance: none;
  box-sizing: border-box;
  width: 100%;
  height: 65px;
  font-size: 1.55em;
  color: #353538;
  font-weight: 600;
  font-family: inherit;
  transition: box-shadow .2s linear, border-color .25s ease-out;
}
form input[type='email']:focus, form input[type="text"]:focus, form input[type='password']:focus {
  outline: none;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
  border: solid 2px #4eb8dd;
}
form input[type='email'], form input[type="text"] {
  padding: 14px 1em 0px;
}
form button {
  display: block;
  margin: 0;
  padding: .65em 1em 1em;
  background-color: #4eb8dd;
  border: none;
  border-radius: 4px;
  box-sizing: border-box;
  box-shadow: none;
  width: 100%;
  height: 65px;
  font-size: 1.55em;
  color: #FFF;
  font-weight: 600;
  font-family: inherit;
  transition: background-color .2s ease-out;
}
form button:hover, form button:active {
  background-color: #217093;
}
form .inputGroup1 .helper {
  position: absolute;
  z-index: 1;
  font-family: inherit;
}
form .inputGroup1 .helper1 {
  top: 0;
  left: 0;
  -webkit-transform: translate(1.4em, 2.6em) scale(1);
          transform: translate(1.4em, 2.6em) scale(1);
  -webkit-transform-origin: 0 0;
          transform-origin: 0 0;
  color: #217093;
  font-size: 1.25em;
  font-weight: 400;
  opacity: .65;
  pointer-events: none;
  transition: opacity .2s linear, -webkit-transform .2s ease-out;
  transition: transform .2s ease-out, opacity .2s linear;
  transition: transform .2s ease-out, opacity .2s linear, -webkit-transform .2s ease-out;
}
form .inputGroup1.focusWithText .helper {
  /*input[type='email']:focus + .helper {*/
  -webkit-transform: translate(1.4em, 2em) scale(0.65);
          transform: translate(1.4em, 2em) scale(0.65);
  opacity: 1;
}

</style>
<body>
  <form enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="svgContainer">
		<div>
			<svg class="mySVG" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 200 200">
				<defs>
					<circle id="armMaskPath" cx="100" cy="100" r="100"/>
				</defs>
				<clipPath id="armMask">
					<use xlink:href="#armMaskPath" overflow="visible"/>
				</clipPath>
				<circle cx="100" cy="100" r="100" fill="#a9ddf3"/>
        <g class="body">
          <polygon fill="#fff" points="82.8,171.7 100.4,200 118,171.7 136.8,141.5 130.7,138.4 100.4,163 70.1,138.4 64.1,141.5 	"/>
          <path fill="#0484AB" d="M3.4,200l12.1-33.9c1.9-4.1,5.1-7.4,9.2-9.2L64,141.4l36.4,58.5L3.4,200z"/>
          <path fill="#0484AB" d="M197.4,200l-12.1-33.9c-1.9-4.1-5.2-7.4-9.2-9.2l-39.3-15.5L100.4,200H197.4z"/>
          <polygon fill="#6FDAF1" points="55,144.6 88.3,200 100.4,200 95.9,192.7 64.1,141.5 	"/>
          <polygon fill="#6FDAF1" points="145.9,144.6 112.6,200 100.4,200 105,192.7 136.8,141.5 	"/>
          <path fill="#DF2C2C" d="M127.7,156.9l-20.4,9.4c-3.2-3.9-8.9-4.4-12.7-1.1c-0.4,0.3-0.8,0.7-1.1,1.1l-20.3-9.4v30.8l20.4-9.4
		c3.2,3.9,8.9,4.4,12.7,1.1c0.4-0.3,0.8-0.7,1.1-1.1l20.4,9.4L127.7,156.9L127.7,156.9z"/>

          <g>
            <path fill="#F9BDBD" d="M108.8,126H92.2c-2.7,0-5.2-1.2-7-3.2l-16-12.7v27.7l31.1,25.3l0,0l31.3-25.3v-27.7l-16,12.7
			C114.1,124.8,111.5,126,108.8,126z"/>
          </g>
        </g>
				<!-- <g class="earL">
					<g class="outerEar" fill="#F7C19B" stroke="#000" stroke-width="2.5">
						<circle cx="47" cy="83" r="11.5"/>
						<path d="M46.3 78.9c-2.3 0-4.1 1.9-4.1 4.1 0 2.3 1.9 4.1 4.1 4.1" stroke-linecap="round" stroke-linejoin="round"/>
					</g>
					<g class="earHair">
						<rect x="51" y="64" fill="#F7C19B" width="15" height="35"/>
						<path d="M53.4 62.8C48.5 67.4 45 72.2 42.8 77c3.4-.1 6.8-.1 10.1.1-4 3.7-6.8 7.6-8.2 11.6 2.1 0 4.2 0 6.3.2-2.6 4.1-3.8 8.3-3.7 12.5 1.2-.7 3.4-1.4 5.2-1.9" fill="#F7C19B" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
					</g>
				</g>
				<g class="earR">
					<g class="outerEar" fill="#F7C19B" stroke="#000" stroke-width="2.5">
						<circle cx="155" cy="83" r="11.5"/>
						<path d="M155.7 78.9c2.3 0 4.1 1.9 4.1 4.1 0 2.3-1.9 4.1-4.1 4.1" stroke-linecap="round" stroke-linejoin="round"/>
					</g>
					<g class="earHair">
						<rect x="131" y="64" fill="#F7C19B" width="20" height="35"/>
						<path d="M148.6 62.8c4.9 4.6 8.4 9.4 10.6 14.2-3.4-.1-6.8-.1-10.1.1 4 3.7 6.8 7.6 8.2 11.6-2.1 0-4.2 0-6.3.2 2.6 4.1 3.8 8.3 3.7 12.5-1.2-.7-3.4-1.4-5.2-1.9" fill="#F7C19B" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
					</g>
				</g> -->
				<path class="chin" d="M84.1,121.6c2.7,2.9,29.7,2.1,29.2,0.1" fill="none" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        <g class="face">
          <g>
          <!-- Face -->
  				<path fill="#FBC8C8" d="M149.5,68.7c-5.3,3-5.4,6.1-5.4,11.6V84h-6.2l0,0h-0.1V45.9c-28.3,7.4-49.2,3.4-61.6-1.2
					c-3.8-1.3-7.4-3-10.7-5c-0.5-0.3-1-0.6-1.4-0.9c-0.6-0.4-1-0.7-1.2-0.8c0,0-0.1,0-0.1-0.1v46h-6.2l0,0l0,0c0,0,0-0.1,0-0.2v-3.5
					c0-5.2,0-8.3-4.7-11.1c-1.3-0.4-2.7-0.1-3.7,1.5c-4.2,6.3,1.1,21.6,4.5,26l1.7,1.5c1,0.8,1.7,1.3,2.9,1.6l1.8,0.3l9.9,25.3
					L85,138c1.8,2,4.3,3.2,7,3.2h16.6c2.7,0,5.2-1.2,7-3.2l16-12.7l10-25.4c8.9-0.7,11.9-14.3,11.9-24.6
					C153.4,72.5,151.9,70,149.5,68.7z"/>
          <!-- Hair -->
  				<path fill="#84462D" d="M56.6,80.3v3.5V84l0,0h6.2V38l0,0c0,0,0,0,0.1,0.1c0.2,0.1,0.5,0.4,1.2,0.8c0.4,0.2,0.9,0.5,1.4,0.9
					c2.2,1.3,5.8,3.2,10.7,5c12.5,4.6,33.4,8.6,61.6,1.2h0.1v38.1l0,0h6.2v-3.7c0-5.5,0-8.6,5.4-11.6c0.3-0.2,0.6-0.3,0.9-0.5V42
					c5-2,9.2-4.3,12.5-6.9C156.8-7,56.7-9.9,56.7,28.7v-0.1c-3.9,2.2-6.2,6.4-6.3,10.9v28.7c0.6,0.3,1.1,0.6,1.6,0.9
					C56.6,72,56.6,75.1,56.6,80.3z"/>

    <!-- Glasses -->
  	<path fill="#3E3E3F" d="M120.6,55.4c-4.6,0-9,1.9-12.3,5.2c-5.1-2.6-11.1-2.6-16.1,0c-6.7-6.9-17.5-7-24.3-0.2S61,78.2,67.7,85.1
		s17.5,7,24.3,0.2c3.3-3.3,5.1-7.8,5.1-12.5c0-2.8-1.6-6.9-2.8-9.3c2.9-2.1,8.9-2.2,12.4,0c-1.2,2.4-3.3,6.5-3.3,9.3
		c0,9.6,7.7,17.5,17.2,17.5s17.2-7.8,17.2-17.5S130.1,55.4,120.6,55.4L120.6,55.4z"/>
  	<ellipse fill="#EAEAEA" cx="80" cy="72.9" rx="15" ry="15.3"/>
  	<ellipse fill="#EAEAEA" cx="120.6" cy="72.9" rx="15" ry="15.3"/>
  </g>
      </g>
        <!-- <path class="face" fill="#DDF1FA" d="M134.5,46v35.5c0,21.815-15.446,39.5-34.5,39.5s-34.5-17.685-34.5-39.5V46"/> -->
<!--
<path width="100px" height="100px" viewBox="0 0 100 100" class="face" fill="#fbc8c8" d="M209.5,61.9c-10.9,6.1-11.1,12.3-11.1,23.3v7.5h-12.8V15.9c-25.1,5.9-51,8.2-76.8,6.7v0.1
	C83.2,21.2,52.8,14.8,32,0v92.6H19.2v19.2l25.6,64l32.7,25.6c3.6,4.1,8.9,6.4,14.3,6.4h34c5.5,0,10.7-2.3,14.3-6.4l32.7-25.6
	l20.5-51.2c18.1-1.3,24.3-28.8,24.3-49.7C217.4,69.4,214.3,64.5,209.5,61.9z"/>
<path width="100px" height="100px" viewBox="0 0 100 100" class="face" fill="#FBD7D7" d="M32,92.7H19.2v-7.5c0-11-0.1-17.2-11.1-23.3c-4.8,2.6-7.9,7.5-8.1,13c0,20.8,6.1,48.4,24.3,49.7l20.5,51.3
	l32.7,25.6c3.6,4.1,8.9,6.4,14.3,6.4h17V22.6C79.4,20.9,51.5,13.9,32,0L32,92.7z"/>  -->
        <!-- <path class="hair" fill="#84462D"  d="M60.8,45.5v46h-6.2v-3.7c0-5.8,0-8.9-6.2-12.1V47c0-4.5,2.4-8.7,6.3-10.9l0,0.1c0-38.6,100.2-35.7,106.2,6.4
	c-3.3,2.6-7.5,4.9-12.5,6.9v26.3c-6.2,3.2-6.2,6.3-6.2,12.1v3.7h-6.2V53.4c-27.7,6.8-65.8,4.8-81.2-13.6"/> -->
				<!-- <g class="eyebrow">
					<path fill="#FFFFFF" d="M138.142,55.064c-4.93,1.259-9.874,2.118-14.787,2.599c-0.336,3.341-0.776,6.689-1.322,10.037 c-4.569-1.465-8.909-3.222-12.996-5.226c-0.98,3.075-2.07,6.137-3.267,9.179c-5.514-3.067-10.559-6.545-15.097-10.329 c-1.806,2.889-3.745,5.73-5.816,8.515c-7.916-4.124-15.053-9.114-21.296-14.738l1.107-11.768h73.475V55.064z"/>
					<path fill="#FFFFFF" stroke="#3A5E77" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" d="M63.56,55.102 c6.243,5.624,13.38,10.614,21.296,14.738c2.071-2.785,4.01-5.626,5.816-8.515c4.537,3.785,9.583,7.263,15.097,10.329 c1.197-3.043,2.287-6.104,3.267-9.179c4.087,2.004,8.427,3.761,12.996,5.226c0.545-3.348,0.986-6.696,1.322-10.037 c4.913-0.481,9.857-1.34,14.787-2.599"/>
				</g> -->
				<g class="eyeL">
          <path fill="#3E3E3F" d="M86.5,72.8c0-3-2.5-5.6-5.3-5.5l0,0c0,0.1-5.4-0.4-5.3,5.6l0,0c0.1,3,2.4,5.4,5.4,5.4
	C84.2,78.3,86.5,75.8,86.5,72.8L86.5,72.8z"/>
					<!-- <circle cx="85.5" cy="78.5" r="3.5" fill="#3a5e77"/>
					<circle cx="84" cy="76" r="1" fill="#fff"/> -->
				</g>
				<g class="eyeR">
          <path fill="#3E3E3F" d="M123.5,72.8c0-3-2.5-5.6-5.3-5.5l0,0c0,0.1-5.4-0.4-5.3,5.6l0,0c0.1,3,2.4,5.4,5.4,5.4
	C121.2,78.3,123.5,75.8,123.5,72.8L123.5,72.8z"/>
					<!-- <circle cx="114.5" cy="78.5" r="3.5" fill="#3a5e77"/>
					<circle cx="113" cy="76" r="1" fill="#fff"/> -->
				</g>
				<path class="mouth" fill="#F79392" d="M84.6,104.7h31.2c0,0,0,9.5-15.6,9.5S84.6,104.7,84.6,104.7z"/>
				<path class="nose" d="M96.7,82.9h4.7c1.9,0,3,2.2,1.9,3.7l-2.3,3.3c-0.9,1.3-2.9,1.3-3.8,0l-2.3-3.3C93.6,85,94.7,82.9,96.7,82.9z" fill="#FBC8C8"/>
				<g class="arms" clip-path="url(#armMask)">
					<g class="armL">
            <path fill="#FBD7D7" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="0.25" d="M137.8,118.4l-25.5-30.9l30.9-25.7l33.3,24.4L137.8,118.4z"/>
	<path fill="#FBD7D7" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="0.25" d="M131,72.1l15.4-12.8c2.2-1.8,5.3-1.4,7,0.6c1.8,2.2,1.4,5.3-0.6,7l-8.2,6.8 M165,82.9l15.5-12.8
	c2.2-1.8,5.3-1.4,7,0.6c1.8,2.2,1.4,5.3-0.6,7l-14.6,12.1 M158.6,75.1L177,59.8c2.2-1.8,5.3-1.4,7,0.6c1.8,2.2,1.4,5.3-0.6,7
	L165,82.8 M148.4,70.6l20.7-17.2c2.2-1.8,5.3-1.4,7,0.6c1.8,2.2,1.4,5.3-0.6,7l-17,14.1"/>
	<path fill="#FFF" d="M180.6,73.7l1.7-1.5c0.9-0.7,2.1-0.6,2.8,0.3s0.6,2.1-0.3,2.8l-1.7,1.5L180.6,73.7z M177.3,63.5L179,62
	c0.9-0.7,2.1-0.6,2.8,0.3s0.6,2.1-0.3,2.8l-1.7,1.5L177.3,63.5z M169.3,57.1l1.7-1.5c0.9-0.7,2.1-0.6,2.8,0.3
	c0.7,0.9,0.6,2.1-0.3,2.8l-1.7,1.5C171.8,60.2,169.3,57.1,169.3,57.1z M145.7,61.9l1.7-1.5c0.9-0.7,2.1-0.6,2.8,0.3
	c0.7,0.9,0.6,2.1-0.3,2.8l-1.7,1.5C148.2,64.9,145.7,61.9,145.7,61.9z"/>
	<path fill="#0484AB" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="0.25" d="M139.6,116.9c-31.4,30.8-63.6,63-83.5,77.5l-34.7-41.6c26.3-23,58.4-45,92.5-66.6"/>
            </g>
					<g class="armR">
  <path fill="#FBD7D7" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="0.25" d="M250.7,117.4l25.5-30.9l-30.9-25.7L212,85.2L250.7,117.4z"/>
	<path fill="#FBD7D7" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="0.25" d="M257.6,71.1l-15.4-12.8c-2.2-1.8-5.3-1.4-7,0.6c-1.8,2.2-1.4,5.3,0.6,7l8.2,6.8 M223.6,81.9l-15.5-12.8
		c-2.2-1.8-5.3-1.4-7,0.6c-1.8,2.2-1.4,5.3,0.6,7l14.6,12.1 M229.9,74.1l-18.4-15.3c-2.2-1.8-5.3-1.4-7,0.6c-1.8,2.2-1.4,5.3,0.6,7
		l18.4,15.3 M240.2,69.6l-20.7-17.2c-2.2-1.8-5.3-1.4-7,0.6c-1.8,2.2-1.4,5.3,0.6,7l17,14.1"/>
	<path fill="#FFF" d="M208,72.7l-1.7-1.5c-0.9-0.7-2.1-0.6-2.8,0.3s-0.6,2.1,0.3,2.8l1.7,1.5L208,72.7z M211.3,62.5l-1.7-1.5
		c-0.9-0.7-2.1-0.6-2.8,0.3c-0.7,0.9-0.6,2.1,0.3,2.8l1.7,1.5L211.3,62.5z M219.3,56.1l-1.7-1.5c-0.9-0.7-2.1-0.6-2.8,0.3
		c-0.7,0.9-0.6,2.1,0.3,2.8l1.7,1.5C216.8,59.2,219.3,56.1,219.3,56.1z M242.8,60.9l-1.7-1.5c-0.9-0.7-2.1-0.6-2.8,0.3
		c-0.7,0.9-0.6,2.1,0.3,2.8l1.7,1.5C240.3,63.9,242.8,60.9,242.8,60.9z"/>
	<path fill="#0484AB" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="0.25" d="M249,116.9c31.4,30.8,63.6,63,83.5,77.5l34.7-41.6c-26.3-23-58.4-45-92.5-66.6"/>
					</g>
				</g>
			</svg>
		</div>
	</div>

	<div class="inputGroup inputGroup1">
		<label for="username">KF_ID</label>
		<input type="text" id="email"  name="kf_id"  maxlength="256"/>
		<span class="indicator"></span>
	</div>
	<div class="inputGroup inputGroup2">
		<label for="password">Password</label>
		<input type="password" id="password" name="pass" class="password" />
	</div>
	<div class="inputGroup inputGroup3">
		<button type="submit" name="submit" id="login">Log in</button><br>
		Forgot your password? <a href="/forgot.php" class="">Click here to reset</a><br><br>
		<span style="text-align: centre;">Didn't recieve your KFID or verification mail? <a href="/verify-again.php" class="">Click here</a></span> 
    <br><br>
    <span style="text-align: centre;">Get verification link in Phone <a href="/get-verified.php" class="">Click here</a></span> 
	</div>
</form>


  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js'></script>
  <script>
  	var email = document.querySelector('#email'), password = document.querySelector('#password'), mySVG = document.querySelector('.svgContainer'), armL = document.querySelector('.armL'), armR = document.querySelector('.armR'), eyeL = document.querySelector('.eyeL'), eyeR = document.querySelector('.eyeR'), nose = document.querySelector('.nose'), mouth = document.querySelector('.mouth'), mouthBG = document.querySelector('.mouthBG'), mouthSmallBG = document.querySelector('.mouthSmallBG'), mouthMediumBG = document.querySelector('.mouthMediumBG'), mouthLargeBG = document.querySelector('.mouthLargeBG'), mouthMaskPath = document.querySelector('#mouthMaskPath'), mouthOutline = document.querySelector('.mouthOutline'), tooth = document.querySelector('.tooth'), tongue = document.querySelector('.tongue'), chin = document.querySelector('.chin'), face = document.querySelector('.face'), eyebrow = document.querySelector('.eyebrow'), outerEarL = document.querySelector('.earL .outerEar'), outerEarR = document.querySelector('.earR .outerEar'), earHairL = document.querySelector('.earL .earHair'), earHairR = document.querySelector('.earR .earHair'), hair = document.querySelector('.hair');
var caretPos, curEmailIndex, screenCenter, svgCoords, eyeMaxHorizD = 10 /*20*/, eyeMaxVertD = 10, noseMaxHorizD = 10 /*23*/, noseMaxVertD = 10, dFromC, eyeDistH, eyeLDistV, eyeRDistV, eyeDistR, mouthStatus = "small";

function getCoord(e) {
	var 	carPos = email.selectionEnd,
		div = document.createElement('div'),
		span = document.createElement('span'),
		copyStyle = getComputedStyle(email),
		emailCoords = {}, caretCoords = {}, centerCoords = {}
	;
	[].forEach.call(copyStyle, function(prop){
		div.style[prop] = copyStyle[prop];
	});
	div.style.position = 'absolute';
	document.body.appendChild(div);
	div.textContent = email.value.substr(0, carPos);
	span.textContent = email.value.substr(carPos) || '.';
	div.appendChild(span);

	emailCoords = getPosition(email);							//console.log("emailCoords.x: " + emailCoords.x + ", emailCoords.y: " + emailCoords.y);
	caretCoords = getPosition(span);							//console.log("caretCoords.x " + caretCoords.x + ", caretCoords.y: " + caretCoords.y);
	centerCoords = getPosition(mySVG);							//console.log("centerCoords.x: " + centerCoords.x);
	svgCoords = getPosition(mySVG);
	screenCenter = centerCoords.x + (mySVG.offsetWidth / 2);		//console.log("screenCenter: " + screenCenter);
	caretPos = caretCoords.x + emailCoords.x;					//console.log("caretPos: " + caretPos);

	dFromC = screenCenter - caretPos; 							//console.log("dFromC: " + dFromC);
	var pFromC = Math.round((caretPos / screenCenter) * 100) / 100;
	if(pFromC < 1) {

	} else if(pFromC > 1) {
		pFromC -= 2;
		pFromC = Math.abs(pFromC);
	}

	eyeDistH = -dFromC * .05;
	if(eyeDistH > eyeMaxHorizD) {
		eyeDistH = eyeMaxHorizD;
	} else if(eyeDistH < -eyeMaxHorizD) {
		eyeDistH = -eyeMaxHorizD;
	}

	var eyeLCoords = {x: svgCoords.x + 0, y: svgCoords.y + 1};
	var eyeRCoords = {x: svgCoords.x + 0, y: svgCoords.y + 1}; //svgCoords.x + 120
	var noseCoords = {x: svgCoords.x + 0.97, y: svgCoords.y + 0.81};	//97 & 81
	var mouthCoords = {x: svgCoords.x - 0, y: svgCoords.y - 100}; //100
	var eyeLAngle = getAngle(eyeLCoords.x, eyeLCoords.y, emailCoords.x + caretCoords.x, emailCoords.y + 25);
	var eyeLX = Math.cos(eyeLAngle) * eyeMaxHorizD;
	var eyeLY = Math.sin(eyeLAngle) * eyeMaxVertD;
	var eyeRAngle = getAngle(eyeRCoords.x, eyeRCoords.y, emailCoords.x + caretCoords.x, emailCoords.y + 25);
	var eyeRX = Math.cos(eyeRAngle) * eyeMaxHorizD;
	var eyeRY = Math.sin(eyeRAngle) * eyeMaxVertD;
	var noseAngle = getAngle(noseCoords.x, noseCoords.y, emailCoords.x + caretCoords.x, emailCoords.y + 25);
	var noseX = Math.cos(noseAngle) * noseMaxHorizD;
	var noseY = Math.sin(noseAngle) * noseMaxVertD;
	var mouthAngle = getAngle(mouthCoords.x, mouthCoords.y, emailCoords.x + caretCoords.x, emailCoords.y + 0);
	var mouthX = Math.cos(mouthAngle) * noseMaxHorizD;
	var mouthY = Math.sin(mouthAngle) * noseMaxVertD;
	var mouthR = Math.cos(mouthAngle) * 0.00006;
	var chinX = mouthX * .8;  //8
	var chinY = mouthY * .5;	//5
	var chinS = 1 - ((dFromC * .15) / 100);
	if(chinS > 1) {chinS = 1 - (chinS - 1);}
	var faceX = mouthX * .3;	//3
	var faceY = mouthY * .4;	//4
	var faceSkew = Math.cos(mouthAngle) * 0.1; //5
	// var eyebrowSkew = Math.cos(mouthAngle) * 25;
	// var outerEarX = Math.cos(mouthAngle) * 4;
	// var outerEarY = Math.cos(mouthAngle) * 5;
	// var hairX = Math.cos(mouthAngle) * 6;
	// var hairS = 1.2;

	TweenMax.to(eyeL, 1, {x: -eyeLX , y: -eyeLY, ease: Expo.easeOut});
	TweenMax.to(eyeR, 1, {x: -eyeRX , y: -eyeRY, ease: Expo.easeOut});
	TweenMax.to(nose, 1, {x: -noseX, y: -noseY, rotation: mouthR, transformOrigin: "center center", ease: Expo.easeOut});
	TweenMax.to(mouth, 1, {x: -mouthX  , y: -mouthY, rotation: mouthR, transformOrigin: "center center", ease: Expo.easeOut});
	TweenMax.to(chin, 1, {x: -chinX, y: -chinY, scaleY: chinS, ease: Expo.easeOut});
	TweenMax.to(face, 1, {x: -faceX, y: -faceY, skewX: -faceSkew, transformOrigin: "center top", ease: Expo.easeOut});
	// TweenMax.to(eyebrow, 1, {x: -faceX, y: -faceY, skewX: -eyebrowSkew, transformOrigin: "center top", ease: Expo.easeOut});
	// TweenMax.to(outerEarL, 1, {x: outerEarX, y: -outerEarY, ease: Expo.easeOut});
	// TweenMax.to(outerEarR, 1, {x: outerEarX, y: outerEarY, ease: Expo.easeOut});
	// TweenMax.to(earHairL, 1, {x: -outerEarX, y: -outerEarY, ease: Expo.easeOut});
	// TweenMax.to(earHairR, 1, {x: -outerEarX, y: outerEarY, ease: Expo.easeOut});
	// TweenMax.to(hair, 1, {x: hairX, scaleY: hairS, transformOrigin: "center bottom", ease: Expo.easeOut});

	document.body.removeChild(div);
};

function onEmailInput(e) {
	getCoord(e);
	var value = e.target.value;
	curEmailIndex = value.length;

	// very crude email validation for now to trigger effects
	if(curEmailIndex > 0) {
		if(mouthStatus == "small") {
			mouthStatus = "medium";
			TweenMax.to([mouthBG, mouthOutline, mouthMaskPath], 1, {morphSVG: mouthMediumBG, shapeIndex: 8, ease: Expo.easeOut});
			//TweenMax.to(tooth, 1, {x: 0, y: 0, ease: Expo.easeOut});
			//TweenMax.to(tongue, 1, {x: 0, y: 1, ease: Expo.easeOut});
			TweenMax.to([eyeL, eyeR], 1, {scaleX: .85, scaleY: .85, ease: Expo.easeOut});
		}
		if(value.includes("@")) {
			mouthStatus = "large";
			TweenMax.to([mouthBG, mouthOutline, mouthMaskPath], 1, {morphSVG: mouthLargeBG, ease: Expo.easeOut});
			//TweenMax.to(tooth, 1, {x: 3, y: -2, ease: Expo.easeOut});
			//TweenMax.to(tongue, 1, {y: 2, ease: Expo.easeOut});
			TweenMax.to([eyeL, eyeR], 1, {scaleX: .75, scaleY: .75, ease: Expo.easeOut, transformOrigin: "center center"});
		} else {
			mouthStatus = "medium";
			TweenMax.to([mouthBG, mouthOutline, mouthMaskPath], 1, {morphSVG: mouthMediumBG, ease: Expo.easeOut});
			//TweenMax.to(tooth, 1, {x: 0, y: 0, ease: Expo.easeOut});
			//TweenMax.to(tongue, 1, {x: 0, y: 1, ease: Expo.easeOut});
			TweenMax.to([eyeL, eyeR], 1, {scaleX: .85, scaleY: .85, ease: Expo.easeOut});
		}
	} else {
		mouthStatus = "small";
		TweenMax.to([mouthBG, mouthOutline, mouthMaskPath], 1, {morphSVG: mouthSmallBG, shapeIndex: 9, ease: Expo.easeOut});
		//TweenMax.to(tooth, 1, {x: 0, y: 0, ease: Expo.easeOut});
		//TweenMax.to(tongue, 1, {y: 0, ease: Expo.easeOut});
		TweenMax.to([eyeL, eyeR], 1, {scaleX: 1, scaleY: 1, ease: Expo.easeOut});
	}
}

function onEmailFocus(e) {
	e.target.parentElement.classList.add("focusWithText");
	getCoord();
}

function onEmailBlur(e) {
	if(e.target.value == "") {
		e.target.parentElement.classList.remove("focusWithText");
	}
	resetFace();
}

function onPasswordFocus(e) {
	coverEyes();
}

function onPasswordBlur(e) {
	uncoverEyes();
}

function coverEyes() {
	TweenMax.to(armL, .45, {x: -93, y: 10, rotation: 0, ease: Quad.easeOut});
	TweenMax.to(armR, .45, {x: -93, y: 10, rotation: 0, ease: Quad.easeOut, delay: .1});
}

function uncoverEyes() {
	TweenMax.to(armL, 1.35, {y: 220, ease: Quad.easeOut});
	TweenMax.to(armL, 1.35, {rotation: 105, ease: Quad.easeOut, delay: .1});
	TweenMax.to(armR, 1.35, {y: 220, ease: Quad.easeOut});
	TweenMax.to(armR, 1.35, {rotation: -105, ease: Quad.easeOut, delay: .1});
}

function resetFace() {
	TweenMax.to([eyeL, eyeR], 1, {x: 0, y: 0, ease: Expo.easeOut});
	TweenMax.to(nose, 1, {x: 0, y: 0, scaleX: 1, scaleY: 1, ease: Expo.easeOut});
	TweenMax.to(mouth, 1, {x: 0, y: 0, rotation: 0, ease: Expo.easeOut});
	TweenMax.to(chin, 1, {x: 0, y: 0, scaleY: 1, ease: Expo.easeOut});
	TweenMax.to([face, eyebrow], 1, {x: 0, y: 0, skewX: 0, ease: Expo.easeOut});
	TweenMax.to([outerEarL, outerEarR, earHairL, earHairR, hair], 1, {x: 0, y: 0, scaleY: 1, ease: Expo.easeOut});
}

function getAngle(x1, y1, x2, y2) {
	var angle = Math.atan2(y1 - y2, x1 - x2);
	return angle;
}

function getPosition(el) {
	var xPos = 0;
	var yPos = 0;

	while (el) {
		if (el.tagName == "BODY") {
			// deal with browser quirks with body/window/document and page scroll
			var xScroll = el.scrollLeft || document.documentElement.scrollLeft;
			var yScroll = el.scrollTop || document.documentElement.scrollTop;

			xPos += (el.offsetLeft - xScroll + el.clientLeft);
			yPos += (el.offsetTop - yScroll + el.clientTop);
		} else {
			// for all other non-BODY elements
			xPos += (el.offsetLeft - el.scrollLeft + el.clientLeft);
			yPos += (el.offsetTop - el.scrollTop + el.clientTop);
		}

		el = el.offsetParent;
	}
	return {
		x: xPos,
		y: yPos
	};
}

email.addEventListener('focus', onEmailFocus);
email.addEventListener('blur', onEmailBlur);
email.addEventListener('input', onEmailInput);
password.addEventListener('focus', onPasswordFocus);
password.addEventListener('blur', onPasswordBlur);
TweenMax.set(armL, {x: -93, y: 220, rotation: 105, transformOrigin: "top left"});
TweenMax.set(armR, {x: -93, y: 220, rotation: -105, transformOrigin: "top right"});
  </script>
</body>

</html>
