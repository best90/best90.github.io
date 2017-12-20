<?php

class Task
{
    protected $taskId;
    protected $coroutine;
    protected $beforeFirstYield = true;
    protected $sendValue;

    /**
     * Task constructor.
     * @param $taskId
     * @param Generator $coroutine
     */
    public function __construct($taskId, Generator $coroutine)
    {
        $this->taskId = $taskId;
        $this->coroutine = $coroutine;
    }

    /**
     * 获取当前Task的Id
     * @return mixed
     */
    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     * 判断task是否执行完毕
     * @return bool
     */
    public function isFinished()
    {
        return !$this->coroutine->valid();
    }

    /**
     * 设置下次传给协程的值，比如$id = (yield $xxx),这个值就给了$id
     * @param $value
     */
    public function setSendValue($value)
    {
        $this->sendValue = $value;
    }

    /**
     * 运行任务
     * @return mixed
     */
    public function run()
    {
        //生成器开始会reset,所以第一值要用current获取
        if ($this->beforeFirstYield){
            $this->beforeFirstYield = false;
            return $this->coroutine->current();
        }else{
            //用send去调用生成器
            $resetValue = $this->coroutine->send($this->sendValue);
            $this->sendValue = null;
            return $resetValue;
        }
    }
}