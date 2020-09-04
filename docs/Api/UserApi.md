# TeamCityClient\UserApi

All URIs are relative to *https://vs-szp-ds01.otr.ru:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGroup**](UserApi.md#addGroup) | **POST** /app/rest/users/{userLocator}/groups | 
[**addRole**](UserApi.md#addRole) | **POST** /app/rest/users/{userLocator}/roles | 
[**addRoleSimple**](UserApi.md#addRoleSimple) | **PUT** /app/rest/users/{userLocator}/roles/{roleId}/{scope} | 
[**addRoleSimplePost**](UserApi.md#addRoleSimplePost) | **POST** /app/rest/users/{userLocator}/roles/{roleId}/{scope} | 
[**createToken**](UserApi.md#createToken) | **POST** /app/rest/users/{userLocator}/tokens/{name} | 
[**createUser**](UserApi.md#createUser) | **POST** /app/rest/users | 
[**deleteRememberMe**](UserApi.md#deleteRememberMe) | **DELETE** /app/rest/users/{userLocator}/debug/rememberMe | 
[**deleteRole**](UserApi.md#deleteRole) | **DELETE** /app/rest/users/{userLocator}/roles/{roleId}/{scope} | 
[**deleteToken**](UserApi.md#deleteToken) | **DELETE** /app/rest/users/{userLocator}/tokens/{name} | 
[**deleteUser**](UserApi.md#deleteUser) | **DELETE** /app/rest/users/{userLocator} | 
[**deleteUserField**](UserApi.md#deleteUserField) | **DELETE** /app/rest/users/{userLocator}/{field} | 
[**getGroup**](UserApi.md#getGroup) | **GET** /app/rest/users/{userLocator}/groups/{groupLocator} | 
[**getGroups**](UserApi.md#getGroups) | **GET** /app/rest/users/{userLocator}/groups | 
[**getPermissions**](UserApi.md#getPermissions) | **GET** /app/rest/users/{userLocator}/debug/permissions | 
[**getPermissions_0**](UserApi.md#getPermissions_0) | **GET** /app/rest/users/{userLocator}/permissions | 
[**getTokens**](UserApi.md#getTokens) | **GET** /app/rest/users/{userLocator}/tokens | 
[**listRole**](UserApi.md#listRole) | **GET** /app/rest/users/{userLocator}/roles/{roleId}/{scope} | 
[**listRoles**](UserApi.md#listRoles) | **GET** /app/rest/users/{userLocator}/roles | 
[**putUserProperty**](UserApi.md#putUserProperty) | **PUT** /app/rest/users/{userLocator}/properties/{name} | 
[**removeGroup**](UserApi.md#removeGroup) | **DELETE** /app/rest/users/{userLocator}/groups/{groupLocator} | 
[**removeUserProperty**](UserApi.md#removeUserProperty) | **DELETE** /app/rest/users/{userLocator}/properties/{name} | 
[**replaceGroups**](UserApi.md#replaceGroups) | **PUT** /app/rest/users/{userLocator}/groups | 
[**replaceRoles**](UserApi.md#replaceRoles) | **PUT** /app/rest/users/{userLocator}/roles | 
[**serveUser**](UserApi.md#serveUser) | **GET** /app/rest/users/{userLocator} | 
[**serveUserField**](UserApi.md#serveUserField) | **GET** /app/rest/users/{userLocator}/{field} | 
[**serveUserProperties**](UserApi.md#serveUserProperties) | **GET** /app/rest/users/{userLocator}/properties | 
[**serveUserProperty**](UserApi.md#serveUserProperty) | **GET** /app/rest/users/{userLocator}/properties/{name} | 
[**serveUsers**](UserApi.md#serveUsers) | **GET** /app/rest/users | 
[**setUserField**](UserApi.md#setUserField) | **PUT** /app/rest/users/{userLocator}/{field} | 
[**updateUser**](UserApi.md#updateUser) | **PUT** /app/rest/users/{userLocator} | 


# **addGroup**
> \TeamCityClient\Model\Group addGroup($user_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$body = new \TeamCityClient\Model\Group(); // \TeamCityClient\Model\Group | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addGroup($user_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->addGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Group**](../Model/Group.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Group**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRole**
> \TeamCityClient\Model\Role addRole($user_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$body = new \TeamCityClient\Model\Role(); // \TeamCityClient\Model\Role | 

try {
    $result = $apiInstance->addRole($user_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->addRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Role**](../Model/Role.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\Role**](../Model/Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRoleSimple**
> \TeamCityClient\Model\Role addRoleSimple($user_locator, $role_id, $scope)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$role_id = "role_id_example"; // string | 
$scope = "scope_example"; // string | 

try {
    $result = $apiInstance->addRoleSimple($user_locator, $role_id, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->addRoleSimple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **role_id** | **string**|  |
 **scope** | **string**|  |

### Return type

[**\TeamCityClient\Model\Role**](../Model/Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRoleSimplePost**
> addRoleSimplePost($user_locator, $role_id, $scope)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$role_id = "role_id_example"; // string | 
$scope = "scope_example"; // string | 

try {
    $apiInstance->addRoleSimplePost($user_locator, $role_id, $scope);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->addRoleSimplePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **role_id** | **string**|  |
 **scope** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createToken**
> \TeamCityClient\Model\Token createToken($user_locator, $name, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$name = "name_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->createToken($user_locator, $name, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **name** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Token**](../Model/Token.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUser**
> \TeamCityClient\Model\User createUser($body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TeamCityClient\Model\User(); // \TeamCityClient\Model\User | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->createUser($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TeamCityClient\Model\User**](../Model/User.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRememberMe**
> deleteRememberMe($user_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 

try {
    $apiInstance->deleteRememberMe($user_locator);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteRememberMe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRole**
> deleteRole($user_locator, $role_id, $scope)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$role_id = "role_id_example"; // string | 
$scope = "scope_example"; // string | 

try {
    $apiInstance->deleteRole($user_locator, $role_id, $scope);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **role_id** | **string**|  |
 **scope** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteToken**
> deleteToken($user_locator, $name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$name = "name_example"; // string | 

try {
    $apiInstance->deleteToken($user_locator, $name);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUser**
> deleteUser($user_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 

try {
    $apiInstance->deleteUser($user_locator);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserField**
> deleteUserField($user_locator, $field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $apiInstance->deleteUserField($user_locator, $field);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUserField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **field** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroup**
> \TeamCityClient\Model\Group getGroup($user_locator, $group_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$group_locator = "group_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getGroup($user_locator, $group_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **group_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Group**](../Model/Group.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroups**
> \TeamCityClient\Model\Groups getGroups($user_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getGroups($user_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Groups**](../Model/Groups.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPermissions**
> string getPermissions($user_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 

try {
    $result = $apiInstance->getPermissions($user_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPermissions_0**
> \TeamCityClient\Model\PermissionAssignments getPermissions_0($user_locator, $locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getPermissions_0($user_locator, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getPermissions_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\PermissionAssignments**](../Model/PermissionAssignments.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokens**
> \TeamCityClient\Model\Tokens getTokens($user_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getTokens($user_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Tokens**](../Model/Tokens.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRole**
> \TeamCityClient\Model\Role listRole($user_locator, $role_id, $scope)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$role_id = "role_id_example"; // string | 
$scope = "scope_example"; // string | 

try {
    $result = $apiInstance->listRole($user_locator, $role_id, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **role_id** | **string**|  |
 **scope** | **string**|  |

### Return type

[**\TeamCityClient\Model\Role**](../Model/Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRoles**
> \TeamCityClient\Model\Roles listRoles($user_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 

try {
    $result = $apiInstance->listRoles($user_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |

### Return type

[**\TeamCityClient\Model\Roles**](../Model/Roles.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUserProperty**
> string putUserProperty($user_locator, $name, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$name = "name_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->putUserProperty($user_locator, $name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->putUserProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
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

# **removeGroup**
> removeGroup($user_locator, $group_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$group_locator = "group_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $apiInstance->removeGroup($user_locator, $group_locator, $fields);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->removeGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **group_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeUserProperty**
> removeUserProperty($user_locator, $name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$name = "name_example"; // string | 

try {
    $apiInstance->removeUserProperty($user_locator, $name);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->removeUserProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **name** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceGroups**
> \TeamCityClient\Model\Groups replaceGroups($user_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$body = new \TeamCityClient\Model\Groups(); // \TeamCityClient\Model\Groups | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->replaceGroups($user_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->replaceGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Groups**](../Model/Groups.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Groups**](../Model/Groups.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceRoles**
> \TeamCityClient\Model\Roles replaceRoles($user_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$body = new \TeamCityClient\Model\Roles(); // \TeamCityClient\Model\Roles | 

try {
    $result = $apiInstance->replaceRoles($user_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->replaceRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Roles**](../Model/Roles.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\Roles**](../Model/Roles.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveUser**
> \TeamCityClient\Model\User serveUser($user_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveUser($user_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->serveUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveUserField**
> string serveUserField($user_locator, $field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->serveUserField($user_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->serveUserField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveUserProperties**
> \TeamCityClient\Model\Properties serveUserProperties($user_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveUserProperties($user_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->serveUserProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveUserProperty**
> string serveUserProperty($user_locator, $name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$name = "name_example"; // string | 

try {
    $result = $apiInstance->serveUserProperty($user_locator, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->serveUserProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveUsers**
> \TeamCityClient\Model\Users serveUsers($locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveUsers($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->serveUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Users**](../Model/Users.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUserField**
> string setUserField($user_locator, $field, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$field = "field_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setUserField($user_locator, $field, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->setUserField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
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

# **updateUser**
> \TeamCityClient\Model\User updateUser($user_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_locator = "user_locator_example"; // string | 
$body = new \TeamCityClient\Model\User(); // \TeamCityClient\Model\User | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->updateUser($user_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\User**](../Model/User.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

