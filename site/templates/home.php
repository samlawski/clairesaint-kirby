<!DOCTYPE html>
<html lang="<?= $kirby->language()->code() ?>">
  <?= snippet('head') ?>
  
  <body>
    <div class="site-wrapper" data-page="<?= $page->style_id()?>">
      <?= snippet('body_nav') ?>

      <main>
        
        <div class="media__slide">
          <img class="img-centered" src="<?= $page->cover_image()->toFile()->url() ?>" alt="cover image" />
          <a href="<?= $page->cover_link()?>" target="_blank" class="slide__cta btn btn--lt"><?= $page->cover_link_text()?></a>
        </div>

      </main>

      <?= snippet('body_footer') ?>
    </div>
  </body>
</html>
