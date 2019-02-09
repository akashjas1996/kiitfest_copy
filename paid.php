<?php
@require_once("db_connection.php");
include "sql.php";
$sql = new sql();
 ?>
<!DOCTYPE HTML>
<meta name="viewport" content="initial-scale=1.25">

<html>
<head>
  <style>

  /*
  Max width before this PARTICULAR table gets nasty. This query will take effect for any screen smaller than 760px and also iPads specifically.
  */
  @media
    only screen
    and (max-width: 760px), (min-device-width: 768px)
    and (max-device-width: 1024px)  {

    /* Force table to not be like tables anymore */
    table, thead, tbody, th, td, tr {
      display: block;
    }

    /* Hide table headers (but not display: none;, for accessibility) */
    thead tr {
      position: absolute;
      top: -9999px;
      left: -9999px;
    }

    tr {
      margin: 0 0 1rem 0;
    }

    tr:nth-child(odd) {
      background: #ccc;
    }

    td {
      /* Behave  like a "row" */
      border: none;
      border-bottom: 1px solid #eee;
      position: relative;
      padding-left: 50%;
    }

    td:before {
      /* Now like a table header */
      position: absolute;
      /* Top/left values mimic padding */
      top: 0;
      left: 6px;
      width: 45%;
      padding-right: 10px;
      white-space: nowrap;
    }

    /*
    Label the data
    You could also use a data-* attribute and content for this. That way "bloats" the HTML, this way means you need to keep HTML and CSS in sync. Lea Verou has a clever way to handle with text-shadow.
    */

  }

</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>


<?php

//echo "Connected successfully";

if($sql->isVol()==1 && $sql->getRole()==999 || $sql->getRole()==1 )
{
  echo '<table class="table table-bordered table-hover table-dark table-striped table-condensed">
    <thead>
      <tr>
        <th scope="col">Sl</th>
        <th scope="col">KF ID</th>
        <th scope="col">Name</th>
        <th scope="col">Call</th>
        <th scope="col">Institution</th>
        <th scope="col"><a href="volLogout.php">Logout</a></th>
      </tr>
    </thead>';
  $sql = "SELECT * FROM participants_participant WHERE payment_complete=1";
  $result = $GLOBALS['connect']->query($sql);
  $sl=1;
  while($row = $result->fetch_assoc()) {

          echo '
    <tbody id=col'.$sl.'>
      <tr>
        <th scope="row">'.$sl.'</th>
        <td>'.$row['kf_id'].'</td>
        <td width="auto">'.$row['name'].'</td>
        <td><a href="tel://+91'.$row['phone'].'"><i class="fas fa-phone" style="font-size:24px;"></i></td>
        <td>'.$row['institution'].'</td>
      </tr>';
          /*echo '
          <h1></h1>
              <p>'.$sl.'  '.$row['kf_id'].'  '.$row['name'].'  '.$row['email'].'  '.$row['payment_complete'].'  '.$row['phone'].'</p>';*/

              $sl=$sl+1;
        }

}
else {
  echo '<script>';
  echo 'setTimeout(async function(){await swal("WARNING!", "Access Denied", "warning")},50)';
  echo '</script>';
  if($sql->isVol()==0)
  {
    echo '<script>';
    echo 'setTimeout(function(){window.location.href = "index.php";},700)';
    echo '</script>';
  }


}

?>

</tbody>
</table>
</body>
