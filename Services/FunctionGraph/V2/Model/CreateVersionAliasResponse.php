<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateVersionAliasResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateVersionAliasResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  要获取的别名名称。
    * version  别名对应的版本名称。
    * description  别名描述信息。
    * lastModified  别名最后修改时间。
    * aliasUrn  版本别名唯一标识。
    * additionalVersionWeights  灰度版本信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'version' => 'string',
            'description' => 'string',
            'lastModified' => '\DateTime',
            'aliasUrn' => 'string',
            'additionalVersionWeights' => 'map[string,int]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  要获取的别名名称。
    * version  别名对应的版本名称。
    * description  别名描述信息。
    * lastModified  别名最后修改时间。
    * aliasUrn  版本别名唯一标识。
    * additionalVersionWeights  灰度版本信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'version' => null,
        'description' => null,
        'lastModified' => 'date-time',
        'aliasUrn' => null,
        'additionalVersionWeights' => 'int64'
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
    * name  要获取的别名名称。
    * version  别名对应的版本名称。
    * description  别名描述信息。
    * lastModified  别名最后修改时间。
    * aliasUrn  版本别名唯一标识。
    * additionalVersionWeights  灰度版本信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'version' => 'version',
            'description' => 'description',
            'lastModified' => 'last_modified',
            'aliasUrn' => 'alias_urn',
            'additionalVersionWeights' => 'additional_version_weights'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  要获取的别名名称。
    * version  别名对应的版本名称。
    * description  别名描述信息。
    * lastModified  别名最后修改时间。
    * aliasUrn  版本别名唯一标识。
    * additionalVersionWeights  灰度版本信息
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'version' => 'setVersion',
            'description' => 'setDescription',
            'lastModified' => 'setLastModified',
            'aliasUrn' => 'setAliasUrn',
            'additionalVersionWeights' => 'setAdditionalVersionWeights'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  要获取的别名名称。
    * version  别名对应的版本名称。
    * description  别名描述信息。
    * lastModified  别名最后修改时间。
    * aliasUrn  版本别名唯一标识。
    * additionalVersionWeights  灰度版本信息
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'version' => 'getVersion',
            'description' => 'getDescription',
            'lastModified' => 'getLastModified',
            'aliasUrn' => 'getAliasUrn',
            'additionalVersionWeights' => 'getAdditionalVersionWeights'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['lastModified'] = isset($data['lastModified']) ? $data['lastModified'] : null;
        $this->container['aliasUrn'] = isset($data['aliasUrn']) ? $data['aliasUrn'] : null;
        $this->container['additionalVersionWeights'] = isset($data['additionalVersionWeights']) ? $data['additionalVersionWeights'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets name
    *  要获取的别名名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 要获取的别名名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets version
    *  别名对应的版本名称。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 别名对应的版本名称。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets description
    *  别名描述信息。
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
    * @param string|null $description 别名描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets lastModified
    *  别名最后修改时间。
    *
    * @return \DateTime|null
    */
    public function getLastModified()
    {
        return $this->container['lastModified'];
    }

    /**
    * Sets lastModified
    *
    * @param \DateTime|null $lastModified 别名最后修改时间。
    *
    * @return $this
    */
    public function setLastModified($lastModified)
    {
        $this->container['lastModified'] = $lastModified;
        return $this;
    }

    /**
    * Gets aliasUrn
    *  版本别名唯一标识。
    *
    * @return string|null
    */
    public function getAliasUrn()
    {
        return $this->container['aliasUrn'];
    }

    /**
    * Sets aliasUrn
    *
    * @param string|null $aliasUrn 版本别名唯一标识。
    *
    * @return $this
    */
    public function setAliasUrn($aliasUrn)
    {
        $this->container['aliasUrn'] = $aliasUrn;
        return $this;
    }

    /**
    * Gets additionalVersionWeights
    *  灰度版本信息
    *
    * @return map[string,int]|null
    */
    public function getAdditionalVersionWeights()
    {
        return $this->container['additionalVersionWeights'];
    }

    /**
    * Sets additionalVersionWeights
    *
    * @param map[string,int]|null $additionalVersionWeights 灰度版本信息
    *
    * @return $this
    */
    public function setAdditionalVersionWeights($additionalVersionWeights)
    {
        $this->container['additionalVersionWeights'] = $additionalVersionWeights;
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

