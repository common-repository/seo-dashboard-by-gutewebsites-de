<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

$gsc_0 = $titan->getOption( 'gsc_0' );
if ( 1 == $gsc_0 ) {
    $admin_bar->add_menu( array(
        'id'	=> 'gsc_0',
        'parent' => 'gw-helper-gsc',
        'title' => '<span class="gw_seo_title">Abruf wie durch Google</span>',
        'href'  => 'https://www.google.com/webmasters/tools/googlebot-fetch?hl=de&siteUrl='. $protocol .''. $domain .'&path='. substr($path, 1) .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$gsc_3 = $titan->getOption( 'gsc_3' );
if ( 1 == $gsc_3 ) {
    $admin_bar->add_menu( array(
        'id'    => 'gsc_3',
        'parent' => 'gw-helper-gsc',
        'title' => '<span class="gw_seo_title">Aktuelle Rankings</span>',
        'href'  => 'https://search.google.com/search-console/performance/search-analytics?resource_id='. $protocol .''. $domain .'&breakdown=query&metrics=CLICKS%2CIMPRESSIONS%2CCTR%2CPOSITION&start_date='. date("Ymd", $last_rankings_d).'&end_date='. date("Ymd", $last_rankings_d).'&page=*'. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$gsc_2 = $titan->getOption( 'gsc_2' );
if ( 1 == $gsc_2 ) {
    $admin_bar->add_menu( array(
        'id'    => 'gsc_2',
        'parent' => 'gw-helper-gsc',
        'title' => '<span class="gw_seo_title">Indexabdeckung</span>',
        'href'  => 'https://search.google.com/search-console/index?resource_id='. $protocol .''. $domain .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$gsc_4 = $titan->getOption( 'gsc_4' );
$gsc_4_number = $titan->getOption( 'gsc_4_number' );
if ( 1 == $gsc_4 ) {
    $admin_bar->add_menu( array(
        'id'    => 'gsc_4',
        'parent' => 'gw-helper-gsc',
        'title' => '<span class="gw_seo_title">Mobile vs. Desktop</span><span class="gw_seo_tag">'. $gsc_4_number .'  Mon.</span>',
        'href'  => 'https://search.google.com/search-console/performance/search-analytics?resource_id='. $protocol .''. $domain .'&num_of_months='. $gsc_4_number .'&breakdown=query&metrics=CLICKS%2CIMPRESSIONS%2CCTR%2CPOSITION&compare_device=MOBILE&device=DESKTOP&page=*'. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$gsc_1 = $titan->getOption( 'gsc_1' );
$gsc_1_number = $titan->getOption( 'gsc_1_number' );
if ( 1 == $gsc_1 ) {
    $admin_bar->add_menu( array(
        'id'    => 'gsc_1',
        'parent' => 'gw-helper-gsc',
        'title' => '<span class="gw_seo_title">Suchanfragen</span><span class="gw_seo_tag">'. $gsc_1_number .' Mon.</span>',
        'href'  => 'https://search.google.com/search-console/performance/search-analytics?resource_id='. $protocol .''. $domain .'&num_of_months='. $gsc_1_number .'&breakdown=query&metrics=CLICKS%2CIMPRESSIONS%2CCTR%2CPOSITION&page=*'. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}
