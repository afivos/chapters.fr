<?php if($pagination->hasPages()): ?>
<nav class="pagination">

  <?php if($pagination->hasNextPage()): ?>
  <a class="next" href="<?= $pagination->nextPageURL() ?>">&lsaquo; older posts</a>
  <?php endif ?>

  <?php if($pagination->hasPrevPage()): ?>
  <span style="float: right;"><a class="prev" href="<?= $pagination->prevPageURL() ?>">newer posts &rsaquo;</a></span>
  <?php endif ?>

</nav>
<?php endif ?>