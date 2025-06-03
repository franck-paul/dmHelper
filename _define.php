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
    '4.3',
    [
        'date'        => '2003-08-13T13:42:00+0100',
        'requires'    => [['core', '2.28']],
        'permissions' => 'My',
        'type'        => 'plugin',

        'details'    => 'https://open-time.net/?q=dmHelper',
        'support'    => 'https://github.com/franck-paul/dmHelper',
        'repository' => 'https://raw.githubusercontent.com/franck-paul/dmHelper/main/dcstore.xml',
        'license'    => 'gpl2',
    ]
);
