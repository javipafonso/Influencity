<?php

/**
 * This is the model class for table "tbl_brands".
 *
 * The followings are the available columns in table 'tbl_brands':
 * @property integer $idb
 * @property string $email
 * @property string $phone
 * @property string $photo
 * @property string $companyname
 * @property string $typecompany
 * @property string $website
 * @property string $location
 * @property string $description
 * @property string $industry
 *
 * The followings are the available model relations:
 * @property TblUser $idb0
 */
class Brands extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
         public $photo;
    
	public function tableName()
	{
		return 'tbl_brands';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			
			array('email, phone, photo, companyname, website, location, description, industry', 'length', 'max'=>120),
			array('typecompany', 'length', 'max'=>1),
                        array('photo', 'file', 'safe' => true,'allowEmpty'=>true, 'maxSize' => (1024 * 300), 'types'=>'jpg, jpeg,png,gif', 'message'=>'*Error, no puede subir un archivo distinto a JPG,PNG,GIFF'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idb, email, phone, photo, companyname, typecompany, website, location, description, industry', 'safe', 'on'=>'search'),
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
			'idb0' => array(self::BELONGS_TO, 'TblUser', 'idb'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			
			'email' => 'Email',
			'phone' => 'Phone',
			'photo' => 'Photo',
			'companyname' => 'Companyname',
			'typecompany' => 'Typecompany',
			'website' => 'Website',
			'location' => 'Location',
			'description' => 'Description',
			'industry' => 'Industry',
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

		
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('companyname',$this->companyname,true);
		$criteria->compare('typecompany',$this->typecompany,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('industry',$this->industry,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Brands the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
