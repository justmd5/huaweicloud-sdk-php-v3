<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Quotas implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Quotas';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  资源类型。支持根据资源类型过滤查询指定类型的配额。 ● endpoint_service：终端节点服务 ● endpoint：终端节点
    * used  已创建的资源个数。 取值范围：0~quota数。
    * quota  资源的最大配额数。 取值范围：各类型资源默认配额数的最大值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'used' => 'int',
            'quota' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  资源类型。支持根据资源类型过滤查询指定类型的配额。 ● endpoint_service：终端节点服务 ● endpoint：终端节点
    * used  已创建的资源个数。 取值范围：0~quota数。
    * quota  资源的最大配额数。 取值范围：各类型资源默认配额数的最大值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'used' => null,
        'quota' => null
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
    * type  资源类型。支持根据资源类型过滤查询指定类型的配额。 ● endpoint_service：终端节点服务 ● endpoint：终端节点
    * used  已创建的资源个数。 取值范围：0~quota数。
    * quota  资源的最大配额数。 取值范围：各类型资源默认配额数的最大值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'used' => 'used',
            'quota' => 'quota'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  资源类型。支持根据资源类型过滤查询指定类型的配额。 ● endpoint_service：终端节点服务 ● endpoint：终端节点
    * used  已创建的资源个数。 取值范围：0~quota数。
    * quota  资源的最大配额数。 取值范围：各类型资源默认配额数的最大值。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'used' => 'setUsed',
            'quota' => 'setQuota'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  资源类型。支持根据资源类型过滤查询指定类型的配额。 ● endpoint_service：终端节点服务 ● endpoint：终端节点
    * used  已创建的资源个数。 取值范围：0~quota数。
    * quota  资源的最大配额数。 取值范围：各类型资源默认配额数的最大值。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'used' => 'getUsed',
            'quota' => 'getQuota'
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
    const TYPE_ENDPOINT_SERVICE = 'endpoint_service';
    const TYPE_ENDPOINT = 'endpoint';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ENDPOINT_SERVICE,
            self::TYPE_ENDPOINT,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets type
    *  资源类型。支持根据资源类型过滤查询指定类型的配额。 ● endpoint_service：终端节点服务 ● endpoint：终端节点
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 资源类型。支持根据资源类型过滤查询指定类型的配额。 ● endpoint_service：终端节点服务 ● endpoint：终端节点
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets used
    *  已创建的资源个数。 取值范围：0~quota数。
    *
    * @return int|null
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param int|null $used 已创建的资源个数。 取值范围：0~quota数。
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
        return $this;
    }

    /**
    * Gets quota
    *  资源的最大配额数。 取值范围：各类型资源默认配额数的最大值。
    *
    * @return int|null
    */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
    * Sets quota
    *
    * @param int|null $quota 资源的最大配额数。 取值范围：各类型资源默认配额数的最大值。
    *
    * @return $this
    */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;
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

