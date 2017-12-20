<?php

class Scheduler
{
    protected $taskQueue;
    protected $tid = 0;

    public function __construct()
    {
        //维护一个队列（协程）
        //控制流的主动让出(yield)和恢复(resume)机制
        $this->taskQueue = new SplQueue();
    }

    /**
     * 添加一个任务
     * @param Generator $task
     * @return int
     */
    public function addTask(Generator $task)
    {
        $tid = $this->tid;
        $task = new Task($tid, $task);
        $this->taskQueue->enqueue($task);
        $this->tid ++;
        return $tid;
    }

    /**
     * 把任务进入队列
     * @param Task $task
     */
    public function schedule(Task $task)
    {
        $this->taskQueue->enqueue($task);
    }

    /**
     * 运行调度器
     */
    public function run()
    {
        while (!$this->taskQueue->isEmpty()) {
            //任务出队
            $task = $this->taskQueue->dequeue();
            $res = $task->run(); //运行任务直到yield

            if (!$task->isFinished()) {
                $this->schedule($task);//任务未完全执行完毕，入队等下次执行
            }
        }
    }
}