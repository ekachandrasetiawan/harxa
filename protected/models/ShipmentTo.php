<?php

/**
 * This is the model class for table "{{shipment_to}}".
 *
 * The followings are the available columns in table '{{shipment_to}}':
 * @property integer $id
 * @property integer $cart_id
 * @property integer $sex
 * @property string $person_name
 * @property integer $shipping_addr_id
 * @property string $address
 * @property string $city
 * @property string $zip_code
 * @property string $phone
 *
 * The followings are the available model relations:
 * @property ShippingAddr $shippingAddr
 */
class ShipmentTo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{shipment_to}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cart_id, sex, person_name, address, city', 'required'),
			array('cart_id, sex, shipping_addr_id', 'numerical', 'integerOnly'=>true),
			array('person_name, city, zip_code, phone', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cart_id, sex, person_name, shipping_addr_id, address, city, zip_code, phone', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'shippingAddr' => array(self::BELONGS_TO, 'ShippingAddr', 'shipping_addr_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'cart_id' => 'Cart',
			'sex' => 'Sex',
			'person_name' => 'Person Name',
			'shipping_addr_id' => 'Shipping Addr',
			'address' => 'Address',
			'city' => 'City',
			'zip_code' => 'Zip Code',
			'phone' => 'Phone',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('cart_id',$this->cart_id);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('person_name',$this->person_name,true);
		$criteria->compare('shipping_addr_id',$this->shipping_addr_id);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('zip_code',$this->zip_code,true);
		$criteria->compare('phone',$this->phone,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ShipmentTo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
