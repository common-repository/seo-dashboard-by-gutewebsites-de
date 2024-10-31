<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

$onpage_0 = $titan->getOption( 'onpage_0' );
if ( 1 == $onpage_0 ) {
    $admin_bar->add_menu( array(
        'id'    => 'onpage_0',
        'parent' => 'gw-helper-onpage',
        'title' => '<span class="gw_seo_title">AMP-Validator</span><span class="gw_seo_tag">AMP</span>',
        'href'  => 'https://validator.ampproject.org/#url='. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$onpage_1 = $titan->getOption( 'onpage_1' );
if ( 1 == $onpage_1 ) {
    $admin_bar->add_menu( array(
        'id'    => 'onpage_1',
        'parent' => 'gw-helper-onpage',
        'title' => '<span class="gw_seo_title">Duplicate Content</span><span class="gw_seo_tag">Siteliner</span>',
        'href'  => 'http://www.siteliner.com/'. $domain .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$onpage_3 = $titan->getOption( 'onpage_3' );
if ( 1 == $onpage_3 ) {
    $admin_bar->add_menu( array(
        'id'    => 'onpage_3',
        'parent' => 'gw-helper-onpage',
        'title' => '<span class="gw_seo_title">hreflang</span><span class="gw_seo_tag">gutewebsites.de</span>',
        'href'  => 'https://www.gutewebsites.de/tool/hreflang-checker?domain_check='. $link .'&utm_source='. $home_url .'&utm_medium=referral&utm_campaign=brand.ressource.wp.plugin.seodashboard.',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$onpage_4 = $titan->getOption( 'onpage_4' );
if ( 1 == $onpage_4 ) {
    $admin_bar->add_menu( array(
        'id'    => 'onpage_4',
        'parent' => 'gw-helper-onpage',
        'title' => '<span class="gw_seo_title">linkfromdomain:-Abfrage</span><span class="gw_seo_tag">bing</span>',
        'href'  => 'http://www.bing.com/search?q=linkfromdomain%3A'. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$onpage_5 = $titan->getOption( 'onpage_5' );
if ( 1 == $onpage_5 ) {
    $admin_bar->add_menu( array(
        'id'    => 'onpage_5',
        'parent' => 'gw-helper-onpage',
        'title' => '<span class="gw_seo_title">PageSpeed Insights</span><span class="gw_seo_tag">Google</span>',
        'href'  => 'https://developers.google.com/speed/pagespeed/insights/?url='. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$onpage_6 = $titan->getOption( 'onpage_6' );
if ( 1 == $onpage_6 ) {
    $admin_bar->add_menu( array(
        'id'    => 'onpage_6',
        'parent' => 'gw-helper-onpage',
        'title' => '<span class="gw_seo_title">robots.txt</span><span class="gw_seo_tag">Intern</span>',
        'href'  => ''. $protocol .''. $domain .'/robots.txt',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$onpage_7 = $titan->getOption( 'onpage_7' );
if ( 1 == $onpage_7 ) {
    $admin_bar->add_menu( array(
        'id'    => 'onpage_7',
        'parent' => 'gw-helper-onpage',
        'title' => '<span class="gw_seo_title">site:-Abfrage</span><span class="gw_seo_tag">Google</span>',
        'href'  => 'https://www.google.de/search?q=site%3A'. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$onpage_8 = $titan->getOption( 'onpage_8' );
if ( 1 == $onpage_8 ) {
    $admin_bar->add_menu( array(
        'id'    => 'onpage_8',
        'parent' => 'gw-helper-onpage',
        'title' => '<span class="gw_seo_title">Strukturierte-Daten</span><span class="gw_seo_tag">Google</span>',
        'href'  => 'https://search.google.com/structured-data/testing-tool/u/0/#url='. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$onpage_9 = $titan->getOption( 'onpage_9' );
if ( 1 == $onpage_9 ) {
    $admin_bar->add_menu( array(
        'id'    => 'onpage_9',
        'parent' => 'gw-helper-onpage',
        'title' => '<span class="gw_seo_title">Mobile-friendly</span><span class="gw_seo_tag">Google</span>',
        'href'  => 'https://search.google.com/test/mobile-friendly?url='. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$onpage_10 = $titan->getOption( 'onpage_10' );
if ( 1 == $onpage_10 ) {
    $admin_bar->add_menu( array(
        'id'    => 'onpage_10',
        'parent' => 'gw-helper-onpage',
        'title' => '<span class="gw_seo_title">Time to first byte</span><span class="gw_seo_tag">bytecheck</span>',
        'href'  => 'http://bytecheck.com/results?resource='. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$onpage_2 = $titan->getOption( 'onpage_2' );
if ( 1 == $onpage_2 ) {
    $admin_bar->add_menu( array(
        'id'    => 'onpage_2',
        'parent' => 'gw-helper-onpage',
        'title' => '<span class="gw_seo_title">Web-Cache</span><span class="gw_seo_tag">Google</span>',
        'href'  => 'http://webcache.googleusercontent.com/search?q=cache:'. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}