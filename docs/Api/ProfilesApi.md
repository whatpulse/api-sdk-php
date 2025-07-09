# WhatPulse\ProfilesApi

All URIs are relative to https://whatpulse.org/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1UsersProfiles()**](ProfilesApi.md#v1UsersProfiles) | **GET** /users/{id}/profiles | Get user profiles |


## `v1UsersProfiles()`

```php
v1UsersProfiles($id, $is_deleted, $per_page): \WhatPulse\Model\V1UsersProfiles200Response
```

Get user profiles

Get a list of client profiles for a specific user. Client profiles represent different software configurations or applications tracked by WhatPulse. You can filter by deletion status and control pagination. The response includes profile information with associated computer details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = WhatPulse\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WhatPulse\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User ID or username
$is_deleted = 'is_deleted_example'; // string
$per_page = 56; // int

try {
    $result = $apiInstance->v1UsersProfiles($id, $is_deleted, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->v1UsersProfiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User ID or username | |
| **is_deleted** | **string**|  | [optional] |
| **per_page** | **int**|  | [optional] |

### Return type

[**\WhatPulse\Model\V1UsersProfiles200Response**](../Model/V1UsersProfiles200Response.md)

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
