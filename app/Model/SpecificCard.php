<?php
App::uses('AppModel', 'Model');
/**
 * SpecificCard Model
 *
 * @property Edition $Edition
 * @property Card $Card
 * @property CardPrice $CardPrice
 */
class SpecificCard extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'card_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Edition' => array(
			'className' => 'Edition',
			'foreignKey' => 'edition_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Card' => array(
			'className' => 'Card',
			'foreignKey' => 'card_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'CardPrice' => array(
			'className' => 'CardPrice',
			'foreignKey' => 'specific_card_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
