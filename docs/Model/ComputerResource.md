# # ComputerResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier for the computer. |
**name** | **string** | How the computer is named on the user&#39;s account. |
**client_version** | **string** | The version of the WhatPulse client running on this computer. |
**os** | **string** | The operating system of the computer, represented as code. |
**is_archived** | **bool** | Whether or not this computer is archived. |
**totals** | [**\WhatPulse\Model\ComputerResourceTotals**](ComputerResourceTotals.md) |  |
**pulses** | **int** | The total number of pulses recorded for this computer. |
**last_pulse_date** | **string** | The date and time of the last pulse recorded for this computer. |
**hardware** | **object[]** | Hardware specifications and peripherals, if available. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
