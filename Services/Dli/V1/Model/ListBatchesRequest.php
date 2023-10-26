<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBatchesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBatchesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterName  DLI队列名称，不填写则获取当前Project下所有批处理作业(不推荐使用)。
    * end  用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒。
    * from  起始批处理作业的索引号，默认从0开始。
    * jobName  批处理作业的名称。
    * jobId  jobId
    * order  指定作业排序方式，默认为CREATE_TIME_DESC（作业提交时间降序），支持DURATION_DESC（作业运行时长降序）、DURATION_ASC（作业运行时长升序）、CREATE_TIME_DESC（作业提交时间降序）、CREATE_TIME_ASC（作业提交时间升序）四种排序方式。
    * queueName  queueName
    * size  查询批处理作业的数量。
    * start  用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒。
    * state  state
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterName' => 'string',
            'end' => 'int',
            'from' => 'int',
            'jobName' => 'string',
            'jobId' => 'string',
            'order' => 'string',
            'queueName' => 'string',
            'size' => 'int',
            'start' => 'int',
            'state' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterName  DLI队列名称，不填写则获取当前Project下所有批处理作业(不推荐使用)。
    * end  用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒。
    * from  起始批处理作业的索引号，默认从0开始。
    * jobName  批处理作业的名称。
    * jobId  jobId
    * order  指定作业排序方式，默认为CREATE_TIME_DESC（作业提交时间降序），支持DURATION_DESC（作业运行时长降序）、DURATION_ASC（作业运行时长升序）、CREATE_TIME_DESC（作业提交时间降序）、CREATE_TIME_ASC（作业提交时间升序）四种排序方式。
    * queueName  queueName
    * size  查询批处理作业的数量。
    * start  用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒。
    * state  state
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterName' => null,
        'end' => 'int64',
        'from' => 'int32',
        'jobName' => null,
        'jobId' => null,
        'order' => null,
        'queueName' => null,
        'size' => 'int32',
        'start' => 'int64',
        'state' => null
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
    * clusterName  DLI队列名称，不填写则获取当前Project下所有批处理作业(不推荐使用)。
    * end  用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒。
    * from  起始批处理作业的索引号，默认从0开始。
    * jobName  批处理作业的名称。
    * jobId  jobId
    * order  指定作业排序方式，默认为CREATE_TIME_DESC（作业提交时间降序），支持DURATION_DESC（作业运行时长降序）、DURATION_ASC（作业运行时长升序）、CREATE_TIME_DESC（作业提交时间降序）、CREATE_TIME_ASC（作业提交时间升序）四种排序方式。
    * queueName  queueName
    * size  查询批处理作业的数量。
    * start  用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒。
    * state  state
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterName' => 'cluster_name',
            'end' => 'end',
            'from' => 'from',
            'jobName' => 'job-name',
            'jobId' => 'job-id',
            'order' => 'order',
            'queueName' => 'queue_name',
            'size' => 'size',
            'start' => 'start',
            'state' => 'state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterName  DLI队列名称，不填写则获取当前Project下所有批处理作业(不推荐使用)。
    * end  用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒。
    * from  起始批处理作业的索引号，默认从0开始。
    * jobName  批处理作业的名称。
    * jobId  jobId
    * order  指定作业排序方式，默认为CREATE_TIME_DESC（作业提交时间降序），支持DURATION_DESC（作业运行时长降序）、DURATION_ASC（作业运行时长升序）、CREATE_TIME_DESC（作业提交时间降序）、CREATE_TIME_ASC（作业提交时间升序）四种排序方式。
    * queueName  queueName
    * size  查询批处理作业的数量。
    * start  用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒。
    * state  state
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterName' => 'setClusterName',
            'end' => 'setEnd',
            'from' => 'setFrom',
            'jobName' => 'setJobName',
            'jobId' => 'setJobId',
            'order' => 'setOrder',
            'queueName' => 'setQueueName',
            'size' => 'setSize',
            'start' => 'setStart',
            'state' => 'setState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterName  DLI队列名称，不填写则获取当前Project下所有批处理作业(不推荐使用)。
    * end  用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒。
    * from  起始批处理作业的索引号，默认从0开始。
    * jobName  批处理作业的名称。
    * jobId  jobId
    * order  指定作业排序方式，默认为CREATE_TIME_DESC（作业提交时间降序），支持DURATION_DESC（作业运行时长降序）、DURATION_ASC（作业运行时长升序）、CREATE_TIME_DESC（作业提交时间降序）、CREATE_TIME_ASC（作业提交时间升序）四种排序方式。
    * queueName  queueName
    * size  查询批处理作业的数量。
    * start  用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒。
    * state  state
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterName' => 'getClusterName',
            'end' => 'getEnd',
            'from' => 'getFrom',
            'jobName' => 'getJobName',
            'jobId' => 'getJobId',
            'order' => 'getOrder',
            'queueName' => 'getQueueName',
            'size' => 'getSize',
            'start' => 'getStart',
            'state' => 'getState'
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
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
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
    * Gets clusterName
    *  DLI队列名称，不填写则获取当前Project下所有批处理作业(不推荐使用)。
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName DLI队列名称，不填写则获取当前Project下所有批处理作业(不推荐使用)。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets end
    *  用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒。
    *
    * @return int|null
    */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
    * Sets end
    *
    * @param int|null $end 用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒。
    *
    * @return $this
    */
    public function setEnd($end)
    {
        $this->container['end'] = $end;
        return $this;
    }

    /**
    * Gets from
    *  起始批处理作业的索引号，默认从0开始。
    *
    * @return int|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int|null $from 起始批处理作业的索引号，默认从0开始。
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets jobName
    *  批处理作业的名称。
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName 批处理作业的名称。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets jobId
    *  jobId
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
    * @param string|null $jobId jobId
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets order
    *  指定作业排序方式，默认为CREATE_TIME_DESC（作业提交时间降序），支持DURATION_DESC（作业运行时长降序）、DURATION_ASC（作业运行时长升序）、CREATE_TIME_DESC（作业提交时间降序）、CREATE_TIME_ASC（作业提交时间升序）四种排序方式。
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 指定作业排序方式，默认为CREATE_TIME_DESC（作业提交时间降序），支持DURATION_DESC（作业运行时长降序）、DURATION_ASC（作业运行时长升序）、CREATE_TIME_DESC（作业提交时间降序）、CREATE_TIME_ASC（作业提交时间升序）四种排序方式。
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets queueName
    *  queueName
    *
    * @return string|null
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string|null $queueName queueName
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets size
    *  查询批处理作业的数量。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 查询批处理作业的数量。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets start
    *  用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒。
    *
    * @return int|null
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param int|null $start 用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒。
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets state
    *  state
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state state
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
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

