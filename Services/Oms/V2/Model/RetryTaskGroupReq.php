<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RetryTaskGroupReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RetryTaskGroupReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * srcAk  源端ak（最大长度100个字符）
    * srcSk  源端sk（最大长度100个字符）
    * dstAk  目的端ak（最大长度100个字符）
    * dstSk  目的端sk（最大长度100个字符）
    * sourceCdnAuthenticationKey  cdn鉴权秘钥
    * migrateFailedObject  失败任务重试方式，标识是否为全量重新迁移，默认false（全量重新迁移）。 值为true时表示只重传失败对象。 值为空或者为false时表示全量重新迁移（默认跳过目的端已迁移对象）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'srcAk' => 'string',
            'srcSk' => 'string',
            'dstAk' => 'string',
            'dstSk' => 'string',
            'sourceCdnAuthenticationKey' => 'string',
            'migrateFailedObject' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * srcAk  源端ak（最大长度100个字符）
    * srcSk  源端sk（最大长度100个字符）
    * dstAk  目的端ak（最大长度100个字符）
    * dstSk  目的端sk（最大长度100个字符）
    * sourceCdnAuthenticationKey  cdn鉴权秘钥
    * migrateFailedObject  失败任务重试方式，标识是否为全量重新迁移，默认false（全量重新迁移）。 值为true时表示只重传失败对象。 值为空或者为false时表示全量重新迁移（默认跳过目的端已迁移对象）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'srcAk' => null,
        'srcSk' => null,
        'dstAk' => null,
        'dstSk' => null,
        'sourceCdnAuthenticationKey' => null,
        'migrateFailedObject' => null
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
    * srcAk  源端ak（最大长度100个字符）
    * srcSk  源端sk（最大长度100个字符）
    * dstAk  目的端ak（最大长度100个字符）
    * dstSk  目的端sk（最大长度100个字符）
    * sourceCdnAuthenticationKey  cdn鉴权秘钥
    * migrateFailedObject  失败任务重试方式，标识是否为全量重新迁移，默认false（全量重新迁移）。 值为true时表示只重传失败对象。 值为空或者为false时表示全量重新迁移（默认跳过目的端已迁移对象）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'srcAk' => 'src_ak',
            'srcSk' => 'src_sk',
            'dstAk' => 'dst_ak',
            'dstSk' => 'dst_sk',
            'sourceCdnAuthenticationKey' => 'source_cdn_authentication_key',
            'migrateFailedObject' => 'migrate_failed_object'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * srcAk  源端ak（最大长度100个字符）
    * srcSk  源端sk（最大长度100个字符）
    * dstAk  目的端ak（最大长度100个字符）
    * dstSk  目的端sk（最大长度100个字符）
    * sourceCdnAuthenticationKey  cdn鉴权秘钥
    * migrateFailedObject  失败任务重试方式，标识是否为全量重新迁移，默认false（全量重新迁移）。 值为true时表示只重传失败对象。 值为空或者为false时表示全量重新迁移（默认跳过目的端已迁移对象）。
    *
    * @var string[]
    */
    protected static $setters = [
            'srcAk' => 'setSrcAk',
            'srcSk' => 'setSrcSk',
            'dstAk' => 'setDstAk',
            'dstSk' => 'setDstSk',
            'sourceCdnAuthenticationKey' => 'setSourceCdnAuthenticationKey',
            'migrateFailedObject' => 'setMigrateFailedObject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * srcAk  源端ak（最大长度100个字符）
    * srcSk  源端sk（最大长度100个字符）
    * dstAk  目的端ak（最大长度100个字符）
    * dstSk  目的端sk（最大长度100个字符）
    * sourceCdnAuthenticationKey  cdn鉴权秘钥
    * migrateFailedObject  失败任务重试方式，标识是否为全量重新迁移，默认false（全量重新迁移）。 值为true时表示只重传失败对象。 值为空或者为false时表示全量重新迁移（默认跳过目的端已迁移对象）。
    *
    * @var string[]
    */
    protected static $getters = [
            'srcAk' => 'getSrcAk',
            'srcSk' => 'getSrcSk',
            'dstAk' => 'getDstAk',
            'dstSk' => 'getDstSk',
            'sourceCdnAuthenticationKey' => 'getSourceCdnAuthenticationKey',
            'migrateFailedObject' => 'getMigrateFailedObject'
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
        $this->container['srcAk'] = isset($data['srcAk']) ? $data['srcAk'] : null;
        $this->container['srcSk'] = isset($data['srcSk']) ? $data['srcSk'] : null;
        $this->container['dstAk'] = isset($data['dstAk']) ? $data['dstAk'] : null;
        $this->container['dstSk'] = isset($data['dstSk']) ? $data['dstSk'] : null;
        $this->container['sourceCdnAuthenticationKey'] = isset($data['sourceCdnAuthenticationKey']) ? $data['sourceCdnAuthenticationKey'] : null;
        $this->container['migrateFailedObject'] = isset($data['migrateFailedObject']) ? $data['migrateFailedObject'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['srcAk']) && (mb_strlen($this->container['srcAk']) > 100)) {
                $invalidProperties[] = "invalid value for 'srcAk', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['srcAk']) && (mb_strlen($this->container['srcAk']) < 0)) {
                $invalidProperties[] = "invalid value for 'srcAk', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['srcAk']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['srcAk'])) {
                $invalidProperties[] = "invalid value for 'srcAk', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            if (!is_null($this->container['srcSk']) && (mb_strlen($this->container['srcSk']) > 100)) {
                $invalidProperties[] = "invalid value for 'srcSk', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['srcSk']) && (mb_strlen($this->container['srcSk']) < 0)) {
                $invalidProperties[] = "invalid value for 'srcSk', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['srcSk']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['srcSk'])) {
                $invalidProperties[] = "invalid value for 'srcSk', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            if (!is_null($this->container['dstAk']) && (mb_strlen($this->container['dstAk']) > 100)) {
                $invalidProperties[] = "invalid value for 'dstAk', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['dstAk']) && (mb_strlen($this->container['dstAk']) < 0)) {
                $invalidProperties[] = "invalid value for 'dstAk', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dstAk']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['dstAk'])) {
                $invalidProperties[] = "invalid value for 'dstAk', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            if (!is_null($this->container['dstSk']) && (mb_strlen($this->container['dstSk']) > 100)) {
                $invalidProperties[] = "invalid value for 'dstSk', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['dstSk']) && (mb_strlen($this->container['dstSk']) < 0)) {
                $invalidProperties[] = "invalid value for 'dstSk', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dstSk']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['dstSk'])) {
                $invalidProperties[] = "invalid value for 'dstSk', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
            }
            if (!is_null($this->container['sourceCdnAuthenticationKey']) && (mb_strlen($this->container['sourceCdnAuthenticationKey']) > 255)) {
                $invalidProperties[] = "invalid value for 'sourceCdnAuthenticationKey', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['sourceCdnAuthenticationKey']) && (mb_strlen($this->container['sourceCdnAuthenticationKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceCdnAuthenticationKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceCdnAuthenticationKey']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]*$/", $this->container['sourceCdnAuthenticationKey'])) {
                $invalidProperties[] = "invalid value for 'sourceCdnAuthenticationKey', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]*$/.";
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
    * Gets srcAk
    *  源端ak（最大长度100个字符）
    *
    * @return string|null
    */
    public function getSrcAk()
    {
        return $this->container['srcAk'];
    }

    /**
    * Sets srcAk
    *
    * @param string|null $srcAk 源端ak（最大长度100个字符）
    *
    * @return $this
    */
    public function setSrcAk($srcAk)
    {
        $this->container['srcAk'] = $srcAk;
        return $this;
    }

    /**
    * Gets srcSk
    *  源端sk（最大长度100个字符）
    *
    * @return string|null
    */
    public function getSrcSk()
    {
        return $this->container['srcSk'];
    }

    /**
    * Sets srcSk
    *
    * @param string|null $srcSk 源端sk（最大长度100个字符）
    *
    * @return $this
    */
    public function setSrcSk($srcSk)
    {
        $this->container['srcSk'] = $srcSk;
        return $this;
    }

    /**
    * Gets dstAk
    *  目的端ak（最大长度100个字符）
    *
    * @return string|null
    */
    public function getDstAk()
    {
        return $this->container['dstAk'];
    }

    /**
    * Sets dstAk
    *
    * @param string|null $dstAk 目的端ak（最大长度100个字符）
    *
    * @return $this
    */
    public function setDstAk($dstAk)
    {
        $this->container['dstAk'] = $dstAk;
        return $this;
    }

    /**
    * Gets dstSk
    *  目的端sk（最大长度100个字符）
    *
    * @return string|null
    */
    public function getDstSk()
    {
        return $this->container['dstSk'];
    }

    /**
    * Sets dstSk
    *
    * @param string|null $dstSk 目的端sk（最大长度100个字符）
    *
    * @return $this
    */
    public function setDstSk($dstSk)
    {
        $this->container['dstSk'] = $dstSk;
        return $this;
    }

    /**
    * Gets sourceCdnAuthenticationKey
    *  cdn鉴权秘钥
    *
    * @return string|null
    */
    public function getSourceCdnAuthenticationKey()
    {
        return $this->container['sourceCdnAuthenticationKey'];
    }

    /**
    * Sets sourceCdnAuthenticationKey
    *
    * @param string|null $sourceCdnAuthenticationKey cdn鉴权秘钥
    *
    * @return $this
    */
    public function setSourceCdnAuthenticationKey($sourceCdnAuthenticationKey)
    {
        $this->container['sourceCdnAuthenticationKey'] = $sourceCdnAuthenticationKey;
        return $this;
    }

    /**
    * Gets migrateFailedObject
    *  失败任务重试方式，标识是否为全量重新迁移，默认false（全量重新迁移）。 值为true时表示只重传失败对象。 值为空或者为false时表示全量重新迁移（默认跳过目的端已迁移对象）。
    *
    * @return bool|null
    */
    public function getMigrateFailedObject()
    {
        return $this->container['migrateFailedObject'];
    }

    /**
    * Sets migrateFailedObject
    *
    * @param bool|null $migrateFailedObject 失败任务重试方式，标识是否为全量重新迁移，默认false（全量重新迁移）。 值为true时表示只重传失败对象。 值为空或者为false时表示全量重新迁移（默认跳过目的端已迁移对象）。
    *
    * @return $this
    */
    public function setMigrateFailedObject($migrateFailedObject)
    {
        $this->container['migrateFailedObject'] = $migrateFailedObject;
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

