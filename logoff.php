<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2015 osCommerce
  
  Edited by 2014 Newburns Design and Technology
  *************************************************
  ************ New addon definitions **************
  ************        Below          **************
  *************************************************
  Credit Class, Gift Vouchers & Discount Coupons osC2.3.3.4 (CCGV) added -- http://addons.oscommerce.com/info/9020  

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/logoff.php');

  $breadcrumb->add(NAVBAR_TITLE);

   unset($_SESSION['customer_id']);
  unset($_SESSION['customer_default_address_id']);
  unset($_SESSION['customer_first_name']);
  unset($_SESSION['customer_country_id']);
  unset($_SESSION['customer_zone_id']);

  if ( isset($_SESSION['sendto']) ) {
    unset($_SESSION['sendto']);
  }

  if ( isset($_SESSION['billto']) ) {
    unset($_SESSION['billto']);
  }

  if ( isset($_SESSION['shipping']) ) {
    unset($_SESSION['shipping']);
  }

  if ( isset($_SESSION['payment']) ) {
    unset($_SESSION['payment']);
  }

  if ( isset($_SESSION['comments']) ) {
    unset($_SESSION['comments']);
  }
  
 }
/* ** Altered for CCGV ** */
  if ( isset($_SESSION['gv_id']) ) {
    unset($_SESSION['gv_id']);
  }
  if ( isset($_SESSION['cc_id']) ) {
    unset($_SESSION['cc_id']);
  }

/* ** EOF alteration for CCGV ** */

  $_SESSION['cart']->reset();

  require('includes/template_top.php');
?>

<div class="page-header">
  <h1><?php echo HEADING_TITLE; ?></h1>
</div>

<div class="contentContainer">
  <div class="contentText">
    <div class="alert alert-danger">
      <?php echo TEXT_MAIN; ?>
    </div>
  </div>

  <div class="text-right">
    <?php echo tep_draw_button(IMAGE_BUTTON_CONTINUE, 'glyphicon glyphicon-chevron-right', tep_href_link('index.php')); ?>
  </div>
</div>

<?php
  require('includes/template_bottom.php');
  require('includes/application_bottom.php');
?>
