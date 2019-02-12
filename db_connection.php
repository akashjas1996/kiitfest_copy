<?php
  //Making connection with database
  session_start();
  date_default_timezone_set("Asia/Kolkata");
  $connect = mysqli_connect("51.68.139.41","kiitfest","hi9jkH27Gb1sEkR","kiitfest_5");
  //$query = "SELECT * FROM auth_user WHERE username = 'techieCool'";
  // $sql = "SELECT * FROM auth_user WHERE username = 'techieCool'";
  //        $result = mysqli_query($connect, $sql);

  //        if (mysqli_num_rows($result) > 0) {
  //           while($row = mysqli_fetch_assoc($result)) {
  //              echo "Name: " . $row["username"]. "<br>";
  //           }
  //        } else {
  //           echo "0 results";
  //        }
// $u = "iuahsudgasy";
//   $sql = "INSERT INTO auth_user(`username`,`password`,`last_login`,`is_superuser`,`is_staff`,`is_active`,`date_joined`) VALUES
//   ('$u',sha1('pass1234'),now(),'0','0','1',now())";

//   if (mysqli_query($connect, $sql)) {
//      echo "New record created successfully";
//   } else {
//      echo "Error: " . $sql . "" . mysqli_error($connect);
//   }

  //echo $result1;
  if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else {
    // echo "CONNECTED";
  }

?>
