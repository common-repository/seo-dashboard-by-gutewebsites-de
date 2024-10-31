<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

$moz_pro_0 = $titan->getOption( 'moz_pro_0' );
if ( 1 == $moz_pro_0 ) {
    $admin_bar->add_menu( array(
        'id'    => 'moz_pro_0',
        'parent' => 'gw-helper-moz-pro',
        'title' => '<span class="gw_seo_title">Open Site Explorer</span>',
        'href'  => 'https://moz.com/researchtools/ose/links?site='. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$moz_pro_1 = $titan->getOption( 'moz_pro_1' );
if ( 1 == $moz_pro_1 ) {
    $admin_bar->add_menu( array(
        'id'    => 'moz_pro_1',
        'parent' => 'gw-helper-moz-pro',
        'title' => '<span class="gw_seo_title">Compare Metrics</span>',
        'href'  => 'https://moz.com/researchtools/ose/comparisons?site='. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$moz_pro_2 = $titan->getOption( 'moz_pro_2' );
if ( 1 == $moz_pro_2 ) {
    $admin_bar->add_menu( array(
        'id'    => 'moz_pro_2',
        'parent' => 'gw-helper-moz-pro',
        'title' => '<span class="gw_seo_title">Spam Analysis</span>',
        'href'  => 'https://moz.com/researchtools/ose/spam-analysis?site='. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$moz_pro_3 = $titan->getOption( 'moz_pro_3' );
if ( 1 == $moz_pro_3 ) {
    $admin_bar->add_menu( array(
        'id'    => 'moz_pro_3',
        'parent' => 'gw-helper-moz-pro',
        'title' => '<span class="gw_seo_title">Link Opportunities</span>',
        'href'  => 'https://moz.com/researchtools/ose/opportunities/reclaim-links?site='. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$moz_pro_4 = $titan->getOption( 'moz_pro_4' );
if ( 1 == $moz_pro_4 ) {
    $admin_bar->add_menu( array(
        'id'    => 'moz_pro_4',
        'parent' => 'gw-helper-moz-pro',
        'title' => '<span class="gw_seo_title">Advanced Reports</span>',
        'href'  => 'https://moz.com/researchtools/ose/advanced_exports?site='. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}