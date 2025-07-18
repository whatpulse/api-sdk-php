# WhatPulse\SubteamMembersApi

All URIs are relative to https://whatpulse.test/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1TeamsSubteamsMembers()**](SubteamMembersApi.md#v1TeamsSubteamsMembers) | **GET** /teams/{team_id}/subteams/{subteam_id}/members | Get subteam members |


## `v1TeamsSubteamsMembers()`

```php
v1TeamsSubteamsMembers($team_id, $subteam_id, $per_page): \WhatPulse\Model\V1TeamsSubteamsMembers200Response
```

Get subteam members

Get a paginated list of users that are members of a specific subteam.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = WhatPulse\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WhatPulse\Api\SubteamMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = 'team_id_example'; // string | Team ID, name or slug
$subteam_id = 56; // int | Subteam ID
$per_page = 56; // int

try {
    $result = $apiInstance->v1TeamsSubteamsMembers($team_id, $subteam_id, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubteamMembersApi->v1TeamsSubteamsMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | **string**| Team ID, name or slug | |
| **subteam_id** | **int**| Subteam ID | |
| **per_page** | **int**|  | [optional] |

### Return type

[**\WhatPulse\Model\V1TeamsSubteamsMembers200Response**](../Model/V1TeamsSubteamsMembers200Response.md)

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
