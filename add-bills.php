<?php
include("connection.php");
$id = isset($_GET['id']) ? $_GET['id'] : "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    .panel-heading {
      padding: 24px 15px !important;
    }

    select.form-control:not([size]):not([multiple]) {
      height: calc(2.0625rem + 12px) !important;
    }
  </style>
  <script src="externallink/jqueryv.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#qty,#rate,#discount,#qty1,#rate1,#qty2,#rate2,#qty3,#rate3,#qty4,#rate4,#qty5,#rate5,#qty6,#rate6,#qty7,#rate7,#qty8,#rate8,#qty9,#rate9').change(function() {
        var qty = $('#qty').val();
        var rate = $('#rate').val();

        var amt = qty * rate;
        $('#amount').val(amt);

        if (isNaN(qty1)) {
          qty1 = 0;
        }

        var qty1 = $('#qty1').val();
        var rate1 = $('#rate1').val();

        var amt1 = qty1 * rate1;
        $('#amount1').val(amt1);

        if (isNaN(qty2)) {
          qty2 = 0;
        }

        var qty2 = $('#qty2').val();
        var rate2 = $('#rate2').val();

        var amt2 = qty2 * rate2;
        $('#amount2').val(amt2);

        if (isNaN(qty3)) {
          qty3 = 0;
        }

        var qty3 = $('#qty3').val();
        var rate3 = $('#rate3').val();

        var amt3 = qty3 * rate3;
        $('#amount3').val(amt3);

        if (isNaN(qty4)) {
          qty4 = 0;
        }

        var qty4 = $('#qty4').val();
        var rate4 = $('#rate4').val();

        var amt4 = qty4 * rate4;
        $('#amount4').val(amt4);

        if (isNaN(qty5)) {
          qty5 = 0;
        }

        var qty5 = $('#qty5').val();
        var rate5 = $('#rate5').val();

        var amt5 = qty5 * rate5;
        $('#amount5').val(amt5);

        if (isNaN(qty6)) {
          qty6 = 0;
        }

        var qty6 = $('#qty6').val();
        var rate6 = $('#rate6').val();

        var amt6 = qty6 * rate6;
        $('#amount6').val(amt6);

        if (isNaN(qty7)) {
          qty7 = 0;
        }

        var qty7 = $('#qty7').val();
        var rate7 = $('#rate7').val();

        var amt7 = qty7 * rate7;
        $('#amount7').val(amt7);

        if (isNaN(qty8)) {
          qty8 = 0;
        }

        var qty8 = $('#qty8').val();
        var rate8 = $('#rate8').val();

        var amt8 = qty8 * rate8;
        $('#amount8').val(amt8);

        if (isNaN(qty9)) {
          qty9 = 0;
        }

        var qty9 = $('#qty9').val();
        var rate9 = $('#rate9').val();

        var amt9 = qty9 * rate9;
        $('#amount9').val(amt9);

        if (isNaN(amt)) {
          amt = 0;
        }
        if (isNaN(amt1)) {
          amt1 = 0;
        }
        if (isNaN(amt2)) {
          amt2 = 0;
        }
        if (isNaN(amt3)) {
          amt3 = 0;
        }
        if (isNaN(amt4)) {
          amt4 = 0;
        }
        if (isNaN(amt5)) {
          amt5 = 0;
        }
        if (isNaN(amt6)) {
          amt6 = 0;
        }
        if (isNaN(amt7)) {
          amt7 = 0;
        }
        if (isNaN(amt8)) {
          amt8 = 0;
        }
        if (isNaN(amt9)) {
          amt9 = 0;
        }

        var goodvalue = amt + amt1 + amt2 + amt3 + amt4 + amt5 + amt6 + amt7 + amt8 + amt9;
        $('#good_value').val(goodvalue);

        var dis = $('#discount').val();
        if (dis != '') {
          var discount = (good_value * dis) / 100;
          $('#discount_amount').val(Math.round(discount));
          var taxable = Math.round(goodvalue - discount);
          $('#taxable_value').val(taxable);

          var state_type = $('#state_type').val();

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

            var caligst = (parseFloat(igst) * taxable) / 100;
            console.log(caligst);
            $('#igst_amount').val(caligst);
            var tax = parseFloat(caligst);
            var netamount = parseFloat(taxable) + parseFloat(tax);
            console.log(netamount);

            var netfloor = Math.floor(tax);
            var netfix = tax.toFixed(2);

            $('#round_off').val((netfloor - netfix).toFixed(2));


            $('#net_amount').val(Math.round(netamount));
          }

        }

      });
      $('#discount').change(function() {
        var discount = this.value;
        var amount = $('#good_value').val();
        var dis = (amount * discount) / 100;
        $('#discount_amount').val(Math.round(dis));
       
        var taxable = Math.round(amount - dis);
          $('#taxable_value').val(taxable);

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
              $('#place').val(response.data.place);
              $('#consignee_address').val(response.data.address1 + " " + response.data.address2);
            }
            if (response.msg == "Failure") {}
          }
        });
      });


      $('#carton,#carton_contents,#carton1,#carton_contents1,#carton2,#carton_contents2,#carton3,#carton_contents3,#carton4,#carton_contents4,#carton5,#carton_contents5,#carton6,#carton_contents6,#carton7,#carton_contents7,#carton8,#carton_contents8,#carton9,#carton_contents9').change(function() {
        var carton = $('#carton').val();
        var carton_content = $('#carton_contents').val();
        cartoncontent = '"' + carton_content + '"';
        cartoncontents = cartoncontent.split(" ");
        contentss = cartoncontents[0].replace('"', "");

        var qty = parseInt(carton) * parseInt(contentss);
        $('#qty').val(qty);

        var rate = $('#rate').val();
        var amt = qty * rate;
        $('#amount').val(amt);

        var carton1 = $('#carton1').val();
        var carton_content1 = $('#carton_contents1').val();
        cartoncontent1 = '"' + carton_content1 + '"';
        cartoncontents1 = cartoncontent1.split(" ");
        contentss1 = cartoncontents1[0].replace('"', "");

        var qty1 = parseInt(carton1) * parseInt(contentss1);
        $('#qty1').val(qty1);

        var rate1 = $('#rate1').val();
        var amt1 = qty1 * rate1;
        $('#amount1').val(amt1);

        var carton2 = $('#carton2').val();
        var carton_content2 = $('#carton_contents2').val();
        cartoncontent2 = '"' + carton_content2 + '"';
        cartoncontents2 = cartoncontent2.split(" ");
        contentss2 = cartoncontents2[0].replace('"', "");

        var qty2 = parseInt(carton2) * parseInt(contentss2);

        $('#qty2').val(qty2);
        var rate2 = $('#rate2').val();
        var amt2 = qty2 * rate2;
        $('#amount2').val(amt2);

        var carton3 = $('#carton3').val();
        var carton_content3 = $('#carton_contents3').val();
        cartoncontent3 = '"' + carton_content3 + '"';
        cartoncontents3 = cartoncontent3.split(" ");
        contentss3 = cartoncontents3[0].replace('"', "");

        var qty3 = parseInt(carton3) * parseInt(contentss3);

        $('#qty3').val(qty3);
        var rate3 = $('#rate3').val();
        var amt3 = qty3 * rate3;
        $('#amount3').val(amt3);

        var carton4 = $('#carton4').val();
        var carton_content4 = $('#carton_contents4').val();
        cartoncontent4 = '"' + carton_content4 + '"';
        cartoncontents4 = cartoncontent4.split(" ");
        contentss4 = cartoncontents4[0].replace('"', "");

        var qty4 = parseInt(carton4) * parseInt(contentss4);

        $('#qty4').val(qty4);
        var rate4 = $('#rate4').val();
        var amt4 = qty4 * rate4;
        $('#amount4').val(amt4);

        var carton5 = $('#carton5').val();
        var carton_content5 = $('#carton_contents5').val();
        cartoncontent5 = '"' + carton_content5 + '"';
        cartoncontents5 = cartoncontent5.split(" ");
        contentss5 = cartoncontents5[0].replace('"', "");

        var qty5 = parseInt(carton5) * parseInt(contentss5);

        $('#qty5').val(qty5);
        var rate5 = $('#rate5').val();
        var amt5 = qty5 * rate5;
        $('#amount5').val(amt5);

        var carton6 = $('#carton6').val();
        var carton_content6 = $('#carton_contents6').val();
        cartoncontent6 = '"' + carton_content6 + '"';
        cartoncontents6 = cartoncontent6.split(" ");
        contentss6 = cartoncontents6[0].replace('"', "");

        var qty6 = parseInt(carton6) * parseInt(contentss6);

        $('#qty6').val(qty6);
        var rate6 = $('#rate6').val();
        var amt6 = qty6 * rate6;
        $('#amount6').val(amt6);

        var carton7 = $('#carton7').val();
        var carton_content7 = $('#carton_contents7').val();
        cartoncontent7 = '"' + carton_content7 + '"';
        cartoncontents7 = cartoncontent7.split(" ");
        contentss7 = cartoncontents7[0].replace('"', "");

        var qty7 = parseInt(carton7) * parseInt(contentss7);

        $('#qty7').val(qty7);
        var rate7 = $('#rate7').val();
        var amt7 = qty7 * rate7;
        $('#amount7').val(amt7);

        var carton8 = $('#carton8').val();
        var carton_content8 = $('#carton_contents8').val();
        cartoncontent8 = '"' + carton_content8 + '"';
        cartoncontents8 = cartoncontent8.split(" ");
        contentss8 = cartoncontents8[0].replace('"', "");

        var qty8 = parseInt(carton8) * parseInt(contentss8);

        $('#qty8').val(qty8);
        var rate8 = $('#rate8').val();
        var amt8 = qty8 * rate8;
        $('#amount8').val(amt8);

        var carton9 = $('#carton9').val();
        var carton_content9 = $('#carton_contents9').val();
        cartoncontent9 = '"' + carton_content9 + '"';
        cartoncontents9 = cartoncontent9.split(" ");
        contentss9 = cartoncontents9[0].replace('"', "");

        var qty9 = parseInt(carton9) * parseInt(contentss9);

        $('#qty9').val(qty9);
        var rate9 = $('#rate9').val();
        var amt9 = qty9 * rate9;
        $('#amount9').val(amt9);

        if (isNaN(contentss)) {
          contentss = 0;
        }
        if (isNaN(contentss1)) {
          contentss1 = 0;
        }
        if (isNaN(contentss2)) {
          contentss2 = 0;
        }
        if (isNaN(contentss3)) {
          contentss3 = 0;
        }
        if (isNaN(contentss4)) {
          contentss4 = 0;
        }
        if (isNaN(contentss5)) {
          contentss5 = 0;
        }
        if (isNaN(contentss6)) {
          contentss6 = 0;
        }
        if (isNaN(contentss7)) {
          contentss7 = 0;
        }
        if (isNaN(contentss8)) {
          contentss8 = 0;
        }
        if (isNaN(contentss9)) {
          contentss9 = 0;
        }

        $('#total_carton').val(parseInt(contentss) + parseInt(contentss1) + parseInt(contentss2) + parseInt(contentss3) + parseInt(contentss4) + parseInt(contentss5) + parseInt(contentss6) + parseInt(contentss7) + parseInt(contentss8) + parseInt(contentss9));

        if (isNaN(amt)) {
          amt = 0;
        }
        if (isNaN(amt1)) {
          amt1 = 0;
        }
        if (isNaN(amt2)) {
          amt2 = 0;
        }
        if (isNaN(amt3)) {
          amt3 = 0;
        }
        if (isNaN(amt4)) {
          amt4 = 0;
        }
        if (isNaN(amt5)) {
          amt5 = 0;
        }
        if (isNaN(amt6)) {
          amt6 = 0;
        }
        if (isNaN(amt7)) {
          amt7 = 0;
        }
        if (isNaN(amt8)) {
          amt8 = 0;
        }
        if (isNaN(amt9)) {
          amt9 = 0;
        }

        var good_Value = amt + amt1 + amt2 + amt3 + amt4 + amt5 + amt6 + amt7 + amt8 + amt9;
        $('#good_value').val(good_Value);

      });
      $('#cracker_name').change(function() {
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
              $('#carton_contents').val(response.data.casecontents);
              $('#per').val(response.data.per);
            }
            if (response.msg == "Failure") {}
          }
        });
      });

      $('#cracker_name1').change(function() {
        var vals = this.value;
        var crackerid = $('#cracker1 [value="' + vals + '"]').data('idss');
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
              $('#rate1').val(response.data.rate);
              $('#carton_contents1').val(response.data.casecontents);
              $('#per1').val(response.data.per);
            }
            if (response.msg == "Failure") {}
          }
        });
      });

      $('#cracker_name2').change(function() {
        var vals = this.value;
        var crackerid = $('#cracker2 [value="' + vals + '"]').data('idss');
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
              $('#rate2').val(response.data.rate);
              $('#carton_contents2').val(response.data.casecontents);
              $('#per2').val(response.data.per);
            }
            if (response.msg == "Failure") {}
          }
        });
      });

      $('#cracker_name3').change(function() {
        var vals = this.value;
        var crackerid = $('#cracker3 [value="' + vals + '"]').data('idss');
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
              $('#rate3').val(response.data.rate);
              $('#carton_contents3').val(response.data.casecontents);
              $('#per3').val(response.data.per);
            }
            if (response.msg == "Failure") {}
          }
        });
      });

      $('#cracker_name4').change(function() {
        var vals = this.value;
        var crackerid = $('#cracker4 [value="' + vals + '"]').data('idss');
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
              $('#rate4').val(response.data.rate);
              $('#carton_contents4').val(response.data.casecontents);
              $('#per4').val(response.data.per);
            }
            if (response.msg == "Failure") {}
          }
        });
      });

      $('#cracker_name5').change(function() {
        var vals = this.value;
        var crackerid = $('#cracker5 [value="' + vals + '"]').data('idss');
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
              $('#rate5').val(response.data.rate);
              $('#carton_contents5').val(response.data.casecontents);
              $('#per5').val(response.data.per);
            }
            if (response.msg == "Failure") {}
          }
        });
      });

      $('#cracker_name6').change(function() {
        var vals = this.value;
        var crackerid = $('#cracker6 [value="' + vals + '"]').data('idss');
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
              $('#rate6').val(response.data.rate);
              $('#carton_contents6').val(response.data.casecontents);
              $('#per6').val(response.data.per);
            }
            if (response.msg == "Failure") {}
          }
        });
      });

      $('#cracker_name7').change(function() {
        var vals = this.value;
        var crackerid = $('#cracker7 [value="' + vals + '"]').data('idss');
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
              $('#rate7').val(response.data.rate);
              $('#carton_contents7').val(response.data.casecontents);
              $('#per7').val(response.data.per);
            }
            if (response.msg == "Failure") {}
          }
        });
      });

      $('#cracker_name8').change(function() {
        var vals = this.value;
        var crackerid = $('#cracker8 [value="' + vals + '"]').data('idss');
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
              $('#rate8').val(response.data.rate);
              $('#carton_contents8').val(response.data.casecontents);
              $('#per8').val(response.data.per);
            }
            if (response.msg == "Failure") {}
          }
        });
      });

      $('#cracker_name9').change(function() {
        var vals = this.value;
        var crackerid = $('#cracker9 [value="' + vals + '"]').data('idss');
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
              $('#rate9').val(response.data.rate);
              $('#carton_contents9').val(response.data.casecontents);
              $('#per9').val(response.data.per);
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
  <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <!-- Twitter meta-->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:site" content="@pratikborsadiya">
  <meta property="twitter:creator" content="@pratikborsadiya">
  <!-- Open Graph Meta-->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="i Priya">
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
  <link rel="stylesheet" type="text/css" href="externallink/bootstrap.min.css">
  <script src="externallink/bootstrap.min.js"></script>
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
    <form method="POST">
      <div class="row">
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
                if ($valinvoice != '') {
                  $inv = $valinvoice['invoice_no'] + 1;
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
                <input class="form-control" value="<?= isset($val_sql['hsn_code']) ? $val_sql['hsn_code'] : "3604" ?>" type="text" name="hsn_code" id="hsn_code" placeholder="Enter HSN Code">
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

        <div class="tile">
          <div class="tile-body">
            <div class="panel-group" id="accordion">

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title text-right">
                    <a class="btn btn-success" style="color:#fff !important" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Add Items</a>
                  </h4>
                  <div class="row col-md-12">
                    <div class="form-group col-md-2">
                      <label class="control-label">Carton From - To</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label class="control-label">Consignee Name</label>
                    </div>
                    <div class="form-group col-md-1">
                      <label class="control-label">Carton</label>
                    </div>
                    <div class="form-group col-md-1">
                      <label class="control-label">Carton&nbsp;Contents</label>
                    </div>
                    <div class="form-group col-md-1">
                      <label class="control-label">Qty</label>
                    </div>
                    <div class="form-group col-md-1">
                      <label class="control-label">Rate</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label class="control-label">Per</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label class="control-label">Amount</label>
                    </div>
                  </div>

                </div>
                <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="row form-group col-md-12">
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" value="<?= isset($val_sql['carton_from_to']) ? $val_sql['carton_from_to'] : "" ?>" name="carton_from_to" id="carton_from_to" placeholder="Carton From - To">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="cracker" class="form-control" value="<?= isset($val_sql['cracker_name']) ? $val_sql['cracker_name'] : "" ?>" name="cracker_name" id="cracker_name" placeholder="Enter cracker name">
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
                        <input class="form-control" type="text" name="carton" id="carton" value="<?= isset($val_sql['carton']) ? $val_sql['carton'] : "" ?>" placeholder="Carton">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="carton_contents" id="carton_contents" value="<?= isset($val_sql['carton_contents']) ? $val_sql['carton_contents'] : "" ?>" placeholder="Contents">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" value="<?= isset($val_sql['qty']) ? $val_sql['qty'] : "" ?>" name="qty" id="qty" placeholder="Qty">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="rate" id="rate" value="<?= isset($val_sql['rate']) ? $val_sql['rate'] : "" ?>" placeholder="Rate">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="pers" class="form-control" value="<?= isset($val_sql['per']) ? $pe[1] : "" ?>" name="per" id="per" placeholder="Enter Per">
                        <datalist id="pers">
                          <option value="Unit">Unit</option>
                          <option value="Pocket">Pocket</option>
                          <option value="Piece">Piece</option>
                        </datalist>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="amount" id="amount" value="<?= isset($val_sql['amount']) ? $val_sql['amount'] : "" ?>" placeholder="Amount">
                      </div>
                    </div>

                    <div class="row form-group col-md-12">
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" value="<?= isset($val_sql['carton_from_to']) ? $val_sql['carton_from_to'] : "" ?>" name="carton_from_to1" id="carton_from_to1" placeholder="Carton From - To">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="cracker1" class="form-control" value="<?= isset($val_sql['cracker_name']) ? $val_sql['cracker_name'] : "" ?>" name="cracker_name1" id="cracker_name1" placeholder="Enter cracker name">
                        <datalist id="cracker1">
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
                        <input class="form-control" type="text" name="carton1" id="carton1" value="<?= isset($val_sql['carton']) ? $val_sql['carton'] : "" ?>" placeholder="Carton">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="carton_contents1" id="carton_contents1" value="<?= isset($val_sql['carton_contents']) ? $val_sql['carton_contents'] : "" ?>" placeholder="Contents">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" value="<?= isset($val_sql['qty']) ? $val_sql['qty'] : "" ?>" name="qty1" id="qty1" placeholder="Qty">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="rate1" id="rate1" value="<?= isset($val_sql['rate']) ? $val_sql['rate'] : "" ?>" placeholder="Rate">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="pers" class="form-control" value="<?= isset($val_sql['per']) ? $pe[1] : "" ?>" name="per1" id="per1" placeholder="Enter Per">
                        <datalist id="pers">
                          <option value="Unit">Unit</option>
                          <option value="Pocket">Pocket</option>
                          <option value="Piece">Piece</option>
                        </datalist>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="amount1" id="amount1" value="<?= isset($val_sql['amount']) ? $val_sql['amount'] : "" ?>" placeholder="Amount">
                      </div>
                    </div>

                    <div class="row form-group col-md-12">
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" value="<?= isset($val_sql['carton_from_to']) ? $val_sql['carton_from_to'] : "" ?>" name="carton_from_to2" id="carton_from_to2" placeholder="Carton From - To">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="cracker2" class="form-control" value="<?= isset($val_sql['cracker_name']) ? $val_sql['cracker_name'] : "" ?>" name="cracker_name2" id="cracker_name2" placeholder="Enter cracker name">
                        <datalist id="cracker2">
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
                        <input class="form-control" type="text" name="carton2" id="carton2" value="<?= isset($val_sql['carton']) ? $val_sql['carton'] : "" ?>" placeholder="Carton">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="carton_contents2" id="carton_contents2" value="<?= isset($val_sql['carton_contents']) ? $val_sql['carton_contents'] : "" ?>" placeholder="Contents">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" value="<?= isset($val_sql['qty']) ? $val_sql['qty'] : "" ?>" name="qty2" id="qty2" placeholder="Qty">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="rate2" id="rate2" value="<?= isset($val_sql['rate']) ? $val_sql['rate'] : "" ?>" placeholder="Rate">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="pers" class="form-control" value="<?= isset($val_sql['per']) ? $pe[1] : "" ?>" name="per2" id="per2" placeholder="Enter Per">
                        <datalist id="pers">
                          <option value="Unit">Unit</option>
                          <option value="Pocket">Pocket</option>
                          <option value="Piece">Piece</option>
                        </datalist>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="amount2" id="amount2" value="<?= isset($val_sql['amount']) ? $val_sql['amount'] : "" ?>" placeholder="Amount">
                      </div>
                    </div>

                    <div class="row form-group col-md-12">
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" value="<?= isset($val_sql['carton_from_to']) ? $val_sql['carton_from_to'] : "" ?>" name="carton_from_to3" id="carton_from_to3" placeholder="Carton From - To">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="cracker3" class="form-control" value="<?= isset($val_sql['cracker_name']) ? $val_sql['cracker_name'] : "" ?>" name="cracker_name3" id="cracker_name3" placeholder="Enter cracker name">
                        <datalist id="cracker3">
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
                        <input class="form-control" type="text" name="carton3" id="carton3" value="<?= isset($val_sql['carton']) ? $val_sql['carton'] : "" ?>" placeholder="Carton">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="carton_contents3" id="carton_contents3" value="<?= isset($val_sql['carton_contents']) ? $val_sql['carton_contents'] : "" ?>" placeholder="Contents">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" value="<?= isset($val_sql['qty']) ? $val_sql['qty'] : "" ?>" name="qty3" id="qty3" placeholder="Qty">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="rate3" id="rate3" value="<?= isset($val_sql['rate']) ? $val_sql['rate'] : "" ?>" placeholder="Rate">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="pers" class="form-control" value="<?= isset($val_sql['per']) ? $pe[1] : "" ?>" name="per3" id="per3" placeholder="Enter Per">
                        <datalist id="pers">
                          <option value="Unit">Unit</option>
                          <option value="Pocket">Pocket</option>
                          <option value="Piece">Piece</option>
                        </datalist>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="amount3" id="amount3" value="<?= isset($val_sql['amount']) ? $val_sql['amount'] : "" ?>" placeholder="Amount">
                      </div>
                    </div>

                    <div class="row form-group col-md-12">
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" value="<?= isset($val_sql['carton_from_to']) ? $val_sql['carton_from_to'] : "" ?>" name="carton_from_to4" id="carton_from_to4" placeholder="Carton From - To">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="cracker4" class="form-control" value="<?= isset($val_sql['cracker_name']) ? $val_sql['cracker_name'] : "" ?>" name="cracker_name4" id="cracker_name4" placeholder="Enter cracker name">
                        <datalist id="cracker4">
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
                        <input class="form-control" type="text" name="carton4" id="carton4" value="<?= isset($val_sql['carton']) ? $val_sql['carton'] : "" ?>" placeholder="Carton">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="carton_contents4" id="carton_contents4" value="<?= isset($val_sql['carton_contents']) ? $val_sql['carton_contents'] : "" ?>" placeholder="Contents">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" value="<?= isset($val_sql['qty']) ? $val_sql['qty'] : "" ?>" name="qty4" id="qty4" placeholder="Qty">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="rate4" id="rate4" value="<?= isset($val_sql['rate']) ? $val_sql['rate'] : "" ?>" placeholder="Rate">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="pers" class="form-control" value="<?= isset($val_sql['per']) ? $pe[1] : "" ?>" name="per4" id="per4" placeholder="Enter Per">
                        <datalist id="pers">
                          <option value="Unit">Unit</option>
                          <option value="Pocket">Pocket</option>
                          <option value="Piece">Piece</option>
                        </datalist>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="amount4" id="amount4" value="<?= isset($val_sql['amount']) ? $val_sql['amount'] : "" ?>" placeholder="Amount">
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="panel-group" id="accordion1">

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title text-right">
                    <a class="btn btn-success" style="color:#fff !important" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Add Items</a>
                  </h4>
                  <div class="row col-md-12">
                    <div class="form-group col-md-2">
                      <label class="control-label">Carton From - To</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label class="control-label">Consignee Name</label>
                    </div>
                    <div class="form-group col-md-1">
                      <label class="control-label">Carton</label>
                    </div>
                    <div class="form-group col-md-1">
                      <label class="control-label">Carton&nbsp;Contents</label>
                    </div>
                    <div class="form-group col-md-1">
                      <label class="control-label">Qty</label>
                    </div>
                    <div class="form-group col-md-1">
                      <label class="control-label">Rate</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label class="control-label">Per</label>
                    </div>
                    <div class="form-group col-md-2">
                      <label class="control-label">Amount</label>
                    </div>
                  </div>

                </div>
                <div id="collapse1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="row form-group col-md-12">
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" value="<?= isset($val_sql['carton_from_to']) ? $val_sql['carton_from_to'] : "" ?>" name="carton_from_to5" id="carton_from_to5" placeholder="Carton From - To">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="cracker5" class="form-control" value="<?= isset($val_sql['cracker_name']) ? $val_sql['cracker_name'] : "" ?>" name="cracker_name5" id="cracker_name5" placeholder="Enter cracker name">
                        <datalist id="cracker5">
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
                        <input class="form-control" type="text" name="carton5" id="carton5" value="<?= isset($val_sql['carton']) ? $val_sql['carton'] : "" ?>" placeholder="Carton">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="carton_contents5" id="carton_contents5" value="<?= isset($val_sql['carton_contents']) ? $val_sql['carton_contents'] : "" ?>" placeholder="Contents">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" value="<?= isset($val_sql['qty']) ? $val_sql['qty'] : "" ?>" name="qty5" id="qty5" placeholder="Qty">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="rate5" id="rate5" value="<?= isset($val_sql['rate']) ? $val_sql['rate'] : "" ?>" placeholder="Rate">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="pers" class="form-control" value="<?= isset($val_sql['per']) ? $pe[1] : "" ?>" name="per5" id="per5" placeholder="Enter Per">
                        <datalist id="pers">
                          <option value="Unit">Unit</option>
                          <option value="Pocket">Pocket</option>
                          <option value="Piece">Piece</option>
                        </datalist>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="amount5" id="amount5" value="<?= isset($val_sql['amount']) ? $val_sql['amount'] : "" ?>" placeholder="Amount">
                      </div>
                    </div>

                    <div class="row form-group col-md-12">
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" value="<?= isset($val_sql['carton_from_to']) ? $val_sql['carton_from_to'] : "" ?>" name="carton_from_to6" id="carton_from_to6" placeholder="Carton From - To">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="cracker6" class="form-control" value="<?= isset($val_sql['cracker_name']) ? $val_sql['cracker_name'] : "" ?>" name="cracker_name6" id="cracker_name6" placeholder="Enter cracker name">
                        <datalist id="cracker6">
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
                        <input class="form-control" type="text" name="carton6" id="carton6" value="<?= isset($val_sql['carton']) ? $val_sql['carton'] : "" ?>" placeholder="Carton">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="carton_contents6" id="carton_contents6" value="<?= isset($val_sql['carton_contents']) ? $val_sql['carton_contents'] : "" ?>" placeholder="Contents">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" value="<?= isset($val_sql['qty']) ? $val_sql['qty'] : "" ?>" name="qty6" id="qty6" placeholder="Qty">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="rate6" id="rate6" value="<?= isset($val_sql['rate']) ? $val_sql['rate'] : "" ?>" placeholder="Rate">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="pers" class="form-control" value="<?= isset($val_sql['per']) ? $pe[1] : "" ?>" name="per6" id="per6" placeholder="Enter Per">
                        <datalist id="pers">
                          <option value="Unit">Unit</option>
                          <option value="Pocket">Pocket</option>
                          <option value="Piece">Piece</option>
                        </datalist>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="amount6" id="amount6" value="<?= isset($val_sql['amount']) ? $val_sql['amount'] : "" ?>" placeholder="Amount">
                      </div>
                    </div>

                    <div class="row form-group col-md-12">
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" value="<?= isset($val_sql['carton_from_to']) ? $val_sql['carton_from_to'] : "" ?>" name="carton_from_to7" id="carton_from_to7" placeholder="Carton From - To">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="cracker7" class="form-control" value="<?= isset($val_sql['cracker_name']) ? $val_sql['cracker_name'] : "" ?>" name="cracker_name7" id="cracker_name7" placeholder="Enter cracker name">
                        <datalist id="cracker7">
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
                        <input class="form-control" type="text" name="carton7" id="carton7" value="<?= isset($val_sql['carton']) ? $val_sql['carton'] : "" ?>" placeholder="Carton">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="carton_contents7" id="carton_contents7" value="<?= isset($val_sql['carton_contents']) ? $val_sql['carton_contents'] : "" ?>" placeholder="Contents">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" value="<?= isset($val_sql['qty']) ? $val_sql['qty'] : "" ?>" name="qty7" id="qty7" placeholder="Qty">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="rate7" id="rate7" value="<?= isset($val_sql['rate']) ? $val_sql['rate'] : "" ?>" placeholder="Rate">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="pers" class="form-control" value="<?= isset($val_sql['per']) ? $pe[1] : "" ?>" name="per7" id="per7" placeholder="Enter Per">
                        <datalist id="pers">
                          <option value="Unit">Unit</option>
                          <option value="Pocket">Pocket</option>
                          <option value="Piece">Piece</option>
                        </datalist>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="amount7" id="amount7" value="<?= isset($val_sql['amount']) ? $val_sql['amount'] : "" ?>" placeholder="Amount">
                      </div>
                    </div>

                    <div class="row form-group col-md-12">
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" value="<?= isset($val_sql['carton_from_to']) ? $val_sql['carton_from_to'] : "" ?>" name="carton_from_to8" id="carton_from_to8" placeholder="Carton From - To">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="cracker8" class="form-control" value="<?= isset($val_sql['cracker_name']) ? $val_sql['cracker_name'] : "" ?>" name="cracker_name8" id="cracker_name8" placeholder="Enter cracker name">
                        <datalist id="cracker8">
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
                        <input class="form-control" type="text" name="carton8" id="carton8" value="<?= isset($val_sql['carton']) ? $val_sql['carton'] : "" ?>" placeholder="Carton">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="carton_contents8" id="carton_contents8" value="<?= isset($val_sql['carton_contents']) ? $val_sql['carton_contents'] : "" ?>" placeholder="Contents">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" value="<?= isset($val_sql['qty']) ? $val_sql['qty'] : "" ?>" name="qty8" id="qty8" placeholder="Qty">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="rate8" id="rate8" value="<?= isset($val_sql['rate']) ? $val_sql['rate'] : "" ?>" placeholder="Rate">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="pers" class="form-control" value="<?= isset($val_sql['per']) ? $pe[1] : "" ?>" name="per8" id="per8" placeholder="Enter Per">
                        <datalist id="pers">
                          <option value="Unit">Unit</option>
                          <option value="Pocket">Pocket</option>
                          <option value="Piece">Piece</option>
                        </datalist>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="amount8" id="amount8" value="<?= isset($val_sql['amount']) ? $val_sql['amount'] : "" ?>" placeholder="Amount">
                      </div>
                    </div>

                    <div class="row form-group col-md-12">
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" value="<?= isset($val_sql['carton_from_to']) ? $val_sql['carton_from_to'] : "" ?>" name="carton_from_to9" id="carton_from_to9" placeholder="Carton From - To">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="cracker9" class="form-control" value="<?= isset($val_sql['cracker_name']) ? $val_sql['cracker_name'] : "" ?>" name="cracker_name9" id="cracker_name9" placeholder="Enter cracker name">
                        <datalist id="cracker9">
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
                        <input class="form-control" type="text" name="carton9" id="carton9" value="<?= isset($val_sql['carton']) ? $val_sql['carton'] : "" ?>" placeholder="Carton">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="carton_contents9" id="carton_contents9" value="<?= isset($val_sql['carton_contents']) ? $val_sql['carton_contents'] : "" ?>" placeholder="Contents">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" value="<?= isset($val_sql['qty']) ? $val_sql['qty'] : "" ?>" name="qty9" id="qty9" placeholder="Qty">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="rate9" id="rate9" value="<?= isset($val_sql['rate']) ? $val_sql['rate'] : "" ?>" placeholder="Rate">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="pers" class="form-control" value="<?= isset($val_sql['per']) ? $pe[1] : "" ?>" name="per9" id="per9" placeholder="Enter Per">
                        <datalist id="pers">
                          <option value="Unit">Unit</option>
                          <option value="Pocket">Pocket</option>
                          <option value="Piece">Piece</option>
                        </datalist>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="amount9" id="amount9" value="<?= isset($val_sql['amount']) ? $val_sql['amount'] : "" ?>" placeholder="Amount">
                      </div>
                    </div>

                  </div>
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
      </div>
    </form>
  </main>
  <!-- Essential javascripts for application to work-->
  <!-- <script src="js/jquery-3.2.1.min.js"></script> -->
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
  $consignee_name = isset($_POST['consignee_name']) ? $_POST['consignee_name'] : "";
  $state = isset($_POST['state']) ? $_POST['state'] : "";
  $gstin = isset($_POST['gstin']) ? $_POST['gstin'] : "";
  $consignee_address = isset($_POST['consignee_address']) ? $_POST['consignee_address'] : "";
  $place = isset($_POST['place']) ? $_POST['place'] : "";
  $invoice_no = isset($_POST['invoice_no']) ? $_POST['invoice_no'] : "";
  $invoice_date = isset($_POST['invoice_date']) ? $_POST['invoice_date'] : "";
  $eway_bill = isset($_POST['eway_bill']) ? $_POST['eway_bill'] : "";
  $hsn_code = isset($_POST['hsn_code']) ? $_POST['hsn_code'] : "";
  $vehicle_no = isset($_POST['vehicle_no']) ? $_POST['vehicle_no'] : "";
  $despatched_from = isset($_POST['despatched_from']) ? $_POST['despatched_from'] : "";
  $despatched_to = isset($_POST['despatched_to']) ? $_POST['despatched_to'] : "";
  $transport_name = isset($_POST['transport_name']) ? $_POST['transport_name'] : "";
  $transport_gstin = isset($_POST['transport_gstin']) ? $_POST['transport_gstin'] : "";
  $carton_from_to = isset($_POST['carton_from_to']) ? $_POST['carton_from_to'] : "";
  $cracker_name = isset($_POST['cracker_name']) ? $_POST['cracker_name'] : "";
  $carton = isset($_POST['carton']) ? $_POST['carton'] : "";
  $carton_contents = isset($_POST['carton_contents']) ? $_POST['carton_contents'] : "";
  $qty = isset($_POST['qty']) ? $_POST['qty'] : "";
  $rate = isset($_POST['rate']) ? $_POST['rate'] : "";
  $per = isset($_POST['per']) ? $_POST['per'] : "";
  $amount = isset($_POST['amount']) ? $_POST['amount'] : "";
  $total_carton = isset($_POST['total_carton']) ? $_POST['total_carton'] : "";
  $good_value = isset($_POST['good_value']) ? $_POST['good_value'] : "";
  $discount = isset($_POST['discount']) ? $_POST['discount'] : "";
  $discount_amount = isset($_POST['discount_amount']) ? $_POST['discount_amount'] : "";
  $taxable_value = isset($_POST['taxable_value']) ? $_POST['taxable_value'] : "";
  $igst = isset($_POST['igst']) ? $_POST['igst'] : "";
  $igst_amount = isset($_POST['igst_amount']) ? $_POST['igst_amount'] : "";
  $cgst = isset($_POST['cgst']) ? $_POST['cgst'] : "";
  $cgst_amount = isset($_POST['cgst_amount']) ? $_POST['cgst_amount'] : "";
  $sgst = isset($_POST['sgst']) ? $_POST['sgst'] : "";
  $sgst_amount = isset($_POST['sgst_amount']) ? $_POST['sgst_amount'] : "";
  $round_off = isset($_POST['round_off']) ? $_POST['round_off'] : "";
  $net_amount = isset($_POST['net_amount']) ? $_POST['net_amount'] : "";
  $state_type = isset($_POST['state_type']) ? $_POST['state_type'] : "";

  $consignee_name1 = isset($_POST['consignee_name1']) ? $_POST['consignee_name1'] : "";
  $state1 = isset($_POST['state1']) ? $_POST['state1'] : "";
  $gstin1 = isset($_POST['gstin1']) ? $_POST['gstin1'] : "";
  $consignee_address1 = isset($_POST['consignee_address1']) ? $_POST['consignee_address1'] : "";
  $place1 = isset($_POST['place1']) ? $_POST['place1'] : "";
  $invoice_no1 = isset($_POST['invoice_no1']) ? $_POST['invoice_no1'] : "";
  $invoice_date1 = isset($_POST['invoice_date1']) ? $_POST['invoice_date1'] : "";
  $eway_bill1 = isset($_POST['eway_bill1']) ? $_POST['eway_bill1'] : "";
  $hsn_code1 = isset($_POST['hsn_code1']) ? $_POST['hsn_code1'] : "";
  $vehicle_no1 = isset($_POST['vehicle_no1']) ? $_POST['vehicle_no1'] : "";
  $despatched_from1 = isset($_POST['despatched_from1']) ? $_POST['despatched_from1'] : "";
  $despatched_to1 = isset($_POST['despatched_to1']) ? $_POST['despatched_to1'] : "";
  $transport_name1 = isset($_POST['transport_name1']) ? $_POST['transport_name1'] : "";
  $transport_gstin1 = isset($_POST['transport_gstin1']) ? $_POST['transport_gstin1'] : "";
  $carton_from_to1 = isset($_POST['carton_from_to1']) ? $_POST['carton_from_to1'] : "";
  $cracker_name1 = isset($_POST['cracker_name1']) ? $_POST['cracker_name1'] : "";
  $carton1 = isset($_POST['carton1']) ? $_POST['carton1'] : "";
  $carton_contents1 = isset($_POST['carton_contents1']) ? $_POST['carton_contents1'] : "";
  $qty1 = isset($_POST['qty1']) ? $_POST['qty1'] : "";
  $rate1 = isset($_POST['rate1']) ? $_POST['qty1'] : "";
  $per1 = isset($_POST['per1']) ? $_POST['per1'] : "";
  $amount1 = isset($_POST['amount1']) ? $_POST['amount1'] : "";


  $consignee_name2 = isset($_POST['consignee_name2']) ? $_POST['consignee_name2'] : "";
  $state2 = isset($_POST['state2']) ? $_POST['state2'] : "";
  $gstin2 = isset($_POST['gstin2']) ? $_POST['gstin2'] : "";
  $consignee_address2 = isset($_POST['consignee_address2']) ? $_POST['consignee_address2'] : "";
  $place2 = isset($_POST['place2']) ? $_POST['place2'] : "";
  $invoice_no2 = isset($_POST['invoice_no2']) ? $_POST['invoice_no2'] : "";
  $invoice_date2 = isset($_POST['invoice_date2']) ? $_POST['invoice_date2'] : "";
  $eway_bill2 = isset($_POST['eway_bill2']) ? $_POST['eway_bill2'] : "";
  $hsn_code2 = isset($_POST['hsn_code2']) ? $_POST['hsn_code2'] : "";
  $vehicle_no2 = isset($_POST['vehicle_no2']) ? $_POST['vehicle_no2'] : "";
  $despatched_from2 = isset($_POST['despatched_from2']) ? $_POST['despatched_from2'] : "";
  $despatched_to2 = isset($_POST['despatched_to2']) ? $_POST['despatched_to2'] : "";
  $transport_name2 = isset($_POST['transport_name2']) ? $_POST['transport_name2'] : "";
  $transport_gstin2 = isset($_POST['transport_gstin2']) ? $_POST['transport_gstin2'] : "";
  $carton_from_to2 = isset($_POST['carton_from_to2']) ? $_POST['carton_from_to2'] : "";
  $cracker_name2 = isset($_POST['cracker_name2']) ? $_POST['cracker_name2'] : "";
  $carton2 = isset($_POST['carton2']) ? $_POST['carton2'] : "";
  $carton_contents2 = isset($_POST['carton_contents2']) ? $_POST['carton_contents2'] : "";
  $qty2 = isset($_POST['qty2']) ? $_POST['qty2'] : "";
  $rate2 = isset($_POST['rate2']) ? $_POST['rate2'] : "";
  $per2 = isset($_POST['per2']) ? $_POST['per2'] : "";
  $amount2 = isset($_POST['amount2']) ? $_POST['amount2'] : "";


  $consignee_name3 = isset($_POST['consignee_name3']) ? $_POST['consignee_name3'] : "";
  $state3 = isset($_POST['state3']) ? $_POST['state3'] : "";
  $gstin3 = isset($_POST['gstin3']) ? $_POST['gstin3'] : "";
  $consignee_address3 = isset($_POST['consignee_address3']) ? $_POST['consignee_address3'] : "";
  $place3 = isset($_POST['place3']) ? $_POST['place3'] : "";
  $invoice_no3 = isset($_POST['invoice_no3']) ? $_POST['invoice_no3'] : "";
  $invoice_date3 = isset($_POST['invoice_date3']) ? $_POST['invoice_date3'] : "";
  $eway_bill3 = isset($_POST['eway_bill3']) ? $_POST['eway_bill3'] : "";
  $hsn_code3 = isset($_POST['hsn_code3']) ? $_POST['hsn_code3'] : "";
  $vehicle_no3 = isset($_POST['vehicle_no3']) ? $_POST['vehicle_no3'] : "";
  $despatched_from3 = isset($_POST['despatched_from3']) ? $_POST['despatched_from3'] : "";
  $despatched_to3 = isset($_POST['despatched_to3']) ? $_POST['despatched_to3'] : "";
  $transport_name3 = isset($_POST['transport_name3']) ? $_POST['transport_name3'] : "";
  $transport_gstin3 = isset($_POST['transport_gstin3']) ? $_POST['transport_gstin3'] : "";
  $carton_from_to3 = isset($_POST['carton_from_to3']) ? $_POST['carton_from_to3'] : "";
  $cracker_name3 = isset($_POST['cracker_name3']) ? $_POST['cracker_name3'] : "";
  $carton3 = isset($_POST['carton3']) ? $_POST['carton3'] : "";
  $carton_contents3 = isset($_POST['carton_contents3']) ? $_POST['carton_contents3'] : "";
  $qty3 = isset($_POST['qty3']) ? $_POST['qty3'] : "";
  $rate3 = isset($_POST['rate3']) ? $_POST['rate3'] : "";
  $per3 = isset($_POST['per3']) ? $_POST['per3'] : "";
  $amount3 = isset($_POST['amount3']) ? $_POST['amount3'] : "";

  $consignee_name4 = isset($_POST['consignee_name4']) ? $_POST['consignee_name4'] : "";
  $state4 = isset($_POST['state4']) ? $_POST['state4'] : "";
  $gstin4 = isset($_POST['gstin4']) ? $_POST['gstin4'] : "";
  $consignee_address4 = isset($_POST['consignee_address4']) ? $_POST['consignee_address4'] : "";
  $place4 = isset($_POST['place4']) ? $_POST['place4'] : "";
  $invoice_no4 = isset($_POST['invoice_no4']) ? $_POST['invoice_no4'] : "";
  $invoice_date4 = isset($_POST['invoice_date4']) ? $_POST['invoice_date4'] : "";
  $eway_bill4 = isset($_POST['eway_bill4']) ? $_POST['eway_bill4'] : "";
  $hsn_code4 = isset($_POST['hsn_code4']) ? $_POST['hsn_code4'] : "";
  $vehicle_no4 = isset($_POST['vehicle_no4']) ? $_POST['vehicle_no4'] : "";
  $despatched_from4 = isset($_POST['despatched_from4']) ? $_POST['despatched_from4'] : "";
  $despatched_to4 = isset($_POST['despatched_to4']) ? $_POST['despatched_to4'] : "";
  $transport_name4 = isset($_POST['transport_name4']) ? $_POST['transport_name4'] : "";
  $transport_gstin4 = isset($_POST['transport_gstin4']) ? $_POST['transport_gstin4'] : "";
  $carton_from_to4 = isset($_POST['carton_from_to4']) ? $_POST['carton_from_to4'] : "";
  $cracker_name4 = isset($_POST['cracker_name4']) ? $_POST['cracker_name4'] : "";
  $carton4 = isset($_POST['carton4']) ? $_POST['carton4'] : "";
  $carton_contents4 = isset($_POST['carton_contents4']) ? $_POST['carton_contents4'] : "";
  $qty4 = isset($_POST['qty4']) ? $_POST['qty4'] : "";
  $rate4 = isset($_POST['rate4']) ? $_POST['rate4'] : "";
  $per4 = isset($_POST['per4']) ? $_POST['per4'] : "";
  $amount4 = isset($_POST['amount4']) ? $_POST['amount4'] : "";

  $consignee_name5 = isset($_POST['consignee_name5']) ? $_POST['consignee_name5'] : "";
  $state5 = isset($_POST['state5']) ? $_POST['state5'] : "";
  $gstin5 = isset($_POST['gstin5']) ? $_POST['gstin5'] : "";
  $consignee_address5 = isset($_POST['consignee_address5']) ? $_POST['consignee_address5'] : "";
  $place5 = isset($_POST['place5']) ? $_POST['place5'] : "";
  $invoice_no5 = isset($_POST['invoice_no5']) ? $_POST['invoice_no5'] : "";
  $invoice_date5 = isset($_POST['invoice_date5']) ? $_POST['invoice_date5'] : "";
  $eway_bill5 = isset($_POST['eway_bill5']) ? $_POST['eway_bill5'] : "";
  $hsn_code5 = isset($_POST['hsn_code5']) ? $_POST['hsn_code5'] : "";
  $vehicle_no5 = isset($_POST['vehicle_no5']) ? $_POST['vehicle_no5'] : "";
  $despatched_from5 = isset($_POST['despatched_from5']) ? $_POST['despatched_from5'] : "";
  $despatched_to5 = isset($_POST['despatched_to5']) ? $_POST['despatched_to5'] : "";
  $transport_name5 = isset($_POST['transport_name5']) ? $_POST['transport_name5'] : "";
  $transport_gstin5 = isset($_POST['transport_gstin5']) ? $_POST['transport_gstin5'] : "";
  $carton_from_to5 = isset($_POST['carton_from_to5']) ? $_POST['carton_from_to5'] : "";
  $cracker_name5 = isset($_POST['cracker_name5']) ? $_POST['cracker_name5'] : "";
  $carton5 = isset($_POST['carton5']) ? $_POST['carton5'] : "";
  $carton_contents5 = isset($_POST['carton_contents5']) ? $_POST['carton_contents5'] : "";
  $qty5 = isset($_POST['qty5']) ? $_POST['qty5'] : "";
  $rate5 = isset($_POST['rate5']) ? $_POST['rate5'] : "";
  $per5 = isset($_POST['per5']) ? $_POST['per5'] : "";
  $amount5 = isset($_POST['amount5']) ? $_POST['amount5'] : "";

  $consignee_name6 = isset($_POST['consignee_name6']) ? $_POST['consignee_name6'] : "";
  $state6 = isset($_POST['state6']) ? $_POST['state6'] : "";
  $gstin6 = isset($_POST['gstin6']) ? $_POST['gstin6'] : "";
  $consignee_address6 = isset($_POST['consignee_address6']) ? $_POST['consignee_address6'] : "";
  $place6 = isset($_POST['place6']) ? $_POST['place6'] : "";
  $invoice_no6 = isset($_POST['invoice_no6']) ? $_POST['invoice_no6'] : "";
  $invoice_date6 = isset($_POST['invoice_date6']) ? $_POST['invoice_date6'] : "";
  $eway_bill6 = isset($_POST['eway_bill6']) ? $_POST['eway_bill6'] : "";
  $hsn_code6 = isset($_POST['hsn_code6']) ? $_POST['hsn_code6'] : "";
  $vehicle_no6 = isset($_POST['vehicle_no6']) ? $_POST['vehicle_no6'] : "";
  $despatched_from6 = isset($_POST['despatched_from6']) ? $_POST['despatched_from6'] : "";
  $despatched_to6 = isset($_POST['despatched_to6']) ? $_POST['despatched_to6'] : "";
  $transport_name6 = isset($_POST['transport_name6']) ? $_POST['transport_name6'] : "";
  $transport_gstin6 = isset($_POST['transport_gstin6']) ? $_POST['transport_gstin6'] : "";
  $carton_from_to6 = isset($_POST['carton_from_to6']) ? $_POST['carton_from_to6'] : "";
  $cracker_name6 = isset($_POST['cracker_name6']) ? $_POST['cracker_name6'] : "";
  $carton6 = isset($_POST['carton6']) ? $_POST['carton6'] : "";
  $carton_contents6 = isset($_POST['carton_contents6']) ? $_POST['carton_contents6'] : "";
  $qty6 = isset($_POST['qty6']) ? $_POST['qty6'] : "";
  $rate6 = isset($_POST['rate6']) ? $_POST['rate6'] : "";
  $per6 = isset($_POST['per6']) ? $_POST['per6'] : "";
  $amount6 = isset($_POST['amount6']) ? $_POST['amount6'] : "";

  $consignee_name7 = isset($_POST['consignee_name7']) ? $_POST['consignee_name7'] : "";
  $state7 = isset($_POST['state7']) ? $_POST['state7'] : "";
  $gstin7 = isset($_POST['gstin7']) ? $_POST['gstin7'] : "";
  $consignee_address7 = isset($_POST['consignee_address7']) ? $_POST['consignee_address7'] : "";
  $place7 = isset($_POST['place7']) ? $_POST['place7'] : "";
  $invoice_no7 = isset($_POST['invoice_no7']) ? $_POST['invoice_no7'] : "";
  $invoice_date7 = isset($_POST['invoice_date7']) ? $_POST['invoice_date7'] : "";
  $eway_bill7 = isset($_POST['eway_bill7']) ? $_POST['eway_bill7'] : "";
  $hsn_code7 = isset($_POST['hsn_code7']) ? $_POST['hsn_code7'] : "";
  $vehicle_no7 = isset($_POST['vehicle_no7']) ? $_POST['vehicle_no7'] : "";
  $despatched_from7 = isset($_POST['despatched_from7']) ? $_POST['despatched_from7'] : "";
  $despatched_to7 = isset($_POST['despatched_to7']) ? $_POST['despatched_to7'] : "";
  $transport_name7 = isset($_POST['transport_name7']) ? $_POST['transport_name7'] : "";
  $transport_gstin7 = isset($_POST['transport_gstin7']) ? $_POST['transport_gstin7'] : "";
  $carton_from_to7 = isset($_POST['carton_from_to7']) ? $_POST['carton_from_to7'] : "";
  $cracker_name7 = isset($_POST['cracker_name7']) ? $_POST['cracker_name7'] : "";
  $carton7 = isset($_POST['carton7']) ? $_POST['carton7'] : "";
  $carton_contents7 = isset($_POST['carton_contents7']) ? $_POST['carton_contents7'] : "";
  $qty7 = isset($_POST['qty7']) ? $_POST['qty7'] : "";
  $rate7 = isset($_POST['rate7']) ? $_POST['rate7'] : "";
  $per7 = isset($_POST['per7']) ? $_POST['per7'] : "";
  $amount7 = isset($_POST['amount7']) ? $_POST['amount7'] : "";

  $consignee_name8 = isset($_POST['consignee_name8']) ? $_POST['consignee_name8'] : "";
  $state8 = isset($_POST['state8']) ? $_POST['state8'] : "";
  $gstin8 = isset($_POST['gstin8']) ? $_POST['gstin8'] : "";
  $consignee_address8 = isset($_POST['consignee_address8']) ? $_POST['consignee_address8'] : "";
  $place8 = isset($_POST['place8']) ? $_POST['place8'] : "";
  $invoice_no8 = isset($_POST['invoice_no8']) ? $_POST['invoice_no8'] : "";
  $invoice_date8 = isset($_POST['invoice_date8']) ? $_POST['invoice_date8'] : "";
  $eway_bill8 = isset($_POST['eway_bill8']) ? $_POST['eway_bill8'] : "";
  $hsn_code8 = isset($_POST['hsn_code8']) ? $_POST['hsn_code8'] : "";
  $vehicle_no8 = isset($_POST['vehicle_no8']) ? $_POST['vehicle_no8'] : "";
  $despatched_from8 = isset($_POST['despatched_from8']) ? $_POST['despatched_from8'] : "";
  $despatched_to8 = isset($_POST['despatched_to8']) ? $_POST['despatched_to8'] : "";
  $transport_name8 = isset($_POST['transport_name8']) ? $_POST['transport_name8'] : "";
  $transport_gstin8 = isset($_POST['transport_gstin8']) ? $_POST['transport_gstin8'] : "";
  $carton_from_to8 = isset($_POST['carton_from_to8']) ? $_POST['carton_from_to8'] : "";
  $cracker_name8 = isset($_POST['cracker_name8']) ? $_POST['cracker_name8'] : "";
  $carton8 = isset($_POST['carton8']) ? $_POST['carton8'] : "";
  $carton_contents8 = isset($_POST['carton_contents8']) ? $_POST['carton_contents8'] : "";
  $qty8 = isset($_POST['qty8']) ? $_POST['qty8'] : "";
  $rate8 = isset($_POST['rate8']) ? $_POST['rate8'] : "";
  $per8 = isset($_POST['per8']) ? $_POST['per8'] : "";
  $amount8 = isset($_POST['amount8']) ? $_POST['amount8'] : "";

  $consignee_name9 = isset($_POST['consignee_name9']) ? $_POST['consignee_name9'] : "";
  $state9 = isset($_POST['state9']) ? $_POST['state9'] : "";
  $gstin9 = isset($_POST['gstin9']) ? $_POST['gstin9'] : "";
  $consignee_address9 = isset($_POST['consignee_address9']) ? $_POST['consignee_address9'] : "";
  $place9 = isset($_POST['place9']) ? $_POST['place9'] : "";
  $invoice_no9 = isset($_POST['invoice_no9']) ? $_POST['invoice_no9'] : "";
  $invoice_date9 = isset($_POST['invoice_date9']) ? $_POST['invoice_date9'] : "";
  $eway_bill9 = isset($_POST['eway_bill9']) ? $_POST['eway_bill9'] : "";
  $hsn_code9 = isset($_POST['hsn_code9']) ? $_POST['hsn_code9'] : "";
  $vehicle_no9 = isset($_POST['vehicle_no9']) ? $_POST['vehicle_no9'] : "";
  $despatched_from9 = isset($_POST['despatched_from9']) ? $_POST['despatched_from9'] : "";
  $despatched_to9 = isset($_POST['despatched_to9']) ? $_POST['despatched_to9'] : "";
  $transport_name9 = isset($_POST['transport_name9']) ? $_POST['transport_name9'] : "";
  $transport_gstin9 = isset($_POST['transport_gstin9']) ? $_POST['transport_gstin9'] : "";
  $carton_from_to9 = isset($_POST['carton_from_to9']) ? $_POST['carton_from_to9'] : "";
  $cracker_name9 = isset($_POST['cracker_name9']) ? $_POST['cracker_name9'] : "";
  $carton9 = isset($_POST['carton9']) ? $_POST['carton9'] : "";
  $carton_contents9 = isset($_POST['carton_contents9']) ? $_POST['carton_contents9'] : "";
  $qty9 = isset($_POST['qty9']) ? $_POST['qty9'] : "";
  $rate9 = isset($_POST['rate9']) ? $_POST['rate9'] : "";
  $per9 = isset($_POST['per9']) ? $_POST['per9'] : "";
  $amount9 = isset($_POST['amount9']) ? $_POST['amount9'] : "";

  if ($id == '') {
    if ($cracker_name != '') {
      $sqlins = "insert into customerbill(consignee_name,state,state_type,gstin,consignee_address,place,invoice_no,invoice_date,eway_bill,hsn_code,vehicle_no,despatched_from,despatched_to,transport_name,transport_gstin,carton_from_to,cracker_name,carton,carton_contents,qty,rate,per,amount,total_carton,good_value,discount,discount_amount,taxable_value,igst,igst_amount,cgst,cgst_amount,sgst,sgst_amount,round_off,net_amount) values('$consignee_name','$state','$state_type','$gstin','$consignee_address','$place','$invoice_no','$invoice_date','$eway_bill','$hsn_code','$vehicle_no','$despatched_from','$despatched_to','$transport_name','$transport_gstin','$carton_from_to','$cracker_name','$carton','$carton_contents','$qty','$rate','$per','$amount','$total_carton','$good_value','$discount','$discount_amount','$taxable_value','$igst','$igst_amount','$cgst','$cgst_amount','$sgst','$sgst_amount','$round_off','$net_amount')";
      $exesql = mysqli_query($con, $sqlins);
    }
    if ($cracker_name1 != '') {
      $sqlins1 = "insert into customerbill(consignee_name,state,state_type,gstin,consignee_address,place,invoice_no,invoice_date,eway_bill,hsn_code,vehicle_no,despatched_from,despatched_to,transport_name,transport_gstin,carton_from_to,cracker_name,carton,carton_contents,qty,rate,per,amount,total_carton,good_value,discount,discount_amount,taxable_value,igst,igst_amount,cgst,cgst_amount,sgst,sgst_amount,round_off,net_amount) values('$consignee_name','$state','$state_type','$gstin','$consignee_address','$place','$invoice_no','$invoice_date','$eway_bill','$hsn_code','$vehicle_no','$despatched_from','$despatched_to','$transport_name','$transport_gstin','$carton_from_to1','$cracker_name1','$carton1','$carton_contents1','$qty1','$rate1','$per1','$amount1','$total_carton','$good_value','$discount','$discount_amount','$taxable_value','$igst','$igst_amount','$cgst','$cgst_amount','$sgst','$sgst_amount','$round_off','$net_amount')";
      $exesql1 = mysqli_query($con, $sqlins1);
    }
    if ($cracker_name2 != '') {
      $sqlins2 = "insert into customerbill(consignee_name,state,state_type,gstin,consignee_address,place,invoice_no,invoice_date,eway_bill,hsn_code,vehicle_no,despatched_from,despatched_to,transport_name,transport_gstin,carton_from_to,cracker_name,carton,carton_contents,qty,rate,per,amount,total_carton,good_value,discount,discount_amount,taxable_value,igst,igst_amount,cgst,cgst_amount,sgst,sgst_amount,round_off,net_amount) values('$consignee_name','$state','$state_type','$gstin','$consignee_address','$place','$invoice_no','$invoice_date','$eway_bill','$hsn_code','$vehicle_no','$despatched_from','$despatched_to','$transport_name','$transport_gstin','$carton_from_to2','$cracker_name2','$carton2','$carton_contents2','$qty2','$rate2','$per2','$amount2','$total_carton','$good_value','$discount','$discount_amount','$taxable_value','$igst','$igst_amount','$cgst','$cgst_amount','$sgst','$sgst_amount','$round_off','$net_amount')";
      $exesql2 = mysqli_query($con, $sqlins2);
    }
    if ($cracker_name3 != '') {
      $sqlins3 = "insert into customerbill(consignee_name,state,state_type,gstin,consignee_address,place,invoice_no,invoice_date,eway_bill,hsn_code,vehicle_no,despatched_from,despatched_to,transport_name,transport_gstin,carton_from_to,cracker_name,carton,carton_contents,qty,rate,per,amount,total_carton,good_value,discount,discount_amount,taxable_value,igst,igst_amount,cgst,cgst_amount,sgst,sgst_amount,round_off,net_amount) values('$consignee_name','$state','$state_type','$gstin','$consignee_address','$place','$invoice_no','$invoice_date','$eway_bill','$hsn_code','$vehicle_no','$despatched_from','$despatched_to','$transport_name','$transport_gstin','$carton_from_to3','$cracker_name3','$carton3','$carton_contents3','$qty3','$rate3','$per3','$amount3','$total_carton','$good_value','$discount','$discount_amount','$taxable_value','$igst','$igst_amount','$cgst','$cgst_amount','$sgst','$sgst_amount','$round_off','$net_amount')";
      $exesql3 = mysqli_query($con, $sqlins3);
    }
    if ($cracker_name4 != '') {
      $sqlins4 = "insert into customerbill(consignee_name,state,state_type,gstin,consignee_address,place,invoice_no,invoice_date,eway_bill,hsn_code,vehicle_no,despatched_from,despatched_to,transport_name,transport_gstin,carton_from_to,cracker_name,carton,carton_contents,qty,rate,per,amount,total_carton,good_value,discount,discount_amount,taxable_value,igst,igst_amount,cgst,cgst_amount,sgst,sgst_amount,round_off,net_amount) values('$consignee_name','$state','$state_type','$gstin','$consignee_address','$place','$invoice_no','$invoice_date','$eway_bill','$hsn_code','$vehicle_no','$despatched_from','$despatched_to','$transport_name','$transport_gstin','$carton_from_to4','$cracker_name4','$carton4','$carton_contents4','$qty4','$rate4','$per4','$amount4','$total_carton','$good_value','$discount','$discount_amount','$taxable_value','$igst','$igst_amount','$cgst','$cgst_amount','$sgst','$sgst_amount','$round_off','$net_amount')";
      $exesql4 = mysqli_query($con, $sqlins4);
    }
    if ($cracker_name5 != '') {
      $sqlins5 = "insert into customerbill(consignee_name,state,state_type,gstin,consignee_address,place,invoice_no,invoice_date,eway_bill,hsn_code,vehicle_no,despatched_from,despatched_to,transport_name,transport_gstin,carton_from_to,cracker_name,carton,carton_contents,qty,rate,per,amount,total_carton,good_value,discount,discount_amount,taxable_value,igst,igst_amount,cgst,cgst_amount,sgst,sgst_amount,round_off,net_amount) values('$consignee_name','$state','$state_type','$gstin','$consignee_address','$place','$invoice_no','$invoice_date','$eway_bill','$hsn_code','$vehicle_no','$despatched_from','$despatched_to','$transport_name','$transport_gstin','$carton_from_to5','$cracker_name5','$carton5','$carton_contents5','$qty5','$rate5','$per5','$amount5','$total_carton','$good_value','$discount','$discount_amount','$taxable_value','$igst','$igst_amount','$cgst','$cgst_amount','$sgst','$sgst_amount','$round_off','$net_amount')";
      $exesql5 = mysqli_query($con, $sqlins5);
    }
    if ($cracker_name6 != '') {
      $sqlins6 = "insert into customerbill(consignee_name,state,state_type,gstin,consignee_address,place,invoice_no,invoice_date,eway_bill,hsn_code,vehicle_no,despatched_from,despatched_to,transport_name,transport_gstin,carton_from_to,cracker_name,carton,carton_contents,qty,rate,per,amount,total_carton,good_value,discount,discount_amount,taxable_value,igst,igst_amount,cgst,cgst_amount,sgst,sgst_amount,round_off,net_amount) values('$consignee_name','$state','$state_type','$gstin','$consignee_address','$place','$invoice_no','$invoice_date','$eway_bill','$hsn_code','$vehicle_no','$despatched_from','$despatched_to','$transport_name','$transport_gstin','$carton_from_to6','$cracker_name6','$carton6','$carton_contents6','$qty6','$rate6','$per6','$amount6','$total_carton','$good_value','$discount','$discount_amount','$taxable_value','$igst','$igst_amount','$cgst','$cgst_amount','$sgst','$sgst_amount','$round_off','$net_amount')";
      $exesql6 = mysqli_query($con, $sqlins6);
    }
    if ($cracker_name7 != '') {
      $sqlins7 = "insert into customerbill(consignee_name,state,state_type,gstin,consignee_address,place,invoice_no,invoice_date,eway_bill,hsn_code,vehicle_no,despatched_from,despatched_to,transport_name,transport_gstin,carton_from_to,cracker_name,carton,carton_contents,qty,rate,per,amount,total_carton,good_value,discount,discount_amount,taxable_value,igst,igst_amount,cgst,cgst_amount,sgst,sgst_amount,round_off,net_amount) values('$consignee_name','$state','$state_type','$gstin','$consignee_address','$place','$invoice_no','$invoice_date','$eway_bill','$hsn_code','$vehicle_no','$despatched_from','$despatched_to','$transport_name','$transport_gstin','$carton_from_to7','$cracker_name7','$carton7','$carton_contents7','$qty7','$rate7','$per7','$amount7','$total_carton','$good_value','$discount','$discount_amount','$taxable_value','$igst','$igst_amount','$cgst','$cgst_amount','$sgst','$sgst_amount','$round_off','$net_amount')";
      $exesql7 = mysqli_query($con, $sqlins7);
    }
    if ($cracker_name8 != '') {
      $sqlins8 = "insert into customerbill(consignee_name,state,state_type,gstin,consignee_address,place,invoice_no,invoice_date,eway_bill,hsn_code,vehicle_no,despatched_from,despatched_to,transport_name,transport_gstin,carton_from_to,cracker_name,carton,carton_contents,qty,rate,per,amount,total_carton,good_value,discount,discount_amount,taxable_value,igst,igst_amount,cgst,cgst_amount,sgst,sgst_amount,round_off,net_amount) values('$consignee_name','$state','$state_type','$gstin','$consignee_address','$place','$invoice_no','$invoice_date','$eway_bill','$hsn_code','$vehicle_no','$despatched_from','$despatched_to','$transport_name','$transport_gstin','$carton_from_to8','$cracker_name8','$carton8','$carton_contents8','$qty8','$rate8','$per8','$amount8','$total_carton','$good_value','$discount','$discount_amount','$taxable_value','$igst','$igst_amount','$cgst','$cgst_amount','$sgst','$sgst_amount','$round_off','$net_amount')";
      $exesql8 = mysqli_query($con, $sqlins8);
    }
    if ($cracker_name9 != '') {
      $sqlins9 = "insert into customerbill(consignee_name,state,state_type,gstin,consignee_address,place,invoice_no,invoice_date,eway_bill,hsn_code,vehicle_no,despatched_from,despatched_to,transport_name,transport_gstin,carton_from_to,cracker_name,carton,carton_contents,qty,rate,per,amount,total_carton,good_value,discount,discount_amount,taxable_value,igst,igst_amount,cgst,cgst_amount,sgst,sgst_amount,round_off,net_amount) values('$consignee_name','$state','$state_type','$gstin','$consignee_address','$place','$invoice_no','$invoice_date','$eway_bill','$hsn_code','$vehicle_no','$despatched_from','$despatched_to','$transport_name','$transport_gstin','$carton_from_to9','$cracker_name9','$carton9','$carton_contents9','$qty9','$rate9','$per9','$amount9','$total_carton','$good_value','$discount','$discount_amount','$taxable_value','$igst','$igst_amount','$cgst','$cgst_amount','$sgst','$sgst_amount','$round_off','$net_amount')";
      $exesql9 = mysqli_query($con, $sqlins9);
    }
  } else {
    if ($cracker_name != '') {
      $sqlins = "update customerbill set consignee_name='$consignee_name',state='$state',state_type='$state_type',gstin='$gstin',consignee_address='$consignee_address',place='$place',invoice_no='$invoice_no',invoice_date='$invoice_date',eway_bill='$eway_bill',hsn_code='$hsn_code',vehicle_no='$vehicle_no',despatched_from='$despatched_from',despatched_to='$despatched_to',transport_name='$transport_name',transport_gstin='$transport_gstin',carton_from_to='$carton_from_to',cracker_name='$cracker_name',carton='$carton',carton_contents='$carton_contents',qty='$qty',rate='$rate',per='$per',amount='$amount',total_carton='$total_carton',good_value='$good_value',discount='$discount',discount_amount='$discount_amount',taxable_value='$taxable_value',igst='$igst',igst_amount='$igst_amount',cgst='$cgst',cgst_amount='$cgst_amount',sgst='$sgst',sgst_amount='$sgst_amount',round_off='$round_off',net_amount='$net_amount' where id=$id";
      $exesql = mysqli_query($con, $sqlins);
    }
    if ($cracker_name1 != '') {
      $sqlins1 = "update customerbill set consignee_name='$consignee_name',state='$state',state_type='$state_type',gstin='$gstin',consignee_address='$consignee_address',place='$place',invoice_no='$invoice_no',invoice_date='$invoice_date',eway_bill='$eway_bill',hsn_code='$hsn_code',vehicle_no='$vehicle_no',despatched_from='$despatched_from',despatched_to='$despatched_to',transport_name='$transport_name',transport_gstin='$transport_gstin',carton_from_to='$carton_from_to1',cracker_name='$cracker_name1',carton='$carton1',carton_contents='$carton_contents1',qty='$qty1',rate='$rate1',per='$per1',amount='$amount1',total_carton='$total_carton',good_value='$good_value',discount='$discount',discount_amount='$discount_amount',taxable_value='$taxable_value',igst='$igst',igst_amount='$igst_amount',cgst='$cgst',cgst_amount='$cgst_amount',sgst='$sgst',sgst_amount='$sgst_amount',round_off='$round_off',net_amount='$net_amount' where id=$id";
      $exesql1 = mysqli_query($con, $sqlins1);
    }
    if ($cracker_name2 != '') {
      $sqlins2 = "update customerbill set consignee_name='$consignee_name',state='$state',state_type='$state_type',gstin='$gstin',consignee_address='$consignee_address',place='$place',invoice_no='$invoice_no',invoice_date='$invoice_date',eway_bill='$eway_bill',hsn_code='$hsn_code',vehicle_no='$vehicle_no',despatched_from='$despatched_from',despatched_to='$despatched_to',transport_name='$transport_name',transport_gstin='$transport_gstin',carton_from_to='$carton_from_to2',cracker_name='$cracker_name2',carton='$carton2',carton_contents='$carton_contents2',qty='$qty2',rate='$rate2',per='$per2',amount='$amount2',total_carton='$total_carton',good_value='$good_value',discount='$discount',discount_amount='$discount_amount',taxable_value='$taxable_value',igst='$igst',igst_amount='$igst_amount',cgst='$cgst',cgst_amount='$cgst_amount',sgst='$sgst',sgst_amount='$sgst_amount',round_off='$round_off',net_amount='$net_amount' where id=$id";
      $exesql2 = mysqli_query($con, $sqlins2);
    }
    if ($cracker_name3 != '') {
      $sqlins3 = "update customerbill set consignee_name='$consignee_name',state='$state',state_type='$state_type',gstin='$gstin',consignee_address='$consignee_address',place='$place',invoice_no='$invoice_no',invoice_date='$invoice_date',eway_bill='$eway_bill',hsn_code='$hsn_code',vehicle_no='$vehicle_no',despatched_from='$despatched_from',despatched_to='$despatched_to',transport_name='$transport_name',transport_gstin='$transport_gstin',carton_from_to='$carton_from_to3',cracker_name='$cracker_name3',carton='$carton3',carton_contents='$carton_contents3',qty='$qty3',rate='$rate3',per='$per3',amount='$amount3',total_carton='$total_carton',good_value='$good_value',discount='$discount',discount_amount='$discount_amount',taxable_value='$taxable_value',igst='$igst',igst_amount='$igst_amount',cgst='$cgst',cgst_amount='$cgst_amount',sgst='$sgst',sgst_amount='$sgst_amount',round_off='$round_off',net_amount='$net_amount' where id=$id";
      $exesql3 = mysqli_query($con, $sqlins3);
    }
    if ($cracker_name4 != '') {
      $sqlins4 = "update customerbill set consignee_name='$consignee_name',state='$state',state_type='$state_type',gstin='$gstin',consignee_address='$consignee_address',place='$place',invoice_no='$invoice_no',invoice_date='$invoice_date',eway_bill='$eway_bill',hsn_code='$hsn_code',vehicle_no='$vehicle_no',despatched_from='$despatched_from',despatched_to='$despatched_to',transport_name='$transport_name',transport_gstin='$transport_gstin',carton_from_to='$carton_from_to4',cracker_name='$cracker_name4',carton='$carton4',carton_contents='$carton_contents4',qty='$qty4',rate='$rate4',per='$per4',amount='$amount4',total_carton='$total_carton',good_value='$good_value',discount='$discount',discount_amount='$discount_amount',taxable_value='$taxable_value',igst='$igst',igst_amount='$igst_amount',cgst='$cgst',cgst_amount='$cgst_amount',sgst='$sgst',sgst_amount='$sgst_amount',round_off='$round_off',net_amount='$net_amount' where id=$id";
      $exesql4 = mysqli_query($con, $sqlins4);
    }
    if ($cracker_name5 != '') {
      $sqlins5 = "update customerbill set consignee_name='$consignee_name',state='$state',state_type='$state_type',gstin='$gstin',consignee_address='$consignee_address',place='$place',invoice_no='$invoice_no',invoice_date='$invoice_date',eway_bill='$eway_bill',hsn_code='$hsn_code',vehicle_no='$vehicle_no',despatched_from='$despatched_from',despatched_to='$despatched_to',transport_name='$transport_name',transport_gstin='$transport_gstin',carton_from_to='$carton_from_to5',cracker_name='$cracker_name5',carton='$carton5',carton_contents='$carton_contents5',qty='$qty5',rate='$rate5',per='$per5',amount='$amount5',total_carton='$total_carton',good_value='$good_value',discount='$discount',discount_amount='$discount_amount',taxable_value='$taxable_value',igst='$igst',igst_amount='$igst_amount',cgst='$cgst',cgst_amount='$cgst_amount',sgst='$sgst',sgst_amount='$sgst_amount',round_off='$round_off',net_amount='$net_amount' where id=$id";
      $exesql5 = mysqli_query($con, $sqlins5);
    }
    if ($cracker_name6 != '') {
      $sqlins6 = "update customerbill set consignee_name='$consignee_name',state='$state',state_type='$state_type',gstin='$gstin',consignee_address='$consignee_address',place='$place',invoice_no='$invoice_no',invoice_date='$invoice_date',eway_bill='$eway_bill',hsn_code='$hsn_code',vehicle_no='$vehicle_no',despatched_from='$despatched_from',despatched_to='$despatched_to',transport_name='$transport_name',transport_gstin='$transport_gstin',carton_from_to='$carton_from_to6',cracker_name='$cracker_name6',carton='$carton6',carton_contents='$carton_contents6',qty='$qty6',rate='$rate6',per='$per6',amount='$amount6',total_carton='$total_carton',good_value='$good_value',discount='$discount',discount_amount='$discount_amount',taxable_value='$taxable_value',igst='$igst',igst_amount='$igst_amount',cgst='$cgst',cgst_amount='$cgst_amount',sgst='$sgst',sgst_amount='$sgst_amount',round_off='$round_off',net_amount='$net_amount' where id=$id";
      $exesql6 = mysqli_query($con, $sqlins6);
    }
    if ($cracker_name7 != '') {
      $sqlins7 = "update customerbill set consignee_name='$consignee_name',state='$state',state_type='$state_type',gstin='$gstin',consignee_address='$consignee_address',place='$place',invoice_no='$invoice_no',invoice_date='$invoice_date',eway_bill='$eway_bill',hsn_code='$hsn_code',vehicle_no='$vehicle_no',despatched_from='$despatched_from',despatched_to='$despatched_to',transport_name='$transport_name',transport_gstin='$transport_gstin',carton_from_to='$carton_from_to7',cracker_name='$cracker_name7',carton='$carton7',carton_contents='$carton_contents7',qty='$qty7',rate='$rate7',per='$per7',amount='$amount7',total_carton='$total_carton',good_value='$good_value',discount='$discount',discount_amount='$discount_amount',taxable_value='$taxable_value',igst='$igst',igst_amount='$igst_amount',cgst='$cgst',cgst_amount='$cgst_amount',sgst='$sgst',sgst_amount='$sgst_amount',round_off='$round_off',net_amount='$net_amount' where id=$id";
      $exesql7 = mysqli_query($con, $sqlins7);
    }
    if ($cracker_name8 != '') {
      $sqlins8 = "update customerbill set consignee_name='$consignee_name',state='$state',state_type='$state_type',gstin='$gstin',consignee_address='$consignee_address',place='$place',invoice_no='$invoice_no',invoice_date='$invoice_date',eway_bill='$eway_bill',hsn_code='$hsn_code',vehicle_no='$vehicle_no',despatched_from='$despatched_from',despatched_to='$despatched_to',transport_name='$transport_name',transport_gstin='$transport_gstin',carton_from_to='$carton_from_to8',cracker_name='$cracker_name8',carton='$carton8',carton_contents='$carton_contents8',qty='$qty8',rate='$rate8',per='$per8',amount='$amount8',total_carton='$total_carton',good_value='$good_value',discount='$discount',discount_amount='$discount_amount',taxable_value='$taxable_value',igst='$igst',igst_amount='$igst_amount',cgst='$cgst',cgst_amount='$cgst_amount',sgst='$sgst',sgst_amount='$sgst_amount',round_off='$round_off',net_amount='$net_amount' where id=$id";
      $exesql8 = mysqli_query($con, $sqlins8);
    }
    if ($cracker_name9 != '') {
      $sqlins9 = "update customerbill set consignee_name='$consignee_name',state='$state',state_type='$state_type',gstin='$gstin',consignee_address='$consignee_address',place='$place',invoice_no='$invoice_no',invoice_date='$invoice_date',eway_bill='$eway_bill',hsn_code='$hsn_code',vehicle_no='$vehicle_no',despatched_from='$despatched_from',despatched_to='$despatched_to',transport_name='$transport_name',transport_gstin='$transport_gstin',carton_from_to='$carton_from_to9',cracker_name='$cracker_name9',carton='$carton9',carton_contents='$carton_contents9',qty='$qty9',rate='$rate9',per='$per9',amount='$amount9',total_carton='$total_carton',good_value='$good_value',discount='$discount',discount_amount='$discount_amount',taxable_value='$taxable_value',igst='$igst',igst_amount='$igst_amount',cgst='$cgst',cgst_amount='$cgst_amount',sgst='$sgst',sgst_amount='$sgst_amount',round_off='$round_off',net_amount='$net_amount' where id=$id";
      $exesql9 = mysqli_query($con, $sqlins9);
    }
  }
  if ($exesql || $exe_sql1 || $exesql2 || $exesql3 || $exesql4 || $exesql5 || $exesql6 || $exesql7 || $exesql8 || $exesql9) {
    echo "<script>window.location.href='view-bill.php'</script>";
  }
}
?>