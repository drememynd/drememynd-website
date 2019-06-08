<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

        <title>Engine: <?php echo $view->pageName; ?></title>

        <link rel="stylesheet" href="css/vendor/normalize.css">
        <link rel="stylesheet" href="/css/engine/engine.css" />
        <?php echo $moreCss; ?>
    </head>
    <body>
        
        <div id="content-body">
            <?php echo $wrapper; ?>
        </div>

        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/framework.js"></script>
        <?php echo $moreJs; ?>
    </body>
</html>