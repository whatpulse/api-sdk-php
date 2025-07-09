# # UserResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier for the user. |
**username** | **string** | The username of the user. |
**date_joined** | **string** | The date the user joined WhatPulse, in ISO 8601 format. |
**first_pulse_date** | **string** | The date of the first pulse, in ISO 8601 format. |
**last_pulse_date** | **string** | The date of the last pulse, in ISO 8601 format. |
**pulses** | **int** | The total number of pulses sent by the user. |
**team_id** | **int** | The ID of the team the user is part of, if any. |
**team_is_manager** | **bool** | Whether the user is a manager of their team. |
**country_id** | **int** | The country ID of the user, used for geographical information. |
**is_premium** | **bool** | Whether the user is an active premium member. |
**referrals** | **int** | The number of referrals the user has made. |
**last_referral_date** | **string** | The date of the last referral, in ISO 8601 format. |
**avatar** | **string** | The user&#39;s avatar URL. |
**totals** | [**\WhatPulse\Model\UserResourceTotals**](UserResourceTotals.md) |  |
**ranks** | [**\WhatPulse\Model\UserResourceRanks**](UserResourceRanks.md) |  |
**include_in_rankings** | **bool** | Whether the user is included in rankings. |
**distance_system** | **string** | The system used for measuring distance (miles or kilometers). |
**last_pulse** | [**\WhatPulse\Model\UserResourceLastPulse**](UserResourceLastPulse.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
