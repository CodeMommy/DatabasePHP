<?php

/**
 * CodeMommy DatabasePHP
 * @author Candison November <www.kandisheng.com>
 */

namespace CodeMommy\DatabasePHP;

use Illuminate\Database\Capsule\Manager;

/**
 * Class Database
 * @package CodeMommy\DatabasePHP
 */
class Database extends Manager
{
    /**
     * @var null
     */
    private static $databaseInstance = null;

    /**
     * @var array
     */
    private static $config = array();

    /**
     * Database constructor.
     * @param array $config
     */
    public function __construct($config = array())
    {
        parent::__construct();
        $this->addConnection($config);
        $this->setAsGlobal();
        $this->bootEloquent();
    }

    /**
     * Set Config
     * @param array $config
     */
    public static function setConfig($config = array())
    {
        self::$config = $config;
    }

    /**
     * Instance
     * @return null|static
     */
    public static function instance()
    {
        if (empty(self::$databaseInstance)) {
            self::$databaseInstance = new static(self::$config);
        }
        return self::$databaseInstance;
    }
}
