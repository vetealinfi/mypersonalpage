<?php
App::uses('CardPage', 'Model');

/**
 * CardPage Test Case
 *
 */
class CardPageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.card_page',
		'app.card_price'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CardPage = ClassRegistry::init('CardPage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CardPage);

		parent::tearDown();
	}

}
