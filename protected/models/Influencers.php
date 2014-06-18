<?php

/**
 * This is the model class for table "tbl_influencers".
 *
 * The followings are the available columns in table 'tbl_influencers':
 * @property integer $idi
 * @property string $email
 * @property string $firstname
 * @property string $lastname
 * @property string $phone
 * @property string $photoprofile
 * @property string $gender
 * @property string $birthday
 * @property string $birthmonth
 * @property string $birthyear
 * @property string $location
 * @property string $website
 * @property string $biodescription
 * @property string $influencerskills
 * @property string $audencyskills
 * @property string $brands
 *
 * The followings are the available model relations:
 * @property TblUser $idi0
 */
class Influencers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
    
         public $photoprofile;
    
	public function tableName()
	{
		return 'tbl_influencers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, firstname, lastname, phone, photoprofile, gender, birthday, birthmonth, birthyear, location, website, biodescription, influencerskills, audencyskills, brands', 'length', 'max'=>120),
                        array('photoprofile', 'file', 'safe' => true,'allowEmpty'=>true, 'maxSize' => (1024 * 300), 'types'=>'jpg, jpeg,png,gif', 'message'=>'*Error, no puede subir un archivo distinto a JPG,PNG,GIFF'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idi, email, firstname, lastname, phone, photoprofile, gender, birthday, birthmonth, birthyear, location, website, biodescription, influencerskills, audencyskills, brands', 'safe', 'on'=>'search'),
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
			'idi0' => array(self::BELONGS_TO, 'TblUser', 'idi'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idi' => 'Idi',
			'email' => 'Email',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'phone' => 'Phone',
			'photoprofile' => 'Photoprofile',
			'gender' => 'Gender',
			'birthday' => 'Birthday',
			'birthmonth' => 'Birthmonth',
			'birthyear' => 'Birthyear',
			'location' => 'Location',
			'website' => 'Website',
			'biodescription' => 'Biodescription',
			'influencerskills' => 'Influencerskills',
			'audencyskills' => 'Audencyskills',
			'brands' => 'Brands',
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
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('photoprofile',$this->photoprofile,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('birthmonth',$this->birthmonth,true);
		$criteria->compare('birthyear',$this->birthyear,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('biodescription',$this->biodescription,true);
		$criteria->compare('influencerskills',$this->influencerskills,true);
		$criteria->compare('audencyskills',$this->audencyskills,true);
		$criteria->compare('brands',$this->brands,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Influencers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
