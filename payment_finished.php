<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
        PayFast Payment Response
    </title>
    <script src="PayFast.js" type="text/javascript"></script>
</head>

<body>
    <h2>PayFast Payment Test</h2>
    <div>
        <p align="justify">The payment has been processed, the payment code is <b>
                <?php var_dump($_GET);?>
                <?php var_dump($_POST);?>
                <script type="text/javascript">
                document.write(getParameter('pt'));
                </script>
            </b>.</p>
        <p align="justify">Click <a href="http://[YOUR URL]/payment_capture.html">here</a> to go back to the payment
            page.</p>
    </div>
</body>

</html>