<?php
namespace WaterMan\Events;

interface EventInterface
{

    const EV_WRITE = 1;

    CONST EV_READ = 2;

    const EV_SIGNAL = 3;

    CONST EV_TIMER = 4;

    const EV_TIMER_ONCE = 5;

    const EV_EXCEPT = 3;

    public function add();

    public function del();

    public function clearAllTimer();

    public function loop();

    public function destroy();

    public function getTimerCount();


}