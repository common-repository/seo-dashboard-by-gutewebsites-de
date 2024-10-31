<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

$gwseodash_ryte_tab->createOption( array(
    'id'      => 'ryte_0',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Einzelseitenanalyse',
    'default' => true 
) );
$gwseodash_ryte_tab->createOption( array(
    'id'      => 'ryte_1',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Server-Monitoring',
    'default' => true 
) );
$gwseodash_ryte_tab->createOption( array(
    'id'      => 'ryte_2',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'robots.txt-Monitoring',
    'default' => true 
) );



$gwseodash_ryte_tab->createOption( array(
'name' => 'Indexierbarkeit',
'type' => 'heading',
) );
$gwseodash_ryte_tab->createOption( array(
    'id'      => 'ryte_3',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Indexierbarkeit',
    'default' => true 
) );
$gwseodash_ryte_tab->createOption( array(
    'id'      => 'ryte_4',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Weiterleitungen',
    'default' => true 
) );
$gwseodash_ryte_tab->createOption( array(
    'id'      => 'ryte_5',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Canonicals',
    'default' => true 
) );
$gwseodash_ryte_tab->createOption( array(
    'id'      => 'ryte_7',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Enthalten in Sitemap',
    'default' => true 
) );

$gwseodash_ryte_tab->createOption( array(
'name' => 'Inhalt',
'type' => 'heading',
) );
$gwseodash_ryte_tab->createOption( array(
    'id'      => 'ryte_13',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Duplicate Content',
    'default' => true 
) );
$gwseodash_ryte_tab->createOption( array(
    'id'      => 'ryte_8',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Ähnliche Seiten',
    'default' => true 
) );
$gwseodash_ryte_tab->createOption( array(
    'id'      => 'ryte_9',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Eingehende Links',
    'default' => true 
) );
$gwseodash_ryte_tab->createOption( array(
    'id'      => 'ryte_6',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Ausgehende Links',
    'default' => true 
) );
$gwseodash_ryte_tab->createOption( array(
    'id'      => 'ryte_10',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Linktexte',
    'default' => true 
) );
$gwseodash_ryte_tab->createOption( array(
    'id'      => 'ryte_11',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Klicktiefe',
    'default' => true 
) );

$gwseodash_ryte_tab->createOption( array(
'name' => 'Performance',
'type' => 'heading',
) );
$gwseodash_ryte_tab->createOption( array(
    'id'      => 'ryte_12',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Seitenladezeit',
    'default' => true 
) );