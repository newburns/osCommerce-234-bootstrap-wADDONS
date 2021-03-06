osCommerce-234-bootstrap
=========================
ALL CREDIT GOES TO THE ORIGINAL AUTHORS OF THE BASE AND ADDONS
==============================================================
All of the addons are commented in every file change with the proper support URL for each!  
I take NO credit for any addons or developments. 


osCommerce 2.3.4 with Bootstrap UI and some necessary Addons...  
##This should not be confused with the work of Gary Burton main osCommerce 2.3.4 Bootstrap Edge version at https://github.com/gburton/Responsive-osCommerce  
  
The idea of this fork is to create an up-to-date bootstrap osCommerce with specific addons.  
##THIS IS NOT THE PREFERRED INSTALLATION  
__It does give a base for a working store with the following addons  

Addons have been specially commented so to easily find changes. All original code will remain, but they will be commented out for any changes.  
All changes can be found by doing a search for the special commenting system of asterisks.  

THIS REPO IS FOR ADDON ADDITIONS/FIXES ONLY  
__:::Current Add-on Listing:::  

SEO Header Tags Reloaded added -- http://addons.oscommerce.com/info/8864  
Order Editor added - http://addons.oscommerce.com/info/7844  
Mail Manager added - http://forums.oscommerce.com/topic/397966-mail-manager-for-osc-v23/  
Custom Default Sort Order and Type - http://forums.oscommerce.com/topic/308798-product-listing-sort-order/  
KISS Image Thumbnailer r20 added - http://addons.oscommerce.com/info/9206  
Custom change for product attribute sort ordering added - http://forums.oscommerce.com/topic/123629-sorting-attributes/  
Manual Order Maker added - http://addons.oscommerce.com/info/8334/v,23  
Database Check Tool 1.4 added - http://addons.oscommerce.com/info/9087  
Alternative Administration System added - http://addons.oscommerce.com/info/9135  
Gergely SMTP Email Addition - http://forums.oscommerce.com/topic/94340-smtp-authentication-and-oscommerce/page-2#entry1697522  
Security Pro R11 -- http://addons.oscommerce.com/info/7708  
MailBEEZ Customer Relations Manager added -- http://www.mailbeez.com/quickstart/?id=1  
Credit Class, Gift Vouchers & Discount Coupons osC2.3.3.4 (CCGV) added -- http://addons.oscommerce.com/info/9020  
Purchase Without Account (PWA) added -- http://addons.oscommerce.com/info/9142
  
This is an attempt to get a strong working osc with some addons. This is NOT an independent project. Without the help of MANY coders that have contributed to osCommerce, this would not be possible. I did not code any of the modules, addons, or base software that you see here. 
  
IF YOU HAVE CREATED A PRIVATE ADDON THAT YOU SEE LISTED HERE AND IT IS NOT AVAILABLE TO THE GENERAL PUBLIC, please list it within the issues, and I will have it removed.
  
Links and descriptions will be used for all addon changes. Please contribute if you can.

Installation
============
!!!USING THE STANDARD OSCOMMERCE SQL INSTALLATION MAY REMOVE SOME TABLES FOR ADDONS THAT YOU MAY HAVE INSTALLED!!!

Install as if this is a new osCommerce installation.  Then enter the admin area and turn on 3 new Header Tag modules;

1.  colorbox
2.  datepicker
3.  grid/list view

The functionality of these have been moved to header tag modules so that the site will only load them on the pages needed rather than on all pages.  Admin > Modules > Header Tags > {install}

You also need to install other components such as the logo, breadcrumb, footer boxes, side column boxes and so on.  Admin > Modules > Boxes > {install} AND Admin > Modules > Content > {install}.  Boxes and Modules can be sorted using the sort order, lowest is displayed first.

SEO Header Tags RELOADED
========================
1. If osCommerce was already installed, and the default oscommerce installation is not ran, then import the appropriate sql file located in ../catalog/SQL_changes folder
2. Go through the following language files to change any customizable text pertaining to your installation
	a. ../catalog/includes/languages/english/index.php
	b. ../catalog/includes/languages/english/specials.php
	c. ../catalog/includes/languages/english/testimonials.php
	
Manual Order Maker
==================
1. If osCommerce was already installed, and the default oscommerce installation is not ran, then import the appropriate sql file located in ../catalog/SQL_changes/
				*NOTE: You can remove any SQL changes specific to Manual Order Maker by using the appropriate uninstall sql file
2. Go to the Administration Backend and change the options for "Configuration >> Order Editor". Be sure to read **each** description accurately before changing options.

SMTP Email Configuration
========================
1. If osCommerce was already installed, and the default oscommerce installation is not ran, then import the appropriate sql file located in SQL_changes
2. Configure your SMTP via the Administration backend configuration panel

