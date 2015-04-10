<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  $cl_box_groups[] = array(
    'heading' => BOX_HEADING_GV_ADMIN,
    'apps' => array(
      array(
        'code' => 'coupon_admin.php',
        'title' => BOX_COUPON_ADMIN,
        'link' => tep_href_link('coupon_admin.php')
      ),
      array(
        'code' => 'gv_queue.php',
        'title' => BOX_GV_ADMIN_QUEUE,
        'link' => tep_href_link('gv_queue.php')
      ),
      array(
        'code' => 'gv_mail.php',
        'title' => BOX_GV_ADMIN_MAIL,
        'link' => tep_href_link('gv_mail.php')
      ),
      array(
        'code' => 'gv_sent.php',
        'title' => BOX_GV_ADMIN_SENT,
        'link' => tep_href_link('gv_sent.php')
      )
    )
  );
?>
