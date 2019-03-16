<?php

/**
 * Class DbConfig
 * @author: bmd
 * @version: 1.0 08/03/19
 */
class DbConfig {


	protected $serverName;
	protected $userName;
	protected $passCode;
	protected $dbName;

	function DbConfig() {
		$this->serverName = '172.24.0.2';
		$this->userName = 'root';
		$this->passCode = 'root';
		$this->dbName = 'nuevabd';
	}
}

