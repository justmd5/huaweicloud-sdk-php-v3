<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceGroupInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceGroupInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupName  资源分组的名称，如：ResourceGroup-Test01。
    * groupId  资源分组的ID，如：rg1603786526428bWbVmk4rP。
    * createTime  资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。
    * instanceStatistics  instanceStatistics
    * status  资源分组的当前状态，值可为health、unhealth、no_alarm_rule；health表示健康，unhealth表示不健康，no_alarm_rule表示未设置告警规则。
    * enterpriseProjectId  创建资源分组时关联的企业项目，默认值为0，表示企业项目为default。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupName' => 'string',
            'groupId' => 'string',
            'createTime' => 'int',
            'instanceStatistics' => '\HuaweiCloud\SDK\Ces\V1\Model\InstanceStatistics',
            'status' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  资源分组的名称，如：ResourceGroup-Test01。
    * groupId  资源分组的ID，如：rg1603786526428bWbVmk4rP。
    * createTime  资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。
    * instanceStatistics  instanceStatistics
    * status  资源分组的当前状态，值可为health、unhealth、no_alarm_rule；health表示健康，unhealth表示不健康，no_alarm_rule表示未设置告警规则。
    * enterpriseProjectId  创建资源分组时关联的企业项目，默认值为0，表示企业项目为default。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupName' => null,
        'groupId' => null,
        'createTime' => 'int64',
        'instanceStatistics' => null,
        'status' => null,
        'enterpriseProjectId' => null
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
    * groupName  资源分组的名称，如：ResourceGroup-Test01。
    * groupId  资源分组的ID，如：rg1603786526428bWbVmk4rP。
    * createTime  资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。
    * instanceStatistics  instanceStatistics
    * status  资源分组的当前状态，值可为health、unhealth、no_alarm_rule；health表示健康，unhealth表示不健康，no_alarm_rule表示未设置告警规则。
    * enterpriseProjectId  创建资源分组时关联的企业项目，默认值为0，表示企业项目为default。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'group_name',
            'groupId' => 'group_id',
            'createTime' => 'create_time',
            'instanceStatistics' => 'instance_statistics',
            'status' => 'status',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  资源分组的名称，如：ResourceGroup-Test01。
    * groupId  资源分组的ID，如：rg1603786526428bWbVmk4rP。
    * createTime  资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。
    * instanceStatistics  instanceStatistics
    * status  资源分组的当前状态，值可为health、unhealth、no_alarm_rule；health表示健康，unhealth表示不健康，no_alarm_rule表示未设置告警规则。
    * enterpriseProjectId  创建资源分组时关联的企业项目，默认值为0，表示企业项目为default。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupName' => 'setGroupName',
            'groupId' => 'setGroupId',
            'createTime' => 'setCreateTime',
            'instanceStatistics' => 'setInstanceStatistics',
            'status' => 'setStatus',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  资源分组的名称，如：ResourceGroup-Test01。
    * groupId  资源分组的ID，如：rg1603786526428bWbVmk4rP。
    * createTime  资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。
    * instanceStatistics  instanceStatistics
    * status  资源分组的当前状态，值可为health、unhealth、no_alarm_rule；health表示健康，unhealth表示不健康，no_alarm_rule表示未设置告警规则。
    * enterpriseProjectId  创建资源分组时关联的企业项目，默认值为0，表示企业项目为default。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupName' => 'getGroupName',
            'groupId' => 'getGroupId',
            'createTime' => 'getCreateTime',
            'instanceStatistics' => 'getInstanceStatistics',
            'status' => 'getStatus',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['instanceStatistics'] = isset($data['instanceStatistics']) ? $data['instanceStatistics'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
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
    * Gets groupName
    *  资源分组的名称，如：ResourceGroup-Test01。
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 资源分组的名称，如：ResourceGroup-Test01。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets groupId
    *  资源分组的ID，如：rg1603786526428bWbVmk4rP。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 资源分组的ID，如：rg1603786526428bWbVmk4rP。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets createTime
    *  资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets instanceStatistics
    *  instanceStatistics
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\InstanceStatistics|null
    */
    public function getInstanceStatistics()
    {
        return $this->container['instanceStatistics'];
    }

    /**
    * Sets instanceStatistics
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\InstanceStatistics|null $instanceStatistics instanceStatistics
    *
    * @return $this
    */
    public function setInstanceStatistics($instanceStatistics)
    {
        $this->container['instanceStatistics'] = $instanceStatistics;
        return $this;
    }

    /**
    * Gets status
    *  资源分组的当前状态，值可为health、unhealth、no_alarm_rule；health表示健康，unhealth表示不健康，no_alarm_rule表示未设置告警规则。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 资源分组的当前状态，值可为health、unhealth、no_alarm_rule；health表示健康，unhealth表示不健康，no_alarm_rule表示未设置告警规则。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  创建资源分组时关联的企业项目，默认值为0，表示企业项目为default。
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
    * @param string|null $enterpriseProjectId 创建资源分组时关联的企业项目，默认值为0，表示企业项目为default。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

