  <?php if (has_tag()) { ?>
    <div class="row-tags">
      <?php the_tags('<ul class="ul-tags"><li class="tag-item">', '</li><li class="tag-item">', '</li></ul>'); ?>
    </div>
  <?php } ?>