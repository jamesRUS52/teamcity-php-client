# TeamCityClient\ChangeApi

All URIs are relative to *https://vs-szp-ds01.otr.ru:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChangeAttributes**](ChangeApi.md#getChangeAttributes) | **GET** /app/rest/changes/{changeLocator}/attributes | 
[**getChangeDuplicates**](ChangeApi.md#getChangeDuplicates) | **GET** /app/rest/changes/{changeLocator}/duplicates | 
[**getChangeField**](ChangeApi.md#getChangeField) | **GET** /app/rest/changes/{changeLocator}/{field} | 
[**getChangeFirstBuilds**](ChangeApi.md#getChangeFirstBuilds) | **GET** /app/rest/changes/{changeLocator}/firstBuilds | 
[**getChangeIssue**](ChangeApi.md#getChangeIssue) | **GET** /app/rest/changes/{changeLocator}/issues | 
[**getChangeParentRevisions**](ChangeApi.md#getChangeParentRevisions) | **GET** /app/rest/changes/{changeLocator}/parentRevisions | 
[**getChangeVCSRoot**](ChangeApi.md#getChangeVCSRoot) | **GET** /app/rest/changes/{changeLocator}/vcsRoot | 
[**getChangeVCSRootInstance**](ChangeApi.md#getChangeVCSRootInstance) | **GET** /app/rest/changes/{changeLocator}/vcsRootInstance | 
[**getParentChanges**](ChangeApi.md#getParentChanges) | **GET** /app/rest/changes/{changeLocator}/parentChanges | 
[**getRelatedBuildTypes**](ChangeApi.md#getRelatedBuildTypes) | **GET** /app/rest/changes/{changeLocator}/buildTypes | 
[**serveChange**](ChangeApi.md#serveChange) | **GET** /app/rest/changes/{changeLocator} | 
[**serveChanges**](ChangeApi.md#serveChanges) | **GET** /app/rest/changes | 


# **getChangeAttributes**
> \TeamCityClient\Model\Entries getChangeAttributes($change_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getChangeAttributes($change_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getChangeAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Entries**](../Model/Entries.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChangeDuplicates**
> \TeamCityClient\Model\Changes getChangeDuplicates($change_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getChangeDuplicates($change_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getChangeDuplicates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Changes**](../Model/Changes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChangeField**
> string getChangeField($change_locator, $field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->getChangeField($change_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getChangeField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChangeFirstBuilds**
> \TeamCityClient\Model\Builds getChangeFirstBuilds($change_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getChangeFirstBuilds($change_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getChangeFirstBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Builds**](../Model/Builds.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChangeIssue**
> \TeamCityClient\Model\Issues getChangeIssue($change_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 

try {
    $result = $apiInstance->getChangeIssue($change_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getChangeIssue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |

### Return type

[**\TeamCityClient\Model\Issues**](../Model/Issues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChangeParentRevisions**
> \TeamCityClient\Model\Items getChangeParentRevisions($change_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 

try {
    $result = $apiInstance->getChangeParentRevisions($change_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getChangeParentRevisions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |

### Return type

[**\TeamCityClient\Model\Items**](../Model/Items.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChangeVCSRoot**
> \TeamCityClient\Model\VcsRootInstance getChangeVCSRoot($change_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getChangeVCSRoot($change_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getChangeVCSRoot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\VcsRootInstance**](../Model/VcsRootInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChangeVCSRootInstance**
> \TeamCityClient\Model\VcsRootInstance getChangeVCSRootInstance($change_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getChangeVCSRootInstance($change_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getChangeVCSRootInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\VcsRootInstance**](../Model/VcsRootInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParentChanges**
> \TeamCityClient\Model\Changes getParentChanges($change_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getParentChanges($change_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getParentChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Changes**](../Model/Changes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRelatedBuildTypes**
> \TeamCityClient\Model\BuildTypes getRelatedBuildTypes($change_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getRelatedBuildTypes($change_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->getRelatedBuildTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\BuildTypes**](../Model/BuildTypes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveChange**
> \TeamCityClient\Model\Change serveChange($change_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$change_locator = "change_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveChange($change_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->serveChange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **change_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Change**](../Model/Change.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveChanges**
> \TeamCityClient\Model\Changes serveChanges($project, $build_type, $build, $vcs_root, $since_change, $start, $count, $locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ChangeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project = "project_example"; // string | 
$build_type = "build_type_example"; // string | 
$build = "build_example"; // string | 
$vcs_root = "vcs_root_example"; // string | 
$since_change = "since_change_example"; // string | 
$start = 789; // int | 
$count = 56; // int | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveChanges($project, $build_type, $build, $vcs_root, $since_change, $start, $count, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeApi->serveChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**|  | [optional]
 **build_type** | **string**|  | [optional]
 **build** | **string**|  | [optional]
 **vcs_root** | **string**|  | [optional]
 **since_change** | **string**|  | [optional]
 **start** | **int**|  | [optional]
 **count** | **int**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Changes**](../Model/Changes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

