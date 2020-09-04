# TeamCityClient\BuildApi

All URIs are relative to *https://vs-szp-ds01.otr.ru:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLogMessage**](BuildApi.md#addLogMessage) | **POST** /app/rest/builds/{buildLocator}/log | Adds a message to the build log. Service messages are accepted.
[**addProblem**](BuildApi.md#addProblem) | **POST** /app/rest/builds/{buildLocator}/problemOccurrences | 
[**addTags**](BuildApi.md#addTags) | **POST** /app/rest/builds/{buildLocator}/tags | 
[**addTagsMultiple**](BuildApi.md#addTagsMultiple) | **POST** /app/rest/builds/multiple/{buildLocator}/tags | 
[**cancelBuild**](BuildApi.md#cancelBuild) | **POST** /app/rest/builds/{buildLocator} | 
[**cancelBuild_0**](BuildApi.md#cancelBuild_0) | **GET** /app/rest/builds/{buildLocator}/example/buildCancelRequest | 
[**cancelMultiple**](BuildApi.md#cancelMultiple) | **POST** /app/rest/builds/multiple/{buildLocator} | 
[**deleteAllParameters**](BuildApi.md#deleteAllParameters) | **DELETE** /app/rest/builds/{buildLocator}/attributes | 
[**deleteBuild**](BuildApi.md#deleteBuild) | **DELETE** /app/rest/builds/{buildLocator} | 
[**deleteBuilds**](BuildApi.md#deleteBuilds) | **DELETE** /app/rest/builds | 
[**deleteComment**](BuildApi.md#deleteComment) | **DELETE** /app/rest/builds/{buildLocator}/comment | 
[**deleteCommentMultiple**](BuildApi.md#deleteCommentMultiple) | **DELETE** /app/rest/builds/multiple/{buildLocator}/comment | 
[**deleteMultiple**](BuildApi.md#deleteMultiple) | **DELETE** /app/rest/builds/multiple/{buildLocator} | 
[**deleteParameter**](BuildApi.md#deleteParameter) | **DELETE** /app/rest/builds/{buildLocator}/attributes/{name} | 
[**getArtifactDependencyChanges**](BuildApi.md#getArtifactDependencyChanges) | **GET** /app/rest/builds/{buildLocator}/artifactDependencyChanges | 
[**getArtifactsDirectory**](BuildApi.md#getArtifactsDirectory) | **GET** /app/rest/builds/{buildLocator}/artifactsDirectory | 
[**getBuildFinishDate**](BuildApi.md#getBuildFinishDate) | **GET** /app/rest/builds/{buildLocator}/finishDate | 
[**getBuildNumber**](BuildApi.md#getBuildNumber) | **GET** /app/rest/builds/{buildLocator}/number | 
[**getBuildStatusText**](BuildApi.md#getBuildStatusText) | **GET** /app/rest/builds/{buildLocator}/statusText | 
[**getCanceledInfo**](BuildApi.md#getCanceledInfo) | **GET** /app/rest/builds/{buildLocator}/canceledInfo | 
[**getChildren**](BuildApi.md#getChildren) | **GET** /app/rest/builds/{buildLocator}/artifacts/children{path} | 
[**getChildrenAlias**](BuildApi.md#getChildrenAlias) | **GET** /app/rest/builds/{buildLocator}/artifacts/{path} | 
[**getContent**](BuildApi.md#getContent) | **GET** /app/rest/builds/{buildLocator}/artifacts/content{path} | 
[**getContentAlias**](BuildApi.md#getContentAlias) | **GET** /app/rest/builds/{buildLocator}/artifacts/files{path} | 
[**getMetadata**](BuildApi.md#getMetadata) | **GET** /app/rest/builds/{buildLocator}/artifacts/metadata{path} | 
[**getMultiple**](BuildApi.md#getMultiple) | **GET** /app/rest/builds/multiple/{buildLocator} | 
[**getParameter**](BuildApi.md#getParameter) | **GET** /app/rest/builds/{buildLocator}/attributes/{name} | 
[**getParameterValueLong**](BuildApi.md#getParameterValueLong) | **GET** /app/rest/builds/{buildLocator}/attributes/{name}/value | 
[**getParameter_0**](BuildApi.md#getParameter_0) | **GET** /app/rest/builds/{buildLocator}/resulting-properties/{propertyName} | 
[**getParameters**](BuildApi.md#getParameters) | **GET** /app/rest/builds/{buildLocator}/attributes | 
[**getPinData**](BuildApi.md#getPinData) | **GET** /app/rest/builds/{buildLocator}/pinInfo | 
[**getPinned**](BuildApi.md#getPinned) | **GET** /app/rest/builds/{buildLocator}/pin | 
[**getProblems**](BuildApi.md#getProblems) | **GET** /app/rest/builds/{buildLocator}/problemOccurrences | 
[**getResolvedParameter**](BuildApi.md#getResolvedParameter) | **GET** /app/rest/builds/{buildLocator}/resolved/{value} | 
[**getRoot**](BuildApi.md#getRoot) | **GET** /app/rest/builds/{buildLocator}/artifacts | 
[**getTests**](BuildApi.md#getTests) | **GET** /app/rest/builds/{buildLocator}/testOccurrences | 
[**getZipped**](BuildApi.md#getZipped) | **GET** /app/rest/builds/{buildLocator}/artifacts/archived{path} | 
[**markBuildAsRunning**](BuildApi.md#markBuildAsRunning) | **PUT** /app/rest/builds/{buildLocator}/runningData | Starts the queued build as an agent-less build and returns the corresponding running build.
[**pinBuild**](BuildApi.md#pinBuild) | **PUT** /app/rest/builds/{buildLocator}/pin | 
[**pinMultiple**](BuildApi.md#pinMultiple) | **PUT** /app/rest/builds/multiple/{buildLocator}/pinInfo | 
[**removeTagsMultiple**](BuildApi.md#removeTagsMultiple) | **DELETE** /app/rest/builds/multiple/{buildLocator}/tags | 
[**replaceComment**](BuildApi.md#replaceComment) | **PUT** /app/rest/builds/{buildLocator}/comment | 
[**replaceCommentMultiple**](BuildApi.md#replaceCommentMultiple) | **PUT** /app/rest/builds/multiple/{buildLocator}/comment | 
[**replaceTags**](BuildApi.md#replaceTags) | **PUT** /app/rest/builds/{buildLocator}/tags | 
[**resetBuildFinishParameters**](BuildApi.md#resetBuildFinishParameters) | **DELETE** /app/rest/builds/{buildLocator}/caches/finishProperties | 
[**serveAggregatedBuildStatus**](BuildApi.md#serveAggregatedBuildStatus) | **GET** /app/rest/builds/aggregated/{buildLocator}/status | 
[**serveAggregatedBuildStatusIcon**](BuildApi.md#serveAggregatedBuildStatusIcon) | **GET** /app/rest/builds/aggregated/{buildLocator}/statusIcon{suffix} | 
[**serveAllBuilds**](BuildApi.md#serveAllBuilds) | **GET** /app/rest/builds | 
[**serveBuild**](BuildApi.md#serveBuild) | **GET** /app/rest/builds/{buildLocator} | 
[**serveBuildActualParameters**](BuildApi.md#serveBuildActualParameters) | **GET** /app/rest/builds/{buildLocator}/resulting-properties | 
[**serveBuildFieldByBuildOnly**](BuildApi.md#serveBuildFieldByBuildOnly) | **GET** /app/rest/builds/{buildLocator}/{field} | 
[**serveBuildRelatedIssues**](BuildApi.md#serveBuildRelatedIssues) | **GET** /app/rest/builds/{buildLocator}/relatedIssues | 
[**serveBuildRelatedIssuesOld**](BuildApi.md#serveBuildRelatedIssuesOld) | **GET** /app/rest/builds/{buildLocator}/related-issues | 
[**serveBuildStatisticValue**](BuildApi.md#serveBuildStatisticValue) | **GET** /app/rest/builds/{buildLocator}/statistics/{name} | 
[**serveBuildStatisticValues**](BuildApi.md#serveBuildStatisticValues) | **GET** /app/rest/builds/{buildLocator}/statistics | 
[**serveBuildStatusIcon**](BuildApi.md#serveBuildStatusIcon) | **GET** /app/rest/builds/{buildLocator}/statusIcon{suffix} | 
[**serveSourceFile**](BuildApi.md#serveSourceFile) | **GET** /app/rest/builds/{buildLocator}/sources/files/{fileName} | 
[**serveTags**](BuildApi.md#serveTags) | **GET** /app/rest/builds/{buildLocator}/tags | 
[**setBuildNumber**](BuildApi.md#setBuildNumber) | **PUT** /app/rest/builds/{buildLocator}/number | 
[**setBuildPinData**](BuildApi.md#setBuildPinData) | **PUT** /app/rest/builds/{buildLocator}/pinInfo | 
[**setBuildStatusText**](BuildApi.md#setBuildStatusText) | **PUT** /app/rest/builds/{buildLocator}/statusText | 
[**setFinishedTime**](BuildApi.md#setFinishedTime) | **PUT** /app/rest/builds/{buildLocator}/finishDate | Marks the running build as finished by passing agent time of the build finish. An empty finish date means \&quot;now\&quot;.
[**setParameter**](BuildApi.md#setParameter) | **POST** /app/rest/builds/{buildLocator}/attributes | 
[**setParameterValueLong**](BuildApi.md#setParameterValueLong) | **PUT** /app/rest/builds/{buildLocator}/attributes/{name}/value | 
[**setParameter_0**](BuildApi.md#setParameter_0) | **PUT** /app/rest/builds/{buildLocator}/attributes/{name} | 
[**setParameters**](BuildApi.md#setParameters) | **PUT** /app/rest/builds/{buildLocator}/attributes | 
[**unpinBuild**](BuildApi.md#unpinBuild) | **DELETE** /app/rest/builds/{buildLocator}/pin | 


# **addLogMessage**
> addLogMessage($build_locator, $body, $fields)

Adds a message to the build log. Service messages are accepted.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = "body_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $apiInstance->addLogMessage($build_locator, $body, $fields);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->addLogMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addProblem**
> \TeamCityClient\Model\ProblemOccurrence addProblem($build_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = new \TeamCityClient\Model\ProblemOccurrence(); // \TeamCityClient\Model\ProblemOccurrence | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addProblem($build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->addProblem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\ProblemOccurrence**](../Model/ProblemOccurrence.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\ProblemOccurrence**](../Model/ProblemOccurrence.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTags**
> \TeamCityClient\Model\Tags addTags($build_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = new \TeamCityClient\Model\Tags(); // \TeamCityClient\Model\Tags | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addTags($build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->addTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
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

# **addTagsMultiple**
> \TeamCityClient\Model\MultipleOperationResult addTagsMultiple($build_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = new \TeamCityClient\Model\Tags(); // \TeamCityClient\Model\Tags | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addTagsMultiple($build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->addTagsMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Tags**](../Model/Tags.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\MultipleOperationResult**](../Model/MultipleOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelBuild**
> \TeamCityClient\Model\Build cancelBuild($build_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = new \TeamCityClient\Model\BuildCancelRequest(); // \TeamCityClient\Model\BuildCancelRequest | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->cancelBuild($build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->cancelBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\BuildCancelRequest**](../Model/BuildCancelRequest.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelBuild_0**
> \TeamCityClient\Model\BuildCancelRequest cancelBuild_0($build_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $result = $apiInstance->cancelBuild_0($build_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->cancelBuild_0: ', $e->getMessage(), PHP_EOL;
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

# **cancelMultiple**
> \TeamCityClient\Model\MultipleOperationResult cancelMultiple($build_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = new \TeamCityClient\Model\BuildCancelRequest(); // \TeamCityClient\Model\BuildCancelRequest | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->cancelMultiple($build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->cancelMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\BuildCancelRequest**](../Model/BuildCancelRequest.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\MultipleOperationResult**](../Model/MultipleOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllParameters**
> deleteAllParameters($build_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $apiInstance->deleteAllParameters($build_locator, $fields);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->deleteAllParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBuild**
> deleteBuild($build_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $apiInstance->deleteBuild($build_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->deleteBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBuilds**
> deleteBuilds($locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 

try {
    $apiInstance->deleteBuilds($locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->deleteBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteComment**
> deleteComment($build_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $apiInstance->deleteComment($build_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->deleteComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCommentMultiple**
> \TeamCityClient\Model\MultipleOperationResult deleteCommentMultiple($build_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->deleteCommentMultiple($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->deleteCommentMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\MultipleOperationResult**](../Model/MultipleOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMultiple**
> \TeamCityClient\Model\MultipleOperationResult deleteMultiple($build_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->deleteMultiple($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->deleteMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\MultipleOperationResult**](../Model/MultipleOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteParameter**
> deleteParameter($name, $build_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $apiInstance->deleteParameter($name, $build_locator, $fields);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->deleteParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArtifactDependencyChanges**
> \TeamCityClient\Model\BuildChanges getArtifactDependencyChanges($build_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getArtifactDependencyChanges($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getArtifactDependencyChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\BuildChanges**](../Model/BuildChanges.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArtifactsDirectory**
> string getArtifactsDirectory($build_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $result = $apiInstance->getArtifactsDirectory($build_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getArtifactsDirectory: ', $e->getMessage(), PHP_EOL;
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

# **getBuildFinishDate**
> string getBuildFinishDate($build_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $result = $apiInstance->getBuildFinishDate($build_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuildFinishDate: ', $e->getMessage(), PHP_EOL;
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

# **getBuildNumber**
> string getBuildNumber($build_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $result = $apiInstance->getBuildNumber($build_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuildNumber: ', $e->getMessage(), PHP_EOL;
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

# **getBuildStatusText**
> string getBuildStatusText($build_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $result = $apiInstance->getBuildStatusText($build_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getBuildStatusText: ', $e->getMessage(), PHP_EOL;
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

# **getCanceledInfo**
> \TeamCityClient\Model\Comment getCanceledInfo($build_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getCanceledInfo($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getCanceledInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Comment**](../Model/Comment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChildren**
> \TeamCityClient\Model\Files getChildren($path, $build_locator, $base_path, $locator, $fields, $resolve_parameters, $log_build_usage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$build_locator = "build_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 
$resolve_parameters = true; // bool | 
$log_build_usage = true; // bool | 

try {
    $result = $apiInstance->getChildren($path, $build_locator, $base_path, $locator, $fields, $resolve_parameters, $log_build_usage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **build_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **resolve_parameters** | **bool**|  | [optional]
 **log_build_usage** | **bool**|  | [optional]

### Return type

[**\TeamCityClient\Model\Files**](../Model/Files.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChildrenAlias**
> \TeamCityClient\Model\Files getChildrenAlias($path, $build_locator, $base_path, $locator, $fields, $resolve_parameters, $log_build_usage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$build_locator = "build_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 
$resolve_parameters = true; // bool | 
$log_build_usage = true; // bool | 

try {
    $result = $apiInstance->getChildrenAlias($path, $build_locator, $base_path, $locator, $fields, $resolve_parameters, $log_build_usage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getChildrenAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **build_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **resolve_parameters** | **bool**|  | [optional]
 **log_build_usage** | **bool**|  | [optional]

### Return type

[**\TeamCityClient\Model\Files**](../Model/Files.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContent**
> getContent($path, $build_locator, $response_builder, $resolve_parameters, $log_build_usage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$build_locator = "build_locator_example"; // string | 
$response_builder = "response_builder_example"; // string | 
$resolve_parameters = true; // bool | 
$log_build_usage = true; // bool | 

try {
    $apiInstance->getContent($path, $build_locator, $response_builder, $resolve_parameters, $log_build_usage);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **build_locator** | **string**|  |
 **response_builder** | **string**|  | [optional]
 **resolve_parameters** | **bool**|  | [optional]
 **log_build_usage** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentAlias**
> getContentAlias($path, $build_locator, $resolve_parameters, $log_build_usage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$build_locator = "build_locator_example"; // string | 
$resolve_parameters = true; // bool | 
$log_build_usage = true; // bool | 

try {
    $apiInstance->getContentAlias($path, $build_locator, $resolve_parameters, $log_build_usage);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getContentAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **build_locator** | **string**|  |
 **resolve_parameters** | **bool**|  | [optional]
 **log_build_usage** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetadata**
> \TeamCityClient\Model\\SplFileObject getMetadata($path, $build_locator, $fields, $resolve_parameters, $log_build_usage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 
$resolve_parameters = true; // bool | 
$log_build_usage = true; // bool | 

try {
    $result = $apiInstance->getMetadata($path, $build_locator, $fields, $resolve_parameters, $log_build_usage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **resolve_parameters** | **bool**|  | [optional]
 **log_build_usage** | **bool**|  | [optional]

### Return type

[**\TeamCityClient\Model\\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMultiple**
> \TeamCityClient\Model\Builds getMultiple($build_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getMultiple($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Builds**](../Model/Builds.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParameter**
> \TeamCityClient\Model\Property getParameter($name, $build_locator, $fields, $fields2)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 
$fields2 = "fields_example"; // string | 

try {
    $result = $apiInstance->getParameter($name, $build_locator, $fields, $fields2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **build_locator** | **string**|  |
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

# **getParameterValueLong**
> string getParameterValueLong($name, $build_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getParameterValueLong($name, $build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getParameterValueLong: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **build_locator** | **string**|  |
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
> string getParameter_0($build_locator, $property_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$property_name = "property_name_example"; // string | 

try {
    $result = $apiInstance->getParameter_0($build_locator, $property_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getParameter_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **property_name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParameters**
> \TeamCityClient\Model\Properties getParameters($build_locator, $locator, $fields, $fields2)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 
$fields2 = "fields_example"; // string | 

try {
    $result = $apiInstance->getParameters($build_locator, $locator, $fields, $fields2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
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

# **getPinData**
> \TeamCityClient\Model\PinInfo getPinData($build_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getPinData($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getPinData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\PinInfo**](../Model/PinInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPinned**
> string getPinned($build_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $result = $apiInstance->getPinned($build_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getPinned: ', $e->getMessage(), PHP_EOL;
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

# **getProblems**
> \TeamCityClient\Model\ProblemOccurrences getProblems($build_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getProblems($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getProblems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\ProblemOccurrences**](../Model/ProblemOccurrences.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResolvedParameter**
> string getResolvedParameter($build_locator, $value)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$value = "value_example"; // string | 

try {
    $result = $apiInstance->getResolvedParameter($build_locator, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getResolvedParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **value** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoot**
> \TeamCityClient\Model\Files getRoot($build_locator, $base_path, $locator, $fields, $resolve_parameters, $log_build_usage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 
$resolve_parameters = true; // bool | 
$log_build_usage = true; // bool | 

try {
    $result = $apiInstance->getRoot($build_locator, $base_path, $locator, $fields, $resolve_parameters, $log_build_usage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getRoot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **resolve_parameters** | **bool**|  | [optional]
 **log_build_usage** | **bool**|  | [optional]

### Return type

[**\TeamCityClient\Model\Files**](../Model/Files.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTests**
> \TeamCityClient\Model\TestOccurrences getTests($build_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getTests($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getTests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\TestOccurrences**](../Model/TestOccurrences.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZipped**
> getZipped($path, $build_locator, $base_path, $locator, $name, $resolve_parameters, $log_build_usage)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$build_locator = "build_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$name = "name_example"; // string | 
$resolve_parameters = true; // bool | 
$log_build_usage = true; // bool | 

try {
    $apiInstance->getZipped($path, $build_locator, $base_path, $locator, $name, $resolve_parameters, $log_build_usage);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->getZipped: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **build_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **resolve_parameters** | **bool**|  | [optional]
 **log_build_usage** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markBuildAsRunning**
> \TeamCityClient\Model\Build markBuildAsRunning($build_locator, $body, $fields)

Starts the queued build as an agent-less build and returns the corresponding running build.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = "body_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->markBuildAsRunning($build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->markBuildAsRunning: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pinBuild**
> pinBuild($build_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $apiInstance->pinBuild($build_locator, $body);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->pinBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pinMultiple**
> \TeamCityClient\Model\MultipleOperationResult pinMultiple($build_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = new \TeamCityClient\Model\PinInfo(); // \TeamCityClient\Model\PinInfo | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->pinMultiple($build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->pinMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\PinInfo**](../Model/PinInfo.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\MultipleOperationResult**](../Model/MultipleOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeTagsMultiple**
> \TeamCityClient\Model\MultipleOperationResult removeTagsMultiple($build_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = new \TeamCityClient\Model\Tags(); // \TeamCityClient\Model\Tags | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->removeTagsMultiple($build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->removeTagsMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Tags**](../Model/Tags.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\MultipleOperationResult**](../Model/MultipleOperationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceComment**
> replaceComment($build_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $apiInstance->replaceComment($build_locator, $body);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->replaceComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceCommentMultiple**
> \TeamCityClient\Model\MultipleOperationResult replaceCommentMultiple($build_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = "body_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->replaceCommentMultiple($build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->replaceCommentMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\MultipleOperationResult**](../Model/MultipleOperationResult.md)

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

$apiInstance = new TeamCityClient\Api\BuildApi(
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
    echo 'Exception when calling BuildApi->replaceTags: ', $e->getMessage(), PHP_EOL;
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

# **resetBuildFinishParameters**
> resetBuildFinishParameters($build_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $apiInstance->resetBuildFinishParameters($build_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->resetBuildFinishParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveAggregatedBuildStatus**
> string serveAggregatedBuildStatus($build_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 

try {
    $result = $apiInstance->serveAggregatedBuildStatus($build_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->serveAggregatedBuildStatus: ', $e->getMessage(), PHP_EOL;
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

# **serveAggregatedBuildStatusIcon**
> serveAggregatedBuildStatusIcon($build_locator, $suffix)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$suffix = "suffix_example"; // string | 

try {
    $apiInstance->serveAggregatedBuildStatusIcon($build_locator, $suffix);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->serveAggregatedBuildStatusIcon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **suffix** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveAllBuilds**
> \TeamCityClient\Model\Builds serveAllBuilds($build_type, $status, $triggered_by_user, $include_personal, $include_canceled, $only_pinned, $tag, $agent_name, $since_build, $since_date, $start, $count, $locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_type = "build_type_example"; // string | 
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
    $result = $apiInstance->serveAllBuilds($build_type, $status, $triggered_by_user, $include_personal, $include_canceled, $only_pinned, $tag, $agent_name, $since_build, $since_date, $start, $count, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->serveAllBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_type** | **string**|  | [optional]
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

# **serveBuild**
> \TeamCityClient\Model\Build serveBuild($build_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveBuild($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->serveBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **serveBuildActualParameters**
> \TeamCityClient\Model\Properties serveBuildActualParameters($build_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveBuildActualParameters($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->serveBuildActualParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Properties**](../Model/Properties.md)

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

$apiInstance = new TeamCityClient\Api\BuildApi(
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
    echo 'Exception when calling BuildApi->serveBuildFieldByBuildOnly: ', $e->getMessage(), PHP_EOL;
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

# **serveBuildRelatedIssues**
> \TeamCityClient\Model\IssuesUsages serveBuildRelatedIssues($build_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveBuildRelatedIssues($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->serveBuildRelatedIssues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\IssuesUsages**](../Model/IssuesUsages.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveBuildRelatedIssuesOld**
> \TeamCityClient\Model\IssuesUsages serveBuildRelatedIssuesOld($build_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveBuildRelatedIssuesOld($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->serveBuildRelatedIssuesOld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\IssuesUsages**](../Model/IssuesUsages.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveBuildStatisticValue**
> string serveBuildStatisticValue($build_locator, $name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$name = "name_example"; // string | 

try {
    $result = $apiInstance->serveBuildStatisticValue($build_locator, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->serveBuildStatisticValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveBuildStatisticValues**
> \TeamCityClient\Model\Properties serveBuildStatisticValues($build_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveBuildStatisticValues($build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->serveBuildStatisticValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveBuildStatusIcon**
> serveBuildStatusIcon($build_locator, $suffix)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$suffix = "suffix_example"; // string | 

try {
    $apiInstance->serveBuildStatusIcon($build_locator, $suffix);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->serveBuildStatusIcon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **suffix** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveSourceFile**
> serveSourceFile($build_locator, $file_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$file_name = "file_name_example"; // string | 

try {
    $apiInstance->serveSourceFile($build_locator, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->serveSourceFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **file_name** | **string**|  |

### Return type

void (empty response body)

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

$apiInstance = new TeamCityClient\Api\BuildApi(
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
    echo 'Exception when calling BuildApi->serveTags: ', $e->getMessage(), PHP_EOL;
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

# **setBuildNumber**
> string setBuildNumber($build_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setBuildNumber($build_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->setBuildNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBuildPinData**
> \TeamCityClient\Model\PinInfo setBuildPinData($build_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = new \TeamCityClient\Model\PinInfo(); // \TeamCityClient\Model\PinInfo | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setBuildPinData($build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->setBuildPinData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\PinInfo**](../Model/PinInfo.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\PinInfo**](../Model/PinInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBuildStatusText**
> string setBuildStatusText($build_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setBuildStatusText($build_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->setBuildStatusText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setFinishedTime**
> string setFinishedTime($build_locator, $body)

Marks the running build as finished by passing agent time of the build finish. An empty finish date means \"now\".



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setFinishedTime($build_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->setFinishedTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParameter**
> \TeamCityClient\Model\Property setParameter($build_locator, $body, $fields, $fields2)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = new \TeamCityClient\Model\Property(); // \TeamCityClient\Model\Property | 
$fields = "fields_example"; // string | 
$fields2 = "fields_example"; // string | 

try {
    $result = $apiInstance->setParameter($build_locator, $body, $fields, $fields2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->setParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
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

# **setParameterValueLong**
> string setParameterValueLong($name, $build_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$build_locator = "build_locator_example"; // string | 
$body = "body_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setParameterValueLong($name, $build_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->setParameterValueLong: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **build_locator** | **string**|  |
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
> \TeamCityClient\Model\Property setParameter_0($name, $build_locator, $body, $fields, $fields2)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$build_locator = "build_locator_example"; // string | 
$body = new \TeamCityClient\Model\Property(); // \TeamCityClient\Model\Property | 
$fields = "fields_example"; // string | 
$fields2 = "fields_example"; // string | 

try {
    $result = $apiInstance->setParameter_0($name, $build_locator, $body, $fields, $fields2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->setParameter_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **build_locator** | **string**|  |
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
> \TeamCityClient\Model\Properties setParameters($build_locator, $body, $fields, $fields2)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = new \TeamCityClient\Model\Properties(); // \TeamCityClient\Model\Properties | 
$fields = "fields_example"; // string | 
$fields2 = "fields_example"; // string | 

try {
    $result = $apiInstance->setParameters($build_locator, $body, $fields, $fields2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->setParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
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

# **unpinBuild**
> unpinBuild($build_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$build_locator = "build_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $apiInstance->unpinBuild($build_locator, $body);
} catch (Exception $e) {
    echo 'Exception when calling BuildApi->unpinBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **build_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

