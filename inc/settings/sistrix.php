<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

$gwseodash_sistrix_tab->createOption( array(
'name' => 'SEO-Modul',
'type' => 'heading',
) );
$gwseodash_sistrix_tab->createOption( array(
    'id'      => 'sistrix_0',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Aktuelle Rankings',
    'default' => true 
) );

$gwseodash_sistrix_tab->createOption( array(
    'id'      => 'sistrix_1',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Ranking-Chancen',
    'default' => true 
) );

$gwseodash_sistrix_tab->createOption( array(
    'id'      => 'sistrix_2',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Wettbewerber',
    'default' => true 
) );

$gwseodash_sistrix_tab->createOption( array(
    'id'      => 'sistrix_3',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Low-Hanging Fruits',
    'default' => true 
) );

$gwseodash_sistrix_tab->createOption( array(
    'id'      => 'sistrix_4',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Keyword-Ideen',
    'default' => true 
) );

$gwseodash_sistrix_tab->createOption( array(
    'id'      => 'sistrix_5',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'W-Fragen anzeigen',
    'default' => true 
) );

$gwseodash_sistrix_tab->createOption( array(
'name' => 'Link-Modul',
'type' => 'heading',
) );
$gwseodash_sistrix_tab->createOption( array(
    'id'      => 'sistrix_6',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Backlinks',
    'default' => true 
) );

$gwseodash_sistrix_tab->createOption( array(
    'id'      => 'sistrix_8',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Defekte Backinks',
    'default' => true 
) );

$gwseodash_sistrix_tab->createOption( array(
    'id'      => 'sistrix_7',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Linktexte',
    'default' => true 
) );