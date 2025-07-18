# WhatPulse\MembersApi

All URIs are relative to https://whatpulse.test/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1TeamsMembers()**](MembersApi.md#v1TeamsMembers) | **GET** /teams/{team_id}/members | Get team members |


## `v1TeamsMembers()`

```php
v1TeamsMembers($team_id, $per_page): \WhatPulse\Model\V1TeamsMembers200Response
```

Get team members

Get a paginated list of users that are members of a specific team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = WhatPulse\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WhatPulse\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = 'team_id_example'; // string | Team ID, name or slug
$per_page = 56; // int

try {
    $result = $apiInstance->v1TeamsMembers($team_id, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->v1TeamsMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | **string**| Team ID, name or slug | |
| **per_page** | **int**|  | [optional] |

### Return type

[**\WhatPulse\Model\V1TeamsMembers200Response**](../Model/V1TeamsMembers200Response.md)

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
