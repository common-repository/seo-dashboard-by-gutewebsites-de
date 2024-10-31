<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

$gwseodash_gsc_tab->createOption( array(
    'id'      => 'gsc_0',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Abruf wie durch Google',
    'default' => true 
) );

$gwseodash_gsc_tab->createOption( array(
    'id'      => 'gsc_3',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Aktuelle Rankings',
    'default' => true 
) );

$gwseodash_gsc_tab->createOption( array(
    'id'      => 'gsc_2',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Indexabdeckung',
    'default' => true 
) );

$gwseodash_gsc_tab->createOption( array(
    'id'      => 'gsc_4',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Mobile vs. Desktop',
    'default' => true 
) );

$gsc_4 = $titan->getOption( 'gsc_4' );
if ( 1 == $gsc_4 ) {
	$gwseodash_gsc_tab->createOption( array(
	    'id'      => 'gsc_4_number',
	    'type'    => 'number',
	    'name'    => '↳ Monate zur Analyse',
	    'min'	  => 1,
	    'max'	  => 16,
	    'default' => 16 
	) );
}

$gwseodash_gsc_tab->createOption( array(
    'id'      => 'gsc_1',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Suchanfragen',
    'default' => true 
) );

$gsc_1 = $titan->getOption( 'gsc_1' );
if ( 1 == $gsc_1 ) {
	$gwseodash_gsc_tab->createOption( array(
	    'id'      => 'gsc_1_number',
	    'type'    => 'number',
	    'name'    => '↳ Monate zur Analyse',
	    'min'	  => 1,
	    'max'	  => 16,
	    'default' => 3 
	) );
}