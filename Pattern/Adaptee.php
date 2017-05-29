<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/29 0029
 * Time: 下午 21:22
 */

namespace Pattern;


interface Target
{
    public function connect($host,$user,$passwd,$dbname)
    {
    }

    public function query($sql)
    {
    }

    public function close()
    {
    }
}

class MySQLAdaptee implements Target
{
    protected $conn;
    public function connect($host, $user, $passwd, $dbname)
    {
        // TODO: Implement connect() method.
        $conn = mysql_connect($host,$user, $passwd);
        mysql_select_db($dbname, $conn);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        // TODO: Implement query() method.
        $result = mysql_query($sql, $this->conn);
        return $result;
    }

    public function close()
    {
        // TODO: Implement close() method.
        mysql_close($this->conn);
    }
}

