# TeamCityClient\InvestigationApi

All URIs are relative to *https://vs-szp-ds01.otr.ru:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInstance**](InvestigationApi.md#createInstance) | **POST** /app/rest/investigations | 
[**createInstances**](InvestigationApi.md#createInstances) | **POST** /app/rest/investigations/multiple | 
[**deleteInstance**](InvestigationApi.md#deleteInstance) | **DELETE** /app/rest/investigations/{investigationLocator} | 
[**getInvestigations**](InvestigationApi.md#getInvestigations) | **GET** /app/rest/investigations | 
[**replaceInstance**](InvestigationApi.md#replaceInstance) | **PUT** /app/rest/investigations/{investigationLocator} | 
[**serveInstance**](InvestigationApi.md#serveInstance) | **GET** /app/rest/investigations/{investigationLocator} | 


# **createInstance**
> \TeamCityClient\Model\Investigation createInstance($body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\InvestigationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TeamCityClient\Model\Investigation(); // \TeamCityClient\Model\Investigation | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->createInstance($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestigationApi->createInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TeamCityClient\Model\Investigation**](../Model/Investigation.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Investigation**](../Model/Investigation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createInstances**
> \TeamCityClient\Model\Investigations createInstances($body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\InvestigationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TeamCityClient\Model\Investigations(); // \TeamCityClient\Model\Investigations | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->createInstances($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestigationApi->createInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TeamCityClient\Model\Investigations**](../Model/Investigations.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Investigations**](../Model/Investigations.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInstance**
> deleteInstance($investigation_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\InvestigationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$investigation_locator = "investigation_locator_example"; // string | 

try {
    $apiInstance->deleteInstance($investigation_locator);
} catch (Exception $e) {
    echo 'Exception when calling InvestigationApi->deleteInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **investigation_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvestigations**
> \TeamCityClient\Model\Investigations getInvestigations($locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\InvestigationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getInvestigations($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestigationApi->getInvestigations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Investigations**](../Model/Investigations.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceInstance**
> \TeamCityClient\Model\Investigation replaceInstance($investigation_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\InvestigationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$investigation_locator = "investigation_locator_example"; // string | 
$body = new \TeamCityClient\Model\Investigation(); // \TeamCityClient\Model\Investigation | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->replaceInstance($investigation_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestigationApi->replaceInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **investigation_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Investigation**](../Model/Investigation.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Investigation**](../Model/Investigation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveInstance**
> \TeamCityClient\Model\Investigation serveInstance($investigation_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\InvestigationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$investigation_locator = "investigation_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveInstance($investigation_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvestigationApi->serveInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **investigation_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Investigation**](../Model/Investigation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

