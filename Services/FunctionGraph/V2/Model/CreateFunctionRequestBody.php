<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateFunctionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateFunctionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * funcName  函数名称。
    * package  函数所属的分组Package，用于用户针对函数的自定义分组。
    * runtime  FunctionGraph函数的执行环境 Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Java8: Java语言8版本。 Java11: Java语言11版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 http: HTTP函数。
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～900秒，可以通过白名单配置延长到12小时，具体可以咨询客服进行配置
    * handler  函数执行入口 规则：xx.xx，必须包含“. ”；自定义镜像函数handler为“-” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    * dependVersionList  依赖版本id列表
    * funcVpc  funcVpc
    * memorySize  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    * gpuMemory  函数消耗的显存，只支持自定义运行时与自定义镜像函数配置GPU。 单位MB。 取值范围为：1024、2048、3072、4096、5120、6144、7168、8192、9216、10240、11264、12288、13312、14336、15360、16384。 最小值为1024，最大值为16384。
    * codeType  函数代码类型，取值有4种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。
    * codeUrl  当CodeType为obs时，该值为函数代码包在OBS上的地址，CodeType为其他值时，该字段为空。
    * codeFilename  函数的文件名，当CodeType为jar/zip时必须提供该字段，CodeType为其他值时不需要提供。
    * customImage  customImage
    * userData  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    * xrole  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * appXrole  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * description  函数描述。
    * funcCode  funcCode
    * initializerHandler  函数初始化入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    * initializerTimeout  初始化超时时间，超时函数将被强行停止，范围1～300秒。
    * preStopHandler  函数预停止函数的入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.pre_stop_handler，则表示函数的文件名为myfunction.js，初始化的入口函数名为pre_stop_handler。
    * preStopTimeout  初始化超时时间，超时函数将被强行停止，范围1～90秒。
    * enterpriseProjectId  企业项目ID，在企业用户创建函数时必填。
    * type  函数版本；部分局点只支持v1函数，缺省值则为v1
    * logConfig  logConfig
    * networkController  networkController
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'funcName' => 'string',
            'package' => 'string',
            'runtime' => 'string',
            'timeout' => 'int',
            'handler' => 'string',
            'dependVersionList' => 'string[]',
            'funcVpc' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncVpc',
            'memorySize' => 'int',
            'gpuMemory' => 'int',
            'codeType' => 'string',
            'codeUrl' => 'string',
            'codeFilename' => 'string',
            'customImage' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\CustomImage',
            'userData' => 'string',
            'xrole' => 'string',
            'appXrole' => 'string',
            'description' => 'string',
            'funcCode' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncCode',
            'initializerHandler' => 'string',
            'initializerTimeout' => 'int',
            'preStopHandler' => 'string',
            'preStopTimeout' => 'int',
            'enterpriseProjectId' => 'string',
            'type' => 'string',
            'logConfig' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncLogConfig',
            'networkController' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\NetworkControlConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * funcName  函数名称。
    * package  函数所属的分组Package，用于用户针对函数的自定义分组。
    * runtime  FunctionGraph函数的执行环境 Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Java8: Java语言8版本。 Java11: Java语言11版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 http: HTTP函数。
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～900秒，可以通过白名单配置延长到12小时，具体可以咨询客服进行配置
    * handler  函数执行入口 规则：xx.xx，必须包含“. ”；自定义镜像函数handler为“-” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    * dependVersionList  依赖版本id列表
    * funcVpc  funcVpc
    * memorySize  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    * gpuMemory  函数消耗的显存，只支持自定义运行时与自定义镜像函数配置GPU。 单位MB。 取值范围为：1024、2048、3072、4096、5120、6144、7168、8192、9216、10240、11264、12288、13312、14336、15360、16384。 最小值为1024，最大值为16384。
    * codeType  函数代码类型，取值有4种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。
    * codeUrl  当CodeType为obs时，该值为函数代码包在OBS上的地址，CodeType为其他值时，该字段为空。
    * codeFilename  函数的文件名，当CodeType为jar/zip时必须提供该字段，CodeType为其他值时不需要提供。
    * customImage  customImage
    * userData  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    * xrole  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * appXrole  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * description  函数描述。
    * funcCode  funcCode
    * initializerHandler  函数初始化入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    * initializerTimeout  初始化超时时间，超时函数将被强行停止，范围1～300秒。
    * preStopHandler  函数预停止函数的入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.pre_stop_handler，则表示函数的文件名为myfunction.js，初始化的入口函数名为pre_stop_handler。
    * preStopTimeout  初始化超时时间，超时函数将被强行停止，范围1～90秒。
    * enterpriseProjectId  企业项目ID，在企业用户创建函数时必填。
    * type  函数版本；部分局点只支持v1函数，缺省值则为v1
    * logConfig  logConfig
    * networkController  networkController
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'funcName' => null,
        'package' => null,
        'runtime' => null,
        'timeout' => 'int32',
        'handler' => null,
        'dependVersionList' => null,
        'funcVpc' => null,
        'memorySize' => 'int32',
        'gpuMemory' => 'int32',
        'codeType' => null,
        'codeUrl' => null,
        'codeFilename' => null,
        'customImage' => null,
        'userData' => null,
        'xrole' => null,
        'appXrole' => null,
        'description' => null,
        'funcCode' => null,
        'initializerHandler' => null,
        'initializerTimeout' => 'int32',
        'preStopHandler' => null,
        'preStopTimeout' => 'int32',
        'enterpriseProjectId' => null,
        'type' => null,
        'logConfig' => null,
        'networkController' => null
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
    * funcName  函数名称。
    * package  函数所属的分组Package，用于用户针对函数的自定义分组。
    * runtime  FunctionGraph函数的执行环境 Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Java8: Java语言8版本。 Java11: Java语言11版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 http: HTTP函数。
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～900秒，可以通过白名单配置延长到12小时，具体可以咨询客服进行配置
    * handler  函数执行入口 规则：xx.xx，必须包含“. ”；自定义镜像函数handler为“-” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    * dependVersionList  依赖版本id列表
    * funcVpc  funcVpc
    * memorySize  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    * gpuMemory  函数消耗的显存，只支持自定义运行时与自定义镜像函数配置GPU。 单位MB。 取值范围为：1024、2048、3072、4096、5120、6144、7168、8192、9216、10240、11264、12288、13312、14336、15360、16384。 最小值为1024，最大值为16384。
    * codeType  函数代码类型，取值有4种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。
    * codeUrl  当CodeType为obs时，该值为函数代码包在OBS上的地址，CodeType为其他值时，该字段为空。
    * codeFilename  函数的文件名，当CodeType为jar/zip时必须提供该字段，CodeType为其他值时不需要提供。
    * customImage  customImage
    * userData  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    * xrole  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * appXrole  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * description  函数描述。
    * funcCode  funcCode
    * initializerHandler  函数初始化入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    * initializerTimeout  初始化超时时间，超时函数将被强行停止，范围1～300秒。
    * preStopHandler  函数预停止函数的入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.pre_stop_handler，则表示函数的文件名为myfunction.js，初始化的入口函数名为pre_stop_handler。
    * preStopTimeout  初始化超时时间，超时函数将被强行停止，范围1～90秒。
    * enterpriseProjectId  企业项目ID，在企业用户创建函数时必填。
    * type  函数版本；部分局点只支持v1函数，缺省值则为v1
    * logConfig  logConfig
    * networkController  networkController
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'funcName' => 'func_name',
            'package' => 'package',
            'runtime' => 'runtime',
            'timeout' => 'timeout',
            'handler' => 'handler',
            'dependVersionList' => 'depend_version_list',
            'funcVpc' => 'func_vpc',
            'memorySize' => 'memory_size',
            'gpuMemory' => 'gpu_memory',
            'codeType' => 'code_type',
            'codeUrl' => 'code_url',
            'codeFilename' => 'code_filename',
            'customImage' => 'custom_image',
            'userData' => 'user_data',
            'xrole' => 'xrole',
            'appXrole' => 'app_xrole',
            'description' => 'description',
            'funcCode' => 'func_code',
            'initializerHandler' => 'initializer_handler',
            'initializerTimeout' => 'initializer_timeout',
            'preStopHandler' => 'pre_stop_handler',
            'preStopTimeout' => 'pre_stop_timeout',
            'enterpriseProjectId' => 'enterprise_project_id',
            'type' => 'type',
            'logConfig' => 'log_config',
            'networkController' => 'network_controller'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * funcName  函数名称。
    * package  函数所属的分组Package，用于用户针对函数的自定义分组。
    * runtime  FunctionGraph函数的执行环境 Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Java8: Java语言8版本。 Java11: Java语言11版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 http: HTTP函数。
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～900秒，可以通过白名单配置延长到12小时，具体可以咨询客服进行配置
    * handler  函数执行入口 规则：xx.xx，必须包含“. ”；自定义镜像函数handler为“-” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    * dependVersionList  依赖版本id列表
    * funcVpc  funcVpc
    * memorySize  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    * gpuMemory  函数消耗的显存，只支持自定义运行时与自定义镜像函数配置GPU。 单位MB。 取值范围为：1024、2048、3072、4096、5120、6144、7168、8192、9216、10240、11264、12288、13312、14336、15360、16384。 最小值为1024，最大值为16384。
    * codeType  函数代码类型，取值有4种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。
    * codeUrl  当CodeType为obs时，该值为函数代码包在OBS上的地址，CodeType为其他值时，该字段为空。
    * codeFilename  函数的文件名，当CodeType为jar/zip时必须提供该字段，CodeType为其他值时不需要提供。
    * customImage  customImage
    * userData  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    * xrole  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * appXrole  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * description  函数描述。
    * funcCode  funcCode
    * initializerHandler  函数初始化入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    * initializerTimeout  初始化超时时间，超时函数将被强行停止，范围1～300秒。
    * preStopHandler  函数预停止函数的入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.pre_stop_handler，则表示函数的文件名为myfunction.js，初始化的入口函数名为pre_stop_handler。
    * preStopTimeout  初始化超时时间，超时函数将被强行停止，范围1～90秒。
    * enterpriseProjectId  企业项目ID，在企业用户创建函数时必填。
    * type  函数版本；部分局点只支持v1函数，缺省值则为v1
    * logConfig  logConfig
    * networkController  networkController
    *
    * @var string[]
    */
    protected static $setters = [
            'funcName' => 'setFuncName',
            'package' => 'setPackage',
            'runtime' => 'setRuntime',
            'timeout' => 'setTimeout',
            'handler' => 'setHandler',
            'dependVersionList' => 'setDependVersionList',
            'funcVpc' => 'setFuncVpc',
            'memorySize' => 'setMemorySize',
            'gpuMemory' => 'setGpuMemory',
            'codeType' => 'setCodeType',
            'codeUrl' => 'setCodeUrl',
            'codeFilename' => 'setCodeFilename',
            'customImage' => 'setCustomImage',
            'userData' => 'setUserData',
            'xrole' => 'setXrole',
            'appXrole' => 'setAppXrole',
            'description' => 'setDescription',
            'funcCode' => 'setFuncCode',
            'initializerHandler' => 'setInitializerHandler',
            'initializerTimeout' => 'setInitializerTimeout',
            'preStopHandler' => 'setPreStopHandler',
            'preStopTimeout' => 'setPreStopTimeout',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'type' => 'setType',
            'logConfig' => 'setLogConfig',
            'networkController' => 'setNetworkController'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * funcName  函数名称。
    * package  函数所属的分组Package，用于用户针对函数的自定义分组。
    * runtime  FunctionGraph函数的执行环境 Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Java8: Java语言8版本。 Java11: Java语言11版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 http: HTTP函数。
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～900秒，可以通过白名单配置延长到12小时，具体可以咨询客服进行配置
    * handler  函数执行入口 规则：xx.xx，必须包含“. ”；自定义镜像函数handler为“-” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    * dependVersionList  依赖版本id列表
    * funcVpc  funcVpc
    * memorySize  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    * gpuMemory  函数消耗的显存，只支持自定义运行时与自定义镜像函数配置GPU。 单位MB。 取值范围为：1024、2048、3072、4096、5120、6144、7168、8192、9216、10240、11264、12288、13312、14336、15360、16384。 最小值为1024，最大值为16384。
    * codeType  函数代码类型，取值有4种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。
    * codeUrl  当CodeType为obs时，该值为函数代码包在OBS上的地址，CodeType为其他值时，该字段为空。
    * codeFilename  函数的文件名，当CodeType为jar/zip时必须提供该字段，CodeType为其他值时不需要提供。
    * customImage  customImage
    * userData  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    * xrole  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * appXrole  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    * description  函数描述。
    * funcCode  funcCode
    * initializerHandler  函数初始化入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    * initializerTimeout  初始化超时时间，超时函数将被强行停止，范围1～300秒。
    * preStopHandler  函数预停止函数的入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.pre_stop_handler，则表示函数的文件名为myfunction.js，初始化的入口函数名为pre_stop_handler。
    * preStopTimeout  初始化超时时间，超时函数将被强行停止，范围1～90秒。
    * enterpriseProjectId  企业项目ID，在企业用户创建函数时必填。
    * type  函数版本；部分局点只支持v1函数，缺省值则为v1
    * logConfig  logConfig
    * networkController  networkController
    *
    * @var string[]
    */
    protected static $getters = [
            'funcName' => 'getFuncName',
            'package' => 'getPackage',
            'runtime' => 'getRuntime',
            'timeout' => 'getTimeout',
            'handler' => 'getHandler',
            'dependVersionList' => 'getDependVersionList',
            'funcVpc' => 'getFuncVpc',
            'memorySize' => 'getMemorySize',
            'gpuMemory' => 'getGpuMemory',
            'codeType' => 'getCodeType',
            'codeUrl' => 'getCodeUrl',
            'codeFilename' => 'getCodeFilename',
            'customImage' => 'getCustomImage',
            'userData' => 'getUserData',
            'xrole' => 'getXrole',
            'appXrole' => 'getAppXrole',
            'description' => 'getDescription',
            'funcCode' => 'getFuncCode',
            'initializerHandler' => 'getInitializerHandler',
            'initializerTimeout' => 'getInitializerTimeout',
            'preStopHandler' => 'getPreStopHandler',
            'preStopTimeout' => 'getPreStopTimeout',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'type' => 'getType',
            'logConfig' => 'getLogConfig',
            'networkController' => 'getNetworkController'
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
    const RUNTIME_JAVA8 = 'Java8';
    const RUNTIME_JAVA11 = 'Java11';
    const RUNTIME_NODE_JS6_10 = 'Node.js6.10';
    const RUNTIME_NODE_JS8_10 = 'Node.js8.10';
    const RUNTIME_NODE_JS10_16 = 'Node.js10.16';
    const RUNTIME_NODE_JS12_13 = 'Node.js12.13';
    const RUNTIME_NODE_JS14_18 = 'Node.js14.18';
    const RUNTIME_PYTHON2_7 = 'Python2.7';
    const RUNTIME_PYTHON3_6 = 'Python3.6';
    const RUNTIME_GO1_8 = 'Go1.8';
    const RUNTIME_GO1_X = 'Go1.x';
    const RUNTIME_C__NET_CORE_2_0 = 'C#(.NET Core 2.0)';
    const RUNTIME_C__NET_CORE_2_1 = 'C#(.NET Core 2.1)';
    const RUNTIME_C__NET_CORE_3_1 = 'C#(.NET Core 3.1)';
    const RUNTIME_PHP7_3 = 'PHP7.3';
    const RUNTIME_PYTHON3_9 = 'Python3.9';
    const RUNTIME_CUSTOM = 'Custom';
    const RUNTIME_HTTP = 'http';
    const CODE_TYPE_INLINE = 'inline';
    const CODE_TYPE_ZIP = 'zip';
    const CODE_TYPE_OBS = 'obs';
    const CODE_TYPE_JAR = 'jar';
    const CODE_TYPE_CUSTOM_IMAGE_SWR = 'Custom-Image-Swr';
    const TYPE_V1 = 'v1';
    const TYPE_V2 = 'v2';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRuntimeAllowableValues()
    {
        return [
            self::RUNTIME_JAVA8,
            self::RUNTIME_JAVA11,
            self::RUNTIME_NODE_JS6_10,
            self::RUNTIME_NODE_JS8_10,
            self::RUNTIME_NODE_JS10_16,
            self::RUNTIME_NODE_JS12_13,
            self::RUNTIME_NODE_JS14_18,
            self::RUNTIME_PYTHON2_7,
            self::RUNTIME_PYTHON3_6,
            self::RUNTIME_GO1_8,
            self::RUNTIME_GO1_X,
            self::RUNTIME_C__NET_CORE_2_0,
            self::RUNTIME_C__NET_CORE_2_1,
            self::RUNTIME_C__NET_CORE_3_1,
            self::RUNTIME_PHP7_3,
            self::RUNTIME_PYTHON3_9,
            self::RUNTIME_CUSTOM,
            self::RUNTIME_HTTP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCodeTypeAllowableValues()
    {
        return [
            self::CODE_TYPE_INLINE,
            self::CODE_TYPE_ZIP,
            self::CODE_TYPE_OBS,
            self::CODE_TYPE_JAR,
            self::CODE_TYPE_CUSTOM_IMAGE_SWR,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_V1,
            self::TYPE_V2,
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
        $this->container['funcName'] = isset($data['funcName']) ? $data['funcName'] : null;
        $this->container['package'] = isset($data['package']) ? $data['package'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['handler'] = isset($data['handler']) ? $data['handler'] : null;
        $this->container['dependVersionList'] = isset($data['dependVersionList']) ? $data['dependVersionList'] : null;
        $this->container['funcVpc'] = isset($data['funcVpc']) ? $data['funcVpc'] : null;
        $this->container['memorySize'] = isset($data['memorySize']) ? $data['memorySize'] : null;
        $this->container['gpuMemory'] = isset($data['gpuMemory']) ? $data['gpuMemory'] : null;
        $this->container['codeType'] = isset($data['codeType']) ? $data['codeType'] : null;
        $this->container['codeUrl'] = isset($data['codeUrl']) ? $data['codeUrl'] : null;
        $this->container['codeFilename'] = isset($data['codeFilename']) ? $data['codeFilename'] : null;
        $this->container['customImage'] = isset($data['customImage']) ? $data['customImage'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['xrole'] = isset($data['xrole']) ? $data['xrole'] : null;
        $this->container['appXrole'] = isset($data['appXrole']) ? $data['appXrole'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['funcCode'] = isset($data['funcCode']) ? $data['funcCode'] : null;
        $this->container['initializerHandler'] = isset($data['initializerHandler']) ? $data['initializerHandler'] : null;
        $this->container['initializerTimeout'] = isset($data['initializerTimeout']) ? $data['initializerTimeout'] : null;
        $this->container['preStopHandler'] = isset($data['preStopHandler']) ? $data['preStopHandler'] : null;
        $this->container['preStopTimeout'] = isset($data['preStopTimeout']) ? $data['preStopTimeout'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['logConfig'] = isset($data['logConfig']) ? $data['logConfig'] : null;
        $this->container['networkController'] = isset($data['networkController']) ? $data['networkController'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['funcName'] === null) {
            $invalidProperties[] = "'funcName' can't be null";
        }
        if ($this->container['package'] === null) {
            $invalidProperties[] = "'package' can't be null";
        }
        if ($this->container['runtime'] === null) {
            $invalidProperties[] = "'runtime' can't be null";
        }
            $allowedValues = $this->getRuntimeAllowableValues();
                if (!is_null($this->container['runtime']) && !in_array($this->container['runtime'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'runtime', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['timeout'] === null) {
            $invalidProperties[] = "'timeout' can't be null";
        }
        if ($this->container['handler'] === null) {
            $invalidProperties[] = "'handler' can't be null";
        }
        if ($this->container['memorySize'] === null) {
            $invalidProperties[] = "'memorySize' can't be null";
        }
        if ($this->container['codeType'] === null) {
            $invalidProperties[] = "'codeType' can't be null";
        }
            $allowedValues = $this->getCodeTypeAllowableValues();
                if (!is_null($this->container['codeType']) && !in_array($this->container['codeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'codeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    * Gets funcName
    *  函数名称。
    *
    * @return string
    */
    public function getFuncName()
    {
        return $this->container['funcName'];
    }

    /**
    * Sets funcName
    *
    * @param string $funcName 函数名称。
    *
    * @return $this
    */
    public function setFuncName($funcName)
    {
        $this->container['funcName'] = $funcName;
        return $this;
    }

    /**
    * Gets package
    *  函数所属的分组Package，用于用户针对函数的自定义分组。
    *
    * @return string
    */
    public function getPackage()
    {
        return $this->container['package'];
    }

    /**
    * Sets package
    *
    * @param string $package 函数所属的分组Package，用于用户针对函数的自定义分组。
    *
    * @return $this
    */
    public function setPackage($package)
    {
        $this->container['package'] = $package;
        return $this;
    }

    /**
    * Gets runtime
    *  FunctionGraph函数的执行环境 Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Java8: Java语言8版本。 Java11: Java语言11版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 http: HTTP函数。
    *
    * @return string
    */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
    * Sets runtime
    *
    * @param string $runtime FunctionGraph函数的执行环境 Python2.7: Python语言2.7版本。 Python3.6: Pyton语言3.6版本。 Python3.9: Python语言3.9版本。 Go1.8: Go语言1.8版本。 Go1.x: Go语言1.x版本。 Java8: Java语言8版本。 Java11: Java语言11版本。 Node.js6.10: Nodejs语言6.10版本。 Node.js8.10: Nodejs语言8.10版本。 Node.js10.16: Nodejs语言10.16版本。 Node.js12.13: Nodejs语言12.13版本。 Node.js14.18: Nodejs语言14.18版本。 C#(.NET Core 2.0): C#语言2.0版本。 C#(.NET Core 2.1): C#语言2.1版本。 C#(.NET Core 3.1): C#语言3.1版本。 Custom: 自定义运行时。 PHP7.3: Php语言7.3版本。 http: HTTP函数。
    *
    * @return $this
    */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;
        return $this;
    }

    /**
    * Gets timeout
    *  函数执行超时时间，超时函数将被强行停止，范围3～900秒，可以通过白名单配置延长到12小时，具体可以咨询客服进行配置
    *
    * @return int
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int $timeout 函数执行超时时间，超时函数将被强行停止，范围3～900秒，可以通过白名单配置延长到12小时，具体可以咨询客服进行配置
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets handler
    *  函数执行入口 规则：xx.xx，必须包含“. ”；自定义镜像函数handler为“-” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    *
    * @return string
    */
    public function getHandler()
    {
        return $this->container['handler'];
    }

    /**
    * Sets handler
    *
    * @param string $handler 函数执行入口 规则：xx.xx，必须包含“. ”；自定义镜像函数handler为“-” 举例：对于node.js函数：myfunction.handler，则表示函数的文件名为myfunction.js，执行的入口函数名为handler。
    *
    * @return $this
    */
    public function setHandler($handler)
    {
        $this->container['handler'] = $handler;
        return $this;
    }

    /**
    * Gets dependVersionList
    *  依赖版本id列表
    *
    * @return string[]|null
    */
    public function getDependVersionList()
    {
        return $this->container['dependVersionList'];
    }

    /**
    * Sets dependVersionList
    *
    * @param string[]|null $dependVersionList 依赖版本id列表
    *
    * @return $this
    */
    public function setDependVersionList($dependVersionList)
    {
        $this->container['dependVersionList'] = $dependVersionList;
        return $this;
    }

    /**
    * Gets funcVpc
    *  funcVpc
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncVpc|null
    */
    public function getFuncVpc()
    {
        return $this->container['funcVpc'];
    }

    /**
    * Sets funcVpc
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncVpc|null $funcVpc funcVpc
    *
    * @return $this
    */
    public function setFuncVpc($funcVpc)
    {
        $this->container['funcVpc'] = $funcVpc;
        return $this;
    }

    /**
    * Gets memorySize
    *  函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    *
    * @return int
    */
    public function getMemorySize()
    {
        return $this->container['memorySize'];
    }

    /**
    * Sets memorySize
    *
    * @param int $memorySize 函数消耗的内存。 单位M。 取值范围为：128、256、512、768、1024、1280、1536、1792、2048、2560、3072、3584、4096。 最小值为128，最大值为4096。
    *
    * @return $this
    */
    public function setMemorySize($memorySize)
    {
        $this->container['memorySize'] = $memorySize;
        return $this;
    }

    /**
    * Gets gpuMemory
    *  函数消耗的显存，只支持自定义运行时与自定义镜像函数配置GPU。 单位MB。 取值范围为：1024、2048、3072、4096、5120、6144、7168、8192、9216、10240、11264、12288、13312、14336、15360、16384。 最小值为1024，最大值为16384。
    *
    * @return int|null
    */
    public function getGpuMemory()
    {
        return $this->container['gpuMemory'];
    }

    /**
    * Sets gpuMemory
    *
    * @param int|null $gpuMemory 函数消耗的显存，只支持自定义运行时与自定义镜像函数配置GPU。 单位MB。 取值范围为：1024、2048、3072、4096、5120、6144、7168、8192、9216、10240、11264、12288、13312、14336、15360、16384。 最小值为1024，最大值为16384。
    *
    * @return $this
    */
    public function setGpuMemory($gpuMemory)
    {
        $this->container['gpuMemory'] = $gpuMemory;
        return $this;
    }

    /**
    * Gets codeType
    *  函数代码类型，取值有4种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。
    *
    * @return string
    */
    public function getCodeType()
    {
        return $this->container['codeType'];
    }

    /**
    * Sets codeType
    *
    * @param string $codeType 函数代码类型，取值有4种。 inline: UI在线编辑代码。 zip: 函数代码为zip包。 obs: 函数代码来源于obs存储。 jar: 函数代码为jar包，主要针对Java函数。
    *
    * @return $this
    */
    public function setCodeType($codeType)
    {
        $this->container['codeType'] = $codeType;
        return $this;
    }

    /**
    * Gets codeUrl
    *  当CodeType为obs时，该值为函数代码包在OBS上的地址，CodeType为其他值时，该字段为空。
    *
    * @return string|null
    */
    public function getCodeUrl()
    {
        return $this->container['codeUrl'];
    }

    /**
    * Sets codeUrl
    *
    * @param string|null $codeUrl 当CodeType为obs时，该值为函数代码包在OBS上的地址，CodeType为其他值时，该字段为空。
    *
    * @return $this
    */
    public function setCodeUrl($codeUrl)
    {
        $this->container['codeUrl'] = $codeUrl;
        return $this;
    }

    /**
    * Gets codeFilename
    *  函数的文件名，当CodeType为jar/zip时必须提供该字段，CodeType为其他值时不需要提供。
    *
    * @return string|null
    */
    public function getCodeFilename()
    {
        return $this->container['codeFilename'];
    }

    /**
    * Sets codeFilename
    *
    * @param string|null $codeFilename 函数的文件名，当CodeType为jar/zip时必须提供该字段，CodeType为其他值时不需要提供。
    *
    * @return $this
    */
    public function setCodeFilename($codeFilename)
    {
        $this->container['codeFilename'] = $codeFilename;
        return $this;
    }

    /**
    * Gets customImage
    *  customImage
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\CustomImage|null
    */
    public function getCustomImage()
    {
        return $this->container['customImage'];
    }

    /**
    * Sets customImage
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\CustomImage|null $customImage customImage
    *
    * @return $this
    */
    public function setCustomImage($customImage)
    {
        $this->container['customImage'] = $customImage;
        return $this;
    }

    /**
    * Gets userData
    *  用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
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
    * @param string|null $userData 用户自定义的name/value信息。 在函数中使用的参数。 举例：如函数要访问某个主机，可以设置自定义参数：Host={host_ip}，最多定义20个，总长度不超过4KB。
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
        return $this;
    }

    /**
    * Gets xrole
    *  函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    *
    * @return string|null
    */
    public function getXrole()
    {
        return $this->container['xrole'];
    }

    /**
    * Sets xrole
    *
    * @param string|null $xrole 函数使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    *
    * @return $this
    */
    public function setXrole($xrole)
    {
        $this->container['xrole'] = $xrole;
        return $this;
    }

    /**
    * Gets appXrole
    *  函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    *
    * @return string|null
    */
    public function getAppXrole()
    {
        return $this->container['appXrole'];
    }

    /**
    * Sets appXrole
    *
    * @param string|null $appXrole 函数app使用的权限委托名称，需要IAM支持，并在IAM界面创建委托，当函数需要访问其他服务时，必须提供该字段。
    *
    * @return $this
    */
    public function setAppXrole($appXrole)
    {
        $this->container['appXrole'] = $appXrole;
        return $this;
    }

    /**
    * Gets description
    *  函数描述。
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
    * @param string|null $description 函数描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets funcCode
    *  funcCode
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncCode|null
    */
    public function getFuncCode()
    {
        return $this->container['funcCode'];
    }

    /**
    * Sets funcCode
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncCode|null $funcCode funcCode
    *
    * @return $this
    */
    public function setFuncCode($funcCode)
    {
        $this->container['funcCode'] = $funcCode;
        return $this;
    }

    /**
    * Gets initializerHandler
    *  函数初始化入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    *
    * @return string|null
    */
    public function getInitializerHandler()
    {
        return $this->container['initializerHandler'];
    }

    /**
    * Sets initializerHandler
    *
    * @param string|null $initializerHandler 函数初始化入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.initializer，则表示函数的文件名为myfunction.js，初始化的入口函数名为initializer。
    *
    * @return $this
    */
    public function setInitializerHandler($initializerHandler)
    {
        $this->container['initializerHandler'] = $initializerHandler;
        return $this;
    }

    /**
    * Gets initializerTimeout
    *  初始化超时时间，超时函数将被强行停止，范围1～300秒。
    *
    * @return int|null
    */
    public function getInitializerTimeout()
    {
        return $this->container['initializerTimeout'];
    }

    /**
    * Sets initializerTimeout
    *
    * @param int|null $initializerTimeout 初始化超时时间，超时函数将被强行停止，范围1～300秒。
    *
    * @return $this
    */
    public function setInitializerTimeout($initializerTimeout)
    {
        $this->container['initializerTimeout'] = $initializerTimeout;
        return $this;
    }

    /**
    * Gets preStopHandler
    *  函数预停止函数的入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.pre_stop_handler，则表示函数的文件名为myfunction.js，初始化的入口函数名为pre_stop_handler。
    *
    * @return string|null
    */
    public function getPreStopHandler()
    {
        return $this->container['preStopHandler'];
    }

    /**
    * Sets preStopHandler
    *
    * @param string|null $preStopHandler 函数预停止函数的入口，规则：xx.xx，必须包含“. ”。 举例：对于node.js函数：myfunction.pre_stop_handler，则表示函数的文件名为myfunction.js，初始化的入口函数名为pre_stop_handler。
    *
    * @return $this
    */
    public function setPreStopHandler($preStopHandler)
    {
        $this->container['preStopHandler'] = $preStopHandler;
        return $this;
    }

    /**
    * Gets preStopTimeout
    *  初始化超时时间，超时函数将被强行停止，范围1～90秒。
    *
    * @return int|null
    */
    public function getPreStopTimeout()
    {
        return $this->container['preStopTimeout'];
    }

    /**
    * Sets preStopTimeout
    *
    * @param int|null $preStopTimeout 初始化超时时间，超时函数将被强行停止，范围1～90秒。
    *
    * @return $this
    */
    public function setPreStopTimeout($preStopTimeout)
    {
        $this->container['preStopTimeout'] = $preStopTimeout;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，在企业用户创建函数时必填。
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
    * @param string|null $enterpriseProjectId 企业项目ID，在企业用户创建函数时必填。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets type
    *  函数版本；部分局点只支持v1函数，缺省值则为v1
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 函数版本；部分局点只支持v1函数，缺省值则为v1
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets logConfig
    *  logConfig
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncLogConfig|null
    */
    public function getLogConfig()
    {
        return $this->container['logConfig'];
    }

    /**
    * Sets logConfig
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\FuncLogConfig|null $logConfig logConfig
    *
    * @return $this
    */
    public function setLogConfig($logConfig)
    {
        $this->container['logConfig'] = $logConfig;
        return $this;
    }

    /**
    * Gets networkController
    *  networkController
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\NetworkControlConfig|null
    */
    public function getNetworkController()
    {
        return $this->container['networkController'];
    }

    /**
    * Sets networkController
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\NetworkControlConfig|null $networkController networkController
    *
    * @return $this
    */
    public function setNetworkController($networkController)
    {
        $this->container['networkController'] = $networkController;
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

