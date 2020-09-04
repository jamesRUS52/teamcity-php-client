# TeamCityClient\HealthApi

All URIs are relative to *https://vs-szp-ds01.otr.ru:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCategories**](HealthApi.md#getCategories) | **GET** /app/rest/health/category | 
[**getHealthItems**](HealthApi.md#getHealthItems) | **GET** /app/rest/health | 
[**getSingleCategory**](HealthApi.md#getSingleCategory) | **GET** /app/rest/health/category/{locator} | 
[**getSingleHealthItem**](HealthApi.md#getSingleHealthItem) | **GET** /app/rest/health/{locator} | 


# **getCategories**
> \TeamCityClient\Model\HealthCategories getCategories($locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getCategories($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->getCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\HealthCategories**](../Model/HealthCategories.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHealthItems**
> \TeamCityClient\Model\HealthStatusItems getHealthItems($locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getHealthItems($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->getHealthItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\HealthStatusItems**](../Model/HealthStatusItems.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSingleCategory**
> \TeamCityClient\Model\HealthCategory getSingleCategory($locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getSingleCategory($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->getSingleCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\HealthCategory**](../Model/HealthCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSingleHealthItem**
> \TeamCityClient\Model\HealthItem getSingleHealthItem($locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getSingleHealthItem($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->getSingleHealthItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\HealthItem**](../Model/HealthItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

