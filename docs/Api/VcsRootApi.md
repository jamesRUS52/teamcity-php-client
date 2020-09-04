# TeamCityClient\VcsRootApi

All URIs are relative to *https://vs-szp-ds01.otr.ru:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addRoot**](VcsRootApi.md#addRoot) | **POST** /app/rest/vcs-roots | 
[**changeProperties**](VcsRootApi.md#changeProperties) | **PUT** /app/rest/vcs-roots/{vcsRootLocator}/properties | 
[**deleteAllProperties**](VcsRootApi.md#deleteAllProperties) | **DELETE** /app/rest/vcs-roots/{vcsRootLocator}/properties | 
[**deleteParameter**](VcsRootApi.md#deleteParameter) | **DELETE** /app/rest/vcs-roots/{vcsRootLocator}/properties/{name} | 
[**deleteRoot**](VcsRootApi.md#deleteRoot) | **DELETE** /app/rest/vcs-roots/{vcsRootLocator} | 
[**getSettingsFile**](VcsRootApi.md#getSettingsFile) | **GET** /app/rest/vcs-roots/{vcsRootLocator}/settingsFile | 
[**putParameter**](VcsRootApi.md#putParameter) | **PUT** /app/rest/vcs-roots/{vcsRootLocator}/properties/{name} | 
[**serveField**](VcsRootApi.md#serveField) | **GET** /app/rest/vcs-roots/{vcsRootLocator}/{field} | 
[**serveInstanceField**](VcsRootApi.md#serveInstanceField) | **GET** /app/rest/vcs-roots/{vcsRootLocator}/instances/{vcsRootInstanceLocator}/{field} | 
[**serveProperties**](VcsRootApi.md#serveProperties) | **GET** /app/rest/vcs-roots/{vcsRootLocator}/properties | 
[**serveProperty**](VcsRootApi.md#serveProperty) | **GET** /app/rest/vcs-roots/{vcsRootLocator}/properties/{name} | 
[**serveRoot**](VcsRootApi.md#serveRoot) | **GET** /app/rest/vcs-roots/{vcsRootLocator} | 
[**serveRootInstance**](VcsRootApi.md#serveRootInstance) | **GET** /app/rest/vcs-roots/{vcsRootLocator}/instances/{vcsRootInstanceLocator} | 
[**serveRootInstanceProperties**](VcsRootApi.md#serveRootInstanceProperties) | **GET** /app/rest/vcs-roots/{vcsRootLocator}/instances/{vcsRootInstanceLocator}/properties | 
[**serveRootInstances**](VcsRootApi.md#serveRootInstances) | **GET** /app/rest/vcs-roots/{vcsRootLocator}/instances | 
[**serveRoots**](VcsRootApi.md#serveRoots) | **GET** /app/rest/vcs-roots | 
[**setField**](VcsRootApi.md#setField) | **PUT** /app/rest/vcs-roots/{vcsRootLocator}/{field} | 
[**setInstanceField**](VcsRootApi.md#setInstanceField) | **PUT** /app/rest/vcs-roots/{vcsRootLocator}/instances/{vcsRootInstanceLocator}/{field} | 


# **addRoot**
> \TeamCityClient\Model\VcsRoot addRoot($body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TeamCityClient\Model\VcsRoot(); // \TeamCityClient\Model\VcsRoot | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addRoot($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->addRoot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TeamCityClient\Model\VcsRoot**](../Model/VcsRoot.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\VcsRoot**](../Model/VcsRoot.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeProperties**
> \TeamCityClient\Model\Properties changeProperties($vcs_root_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$body = new \TeamCityClient\Model\Properties(); // \TeamCityClient\Model\Properties | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->changeProperties($vcs_root_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->changeProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
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

# **deleteAllProperties**
> deleteAllProperties($vcs_root_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 

try {
    $apiInstance->deleteAllProperties($vcs_root_locator);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->deleteAllProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteParameter**
> deleteParameter($vcs_root_locator, $name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$name = "name_example"; // string | 

try {
    $apiInstance->deleteParameter($vcs_root_locator, $name);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->deleteParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
 **name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRoot**
> deleteRoot($vcs_root_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 

try {
    $apiInstance->deleteRoot($vcs_root_locator);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->deleteRoot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSettingsFile**
> string getSettingsFile($vcs_root_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 

try {
    $result = $apiInstance->getSettingsFile($vcs_root_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->getSettingsFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putParameter**
> string putParameter($vcs_root_locator, $name, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$name = "name_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->putParameter($vcs_root_locator, $name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->putParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
 **name** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveField**
> string serveField($vcs_root_locator, $field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->serveField($vcs_root_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->serveField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveInstanceField**
> string serveInstanceField($vcs_root_locator, $vcs_root_instance_locator, $field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->serveInstanceField($vcs_root_locator, $vcs_root_instance_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->serveInstanceField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
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

# **serveProperties**
> \TeamCityClient\Model\Properties serveProperties($vcs_root_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveProperties($vcs_root_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->serveProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveProperty**
> string serveProperty($vcs_root_locator, $name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$name = "name_example"; // string | 

try {
    $result = $apiInstance->serveProperty($vcs_root_locator, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->serveProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
 **name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveRoot**
> \TeamCityClient\Model\VcsRoot serveRoot($vcs_root_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveRoot($vcs_root_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->serveRoot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\VcsRoot**](../Model/VcsRoot.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveRootInstance**
> \TeamCityClient\Model\VcsRootInstance serveRootInstance($vcs_root_locator, $vcs_root_instance_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveRootInstance($vcs_root_locator, $vcs_root_instance_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->serveRootInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
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

# **serveRootInstanceProperties**
> \TeamCityClient\Model\Properties serveRootInstanceProperties($vcs_root_locator, $vcs_root_instance_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveRootInstanceProperties($vcs_root_locator, $vcs_root_instance_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->serveRootInstanceProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
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

# **serveRootInstances**
> \TeamCityClient\Model\VcsRootInstances serveRootInstances($vcs_root_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveRootInstances($vcs_root_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->serveRootInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\VcsRootInstances**](../Model/VcsRootInstances.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveRoots**
> \TeamCityClient\Model\VcsRoots serveRoots($locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveRoots($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->serveRoots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\VcsRoots**](../Model/VcsRoots.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setField**
> string setField($vcs_root_locator, $field, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$field = "field_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setField($vcs_root_locator, $field, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->setField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
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

# **setInstanceField**
> string setInstanceField($vcs_root_locator, $vcs_root_instance_locator, $field, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\VcsRootApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$vcs_root_instance_locator = "vcs_root_instance_locator_example"; // string | 
$field = "field_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setInstanceField($vcs_root_locator, $vcs_root_instance_locator, $field, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsRootApi->setInstanceField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vcs_root_locator** | **string**|  |
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

