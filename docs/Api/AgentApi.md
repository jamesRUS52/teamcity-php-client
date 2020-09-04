# TeamCityClient\AgentApi

All URIs are relative to *https://vs-szp-ds01.otr.ru:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAgent**](AgentApi.md#deleteAgent) | **DELETE** /app/rest/agents/{agentLocator} | 
[**geIncompatibleBuildTypes**](AgentApi.md#geIncompatibleBuildTypes) | **GET** /app/rest/agents/{agentLocator}/incompatibleBuildTypes | 
[**getAgentPool**](AgentApi.md#getAgentPool) | **GET** /app/rest/agents/{agentLocator}/pool | 
[**getAllowedRunConfigurations**](AgentApi.md#getAllowedRunConfigurations) | **GET** /app/rest/agents/{agentLocator}/compatibilityPolicy | 
[**getAuthorizedInfo**](AgentApi.md#getAuthorizedInfo) | **GET** /app/rest/agents/{agentLocator}/authorizedInfo | 
[**getCompatibleBuildTypes**](AgentApi.md#getCompatibleBuildTypes) | **GET** /app/rest/agents/{agentLocator}/compatibleBuildTypes | 
[**getEnabledInfo**](AgentApi.md#getEnabledInfo) | **GET** /app/rest/agents/{agentLocator}/enabledInfo | 
[**serveAgent**](AgentApi.md#serveAgent) | **GET** /app/rest/agents/{agentLocator} | 
[**serveAgentField**](AgentApi.md#serveAgentField) | **GET** /app/rest/agents/{agentLocator}/{field} | 
[**serveAgents**](AgentApi.md#serveAgents) | **GET** /app/rest/agents | 
[**setAgentField**](AgentApi.md#setAgentField) | **PUT** /app/rest/agents/{agentLocator}/{field} | 
[**setAgentPool**](AgentApi.md#setAgentPool) | **PUT** /app/rest/agents/{agentLocator}/pool | 
[**setAllowedRunConfigurations**](AgentApi.md#setAllowedRunConfigurations) | **PUT** /app/rest/agents/{agentLocator}/compatibilityPolicy | 
[**setAuthorizedInfo**](AgentApi.md#setAuthorizedInfo) | **PUT** /app/rest/agents/{agentLocator}/authorizedInfo | 
[**setEnabledInfo**](AgentApi.md#setEnabledInfo) | **PUT** /app/rest/agents/{agentLocator}/enabledInfo | 


# **deleteAgent**
> deleteAgent($agent_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 

try {
    $apiInstance->deleteAgent($agent_locator);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->deleteAgent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **geIncompatibleBuildTypes**
> \TeamCityClient\Model\Compatibilities geIncompatibleBuildTypes($agent_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->geIncompatibleBuildTypes($agent_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->geIncompatibleBuildTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Compatibilities**](../Model/Compatibilities.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgentPool**
> \TeamCityClient\Model\AgentPool getAgentPool($agent_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAgentPool($agent_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->getAgentPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\AgentPool**](../Model/AgentPool.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllowedRunConfigurations**
> \TeamCityClient\Model\CompatibilityPolicy getAllowedRunConfigurations($agent_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAllowedRunConfigurations($agent_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->getAllowedRunConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\CompatibilityPolicy**](../Model/CompatibilityPolicy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizedInfo**
> \TeamCityClient\Model\AuthorizedInfo getAuthorizedInfo($agent_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAuthorizedInfo($agent_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->getAuthorizedInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\AuthorizedInfo**](../Model/AuthorizedInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompatibleBuildTypes**
> \TeamCityClient\Model\BuildTypes getCompatibleBuildTypes($agent_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getCompatibleBuildTypes($agent_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->getCompatibleBuildTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\BuildTypes**](../Model/BuildTypes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnabledInfo**
> \TeamCityClient\Model\EnabledInfo getEnabledInfo($agent_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getEnabledInfo($agent_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->getEnabledInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\EnabledInfo**](../Model/EnabledInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveAgent**
> \TeamCityClient\Model\Agent serveAgent($agent_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveAgent($agent_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->serveAgent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Agent**](../Model/Agent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveAgentField**
> string serveAgentField($agent_locator, $field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->serveAgentField($agent_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->serveAgentField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveAgents**
> \TeamCityClient\Model\Agents serveAgents($include_disconnected, $include_unauthorized, $locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$include_disconnected = true; // bool | 
$include_unauthorized = true; // bool | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveAgents($include_disconnected, $include_unauthorized, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->serveAgents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_disconnected** | **bool**|  | [optional]
 **include_unauthorized** | **bool**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Agents**](../Model/Agents.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAgentField**
> string setAgentField($agent_locator, $field, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$field = "field_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setAgentField($agent_locator, $field, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->setAgentField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **field** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAgentPool**
> \TeamCityClient\Model\AgentPool setAgentPool($agent_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$body = new \TeamCityClient\Model\AgentPool(); // \TeamCityClient\Model\AgentPool | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setAgentPool($agent_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->setAgentPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\AgentPool**](../Model/AgentPool.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\AgentPool**](../Model/AgentPool.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAllowedRunConfigurations**
> \TeamCityClient\Model\CompatibilityPolicy setAllowedRunConfigurations($agent_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$body = new \TeamCityClient\Model\CompatibilityPolicy(); // \TeamCityClient\Model\CompatibilityPolicy | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setAllowedRunConfigurations($agent_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->setAllowedRunConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\CompatibilityPolicy**](../Model/CompatibilityPolicy.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\CompatibilityPolicy**](../Model/CompatibilityPolicy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAuthorizedInfo**
> \TeamCityClient\Model\AuthorizedInfo setAuthorizedInfo($agent_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$body = new \TeamCityClient\Model\AuthorizedInfo(); // \TeamCityClient\Model\AuthorizedInfo | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setAuthorizedInfo($agent_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->setAuthorizedInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\AuthorizedInfo**](../Model/AuthorizedInfo.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\AuthorizedInfo**](../Model/AuthorizedInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setEnabledInfo**
> \TeamCityClient\Model\EnabledInfo setEnabledInfo($agent_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_locator = "agent_locator_example"; // string | 
$body = new \TeamCityClient\Model\EnabledInfo(); // \TeamCityClient\Model\EnabledInfo | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setEnabledInfo($agent_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentApi->setEnabledInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\EnabledInfo**](../Model/EnabledInfo.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\EnabledInfo**](../Model/EnabledInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

