<?php /* DremeMynd */ ?>
<div id="wrapper" class="column sm-grow">

    <div class="row cell-padding-x sm-shrink sm-nowrap">
        <?php echo $header; ?>
    </div>

    <div id="top-menu-area" class="row cell-padding-x sm-shrink hidden-lg">
        <?php echo $topMenu; ?>
    </div>

    <div id="divider" class="cell"></div>

    <div id="center-area" class="row sm-grow">
        <div id="menu-area" class="cell lg-3 show-only-lg">
            <?php echo $leftMenu; ?>
        </div>
        <div id="content-area" class="column sm-12 lg-9">
            <div id="content-inside" class="cell sm-grow">
                <?php echo $content; ?>
            </div>
        </div>
    </div>

    <div id="footer-area" class="row sm-shrink align-middle align-center cell-padding-x" >
        <div id="footer-cell" class="cell sm-12 align-middle align-center">
            <?php echo $footer; ?>
        </div>
    </div>

</div>