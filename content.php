<div class="post">
    <h3>
        <a href="<?php the_permalink()?>"><?php the_title()?></a>
    </h3>

    <?php if ( is_single() ) : ?>
        <?php the_content()?>
    <?php endif; ?>
</div>
