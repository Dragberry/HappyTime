<?php
    header('Content-Type: text/html; charset=utf-8');
    if ($urlToRedirect) {
        header('Location: ' . "/pages/index.php");
    }
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
        if ($metaDescription)
        {
          echo('<meta name="description" content="' . $metaDescription . '">');
        }
    ?>
    <title><?php echo $title . " - " . MSGurl; ?></title>
    <link rel="shortcut icon" href="/images/favicon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="/bower_components/jquery-ui/jquery-ui.min.css"/>
    <link rel="stylesheet" href="/stylesheets/app.css" />
    <link rel="stylesheet" type="text/css" href="/bower_components/slick/slick.css"/>
    <script src="/bower_components/modernizr/modernizr.js"></script>
</head>
<body>
    <div class="page-wrapper">
        <div class="row">
        <div class="large-12 columns">
            <?php include($_SERVER['DOCUMENT_ROOT']."/pages/components/header.php"); ?>
        </div>
        <div class="small-12 medium-12 large-12 columns">
            <div class="left-side-bar show-for-medium-up medium-3 large-3 columns" style="margin-top: 1em !important;">
                <br />
                <?php
                    if ($sideBarLeft)
                    {
                        include($_SERVER['DOCUMENT_ROOT'].$sideBarLeft);
                    } else {
                        include($_SERVER['DOCUMENT_ROOT']."/pages/components/sideBarLeft.php");
                    }
                ?>
            </div>
            <div class="small-12 medium-6 large-7 columns">

                <div class="show-for-medium-up columns">
                    <br />
                </div>
                <?php
                    echo($content);
                    if ($contentLink)
                    {
                        include($_SERVER['DOCUMENT_ROOT'].$contentLink);
                    }
                ?>
            </div>
            <div class="small-12 medium-3 large-2 columns">
                <br />
                <?php
                if ($sideBarRight)
                {
                    include($_SERVER['DOCUMENT_ROOT'].$sideBarRight);
                } else {
                    include($_SERVER['DOCUMENT_ROOT']."/pages/components/sideBarRight.php");
                }
                ?>
            </div>
        </div>
    </div>
    <div class="page-buffer"></div>
    </div>
    <div class="page-footer row">
        <div class="small-12 medium-12 large-12 columns">
            <?php include($_SERVER['DOCUMENT_ROOT']."/pages/components/footer.php"); ?>
        </div>
    </div>
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script src="/bower_components/jquery-ui/i18n/ui.datepicker-ru.js"></script>
    <script src="/bower_components/foundation/js/foundation.min.js"></script>
    <script type="text/javascript" src="/bower_components/slick/slick.min.js"></script>
    <script src="/js/app.js"></script>
<body>