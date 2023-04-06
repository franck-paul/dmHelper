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
use dcPage;

class BackendBehaviors
{
    public static function adminDashboardHeaders()
    {
        return
        dcPage::jsModuleLoad(My::id() . '/js/service.js', dcCore::app()->getVersion('dmHelper')) .
        dcPage::cssModuleLoad(My::id() . '/css/style.css', 'screen', dcCore::app()->getVersion('dmHelper'));
    }
}
