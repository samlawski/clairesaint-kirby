<nav>
  <div class="content">
    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="menu">
      <button class="hamburger hamburger--collapse" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
      <ul>
        <li><a href="<?= page('home')->url() ?>"><?= page('home')->title() ?></a></li>
        <li><a href="<?= page('music')->url() ?>"><?= page('music')->title() ?></a></li>
        <li><a href="<?= page('gallery')->url() ?>"><?= page('gallery')->title() ?></a></li>
        <li><a href="<?= page('about')->url() ?>"><?= page('about')->title() ?></a></li>
        <li><a href="<?= page('contact')->url() ?>"><?= page('contact')->title() ?></a></li>
        <li><a href="/">en</a> / <a href="/de">de</a></li>
      </ul>
    </div>

  </div>
</nav>

<header>
  <h1>
    <?= page('home')->header_title() ?>
  </h1>
  <h2>
    <?= page('home')->header_subtitle() ?>
  </h2>
</header>