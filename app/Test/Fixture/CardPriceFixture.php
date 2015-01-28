<?php
/**
 * CardPriceFixture
 *
 */
class CardPriceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'card_page_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'specific_card_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'nm' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ex' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'v' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'vg' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'card_page_id' => 1,
			'specific_card_id' => 1,
			'nm' => 'Lorem ipsum dolor ',
			'ex' => 'Lorem ipsum dolor ',
			'v' => 'Lorem ipsum dolor ',
			'vg' => 'Lorem ipsum dolor ',
			'created' => '2015-01-28 05:04:05'
		),
	);

}
