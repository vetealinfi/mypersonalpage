<?php
App::uses('AppModel', 'Model');
/**
 * CardPrice Model
 *
 * @property CardPage $CardPage
 * @property SpecificCard $SpecificCard
 */
class CardPrice extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'specific_card_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'CardPage' => array(
			'className' => 'CardPage',
			'foreignKey' => 'card_page_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SpecificCard' => array(
			'className' => 'SpecificCard',
			'foreignKey' => 'specific_card_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
