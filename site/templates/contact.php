<!DOCTYPE html>
<html lang="<?= $kirby->language()->code() ?>">
  <?= snippet('head') ?>
  
  <body>
    <div class="site-wrapper" data-page="<?= $page->style_id()?>">
      <?= snippet('body_nav') ?>

      <main>
        
        <section class="content">
          <h2><?= $page->title() ?></h2>
          
          <form method="post" action="<?= $page->url() ?>">
            <label for="name"><?= $page->form_name_label() ?>:</label>
            <input id="name" type="text" name="name" value="<?= esc($data['name'] ?? '', 'attr') ?>" placeholder="<?= $page->form_name_placeholder() ?>" required>
            <?= isset($alert['name']) ? '<p style="color: yellow;">' . esc($alert['name']) . '</p>' : '' ?>

            <label for="email"><?= $page->form_email_label() ?>:</label>
            <input id="email" type="email" name="email" value="<?= esc($data['email'] ?? '', 'attr') ?>" placeholder="<?= $page->form_email_placeholder() ?>" required>
            <?= isset($alert['email']) ? '<p style="color: yellow;">' . esc($alert['email']) . '</p>' : '' ?>

            <label for="booking">
              <input type="checkbox" id="booking" name="booking" value="">
              <span><?= $page->form_date_checkbox() ?></span>
            </label>

            <div class="formgroup booking__date">
              <label for="date"><?= $page->form_date_label() ?>:</label>
              <input id="date" type="date" name="date" value="" placeholder="date">
            </div>

            <div class="formgroup">
              <label for="nachricht"><?= $page->form_message_label() ?>:</label>
              <textarea id="nachricht" name="text" placeholder="<?= $page->form_message_placeholder() ?>" required><?= esc($data['text'] ?? '') ?></textarea>
              <?= isset($alert['text']) ? '<p style="color: yellow;">' . esc($alert['text']) . '</p>' : '' ?>
            </div>

            <label class="gdpr_check" for="gdpr_check">
              <input type="checkbox" name="gdpr_check" id="gdpr_check" required>
              <small><?= $page->gdpr_checkbox() ?></small>
            </label>

            <div class="honeypot" style="opacity: 0; height: 1px; overflow: hidden;">
              <label for="website">Website <abbr title="required">*</abbr></label>
              <input type="url" id="website" name="website" tabindex="-1">
            </div>

            <input type="hidden" name="language" value="<?= $kirby->language()->code() ?>" tabindex="-1">

            <div class="formgroup">
              <input type="submit" name="submit" value="<?= $page->send_button() ?>">
            </div>
          </form>

          <?php if($success): ?>
            <div class="form_sent--success" role="alert">
              <h4><?= $page->success_title() ?></h4>
              <p><?= $page->success_body() ?></p>
            </div>
          <?php elseif(isset($alert['error'])): ?>
            <div class="form_sent--fail" role="alert">
              <h4><?= $page->fail_title() ?>.</h4>
              <p><?= $alert['error'] ?></p>
              <p><?= $page->fail_body() ?></p>
            </div>
          <?php endif ?>
        </section>

      </main>

      <?= snippet('body_footer') ?>
    </div>
  </body>
</html>
