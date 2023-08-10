<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmTemplates implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmTemplates';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  告警模板的ID，以at开头，后跟字母、数字，长度最长为64
    * templateName  告警模板的名称，以字母或汉字开头，可包含字母、数字、汉字、_、-，长度范围[1,128]
    * templateType  templateType
    * createTime  告警模板的创建时间
    * templateDescription  告警模板的描述，长度范围[0,256]，该字段默认值为空字符串
    * associationAlarmTotal  告警模板关联的告警规则数目
    * policyTotal  告警模板的告警策略总数
    * policyStatistics  服务列表告警策略数目统计
    * associationResourceGroups  关联的资源分组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'string',
            'templateName' => 'string',
            'templateType' => '\HuaweiCloud\SDK\Ces\V2\Model\TemplateType',
            'createTime' => '\DateTime',
            'templateDescription' => 'string',
            'associationAlarmTotal' => 'int',
            'policyTotal' => 'int',
            'policyStatistics' => '\HuaweiCloud\SDK\Ces\V2\Model\PolicyStatistics[]',
            'associationResourceGroups' => '\HuaweiCloud\SDK\Ces\V2\Model\AssociationResourceGroup[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  告警模板的ID，以at开头，后跟字母、数字，长度最长为64
    * templateName  告警模板的名称，以字母或汉字开头，可包含字母、数字、汉字、_、-，长度范围[1,128]
    * templateType  templateType
    * createTime  告警模板的创建时间
    * templateDescription  告警模板的描述，长度范围[0,256]，该字段默认值为空字符串
    * associationAlarmTotal  告警模板关联的告警规则数目
    * policyTotal  告警模板的告警策略总数
    * policyStatistics  服务列表告警策略数目统计
    * associationResourceGroups  关联的资源分组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => null,
        'templateName' => null,
        'templateType' => null,
        'createTime' => 'date-time',
        'templateDescription' => null,
        'associationAlarmTotal' => null,
        'policyTotal' => null,
        'policyStatistics' => null,
        'associationResourceGroups' => null
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
    * templateId  告警模板的ID，以at开头，后跟字母、数字，长度最长为64
    * templateName  告警模板的名称，以字母或汉字开头，可包含字母、数字、汉字、_、-，长度范围[1,128]
    * templateType  templateType
    * createTime  告警模板的创建时间
    * templateDescription  告警模板的描述，长度范围[0,256]，该字段默认值为空字符串
    * associationAlarmTotal  告警模板关联的告警规则数目
    * policyTotal  告警模板的告警策略总数
    * policyStatistics  服务列表告警策略数目统计
    * associationResourceGroups  关联的资源分组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'templateName' => 'template_name',
            'templateType' => 'template_type',
            'createTime' => 'create_time',
            'templateDescription' => 'template_description',
            'associationAlarmTotal' => 'association_alarm_total',
            'policyTotal' => 'policy_total',
            'policyStatistics' => 'policy_statistics',
            'associationResourceGroups' => 'association_resource_groups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  告警模板的ID，以at开头，后跟字母、数字，长度最长为64
    * templateName  告警模板的名称，以字母或汉字开头，可包含字母、数字、汉字、_、-，长度范围[1,128]
    * templateType  templateType
    * createTime  告警模板的创建时间
    * templateDescription  告警模板的描述，长度范围[0,256]，该字段默认值为空字符串
    * associationAlarmTotal  告警模板关联的告警规则数目
    * policyTotal  告警模板的告警策略总数
    * policyStatistics  服务列表告警策略数目统计
    * associationResourceGroups  关联的资源分组
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'templateName' => 'setTemplateName',
            'templateType' => 'setTemplateType',
            'createTime' => 'setCreateTime',
            'templateDescription' => 'setTemplateDescription',
            'associationAlarmTotal' => 'setAssociationAlarmTotal',
            'policyTotal' => 'setPolicyTotal',
            'policyStatistics' => 'setPolicyStatistics',
            'associationResourceGroups' => 'setAssociationResourceGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  告警模板的ID，以at开头，后跟字母、数字，长度最长为64
    * templateName  告警模板的名称，以字母或汉字开头，可包含字母、数字、汉字、_、-，长度范围[1,128]
    * templateType  templateType
    * createTime  告警模板的创建时间
    * templateDescription  告警模板的描述，长度范围[0,256]，该字段默认值为空字符串
    * associationAlarmTotal  告警模板关联的告警规则数目
    * policyTotal  告警模板的告警策略总数
    * policyStatistics  服务列表告警策略数目统计
    * associationResourceGroups  关联的资源分组
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'templateName' => 'getTemplateName',
            'templateType' => 'getTemplateType',
            'createTime' => 'getCreateTime',
            'templateDescription' => 'getTemplateDescription',
            'associationAlarmTotal' => 'getAssociationAlarmTotal',
            'policyTotal' => 'getPolicyTotal',
            'policyStatistics' => 'getPolicyStatistics',
            'associationResourceGroups' => 'getAssociationResourceGroups'
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['templateType'] = isset($data['templateType']) ? $data['templateType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['templateDescription'] = isset($data['templateDescription']) ? $data['templateDescription'] : null;
        $this->container['associationAlarmTotal'] = isset($data['associationAlarmTotal']) ? $data['associationAlarmTotal'] : null;
        $this->container['policyTotal'] = isset($data['policyTotal']) ? $data['policyTotal'] : null;
        $this->container['policyStatistics'] = isset($data['policyStatistics']) ? $data['policyStatistics'] : null;
        $this->container['associationResourceGroups'] = isset($data['associationResourceGroups']) ? $data['associationResourceGroups'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['templateId'] === null) {
            $invalidProperties[] = "'templateId' can't be null";
        }
            if ((mb_strlen($this->container['templateId']) > 64)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['templateId']) < 2)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be bigger than or equal to 2.";
            }
            if (!preg_match("/^at([0-9A-Za-z])+$/", $this->container['templateId'])) {
                $invalidProperties[] = "invalid value for 'templateId', must be conform to the pattern /^at([0-9A-Za-z])+$/.";
            }
        if ($this->container['templateName'] === null) {
            $invalidProperties[] = "'templateName' can't be null";
        }
            if ((mb_strlen($this->container['templateName']) > 128)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-|\\(|\\)|\\.|\\s)+$/", $this->container['templateName'])) {
                $invalidProperties[] = "invalid value for 'templateName', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-|\\(|\\)|\\.|\\s)+$/.";
            }
        if ($this->container['templateType'] === null) {
            $invalidProperties[] = "'templateType' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['templateDescription'] === null) {
            $invalidProperties[] = "'templateDescription' can't be null";
        }
            if ((mb_strlen($this->container['templateDescription']) > 256)) {
                $invalidProperties[] = "invalid value for 'templateDescription', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['templateDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'templateDescription', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|| |_|-|\\.|。|,|，|:|：|;|；|\"|\"|“|”|'|'|‘|’)+$/", $this->container['templateDescription'])) {
                $invalidProperties[] = "invalid value for 'templateDescription', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|| |_|-|\\.|。|,|，|:|：|;|；|\"|\"|“|”|'|'|‘|’)+$/.";
            }
        if ($this->container['policyTotal'] === null) {
            $invalidProperties[] = "'policyTotal' can't be null";
        }
        if ($this->container['policyStatistics'] === null) {
            $invalidProperties[] = "'policyStatistics' can't be null";
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
    * Gets templateId
    *  告警模板的ID，以at开头，后跟字母、数字，长度最长为64
    *
    * @return string
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string $templateId 告警模板的ID，以at开头，后跟字母、数字，长度最长为64
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets templateName
    *  告警模板的名称，以字母或汉字开头，可包含字母、数字、汉字、_、-，长度范围[1,128]
    *
    * @return string
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string $templateName 告警模板的名称，以字母或汉字开头，可包含字母、数字、汉字、_、-，长度范围[1,128]
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets templateType
    *  templateType
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\TemplateType
    */
    public function getTemplateType()
    {
        return $this->container['templateType'];
    }

    /**
    * Sets templateType
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\TemplateType $templateType templateType
    *
    * @return $this
    */
    public function setTemplateType($templateType)
    {
        $this->container['templateType'] = $templateType;
        return $this;
    }

    /**
    * Gets createTime
    *  告警模板的创建时间
    *
    * @return \DateTime
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime $createTime 告警模板的创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets templateDescription
    *  告警模板的描述，长度范围[0,256]，该字段默认值为空字符串
    *
    * @return string
    */
    public function getTemplateDescription()
    {
        return $this->container['templateDescription'];
    }

    /**
    * Sets templateDescription
    *
    * @param string $templateDescription 告警模板的描述，长度范围[0,256]，该字段默认值为空字符串
    *
    * @return $this
    */
    public function setTemplateDescription($templateDescription)
    {
        $this->container['templateDescription'] = $templateDescription;
        return $this;
    }

    /**
    * Gets associationAlarmTotal
    *  告警模板关联的告警规则数目
    *
    * @return int|null
    */
    public function getAssociationAlarmTotal()
    {
        return $this->container['associationAlarmTotal'];
    }

    /**
    * Sets associationAlarmTotal
    *
    * @param int|null $associationAlarmTotal 告警模板关联的告警规则数目
    *
    * @return $this
    */
    public function setAssociationAlarmTotal($associationAlarmTotal)
    {
        $this->container['associationAlarmTotal'] = $associationAlarmTotal;
        return $this;
    }

    /**
    * Gets policyTotal
    *  告警模板的告警策略总数
    *
    * @return int
    */
    public function getPolicyTotal()
    {
        return $this->container['policyTotal'];
    }

    /**
    * Sets policyTotal
    *
    * @param int $policyTotal 告警模板的告警策略总数
    *
    * @return $this
    */
    public function setPolicyTotal($policyTotal)
    {
        $this->container['policyTotal'] = $policyTotal;
        return $this;
    }

    /**
    * Gets policyStatistics
    *  服务列表告警策略数目统计
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\PolicyStatistics[]
    */
    public function getPolicyStatistics()
    {
        return $this->container['policyStatistics'];
    }

    /**
    * Sets policyStatistics
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\PolicyStatistics[] $policyStatistics 服务列表告警策略数目统计
    *
    * @return $this
    */
    public function setPolicyStatistics($policyStatistics)
    {
        $this->container['policyStatistics'] = $policyStatistics;
        return $this;
    }

    /**
    * Gets associationResourceGroups
    *  关联的资源分组
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\AssociationResourceGroup[]|null
    */
    public function getAssociationResourceGroups()
    {
        return $this->container['associationResourceGroups'];
    }

    /**
    * Sets associationResourceGroups
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\AssociationResourceGroup[]|null $associationResourceGroups 关联的资源分组
    *
    * @return $this
    */
    public function setAssociationResourceGroups($associationResourceGroups)
    {
        $this->container['associationResourceGroups'] = $associationResourceGroups;
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

