<?php
App::uses('SpecificCard', 'Model');

/**
 * SpecificCard Test Case
 *
 */
class SpecificCardTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.specific_card',
		'app.edition',
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
		$this->SpecificCard = ClassRegistry::init('SpecificCard');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SpecificCard);

		parent::tearDown();
	}

}
