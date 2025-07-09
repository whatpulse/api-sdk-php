# OpenAPIClient-php

Public API for WhatPulse user data access. This API allows authenticated users to access their own data and public data from other users, depending on privacy settings.


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), run:

```bash
composer require whatpulse/sdk-php
```

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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
$is_archived = 'is_archived_example'; // string | Get filter parameters

try {
    $result = $apiInstance->v1UsersComputers($id, $is_archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComputersApi->v1UsersComputers: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://whatpulse.org/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ComputersApi* | [**v1UsersComputers**](docs/Api/ComputersApi.md#v1userscomputers) | **GET** /users/{id}/computers | Get user computers
*MembersApi* | [**v1TeamsMembers**](docs/Api/MembersApi.md#v1teamsmembers) | **GET** /teams/{team_id}/members | Get team members
*ProfilesApi* | [**v1UsersProfiles**](docs/Api/ProfilesApi.md#v1usersprofiles) | **GET** /users/{id}/profiles | Get user profiles
*PulsesApi* | [**v1UsersPulses**](docs/Api/PulsesApi.md#v1userspulses) | **GET** /users/{id}/pulses | Get user pulses
*SubteamMembersApi* | [**v1TeamsSubteamsMembers**](docs/Api/SubteamMembersApi.md#v1teamssubteamsmembers) | **GET** /teams/{team_id}/subteams/{subteam_id}/members | Get subteam members
*SubteamsApi* | [**v1TeamsSubteams**](docs/Api/SubteamsApi.md#v1teamssubteams) | **GET** /teams/{team_id}/subteams | Get team subteams
*SubteamsApi* | [**v1TeamsSubteamsShow**](docs/Api/SubteamsApi.md#v1teamssubteamsshow) | **GET** /teams/{team_id}/subteams/{subteam_id} | Get subteam details
*TeamsApi* | [**v1TeamsIndex**](docs/Api/TeamsApi.md#v1teamsindex) | **GET** /teams | Search teams
*TeamsApi* | [**v1TeamsShow**](docs/Api/TeamsApi.md#v1teamsshow) | **GET** /teams/{team_id} | Get team details
*TimeSeriesApi* | [**v1UsersTimeSeries**](docs/Api/TimeSeriesApi.md#v1userstimeseries) | **GET** /users/{id}/time-series | Get user time series
*UsersApi* | [**v1UsersIndex**](docs/Api/UsersApi.md#v1usersindex) | **GET** /users | Search users
*UsersApi* | [**v1UsersShow**](docs/Api/UsersApi.md#v1usersshow) | **GET** /users/{id} | Get user details

## Models

- [ClientProfileResource](docs/Model/ClientProfileResource.md)
- [ClientProfileResourceComputer](docs/Model/ClientProfileResourceComputer.md)
- [ComputerResource](docs/Model/ComputerResource.md)
- [ComputerResourceTotals](docs/Model/ComputerResourceTotals.md)
- [DetailedSubteamResource](docs/Model/DetailedSubteamResource.md)
- [DetailedSubteamResourceLinks](docs/Model/DetailedSubteamResourceLinks.md)
- [DetailedSubteamResourceTotals](docs/Model/DetailedSubteamResourceTotals.md)
- [ErrorResource](docs/Model/ErrorResource.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [LinksResource](docs/Model/LinksResource.md)
- [PaginationResource](docs/Model/PaginationResource.md)
- [PulseResource](docs/Model/PulseResource.md)
- [SubteamResource](docs/Model/SubteamResource.md)
- [TeamListResource](docs/Model/TeamListResource.md)
- [TeamResource](docs/Model/TeamResource.md)
- [TeamResourceLinks](docs/Model/TeamResourceLinks.md)
- [TeamResourceRanks](docs/Model/TeamResourceRanks.md)
- [TeamResourceTotals](docs/Model/TeamResourceTotals.md)
- [TimeSeriesResource](docs/Model/TimeSeriesResource.md)
- [TimeSeriesResourceDistanceMiles](docs/Model/TimeSeriesResourceDistanceMiles.md)
- [UserListResource](docs/Model/UserListResource.md)
- [UserResource](docs/Model/UserResource.md)
- [UserResourceLastPulse](docs/Model/UserResourceLastPulse.md)
- [UserResourceRanks](docs/Model/UserResourceRanks.md)
- [UserResourceTotals](docs/Model/UserResourceTotals.md)
- [V1TeamsIndex200Response](docs/Model/V1TeamsIndex200Response.md)
- [V1TeamsIndex200ResponseFilters](docs/Model/V1TeamsIndex200ResponseFilters.md)
- [V1TeamsMembers200Response](docs/Model/V1TeamsMembers200Response.md)
- [V1TeamsShow200Response](docs/Model/V1TeamsShow200Response.md)
- [V1TeamsShow200ResponseAnyOf](docs/Model/V1TeamsShow200ResponseAnyOf.md)
- [V1TeamsSubteams200Response](docs/Model/V1TeamsSubteams200Response.md)
- [V1TeamsSubteamsMembers200Response](docs/Model/V1TeamsSubteamsMembers200Response.md)
- [V1TeamsSubteamsShow200Response](docs/Model/V1TeamsSubteamsShow200Response.md)
- [V1TeamsSubteamsShow200ResponseAnyOf](docs/Model/V1TeamsSubteamsShow200ResponseAnyOf.md)
- [V1UsersComputers200Response](docs/Model/V1UsersComputers200Response.md)
- [V1UsersComputers200ResponseFilters](docs/Model/V1UsersComputers200ResponseFilters.md)
- [V1UsersIndex200Response](docs/Model/V1UsersIndex200Response.md)
- [V1UsersProfiles200Response](docs/Model/V1UsersProfiles200Response.md)
- [V1UsersProfiles200ResponseFilters](docs/Model/V1UsersProfiles200ResponseFilters.md)
- [V1UsersPulses200Response](docs/Model/V1UsersPulses200Response.md)
- [V1UsersPulses200ResponseFilters](docs/Model/V1UsersPulses200ResponseFilters.md)
- [V1UsersShow200Response](docs/Model/V1UsersShow200Response.md)
- [V1UsersShow200ResponseAnyOf](docs/Model/V1UsersShow200ResponseAnyOf.md)
- [V1UsersTimeSeries200Response](docs/Model/V1UsersTimeSeries200Response.md)
- [V1UsersTimeSeries200ResponseFilters](docs/Model/V1UsersTimeSeries200ResponseFilters.md)

## Authorization

Authentication schemes defined for the API:
### http

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Generator version: `7.14.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
