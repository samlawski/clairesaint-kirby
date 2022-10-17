<!DOCTYPE html>
<html lang="<?= $kirby->language()->code() ?>">
  <?= snippet('head') ?>
  
  <body>
    <div class="site-wrapper" data-page="<?= $page->style_id()?>">
      <?= snippet('body_nav') ?>

      <main>
        
        <section class="content">
          <h2><?= $page->title() ?></h2>

          <div class="gallery">
            <?php foreach ($page->images() as $image): ?>
              <?= $image->resize(520) ?>
            <?php endforeach ?>
          </div>
        </section>

      </main>

      <?= snippet('body_footer') ?>
    </div>
  </body>
</html>
