# TeamCityClient\BuildQueueApi

All URIs are relative to *https://vs-szp-ds01.otr.ru:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTags**](BuildQueueApi.md#addTags) | **POST** /app/rest/buildQueue/{buildLocator}/tags | 
[**cancelBuild**](BuildQueueApi.md#cancelBuild) | **GET** /app/rest/buildQueue/{buildLocator}/example/buildCancelRequest | 
[**cancelBuild_0**](BuildQueueApi.md#cancelBuild_0) | **POST** /app/rest/buildQueue/{queuedBuildLocator} | 
[**deleteBuild**](BuildQueueApi.md#deleteBuild) | **DELETE** /app/rest/buildQueue/{queuedBuildLocator} | 
[**deleteBuildsExperimental**](BuildQueueApi.md#deleteBuildsExperimental) | **DELETE** /app/rest/buildQueue | 
[**getBuild**](BuildQueueApi.md#getBuild) | **GET** /app/rest/buildQueue/{queuedBuildLocator} | 
[**getBuilds**](BuildQueueApi.md#getBuilds) | **GET** /app/rest/buildQueue | 
[**queueNewBuild**](BuildQueueApi.md#queueNewBuild) | **POST** /app/rest/buildQueue | 
[**replaceBuilds**](BuildQueueApi.md#replaceBuilds) | **PUT** /app/rest/buildQueue | 
[**replaceTags**](BuildQueueApi.md#replaceTags) | **PUT** /app/rest/buildQueue/{buildLocator}/tags | 
[**serveBuildFieldByBuildOnly**](BuildQueueApi.md#serveBuildFieldByBuildOnly) | **GET** /app/rest/buildQueue/{buildLocator}/{field} | 
[**serveCompatibleAgents**](BuildQueueApi.md#serveCompatibleAgents) | **GET** /app/rest/buildQueue/{queuedBuildLocator}/compatibleAgents | 
[**serveTags**](BuildQueueApi.md#serveTags) | **GET** /app/rest/buildQueue/{buildLocator}/tags | 
[**setBuildQueueOrder**](BuildQueueApi.md#setBuildQueueOrder) | **PUT** /app/rest/buildQueue/order | 
[**setBuildQueuePosition**](BuildQueueApi.md#setBuildQueuePosition) | **GET** /app/rest/buildQueue/order/{queuePosition} | 
[**setBuildQueuePosition_0**](BuildQueueApi.md#setBuildQueuePosition_0) | **PUT** /app/rest/buildQueue/order/{queuePosition} | 


# **addTags**
> addTags($build_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = new \TeamCityClient\Model\Tags(); // \TeamCityClient\Model\Tags | 

try {
    $apiInstance->addTags($build_locator, $body);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->addTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Tags**](../Model/Tags.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelBuild**
> \TeamCityClient\Model\BuildCancelRequest cancelBuild($build_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $result = $apiInstance->cancelBuild($build_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->cancelBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |

### Return type

[**\TeamCityClient\Model\BuildCancelRequest**](../Model/BuildCancelRequest.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelBuild_0**
> \TeamCityClient\Model\Build cancelBuild_0($queued_build_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$queued_build_locator = "queued_build_locator_example"; // string | 
$body = new \TeamCityClient\Model\BuildCancelRequest(); // \TeamCityClient\Model\BuildCancelRequest | 

try {
    $result = $apiInstance->cancelBuild_0($queued_build_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->cancelBuild_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queued_build_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\BuildCancelRequest**](../Model/BuildCancelRequest.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBuild**
> deleteBuild($queued_build_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$queued_build_locator = "queued_build_locator_example"; // string | 

try {
    $apiInstance->deleteBuild($queued_build_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->deleteBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queued_build_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBuildsExperimental**
> deleteBuildsExperimental($locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $apiInstance->deleteBuildsExperimental($locator, $fields);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->deleteBuildsExperimental: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuild**
> \TeamCityClient\Model\Build getBuild($queued_build_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$queued_build_locator = "queued_build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuild($queued_build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->getBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queued_build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuilds**
> \TeamCityClient\Model\Builds getBuilds($locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuilds($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->getBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **queueNewBuild**
> \TeamCityClient\Model\Build queueNewBuild($body, $move_to_top)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TeamCityClient\Model\Build(); // \TeamCityClient\Model\Build | 
$move_to_top = true; // bool | 

try {
    $result = $apiInstance->queueNewBuild($body, $move_to_top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->queueNewBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TeamCityClient\Model\Build**](../Model/Build.md)|  | [optional]
 **move_to_top** | **bool**|  | [optional]

### Return type

[**\TeamCityClient\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceBuilds**
> \TeamCityClient\Model\Builds replaceBuilds($body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TeamCityClient\Model\Builds(); // \TeamCityClient\Model\Builds | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->replaceBuilds($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->replaceBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TeamCityClient\Model\Builds**](../Model/Builds.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Builds**](../Model/Builds.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceTags**
> \TeamCityClient\Model\Tags replaceTags($build_locator, $locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$locator = "locator_example"; // string | 
$body = new \TeamCityClient\Model\Tags(); // \TeamCityClient\Model\Tags | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->replaceTags($build_locator, $locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->replaceTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **body** | [**\TeamCityClient\Model\Tags**](../Model/Tags.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Tags**](../Model/Tags.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveBuildFieldByBuildOnly**
> string serveBuildFieldByBuildOnly($build_locator, $field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->serveBuildFieldByBuildOnly($build_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->serveBuildFieldByBuildOnly: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **serveCompatibleAgents**
> \TeamCityClient\Model\Agents serveCompatibleAgents($queued_build_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$queued_build_locator = "queued_build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveCompatibleAgents($queued_build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->serveCompatibleAgents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queued_build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Agents**](../Model/Agents.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveTags**
> \TeamCityClient\Model\Tags serveTags($build_locator, $locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveTags($build_locator, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->serveTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Tags**](../Model/Tags.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBuildQueueOrder**
> \TeamCityClient\Model\Builds setBuildQueueOrder($body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TeamCityClient\Model\Builds(); // \TeamCityClient\Model\Builds | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setBuildQueueOrder($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->setBuildQueueOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TeamCityClient\Model\Builds**](../Model/Builds.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Builds**](../Model/Builds.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBuildQueuePosition**
> \TeamCityClient\Model\Build setBuildQueuePosition($queue_position, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$queue_position = "queue_position_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setBuildQueuePosition($queue_position, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->setBuildQueuePosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_position** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBuildQueuePosition_0**
> \TeamCityClient\Model\Build setBuildQueuePosition_0($queue_position, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildQueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$queue_position = "queue_position_example"; // string | 
$body = new \TeamCityClient\Model\Build(); // \TeamCityClient\Model\Build | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setBuildQueuePosition_0($queue_position, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildQueueApi->setBuildQueuePosition_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_position** | **string**|  |
 **body** | [**\TeamCityClient\Model\Build**](../Model/Build.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

