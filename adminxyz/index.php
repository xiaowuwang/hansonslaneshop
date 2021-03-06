<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Fri Feb 19 22:01:13 2016 -0500 Modified in v1.5.5 $
 */
  $version_check_index=true;
  require('includes/application_top.php');

  $languages = zen_get_languages();
  $languages_array = array();
  $languages_selected = DEFAULT_LANGUAGE;
  for ($i = 0, $n = sizeof($languages); $i < $n; $i++) {
    $languages_array[] = array('id' => $languages[$i]['code'],
                               'text' => $languages[$i]['name']);
    if ($languages[$i]['directory'] == $_SESSION['language']) {
      $languages_selected = $languages[$i]['code'];
    }
  }

  if (STORE_NAME == '' || STORE_OWNER =='' || STORE_OWNER_EMAIL_ADDRESS =='' || STORE_NAME_ADDRESS =='') {
    require('index_setup_wizard.php');
  } else {
    require('index_dashboard.php');
  }
?>
<footer class="homeFooter">
<!-- The following copyright announcement is in compliance
to section 2c of the GNU General Public License, and
thus can not be removed, or can only be modified
appropriately.

Please leave this comment intact together with the
following copyright announcement. //-->

<div class="copyrightrow"><a href="" target="_blank"><img src="images/small_zen_logo.gif" alt="the art of e-commerce" border="0" /></a><br />
</div>
</footer>
</body>
</html>
<?php require('includes/application_bottom.php');
