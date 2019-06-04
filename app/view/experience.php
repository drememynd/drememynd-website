
<div class="column experience">
    <?php foreach ($jobs as $company) : ?>
        <div class="column shrink">
                <div class="cell shrink company-name">
                    <?php echo $company['company']; ?>
                </div>
                <div class="cell shrink">
                    <?php echo $company['location']; ?>
                </div>
            <?php foreach ($company['jobs'] as $job) : ?>
                <div class="row">
                    <div class="cell sm-1"></div>
                    <div class="column sm-11">
                            <div class="cell title">
                                <?php echo $job['title']; ?>
                                (<?php echo $job['dates']; ?>)
                            </div>
                            <div class="cell">
                                <?php foreach ($job['desc'] as $p) : ?>
                                    <?php if (is_scalar($p)) : ?>
                                        <p><?php echo $p; ?></p>
                                    <?php else: ?>
                                        <ul>
                                            <?php foreach ($p as $item) : ?>
                                                <li><?php echo $item; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>