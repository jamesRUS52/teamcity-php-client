# TeamCityClient\BuildTypeApi

All URIs are relative to *https://vs-szp-ds01.otr.ru:8111*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAgentRequirement**](BuildTypeApi.md#addAgentRequirement) | **POST** /app/rest/buildTypes/{btLocator}/agent-requirements | 
[**addArtifactDep**](BuildTypeApi.md#addArtifactDep) | **POST** /app/rest/buildTypes/{btLocator}/artifact-dependencies | 
[**addBuildType**](BuildTypeApi.md#addBuildType) | **POST** /app/rest/buildTypes | 
[**addFeature**](BuildTypeApi.md#addFeature) | **POST** /app/rest/buildTypes/{btLocator}/features | 
[**addFeatureParameter**](BuildTypeApi.md#addFeatureParameter) | **PUT** /app/rest/buildTypes/{btLocator}/features/{featureId}/parameters/{parameterName} | 
[**addSnapshotDep**](BuildTypeApi.md#addSnapshotDep) | **POST** /app/rest/buildTypes/{btLocator}/snapshot-dependencies | 
[**addStep**](BuildTypeApi.md#addStep) | **POST** /app/rest/buildTypes/{btLocator}/steps | 
[**addStepParameter**](BuildTypeApi.md#addStepParameter) | **PUT** /app/rest/buildTypes/{btLocator}/steps/{stepId}/parameters/{parameterName} | 
[**addTemplate**](BuildTypeApi.md#addTemplate) | **POST** /app/rest/buildTypes/{btLocator}/templates | 
[**addTrigger**](BuildTypeApi.md#addTrigger) | **POST** /app/rest/buildTypes/{btLocator}/triggers | 
[**addVcsRootEntry**](BuildTypeApi.md#addVcsRootEntry) | **POST** /app/rest/buildTypes/{btLocator}/vcs-root-entries | 
[**changeArtifactDepSetting**](BuildTypeApi.md#changeArtifactDepSetting) | **PUT** /app/rest/buildTypes/{btLocator}/artifact-dependencies/{artifactDepLocator}/{fieldName} | 
[**changeFeatureSetting**](BuildTypeApi.md#changeFeatureSetting) | **PUT** /app/rest/buildTypes/{btLocator}/features/{featureId}/{name} | 
[**changeRequirementSetting**](BuildTypeApi.md#changeRequirementSetting) | **PUT** /app/rest/buildTypes/{btLocator}/agent-requirements/{agentRequirementLocator}/{fieldName} | 
[**changeStepSetting**](BuildTypeApi.md#changeStepSetting) | **PUT** /app/rest/buildTypes/{btLocator}/steps/{stepId}/{fieldName} | 
[**changeTriggerSetting**](BuildTypeApi.md#changeTriggerSetting) | **PUT** /app/rest/buildTypes/{btLocator}/triggers/{triggerLocator}/{fieldName} | 
[**deleteAgentRequirement**](BuildTypeApi.md#deleteAgentRequirement) | **DELETE** /app/rest/buildTypes/{btLocator}/agent-requirements/{agentRequirementLocator} | 
[**deleteAllParameters**](BuildTypeApi.md#deleteAllParameters) | **DELETE** /app/rest/buildTypes/{btLocator}/parameters | 
[**deleteAllParameters_0**](BuildTypeApi.md#deleteAllParameters_0) | **DELETE** /app/rest/buildTypes/{btLocator}/settings | 
[**deleteArtifactDep**](BuildTypeApi.md#deleteArtifactDep) | **DELETE** /app/rest/buildTypes/{btLocator}/artifact-dependencies/{artifactDepLocator} | 
[**deleteBuildType**](BuildTypeApi.md#deleteBuildType) | **DELETE** /app/rest/buildTypes/{btLocator} | 
[**deleteFeature**](BuildTypeApi.md#deleteFeature) | **DELETE** /app/rest/buildTypes/{btLocator}/features/{featureId} | 
[**deleteParameter**](BuildTypeApi.md#deleteParameter) | **DELETE** /app/rest/buildTypes/{btLocator}/parameters/{name} | 
[**deleteParameter_0**](BuildTypeApi.md#deleteParameter_0) | **DELETE** /app/rest/buildTypes/{btLocator}/settings/{name} | 
[**deleteSnapshotDep**](BuildTypeApi.md#deleteSnapshotDep) | **DELETE** /app/rest/buildTypes/{btLocator}/snapshot-dependencies/{snapshotDepLocator} | 
[**deleteStep**](BuildTypeApi.md#deleteStep) | **DELETE** /app/rest/buildTypes/{btLocator}/steps/{stepId} | 
[**deleteTrigger**](BuildTypeApi.md#deleteTrigger) | **DELETE** /app/rest/buildTypes/{btLocator}/triggers/{triggerLocator} | 
[**deleteVcsRootEntry**](BuildTypeApi.md#deleteVcsRootEntry) | **DELETE** /app/rest/buildTypes/{btLocator}/vcs-root-entries/{vcsRootLocator} | 
[**getAgentRequirement**](BuildTypeApi.md#getAgentRequirement) | **GET** /app/rest/buildTypes/{btLocator}/agent-requirements/{agentRequirementLocator} | 
[**getAgentRequirements**](BuildTypeApi.md#getAgentRequirements) | **GET** /app/rest/buildTypes/{btLocator}/agent-requirements | 
[**getAliases**](BuildTypeApi.md#getAliases) | **GET** /app/rest/buildTypes/{btLocator}/aliases | 
[**getArtifactDep**](BuildTypeApi.md#getArtifactDep) | **GET** /app/rest/buildTypes/{btLocator}/artifact-dependencies/{artifactDepLocator} | 
[**getArtifactDepSetting**](BuildTypeApi.md#getArtifactDepSetting) | **GET** /app/rest/buildTypes/{btLocator}/artifact-dependencies/{artifactDepLocator}/{fieldName} | 
[**getArtifactDeps**](BuildTypeApi.md#getArtifactDeps) | **GET** /app/rest/buildTypes/{btLocator}/artifact-dependencies | 
[**getBuildTypes**](BuildTypeApi.md#getBuildTypes) | **GET** /app/rest/buildTypes | 
[**getChildren**](BuildTypeApi.md#getChildren) | **GET** /app/rest/buildTypes/{btLocator}/vcs/files/latest/children{path} | 
[**getChildrenAlias**](BuildTypeApi.md#getChildrenAlias) | **GET** /app/rest/buildTypes/{btLocator}/vcs/files/latest/{path} | 
[**getContent**](BuildTypeApi.md#getContent) | **GET** /app/rest/buildTypes/{btLocator}/vcs/files/latest/content{path} | 
[**getContentAlias**](BuildTypeApi.md#getContentAlias) | **GET** /app/rest/buildTypes/{btLocator}/vcs/files/latest/files{path} | 
[**getCurrentVcsInstances**](BuildTypeApi.md#getCurrentVcsInstances) | **GET** /app/rest/buildTypes/{btLocator}/vcsRootInstances | 
[**getCurrentVcsInstancesObsolete**](BuildTypeApi.md#getCurrentVcsInstancesObsolete) | **GET** /app/rest/buildTypes/{btLocator}/vcs-root-instances | 
[**getExampleNewProjectDescription**](BuildTypeApi.md#getExampleNewProjectDescription) | **GET** /app/rest/buildTypes/{btLocator}/example/newBuildTypeDescription | 
[**getExampleNewProjectDescriptionCompatibilityVersion1**](BuildTypeApi.md#getExampleNewProjectDescriptionCompatibilityVersion1) | **GET** /app/rest/buildTypes/{btLocator}/newBuildTypeDescription | 
[**getFeature**](BuildTypeApi.md#getFeature) | **GET** /app/rest/buildTypes/{btLocator}/features/{featureId} | 
[**getFeatureParameter**](BuildTypeApi.md#getFeatureParameter) | **GET** /app/rest/buildTypes/{btLocator}/features/{featureId}/parameters/{parameterName} | 
[**getFeatureParameters**](BuildTypeApi.md#getFeatureParameters) | **GET** /app/rest/buildTypes/{btLocator}/features/{featureId}/parameters | 
[**getFeatureSetting**](BuildTypeApi.md#getFeatureSetting) | **GET** /app/rest/buildTypes/{btLocator}/features/{featureId}/{name} | 
[**getFeatures**](BuildTypeApi.md#getFeatures) | **GET** /app/rest/buildTypes/{btLocator}/features | 
[**getInvestigations**](BuildTypeApi.md#getInvestigations) | **GET** /app/rest/buildTypes/{btLocator}/investigations | 
[**getMetadata**](BuildTypeApi.md#getMetadata) | **GET** /app/rest/buildTypes/{btLocator}/vcs/files/latest/metadata{path} | 
[**getParameter**](BuildTypeApi.md#getParameter) | **GET** /app/rest/buildTypes/{btLocator}/parameters/{name} | 
[**getParameterType**](BuildTypeApi.md#getParameterType) | **GET** /app/rest/buildTypes/{btLocator}/parameters/{name}/type | 
[**getParameterTypeRawValue**](BuildTypeApi.md#getParameterTypeRawValue) | **GET** /app/rest/buildTypes/{btLocator}/parameters/{name}/type/rawValue | 
[**getParameterValueLong**](BuildTypeApi.md#getParameterValueLong) | **GET** /app/rest/buildTypes/{btLocator}/parameters/{name}/value | 
[**getParameterValueLong_0**](BuildTypeApi.md#getParameterValueLong_0) | **GET** /app/rest/buildTypes/{btLocator}/settings/{name}/value | 
[**getParameter_0**](BuildTypeApi.md#getParameter_0) | **GET** /app/rest/buildTypes/{btLocator}/settings/{name} | 
[**getParameters**](BuildTypeApi.md#getParameters) | **GET** /app/rest/buildTypes/{btLocator}/parameters | 
[**getParameters_0**](BuildTypeApi.md#getParameters_0) | **GET** /app/rest/buildTypes/{btLocator}/settings | 
[**getRequirementSetting**](BuildTypeApi.md#getRequirementSetting) | **GET** /app/rest/buildTypes/{btLocator}/agent-requirements/{agentRequirementLocator}/{fieldName} | 
[**getRoot**](BuildTypeApi.md#getRoot) | **GET** /app/rest/buildTypes/{btLocator}/vcs/files/latest | 
[**getSettingsFile**](BuildTypeApi.md#getSettingsFile) | **GET** /app/rest/buildTypes/{btLocator}/settingsFile | 
[**getSnapshotDep**](BuildTypeApi.md#getSnapshotDep) | **GET** /app/rest/buildTypes/{btLocator}/snapshot-dependencies/{snapshotDepLocator} | 
[**getSnapshotDeps**](BuildTypeApi.md#getSnapshotDeps) | **GET** /app/rest/buildTypes/{btLocator}/snapshot-dependencies | 
[**getStep**](BuildTypeApi.md#getStep) | **GET** /app/rest/buildTypes/{btLocator}/steps/{stepId} | 
[**getStepParameter**](BuildTypeApi.md#getStepParameter) | **GET** /app/rest/buildTypes/{btLocator}/steps/{stepId}/parameters/{parameterName} | 
[**getStepParameters**](BuildTypeApi.md#getStepParameters) | **GET** /app/rest/buildTypes/{btLocator}/steps/{stepId}/parameters | 
[**getStepSetting**](BuildTypeApi.md#getStepSetting) | **GET** /app/rest/buildTypes/{btLocator}/steps/{stepId}/{fieldName} | 
[**getSteps**](BuildTypeApi.md#getSteps) | **GET** /app/rest/buildTypes/{btLocator}/steps | 
[**getTemplate**](BuildTypeApi.md#getTemplate) | **GET** /app/rest/buildTypes/{btLocator}/templates/{templateLocator} | 
[**getTemplates**](BuildTypeApi.md#getTemplates) | **GET** /app/rest/buildTypes/{btLocator}/templates | 
[**getTrigger**](BuildTypeApi.md#getTrigger) | **GET** /app/rest/buildTypes/{btLocator}/triggers/{triggerLocator} | 
[**getTriggerSetting**](BuildTypeApi.md#getTriggerSetting) | **GET** /app/rest/buildTypes/{btLocator}/triggers/{triggerLocator}/{fieldName} | 
[**getTriggers**](BuildTypeApi.md#getTriggers) | **GET** /app/rest/buildTypes/{btLocator}/triggers | 
[**getVCSLabelingOptions**](BuildTypeApi.md#getVCSLabelingOptions) | **GET** /app/rest/buildTypes/{btLocator}/vcsLabeling | 
[**getVcsRootEntries**](BuildTypeApi.md#getVcsRootEntries) | **GET** /app/rest/buildTypes/{btLocator}/vcs-root-entries | 
[**getVcsRootEntry**](BuildTypeApi.md#getVcsRootEntry) | **GET** /app/rest/buildTypes/{btLocator}/vcs-root-entries/{vcsRootLocator} | 
[**getVcsRootEntryCheckoutRules**](BuildTypeApi.md#getVcsRootEntryCheckoutRules) | **GET** /app/rest/buildTypes/{btLocator}/vcs-root-entries/{vcsRootLocator}/checkout-rules | 
[**getZipped**](BuildTypeApi.md#getZipped) | **GET** /app/rest/buildTypes/{btLocator}/vcs/files/latest/archived{path} | 
[**removeAllTemplates**](BuildTypeApi.md#removeAllTemplates) | **DELETE** /app/rest/buildTypes/{btLocator}/templates | 
[**removeTemplate**](BuildTypeApi.md#removeTemplate) | **DELETE** /app/rest/buildTypes/{btLocator}/templates/{templateLocator} | 
[**replaceAgentRequirement**](BuildTypeApi.md#replaceAgentRequirement) | **PUT** /app/rest/buildTypes/{btLocator}/agent-requirements/{agentRequirementLocator} | 
[**replaceAgentRequirements**](BuildTypeApi.md#replaceAgentRequirements) | **PUT** /app/rest/buildTypes/{btLocator}/agent-requirements | 
[**replaceArtifactDep**](BuildTypeApi.md#replaceArtifactDep) | **PUT** /app/rest/buildTypes/{btLocator}/artifact-dependencies/{artifactDepLocator} | 
[**replaceArtifactDeps**](BuildTypeApi.md#replaceArtifactDeps) | **PUT** /app/rest/buildTypes/{btLocator}/artifact-dependencies | 
[**replaceFeature**](BuildTypeApi.md#replaceFeature) | **PUT** /app/rest/buildTypes/{btLocator}/features/{featureId} | 
[**replaceFeatureParameters**](BuildTypeApi.md#replaceFeatureParameters) | **PUT** /app/rest/buildTypes/{btLocator}/features/{featureId}/parameters | 
[**replaceFeatures**](BuildTypeApi.md#replaceFeatures) | **PUT** /app/rest/buildTypes/{btLocator}/features | 
[**replaceSnapshotDep**](BuildTypeApi.md#replaceSnapshotDep) | **PUT** /app/rest/buildTypes/{btLocator}/snapshot-dependencies/{snapshotDepLocator} | 
[**replaceSnapshotDeps**](BuildTypeApi.md#replaceSnapshotDeps) | **PUT** /app/rest/buildTypes/{btLocator}/snapshot-dependencies | 
[**replaceStep**](BuildTypeApi.md#replaceStep) | **PUT** /app/rest/buildTypes/{btLocator}/steps/{stepId} | 
[**replaceStepParameters**](BuildTypeApi.md#replaceStepParameters) | **PUT** /app/rest/buildTypes/{btLocator}/steps/{stepId}/parameters | 
[**replaceSteps**](BuildTypeApi.md#replaceSteps) | **PUT** /app/rest/buildTypes/{btLocator}/steps | 
[**replaceTrigger**](BuildTypeApi.md#replaceTrigger) | **PUT** /app/rest/buildTypes/{btLocator}/triggers/{triggerLocator} | 
[**replaceTriggers**](BuildTypeApi.md#replaceTriggers) | **PUT** /app/rest/buildTypes/{btLocator}/triggers | 
[**replaceVcsRootEntries**](BuildTypeApi.md#replaceVcsRootEntries) | **PUT** /app/rest/buildTypes/{btLocator}/vcs-root-entries | 
[**serveBranches**](BuildTypeApi.md#serveBranches) | **GET** /app/rest/buildTypes/{btLocator}/branches | 
[**serveBuildField**](BuildTypeApi.md#serveBuildField) | **GET** /app/rest/buildTypes/{btLocator}/builds/{buildLocator}/{field} | 
[**serveBuildTypeBuildsTags**](BuildTypeApi.md#serveBuildTypeBuildsTags) | **GET** /app/rest/buildTypes/{btLocator}/buildTags | 
[**serveBuildTypeField**](BuildTypeApi.md#serveBuildTypeField) | **GET** /app/rest/buildTypes/{btLocator}/{field} | 
[**serveBuildTypeXML**](BuildTypeApi.md#serveBuildTypeXML) | **GET** /app/rest/buildTypes/{btLocator} | 
[**serveBuildWithProject**](BuildTypeApi.md#serveBuildWithProject) | **GET** /app/rest/buildTypes/{btLocator}/builds/{buildLocator} | 
[**serveBuilds**](BuildTypeApi.md#serveBuilds) | **GET** /app/rest/buildTypes/{btLocator}/builds | 
[**setBuildTypeField**](BuildTypeApi.md#setBuildTypeField) | **PUT** /app/rest/buildTypes/{btLocator}/{field} | 
[**setParameter**](BuildTypeApi.md#setParameter) | **POST** /app/rest/buildTypes/{btLocator}/parameters | 
[**setParameterType**](BuildTypeApi.md#setParameterType) | **PUT** /app/rest/buildTypes/{btLocator}/parameters/{name}/type | 
[**setParameterTypeRawValue**](BuildTypeApi.md#setParameterTypeRawValue) | **PUT** /app/rest/buildTypes/{btLocator}/parameters/{name}/type/rawValue | 
[**setParameterValueLong**](BuildTypeApi.md#setParameterValueLong) | **PUT** /app/rest/buildTypes/{btLocator}/parameters/{name}/value | 
[**setParameterValueLong_0**](BuildTypeApi.md#setParameterValueLong_0) | **PUT** /app/rest/buildTypes/{btLocator}/settings/{name}/value | 
[**setParameter_0**](BuildTypeApi.md#setParameter_0) | **PUT** /app/rest/buildTypes/{btLocator}/parameters/{name} | 
[**setParameter_1**](BuildTypeApi.md#setParameter_1) | **POST** /app/rest/buildTypes/{btLocator}/settings | 
[**setParameter_2**](BuildTypeApi.md#setParameter_2) | **PUT** /app/rest/buildTypes/{btLocator}/settings/{name} | 
[**setParameters**](BuildTypeApi.md#setParameters) | **PUT** /app/rest/buildTypes/{btLocator}/parameters | 
[**setParameters_0**](BuildTypeApi.md#setParameters_0) | **PUT** /app/rest/buildTypes/{btLocator}/settings | 
[**setTemplates**](BuildTypeApi.md#setTemplates) | **PUT** /app/rest/buildTypes/{btLocator}/templates | 
[**setVCSLabelingOptions**](BuildTypeApi.md#setVCSLabelingOptions) | **PUT** /app/rest/buildTypes/{btLocator}/vcsLabeling | 
[**updateVcsRootEntry**](BuildTypeApi.md#updateVcsRootEntry) | **PUT** /app/rest/buildTypes/{btLocator}/vcs-root-entries/{vcsRootLocator} | 
[**updateVcsRootEntryCheckoutRules**](BuildTypeApi.md#updateVcsRootEntryCheckoutRules) | **PUT** /app/rest/buildTypes/{btLocator}/vcs-root-entries/{vcsRootLocator}/checkout-rules | 


# **addAgentRequirement**
> \TeamCityClient\Model\AgentRequirement addAgentRequirement($bt_locator, $fields, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \TeamCityClient\Model\AgentRequirement(); // \TeamCityClient\Model\AgentRequirement | 

try {
    $result = $apiInstance->addAgentRequirement($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addAgentRequirement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\TeamCityClient\Model\AgentRequirement**](../Model/AgentRequirement.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\AgentRequirement**](../Model/AgentRequirement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addArtifactDep**
> \TeamCityClient\Model\ArtifactDependency addArtifactDep($bt_locator, $fields, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \TeamCityClient\Model\ArtifactDependency(); // \TeamCityClient\Model\ArtifactDependency | 

try {
    $result = $apiInstance->addArtifactDep($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addArtifactDep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\TeamCityClient\Model\ArtifactDependency**](../Model/ArtifactDependency.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\ArtifactDependency**](../Model/ArtifactDependency.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addBuildType**
> \TeamCityClient\Model\BuildType addBuildType($body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TeamCityClient\Model\BuildType(); // \TeamCityClient\Model\BuildType | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addBuildType($body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TeamCityClient\Model\BuildType**](../Model/BuildType.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\BuildType**](../Model/BuildType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFeature**
> \TeamCityClient\Model\Feature addFeature($bt_locator, $fields, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \TeamCityClient\Model\Feature(); // \TeamCityClient\Model\Feature | 

try {
    $result = $apiInstance->addFeature($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addFeature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\TeamCityClient\Model\Feature**](../Model/Feature.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\Feature**](../Model/Feature.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFeatureParameter**
> string addFeatureParameter($bt_locator, $feature_id, $parameter_name, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$feature_id = "feature_id_example"; // string | 
$parameter_name = "parameter_name_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->addFeatureParameter($bt_locator, $feature_id, $parameter_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addFeatureParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **feature_id** | **string**|  |
 **parameter_name** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addSnapshotDep**
> \TeamCityClient\Model\SnapshotDependency addSnapshotDep($bt_locator, $fields, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \TeamCityClient\Model\SnapshotDependency(); // \TeamCityClient\Model\SnapshotDependency | 

try {
    $result = $apiInstance->addSnapshotDep($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addSnapshotDep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\TeamCityClient\Model\SnapshotDependency**](../Model/SnapshotDependency.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\SnapshotDependency**](../Model/SnapshotDependency.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addStep**
> \TeamCityClient\Model\Step addStep($bt_locator, $fields, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \TeamCityClient\Model\Step(); // \TeamCityClient\Model\Step | 

try {
    $result = $apiInstance->addStep($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addStep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\TeamCityClient\Model\Step**](../Model/Step.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\Step**](../Model/Step.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addStepParameter**
> string addStepParameter($bt_locator, $step_id, $parameter_name, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$step_id = "step_id_example"; // string | 
$parameter_name = "parameter_name_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->addStepParameter($bt_locator, $step_id, $parameter_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addStepParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **step_id** | **string**|  |
 **parameter_name** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTemplate**
> \TeamCityClient\Model\BuildType addTemplate($bt_locator, $body, $optimize_settings, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$body = new \TeamCityClient\Model\BuildType(); // \TeamCityClient\Model\BuildType | 
$optimize_settings = true; // bool | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addTemplate($bt_locator, $body, $optimize_settings, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\BuildType**](../Model/BuildType.md)|  | [optional]
 **optimize_settings** | **bool**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\BuildType**](../Model/BuildType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTrigger**
> \TeamCityClient\Model\Trigger addTrigger($bt_locator, $fields, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \TeamCityClient\Model\Trigger(); // \TeamCityClient\Model\Trigger | 

try {
    $result = $apiInstance->addTrigger($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addTrigger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\TeamCityClient\Model\Trigger**](../Model/Trigger.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\Trigger**](../Model/Trigger.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addVcsRootEntry**
> \TeamCityClient\Model\VcsRootEntry addVcsRootEntry($bt_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$body = new \TeamCityClient\Model\VcsRootEntry(); // \TeamCityClient\Model\VcsRootEntry | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->addVcsRootEntry($bt_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->addVcsRootEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\VcsRootEntry**](../Model/VcsRootEntry.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\VcsRootEntry**](../Model/VcsRootEntry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeArtifactDepSetting**
> string changeArtifactDepSetting($bt_locator, $artifact_dep_locator, $field_name, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$artifact_dep_locator = "artifact_dep_locator_example"; // string | 
$field_name = "field_name_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->changeArtifactDepSetting($bt_locator, $artifact_dep_locator, $field_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->changeArtifactDepSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **artifact_dep_locator** | **string**|  |
 **field_name** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeFeatureSetting**
> string changeFeatureSetting($bt_locator, $feature_id, $name, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$feature_id = "feature_id_example"; // string | 
$name = "name_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->changeFeatureSetting($bt_locator, $feature_id, $name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->changeFeatureSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **feature_id** | **string**|  |
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

# **changeRequirementSetting**
> string changeRequirementSetting($bt_locator, $agent_requirement_locator, $field_name, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$agent_requirement_locator = "agent_requirement_locator_example"; // string | 
$field_name = "field_name_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->changeRequirementSetting($bt_locator, $agent_requirement_locator, $field_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->changeRequirementSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **agent_requirement_locator** | **string**|  |
 **field_name** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeStepSetting**
> string changeStepSetting($bt_locator, $step_id, $field_name, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$step_id = "step_id_example"; // string | 
$field_name = "field_name_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->changeStepSetting($bt_locator, $step_id, $field_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->changeStepSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **step_id** | **string**|  |
 **field_name** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeTriggerSetting**
> string changeTriggerSetting($bt_locator, $trigger_locator, $field_name, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$trigger_locator = "trigger_locator_example"; // string | 
$field_name = "field_name_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->changeTriggerSetting($bt_locator, $trigger_locator, $field_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->changeTriggerSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **trigger_locator** | **string**|  |
 **field_name** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAgentRequirement**
> deleteAgentRequirement($bt_locator, $agent_requirement_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$agent_requirement_locator = "agent_requirement_locator_example"; // string | 

try {
    $apiInstance->deleteAgentRequirement($bt_locator, $agent_requirement_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteAgentRequirement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **agent_requirement_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllParameters**
> deleteAllParameters($bt_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 

try {
    $apiInstance->deleteAllParameters($bt_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteAllParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllParameters_0**
> deleteAllParameters_0($bt_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 

try {
    $apiInstance->deleteAllParameters_0($bt_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteAllParameters_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteArtifactDep**
> deleteArtifactDep($bt_locator, $artifact_dep_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$artifact_dep_locator = "artifact_dep_locator_example"; // string | 

try {
    $apiInstance->deleteArtifactDep($bt_locator, $artifact_dep_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteArtifactDep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **artifact_dep_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBuildType**
> deleteBuildType($bt_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 

try {
    $apiInstance->deleteBuildType($bt_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteBuildType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFeature**
> deleteFeature($bt_locator, $feature_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$feature_id = "feature_id_example"; // string | 

try {
    $apiInstance->deleteFeature($bt_locator, $feature_id);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteFeature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **feature_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteParameter**
> deleteParameter($name, $bt_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 

try {
    $apiInstance->deleteParameter($name, $bt_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteParameter_0**
> deleteParameter_0($name, $bt_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 

try {
    $apiInstance->deleteParameter_0($name, $bt_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteParameter_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSnapshotDep**
> deleteSnapshotDep($bt_locator, $snapshot_dep_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$snapshot_dep_locator = "snapshot_dep_locator_example"; // string | 

try {
    $apiInstance->deleteSnapshotDep($bt_locator, $snapshot_dep_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteSnapshotDep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **snapshot_dep_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStep**
> deleteStep($bt_locator, $step_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$step_id = "step_id_example"; // string | 

try {
    $apiInstance->deleteStep($bt_locator, $step_id);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteStep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **step_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTrigger**
> deleteTrigger($bt_locator, $trigger_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$trigger_locator = "trigger_locator_example"; // string | 

try {
    $apiInstance->deleteTrigger($bt_locator, $trigger_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteTrigger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **trigger_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVcsRootEntry**
> deleteVcsRootEntry($bt_locator, $vcs_root_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$vcs_root_locator = "vcs_root_locator_example"; // string | 

try {
    $apiInstance->deleteVcsRootEntry($bt_locator, $vcs_root_locator);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->deleteVcsRootEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **vcs_root_locator** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgentRequirement**
> \TeamCityClient\Model\AgentRequirement getAgentRequirement($bt_locator, $agent_requirement_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$agent_requirement_locator = "agent_requirement_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAgentRequirement($bt_locator, $agent_requirement_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getAgentRequirement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **agent_requirement_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\AgentRequirement**](../Model/AgentRequirement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgentRequirements**
> \TeamCityClient\Model\AgentRequirements getAgentRequirements($bt_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getAgentRequirements($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getAgentRequirements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\AgentRequirements**](../Model/AgentRequirements.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAliases**
> \TeamCityClient\Model\Items getAliases($bt_locator, $field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->getAliases($bt_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getAliases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **field** | **string**|  |

### Return type

[**\TeamCityClient\Model\Items**](../Model/Items.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArtifactDep**
> \TeamCityClient\Model\ArtifactDependency getArtifactDep($bt_locator, $artifact_dep_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$artifact_dep_locator = "artifact_dep_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getArtifactDep($bt_locator, $artifact_dep_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getArtifactDep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **artifact_dep_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\ArtifactDependency**](../Model/ArtifactDependency.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArtifactDepSetting**
> string getArtifactDepSetting($bt_locator, $artifact_dep_locator, $field_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$artifact_dep_locator = "artifact_dep_locator_example"; // string | 
$field_name = "field_name_example"; // string | 

try {
    $result = $apiInstance->getArtifactDepSetting($bt_locator, $artifact_dep_locator, $field_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getArtifactDepSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **artifact_dep_locator** | **string**|  |
 **field_name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArtifactDeps**
> \TeamCityClient\Model\ArtifactDependencies getArtifactDeps($bt_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getArtifactDeps($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getArtifactDeps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\ArtifactDependencies**](../Model/ArtifactDependencies.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBuildTypes**
> \TeamCityClient\Model\BuildTypes getBuildTypes($locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getBuildTypes($locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getBuildTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\BuildTypes**](../Model/BuildTypes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChildren**
> \TeamCityClient\Model\Files getChildren($path, $bt_locator, $base_path, $locator, $fields, $resolve_parameters)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 
$resolve_parameters = true; // bool | 

try {
    $result = $apiInstance->getChildren($path, $bt_locator, $base_path, $locator, $fields, $resolve_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **bt_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **resolve_parameters** | **bool**|  | [optional]

### Return type

[**\TeamCityClient\Model\Files**](../Model/Files.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChildrenAlias**
> \TeamCityClient\Model\Files getChildrenAlias($path, $bt_locator, $base_path, $locator, $fields, $resolve_parameters)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 
$resolve_parameters = true; // bool | 

try {
    $result = $apiInstance->getChildrenAlias($path, $bt_locator, $base_path, $locator, $fields, $resolve_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getChildrenAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **bt_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **resolve_parameters** | **bool**|  | [optional]

### Return type

[**\TeamCityClient\Model\Files**](../Model/Files.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContent**
> getContent($path, $bt_locator, $response_builder, $resolve_parameters)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$response_builder = "response_builder_example"; // string | 
$resolve_parameters = true; // bool | 

try {
    $apiInstance->getContent($path, $bt_locator, $response_builder, $resolve_parameters);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **bt_locator** | **string**|  |
 **response_builder** | **string**|  | [optional]
 **resolve_parameters** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentAlias**
> getContentAlias($path, $bt_locator, $resolve_parameters)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$resolve_parameters = true; // bool | 

try {
    $apiInstance->getContentAlias($path, $bt_locator, $resolve_parameters);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getContentAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **bt_locator** | **string**|  |
 **resolve_parameters** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentVcsInstances**
> \TeamCityClient\Model\VcsRootInstances getCurrentVcsInstances($bt_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getCurrentVcsInstances($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getCurrentVcsInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\VcsRootInstances**](../Model/VcsRootInstances.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentVcsInstancesObsolete**
> \TeamCityClient\Model\VcsRootInstances getCurrentVcsInstancesObsolete($bt_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getCurrentVcsInstancesObsolete($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getCurrentVcsInstancesObsolete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\VcsRootInstances**](../Model/VcsRootInstances.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExampleNewProjectDescription**
> \TeamCityClient\Model\NewBuildTypeDescription getExampleNewProjectDescription($bt_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 

try {
    $result = $apiInstance->getExampleNewProjectDescription($bt_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getExampleNewProjectDescription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |

### Return type

[**\TeamCityClient\Model\NewBuildTypeDescription**](../Model/NewBuildTypeDescription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExampleNewProjectDescriptionCompatibilityVersion1**
> \TeamCityClient\Model\NewBuildTypeDescription getExampleNewProjectDescriptionCompatibilityVersion1($bt_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 

try {
    $result = $apiInstance->getExampleNewProjectDescriptionCompatibilityVersion1($bt_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getExampleNewProjectDescriptionCompatibilityVersion1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |

### Return type

[**\TeamCityClient\Model\NewBuildTypeDescription**](../Model/NewBuildTypeDescription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeature**
> \TeamCityClient\Model\Feature getFeature($bt_locator, $feature_id, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$feature_id = "feature_id_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getFeature($bt_locator, $feature_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getFeature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **feature_id** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Feature**](../Model/Feature.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeatureParameter**
> string getFeatureParameter($bt_locator, $feature_id, $parameter_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$feature_id = "feature_id_example"; // string | 
$parameter_name = "parameter_name_example"; // string | 

try {
    $result = $apiInstance->getFeatureParameter($bt_locator, $feature_id, $parameter_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getFeatureParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **feature_id** | **string**|  |
 **parameter_name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeatureParameters**
> \TeamCityClient\Model\Properties getFeatureParameters($bt_locator, $feature_id, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$feature_id = "feature_id_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getFeatureParameters($bt_locator, $feature_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getFeatureParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **feature_id** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeatureSetting**
> string getFeatureSetting($bt_locator, $feature_id, $name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$feature_id = "feature_id_example"; // string | 
$name = "name_example"; // string | 

try {
    $result = $apiInstance->getFeatureSetting($bt_locator, $feature_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getFeatureSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **feature_id** | **string**|  |
 **name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeatures**
> \TeamCityClient\Model\Features getFeatures($bt_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getFeatures($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getFeatures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Features**](../Model/Features.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvestigations**
> \TeamCityClient\Model\Investigations getInvestigations($bt_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getInvestigations($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getInvestigations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Investigations**](../Model/Investigations.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetadata**
> \TeamCityClient\Model\\SplFileObject getMetadata($path, $bt_locator, $fields, $resolve_parameters)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$resolve_parameters = true; // bool | 

try {
    $result = $apiInstance->getMetadata($path, $bt_locator, $fields, $resolve_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **resolve_parameters** | **bool**|  | [optional]

### Return type

[**\TeamCityClient\Model\\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParameter**
> \TeamCityClient\Model\Property getParameter($name, $bt_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getParameter($name, $bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Property**](../Model/Property.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParameterType**
> \TeamCityClient\Model\Type getParameterType($name, $bt_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 

try {
    $result = $apiInstance->getParameterType($name, $bt_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getParameterType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |

### Return type

[**\TeamCityClient\Model\Type**](../Model/Type.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParameterTypeRawValue**
> string getParameterTypeRawValue($name, $bt_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 

try {
    $result = $apiInstance->getParameterTypeRawValue($name, $bt_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getParameterTypeRawValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParameterValueLong**
> string getParameterValueLong($name, $bt_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 

try {
    $result = $apiInstance->getParameterValueLong($name, $bt_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getParameterValueLong: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParameterValueLong_0**
> string getParameterValueLong_0($name, $bt_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 

try {
    $result = $apiInstance->getParameterValueLong_0($name, $bt_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getParameterValueLong_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParameter_0**
> \TeamCityClient\Model\Property getParameter_0($name, $bt_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getParameter_0($name, $bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getParameter_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Property**](../Model/Property.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParameters**
> \TeamCityClient\Model\Properties getParameters($bt_locator, $locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getParameters($bt_locator, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParameters_0**
> \TeamCityClient\Model\Properties getParameters_0($bt_locator, $locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getParameters_0($bt_locator, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getParameters_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRequirementSetting**
> string getRequirementSetting($bt_locator, $agent_requirement_locator, $field_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$agent_requirement_locator = "agent_requirement_locator_example"; // string | 
$field_name = "field_name_example"; // string | 

try {
    $result = $apiInstance->getRequirementSetting($bt_locator, $agent_requirement_locator, $field_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getRequirementSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **agent_requirement_locator** | **string**|  |
 **field_name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoot**
> \TeamCityClient\Model\Files getRoot($bt_locator, $base_path, $locator, $fields, $resolve_parameters)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 
$resolve_parameters = true; // bool | 

try {
    $result = $apiInstance->getRoot($bt_locator, $base_path, $locator, $fields, $resolve_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getRoot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]
 **resolve_parameters** | **bool**|  | [optional]

### Return type

[**\TeamCityClient\Model\Files**](../Model/Files.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSettingsFile**
> string getSettingsFile($bt_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 

try {
    $result = $apiInstance->getSettingsFile($bt_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getSettingsFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSnapshotDep**
> \TeamCityClient\Model\SnapshotDependency getSnapshotDep($bt_locator, $snapshot_dep_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$snapshot_dep_locator = "snapshot_dep_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getSnapshotDep($bt_locator, $snapshot_dep_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getSnapshotDep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **snapshot_dep_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\SnapshotDependency**](../Model/SnapshotDependency.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSnapshotDeps**
> \TeamCityClient\Model\SnapshotDependencies getSnapshotDeps($bt_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getSnapshotDeps($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getSnapshotDeps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\SnapshotDependencies**](../Model/SnapshotDependencies.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStep**
> \TeamCityClient\Model\Step getStep($bt_locator, $step_id, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$step_id = "step_id_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getStep($bt_locator, $step_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getStep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **step_id** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Step**](../Model/Step.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStepParameter**
> string getStepParameter($bt_locator, $step_id, $parameter_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$step_id = "step_id_example"; // string | 
$parameter_name = "parameter_name_example"; // string | 

try {
    $result = $apiInstance->getStepParameter($bt_locator, $step_id, $parameter_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getStepParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **step_id** | **string**|  |
 **parameter_name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStepParameters**
> \TeamCityClient\Model\Properties getStepParameters($bt_locator, $step_id, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$step_id = "step_id_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getStepParameters($bt_locator, $step_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getStepParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **step_id** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Properties**](../Model/Properties.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStepSetting**
> string getStepSetting($bt_locator, $step_id, $field_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$step_id = "step_id_example"; // string | 
$field_name = "field_name_example"; // string | 

try {
    $result = $apiInstance->getStepSetting($bt_locator, $step_id, $field_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getStepSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **step_id** | **string**|  |
 **field_name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSteps**
> \TeamCityClient\Model\Steps getSteps($bt_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getSteps($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getSteps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Steps**](../Model/Steps.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplate**
> \TeamCityClient\Model\BuildType getTemplate($bt_locator, $template_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$template_locator = "template_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getTemplate($bt_locator, $template_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **template_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\BuildType**](../Model/BuildType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplates**
> \TeamCityClient\Model\BuildTypes getTemplates($bt_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getTemplates($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\BuildTypes**](../Model/BuildTypes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTrigger**
> \TeamCityClient\Model\Trigger getTrigger($bt_locator, $trigger_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$trigger_locator = "trigger_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getTrigger($bt_locator, $trigger_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getTrigger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **trigger_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Trigger**](../Model/Trigger.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTriggerSetting**
> string getTriggerSetting($bt_locator, $trigger_locator, $field_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$trigger_locator = "trigger_locator_example"; // string | 
$field_name = "field_name_example"; // string | 

try {
    $result = $apiInstance->getTriggerSetting($bt_locator, $trigger_locator, $field_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getTriggerSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **trigger_locator** | **string**|  |
 **field_name** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTriggers**
> \TeamCityClient\Model\Triggers getTriggers($bt_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getTriggers($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getTriggers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Triggers**](../Model/Triggers.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVCSLabelingOptions**
> \TeamCityClient\Model\VcsLabeling getVCSLabelingOptions($bt_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 

try {
    $result = $apiInstance->getVCSLabelingOptions($bt_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getVCSLabelingOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |

### Return type

[**\TeamCityClient\Model\VcsLabeling**](../Model/VcsLabeling.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVcsRootEntries**
> \TeamCityClient\Model\VcsRootEntries getVcsRootEntries($bt_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getVcsRootEntries($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getVcsRootEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\VcsRootEntries**](../Model/VcsRootEntries.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVcsRootEntry**
> \TeamCityClient\Model\VcsRootEntry getVcsRootEntry($bt_locator, $vcs_root_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->getVcsRootEntry($bt_locator, $vcs_root_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getVcsRootEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **vcs_root_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\VcsRootEntry**](../Model/VcsRootEntry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVcsRootEntryCheckoutRules**
> string getVcsRootEntryCheckoutRules($bt_locator, $vcs_root_locator)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$vcs_root_locator = "vcs_root_locator_example"; // string | 

try {
    $result = $apiInstance->getVcsRootEntryCheckoutRules($bt_locator, $vcs_root_locator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getVcsRootEntryCheckoutRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **vcs_root_locator** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getZipped**
> getZipped($path, $bt_locator, $base_path, $locator, $name, $resolve_parameters)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$base_path = "base_path_example"; // string | 
$locator = "locator_example"; // string | 
$name = "name_example"; // string | 
$resolve_parameters = true; // bool | 

try {
    $apiInstance->getZipped($path, $bt_locator, $base_path, $locator, $name, $resolve_parameters);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->getZipped: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |
 **bt_locator** | **string**|  |
 **base_path** | **string**|  | [optional]
 **locator** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **resolve_parameters** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeAllTemplates**
> removeAllTemplates($bt_locator, $inline_settings)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$inline_settings = true; // bool | 

try {
    $apiInstance->removeAllTemplates($bt_locator, $inline_settings);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->removeAllTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **inline_settings** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeTemplate**
> removeTemplate($bt_locator, $template_locator, $inline_settings)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$template_locator = "template_locator_example"; // string | 
$inline_settings = true; // bool | 

try {
    $apiInstance->removeTemplate($bt_locator, $template_locator, $inline_settings);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->removeTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **template_locator** | **string**|  |
 **inline_settings** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAgentRequirement**
> \TeamCityClient\Model\AgentRequirement replaceAgentRequirement($bt_locator, $agent_requirement_locator, $fields, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$agent_requirement_locator = "agent_requirement_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \TeamCityClient\Model\AgentRequirement(); // \TeamCityClient\Model\AgentRequirement | 

try {
    $result = $apiInstance->replaceAgentRequirement($bt_locator, $agent_requirement_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceAgentRequirement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **agent_requirement_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\TeamCityClient\Model\AgentRequirement**](../Model/AgentRequirement.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\AgentRequirement**](../Model/AgentRequirement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAgentRequirements**
> \TeamCityClient\Model\AgentRequirements replaceAgentRequirements($bt_locator, $fields, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \TeamCityClient\Model\AgentRequirements(); // \TeamCityClient\Model\AgentRequirements | 

try {
    $result = $apiInstance->replaceAgentRequirements($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceAgentRequirements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\TeamCityClient\Model\AgentRequirements**](../Model/AgentRequirements.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\AgentRequirements**](../Model/AgentRequirements.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceArtifactDep**
> \TeamCityClient\Model\ArtifactDependency replaceArtifactDep($bt_locator, $artifact_dep_locator, $fields, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$artifact_dep_locator = "artifact_dep_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \TeamCityClient\Model\ArtifactDependency(); // \TeamCityClient\Model\ArtifactDependency | 

try {
    $result = $apiInstance->replaceArtifactDep($bt_locator, $artifact_dep_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceArtifactDep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **artifact_dep_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\TeamCityClient\Model\ArtifactDependency**](../Model/ArtifactDependency.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\ArtifactDependency**](../Model/ArtifactDependency.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceArtifactDeps**
> \TeamCityClient\Model\ArtifactDependencies replaceArtifactDeps($bt_locator, $fields, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \TeamCityClient\Model\ArtifactDependencies(); // \TeamCityClient\Model\ArtifactDependencies | 

try {
    $result = $apiInstance->replaceArtifactDeps($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceArtifactDeps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\TeamCityClient\Model\ArtifactDependencies**](../Model/ArtifactDependencies.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\ArtifactDependencies**](../Model/ArtifactDependencies.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceFeature**
> \TeamCityClient\Model\Feature replaceFeature($bt_locator, $feature_id, $fields, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$feature_id = "feature_id_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \TeamCityClient\Model\Feature(); // \TeamCityClient\Model\Feature | 

try {
    $result = $apiInstance->replaceFeature($bt_locator, $feature_id, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceFeature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **feature_id** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\TeamCityClient\Model\Feature**](../Model/Feature.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\Feature**](../Model/Feature.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceFeatureParameters**
> \TeamCityClient\Model\Properties replaceFeatureParameters($bt_locator, $feature_id, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$feature_id = "feature_id_example"; // string | 
$body = new \TeamCityClient\Model\Properties(); // \TeamCityClient\Model\Properties | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->replaceFeatureParameters($bt_locator, $feature_id, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceFeatureParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **feature_id** | **string**|  |
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

# **replaceFeatures**
> \TeamCityClient\Model\Features replaceFeatures($bt_locator, $fields, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \TeamCityClient\Model\Features(); // \TeamCityClient\Model\Features | 

try {
    $result = $apiInstance->replaceFeatures($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceFeatures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\TeamCityClient\Model\Features**](../Model/Features.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\Features**](../Model/Features.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceSnapshotDep**
> \TeamCityClient\Model\SnapshotDependency replaceSnapshotDep($bt_locator, $snapshot_dep_locator, $fields, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$snapshot_dep_locator = "snapshot_dep_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \TeamCityClient\Model\SnapshotDependency(); // \TeamCityClient\Model\SnapshotDependency | 

try {
    $result = $apiInstance->replaceSnapshotDep($bt_locator, $snapshot_dep_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceSnapshotDep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **snapshot_dep_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\TeamCityClient\Model\SnapshotDependency**](../Model/SnapshotDependency.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\SnapshotDependency**](../Model/SnapshotDependency.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceSnapshotDeps**
> \TeamCityClient\Model\SnapshotDependencies replaceSnapshotDeps($bt_locator, $fields, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \TeamCityClient\Model\SnapshotDependencies(); // \TeamCityClient\Model\SnapshotDependencies | 

try {
    $result = $apiInstance->replaceSnapshotDeps($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceSnapshotDeps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\TeamCityClient\Model\SnapshotDependencies**](../Model/SnapshotDependencies.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\SnapshotDependencies**](../Model/SnapshotDependencies.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceStep**
> \TeamCityClient\Model\Step replaceStep($bt_locator, $step_id, $fields, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$step_id = "step_id_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \TeamCityClient\Model\Step(); // \TeamCityClient\Model\Step | 

try {
    $result = $apiInstance->replaceStep($bt_locator, $step_id, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceStep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **step_id** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\TeamCityClient\Model\Step**](../Model/Step.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\Step**](../Model/Step.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceStepParameters**
> \TeamCityClient\Model\Properties replaceStepParameters($bt_locator, $step_id, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$step_id = "step_id_example"; // string | 
$body = new \TeamCityClient\Model\Properties(); // \TeamCityClient\Model\Properties | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->replaceStepParameters($bt_locator, $step_id, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceStepParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **step_id** | **string**|  |
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

# **replaceSteps**
> \TeamCityClient\Model\Steps replaceSteps($bt_locator, $fields, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \TeamCityClient\Model\Steps(); // \TeamCityClient\Model\Steps | 

try {
    $result = $apiInstance->replaceSteps($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceSteps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\TeamCityClient\Model\Steps**](../Model/Steps.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\Steps**](../Model/Steps.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceTrigger**
> \TeamCityClient\Model\Trigger replaceTrigger($bt_locator, $trigger_locator, $fields, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$trigger_locator = "trigger_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \TeamCityClient\Model\Trigger(); // \TeamCityClient\Model\Trigger | 

try {
    $result = $apiInstance->replaceTrigger($bt_locator, $trigger_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceTrigger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **trigger_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\TeamCityClient\Model\Trigger**](../Model/Trigger.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\Trigger**](../Model/Trigger.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceTriggers**
> \TeamCityClient\Model\Triggers replaceTriggers($bt_locator, $fields, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 
$body = new \TeamCityClient\Model\Triggers(); // \TeamCityClient\Model\Triggers | 

try {
    $result = $apiInstance->replaceTriggers($bt_locator, $fields, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceTriggers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]
 **body** | [**\TeamCityClient\Model\Triggers**](../Model/Triggers.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\Triggers**](../Model/Triggers.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceVcsRootEntries**
> \TeamCityClient\Model\VcsRootEntries replaceVcsRootEntries($bt_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$body = new \TeamCityClient\Model\VcsRootEntries(); // \TeamCityClient\Model\VcsRootEntries | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->replaceVcsRootEntries($bt_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->replaceVcsRootEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\VcsRootEntries**](../Model/VcsRootEntries.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\VcsRootEntries**](../Model/VcsRootEntries.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveBranches**
> \TeamCityClient\Model\Branches serveBranches($bt_locator, $locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveBranches($bt_locator, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->serveBranches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Branches**](../Model/Branches.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveBuildField**
> string serveBuildField($bt_locator, $build_locator, $field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$build_locator = "build_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->serveBuildField($bt_locator, $build_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->serveBuildField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **build_locator** | **string**|  |
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveBuildTypeBuildsTags**
> \TeamCityClient\Model\Tags serveBuildTypeBuildsTags($bt_locator, $field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->serveBuildTypeBuildsTags($bt_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->serveBuildTypeBuildsTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **field** | **string**|  |

### Return type

[**\TeamCityClient\Model\Tags**](../Model/Tags.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveBuildTypeField**
> string serveBuildTypeField($bt_locator, $field)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$field = "field_example"; // string | 

try {
    $result = $apiInstance->serveBuildTypeField($bt_locator, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->serveBuildTypeField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **field** | **string**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveBuildTypeXML**
> \TeamCityClient\Model\BuildType serveBuildTypeXML($bt_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveBuildTypeXML($bt_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->serveBuildTypeXML: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\BuildType**](../Model/BuildType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveBuildWithProject**
> \TeamCityClient\Model\Build serveBuildWithProject($bt_locator, $build_locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$build_locator = "build_locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveBuildWithProject($bt_locator, $build_locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->serveBuildWithProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **build_locator** | **string**|  |
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serveBuilds**
> \TeamCityClient\Model\Builds serveBuilds($bt_locator, $status, $triggered_by_user, $include_personal, $include_canceled, $only_pinned, $tag, $agent_name, $since_build, $since_date, $start, $count, $locator, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$status = "status_example"; // string | 
$triggered_by_user = "triggered_by_user_example"; // string | 
$include_personal = true; // bool | 
$include_canceled = true; // bool | 
$only_pinned = true; // bool | 
$tag = array("tag_example"); // string[] | 
$agent_name = "agent_name_example"; // string | 
$since_build = "since_build_example"; // string | 
$since_date = "since_date_example"; // string | 
$start = 789; // int | 
$count = 56; // int | 
$locator = "locator_example"; // string | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->serveBuilds($bt_locator, $status, $triggered_by_user, $include_personal, $include_canceled, $only_pinned, $tag, $agent_name, $since_build, $since_date, $start, $count, $locator, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->serveBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **status** | **string**|  | [optional]
 **triggered_by_user** | **string**|  | [optional]
 **include_personal** | **bool**|  | [optional]
 **include_canceled** | **bool**|  | [optional]
 **only_pinned** | **bool**|  | [optional]
 **tag** | [**string[]**](../Model/string.md)|  | [optional]
 **agent_name** | **string**|  | [optional]
 **since_build** | **string**|  | [optional]
 **since_date** | **string**|  | [optional]
 **start** | **int**|  | [optional]
 **count** | **int**|  | [optional]
 **locator** | **string**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Builds**](../Model/Builds.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setBuildTypeField**
> string setBuildTypeField($bt_locator, $field, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$field = "field_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setBuildTypeField($bt_locator, $field, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->setBuildTypeField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
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

# **setParameter**
> \TeamCityClient\Model\Property setParameter($bt_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$body = new \TeamCityClient\Model\Property(); // \TeamCityClient\Model\Property | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setParameter($bt_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->setParameter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Property**](../Model/Property.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Property**](../Model/Property.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParameterType**
> \TeamCityClient\Model\Type setParameterType($name, $bt_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$body = new \TeamCityClient\Model\Type(); // \TeamCityClient\Model\Type | 

try {
    $result = $apiInstance->setParameterType($name, $bt_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->setParameterType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Type**](../Model/Type.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\Type**](../Model/Type.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParameterTypeRawValue**
> string setParameterTypeRawValue($name, $bt_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setParameterTypeRawValue($name, $bt_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->setParameterTypeRawValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParameterValueLong**
> string setParameterValueLong($name, $bt_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setParameterValueLong($name, $bt_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->setParameterValueLong: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParameterValueLong_0**
> string setParameterValueLong_0($name, $bt_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->setParameterValueLong_0($name, $bt_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->setParameterValueLong_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParameter_0**
> \TeamCityClient\Model\Property setParameter_0($name, $bt_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$body = new \TeamCityClient\Model\Property(); // \TeamCityClient\Model\Property | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setParameter_0($name, $bt_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->setParameter_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Property**](../Model/Property.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Property**](../Model/Property.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParameter_1**
> \TeamCityClient\Model\Property setParameter_1($bt_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$body = new \TeamCityClient\Model\Property(); // \TeamCityClient\Model\Property | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setParameter_1($bt_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->setParameter_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Property**](../Model/Property.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Property**](../Model/Property.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParameter_2**
> \TeamCityClient\Model\Property setParameter_2($name, $bt_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$bt_locator = "bt_locator_example"; // string | 
$body = new \TeamCityClient\Model\Property(); // \TeamCityClient\Model\Property | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setParameter_2($name, $bt_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->setParameter_2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **bt_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\Property**](../Model/Property.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\Property**](../Model/Property.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setParameters**
> \TeamCityClient\Model\Properties setParameters($bt_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$body = new \TeamCityClient\Model\Properties(); // \TeamCityClient\Model\Properties | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setParameters($bt_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->setParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
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

# **setParameters_0**
> \TeamCityClient\Model\Properties setParameters_0($bt_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$body = new \TeamCityClient\Model\Properties(); // \TeamCityClient\Model\Properties | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setParameters_0($bt_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->setParameters_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
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

# **setTemplates**
> \TeamCityClient\Model\BuildTypes setTemplates($bt_locator, $body, $optimize_settings, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$body = new \TeamCityClient\Model\BuildTypes(); // \TeamCityClient\Model\BuildTypes | 
$optimize_settings = true; // bool | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->setTemplates($bt_locator, $body, $optimize_settings, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->setTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\BuildTypes**](../Model/BuildTypes.md)|  | [optional]
 **optimize_settings** | **bool**|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\BuildTypes**](../Model/BuildTypes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setVCSLabelingOptions**
> \TeamCityClient\Model\VcsLabeling setVCSLabelingOptions($bt_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$body = new \TeamCityClient\Model\VcsLabeling(); // \TeamCityClient\Model\VcsLabeling | 

try {
    $result = $apiInstance->setVCSLabelingOptions($bt_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->setVCSLabelingOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\VcsLabeling**](../Model/VcsLabeling.md)|  | [optional]

### Return type

[**\TeamCityClient\Model\VcsLabeling**](../Model/VcsLabeling.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVcsRootEntry**
> \TeamCityClient\Model\VcsRootEntry updateVcsRootEntry($bt_locator, $vcs_root_locator, $body, $fields)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$body = new \TeamCityClient\Model\VcsRootEntry(); // \TeamCityClient\Model\VcsRootEntry | 
$fields = "fields_example"; // string | 

try {
    $result = $apiInstance->updateVcsRootEntry($bt_locator, $vcs_root_locator, $body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->updateVcsRootEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **vcs_root_locator** | **string**|  |
 **body** | [**\TeamCityClient\Model\VcsRootEntry**](../Model/VcsRootEntry.md)|  | [optional]
 **fields** | **string**|  | [optional]

### Return type

[**\TeamCityClient\Model\VcsRootEntry**](../Model/VcsRootEntry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVcsRootEntryCheckoutRules**
> string updateVcsRootEntryCheckoutRules($bt_locator, $vcs_root_locator, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TeamCityClient\Api\BuildTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bt_locator = "bt_locator_example"; // string | 
$vcs_root_locator = "vcs_root_locator_example"; // string | 
$body = "body_example"; // string | 

try {
    $result = $apiInstance->updateVcsRootEntryCheckoutRules($bt_locator, $vcs_root_locator, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildTypeApi->updateVcsRootEntryCheckoutRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bt_locator** | **string**|  |
 **vcs_root_locator** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

