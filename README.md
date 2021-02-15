# PHP Client library for Google My Business
The Google My Business API client libraries wrap the functionality of the Google My Business API, and provide functionality common to all Google APIs, for example HTTP transport, error handling, authentication, JSON parsing, and support for protocol buffers.

This package contains the Service definition for MyBusiness and it depends on Google API PHP Client

You are welcome to contribute and ask for maintenance rights.

## Requirements:

Google API PHP Client
URL: https://github.com/google/google-api-php-client/releases

## How to install 

The easiest way to install is with composer.

`composer require bronhy/google-my-business-php-client`

## Semantic Versioning

Do notice that google is not following semantic versioning [rfc] https://semver.org/ with this library. 
Since this package reflects the google versioning make sure that you lock to your version.

```
ie. composer require bronhy/google-my-business-php-client:4.8
```

## Detailed error responses

To enable more detailed error messages in responses, such as absent required fields, add the following additional header to your requests:

`X-GOOG-API-FORMAT-VERSION: 2`

For additional information on error message responses, see the ErrorCode, ErrorDetail, InternalError, and ValidationError pages in the [Shared.Types](https://developers.google.com/my-business/reference/rest/Shared.Types/ErrorCode) section.

## Authentication examples 

### Service Account 

Get and include the Google_Client as described above.

```php 

$client = new \Google_Client();
$client->useApplicationDefaultCredentials();
// set the service account json file location manually
$client->setAuthConfig(__DIR__ . '/Data/service_account.json');
$client->setApplicationName("_Your_app_name_here_");
// set the scope to access GMBs
$client->setScopes([
    "https://www.googleapis.com/auth/business.manage"
]);
// if you have not enabled/ have access to GMB API you need to request it directly with Google and enable it through the project's API explorer; search for "Google My Business API" 
```
