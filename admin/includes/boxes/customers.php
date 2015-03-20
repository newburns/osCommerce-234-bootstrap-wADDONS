<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  $cl_box_groups[] = array(
    'heading' => BOX_HEADING_CUSTOMERS,
    'apps' => array(
      array(
        'code' => 'customers.php',
        'title' => BOX_CUSTOMERS_CUSTOMERS,
        'link' => tep_href_link('customers.php')
      ),
/* ** Altered for Manual Order Maker ** */	  
      array(
        'code' => 'create_order.php',
        'title' => BOX_CUSTOMERS_CREATE_ORDER,
        'link' => tep_href_link('create_order.php')
      )
/* ** EOF for Manual Order Maker ** */	  
    )
  );
?>
