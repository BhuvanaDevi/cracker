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
      $('#qty,#rate,#qty1,#rate1,#qty2,#rate2,#qty3,#rate3,#qty4,#rate4,#qty5,#rate5,#qty6,#rate6,#qty7,#rate7,#qty8,#rate8,#qty9,#rate9,#per,#per1,#per2,#per3,#per4,#per5,#per6,#per7,#per8,#per9').change(function() {

        var cracker_name = $('#cracker_name').val();
        var carton = $('#carton').val();
        var carton_content = $('#carton_contents').val();
        cartoncontent = carton_content.split(" ");
        contentss = cartoncontent[0];
        content_type = cartoncontent[1];

        var qty_type = $('#qty').val();
        qtyvals = qty_type.split(" ");
        qty = qtyvals[0];

        var rate = $('#rate').val();
        var per = $('#per').val();

        if ((cracker_name == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name == '3 1/2 Lakshmi' || cracker_name == '4 Lakshmi') || content_type == "Pocket" || content_type == "Piece") {
          perstring = '"' + per + '"';
          persplit = perstring.split(" ");
          perval = persplit[0].replace('"', "");

          var pers = 1 / parseInt(perval);
          if(cracker_name == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name == '3 1/2 Lakshmi' || cracker_name == '4 Lakshmi' ) {
          var amt= carton * rate;
          }
         else {
              var amt = qty * rate * pers;
        } 
      }
      else {
          var amt = qty * rate;
        }

        $('#amount').val(amt);

        var cracker_name1 = $('#cracker_name1').val();
        var carton1 = $('#carton1').val();
        var carton_content1 = $('#carton_contents1').val();
        cartoncontent1 = carton_content1.split(" ");
        contentss1 = cartoncontent1[0];
        content_type1 = cartoncontent1[1];

        var qty_type1 = $('#qty1').val();
        qtyvals1 = qty_type1.split(" ");
        qty1 = qtyvals1[0];

        var rate1 = $('#rate1').val();
        var per1 = $('#per1').val();

        if (content_type1 == "Pocket" || content_type1 == "Piece") {
          perstring1 = '"' + per1 + '"';
          persplit1 = perstring1.split(" ");
          perval1 = persplit1[0].replace('"', "");

         var pers1 = 1 / parseInt(perval1);
        
          var amt1 = qty1 * rate1 * pers1;
        } else {
          var amt1 = qty1 * rate1;
        }

        $('#amount1').val(amt1);
  
        var cracker_name2 = $('#cracker_name2').val();
        var carton2 = $('#carton2').val();
        var carton_content2 = $('#carton_contents2').val();
        cartoncontent2 = carton_content2.split(" ");
        contentss2 = cartoncontent2[0];
        content_type2 = cartoncontent2[1];

        var qty_type2 = $('#qty2').val();
        qtyvals2 = qty_type2.split(" ");
        qty2 = qtyvals2[0];

        var rate2 = $('#rate2').val();
        var per2 = $('#per2').val();

        if ((cracker_name2 == '2 3/4  Kuruvi') || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name2 == '3 1/2 Lakshmi' || cracker_name2 == '4 Lakshmi' || (content_type2 == "Pocket" || content_type2 == "Piece")) {
          perstring2 = '"' + per2 + '"';
          persplit2 = perstring2.split(" ");
          perval2 = persplit2[0].replace('"', "");

          var pers2 = 1 / parseInt(perval2);
          var amt2 = qty2 * rate2 * pers2;
        } else {
          var amt2 = qty2 * rate2;
        }

        $('#amount2').val(amt2);

        var cracker_name3 = $('#cracker_name3').val();
        var carton3 = $('#carton3').val();
        var carton_content3 = $('#carton_contents3').val();
        cartoncontent3 = carton_content3.split(" ");
        contentss3 = cartoncontent3[0];
        content_type3 = cartoncontent3[1];

        var qty_type3 = $('#qty3').val();
        qtyvals3 = qty_type3.split(" ");
        qty3 = qtyvals3[0];

        var rate3 = $('#rate3').val();
        var per3 = $('#per3').val();

        if ((cracker_name3 == '2 3/4  Kuruvi') || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name3 == '3 1/2 Lakshmi' || cracker_name3 == '4 Lakshmi' || (content_type3 == "Pocket" || content_type3 == "Piece")) {
          perstring3 = '"' + per3 + '"';
          persplit3 = perstring3.split(" ");
          perval3 = persplit3[0].replace('"', "");

          var pers3 = 1 / parseInt(perval3);
          var amt3 = qty3 * rate3 * pers3;
        } else {
          var amt3 = qty3 * rate3;
        }

        $('#amount3').val(amt3);

        var cracker_name4 = $('#cracker_name4').val();
        var carton4 = $('#carton4').val();
        var carton_content4 = $('#carton_contents4').val();
        cartoncontent4 = carton_content4.split(" ");
        contentss4 = cartoncontent4[0];
        content_type4 = cartoncontent4[1];

        var qty_type4 = $('#qty4').val();
        qtyvals4 = qty_type4.split(" ");
        qty4 = qtyvals4[0];

        var rate4 = $('#rate4').val();
        var per4 = $('#per4').val();

        if ((cracker_name4 == '2 3/4  Kuruvi') || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name4 == '3 1/2 Lakshmi' || cracker_name4 == '4 Lakshmi' || (content_type4 == "Pocket" || content_type4 == "Piece")) {
          perstring4 = '"' + per4 + '"';
          persplit4 = perstring4.split(" ");
          perval4 = persplit4[0].replace('"', "");

          var pers4 = 1 / parseInt(perval4);
          var amt4 = qty4 * rate4 * pers4;
        } else {
          var amt4 = qty4 * rate4;
        }

        $('#amount4').val(amt4);

        var cracker_name5 = $('#cracker_name5').val();
        var carton5 = $('#carton5').val();
        var carton_content5 = $('#carton_contents5').val();
        cartoncontent5 = carton_content5.split(" ");
        contentss5 = cartoncontent5[0];
        content_type5 = cartoncontent5[1];

        var qty_type5 = $('#qty5').val();
        qtyvals5 = qty_type5.split(" ");
        qty5 = qtyvals5[0];

        var rate5 = $('#rate5').val();
        var per5 = $('#per5').val();

        if ((cracker_name5 == '2 3/4  Kuruvi') || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name5 == '3 1/2 Lakshmi' || cracker_name5 == '4 Lakshmi' || (content_type5 == "Pocket" || content_type5 == "Piece")) {
          perstring5 = '"' + per5 + '"';
          persplit5 = perstring5.split(" ");
          perval5 = persplit5[0].replace('"', "");

          var pers5 = 1 / parseInt(perval5);
          var amt5 = qty5 * rate5 * pers5;
        } else {
          var amt5 = qty5 * rate5;
        }

        $('#amount5').val(amt5);

        var cracker_name6 = $('#cracker_name6').val();
        var carton6 = $('#carton6').val();
        var carton_content6 = $('#carton_contents6').val();
        cartoncontent6 = carton_content6.split(" ");
        contentss6 = cartoncontent6[0];
        content_type6 = cartoncontent6[1];

        var qty_type6 = $('#qty6').val();
        qtyvals6 = qty_type6.split(" ");
        qty6 = qtyvals6[0];

        var rate6 = $('#rate6').val();
        var per6 = $('#per6').val();

        if ((cracker_name6 == '2 3/4  Kuruvi') || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name6 == '3 1/2 Lakshmi' || cracker_name6 == '4 Lakshmi' || (content_type6 == "Pocket" || content_type6 == "Piece")) {
          perstring6 = '"' + per6 + '"';
          persplit6 = perstring6.split(" ");
          perval6 = persplit6[0].replace('"', "");

          var pers6 = 1 / parseInt(perval6);
          var amt6 = qty6 * rate6 * pers6;
        } else {
          var amt6 = qty6 * rate6;
        }

        $('#amount6').val(amt6);

        var cracker_name7 = $('#cracker_name7').val();
        var carton7 = $('#carton7').val();
        var carton_content7 = $('#carton_contents7').val();
        cartoncontent7 = carton_content7.split(" ");
        contentss7 = cartoncontent7[0];
        content_type7 = cartoncontent7[1];

        var qty_type7 = $('#qty7').val();
        qtyvals7 = qty_type7.split(" ");
        qty7 = qtyvals7[0];

        var rate7 = $('#rate7').val();
        var per7 = $('#per7').val();

        if ((cracker_name7 == '2 3/4  Kuruvi') || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name7 == '3 1/2 Lakshmi' || cracker_name7 == '4 Lakshmi' || (content_type7 == "Pocket" || content_type7 == "Piece")) {
          perstring7 = '"' + per7 + '"';
          persplit7 = perstring7.split(" ");
          perval7 = persplit7[0].replace('"', "");

          var pers7 = 1 / parseInt(perval7);
          var amt7 = qty7 * rate7 * pers7;
        } else {
          var amt7 = qty7 * rate7;
        }

        $('#amount7').val(amt7);

        var cracker_name8 = $('#cracker_name8').val();
        var carton8 = $('#carton8').val();
        var carton_content8 = $('#carton_contents8').val();
        cartoncontent8 = carton_content8.split(" ");
        contentss8 = cartoncontent8[0];
        content_type8 = cartoncontent8[1];

        var qty_type8 = $('#qty8').val();
        qtyvals8 = qty_type8.split(" ");
        qty8 = qtyvals8[0];

        var rate8 = $('#rate8').val();
        var per8 = $('#per8').val();

        if ((cracker_name8 == '2 3/4  Kuruvi') || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name8 == '3 1/2 Lakshmi' || cracker_name8 == '4 Lakshmi' || (content_type8 == "Pocket" || content_type8 == "Piece")) {
          perstring8 = '"' + per8 + '"';
          persplit8 = perstring8.split(" ");
          perval8 = persplit8[0].replace('"', "");

          var pers8 = 1 / parseInt(perval8);
          var amt8 = qty8 * rate8 * pers8;
        } else {
          var amt8 = qty8 * rate8;
        }

        $('#amount8').val(amt8);


        var cracker_name9 = $('#cracker_name9').val();
        var carton9 = $('#carton9').val();
        var carton_content9 = $('#carton_contents9').val();
        cartoncontent9 = carton_content9.split(" ");
        contentss9 = cartoncontent9[0];
        content_type9 = cartoncontent9[1];

        var qty_type9 = $('#qty9').val();
        qtyvals9 = qty_type9.split(" ");
        qty9 = qtyvals9[0];

        var rate9 = $('#rate9').val();
        var per9 = $('#per9').val();

        if ((cracker_name9 == '2 3/4  Kuruvi') || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name9 == '3 1/2 Lakshmi' || cracker_name9 == '4 Lakshmi' || (content_type9 == "Pocket" || content_type9 == "Piece")) {
          perstring9 = '"' + per9 + '"';
          persplit9 = perstring9.split(" ");
          perval9 = persplit9[0].replace('"', "");

          var pers9 = 1 / parseInt(perval9);
          var amt9 = qty9 * rate9 * pers9;
        } else {
          var amt9 = qty9 * rate9;
        }

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
        var state_type = $('#state_type').val();
              console.log(state_type);
              var igst = $('#igst').val();
              var sgst = $('#sgst').val();
                var cgst = $('#cgst').val();
              
                console.log(igst+""+sgst+""+cgst);
               if (state_type == "Interstate") {
                $('#cgst').val('');
                $('#sgst').val('');
                $('#cgst_amount').val('');
                $('#sgst_amount').val('');

                var caligst = (igst * taxable) / 100;
                $('#igst_amount').val(caligst);

                var tax = parseFloat(caligst);
                var netamount = (parseFloat(taxable)) + parseFloat(tax);
                $('#net_amount').val(Math.round(netamount));
                var netfloor = Math.floor(tax);
                var netfix = tax.toFixed(2);

                $('#round_off').val((netfloor - netfix).toFixed(2));

              } else if (state_type == "Intrastate") {
                $('#igst').val('');
                $('#igst_amount').val('');
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
              $('#place').val(response.data.place+" - "+response.data.pincode);
              $('#consignee_address').val(response.data.address1 + " " + response.data.address2);
            }
            if (response.msg == "Failure") {}
          }
        });
      });


      $('#carton,#carton_contents,#carton1,#carton_contents1,#carton2,#carton_contents2,#carton3,#carton_contents3,#carton4,#carton_contents4,#carton5,#carton_contents5,#carton6,#carton_contents6,#carton7,#carton_contents7,#carton8,#carton_contents8,#carton9,#carton_contents9').change(function() {
        var cracker_name = $('#cracker_name').val();
        var cracker_name1 = $('#cracker_name1').val();
        var cracker_name2 = $('#cracker_name2').val();
        var cracker_name3 = $('#cracker_name3').val();
        var cracker_name4 = $('#cracker_name4').val();
        var cracker_name5 = $('#cracker_name5').val();
        var cracker_name6 = $('#cracker_name6').val();
        var cracker_name7 = $('#cracker_name7').val();
        var cracker_name8 = $('#cracker_name8').val();
        var cracker_name9 = $('#cracker_name9').val();

        var carton = $('#carton').val();
        var carton_content = $('#carton_contents').val();
        cartoncontent = carton_content.split(" ");
        contentss = cartoncontent[0];
        content_type = cartoncontent[1];
        var rate = $('#rate').val();
        var per = $('#per').val();

        var qty = parseInt(carton) * parseInt(contentss);
        $('#qty').val(qty + " " + content_type);
        
        if ((cracker_name == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name == '3 1/2 Lakshmi' || cracker_name == '4 Lakshmi') || (content_type == "Pocket" || content_type == "Piece")) {
          perstring = '"' + per + '"';
          persplit = perstring.split(" ");
          perval = persplit[0].replace('"', "");

          var pers = 1 / parseInt(perval);
          if(cracker_name == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name == '3 1/2 Lakshmi' || cracker_name == '4 Lakshmi') {
            var amt = carton * rate ;
      }
          else {
          var amt = qty * rate * pers;
          }
        } else {
          var amt = qty * rate;
        }

        $('#amount').val(amt);

        var carton1 = $('#carton1').val();
        var carton_content1 = $('#carton_contents1').val();
        cartoncontent1 = carton_content1.split(" ");
        contentss1 = cartoncontent1[0];
        content_type1 = cartoncontent1[1];

        var qty1 = parseInt(carton1) * parseInt(contentss1);
        $('#qty1').val(qty1+" "+content_type1);

        var rate1 = $('#rate1').val();
        var per1 = $('#per1').val();

        if ((cracker_name1 == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name1 == '3 1/2 Lakshmi' || cracker_name1 == '4 Lakshmi') || (content_type1 == "Pocket" || content_type1 == "Piece")) {
          perstring1 = '"' + per1 + '"';
          persplit1 = perstring1.split(" ");
          perval1 = persplit1[0].replace('"', "");

          var pers1 = 1 / parseInt(perval1);
          if(cracker_name1 == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name1 == '3 1/2 Lakshmi' || cracker_name1 == '4 Lakshmi') {
            var amt1 = carton1 * rate1 ;
      }
          else {
            console.log(pers1);
          var amt1 = qty1 * rate1 * pers1;
          }
        } else {
          var amt1 = qty1 * rate1;
        }

        $('#amount1').val(amt1);

        var carton2 = $('#carton2').val();
        var carton_content2 = $('#carton_contents2').val();
        cartoncontent2 = carton_content2.split(" ");
        contentss2 = cartoncontent2[0];
        content_type2 = cartoncontent2[1];

        var qty2 = parseInt(carton2) * parseInt(contentss2);
        $('#qty2').val(qty2+" "+content_type2);

        var rate2 = $('#rate2').val();
        var per2 = $('#per2').val();

        if ((cracker_name2 == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name2 == '3 1/2 Lakshmi' || cracker_name2 == '4 Lakshmi') || (content_type2 == "Pocket" || content_type2 == "Piece")) {
          perstring2 = '"' + per2 + '"';
          persplit2 = perstring2.split(" ");
          perval2 = persplit2[0].replace('"', "");

          var pers2 = 1 / parseInt(perval2);
          if(cracker_name2 == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name2 == '3 1/2 Lakshmi' || cracker_name2 == '4 Lakshmi') {
            var amt2 = carton2 * rate2 ;
      }
          else {
          var amt2 = qty2 * rate2 * pers2;
          }
        } else {
          var amt2 = qty2 * rate2;
        }

        $('#amount2').val(amt2);

        var carton3 = $('#carton3').val();
        var carton_content3 = $('#carton_contents3').val();
        cartoncontent3 = carton_content3.split(" ");
        contentss3 = cartoncontent3[0];
        content_type3 = cartoncontent3[1];

        var qty3 = parseInt(carton3) * parseInt(contentss3);
        $('#qty3').val(qty3+" "+content_type3);

        var rate3 = $('#rate3').val();
        var per3 = $('#per3').val();

        if ((cracker_name3 == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name3 == '3 1/2 Lakshmi' || cracker_name3 == '4 Lakshmi') || (content_type3 == "Pocket" || content_type3 == "Piece")) {
                perstring3 = '"' + per3 + '"';
          persplit3 = perstring3.split(" ");
          perval3 = persplit3[0].replace('"', "");

          var pers3 = 1 / parseInt(perval3);
          if(cracker_name3 == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name3 == '3 1/2 Lakshmi' || cracker_name3 == '4 Lakshmi') {
            var amt3 = carton3 * rate3 ;
      }
          else {
          var amt3 = qty3 * rate3 * pers3;
          }
        } else {
          var amt3 = qty3 * rate3;
        }

        $('#amount3').val(amt3);

        var carton4 = $('#carton4').val();
        var carton_content4 = $('#carton_contents4').val();
        cartoncontent4 = carton_content4.split(" ");
        contentss4 = cartoncontent4[0];
        content_type4 = cartoncontent4[1];

        var qty4 = parseInt(carton4) * parseInt(contentss4);
        $('#qty4').val(qty4+" "+content_type4);

        var rate4 = $('#rate4').val();
        var per4 = $('#per4').val();

        if ((cracker_name4 == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name4 == '3 1/2 Lakshmi' || cracker_name4 == '4 Lakshmi') || (content_type4 == "Pocket" || content_type4 == "Piece")) {
          perstring4 = '"' + per4 + '"';
          persplit4 = perstring4.split(" ");
          perval4 = persplit4[0].replace('"', "");

          var pers4 = 1 / parseInt(perval4);
          if(cracker_name4 == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name4 == '3 1/2 Lakshmi' || cracker_name4 == '4 Lakshmi') {
            var amt4 = carton4 * rate4 ;
      }
          else {
          var amt4 = qty4 * rate4 * pers4;
          }
        } else {
          var amt4 = qty4 * rate4;
        }
        $('#amount4').val(amt4);

        var carton5 = $('#carton5').val();
        var carton_content5 = $('#carton_contents5').val();
        cartoncontent5 = carton_content5.split(" ");
        contentss5 = cartoncontent5[0];
        content_type5 = cartoncontent5[1];

        var qty5 = parseInt(carton5) * parseInt(contentss5);

        $('#qty5').val(qty5+" "+content_type5);
        var rate5 = $('#rate5').val();
        var per5 = $('#per5').val();

        if ((cracker_name5 == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name5 == '3 1/2 Lakshmi' || cracker_name5 == '4 Lakshmi') || (content_type5 == "Pocket" || content_type5 == "Piece")) {
          perstring5 = '"' + per5 + '"';
          persplit5 = perstring5.split(" ");
          perval5 = persplit5[0].replace('"', "");

          var pers5 = 1 / parseInt(perval5);
          if(cracker_name5 == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name5 == '3 1/2 Lakshmi' || cracker_name5 == '4 Lakshmi') {
            var amt5= carton5 * rate5 ;
      }
          else {
          var amt5 = qty5 * rate5 * pers5;
          }
        } else {
          var amt5 = qty5 * rate5;
        }
        $('#amount5').val(amt5);

        var carton6 = $('#carton6').val();
        var carton_content6 = $('#carton_contents6').val();
        cartoncontent6 = carton_content6.split(" ");
        contentss6 = cartoncontent6[0];
        content_type6 = cartoncontent6[1];

        var qty6 = parseInt(carton6) * parseInt(contentss6);

        $('#qty6').val(qty6+" "+content_type6);
        var rate6 = $('#rate6').val();
        var per6 = $('#per2').val();

        if ((cracker_name6 == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name6 == '3 1/2 Lakshmi' || cracker_name6 == '4 Lakshmi') || (content_type6 == "Pocket" || content_type6 == "Piece")) {
          perstring6 = '"' + per6 + '"';
          persplit6 = perstring6.split(" ");
          perval6 = persplit6[0].replace('"', "");

          var pers6 = 1 / parseInt(perval6);
          if(cracker_name6 == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name6 == '3 1/2 Lakshmi' || cracker_name6 == '4 Lakshmi') {
            var amt6 = carton6 * rate6 ;
      }
          else {
          var amt6 = qty6 * rate6 * pers6;
          }
        } else {
          var amt6 = qty6 * rate6;
        }

        $('#amount6').val(amt6);

        var carton7 = $('#carton7').val();
        var carton_content7 = $('#carton_contents7').val();
        cartoncontent7 = carton_content7.split(" ");
        contentss7 = cartoncontent7[0];
        content_type7 = cartoncontent7[1];

        var qty7 = parseInt(carton7) * parseInt(contentss7);

        $('#qty7').val(qty7+" "+content_type7);
        var rate7 = $('#rate7').val();
        var per7 = $('#per7').val();

        if ((cracker_name7 == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name7 == '3 1/2 Lakshmi' || cracker_name7 == '4 Lakshmi') || (content_type7 == "Pocket" || content_type7 == "Piece")) {
          perstring7 = '"' + per7 + '"';
          persplit7 = perstring7.split(" ");
          perval7 = persplit7[0].replace('"', "");

          var pers7 = 1 / parseInt(perval7);
          if(cracker_name7 == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name7 == '3 1/2 Lakshmi' || cracker_name7 == '4 Lakshmi') {
            var amt7 = carton7 * rate7 ;
      }
          else {
          var amt7 = qty7 * rate7 * pers7;
          }
        } else {
          var amt7 = qty7 * rate7;
        }

        $('#amount7').val(amt7);

        var carton8 = $('#carton8').val();
        var carton_content8 = $('#carton_contents8').val();
        cartoncontent8 = carton_content8.split(" ");
        contentss8 = cartoncontent8[0];
        content_type8 = cartoncontent8[1];

        var qty8 = parseInt(carton8) * parseInt(contentss8);
        $('#qty8').val(qty8+" "+content_type8);

        var rate8 = $('#rate8').val();
        var per8 = $('#per8').val();

        if ((cracker_name8 == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name8 == '3 1/2 Lakshmi' || cracker_name8 == '4 Lakshmi') || (content_type8 == "Pocket" || content_type8 == "Piece")) {
          perstring8 = '"' + per8 + '"';
          persplit8 = perstring8.split(" ");
          perval8 = persplit8[0].replace('"', "");

          var pers8 = 1 / parseInt(perval8);
          if(cracker_name8 == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name8 == '3 1/2 Lakshmi' || cracker_name8 == '4 Lakshmi') {
            var amt8 = carton8 * rate8 ;
      }
          else {
          var amt8 = qty8 * rate8 * pers8;
          }
        } else {
          var amt8 = qty8 * rate8;
        }

        $('#amount8').val(amt8);

        var carton9 = $('#carton9').val();
        var carton_content9 = $('#carton_contents9').val();
        cartoncontent9 = carton_content9.split(" ");
        contentss9 = cartoncontent9[0];
        content_type9 = cartoncontent9[1];

        var qty9 = parseInt(carton9) * parseInt(contentss9);

        $('#qty9').val(qty9+" "+content_type1);
        var rate9 = $('#rate9').val();
        var per9 = $('#per9').val();

        if ((cracker_name9 == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name9 == '3 1/2 Lakshmi' || cracker_name9 == '4 Lakshmi') || (content_type9 == "Pocket" || content_type9 == "Piece")) {
          perstring9 = '"' + per9 + '"';
          persplit9 = perstring9.split(" ");
          perval9 = persplit9[0].replace('"', "");

          var pers9 = 1 / parseInt(perval9);
          if(cracker_name9 == '2 3/4  Kuruvi' || cracker_name == '2 Sound Cracker' || cracker_name == '3 Sound Cracker' || cracker_name9 == '3 1/2 Lakshmi' || cracker_name9 == '4 Lakshmi') {
            var amt9 = carton9* rate9 ;
      }
          else {
          var amt9 = qty9 * rate9 * pers9;
          }
        } else {
          var amt9 = qty9 * rate9;
        }

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

        if (isNaN(carton) || carton == '') {
          carton = 0;
        }
        if (isNaN(carton1) || carton1 == '') {
          carton1 = 0;
        }
        if (isNaN(carton2) || carton2 == '') {
          carton2 = 0;
        }
        if (isNaN(carton3) || carton3 == '') {
          carton3 = 0;
        }
        if (isNaN(carton4) || carton4 == '') {
          carton4 = 0;
        }
        if (isNaN(carton5) || carton5 == '') {
          carton5 = 0;
        }
        if (isNaN(carton6) || carton6 == '') {
          carton6 = 0;
        }
        if (isNaN(carton7) || carton7 == '') {
          carton7 = 0;
        }
        if (isNaN(carton8) || carton8 == '') {
          carton8 = 0;
        }
        if (isNaN(carton9) || carton9 == '') {
          carton9 = 0;
        }

        $('#total_carton').val(parseInt(carton) + parseInt(carton1) + parseInt(carton2) + parseInt(carton3) + parseInt(carton4) + parseInt(carton5) + parseInt(carton6) + parseInt(carton7) + parseInt(carton8) + parseInt(carton9));

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

              } else if (vals == "Intrastate") {
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
              $sql = "select * from customerbill where invoice_no=$id";
              $exe_sql = mysqli_query($con, $sql);
              $val_sql = mysqli_fetch_all($exe_sql);
              // print_r($val_sql[0][1]);die();
            }
            ?>
            <div class="row col-md-12">
              <div class="form-group col-md-3">
                <label class="control-label">Consignee Name</label>
                <input list="consignee" class="form-control" value="<?= isset($val_sql[0][1]) ? $val_sql[0][1] : "" ?>" name="consignee_name" id="consignee_name" placeholder="Enter consignee name">
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
                <input class="form-control" name="state" id="state" value="<?= isset($val_sql[0][2]) ? $val_sql[0][2] : "" ?>" type="text" placeholder="Enter State">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">GSTIN</label>
                <input class="form-control" value="<?= isset($val_sql[0][4]) ? $val_sql[0][4] : "" ?>" name="gstin" id="gstin" type="text" placeholder="Enter GSTIN">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Consigness Address</label>
                <textarea class="form-control" name="consignee_address" id="consignee_address" placeholder="Enter Consignee Address"><?= isset($val_sql[0][5]) ? $val_sql[0][5] : "" ?></textarea>
              </div>
            </div>
            <div class="row col-md-12">
              <div class="form-group col-md-2">
                <label class="control-label">Places</label>
                <input class="form-control" value="<?= isset($val_sql[0][6]) ? $val_sql[0][6] : "" ?>" name="place" id="place" type="text" placeholder="Enter place">
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
                <input class="form-control" value="<?= isset($val_sql[0][7]) ? $val_sql[0][7] : $inv ?>" type="text" name="invoice_no" id="invoice_no" placeholder="Invoice No">
              </div>
              <div class="form-group col-md-2">
                <label class="control-label">Invoice Date</label>
                <?php $date = date('d-m-Y'); ?>
                <input class="form-control" value="<?= isset($val_sql[0][8]) ? $val_sql[0][8] : $date ?>" type="date" name="invoice_date" id="invoice_date" placeholder="">
              </div>
              <div class="form-group col-md-2">
                <label class="control-label">E-Way Bill</label>
                <input class="form-control" value="<?= isset($val_sql[0][9]) ? $val_sql[0][9] : "" ?>" type="text" name="eway_bill" id="eway_bill" placeholder="Enter E-way Bill">
              </div>
              <div class="form-group col-md-2">
                <label class="control-label">HSN Code</label>
                <input class="form-control" value="<?= isset($val_sql[0][10]) ? $val_sql[0][10] : "3604" ?>" type="text" name="hsn_code" id="hsn_code" placeholder="Enter HSN Code">
              </div>
              <div class="form-group col-md-2">
                <label class="control-label">Vehicle No</label>
                <input class="form-control" value="<?= isset($val_sql[0][11]) ? $val_sql[0][11] : "" ?>" type="text" name="vehicle_no" id="vehicle_no" placeholder="Enter Vehicle No">
              </div>
            </div>
            <div class="row col-md-12">
              <div class="form-group col-md-2">
                <label class="control-label">Despatched From</label>
                <input class="form-control" type="text" value="<?= isset($val_sql[0][12]) ? $val_sql[0][12] : "" ?>" name="despatched_from" id="despatched_from" placeholder="Enter Despateched From">
              </div>
              <div class="form-group col-md-2">
                <label class="control-label">Despatched To</label>
                <input class="form-control" type="text" value="<?= isset($val_sql[0][13]) ? $val_sql[0][13] : "" ?>" name="despatched_to" id="despatched_to" placeholder="Enter Despateched To">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Transport Name</label>
                <input class="form-control" value="<?= isset($val_sql[0][14]) ? $val_sql[0][14] : "" ?>" type="text" name="transport_name" id="transport_name" placeholder="Enter Transport Name">
              </div>
              <div class="form-group col-md-2">
                <label class="control-label">Transport GSTIN</label>
                <input class="form-control" value="<?= isset($val_sql[0][15]) ? $val_sql[0][15] : "" ?>" type="text" name="transport_gstin" id="transport_gstin" placeholder="Enter Transport GSTIN">
              </div>
              <div class="form-group col-md-3">
                <?= $states = isset($val_sql[0][3]) ? $val_sql[0][3] : ""; ?>
                <label class="control-label">GST Type</label>
                <select class="form-control" name="state_type" id="state_type">
                  <option value="" disabled selected>Select State</option>
                  <option value="Interstate" <?=($states=="Interstate") ? 'Selected' : ''?>>Interstate</option>
                  <option value="Intrastate" <?=($states=="Intrastate") ? 'Selected' : ''?>>Intrastate</option>
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
                      <label class="control-label">Particulars</label>
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
                        <input class="form-control" type="text" value="<?= isset($val_sql[0][16]) ? $val_sql[0][16] : "" ?>" name="carton_from_to" id="carton_from_to" placeholder="Carton From - To">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="cracker" class="form-control" value="<?= isset($val_sql[0][17]) ? $val_sql[0][17] : "" ?>" name="cracker_name" id="cracker_name" placeholder="Enter cracker name">
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
                        <input class="form-control" type="text" name="carton" id="carton" value="<?= isset($val_sql[0][18]) ? $val_sql[0][18] : "" ?>" placeholder="Carton">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="carton_contents" id="carton_contents" value="<?= isset($val_sql[0][19]) ? $val_sql[0][19] : "" ?>" placeholder="Contents">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" value="<?= isset($val_sql[0][21]) ? $val_sql[0][21] : "" ?>" name="qty" id="qty" placeholder="Qty">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="rate" id="rate" value="<?= isset($val_sql[0][22]) ? $val_sql[0][22] : "" ?>" placeholder="Rate">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="pers" class="form-control" value="<?= isset($val_sql[0][23]) ? $val_sql[0][23] : "" ?>" name="per" id="per" placeholder="Enter Per">
                        <datalist id="pers">
                          <option value="Unit">Unit</option>
                          <option value="Pocket">Pocket</option>
                          <option value="Piece">Piece</option>
                        </datalist>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="amount" id="amount" value="<?= isset($val_sql[0][24]) ? $val_sql[0][24] : "" ?>" placeholder="Amount">
                      </div>
                    </div>

                    <div class="row form-group col-md-12">
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" value="<?= isset($val_sql[1][16]) ? $val_sql[1][16] : "" ?>" name="carton_from_to1" id="carton_from_to1" placeholder="Carton From - To">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="cracker1" class="form-control" value="<?= isset($val_sql[1][17]) ? $val_sql[1][17] : "" ?>" name="cracker_name1" id="cracker_name1" placeholder="Enter cracker name">
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
                        <input class="form-control" type="text" name="carton1" id="carton1" value="<?= isset($val_sql[1][18]) ? $val_sql[1][18] : "" ?>" placeholder="Carton">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="carton_contents1" id="carton_contents1" value="<?= isset($val_sql[1][19]) ? $val_sql[1][19] : "" ?>" placeholder="Contents">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" value="<?= isset($val_sql[1][21]) ? $val_sql[1][21] : "" ?>" name="qty1" id="qty1" placeholder="Qty">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="rate1" id="rate1" value="<?= isset($val_sql[1][22]) ? $val_sql[1][22] : "" ?>" placeholder="Rate">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="pers" class="form-control" value="<?= isset($val_sql[1][23]) ? $val_sql[1][23]: "" ?>" name="per1" id="per1" placeholder="Enter Per">
                        <datalist id="pers">
                          <option value="Unit">Unit</option>
                          <option value="Pocket">Pocket</option>
                          <option value="Piece">Piece</option>
                        </datalist>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="amount1" id="amount1" value="<?= isset($val_sql[1][24]) ? $val_sql[1][24] : "" ?>" placeholder="Amount">
                      </div>
                    </div>

                    <div class="row form-group col-md-12">
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" value="<?= isset($val_sql[2][16]) ? $val_sql[2][16] : "" ?>" name="carton_from_to2" id="carton_from_to2" placeholder="Carton From - To">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="cracker2" class="form-control" value="<?= isset($val_sql[2][17]) ? $val_sql[2][17] : "" ?>" name="cracker_name2" id="cracker_name2" placeholder="Enter cracker name">
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
                        <input class="form-control" type="text" name="carton2" id="carton2" value="<?= isset($val_sql[2][18]) ? $val_sql[2][18]: "" ?>" placeholder="Carton">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="carton_contents2" id="carton_contents2" value="<?= isset($val_sql[2][19]) ? $val_sql[2][19] : "" ?>" placeholder="Contents">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" value="<?= isset($val_sql[2][21]) ? $val_sql[2][21] : "" ?>" name="qty2" id="qty2" placeholder="Qty">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="rate2" id="rate2" value="<?= isset($val_sql[2][22]) ? $val_sql[2][22] : "" ?>" placeholder="Rate">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="pers" class="form-control" value="<?= isset($val_sql[2][23]) ? $val_sql[2][23] : "" ?>" name="per2" id="per2" placeholder="Enter Per">
                        <datalist id="pers">
                          <option value="Unit">Unit</option>
                          <option value="Pocket">Pocket</option>
                          <option value="Piece">Piece</option>
                        </datalist>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="amount2" id="amount2" value="<?= isset($val_sql[2][24]) ? $val_sql[2][24] : "" ?>" placeholder="Amount">
                      </div>
                    </div>

                    <div class="row form-group col-md-12">
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" value="<?= isset($val_sql[3][16]) ? $val_sql[3][16] : "" ?>" name="carton_from_to3" id="carton_from_to3" placeholder="Carton From - To">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="cracker3" class="form-control" value="<?= isset($val_sql[3][17]) ? $val_sql[3][17] : "" ?>" name="cracker_name3" id="cracker_name3" placeholder="Enter cracker name">
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
                        <input class="form-control" type="text" name="carton3" id="carton3" value="<?= isset($val_sql[3][18]) ? $val_sql[3][18] : "" ?>" placeholder="Carton">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="carton_contents3" id="carton_contents3" value="<?= isset($val_sql[3][19]) ? $val_sql[3][19] : "" ?>" placeholder="Contents">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" value="<?= isset($val_sql[3][21]) ? $val_sql[3][21] : "" ?>" name="qty3" id="qty3" placeholder="Qty">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="rate3" id="rate3" value="<?= isset($val_sql[3][22]) ? $val_sql[3][22] : "" ?>" placeholder="Rate">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="pers" class="form-control" value="<?= isset($val_sql[3][23]) ? $val_sql[3][23] : "" ?>" name="per3" id="per3" placeholder="Enter Per">
                        <datalist id="pers">
                          <option value="Unit">Unit</option>
                          <option value="Pocket">Pocket</option>
                          <option value="Piece">Piece</option>
                        </datalist>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="amount3" id="amount3" value="<?= isset($val_sql[3][24]) ? $val_sql[3][24] : "" ?>" placeholder="Amount">
                      </div>
                    </div>

                    <div class="row form-group col-md-12">
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" value="<?= isset($val_sql[4][16]) ? $val_sql[4][16] : "" ?>" name="carton_from_to4" id="carton_from_to4" placeholder="Carton From - To">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="cracker4" class="form-control" value="<?= isset($val_sql[4][17]) ? $val_sql[4][17] : "" ?>" name="cracker_name4" id="cracker_name4" placeholder="Enter cracker name">
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
                        <input class="form-control" type="text" name="carton4" id="carton4" value="<?= isset($val_sql[4][18]) ? $val_sql[4][18] : "" ?>" placeholder="Carton">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="carton_contents4" id="carton_contents4" value="<?= isset($val_sql[4][19]) ? $val_sql[4][19] : "" ?>" placeholder="Contents">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" value="<?= isset($val_sql[4][21]) ? $val_sql[4][21] : "" ?>" name="qty4" id="qty4" placeholder="Qty">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="rate4" id="rate4" value="<?= isset($val_sql[4][22]) ? $val_sql[4][22] : "" ?>" placeholder="Rate">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="pers" class="form-control" value="<?= isset($val_sql[4][23]) ? $val_sql[4][23]: "" ?>" name="per4" id="per4" placeholder="Enter Per">
                        <datalist id="pers">
                          <option value="Unit">Unit</option>
                          <option value="Pocket">Pocket</option>
                          <option value="Piece">Piece</option>
                        </datalist>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="amount4" id="amount4" value="<?= isset($val_sql[4][24]) ? $val_sql[4][24] : "" ?>" placeholder="Amount">
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
                        <input class="form-control" type="text" value="<?= isset($val_sql[5][16]) ? $val_sql[5][16] : "" ?>" name="carton_from_to5" id="carton_from_to5" placeholder="Carton From - To">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="cracker5" class="form-control" value="<?= isset($val_sql[5][17]) ? $val_sql[5][17] : "" ?>" name="cracker_name5" id="cracker_name5" placeholder="Enter cracker name">
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
                        <input class="form-control" type="text" name="carton5" id="carton5" value="<?= isset($val_sql[5][18]) ? $val_sql[5][18] : "" ?>" placeholder="Carton">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="carton_contents5" id="carton_contents5" value="<?= isset($val_sql[5][19]) ? $val_sql[5][19] : "" ?>" placeholder="Contents">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" value="<?= isset($val_sql[5][21]) ? $val_sql[5][21] : "" ?>" name="qty5" id="qty5" placeholder="Qty">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="rate5" id="rate5" value="<?= isset($val_sql[5][22]) ? $val_sql[5][22] : "" ?>" placeholder="Rate">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="pers" class="form-control" value="<?= isset($val_sql[5][23]) ? $val_sql[5][23]: "" ?>" name="per5" id="per5" placeholder="Enter Per">
                        <datalist id="pers">
                          <option value="Unit">Unit</option>
                          <option value="Pocket">Pocket</option>
                          <option value="Piece">Piece</option>
                        </datalist>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="amount5" id="amount5" value="<?= isset($val_sql[5][24]) ? $val_sql[5][24] : "" ?>" placeholder="Amount">
                      </div>
                    </div>

                    <div class="row form-group col-md-12">
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" value="<?= isset($val_sql[6][16]) ? $val_sql[6][16] : "" ?>" name="carton_from_to6" id="carton_from_to6" placeholder="Carton From - To">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="cracker6" class="form-control" value="<?= isset($val_sql[6][17]) ? $val_sql[6][17] : "" ?>" name="cracker_name6" id="cracker_name6" placeholder="Enter cracker name">
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
                        <input class="form-control" type="text" name="carton6" id="carton6" value="<?= isset($val_sql[6][18]) ? $val_sql[6][18] : "" ?>" placeholder="Carton">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="carton_contents6" id="carton_contents6" value="<?= isset($val_sql[6][19]) ? $val_sql[6][19] : "" ?>" placeholder="Contents">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" value="<?= isset($val_sql[6][21]) ? $val_sql[6][21] : "" ?>" name="qty6" id="qty6" placeholder="Qty">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="rate6" id="rate6" value="<?= isset($val_sql[6][22]) ? $val_sql[6][22] : "" ?>" placeholder="Rate">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="pers" class="form-control" value="<?= isset($val_sql[6][23]) ? $val_sql[6][23] : "" ?>" name="per6" id="per6" placeholder="Enter Per">
                        <datalist id="pers">
                          <option value="Unit">Unit</option>
                          <option value="Pocket">Pocket</option>
                          <option value="Piece">Piece</option>
                        </datalist>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="amount6" id="amount6" value="<?= isset($val_sql[6][24]) ? $val_sql[6][24] : "" ?>" placeholder="Amount">
                      </div>
                    </div>

                    <div class="row form-group col-md-12">
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" value="<?= isset($val_sql[7][16]) ? $val_sql[7][16] : "" ?>" name="carton_from_to7" id="carton_from_to7" placeholder="Carton From - To">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="cracker7" class="form-control" value="<?= isset($val_sql[7][17]) ? $val_sql[7][17] : "" ?>" name="cracker_name7" id="cracker_name7" placeholder="Enter cracker name">
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
                        <input class="form-control" type="text" name="carton7" id="carton7" value="<?= isset($val_sql[7][18]) ? $val_sql[7][18] : "" ?>" placeholder="Carton">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="carton_contents7" id="carton_contents7" value="<?= isset($val_sql[7][19]) ? $val_sql[7][19] : "" ?>" placeholder="Contents">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" value="<?= isset($val_sql[7][21]) ? $val_sql[7][21] : "" ?>" name="qty7" id="qty7" placeholder="Qty">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="rate7" id="rate7" value="<?= isset($val_sql[7][22]) ? $val_sql[7][22] : "" ?>" placeholder="Rate">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="pers" class="form-control" value="<?= isset($val_sql[7][23]) ? $val_sql[7][23] : "" ?>" name="per7" id="per7" placeholder="Enter Per">
                        <datalist id="pers">
                          <option value="Unit">Unit</option>
                          <option value="Pocket">Pocket</option>
                          <option value="Piece">Piece</option>
                        </datalist>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="amount7" id="amount7" value="<?= isset($val_sql[7][24]) ? $val_sql[7][24] : "" ?>" placeholder="Amount">
                      </div>
                    </div>

                    <div class="row form-group col-md-12">
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" value="<?= isset($val_sql[8][16]) ? $val_sql[8][16] : "" ?>" name="carton_from_to8" id="carton_from_to8" placeholder="Carton From - To">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="cracker8" class="form-control" value="<?= isset($val_sql[8][17]) ? $val_sql[8][17] : "" ?>" name="cracker_name8" id="cracker_name8" placeholder="Enter cracker name">
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
                        <input class="form-control" type="text" name="carton8" id="carton8" value="<?= isset($val_sql[8][18]) ? $val_sql[8][18] : "" ?>" placeholder="Carton">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="carton_contents8" id="carton_contents8" value="<?= isset($val_sql[8][19]) ? $val_sql[8][19] : "" ?>" placeholder="Contents">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" value="<?= isset($val_sql[8][21]) ? $val_sql[8][21] : "" ?>" name="qty8" id="qty8" placeholder="Qty">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="rate8" id="rate8" value="<?= isset($val_sql[8][22]) ? $val_sql[8][22] : "" ?>" placeholder="Rate">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="pers" class="form-control" value="<?= isset($val_sql[8][23]) ? $val_sql[8][23] : "" ?>" name="per8" id="per8" placeholder="Enter Per">
                        <datalist id="pers">
                          <option value="Unit">Unit</option>
                          <option value="Pocket">Pocket</option>
                          <option value="Piece">Piece</option>
                        </datalist>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="amount8" id="amount8" value="<?= isset($val_sql[8][24]) ? $val_sql[8][24] : "" ?>" placeholder="Amount">
                      </div>
                    </div>

                    <div class="row form-group col-md-12">
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" value="<?= isset($val_sql[9][16]) ? $val_sql[9][16] : "" ?>" name="carton_from_to9" id="carton_from_to9" placeholder="Carton From - To">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="cracker9" class="form-control" value="<?= isset($val_sql[9][17]) ? $val_sql[9][17] : "" ?>" name="cracker_name9" id="cracker_name9" placeholder="Enter cracker name">
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
                        <input class="form-control" type="text" name="carton9" id="carton9" value="<?= isset($val_sql[9][18]) ? $val_sql[9][18] : "" ?>" placeholder="Carton">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="carton_contents9" id="carton_contents9" value="<?= isset($val_sql[9][19]) ? $val_sql[9][19] : "" ?>" placeholder="Contents">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" value="<?= isset($val_sql[9][21]) ? $val_sql[9][21] : "" ?>" name="qty9" id="qty9" placeholder="Qty">
                      </div>
                      <div class="form-group col-md-1">
                        <input class="form-control" type="text" name="rate9" id="rate9" value="<?= isset($val_sql[9][22]) ? $val_sql[9][22] : "" ?>" placeholder="Rate">
                      </div>
                      <div class="form-group col-md-2">
                        <input list="pers" class="form-control" value="<?= isset($val_sql[9][23]) ? $val_sql[9][23] : "" ?>" name="per9" id="per9" placeholder="Enter Per">
                        <datalist id="pers">
                          <option value="Unit">Unit</option>
                          <option value="Pocket">Pocket</option>
                          <option value="Piece">Piece</option>
                        </datalist>
                      </div>
                      <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="amount9" id="amount9" value="<?= isset($val_sql[9][24]) ? $val_sql[9][24] : "" ?>" placeholder="Amount">
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>


            <div class="row col-md-12">
              <div class="form-group col-md-1"></div>
              <div class="form-group col-md-3 text-right">
                <label class="control-label">Total&nbsp;Cartons</label>
              </div>
              <div class="form-group col-md-1">
                <input class="form-control" type="text" name="total_carton" id="total_carton" value="<?= isset($val_sql[0][25]) ? $val_sql[0][25] : "" ?>" placeholder="Count">
              </div>
              <div class="form-group col-md-2">
              </div>
              <div class="form-group col-md-3 text-right">
                <label class="control-label">Good&nbsp;Value</label>
              </div>
              <div class="form-group col-md-2">
                <input class="form-control" type="text" name="good_value" id="good_value" value="<?= isset($val_sql[0][26]) ? $val_sql[0][26] : "" ?>" placeholder="Taxable">
              </div>
            </div>
            <div class="row col-md-12">
              <div class="form-group col-md-7">
              </div>
              <div class="form-group col-md-2 text-right">
                <input class="form-control" type="text" name="discount" id="discount" value="<?= isset($val_sql[0][28]) ? $val_sql[0][28] : "" ?>" placeholder="Discount">
              </div>
              <div class="form-group col-md-1 text-right">
                <label class="control-label">Less : DISC.</label>
              </div>
              <div class="form-group col-md-2">
                <input class="form-control" type="text" name="discount_amount" id="discount_amount" value="<?= isset($val_sql[0][29]) ? $val_sql[0][29] : "" ?>" placeholder="Discount Amount">
              </div>
            </div>
            <div class="row col-md-12">
              <div class="form-group col-md-10 text-right">
                <label class="control-label">Taxable&nbsp;Value</label>
              </div>
              <div class="form-group col-md-2">
                <input class="form-control" type="text" name="taxable_value" id="taxable_value" value="<?= isset($val_sql[0][30]) ? $val_sql[0][30] : "" ?>" placeholder="Taxable">
              </div>
            </div>
            <div class="row col-md-12">
              <div class="form-group col-md-7">
              </div>
              <div class="form-group col-md-2">
                <input class="form-control" type="text" name="igst" id="igst" value="<?= isset($val_sql[0][31]) ? $val_sql[0][31] : "" ?>" placeholder="Igst">
              </div>
              <div class="form-group col-md-1 text-center">
                <label class="control-label">IGST</label>
              </div>
              <div class="form-group col-md-2">
                <input class="form-control" type="text" name="igst_amount" id="igst_amount" value="<?= isset($val_sql[0][32]) ? $val_sql[0][32] : "" ?>" placeholder="Igst Amount">
              </div>
            </div>
            <div class="row col-md-12">
              <div class="form-group col-md-7">
              </div>
              <div class="form-group col-md-2">
                <input class="form-control" type="text" name="sgst" id="sgst" value="<?= isset($val_sql[0][35]) ? $val_sql[0][35] : "" ?>" placeholder="Sgst">
              </div>
              <div class="form-group col-md-1 text-center">
                <label class="control-label">SGST</label>
              </div>
              <div class="form-group col-md-2">
                <input class="form-control" type="text" name="sgst_amount" id="sgst_amount" value="<?= isset($val_sql[0][36]) ? $val_sql[0][36] : "" ?>" placeholder="Sgst Amount">
              </div>
            </div>
            <div class="row col-md-12">
              <div class="form-group col-md-7">
              </div>
              <div class="form-group col-md-2">
                <input class="form-control" type="text" name="cgst" id="cgst" value="<?= isset($val_sql[0][33]) ? $val_sql[0][33] : "" ?>" placeholder="Cgst">
              </div>
              <div class="form-group col-md-1 text-center">
                <label class="control-label">CGST</label>
              </div>
              <div class="form-group col-md-2">
                <input class="form-control" type="text" name="cgst_amount" id="cgst_amount" value="<?= isset($val_sql[0][34]) ? $val_sql[0][34] : "" ?>" placeholder="Cgst Amount">
              </div>
            </div>
            <div class="row col-md-12">
              <div class="form-group col-md-10 text-right">
                <label class="control-label">Round&nbsp;Off</label>
              </div>
              <div class="form-group col-md-2">
                <input class="form-control" type="text" name="round_off" id="round_off" value="<?= isset($val_sql[0][37]) ? $val_sql[0][37] : "" ?>" placeholder="Round Off">
              </div>
            </div>
            <div class="row col-md-12">
              <div class="form-group col-md-10 text-right">
                <label class="control-label">Net&nbsp;Amount</label>
              </div>
              <div class="form-group col-md-2">
                <input class="form-control" type="text" value="<?= isset($val_sql[0][38]) ? $val_sql[0][38] : "" ?>" name="net_amount" id="net_amount" placeholder="Net Amount">
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