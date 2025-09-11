<?php

/**
 * @brief dmHelper, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugins
 *
 * @author Franck Paul and contributors
 *
 * @copyright Franck Paul carnet.franck.paul@gmail.com
 * @copyright GPL-2.0 https://www.gnu.org/licenses/gpl-2.0.html
 */
$this->registerModule(
    'Dashboard Module Helper Library',
    'Helper library for Dashboard Modules',
    'Franck Paul',
    '6.1',
    [
        'date'        => '2025-09-11T10:01:08+0200',
        'requires'    => [['core', '2.36']],
        'permissions' => 'My',
        'type'        => 'plugin',

        'details'    => 'https://open-time.net/?q=dmHelper',
        'support'    => 'https://github.com/franck-paul/dmHelper',
        'repository' => 'https://raw.githubusercontent.com/franck-paul/dmHelper/main/dcstore.xml',
        'license'    => 'gpl2',
    ]
);
