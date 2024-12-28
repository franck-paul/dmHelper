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

use Dotclear\App;
use Dotclear\Core\Process;

class Backend extends Process
{
    public static function init(): bool
    {
        // dead but useful code, in order to have translations
        __('Dashboard Module Helper Library');
        __('Helper library for Dashboard Modules');

        return self::status(My::checkContext(My::BACKEND));
    }

    public static function process(): bool
    {
        if (!self::status()) {
            return false;
        }

        // Dashboard behaviours
        App::behavior()->addBehaviors([
            'adminPageHTMLHead'     => BackendBehaviors::adminPageHTMLHead(...),
            'adminDashboardHeaders' => BackendBehaviors::adminDashboardHeaders(...),
        ]);

        // Register REST methods
        App::rest()->addFunction('dmHelperPing', BackendRest::ping(...));

        return true;
    }
}
