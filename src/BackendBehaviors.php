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

class BackendBehaviors
{
    public static function adminDashboardHeaders(): string
    {
        return
        My::cssLoad('style.css');
    }

    public static function adminPageHTMLHead(): string
    {
        echo
        My::jsLoad('service.js');

        return '';
    }
}
