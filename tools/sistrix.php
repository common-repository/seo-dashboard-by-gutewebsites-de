<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

$sistrix_country = $titan->getOption( 'sistrix_country' );

$sistrix_0 = $titan->getOption( 'sistrix_0' );
if ( 1 == $sistrix_0 ) {
    $admin_bar->add_menu( array(
        'id'    => 'sistrix_0',
        'parent' => 'gw-helper-sistrix',
        'title' => '<span class="gw_seo_title">Aktuelle Rankings</span><span class="gw_seo_tag">SEO</span>',
        'href'  => 'https://'. $sistrix_country .'.sistrix.com/url/%22'. $link .'%22/seo/keywords',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$sistrix_1 = $titan->getOption( 'sistrix_1' );
if ( 1 == $sistrix_1 ) {
    $admin_bar->add_menu( array(
        'id'    => 'sistrix_1',
        'parent' => 'gw-helper-sistrix',
        'title' => '<span class="gw_seo_title">Ranking-Chancen</span><span class="gw_seo_tag">SEO</span>',
        'href'  => 'https://'. $sistrix_country .'.sistrix.com/url/%22'. $link .'%22/seo/opportunities',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$sistrix_2 = $titan->getOption( 'sistrix_2' );
if ( 1 == $sistrix_2 ) {
    $admin_bar->add_menu( array(
        'id'    => 'sistrix_2',
        'parent' => 'gw-helper-sistrix',
        'title' => '<span class="gw_seo_title">Wettbewerber</span><span class="gw_seo_tag">SEO</span>',
        'href'  => 'https://'. $sistrix_country .'.sistrix.com/url/%22'. $link .'%22/seo/competition',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$sistrix_3 = $titan->getOption( 'sistrix_3' );
if ( 1 == $sistrix_3 ) {
    $admin_bar->add_menu( array(
        'id'    => 'sistrix_3',
        'parent' => 'gw-helper-sistrix',
        'title' => '<span class="gw_seo_title">Low-Hanging Fruits</span><span class="gw_seo_tag">SEO</span>',
        'href'  => 'https://'. $sistrix_country .'.sistrix.com/url/%22'. $link .'%22/seo/keywords?filters=%5B%5B%22p%22%2C%22between%22%2C%5B11%2C20%5D%5D%5D',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$sistrix_4 = $titan->getOption( 'sistrix_4' );
if ( 1 == $sistrix_4 ) {
    $admin_bar->add_menu( array(
        'id'    => 'sistrix_4',
        'parent' => 'gw-helper-sistrix',
        'title' => '<span class="gw_seo_title">Keyword-Ideen</span><span class="gw_seo_tag">SEO</span>',
        'href'  => 'https://'. $sistrix_country .'.sistrix.com/url/%22'. $link .'%22/seo/ideas',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$sistrix_5 = $titan->getOption( 'sistrix_5' );
if ( 1 == $sistrix_5 ) {
    $admin_bar->add_menu( array(
        'id'    => 'sistrix_5',
        'parent' => 'gw-helper-sistrix',
        'title' => '<span class="gw_seo_title">W-Fragen anzeigen</span><span class="gw_seo_tag">SEO</span>',
        'href'  => 'https://'. $sistrix_country .'.sistrix.com/url/%22'. $link .'%22/seo/keywords?filters=%5B%5B%22k%22%2C%22~%22%2C%22was+%22%5D%2C%5B%22k%22%2C%22~%22%2C%22wie+%22%5D%2C%5B%22k%22%2C%22~%22%2C%22wer+%22%5D%2C%5B%22k%22%2C%22~%22%2C%22wann+%22%5D%2C%5B%22k%22%2C%22~%22%2C%22wo+%22%5D%2C%5B%22k%22%2C%22~%22%2C%22warum+%22%5D%2C%5B%22k%22%2C%22~%22%2C%22wozu+%22%5D%5D',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$sistrix_6 = $titan->getOption( 'sistrix_6' );
if ( 1 == $sistrix_6 ) {
    $admin_bar->add_menu( array(
        'id'    => 'sistrix_6',
        'parent' => 'gw-helper-sistrix',
        'title' => '<span class="gw_seo_title">Backlinks</span><span class="gw_seo_tag">Link</span>',
        'href'  => 'https://'. $sistrix_country .'.sistrix.com/url/%22'. $link .'%22/links/list',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
            'class' => 'gw_seo_break'
        )
    ));
}

$sistrix_8 = $titan->getOption( 'sistrix_8' );
if ( 1 == $sistrix_8 ) {
    $admin_bar->add_menu( array(
        'id'    => 'sistrix_8',
        'parent' => 'gw-helper-sistrix',
        'title' => '<span class="gw_seo_title">Defekte Backinks</span><span class="gw_seo_tag">Link</span>',
        'href' => 'https://'. $sistrix_country .'.sistrix.com/'. $domain .'/links/broken',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$sistrix_7 = $titan->getOption( 'sistrix_7' );
if ( 1 == $sistrix_7 ) {
    $admin_bar->add_menu( array(
        'id'    => 'sistrix_7',
        'parent' => 'gw-helper-sistrix',
        'title' => '<span class="gw_seo_title">Linktexte</span><span class="gw_seo_tag">Link</span>',
        'href'  => 'https://'. $sistrix_country .'.sistrix.com/url/%22'. $link .'%22/links/anchors',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}






