<?php
include("../sql.php");
$sql = new sql();
?>
<!DOCTYPE html>
<?php include "../trac.php"; ?>
<html>
<head>
  <title>Chceckout Page | KIIT Fest 5.0</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="css/fontawesome-all.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
 .shopping-cart{
  padding-bottom: 50px;
  font-family: 'Montserrat', sans-serif;
}

.shopping-cart.dark{
  background-color: #f6f6f6;
}

.shopping-cart .content{
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
  background-color: white;
}

.shopping-cart .block-heading{
    padding-top: 50px;
    margin-bottom: 40px;
    text-align: center;
}

.shopping-cart .block-heading p{
  text-align: center;
  max-width: 420px;
  margin: auto;
  opacity:0.7;
}

.shopping-cart .dark .block-heading p{
  opacity:0.8;
}

.shopping-cart .block-heading h1,
.shopping-cart .block-heading h2,
.shopping-cart .block-heading h3 {
  margin-bottom:1.2rem;
  color: #3b99e0;
}

.shopping-cart .items{
  margin: auto;
}

.shopping-cart .items .product{
  margin-bottom: 20px;
  padding-top: 20px;
  padding-bottom: 20px;
}

.shopping-cart .items .product .info{
  padding-top: 0px;
  text-align: center;
}

.shopping-cart .items .product .info .product-name{
  font-weight: 600;
}

.shopping-cart .items .product .info .product-name .product-info{
  font-size: 14px;
  margin-top: 15px;
}

.shopping-cart .items .product .info .product-name .product-info .value{
  font-weight: 400;
}

.shopping-cart .items .product .info .quantity .quantity-input{
    margin: auto;
    width: 80px;
}

.shopping-cart .items .product .info .price{
  margin-top: 15px;
    font-weight: bold;
    font-size: 22px;
 }

.shopping-cart .summary{
  border-top: 2px solid #5ea4f3;
    background-color: #f7fbff;
    height: 100%;
    padding: 30px;
}

.shopping-cart .summary h3{
  text-align: center;
  font-size: 1.3em;
  font-weight: 600;
  padding-top: 20px;
  padding-bottom: 20px;
}

