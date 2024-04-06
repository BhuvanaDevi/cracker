<?php
include("connection.php");
$id = isset($_GET['id']) ? $_GET['id'] : "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  
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
        <h1><i class="fa fa-edit"></i> Add Invoice</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Add</li>
        <li class="breadcrumb-item"><a href="#">Invoice</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <form method="POST">
          <div class="tile">
            <div class="tile-body">
              <?php
              if ($id != '') {
                $sql = "select * from customerbill where id=$id";
                $exe_sql = mysqli_query($con, $sql);
                $val_sql = mysqli_fetch_assoc($exe_sql);
              }
              ?>
              <div class="row col-md-12">
                <div class="form-group col-md-3">
                  <label class="control-label">Consignee Name</label>
                  <input list="consignee" class="form-control" value="<?= isset($val_sql['consignee_name']) ? $val_sql['consignee_name'] : "" ?>" name="consignee_name" id="consignee_name" placeholder="Enter consignee name">
                  <datalist id="consignee">
                    <?php
                    $consigneesql = "select * from consignee";
                    $consigneeexesql = mysqli_query($con, $consigneesql);
                    while ($consigneesql = mysqli_fetch_assoc($consigneeexesql)) { ?>
                      <option value="<?= $consigneesql['name'] ?>" data-ids="<?= $consigneesql['id'] ?>"><?= $consigneesql['name'] ?></option>
                    <?php
                    }
                    ?>
                  </datalist>
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">State</label>
                  <input class="form-control" name="state" id="state" value="<?= isset($val_sql['state']) ? $val_sql['state'] : "" ?>" type="text" placeholder="Enter State">
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">GSTIN</label>
                  <input class="form-control" value="<?= isset($val_sql['gstin']) ? $val_sql['gstin'] : "" ?>" name="gstin" id="gstin" type="text" placeholder="Enter GSTIN">
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Consigness Address</label>
                  <textarea class="form-control" value="<?= isset($val_sql['consignee_address']) ? $val_sql['consignee_address'] : "" ?>" name="consignee_address" id="consignee_address" placeholder="Enter Consignee Address">
                  </textarea>
                </div>
              </div>
              <div class="row col-md-12">
                <div class="form-group col-md-2">
                  <label class="control-label">Plcaes</label>
                  <input class="form-control" value="<?= isset($val_sql['place']) ? $val_sql['place'] : "" ?>" name="place" id="place" type="text" placeholder="Enter place">
                </div>
                <div class="form-group col-md-2">
                  <?php
                  $sqlinvoice = "select * from customerbill order by id desc limit 1";
                  $exeinvoice = mysqli_query($con, $sqlinvoice);
                  $valinvoice = mysqli_fetch_assoc($exeinvoice);
                  $inv = 0;
                  if ($valinvoice != '') {
                    $inv += $valinvoice['id'];
                  } else {
                    $inv = 1;
                  }
                  ?>
                  <label class="control-label">Invoice No</label>
                  <input class="form-control" value="<?= isset($val_sql['invoice_no']) ? $val_sql['invoice_no'] : $inv ?>" type="text" name="invoice_no" id="invoice_no" placeholder="Invoice No">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label">Invoice Date</label>
                  <?php $date = date('d-m-Y'); ?>
                  <input class="form-control" value="<?= isset($val_sql['invoice_date']) ? $val_sql['invoice_date'] : $date ?>" type="date" name="invoice_date" id="invoice_date" placeholder="">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label">E-Way Bill</label>
                  <input class="form-control" value="<?= isset($val_sql['eway_bill']) ? $val_sql['eway_bill'] : "" ?>" type="text" name="eway_bill" id="eway_bill" placeholder="Enter E-way Bill">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label">HSN Code</label>
                  <input class="form-control" value="<?= isset($val_sql['hsn_code']) ? $val_sql['hsn_code'] : "" ?>" type="text" name="hsn_code" id="hsn_code" placeholder="Enter HSN Code">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label">Vehicle No</label>
                  <input class="form-control" value="<?= isset($val_sql['vehicle_no']) ? $val_sql['vehicle_no'] : "" ?>" type="text" name="vehicle_no" id="vehicle_no" placeholder="Enter Vehicle No">
                </div>
              </div>
              <div class="row col-md-12">
                <div class="form-group col-md-2">
                  <label class="control-label">Despatched From</label>
                  <input class="form-control" type="text" value="<?= isset($val_sql['despatched_from']) ? $val_sql['despatched_from'] : "" ?>" name="despatched_from" id="despatched_from" placeholder="Enter Despateched From">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label">Despatched To</label>
                  <input class="form-control" type="text" value="<?= isset($val_sql['despatched_to']) ? $val_sql['despatched_to'] : "" ?>" name="despatched_to" id="despatched_to" placeholder="Enter Despateched To">
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Transaport Name</label>
                  <input class="form-control" value="<?= isset($val_sql['transport_name']) ? $val_sql['transport_name'] : "" ?>" type="text" name="transport_name" id="transport_name" placeholder="Enter Transport Name">
                </div>
                <div class="form-group col-md-2">
                  <label class="control-label">Transaport GSTIN</label>
                  <input class="form-control" value="<?= isset($val_sql['transport_gstin']) ? $val_sql['transport_gstin'] : "" ?>" type="text" name="transport_gstin" id="transport_gstin" placeholder="Enter Transport GSTIN">
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">GST Type</label>
                  <select class="form-control" name="state_type" id="state_type">
                    <option value="" disabled selected>Select State</option>
                    <option value="Interstate">Interstate</option>
                    <option value="Intrastate">Intrastate</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="tile">
        <div class="tile-body">
        <div class="col-md-12 text-right">
              <button class="btn btn-success" id="addbill">Add</button>
            </div>
            <div id="dynamic_field">
          <div class="row form-group col-md-12">
            <div class="form-group col-md-2">
              <label class="control-label">Carton From - To</label>
              <input class="form-control" type="text" value="<?= isset($val_sql['carton_from_to']) ? $val_sql['carton_from_to'] : "" ?>" name="carton_from_to[]" id="carton_from_to" placeholder="Carton From - To">
            </div>
            <div class="form-group col-md-2">
              <label class="control-label">Cracker Name</label>
              <input list="cracker" class="form-control cracker_name" value="<?= isset($val_sql['cracker_name']) ? $val_sql['cracker_name'] : "" ?>" name="cracker_name[]" id="cracker_name" placeholder="Enter cracker name">
              <datalist id="cracker">
                <?php
                $crackersql = "select * from cracker";
                $crackerexesql = mysqli_query($con, $crackersql);
                while ($crackersql = mysqli_fetch_assoc($crackerexesql)) { ?>
                  <option value="<?= $crackersql['name'] ?>" data-idss="<?= $crackersql['id'] ?>"><?= $crackersql['name'] ?></option>
                <?php
                }
                ?>
              </datalist>
            </div>
            <div class="form-group col-md-1">
              <label class="control-label">Carton</label>
              <input class="form-control" type="text" name="carton[]" id="carton" value="<?= isset($val_sql['carton']) ? $val_sql['carton'] : "" ?>" placeholder="Carton">
            </div>
            <div class="form-group col-md-1">
              <label class="control-label">Carton&nbsp;Contents</label>
              <input class="form-control" type="text" name="carton_contents[]" id="carton_contents" value="<?= isset($val_sql['carton_contents']) ? $val_sql['carton_contents'] : "" ?>" placeholder="Contents">
            </div>
            <div class="form-group col-md-1">
              <label class="control-label">Qty</label>
              <input class="form-control" type="text" value="<?= isset($val_sql['qty']) ? $val_sql['qty'] : "" ?>" name="qty[]" id="qty" placeholder="Qty">
            </div>
            <div class="form-group col-md-1">
              <label class="control-label">Rate</label>
              <input class="form-control" type="text" name="rate[]" id="rate" value="<?= isset($val_sql['rate']) ? $val_sql['rate'] : "" ?>" placeholder="Rate">
            </div>
            <div class="form-group col-md-2">
              <label class="control-label">Per</label>
              <input list="pers" class="form-control" value="<?= isset($val_sql['per']) ? $val_sql['per'] : "" ?>" name="per[]" id="per" placeholder="Enter Per">
              <datalist id="pers">
                <option value="Unit">Unit</option>
                <option value="Pocket">Pocket</option>
                <option value="Piece">Piece</option>
              </datalist>
            </div>
            <div class="form-group col-md-2">
              <label class="control-label">Amount</label>
              <input class="form-control" type="text" name="amount[]" id="amount" value="<?= isset($val_sql['amount']) ? $val_sql['amount'] : "" ?>" placeholder="Amount">
            </div>
            </div>
          </div>
          <div class="row col-md-12">
            <div class="form-group col-md-2"></div>
            <div class="form-group col-md-3 text-right">
              <label class="control-label">Total&nbsp;Cartons</label>
            </div>
            <div class="form-group col-md-1">
              <input class="form-control" type="text" name="total_carton" id="total_carton" value="<?= isset($val_sql['total_carton']) ? $val_sql['total_carton'] : "" ?>" placeholder="Count">
            </div>
            <div class="form-group col-md-1">
            </div>
            <div class="form-group col-md-3 text-right">
              <label class="control-label">Good&nbsp;Value</label>
            </div>
            <div class="form-group col-md-2">
              <input class="form-control" type="text" name="good_value" id="good_value" value="<?= isset($val_sql['good_value']) ? $val_sql['good_value'] : "" ?>" placeholder="Taxable">
            </div>
          </div>
          <div class="row col-md-12">
            <div class="form-group col-md-7">
            </div>
            <div class="form-group col-md-2 text-right">
              <input class="form-control" type="text" name="discount" id="discount" value="<?= isset($val_sql['discount']) ? $val_sql['discount'] : "" ?>" placeholder="Discount">
            </div>
            <div class="form-group col-md-1 text-right">
              <label class="control-label">Less : DISC.</label>
            </div>
            <div class="form-group col-md-2">
              <input class="form-control" type="text" name="discount_amount" id="discount_amount" value="<?= isset($val_sql['discount_amount']) ? $val_sql['discount_amount'] : "" ?>" placeholder="Discount Amount">
            </div>
          </div>
          <div class="row col-md-12">
            <div class="form-group col-md-10 text-right">
              <label class="control-label">Taxable&nbsp;Value</label>
            </div>
            <div class="form-group col-md-2">
              <input class="form-control" type="text" name="taxable_value" id="taxable_value" value="<?= isset($val_sql['taxable_value']) ? $val_sql['taxable_value'] : "" ?>" placeholder="Taxable">
            </div>
          </div>
          <div class="row col-md-12">
            <div class="form-group col-md-7">
            </div>
            <div class="form-group col-md-2">
              <input class="form-control" type="text" name="igst" id="igst" value="<?= isset($val_sql['igst']) ? $val_sql['igst'] : "" ?>" placeholder="Igst">
            </div>
            <div class="form-group col-md-1 text-center">
              <label class="control-label">IGST</label>
            </div>
            <div class="form-group col-md-2">
              <input class="form-control" type="text" name="igst_amount" id="igst_amount" value="<?= isset($val_sql['igst_amount']) ? $val_sql['igst_amount'] : "" ?>" placeholder="Igst Amount">
            </div>
          </div>
          <div class="row col-md-12">
            <div class="form-group col-md-7">
            </div>
            <div class="form-group col-md-2">
              <input class="form-control" type="text" name="sgst" id="sgst" value="<?= isset($val_sql['sgst']) ? $val_sql['sgst'] : "" ?>" placeholder="Sgst">
            </div>
            <div class="form-group col-md-1 text-center">
              <label class="control-label">SGST</label>
            </div>
            <div class="form-group col-md-2">
              <input class="form-control" type="text" name="sgst_amount" id="sgst_amount" value="<?= isset($val_sql['sgst_amount']) ? $val_sql['sgst_amount'] : "" ?>" placeholder="Sgst Amount">
            </div>
          </div>
          <div class="row col-md-12">
            <div class="form-group col-md-7">
            </div>
            <div class="form-group col-md-2">
              <input class="form-control" type="text" name="cgst" id="cgst" value="<?= isset($val_sql['cgst']) ? $val_sql['cgst'] : "" ?>" placeholder="Cgst">
            </div>
            <div class="form-group col-md-1 text-center">
              <label class="control-label">CGST</label>
            </div>
            <div class="form-group col-md-2">
              <input class="form-control" type="text" name="cgst_amount" id="cgst_amount" value="<?= isset($val_sql['cgst_amount']) ? $val_sql['cgst_amount'] : "" ?>" placeholder="Cgst Amount">
            </div>
          </div>
          <div class="row col-md-12">
            <div class="form-group col-md-10 text-right">
              <label class="control-label">Round&nbsp;Off</label>
            </div>
            <div class="form-group col-md-2">
              <input class="form-control" type="text" name="round_off" id="round_off" value="<?= isset($val_sql['round_off']) ? $val_sql['round_off'] : "" ?>" placeholder="Round Off">
            </div>
          </div>
          <div class="row col-md-12">
            <div class="form-group col-md-10 text-right">
              <label class="control-label">Net&nbsp;Amount</label>
            </div>
            <div class="form-group col-md-2">
              <input class="form-control" type="text" value="<?= isset($val_sql['net_amount']) ? $val_sql['net_amount'] : "" ?>" name="net_amount" id="net_amount" placeholder="Net Amount">
            </div>
          </div>
          <div class="row form-group col-md-12">
            <div class="col-md-12 text-right">
              <button class="btn btn-primary" type="submit" name="add_bill"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>&nbsp;&nbsp;&nbsp;
            </div>
          </div>
        </div>
      </div>
      </form>
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
<?php
if (isset($_POST['add_bill'])) {
  $consignee_name = $_POST['consignee_name'];
  $state = $_POST['state'];
  $gstin = $_POST['gstin'];
  $consignee_address = $_POST['consignee_address'];
  $place = $_POST['place'];
  $invoice_no = $_POST['invoice_no'];
  $invoice_date = $_POST['invoice_date'];
  $eway_bill = $_POST['eway_bill'];
  $hsn_code = $_POST['hsn_code'];
  $vehicle_no = $_POST['vehicle_no'];
  $despatched_from = $_POST['despatched_from'];
  $despatched_to = $_POST['despatched_to'];
  $transport_name = $_POST['transport_name'];
  $transport_gstin = $_POST['transport_gstin'];
  $carton_from_to = $_POST['carton_from_to'];
  $cracker_name = $_POST['cracker_name'];
  $carton = $_POST['carton'];
  $carton_contents = $_POST['carton_contents'];
  $qty = $_POST['qty'];
  $rate = $_POST['rate'];
  $per = $_POST['per'];
  $amount = $_POST['amount'];
  $total_carton = $_POST['total_carton'];
  $good_value = $_POST['good_value'];
  $discount = $_POST['discount'];
  $discount_amount = $_POST['discount_amount'];
  $taxable_value = $_POST['taxable_value'];
  $igst = $_POST['igst'];
  $igst_amount = $_POST['igst_amount'];
  $cgst = $_POST['cgst'];
  $cgst_amount = $_POST['cgst_amount'];
  $sgst = $_POST['sgst'];
  $sgst_amount = $_POST['sgst_amount'];
  $round_off = $_POST['round_off'];
  $net_amount = $_POST['net_amount'];
  $state_type = $_POST['state_type'];
  if ($id == '') {
    $sqlins = "insert into customerbill(consignee_name,state,state_type,gstin,consignee_address,place,invoice_no,invoice_date,eway_bill,hsn_code,vehicle_no,despatched_from,despatched_to,transport_name,transport_gstin,carton_from_to,cracker_name,carton,carton_contents,qty,rate,per,amount,total_carton,good_value,discount,discount_amount,taxable_value,igst,igst_amount,cgst,cgst_amount,sgst,sgst_amount,round_off,net_amount) values('$consignee_name','$state','$state_type','$gstin','$consignee_address','$place','$invoice_no','$invoice_date','$eway_bill','$hsn_code','$vehicle_no','$despatched_from','$despatched_to','$transport_name','$transport_gstin','$carton_from_to','$cracker_name','$carton','$carton_contents','$qty','$rate','$per','$amount','$total_carton','$good_value','$discount','$discount_amount','$taxable_value','$igst','$igst_amount','$cgst','$cgst_amount','$sgst','$sgst_amount','$round_off','$net_amount')";
  } else {
    $sqlins = "update customerbill set consignee_name='$consignee_name',state='$state',state_type='$state_type',gstin='$gstin',consignee_address='$consignee_address',place='$place',invoice_no='$invoice_no',invoice_date='$invoice_date',eway_bill='$eway_bill',hsn_code='$hsn_code',vehicle_no='$vehicle_no',despatched_from='$despatched_from',despatched_to='$despatched_to',transport_name='$transport_name',transport_gstin='$transport_gstin',carton_from_to='$carton_from_to',cracker_name='$cracker_name',carton='$carton',carton_contents='$carton_contents',qty='$qty',rate='$rate',per='$per',amount='$amount',total_carton='$total_carton',good_value='$good_value',discount='$discount',discount_amount='$discount_amount',taxable_value='$taxable_value',igst='$igst',igst_amount='$igst_amount',cgst='$cgst',cgst_amount='$cgst_amount',sgst='$sgst',sgst_amount='$sgst_amount',round_off='$round_off',net_amount='$net_amount' where id=$id";
  }
  $exesql = mysqli_query($con, $sqlins);
  if ($exesql) {
    echo "<script>window.location.href='view-bill.php'</script>";
  }
}
?>
<?php
  $crackersql = "select * from cracker";
  $crackerexesql = mysqli_query($con, $crackersql);
