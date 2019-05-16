<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>DremeMynd: <?php echo $view->pageName; ?></title>

        <link rel="stylesheet" href="css/vendor/foundation.css">
        <link rel="stylesheet" href="/css/drememynd.css" />
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Lemonada" rel="stylesheet">
    </head>
    <body>
        <div class="grid-container">
            <div class="grid-y grid-frame">

                <div class="cell shrink" >
                    <div class="grid-x">
                        <div class="large-12 cell">
                            <?php echo $header; ?>
                        </div>
                    </div>
                </div>
                <div class="cell auto" >
                    <div class="grid-x grid-ht-full">
                        <div id="left-menu" class="cell large-3 medium-3 callout">

                            <div class="grid-y large-grid-frame">
                                <div class="cell auto" >
                                    <?php echo $leftMenu; ?>
                                </div>
                                <div class="cell shrink hide-for-small-only hide-for-medium-only" >
                                    <?php echo $contactInfo; ?>
                                </div>
                            </div>

                        </div>
                        <div id="content-area" class="cell callout auto">
                            <div class="grid-y large-grid-frame">
                                <?php /*
                                  <div class="grid-y grid-frame">
                                  <div id="divider-img" class="cell callout">
                                  <div class="grid-x">

                                  </div>
                                  </div>
                                  </div>
                                 */ ?>
                                <div class="cell auto">
                                    <?php echo $content; ?>
                                </div>
                                <div class="cell auto hide-for-large">
                                    <?php echo $contactInfo; ?>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <script src="js/vendor/jquery.js"></script>
            <script src="js/vendor/what-input.js"></script>
            <script src="js/vendor/foundation.js"></script>
            <script src="js/drememynd.js"></script>
    </body>
</html>
