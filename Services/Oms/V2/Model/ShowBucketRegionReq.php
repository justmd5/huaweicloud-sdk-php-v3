<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBucketRegionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBucketRegionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudType  云类型 AWS：亚马逊 Aliyun：阿里云 Qiniu：七牛云 QingCloud：青云 Tencent：腾讯云 Baidu：百度云 KingsoftCloud：金山云 Azure：微软云 UCloud：优刻得 HuaweiCloud：华为云 URLSource：URL HEC：HEC
    * ak  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * sk  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * appId  当源端为腾讯云时，会返回此参数。
    * bucketName  桶名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudType' => 'string',
            'ak' => 'string',
            'sk' => 'string',
            'appId' => 'string',
            'bucketName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudType  云类型 AWS：亚马逊 Aliyun：阿里云 Qiniu：七牛云 QingCloud：青云 Tencent：腾讯云 Baidu：百度云 KingsoftCloud：金山云 Azure：微软云 UCloud：优刻得 HuaweiCloud：华为云 URLSource：URL HEC：HEC
    * ak  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * sk  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * appId  当源端为腾讯云时，会返回此参数。
    * bucketName  桶名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudType' => null,
        'ak' => null,
        'sk' => null,
        'appId' => null,
        'bucketName' => null
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
    * cloudType  云类型 AWS：亚马逊 Aliyun：阿里云 Qiniu：七牛云 QingCloud：青云 Tencent：腾讯云 Baidu：百度云 KingsoftCloud：金山云 Azure：微软云 UCloud：优刻得 HuaweiCloud：华为云 URLSource：URL HEC：HEC
    * ak  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * sk  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * appId  当源端为腾讯云时，会返回此参数。
    * bucketName  桶名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudType' => 'cloud_type',
            'ak' => 'ak',
            'sk' => 'sk',
            'appId' => 'app_id',
            'bucketName' => 'bucket_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudType  云类型 AWS：亚马逊 Aliyun：阿里云 Qiniu：七牛云 QingCloud：青云 Tencent：腾讯云 Baidu：百度云 KingsoftCloud：金山云 Azure：微软云 UCloud：优刻得 HuaweiCloud：华为云 URLSource：URL HEC：HEC
    * ak  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * sk  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * appId  当源端为腾讯云时，会返回此参数。
    * bucketName  桶名
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudType' => 'setCloudType',
            'ak' => 'setAk',
            'sk' => 'setSk',
            'appId' => 'setAppId',
            'bucketName' => 'setBucketName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudType  云类型 AWS：亚马逊 Aliyun：阿里云 Qiniu：七牛云 QingCloud：青云 Tencent：腾讯云 Baidu：百度云 KingsoftCloud：金山云 Azure：微软云 UCloud：优刻得 HuaweiCloud：华为云 URLSource：URL HEC：HEC
    * ak  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * sk  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    * appId  当源端为腾讯云时，会返回此参数。
    * bucketName  桶名
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudType' => 'getCloudType',
            'ak' => 'getAk',
            'sk' => 'getSk',
            'appId' => 'getAppId',
            'bucketName' => 'getBucketName'
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
        $this->container['cloudType'] = isset($data['cloudType']) ? $data['cloudType'] : null;
        $this->container['ak'] = isset($data['ak']) ? $data['ak'] : null;
        $this->container['sk'] = isset($data['sk']) ? $data['sk'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['cloudType'] === null) {
            $invalidProperties[] = "'cloudType' can't be null";
        }
            if ((mb_strlen($this->container['cloudType']) > 100)) {
                $invalidProperties[] = "invalid value for 'cloudType', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['cloudType']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudType', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^(AWS|Azure|Aliyun|Tencent|HuaweiCloud|QingCloud|KingsoftCloud|Baidu|Qiniu|URLSource|UCloud|HEC)$/", $this->container['cloudType'])) {
                $invalidProperties[] = "invalid value for 'cloudType', must be conform to the pattern /^(AWS|Azure|Aliyun|Tencent|HuaweiCloud|QingCloud|KingsoftCloud|Baidu|Qiniu|URLSource|UCloud|HEC)$/.";
            }
            if (!is_null($this->container['ak']) && (mb_strlen($this->container['ak']) > 100)) {
                $invalidProperties[] = "invalid value for 'ak', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['ak']) && (mb_strlen($this->container['ak']) < 0)) {
                $invalidProperties[] = "invalid value for 'ak', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ak']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['ak'])) {
                $invalidProperties[] = "invalid value for 'ak', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            if (!is_null($this->container['sk']) && (mb_strlen($this->container['sk']) > 100)) {
                $invalidProperties[] = "invalid value for 'sk', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['sk']) && (mb_strlen($this->container['sk']) < 0)) {
                $invalidProperties[] = "invalid value for 'sk', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sk']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['sk'])) {
                $invalidProperties[] = "invalid value for 'sk', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) > 255)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['appId']) && (mb_strlen($this->container['appId']) < 0)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appId']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['appId'])) {
                $invalidProperties[] = "invalid value for 'appId', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
        if ($this->container['bucketName'] === null) {
            $invalidProperties[] = "'bucketName' can't be null";
        }
            if ((mb_strlen($this->container['bucketName']) > 100)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['bucketName']) < 0)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['bucketName'])) {
                $invalidProperties[] = "invalid value for 'bucketName', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
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
    * Gets cloudType
    *  云类型 AWS：亚马逊 Aliyun：阿里云 Qiniu：七牛云 QingCloud：青云 Tencent：腾讯云 Baidu：百度云 KingsoftCloud：金山云 Azure：微软云 UCloud：优刻得 HuaweiCloud：华为云 URLSource：URL HEC：HEC
    *
    * @return string
    */
    public function getCloudType()
    {
        return $this->container['cloudType'];
    }

    /**
    * Sets cloudType
    *
    * @param string $cloudType 云类型 AWS：亚马逊 Aliyun：阿里云 Qiniu：七牛云 QingCloud：青云 Tencent：腾讯云 Baidu：百度云 KingsoftCloud：金山云 Azure：微软云 UCloud：优刻得 HuaweiCloud：华为云 URLSource：URL HEC：HEC
    *
    * @return $this
    */
    public function setCloudType($cloudType)
    {
        $this->container['cloudType'] = $cloudType;
        return $this;
    }

    /**
    * Gets ak
    *  源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    *
    * @return string|null
    */
    public function getAk()
    {
        return $this->container['ak'];
    }

    /**
    * Sets ak
    *
    * @param string|null $ak 源端桶的AK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    *
    * @return $this
    */
    public function setAk($ak)
    {
        $this->container['ak'] = $ak;
        return $this;
    }

    /**
    * Gets sk
    *  源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    *
    * @return string|null
    */
    public function getSk()
    {
        return $this->container['sk'];
    }

    /**
    * Sets sk
    *
    * @param string|null $sk 源端桶的SK（最大长度100个字符），task_type为非url_list时，本参数为必选。
    *
    * @return $this
    */
    public function setSk($sk)
    {
        $this->container['sk'] = $sk;
        return $this;
    }

    /**
    * Gets appId
    *  当源端为腾讯云时，会返回此参数。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 当源端为腾讯云时，会返回此参数。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets bucketName
    *  桶名
    *
    * @return string
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string $bucketName 桶名
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
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

