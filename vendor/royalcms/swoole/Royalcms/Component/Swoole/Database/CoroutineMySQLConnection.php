<?php

namespace Royalcms\Component\Database;

use Royalcms\Component\Database\MySqlConnection;

class CoroutineMySQLConnection extends MySqlConnection
{
    /**
     * The active swoole mysql connection.
     *
     * @var CoroutineMySQL
     */
    protected $pdo;

    /**
     * The active swoole mysql used for reads.
     *
     * @var CoroutineMySQL
     */
    protected $readPdo;

    public function getDriverName()
    {
        return 'Swoole Coroutine MySQL';
    }
//
//    protected function prepared($statement)
//    {
//        //TODO
//        return $statement;
//    }
}