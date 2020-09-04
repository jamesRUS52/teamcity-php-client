# TeamCityClient\ServerApi

All URIs are relative to *https://vs-szp-ds01.otr.ru:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLicenseKeys**](ServerApi.md#addLicenseKeys) | **POST** /app/rest/server/licensingData/licenseKeys | 
[**deleteLicenseKey**](ServerApi.md#deleteLicenseKey) | **DELETE** /app/rest/server/licensingData/licenseKeys/{licenseKey} | 
[**getBackupStatus**](ServerApi.md#getBackupStatus) | **GET** /app/rest/server/backup | 
[**getChildren**](ServerApi.md#getChildren) | **GET** /app/rest/server/files/{areaId}/children{path} | 
[**getChildrenAlias**](ServerApi.md#getChildrenAlias) | **GET** /app/rest/server/files/{areaId}/{path} | 
[**getContent**](ServerApi.md#getContent) | **GET** /app/rest/server/files/{areaId}/content{path} | 
[**getContentAlias**](ServerApi.md#getContentAlias) | **GET** /app/rest/server/files/{areaId}/files{path} | 
[**getLicenseKey**](ServerApi.md#getLicenseKey) | **GET** /app/rest/server/licensingData/licenseKeys/{licenseKey} | 
[**getLicenseKeys**](ServerApi.md#getLicenseKeys) | **GET** /app/rest/server/licensingData/licenseKeys | 
[**getLicensingData**](ServerApi.md#getLicensingData) | **GET** /app/rest/server/licensingData | 
[**getMetadata**](ServerApi.md#getMetadata) | **GET** /app/rest/server/files/{areaId}/metadata{path} | 
[**getRoot**](ServerApi.md#getRoot) | **GET** /app/rest/server/files/{areaId} | 
[**getZipped**](ServerApi.md#getZipped) | **GET** /app/rest/server/files/{areaId}/archived{path} | 
[**serveMetrics**](ServerApi.md#serveMetrics) | **GET** /app/rest/server/metrics | 
[**servePlugins**](ServerApi.md#servePlugins) | **GET** /app/rest/server/plugins | 
[**serveServerInfo**](ServerApi.md#serveServerInfo) | **GET** /app/rest/server | 
[**serveServerVersion**](ServerApi.md#serveServerVersion) | **GET** /app/rest/server/{field} | 
[**startBackup**](ServerApi.md#startBackup) | **POST** /app/rest/server/backup | 


# **addLicenseKeys**
> \TeamCityClient\Model\LicenseKeys addLicenseKeys($body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = "body_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addLicenseKeys($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->addLicenseKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\LicenseKeys**](../Model/LicenseKeys.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLicenseKey**
> deleteLicenseKey($license_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$license_key = "license_key_example"; // string | 

try {
    $apiInstance->deleteLicenseKey($license_key);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->deleteLicenseKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license_key** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBackupStatus**
> string getBackupStatus($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TeamCityClient\Model\BackupProcessManager(); // \TeamCityClient\Model\BackupProcessManager | 

try {
    $result = $apiInstance->getBackupStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getBackupStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TeamCityClient\Model\BackupProcessManager**](../Model/BackupProcessManager.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChildren**
> \TeamCityClient\Model\Files getChildren($path, $area_id, $base_path, $locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$area_id = "area_id_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getChildren($path, $area_id, $base_path, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **area_id** | **string**|  |
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
> \TeamCityClient\Model\Files getChildrenAlias($path, $area_id, $base_path, $locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$area_id = "area_id_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getChildrenAlias($path, $area_id, $base_path, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getChildrenAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **area_id** | **string**|  |
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
> getContent($path, $area_id, $response_builder)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$area_id = "area_id_example"; // string | 
$response_builder = "response_builder_example"; // string | 

try {
    $apiInstance->getContent($path, $area_id, $response_builder);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **area_id** | **string**|  |
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
> getContentAlias($path, $area_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$area_id = "area_id_example"; // string | 

try {
    $apiInstance->getContentAlias($path, $area_id);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getContentAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **area_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLicenseKey**
> \TeamCityClient\Model\LicenseKey getLicenseKey($license_key, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$license_key = "license_key_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getLicenseKey($license_key, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getLicenseKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **license_key** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\LicenseKey**](../Model/LicenseKey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLicenseKeys**
> \TeamCityClient\Model\LicenseKeys getLicenseKeys($fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getLicenseKeys($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getLicenseKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\LicenseKeys**](../Model/LicenseKeys.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLicensingData**
> \TeamCityClient\Model\LicensingData getLicensingData($fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getLicensingData($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getLicensingData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\LicensingData**](../Model/LicensingData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetadata**
> \TeamCityClient\Model\\SplFileObject getMetadata($path, $area_id, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$area_id = "area_id_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getMetadata($path, $area_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **area_id** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoot**
> \TeamCityClient\Model\Files getRoot($area_id, $base_path, $locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$area_id = "area_id_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getRoot($area_id, $base_path, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getRoot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **area_id** | **string**|  |
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
> getZipped($path, $area_id, $base_path, $locator, $name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$area_id = "area_id_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$name = "name_example"; // string | 

try {
    $apiInstance->getZipped($path, $area_id, $base_path, $locator, $name);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->getZipped: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **area_id** | **string**|  |
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

# **serveMetrics**
> \TeamCityClient\Model\Metrics serveMetrics($fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveMetrics($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->serveMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Metrics**](../Model/Metrics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **servePlugins**
> \TeamCityClient\Model\Plugins servePlugins($fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->servePlugins($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->servePlugins: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Plugins**](../Model/Plugins.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveServerInfo**
> \TeamCityClient\Model\Server serveServerInfo($fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveServerInfo($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->serveServerInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Server**](../Model/Server.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveServerVersion**
> string serveServerVersion($field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$field = "field_example"; // string | 

try {
    $result = $apiInstance->serveServerVersion($field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->serveServerVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startBackup**
> string startBackup($file_name, $add_timestamp, $include_configs, $include_database, $include_build_logs, $include_personal_changes, $include_running_builds, $include_supplimentary_data, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file_name = "file_name_example"; // string | 
$add_timestamp = true; // bool | 
$include_configs = true; // bool | 
$include_database = true; // bool | 
$include_build_logs = true; // bool | 
$include_personal_changes = true; // bool | 
$include_running_builds = true; // bool | 
$include_supplimentary_data = true; // bool | 
$body = new \TeamCityClient\Model\BackupProcessManager(); // \TeamCityClient\Model\BackupProcessManager | 

try {
    $result = $apiInstance->startBackup($file_name, $add_timestamp, $include_configs, $include_database, $include_build_logs, $include_personal_changes, $include_running_builds, $include_supplimentary_data, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->startBackup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**|  | [optional]
 **add_timestamp** | **bool**|  | [optional]
 **include_configs** | **bool**|  | [optional]
 **include_database** | **bool**|  | [optional]
 **include_build_logs** | **bool**|  | [optional]
 **include_personal_changes** | **bool**|  | [optional]
 **include_running_builds** | **bool**|  | [optional]
 **include_supplimentary_data** | **bool**|  | [optional]
 **body** | [**\TeamCityClient\Model\BackupProcessManager**](../Model/BackupProcessManager.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

