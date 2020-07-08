<?php if( have_rows('phases') ): $rf = 0; ?>
<div id="phases-container">
<?php while ( have_rows('phases') ) : the_row(); $rf++; ?>
  <div class="phase">
    <span class="phase-number"><?php echo $rf; ?></span>
  </div>
<?php endwhile; ?>
</div>
<?php endif; ?>
