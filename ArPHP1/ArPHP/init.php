<?php
/**
 * init script
 *
 * @author ycassnr <ycassnr@gmail.com>
 */
define('START_TIME', microtime(true));

defined('DEFAULT_APP_NAME') or define('DEFAULT_APP_NAME', '');

defined('DS') or define('DS', DIRECTORY_SEPARATOR);

defined('FRAME_PATH') or define('FRAME_PATH', dirname(__FILE__) . DS);

defined('ROOT_PATH') or define('ROOT_PATH', dirname(dirname(__FILE__)) . DS);

defined('APP_PATH') or define('APP_PATH', dirname(FRAME_PATH) . DS . (DEFAULT_APP_NAME ? DEFAULT_APP_NAME . DS : ''));

defined('APP_VIEW_PATH') or define('APP_VIEW_PATH', APP_PATH . 'View' . DS);

defined('CORE_PATH') or define('CORE_PATH', FRAME_PATH . 'Core' . DS);

defined('CONFIG_PATH') or define('CONFIG_PATH', FRAME_PATH . 'Conf' . DS);

defined('APP_CONFIG_PATH') or define('APP_CONFIG_PATH', APP_PATH . 'Conf' . DS);

defined('APP_CONTROLLER_PATH') or define('APP_CONTROLLER_PATH', APP_PATH . 'Controller' . DS);

defined('EXT_PATH') or define('EXT_PATH', FRAME_PATH . 'Extensions' . DS);

defined('COMP_PATH') or define('COMP_PATH', FRAME_PATH . 'Components' . DS);

defined('SERVER_PATH') or define('SERVER_PATH', ($dir = dirname($_SERVER['PHP_SELF'])) == DS ? '/' : str_replace(DS, '/', $dir) . '/');

require_once (CORE_PATH . 'Ar.class.php');

spl_autoload_register('Ar::autoLoader');

set_exception_handler('Ar::exceptionHandler');

set_error_handler('Ar::errorHandler');

Ar::init();