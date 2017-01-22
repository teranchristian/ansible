<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <title>Account Verification</title>
        <link type="text/css" rel="stylesheet" href="<?= $assestsPath ?>pub/assets/css/styles.css" media="screen, projection, print" />
        <style type="text/css">
        </style>
    </head>
    
    <body>

<!--         <div class="nav_bar">
          <div class="logo">
                <a href="sbs.com.au" title="Home" >
                    <img src="assets/images/logo@2x.png">
                </a>
          </div>
        </div> -->
        <div id="wrapper" class="wrapWidth ">
            <div class="messageVerification  verification<?php echo ($error) ? 'Error' : 'Success'; ?>">
                <?php echo $message ?>
            </div>
        </div>
        <script src="<?= $assestsPath ?>pub/assets/js/jquery-2.2.4.min.js"></script>
        <script src="<?= $assestsPath ?>pub/assets/js/script.js"></script>
    </body>
</html>