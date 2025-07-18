# WhatPulse\ComputersApi

All URIs are relative to https://whatpulse.test/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1UsersComputers()**](ComputersApi.md#v1UsersComputers) | **GET** /users/{id}/computers | Get user computers |


## `v1UsersComputers()`

```php
v1UsersComputers($id, $is_archived): \WhatPulse\Model\V1UsersComputers200Response
```

Get user computers

Get a list of computers for a specific user. Returns computer information including hardware details if you have the appropriate permissions. You can filter by archived status to show only active or archived computers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = WhatPulse\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WhatPulse\Api\ComputersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User ID or username
$is_archived = True; // bool

try {
    $result = $apiInstance->v1UsersComputers($id, $is_archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComputersApi->v1UsersComputers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User ID or username | |
| **is_archived** | **bool**|  | [optional] |

### Return type

[**\WhatPulse\Model\V1UsersComputers200Response**](../Model/V1UsersComputers200Response.md)

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
