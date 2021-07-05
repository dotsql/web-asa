<?php

namespace Config;

use CodeIgniter\Config\BaseService;

/**
 * Services Configuration file.
 *
 * Services are simply other classes/libraries that the system uses
 * to do its job. This is used by CodeIgniter to allow the core of the
 * framework to be swapped out easily without affecting the usage within
 * the rest of your application.
 *
 * This file holds any application-specific services, or service overrides
 * that you might need. An example has been included with the general
 * method format you should use for your service methods. For more examples,
 * see the core Services file at system/Config/Services.php.
 */
class Services extends BaseService
{
	// public static function example($getShared = true)
	// {
	//     if ($getShared)
	//     {
	//         return static::getSharedInstance('example');
	//     }
	//
	//     return new \CodeIgniter\Example();
	// }
}


/**
 * @see       https://github.com/codenomdev/codeigniter4-midtrans for the canonical source repository
 *
 * @copyright 2020 - Codenom Dev (https://codenom.com).
 * @license   https://github.com/codenomdev/codeigniter4-midtrans/blob/main/LICENSE MIT License
 */

namespace Codenom\Midtrans\Config;

use CodeIgniter\Config\Services as CoreServices;
use Codenom\Midtrans\Config\Midtrans as MidtransConfig;
use Codenom\Midtrans\Midtrans;
use Codenom\Midtrans\Veritrans;

class Services extends CoreServices
{
	public static function Midtrans(MidtransConfig $midtransConfig = null, bool $getShared = true)
	{
		if ($getShared) {
			return self::getSharedInstance('Midtrans', $midtransConfig);
		}
		$midtransConfig = $midtransConfig ?? config('Midtrans');

		return new Midtrans($midtransConfig);
	}

	public static function Veritrans(MidtransConfig $midtransConfig = null, bool $getShared = true)
	{
		if ($getShared) {
			return self::getSharedInstance('Veritrans', $midtransConfig);
		}
		$midtransConfig = $midtransConfig ?? config('Midtrans');

		return new Veritrans($midtransConfig);
	}
}
