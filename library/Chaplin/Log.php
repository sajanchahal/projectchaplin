<?php
class Chaplin_Log
{
	public static function getInstance()
	{
		return Zend_Controller_Front::getInstance()
			->getParam('bootstrap')
			->getResource('log');
	}
}