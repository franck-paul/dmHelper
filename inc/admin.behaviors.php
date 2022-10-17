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
class dmHelperBehaviors
{
    public static function adminDashboardHeaders()
    {
        return
        dcPage::jsModuleLoad('dmHelper/js/service.js', dcCore::app()->getVersion('dmHelper')) .
        dcPage::cssModuleLoad('dmHelper/css/style.css', 'screen', dcCore::app()->getVersion('dmHelper'));
    }
}
