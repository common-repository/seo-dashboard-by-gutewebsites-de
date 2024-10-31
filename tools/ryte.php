<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

$ryte_slug = $titan->getOption( 'gwseodash_ryte_project_slug' );

$ryte_0 = $titan->getOption( 'ryte_0' );
if ( 1 == $ryte_0 ) {
    $admin_bar->add_menu( array(
        'id'    => 'ryte_0',
        'parent' => 'gw-helper-ryte',
        'title' => '<span class="gw_seo_title">Einzelseitenanalyse</span>',
        'href'  => 'https://my.ryte.com/'. $ryte_slug .'/website-success/singlepage-check/?url='. $link .'
',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}
$ryte_1 = $titan->getOption( 'ryte_1' );
if ( 1 == $ryte_1 ) {
    $admin_bar->add_menu( array(
        'id'    => 'ryte_1',
        'parent' => 'gw-helper-ryte',
        'title' => '<span class="gw_seo_title">Server-Monitoring</span>',
        'href'  => 'https://my.ryte.com/'. $ryte_slug .'/website-success/server-monitoring/',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}
$ryte_2 = $titan->getOption( 'ryte_2' );
if ( 1 == $ryte_2 ) {
    $admin_bar->add_menu( array(
        'id'    => 'ryte_2',
        'parent' => 'gw-helper-ryte',
        'title' => '<span class="gw_seo_title">robots.txt-Monitoring</span>',
        'href'  => 'https://my.ryte.com/'. $ryte_slug .'/website-success/robots-txt-monitoring/',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}
$ryte_3 = $titan->getOption( 'ryte_3' );
if ( 1 == $ryte_3 ) {
    $admin_bar->add_menu( array(
        'id'    => 'ryte_3',
        'parent' => 'gw-helper-ryte',
        'title' => '<span class="gw_seo_title">Indexierbarkeit</span><span class="gw_seo_tag">Indexierbarkeit</span>',
        'href'  => 'https://my.ryte.com/'. $ryte_slug .'/website-success/indexability/pages/?filters=%7B%22url%22%3A%7B%22AND%22%3A%5B%5B%22%3D%3D%22%2C%22'. $link .'%22%5D%5D%7D%7D&sort=%7B%22default_table%22%3A%5B%22opr%22%2C%22DESC%22%5D%7D',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
            'class' => 'gw_seo_break'
        )
    ));
}
$ryte_4 = $titan->getOption( 'ryte_4' );
if ( 1 == $ryte_4 ) {
    $admin_bar->add_menu( array(
        'id'    => 'ryte_4',
        'parent' => 'gw-helper-ryte',
        'title' => '<span class="gw_seo_title">Weiterleitungen</span><span class="gw_seo_tag">Indexierbarkeit</span>',
        'href'  => 'https://my.ryte.com/'. $ryte_slug .'/website-success/indexability/redirects/target/?filters=%7B%22url%22%3A%7B%22AND%22%3A%5B%5B%22%3D%3D%22%2C%22'. $link .'%22%5D%5D%7D%7D&sort=%7B%22default_table%22%3A%5B%22opr%22%2C%22DESC%22%5D%7D',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}
$ryte_5 = $titan->getOption( 'ryte_5' );
if ( 1 == $ryte_5 ) {
    $admin_bar->add_menu( array(
        'id'    => 'ryte_5',
        'parent' => 'gw-helper-ryte',
        'title' => '<span class="gw_seo_title">Canonicals</span><span class="gw_seo_tag">Indexierbarkeit</span>',
        'href'  => 'https://my.ryte.com/'. $ryte_slug .'/website-success/indexability/canonical/target/?filters=%7B%22url%22%3A%7B%22AND%22%3A%5B%5B%22%3D%3D%22%2C%22'. $link .'%22%5D%5D%7D%7D&sort=%7B%22default_table%22%3A%5B%22opr%22%2C%22DESC%22%5D%7D',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}
$ryte_7 = $titan->getOption( 'ryte_7' );
if ( 1 == $ryte_7 ) {
    $admin_bar->add_menu( array(
        'id'    => 'ryte_7',
        'parent' => 'gw-helper-ryte',
        'title' => '<span class="gw_seo_title">Enthalten in Sitemap</span><span class="gw_seo_tag">Indexierbarkeit</span>',
        'href'  => 'https://my.ryte.com/'. $ryte_slug .'/website-success/sitemaps/usage/?filters=%7B%22url%22%3A%7B%22AND%22%3A%5B%5B%22%3D%3D%22%2C%22'. $link .'%22%5D%5D%7D%7D&sort=%7B%22default_table%22%3A%5B%22sitemap_url%22%2C%22DESC%22%5D%7D',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}
$ryte_13 = $titan->getOption( 'ryte_13' );
if ( 1 == $ryte_13 ) {
    $admin_bar->add_menu( array(
        'id'    => 'ryte_13',
        'parent' => 'gw-helper-ryte',
        'title' => '<span class="gw_seo_title">Duplicate Content</span><span class="gw_seo_tag">Inhalt</span>',
        'href'  => 'https://my.ryte.com/'. $ryte_slug .'/website-success/content/duplicate-content/?filters=%7B%22url%22%3A%7B%22AND%22%3A%5B%5B%22%3D%3D%22%2C%22'. $link .'%22%5D%5D%7D%7D&sort=%7B%22default_table%22%3A%5B%22count_duplicate_contents%22%2C%22DESC%22%5D%7D',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
            'class' => 'gw_seo_break'
        )
    ));
}
$ryte_8 = $titan->getOption( 'ryte_8' );
if ( 1 == $ryte_8 ) {
    $admin_bar->add_menu( array(
        'id'    => 'ryte_8',
        'parent' => 'gw-helper-ryte',
        'title' => '<span class="gw_seo_title">Ähnliche Seiten</span><span class="gw_seo_tag">Inhalt</span>',
        'href'  => 'https://my.ryte.com/'. $ryte_slug .'/website-success/content/duplicate-content/near-duplicate-content/?filters=%7B%22url%22%3A%7B%22AND%22%3A%5B%5B%22%3D%3D%22%2C%22'. $link .'%22%5D%5D%7D%7D&sort=%7B%22default_table%22%3A%5B%22count_near_duplicate_contents%22%2C%22DESC%22%5D%7D',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}
$ryte_9 = $titan->getOption( 'ryte_9' );
if ( 1 == $ryte_9 ) {
    $admin_bar->add_menu( array(
        'id'    => 'ryte_9',
        'parent' => 'gw-helper-ryte',
        'title' => '<span class="gw_seo_title">Eingehende Links</span><span class="gw_seo_tag">Inhalt</span>',
        'href'  => 'https://my.ryte.com/'. $ryte_slug .'/website-success/links/overview/?filters=%7B%22to_url%22%3A%7B%22AND%22%3A%5B%5B%22%3D%3D%22%2C%22'. $link .'%22%5D%5D%7D%7D&sort=%7B%22default_table%22%3A%5B%22from_opr%22%2C%22DESC%22%5D%7D',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}
$ryte_6 = $titan->getOption( 'ryte_6' );
if ( 1 == $ryte_6 ) {
    $admin_bar->add_menu( array(
        'id'    => 'ryte_6',
        'parent' => 'gw-helper-ryte',
        'title' => '<span class="gw_seo_title">Ausgehende Links</span><span class="gw_seo_tag">Inhalt</span>',
        'href'  => 'https://my.ryte.com/'. $ryte_slug .'/website-success/links/overview/?filters=%7B%22from_url%22%3A%7B%22AND%22%3A%5B%5B%22%3D%3D%22%2C%22'. $link .'%22%5D%5D%7D%7D&sort=%7B%22default_table%22%3A%5B%22from_opr%22%2C%22DESC%22%5D%7D',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}
$ryte_10 = $titan->getOption( 'ryte_10' );
if ( 1 == $ryte_10 ) {
    $admin_bar->add_menu( array(
        'id'    => 'ryte_10',
        'parent' => 'gw-helper-ryte',
        'title' => '<span class="gw_seo_title">Linktexte</span><span class="gw_seo_tag">Inhalt</span>',
        'href'  => 'https://my.ryte.com/'. $ryte_slug .'/website-success/links/overview/anchors/?filters=%7B%22to_url%22%3A%7B%22AND%22%3A%5B%5B%22%3D%3D%22%2C%22'. $link .'%22%5D%5D%7D%7D&sort=%7B%22default_table%22%3A%5B%22from_opr%22%2C%22DESC%22%5D%7D',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}
$ryte_11 = $titan->getOption( 'ryte_11' );
if ( 1 == $ryte_11 ) {
    $admin_bar->add_menu( array(
        'id'    => 'ryte_11',
        'parent' => 'gw-helper-ryte',
        'title' => '<span class="gw_seo_title">Klicktiefe</span><span class="gw_seo_tag">Inhalt</span>',
        'href'  => 'https://my.ryte.com/'. $ryte_slug .'/website-success/links/clickpath/?filters=%7B%22url%22%3A%7B%22AND%22%3A%5B%5B%22%3D%3D%22%2C%22'. $link .'%22%5D%5D%7D%7D&sort=%7B%22default_table%22%3A%5B%22count_minimum_clicks%22%2C%22DESC%22%5D%7D',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}
$ryte_12 = $titan->getOption( 'ryte_12' );
if ( 1 == $ryte_12 ) {
    $admin_bar->add_menu( array(
        'id'    => 'ryte_12',
        'parent' => 'gw-helper-ryte',
        'title' => '<span class="gw_seo_title">Seitenladezeit</span><span class="gw_seo_tag">Performance</span>',
        'href'  => 'https://my.ryte.com/'. $ryte_slug .'/website-success/performance/load-times/?filters=%7B%22url%22%3A%7B%22AND%22%3A%5B%5B%22%3D%3D%22%2C%22'. $link .'%22%5D%5D%7D%7D&sort=%7B%22default_table%22%3A%5B%22count_words%22%2C%22DESC%22%5D%7D',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
            'class' => 'gw_seo_break'
        )
    ));
}
