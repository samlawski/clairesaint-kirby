<!DOCTYPE html>
<html lang="<?= $kirby->language()->code() ?>">
  <?= snippet('head') ?>
  
  <body>
    <div class="site-wrapper" data-page="<?= $page->style_id()?>">
      <?= snippet('body_nav') ?>

      <main>
        
        <section class="content">
          <h2><?= $page->title() ?></h2>

          <div class="musicframes">

            <div class="content">
              <?= $page->text() ?>
            </div>

            <?php
              $spotify_path = str_replace(
                'spotify/', '', str_replace(
                  ':', '/', $page->spotify_path()
                )
              )
            ?>
            <div class='embed-wrapper'>
              <iframe src='https://open.spotify.com/embed/<?= $spotify_path ?>' frameborder='0' allowtransparency='true' allow='encrypted-media'></iframe>
            </div>

            <div>
              <a target="_blank" href="<?= $page->itunes_artist_url() ?>" style="display:inline-block;overflow:hidden;background:url(https://linkmaker.itunes.apple.com/en-us/badge-lrg.svg?releaseDate=&kind=artist&bubble=apple_music) no-repeat;width:158px;height:45px;"></a>
              <a target="_blank" href="<?= $page->deezer_artist_url() ?>"><img src="/assets/static/images/deezer-logo.png" height="45" alt="Deezer Logo" /></a>
            </div>

          </div>

        </section>

      </main>

      <?= snippet('body_footer') ?>
    </div>
  </body>
</html>
