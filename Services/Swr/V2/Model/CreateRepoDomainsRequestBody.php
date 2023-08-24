<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRepoDomainsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRepoDomainsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessDomain  共享租户名称
    * permit  当前只支持read权限
    * deadline  截止时间，UTC时间格式。永久有效为forever
    * description  描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessDomain' => 'string',
            'permit' => 'string',
            'deadline' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessDomain  共享租户名称
    * permit  当前只支持read权限
    * deadline  截止时间，UTC时间格式。永久有效为forever
    * description  描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessDomain' => null,
        'permit' => null,
        'deadline' => null,
        'description' => null
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
    * accessDomain  共享租户名称
    * permit  当前只支持read权限
    * deadline  截止时间，UTC时间格式。永久有效为forever
    * description  描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessDomain' => 'access_domain',
            'permit' => 'permit',
            'deadline' => 'deadline',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessDomain  共享租户名称
    * permit  当前只支持read权限
    * deadline  截止时间，UTC时间格式。永久有效为forever
    * description  描述
    *
    * @var string[]
    */
    protected static $setters = [
            'accessDomain' => 'setAccessDomain',
            'permit' => 'setPermit',
            'deadline' => 'setDeadline',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessDomain  共享租户名称
    * permit  当前只支持read权限
    * deadline  截止时间，UTC时间格式。永久有效为forever
    * description  描述
    *
    * @var string[]
    */
    protected static $getters = [
            'accessDomain' => 'getAccessDomain',
            'permit' => 'getPermit',
            'deadline' => 'getDeadline',
            'description' => 'getDescription'
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
        $this->container['accessDomain'] = isset($data['accessDomain']) ? $data['accessDomain'] : null;
        $this->container['permit'] = isset($data['permit']) ? $data['permit'] : null;
        $this->container['deadline'] = isset($data['deadline']) ? $data['deadline'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accessDomain'] === null) {
            $invalidProperties[] = "'accessDomain' can't be null";
        }
        if ($this->container['permit'] === null) {
            $invalidProperties[] = "'permit' can't be null";
        }
        if ($this->container['deadline'] === null) {
            $invalidProperties[] = "'deadline' can't be null";
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
    * Gets accessDomain
    *  共享租户名称
    *
    * @return string
    */
    public function getAccessDomain()
    {
        return $this->container['accessDomain'];
    }

    /**
    * Sets accessDomain
    *
    * @param string $accessDomain 共享租户名称
    *
    * @return $this
    */
    public function setAccessDomain($accessDomain)
    {
        $this->container['accessDomain'] = $accessDomain;
        return $this;
    }

    /**
    * Gets permit
    *  当前只支持read权限
    *
    * @return string
    */
    public function getPermit()
    {
        return $this->container['permit'];
    }

    /**
    * Sets permit
    *
    * @param string $permit 当前只支持read权限
    *
    * @return $this
    */
    public function setPermit($permit)
    {
        $this->container['permit'] = $permit;
        return $this;
    }

    /**
    * Gets deadline
    *  截止时间，UTC时间格式。永久有效为forever
    *
    * @return string
    */
    public function getDeadline()
    {
        return $this->container['deadline'];
    }

    /**
    * Sets deadline
    *
    * @param string $deadline 截止时间，UTC时间格式。永久有效为forever
    *
    * @return $this
    */
    public function setDeadline($deadline)
    {
        $this->container['deadline'] = $deadline;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