?>
<script>
      var i = 0;
      $(".cracker_name").click(function() {
        console.log("clicked");
        var vals = this.value;
        var crackerid = $('#cracker [value="' + vals + '"]').data('idss');
        $.ajax({
          url: 'action.php?action=crackerdetails',
          type: 'POST',
          dataType: "JSON",
          data: {
            'action': "crackerdetails",
            'id': crackerid,
          },
          success: function(response) {
            if (response.msg == "Success") {
              $('#rate').val(response.data.rate);
              $('#per').val(response.data.per);
              $('#carton').val(response.data.casecontents);
            }
            if (response.msg == "Failure") {}
          }
        });
      });


     $('#addbill').click(function (e) {
      e.preventDefault();
    i++;
      input = '<div class="row form-group col-md-12"><div class="form-group col-md-2"><label class="control-label">Carton From - To</label><input class="form-control" type="text" name="carton_from_to[]" id="carton_from_to" placeholder="Carton From - To"></div><div class="form-group col-md-2"><label class="control-label">Cracker Name</label><input list="cracker" class="form-control cracker_name" name="cracker_name[]" id="cracker_name" data-id="cracker_name'+i+'" placeholder="Enter cracker name"><datalist id="cracker">';
      <?php while ($crackersql = mysqli_fetch_assoc($crackerexesql)) { ?>
                 input+='<option value="<?= $crackersql['name'] ?>" data-idss="<?= $crackersql['id'] ?>"></option>';
                <?php
                } ?>
               input+='</datalist> </div><div class="form-group col-md-1"> <label class="control-label">Carton</label><input class="form-control" type="text" name="carton[]" id="carton" placeholder="Carton"></div><div class="form-group col-md-1"><label class="control-label">Carton&nbsp;Contents</label><input class="form-control" type="text" name="carton_contents[]" id="carton_contents" placeholder="Contents"></div><div class="form-group col-md-1"><label class="control-label">Qty</label><input class="form-control" type="text" name="qty[]" id="qty" placeholder="Qty"></div><div class="form-group col-md-1"><label class="control-label">Rate</label><input class="form-control" type="text" name="rate[]" id="rate" placeholder="Rate"></div><div class="form-group col-md-2"><label class="control-label">Per</label><input list="pers" class="form-control" name="per" id="per[]" placeholder="Enter Per"><datalist id="pers"><option value="Unit">Unit</option><option value="Pocket">Pocket</option><option value="Piece">Piece</option></datalist></div><div class="form-group col-md-2"><label class="control-label">Amount</label><input class="form-control" type="text" name="amount[]" id="amount" placeholder="Amount"></div></div>';
               $("#dynamic_field").append(input);
              });
               </script>

