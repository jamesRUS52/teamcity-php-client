# TeamCityClient\FederationApi

All URIs are relative to *https://vs-szp-ds01.otr.ru:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addServer**](FederationApi.md#addServer) | **PUT** /app/rest/federation/servers | 
[**servers**](FederationApi.md#servers) | **GET** /app/rest/federation/servers | 


# **addServer**
> \TeamCityClient\Model\Servers addServer($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\FederationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TeamCityClient\Model\Servers(); // \TeamCityClient\Model\Servers | 

try {
    $result = $apiInstance->addServer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FederationApi->addServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TeamCityClient\Model\Servers**](../Model/Servers.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\Servers**](../Model/Servers.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **servers**
> \TeamCityClient\Model\Servers servers($fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\FederationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->servers($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FederationApi->servers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Servers**](../Model/Servers.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

