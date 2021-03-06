<?php
App::uses('AppModel', 'Model');
/**
 * Visit Model
 *
 * @property Patient $Patient
 * @property MedhistoryComplaint $MedhistoryComplaint
 * @property Treatment $Treatment
 * @property VitalsLab $VitalsLab
 */
class Visit extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
  public $validate = array(
    'patient_id' => 'notempty'
  );

  //The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
  public $belongsTo = array(
    'Patient' => array(
      'className' => 'Patient',
      'foreignKey' => 'patient_id',
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
  public $hasOne = array(
    'MedhistoryComplaint' => array(
      'className' => 'MedhistoryComplaint',
      'foreignKey' => 'visit_id',
      'dependent' => false,
      'conditions' => '',
      'fields' => '',
      'order' => '',
      'limit' => '',
      'offset' => '',
      'exclusive' => '',
      'finderQuery' => '',
      'counterQuery' => ''
    ),
    'Treatment' => array(
      'className' => 'Treatment',
      'foreignKey' => 'visit_id',
      'dependent' => false,
      'conditions' => '',
      'fields' => '',
      'order' => '',
      'limit' => '',
      'offset' => '',
      'exclusive' => '',
      'finderQuery' => '',
      'counterQuery' => ''
    ),
    'VitalsLab' => array(
      'className' => 'VitalsLab',
      'foreignKey' => 'visit_id',
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
