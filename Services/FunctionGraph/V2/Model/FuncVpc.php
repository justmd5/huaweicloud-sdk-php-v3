<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FuncVpc implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FuncVpc';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vpcName  虚拟私有云名称。
    * vpcId  虚拟私有云唯一标识。
    * subnetName  子网名称。
    * subnetId  子网编号。
    * cidr  子网掩码。
    * gateway  网关。
    * securityGroups  安全组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vpcName' => 'string',
            'vpcId' => 'string',
            'subnetName' => 'string',
            'subnetId' => 'string',
            'cidr' => 'string',
            'gateway' => 'string',
            'securityGroups' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vpcName  虚拟私有云名称。
    * vpcId  虚拟私有云唯一标识。
    * subnetName  子网名称。
    * subnetId  子网编号。
    * cidr  子网掩码。
    * gateway  网关。
    * securityGroups  安全组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vpcName' => null,
        'vpcId' => null,
        'subnetName' => null,
        'subnetId' => null,
        'cidr' => null,
        'gateway' => null,
        'securityGroups' => null
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
    * vpcName  虚拟私有云名称。
    * vpcId  虚拟私有云唯一标识。
    * subnetName  子网名称。
    * subnetId  子网编号。
    * cidr  子网掩码。
    * gateway  网关。
    * securityGroups  安全组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vpcName' => 'vpc_name',
            'vpcId' => 'vpc_id',
            'subnetName' => 'subnet_name',
            'subnetId' => 'subnet_id',
            'cidr' => 'cidr',
            'gateway' => 'gateway',
            'securityGroups' => 'security_groups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vpcName  虚拟私有云名称。
    * vpcId  虚拟私有云唯一标识。
    * subnetName  子网名称。
    * subnetId  子网编号。
    * cidr  子网掩码。
    * gateway  网关。
    * securityGroups  安全组
    *
    * @var string[]
    */
    protected static $setters = [
            'vpcName' => 'setVpcName',
            'vpcId' => 'setVpcId',
            'subnetName' => 'setSubnetName',
            'subnetId' => 'setSubnetId',
            'cidr' => 'setCidr',
            'gateway' => 'setGateway',
            'securityGroups' => 'setSecurityGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vpcName  虚拟私有云名称。
    * vpcId  虚拟私有云唯一标识。
    * subnetName  子网名称。
    * subnetId  子网编号。
    * cidr  子网掩码。
    * gateway  网关。
    * securityGroups  安全组
    *
    * @var string[]
    */
    protected static $getters = [
            'vpcName' => 'getVpcName',
            'vpcId' => 'getVpcId',
            'subnetName' => 'getSubnetName',
            'subnetId' => 'getSubnetId',
            'cidr' => 'getCidr',
            'gateway' => 'getGateway',
            'securityGroups' => 'getSecurityGroups'
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
        $this->container['vpcName'] = isset($data['vpcName']) ? $data['vpcName'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetName'] = isset($data['subnetName']) ? $data['subnetName'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['gateway'] = isset($data['gateway']) ? $data['gateway'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vpcName'] === null) {
            $invalidProperties[] = "'vpcName' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['subnetName'] === null) {
            $invalidProperties[] = "'subnetName' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['cidr'] === null) {
            $invalidProperties[] = "'cidr' can't be null";
        }
        if ($this->container['gateway'] === null) {
            $invalidProperties[] = "'gateway' can't be null";
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
    * Gets vpcName
    *  虚拟私有云名称。
    *
    * @return string
    */
    public function getVpcName()
    {
        return $this->container['vpcName'];
    }

    /**
    * Sets vpcName
    *
    * @param string $vpcName 虚拟私有云名称。
    *
    * @return $this
    */
    public function setVpcName($vpcName)
    {
        $this->container['vpcName'] = $vpcName;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云唯一标识。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 虚拟私有云唯一标识。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetName
    *  子网名称。
    *
    * @return string
    */
    public function getSubnetName()
    {
        return $this->container['subnetName'];
    }

    /**
    * Sets subnetName
    *
    * @param string $subnetName 子网名称。
    *
    * @return $this
    */
    public function setSubnetName($subnetName)
    {
        $this->container['subnetName'] = $subnetName;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网编号。
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 子网编号。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets cidr
    *  子网掩码。
    *
    * @return string
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string $cidr 子网掩码。
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets gateway
    *  网关。
    *
    * @return string
    */
    public function getGateway()
    {
        return $this->container['gateway'];
    }

    /**
    * Sets gateway
    *
    * @param string $gateway 网关。
    *
    * @return $this
    */
    public function setGateway($gateway)
    {
        $this->container['gateway'] = $gateway;
        return $this;
    }

    /**
    * Gets securityGroups
    *  安全组
    *
    * @return string[]|null
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param string[]|null $securityGroups 安全组
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
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

