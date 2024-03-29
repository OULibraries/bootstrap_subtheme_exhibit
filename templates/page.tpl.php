<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<div id="holder">
<!-- OU Global Navigation Bar -->
<div class="globalheader">

        <div class="container">

            <div class="row">

                <div class="col-md-offset-6">

                    <ul>

                        <li><a class="tip home" href="http://www.ou.edu/web.html" alt="OU Home link"><span>OU Homepage</span></a></li>

                        <li><a class="tip search" href="http://www.ou.edu/content/ousearch.html" alt="OU Search link"><span>Search OU</span></a></li>

                        <li><a class="tip social" href="http://www.ou.edu/web/socialmediadirectory.html" alt="OU Social Media link"><span>OU Social Media</span></a></li>

                        <li class="wordmark">The University of Oklahoma</li>

                    </ul>

                    <div style="clear: both;"></div>

                </div>

            </div>

        </div>

    </div>
 <!-- end ou global navigation bar -->
 <!-- ou logo Header -->
 
 <div class="header1">

        <div class="container whitebg">

		<!-- row 1: navigation -->

    

            <div class="row">

                <div class="col-md-6 logo">

                    <a href="http://129.15.14.238/plan4future/">

                        <img src="<?php print $GLOBALS['base_url']."/".path_to_theme() ?>/img/logo_banner.jpg" class="img-responsive" alt="Logo" /></a>

                </div>
                
                <div class="col-md-6">

                    <?php if ($page['banner']): ?>
						<div id="banner" class="banner"><div class="section">
    				<?php print render($page['banner']); ?>
    					</div></div> <!--- /.section  /#banner -->
					<?php endif; ?>

                </div>
            

            </div>
            
              <!-- banner image -->
              <div class="row">

                <div class="col-md-12">

                    <?php if ($page['slideshow']): ?>
						<div id="slideshow" class="slideshow"><div class="section">
    				<?php print render($page['slideshow']); ?>
    					</div></div> <!--- /.section  /#banner -->
					<?php endif; ?>


                </div>
            

            </div>
            
            

        </div>

    </div>
      
    <!-- end ou logo header -->
      
<div class="container topmargin whitebg">
 
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>" >
  <div class="container">
    <div class="navbar-header">
      

     

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <!-- <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> -->
        <p class="small white">MENU</p>
      </button>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
        
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>

<!-- body tag for stick footer -->
<div id="body">

<div class="main-container">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>
</div>

<!-- end body tag -->
</div>

<!-- ou global nav footer -->
  <div class="footer">

<div class="container">

            <div class="row" style="padding-top: 20px;">

                <div class="col-md-3" style="padding-bottom: 30px;">

                    <img src="<?php print $GLOBALS['base_url']."/".path_to_theme() ?>/img/footerlogo.png" alt="footerLogo" style="float: left; padding-right: 1em;" />

                    <a href="#">University Libraries</a><br />

                    401 West Brooks Street<br />

                    Norman, OK 73019<br />

                    (405) 325-4142

                </div>

                <div class="col-md-4" style="padding-bottom: 30px;">

                    <span style="width: 50%; float: left;">

                        <ul>

                            <li><a href="http://libraries.ou.edu/cms/default.aspx?id=17" title="Contact Us">Contact Us</a></li>

                            <li><a href="http://libraries.ou.edu/jobs/default.aspx" title="Employment">Employment</a></li>

                            <li><a href="http://libraries.ou.edu/cms/default.aspx?id=16" title="About This Site">About This Site</a></li>

                            <li><a href="http://libraries.ou.edu/cms/default.aspx?id=2" title="Other Libraries">Other Libraries</a></li>

                        </ul>

                    </span>

                    <div style="width: 50%; float: right;">

                        <ul>

                            <li><a href="http://www.ou.edu/publicaffairs/WebPolicies/accessstatement.html" title="Accessibility">Accessibility</a></li>

                            <li><a href="http://www.ou.edu/content/publicaffairs/WebPolicies/copyright.html" title="Copyright">Copyright</a></li>

                            <li><a href="http://www.ou.edu/content/web/landing/policy.html" title="Policies">Policies</a></li>

                            <li><a href="http://ouhsc.edu/hipaa/" title="HIPAA">HIPAA</a></li>

                            <li><a href="http://www.ou.edu/content/web/landing/legalnotices.html" title="Legal Notice">Legal Notice</a></li>

                        </ul>

                    </div>

                    <div style="clear: both; padding-bottom: 30px;"></div>

                </div>

                <div class="col-md-5">

                    <div class="social">

                        <ul>

                            <li><a href="http://www.facebook.com/UniversityLibraries" class="facebook" title="facebook"></a></li>

                            <li><a href="http://twitter.com/OULibrarian" class="twitter" title="twitter"></a></li>

                            <li><a href="http://www.youtube.com/user/OULibraryOverview" class="youtube" title="youtube"></a></li>

                            <li><a href="http://pinterest.com/ouhoscurator/ou-hos-collections" class="pinterest" title="pinterest"></a></li>

                        </ul>

                    </div>

                </div>

            </div>

            

        </div>



</footer>

<!-- footer -->
</div>

