<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAddressSetsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAddressSetsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  租户项目id
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    * keyWord  关键字
    * limit  每页显示个数，范围为1-1024
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * address  ip地址
    * addressType  地址类型0 ipv4,1 ipv6
    * enterpriseProjectId  企业项目id，用户支持企业项目后，由企业项目生成的id。
    * fwInstanceId  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用查询防火墙实例接口获得。具体可参考APIExlorer和帮助中心FAQ。默认情况下，fw_instance_Id为空时，返回帐号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'objectId' => 'string',
            'keyWord' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'address' => 'string',
            'addressType' => 'int',
            'enterpriseProjectId' => 'string',
            'fwInstanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  租户项目id
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    * keyWord  关键字
    * limit  每页显示个数，范围为1-1024
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * address  ip地址
    * addressType  地址类型0 ipv4,1 ipv6
    * enterpriseProjectId  企业项目id，用户支持企业项目后，由企业项目生成的id。
    * fwInstanceId  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用查询防火墙实例接口获得。具体可参考APIExlorer和帮助中心FAQ。默认情况下，fw_instance_Id为空时，返回帐号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'objectId' => null,
        'keyWord' => null,
        'limit' => null,
        'offset' => null,
        'address' => null,
        'addressType' => 'int32',
        'enterpriseProjectId' => null,
        'fwInstanceId' => null
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
    * projectId  租户项目id
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    * keyWord  关键字
    * limit  每页显示个数，范围为1-1024
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * address  ip地址
    * addressType  地址类型0 ipv4,1 ipv6
    * enterpriseProjectId  企业项目id，用户支持企业项目后，由企业项目生成的id。
    * fwInstanceId  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用查询防火墙实例接口获得。具体可参考APIExlorer和帮助中心FAQ。默认情况下，fw_instance_Id为空时，返回帐号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'objectId' => 'object_id',
            'keyWord' => 'key_word',
            'limit' => 'limit',
            'offset' => 'offset',
            'address' => 'address',
            'addressType' => 'address_type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'fwInstanceId' => 'fw_instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  租户项目id
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    * keyWord  关键字
    * limit  每页显示个数，范围为1-1024
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * address  ip地址
    * addressType  地址类型0 ipv4,1 ipv6
    * enterpriseProjectId  企业项目id，用户支持企业项目后，由企业项目生成的id。
    * fwInstanceId  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用查询防火墙实例接口获得。具体可参考APIExlorer和帮助中心FAQ。默认情况下，fw_instance_Id为空时，返回帐号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'objectId' => 'setObjectId',
            'keyWord' => 'setKeyWord',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'address' => 'setAddress',
            'addressType' => 'setAddressType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'fwInstanceId' => 'setFwInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  租户项目id
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    * keyWord  关键字
    * limit  每页显示个数，范围为1-1024
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * address  ip地址
    * addressType  地址类型0 ipv4,1 ipv6
    * enterpriseProjectId  企业项目id，用户支持企业项目后，由企业项目生成的id。
    * fwInstanceId  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用查询防火墙实例接口获得。具体可参考APIExlorer和帮助中心FAQ。默认情况下，fw_instance_Id为空时，返回帐号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'objectId' => 'getObjectId',
            'keyWord' => 'getKeyWord',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'address' => 'getAddress',
            'addressType' => 'getAddressType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'fwInstanceId' => 'getFwInstanceId'
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
    const ADDRESS_TYPE_0 = 0;
    const ADDRESS_TYPE_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAddressTypeAllowableValues()
    {
        return [
            self::ADDRESS_TYPE_0,
            self::ADDRESS_TYPE_1,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['keyWord'] = isset($data['keyWord']) ? $data['keyWord'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['addressType'] = isset($data['addressType']) ? $data['addressType'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['fwInstanceId'] = isset($data['fwInstanceId']) ? $data['fwInstanceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['objectId'] === null) {
            $invalidProperties[] = "'objectId' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            $allowedValues = $this->getAddressTypeAllowableValues();
                if (!is_null($this->container['addressType']) && !in_array($this->container['addressType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'addressType', must be one of '%s'",
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
    * Gets projectId
    *  租户项目id
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 租户项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets objectId
    *  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    *
    * @return string
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string $objectId 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用查询防火墙实例接口获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。具体可参考APIExlorer和帮助中心FAQ。
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets keyWord
    *  关键字
    *
    * @return string|null
    */
    public function getKeyWord()
    {
        return $this->container['keyWord'];
    }

    /**
    * Sets keyWord
    *
    * @param string|null $keyWord 关键字
    *
    * @return $this
    */
    public function setKeyWord($keyWord)
    {
        $this->container['keyWord'] = $keyWord;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示个数，范围为1-1024
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 每页显示个数，范围为1-1024
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets address
    *  ip地址
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address ip地址
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets addressType
    *  地址类型0 ipv4,1 ipv6
    *
    * @return int|null
    */
    public function getAddressType()
    {
        return $this->container['addressType'];
    }

    /**
    * Sets addressType
    *
    * @param int|null $addressType 地址类型0 ipv4,1 ipv6
    *
    * @return $this
    */
    public function setAddressType($addressType)
    {
        $this->container['addressType'] = $addressType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id，用户支持企业项目后，由企业项目生成的id。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目id，用户支持企业项目后，由企业项目生成的id。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets fwInstanceId
    *  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用查询防火墙实例接口获得。具体可参考APIExlorer和帮助中心FAQ。默认情况下，fw_instance_Id为空时，返回帐号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息。
    *
    * @return string|null
    */
    public function getFwInstanceId()
    {
        return $this->container['fwInstanceId'];
    }

    /**
    * Sets fwInstanceId
    *
    * @param string|null $fwInstanceId 防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用查询防火墙实例接口获得。具体可参考APIExlorer和帮助中心FAQ。默认情况下，fw_instance_Id为空时，返回帐号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息。
    *
    * @return $this
    */
    public function setFwInstanceId($fwInstanceId)
    {
        $this->container['fwInstanceId'] = $fwInstanceId;
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

