<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListConfigTemplatesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListConfigTemplatesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateNum  模板个数。
    * templates  模板的详情数组。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateNum' => 'int',
            'templates' => '\HuaweiCloud\SDK\Dcs\V2\Model\ConfigTemplatesListInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateNum  模板个数。
    * templates  模板的详情数组。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateNum' => 'int32',
        'templates' => null
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
    * templateNum  模板个数。
    * templates  模板的详情数组。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateNum' => 'template_num',
            'templates' => 'templates'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateNum  模板个数。
    * templates  模板的详情数组。
    *
    * @var string[]
    */
    protected static $setters = [
            'templateNum' => 'setTemplateNum',
            'templates' => 'setTemplates'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateNum  模板个数。
    * templates  模板的详情数组。
    *
    * @var string[]
    */
    protected static $getters = [
            'templateNum' => 'getTemplateNum',
            'templates' => 'getTemplates'
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
        $this->container['templateNum'] = isset($data['templateNum']) ? $data['templateNum'] : null;
        $this->container['templates'] = isset($data['templates']) ? $data['templates'] : null;
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
    * Gets templateNum
    *  模板个数。
    *
    * @return int|null
    */
    public function getTemplateNum()
    {
        return $this->container['templateNum'];
    }

    /**
    * Sets templateNum
    *
    * @param int|null $templateNum 模板个数。
    *
    * @return $this
    */
    public function setTemplateNum($templateNum)
    {
        $this->container['templateNum'] = $templateNum;
        return $this;
    }

    /**
    * Gets templates
    *  模板的详情数组。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\ConfigTemplatesListInfo[]|null
    */
    public function getTemplates()
    {
        return $this->container['templates'];
    }

    /**
    * Sets templates
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\ConfigTemplatesListInfo[]|null $templates 模板的详情数组。
    *
    * @return $this
    */
    public function setTemplates($templates)
    {
        $this->container['templates'] = $templates;
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

