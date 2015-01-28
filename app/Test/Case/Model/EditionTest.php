<?php
App::uses('Edition', 'Model');

/**
 * Edition Test Case
 *
 */
class EditionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.edition',
		'app.specific_card',
		'app.card',
		'app.card_price',
		'app.card_page'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Edition = ClassRegistry::init('Edition');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Edition);

		parent::tearDown();
	}

}
