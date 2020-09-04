# TeamCityClient\ProjectApi

All URIs are relative to *https://vs-szp-ds01.otr.ru:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**add**](ProjectApi.md#add) | **POST** /app/rest/projects/{projectLocator}/projectFeatures | 
[**createBuildType**](ProjectApi.md#createBuildType) | **POST** /app/rest/projects/{projectLocator}/buildTypes | 
[**createBuildTypeTemplate**](ProjectApi.md#createBuildTypeTemplate) | **POST** /app/rest/projects/{projectLocator}/templates | 
[**createProject**](ProjectApi.md#createProject) | **POST** /app/rest/projects | 
[**createSecureToken**](ProjectApi.md#createSecureToken) | **POST** /app/rest/projects/{projectLocator}/secure/tokens | 
[**delete**](ProjectApi.md#delete) | **DELETE** /app/rest/projects/{projectLocator}/projectFeatures/{featureLocator} | 
[**deleteAllParameters**](ProjectApi.md#deleteAllParameters) | **DELETE** /app/rest/projects/{projectLocator}/parameters | 
[**deleteAllParameters_0**](ProjectApi.md#deleteAllParameters_0) | **DELETE** /app/rest/projects/{projectLocator}/projectFeatures/{featureLocator}/properties | 
[**deleteParameter**](ProjectApi.md#deleteParameter) | **DELETE** /app/rest/projects/{projectLocator}/parameters/{name} | 
[**deleteParameter_0**](ProjectApi.md#deleteParameter_0) | **DELETE** /app/rest/projects/{projectLocator}/projectFeatures/{featureLocator}/properties/{name} | 
[**deleteProject**](ProjectApi.md#deleteProject) | **DELETE** /app/rest/projects/{projectLocator} | 
[**deleteProjectAgentPools**](ProjectApi.md#deleteProjectAgentPools) | **DELETE** /app/rest/projects/{projectLocator}/agentPools/{agentPoolLocator} | 
[**get**](ProjectApi.md#get) | **GET** /app/rest/projects/{projectLocator}/projectFeatures | 
[**getBranches**](ProjectApi.md#getBranches) | **GET** /app/rest/projects/{projectLocator}/branches | 
[**getBuildTypesOrder**](ProjectApi.md#getBuildTypesOrder) | **GET** /app/rest/projects/{projectLocator}/order/buildTypes | 
[**getDefaultTemplate**](ProjectApi.md#getDefaultTemplate) | **GET** /app/rest/projects/{projectLocator}/defaultTemplate | 
[**getExampleNewProjectDescription**](ProjectApi.md#getExampleNewProjectDescription) | **GET** /app/rest/projects/{projectLocator}/example/newProjectDescription | 
[**getExampleNewProjectDescriptionCompatibilityVersion1**](ProjectApi.md#getExampleNewProjectDescriptionCompatibilityVersion1) | **GET** /app/rest/projects/{projectLocator}/newProjectDescription | 
[**getParameter**](ProjectApi.md#getParameter) | **GET** /app/rest/projects/{projectLocator}/parameters/{name} | 
[**getParameterType**](ProjectApi.md#getParameterType) | **GET** /app/rest/projects/{projectLocator}/parameters/{name}/type | 
[**getParameterTypeRawValue**](ProjectApi.md#getParameterTypeRawValue) | **GET** /app/rest/projects/{projectLocator}/parameters/{name}/type/rawValue | 
[**getParameterValueLong**](ProjectApi.md#getParameterValueLong) | **GET** /app/rest/projects/{projectLocator}/parameters/{name}/value | 
[**getParameterValueLong_0**](ProjectApi.md#getParameterValueLong_0) | **GET** /app/rest/projects/{projectLocator}/projectFeatures/{featureLocator}/properties/{name}/value | 
[**getParameter_0**](ProjectApi.md#getParameter_0) | **GET** /app/rest/projects/{projectLocator}/projectFeatures/{featureLocator}/properties/{name} | 
[**getParameters**](ProjectApi.md#getParameters) | **GET** /app/rest/projects/{projectLocator}/parameters | 
[**getParameters_0**](ProjectApi.md#getParameters_0) | **GET** /app/rest/projects/{projectLocator}/projectFeatures/{featureLocator}/properties | 
[**getParentProject**](ProjectApi.md#getParentProject) | **GET** /app/rest/projects/{projectLocator}/parentProject | 
[**getProjectAgentPools**](ProjectApi.md#getProjectAgentPools) | **GET** /app/rest/projects/{projectLocator}/agentPools | 
[**getProjectsOrder**](ProjectApi.md#getProjectsOrder) | **GET** /app/rest/projects/{projectLocator}/order/projects | 
[**getSecureValue**](ProjectApi.md#getSecureValue) | **GET** /app/rest/projects/{projectLocator}/secure/values/{token} | 
[**getSettingsFile**](ProjectApi.md#getSettingsFile) | **GET** /app/rest/projects/{projectLocator}/settingsFile | 
[**getSingle**](ProjectApi.md#getSingle) | **GET** /app/rest/projects/{projectLocator}/projectFeatures/{featureLocator} | 
[**reloadSettingsFile**](ProjectApi.md#reloadSettingsFile) | **GET** /app/rest/projects/{projectLocator}/latest | 
[**removeDefaultTemplate**](ProjectApi.md#removeDefaultTemplate) | **DELETE** /app/rest/projects/{projectLocator}/defaultTemplate | 
[**replace**](ProjectApi.md#replace) | **PUT** /app/rest/projects/{projectLocator}/projectFeatures/{featureLocator} | 
[**replaceAll**](ProjectApi.md#replaceAll) | **PUT** /app/rest/projects/{projectLocator}/projectFeatures | 
[**serveBuildFieldWithProject**](ProjectApi.md#serveBuildFieldWithProject) | **GET** /app/rest/projects/{projectLocator}/buildTypes/{btLocator}/builds/{buildLocator}/{field} | 
[**serveBuildType**](ProjectApi.md#serveBuildType) | **GET** /app/rest/projects/{projectLocator}/buildTypes/{btLocator} | 
[**serveBuildTypeFieldWithProject**](ProjectApi.md#serveBuildTypeFieldWithProject) | **GET** /app/rest/projects/{projectLocator}/buildTypes/{btLocator}/{field} | 
[**serveBuildTypeTemplates**](ProjectApi.md#serveBuildTypeTemplates) | **GET** /app/rest/projects/{projectLocator}/templates/{btLocator} | 
[**serveBuildTypesInProject**](ProjectApi.md#serveBuildTypesInProject) | **GET** /app/rest/projects/{projectLocator}/buildTypes | 
[**serveBuildWithProject**](ProjectApi.md#serveBuildWithProject) | **GET** /app/rest/projects/{projectLocator}/buildTypes/{btLocator}/builds/{buildLocator} | 
[**serveBuilds**](ProjectApi.md#serveBuilds) | **GET** /app/rest/projects/{projectLocator}/buildTypes/{btLocator}/builds | 
[**serveProject**](ProjectApi.md#serveProject) | **GET** /app/rest/projects/{projectLocator} | 
[**serveProjectField**](ProjectApi.md#serveProjectField) | **GET** /app/rest/projects/{projectLocator}/{field} | 
[**serveProjects**](ProjectApi.md#serveProjects) | **GET** /app/rest/projects | 
[**serveTemplatesInProject**](ProjectApi.md#serveTemplatesInProject) | **GET** /app/rest/projects/{projectLocator}/templates | 
[**setBuildTypesOrder**](ProjectApi.md#setBuildTypesOrder) | **PUT** /app/rest/projects/{projectLocator}/order/buildTypes | 
[**setDefaultTemplate**](ProjectApi.md#setDefaultTemplate) | **PUT** /app/rest/projects/{projectLocator}/defaultTemplate | 
[**setParameter**](ProjectApi.md#setParameter) | **POST** /app/rest/projects/{projectLocator}/parameters | 
[**setParameterType**](ProjectApi.md#setParameterType) | **PUT** /app/rest/projects/{projectLocator}/parameters/{name}/type | 
[**setParameterTypeRawValue**](ProjectApi.md#setParameterTypeRawValue) | **PUT** /app/rest/projects/{projectLocator}/parameters/{name}/type/rawValue | 
[**setParameterValueLong**](ProjectApi.md#setParameterValueLong) | **PUT** /app/rest/projects/{projectLocator}/parameters/{name}/value | 
[**setParameterValueLong_0**](ProjectApi.md#setParameterValueLong_0) | **PUT** /app/rest/projects/{projectLocator}/projectFeatures/{featureLocator}/properties/{name}/value | 
[**setParameter_0**](ProjectApi.md#setParameter_0) | **PUT** /app/rest/projects/{projectLocator}/parameters/{name} | 
[**setParameter_1**](ProjectApi.md#setParameter_1) | **POST** /app/rest/projects/{projectLocator}/projectFeatures/{featureLocator}/properties | 
[**setParameter_2**](ProjectApi.md#setParameter_2) | **PUT** /app/rest/projects/{projectLocator}/projectFeatures/{featureLocator}/properties/{name} | 
[**setParameters**](ProjectApi.md#setParameters) | **PUT** /app/rest/projects/{projectLocator}/parameters | 
[**setParameters_0**](ProjectApi.md#setParameters_0) | **PUT** /app/rest/projects/{projectLocator}/projectFeatures/{featureLocator}/properties | 
[**setParentProject**](ProjectApi.md#setParentProject) | **PUT** /app/rest/projects/{projectLocator}/parentProject | 
[**setProjectAgentPools**](ProjectApi.md#setProjectAgentPools) | **PUT** /app/rest/projects/{projectLocator}/agentPools | 
[**setProjectAgentPools_0**](ProjectApi.md#setProjectAgentPools_0) | **POST** /app/rest/projects/{projectLocator}/agentPools | 
[**setProjectField**](ProjectApi.md#setProjectField) | **PUT** /app/rest/projects/{projectLocator}/{field} | 
[**setProjectsOrder**](ProjectApi.md#setProjectsOrder) | **PUT** /app/rest/projects/{projectLocator}/order/projects | 


# **add**
> object add($project_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \TeamCityClient\Model\ProjectFeature(); // \TeamCityClient\Model\ProjectFeature | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->add($project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->add: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\ProjectFeature**](../Model/ProjectFeature.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBuildType**
> \TeamCityClient\Model\BuildType createBuildType($project_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \TeamCityClient\Model\NewBuildTypeDescription(); // \TeamCityClient\Model\NewBuildTypeDescription | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->createBuildType($project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->createBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\NewBuildTypeDescription**](../Model/NewBuildTypeDescription.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\BuildType**](../Model/BuildType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBuildTypeTemplate**
> \TeamCityClient\Model\BuildType createBuildTypeTemplate($project_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \TeamCityClient\Model\NewBuildTypeDescription(); // \TeamCityClient\Model\NewBuildTypeDescription | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->createBuildTypeTemplate($project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->createBuildTypeTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\NewBuildTypeDescription**](../Model/NewBuildTypeDescription.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\BuildType**](../Model/BuildType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProject**
> \TeamCityClient\Model\Project createProject($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TeamCityClient\Model\NewProjectDescription(); // \TeamCityClient\Model\NewProjectDescription | 

try {
    $result = $apiInstance->createProject($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->createProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TeamCityClient\Model\NewProjectDescription**](../Model/NewProjectDescription.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSecureToken**
> string createSecureToken($project_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->createSecureToken($project_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->createSecureToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> delete($feature_locator, $project_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$feature_locator = "feature_locator_example"; // string | 
$project_locator = "project_locator_example"; // string | 

try {
    $apiInstance->delete($feature_locator, $project_locator);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feature_locator** | **string**|  |
 **project_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllParameters**
> deleteAllParameters($project_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 

try {
    $apiInstance->deleteAllParameters($project_locator);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->deleteAllParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllParameters_0**
> deleteAllParameters_0($feature_locator, $project_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$feature_locator = "feature_locator_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $apiInstance->deleteAllParameters_0($feature_locator, $project_locator, $fields);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->deleteAllParameters_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feature_locator** | **string**|  |
 **project_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteParameter**
> deleteParameter($name, $project_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$project_locator = "project_locator_example"; // string | 

try {
    $apiInstance->deleteParameter($name, $project_locator);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->deleteParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **project_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteParameter_0**
> deleteParameter_0($name, $feature_locator, $project_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$feature_locator = "feature_locator_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $apiInstance->deleteParameter_0($name, $feature_locator, $project_locator, $fields);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->deleteParameter_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **feature_locator** | **string**|  |
 **project_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProject**
> deleteProject($project_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 

try {
    $apiInstance->deleteProject($project_locator);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->deleteProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProjectAgentPools**
> deleteProjectAgentPools($project_locator, $agent_pool_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$agent_pool_locator = "agent_pool_locator_example"; // string | 

try {
    $apiInstance->deleteProjectAgentPools($project_locator, $agent_pool_locator);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->deleteProjectAgentPools: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **agent_pool_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> object get($project_locator, $locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->get($project_locator, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBranches**
> \TeamCityClient\Model\Branches getBranches($project_locator, $locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBranches($project_locator, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getBranches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Branches**](../Model/Branches.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildTypesOrder**
> \TeamCityClient\Model\BuildTypes getBuildTypesOrder($project_locator, $field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->getBuildTypesOrder($project_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getBuildTypesOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **field** | **string**|  |

### Return type

[**\TeamCityClient\Model\BuildTypes**](../Model/BuildTypes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDefaultTemplate**
> \TeamCityClient\Model\BuildType getDefaultTemplate($project_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getDefaultTemplate($project_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getDefaultTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\BuildType**](../Model/BuildType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExampleNewProjectDescription**
> \TeamCityClient\Model\NewProjectDescription getExampleNewProjectDescription($project_locator, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getExampleNewProjectDescription($project_locator, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getExampleNewProjectDescription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **id** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\NewProjectDescription**](../Model/NewProjectDescription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExampleNewProjectDescriptionCompatibilityVersion1**
> \TeamCityClient\Model\NewProjectDescription getExampleNewProjectDescriptionCompatibilityVersion1($project_locator, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getExampleNewProjectDescriptionCompatibilityVersion1($project_locator, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getExampleNewProjectDescriptionCompatibilityVersion1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **id** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\NewProjectDescription**](../Model/NewProjectDescription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParameter**
> \TeamCityClient\Model\Property getParameter($name, $project_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getParameter($name, $project_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **project_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Property**](../Model/Property.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParameterType**
> \TeamCityClient\Model\Type getParameterType($name, $project_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$project_locator = "project_locator_example"; // string | 

try {
    $result = $apiInstance->getParameterType($name, $project_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getParameterType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **project_locator** | **string**|  |

### Return type

[**\TeamCityClient\Model\Type**](../Model/Type.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParameterTypeRawValue**
> string getParameterTypeRawValue($name, $project_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$project_locator = "project_locator_example"; // string | 

try {
    $result = $apiInstance->getParameterTypeRawValue($name, $project_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getParameterTypeRawValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **project_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParameterValueLong**
> string getParameterValueLong($name, $project_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$project_locator = "project_locator_example"; // string | 

try {
    $result = $apiInstance->getParameterValueLong($name, $project_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getParameterValueLong: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **project_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParameterValueLong_0**
> string getParameterValueLong_0($name, $feature_locator, $project_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$feature_locator = "feature_locator_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getParameterValueLong_0($name, $feature_locator, $project_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getParameterValueLong_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **feature_locator** | **string**|  |
 **project_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParameter_0**
> \TeamCityClient\Model\Property getParameter_0($name, $feature_locator, $project_locator, $fields, $fields2)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$feature_locator = "feature_locator_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 
$fields2 = "fields_example"; // string | 

try {
    $result = $apiInstance->getParameter_0($name, $feature_locator, $project_locator, $fields, $fields2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getParameter_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **feature_locator** | **string**|  |
 **project_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **fields2** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Property**](../Model/Property.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParameters**
> \TeamCityClient\Model\Properties getParameters($project_locator, $locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getParameters($project_locator, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParameters_0**
> \TeamCityClient\Model\Properties getParameters_0($feature_locator, $project_locator, $locator, $fields, $fields2)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$feature_locator = "feature_locator_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 
$fields2 = "fields_example"; // string | 

try {
    $result = $apiInstance->getParameters_0($feature_locator, $project_locator, $locator, $fields, $fields2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getParameters_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feature_locator** | **string**|  |
 **project_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **fields2** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParentProject**
> \TeamCityClient\Model\Project getParentProject($project_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getParentProject($project_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getParentProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **getProjectAgentPools**
> \TeamCityClient\Model\AgentPools getProjectAgentPools($project_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getProjectAgentPools($project_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectAgentPools: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\AgentPools**](../Model/AgentPools.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectsOrder**
> \TeamCityClient\Model\Projects getProjectsOrder($project_locator, $field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->getProjectsOrder($project_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectsOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **field** | **string**|  |

### Return type

[**\TeamCityClient\Model\Projects**](../Model/Projects.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSecureValue**
> string getSecureValue($project_locator, $token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$token = "token_example"; // string | 

try {
    $result = $apiInstance->getSecureValue($project_locator, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getSecureValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **token** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSettingsFile**
> string getSettingsFile($project_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 

try {
    $result = $apiInstance->getSettingsFile($project_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getSettingsFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSingle**
> object getSingle($feature_locator, $project_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$feature_locator = "feature_locator_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getSingle($feature_locator, $project_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getSingle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feature_locator** | **string**|  |
 **project_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reloadSettingsFile**
> \TeamCityClient\Model\Project reloadSettingsFile($project_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->reloadSettingsFile($project_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->reloadSettingsFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **removeDefaultTemplate**
> removeDefaultTemplate($project_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $apiInstance->removeDefaultTemplate($project_locator, $fields);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->removeDefaultTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replace**
> object replace($feature_locator, $project_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$feature_locator = "feature_locator_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$body = new \TeamCityClient\Model\ProjectFeature(); // \TeamCityClient\Model\ProjectFeature | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->replace($feature_locator, $project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->replace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feature_locator** | **string**|  |
 **project_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\ProjectFeature**](../Model/ProjectFeature.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAll**
> object replaceAll($project_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \TeamCityClient\Model\ProjectFeatures(); // \TeamCityClient\Model\ProjectFeatures | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->replaceAll($project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->replaceAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\ProjectFeatures**](../Model/ProjectFeatures.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveBuildFieldWithProject**
> string serveBuildFieldWithProject($project_locator, $bt_locator, $build_locator, $field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$build_locator = "build_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->serveBuildFieldWithProject($project_locator, $bt_locator, $build_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->serveBuildFieldWithProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **bt_locator** | **string**|  |
 **build_locator** | **string**|  |
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveBuildType**
> \TeamCityClient\Model\BuildType serveBuildType($project_locator, $bt_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveBuildType($project_locator, $bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->serveBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\BuildType**](../Model/BuildType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveBuildTypeFieldWithProject**
> string serveBuildTypeFieldWithProject($project_locator, $bt_locator, $field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->serveBuildTypeFieldWithProject($project_locator, $bt_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->serveBuildTypeFieldWithProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **bt_locator** | **string**|  |
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveBuildTypeTemplates**
> \TeamCityClient\Model\BuildType serveBuildTypeTemplates($project_locator, $bt_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveBuildTypeTemplates($project_locator, $bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->serveBuildTypeTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\BuildType**](../Model/BuildType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveBuildTypesInProject**
> \TeamCityClient\Model\BuildTypes serveBuildTypesInProject($project_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveBuildTypesInProject($project_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->serveBuildTypesInProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\BuildTypes**](../Model/BuildTypes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveBuildWithProject**
> \TeamCityClient\Model\Build serveBuildWithProject($project_locator, $bt_locator, $build_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveBuildWithProject($project_locator, $bt_locator, $build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->serveBuildWithProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **bt_locator** | **string**|  |
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveBuilds**
> \TeamCityClient\Model\Builds serveBuilds($project_locator, $bt_locator, $status, $triggered_by_user, $include_personal, $include_canceled, $only_pinned, $tag, $agent_name, $since_build, $since_date, $start, $count, $locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$status = "status_example"; // string | 
$triggered_by_user = "triggered_by_user_example"; // string | 
$include_personal = true; // bool | 
$include_canceled = true; // bool | 
$only_pinned = true; // bool | 
$tag = array("tag_example"); // string[] | 
$agent_name = "agent_name_example"; // string | 
$since_build = "since_build_example"; // string | 
$since_date = "since_date_example"; // string | 
$start = 789; // int | 
$count = 56; // int | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveBuilds($project_locator, $bt_locator, $status, $triggered_by_user, $include_personal, $include_canceled, $only_pinned, $tag, $agent_name, $since_build, $since_date, $start, $count, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->serveBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **bt_locator** | **string**|  |
 **status** | **string**|  | [optional]
 **triggered_by_user** | **string**|  | [optional]
 **include_personal** | **bool**|  | [optional]
 **include_canceled** | **bool**|  | [optional]
 **only_pinned** | **bool**|  | [optional]
 **tag** | [**string[]**](../Model/string.md)|  | [optional]
 **agent_name** | **string**|  | [optional]
 **since_build** | **string**|  | [optional]
 **since_date** | **string**|  | [optional]
 **start** | **int**|  | [optional]
 **count** | **int**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Builds**](../Model/Builds.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveProject**
> \TeamCityClient\Model\Project serveProject($project_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveProject($project_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->serveProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **serveProjectField**
> string serveProjectField($project_locator, $field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->serveProjectField($project_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->serveProjectField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveProjects**
> \TeamCityClient\Model\Projects serveProjects($locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveProjects($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->serveProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Projects**](../Model/Projects.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveTemplatesInProject**
> \TeamCityClient\Model\BuildTypes serveTemplatesInProject($project_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveTemplatesInProject($project_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->serveTemplatesInProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\BuildTypes**](../Model/BuildTypes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBuildTypesOrder**
> \TeamCityClient\Model\BuildTypes setBuildTypesOrder($project_locator, $field, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$field = "field_example"; // string | 
$body = new \TeamCityClient\Model\BuildTypes(); // \TeamCityClient\Model\BuildTypes | 

try {
    $result = $apiInstance->setBuildTypesOrder($project_locator, $field, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setBuildTypesOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **field** | **string**|  |
 **body** | [**\TeamCityClient\Model\BuildTypes**](../Model/BuildTypes.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\BuildTypes**](../Model/BuildTypes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setDefaultTemplate**
> \TeamCityClient\Model\BuildType setDefaultTemplate($project_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \TeamCityClient\Model\BuildType(); // \TeamCityClient\Model\BuildType | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setDefaultTemplate($project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setDefaultTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\BuildType**](../Model/BuildType.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\BuildType**](../Model/BuildType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParameter**
> \TeamCityClient\Model\Property setParameter($project_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \TeamCityClient\Model\Property(); // \TeamCityClient\Model\Property | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setParameter($project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Property**](../Model/Property.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Property**](../Model/Property.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParameterType**
> \TeamCityClient\Model\Type setParameterType($name, $project_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$body = new \TeamCityClient\Model\Type(); // \TeamCityClient\Model\Type | 

try {
    $result = $apiInstance->setParameterType($name, $project_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setParameterType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **project_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Type**](../Model/Type.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\Type**](../Model/Type.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParameterTypeRawValue**
> string setParameterTypeRawValue($name, $project_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setParameterTypeRawValue($name, $project_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setParameterTypeRawValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **project_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParameterValueLong**
> string setParameterValueLong($name, $project_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setParameterValueLong($name, $project_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setParameterValueLong: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **project_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParameterValueLong_0**
> string setParameterValueLong_0($name, $feature_locator, $project_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$feature_locator = "feature_locator_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$body = "body_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setParameterValueLong_0($name, $feature_locator, $project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setParameterValueLong_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **feature_locator** | **string**|  |
 **project_locator** | **string**|  |
 **body** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParameter_0**
> \TeamCityClient\Model\Property setParameter_0($name, $project_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$body = new \TeamCityClient\Model\Property(); // \TeamCityClient\Model\Property | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setParameter_0($name, $project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setParameter_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **project_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Property**](../Model/Property.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Property**](../Model/Property.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParameter_1**
> \TeamCityClient\Model\Property setParameter_1($feature_locator, $project_locator, $body, $fields, $fields2)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$feature_locator = "feature_locator_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$body = new \TeamCityClient\Model\Property(); // \TeamCityClient\Model\Property | 
$fields = "fields_example"; // string | 
$fields2 = "fields_example"; // string | 

try {
    $result = $apiInstance->setParameter_1($feature_locator, $project_locator, $body, $fields, $fields2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setParameter_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feature_locator** | **string**|  |
 **project_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Property**](../Model/Property.md)|  | [optional]
 **fields** | **string**|  | [optional]
 **fields2** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Property**](../Model/Property.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParameter_2**
> \TeamCityClient\Model\Property setParameter_2($name, $feature_locator, $project_locator, $body, $fields, $fields2)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$feature_locator = "feature_locator_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$body = new \TeamCityClient\Model\Property(); // \TeamCityClient\Model\Property | 
$fields = "fields_example"; // string | 
$fields2 = "fields_example"; // string | 

try {
    $result = $apiInstance->setParameter_2($name, $feature_locator, $project_locator, $body, $fields, $fields2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setParameter_2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **feature_locator** | **string**|  |
 **project_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Property**](../Model/Property.md)|  | [optional]
 **fields** | **string**|  | [optional]
 **fields2** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Property**](../Model/Property.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParameters**
> \TeamCityClient\Model\Properties setParameters($project_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \TeamCityClient\Model\Properties(); // \TeamCityClient\Model\Properties | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setParameters($project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Properties**](../Model/Properties.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParameters_0**
> \TeamCityClient\Model\Properties setParameters_0($feature_locator, $project_locator, $body, $fields, $fields2)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$feature_locator = "feature_locator_example"; // string | 
$project_locator = "project_locator_example"; // string | 
$body = new \TeamCityClient\Model\Properties(); // \TeamCityClient\Model\Properties | 
$fields = "fields_example"; // string | 
$fields2 = "fields_example"; // string | 

try {
    $result = $apiInstance->setParameters_0($feature_locator, $project_locator, $body, $fields, $fields2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setParameters_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feature_locator** | **string**|  |
 **project_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Properties**](../Model/Properties.md)|  | [optional]
 **fields** | **string**|  | [optional]
 **fields2** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParentProject**
> \TeamCityClient\Model\Project setParentProject($project_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \TeamCityClient\Model\Project(); // \TeamCityClient\Model\Project | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setParentProject($project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setParentProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Project**](../Model/Project.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setProjectAgentPools**
> \TeamCityClient\Model\AgentPools setProjectAgentPools($project_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \TeamCityClient\Model\AgentPools(); // \TeamCityClient\Model\AgentPools | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setProjectAgentPools($project_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setProjectAgentPools: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\AgentPools**](../Model/AgentPools.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\AgentPools**](../Model/AgentPools.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setProjectAgentPools_0**
> \TeamCityClient\Model\AgentPool setProjectAgentPools_0($project_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$body = new \TeamCityClient\Model\AgentPool(); // \TeamCityClient\Model\AgentPool | 

try {
    $result = $apiInstance->setProjectAgentPools_0($project_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setProjectAgentPools_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\AgentPool**](../Model/AgentPool.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\AgentPool**](../Model/AgentPool.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setProjectField**
> string setProjectField($project_locator, $field, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$field = "field_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setProjectField($project_locator, $field, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setProjectField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
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

# **setProjectsOrder**
> \TeamCityClient\Model\Projects setProjectsOrder($project_locator, $field, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_locator = "project_locator_example"; // string | 
$field = "field_example"; // string | 
$body = new \TeamCityClient\Model\Projects(); // \TeamCityClient\Model\Projects | 

try {
    $result = $apiInstance->setProjectsOrder($project_locator, $field, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->setProjectsOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_locator** | **string**|  |
 **field** | **string**|  |
 **body** | [**\TeamCityClient\Model\Projects**](../Model/Projects.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\Projects**](../Model/Projects.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

