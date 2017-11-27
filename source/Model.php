<?php

/**
 * CodeMommy DatabasePHP
 * @author Candison November <www.kandisheng.com>
 */

namespace CodeMommy\DatabasePHP;

use Illuminate\Database\Eloquent\Model as M;

/**
 * Class Model
 * @package CodeMommy\DatabasePHP
 */
class Model extends M
{
    /**
     * Model constructor.
     */
    public function __construct()
    {
        parent::__construct();
        Database::instance();
    }
}
