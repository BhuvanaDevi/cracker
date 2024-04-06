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
          <h1><i class="fa fa-edit"></i> Add Cracker</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Add</li>
          <li class="breadcrumb-item"><a href="#">Cracker</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
          <?php 
          if($id!='') {
              $sql = "select * from cracker where id='$id'";
              $exesql = mysqli_query($con,$sql);
              $valsql = mysqli_fetch_assoc($exesql);
          }
          ?>
            <h3 class="tile-title">Crackers</h3>
            <div class="tile-body">
              <form method="POST">
          
                <div class="row col-md-12">
                <div class="form-group col-md-3">
                  <label class="control-label">Cracker Name</label>
                  <input class="form-control" name="cracker_name" value="<?=isset($valsql['name'])?$valsql['name']:""?>" type="text" placeholder="Enter cracker name">
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Rate</label>
                  <input class="form-control" name="rate" value="<?=isset($valsql['rate'])?$valsql['rate']:""?>" type="text" placeholder="Enter Rate">
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Per</label>
                  <input list="pers" class="form-control" value="<?= isset($valsql['per']) ? $valsql['per'] : "" ?>" name="per" id="per" placeholder="Enter Per">
                  <datalist id="pers">
                  <option value="Unit">Unit</option>
                <option value="Pocket">Pocket</option>
                <option value="Piece">Piece</option>
                </datalist>
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Case Contents</label>
                  <input list="casecontentss" class="form-control" value="<?= isset($valsql['casecontents']) ? $valsql['casecontents'] : "" ?>" name="casecontents" id="casecontents" placeholder="Enter casecontents">
                  <datalist id="casecontentss">
                <option value="Unit">Unit</option>
                <option value="Pocket">Pocket</option>
                <option value="Piece">Piece</option>
                </datalist>
                </div>
                <div class="row col-md-12  text-center">                
                <div class="form-group col-md-12">
                <button class="btn btn-primary" type="submit" name="add_cracker"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>&nbsp;&nbsp;&nbsp;
                     </div>
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
if(isset($_POST['add_cracker'])) {
  $cracker_name = $_POST['cracker_name'];
  $rate = $_POST['rate'];
  $per = $_POST['per'];
  $casecontents = $_POST['casecontents'];
  if($id=='') {
  $sqlins = "insert into cracker(name,rate,per,casecontents)
   values('$cracker_name','$rate','$per','$casecontents')";
  }
  else{
    $sqlins = "update cracker set name='$cracker_name',rate='$rate',per='$per',casecontents='$casecontents' where id=$id";
  }
  $exesql = mysqli_query($con,$sqlins);
  if($exesql) {
    echo "<script>window.location.href='view-cracker.php'</script>";
  }
}
?>