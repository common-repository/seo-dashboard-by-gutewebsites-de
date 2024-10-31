<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

$gwseodash_metric_tools_tab->createOption( array(
    'id'      => 'metric_tools_0',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Aktuelle Rankings',
    'default' => true 
) );

$gwseodash_metric_tools_tab->createOption( array(
    'id'      => 'metric_tools_1',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Ranking-Veränderungen',
    'default' => true 
) );

$gwseodash_metric_tools_tab->createOption( array(
    'id'      => 'metric_tools_2',
    'type'    => 'enable',
    'enabled' => 'Aktivieren',
    'disabled' => 'Deaktivieren',
    'name'    => 'Wettbewerber',
    'default' => true 
) );