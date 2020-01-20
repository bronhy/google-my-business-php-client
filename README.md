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

## Detailed error responses

To enable more detailed error messages in responses, such as absent required fields, add the following additional header to your requests:

`X-GOOG-API-FORMAT-VERSION: 2`

For additional information on error message responses, see the ErrorCode, ErrorDetail, InternalError, and ValidationError pages in the [Shared.Types](https://developers.google.com/my-business/reference/rest/Shared.Types/ErrorCode) section.
