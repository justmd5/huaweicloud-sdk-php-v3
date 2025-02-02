<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VoiceModelAssetMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VoiceModelAssetMeta';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * modelType  音色资产类型。 * COMMON：通用情感模型 * CLONE：语音克隆模型
    * sex  音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    * language  音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文 * GER：德语 * fr：法语 * Kr：韩语 * por：葡萄牙语 * JPN：日语 * Ita：意大利语 * ESP：西班牙语 * DBH：东北话 * GT：港台 * GXH：广西话 * HBH：湖北话 * SXH：陕西话 * SCH：四川话 * YY：粤语 * Russian: 俄罗斯语 * Filipino: 菲律宾语 * Dutch: 荷兰语 * Indonesian: 印尼语 * Vietnamese: 越南语 * Arabic: 阿拉伯语 * Turkish: 土耳其语 * Malay: 马来语 * Thai: 泰语 * Finnish: 芬兰语  默认UNKNOW。
    * speedRatio  语速缩放比例
    * volumeRatio  音量缩放比例
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'modelType' => 'string',
            'sex' => 'string',
            'language' => 'string',
            'speedRatio' => 'float',
            'volumeRatio' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * modelType  音色资产类型。 * COMMON：通用情感模型 * CLONE：语音克隆模型
    * sex  音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    * language  音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文 * GER：德语 * fr：法语 * Kr：韩语 * por：葡萄牙语 * JPN：日语 * Ita：意大利语 * ESP：西班牙语 * DBH：东北话 * GT：港台 * GXH：广西话 * HBH：湖北话 * SXH：陕西话 * SCH：四川话 * YY：粤语 * Russian: 俄罗斯语 * Filipino: 菲律宾语 * Dutch: 荷兰语 * Indonesian: 印尼语 * Vietnamese: 越南语 * Arabic: 阿拉伯语 * Turkish: 土耳其语 * Malay: 马来语 * Thai: 泰语 * Finnish: 芬兰语  默认UNKNOW。
    * speedRatio  语速缩放比例
    * volumeRatio  音量缩放比例
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'modelType' => null,
        'sex' => null,
        'language' => null,
        'speedRatio' => 'float',
        'volumeRatio' => 'float'
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * modelType  音色资产类型。 * COMMON：通用情感模型 * CLONE：语音克隆模型
    * sex  音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    * language  音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文 * GER：德语 * fr：法语 * Kr：韩语 * por：葡萄牙语 * JPN：日语 * Ita：意大利语 * ESP：西班牙语 * DBH：东北话 * GT：港台 * GXH：广西话 * HBH：湖北话 * SXH：陕西话 * SCH：四川话 * YY：粤语 * Russian: 俄罗斯语 * Filipino: 菲律宾语 * Dutch: 荷兰语 * Indonesian: 印尼语 * Vietnamese: 越南语 * Arabic: 阿拉伯语 * Turkish: 土耳其语 * Malay: 马来语 * Thai: 泰语 * Finnish: 芬兰语  默认UNKNOW。
    * speedRatio  语速缩放比例
    * volumeRatio  音量缩放比例
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'modelType' => 'model_type',
            'sex' => 'sex',
            'language' => 'language',
            'speedRatio' => 'speed_ratio',
            'volumeRatio' => 'volume_ratio'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * modelType  音色资产类型。 * COMMON：通用情感模型 * CLONE：语音克隆模型
    * sex  音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    * language  音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文 * GER：德语 * fr：法语 * Kr：韩语 * por：葡萄牙语 * JPN：日语 * Ita：意大利语 * ESP：西班牙语 * DBH：东北话 * GT：港台 * GXH：广西话 * HBH：湖北话 * SXH：陕西话 * SCH：四川话 * YY：粤语 * Russian: 俄罗斯语 * Filipino: 菲律宾语 * Dutch: 荷兰语 * Indonesian: 印尼语 * Vietnamese: 越南语 * Arabic: 阿拉伯语 * Turkish: 土耳其语 * Malay: 马来语 * Thai: 泰语 * Finnish: 芬兰语  默认UNKNOW。
    * speedRatio  语速缩放比例
    * volumeRatio  音量缩放比例
    *
    * @var string[]
    */
    protected static $setters = [
            'modelType' => 'setModelType',
            'sex' => 'setSex',
            'language' => 'setLanguage',
            'speedRatio' => 'setSpeedRatio',
            'volumeRatio' => 'setVolumeRatio'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * modelType  音色资产类型。 * COMMON：通用情感模型 * CLONE：语音克隆模型
    * sex  音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    * language  音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文 * GER：德语 * fr：法语 * Kr：韩语 * por：葡萄牙语 * JPN：日语 * Ita：意大利语 * ESP：西班牙语 * DBH：东北话 * GT：港台 * GXH：广西话 * HBH：湖北话 * SXH：陕西话 * SCH：四川话 * YY：粤语 * Russian: 俄罗斯语 * Filipino: 菲律宾语 * Dutch: 荷兰语 * Indonesian: 印尼语 * Vietnamese: 越南语 * Arabic: 阿拉伯语 * Turkish: 土耳其语 * Malay: 马来语 * Thai: 泰语 * Finnish: 芬兰语  默认UNKNOW。
    * speedRatio  语速缩放比例
    * volumeRatio  音量缩放比例
    *
    * @var string[]
    */
    protected static $getters = [
            'modelType' => 'getModelType',
            'sex' => 'getSex',
            'language' => 'getLanguage',
            'speedRatio' => 'getSpeedRatio',
            'volumeRatio' => 'getVolumeRatio'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    const MODEL_TYPE_COMMON = 'COMMON';
    const MODEL_TYPE__CLONE = 'CLONE';
    const SEX_UNKNOW = 'UNKNOW';
    const SEX_MALE = 'MALE';
    const SEX_FEMALE = 'FEMALE';
    const LANGUAGE_UNKNOW = 'UNKNOW';
    const LANGUAGE_CN = 'CN';
    const LANGUAGE_EN = 'EN';
    const LANGUAGE_GER = 'GER';
    const LANGUAGE_FR = 'fr';
    const LANGUAGE_KR = 'Kr';
    const LANGUAGE_POR = 'por';
    const LANGUAGE_JPN = 'JPN';
    const LANGUAGE_ITA = 'Ita';
    const LANGUAGE_ESP = 'ESP';
    const LANGUAGE_DBH = 'DBH';
    const LANGUAGE_GT = 'GT';
    const LANGUAGE_GXH = 'GXH';
    const LANGUAGE_HBH = 'HBH';
    const LANGUAGE_SXH = 'SXH';
    const LANGUAGE_SCH = 'SCH';
    const LANGUAGE_YY = 'YY';
    const LANGUAGE_RUSSIAN = 'Russian';
    const LANGUAGE_FILIPINO = 'Filipino';
    const LANGUAGE_DUTCH = 'Dutch';
    const LANGUAGE_INDONESIAN = 'Indonesian';
    const LANGUAGE_VIETNAMESE = 'Vietnamese';
    const LANGUAGE_ARABIC = 'Arabic';
    const LANGUAGE_TURKISH = 'Turkish';
    const LANGUAGE_MALAY = 'Malay';
    const LANGUAGE_THAI = 'Thai';
    const LANGUAGE_FINNISH = 'Finnish';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModelTypeAllowableValues()
    {
        return [
            self::MODEL_TYPE_COMMON,
            self::MODEL_TYPE__CLONE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSexAllowableValues()
    {
        return [
            self::SEX_UNKNOW,
            self::SEX_MALE,
            self::SEX_FEMALE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_UNKNOW,
            self::LANGUAGE_CN,
            self::LANGUAGE_EN,
            self::LANGUAGE_GER,
            self::LANGUAGE_FR,
            self::LANGUAGE_KR,
            self::LANGUAGE_POR,
            self::LANGUAGE_JPN,
            self::LANGUAGE_ITA,
            self::LANGUAGE_ESP,
            self::LANGUAGE_DBH,
            self::LANGUAGE_GT,
            self::LANGUAGE_GXH,
            self::LANGUAGE_HBH,
            self::LANGUAGE_SXH,
            self::LANGUAGE_SCH,
            self::LANGUAGE_YY,
            self::LANGUAGE_RUSSIAN,
            self::LANGUAGE_FILIPINO,
            self::LANGUAGE_DUTCH,
            self::LANGUAGE_INDONESIAN,
            self::LANGUAGE_VIETNAMESE,
            self::LANGUAGE_ARABIC,
            self::LANGUAGE_TURKISH,
            self::LANGUAGE_MALAY,
            self::LANGUAGE_THAI,
            self::LANGUAGE_FINNISH,
        ];
    }


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['modelType'] = isset($data['modelType']) ? $data['modelType'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['speedRatio'] = isset($data['speedRatio']) ? $data['speedRatio'] : null;
        $this->container['volumeRatio'] = isset($data['volumeRatio']) ? $data['volumeRatio'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getModelTypeAllowableValues();
                if (!is_null($this->container['modelType']) && !in_array($this->container['modelType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'modelType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['modelType']) && (mb_strlen($this->container['modelType']) > 32)) {
                $invalidProperties[] = "invalid value for 'modelType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['modelType']) && (mb_strlen($this->container['modelType']) < 0)) {
                $invalidProperties[] = "invalid value for 'modelType', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getSexAllowableValues();
                if (!is_null($this->container['sex']) && !in_array($this->container['sex'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sex', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sex']) && (mb_strlen($this->container['sex']) > 16)) {
                $invalidProperties[] = "invalid value for 'sex', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['sex']) && (mb_strlen($this->container['sex']) < 1)) {
                $invalidProperties[] = "invalid value for 'sex', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getLanguageAllowableValues();
                if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'language', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) > 16)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) < 1)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['speedRatio']) && ($this->container['speedRatio'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'speedRatio', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['speedRatio']) && ($this->container['speedRatio'] < 0)) {
                $invalidProperties[] = "invalid value for 'speedRatio', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['volumeRatio']) && ($this->container['volumeRatio'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'volumeRatio', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['volumeRatio']) && ($this->container['volumeRatio'] < 0)) {
                $invalidProperties[] = "invalid value for 'volumeRatio', must be bigger than or equal to 0.";
            }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets modelType
    *  音色资产类型。 * COMMON：通用情感模型 * CLONE：语音克隆模型
    *
    * @return string|null
    */
    public function getModelType()
    {
        return $this->container['modelType'];
    }

    /**
    * Sets modelType
    *
    * @param string|null $modelType 音色资产类型。 * COMMON：通用情感模型 * CLONE：语音克隆模型
    *
    * @return $this
    */
    public function setModelType($modelType)
    {
        $this->container['modelType'] = $modelType;
        return $this;
    }

    /**
    * Gets sex
    *  音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    *
    * @return string|null
    */
    public function getSex()
    {
        return $this->container['sex'];
    }

    /**
    * Sets sex
    *
    * @param string|null $sex 音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    *
    * @return $this
    */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;
        return $this;
    }

    /**
    * Gets language
    *  音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文 * GER：德语 * fr：法语 * Kr：韩语 * por：葡萄牙语 * JPN：日语 * Ita：意大利语 * ESP：西班牙语 * DBH：东北话 * GT：港台 * GXH：广西话 * HBH：湖北话 * SXH：陕西话 * SCH：四川话 * YY：粤语 * Russian: 俄罗斯语 * Filipino: 菲律宾语 * Dutch: 荷兰语 * Indonesian: 印尼语 * Vietnamese: 越南语 * Arabic: 阿拉伯语 * Turkish: 土耳其语 * Malay: 马来语 * Thai: 泰语 * Finnish: 芬兰语  默认UNKNOW。
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文 * GER：德语 * fr：法语 * Kr：韩语 * por：葡萄牙语 * JPN：日语 * Ita：意大利语 * ESP：西班牙语 * DBH：东北话 * GT：港台 * GXH：广西话 * HBH：湖北话 * SXH：陕西话 * SCH：四川话 * YY：粤语 * Russian: 俄罗斯语 * Filipino: 菲律宾语 * Dutch: 荷兰语 * Indonesian: 印尼语 * Vietnamese: 越南语 * Arabic: 阿拉伯语 * Turkish: 土耳其语 * Malay: 马来语 * Thai: 泰语 * Finnish: 芬兰语  默认UNKNOW。
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets speedRatio
    *  语速缩放比例
    *
    * @return float|null
    */
    public function getSpeedRatio()
    {
        return $this->container['speedRatio'];
    }

    /**
    * Sets speedRatio
    *
    * @param float|null $speedRatio 语速缩放比例
    *
    * @return $this
    */
    public function setSpeedRatio($speedRatio)
    {
        $this->container['speedRatio'] = $speedRatio;
        return $this;
    }

    /**
    * Gets volumeRatio
    *  音量缩放比例
    *
    * @return float|null
    */
    public function getVolumeRatio()
    {
        return $this->container['volumeRatio'];
    }

    /**
    * Sets volumeRatio
    *
    * @param float|null $volumeRatio 音量缩放比例
    *
    * @return $this
    */
    public function setVolumeRatio($volumeRatio)
    {
        $this->container['volumeRatio'] = $volumeRatio;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

