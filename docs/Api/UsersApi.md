# WhatPulse\UsersApi

All URIs are relative to https://whatpulse.org/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1UsersIndex()**](UsersApi.md#v1UsersIndex) | **GET** /users | Search users |
| [**v1UsersShow()**](UsersApi.md#v1UsersShow) | **GET** /users/{id} | Get user details |


## `v1UsersIndex()`

```php
v1UsersIndex($search, $per_page): \WhatPulse\Model\V1UsersIndex200Response
```

Search users

Search for users by username. Returns a paginated list of users matching the search criteria. Only public user information (ID and username) is returned. The search is case-insensitive and matches partial usernames.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = WhatPulse\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WhatPulse\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string
$per_page = 'per_page_example'; // string

try {
    $result = $apiInstance->v1UsersIndex($search, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1UsersIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**|  | [optional] |
| **per_page** | **string**|  | [optional] |

### Return type

[**\WhatPulse\Model\V1UsersIndex200Response**](../Model/V1UsersIndex200Response.md)

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1UsersShow()`

```php
v1UsersShow($id): \WhatPulse\Model\V1UsersShow200Response
```

Get user details

Get detailed information about a specific user. Returns public profile information that can be viewed by anyone, or private information if you're viewing your own profile or have the appropriate permissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = WhatPulse\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WhatPulse\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User ID or username

try {
    $result = $apiInstance->v1UsersShow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v1UsersShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User ID or username | |

### Return type

[**\WhatPulse\Model\V1UsersShow200Response**](../Model/V1UsersShow200Response.md)

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
