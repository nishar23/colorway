<?php
/**
 * Setup environments
 * 
 * Set environment based on the current server hostname, this is stored
 * in the $hostname variable
 * 
 * You can define the current environment via: 
 *     define('WP_ENV', 'production');
 * 
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */
/*
 * Set environment based on hostname
 *
 * If you just use localhost for your local test environment then in place of:
 *   case 'domain.dev':
 *
 * Just use:
 *   case 'localhost':
 *
 */
echo "4 <br>";
switch ($hostname) {
    case 'localhost':
        define('WP_ENV', 'local');
        echo "4a <br>";
        break;
    
    case 'staging.domain.com':
        define('WP_ENV', 'staging');
        echo "4b <br>";
        break;
    case 'www.domain.com':
    default: 
        define('WP_ENV', 'production');

}

?>