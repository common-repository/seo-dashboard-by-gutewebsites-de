<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'tf_create_options', 'gwseodash_options_creating_function' );
 
function gwseodash_options_creating_function() {
 
    $plugin_dir = plugin_dir_url( __FILE__ );

    $titan = TitanFramework::getInstance( 'gwseod' );
    
    $gwseodash_panel = $titan->createAdminPanel( array(
        'name' => 'SEO-Dashboard',
        'id' => 'gw-seo-dashboard',
        'parent' => 'options-general.php',
        'title' => 'SEO-Dashboard by gutewebsites.de',
        'desc' => '<div class="update-nag notice"><strong>Wichtig:</strong> Wenn du die Einstellungen veränderst, lösche bitte sämtliche Caches! Ansonsten kann es sein, dass deine aktualisierten Einstellungen nicht im Frontend angezeigt werden.</div>',
    ) );
 
    $gwseodash_tab = $gwseodash_panel->createTab( array(
		'name' => 'Tool-Auswahl',
	) );

    $gwseodash_tab->createOption( array(
        'id'      => 'gwseodash_ahrefs_enable_opt',
        'type'    => 'enable',
        'enabled' => 'Aktivieren',
        'disabled' => 'Deaktivieren',
        'name'    => 'Ahrefs',
        'default' => true 
    ) );

    $gwseodash_tab->createOption( array(
        'id'      => 'gwseodash_ga_enable_opt',
        'type'    => 'enable',
        'enabled' => 'Aktivieren',
        'disabled' => 'Deaktivieren',
        'name'    => 'Google Analytics',
        'desc' => 'Bei der Aktivierung dringend die Konto-Property-Datenansicht-ID abspeichern! Ansonsten funktionieren die Routinen nicht.',
        'default' => false 
    ) );

    $gwseodash_ga = $titan->getOption( 'gwseodash_ga_enable_opt' );
    $gwseodash_tab->createOption( array(
        'id'      => 'gwseodash_ga_report_id',
        'type'    => 'text',
        'desc' => '<p>Deine Konto-Property-Datenansicht-ID findest du in der <a href="https://analytics.google.com/" target="_blank" rel="noopener">URL von Google Analytics</a>. Hier eine Beispiel, wo du die ID finden kannst:</p><p><img class="ga_dataview_id" src="'. $plugin_dir .'/analytics-report-id.png" alt="Beispiel einer Konto-Property-Datenansicht-ID" /></p>',
        'name'    => '↳ Konto-Property-Datenansicht-ID',
    ) );

    $gwseodash_tab->createOption( array(
        'id'      => 'gwseodash_gsc_enable_opt',
        'type'    => 'enable',
        'enabled' => 'Aktivieren',
        'disabled' => 'Deaktivieren',
        'name'    => 'Google Search Console',
        'default' => true 
    ) );

    $gwseodash_tab->createOption( array(
        'id'      => 'gwseodash_metric_tools_enable_opt',
        'type'    => 'enable',
        'enabled' => 'Aktivieren',
        'disabled' => 'Deaktivieren',
        'name'    => 'Metrics Tools',
        'default' => true 
    ) );

    $gwseodash_tab->createOption( array(
        'id'      => 'gwseodash_moz_pro_enable_opt',
        'type'    => 'enable',
        'enabled' => 'Aktivieren',
        'disabled' => 'Deaktivieren',
        'name'    => 'Moz Pro',
        'default' => true 
    ) );

    $gwseodash_tab->createOption( array(
        'id'      => 'gwseodash_onpage_checks_enable_opt',
        'type'    => 'enable',
        'enabled' => 'Aktivieren',
        'disabled' => 'Deaktivieren',
        'name'    => 'OnPage-Checks',
        'default' => true 
    ) );
    
    $gwseodash_tab->createOption( array(
        'id'      => 'gwseodash_ryte_enable_opt',
        'type'    => 'enable',
        'enabled' => 'Aktivieren',
        'disabled' => 'Deaktivieren',
        'name'    => 'RYTE',
        'desc' => 'Bei der Aktivierung dringend den Projekt-Slug abspeichern! Ansonsten funktionieren die Routinen nicht.',
        'default' => false 
    ) );

    $gwseodash_ryte = $titan->getOption( 'gwseodash_ryte_enable_opt' );
    $gwseodash_tab->createOption( array(
        'id'      => 'gwseodash_ryte_project_slug',
        'type'    => 'text',
        'desc' => '<p>Hier findest du deinen Projekt-Slug:</p><p><img class="ga_dataview_id" src="'. $plugin_dir .'/ryte-slug.png" alt="Beispiel eines RYTE-Slug" /></p>',
        'name'    => '↳ Projekt-Slug',
    ) );

    $gwseodash_tab->createOption( array(
        'id'      => 'gwseodash_sistrix_enable_opt',
        'type'    => 'enable',
        'enabled' => 'Aktivieren',
        'disabled' => 'Deaktivieren',
        'name'    => 'SISTRIX',
        'default' => true 
    ) );
    $gwseodash_tab->createOption( array(
        'name' => '↳ Analysen für …',
        'id' => 'sistrix_country',
        'desc' => 'Bitte wähle aus für welches Land du die SISTRIX-Reports sehen willst.',
        'type' => 'select',
        'options' => array(
            'de' => 'Deutschland',
            'at' => 'Österreich',
            'ch' => 'Schweiz',
            'nl' => 'Niederlande',
            'fr' => 'Frankreich',
            'it' => 'Italien',
            'es' => 'Spanien',
            'pl' => 'Polen',
            'uk' => 'Vereinigtes Königreich',
            'us' => 'USA',
            'se' => 'Schweden',
            'br' => 'Brasilien',
            'tr' => 'Türkei',
        ),
        'default' => 'de',
    ) );
     
    $gwseodash_ahrefs = $titan->getOption( 'gwseodash_ahrefs_enable_opt' );
    $gwseodash_gsc = $titan->getOption( 'gwseodash_gsc_enable_opt' );
    $gwseodash_metric_tools = $titan->getOption( 'gwseodash_metric_tools_enable_opt' );
    $gwseodash_moz_pro = $titan->getOption( 'gwseodash_moz_pro_enable_opt' );
    $gwseodash_onpage_checks = $titan->getOption( 'gwseodash_onpage_checks_enable_opt' );
    $gwseodash_sistrix = $titan->getOption( 'gwseodash_sistrix_enable_opt' );

    if ( 1 == $gwseodash_ahrefs ) {
        $gwseodash_ahrefs_tab = $gwseodash_panel->createTab( array(
            'name' => 'Ahrefs',
        ) );
        include "settings/ahrefs.php";
    }
    if ( 1 == $gwseodash_ga ) {
        $gwseodash_ga_tab = $gwseodash_panel->createTab( array(
            'name' => 'Google Analytics',
        ) );
        include "settings/google-analytics.php";
    }
    if ( 1 == $gwseodash_gsc ) {
	    $gwseodash_gsc_tab = $gwseodash_panel->createTab( array(
			'name' => 'Google Search Console',
		) );
		include "settings/gsc.php";
	}
	if ( 1 == $gwseodash_metric_tools ) {
	    $gwseodash_metric_tools_tab = $gwseodash_panel->createTab( array(
			'name' => 'Metrics Tools',
		) );
		include "settings/metric-tools.php";
	}
    if ( 1 == $gwseodash_moz_pro ) {
        $gwseodash_moz_pro_tab = $gwseodash_panel->createTab( array(
            'name' => 'Moz Pro',
        ) );
        include "settings/moz-pro.php";
    }
	if ( 1 == $gwseodash_onpage_checks ) {
	    $gwseodash_onpage_checks_tab = $gwseodash_panel->createTab( array(
			'name' => 'OnPage-Checks',
		) );
		include "settings/onpage.php";
	}
    if ( 1 == $gwseodash_ryte ) {
        $gwseodash_ryte_tab = $gwseodash_panel->createTab( array(
            'name' => 'RYTE',
        ) );
        include "settings/ryte.php";
    }
	if ( 1 == $gwseodash_sistrix ) {
	    $gwseodash_sistrix_tab = $gwseodash_panel->createTab( array(
			'name' => 'SISTRIX',
		) );
		include "settings/sistrix.php";
	}
    $gwseodash_panel->createOption( array(
        'type' => 'save',
        'save' => 'Speichern',
        'use_reset' => false
    ) );	
}