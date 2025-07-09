# WhatPulse\PulsesApi

All URIs are relative to https://whatpulse.org/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v1UsersPulses()**](PulsesApi.md#v1UsersPulses) | **GET** /users/{id}/pulses | Get user pulses |


## `v1UsersPulses()`

```php
v1UsersPulses($id, $computer_id, $date_from, $date_to, $per_page): \WhatPulse\Model\V1UsersPulses200Response
```

Get user pulses

Get a list of pulses for a specific user. Pulses represent individual data points collected by WhatPulse, such as key presses, mouse clicks, and network activity. You can filter by computer ID, date range, and control pagination. The response includes pulse information with associated computer details if you have the appropriate permissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = WhatPulse\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WhatPulse\Api\PulsesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User ID or username
$computer_id = 56; // int
$date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$date_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$per_page = 56; // int

try {
    $result = $apiInstance->v1UsersPulses($id, $computer_id, $date_from, $date_to, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PulsesApi->v1UsersPulses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User ID or username | |
| **computer_id** | **int**|  | [optional] |
| **date_from** | **\DateTime**|  | [optional] |
| **date_to** | **\DateTime**|  | [optional] |
| **per_page** | **int**|  | [optional] |

### Return type

[**\WhatPulse\Model\V1UsersPulses200Response**](../Model/V1UsersPulses200Response.md)

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