.shopping-cart .summary .summary-item:not(:last-of-type){
  padding-bottom: 10px;
  padding-top: 10px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.shopping-cart .summary .text{
  font-size: 1em;
  font-weight: 600;
}

.shopping-cart .summary .price{
  font-size: 1em;
  float: right;
}

.shopping-cart .summary button{
  margin-top: 20px;
}

@media (min-width: 768px) {
  .shopping-cart .items .product .info {
    padding-top: 25px;
    text-align: left; 
  }

  .shopping-cart .items .product .info .price {
    font-weight: bold;
    font-size: 22px;
    top: 17px; 
  }

  .shopping-cart .items .product .info .quantity {
    text-align: center; 
  }
  .shopping-cart .items .product .info .quantity .quantity-input {
    padding: 4px 10px;
    text-align: center; 
  }
}
 
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106122426-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-106122426-5');
</script>

</head>
<body>
  <main class="page">
    <section class="shopping-cart dark">
      <div class="container">
            <div class="block-heading">
              <div><center>
                <img src="../kf.png" height="150px" style="padding-bottom:0px"><br>
                <font style="font-family: 'Open Sans', sans-serif;font-size: 22px;color: #292929;">KIIT FEST 5.0</font><br><br>
                <font style="font-family: 'Open Sans', sans-serif;font-size: 12px;color: #a09f9f;">
                Checkout Page For KIIT FEST <br>Note: You cannot remove events after paying...
                </font>
            </center>
      </div>
            </div>
            <div class="content">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="items">
                  <?php
                    $kfid = $sql->getKFID();
                    
                    $sql = "SELECT * FROM participants_participant_events,events WHERE participants_participant_events.participant_id = '$kfid' and participants_participant_events.event_id = events.id";
                    $result = mysqli_query($GLOBALS['connect'],$sql);
                    if($result)
                    {
                        $c = mysqli_num_rows($result);
                        if($c<0){
                          
                          echo '<script>';
                          echo 'setTimeout(async function(){await swal("Sorry! Your Cart is Empty", "Please select an event to checkout", "warning")},50)';
                          echo '</script>';
                          exit();
                          echo '<script>';
                          echo 'setTimeout(function(){window.location.href = "../index.php";},700)';
                          echo '</script>';
                        }
                        $count = 1;
                        while($row = mysqli_fetch_assoc($result))
                        {
                          $sql1 = "select payment_complete from participants_participant where kf_id = '$kfid'";
                          $result1 = mysqli_query($GLOBALS['connect'],$sql1);
                          if($result1){
                            $row1 = mysqli_fetch_assoc($result1);
                            if($row1['payment_complete'] != 1){
  
                            echo '
                            <div class="product">
                            <div class="row">
                              <div class="col-md-3">
                                
                              </div>
                              <div class="col-md-8">
                                <div class="info">
                                  <div class="row">
                                  <div  class="col-md-2">'.$count++.'</div>
                                    <div class="col-md-4 product-name">
                                      <div class="product-name">
                                        <a href="#">'.$row['event_name'].'</a>
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <input class="btn btn-danger" onClick=removeItem('.$row['event_id'].') type="submit" value="Remove">
                                    </div> 
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                                      ';
                          }
                          else{
                            echo '
                            <div class="product">
                            <div class="row">
                              <div class="col-md-3">
                                
                              </div>
                              <div class="col-md-8">
                                <div class="info">
                                  <div class="row">
                                  <div  class="col-md-2">'.$count++.'</div>
                                    <div class="col-md-4 product-name">
                                      <div class="product-name">
                                        <a href="#">'.$row['event_name'].'</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                                      ';
                          }
                          }



                        }
                        $query = "select * from participants_participant where kf_id = '$kfid'";
                        $result1 = mysqli_query($GLOBALS['connect'],$query);
                        if($result1)
                        {
                          $row1 = mysqli_fetch_assoc($result1);
                          if($row1['payment_complete'] != 1){
                            $institution = strtoupper($row1['institution']);
                            if($institution == 'KIIT' || $institution == 'KIIT UNIVERSITY' || $institution == 'KIIT DEEMED TO BE UNIVERSITY' || $institution == 'KALINGA INSTITUTE OF INDUSTRIAL TECHNOLOGY' || $institution == 'Kiit' || $institution == 'Kiit, bbsr'|| $institution == 'kiit')
                            echo ' 
                            </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                            <div class="summary">
                              <h3>Summary</h3>
                              <div class="summary-item"><span class="text">Subtotal</span><span class="price">₹ 208</span></div>
                              <div class="summary-item"><span class="text">Discount</span><span class="price">₹ 0</span></div>
                              <div class="summary-item"><span class="text">Status</span><span class="price">Not Paid</span></div>
                              <div class="summary-item"><span class="text">Total</span><span class="price">₹ 208</span></div>
                              <a href="#"><button type="button" class="btn btn-primary btn-lg btn-block">Proceed to payment</button></a>
                            </div>
                          </div>';
                          else
                          echo ' 
                          </div>
                          </div>
                          <div class="col-md-12 col-lg-4">
                          <div class="summary">
                            <h3>Summary</h3>
                            <div class="summary-item"><span class="text">Subtotal</span><span class="price">₹ 515</span></div>
                            <div class="summary-item"><span class="text">Discount</span><span class="price">₹ 0</span></div>
                            <div class="summary-item"><span class="text">Status</span><span class="price">Not Paid</span></div>
                            <div class="summary-item"><span class="text">Total</span><span class="price">₹ 515</span></div>
                            <a href="#"><button type="button" class="btn btn-primary btn-lg btn-block">Proceed to payment</button></a>
                          </div>
                        </div>';
                              }
                          else{
                            echo ' 
                            </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                            <div class="summary">
                              <h3>Payment Successful</h3>
                             
                            </div>
                          </div>';
                          }
                        }

                    }
                    else
                    {
                              echo mysqli_error($connect);
                    }
                ?>


          </div> 
        </div>
      </div>
    </section>
  </main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
  function removeItem(id){

    event.preventDefault();
      var values = id;

      $.ajax({
        url: "removeItem.php",
        type: "post",
        data: "itemId="+ values,
        success: function (response) {
            
          //swal("Congratulations!", "Sucessfuly Removed", "success");
          swal("Congratulations!", "Sucessfuly Removed", "success");
          setTimeout("window.location = 'checkout.php'");

        },
        error: function(jqXHR, textStatus, errorThrown) {
           swal("Sorry!", "Not able to remove", "info");
        }


    });

    
    }
</script>
</body>
</html>