Alternative Administration System
=================================
1. If osCommerce was already installed, and the default oscommerce installation is not ran, then import the appropriate sql file located in SQL_changes
2. Configure the AAS installation via the AAS left column boxes
3. **BE SURE that the following files are writeable by your WWW user**  
	**../catalog/admin/ext/aas/plugins/product_images/**  
	**../catalog/admin/ext/aas_modules/**  

Database Check Tool 1.8.1
=========================
If you get an "Internal Server Error" or as it is otherwise known a 500 error you can try editing the values in ../catalog/admin/database_check.php line 13.

	ini_set('max_execution_time', 300); //300 seconds = 5 minutes
	ini_set('memory_limit','128M');
	
Remember:  There ARE clickable links within the results you find from your store.  Before you
delete or change anything, you should either be 100% sure that you would like to make a change
or check each entry out before making an action.  There is plenty of information to help you
with this... so just take the extra moment(s) necessary to avoid costly errors.

KISS Image Thumbnailer
======================
KISS IT configurations can be found under the Configuration >> Images option  
If any changes are made to these options, thumbs must be reset using the KissIT Reset thumbs option  
  
**The following directory(ies) needs to be writeable by the WWW user:**
	**../catalog/images/thumbs/**
	
Configuration Settings in Admin:
A. Admin : Configure : Images : KissIT Product Main Image Width : default: 450 (px)
B. Admin : Configure : Images : KissIT Product Main Image Height : default : 600 (px)
  This settings will limits the max. image size for the product_info.php image. A thumbnail with that size is also shown in the Colorbox pop-up.
  Smaller images shown in product_info.php with Photoset and Colorbox will be downsized from this thumbnail size.
  Do not use this feature if you wish to show the full image size of the original image in the Colorbox Pop-Up.
C.  Admin : Configure : Images : KissIT Disable image upsize : Default : true
  If set to “true” it will prevent images which are smaller than the required thumbnail size to be upsized and show “unsharp”. The smaller images will be pasted in original size on a white background. The result will be an image with      the required thumbnail size.
D.  Admin : Configure : Images : KissIT Product Watermark Size: Default : 0.6
KissIT Product Main Watermark size relativ to the image size (1.0=100%, 0.5 = 50%, 0=no watermark).
E.  Admin : Configure : Images : KissIT Watermark File Name: Default : watermark.png
Name of Watermark image file placed in the folder /images. Remember to use a png file with transparent background.
F.  Admin : Configure : Images : KissIT Watermark position in image: Default : center
Position of the watermark in the image reletiv within the image.
G.  Admin : Configure : Images : KissIT min image width to apply Watermark: Default : 60
The minimum width of thumbnail images to apply the watermark.
H.  Admin : Configure : Images : KissIT min image height to apply Watermark: Default : 60
The minimum height of thumbnail images to apply the watermark.
	
Security Pro R11
================
If you would like a file to be excluded from the security cleansing, be sure to **MANUALLY** add that file in ../catalog/includes/application_top.php while uncommenting around line 65:
  // If you need to exclude a file from cleansing then you can add it like below
  //$security_pro->addExclusion( 'some_file.php' );

__Try your hardest__ not to exclude files in this manner. If they are payment or shipping files then fine .. but not for badly written contributions, in these cases the contribution should be modified so that it no longer passes bad characters.
Also never be tempted to weaken Security Pro by adding characters to the whitelist, you will restrict the scripts ability to do its job.

Custom Default Sort Order
=========================
This changes the defaulting product sorting order. It is currently sorting by ##Model Number - Descending##. To change to a different sorting option, please see the 1st response in thread http://forums.oscommerce.com/topic/308798-product-listing-sort-order/

Custom Default Attribute Sorting Option
=======================================
This changes the default attribute sorting order. It is currently sorted by ##Option Price or Value - Ascending##. To change to a different sorting option, please see the 1st response in thread http://forums.oscommerce.com/topic/123629-sorting-attributes/

Credit Class Gift Voucher
=========================
1. If osCommerce was already installed, and the default oscommerce installation is not ran, then import the appropriate sql file located in SQL_changes
2. To change the text that customers receive, alter the appropriate lines in these files:
	catalog/includes/languages/english/modules/order_total/ot_gv.php
	catalog/includes/languages/english/modules/order_total/ot_coupon.php
	catalog/includes/languages/english/gv_send.php
	catalog/includes/languages/english/gv_faq.php
	catalog/includes/languages/english/gv_redeem.php
3. For usage information, download the usage guide here -- http://addons.oscommerce.com/info/9020

MailBEEZ Customer Relations
===========================
Now that your MailBeez installation is complete, you are encouraged to visit our <a href="http://www.mailbeez.com/documentation/tutorials/guide-to-getting-started/">Guide to Getting Started</a> to familiarize yourself with MailBeez features and functionality, and to learn how to configure and customize your MailBeez installation to suit your needs.

No thanks, just take me to the <a href="http://www.mailbeez.com/documentation/tutorials/mailbeez-quick-start-configuration-tutorial/">Quick Start Configuration tutorial</a>
No thanks, just take me to the <a href="http://www.mailbeez.com/documentation/tutorials/mailbeez-comprehensive-configuration-tutorial/">Comprehensive Configuration tutorial</a>

Mail Manager Template System
============================
1. If osCommerce was already installed, and the default oscommerce installation is not ran, then import the appropriate sql file located in SQL_changes
2. You can access the Mail Manager in the Tools Menu

Database Conversion Script
==========================

This script will change a 2.3.4 Database into a fully useable database for osCommerce-234-Bootstrap.

http://forums.oscommerce.com/topic/399678-234normal-to-234responsive-database-conversion-script/

Purchase Without Account (PWA)
==============================
1. In Admin =>Modules => Content install and configure the modul 'Login without Account Form'.
2. To activate the datepicker on the page, go to  Admin -> Modules -> Header Tags, choose the entry Datepicker JQuery and click Edit. In the file list choose account_pwa.php and click Save.
3. Your introduction text....Change in includes/languages/english/modules/content/login/cm_pwa_login.php
** NOTE ** Input a textual disclaimer for any digital download content. Customer will be able to checkout, but will not be able to download.