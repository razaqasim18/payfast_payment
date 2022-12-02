<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
        PayFast Test Payment
    </title>
    <script src="PayFast.js" type="text/javascript"></script>
</head>

<body>
    <!--https://www.payfast.co.za/eng/process-->
    <!-- <form method="POST" action="process.php"> -->
    <!-- <input type="hidden" name="payfast_url" id="payfast_url" value="https://sandbox.payfast.co.za/eng/process">
        <input type="hidden" name="merchant_id" id="merchant_id" value="10000100">
        <input type="hidden" name="merchant_key" id="merchant_key" value="46f0cd694581a">
        <input type="hidden" name="return_url" id="return_url"
            value="http://localhost/php/payfast/payment_finished.php">
        <input type="hidden" name="cancel_url" id="cancel_url"
            value="http://localhost/php/payfast/payment_cancelled.php">
        <input type="hidden" name="notify_url" id="notify_url" value="http://localhost/php/payfast/payment_notify.php">
        <input type="hidden" name="item_name" id="item_name" value="[YOUR PRODUCT]">
        <input type="hidden" name="item_description" id="item_description" value="">
        <input type="hidden" name="email_confirmation" id="email_confirmation" value="1">
        <input type="hidden" name="confirmation_address" id="confirmation_address" value="">

        <h2>PayFast Payment Test</h2>
        <div>
            <p align="justify">Enter the payment information below, the payment will be forwarded to the PayFast testing
                sandbox system.</p>
            <p align="justify">
            <table>
                <tr>
                    <td>Invoice Number: </td>
                    <td><input type="text" name="payment_id" id="payment_id" value="FAKE5551234" /></td>
                </tr>
                <tr>
                    <td>Amount (Rand): </td>
                    <td><input type="text" name="amount" id="amount" value="121.40" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>First Name: </td>
                    <td><input type="text" name="name_first" id="name_first" value="Bob" /></td>
                </tr>
                <tr>
                    <td>Last Name: </td>
                    <td><input type="text" name="name_last" id="name_last" value="Smith" /></td>
                </tr>
                <tr>
                    <td>Receipt Email: </td>
                    <td><input type="text" name="email_address" id="email_address" value="sbtu01@payfast.co.za" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>

            </table>
            </p>
        </div>
        <form>  -->
    <form action="https://sandbox.payfast.co.za/eng/process" method="post">
        <input type="hidden" name="merchant_id" value="10000100">
        <input type="hidden" name="merchant_key" value="46f0cd694581a">
        <input type="hidden" name="amount" value="100.00">
        <input type="hidden" name="item_name" value="Test Product">
        <input type="hidden" name="return_url" id="return_url"
            value="http://localhost/php/payfast/payment_finished.php">
        <input type="hidden" name="cancel_url" id="cancel_url"
            value="http://localhost/php/payfast/payment_cancelled.php">
        <input type="hidden" name="notify_url" id="notify_url" value="http://localhost/php/payfast/payment_notify.php">
        <input type="hidden" name="m_payment_id" value="100004">
        <input type="hidden" name="custom_int1" value="1">
        <h2>PayFast Payment Test</h2>
        <div>
            <p align="justify">Enter the payment information below, the payment will be forwarded to the PayFast testing
                sandbox system.</p>
            <p align="justify">
            <table>
                <tr>
                    <td>Invoice Number: </td>
                    <td><input type="text" name="payment_id" id="payment_id" value="FAKE5551234" /></td>
                </tr>
                <tr>
                    <td>Amount (Rand): </td>
                    <td><input type="text" name="amount" id="amount" value="121.40" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>First Name: </td>
                    <td><input type="text" name="name_first" id="name_first" value="Bob" /></td>
                </tr>
                <tr>
                    <td>Last Name: </td>
                    <td><input type="text" name="name_last" id="name_last" value="Smith" /></td>
                </tr>
                <tr>
                    <td>Receipt Email: </td>
                    <td><input type="text" name="email_address" id="email_address" value="sbtu01@payfast.co.za" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>

            </table>
            </p>
        </div>
        <input type="submit">
    </form>
</body>

</html>