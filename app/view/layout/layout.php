<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>DremeMynd: <?php echo $view->pageName; ?></title>

        <link rel="stylesheet" href="css/vendor/foundation.css">
        <link rel="stylesheet" href="/css/drememynd.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Lemonada">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
        <div class="grid-container">
            <div class="grid-y grid-frame">
                <div class="cell shrink show-for-small-only">
                    <?php echo $headerSmall; ?>
                </div>
                <div class="cell shrink show-for-medium-only">
                    <?php echo $headerMedium; ?>
                </div>
                <div class="cell shrink show-for-large">
                    <?php echo $headerLarge; ?>
                </div>
                <div class="cell auto show-for-small-only" >
                    <?php echo $layoutSmall; ?>
                </div>
                <div class="cell auto show-for-medium-only" >
                    <?php echo $layoutMedium; ?>
                </div>
                <div class="cell auto show-for-large" >
                    <?php echo $layoutLarge; ?>
                </div>
                <div class="cell shrink footer-font align-self-middle " >
                            <i class="material-icons footer-font">copyright</i> 
                            <?php
                            echo (date('Y')=='2019' ? '2019' : '2019-'.date('Y'));
                            ?>
                            Katrina Wolfe
                    </div>
                </div>
            </div>


            <script src="js/vendor/jquery.js"></script>
            <script src="js/vendor/what-input.js"></script>
            <script src="js/vendor/foundation.js"></script>
            <script src="js/drememynd.js"></script>
    </body>
</html>
