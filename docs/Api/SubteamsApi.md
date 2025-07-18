# WhatPulse\SubteamsApi

All URIs are relative to https://whatpulse.test/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1TeamsSubteams()**](SubteamsApi.md#v1TeamsSubteams) | **GET** /teams/{team_id}/subteams | Get team subteams |
| [**v1TeamsSubteamsShow()**](SubteamsApi.md#v1TeamsSubteamsShow) | **GET** /teams/{team_id}/subteams/{subteam_id} | Get subteam details |


## `v1TeamsSubteams()`

```php
v1TeamsSubteams($team_id, $per_page): \WhatPulse\Model\V1TeamsSubteams200Response
```

Get team subteams

Get a paginated list of subteams that belong to a specific team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = WhatPulse\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WhatPulse\Api\SubteamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = 'team_id_example'; // string | Team ID, name or slug
$per_page = 56; // int

try {
    $result = $apiInstance->v1TeamsSubteams($team_id, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubteamsApi->v1TeamsSubteams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | **string**| Team ID, name or slug | |
| **per_page** | **int**|  | [optional] |

### Return type

[**\WhatPulse\Model\V1TeamsSubteams200Response**](../Model/V1TeamsSubteams200Response.md)

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TeamsSubteamsShow()`

```php
v1TeamsSubteamsShow($team_id, $subteam_id): \WhatPulse\Model\V1TeamsSubteamsShow200Response
```

Get subteam details

Get detailed information about a specific subteam, including statistics.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = WhatPulse\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WhatPulse\Api\SubteamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = 'team_id_example'; // string | Team ID, name or slug
$subteam_id = 56; // int | Subteam ID

try {
    $result = $apiInstance->v1TeamsSubteamsShow($team_id, $subteam_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubteamsApi->v1TeamsSubteamsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | **string**| Team ID, name or slug | |
| **subteam_id** | **int**| Subteam ID | |

### Return type

[**\WhatPulse\Model\V1TeamsSubteamsShow200Response**](../Model/V1TeamsSubteamsShow200Response.md)

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
