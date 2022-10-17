<!DOCTYPE html>
<html lang="<?= $kirby->language()->code() ?>">
  <?= snippet('head') ?>
  
  <body>
    <div class="site-wrapper" data-page="<?= $page->style_id()?>">
      <?= snippet('body_nav') ?>

      <main>
        
        <div class="content">
          <?= $page->body()->toBlocks() ?>
        </div>

      </main>

      <?= snippet('body_footer') ?>
    </div>
  </body>
</html>
