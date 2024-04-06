<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
<style>
  .edit{
    width: 25px;
    height: 25px;
  }
  .delete{
    position: relative;
    top: -3px;
    left: -2px;
  }
</style>
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
    <title>Data Table - Jeyalakshmi Priya</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="externallink/bootstrap.min.css">
    
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
          <h1><i class="fa fa-th-list"></i> View Tax</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">View</li>
          <li class="breadcrumb-item active"><a href="#">Tax</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                  <tr>
                    <th>S. No</th>
                    <th>IGST</th>
                    <th>SGST</th>
                    <th>CGST</th>
                    <th>Action</th>
                   </tr>
                </thead>
                <tbody>
                    <?php
                  $sql = "select * from tax";
                  $exesql = mysqli_query($con,$sql);
                  $sno = 0;
                  while($valsql = mysqli_fetch_assoc($exesql)) {
                    $sno++;
                ?>
                  <tr>
                    <td><?=$sno?></td>
                    <td><?=$valsql['igst']?>&nbsp;%</td>
                    <td><?=$valsql['sgst']?>&nbsp;%</td>
                    <td><?=$valsql['cgst']?>&nbsp;%</td>
                    <td>
                      <div class="row col-md-12">
                      <div class="col-12 text-left">
                        <a class="btn btn-info btn-sm edit" href="add-tax.php?id=<?=$valsql['id']?>">
                          <i class="fa fa-pencil delete"></i></a>
                          <!-- <form method="post">
                         <input type="hidden" value="<?=isset($valsql['id']) ? $valsql['id'] : "";?>" name="deleteid" /> 
                         <button class="btn btn-danger btn-sm edit" type='submit' name='deleteTax' href="">
                          <i class="fa fa-trash delete"></i></button>
                          </form> -->
                        </div>
                       </div>
                    </td>
                  </tr>
           <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="externallink/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
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
if(isset($_POST['deleteTax'])) {
  $deletid=$_POST['deleteid'];
  $delsql = "delete from tax where id='$deletid'";
  $exedelsql = mysqli_query($con,$delsql);
  if($exedelsql) {
    echo "<script>window.location.href='view-tax.php'</script>";
  }
}
?>