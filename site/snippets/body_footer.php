<footer>
  <div class="social">
    <?php if(page('home')->instagram_url()->isNotEmpty() ): ?><a href="<?= page('home')->instagram_url() ?>" target="_blank"><i class="fab fa-instagram"></i></a><?php endif ?>
    <?php if(page('home')->facebook_url()->isNotEmpty() ): ?><a href="<?= page('home')->facebook_url() ?>" target="_blank"><i class="fab fa-facebook"></i></a><?php endif ?>
    <?php if(page('home')->spotify_url()->isNotEmpty() ): ?><a href="<?= page('home')->spotify_url() ?>" target="_blank"><i class="fab fa-spotify"></i></a><?php endif ?>
    <?php if(page('home')->apple_url()->isNotEmpty() ): ?><a href="<?= page('home')->apple_url() ?>" target="_blank"><i class="fab fa-itunes"></i></a><?php endif ?>
    <?php if(page('home')->deezer_url()->isNotEmpty() ): ?><a href="<?= page('home')->deezer_url() ?>" target="_blank"><span class="icon-deezer"></span></a><?php endif ?>
    <?php if(page('home')->youtube_url()->isNotEmpty() ): ?><a href="<?= page('home')->youtube_url() ?>" target="_blank"><i class="fab fa-youtube"></i></a><?php endif ?>
    <?php if(page('home')->google_url()->isNotEmpty() ): ?><a href="<?= page('home')->google_url() ?>" target="_blank"><i class="fab fa-google-play"></i></a><?php endif ?>
    <?php if(page('home')->soundcloud_url()->isNotEmpty() ): ?><a href="<?= page('home')->soundcloud_url() ?>" target="_blank"><i class="fab fa-soundcloud"></i></a><?php endif ?>
  </div>
  <div class="legal">
    <a href="<?= page('legal')->url() ?>"><?= page('legal')->title() ?></a>
    &nbsp;|&nbsp;
    <a href="<?= page('privacy')->url() ?>"><?= page('privacy')->title() ?></a>
  </div>
</footer>

<?php
  $assets_manifest_json = file_get_contents('assets/dist/manifest.json');
  $assets_manifest_obj = json_decode($assets_manifest_json, true);

  $assets_js_path = "assets/dist/{$assets_manifest_obj['main.js']['file']}";
?>
<?= js($assets_js_path) ?>