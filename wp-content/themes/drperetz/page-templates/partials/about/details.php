<div class="about-details">
  <div class="about-details__top">
    <?php the_field('details'); ?>
  </div>
  <div class="about-details__bottom">
    <h2>Education and Training</h2>
      <ul>
        <?php if( have_rows('education') ): ?>
        <?php while( have_rows('education') ): the_row(); ?>
        <li class="education-item">
          <?php the_sub_field('degree'); ?>: <?php the_sub_field('school'); ?></a>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>
      </ul>
  </div>
</div>