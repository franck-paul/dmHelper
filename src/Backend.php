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
declare(strict_types=1);

namespace Dotclear\Plugin\dmHelper;

use dcCore;
use dcNsProcess;

class Backend extends dcNsProcess
{
    public static function init(): bool
    {
        static::$init = My::checkContext(My::BACKEND);

        // dead but useful code, in order to have translations
        __('Dashboard Module Helper Library') . __('Helper library for Dashboard Modules');

        return static::$init;
    }

    public static function process(): bool
    {
        if (!static::$init) {
            return false;
        }

        // Dashboard behaviours
        dcCore::app()->addBehaviors([
            'adminDashboardHeaders' => [BackendBehaviors::class, 'adminDashboardHeaders'],
        ]);

        // Register REST methods
        dcCore::app()->rest->addFunction('dmHelperPing', [BackendRest::class, 'ping']);

        return true;
    }
}
