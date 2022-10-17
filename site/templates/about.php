<!DOCTYPE html>
<html lang="<?= $kirby->language()->code() ?>">
  <?= snippet('head') ?>
  
  <body>
    <div class="site-wrapper" data-page="<?= $page->style_id()?>">
      <?= snippet('body_nav') ?>

      <main>
        
        <section class="content">
          <h2><?= $page->page_title() ?></h2>

          <div class="vita">
            <div class="vita__portrait">
              <img src="<?= $page->profile_image()->toFile()->url() ?>" alt="portrait" />
            </div>

            <div class="vita__block">
              <div class="vita__text">
                <?= $page->text() ?>
              </div>

              <div class="vita__cta">
                <a href="<?= page('contact')->url() ?>" class="btn btn--dk"><?= $page->contact_link() ?></a>
              </div>

              <div class="references">
                <h3><?= $page->references_title() ?></h3>

                <ul>
                  <?php foreach($page->references()->toStructure() as $reference): ?>
                    <li>
                      <strong><?= $reference->datum() ?></strong>:&nbsp;
                      <span><?= $reference->titel() ?></span>&nbsp;
                      <?php if($reference->audio_path()->isNotEmpty()): ?>
                        <span class="referenz__audio">
                          <audio><source class="referenz__audio--index" src="<?= $reference->audio_path()->toFile()->url() ?>" type="audio/mpeg" /></audio>
                          <i class="referenz__audio__btn far fa-play-circle"></i>
                        </span>
                      <?php endif ?>
                    </li>
                  <?php endforeach ?>
                </ul>
              </div>
            </div>
          </div>
        </section>

      </main>

      <?= snippet('body_footer') ?>
    </div>
  </body>
</html>
