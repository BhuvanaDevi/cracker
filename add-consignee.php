<?php include("connection.php"); 
$id = isset($_GET['id']) ? $_GET['id'] : "";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Jeyalakshmi Priya">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Jeyalakshmi Priya</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="externallink/font-awesome.min.css">
 </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <?php include('header.php'); ?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include('sidebar.php') ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Add Consignee</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Add</li>
          <li class="breadcrumb-item"><a href="#">Consignee</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Consignee</h3>
            <?php 
            if($id!='') {
              $sql = "select * from consignee where id=$id";
              $exesql = mysqli_query($con,$sql);
              $valsql = mysqli_fetch_assoc($exesql);
            }
            ?>
            <div class="tile-body">
              <form class="row" method="POST">
                <div class="row col-md-12">
                  <div class="form-group col-md-4">
                  <input class="form-control" type="text" value="<?=isset($valsql['name'])?$valsql['name']:""?>" name="consignee_name" placeholder="Enter Consignee name">
                </div>
                <div class="form-group col-md-3">
                  <input class="form-control" type="text" value="<?=isset($valsql['gstin'])?$valsql['gstin']:""?>" name="gstin" placeholder="Enter Consignee GSTIN">
                </div>
                <div class="form-group col-md-3">
                  <input class="form-control" type="text" value="<?=isset($valsql['state'])?$valsql['state']:""?>" name="state" placeholder="Enter Consignee State">
                </div>
                <div class="form-group col-md-2">
                  <input class="form-control" type="text" value="<?=isset($valsql['pincode'])?$valsql['pincode']:""?>" name="pincode" placeholder="Enter Consignee Pincode">
                </div>
                <div class="form-group col-md-3">
                  <input class="form-control" type="text" name="place" value="<?=isset($valsql['place'])?$valsql['place']:""?>" placeholder="Enter Consignee Place">
                </div>
                <div class="form-group col-md-4">
                  <textarea class="form-control" type="text" name="address1" placeholder="Enter Consignee Address1"><?=isset($valsql['address1'])?$valsql['address1']:""?></textarea>
                </div>
                <div class="form-group col-md-4">
                  <textarea class="form-control" type="text" name="address2" placeholder="Enter Consignee Address2"><?=isset($valsql['address2'])?$valsql['address2']:""?></textarea>
                </div>
                </div>
                <div class="row col-md-12 text-center">
                <div class="form-group col-md-12 align-self-end]">
                  <button class="btn btn-primary" type="submit" name="add_consignee"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>

<?php
if(isset($_POST['add_consignee'])) {
  $consigneename = $_POST['consignee_name'];
  $gstin = $_POST['gstin'];
  $state = $_POST['state'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $place = $_POST['place'];
  $pincode = $_POST['pincode'];
  if($id=='') {
  $sqlins = "insert into consignee(name,gstin,state,address1,address2,place,pincode) values('$consigneename','$gstin','$state','$address1','$address2','$place','$pincode')";
  }
  else{
    $sqlins = "update consignee set name='$consigneename',gstin='$gstin',state='$state',address1='$address1',address2='$address2',place='$place',pincode='$pincode' where id=$id";
  }
  $exesql = mysqli_query($con,$sqlins);
  if($exesql) {
    echo "<script>window.location.href='view-consignee.php'</script>";
  }
}
?>