<?php

class MyIterator implements Iterator
{
    private $var = array();

    public function __construct($array)
    {
        if (is_array($array)){
            $this->var = $array;
        }
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
        echo 'rewinding'.PHP_EOL;
        reset($this->var);
    }

    public function current()
    {
        // TODO: Implement current() method.
        $value = current($this->var);
        echo 'current:'.$value.PHP_EOL;
        return $value;
    }

    public function next()
    {
        // TODO: Implement next() method.
        $next = next($this->var);
        echo 'next: '.$next.PHP_EOL;
        return $next;
    }

    public function key()
    {
        // TODO: Implement key() method.
        $key = key($this->var);
        echo 'key: '.$key.PHP_EOL;
        return $key;
    }

    public function valid()
    {
        // TODO: Implement valid() method.
        $valid = $this->current() !== false;
        echo 'valid: '.$valid.PHP_EOL;
        return $valid;
    }
}

$values = array(1,2,3);
$it = new MyIterator($values);

foreach ($it as $k => $v) {
    print $k.':'.$v.PHP_EOL;
}