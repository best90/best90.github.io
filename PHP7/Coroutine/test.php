<?php
require_once './Task.php';
require_once './Scheduler.php';

function task1() {
    for ($i = 1; $i <= 10; $i ++) {
        echo 'This is task 1 iteration '.$i.PHP_EOL;
        yield;
    }
}

function task2() {
    for ($i = 11; $i <= 15; $i ++) {
        echo 'This is task 2 iteration '.$i.PHP_EOL;
        yield;
    }
}

$scheduler = new Scheduler;
$scheduler->addTask(task1());
$scheduler->addTask(task2());
$scheduler->run();