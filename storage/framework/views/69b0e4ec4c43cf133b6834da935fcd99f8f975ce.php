<section class="notice-section">
    <div class="container" style="background: var(--color-orange)">
        <div class="notice-section-wrapper">
            <marquee
                behavior="scroll"
                direction="left"
                onmouseover="this.stop()"
                onmouseout="this.start()"
                style="color: #ffffff;">
                <span class="px-4" style="color: #FFFFFF">
                    <b><?php echo e($notice->headline ?? ''); ?>:&nbsp;</b><?php echo e($notice->description ?? ''); ?>

                </span>
            </marquee>
        </div>
    </div>
</section>
<?php /**PATH /var/www/my/100_shop/resources/views/frontend/_notice.blade.php ENDPATH**/ ?>