<script type="text/javascript">
    $(document).ready(function() {
      $('#qty,#rate,#carton_contents,#discount').change(function() {
        var qty = $('#qty').val();
        var rate = $('#rate').val();
        var totalcarton = $('#carton_contents').val();
        var state_type = $('#state_type').val();
        var good_value = $('#good_value').val();

        $('#total_carton').val(totalcarton);

        if (qty != '') {
          var amount = totalcarton * qty * rate;
        } else {
          var amount = totalcarton * rate;
        }
        $('#amount').val(amount);
        $('#good_value').val(Math.round(amount));

        var dis = $('#discount').val();
        if (dis != '') {
          var discount = (amount * dis) / 100;
          $('#discount_amount').val(Math.round(discount));
          $('#taxable_value').val(Math.round(amount - discount));

          var state_type = $('#state_type').val();
          var taxable = $('#taxable_value').val();
          console.log(taxable);

          if (state_type == "Interstate") {
            $('#igst').val('');
            $('#igst_amount').val('');
            var sgst = $('#sgst').val();
            var cgst = $('#cgst').val();
            var calsgst = (sgst * taxable) / 100;
            var calcgst = (cgst * taxable) / 100;
            console.log(calsgst + " " + calcgst);
            $('#sgst_amount').val(calsgst);
            $('#cgst_amount').val(calcgst);

            var tax = parseFloat(calsgst) + parseFloat(calcgst);
            var netamount = parseFloat(taxable) + parseFloat(tax);

            var netfloor = Math.floor(tax);
            var netfix = tax.toFixed(2);

            $('#round_off').val((netfloor - netfix).toFixed(2));


            $('#net_amount').val(Math.round(netamount));
          } else if (state_type == "Intrastate") {
            $('#cgst').val('');
            $('#sgst').val('');
            $('#cgst_amount').val('');
            $('#sgst_amount').val('');
            var igst = $('#igst').val();

            var caligst = (igst * taxable) / 100;
            $('#igst_amount').val(caligst);
            var tax = parseFloat(caligst);
            var netamount = parseFloat(taxable) + parseFloat(tax);

            var netfloor = Math.floor(tax);
            var netfix = tax.toFixed(2);

            $('#round_off').val((netfloor - netfix).toFixed(2));


            $('#net_amount').val(Math.round(netamount));
          }

        }

      });
      $('#discount').keyup(function() {
        var discount = this.value;
        var amount = $('#good_value').val();
        var dis = (amount * discount) / 100;
        $('#discount_amount').val(Math.round(dis));
        $('#taxable_value').val(Math.round(amount - dis));
        var taxable = $('#taxable_value').val();
        console.log(taxable);

        if (state_type == "Interstate") {
          var sgst = $('#sgst').val();
          var cgst = $('#cgst').val();
          $('#igst').val('');
          $('#igst_amount').val('');
          var calsgst = (sgst * taxable) / 100;
          var calcgst = (cgst * taxable) / 100;
          $('#sgst_amount').val(calsgst);
          $('#cgst_amount').val(calcgst);
          var tax = parseFloat(calsgst) + parseFloat(calcgst);
          var netamount = parseFloat(taxable) + parseFloat(tax);

          var netfloor = Math.floor(tax);
          var netfix = tax.toFixed(2);

          $('#round_off').val((netfloor - netfix).toFixed(2));


          $('#net_amount').val(Math.round(netamount));
        } else if (state_type == "Intrastate") {
          $('#cgst').val('');
          $('#sgst').val('');
          $('#cgst_amount').val('');
          $('#sgst_amount').val('');
          var igst = $('#igst').val();

          var caligst = (igst * taxable) / 100;
          $('#igst_amount').val(caligst);
          var tax = caligst;
          var netamount = parseFloat(taxable) + parseFloat(tax);

          var netfloor = Math.floor(tax);
          var netfix = tax.toFixed(2);

          $('#round_off').val((netfloor - netfix).toFixed(2));


          $('#net_amount').val(Math.round(netamount));
        }
      });
      $('#consignee_name').change(function() {
        var vals = this.value;
        var consigneeid = $('#consignee [value="' + vals + '"]').data('ids');
        $.ajax({
          url: 'action.php?action=consigneedetails',
          type: 'POST',
          dataType: "JSON",
          data: {
            'action': "consigneedetails",
            'id': consigneeid,
          },
          success: function(response) {
            if (response.msg == "Success") {
              $('#gstin').val(response.data.gstin);
              $('#state').val(response.data.state);
              $('#place').val(response.data.place + " - " + response.data.gstin);
              $('#consignee_address').val(response.data.address1 + " " + response.data.address2);
            }
            if (response.msg == "Failure") {}
          }
        });
      });

      
      $('#state_type').change(function() {
        var vals = this.value;
        var good_value = $('#good_value').val();
        $.ajax({
          url: 'action.php?action=statetype',
          type: 'POST',
          dataType: "JSON",
          data: {
            'action': "statetype",
            'id': 1,
          },
          success: function(response) {
            if (response.msg == "Success") {
              var taxable = $('#taxable_value').val();
              console.log(taxable);
              if (vals == "Interstate") {
                $('#cgst').val(response.data.cgst);
                $('#sgst').val(response.data.sgst);
                $('#igst').val('');
                $('#igst_amount').val('');
                var sgst = $('#sgst').val();
                var cgst = $('#cgst').val();
                var calsgst = (sgst * taxable) / 100;
                var calcgst = (cgst * taxable) / 100;
                $('#sgst_amount').val(calsgst);
                $('#cgst_amount').val(calcgst);

                var tax = parseFloat(calsgst) + parseFloat(calcgst);

                var netamount = (parseFloat(taxable)) + parseFloat(tax);
                $('#net_amount').val(Math.round(netamount));
                var netfloor = Math.floor(tax);
                var netfix = tax.toFixed(2);

                $('#round_off').val((netfloor - netfix).toFixed(2));

              } else if (vals == "Intrastate") {
                $('#igst').val(response.data.igst);
                $('#cgst').val('');
                $('#sgst').val('');
                $('#cgst_amount').val('');
                $('#sgst_amount').val('');

                var igst = $('#igst').val();
                var caligst = (igst * taxable) / 100;
                $('#igst_amount').val(caligst);

                var tax = parseFloat(caligst);
                var netamount = (parseFloat(taxable)) + parseFloat(tax);
                $('#net_amount').val(Math.round(netamount));
                var netfloor = Math.floor(tax);
                var netfix = tax.toFixed(2);

                $('#round_off').val((netfloor - netfix).toFixed(2));
              }
            }
          }
        });
      });
    });
  </script>