<?php
namespace WaterMan\Events;

class Event
{

	public $eventBase;

	public $eventEvent = [];

	public $signalEvent = [];

	public $timerEvent = [];

	public function __construct() 
	{
		if(!extension_loaded('event')) {
			throw new \Exception('event extension not installed');
		}
		$this->eventBase = new \EventBase();
	}

	public function add($value='')
	{
		// code...
	}

	public function del()
	{
		
	}

}