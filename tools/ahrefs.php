<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

$gw_ahrefs_0 = $titan->getOption( 'gw_ahrefs_0' );
if ( 1 == $gw_ahrefs_0 ) {
    $admin_bar->add_menu( array(
        'id'	=> 'gw_ahrefs_0',
        'parent' => 'gw-helper-ahrefs',
        'title' => '<span class="gw_seo_title">Backlink-Details</span>',
        'href'  => 'https://ahrefs.com/site-explorer/overview/v2/domain/fresh?target='. $protocol . $domain .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$gw_ahrefs_1 = $titan->getOption( 'gw_ahrefs_1' );
if ( 1 == $gw_ahrefs_1 ) {
    $admin_bar->add_menu( array(
        'id'    => 'gw_ahrefs_1',
        'parent' => 'gw-helper-ahrefs',
        'title' => '<span class="gw_seo_title">Defekte Backlinks</span>',
        'href'  => 'https://ahrefs.com/site-explorer/backlinks/v2/broken/exact/fresh/all/1/ahrefs_rank_desc?target='. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}
$gw_ahrefs_2 = $titan->getOption( 'gw_ahrefs_2' );
if ( 1 == $gw_ahrefs_2 ) {
    $admin_bar->add_menu( array(
        'id'    => 'gw_ahrefs_2',
        'parent' => 'gw-helper-ahrefs',
        'title' => '<span class="gw_seo_title">Verweisende Domains</span>',
        'href'  => 'https://ahrefs.com/site-explorer/referring/v2/domains/exact/fresh/all/all/1/domain_rating_desc?target='. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}
$gw_ahrefs_3 = $titan->getOption( 'gw_ahrefs_3' );
if ( 1 == $gw_ahrefs_3 ) {
    $admin_bar->add_menu( array(
        'id'    => 'gw_ahrefs_3',
        'parent' => 'gw-helper-ahrefs',
        'title' => '<span class="gw_seo_title">Linktext</span>',
        'href'  => 'https://ahrefs.com/site-explorer/backlinks/v2/anchors/domain/fresh/phrases/all/1/refdomains_dofollow_desc?target='. $protocol . $domain .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}
$gw_ahrefs_4 = $titan->getOption( 'gw_ahrefs_4' );
if ( 1 == $gw_ahrefs_4 ) {
    $admin_bar->add_menu( array(
        'id'    => 'gw_ahrefs_4',
        'parent' => 'gw-helper-ahrefs',
        'title' => '<span class="gw_seo_title">Top-Verweisender-Content</span>',
        'href'  => 'https://ahrefs.com/site-explorer/backlinks/v2/referring-content/exact/fresh/1/median_shares_desc?target='. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}
$gw_ahrefs_5 = $titan->getOption( 'gw_ahrefs_5' );
if ( 1 == $gw_ahrefs_5 ) {
    $admin_bar->add_menu( array(
        'id'    => 'gw_ahrefs_5',
        'parent' => 'gw-helper-ahrefs',
        'title' => '<span class="gw_seo_title">Verweisende IPs</span>',
        'href'  => 'https://ahrefs.com/site-explorer/referring/v2/ips/exact/fresh/subnets/1/refdomains_desc?target='. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}
$gw_ahrefs_6 = $titan->getOption( 'gw_ahrefs_6' );
if ( 1 == $gw_ahrefs_6 ) {
    $admin_bar->add_menu( array(
        'id'    => 'gw_ahrefs_6',
        'parent' => 'gw-helper-ahrefs',
        'title' => '<span class="gw_seo_title">Linkwachstum</span>',
        'href'  => 'https://ahrefs.com/site-explorer/overview/v2/grossing-pages/domain/fresh/1/delta_7d_desc?target='. $protocol . $domain .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}
$gw_ahrefs_7 = $titan->getOption( 'gw_ahrefs_7' );
if ( 1 == $gw_ahrefs_7 ) {
    $admin_bar->add_menu( array(
        'id'    => 'gw_ahrefs_7',
        'parent' => 'gw-helper-ahrefs',
        'title' => '<span class="gw_seo_title">Shares</span>',
        'href'  => 'https://ahrefs.com/site-explorer/overview/top-pages-shares/domain/fresh/all/1/median_shares_desc?target='. $protocol . $domain .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}