<?php 
session_start();
include('includes/config.php');
error_reporting(0);
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>sleeqe</title>

<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">


<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
<body>


<?php include('includes/header.php');?>

<section id="banner" class="banner-section">  </section>

<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Tailored to fit your style</h2>
      <p>Keep the authenticity of your wardrobe alive with sleeqe, a clothing brand that blends the trend and elegance to satisfy your clothing needs. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
    </div>
    <div class="row"> 
      
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">New Items</a></li>
        </ul>
      </div>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

<?php $sql = "SELECT * from cloths";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  
?>  

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="item-details.php?vhid=<?php echo htmlentities($result->id);?>"><img src="admin/img/clothimages/<?php echo htmlentities($result->image1);?>" class="img-responsive" alt="image"></a>
</div>
<div class="car-title-m">
<h6><a href="item-details.php?vhid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->code);?> , <?php echo htmlentities($result->category);?></a></h6>
<span class="price"><?php echo htmlentities($result->price);?> BDT</span> 
</div>
<div class="inventory_info_m">
<p><?php echo substr($result->overview,0,255);?></p>
</div>
</div>
</div>
<?php }}?>
       
      </div>
    </div>
  </div>
</section>

<div id=contact>
<?php include('includes/footer.php');?>
</div>

<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>

<?php include('includes/login.php');?>
<?php include('includes/registration.php');?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>

</html>