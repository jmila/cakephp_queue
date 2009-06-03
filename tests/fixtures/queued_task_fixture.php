<?php

/**
 * @copyright esolut GmbH 2009
 * @link http://www.esolut.de
 * @author mgr2
 * @package Ordermonitor-tests
 * @subpackage Fixtures
 * @version $Id: country_fixture.php 951 2009-03-19 11:43:24Z mgr2 $
 */

class QueuedTaskFixture extends CakeTestFixture {
	public $name = 'QueuedTask';
	public $table = 'queued_tasks';
	public $fields = array(
		'id' => array(
			'type' => 'integer',
			'null' => false,
			'default' => NULL,
			'length' => 10,
			'key' => 'primary'
		),
		'jobtype' => array(
			'type' => 'string',
			'null' => false,
			'length' => 45
		),
		'data' => array(
			'type' => 'text',
			'null' => true,
			'default' => NULL
		),
		'created' => array(
			'type' => 'datetime',
			'null' => false
		),
		'fetched' => array(
			'type' => 'datetime',
			'null' => true,
			'default' => NULL
		),
		'completed' => array(
			'type' => 'datetime',
			'null' => true,
			'default' => NULL
		),
		'failed' => array(
			'type' => 'integer',
			'null' => false,
			'default' => '0',
			'length' => 3
		),
		'indexes' => array(
			'PRIMARY' => array(
				'column' => 'id',
				'unique' => 1
			)
		)
	);
	public $records = array();

}
?>