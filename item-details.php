<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(isset($_POST['submit']))
{
$fromdate=$_POST['fromdate'];
$message=$_POST['message'];
$useremail=$_SESSION['login'];
$status=0;
$vhid=$_GET['vhid'];
$sql="INSERT INTO booking(userEmailid,itemId,FromDate,message,Status) VALUES(:useremail,:vhid,:fromdate,:message,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':vhid',$vhid,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Booking successful.');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again.');</script>";
}

}

?>


<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>sleeqe | Item Details</title>

<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>

<?php include('includes/header.php');?>

<?php 
$vhid=intval($_GET['vhid']);
$sql = "SELECT * from cloths where cloths.id=:vhid";
$query = $dbh -> prepare($sql);
$query->bindParam(':vhid',$vhid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  
$_SESSION['brndid']=$result->bid;  
?>  

<section id="listing_img_slider">
  <div><img src="admin/img/clothimages/<?php echo htmlentities($result->image1);?>" class="img-responsive" alt="image" width="900" height="560"></div>
  <?php if($result->image2=="")
{

} else {
  ?>
  <div><img src="admin/img/clothimages/<?php echo htmlentities($result->image2);?>" class="img-responsive" alt="image" width="900" height="560"></div>
  <?php } ?>
  <?php if($result->image3=="")
{

} else {
  ?>
  <div><img src="admin/img/clothimages/<?php echo htmlentities($result->image3);?>" class="img-responsive" alt="image" width="900" height="560"></div>
  <?php } ?>
</section>

<section class="listing-detail">
  <div class="container">
    <div class="listing_detail_head row">
      <div class="col-md-9">
        <h2><?php echo htmlentities($result->code);?> , <?php echo htmlentities($result->category);?></h2>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <p><?php echo htmlentities($result->price);?> BDT</p>
         
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="main_features">
          <ul>
          
            <li>
              <p>Material</p>
              <h5><?php echo htmlentities($result->material);?></h5>
            </li>
            <li>
              <p>Sizes Available</p>
              <h5><?php echo htmlentities($result->size);?></h5>
            </li>
       
            <li>
              <p>Discount</p>
              <h5><?php echo htmlentities($result->discount);?></h5>
            </li>
          </ul>
        </div>
        <div class="listing_more_info">
          <div class="listing_detail_wrap"> 
            <ul class="nav nav-tabs gray-bg" role="tablist">
              <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">Item Overview </a></li>
            </ul>
            <div class="tab-content"> 
              <div role="tabpanel" class="tab-pane active" id="vehicle-overview">
                <p><?php echo htmlentities($result->overview);?></p>
              </div>

            </div>
          </div>
          
        </div>
<?php }} ?>
   
      </div>
      
      <aside class="col-md-3">
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5>Add To Cart</h5>
          </div>
          <form method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="fromdate" placeholder="Date(dd/mm/yyyy)" required>
            </div>
              <textarea rows="4" class="form-control" name="message" placeholder="Message" required></textarea>
            </div>
          <?php if($_SESSION['login'])
              {?>
              <div class="form-group">
                <input type="submit" class="btn"  name="submit" value="Add Now">
              </div>
              <?php } else { ?>
<a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login To Add</a>

              <?php } ?>
          </form>
        </div>
      </aside>
    </div>
    
    <div class="space-20"></div>
    <div class="divider"></div>
    
  </div>
</section>

<?php include('includes/footer.php');?>
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<?php include('includes/login.php');?>
<?php include('includes/registration.php');?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<script src="assets/switcher/js/switcher.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>