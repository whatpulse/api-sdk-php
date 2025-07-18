# WhatPulse\TimeSeriesApi

All URIs are relative to https://whatpulse.test/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1UsersTimeSeries()**](TimeSeriesApi.md#v1UsersTimeSeries) | **GET** /users/{id}/time-series | Get user time series |


## `v1UsersTimeSeries()`

```php
v1UsersTimeSeries($id, $profile_id, $date_from, $date_to, $computer_id, $group_by, $per_page): \WhatPulse\Model\V1UsersTimeSeries200Response
```

Get user time series

Get time series data for a specific user. Time series include data of stats (keys, clicks, download, etc.), defaulted to group by hour. You can filter by computer ID, client profile ID, date range, and group results by day, week, or month. The response includes aggregated data for the specified time period and grouping. It is currently only possible to retrieve time series for yourself, and this also requires the user to be a Premium member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = WhatPulse\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WhatPulse\Api\TimeSeriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User ID or username
$profile_id = 'profile_id_example'; // string
$date_from = 'date_from_example'; // string
$date_to = 'date_to_example'; // string
$computer_id = 'computer_id_example'; // string
$group_by = 'hour'; // string
$per_page = 'per_page_example'; // string

try {
    $result = $apiInstance->v1UsersTimeSeries($id, $profile_id, $date_from, $date_to, $computer_id, $group_by, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeSeriesApi->v1UsersTimeSeries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User ID or username | |
| **profile_id** | **string**|  | [optional] |
| **date_from** | **string**|  | [optional] |
| **date_to** | **string**|  | [optional] |
| **computer_id** | **string**|  | [optional] |
| **group_by** | **string**|  | [optional] [default to &#39;hour&#39;] |
| **per_page** | **string**|  | [optional] |

### Return type

[**\WhatPulse\Model\V1UsersTimeSeries200Response**](../Model/V1UsersTimeSeries200Response.md)

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
