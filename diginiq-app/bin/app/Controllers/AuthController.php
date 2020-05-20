<?php
namespace App\Controllers;

/**
 * Class AuthController
 *
 * AuthController provides auth to be available in each method
 * so we can play with auth easily.
 *
 * Extend this class in any new controllers:
 *     class User extends AuthController
 *
 * @package Auth
 */

use Arifrh\Auth\Auth;
use CodeIgniter\Controller;

class AuthController extends Controller
{

	/**
	 * Autoload helper
	 *
	 * @var array
	 */
	protected $helpers = ['bootstrap', 'cookie'];

	/**
	 * Auth Object
	 *
	 * @var stdClass
	 */
	public $auth = null;

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		parent::initController($request, $response, $logger);

		$this->auth = new Auth();
	}
}
