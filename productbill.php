<style>
  @media print {
    body {
      margin: 1px solid #000 !important;
    }
  }

  hr {
    border: 1px solid #000 !important;
  }

  body {
    font-size: 14px !important;
    font-weight: 900 !important;
    color: #000 !important;
  }

  p {
    margin-bottom: 7px !important;
    font-weight: 500 !important;
  }

  .table th,
  .table td {
    padding: 6.5px !important;
    color: #000 !important;
  }

  table td {
    color: #000 !important;
    border-top: none !important;
  }
</style>
<?php
include("connection.php");
$id = isset($_GET['id']) ? $_GET['id'] : "";
if ($id != '') {
  $sqlbill = "select * from customerbill where invoice_no=$id";
  $exebill = mysqli_query($con, $sqlbill);
  $valbill = mysqli_fetch_assoc($exebill);
  $no = mysqli_num_rows($exebill);

  $sqlbills = "select * from customerbill where invoice_no=$id";
  $exebills = mysqli_query($con, $sqlbills);
}
?>
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
  <title>Invoice - Jeyalakshmi Priya</title>
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
  <?php include('sidebar.php'); ?>
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-file-text-o"></i> Tax Invoice</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Invoice</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <section class="invoice">
            <div class="row mb-2">
              <div class="row col-12">
                <div class="col-3 text-center">
                  <img src="company.jpg" width="180" />
                  <strong>
                    <p style="font-size: 16px;"><b>GSTIN : 33AAHFJ5113G1ZR</b></p>
                  </strong>
                  <div>
                  </div>
                </div>
                <div class="col-6">
                  <h3 class="page-header text-center mt-1"> Tax Invoice</h3>
                  <h3 class="page-header text-center mt-1" style="font-family: ui-rounded !important;">
                    JEYALAKSHMI PRIYA</h3>
                  <h3 class="page-header text-center mt-1" style="font-family: ui-rounded !important;">
                    SPARKLERS FACTORY & FIREWORKS</h3>
                  <div class="col-12 text-center mt-1">
                    <strong>
                      261 / 2A / 3 - Karuppasamy Nagar. S.N. Puram Road <br />Thiruthangal, Sivakasi - 626130.
                      <br /> Factory at 453, 460/3B Anai Kuttam Village - 626130.
                    </strong>
                  </div>
                </div>
                <div class="col-3 text-center">
                  <img src="neer.jpg" width="180" />
                  <p style="font-size: 11px;font-weight:800 !important;"><b>LICENCE NO : E/Ho/TN/21/1151(E23679)<br />
                      LICENCE NO : E/Ho/TN/20/711(E23678)</b></p>
                </div>
              </div>
            </div>
            <div class="row col-md-12">
              <div class="col-6 mb-1 mt-2" style="border-left: 1px solid #000;margin-top: 0px !important;
    margin-bottom: 0px !important;
    padding: 10px !important;">
                <div style="border-top: 1px solid #000;position:relative;top:-10px;left:-10px;width:215% !important"></div>
                <h5>Consignee's Name and Address :</h5>
                <div class="ml-4 mb-1">
                  <h6 class="mb-1"><?= strtoupper(($valbill['consignee_name'])) ?></h6>
                  <p class="mb-1"><?= $valbill['consignee_address'] ?></p>
                  <p class="mb-1">Place : <?= $valbill['place'] ?></p>
                  <p class="mb-1">State : <?= $valbill['state'] ?></p>
                  <h6 class="mb-1">GSTIN : <?= $valbill['gstin'] ?></h6>
                </div>
              </div>
              <div class="col-5" style="border-left:1px solid #000">
                <div class="col-12 text-center  mt-5">
                  <h5>Invoice No : <?= $valbill['invoice_no'] ?></h5>
                  <h5>Date : <td><?= date('d-m-Y', strtotime($valbill['invoice_date'])) ?></td>
                  </h5>
                </div>
              </div>
              <div class="col-1" style="    border-right: 1px solid #000;
    position: relative;
    left: 30px;"></div>
            </div>
            <div class="row">
              <div class="col-12 table-responsive">
                <table class="table text-center" style="height:auto !important;border-bottom: 1px solid #000 !important;border-left:1px solid #000;border-right:1px solid #000">
                  <thead>
                    <tr>
                      <th rowspan="2" style="border-right:1px solid #000;border-top:1px solid #000 !important;">SI</th>
                      <th rowspan="2" style="border-right:1px solid #000;border-top:1px solid #000 !important;">Carton From - To</th>
                      <th rowspan="2" style="border-right:1px solid #000;border-top:1px solid #000 !important;">Product Name</th>
                      <th colspan="2" style="border-right:1px solid #000;border-top:1px solid #000 !important;" class="text-center">Package Details</th>
                      <th rowspan="2" style="border-right:1px solid #000;border-top:1px solid #000 !important;">Qty</th>
                      <th rowspan="2" style="border-right:1px solid #000;border-top:1px solid #000 !important;">RATE</th>
                      <th rowspan="2" style="border-right:1px solid #000;border-top:1px solid #000 !important;">PER</th>
                      <th rowspan="2" style="border-right:1px solid #000;border-top:1px solid #000 !important;">AMOUNT</th>
                    </tr>
                    <tr>
                      <th style="border-right:1px solid #000;border-top:1px solid #000 !important;">Carton</th>
                      <th style="border-right:1px solid #000;border-top:1px solid #000 !important;">Carton Contents</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $j = 0;
                   
                    while ($valbills = mysqli_fetch_assoc($exebills)) {
                      $j += 1;
                     ?>
                      <tr>
                        <td style="border-right: 1px solid #000;"><?= $j ?></td>
                        <td style="border-right: 1px solid #000;"><?= $valbills['carton_from_to'] ?></td>
                        <td style="border-right: 1px solid #000;"><?= $valbills['cracker_name'] ?></td>
                        <td style="border-right: 1px solid #000;"><?= $valbills['carton'] ?></td>
                        <td style="border-right: 1px solid #000;"><?= $valbills['carton_contents'] ?>s</td>
                        <td style="border-right: 1px solid #000;"><?= $valbills['qty'] ?>&nbsp;Units</td>
                        <td style="border-right: 1px solid #000;"><?= $valbills['rate'] ?></td>
                        <td style="border-right: 1px solid #000;"><?= $valbills['per'] ?></td>
                        <td style="border-right: 1px solid #000;"><?= $valbills['amount'] ?></td>
                      </tr>
                    <?php }
                    if ($no == 1) {
                    ?>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                    <?php } else if ($no == 2) { ?>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>

                    <?php } else if ($no == 3) { ?>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>

                    <?php } else if ($no == 4) { ?>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>

                    <?php } else if ($no == 5) { ?>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                    <?php } else if ($no == 6) { ?>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                    <?php }
                    if ($no == 7) { ?>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                    <?php } else if ($no == 8) { ?>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                    <?php } else if ($no == 9) { ?>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                    <?php } else if ($no == 10) { ?>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                    <?php } else if ($no == 11) { ?>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                    <?php } else if ($no == 12) { ?>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                    <?php } else if ($no == 13) { ?>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                    <?php } else if ($no == 14) { ?>
                      <tr>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                        <td style=" border-right: 1px solid #000;">&nbsp;</td>
                      </tr>
                    <?php }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row invoice-info" style="margin-top: -15px;">
              <div class="col-5" style="border-left: 1px solid #000;position: relative;left: 15px;">
                <table class="col-12 ml-5" style="border:none !important">
                  <tr>
                    <td width="30%">
                      <p class="mt-1"><b>HSN Code</b></p>
                    </td>
                    <td width="5%">
                      <p class="mt-1">:</p>
                    </td>
                    <td>
                      <p class="mt-1 text-left"><strong><?= $valbill['hsn_code'] ?></strong></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p>Total Cartons</p>
                    </td>
                    <td>
                      <p>:</p>
                    </td>
                    <td>
                      <p class="text-left"> <?= $valbill['total_carton'] ?></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p>Despatched From</p>
                    </td>
                    <td>
                      <p>:</p>
                    </td>
                    <td>
                      <p class="text-left"><?= $valbill['despatched_from'] ?></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p>Despatched To</p>
                    </td>
                    <td>
                      <p>:</p>
                    </td>
                    <td>
                      <p class="text-left"><?= $valbill['despatched_to'] ?></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p>Vehicle No</p>
                    </td>
                    <td>
                      <p>:</p>
                    </td>
                    <td>
                      <p class="text-left"><?= $valbill['vehicle_no'] ?></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p>Transport Name</p>
                    </td>
                    <td>
                      <p>:</p>
                    </td>
                    <td>
                      <p class="text-left"><?= $valbill['transport_name'] ?></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p>Transport GSTIN</p>
                    </td>
                    <td>
                      <p>:</p>
                    </td>
                    <td>
                      <p class="text-left"><?= $valbill['transport_gstin'] ?></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p>E-way Bill</p>
                    </td>
                    <td>
                      <p>:</p>
                    </td>
                    <td>
                      <p class="text-left"><?= $valbill['eway_bill'] ?></p>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="col-1 text-center" style="position:relative;left:-20px;border-right:1px solid #000">
              </div>
              <div class="col-3 text-right mt-1" style="position: relative;left:150px">
                <table style="border:none !important">
                  <tbody>
                    <tr>
                      <td>
                        <p> <b>GOODS VALUE</b></p>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-1">
                        <p><b>LESS DISC : <?= $valbill['discount'] ?>%</b></p>
                      </td>
                    </tr>
                    <tr>
                      <td class="pt-1">
                        <p><b>TAXABLE VALUE</b></p>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-3">
                        <p><b>IGST</b></p>
                      </td>
                      <td>:</td>
                      <td></td>
                      <td>
                        <p class="pt-2"><b><?= $valbill['igst'] ?>&nbsp;%</b></p>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-3">
                        <p><b>SGST</b></p>
                      </td>
                      <td>:</td>
                      <td></td>
                      <td>
                        <p class="pt-2"><b><?= $valbill['sgst'] ?>&nbsp;%</b></p>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-3">
                        <p><b>CGST</b></p>
                      </td>
                      <td>:</td>
                      <td></td>
                      <td>
                        <p class="pt-2"><b><?= $valbill['cgst'] ?>&nbsp;%</b></p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p><b>ROUND OFF</b></p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p><b>NET AMOUNT</b></p>
                      </td>
                    </tr>
                </table>
              </div>
              <div class="col-1" style="position:relative;left:100px;border-left:1px solid #000">
              </div>
              <div class="col-1 text-left" style="position: relative;left:50px;">
                <table style="border:none !important">
                  <tr>
                    <td>
                      <p class="mt-1"><b><?= $valbill['good_value'] ?></b></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p><b><?= $valbill['discount_amount'] ?></b></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="pt-1"><b><?= $valbill['taxable_value'] ?></b></p>
                    </td>
                  </tr>
                  <tr>
                    <?php
                    $tax = 0;
                    ?>
                    <?php if ($valbill['igst_amount'] != '') {
                    ?>
                      <td>
                        <p class="pt-2"><b><?= $valbill['igst_amount'] ?></b></p>
                      </td>
                    <?php } else { ?>
                      <td>
                        <p class="pt-2">-</p>
                      </td>
                    <?php } ?>
                  </tr>
                  <tr> <?php if ($valbill['sgst_amount'] != '') { ?>
                      <td>
                        <p class="pt-2"><b><?= $valbill['sgst_amount'] ?></b></p>
                      </td>
                    <?php } else { ?>
                      <td>
                        <p class="pt-2">-</p>
                      </td>
                    <?php } ?>
                  </tr>
                  <tr>
                    <?php if ($valbill['cgst_amount'] != '') {
                    ?>
                      <td>
                        <p class="pt-2"><b><?= $valbill['cgst_amount'] ?></b></p>
                      </td>
                    <?php } else { ?>
                      <td>
                        <p class="pt-2">-</p>
                      </td>
                    <?php }
                    ?>
                  </tr>
                  <tr>
                    <td>
                      <p class="pt-1"><b><?= $valbill['round_off'] ?></b></p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="pt-0"><b><?= $valbill['net_amount'] ?></b></p>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="col-1" style="position:relative;left:-15px;border-right:1px solid #000">
              </div>
            </div>

            <div class="row col-xs-12" style="width: 100% !important;
    position: relative !important;
    left: 15px !important;">
              <div class="col-md-12 text-center" style="border:1px solid #000 !important;">
                <?php
                $number = $valbill['net_amount'];
                $no = floor($number);
                $point = round($number - $no, 2) * 100;
                $hundred = null;
                $digits_1 = strlen($no);
                $i = 0;
                $str = array();
                $words = array(
                  '0' => '', '1' => 'one', '2' => 'two',
                  '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
                  '7' => 'seven', '8' => 'eight', '9' => 'nine',
                  '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
                  '13' => 'thirteen', '14' => 'fourteen',
                  '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
                  '18' => 'eighteen', '19' => 'nineteen', '20' => 'twenty',
                  '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
                  '60' => 'sixty', '70' => 'seventy',
                  '80' => 'eighty', '90' => 'ninety'
                );
                $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
                while ($i < $digits_1) {
                  $divider = ($i == 2) ? 10 : 100;
                  $number = floor($no % $divider);
                  $no = floor($no / $divider);
                  $i += ($divider == 10) ? 1 : 2;
                  if ($number) {
                    $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
                    $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
                    $str[] = ($number < 21) ? $words[$number] .
                      " " . $digits[$counter] . $plural . " " . $hundred
                      :
                      $words[floor($number / 10) * 10]
                      . " " . $words[$number % 10] . " "
                      . $digits[$counter] . $plural . " " . $hundred;
                  } else $str[] = null;
                }
                $str = array_reverse($str);
                $result = implode('', $str);
                $points = ($point) ?
                  "." . $words[$point / 10] . " " .
                  $words[$point = $point % 10] : '';
                echo '<h6 class="mt-2"><tr><strong><i>Total Amount In Words : <i>' . ucfirst($result) . "Rupees </i>" . "</i></strong></h6>";
                ?>
              </div>
            </div>
            <div class="row col-12">
              <div class="col-9" style="border-left:1px solid #000;">
                <h6 class="mt-1">Declaration :</h6>
                <h6 class="pl-4">We declare that this invoice shows the actual price of the goods and that all
                  particulars are true and collect.
                </h6>
                <p><i>Company Bank Details</i></p>
                <table class="table table-bordered">
                  <tr>
                    <td>
                      <p style="font-weight: 600 !important;font-size:13.5px !important">Account Name : Jeyalakshmi Priya Sparklers Factory</p>
                      <p style="font-weight: 600 !important;font-size:13.5px !important">Bank Name : Punjab National Bank</p>
                      <p style="font-weight: 600 !important;font-size:13.5px !important">Account Number : 4199002100015343</p>
                      <p style="font-weight: 600 !important;font-size:13.5px !important">IFSC Code : PUNB0419900</p>
                    </td>
                    <td>
                      <p style="font-weight: 600 !important;font-size:13.5px !important">Account Name : Jeyalakshmi Priya Sparklers Factory</p>
                      <p style="font-weight: 600 !important;font-size:13.5px !important">Bank Name : Tamilnadu Mercantile Bank</p>
                      <p style="font-weight: 600 !important;font-size:13.5px !important">Account Number : 003700050900353</p>
                      <p style="font-weight: 600 !important;font-size:13.5px !important">IFSC Code : TMBL0000003</p>
                    </td>
                  </tr>
                </table>
                <div style="border-bottom:1px solid #000;position: relative;
    left: -15px;
    width: 143%;
    top: 15px;"></div>
              </div>
              <div class="col-3" style="border-left:1px solid #000 !important;border-right:1px solid #000 !important;position:relative;left:30px">
                <p class="mt-1"><i>For Jeyalakshmi Priya Sparklers Factory & Fireworks</i></p>
                <h6><br /><br /><br /><br /><br /><br /><br /><br /></h6>
                <h6 class="text-right"><i>Manager / Partner</i></h6>
              </div>
            </div>
            <div class="row d-print-none mt-4">
              <div class="col-12 text-right"><a class="btn btn-primary" href="javascript:window.print();"><i class="fa fa-print"></i> Print</a></div>
            </div>
          </section>
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
    if (document.location.hostname == 'pratikborsadiya.in') {
      (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-72504830-1', 'auto');
      ga('send', 'pageview');
    }
  </script>
</body>

</html>