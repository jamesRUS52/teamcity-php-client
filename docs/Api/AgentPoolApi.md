# TeamCityClient\AgentPoolApi

All URIs are relative to *https://vs-szp-ds01.otr.ru:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAgent**](AgentPoolApi.md#addAgent) | **POST** /app/rest/agentPools/{agentPoolLocator}/agents | 
[**addProject**](AgentPoolApi.md#addProject) | **POST** /app/rest/agentPools/{agentPoolLocator}/projects | 
[**createPool**](AgentPoolApi.md#createPool) | **POST** /app/rest/agentPools | 
[**deletePool**](AgentPoolApi.md#deletePool) | **DELETE** /app/rest/agentPools/{agentPoolLocator} | 
[**deletePoolProject**](AgentPoolApi.md#deletePoolProject) | **DELETE** /app/rest/agentPools/{agentPoolLocator}/projects/{projectLocator} | 
[**deleteProjects**](AgentPoolApi.md#deleteProjects) | **DELETE** /app/rest/agentPools/{agentPoolLocator}/projects | 
[**getField**](AgentPoolApi.md#getField) | **GET** /app/rest/agentPools/{agentPoolLocator}/{field} | 
[**getPool**](AgentPoolApi.md#getPool) | **GET** /app/rest/agentPools/{agentPoolLocator} | 
[**getPoolAgents**](AgentPoolApi.md#getPoolAgents) | **GET** /app/rest/agentPools/{agentPoolLocator}/agents | 
[**getPoolProject**](AgentPoolApi.md#getPoolProject) | **GET** /app/rest/agentPools/{agentPoolLocator}/projects/{projectLocator} | 
[**getPoolProjects**](AgentPoolApi.md#getPoolProjects) | **GET** /app/rest/agentPools/{agentPoolLocator}/projects | 
[**getPools**](AgentPoolApi.md#getPools) | **GET** /app/rest/agentPools | 
[**replaceProjects**](AgentPoolApi.md#replaceProjects) | **PUT** /app/rest/agentPools/{agentPoolLocator}/projects | 
[**setField**](AgentPoolApi.md#setField) | **PUT** /app/rest/agentPools/{agentPoolLocator}/{field} | 


# **addAgent**
> \TeamCityClient\Model\Agent addAgent($agent_pool_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 
$body = new \TeamCityClient\Model\Agent(); // \TeamCityClient\Model\Agent | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addAgent($agent_pool_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->addAgent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Agent**](../Model/Agent.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Agent**](../Model/Agent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addProject**
> \TeamCityClient\Model\Project addProject($agent_pool_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 
$body = new \TeamCityClient\Model\Project(); // \TeamCityClient\Model\Project | 

try {
    $result = $apiInstance->addProject($agent_pool_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->addProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Project**](../Model/Project.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPool**
> \TeamCityClient\Model\AgentPool createPool($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TeamCityClient\Model\AgentPool(); // \TeamCityClient\Model\AgentPool | 

try {
    $result = $apiInstance->createPool($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->createPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TeamCityClient\Model\AgentPool**](../Model/AgentPool.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\AgentPool**](../Model/AgentPool.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePool**
> deletePool($agent_pool_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 

try {
    $apiInstance->deletePool($agent_pool_locator);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->deletePool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePoolProject**
> deletePoolProject($agent_pool_locator, $project_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 
$project_locator = "project_locator_example"; // string | 

try {
    $apiInstance->deletePoolProject($agent_pool_locator, $project_locator);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->deletePoolProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |
 **project_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProjects**
> deleteProjects($agent_pool_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 

try {
    $apiInstance->deleteProjects($agent_pool_locator);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->deleteProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getField**
> string getField($agent_pool_locator, $field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->getField($agent_pool_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->getField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPool**
> \TeamCityClient\Model\AgentPool getPool($agent_pool_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getPool($agent_pool_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->getPool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\AgentPool**](../Model/AgentPool.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPoolAgents**
> \TeamCityClient\Model\Agents getPoolAgents($agent_pool_locator, $locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getPoolAgents($agent_pool_locator, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->getPoolAgents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |
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

# **getPoolProject**
> \TeamCityClient\Model\Project getPoolProject($agent_pool_locator, $project_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getPoolProject($agent_pool_locator, $project_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->getPoolProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |
 **project_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPoolProjects**
> \TeamCityClient\Model\Projects getPoolProjects($agent_pool_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getPoolProjects($agent_pool_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->getPoolProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Projects**](../Model/Projects.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPools**
> \TeamCityClient\Model\AgentPools getPools($locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getPools($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->getPools: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\AgentPools**](../Model/AgentPools.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceProjects**
> \TeamCityClient\Model\Projects replaceProjects($agent_pool_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 
$body = new \TeamCityClient\Model\Projects(); // \TeamCityClient\Model\Projects | 

try {
    $result = $apiInstance->replaceProjects($agent_pool_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->replaceProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Projects**](../Model/Projects.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\Projects**](../Model/Projects.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setField**
> string setField($agent_pool_locator, $field, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\AgentPoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$agent_pool_locator = "agent_pool_locator_example"; // string | 
$field = "field_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setField($agent_pool_locator, $field, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentPoolApi->setField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agent_pool_locator** | **string**|  |
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

