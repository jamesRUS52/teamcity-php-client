# TeamCityClient\VcsRootInstanceApi

All URIs are relative to *https://vs-szp-ds01.otr.ru:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteInstanceField**](VcsRootInstanceApi.md#deleteInstanceField) | **DELETE** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/{field} | 
[**deleteRepositoryState**](VcsRootInstanceApi.md#deleteRepositoryState) | **DELETE** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/repositoryState | 
[**getChildren**](VcsRootInstanceApi.md#getChildren) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/files/latest/children{path} | 
[**getChildrenAlias**](VcsRootInstanceApi.md#getChildrenAlias) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/files/latest/{path} | 
[**getContent**](VcsRootInstanceApi.md#getContent) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/files/latest/content{path} | 
[**getContentAlias**](VcsRootInstanceApi.md#getContentAlias) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/files/latest/files{path} | 
[**getMetadata**](VcsRootInstanceApi.md#getMetadata) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/files/latest/metadata{path} | 
[**getRepositoryState**](VcsRootInstanceApi.md#getRepositoryState) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/repositoryState | 
[**getRepositoryStateCreationDate**](VcsRootInstanceApi.md#getRepositoryStateCreationDate) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/repositoryState/creationDate | 
[**getRoot**](VcsRootInstanceApi.md#getRoot) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/files/latest | 
[**getZipped**](VcsRootInstanceApi.md#getZipped) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/files/latest/archived{path} | 
[**scheduleCheckingForChanges**](VcsRootInstanceApi.md#scheduleCheckingForChanges) | **POST** /app/rest/vcs-root-instances/checkingForChangesQueue | 
[**scheduleCheckingForChanges_0**](VcsRootInstanceApi.md#scheduleCheckingForChanges_0) | **POST** /app/rest/vcs-root-instances/commitHookNotification | 
[**serveInstance**](VcsRootInstanceApi.md#serveInstance) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator} | 
[**serveInstanceField**](VcsRootInstanceApi.md#serveInstanceField) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/{field} | 
[**serveInstances**](VcsRootInstanceApi.md#serveInstances) | **GET** /app/rest/vcs-root-instances | 
[**serveRootInstanceProperties**](VcsRootInstanceApi.md#serveRootInstanceProperties) | **GET** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/properties | 
[**setInstanceField**](VcsRootInstanceApi.md#setInstanceField) | **PUT** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/{field} | 
[**setRepositoryState**](VcsRootInstanceApi.md#setRepositoryState) | **PUT** /app/rest/vcs-root-instances/{vcsRootInstanceLocator}/repositoryState | 


# **deleteInstanceField**
> deleteInstanceField($vcs_root_instance_locator, $field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $apiInstance->deleteInstanceField($vcs_root_instance_locator, $field);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->deleteInstanceField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_instance_locator** | **string**|  |
 **field** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRepositoryState**
> deleteRepositoryState($vcs_root_instance_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 

try {
    $apiInstance->deleteRepositoryState($vcs_root_instance_locator);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->deleteRepositoryState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_instance_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChildren**
> \TeamCityClient\Model\Files getChildren($path, $vcs_root_instance_locator, $base_path, $locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getChildren($path, $vcs_root_instance_locator, $base_path, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->getChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **vcs_root_instance_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Files**](../Model/Files.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChildrenAlias**
> \TeamCityClient\Model\Files getChildrenAlias($path, $vcs_root_instance_locator, $base_path, $locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getChildrenAlias($path, $vcs_root_instance_locator, $base_path, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->getChildrenAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **vcs_root_instance_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Files**](../Model/Files.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContent**
> getContent($path, $vcs_root_instance_locator, $response_builder)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$response_builder = "response_builder_example"; // string | 

try {
    $apiInstance->getContent($path, $vcs_root_instance_locator, $response_builder);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->getContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **vcs_root_instance_locator** | **string**|  |
 **response_builder** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentAlias**
> getContentAlias($path, $vcs_root_instance_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 

try {
    $apiInstance->getContentAlias($path, $vcs_root_instance_locator);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->getContentAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **vcs_root_instance_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetadata**
> \TeamCityClient\Model\\SplFileObject getMetadata($path, $vcs_root_instance_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getMetadata($path, $vcs_root_instance_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->getMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **vcs_root_instance_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryState**
> \TeamCityClient\Model\Entries getRepositoryState($vcs_root_instance_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getRepositoryState($vcs_root_instance_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->getRepositoryState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_instance_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Entries**](../Model/Entries.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositoryStateCreationDate**
> string getRepositoryStateCreationDate($vcs_root_instance_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 

try {
    $result = $apiInstance->getRepositoryStateCreationDate($vcs_root_instance_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->getRepositoryStateCreationDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_instance_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoot**
> \TeamCityClient\Model\Files getRoot($vcs_root_instance_locator, $base_path, $locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getRoot($vcs_root_instance_locator, $base_path, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->getRoot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_instance_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Files**](../Model/Files.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZipped**
> getZipped($path, $vcs_root_instance_locator, $base_path, $locator, $name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$name = "name_example"; // string | 

try {
    $apiInstance->getZipped($path, $vcs_root_instance_locator, $base_path, $locator, $name);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->getZipped: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **vcs_root_instance_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **name** | **string**|  | [optional]

### Return type

void (empty response body)

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

$apiInstance = new TeamCityClient\Api\VcsRootInstanceApi(
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
    echo 'Exception when calling VcsRootInstanceApi->scheduleCheckingForChanges: ', $e->getMessage(), PHP_EOL;
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

# **scheduleCheckingForChanges_0**
> scheduleCheckingForChanges_0($locator, $ok_on_nothing_found)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$ok_on_nothing_found = true; // bool | 

try {
    $apiInstance->scheduleCheckingForChanges_0($locator, $ok_on_nothing_found);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->scheduleCheckingForChanges_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **ok_on_nothing_found** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveInstance**
> \TeamCityClient\Model\VcsRootInstance serveInstance($vcs_root_instance_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveInstance($vcs_root_instance_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->serveInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_instance_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\VcsRootInstance**](../Model/VcsRootInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveInstanceField**
> string serveInstanceField($vcs_root_instance_locator, $field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->serveInstanceField($vcs_root_instance_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->serveInstanceField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_instance_locator** | **string**|  |
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveInstances**
> \TeamCityClient\Model\VcsRootInstances serveInstances($locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveInstances($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->serveInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\VcsRootInstances**](../Model/VcsRootInstances.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveRootInstanceProperties**
> \TeamCityClient\Model\Properties serveRootInstanceProperties($vcs_root_instance_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveRootInstanceProperties($vcs_root_instance_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->serveRootInstanceProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_instance_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setInstanceField**
> string setInstanceField($vcs_root_instance_locator, $field, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$field = "field_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setInstanceField($vcs_root_instance_locator, $field, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->setInstanceField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_instance_locator** | **string**|  |
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

# **setRepositoryState**
> \TeamCityClient\Model\Entries setRepositoryState($vcs_root_instance_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$body = new \TeamCityClient\Model\Entries(); // \TeamCityClient\Model\Entries | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setRepositoryState($vcs_root_instance_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootInstanceApi->setRepositoryState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_instance_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Entries**](../Model/Entries.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Entries**](../Model/Entries.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

