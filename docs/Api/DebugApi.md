# TeamCityClient\DebugApi

All URIs are relative to *https://vs-szp-ds01.otr.ru:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCurrentRememberMe**](DebugApi.md#deleteCurrentRememberMe) | **DELETE** /app/rest/debug/currentRequest/rememberMe | 
[**emptyTask**](DebugApi.md#emptyTask) | **POST** /app/rest/debug/emptyTask | 
[**executeDBQuery**](DebugApi.md#executeDBQuery) | **GET** /app/rest/debug/database/query/{query} | 
[**getBuildChainOptimizationLog**](DebugApi.md#getBuildChainOptimizationLog) | **GET** /app/rest/debug/buildChainOptimizationLog/{buildLocator} | 
[**getCachedBuildPromotions**](DebugApi.md#getCachedBuildPromotions) | **GET** /app/rest/debug/caches/buildPromotions/content | 
[**getCachedBuildPromotionsStats**](DebugApi.md#getCachedBuildPromotionsStats) | **GET** /app/rest/debug/caches/buildPromotions/stats | 
[**getCachedBuildsStat**](DebugApi.md#getCachedBuildsStat) | **GET** /app/rest/debug/caches/builds/stats | 
[**getCurrentSession**](DebugApi.md#getCurrentSession) | **GET** /app/rest/debug/currentRequest/session | 
[**getCurrentSessionMaxInactiveInterval**](DebugApi.md#getCurrentSessionMaxInactiveInterval) | **GET** /app/rest/debug/currentRequest/session/maxInactiveSeconds | 
[**getCurrentUserPermissions**](DebugApi.md#getCurrentUserPermissions) | **GET** /app/rest/debug/currentUserPermissions | 
[**getDate**](DebugApi.md#getDate) | **GET** /app/rest/debug/date/{dateLocator} | 
[**getDiagnosticsPerfStats**](DebugApi.md#getDiagnosticsPerfStats) | **GET** /app/rest/debug/diagnostics/threadPerfStat/stats | 
[**getEnvironmentVariables**](DebugApi.md#getEnvironmentVariables) | **GET** /app/rest/debug/jvm/environmentVariables | 
[**getHashed**](DebugApi.md#getHashed) | **GET** /app/rest/debug/values/transform/{method} | 
[**getIpAddress**](DebugApi.md#getIpAddress) | **GET** /app/rest/debug/dns/lookup/{host} | 
[**getRawInvestigations**](DebugApi.md#getRawInvestigations) | **GET** /app/rest/debug/investigations | 
[**getRequestDetails**](DebugApi.md#getRequestDetails) | **GET** /app/rest/debug/currentRequest/details{extra} | 
[**getScrambled**](DebugApi.md#getScrambled) | **GET** /app/rest/debug/values/password/scrambled | 
[**getSessions**](DebugApi.md#getSessions) | **GET** /app/rest/debug/sessions | 
[**getSystemProperties**](DebugApi.md#getSystemProperties) | **GET** /app/rest/debug/jvm/systemProperties | 
[**getThreadDump**](DebugApi.md#getThreadDump) | **GET** /app/rest/debug/threadDump | 
[**getThreadInterrupted**](DebugApi.md#getThreadInterrupted) | **GET** /app/rest/debug/threads/{threadLocator}/interrupted | 
[**getUnscrambled**](DebugApi.md#getUnscrambled) | **GET** /app/rest/debug/values/password/unscrambled | 
[**interruptThread**](DebugApi.md#interruptThread) | **PUT** /app/rest/debug/threads/{threadLocator}/interrupted | 
[**invalidateCurrentSession**](DebugApi.md#invalidateCurrentSession) | **DELETE** /app/rest/debug/currentRequest/session | 
[**listDBTables**](DebugApi.md#listDBTables) | **GET** /app/rest/debug/database/tables | 
[**newRememberMe**](DebugApi.md#newRememberMe) | **POST** /app/rest/debug/currentRequest/rememberMe | 
[**postRequestDetails**](DebugApi.md#postRequestDetails) | **POST** /app/rest/debug/currentRequest/details{extra} | 
[**putRequestDetails**](DebugApi.md#putRequestDetails) | **PUT** /app/rest/debug/currentRequest/details{extra} | 
[**requestFinalization**](DebugApi.md#requestFinalization) | **POST** /app/rest/debug/jvm/finalization | 
[**requestGc**](DebugApi.md#requestGc) | **POST** /app/rest/debug/jvm/gc | 
[**resetCacheProjectMutes**](DebugApi.md#resetCacheProjectMutes) | **DELETE** /app/rest/debug/caches/projectMutes | 
[**runProcess**](DebugApi.md#runProcess) | **POST** /app/rest/debug/processes | 
[**saveMemoryDump**](DebugApi.md#saveMemoryDump) | **POST** /app/rest/debug/memory/dumps | 
[**scheduleCheckingForChanges**](DebugApi.md#scheduleCheckingForChanges) | **POST** /app/rest/debug/vcsCheckingForChangesQueue | 
[**setCurrentSessionMaxInactiveInterval**](DebugApi.md#setCurrentSessionMaxInactiveInterval) | **PUT** /app/rest/debug/currentRequest/session/maxInactiveSeconds | 


# **deleteCurrentRememberMe**
> deleteCurrentRememberMe()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->deleteCurrentRememberMe();
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->deleteCurrentRememberMe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emptyTask**
> string emptyTask($time, $load, $memory, $memory_chunks)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$time = "time_example"; // string | 
$load = 56; // int | 
$memory = 56; // int | 
$memory_chunks = 1; // int | 

try {
    $result = $apiInstance->emptyTask($time, $load, $memory, $memory_chunks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->emptyTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **time** | **string**|  | [optional]
 **load** | **int**|  | [optional]
 **memory** | **int**|  | [optional]
 **memory_chunks** | **int**|  | [optional] [default to 1]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeDBQuery**
> string executeDBQuery($query, $field_delimiter, $data_retrieve_query, $count)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$query = "query_example"; // string | 
$field_delimiter = ","; // string | 
$data_retrieve_query = "data_retrieve_query_example"; // string | 
$count = 1000; // int | 

try {
    $result = $apiInstance->executeDBQuery($query, $field_delimiter, $data_retrieve_query, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->executeDBQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**|  |
 **field_delimiter** | **string**|  | [optional] [default to , ]
 **data_retrieve_query** | **string**|  | [optional]
 **count** | **int**|  | [optional] [default to 1000]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildChainOptimizationLog**
> string getBuildChainOptimizationLog($build_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $result = $apiInstance->getBuildChainOptimizationLog($build_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->getBuildChainOptimizationLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCachedBuildPromotions**
> \TeamCityClient\Model\Builds getCachedBuildPromotions($build_type_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_type_locator = "build_type_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getCachedBuildPromotions($build_type_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->getCachedBuildPromotions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_type_locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Builds**](../Model/Builds.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCachedBuildPromotionsStats**
> \TeamCityClient\Model\Properties getCachedBuildPromotionsStats($fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getCachedBuildPromotionsStats($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->getCachedBuildPromotionsStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCachedBuildsStat**
> \TeamCityClient\Model\Properties getCachedBuildsStat($fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getCachedBuildsStat($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->getCachedBuildsStat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentSession**
> \TeamCityClient\Model\Session getCurrentSession($fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getCurrentSession($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->getCurrentSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Session**](../Model/Session.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentSessionMaxInactiveInterval**
> string getCurrentSessionMaxInactiveInterval()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCurrentSessionMaxInactiveInterval();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->getCurrentSessionMaxInactiveInterval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentUserPermissions**
> string getCurrentUserPermissions()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCurrentUserPermissions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->getCurrentUserPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDate**
> string getDate($date_locator, $format, $timezone)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date_locator = "date_locator_example"; // string | 
$format = "format_example"; // string | 
$timezone = "timezone_example"; // string | 

try {
    $result = $apiInstance->getDate($date_locator, $format, $timezone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->getDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_locator** | **string**|  |
 **format** | **string**|  | [optional]
 **timezone** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiagnosticsPerfStats**
> \TeamCityClient\Model\Properties getDiagnosticsPerfStats($fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getDiagnosticsPerfStats($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->getDiagnosticsPerfStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnvironmentVariables**
> \TeamCityClient\Model\Properties getEnvironmentVariables($fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getEnvironmentVariables($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->getEnvironmentVariables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHashed**
> string getHashed($method, $value)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$method = "method_example"; // string | 
$value = "value_example"; // string | 

try {
    $result = $apiInstance->getHashed($method, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->getHashed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **method** | **string**|  |
 **value** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIpAddress**
> \TeamCityClient\Model\Items getIpAddress($host)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$host = "host_example"; // string | 

try {
    $result = $apiInstance->getIpAddress($host);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->getIpAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **host** | **string**|  |

### Return type

[**\TeamCityClient\Model\Items**](../Model/Items.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRawInvestigations**
> \TeamCityClient\Model\Investigations getRawInvestigations($fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getRawInvestigations($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->getRawInvestigations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Investigations**](../Model/Investigations.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRequestDetails**
> string getRequestDetails($extra)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$extra = "extra_example"; // string | 

try {
    $result = $apiInstance->getRequestDetails($extra);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->getRequestDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extra** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScrambled**
> string getScrambled($value)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$value = "value_example"; // string | 

try {
    $result = $apiInstance->getScrambled($value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->getScrambled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **value** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSessions**
> \TeamCityClient\Model\Sessions getSessions($manager, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manager = 789; // int | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getSessions($manager, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->getSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manager** | **int**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Sessions**](../Model/Sessions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSystemProperties**
> \TeamCityClient\Model\Properties getSystemProperties($fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getSystemProperties($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->getSystemProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getThreadDump**
> string getThreadDump($locked_monitors, $locked_synchronizers, $detect_locks)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locked_monitors = "locked_monitors_example"; // string | 
$locked_synchronizers = "locked_synchronizers_example"; // string | 
$detect_locks = "detect_locks_example"; // string | 

try {
    $result = $apiInstance->getThreadDump($locked_monitors, $locked_synchronizers, $detect_locks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->getThreadDump: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locked_monitors** | **string**|  | [optional]
 **locked_synchronizers** | **string**|  | [optional]
 **detect_locks** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getThreadInterrupted**
> string getThreadInterrupted($thread_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$thread_locator = "thread_locator_example"; // string | 

try {
    $result = $apiInstance->getThreadInterrupted($thread_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->getThreadInterrupted: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thread_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnscrambled**
> string getUnscrambled($value)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$value = "value_example"; // string | 

try {
    $result = $apiInstance->getUnscrambled($value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->getUnscrambled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **value** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **interruptThread**
> string interruptThread($thread_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$thread_locator = "thread_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->interruptThread($thread_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->interruptThread: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thread_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invalidateCurrentSession**
> invalidateCurrentSession()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->invalidateCurrentSession();
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->invalidateCurrentSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDBTables**
> string listDBTables()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listDBTables();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->listDBTables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newRememberMe**
> string newRememberMe()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->newRememberMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->newRememberMe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRequestDetails**
> string postRequestDetails($extra)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$extra = "extra_example"; // string | 

try {
    $result = $apiInstance->postRequestDetails($extra);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->postRequestDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extra** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putRequestDetails**
> string putRequestDetails($extra)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$extra = "extra_example"; // string | 

try {
    $result = $apiInstance->putRequestDetails($extra);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->putRequestDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extra** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestFinalization**
> requestFinalization()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->requestFinalization();
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->requestFinalization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestGc**
> requestGc()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->requestGc();
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->requestGc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetCacheProjectMutes**
> resetCacheProjectMutes($project)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project = "project_example"; // string | 

try {
    $apiInstance->resetCacheProjectMutes($project);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->resetCacheProjectMutes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **runProcess**
> string runProcess($exe_path, $params, $idle_time_seconds, $max_output_bytes, $charset, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exe_path = "exe_path_example"; // string | 
$params = array("params_example"); // string[] | 
$idle_time_seconds = 56; // int | 
$max_output_bytes = 56; // int | 
$charset = "charset_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->runProcess($exe_path, $params, $idle_time_seconds, $max_output_bytes, $charset, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->runProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **exe_path** | **string**|  | [optional]
 **params** | [**string[]**](../Model/string.md)|  | [optional]
 **idle_time_seconds** | **int**|  | [optional]
 **max_output_bytes** | **int**|  | [optional]
 **charset** | **string**|  | [optional]
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveMemoryDump**
> string saveMemoryDump($archived)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$archived = true; // bool | 

try {
    $result = $apiInstance->saveMemoryDump($archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->saveMemoryDump: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **archived** | **bool**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleCheckingForChanges**
> \TeamCityClient\Model\VcsRootInstances scheduleCheckingForChanges($locator, $requestor, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$requestor = "requestor_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->scheduleCheckingForChanges($locator, $requestor, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->scheduleCheckingForChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **requestor** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\VcsRootInstances**](../Model/VcsRootInstances.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCurrentSessionMaxInactiveInterval**
> string setCurrentSessionMaxInactiveInterval($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\DebugApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setCurrentSessionMaxInactiveInterval($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebugApi->setCurrentSessionMaxInactiveInterval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

