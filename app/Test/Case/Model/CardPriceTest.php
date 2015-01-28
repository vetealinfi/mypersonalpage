<?php
App::uses('CardPrice', 'Model');

/**
 * CardPrice Test Case
 *
 */
class CardPriceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.card_price',
		'app.card_page',
		'app.specific_card'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CardPrice = ClassRegistry::init('CardPrice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CardPrice);

		parent::tearDown();
	}

}
