<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

$metric_tools_0 = $titan->getOption( 'metric_tools_0' );
if ( 1 == $metric_tools_0 ) {
    $admin_bar->add_menu( array(
        'id'    => 'metric_tools_0',
        'parent' => 'gw-helper-metric-tools',
        'title' => '<span class="gw_seo_title">Aktuelle Rankings</span>',
        'href'  => 'https://metrics.tools/get.php?view=tools&subview=serpindex&subview2=url&subview3='. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$metric_tools_1 = $titan->getOption( 'metric_tools_1' );
if ( 1 == $metric_tools_1 ) {
    $admin_bar->add_menu( array(
        'id'    => 'metric_tools_1',
        'parent' => 'gw-helper-metric-tools',
        'title' => '<span class="gw_seo_title">Ranking-Veränderungen</span>',
        'href'  => 'https://metrics.tools/get.php?view=tools&subview=changes&subview2=url&subview3='. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}

$metric_tools_2 = $titan->getOption( 'metric_tools_2' );
if ( 1 == $metric_tools_2 ) {
    $admin_bar->add_menu( array(
        'id'    => 'metric_tools_2',
        'parent' => 'gw-helper-metric-tools',
        'title' => '<span class="gw_seo_title">Wettbewerber</span>',
        'href'  => 'https://metrics.tools/get.php?view=tools&subview=competitors&subview2=url&subview3='. $link .'',
        'meta'  => array(
            'target' => '_blank',
            'rel' => 'noopener',
        )
    ));
}