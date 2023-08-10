<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HistoryRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HistoryRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recordId  构建记录id--唯一key
    * jobId  任务id
    * buildNumber  构建编号
    * startTime  构建开始时间
    * endTime  构建结束时间
    * result  构建结果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recordId' => 'string',
            'jobId' => 'string',
            'buildNumber' => 'int',
            'startTime' => 'string',
            'endTime' => 'string',
            'result' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recordId  构建记录id--唯一key
    * jobId  任务id
    * buildNumber  构建编号
    * startTime  构建开始时间
    * endTime  构建结束时间
    * result  构建结果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recordId' => null,
        'jobId' => null,
        'buildNumber' => 'int32',
        'startTime' => null,
        'endTime' => null,
        'result' => null
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
    * recordId  构建记录id--唯一key
    * jobId  任务id
    * buildNumber  构建编号
    * startTime  构建开始时间
    * endTime  构建结束时间
    * result  构建结果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recordId' => 'record_id',
            'jobId' => 'job_id',
            'buildNumber' => 'build_number',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'result' => 'result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recordId  构建记录id--唯一key
    * jobId  任务id
    * buildNumber  构建编号
    * startTime  构建开始时间
    * endTime  构建结束时间
    * result  构建结果
    *
    * @var string[]
    */
    protected static $setters = [
            'recordId' => 'setRecordId',
            'jobId' => 'setJobId',
            'buildNumber' => 'setBuildNumber',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'result' => 'setResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recordId  构建记录id--唯一key
    * jobId  任务id
    * buildNumber  构建编号
    * startTime  构建开始时间
    * endTime  构建结束时间
    * result  构建结果
    *
    * @var string[]
    */
    protected static $getters = [
            'recordId' => 'getRecordId',
            'jobId' => 'getJobId',
            'buildNumber' => 'getBuildNumber',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'result' => 'getResult'
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
        $this->container['recordId'] = isset($data['recordId']) ? $data['recordId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['buildNumber'] = isset($data['buildNumber']) ? $data['buildNumber'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
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
    * Gets recordId
    *  构建记录id--唯一key
    *
    * @return string|null
    */
    public function getRecordId()
    {
        return $this->container['recordId'];
    }

    /**
    * Sets recordId
    *
    * @param string|null $recordId 构建记录id--唯一key
    *
    * @return $this
    */
    public function setRecordId($recordId)
    {
        $this->container['recordId'] = $recordId;
        return $this;
    }

    /**
    * Gets jobId
    *  任务id
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 任务id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets buildNumber
    *  构建编号
    *
    * @return int|null
    */
    public function getBuildNumber()
    {
        return $this->container['buildNumber'];
    }

    /**
    * Sets buildNumber
    *
    * @param int|null $buildNumber 构建编号
    *
    * @return $this
    */
    public function setBuildNumber($buildNumber)
    {
        $this->container['buildNumber'] = $buildNumber;
        return $this;
    }

    /**
    * Gets startTime
    *  构建开始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 构建开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  构建结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 构建结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets result
    *  构建结果
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result 构建结果
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
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

