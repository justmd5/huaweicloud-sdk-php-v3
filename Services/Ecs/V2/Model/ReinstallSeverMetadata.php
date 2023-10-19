<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReinstallSeverMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReinstallSeverMetadata';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * systemEncrypted  metadata中的表示加密功能的字段，0代表不加密，1代表加密。  该字段不存在时，云硬盘默认为不加密。
    * systemCmkid  metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。  > 说明：  - 请参考[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)，通过HTTPS请求获取密钥ID。
    * userData  重装云服务器过程中注入用户数据。  支持注入文本、文本文件或gzip文件。注入内容最大长度32KB。注入内容，需要进行base64格式编码。  了解更多用户数据注入请参考[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)。
    * byol  如果您已拥有操作系统或软件的许可证（一般是指按物理插槽数、物理内核数等进行认证的许可证），您可以通过自带许可（BYOL）的方式将业务完整迁移到云平台，继续使用您的许可证。 - true： 使用自有license - 其他值： 视为非法参数，接口报错
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'systemEncrypted' => 'string',
            'systemCmkid' => 'string',
            'userData' => 'string',
            'byol' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * systemEncrypted  metadata中的表示加密功能的字段，0代表不加密，1代表加密。  该字段不存在时，云硬盘默认为不加密。
    * systemCmkid  metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。  > 说明：  - 请参考[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)，通过HTTPS请求获取密钥ID。
    * userData  重装云服务器过程中注入用户数据。  支持注入文本、文本文件或gzip文件。注入内容最大长度32KB。注入内容，需要进行base64格式编码。  了解更多用户数据注入请参考[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)。
    * byol  如果您已拥有操作系统或软件的许可证（一般是指按物理插槽数、物理内核数等进行认证的许可证），您可以通过自带许可（BYOL）的方式将业务完整迁移到云平台，继续使用您的许可证。 - true： 使用自有license - 其他值： 视为非法参数，接口报错
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'systemEncrypted' => null,
        'systemCmkid' => null,
        'userData' => null,
        'byol' => null
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
    * systemEncrypted  metadata中的表示加密功能的字段，0代表不加密，1代表加密。  该字段不存在时，云硬盘默认为不加密。
    * systemCmkid  metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。  > 说明：  - 请参考[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)，通过HTTPS请求获取密钥ID。
    * userData  重装云服务器过程中注入用户数据。  支持注入文本、文本文件或gzip文件。注入内容最大长度32KB。注入内容，需要进行base64格式编码。  了解更多用户数据注入请参考[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)。
    * byol  如果您已拥有操作系统或软件的许可证（一般是指按物理插槽数、物理内核数等进行认证的许可证），您可以通过自带许可（BYOL）的方式将业务完整迁移到云平台，继续使用您的许可证。 - true： 使用自有license - 其他值： 视为非法参数，接口报错
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'systemEncrypted' => '__system__encrypted',
            'systemCmkid' => '__system__cmkid',
            'userData' => 'user_data',
            'byol' => 'BYOL'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * systemEncrypted  metadata中的表示加密功能的字段，0代表不加密，1代表加密。  该字段不存在时，云硬盘默认为不加密。
    * systemCmkid  metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。  > 说明：  - 请参考[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)，通过HTTPS请求获取密钥ID。
    * userData  重装云服务器过程中注入用户数据。  支持注入文本、文本文件或gzip文件。注入内容最大长度32KB。注入内容，需要进行base64格式编码。  了解更多用户数据注入请参考[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)。
    * byol  如果您已拥有操作系统或软件的许可证（一般是指按物理插槽数、物理内核数等进行认证的许可证），您可以通过自带许可（BYOL）的方式将业务完整迁移到云平台，继续使用您的许可证。 - true： 使用自有license - 其他值： 视为非法参数，接口报错
    *
    * @var string[]
    */
    protected static $setters = [
            'systemEncrypted' => 'setSystemEncrypted',
            'systemCmkid' => 'setSystemCmkid',
            'userData' => 'setUserData',
            'byol' => 'setByol'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * systemEncrypted  metadata中的表示加密功能的字段，0代表不加密，1代表加密。  该字段不存在时，云硬盘默认为不加密。
    * systemCmkid  metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。  > 说明：  - 请参考[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)，通过HTTPS请求获取密钥ID。
    * userData  重装云服务器过程中注入用户数据。  支持注入文本、文本文件或gzip文件。注入内容最大长度32KB。注入内容，需要进行base64格式编码。  了解更多用户数据注入请参考[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)。
    * byol  如果您已拥有操作系统或软件的许可证（一般是指按物理插槽数、物理内核数等进行认证的许可证），您可以通过自带许可（BYOL）的方式将业务完整迁移到云平台，继续使用您的许可证。 - true： 使用自有license - 其他值： 视为非法参数，接口报错
    *
    * @var string[]
    */
    protected static $getters = [
            'systemEncrypted' => 'getSystemEncrypted',
            'systemCmkid' => 'getSystemCmkid',
            'userData' => 'getUserData',
            'byol' => 'getByol'
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
        $this->container['systemEncrypted'] = isset($data['systemEncrypted']) ? $data['systemEncrypted'] : null;
        $this->container['systemCmkid'] = isset($data['systemCmkid']) ? $data['systemCmkid'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['byol'] = isset($data['byol']) ? $data['byol'] : null;
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
    * Gets systemEncrypted
    *  metadata中的表示加密功能的字段，0代表不加密，1代表加密。  该字段不存在时，云硬盘默认为不加密。
    *
    * @return string|null
    */
    public function getSystemEncrypted()
    {
        return $this->container['systemEncrypted'];
    }

    /**
    * Sets systemEncrypted
    *
    * @param string|null $systemEncrypted metadata中的表示加密功能的字段，0代表不加密，1代表加密。  该字段不存在时，云硬盘默认为不加密。
    *
    * @return $this
    */
    public function setSystemEncrypted($systemEncrypted)
    {
        $this->container['systemEncrypted'] = $systemEncrypted;
        return $this;
    }

    /**
    * Gets systemCmkid
    *  metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。  > 说明：  - 请参考[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)，通过HTTPS请求获取密钥ID。
    *
    * @return string|null
    */
    public function getSystemCmkid()
    {
        return $this->container['systemCmkid'];
    }

    /**
    * Sets systemCmkid
    *
    * @param string|null $systemCmkid metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。  > 说明：  - 请参考[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)，通过HTTPS请求获取密钥ID。
    *
    * @return $this
    */
    public function setSystemCmkid($systemCmkid)
    {
        $this->container['systemCmkid'] = $systemCmkid;
        return $this;
    }

    /**
    * Gets userData
    *  重装云服务器过程中注入用户数据。  支持注入文本、文本文件或gzip文件。注入内容最大长度32KB。注入内容，需要进行base64格式编码。  了解更多用户数据注入请参考[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)。
    *
    * @return string|null
    */
    public function getUserData()
    {
        return $this->container['userData'];
    }

    /**
    * Sets userData
    *
    * @param string|null $userData 重装云服务器过程中注入用户数据。  支持注入文本、文本文件或gzip文件。注入内容最大长度32KB。注入内容，需要进行base64格式编码。  了解更多用户数据注入请参考[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)。
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
        return $this;
    }

    /**
    * Gets byol
    *  如果您已拥有操作系统或软件的许可证（一般是指按物理插槽数、物理内核数等进行认证的许可证），您可以通过自带许可（BYOL）的方式将业务完整迁移到云平台，继续使用您的许可证。 - true： 使用自有license - 其他值： 视为非法参数，接口报错
    *
    * @return string|null
    */
    public function getByol()
    {
        return $this->container['byol'];
    }

    /**
    * Sets byol
    *
    * @param string|null $byol 如果您已拥有操作系统或软件的许可证（一般是指按物理插槽数、物理内核数等进行认证的许可证），您可以通过自带许可（BYOL）的方式将业务完整迁移到云平台，继续使用您的许可证。 - true： 使用自有license - 其他值： 视为非法参数，接口报错
    *
    * @return $this
    */
    public function setByol($byol)
    {
        $this->container['byol'] = $byol;
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

