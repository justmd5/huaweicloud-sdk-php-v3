<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UrlAuth implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UrlAuth';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  是否开启URL鉴权，on：开启,off：关闭。
    * type  鉴权方式 type_a：鉴权方式A type_b：鉴权方式B type_c1：鉴权方式C1 type_c2：鉴权方式C2
    * expireTime  过期时间：范围：0-31536000单位为秒。
    * signMethod  加密的算法 可选择md5或sha256。
    * matchType  鉴权范围，目前仅支持配置所有文件参与鉴权，all：所有文件。
    * inheritConfig  inheritConfig
    * key  鉴权KEY 由6-32位大小写字母、数字构成。
    * backupKey  鉴权KEY（备） 由6-32位大小写字母、数字构成。
    * signArg  鉴权参数：1-100位可以由大小写字母、数字、下划线构成（不能以数字开头）。
    * timeFormat  时间格式 dec：十进制 hex：十六进制 鉴权方式A：只支持十进制 鉴权方式B：只支持十进制 鉴权方式C1：只支持十六进制鉴权方式 鉴权方式C2：支持十进制/十六进制
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'type' => 'string',
            'expireTime' => 'int',
            'signMethod' => 'string',
            'matchType' => 'string',
            'inheritConfig' => '\HuaweiCloud\SDK\Cdn\V2\Model\InheritConfig',
            'key' => 'string',
            'backupKey' => 'string',
            'signArg' => 'string',
            'timeFormat' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  是否开启URL鉴权，on：开启,off：关闭。
    * type  鉴权方式 type_a：鉴权方式A type_b：鉴权方式B type_c1：鉴权方式C1 type_c2：鉴权方式C2
    * expireTime  过期时间：范围：0-31536000单位为秒。
    * signMethod  加密的算法 可选择md5或sha256。
    * matchType  鉴权范围，目前仅支持配置所有文件参与鉴权，all：所有文件。
    * inheritConfig  inheritConfig
    * key  鉴权KEY 由6-32位大小写字母、数字构成。
    * backupKey  鉴权KEY（备） 由6-32位大小写字母、数字构成。
    * signArg  鉴权参数：1-100位可以由大小写字母、数字、下划线构成（不能以数字开头）。
    * timeFormat  时间格式 dec：十进制 hex：十六进制 鉴权方式A：只支持十进制 鉴权方式B：只支持十进制 鉴权方式C1：只支持十六进制鉴权方式 鉴权方式C2：支持十进制/十六进制
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'type' => null,
        'expireTime' => 'int32',
        'signMethod' => null,
        'matchType' => null,
        'inheritConfig' => null,
        'key' => null,
        'backupKey' => null,
        'signArg' => null,
        'timeFormat' => null
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
    * status  是否开启URL鉴权，on：开启,off：关闭。
    * type  鉴权方式 type_a：鉴权方式A type_b：鉴权方式B type_c1：鉴权方式C1 type_c2：鉴权方式C2
    * expireTime  过期时间：范围：0-31536000单位为秒。
    * signMethod  加密的算法 可选择md5或sha256。
    * matchType  鉴权范围，目前仅支持配置所有文件参与鉴权，all：所有文件。
    * inheritConfig  inheritConfig
    * key  鉴权KEY 由6-32位大小写字母、数字构成。
    * backupKey  鉴权KEY（备） 由6-32位大小写字母、数字构成。
    * signArg  鉴权参数：1-100位可以由大小写字母、数字、下划线构成（不能以数字开头）。
    * timeFormat  时间格式 dec：十进制 hex：十六进制 鉴权方式A：只支持十进制 鉴权方式B：只支持十进制 鉴权方式C1：只支持十六进制鉴权方式 鉴权方式C2：支持十进制/十六进制
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'type' => 'type',
            'expireTime' => 'expire_time',
            'signMethod' => 'sign_method',
            'matchType' => 'match_type',
            'inheritConfig' => 'inherit_config',
            'key' => 'key',
            'backupKey' => 'backup_key',
            'signArg' => 'sign_arg',
            'timeFormat' => 'time_format'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  是否开启URL鉴权，on：开启,off：关闭。
    * type  鉴权方式 type_a：鉴权方式A type_b：鉴权方式B type_c1：鉴权方式C1 type_c2：鉴权方式C2
    * expireTime  过期时间：范围：0-31536000单位为秒。
    * signMethod  加密的算法 可选择md5或sha256。
    * matchType  鉴权范围，目前仅支持配置所有文件参与鉴权，all：所有文件。
    * inheritConfig  inheritConfig
    * key  鉴权KEY 由6-32位大小写字母、数字构成。
    * backupKey  鉴权KEY（备） 由6-32位大小写字母、数字构成。
    * signArg  鉴权参数：1-100位可以由大小写字母、数字、下划线构成（不能以数字开头）。
    * timeFormat  时间格式 dec：十进制 hex：十六进制 鉴权方式A：只支持十进制 鉴权方式B：只支持十进制 鉴权方式C1：只支持十六进制鉴权方式 鉴权方式C2：支持十进制/十六进制
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'type' => 'setType',
            'expireTime' => 'setExpireTime',
            'signMethod' => 'setSignMethod',
            'matchType' => 'setMatchType',
            'inheritConfig' => 'setInheritConfig',
            'key' => 'setKey',
            'backupKey' => 'setBackupKey',
            'signArg' => 'setSignArg',
            'timeFormat' => 'setTimeFormat'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  是否开启URL鉴权，on：开启,off：关闭。
    * type  鉴权方式 type_a：鉴权方式A type_b：鉴权方式B type_c1：鉴权方式C1 type_c2：鉴权方式C2
    * expireTime  过期时间：范围：0-31536000单位为秒。
    * signMethod  加密的算法 可选择md5或sha256。
    * matchType  鉴权范围，目前仅支持配置所有文件参与鉴权，all：所有文件。
    * inheritConfig  inheritConfig
    * key  鉴权KEY 由6-32位大小写字母、数字构成。
    * backupKey  鉴权KEY（备） 由6-32位大小写字母、数字构成。
    * signArg  鉴权参数：1-100位可以由大小写字母、数字、下划线构成（不能以数字开头）。
    * timeFormat  时间格式 dec：十进制 hex：十六进制 鉴权方式A：只支持十进制 鉴权方式B：只支持十进制 鉴权方式C1：只支持十六进制鉴权方式 鉴权方式C2：支持十进制/十六进制
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'type' => 'getType',
            'expireTime' => 'getExpireTime',
            'signMethod' => 'getSignMethod',
            'matchType' => 'getMatchType',
            'inheritConfig' => 'getInheritConfig',
            'key' => 'getKey',
            'backupKey' => 'getBackupKey',
            'signArg' => 'getSignArg',
            'timeFormat' => 'getTimeFormat'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['signMethod'] = isset($data['signMethod']) ? $data['signMethod'] : null;
        $this->container['matchType'] = isset($data['matchType']) ? $data['matchType'] : null;
        $this->container['inheritConfig'] = isset($data['inheritConfig']) ? $data['inheritConfig'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['backupKey'] = isset($data['backupKey']) ? $data['backupKey'] : null;
        $this->container['signArg'] = isset($data['signArg']) ? $data['signArg'] : null;
        $this->container['timeFormat'] = isset($data['timeFormat']) ? $data['timeFormat'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['expireTime'] === null) {
            $invalidProperties[] = "'expireTime' can't be null";
        }
        if ($this->container['timeFormat'] === null) {
            $invalidProperties[] = "'timeFormat' can't be null";
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
    * Gets status
    *  是否开启URL鉴权，on：开启,off：关闭。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 是否开启URL鉴权，on：开启,off：关闭。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  鉴权方式 type_a：鉴权方式A type_b：鉴权方式B type_c1：鉴权方式C1 type_c2：鉴权方式C2
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 鉴权方式 type_a：鉴权方式A type_b：鉴权方式B type_c1：鉴权方式C1 type_c2：鉴权方式C2
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets expireTime
    *  过期时间：范围：0-31536000单位为秒。
    *
    * @return int
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int $expireTime 过期时间：范围：0-31536000单位为秒。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets signMethod
    *  加密的算法 可选择md5或sha256。
    *
    * @return string|null
    */
    public function getSignMethod()
    {
        return $this->container['signMethod'];
    }

    /**
    * Sets signMethod
    *
    * @param string|null $signMethod 加密的算法 可选择md5或sha256。
    *
    * @return $this
    */
    public function setSignMethod($signMethod)
    {
        $this->container['signMethod'] = $signMethod;
        return $this;
    }

    /**
    * Gets matchType
    *  鉴权范围，目前仅支持配置所有文件参与鉴权，all：所有文件。
    *
    * @return string|null
    */
    public function getMatchType()
    {
        return $this->container['matchType'];
    }

    /**
    * Sets matchType
    *
    * @param string|null $matchType 鉴权范围，目前仅支持配置所有文件参与鉴权，all：所有文件。
    *
    * @return $this
    */
    public function setMatchType($matchType)
    {
        $this->container['matchType'] = $matchType;
        return $this;
    }

    /**
    * Gets inheritConfig
    *  inheritConfig
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\InheritConfig|null
    */
    public function getInheritConfig()
    {
        return $this->container['inheritConfig'];
    }

    /**
    * Sets inheritConfig
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\InheritConfig|null $inheritConfig inheritConfig
    *
    * @return $this
    */
    public function setInheritConfig($inheritConfig)
    {
        $this->container['inheritConfig'] = $inheritConfig;
        return $this;
    }

    /**
    * Gets key
    *  鉴权KEY 由6-32位大小写字母、数字构成。
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key 鉴权KEY 由6-32位大小写字母、数字构成。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets backupKey
    *  鉴权KEY（备） 由6-32位大小写字母、数字构成。
    *
    * @return string|null
    */
    public function getBackupKey()
    {
        return $this->container['backupKey'];
    }

    /**
    * Sets backupKey
    *
    * @param string|null $backupKey 鉴权KEY（备） 由6-32位大小写字母、数字构成。
    *
    * @return $this
    */
    public function setBackupKey($backupKey)
    {
        $this->container['backupKey'] = $backupKey;
        return $this;
    }

    /**
    * Gets signArg
    *  鉴权参数：1-100位可以由大小写字母、数字、下划线构成（不能以数字开头）。
    *
    * @return string|null
    */
    public function getSignArg()
    {
        return $this->container['signArg'];
    }

    /**
    * Sets signArg
    *
    * @param string|null $signArg 鉴权参数：1-100位可以由大小写字母、数字、下划线构成（不能以数字开头）。
    *
    * @return $this
    */
    public function setSignArg($signArg)
    {
        $this->container['signArg'] = $signArg;
        return $this;
    }

    /**
    * Gets timeFormat
    *  时间格式 dec：十进制 hex：十六进制 鉴权方式A：只支持十进制 鉴权方式B：只支持十进制 鉴权方式C1：只支持十六进制鉴权方式 鉴权方式C2：支持十进制/十六进制
    *
    * @return string
    */
    public function getTimeFormat()
    {
        return $this->container['timeFormat'];
    }

    /**
    * Sets timeFormat
    *
    * @param string $timeFormat 时间格式 dec：十进制 hex：十六进制 鉴权方式A：只支持十进制 鉴权方式B：只支持十进制 鉴权方式C1：只支持十六进制鉴权方式 鉴权方式C2：支持十进制/十六进制
    *
    * @return $this
    */
    public function setTimeFormat($timeFormat)
    {
        $this->container['timeFormat'] = $timeFormat;
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

