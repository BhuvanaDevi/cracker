<?php include("connection.php");
$id=isset($_GET['id'])?$_GET['id']:""; ?>
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
          <h1><i class="fa fa-edit"></i>Add Tax</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Add</li>
          <li class="breadcrumb-item"><a href="#">Tax</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Intrastate</h3>
            <?php 
            if($id!='') {
              $sqligst = "select * from tax where id=$id";
              $exeigst = mysqli_query($con,$sqligst);
              $valigst = mysqli_fetch_assoc($exeigst);
            }
            ?>
            <div class="tile-body">
              <form method="POST">
                <div class="row col-md-12">
                <div class="form-group col-md-4 text-right">
                  <label class="control-label">IGST</label>
                </div>
                <div class="form-group col-md-4">
                <input class="form-control" type="text" value="<?=isset($valigst['igst'])?$valigst['igst']:"";?>" name="igst" placeholder="Enter IGST Value">
                </div>
                <div class="form-group col-md-4">
                <button class="btn btn-primary" type="submit" name="add_igst"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>&nbsp;&nbsp;&nbsp;
                </div>
                </div>      
               </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Interstate</h3>
            <?php 
              $sqlcgst = "select * from tax where id=$id";
              $execgst = mysqli_query($con,$sqlcgst);
              $valcgst = mysqli_fetch_assoc($execgst);
            ?>
            <div class="tile-body">
            <form method="post">
                <div class="row col-md-12">
                <div class="form-group col-md-1">
                  <label class="control-label">SGST</label>
                </div>
                <div class="form-group col-md-4">
                <input class="form-control" value="<?=isset($valcgst['sgst'])?$valcgst['sgst']:"";?>" type="text" name="sgst" placeholder="Enter SGST Value">
                </div>
                <div class="form-group col-md-1">
                  <label class="control-label">CGST</label>
                </div>
                <div class="form-group col-md-4">
                <input class="form-control" value="<?=isset($valcgst['cgst'])?$valcgst['cgst']:"";?>" type="text" name="cgst" placeholder="Enter CGST Value">
                </div>
                <div class="form-group col-md-2">
                <button class="btn btn-primary" type="submit" name="add_tax"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>&nbsp;&nbsp;&nbsp;
                </div>
                </div>
               </form>
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
if(isset($_POST['add_tax'])) {
  $sgst = $_POST['sgst'];
  $cgst = $_POST['cgst'];
  if($id=='') {
  $sqlins = "insert into tax(sgst,cgst) values('$sgst','$cgst')";
  }
  else{
    $sqlins = "update tax set sgst='$sgst',cgst='$cgst' where id=$id";
  }
  $exesql = mysqli_query($con,$sqlins);
  if($exesql) {
    echo "<script>window.location.href='view-tax.php'</script>";
  }
}


if(isset($_POST['add_igst'])) {
  $igst = $_POST['igst'];
  if($id=='') {
  $sqlins = "insert into tax(igst) values('$igst')";
  }
  else{
    $sqlins = "update tax set igst='$igst' where id=$id";
  }
  $exesql = mysqli_query($con,$sqlins);
  if($exesql) {
    echo "<script>window.location.href='view-tax.php'</script>";
  }
}
?>