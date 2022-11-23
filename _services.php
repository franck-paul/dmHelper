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
class dmHelperRest
{
    /**
     * Serve method to ping current server.
     *
     * @return     array   The payload.
     */
    public static function ping(): array
    {
        return [
            'ret' => true,
        ];
    }
}
