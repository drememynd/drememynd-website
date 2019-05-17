<div class="grid-x grid-ht-full">
    <div id="left-menu" class="cell large-3 medium-3">
        <div class="grid-y grid-frame grid-padding-x grid-padding-y">
            <div class="cell auto" >
                <?php echo $leftMenu; ?>
            </div>
            <div class="cell shrink hide-for-small-only" >
                <?php echo $contactInfo; ?>
            </div>
        </div>

    </div>
    <div id="content-area" class="cell auto">
        <div class="grid-y grid-frame grid-padding-x  grid-padding-y">
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
            <div class="cell shrink hide-for-medium">
                <?php echo $contactInfo; ?>
            </div>

        </div>
    </div>
</div>