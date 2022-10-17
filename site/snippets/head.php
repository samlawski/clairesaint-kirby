<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Meta & SEO -->
  <title><?= $page->title() ?> | <?= $site->title() ?></title>
  <meta property="og:title" content="<?= $page->title() ?>" />
  <meta property="og:locale" content="<?= $kirby->language()->locale(LC_ALL) ?>" />
  <meta name="description" content="<?= $page->description() ?>" />
  <meta property="og:description" content="<?= $page->description() ?>" />
  <link rel="canonical" href="<?= $page->url() ?>" />
  <meta property="og:url" content="<?= $page->url() ?>" />
  <meta property="og:site_name" content="<?= $site->title() ?>" />
  <meta name="twitter:card" content="summary" />
  <meta property="twitter:title" content="<?= $page->title() ?>" />

  <!-- Favicons -->
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/assets/static/favicons/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/static/favicons/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/static/favicons/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/static/favicons/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/assets/static/favicons/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/assets/static/favicons/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/assets/static/favicons/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/assets/static/favicons/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="/assets/static/favicons/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="/assets/static/favicons/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="/assets/static/favicons/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="/assets/static/favicons/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="/assets/static/favicons/favicon-128.png" sizes="128x128" />
  <meta name="msapplication-TileImage" content="/assets/static/favicons/mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="/assets/static/favicons/mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="/assets/static/favicons/mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="/assets/static/favicons/mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="/assets/static/favicons/mstile-310x310.png" />


  <!-- External Assets -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


  <!-- CSS -->
  <?php
    $assets_manifest_json = file_get_contents('assets/dist/manifest.json');
    $assets_manifest_obj = json_decode($assets_manifest_json, true);

    $assets_css_path = "assets/dist/{$assets_manifest_obj['main.js']['css'][0]}";
  ?>

  <?= css($assets_css_path) ?>
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143210266-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-143210266-1');
  </script>
</head>

<!-- JS -->
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>