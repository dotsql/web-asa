<?php

/**
 * @see       https://github.com/codenomdev/codeigniter4-midtrans for the canonical source repository
 *
 * @copyright 2020 - Codenom Dev (https://codenom.com).
 * @license   https://github.com/codenomdev/codeigniter4-midtrans/blob/main/LICENSE MIT License
 */

namespace Codenom\Midtrans\Config;

use CodeIgniter\Config\BaseConfig;

class Midtrans extends BaseConfig
{
    /**
     * Your merchant's server key.
     */
    public $serverKey = 'SB-Mid-server-xF3lIhRoHWdTag7fq8vGYo7f';
    /**
     * Your merchant's client key.
     */
    public $clientKey = 'SB-Mid-client-dz6LnTXst1mCGO2x';
    /**
     * Your ID merchant's key.
     */
    public $idMerchant = 'M106643';
    /**
     * True for production
     * false for sandbox mode.
     */
    public $isProduction = false;
    /**
     * Set it true to enable 3D Secure by default.
     */
    public $is3ds = false;
    /**
     *  Set Append URL notification.
     */
    public $appendNotifUrl = '';
    /**
     *  Set Override URL notification.
     */
    public $overrideNotifUrl = '';
    /**
     * Enable request params sanitizer (validate and modify charge request params).
     * See Midtrans_Sanitizer for more details.
     */
    public $isSanitized = false;
    /**
     * Default options for every request.
     */
    public $curlOptions = [];
}