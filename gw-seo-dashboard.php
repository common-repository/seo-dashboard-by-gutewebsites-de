<?php
/*
Plugin Name: SEO-Dashboard by gutewebsites.de
Plugin URI:  https://wordpress.org/plugins/seo-dashboard-by-gutewebsites-de/
Description: Weniger klicken. Mehr schaffen.
Version:     1.2.5
Author:      Büro für gute Websites – André Goldmann
Author URI:  https://www.gutewebsites.de/
License:     GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/
 
if ( ! defined( 'ABSPATH' ) ) exit;

require_once( 'titan-framework/titan-framework-embedder.php' );
require_once( 'inc/admin-page.php' );
require_once( 'inc/tour.php' );

function gwseodash_load_custom_gw_seo_dash_style() {
   if (is_user_logged_in()) {
   	wp_enqueue_style('admin-styles', plugin_dir_url( __FILE__ ) . 'gw-admin-bar-min.css');
   }
}

add_action('admin_enqueue_scripts', 'gwseodash_load_custom_gw_seo_dash_style');
add_action('wp_enqueue_scripts', 'gwseodash_load_custom_gw_seo_dash_style');
add_action('admin_bar_menu', 'gwseodash_add_toolbar_items', 100);

function gwseodash_add_toolbar_items($admin_bar){
	
	if (isset($_SERVER['HTTPS']) &&
	    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
	    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
	    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
	  $protocol = 'https://';
	}
	else {
	  $protocol = 'http://';
	}
	$domain = $_SERVER['SERVER_NAME'];
    $home_url = preg_replace("/^(.*?)\.(.*)$/","$2",$domain);
    $uri = $_SERVER['REQUEST_URI'];
	$link = $protocol . $domain . $uri;
	$path = str_replace($protocol . $domain,"",$link);
    $strip_gapath = str_replace("/","~2F",$path);
    $strip_gapath_2 = str_replace("/","%25252F",$path);
    $social_gapath = $domain . str_replace("/","~2F",$uri);
    $last_rankings = $last_rankings_d=strtotime("-2 days");

    $admin_bar->add_menu( array(
        'id'    => 'gw-helper-main',
        'title' => '<span class="gw_icon"></span> SEO-Dashboard',
    ));

    $titan = TitanFramework::getInstance( 'gwseod' );
     
    $gwseodash_ahrefs = $titan->getOption( 'gwseodash_ahrefs_enable_opt' );
    $gwseodash_ga = $titan->getOption( 'gwseodash_ga_enable_opt' );
    $gwseodash_gsc = $titan->getOption( 'gwseodash_gsc_enable_opt' );
    $gwseodash_metric_tools = $titan->getOption( 'gwseodash_metric_tools_enable_opt' );
    $gwseodash_moz_pro = $titan->getOption( 'gwseodash_moz_pro_enable_opt' );
    $gwseodash_onpage_checks = $titan->getOption( 'gwseodash_onpage_checks_enable_opt' );
    $gwseodash_ryte = $titan->getOption( 'gwseodash_ryte_enable_opt' );
    $gwseodash_sistrix = $titan->getOption( 'gwseodash_sistrix_enable_opt' );
    
    if ( 1 == $gwseodash_ahrefs ) {
        $admin_bar->add_menu( array(
            'id'    => 'gw-helper-ahrefs',
            'parent' => 'gw-helper-main',
            'title' => 'Ahrefs',
        ));
        include "tools/ahrefs.php";
    }
    if ( 1 == $gwseodash_ga ) {
        $admin_bar->add_menu( array(
            'id'    => 'gw-helper-ga',
            'parent' => 'gw-helper-main',
            'title' => 'Google Analytics',
        ));
        include "tools/google-analytics.php";
    }
    if ( 1 == $gwseodash_gsc ) {
        $admin_bar->add_menu( array(
            'id'    => 'gw-helper-gsc',
            'parent' => 'gw-helper-main',
            'title' => 'Google Search Console',
        ));
        include "tools/gsc.php";
    }
    if ( 1 == $gwseodash_metric_tools ) {
        $admin_bar->add_menu( array(
            'id'    => 'gw-helper-metric-tools',
            'parent' => 'gw-helper-main',
            'title' => 'Metrics Tools',
        ));
        include "tools/metric-tools.php";
    }
    if ( 1 == $gwseodash_moz_pro ) {
        $admin_bar->add_menu( array(
            'id'    => 'gw-helper-moz-pro',
            'parent' => 'gw-helper-main',
            'title' => 'Moz Pro',
        ));
        include "tools/moz-pro.php";
    }
    if ( 1 == $gwseodash_onpage_checks ) {
        $admin_bar->add_menu( array(
            'id'    => 'gw-helper-onpage',
            'parent' => 'gw-helper-main',
            'title' => 'OnPage-Checks',
        ));
        include "tools/onpage.php";
    }
    if ( 1 == $gwseodash_ryte ) {
        $admin_bar->add_menu( array(
            'id'    => 'gw-helper-ryte',
            'parent' => 'gw-helper-main',
            'title' => 'RYTE',
        ));
        include "tools/ryte.php";
    }
    if ( 1 == $gwseodash_sistrix ) {
        $admin_bar->add_menu( array(
            'id'    => 'gw-helper-sistrix',
            'parent' => 'gw-helper-main',
            'title' => 'SISTRIX',
        ));
        include "tools/sistrix.php";
    }
    $admin_bar->add_menu( array(
        'id'    => 'gw-helper-settings',
        'parent' => 'gw-helper-main',
        'title' => 'Einstellungen',
        'href' => ''. $protocol . $domain .'/wp-admin/options-general.php?page=gw-seo-dashboard',
        'meta'  => array(
            'class' => 'gw_seo_break'
        )
    ));
}