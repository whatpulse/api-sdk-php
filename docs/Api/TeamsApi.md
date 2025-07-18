# WhatPulse\TeamsApi

All URIs are relative to https://whatpulse.test/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1TeamsIndex()**](TeamsApi.md#v1TeamsIndex) | **GET** /teams | Search teams |
| [**v1TeamsShow()**](TeamsApi.md#v1TeamsShow) | **GET** /teams/{team_id} | Get team details |


## `v1TeamsIndex()`

```php
v1TeamsIndex($search, $per_page): \WhatPulse\Model\V1TeamsIndex200Response
```

Search teams

Search for teams by name. Returns a paginated list of teams matching the search criteria. Only public team information (ID and name) is returned. The search is case-insensitive and matches partial team names.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = WhatPulse\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WhatPulse\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string
$per_page = 'per_page_example'; // string

try {
    $result = $apiInstance->v1TeamsIndex($search, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->v1TeamsIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**|  | [optional] |
| **per_page** | **string**|  | [optional] |

### Return type

[**\WhatPulse\Model\V1TeamsIndex200Response**](../Model/V1TeamsIndex200Response.md)

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v1TeamsShow()`

```php
v1TeamsShow($team_id): \WhatPulse\Model\V1TeamsShow200Response
```

Get team details

Get detailed information about a specific team. Returns public profile information that can be viewed by anyone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = WhatPulse\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WhatPulse\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_id = 'team_id_example'; // string | Team ID, name or slug

try {
    $result = $apiInstance->v1TeamsShow($team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->v1TeamsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_id** | **string**| Team ID, name or slug | |

### Return type

[**\WhatPulse\Model\V1TeamsShow200Response**](../Model/V1TeamsShow200Response.md)

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
