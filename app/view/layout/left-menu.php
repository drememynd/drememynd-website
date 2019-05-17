<ul class="vertical menu">
    <?php foreach ($pages as $menuPage => $menuName) : ?>
        <li <?php echo ($view->page == $menuPage ? 'class="is-active"' : ''); ?> >
            <a href="/<?php echo $menuPage; ?>">
                <span><?php echo $menuName; ?></span>
            </a>
        </li>
    <?php endforeach; ?>
        <li class="show-for-small-only <?php echo ($view->page == 'contact-info' ? 'is-active' : ''); ?>" >
            <a href="/<?php echo 'contact-info'; ?>">
                <span><?php echo 'Contact Information'; ?></span>
            </a>
        </li>
</ul>