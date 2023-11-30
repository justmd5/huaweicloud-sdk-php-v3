<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InfluxdbSlowLogDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InfluxdbSlowLogDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  节点ID。
    * nodeName  节点名称。
    * wholeMessage  执行语句。
    * operateType  语句类型。
    * costTime  执行时间。单位：ms
    * logTime  日志产生时间，UTC时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * database  数据库名称。
    * retentionPolicy  保留策略。
    * lineNum  日志单行序列号。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'nodeName' => 'string',
            'wholeMessage' => 'string',
            'operateType' => 'string',
            'costTime' => 'string',
            'logTime' => 'string',
            'database' => 'string',
            'retentionPolicy' => 'string',
            'lineNum' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  节点ID。
    * nodeName  节点名称。
    * wholeMessage  执行语句。
    * operateType  语句类型。
    * costTime  执行时间。单位：ms
    * logTime  日志产生时间，UTC时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * database  数据库名称。
    * retentionPolicy  保留策略。
    * lineNum  日志单行序列号。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'nodeName' => null,
        'wholeMessage' => null,
        'operateType' => null,
        'costTime' => null,
        'logTime' => null,
        'database' => null,
        'retentionPolicy' => null,
        'lineNum' => null
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
    * nodeId  节点ID。
    * nodeName  节点名称。
    * wholeMessage  执行语句。
    * operateType  语句类型。
    * costTime  执行时间。单位：ms
    * logTime  日志产生时间，UTC时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * database  数据库名称。
    * retentionPolicy  保留策略。
    * lineNum  日志单行序列号。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'nodeName' => 'node_name',
            'wholeMessage' => 'whole_message',
            'operateType' => 'operate_type',
            'costTime' => 'cost_time',
            'logTime' => 'log_time',
            'database' => 'database',
            'retentionPolicy' => 'retention_policy',
            'lineNum' => 'line_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  节点ID。
    * nodeName  节点名称。
    * wholeMessage  执行语句。
    * operateType  语句类型。
    * costTime  执行时间。单位：ms
    * logTime  日志产生时间，UTC时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * database  数据库名称。
    * retentionPolicy  保留策略。
    * lineNum  日志单行序列号。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'nodeName' => 'setNodeName',
            'wholeMessage' => 'setWholeMessage',
            'operateType' => 'setOperateType',
            'costTime' => 'setCostTime',
            'logTime' => 'setLogTime',
            'database' => 'setDatabase',
            'retentionPolicy' => 'setRetentionPolicy',
            'lineNum' => 'setLineNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  节点ID。
    * nodeName  节点名称。
    * wholeMessage  执行语句。
    * operateType  语句类型。
    * costTime  执行时间。单位：ms
    * logTime  日志产生时间，UTC时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * database  数据库名称。
    * retentionPolicy  保留策略。
    * lineNum  日志单行序列号。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'nodeName' => 'getNodeName',
            'wholeMessage' => 'getWholeMessage',
            'operateType' => 'getOperateType',
            'costTime' => 'getCostTime',
            'logTime' => 'getLogTime',
            'database' => 'getDatabase',
            'retentionPolicy' => 'getRetentionPolicy',
            'lineNum' => 'getLineNum'
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['wholeMessage'] = isset($data['wholeMessage']) ? $data['wholeMessage'] : null;
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
        $this->container['costTime'] = isset($data['costTime']) ? $data['costTime'] : null;
        $this->container['logTime'] = isset($data['logTime']) ? $data['logTime'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['retentionPolicy'] = isset($data['retentionPolicy']) ? $data['retentionPolicy'] : null;
        $this->container['lineNum'] = isset($data['lineNum']) ? $data['lineNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
        if ($this->container['nodeName'] === null) {
            $invalidProperties[] = "'nodeName' can't be null";
        }
        if ($this->container['wholeMessage'] === null) {
            $invalidProperties[] = "'wholeMessage' can't be null";
        }
        if ($this->container['operateType'] === null) {
            $invalidProperties[] = "'operateType' can't be null";
        }
        if ($this->container['costTime'] === null) {
            $invalidProperties[] = "'costTime' can't be null";
        }
        if ($this->container['logTime'] === null) {
            $invalidProperties[] = "'logTime' can't be null";
        }
        if ($this->container['database'] === null) {
            $invalidProperties[] = "'database' can't be null";
        }
        if ($this->container['retentionPolicy'] === null) {
            $invalidProperties[] = "'retentionPolicy' can't be null";
        }
        if ($this->container['lineNum'] === null) {
            $invalidProperties[] = "'lineNum' can't be null";
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
    * Gets nodeId
    *  节点ID。
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId 节点ID。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeName
    *  节点名称。
    *
    * @return string
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string $nodeName 节点名称。
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets wholeMessage
    *  执行语句。
    *
    * @return string
    */
    public function getWholeMessage()
    {
        return $this->container['wholeMessage'];
    }

    /**
    * Sets wholeMessage
    *
    * @param string $wholeMessage 执行语句。
    *
    * @return $this
    */
    public function setWholeMessage($wholeMessage)
    {
        $this->container['wholeMessage'] = $wholeMessage;
        return $this;
    }

    /**
    * Gets operateType
    *  语句类型。
    *
    * @return string
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string $operateType 语句类型。
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
        return $this;
    }

    /**
    * Gets costTime
    *  执行时间。单位：ms
    *
    * @return string
    */
    public function getCostTime()
    {
        return $this->container['costTime'];
    }

    /**
    * Sets costTime
    *
    * @param string $costTime 执行时间。单位：ms
    *
    * @return $this
    */
    public function setCostTime($costTime)
    {
        $this->container['costTime'] = $costTime;
        return $this;
    }

    /**
    * Gets logTime
    *  日志产生时间，UTC时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return string
    */
    public function getLogTime()
    {
        return $this->container['logTime'];
    }

    /**
    * Sets logTime
    *
    * @param string $logTime 日志产生时间，UTC时间。 格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return $this
    */
    public function setLogTime($logTime)
    {
        $this->container['logTime'] = $logTime;
        return $this;
    }

    /**
    * Gets database
    *  数据库名称。
    *
    * @return string
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string $database 数据库名称。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets retentionPolicy
    *  保留策略。
    *
    * @return string
    */
    public function getRetentionPolicy()
    {
        return $this->container['retentionPolicy'];
    }

    /**
    * Sets retentionPolicy
    *
    * @param string $retentionPolicy 保留策略。
    *
    * @return $this
    */
    public function setRetentionPolicy($retentionPolicy)
    {
        $this->container['retentionPolicy'] = $retentionPolicy;
        return $this;
    }

    /**
    * Gets lineNum
    *  日志单行序列号。
    *
    * @return string
    */
    public function getLineNum()
    {
        return $this->container['lineNum'];
    }

    /**
    * Sets lineNum
    *
    * @param string $lineNum 日志单行序列号。
    *
    * @return $this
    */
    public function setLineNum($lineNum)
    {
        $this->container['lineNum'] = $lineNum;
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

