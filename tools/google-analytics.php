<?php 

if ( ! defined( 'ABSPATH' ) ) exit;
$gwseodash_ga_id = $titan->getOption( 'gwseodash_ga_report_id' );

$gw_ga_0 = $titan->getOption( 'gw_ga_0' );
if ( 1 == $gw_ga_0 ) {
	$admin_bar->add_menu( array(
	    'id'	=> 'gw_ga_0',
	    'parent' => 'gw-helper-ga',
	    'title' => '<span class="gw_seo_title">Übersicht</span><span class="gw_seo_tag">Echtzeit</span>',
	    'href'  => 'https://analytics.google.com/analytics/web/#/realtime/rt-overview/'. $gwseodash_ga_id .'',
	    'meta'  => array(
	        'target' => '_blank',
	        'rel' => 'noopener',
	    )
	));
}
$gw_ga_13 = $titan->getOption( 'gw_ga_13' );
if ( 1 == $gw_ga_13 ) {
	$admin_bar->add_menu( array(
	    'id'	=> 'gw_ga_13',
	    'parent' => 'gw-helper-ga',
	    'title' => '<span class="gw_seo_title">Besucherquellen</span><span class="gw_seo_tag">Echtzeit</span>',
	    'href'  => 'https://analytics.google.com/analytics/web/#/realtime/rt-traffic/'. $gwseodash_ga_id .'/filter.list=10=='. $strip_gapath_2 .';/',
	    'meta'  => array(
	        'target' => '_blank',
	        'rel' => 'noopener',
	    )
	));
}
$gw_ga_1 = $titan->getOption( 'gw_ga_1' );
if ( 1 == $gw_ga_1 ) {
	$admin_bar->add_menu( array(
	    'id'	=> 'gw_ga_1',
	    'parent' => 'gw-helper-ga',
	    'title' => '<span class="gw_seo_title">Content</span><span class="gw_seo_tag">Echtzeit</span>',
	    'href'  => 'https://analytics.google.com/analytics/web/#/realtime/rt-content/'. $gwseodash_ga_id .'/filter.list=10=='. $strip_gapath_2 .';/',
	    'meta'  => array(
	        'target' => '_blank',
	        'rel' => 'noopener',
	    )
	));
}
$gw_ga_2 = $titan->getOption( 'gw_ga_2' );
if ( 1 == $gw_ga_2 ) {
	$admin_bar->add_menu( array(
	    'id'	=> 'gw_ga_2',
	    'parent' => 'gw-helper-ga',
	    'title' => '<span class="gw_seo_title">Betriebssystem</span><span class="gw_seo_tag">Zielgruppe</span>',
	    'href'  => 'https://analytics.google.com/analytics/web/#/report/visitors-flow/'. $gwseodash_ga_id .'/_r.dimension=analytics.operatingSystem&_r.drilldown=analytics.landingPagePath:'. $strip_gapath .'/',
	    'meta'  => array(
	        'target' => '_blank',
	        'rel' => 'noopener',
	        'class' => 'gw_seo_break'
	    )
	));
}
$gw_ga_3 = $titan->getOption( 'gw_ga_3' );
if ( 1 == $gw_ga_3 ) {
	$admin_bar->add_menu( array(
	    'id'	=> 'gw_ga_3',
	    'parent' => 'gw-helper-ga',
	    'title' => '<span class="gw_seo_title">Browser</span><span class="gw_seo_tag">Zielgruppe</span>',
	    'href'  => 'https://analytics.google.com/analytics/web/#/report/visitors-flow/'. $gwseodash_ga_id .'/_r.dimension=analytics.browser&_r.drilldown=analytics.landingPagePath:'. $strip_gapath .'/',
	    'meta'  => array(
	        'target' => '_blank',
	        'rel' => 'noopener',
	    )
	));
}
$gw_ga_4 = $titan->getOption( 'gw_ga_4' );
if ( 1 == $gw_ga_4 ) {
	$admin_bar->add_menu( array(
	    'id'	=> 'gw_ga_4',
	    'parent' => 'gw-helper-ga',
	    'title' => '<span class="gw_seo_title">Region</span><span class="gw_seo_tag">Zielgruppe</span>',
	    'href'  => 'https://analytics.google.com/analytics/web/#/report/visitors-flow/'. $gwseodash_ga_id .'/_r.dimension=analytics.region&_r.drilldown=analytics.landingPagePath:'. $strip_gapath .'/',
	    'meta'  => array(
	        'target' => '_blank',
	        'rel' => 'noopener',
	    )
	));
}
$gw_ga_14 = $titan->getOption( 'gw_ga_14' );
if ( 1 == $gw_ga_14 ) {
	$admin_bar->add_menu( array(
	    'id'	=> 'gw_ga_14',
	    'parent' => 'gw-helper-ga',
	    'title' => '<span class="gw_seo_title">Sprache</span><span class="gw_seo_tag">Zielgruppe</span>',
	    'href'  => 'https://analytics.google.com/analytics/web/#/report/visitors-flow/'. $gwseodash_ga_id .'/_r.dimension=analytics.language&_r.drilldown=analytics.landingPagePath:'. $strip_gapath .'/',
	    'meta'  => array(
	        'target' => '_blank',
	        'rel' => 'noopener',
	    )
	));
}
$gw_ga_5 = $titan->getOption( 'gw_ga_5' );
if ( 1 == $gw_ga_5 ) {
	$admin_bar->add_menu( array(
	    'id'	=> 'gw_ga_5',
	    'parent' => 'gw-helper-ga',
	    'title' => '<span class="gw_seo_title">Quelle / Medium</span><span class="gw_seo_tag">Akquisition</span>',
	    'href'  => 'https://analytics.google.com/analytics/web/#/report/content-pages/'. $gwseodash_ga_id .'/explorer-table.plotKeys=%5B%5D&explorer-table.secSegmentId=analytics.sourceMedium&_r.drilldown=analytics.pagePath:'. $strip_gapath .'&explorer-table-tableMode.selected=data&explorer-segmentExplorer.segmentId=analytics.pagePath/',
	    'meta'  => array(
	        'target' => '_blank',
	        'rel' => 'noopener',
	        'class' => 'gw_seo_break'
	    )
	));
}
$gw_ga_6 = $titan->getOption( 'gw_ga_6' );
if ( 1 == $gw_ga_6 ) {
	$admin_bar->add_menu( array(
	    'id'	=> 'gw_ga_6',
	    'parent' => 'gw-helper-ga',
	    'title' => '<span class="gw_seo_title">Suchanfragen</span><span class="gw_seo_tag">Akquisition</span>',
	    'href'  => 'https://analytics.google.com/analytics/web/#/report/acquisition-sc-landingpages/'. $gwseodash_ga_id .'/search_console-table.plotKeys=%5B%5D&_r.drilldown=analytics.landingPagePath:'. $strip_gapath .'/',
	    'meta'  => array(
	        'target' => '_blank',
	        'rel' => 'noopener',
	    )
	));
}
$gw_ga_7 = $titan->getOption( 'gw_ga_7' );
if ( 1 == $gw_ga_7 ) {
	$admin_bar->add_menu( array(
	    'id'	=> 'gw_ga_7',
	    'parent' => 'gw-helper-ga',
	    'title' => '<span class="gw_seo_title">Soziale Netzwerke</span><span class="gw_seo_tag">Akquisition</span>',
	    'href'  => 'https://analytics.google.com/analytics/web/#/report/social-pages/'. $gwseodash_ga_id .'/social_referral-table.plotKeys=%5B%5D&_r.drilldown=analytics.socialContentURL:'. $social_gapath .'/',
	    'meta'  => array(
	        'target' => '_blank',
	        'rel' => 'noopener',
	    )
	));
}
$gw_ga_8 = $titan->getOption( 'gw_ga_8' );
if ( 1 == $gw_ga_8 ) {
	$admin_bar->add_menu( array(
	    'id'	=> 'gw_ga_8',
	    'parent' => 'gw-helper-ga',
	    'title' => '<span class="gw_seo_title">URL-Übersicht</span><span class="gw_seo_tag">Verhalten</span>',
	    'href'  => 'https://analytics.google.com/analytics/web/#/report/content-pages/'. $gwseodash_ga_id .'/explorer-table.plotKeys=%5B%5D&_r.drilldown=analytics.pagePath:'. $strip_gapath .'/',
	    'meta'  => array(
	        'target' => '_blank',
	        'rel' => 'noopener',
	        'class' => 'gw_seo_break'
	    )
	));
}
$gw_ga_9 = $titan->getOption( 'gw_ga_9' );
if ( 1 == $gw_ga_9 ) {
	$admin_bar->add_menu( array(
	    'id'	=> 'gw_ga_9',
	    'parent' => 'gw-helper-ga',
	    'title' => '<span class="gw_seo_title">Navigationsübersicht</span><span class="gw_seo_tag">Verhalten</span>',
	    'href'  => 'https://analytics.google.com/analytics/web/#/report/content-pages/'. $gwseodash_ga_id .'/explorer-table.plotKeys=%5B%5D&explorer-table.secSegmentId=analytics.sourceMedium&_r.drilldown=analytics.pagePath:'. $strip_gapath .'&_r.tabId=navigationsummary&explorer-table-tableMode.selected=data&explorer-segmentExplorer.segmentId=analytics.pagePath/',
	    'meta'  => array(
	        'target' => '_blank',
	        'rel' => 'noopener',
	    )
	));
}
$gw_ga_10 = $titan->getOption( 'gw_ga_10' );
if ( 1 == $gw_ga_10 ) {
	$admin_bar->add_menu( array(
	    'id'	=> 'gw_ga_10',
	    'parent' => 'gw-helper-ga',
	    'title' => '<span class="gw_seo_title">Seiten-Timings</span><span class="gw_seo_tag">Verhalten</span>',
	    'href'  => 'https://analytics.google.com/analytics/web/#/report/content-site-speed/'. $gwseodash_ga_id .'/_.gSectionId=site_usage&explorer-table.plotKeys=%5B%5D&explorer-table.secSegmentId=analytics.deviceCategory&_r.drilldown=analytics.pagePath:'. $strip_gapath .'&explorer-table-tableMode.selected=data&explorer-table-dataTable.sortColumnName=analytics.avgPageLoadTime&explorer-table-dataTable.sortDescending=true/',
	    'meta'  => array(
	        'target' => '_blank',
	        'rel' => 'noopener',
	    )
	));
}
$gw_ga_11 = $titan->getOption( 'gw_ga_11' );
if ( 1 == $gw_ga_11 ) {
	$admin_bar->add_menu( array(
	    'id'	=> 'gw_ga_11',
	    'parent' => 'gw-helper-ga',
	    'title' => '<span class="gw_seo_title">Suchbegriffe (interne Suche)</span><span class="gw_seo_tag">Verhalten</span>',
	    'href'  => 'https://analytics.google.com/analytics/web/#/report/content-site-search-pages/'. $gwseodash_ga_id .'/explorer-table.plotKeys=%5B%5D&_r.drilldown=analytics.searchStartPage:'. $strip_gapath .'/',
	    'meta'  => array(
	        'target' => '_blank',
	        'rel' => 'noopener',
	    )
	));
}
$gw_ga_12 = $titan->getOption( 'gw_ga_12' );
if ( 1 == $gw_ga_12 ) {
	$admin_bar->add_menu( array(
	    'id'	=> 'gw_ga_12',
	    'parent' => 'gw-helper-ga',
	    'title' => '<span class="gw_seo_title">Seiten-Ereignisse</span><span class="gw_seo_tag">Verhalten</span>',
	    'href'  => 'https://analytics.google.com/analytics/web/#/report/content-event-pages/'. $gwseodash_ga_id .'/explorer-table.plotKeys=%5B%5D&_r.drilldown=analytics.pagePath:'. $strip_gapath .'/',
	    'meta'  => array(
	        'target' => '_blank',
	        'rel' => 'noopener',
	    )
	));
}