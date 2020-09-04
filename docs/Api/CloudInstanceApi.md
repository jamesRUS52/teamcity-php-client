# TeamCityClient\CloudInstanceApi

All URIs are relative to *https://vs-szp-ds01.otr.ru:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**serveImage**](CloudInstanceApi.md#serveImage) | **GET** /app/rest/cloud/images/{imageLocator} | 
[**serveImages**](CloudInstanceApi.md#serveImages) | **GET** /app/rest/cloud/images | 
[**serveInstance**](CloudInstanceApi.md#serveInstance) | **GET** /app/rest/cloud/instances/{instanceLocator} | 
[**serveInstances**](CloudInstanceApi.md#serveInstances) | **GET** /app/rest/cloud/instances | 
[**serveProfile**](CloudInstanceApi.md#serveProfile) | **GET** /app/rest/cloud/profiles/{profileLocator} | 
[**serveProfiles**](CloudInstanceApi.md#serveProfiles) | **GET** /app/rest/cloud/profiles | 
[**startInstance**](CloudInstanceApi.md#startInstance) | **POST** /app/rest/cloud/instances | 
[**stopInstance**](CloudInstanceApi.md#stopInstance) | **DELETE** /app/rest/cloud/instances/{instanceLocator} | 


# **serveImage**
> \TeamCityClient\Model\CloudImage serveImage($image_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\CloudInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$image_locator = "image_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveImage($image_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudInstanceApi->serveImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\CloudImage**](../Model/CloudImage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveImages**
> \TeamCityClient\Model\CloudImages serveImages($locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\CloudInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveImages($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudInstanceApi->serveImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\CloudImages**](../Model/CloudImages.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveInstance**
> \TeamCityClient\Model\CloudInstance serveInstance($instance_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\CloudInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$instance_locator = "instance_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveInstance($instance_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudInstanceApi->serveInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\CloudInstance**](../Model/CloudInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveInstances**
> \TeamCityClient\Model\CloudInstances serveInstances($locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\CloudInstanceApi(
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
    echo 'Exception when calling CloudInstanceApi->serveInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\CloudInstances**](../Model/CloudInstances.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveProfile**
> \TeamCityClient\Model\CloudProfile serveProfile($profile_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\CloudInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$profile_locator = "profile_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveProfile($profile_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudInstanceApi->serveProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\CloudProfile**](../Model/CloudProfile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveProfiles**
> \TeamCityClient\Model\CloudProfiles serveProfiles($locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\CloudInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveProfiles($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudInstanceApi->serveProfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\CloudProfiles**](../Model/CloudProfiles.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startInstance**
> startInstance($body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\CloudInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TeamCityClient\Model\CloudInstance(); // \TeamCityClient\Model\CloudInstance | 
$fields = "fields_example"; // string | 

try {
    $apiInstance->startInstance($body, $fields);
} catch (Exception $e) {
    echo 'Exception when calling CloudInstanceApi->startInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TeamCityClient\Model\CloudInstance**](../Model/CloudInstance.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stopInstance**
> stopInstance($instance_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\CloudInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$instance_locator = "instance_locator_example"; // string | 

try {
    $apiInstance->stopInstance($instance_locator);
} catch (Exception $e) {
    echo 'Exception when calling CloudInstanceApi->stopInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **instance_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

