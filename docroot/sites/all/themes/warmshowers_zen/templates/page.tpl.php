<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<div id="page-container" class="<?php print $classes; ?>">

  <div id="header-wrapper" class="header-wrapper">
    <header id="header" class="header container responsive" role="banner">

      <div class="header__site-logo wrapper">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo" class="header__logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>

        <?php if ($site_name || $site_slogan): ?>
          <div class="header__site-name-and-slogan">
            <h1 class="header__site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print t('Warm Showers'); ?></span></a>
            </h1>
            <div class="header__site-slogan" id="site-slogan"><?php print t('A community for touring cyclists and hosts'); ?></div>
          </div>
        <?php endif; ?>
      </div>

      <?php print render($page['header']); ?>

      <?php if (!$logged_in): ?>
        <div class="header__signpost wrapper">
          <div class="signpost_txt">
            <?php print t('Hospitality Ahead'); ?>
          </div>
          <div class="hospitality">
            <?php print t("We are built on 100% Reciprocal Hospitality!"); ?>
          </div>
        </div>
      <?php endif; ?>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <div class="header__primary-navbar navbar">
          <nav class="header__primary-menu" id="primary-menu" role="navigation">
            <?php if (!empty($primary_nav)): ?>
              <?php print render($primary_nav); ?>
            <?php endif; ?>
          </nav>
          <nav class="header__secondary-menu" id="secondary-menu" role="navigation">
            <?php if (!empty($secondary_nav)): ?>
              <?php print render($secondary_nav); ?>
            <?php endif; ?>
          </nav>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </div>
      <?php endif; ?>

    </header>
  </div>

  <div id="page-wrapper" class="page-wrapper">
    <section id="page" class="container">

      <div id="main-wrapper" class="main-wrapper container responsive">

        <?php if (!empty($page['highlighted'])): ?>
          <?php print render($page['highlighted']); ?>
        <?php endif; ?>

        <aside class="sidebar second">
          <?php print render($page['sidebar_second']); ?>
        </aside>

        <aside class="sidebar first">
          <?php print render($page['sidebar_first']); ?>
        </aside>

        <section id="main" class="main">

          <div id="tab-area" class="tab-area">
            <?php print render($tabs); ?>
          </div>

          <div id="content-area" class="content-area">
            <?php print $breadcrumb; ?>

            <?php print render($title_prefix); ?>
            <?php if ($title && !$is_front): ?>
              <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>

            <?php print $messages; ?>

            <?php print render($page['help']); ?>

            <?php if ($action_links): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>

            <?php print render($page['content_top']); ?>

            <div class="region-content">
              <?php print render($page['content']); ?>
            </div>

            <?php print render($page['content_bottom']); ?>

            <?php if ($feed_icons): ?>
              <div class="feed-icons"><?php print $feed_icons; ?></div>
            <?php endif; ?>
          </div><!-- /#content-area -->
        </section>
      </div><!-- /#main-wrapper -->

      <div id="footer-wrapper" class="footer-wrapper">
        <footer id="footer" class="footer container responsive">
          <h2 class="footer__title" dir=""><?php print t('Hospitality For Touring Cyclists Worldwide'); ?> </h2>

          <nav class="footer__social-menu">
            <ul class="menu">
              <li><a href="https://www.facebook.com/groups/135049549858210/" class="social_fb" title="<?php print t("Follow Warm Showers on"); ?> Facebook"></a></li>
              <li><a href="https://twitter.com/#!/warmshowers" class="social_tw" title="<?php print t("Follow Warm Showers on"); ?> Twitter"></a></li>
              <li><a href="https://www.warmshowers.org/rssfeed" class="social_rs" title="<?php print t("Keep up to date with"); ?> RSS"></a></li>
            </ul>
          </nav>

          <?php print render($page['footer']); ?>
        </footer>
      </div>

    </section>
  </div><!-- /#page-wrapper -->

</div><!-- /#container -->
<?php print render($page['bottom']); ?>
