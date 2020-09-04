# TeamCityClient\ProblemOccurrenceApi

All URIs are relative to *https://vs-szp-ds01.otr.ru:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProblems**](ProblemOccurrenceApi.md#getProblems) | **GET** /app/rest/problemOccurrences | 
[**serveInstance**](ProblemOccurrenceApi.md#serveInstance) | **GET** /app/rest/problemOccurrences/{problemLocator} | 


# **getProblems**
> \TeamCityClient\Model\ProblemOccurrences getProblems($locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProblemOccurrenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getProblems($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProblemOccurrenceApi->getProblems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\ProblemOccurrences**](../Model/ProblemOccurrences.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveInstance**
> \TeamCityClient\Model\ProblemOccurrence serveInstance($problem_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ProblemOccurrenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$problem_locator = "problem_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveInstance($problem_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProblemOccurrenceApi->serveInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **problem_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\ProblemOccurrence**](../Model/ProblemOccurrence.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

