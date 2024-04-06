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
  .delete-map{
    position: relative;
    top: -6px;
    left: -4px;
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
          <h1><i class="fa fa-th-list"></i> View Bill</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">View</li>
          <li class="breadcrumb-item active"><a href="#">Bill</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row col-md-12  p-0 m-0">
                <div class="col-md-12 text-right">
                <a href="add-bills.php" class="btn btn-info mb-2">Add Bill</a>
                </div>
              </div>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>S. No</th>
                    <th>Carton <br/> From - To</th>
                    <th>Invoice No</th>
                    <th>Invoice Date</th>
                    <th>Consignee Name</th>
                    <th>Total Cartons</th>
                    <th>Transporter Name</th>
                    <th>Despateched <br/> From - To</th>
                    <th>Net Amount</th>
                  <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $sql = "select * from customerbill group by invoice_no";
                  $exe_sql = mysqli_query($con,$sql);
                  $sno = 0;
                  while($val_sql = mysqli_fetch_assoc($exe_sql)) {
                    $sno++;
                  ?>
                  <tr>
                    <td><?=$sno?></td>
                    <td><?=$val_sql['carton_from_to']?></td>
                    <td><?=$val_sql['invoice_no']?></td>
                    <td><?=date('d-m-Y',strtotime($val_sql['invoice_date']))?></td>
                    <td><?=$val_sql['consignee_name']?>
                    <a class="btn btn-primary edit" data-toggle="tooltip" data-placement="top" title="<?=$val_sql['consignee_address'].", ".$val_sql['state']." - ".$val_sql['gstin']?>">
 <i class="fa fa-map-marker delete-map text-white"></i>
</a>
                    </td>
                    <td><?=$val_sql['total_carton']?></td>
                    <td><?=$val_sql['transport_name']?></td>
                    <td><?=$val_sql['despatched_from']." - ".$val_sql['despatched_to']?></td>
                    <td><?=$val_sql['net_amount']?></td>
                    <td>
                      <div class="row col-md-12">
                        <div class="col-md-3">
                          <a class="btn btn-info btn-sm edit" href="add-bill.php?id=<?=isset($val_sql['id'])?$val_sql['id']:""?>">
                          <i class="fa fa-pencil delete"></i></a>
                        </div>
                        <div class="col-md-3">
                          <a class="btn btn-info btn-sm edit" target="_blank" href="productbill.php?id=<?=isset($val_sql['invoice_no'])?$val_sql['invoice_no']:""?>">
                          <i class="fa fa-file delete"></i></a>
                          </div>
                          <div class="col-md-3">
                        <form method="post">
                         <input type="hidden" value="<?=isset($val_sql['invoice_no']) ? $val_sql['invoice_no'] : "";?>" name="deleteid" /> 
                         <button class="btn btn-danger btn-sm edit" type='submit' name='deleteBill' href="">
                          <i class="fa fa-trash delete"></i></button>
                          </form>
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
if(isset($_POST['deleteBill'])) {
  $deletid=$_POST['deleteid'];
  $delsql = "delete from customerbill where invoice_no='$deletid'";
  $exedelsql = mysqli_query($con,$delsql);
  if($exedelsql) {
    echo "<script>window.location.href='view-bill.php'</script>";
  }
}
?>