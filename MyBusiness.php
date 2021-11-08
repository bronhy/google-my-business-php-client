<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for MyBusiness (v4).
 *
 * <p>
 * The Google My Business API provides an interface for managing business
 * location information on Google.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/my-business/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_MyBusiness extends Google_Service
{


  public $accounts;
  public $accounts_admins;
  public $accounts_invitations;
  public $accounts_locations;
  public $accounts_locations_admins;
  public $accounts_locations_followers;
  public $accounts_locations_insuranceNetworks;
  public $accounts_locations_localPosts;
  public $accounts_locations_lodging;
  public $accounts_locations_media;
  public $accounts_locations_media_customers;
  public $accounts_locations_questions;
  public $accounts_locations_questions_answers;
  public $accounts_locations_reviews;
  public $accounts_locations_verifications;
  public $attributes;
  public $categories;
  public $chains;
  public $googleLocations;
  

  /**
   * Constructs the internal representation of the MyBusiness service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://mybusiness.googleapis.com/';
    $this->servicePath = '';
    $this->batchPath = 'batch';
    $this->version = 'v4';
    $this->serviceName = 'mybusiness';

    $this->accounts = new Google_Service_MyBusiness_Accounts_Resource(
        $this,
        $this->serviceName,
        'accounts',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v4/accounts',
              'httpMethod' => 'POST',
              'parameters' => array(
                'primaryOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'deleteNotifications' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'generateAccountNumber' => array(
              'path' => 'v4/{+name}:generateAccountNumber',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'getNotifications' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v4/accounts',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'name' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'filter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'listRecommendGoogleLocations' => array(
              'path' => 'v4/{+name}:recommendGoogleLocations',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'validateOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'updateNotifications' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_admins = new Google_Service_MyBusiness_AccountsAdmins_Resource(
        $this,
        $this->serviceName,
        'admins',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v4/{+parent}/admins',
              'httpMethod' => 'POST',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v4/{+parent}/admins',
              'httpMethod' => 'GET',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_invitations = new Google_Service_MyBusiness_AccountsInvitations_Resource(
        $this,
        $this->serviceName,
        'invitations',
        array(
          'methods' => array(
            'accept' => array(
              'path' => 'v4/{+name}:accept',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'decline' => array(
              'path' => 'v4/{+name}:decline',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v4/{+parent}/invitations',
              'httpMethod' => 'GET',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'targetType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_locations = new Google_Service_MyBusiness_AccountsLocations_Resource(
        $this,
        $this->serviceName,
        'locations',
        array(
          'methods' => array(
            'associate' => array(
              'path' => 'v4/{+name}:associate',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'batchGet' => array(
              'path' => 'v4/{+name}/locations:batchGet',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'batchGetReviews' => array(
              'path' => 'v4/{+name}/locations:batchGetReviews',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'clearAssociation' => array(
              'path' => 'v4/{+name}:clearAssociation',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'create' => array(
              'path' => 'v4/{+parent}/locations',
              'httpMethod' => 'POST',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'validateOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'requestId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'delete' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'fetchVerificationOptions' => array(
              'path' => 'v4/{+name}:fetchVerificationOptions',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'findMatches' => array(
              'path' => 'v4/{+name}:findMatches',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'getFoodMenus' => array(
              'path' => 'v4/{+name}/foodMenus',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'readMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'getGoogleUpdated' => array(
              'path' => 'v4/{+name}:googleUpdated',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'getHealthProviderAttributes' => array(
              'path' => 'v4/{+name}/healthProviderAttributes',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'languageCode' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'getLodging' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'readMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'getServiceList' => array(
              'path' => 'v4/{+name}/serviceList',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v4/{+parent}/locations',
              'httpMethod' => 'GET',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'filter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'languageCode' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'updateMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'validateOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'attributeMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'reportInsights' => array(
              'path' => 'v4/{+name}/locations:reportInsights',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'transfer' => array(
              'path' => 'v4/{+name}:transfer',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'updateFoodMenus' => array(
              'path' => 'v4/{+name}/foodMenus',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'updateMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'updateHealthProviderAttributes' => array(
              'path' => 'v4/{+name}/healthProviderAttributes',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'updateMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'updateLodging' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'updateMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'updateServiceList' => array(
              'path' => 'v4/{+name}/serviceList',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'updateMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'verify' => array(
              'path' => 'v4/{+name}:verify',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_locations_admins = new Google_Service_MyBusiness_AccountsLocationsAdmins_Resource(
        $this,
        $this->serviceName,
        'admins',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v4/{+parent}/admins',
              'httpMethod' => 'POST',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v4/{+parent}/admins',
              'httpMethod' => 'GET',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_locations_followers = new Google_Service_MyBusiness_AccountsLocationsFollowers_Resource(
        $this,
        $this->serviceName,
        'followers',
        array(
          'methods' => array(
            'getMetadata' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_locations_insuranceNetworks = new Google_Service_MyBusiness_AccountsLocationsInsuranceNetworks_Resource(
        $this,
        $this->serviceName,
        'insuranceNetworks',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v4/{+parent}/insuranceNetworks',
              'httpMethod' => 'GET',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'languageCode' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_locations_localPosts = new Google_Service_MyBusiness_AccountsLocationsLocalPosts_Resource(
        $this,
        $this->serviceName,
        'localPosts',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v4/{+parent}/localPosts',
              'httpMethod' => 'POST',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v4/{+parent}/localPosts',
              'httpMethod' => 'GET',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'updateMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'reportInsights' => array(
              'path' => 'v4/{+name}/localPosts:reportInsights',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_locations_lodging = new Google_Service_MyBusiness_AccountsLocationsLodging_Resource(
        $this,
        $this->serviceName,
        'lodging',
        array(
          'methods' => array(
            'getGoogleUpdated' => array(
              'path' => 'v4/{+name}:getGoogleUpdated',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'readMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_locations_media = new Google_Service_MyBusiness_AccountsLocationsMedia_Resource(
        $this,
        $this->serviceName,
        'media',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v4/{+parent}/media',
              'httpMethod' => 'POST',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v4/{+parent}/media',
              'httpMethod' => 'GET',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'updateMask' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'startUpload' => array(
              'path' => 'v4/{+parent}/media:startUpload',
              'httpMethod' => 'POST',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_locations_media_customers = new Google_Service_MyBusiness_AccountsLocationsMediaCustomers_Resource(
        $this,
        $this->serviceName,
        'customers',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v4/{+parent}/media/customers',
              'httpMethod' => 'GET',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_locations_questions = new Google_Service_MyBusiness_AccountsLocationsQuestions_Resource(
        $this,
        $this->serviceName,
        'questions',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v4/{+parent}/questions',
              'httpMethod' => 'POST',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v4/{+parent}/questions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'answersPerQuestion' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'filter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_locations_questions_answers = new Google_Service_MyBusiness_AccountsLocationsQuestionsAnswers_Resource(
        $this,
        $this->serviceName,
        'answers',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'v4/{+parent}/answers:delete',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v4/{+parent}/answers',
              'httpMethod' => 'GET',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'upsert' => array(
              'path' => 'v4/{+parent}/answers:upsert',
              'httpMethod' => 'POST',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_locations_reviews = new Google_Service_MyBusiness_AccountsLocationsReviews_Resource(
        $this,
        $this->serviceName,
        'reviews',
        array(
          'methods' => array(
            'deleteReply' => array(
              'path' => 'v4/{+name}/reply',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v4/{+parent}/reviews',
              'httpMethod' => 'GET',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'updateReply' => array(
              'path' => 'v4/{+name}/reply',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->accounts_locations_verifications = new Google_Service_MyBusiness_AccountsLocationsVerifications_Resource(
        $this,
        $this->serviceName,
        'verifications',
        array(
          'methods' => array(
            'complete' => array(
              'path' => 'v4/{+name}:complete',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'v4/{+parent}/verifications',
              'httpMethod' => 'GET',
              'parameters' => array(
                'parent' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->attributes = new Google_Service_MyBusiness_Attributes_Resource(
        $this,
        $this->serviceName,
        'attributes',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v4/attributes',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'categoryId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'country' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'languageCode' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->categories = new Google_Service_MyBusiness_Categories_Resource(
        $this,
        $this->serviceName,
        'categories',
        array(
          'methods' => array(
            'batchGet' => array(
              'path' => 'v4/categories:batchGet',
              'httpMethod' => 'GET',
              'parameters' => array(
                'languageCode' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'categoryIds' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'regionCode' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'view' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'v4/categories',
              'httpMethod' => 'GET',
              'parameters' => array(
                'regionCode' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'languageCode' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'searchTerm' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'view' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->chains = new Google_Service_MyBusiness_Chains_Resource(
        $this,
        $this->serviceName,
        'chains',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'v4/{+name}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'search' => array(
              'path' => 'v4/chains:search',
              'httpMethod' => 'GET',
              'parameters' => array(
                'chainDisplayName' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'resultCount' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->googleLocations = new Google_Service_MyBusiness_GoogleLocations_Resource(
        $this,
        $this->serviceName,
        'googleLocations',
        array(
          'methods' => array(
            'report' => array(
              'path' => 'v4/{+name}:report',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'search' => array(
              'path' => 'v4/googleLocations:search',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
  }
}


/**
 * The "accounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $accounts = $mybusinessService->accounts;
 *  </code>
 */
class Google_Service_MyBusiness_Accounts_Resource extends Google_Service_Resource
{

  /**
   * Creates an account with the specified name and type under the given parent. -
   * Personal accounts and Organizations cannot be created. - User Groups cannot
   * be created with a Personal account as primary owner. - Location Groups cannot
   * be created with a primary owner of a Personal account if the Personal account
   * is in an Organization. - Location Groups cannot own Location Groups.
   * (accounts.create)
   *
   * @param Google_Account $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string primaryOwner The resource name of the account which will be
   * the primary owner of the account being created. It should be of the form
   * `accounts/{account_id}/`.
   * @return Google_Service_MyBusiness_Account
   */
  public function create(Google_Service_MyBusiness_Account $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_MyBusiness_Account");
  }

  /**
   * Clears the pubsub notification settings for the account.
   * (accounts.deleteNotifications)
   *
   * @param string $name The resource name for the notification settings to be
   * cleared.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function deleteNotifications($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('deleteNotifications', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Generates an account number for this account. The account number is not
   * provisioned when an account is created. Use this request to create an account
   * number when it is required. (accounts.generateAccountNumber)
   *
   * @param string $name The name of the account to generate an account number
   * for.
   * @param Google_GenerateAccountNumberRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Account
   */
  public function generateAccountNumber($name, Google_Service_MyBusiness_GenerateAccountNumberRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('generateAccountNumber', array($params), "Google_Service_MyBusiness_Account");
  }

  /**
   * Gets the specified account. Returns `NOT_FOUND` if the account does not exist
   * or if the caller does not have access rights to it. (accounts.get)
   *
   * @param string $name The name of the account to fetch.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Account
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_MyBusiness_Account");
  }

  /**
   * Returns the pubsub notification settings for the account.
   * (accounts.getNotifications)
   *
   * @param string $name The notification settings resource name.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Notifications
   */
  public function getNotifications($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getNotifications', array($params), "Google_Service_MyBusiness_Notifications");
  }

  /**
   * Lists all of the accounts for the authenticated user. This includes all
   * accounts that the user owns, as well as any accounts for which the user has
   * management rights. (accounts.listAccounts)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize How many accounts to fetch per page. Default is 20,
   * minimum is 2, and maximum page size is 20.
   * @opt_param string pageToken If specified, the next page of accounts is
   * retrieved. The `pageToken` is returned when a call to `accounts.list` returns
   * more results than can fit into the requested page size.
   * @opt_param string name The resource name of the account for which the list of
   * directly accessible accounts is to be retrieved. This only makes sense for
   * Organizations and User Groups. If empty, will return `ListAccounts` for the
   * authenticated user.
   * @opt_param string filter A filter constraining the accounts to return. The
   * response includes only entries that match the filter. If `filter` is empty,
   * then no constraints are applied and all accounts (paginated) are retrieved
   * for the requested account. For example, a request with the filter
   * `type=USER_GROUP` will only return user groups.
   * @return Google_Service_MyBusiness_ListAccountsResponse
   */
  public function listAccounts($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListAccountsResponse");
  }

  /**
   * List all the GoogleLocations that have been recommended to the specified GMB
   * account. Recommendations are provided for personal accounts and location
   * groups only, requests for all other account types will result in an error.
   * The recommendations for location groups are based on the locations in that
   * group. The recommendations for personal accounts are based on all of the
   * locations that the user has access to on Google My Business (which includes
   * locations they can access through location groups), and is a superset of all
   * recommendations generated for the user.
   * (accounts.listRecommendGoogleLocations)
   *
   * @param string $name Name of the account resource to fetch recommended Google
   * locations for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize How many locations to fetch per page. Default is 25,
   * minimum is 1, and maximum page size is 100.
   * @opt_param string pageToken If specified, the next page of locations is
   * retrieved.
   * @return Google_Service_MyBusiness_ListRecommendedGoogleLocationsResponse
   */
  public function listRecommendGoogleLocations($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('listRecommendGoogleLocations', array($params), "Google_Service_MyBusiness_ListRecommendedGoogleLocationsResponse");
  }

  /**
   * Updates the specified business account. Personal accounts cannot be updated
   * using this method. *Note:* The only editable field for an account is
   * `account_name`. Any other fields passed in (such as `type` or `role`) are
   * ignored. (accounts.update)
   *
   * @param string $name The name of the account to update.
   * @param Google_Account $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool validateOnly If true, the request is validated without
   * actually updating the account.
   * @return Google_Service_MyBusiness_Account
   */
  public function update($name, Google_Service_MyBusiness_Account $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_MyBusiness_Account");
  }

  /**
   * Sets the pubsub notification settings for the account informing My Business
   * which topic to send pubsub notifications for: - New reviews for locations
   * administered by the account. - Updated reviews for locations administered by
   * the account. - New `GoogleUpdates` for locations administered by the account.
   * An account will only have one notification settings resource, and only one
   * pubsub topic can be set. (accounts.updateNotifications)
   *
   * @param string $name The notification settings resource name.
   * @param Google_Notifications $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Notifications
   */
  public function updateNotifications($name, Google_Service_MyBusiness_Notifications $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateNotifications', array($params), "Google_Service_MyBusiness_Notifications");
  }
}

/**
 * The "admins" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $admins = $mybusinessService->admins;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsAdmins_Resource extends Google_Service_Resource
{

  /**
   * Invites the specified user to become an administrator for the specified
   * account. The invitee must accept the invitation in order to be granted access
   * to the account. See AcceptInvitation to programmatically accept an
   * invitation. (admins.create)
   *
   * @param string $parent The resource name of the account this admin is created
   * for.
   * @param Google_Admin $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Admin
   */
  public function create($parent, Google_Service_MyBusiness_Admin $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_MyBusiness_Admin");
  }

  /**
   * Removes the specified admin from the specified account. (admins.delete)
   *
   * @param string $name The resource name of the admin to remove from the
   * account.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Lists the admins for the specified account. (admins.listAccountsAdmins)
   *
   * @param string $parent The name of the account from which to retrieve a list
   * of admins.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_ListAccountAdminsResponse
   */
  public function listAccountsAdmins($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListAccountAdminsResponse");
  }

  /**
   * Updates the Admin for the specified Account Admin. Only the AdminRole of the
   * Admin can be updated. (admins.patch)
   *
   * @param string $name The resource name of the admin to update.
   * @param Google_Admin $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Admin
   */
  public function patch($name, Google_Service_MyBusiness_Admin $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_MyBusiness_Admin");
  }
}
/**
 * The "invitations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $invitations = $mybusinessService->invitations;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsInvitations_Resource extends Google_Service_Resource
{

  /**
   * Accepts the specified invitation. (invitations.accept)
   *
   * @param string $name The name of the invitation that is being accepted.
   * @param Google_AcceptInvitationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function accept($name, Google_Service_MyBusiness_AcceptInvitationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('accept', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Declines the specified invitation. (invitations.decline)
   *
   * @param string $name The name of the account invitation that is being
   * declined.
   * @param Google_DeclineInvitationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function decline($name, Google_Service_MyBusiness_DeclineInvitationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('decline', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Lists pending invitations for the specified account.
   * (invitations.listAccountsInvitations)
   *
   * @param string $parent The name of the account from which the list of
   * invitations is being retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string targetType Specifies which target types should appear in
   * the response.
   * @return Google_Service_MyBusiness_ListInvitationsResponse
   */
  public function listAccountsInvitations($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListInvitationsResponse");
  }
}
/**
 * The "locations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $locations = $mybusinessService->locations;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocations_Resource extends Google_Service_Resource
{

  /**
   * Associates a location to a place ID. Any previous association is overwritten.
   * This operation is only valid if the location is unverified. The association
   * must be valid, that is, it appears in the list of `FindMatchingLocations`.
   * (locations.associate)
   *
   * @param string $name The resource name of the location to associate.
   * @param Google_AssociateLocationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function associate($name, Google_Service_MyBusiness_AssociateLocationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('associate', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Gets all of the specified locations in the given account.
   * (locations.batchGet)
   *
   * @param string $name The name of the account from which to fetch locations.
   * @param Google_BatchGetLocationsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_BatchGetLocationsResponse
   */
  public function batchGet($name, Google_Service_MyBusiness_BatchGetLocationsRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchGet', array($params), "Google_Service_MyBusiness_BatchGetLocationsResponse");
  }

  /**
   * Returns the paginated list of reviews for all specified locations. This
   * operation is only valid if the specified locations are verified. *Note:*
   * Reviews are limited to a batch size of 200 `location_names` per call.
   * (locations.batchGetReviews)
   *
   * @param string $name The name of the account from which to retrieve a list of
   * reviews across multiple locations.
   * @param Google_BatchGetReviewsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_BatchGetReviewsResponse
   */
  public function batchGetReviews($name, Google_Service_MyBusiness_BatchGetReviewsRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchGetReviews', array($params), "Google_Service_MyBusiness_BatchGetReviewsResponse");
  }

  /**
   * Clears an association between a location and its place ID. This operation is
   * only valid if the location is unverified. (locations.clearAssociation)
   *
   * @param string $name The resource name of the location to disassociate.
   * @param Google_ClearLocationAssociationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function clearAssociation($name, Google_Service_MyBusiness_ClearLocationAssociationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('clearAssociation', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Creates a new location owned by the specified account, and returns it.
   * (locations.create)
   *
   * @param string $parent The name of the account in which to create this
   * location.
   * @param Google_Location $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool validateOnly If true, the request is validated without
   * actually creating the location.
   * @opt_param string requestId A unique request ID for the server to detect
   * duplicated requests. We recommend using UUIDs. Max length is 50 characters.
   * @return Google_Service_MyBusiness_Location
   */
  public function create($parent, Google_Service_MyBusiness_Location $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_MyBusiness_Location");
  }

  /**
   * Deletes a location. *Note:* If this location cannot be deleted using the API
   * as marked in the LocationState, use the [Google My
   * Business](https://business.google.com/manage/) website. Returns `NOT_FOUND`
   * if the location does not exist. (locations.delete)
   *
   * @param string $name The name of the location to delete.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Reports all eligible verification options for a location in a specific
   * language. (locations.fetchVerificationOptions)
   *
   * @param string $name Resource name of the location to verify.
   * @param Google_FetchVerificationOptionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_FetchVerificationOptionsResponse
   */
  public function fetchVerificationOptions($name, Google_Service_MyBusiness_FetchVerificationOptionsRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('fetchVerificationOptions', array($params), "Google_Service_MyBusiness_FetchVerificationOptionsResponse");
  }

  /**
   * Finds all of the possible locations that are a match to the specified
   * location. This operation is only valid if the location is unverified.
   * (locations.findMatches)
   *
   * @param string $name The resource name of the location to find matches for.
   * @param Google_FindMatchingLocationsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_FindMatchingLocationsResponse
   */
  public function findMatches($name, Google_Service_MyBusiness_FindMatchingLocationsRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('findMatches', array($params), "Google_Service_MyBusiness_FindMatchingLocationsResponse");
  }

  /**
   * Gets the specified location. Returns `NOT_FOUND` if the location does not
   * exist. (locations.get)
   *
   * @param string $name The name of the location to fetch.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Location
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_MyBusiness_Location");
  }

  /**
   * Returns the food menus of a specific location. Only call this if
   * location.location_state.can_have_food_menu is true. (locations.getFoodMenus)
   *
   * @param string $name Required. Google identifier for this location in the
   * form: `accounts/{account_id}/locations/{location_id}/foodMenus`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string readMask Optional. The specific fields to return. If no
   * mask is specified, then it returns the full FoodMenu (same as "*"). Repeated
   * field items can not be individually specified. For example: "name" and
   * "menus" are valid masks, while "menus.sections" is invalid.
   * @return Google_Service_MyBusiness_FoodMenus
   */
  public function getFoodMenus($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getFoodMenus', array($params), "Google_Service_MyBusiness_FoodMenus");
  }

  /**
   * Gets the Google-updated version of the specified location. Returns
   * `NOT_FOUND` if the location does not exist. (locations.getGoogleUpdated)
   *
   * @param string $name The name of the location to fetch.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_GoogleUpdatedLocation
   */
  public function getGoogleUpdated($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getGoogleUpdated', array($params), "Google_Service_MyBusiness_GoogleUpdatedLocation");
  }

  /**
   * Returns the Health provider attributes of a specific location.
   * (locations.getHealthProviderAttributes)
   *
   * @param string $name Required. Google identifier for this location in the
   * form: accounts/{account_id}/locations/{location_id}/healthProviderAttributes
   * @param array $optParams Optional parameters.
   *
   * @opt_param string languageCode Optional. The BCP 47 code for the language. If
   * a language code is not provided, it defaults to English. Right now only 'en'
   * is supported.
   * @return Google_Service_MyBusiness_HealthProviderAttributes
   */
  public function getHealthProviderAttributes($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getHealthProviderAttributes', array($params), "Google_Service_MyBusiness_HealthProviderAttributes");
  }

  /**
   * Returns the Lodging of a specific location. (locations.getLodging)
   *
   * @param string $name Required. Google identifier for this location in the
   * form: `accounts/{account_id}/locations/{location_id}/lodging`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string readMask Optional. The specific fields to return. If no
   * mask is specified, then it returns the full Lodging (same as "*"). Repeated
   * field items cannot be individually specified.
   * @return Google_Service_MyBusiness_Lodging
   */
  public function getLodging($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getLodging', array($params), "Google_Service_MyBusiness_Lodging");
  }

  /**
   * Get the specified service list of a location. (locations.getServiceList)
   *
   * @param string $name Required. Google identifier for this location in the
   * form: `accounts/{account_id}/locations/{location_id}/servicelist`
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_ServiceList
   */
  public function getServiceList($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getServiceList', array($params), "Google_Service_MyBusiness_ServiceList");
  }

  /**
   * Lists the locations for the specified account.
   * (locations.listAccountsLocations)
   *
   * @param string $parent The name of the account to fetch locations from. If the
   * Account is of AccountType PERSONAL, only Locations that are directly owned by
   * the Account are returned, otherwise it will return all accessible locations
   * from the Account, either directly or indirectly.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize How many locations to fetch per page. Default is 100,
   * minimum is 1, and maximum page size is 100.
   * @opt_param string pageToken If specified, it fetches the next `page` of
   * locations. The page token is returned by previous calls to `ListLocations`
   * when there were more locations than could fit in the requested page size.
   * @opt_param string filter A filter constraining the locations to return. The
   * response includes only entries that match the filter. If `filter` is empty,
   * then constraints are applied and all locations (paginated) are retrieved for
   * the requested account. For more information about valid fields and example
   * usage, see [Work with Location Data Guide](https://developers.google.com/my-
   * business/content/location-data#filter_results_when_you_list_locations).
   * @opt_param string languageCode The BCP 47 code of language to get display
   * location properties in. If this language is not available, they will be
   * provided in the language of the location. If neither is available, they will
   * be provided in English. Deprecated. After August 15th, 2020, this field will
   * no longer be applied. Instead, the language of the location will always be
   * used.
   * @opt_param string orderBy Sorting order for the request. Multiple fields
   * should be comma-separated, following SQL syntax. The default sorting order is
   * ascending. To specify descending order, a suffix " desc" should be added.
   * Valid fields to order_by are location_name and store_code. For example:
   * "location_name, store_code desc" or "location_name" or "store_code desc"
   * @return Google_Service_MyBusiness_ListLocationsResponse
   */
  public function listAccountsLocations($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListLocationsResponse");
  }

  /**
   * Updates the specified location. Photos are only allowed on a location that
   * has a Google+ page. Returns `NOT_FOUND` if the location does not exist.
   * (locations.patch)
   *
   * @param string $name The name of the location to update.
   * @param Google_Location $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask The specific fields to update. If no mask is
   * specified, then this is treated as a full update and all fields are set to
   * the values passed in, which may include unsetting empty fields in the
   * request.
   * @opt_param bool validateOnly If true, the request is validated without
   * actually updating the location.
   * @opt_param string attributeMask The IDs of the attributes to update. Only
   * attributes noted in the mask will be updated. If an attribute is present in
   * the mask and not in the location, it will be removed. An empty mask will
   * update all attributes. Whenever this field is set, the update_mask should
   * include attributes as one of the fields to update.
   * @return Google_Service_MyBusiness_Location
   */
  public function patch($name, Google_Service_MyBusiness_Location $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_MyBusiness_Location");
  }

  /**
   * Returns a report containing insights on one or more metrics by location.
   * *Note:* Insight reports are limited to a batch size of 10 `location_names`
   * per call. (locations.reportInsights)
   *
   * @param string $name The account resource name.
   * @param Google_ReportLocationInsightsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_ReportLocationInsightsResponse
   */
  public function reportInsights($name, Google_Service_MyBusiness_ReportLocationInsightsRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('reportInsights', array($params), "Google_Service_MyBusiness_ReportLocationInsightsResponse");
  }

  /**
   * Moves a location from an account that the user owns to another account that
   * the same user administers. The user must be an owner of the account the
   * location is currently associated with and must also be at least a manager of
   * the destination account. Returns the Location with its new resource name.
   * (locations.transfer)
   *
   * @param string $name The name of the location to transfer.
   * @param Google_TransferLocationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Location
   */
  public function transfer($name, Google_Service_MyBusiness_TransferLocationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('transfer', array($params), "Google_Service_MyBusiness_Location");
  }

  /**
   * Updates the food menus of a specific location. Only call this if
   * location.location_state.can_have_food_menu is true.
   * (locations.updateFoodMenus)
   *
   * @param string $name Required. Google identifier for this location in the
   * form: `accounts/{account_id}/locations/{location_id}/foodMenus`
   * @param Google_FoodMenus $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The specific fields to update. If no
   * mask is specified, then this is treated as a full update and all fields are
   * set to the values passed in, which may include unsetting empty fields in the
   * request. Repeated field items can not be individually updated. Note: "name"
   * of FoodMenus is the resource identifier which is not updatable.
   * @return Google_Service_MyBusiness_FoodMenus
   */
  public function updateFoodMenus($name, Google_Service_MyBusiness_FoodMenus $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateFoodMenus', array($params), "Google_Service_MyBusiness_FoodMenus");
  }

  /**
   * Updates the Health provider attributes of a specific location.
   * (locations.updateHealthProviderAttributes)
   *
   * @param string $name Required. Google identifier for this location in the
   * form:
   * `accounts/{account_id}/locations/{location_id}/healthProviderAttributes`
   * @param Google_HealthProviderAttributes $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The specific fields to update. If no
   * mask is specified, then this is treated as a full update and all fields are
   * set to the values passed in, which may include unsetting empty fields in the
   * request. In V1, there is only the insurance_networks field to update. More
   * attributes will be supported later.
   * @return Google_Service_MyBusiness_HealthProviderAttributes
   */
  public function updateHealthProviderAttributes($name, Google_Service_MyBusiness_HealthProviderAttributes $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateHealthProviderAttributes', array($params), "Google_Service_MyBusiness_HealthProviderAttributes");
  }

  /**
   * Updates the Lodging of a specific location. (locations.updateLodging)
   *
   * @param string $name Required. Google identifier for this location in the
   * form: `accounts/{account_id}/locations/{location_id}/lodging`
   * @param Google_Lodging $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The specific fields to update. If no
   * mask is specified, then this is treated as a full update (same as "*") and
   * all fields are set to the values passed in, which may include unsetting empty
   * fields in the request. Repeated field items cannot be individually updated.
   * @return Google_Service_MyBusiness_Lodging
   */
  public function updateLodging($name, Google_Service_MyBusiness_Lodging $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateLodging', array($params), "Google_Service_MyBusiness_Lodging");
  }

  /**
   * Updates the specified service list of a location.
   * (locations.updateServiceList)
   *
   * @param string $name Required. Google identifier for this location in the
   * form: `accounts/{account_id}/locations/{location_id}/serviceList`
   * @param Google_ServiceList $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The specific fields to update. If no
   * mask is specified, then this is treated as a full update and all fields are
   * set to the values passed in, which may include unsetting empty fields in the
   * request. Repeated field items can not be individually updated.
   * @return Google_Service_MyBusiness_ServiceList
   */
  public function updateServiceList($name, Google_Service_MyBusiness_ServiceList $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateServiceList', array($params), "Google_Service_MyBusiness_ServiceList");
  }

  /**
   * Starts the verification process for a location. (locations.verify)
   *
   * @param string $name Resource name of the location to verify.
   * @param Google_VerifyLocationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_VerifyLocationResponse
   */
  public function verify($name, Google_Service_MyBusiness_VerifyLocationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('verify', array($params), "Google_Service_MyBusiness_VerifyLocationResponse");
  }
}

/**
 * The "admins" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $admins = $mybusinessService->admins;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsAdmins_Resource extends Google_Service_Resource
{

  /**
   * Invites the specified user to become an administrator for the specified
   * location. The invitee must accept the invitation in order to be granted
   * access to the location. See AcceptInvitation to programmatically accept an
   * invitation. (admins.create)
   *
   * @param string $parent The resource name of the location this admin is created
   * for.
   * @param Google_Admin $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Admin
   */
  public function create($parent, Google_Service_MyBusiness_Admin $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_MyBusiness_Admin");
  }

  /**
   * Removes the specified admin as a manager of the specified location.
   * (admins.delete)
   *
   * @param string $name The resource name of the admin to remove from the
   * location.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Lists all of the admins for the specified location.
   * (admins.listAccountsLocationsAdmins)
   *
   * @param string $parent The name of the location to list admins of.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_ListLocationAdminsResponse
   */
  public function listAccountsLocationsAdmins($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListLocationAdminsResponse");
  }

  /**
   * Updates the Admin for the specified Location Admin. Only the AdminRole of the
   * Admin can be updated. (admins.patch)
   *
   * @param string $name The resource name of the admin to update.
   * @param Google_Admin $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Admin
   */
  public function patch($name, Google_Service_MyBusiness_Admin $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_MyBusiness_Admin");
  }
}
/**
 * The "followers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $followers = $mybusinessService->followers;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsFollowers_Resource extends Google_Service_Resource
{

  /**
   * Get the followers settings for a location. NOT_FOUND is returned if either
   * the account or the location doesn't exist. PRECONDITION_FAILED is returned if
   * the location is not verified nor connected to Maps. (followers.getMetadata)
   *
   * @param string $name The resource name of the location's followers metadata.
   * accounts/{account_id}/locations/{location_id}/followers/metadata
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_FollowersMetadata
   */
  public function getMetadata($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getMetadata', array($params), "Google_Service_MyBusiness_FollowersMetadata");
  }
}
/**
 * The "insuranceNetworks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $insuranceNetworks = $mybusinessService->insuranceNetworks;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsInsuranceNetworks_Resource extends Google_Service_Resource
{

  /**
   * Returns a list of all insurance networks supported by Google.
   * (insuranceNetworks.listAccountsLocationsInsuranceNetworks)
   *
   * @param string $parent Required. The name of the location whose insurance
   * networks will be listed. The name is in the form:
   * accounts/{account_id}/locations/{location_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string languageCode Optional. The BCP 47 code for the language. If
   * a language code is not provided, it defaults to English. Right now only 'en'
   * is supported.
   * @opt_param int pageSize How many insurance networks to return per page. The
   * default value is 5000. Maximum page size is 10000.
   * @opt_param string pageToken If specified, returns the next page of insurance
   * networks.
   * @return Google_Service_MyBusiness_ListInsuranceNetworksResponse
   */
  public function listAccountsLocationsInsuranceNetworks($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListInsuranceNetworksResponse");
  }
}
/**
 * The "localPosts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $localPosts = $mybusinessService->localPosts;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsLocalPosts_Resource extends Google_Service_Resource
{

  /**
   * Creates a new local post associated with the specified location, and returns
   * it. (localPosts.create)
   *
   * @param string $parent The name of the location in which to create this local
   * post.
   * @param Google_LocalPost $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_LocalPost
   */
  public function create($parent, Google_Service_MyBusiness_LocalPost $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_MyBusiness_LocalPost");
  }

  /**
   * Deletes a local post. Returns `NOT_FOUND` if the local post does not exist.
   * (localPosts.delete)
   *
   * @param string $name The name of the local post to delete.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Gets the specified local post. Returns `NOT_FOUND` if the local post does not
   * exist. (localPosts.get)
   *
   * @param string $name The name of the local post to fetch.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_LocalPost
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_MyBusiness_LocalPost");
  }

  /**
   * Returns a list of local posts associated with a location.
   * (localPosts.listAccountsLocationsLocalPosts)
   *
   * @param string $parent The name of the location whose local posts will be
   * listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize How many local posts to return per page. Default of
   * 20. The minimum is 1, and maximum page size is 100.
   * @opt_param string pageToken If specified, returns the next page of local
   * posts.
   * @return Google_Service_MyBusiness_ListLocalPostsResponse
   */
  public function listAccountsLocationsLocalPosts($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListLocalPostsResponse");
  }

  /**
   * Updates the specified local post and returns the updated local post.
   * (localPosts.patch)
   *
   * @param string $name The name of the local post to update.
   * @param Google_LocalPost $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask The specific fields to update. You must specify
   * each field that is being updated in the mask.
   * @return Google_Service_MyBusiness_LocalPost
   */
  public function patch($name, Google_Service_MyBusiness_LocalPost $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_MyBusiness_LocalPost");
  }

  /**
   * Returns insights for a set of local posts associated with a single listing.
   * Which metrics and how they are reported are options specified in the request
   * proto. *Note:* Insight reports are limited to 100 `local_post_names` per
   * call. (localPosts.reportInsights)
   *
   * @param string $name Required. The name of the location for which to fetch
   * insights.
   * @param Google_ReportLocalPostInsightsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_ReportLocalPostInsightsResponse
   */
  public function reportInsights($name, Google_Service_MyBusiness_ReportLocalPostInsightsRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('reportInsights', array($params), "Google_Service_MyBusiness_ReportLocalPostInsightsResponse");
  }
}
/**
 * The "lodging" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $lodging = $mybusinessService->lodging;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsLodging_Resource extends Google_Service_Resource
{

  /**
   * Returns the Google updated Lodging of a specific location.
   * (lodging.getGoogleUpdated)
   *
   * @param string $name Required. Google identifier for this location in the
   * form: `accounts/{account_id}/locations/{location_id}/lodging`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string readMask Optional. The specific fields to return. If no
   * mask is specified, then it returns the full Lodging (same as "*"). Repeated
   * field items cannot be individually specified.
   * @return Google_Service_MyBusiness_GetGoogleUpdatedLodgingResponse
   */
  public function getGoogleUpdated($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('getGoogleUpdated', array($params), "Google_Service_MyBusiness_GetGoogleUpdatedLodgingResponse");
  }
}
/**
 * The "media" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $media = $mybusinessService->media;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsMedia_Resource extends Google_Service_Resource
{

  /**
   * Creates a new media item for the location. (media.create)
   *
   * @param string $parent The resource name of the location where this media item
   * will be created.
   * @param Google_MediaItem $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MediaItem
   */
  public function create($parent, Google_Service_MyBusiness_MediaItem $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_MyBusiness_MediaItem");
  }

  /**
   * Deletes the specified media item. (media.delete)
   *
   * @param string $name The name of the media item to be deleted.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Returns metadata for the requested media item. (media.get)
   *
   * @param string $name The name of the requested media item.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MediaItem
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_MyBusiness_MediaItem");
  }

  /**
   * Returns a list of media items associated with a location.
   * (media.listAccountsLocationsMedia)
   *
   * @param string $parent The name of the location whose media items will be
   * listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize How many media items to return per page. The default
   * value is 100, which is also the maximum supported number of media items able
   * to be added to a location with the My Business API. Maximum page size is
   * 2500.
   * @opt_param string pageToken If specified, returns the next page of media
   * items.
   * @return Google_Service_MyBusiness_ListMediaItemsResponse
   */
  public function listAccountsLocationsMedia($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListMediaItemsResponse");
  }

  /**
   * Updates metadata of the specified media item. This can only be used to update
   * the Category of a media item, with the exception that the new category cannot
   * be COVER or PROFILE. (media.patch)
   *
   * @param string $name The name of the media item to be updated.
   * @param Google_MediaItem $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask The specific fields to update. If no mask is
   * specified, then this is treated as a full update and all editable fields are
   * set to the values passed in.
   * @return Google_Service_MyBusiness_MediaItem
   */
  public function patch($name, Google_Service_MyBusiness_MediaItem $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_MyBusiness_MediaItem");
  }

  /**
   * Generates a `MediaItemDataRef` for media item uploading. (media.startUpload)
   *
   * @param string $parent The resource name of the location this media item is to
   * be added to.
   * @param Google_StartUploadMediaItemDataRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MediaItemDataRef
   */
  public function startUpload($parent, Google_Service_MyBusiness_StartUploadMediaItemDataRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('startUpload', array($params), "Google_Service_MyBusiness_MediaItemDataRef");
  }
}

/**
 * The "customers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $customers = $mybusinessService->customers;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsMediaCustomers_Resource extends Google_Service_Resource
{

  /**
   * Returns metadata for the requested customer media item. (customers.get)
   *
   * @param string $name The resource name of the requested customer media item.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MediaItem
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_MyBusiness_MediaItem");
  }

  /**
   * Returns a list of media items associated with a location that have been
   * contributed by customers. (customers.listAccountsLocationsMediaCustomers)
   *
   * @param string $parent The name of the location whose customer media items
   * will be listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize How many media items to return per page. The default
   * value is 100, the maximum supported page size is 200.
   * @opt_param string pageToken If specified, returns the next page of media
   * items.
   * @return Google_Service_MyBusiness_ListCustomerMediaItemsResponse
   */
  public function listAccountsLocationsMediaCustomers($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListCustomerMediaItemsResponse");
  }
}
/**
 * The "questions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $questions = $mybusinessService->questions;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsQuestions_Resource extends Google_Service_Resource
{

  /**
   * Adds a question for the specified location. (questions.create)
   *
   * @param string $parent The name of the location to write a question for.
   * @param Google_Question $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Question
   */
  public function create($parent, Google_Service_MyBusiness_Question $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_MyBusiness_Question");
  }

  /**
   * Deletes a specific question written by the current user. (questions.delete)
   *
   * @param string $name The name of the question to delete.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function delete($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Returns the paginated list of questions and some of its answers for a
   * specified location. (questions.listAccountsLocationsQuestions)
   *
   * @param string $parent The name of the location to fetch questions for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize How many questions to fetch per page. The default and
   * maximum `page_size` values are 10.
   * @opt_param string pageToken If specified, the next page of questions is
   * retrieved.
   * @opt_param int answersPerQuestion How many answers to fetch per question. The
   * default and maximum `answers_per_question` values are 10.
   * @opt_param string filter A filter constraining the questions to return. The
   * only filter currently supported is "ignore_answered=true"
   * @opt_param string orderBy The order to return the questions. Valid options
   * include 'update_time desc' and 'upvote_count desc', which will return the
   * questions sorted descendingly by the requested field. The default sort order
   * is 'update_time desc'.
   * @return Google_Service_MyBusiness_ListQuestionsResponse
   */
  public function listAccountsLocationsQuestions($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListQuestionsResponse");
  }

  /**
   * Updates a specific question written by the current user. (questions.patch)
   *
   * @param string $name The name of the question to update.
   * @param Google_Question $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Question
   */
  public function patch($name, Google_Service_MyBusiness_Question $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_MyBusiness_Question");
  }
}

/**
 * The "answers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $answers = $mybusinessService->answers;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsQuestionsAnswers_Resource extends Google_Service_Resource
{

  /**
   * Deletes the answer written by the current user to a question.
   * (answers.delete)
   *
   * @param string $parent The name of the question to delete an answer for.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function delete($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Returns the paginated list of answers for a specified question.
   * (answers.listAccountsLocationsQuestionsAnswers)
   *
   * @param string $parent The name of the question to fetch answers for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize How many answers to fetch per page. The default and
   * maximum `page_size` values are 10.
   * @opt_param string pageToken If specified, the next page of answers is
   * retrieved.
   * @opt_param string orderBy The order to return the answers. Valid options
   * include 'update_time desc' and 'upvote_count desc', which will return the
   * answers sorted descendingly by the requested field. The default sort order is
   * 'update_time desc'.
   * @return Google_Service_MyBusiness_ListAnswersResponse
   */
  public function listAccountsLocationsQuestionsAnswers($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListAnswersResponse");
  }

  /**
   * Creates an answer or updates the existing answer written by the user for the
   * specified question. A user can only create one answer per question.
   * (answers.upsert)
   *
   * @param string $parent The name of the question to write an answer for.
   * @param Google_UpsertAnswerRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Answer
   */
  public function upsert($parent, Google_Service_MyBusiness_UpsertAnswerRequest $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('upsert', array($params), "Google_Service_MyBusiness_Answer");
  }
}
/**
 * The "reviews" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $reviews = $mybusinessService->reviews;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsReviews_Resource extends Google_Service_Resource
{

  /**
   * Deletes the response to the specified review. This operation is only valid if
   * the specified location is verified. (reviews.deleteReply)
   *
   * @param string $name The name of the review reply to delete.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function deleteReply($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('deleteReply', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Returns the specified review. This operation is only valid if the specified
   * location is verified. Returns `NOT_FOUND` if the review does not exist, or
   * has been deleted. (reviews.get)
   *
   * @param string $name The name of the review to fetch.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Review
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_MyBusiness_Review");
  }

  /**
   * Returns the paginated list of reviews for the specified location. This
   * operation is only valid if the specified location is verified.
   * (reviews.listAccountsLocationsReviews)
   *
   * @param string $parent The name of the location to fetch reviews for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize How many reviews to fetch per page. The maximum
   * `page_size` is 50.
   * @opt_param string pageToken If specified, it fetches the next page of
   * reviews.
   * @opt_param string orderBy Specifies the field to sort reviews by. If
   * unspecified, the order of reviews returned will default to `update_time
   * desc`. Valid orders to sort by are `rating`, `rating desc` and `update_time
   * desc`.
   * @return Google_Service_MyBusiness_ListReviewsResponse
   */
  public function listAccountsLocationsReviews($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListReviewsResponse");
  }

  /**
   * Updates the reply to the specified review. A reply is created if one does not
   * exist. This operation is only valid if the specified location is verified.
   * (reviews.updateReply)
   *
   * @param string $name The name of the review to respond to.
   * @param Google_ReviewReply $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_ReviewReply
   */
  public function updateReply($name, Google_Service_MyBusiness_ReviewReply $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateReply', array($params), "Google_Service_MyBusiness_ReviewReply");
  }
}
/**
 * The "verifications" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $verifications = $mybusinessService->verifications;
 *  </code>
 */
class Google_Service_MyBusiness_AccountsLocationsVerifications_Resource extends Google_Service_Resource
{

  /**
   * Completes a `PENDING` verification. It is only necessary for non `AUTO`
   * verification methods. `AUTO` verification request is instantly `VERIFIED`
   * upon creation. (verifications.complete)
   *
   * @param string $name Resource name of the verification to complete.
   * @param Google_CompleteVerificationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_CompleteVerificationResponse
   */
  public function complete($name, Google_Service_MyBusiness_CompleteVerificationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('complete', array($params), "Google_Service_MyBusiness_CompleteVerificationResponse");
  }

  /**
   * List verifications of a location, ordered by create time.
   * (verifications.listAccountsLocationsVerifications)
   *
   * @param string $parent Resource name of the location that verification
   * requests belong to.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize How many verification to include per page. If not
   * set, return all.
   * @opt_param string pageToken If specified, returns the next page of
   * verifications.
   * @return Google_Service_MyBusiness_ListVerificationsResponse
   */
  public function listAccountsLocationsVerifications($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListVerificationsResponse");
  }
}

/**
 * The "attributes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $attributes = $mybusinessService->attributes;
 *  </code>
 */
class Google_Service_MyBusiness_Attributes_Resource extends Google_Service_Resource
{

  /**
   * Returns the list of available attributes that would be available for a
   * location with the given primary category and country.
   * (attributes.listAttributes)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string name Resource name of the location to look up available
   * attributes.
   * @opt_param string categoryId The primary category stable ID to find available
   * attributes.
   * @opt_param string country The ISO 3166-1 alpha-2 country code to find
   * available attributes.
   * @opt_param string languageCode The BCP 47 code of language to get attribute
   * display names in. If this language is not available, they will be provided in
   * English.
   * @opt_param int pageSize How many attributes to include per page. Default is
   * 200, minimum is 1.
   * @opt_param string pageToken If specified, the next page of attribute metadata
   * is retrieved. The `pageToken` is returned when a call to `attributes.list`
   * returns more results than can fit into the requested page size.
   * @return Google_Service_MyBusiness_ListAttributeMetadataResponse
   */
  public function listAttributes($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListAttributeMetadataResponse");
  }
}

/**
 * The "categories" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $categories = $mybusinessService->categories;
 *  </code>
 */
class Google_Service_MyBusiness_Categories_Resource extends Google_Service_Resource
{

  /**
   * Returns a list of business categories for the provided language and GConcept
   * ids. (categories.batchGet)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string languageCode Required. The BCP 47 code of language that the
   * category names should be returned in.
   * @opt_param string categoryIds Required. At least one name must be set. The
   * GConcept ids the localized category names should be returned for.
   * @opt_param string regionCode Optional. The ISO 3166-1 alpha-2 country code
   * used to infer non-standard language.
   * @opt_param string view Required. Specifies which parts to the Category
   * resource should be returned in the response.
   * @return Google_Service_MyBusiness_BatchGetBusinessCategoriesResponse
   */
  public function batchGet($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('batchGet', array($params), "Google_Service_MyBusiness_BatchGetBusinessCategoriesResponse");
  }

  /**
   * Returns a list of business categories. Search will match the category name
   * but not the category ID. *Note:* Search only matches the front of a category
   * name (that is, 'food' may return 'Food Court' but not 'Fast Food
   * Restaurant'). (categories.listCategories)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string regionCode The ISO 3166-1 alpha-2 country code.
   * @opt_param string languageCode The BCP 47 code of language. If the language
   * is not available, it will default to English.
   * @opt_param string searchTerm Optional filter string from user.
   * @opt_param int pageSize How many categories to fetch per page. Default is
   * 100, minimum is 1, and maximum page size is 100.
   * @opt_param string pageToken If specified, the next page of categories will be
   * fetched.
   * @opt_param string view Optional. Specifies which parts to the Category
   * resource should be returned in the response.
   * @return Google_Service_MyBusiness_ListBusinessCategoriesResponse
   */
  public function listCategories($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_MyBusiness_ListBusinessCategoriesResponse");
  }
}

/**
 * The "chains" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $chains = $mybusinessService->chains;
 *  </code>
 */
class Google_Service_MyBusiness_Chains_Resource extends Google_Service_Resource
{

  /**
   * Gets the specified chain. Returns `NOT_FOUND` if the chain does not exist.
   * (chains.get)
   *
   * @param string $name The chain's resource name, in the format
   * `chains/{chain_place_id}`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_Chain
   */
  public function get($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_MyBusiness_Chain");
  }

  /**
   * Searches the chain based on chain name. (chains.search)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string chainDisplayName Search for a chain by its name.
   * Exact/partial/fuzzy/related queries are supported. Examples: "walmart", "wal-
   * mart", "walmmmart", "沃尔玛"
   * @opt_param int resultCount The maximum number of matched chains to return
   * from this query. The default is 10. The maximum possible value is 500.
   * @return Google_Service_MyBusiness_SearchChainsResponse
   */
  public function search($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_MyBusiness_SearchChainsResponse");
  }
}

/**
 * The "googleLocations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mybusinessService = new Google_Service_MyBusiness(...);
 *   $googleLocations = $mybusinessService->googleLocations;
 *  </code>
 */
class Google_Service_MyBusiness_GoogleLocations_Resource extends Google_Service_Resource
{

  /**
   * Report a GoogleLocation. (googleLocations.report)
   *
   * @param string $name Resource name of a [GoogleLocation], in the format
   * `googleLocations/{googleLocationId}`.
   * @param Google_ReportGoogleLocationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_MybusinessEmpty
   */
  public function report($name, Google_Service_MyBusiness_ReportGoogleLocationRequest $postBody, $optParams = array())
  {
    $params = array('name' => $name, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('report', array($params), "Google_Service_MyBusiness_MybusinessEmpty");
  }

  /**
   * Search all of the possible locations that are a match to the specified
   * request. (googleLocations.search)
   *
   * @param Google_SearchGoogleLocationsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_MyBusiness_SearchGoogleLocationsResponse
   */
  public function search(Google_Service_MyBusiness_SearchGoogleLocationsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_MyBusiness_SearchGoogleLocationsResponse");
  }
}




class Google_Service_MyBusiness_AcceptInvitationRequest extends Google_Model
{
}

class Google_Service_MyBusiness_Accessibility extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $mobilityAccessible;
  public $mobilityAccessibleElevator;
  public $mobilityAccessibleElevatorException;
  public $mobilityAccessibleException;
  public $mobilityAccessibleParking;
  public $mobilityAccessibleParkingException;
  public $mobilityAccessiblePool;
  public $mobilityAccessiblePoolException;


  public function setMobilityAccessible($mobilityAccessible)
  {
    $this->mobilityAccessible = $mobilityAccessible;
  }
  public function getMobilityAccessible()
  {
    return $this->mobilityAccessible;
  }
  public function setMobilityAccessibleElevator($mobilityAccessibleElevator)
  {
    $this->mobilityAccessibleElevator = $mobilityAccessibleElevator;
  }
  public function getMobilityAccessibleElevator()
  {
    return $this->mobilityAccessibleElevator;
  }
  public function setMobilityAccessibleElevatorException($mobilityAccessibleElevatorException)
  {
    $this->mobilityAccessibleElevatorException = $mobilityAccessibleElevatorException;
  }
  public function getMobilityAccessibleElevatorException()
  {
    return $this->mobilityAccessibleElevatorException;
  }
  public function setMobilityAccessibleException($mobilityAccessibleException)
  {
    $this->mobilityAccessibleException = $mobilityAccessibleException;
  }
  public function getMobilityAccessibleException()
  {
    return $this->mobilityAccessibleException;
  }
  public function setMobilityAccessibleParking($mobilityAccessibleParking)
  {
    $this->mobilityAccessibleParking = $mobilityAccessibleParking;
  }
  public function getMobilityAccessibleParking()
  {
    return $this->mobilityAccessibleParking;
  }
  public function setMobilityAccessibleParkingException($mobilityAccessibleParkingException)
  {
    $this->mobilityAccessibleParkingException = $mobilityAccessibleParkingException;
  }
  public function getMobilityAccessibleParkingException()
  {
    return $this->mobilityAccessibleParkingException;
  }
  public function setMobilityAccessiblePool($mobilityAccessiblePool)
  {
    $this->mobilityAccessiblePool = $mobilityAccessiblePool;
  }
  public function getMobilityAccessiblePool()
  {
    return $this->mobilityAccessiblePool;
  }
  public function setMobilityAccessiblePoolException($mobilityAccessiblePoolException)
  {
    $this->mobilityAccessiblePoolException = $mobilityAccessiblePoolException;
  }
  public function getMobilityAccessiblePoolException()
  {
    return $this->mobilityAccessiblePoolException;
  }
}

class Google_Service_MyBusiness_Account extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $accountName;
  public $accountNumber;
  public $name;
  protected $organizationInfoType = 'Google_Service_MyBusiness_OrganizationInfo';
  protected $organizationInfoDataType = '';
  public $permissionLevel;
  public $role;
  protected $stateType = 'Google_Service_MyBusiness_AccountState';
  protected $stateDataType = '';
  public $type;


  public function setAccountName($accountName)
  {
    $this->accountName = $accountName;
  }
  public function getAccountName()
  {
    return $this->accountName;
  }
  public function setAccountNumber($accountNumber)
  {
    $this->accountNumber = $accountNumber;
  }
  public function getAccountNumber()
  {
    return $this->accountNumber;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setOrganizationInfo(Google_Service_MyBusiness_OrganizationInfo $organizationInfo)
  {
    $this->organizationInfo = $organizationInfo;
  }
  public function getOrganizationInfo()
  {
    return $this->organizationInfo;
  }
  public function setPermissionLevel($permissionLevel)
  {
    $this->permissionLevel = $permissionLevel;
  }
  public function getPermissionLevel()
  {
    return $this->permissionLevel;
  }
  public function setRole($role)
  {
    $this->role = $role;
  }
  public function getRole()
  {
    return $this->role;
  }
  public function setState(Google_Service_MyBusiness_AccountState $state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class Google_Service_MyBusiness_AccountState extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $status;


  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
}

class Google_Service_MyBusiness_Activities extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $beachAccess;
  public $beachAccessException;
  public $beachFront;
  public $beachFrontException;
  public $bicycleRental;
  public $bicycleRentalException;
  public $boutiqueStores;
  public $boutiqueStoresException;
  public $casino;
  public $casinoException;
  public $freeBicycleRental;
  public $freeBicycleRentalException;
  public $freeWatercraftRental;
  public $freeWatercraftRentalException;
  public $gameRoom;
  public $gameRoomException;
  public $golf;
  public $golfException;
  public $horsebackRiding;
  public $horsebackRidingException;
  public $nightclub;
  public $nightclubException;
  public $privateBeach;
  public $privateBeachException;
  public $scuba;
  public $scubaException;
  public $snorkeling;
  public $snorkelingException;
  public $tennis;
  public $tennisException;
  public $waterSkiing;
  public $waterSkiingException;
  public $watercraftRental;
  public $watercraftRentalException;


  public function setBeachAccess($beachAccess)
  {
    $this->beachAccess = $beachAccess;
  }
  public function getBeachAccess()
  {
    return $this->beachAccess;
  }
  public function setBeachAccessException($beachAccessException)
  {
    $this->beachAccessException = $beachAccessException;
  }
  public function getBeachAccessException()
  {
    return $this->beachAccessException;
  }
  public function setBeachFront($beachFront)
  {
    $this->beachFront = $beachFront;
  }
  public function getBeachFront()
  {
    return $this->beachFront;
  }
  public function setBeachFrontException($beachFrontException)
  {
    $this->beachFrontException = $beachFrontException;
  }
  public function getBeachFrontException()
  {
    return $this->beachFrontException;
  }
  public function setBicycleRental($bicycleRental)
  {
    $this->bicycleRental = $bicycleRental;
  }
  public function getBicycleRental()
  {
    return $this->bicycleRental;
  }
  public function setBicycleRentalException($bicycleRentalException)
  {
    $this->bicycleRentalException = $bicycleRentalException;
  }
  public function getBicycleRentalException()
  {
    return $this->bicycleRentalException;
  }
  public function setBoutiqueStores($boutiqueStores)
  {
    $this->boutiqueStores = $boutiqueStores;
  }
  public function getBoutiqueStores()
  {
    return $this->boutiqueStores;
  }
  public function setBoutiqueStoresException($boutiqueStoresException)
  {
    $this->boutiqueStoresException = $boutiqueStoresException;
  }
  public function getBoutiqueStoresException()
  {
    return $this->boutiqueStoresException;
  }
  public function setCasino($casino)
  {
    $this->casino = $casino;
  }
  public function getCasino()
  {
    return $this->casino;
  }
  public function setCasinoException($casinoException)
  {
    $this->casinoException = $casinoException;
  }
  public function getCasinoException()
  {
    return $this->casinoException;
  }
  public function setFreeBicycleRental($freeBicycleRental)
  {
    $this->freeBicycleRental = $freeBicycleRental;
  }
  public function getFreeBicycleRental()
  {
    return $this->freeBicycleRental;
  }
  public function setFreeBicycleRentalException($freeBicycleRentalException)
  {
    $this->freeBicycleRentalException = $freeBicycleRentalException;
  }
  public function getFreeBicycleRentalException()
  {
    return $this->freeBicycleRentalException;
  }
  public function setFreeWatercraftRental($freeWatercraftRental)
  {
    $this->freeWatercraftRental = $freeWatercraftRental;
  }
  public function getFreeWatercraftRental()
  {
    return $this->freeWatercraftRental;
  }
  public function setFreeWatercraftRentalException($freeWatercraftRentalException)
  {
    $this->freeWatercraftRentalException = $freeWatercraftRentalException;
  }
  public function getFreeWatercraftRentalException()
  {
    return $this->freeWatercraftRentalException;
  }
  public function setGameRoom($gameRoom)
  {
    $this->gameRoom = $gameRoom;
  }
  public function getGameRoom()
  {
    return $this->gameRoom;
  }
  public function setGameRoomException($gameRoomException)
  {
    $this->gameRoomException = $gameRoomException;
  }
  public function getGameRoomException()
  {
    return $this->gameRoomException;
  }
  public function setGolf($golf)
  {
    $this->golf = $golf;
  }
  public function getGolf()
  {
    return $this->golf;
  }
  public function setGolfException($golfException)
  {
    $this->golfException = $golfException;
  }
  public function getGolfException()
  {
    return $this->golfException;
  }
  public function setHorsebackRiding($horsebackRiding)
  {
    $this->horsebackRiding = $horsebackRiding;
  }
  public function getHorsebackRiding()
  {
    return $this->horsebackRiding;
  }
  public function setHorsebackRidingException($horsebackRidingException)
  {
    $this->horsebackRidingException = $horsebackRidingException;
  }
  public function getHorsebackRidingException()
  {
    return $this->horsebackRidingException;
  }
  public function setNightclub($nightclub)
  {
    $this->nightclub = $nightclub;
  }
  public function getNightclub()
  {
    return $this->nightclub;
  }
  public function setNightclubException($nightclubException)
  {
    $this->nightclubException = $nightclubException;
  }
  public function getNightclubException()
  {
    return $this->nightclubException;
  }
  public function setPrivateBeach($privateBeach)
  {
    $this->privateBeach = $privateBeach;
  }
  public function getPrivateBeach()
  {
    return $this->privateBeach;
  }
  public function setPrivateBeachException($privateBeachException)
  {
    $this->privateBeachException = $privateBeachException;
  }
  public function getPrivateBeachException()
  {
    return $this->privateBeachException;
  }
  public function setScuba($scuba)
  {
    $this->scuba = $scuba;
  }
  public function getScuba()
  {
    return $this->scuba;
  }
  public function setScubaException($scubaException)
  {
    $this->scubaException = $scubaException;
  }
  public function getScubaException()
  {
    return $this->scubaException;
  }
  public function setSnorkeling($snorkeling)
  {
    $this->snorkeling = $snorkeling;
  }
  public function getSnorkeling()
  {
    return $this->snorkeling;
  }
  public function setSnorkelingException($snorkelingException)
  {
    $this->snorkelingException = $snorkelingException;
  }
  public function getSnorkelingException()
  {
    return $this->snorkelingException;
  }
  public function setTennis($tennis)
  {
    $this->tennis = $tennis;
  }
  public function getTennis()
  {
    return $this->tennis;
  }
  public function setTennisException($tennisException)
  {
    $this->tennisException = $tennisException;
  }
  public function getTennisException()
  {
    return $this->tennisException;
  }
  public function setWaterSkiing($waterSkiing)
  {
    $this->waterSkiing = $waterSkiing;
  }
  public function getWaterSkiing()
  {
    return $this->waterSkiing;
  }
  public function setWaterSkiingException($waterSkiingException)
  {
    $this->waterSkiingException = $waterSkiingException;
  }
  public function getWaterSkiingException()
  {
    return $this->waterSkiingException;
  }
  public function setWatercraftRental($watercraftRental)
  {
    $this->watercraftRental = $watercraftRental;
  }
  public function getWatercraftRental()
  {
    return $this->watercraftRental;
  }
  public function setWatercraftRentalException($watercraftRentalException)
  {
    $this->watercraftRentalException = $watercraftRentalException;
  }
  public function getWatercraftRentalException()
  {
    return $this->watercraftRentalException;
  }
}

class Google_Service_MyBusiness_AdWordsLocationExtensions extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $adPhone;


  public function setAdPhone($adPhone)
  {
    $this->adPhone = $adPhone;
  }
  public function getAdPhone()
  {
    return $this->adPhone;
  }
}

class Google_Service_MyBusiness_AddressInput extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $mailerContactName;


  public function setMailerContactName($mailerContactName)
  {
    $this->mailerContactName = $mailerContactName;
  }
  public function getMailerContactName()
  {
    return $this->mailerContactName;
  }
}

class Google_Service_MyBusiness_AddressVerificationData extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $addressType = 'Google_Service_MyBusiness_PostalAddress';
  protected $addressDataType = '';
  public $businessName;


  public function setAddress(Google_Service_MyBusiness_PostalAddress $address)
  {
    $this->address = $address;
  }
  public function getAddress()
  {
    return $this->address;
  }
  public function setBusinessName($businessName)
  {
    $this->businessName = $businessName;
  }
  public function getBusinessName()
  {
    return $this->businessName;
  }
}

class Google_Service_MyBusiness_Admin extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $adminName;
  public $name;
  public $pendingInvitation;
  public $role;


  public function setAdminName($adminName)
  {
    $this->adminName = $adminName;
  }
  public function getAdminName()
  {
    return $this->adminName;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPendingInvitation($pendingInvitation)
  {
    $this->pendingInvitation = $pendingInvitation;
  }
  public function getPendingInvitation()
  {
    return $this->pendingInvitation;
  }
  public function setRole($role)
  {
    $this->role = $role;
  }
  public function getRole()
  {
    return $this->role;
  }
}

class Google_Service_MyBusiness_Answer extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $authorType = 'Google_Service_MyBusiness_Author';
  protected $authorDataType = '';
  public $createTime;
  public $name;
  public $text;
  public $updateTime;
  public $upvoteCount;


  public function setAuthor(Google_Service_MyBusiness_Author $author)
  {
    $this->author = $author;
  }
  public function getAuthor()
  {
    return $this->author;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setText($text)
  {
    $this->text = $text;
  }
  public function getText()
  {
    return $this->text;
  }
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  public function setUpvoteCount($upvoteCount)
  {
    $this->upvoteCount = $upvoteCount;
  }
  public function getUpvoteCount()
  {
    return $this->upvoteCount;
  }
}

class Google_Service_MyBusiness_AssociateLocationRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $placeId;


  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }
  public function getPlaceId()
  {
    return $this->placeId;
  }
}

class Google_Service_MyBusiness_Attribute extends Google_Collection
{
  protected $collection_key = 'values';
  protected $internal_gapi_mappings = array(
  );
  public $attributeId;
  protected $repeatedEnumValueType = 'Google_Service_MyBusiness_RepeatedEnumAttributeValue';
  protected $repeatedEnumValueDataType = '';
  protected $urlValuesType = 'Google_Service_MyBusiness_UrlAttributeValue';
  protected $urlValuesDataType = 'array';
  public $valueType;
  public $values;


  public function setAttributeId($attributeId)
  {
    $this->attributeId = $attributeId;
  }
  public function getAttributeId()
  {
    return $this->attributeId;
  }
  public function setRepeatedEnumValue(Google_Service_MyBusiness_RepeatedEnumAttributeValue $repeatedEnumValue)
  {
    $this->repeatedEnumValue = $repeatedEnumValue;
  }
  public function getRepeatedEnumValue()
  {
    return $this->repeatedEnumValue;
  }
  public function setUrlValues($urlValues)
  {
    $this->urlValues = $urlValues;
  }
  public function getUrlValues()
  {
    return $this->urlValues;
  }
  public function setValueType($valueType)
  {
    $this->valueType = $valueType;
  }
  public function getValueType()
  {
    return $this->valueType;
  }
  public function setValues($values)
  {
    $this->values = $values;
  }
  public function getValues()
  {
    return $this->values;
  }
}

class Google_Service_MyBusiness_AttributeMetadata extends Google_Collection
{
  protected $collection_key = 'valueMetadata';
  protected $internal_gapi_mappings = array(
  );
  public $attributeId;
  public $displayName;
  public $groupDisplayName;
  public $isDeprecated;
  public $isRepeatable;
  protected $valueMetadataType = 'Google_Service_MyBusiness_AttributeValueMetadata';
  protected $valueMetadataDataType = 'array';
  public $valueType;


  public function setAttributeId($attributeId)
  {
    $this->attributeId = $attributeId;
  }
  public function getAttributeId()
  {
    return $this->attributeId;
  }
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setGroupDisplayName($groupDisplayName)
  {
    $this->groupDisplayName = $groupDisplayName;
  }
  public function getGroupDisplayName()
  {
    return $this->groupDisplayName;
  }
  public function setIsDeprecated($isDeprecated)
  {
    $this->isDeprecated = $isDeprecated;
  }
  public function getIsDeprecated()
  {
    return $this->isDeprecated;
  }
  public function setIsRepeatable($isRepeatable)
  {
    $this->isRepeatable = $isRepeatable;
  }
  public function getIsRepeatable()
  {
    return $this->isRepeatable;
  }
  public function setValueMetadata($valueMetadata)
  {
    $this->valueMetadata = $valueMetadata;
  }
  public function getValueMetadata()
  {
    return $this->valueMetadata;
  }
  public function setValueType($valueType)
  {
    $this->valueType = $valueType;
  }
  public function getValueType()
  {
    return $this->valueType;
  }
}

class Google_Service_MyBusiness_AttributeValueMetadata extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $displayName;
  public $value;


  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class Google_Service_MyBusiness_Attribution extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $profileName;
  public $profilePhotoUrl;
  public $profileUrl;
  public $takedownUrl;


  public function setProfileName($profileName)
  {
    $this->profileName = $profileName;
  }
  public function getProfileName()
  {
    return $this->profileName;
  }
  public function setProfilePhotoUrl($profilePhotoUrl)
  {
    $this->profilePhotoUrl = $profilePhotoUrl;
  }
  public function getProfilePhotoUrl()
  {
    return $this->profilePhotoUrl;
  }
  public function setProfileUrl($profileUrl)
  {
    $this->profileUrl = $profileUrl;
  }
  public function getProfileUrl()
  {
    return $this->profileUrl;
  }
  public function setTakedownUrl($takedownUrl)
  {
    $this->takedownUrl = $takedownUrl;
  }
  public function getTakedownUrl()
  {
    return $this->takedownUrl;
  }
}

class Google_Service_MyBusiness_Author extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $displayName;
  public $profilePhotoUrl;
  public $type;


  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setProfilePhotoUrl($profilePhotoUrl)
  {
    $this->profilePhotoUrl = $profilePhotoUrl;
  }
  public function getProfilePhotoUrl()
  {
    return $this->profilePhotoUrl;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class Google_Service_MyBusiness_BasicMetricsRequest extends Google_Collection
{
  protected $collection_key = 'metricRequests';
  protected $internal_gapi_mappings = array(
  );
  protected $metricRequestsType = 'Google_Service_MyBusiness_MetricRequest';
  protected $metricRequestsDataType = 'array';
  protected $timeRangeType = 'Google_Service_MyBusiness_TimeRange';
  protected $timeRangeDataType = '';


  public function setMetricRequests($metricRequests)
  {
    $this->metricRequests = $metricRequests;
  }
  public function getMetricRequests()
  {
    return $this->metricRequests;
  }
  public function setTimeRange(Google_Service_MyBusiness_TimeRange $timeRange)
  {
    $this->timeRange = $timeRange;
  }
  public function getTimeRange()
  {
    return $this->timeRange;
  }
}

class Google_Service_MyBusiness_BatchGetBusinessCategoriesResponse extends Google_Collection
{
  protected $collection_key = 'categories';
  protected $internal_gapi_mappings = array(
  );
  protected $categoriesType = 'Google_Service_MyBusiness_Category';
  protected $categoriesDataType = 'array';


  public function setCategories($categories)
  {
    $this->categories = $categories;
  }
  public function getCategories()
  {
    return $this->categories;
  }
}

class Google_Service_MyBusiness_BatchGetLocationsRequest extends Google_Collection
{
  protected $collection_key = 'locationNames';
  protected $internal_gapi_mappings = array(
  );
  public $locationNames;


  public function setLocationNames($locationNames)
  {
    $this->locationNames = $locationNames;
  }
  public function getLocationNames()
  {
    return $this->locationNames;
  }
}

class Google_Service_MyBusiness_BatchGetLocationsResponse extends Google_Collection
{
  protected $collection_key = 'locations';
  protected $internal_gapi_mappings = array(
  );
  protected $locationsType = 'Google_Service_MyBusiness_Location';
  protected $locationsDataType = 'array';


  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
}

class Google_Service_MyBusiness_BatchGetReviewsRequest extends Google_Collection
{
  protected $collection_key = 'locationNames';
  protected $internal_gapi_mappings = array(
  );
  public $ignoreRatingOnlyReviews;
  public $locationNames;
  public $orderBy;
  public $pageSize;
  public $pageToken;


  public function setIgnoreRatingOnlyReviews($ignoreRatingOnlyReviews)
  {
    $this->ignoreRatingOnlyReviews = $ignoreRatingOnlyReviews;
  }
  public function getIgnoreRatingOnlyReviews()
  {
    return $this->ignoreRatingOnlyReviews;
  }
  public function setLocationNames($locationNames)
  {
    $this->locationNames = $locationNames;
  }
  public function getLocationNames()
  {
    return $this->locationNames;
  }
  public function setOrderBy($orderBy)
  {
    $this->orderBy = $orderBy;
  }
  public function getOrderBy()
  {
    return $this->orderBy;
  }
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  public function getPageSize()
  {
    return $this->pageSize;
  }
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  public function getPageToken()
  {
    return $this->pageToken;
  }
}

class Google_Service_MyBusiness_BatchGetReviewsResponse extends Google_Collection
{
  protected $collection_key = 'locationReviews';
  protected $internal_gapi_mappings = array(
  );
  protected $locationReviewsType = 'Google_Service_MyBusiness_LocationReview';
  protected $locationReviewsDataType = 'array';
  public $nextPageToken;


  public function setLocationReviews($locationReviews)
  {
    $this->locationReviews = $locationReviews;
  }
  public function getLocationReviews()
  {
    return $this->locationReviews;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Google_Service_MyBusiness_Business extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $businessCenter;
  public $businessCenterException;
  public $meetingRooms;
  public $meetingRoomsCount;
  public $meetingRoomsCountException;
  public $meetingRoomsException;


  public function setBusinessCenter($businessCenter)
  {
    $this->businessCenter = $businessCenter;
  }
  public function getBusinessCenter()
  {
    return $this->businessCenter;
  }
  public function setBusinessCenterException($businessCenterException)
  {
    $this->businessCenterException = $businessCenterException;
  }
  public function getBusinessCenterException()
  {
    return $this->businessCenterException;
  }
  public function setMeetingRooms($meetingRooms)
  {
    $this->meetingRooms = $meetingRooms;
  }
  public function getMeetingRooms()
  {
    return $this->meetingRooms;
  }
  public function setMeetingRoomsCount($meetingRoomsCount)
  {
    $this->meetingRoomsCount = $meetingRoomsCount;
  }
  public function getMeetingRoomsCount()
  {
    return $this->meetingRoomsCount;
  }
  public function setMeetingRoomsCountException($meetingRoomsCountException)
  {
    $this->meetingRoomsCountException = $meetingRoomsCountException;
  }
  public function getMeetingRoomsCountException()
  {
    return $this->meetingRoomsCountException;
  }
  public function setMeetingRoomsException($meetingRoomsException)
  {
    $this->meetingRoomsException = $meetingRoomsException;
  }
  public function getMeetingRoomsException()
  {
    return $this->meetingRoomsException;
  }
}

class Google_Service_MyBusiness_BusinessHours extends Google_Collection
{
  protected $collection_key = 'periods';
  protected $internal_gapi_mappings = array(
  );
  protected $periodsType = 'Google_Service_MyBusiness_TimePeriod';
  protected $periodsDataType = 'array';


  public function setPeriods($periods)
  {
    $this->periods = $periods;
  }
  public function getPeriods()
  {
    return $this->periods;
  }
}

class Google_Service_MyBusiness_CallToAction extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $actionType;
  public $url;


  public function setActionType($actionType)
  {
    $this->actionType = $actionType;
  }
  public function getActionType()
  {
    return $this->actionType;
  }
  public function setUrl($url)
  {
    $this->url = $url;
  }
  public function getUrl()
  {
    return $this->url;
  }
}

class Google_Service_MyBusiness_CaloriesFact extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $lowerAmount;
  public $unit;
  public $upperAmount;


  public function setLowerAmount($lowerAmount)
  {
    $this->lowerAmount = $lowerAmount;
  }
  public function getLowerAmount()
  {
    return $this->lowerAmount;
  }
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  public function getUnit()
  {
    return $this->unit;
  }
  public function setUpperAmount($upperAmount)
  {
    $this->upperAmount = $upperAmount;
  }
  public function getUpperAmount()
  {
    return $this->upperAmount;
  }
}

class Google_Service_MyBusiness_Category extends Google_Collection
{
  protected $collection_key = 'serviceTypes';
  protected $internal_gapi_mappings = array(
  );
  public $categoryId;
  public $displayName;
  protected $moreHoursTypesType = 'Google_Service_MyBusiness_MoreHoursType';
  protected $moreHoursTypesDataType = 'array';
  protected $serviceTypesType = 'Google_Service_MyBusiness_ServiceType';
  protected $serviceTypesDataType = 'array';


  public function setCategoryId($categoryId)
  {
    $this->categoryId = $categoryId;
  }
  public function getCategoryId()
  {
    return $this->categoryId;
  }
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setMoreHoursTypes($moreHoursTypes)
  {
    $this->moreHoursTypes = $moreHoursTypes;
  }
  public function getMoreHoursTypes()
  {
    return $this->moreHoursTypes;
  }
  public function setServiceTypes($serviceTypes)
  {
    $this->serviceTypes = $serviceTypes;
  }
  public function getServiceTypes()
  {
    return $this->serviceTypes;
  }
}

class Google_Service_MyBusiness_Chain extends Google_Collection
{
  protected $collection_key = 'websites';
  protected $internal_gapi_mappings = array(
  );
  protected $chainNamesType = 'Google_Service_MyBusiness_ChainName';
  protected $chainNamesDataType = 'array';
  public $locationCount;
  public $name;
  protected $websitesType = 'Google_Service_MyBusiness_ChainUrl';
  protected $websitesDataType = 'array';


  public function setChainNames($chainNames)
  {
    $this->chainNames = $chainNames;
  }
  public function getChainNames()
  {
    return $this->chainNames;
  }
  public function setLocationCount($locationCount)
  {
    $this->locationCount = $locationCount;
  }
  public function getLocationCount()
  {
    return $this->locationCount;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setWebsites($websites)
  {
    $this->websites = $websites;
  }
  public function getWebsites()
  {
    return $this->websites;
  }
}

class Google_Service_MyBusiness_ChainName extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $displayName;
  public $languageCode;


  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
}

class Google_Service_MyBusiness_ChainUrl extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $url;


  public function setUrl($url)
  {
    $this->url = $url;
  }
  public function getUrl()
  {
    return $this->url;
  }
}

class Google_Service_MyBusiness_ClearLocationAssociationRequest extends Google_Model
{
}

class Google_Service_MyBusiness_CompleteVerificationRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $pin;


  public function setPin($pin)
  {
    $this->pin = $pin;
  }
  public function getPin()
  {
    return $this->pin;
  }
}

class Google_Service_MyBusiness_CompleteVerificationResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $verificationType = 'Google_Service_MyBusiness_Verification';
  protected $verificationDataType = '';


  public function setVerification(Google_Service_MyBusiness_Verification $verification)
  {
    $this->verification = $verification;
  }
  public function getVerification()
  {
    return $this->verification;
  }
}

class Google_Service_MyBusiness_Connectivity extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $freeWifi;
  public $freeWifiException;
  public $publicAreaWifiAvailable;
  public $publicAreaWifiAvailableException;
  public $publicInternetTerminal;
  public $publicInternetTerminalException;
  public $wifiAvailable;
  public $wifiAvailableException;


  public function setFreeWifi($freeWifi)
  {
    $this->freeWifi = $freeWifi;
  }
  public function getFreeWifi()
  {
    return $this->freeWifi;
  }
  public function setFreeWifiException($freeWifiException)
  {
    $this->freeWifiException = $freeWifiException;
  }
  public function getFreeWifiException()
  {
    return $this->freeWifiException;
  }
  public function setPublicAreaWifiAvailable($publicAreaWifiAvailable)
  {
    $this->publicAreaWifiAvailable = $publicAreaWifiAvailable;
  }
  public function getPublicAreaWifiAvailable()
  {
    return $this->publicAreaWifiAvailable;
  }
  public function setPublicAreaWifiAvailableException($publicAreaWifiAvailableException)
  {
    $this->publicAreaWifiAvailableException = $publicAreaWifiAvailableException;
  }
  public function getPublicAreaWifiAvailableException()
  {
    return $this->publicAreaWifiAvailableException;
  }
  public function setPublicInternetTerminal($publicInternetTerminal)
  {
    $this->publicInternetTerminal = $publicInternetTerminal;
  }
  public function getPublicInternetTerminal()
  {
    return $this->publicInternetTerminal;
  }
  public function setPublicInternetTerminalException($publicInternetTerminalException)
  {
    $this->publicInternetTerminalException = $publicInternetTerminalException;
  }
  public function getPublicInternetTerminalException()
  {
    return $this->publicInternetTerminalException;
  }
  public function setWifiAvailable($wifiAvailable)
  {
    $this->wifiAvailable = $wifiAvailable;
  }
  public function getWifiAvailable()
  {
    return $this->wifiAvailable;
  }
  public function setWifiAvailableException($wifiAvailableException)
  {
    $this->wifiAvailableException = $wifiAvailableException;
  }
  public function getWifiAvailableException()
  {
    return $this->wifiAvailableException;
  }
}

class Google_Service_MyBusiness_Date extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $day;
  public $month;
  public $year;


  public function setDay($day)
  {
    $this->day = $day;
  }
  public function getDay()
  {
    return $this->day;
  }
  public function setMonth($month)
  {
    $this->month = $month;
  }
  public function getMonth()
  {
    return $this->month;
  }
  public function setYear($year)
  {
    $this->year = $year;
  }
  public function getYear()
  {
    return $this->year;
  }
}

class Google_Service_MyBusiness_DeclineInvitationRequest extends Google_Model
{
}

class Google_Service_MyBusiness_DimensionalMetricValue extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $metricOption;
  protected $timeDimensionType = 'Google_Service_MyBusiness_TimeDimension';
  protected $timeDimensionDataType = '';
  public $value;


  public function setMetricOption($metricOption)
  {
    $this->metricOption = $metricOption;
  }
  public function getMetricOption()
  {
    return $this->metricOption;
  }
  public function setTimeDimension(Google_Service_MyBusiness_TimeDimension $timeDimension)
  {
    $this->timeDimension = $timeDimension;
  }
  public function getTimeDimension()
  {
    return $this->timeDimension;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class Google_Service_MyBusiness_Dimensions extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $heightPixels;
  public $widthPixels;


  public function setHeightPixels($heightPixels)
  {
    $this->heightPixels = $heightPixels;
  }
  public function getHeightPixels()
  {
    return $this->heightPixels;
  }
  public function setWidthPixels($widthPixels)
  {
    $this->widthPixels = $widthPixels;
  }
  public function getWidthPixels()
  {
    return $this->widthPixels;
  }
}

class Google_Service_MyBusiness_DrivingDirectionMetricsRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $languageCode;
  public $numDays;


  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  public function setNumDays($numDays)
  {
    $this->numDays = $numDays;
  }
  public function getNumDays()
  {
    return $this->numDays;
  }
}

class Google_Service_MyBusiness_Duplicate extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $access;
  public $locationName;
  public $placeId;


  public function setAccess($access)
  {
    $this->access = $access;
  }
  public function getAccess()
  {
    return $this->access;
  }
  public function setLocationName($locationName)
  {
    $this->locationName = $locationName;
  }
  public function getLocationName()
  {
    return $this->locationName;
  }
  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }
  public function getPlaceId()
  {
    return $this->placeId;
  }
}

class Google_Service_MyBusiness_EmailInput extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $emailAddress;


  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  public function getEmailAddress()
  {
    return $this->emailAddress;
  }
}

class Google_Service_MyBusiness_EmailVerificationData extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $domainName;
  public $isUserNameEditable;
  public $userName;


  public function setDomainName($domainName)
  {
    $this->domainName = $domainName;
  }
  public function getDomainName()
  {
    return $this->domainName;
  }
  public function setIsUserNameEditable($isUserNameEditable)
  {
    $this->isUserNameEditable = $isUserNameEditable;
  }
  public function getIsUserNameEditable()
  {
    return $this->isUserNameEditable;
  }
  public function setUserName($userName)
  {
    $this->userName = $userName;
  }
  public function getUserName()
  {
    return $this->userName;
  }
}

class Google_Service_MyBusiness_EnhancedCleaning extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $commercialGradeDisinfectantCleaning;
  public $commercialGradeDisinfectantCleaningException;
  public $commonAreasEnhancedCleaning;
  public $commonAreasEnhancedCleaningException;
  public $employeesTrainedCleaningProcedures;
  public $employeesTrainedCleaningProceduresException;
  public $employeesTrainedThoroughHandWashing;
  public $employeesTrainedThoroughHandWashingException;
  public $employeesWearProtectiveEquipment;
  public $employeesWearProtectiveEquipmentException;
  public $guestRoomsEnhancedCleaning;
  public $guestRoomsEnhancedCleaningException;


  public function setCommercialGradeDisinfectantCleaning($commercialGradeDisinfectantCleaning)
  {
    $this->commercialGradeDisinfectantCleaning = $commercialGradeDisinfectantCleaning;
  }
  public function getCommercialGradeDisinfectantCleaning()
  {
    return $this->commercialGradeDisinfectantCleaning;
  }
  public function setCommercialGradeDisinfectantCleaningException($commercialGradeDisinfectantCleaningException)
  {
    $this->commercialGradeDisinfectantCleaningException = $commercialGradeDisinfectantCleaningException;
  }
  public function getCommercialGradeDisinfectantCleaningException()
  {
    return $this->commercialGradeDisinfectantCleaningException;
  }
  public function setCommonAreasEnhancedCleaning($commonAreasEnhancedCleaning)
  {
    $this->commonAreasEnhancedCleaning = $commonAreasEnhancedCleaning;
  }
  public function getCommonAreasEnhancedCleaning()
  {
    return $this->commonAreasEnhancedCleaning;
  }
  public function setCommonAreasEnhancedCleaningException($commonAreasEnhancedCleaningException)
  {
    $this->commonAreasEnhancedCleaningException = $commonAreasEnhancedCleaningException;
  }
  public function getCommonAreasEnhancedCleaningException()
  {
    return $this->commonAreasEnhancedCleaningException;
  }
  public function setEmployeesTrainedCleaningProcedures($employeesTrainedCleaningProcedures)
  {
    $this->employeesTrainedCleaningProcedures = $employeesTrainedCleaningProcedures;
  }
  public function getEmployeesTrainedCleaningProcedures()
  {
    return $this->employeesTrainedCleaningProcedures;
  }
  public function setEmployeesTrainedCleaningProceduresException($employeesTrainedCleaningProceduresException)
  {
    $this->employeesTrainedCleaningProceduresException = $employeesTrainedCleaningProceduresException;
  }
  public function getEmployeesTrainedCleaningProceduresException()
  {
    return $this->employeesTrainedCleaningProceduresException;
  }
  public function setEmployeesTrainedThoroughHandWashing($employeesTrainedThoroughHandWashing)
  {
    $this->employeesTrainedThoroughHandWashing = $employeesTrainedThoroughHandWashing;
  }
  public function getEmployeesTrainedThoroughHandWashing()
  {
    return $this->employeesTrainedThoroughHandWashing;
  }
  public function setEmployeesTrainedThoroughHandWashingException($employeesTrainedThoroughHandWashingException)
  {
    $this->employeesTrainedThoroughHandWashingException = $employeesTrainedThoroughHandWashingException;
  }
  public function getEmployeesTrainedThoroughHandWashingException()
  {
    return $this->employeesTrainedThoroughHandWashingException;
  }
  public function setEmployeesWearProtectiveEquipment($employeesWearProtectiveEquipment)
  {
    $this->employeesWearProtectiveEquipment = $employeesWearProtectiveEquipment;
  }
  public function getEmployeesWearProtectiveEquipment()
  {
    return $this->employeesWearProtectiveEquipment;
  }
  public function setEmployeesWearProtectiveEquipmentException($employeesWearProtectiveEquipmentException)
  {
    $this->employeesWearProtectiveEquipmentException = $employeesWearProtectiveEquipmentException;
  }
  public function getEmployeesWearProtectiveEquipmentException()
  {
    return $this->employeesWearProtectiveEquipmentException;
  }
  public function setGuestRoomsEnhancedCleaning($guestRoomsEnhancedCleaning)
  {
    $this->guestRoomsEnhancedCleaning = $guestRoomsEnhancedCleaning;
  }
  public function getGuestRoomsEnhancedCleaning()
  {
    return $this->guestRoomsEnhancedCleaning;
  }
  public function setGuestRoomsEnhancedCleaningException($guestRoomsEnhancedCleaningException)
  {
    $this->guestRoomsEnhancedCleaningException = $guestRoomsEnhancedCleaningException;
  }
  public function getGuestRoomsEnhancedCleaningException()
  {
    return $this->guestRoomsEnhancedCleaningException;
  }
}

class Google_Service_MyBusiness_Families extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $babysitting;
  public $babysittingException;
  public $kidsActivities;
  public $kidsActivitiesException;
  public $kidsClub;
  public $kidsClubException;


  public function setBabysitting($babysitting)
  {
    $this->babysitting = $babysitting;
  }
  public function getBabysitting()
  {
    return $this->babysitting;
  }
  public function setBabysittingException($babysittingException)
  {
    $this->babysittingException = $babysittingException;
  }
  public function getBabysittingException()
  {
    return $this->babysittingException;
  }
  public function setKidsActivities($kidsActivities)
  {
    $this->kidsActivities = $kidsActivities;
  }
  public function getKidsActivities()
  {
    return $this->kidsActivities;
  }
  public function setKidsActivitiesException($kidsActivitiesException)
  {
    $this->kidsActivitiesException = $kidsActivitiesException;
  }
  public function getKidsActivitiesException()
  {
    return $this->kidsActivitiesException;
  }
  public function setKidsClub($kidsClub)
  {
    $this->kidsClub = $kidsClub;
  }
  public function getKidsClub()
  {
    return $this->kidsClub;
  }
  public function setKidsClubException($kidsClubException)
  {
    $this->kidsClubException = $kidsClubException;
  }
  public function getKidsClubException()
  {
    return $this->kidsClubException;
  }
}

class Google_Service_MyBusiness_FetchVerificationOptionsRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $contextType = 'Google_Service_MyBusiness_ServiceBusinessContext';
  protected $contextDataType = '';
  public $languageCode;


  public function setContext(Google_Service_MyBusiness_ServiceBusinessContext $context)
  {
    $this->context = $context;
  }
  public function getContext()
  {
    return $this->context;
  }
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
}

class Google_Service_MyBusiness_FetchVerificationOptionsResponse extends Google_Collection
{
  protected $collection_key = 'options';
  protected $internal_gapi_mappings = array(
  );
  protected $optionsType = 'Google_Service_MyBusiness_VerificationOption';
  protected $optionsDataType = 'array';


  public function setOptions($options)
  {
    $this->options = $options;
  }
  public function getOptions()
  {
    return $this->options;
  }
}

class Google_Service_MyBusiness_FindMatchingLocationsRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $languageCode;
  public $maxCacheDuration;
  public $numResults;


  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  public function setMaxCacheDuration($maxCacheDuration)
  {
    $this->maxCacheDuration = $maxCacheDuration;
  }
  public function getMaxCacheDuration()
  {
    return $this->maxCacheDuration;
  }
  public function setNumResults($numResults)
  {
    $this->numResults = $numResults;
  }
  public function getNumResults()
  {
    return $this->numResults;
  }
}

class Google_Service_MyBusiness_FindMatchingLocationsResponse extends Google_Collection
{
  protected $collection_key = 'matchedLocations';
  protected $internal_gapi_mappings = array(
  );
  public $matchTime;
  protected $matchedLocationsType = 'Google_Service_MyBusiness_MatchedLocation';
  protected $matchedLocationsDataType = 'array';


  public function setMatchTime($matchTime)
  {
    $this->matchTime = $matchTime;
  }
  public function getMatchTime()
  {
    return $this->matchTime;
  }
  public function setMatchedLocations($matchedLocations)
  {
    $this->matchedLocations = $matchedLocations;
  }
  public function getMatchedLocations()
  {
    return $this->matchedLocations;
  }
}

class Google_Service_MyBusiness_FollowersMetadata extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $count;
  public $name;


  public function setCount($count)
  {
    $this->count = $count;
  }
  public function getCount()
  {
    return $this->count;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

class Google_Service_MyBusiness_FoodAndDrink extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $bar;
  public $barException;
  public $breakfastAvailable;
  public $breakfastAvailableException;
  public $breakfastBuffet;
  public $breakfastBuffetException;
  public $buffet;
  public $buffetException;
  public $dinnerBuffet;
  public $dinnerBuffetException;
  public $freeBreakfast;
  public $freeBreakfastException;
  public $restaurant;
  public $restaurantException;
  public $restaurantsCount;
  public $restaurantsCountException;
  public $roomService;
  public $roomServiceException;
  public $tableService;
  public $tableServiceException;
  public $twentyFourHourRoomService;
  public $twentyFourHourRoomServiceException;
  public $vendingMachine;
  public $vendingMachineException;


  public function setBar($bar)
  {
    $this->bar = $bar;
  }
  public function getBar()
  {
    return $this->bar;
  }
  public function setBarException($barException)
  {
    $this->barException = $barException;
  }
  public function getBarException()
  {
    return $this->barException;
  }
  public function setBreakfastAvailable($breakfastAvailable)
  {
    $this->breakfastAvailable = $breakfastAvailable;
  }
  public function getBreakfastAvailable()
  {
    return $this->breakfastAvailable;
  }
  public function setBreakfastAvailableException($breakfastAvailableException)
  {
    $this->breakfastAvailableException = $breakfastAvailableException;
  }
  public function getBreakfastAvailableException()
  {
    return $this->breakfastAvailableException;
  }
  public function setBreakfastBuffet($breakfastBuffet)
  {
    $this->breakfastBuffet = $breakfastBuffet;
  }
  public function getBreakfastBuffet()
  {
    return $this->breakfastBuffet;
  }
  public function setBreakfastBuffetException($breakfastBuffetException)
  {
    $this->breakfastBuffetException = $breakfastBuffetException;
  }
  public function getBreakfastBuffetException()
  {
    return $this->breakfastBuffetException;
  }
  public function setBuffet($buffet)
  {
    $this->buffet = $buffet;
  }
  public function getBuffet()
  {
    return $this->buffet;
  }
  public function setBuffetException($buffetException)
  {
    $this->buffetException = $buffetException;
  }
  public function getBuffetException()
  {
    return $this->buffetException;
  }
  public function setDinnerBuffet($dinnerBuffet)
  {
    $this->dinnerBuffet = $dinnerBuffet;
  }
  public function getDinnerBuffet()
  {
    return $this->dinnerBuffet;
  }
  public function setDinnerBuffetException($dinnerBuffetException)
  {
    $this->dinnerBuffetException = $dinnerBuffetException;
  }
  public function getDinnerBuffetException()
  {
    return $this->dinnerBuffetException;
  }
  public function setFreeBreakfast($freeBreakfast)
  {
    $this->freeBreakfast = $freeBreakfast;
  }
  public function getFreeBreakfast()
  {
    return $this->freeBreakfast;
  }
  public function setFreeBreakfastException($freeBreakfastException)
  {
    $this->freeBreakfastException = $freeBreakfastException;
  }
  public function getFreeBreakfastException()
  {
    return $this->freeBreakfastException;
  }
  public function setRestaurant($restaurant)
  {
    $this->restaurant = $restaurant;
  }
  public function getRestaurant()
  {
    return $this->restaurant;
  }
  public function setRestaurantException($restaurantException)
  {
    $this->restaurantException = $restaurantException;
  }
  public function getRestaurantException()
  {
    return $this->restaurantException;
  }
  public function setRestaurantsCount($restaurantsCount)
  {
    $this->restaurantsCount = $restaurantsCount;
  }
  public function getRestaurantsCount()
  {
    return $this->restaurantsCount;
  }
  public function setRestaurantsCountException($restaurantsCountException)
  {
    $this->restaurantsCountException = $restaurantsCountException;
  }
  public function getRestaurantsCountException()
  {
    return $this->restaurantsCountException;
  }
  public function setRoomService($roomService)
  {
    $this->roomService = $roomService;
  }
  public function getRoomService()
  {
    return $this->roomService;
  }
  public function setRoomServiceException($roomServiceException)
  {
    $this->roomServiceException = $roomServiceException;
  }
  public function getRoomServiceException()
  {
    return $this->roomServiceException;
  }
  public function setTableService($tableService)
  {
    $this->tableService = $tableService;
  }
  public function getTableService()
  {
    return $this->tableService;
  }
  public function setTableServiceException($tableServiceException)
  {
    $this->tableServiceException = $tableServiceException;
  }
  public function getTableServiceException()
  {
    return $this->tableServiceException;
  }
  public function setTwentyFourHourRoomService($twentyFourHourRoomService)
  {
    $this->twentyFourHourRoomService = $twentyFourHourRoomService;
  }
  public function getTwentyFourHourRoomService()
  {
    return $this->twentyFourHourRoomService;
  }
  public function setTwentyFourHourRoomServiceException($twentyFourHourRoomServiceException)
  {
    $this->twentyFourHourRoomServiceException = $twentyFourHourRoomServiceException;
  }
  public function getTwentyFourHourRoomServiceException()
  {
    return $this->twentyFourHourRoomServiceException;
  }
  public function setVendingMachine($vendingMachine)
  {
    $this->vendingMachine = $vendingMachine;
  }
  public function getVendingMachine()
  {
    return $this->vendingMachine;
  }
  public function setVendingMachineException($vendingMachineException)
  {
    $this->vendingMachineException = $vendingMachineException;
  }
  public function getVendingMachineException()
  {
    return $this->vendingMachineException;
  }
}

class Google_Service_MyBusiness_FoodMenu extends Google_Collection
{
  protected $collection_key = 'sections';
  protected $internal_gapi_mappings = array(
  );
  public $cuisines;
  protected $labelsType = 'Google_Service_MyBusiness_MenuLabel';
  protected $labelsDataType = 'array';
  protected $sectionsType = 'Google_Service_MyBusiness_FoodMenuSection';
  protected $sectionsDataType = 'array';
  public $sourceUrl;


  public function setCuisines($cuisines)
  {
    $this->cuisines = $cuisines;
  }
  public function getCuisines()
  {
    return $this->cuisines;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setSections($sections)
  {
    $this->sections = $sections;
  }
  public function getSections()
  {
    return $this->sections;
  }
  public function setSourceUrl($sourceUrl)
  {
    $this->sourceUrl = $sourceUrl;
  }
  public function getSourceUrl()
  {
    return $this->sourceUrl;
  }
}

class Google_Service_MyBusiness_FoodMenuItem extends Google_Collection
{
  protected $collection_key = 'options';
  protected $internal_gapi_mappings = array(
  );
  protected $attributesType = 'Google_Service_MyBusiness_FoodMenuItemAttributes';
  protected $attributesDataType = '';
  protected $labelsType = 'Google_Service_MyBusiness_MenuLabel';
  protected $labelsDataType = 'array';
  protected $optionsType = 'Google_Service_MyBusiness_FoodMenuItemOption';
  protected $optionsDataType = 'array';


  public function setAttributes(Google_Service_MyBusiness_FoodMenuItemAttributes $attributes)
  {
    $this->attributes = $attributes;
  }
  public function getAttributes()
  {
    return $this->attributes;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setOptions($options)
  {
    $this->options = $options;
  }
  public function getOptions()
  {
    return $this->options;
  }
}

class Google_Service_MyBusiness_FoodMenuItemAttributes extends Google_Collection
{
  protected $collection_key = 'preparationMethods';
  protected $internal_gapi_mappings = array(
  );
  public $allergen;
  public $dietaryRestriction;
  protected $ingredientsType = 'Google_Service_MyBusiness_Ingredient';
  protected $ingredientsDataType = 'array';
  public $mediaKeys;
  protected $nutritionFactsType = 'Google_Service_MyBusiness_NutritionFacts';
  protected $nutritionFactsDataType = '';
  protected $portionSizeType = 'Google_Service_MyBusiness_PortionSize';
  protected $portionSizeDataType = '';
  public $preparationMethods;
  protected $priceType = 'Google_Service_MyBusiness_Money';
  protected $priceDataType = '';
  public $servesNumPeople;
  public $spiciness;


  public function setAllergen($allergen)
  {
    $this->allergen = $allergen;
  }
  public function getAllergen()
  {
    return $this->allergen;
  }
  public function setDietaryRestriction($dietaryRestriction)
  {
    $this->dietaryRestriction = $dietaryRestriction;
  }
  public function getDietaryRestriction()
  {
    return $this->dietaryRestriction;
  }
  public function setIngredients($ingredients)
  {
    $this->ingredients = $ingredients;
  }
  public function getIngredients()
  {
    return $this->ingredients;
  }
  public function setMediaKeys($mediaKeys)
  {
    $this->mediaKeys = $mediaKeys;
  }
  public function getMediaKeys()
  {
    return $this->mediaKeys;
  }
  public function setNutritionFacts(Google_Service_MyBusiness_NutritionFacts $nutritionFacts)
  {
    $this->nutritionFacts = $nutritionFacts;
  }
  public function getNutritionFacts()
  {
    return $this->nutritionFacts;
  }
  public function setPortionSize(Google_Service_MyBusiness_PortionSize $portionSize)
  {
    $this->portionSize = $portionSize;
  }
  public function getPortionSize()
  {
    return $this->portionSize;
  }
  public function setPreparationMethods($preparationMethods)
  {
    $this->preparationMethods = $preparationMethods;
  }
  public function getPreparationMethods()
  {
    return $this->preparationMethods;
  }
  public function setPrice(Google_Service_MyBusiness_Money $price)
  {
    $this->price = $price;
  }
  public function getPrice()
  {
    return $this->price;
  }
  public function setServesNumPeople($servesNumPeople)
  {
    $this->servesNumPeople = $servesNumPeople;
  }
  public function getServesNumPeople()
  {
    return $this->servesNumPeople;
  }
  public function setSpiciness($spiciness)
  {
    $this->spiciness = $spiciness;
  }
  public function getSpiciness()
  {
    return $this->spiciness;
  }
}

class Google_Service_MyBusiness_FoodMenuItemOption extends Google_Collection
{
  protected $collection_key = 'labels';
  protected $internal_gapi_mappings = array(
  );
  protected $attributesType = 'Google_Service_MyBusiness_FoodMenuItemAttributes';
  protected $attributesDataType = '';
  protected $labelsType = 'Google_Service_MyBusiness_MenuLabel';
  protected $labelsDataType = 'array';


  public function setAttributes(Google_Service_MyBusiness_FoodMenuItemAttributes $attributes)
  {
    $this->attributes = $attributes;
  }
  public function getAttributes()
  {
    return $this->attributes;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
}

class Google_Service_MyBusiness_FoodMenuSection extends Google_Collection
{
  protected $collection_key = 'labels';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_MyBusiness_FoodMenuItem';
  protected $itemsDataType = 'array';
  protected $labelsType = 'Google_Service_MyBusiness_MenuLabel';
  protected $labelsDataType = 'array';


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
}

class Google_Service_MyBusiness_FoodMenus extends Google_Collection
{
  protected $collection_key = 'menus';
  protected $internal_gapi_mappings = array(
  );
  protected $menusType = 'Google_Service_MyBusiness_FoodMenu';
  protected $menusDataType = 'array';
  public $name;


  public function setMenus($menus)
  {
    $this->menus = $menus;
  }
  public function getMenus()
  {
    return $this->menus;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

class Google_Service_MyBusiness_FreeFormServiceItem extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $categoryId;
  protected $labelType = 'Google_Service_MyBusiness_Label';
  protected $labelDataType = '';


  public function setCategoryId($categoryId)
  {
    $this->categoryId = $categoryId;
  }
  public function getCategoryId()
  {
    return $this->categoryId;
  }
  public function setLabel(Google_Service_MyBusiness_Label $label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
  }
}

class Google_Service_MyBusiness_GenerateAccountNumberRequest extends Google_Model
{
}

class Google_Service_MyBusiness_GetGoogleUpdatedLodgingResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $diffMask;
  protected $lodgingType = 'Google_Service_MyBusiness_Lodging';
  protected $lodgingDataType = '';


  public function setDiffMask($diffMask)
  {
    $this->diffMask = $diffMask;
  }
  public function getDiffMask()
  {
    return $this->diffMask;
  }
  public function setLodging(Google_Service_MyBusiness_Lodging $lodging)
  {
    $this->lodging = $lodging;
  }
  public function getLodging()
  {
    return $this->lodging;
  }
}

class Google_Service_MyBusiness_GoogleLocation extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $locationType = 'Google_Service_MyBusiness_Location';
  protected $locationDataType = '';
  public $name;
  public $requestAdminRightsUrl;


  public function setLocation(Google_Service_MyBusiness_Location $location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setRequestAdminRightsUrl($requestAdminRightsUrl)
  {
    $this->requestAdminRightsUrl = $requestAdminRightsUrl;
  }
  public function getRequestAdminRightsUrl()
  {
    return $this->requestAdminRightsUrl;
  }
}

class Google_Service_MyBusiness_GoogleUpdatedLocation extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $diffMask;
  protected $locationType = 'Google_Service_MyBusiness_Location';
  protected $locationDataType = '';


  public function setDiffMask($diffMask)
  {
    $this->diffMask = $diffMask;
  }
  public function getDiffMask()
  {
    return $this->diffMask;
  }
  public function setLocation(Google_Service_MyBusiness_Location $location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
}

class Google_Service_MyBusiness_GuestUnitFeatures extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $bungalowOrVilla;
  public $bungalowOrVillaException;
  public $connectingUnitAvailable;
  public $connectingUnitAvailableException;
  public $executiveFloor;
  public $executiveFloorException;
  public $maxAdultOccupantsCount;
  public $maxAdultOccupantsCountException;
  public $maxChildOccupantsCount;
  public $maxChildOccupantsCountException;
  public $maxOccupantsCount;
  public $maxOccupantsCountException;
  public $privateHome;
  public $privateHomeException;
  public $suite;
  public $suiteException;
  public $tier;
  public $tierException;
  protected $totalLivingAreasType = 'Google_Service_MyBusiness_LivingArea';
  protected $totalLivingAreasDataType = '';
  protected $viewsType = 'Google_Service_MyBusiness_ViewsFromUnit';
  protected $viewsDataType = '';


  public function setBungalowOrVilla($bungalowOrVilla)
  {
    $this->bungalowOrVilla = $bungalowOrVilla;
  }
  public function getBungalowOrVilla()
  {
    return $this->bungalowOrVilla;
  }
  public function setBungalowOrVillaException($bungalowOrVillaException)
  {
    $this->bungalowOrVillaException = $bungalowOrVillaException;
  }
  public function getBungalowOrVillaException()
  {
    return $this->bungalowOrVillaException;
  }
  public function setConnectingUnitAvailable($connectingUnitAvailable)
  {
    $this->connectingUnitAvailable = $connectingUnitAvailable;
  }
  public function getConnectingUnitAvailable()
  {
    return $this->connectingUnitAvailable;
  }
  public function setConnectingUnitAvailableException($connectingUnitAvailableException)
  {
    $this->connectingUnitAvailableException = $connectingUnitAvailableException;
  }
  public function getConnectingUnitAvailableException()
  {
    return $this->connectingUnitAvailableException;
  }
  public function setExecutiveFloor($executiveFloor)
  {
    $this->executiveFloor = $executiveFloor;
  }
  public function getExecutiveFloor()
  {
    return $this->executiveFloor;
  }
  public function setExecutiveFloorException($executiveFloorException)
  {
    $this->executiveFloorException = $executiveFloorException;
  }
  public function getExecutiveFloorException()
  {
    return $this->executiveFloorException;
  }
  public function setMaxAdultOccupantsCount($maxAdultOccupantsCount)
  {
    $this->maxAdultOccupantsCount = $maxAdultOccupantsCount;
  }
  public function getMaxAdultOccupantsCount()
  {
    return $this->maxAdultOccupantsCount;
  }
  public function setMaxAdultOccupantsCountException($maxAdultOccupantsCountException)
  {
    $this->maxAdultOccupantsCountException = $maxAdultOccupantsCountException;
  }
  public function getMaxAdultOccupantsCountException()
  {
    return $this->maxAdultOccupantsCountException;
  }
  public function setMaxChildOccupantsCount($maxChildOccupantsCount)
  {
    $this->maxChildOccupantsCount = $maxChildOccupantsCount;
  }
  public function getMaxChildOccupantsCount()
  {
    return $this->maxChildOccupantsCount;
  }
  public function setMaxChildOccupantsCountException($maxChildOccupantsCountException)
  {
    $this->maxChildOccupantsCountException = $maxChildOccupantsCountException;
  }
  public function getMaxChildOccupantsCountException()
  {
    return $this->maxChildOccupantsCountException;
  }
  public function setMaxOccupantsCount($maxOccupantsCount)
  {
    $this->maxOccupantsCount = $maxOccupantsCount;
  }
  public function getMaxOccupantsCount()
  {
    return $this->maxOccupantsCount;
  }
  public function setMaxOccupantsCountException($maxOccupantsCountException)
  {
    $this->maxOccupantsCountException = $maxOccupantsCountException;
  }
  public function getMaxOccupantsCountException()
  {
    return $this->maxOccupantsCountException;
  }
  public function setPrivateHome($privateHome)
  {
    $this->privateHome = $privateHome;
  }
  public function getPrivateHome()
  {
    return $this->privateHome;
  }
  public function setPrivateHomeException($privateHomeException)
  {
    $this->privateHomeException = $privateHomeException;
  }
  public function getPrivateHomeException()
  {
    return $this->privateHomeException;
  }
  public function setSuite($suite)
  {
    $this->suite = $suite;
  }
  public function getSuite()
  {
    return $this->suite;
  }
  public function setSuiteException($suiteException)
  {
    $this->suiteException = $suiteException;
  }
  public function getSuiteException()
  {
    return $this->suiteException;
  }
  public function setTier($tier)
  {
    $this->tier = $tier;
  }
  public function getTier()
  {
    return $this->tier;
  }
  public function setTierException($tierException)
  {
    $this->tierException = $tierException;
  }
  public function getTierException()
  {
    return $this->tierException;
  }
  public function setTotalLivingAreas(Google_Service_MyBusiness_LivingArea $totalLivingAreas)
  {
    $this->totalLivingAreas = $totalLivingAreas;
  }
  public function getTotalLivingAreas()
  {
    return $this->totalLivingAreas;
  }
  public function setViews(Google_Service_MyBusiness_ViewsFromUnit $views)
  {
    $this->views = $views;
  }
  public function getViews()
  {
    return $this->views;
  }
}

class Google_Service_MyBusiness_GuestUnitType extends Google_Collection
{
  protected $collection_key = 'codes';
  protected $internal_gapi_mappings = array(
  );
  public $codes;
  protected $featuresType = 'Google_Service_MyBusiness_GuestUnitFeatures';
  protected $featuresDataType = '';
  public $label;


  public function setCodes($codes)
  {
    $this->codes = $codes;
  }
  public function getCodes()
  {
    return $this->codes;
  }
  public function setFeatures(Google_Service_MyBusiness_GuestUnitFeatures $features)
  {
    $this->features = $features;
  }
  public function getFeatures()
  {
    return $this->features;
  }
  public function setLabel($label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
  }
}

class Google_Service_MyBusiness_HealthAndSafety extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $enhancedCleaningType = 'Google_Service_MyBusiness_EnhancedCleaning';
  protected $enhancedCleaningDataType = '';
  protected $increasedFoodSafetyType = 'Google_Service_MyBusiness_IncreasedFoodSafety';
  protected $increasedFoodSafetyDataType = '';
  protected $minimizedContactType = 'Google_Service_MyBusiness_MinimizedContact';
  protected $minimizedContactDataType = '';
  protected $personalProtectionType = 'Google_Service_MyBusiness_PersonalProtection';
  protected $personalProtectionDataType = '';
  protected $physicalDistancingType = 'Google_Service_MyBusiness_PhysicalDistancing';
  protected $physicalDistancingDataType = '';


  public function setEnhancedCleaning(Google_Service_MyBusiness_EnhancedCleaning $enhancedCleaning)
  {
    $this->enhancedCleaning = $enhancedCleaning;
  }
  public function getEnhancedCleaning()
  {
    return $this->enhancedCleaning;
  }
  public function setIncreasedFoodSafety(Google_Service_MyBusiness_IncreasedFoodSafety $increasedFoodSafety)
  {
    $this->increasedFoodSafety = $increasedFoodSafety;
  }
  public function getIncreasedFoodSafety()
  {
    return $this->increasedFoodSafety;
  }
  public function setMinimizedContact(Google_Service_MyBusiness_MinimizedContact $minimizedContact)
  {
    $this->minimizedContact = $minimizedContact;
  }
  public function getMinimizedContact()
  {
    return $this->minimizedContact;
  }
  public function setPersonalProtection(Google_Service_MyBusiness_PersonalProtection $personalProtection)
  {
    $this->personalProtection = $personalProtection;
  }
  public function getPersonalProtection()
  {
    return $this->personalProtection;
  }
  public function setPhysicalDistancing(Google_Service_MyBusiness_PhysicalDistancing $physicalDistancing)
  {
    $this->physicalDistancing = $physicalDistancing;
  }
  public function getPhysicalDistancing()
  {
    return $this->physicalDistancing;
  }
}

class Google_Service_MyBusiness_HealthProviderAttributes extends Google_Collection
{
  protected $collection_key = 'insuranceNetworks';
  protected $internal_gapi_mappings = array(
  );
  protected $insuranceNetworksType = 'Google_Service_MyBusiness_InsuranceNetwork';
  protected $insuranceNetworksDataType = 'array';
  public $name;


  public function setInsuranceNetworks($insuranceNetworks)
  {
    $this->insuranceNetworks = $insuranceNetworks;
  }
  public function getInsuranceNetworks()
  {
    return $this->insuranceNetworks;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

class Google_Service_MyBusiness_Housekeeping extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $dailyHousekeeping;
  public $dailyHousekeepingException;
  public $housekeepingAvailable;
  public $housekeepingAvailableException;
  public $turndownService;
  public $turndownServiceException;


  public function setDailyHousekeeping($dailyHousekeeping)
  {
    $this->dailyHousekeeping = $dailyHousekeeping;
  }
  public function getDailyHousekeeping()
  {
    return $this->dailyHousekeeping;
  }
  public function setDailyHousekeepingException($dailyHousekeepingException)
  {
    $this->dailyHousekeepingException = $dailyHousekeepingException;
  }
  public function getDailyHousekeepingException()
  {
    return $this->dailyHousekeepingException;
  }
  public function setHousekeepingAvailable($housekeepingAvailable)
  {
    $this->housekeepingAvailable = $housekeepingAvailable;
  }
  public function getHousekeepingAvailable()
  {
    return $this->housekeepingAvailable;
  }
  public function setHousekeepingAvailableException($housekeepingAvailableException)
  {
    $this->housekeepingAvailableException = $housekeepingAvailableException;
  }
  public function getHousekeepingAvailableException()
  {
    return $this->housekeepingAvailableException;
  }
  public function setTurndownService($turndownService)
  {
    $this->turndownService = $turndownService;
  }
  public function getTurndownService()
  {
    return $this->turndownService;
  }
  public function setTurndownServiceException($turndownServiceException)
  {
    $this->turndownServiceException = $turndownServiceException;
  }
  public function getTurndownServiceException()
  {
    return $this->turndownServiceException;
  }
}

class Google_Service_MyBusiness_IncreasedFoodSafety extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $diningAreasAdditionalSanitation;
  public $diningAreasAdditionalSanitationException;
  public $disposableFlatware;
  public $disposableFlatwareException;
  public $foodPreparationAndServingAdditionalSafety;
  public $foodPreparationAndServingAdditionalSafetyException;
  public $individualPackagedMeals;
  public $individualPackagedMealsException;
  public $singleUseFoodMenus;
  public $singleUseFoodMenusException;


  public function setDiningAreasAdditionalSanitation($diningAreasAdditionalSanitation)
  {
    $this->diningAreasAdditionalSanitation = $diningAreasAdditionalSanitation;
  }
  public function getDiningAreasAdditionalSanitation()
  {
    return $this->diningAreasAdditionalSanitation;
  }
  public function setDiningAreasAdditionalSanitationException($diningAreasAdditionalSanitationException)
  {
    $this->diningAreasAdditionalSanitationException = $diningAreasAdditionalSanitationException;
  }
  public function getDiningAreasAdditionalSanitationException()
  {
    return $this->diningAreasAdditionalSanitationException;
  }
  public function setDisposableFlatware($disposableFlatware)
  {
    $this->disposableFlatware = $disposableFlatware;
  }
  public function getDisposableFlatware()
  {
    return $this->disposableFlatware;
  }
  public function setDisposableFlatwareException($disposableFlatwareException)
  {
    $this->disposableFlatwareException = $disposableFlatwareException;
  }
  public function getDisposableFlatwareException()
  {
    return $this->disposableFlatwareException;
  }
  public function setFoodPreparationAndServingAdditionalSafety($foodPreparationAndServingAdditionalSafety)
  {
    $this->foodPreparationAndServingAdditionalSafety = $foodPreparationAndServingAdditionalSafety;
  }
  public function getFoodPreparationAndServingAdditionalSafety()
  {
    return $this->foodPreparationAndServingAdditionalSafety;
  }
  public function setFoodPreparationAndServingAdditionalSafetyException($foodPreparationAndServingAdditionalSafetyException)
  {
    $this->foodPreparationAndServingAdditionalSafetyException = $foodPreparationAndServingAdditionalSafetyException;
  }
  public function getFoodPreparationAndServingAdditionalSafetyException()
  {
    return $this->foodPreparationAndServingAdditionalSafetyException;
  }
  public function setIndividualPackagedMeals($individualPackagedMeals)
  {
    $this->individualPackagedMeals = $individualPackagedMeals;
  }
  public function getIndividualPackagedMeals()
  {
    return $this->individualPackagedMeals;
  }
  public function setIndividualPackagedMealsException($individualPackagedMealsException)
  {
    $this->individualPackagedMealsException = $individualPackagedMealsException;
  }
  public function getIndividualPackagedMealsException()
  {
    return $this->individualPackagedMealsException;
  }
  public function setSingleUseFoodMenus($singleUseFoodMenus)
  {
    $this->singleUseFoodMenus = $singleUseFoodMenus;
  }
  public function getSingleUseFoodMenus()
  {
    return $this->singleUseFoodMenus;
  }
  public function setSingleUseFoodMenusException($singleUseFoodMenusException)
  {
    $this->singleUseFoodMenusException = $singleUseFoodMenusException;
  }
  public function getSingleUseFoodMenusException()
  {
    return $this->singleUseFoodMenusException;
  }
}

class Google_Service_MyBusiness_Ingredient extends Google_Collection
{
  protected $collection_key = 'labels';
  protected $internal_gapi_mappings = array(
  );
  protected $labelsType = 'Google_Service_MyBusiness_MenuLabel';
  protected $labelsDataType = 'array';


  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
}

class Google_Service_MyBusiness_InsuranceNetwork extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $networkId;
  public $networkNames;
  public $payerNames;
  public $state;


  public function setNetworkId($networkId)
  {
    $this->networkId = $networkId;
  }
  public function getNetworkId()
  {
    return $this->networkId;
  }
  public function setNetworkNames($networkNames)
  {
    $this->networkNames = $networkNames;
  }
  public function getNetworkNames()
  {
    return $this->networkNames;
  }
  public function setPayerNames($payerNames)
  {
    $this->payerNames = $payerNames;
  }
  public function getPayerNames()
  {
    return $this->payerNames;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
}

class Google_Service_MyBusiness_Invitation extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $name;
  public $role;
  protected $targetAccountType = 'Google_Service_MyBusiness_Account';
  protected $targetAccountDataType = '';
  protected $targetLocationType = 'Google_Service_MyBusiness_TargetLocation';
  protected $targetLocationDataType = '';


  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setRole($role)
  {
    $this->role = $role;
  }
  public function getRole()
  {
    return $this->role;
  }
  public function setTargetAccount(Google_Service_MyBusiness_Account $targetAccount)
  {
    $this->targetAccount = $targetAccount;
  }
  public function getTargetAccount()
  {
    return $this->targetAccount;
  }
  public function setTargetLocation(Google_Service_MyBusiness_TargetLocation $targetLocation)
  {
    $this->targetLocation = $targetLocation;
  }
  public function getTargetLocation()
  {
    return $this->targetLocation;
  }
}

class Google_Service_MyBusiness_Item extends Google_Collection
{
  protected $collection_key = 'labels';
  protected $internal_gapi_mappings = array(
  );
  public $itemId;
  protected $labelsType = 'Google_Service_MyBusiness_Label';
  protected $labelsDataType = 'array';
  protected $priceType = 'Google_Service_MyBusiness_Money';
  protected $priceDataType = '';


  public function setItemId($itemId)
  {
    $this->itemId = $itemId;
  }
  public function getItemId()
  {
    return $this->itemId;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setPrice(Google_Service_MyBusiness_Money $price)
  {
    $this->price = $price;
  }
  public function getPrice()
  {
    return $this->price;
  }
}

class Google_Service_MyBusiness_Label extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $description;
  public $displayName;
  public $languageCode;


  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
}

class Google_Service_MyBusiness_LanguagesSpoken extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $arabicSpoken;
  public $arabicSpokenException;
  public $cantoneseSpoken;
  public $cantoneseSpokenException;
  public $dutchSpoken;
  public $dutchSpokenException;
  public $englishSpoken;
  public $englishSpokenException;
  public $filipinoSpoken;
  public $filipinoSpokenException;
  public $frenchSpoken;
  public $frenchSpokenException;
  public $germanSpoken;
  public $germanSpokenException;
  public $hindiSpoken;
  public $hindiSpokenException;
  public $indonesianSpoken;
  public $indonesianSpokenException;
  public $italianSpoken;
  public $italianSpokenException;
  public $japaneseSpoken;
  public $japaneseSpokenException;
  public $koreanSpoken;
  public $koreanSpokenException;
  public $mandarinSpoken;
  public $mandarinSpokenException;
  public $portugueseSpoken;
  public $portugueseSpokenException;
  public $russianSpoken;
  public $russianSpokenException;
  public $spanishSpoken;
  public $spanishSpokenException;
  public $vietnameseSpoken;
  public $vietnameseSpokenException;


  public function setArabicSpoken($arabicSpoken)
  {
    $this->arabicSpoken = $arabicSpoken;
  }
  public function getArabicSpoken()
  {
    return $this->arabicSpoken;
  }
  public function setArabicSpokenException($arabicSpokenException)
  {
    $this->arabicSpokenException = $arabicSpokenException;
  }
  public function getArabicSpokenException()
  {
    return $this->arabicSpokenException;
  }
  public function setCantoneseSpoken($cantoneseSpoken)
  {
    $this->cantoneseSpoken = $cantoneseSpoken;
  }
  public function getCantoneseSpoken()
  {
    return $this->cantoneseSpoken;
  }
  public function setCantoneseSpokenException($cantoneseSpokenException)
  {
    $this->cantoneseSpokenException = $cantoneseSpokenException;
  }
  public function getCantoneseSpokenException()
  {
    return $this->cantoneseSpokenException;
  }
  public function setDutchSpoken($dutchSpoken)
  {
    $this->dutchSpoken = $dutchSpoken;
  }
  public function getDutchSpoken()
  {
    return $this->dutchSpoken;
  }
  public function setDutchSpokenException($dutchSpokenException)
  {
    $this->dutchSpokenException = $dutchSpokenException;
  }
  public function getDutchSpokenException()
  {
    return $this->dutchSpokenException;
  }
  public function setEnglishSpoken($englishSpoken)
  {
    $this->englishSpoken = $englishSpoken;
  }
  public function getEnglishSpoken()
  {
    return $this->englishSpoken;
  }
  public function setEnglishSpokenException($englishSpokenException)
  {
    $this->englishSpokenException = $englishSpokenException;
  }
  public function getEnglishSpokenException()
  {
    return $this->englishSpokenException;
  }
  public function setFilipinoSpoken($filipinoSpoken)
  {
    $this->filipinoSpoken = $filipinoSpoken;
  }
  public function getFilipinoSpoken()
  {
    return $this->filipinoSpoken;
  }
  public function setFilipinoSpokenException($filipinoSpokenException)
  {
    $this->filipinoSpokenException = $filipinoSpokenException;
  }
  public function getFilipinoSpokenException()
  {
    return $this->filipinoSpokenException;
  }
  public function setFrenchSpoken($frenchSpoken)
  {
    $this->frenchSpoken = $frenchSpoken;
  }
  public function getFrenchSpoken()
  {
    return $this->frenchSpoken;
  }
  public function setFrenchSpokenException($frenchSpokenException)
  {
    $this->frenchSpokenException = $frenchSpokenException;
  }
  public function getFrenchSpokenException()
  {
    return $this->frenchSpokenException;
  }
  public function setGermanSpoken($germanSpoken)
  {
    $this->germanSpoken = $germanSpoken;
  }
  public function getGermanSpoken()
  {
    return $this->germanSpoken;
  }
  public function setGermanSpokenException($germanSpokenException)
  {
    $this->germanSpokenException = $germanSpokenException;
  }
  public function getGermanSpokenException()
  {
    return $this->germanSpokenException;
  }
  public function setHindiSpoken($hindiSpoken)
  {
    $this->hindiSpoken = $hindiSpoken;
  }
  public function getHindiSpoken()
  {
    return $this->hindiSpoken;
  }
  public function setHindiSpokenException($hindiSpokenException)
  {
    $this->hindiSpokenException = $hindiSpokenException;
  }
  public function getHindiSpokenException()
  {
    return $this->hindiSpokenException;
  }
  public function setIndonesianSpoken($indonesianSpoken)
  {
    $this->indonesianSpoken = $indonesianSpoken;
  }
  public function getIndonesianSpoken()
  {
    return $this->indonesianSpoken;
  }
  public function setIndonesianSpokenException($indonesianSpokenException)
  {
    $this->indonesianSpokenException = $indonesianSpokenException;
  }
  public function getIndonesianSpokenException()
  {
    return $this->indonesianSpokenException;
  }
  public function setItalianSpoken($italianSpoken)
  {
    $this->italianSpoken = $italianSpoken;
  }
  public function getItalianSpoken()
  {
    return $this->italianSpoken;
  }
  public function setItalianSpokenException($italianSpokenException)
  {
    $this->italianSpokenException = $italianSpokenException;
  }
  public function getItalianSpokenException()
  {
    return $this->italianSpokenException;
  }
  public function setJapaneseSpoken($japaneseSpoken)
  {
    $this->japaneseSpoken = $japaneseSpoken;
  }
  public function getJapaneseSpoken()
  {
    return $this->japaneseSpoken;
  }
  public function setJapaneseSpokenException($japaneseSpokenException)
  {
    $this->japaneseSpokenException = $japaneseSpokenException;
  }
  public function getJapaneseSpokenException()
  {
    return $this->japaneseSpokenException;
  }
  public function setKoreanSpoken($koreanSpoken)
  {
    $this->koreanSpoken = $koreanSpoken;
  }
  public function getKoreanSpoken()
  {
    return $this->koreanSpoken;
  }
  public function setKoreanSpokenException($koreanSpokenException)
  {
    $this->koreanSpokenException = $koreanSpokenException;
  }
  public function getKoreanSpokenException()
  {
    return $this->koreanSpokenException;
  }
  public function setMandarinSpoken($mandarinSpoken)
  {
    $this->mandarinSpoken = $mandarinSpoken;
  }
  public function getMandarinSpoken()
  {
    return $this->mandarinSpoken;
  }
  public function setMandarinSpokenException($mandarinSpokenException)
  {
    $this->mandarinSpokenException = $mandarinSpokenException;
  }
  public function getMandarinSpokenException()
  {
    return $this->mandarinSpokenException;
  }
  public function setPortugueseSpoken($portugueseSpoken)
  {
    $this->portugueseSpoken = $portugueseSpoken;
  }
  public function getPortugueseSpoken()
  {
    return $this->portugueseSpoken;
  }
  public function setPortugueseSpokenException($portugueseSpokenException)
  {
    $this->portugueseSpokenException = $portugueseSpokenException;
  }
  public function getPortugueseSpokenException()
  {
    return $this->portugueseSpokenException;
  }
  public function setRussianSpoken($russianSpoken)
  {
    $this->russianSpoken = $russianSpoken;
  }
  public function getRussianSpoken()
  {
    return $this->russianSpoken;
  }
  public function setRussianSpokenException($russianSpokenException)
  {
    $this->russianSpokenException = $russianSpokenException;
  }
  public function getRussianSpokenException()
  {
    return $this->russianSpokenException;
  }
  public function setSpanishSpoken($spanishSpoken)
  {
    $this->spanishSpoken = $spanishSpoken;
  }
  public function getSpanishSpoken()
  {
    return $this->spanishSpoken;
  }
  public function setSpanishSpokenException($spanishSpokenException)
  {
    $this->spanishSpokenException = $spanishSpokenException;
  }
  public function getSpanishSpokenException()
  {
    return $this->spanishSpokenException;
  }
  public function setVietnameseSpoken($vietnameseSpoken)
  {
    $this->vietnameseSpoken = $vietnameseSpoken;
  }
  public function getVietnameseSpoken()
  {
    return $this->vietnameseSpoken;
  }
  public function setVietnameseSpokenException($vietnameseSpokenException)
  {
    $this->vietnameseSpokenException = $vietnameseSpokenException;
  }
  public function getVietnameseSpokenException()
  {
    return $this->vietnameseSpokenException;
  }
}

class Google_Service_MyBusiness_LatLng extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $latitude;
  public $longitude;


  public function setLatitude($latitude)
  {
    $this->latitude = $latitude;
  }
  public function getLatitude()
  {
    return $this->latitude;
  }
  public function setLongitude($longitude)
  {
    $this->longitude = $longitude;
  }
  public function getLongitude()
  {
    return $this->longitude;
  }
}

class Google_Service_MyBusiness_ListAccountAdminsResponse extends Google_Collection
{
  protected $collection_key = 'admins';
  protected $internal_gapi_mappings = array(
  );
  protected $adminsType = 'Google_Service_MyBusiness_Admin';
  protected $adminsDataType = 'array';


  public function setAdmins($admins)
  {
    $this->admins = $admins;
  }
  public function getAdmins()
  {
    return $this->admins;
  }
}

class Google_Service_MyBusiness_ListAccountsResponse extends Google_Collection
{
  protected $collection_key = 'accounts';
  protected $internal_gapi_mappings = array(
  );
  protected $accountsType = 'Google_Service_MyBusiness_Account';
  protected $accountsDataType = 'array';
  public $nextPageToken;


  public function setAccounts($accounts)
  {
    $this->accounts = $accounts;
  }
  public function getAccounts()
  {
    return $this->accounts;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Google_Service_MyBusiness_ListAnswersResponse extends Google_Collection
{
  protected $collection_key = 'answers';
  protected $internal_gapi_mappings = array(
  );
  protected $answersType = 'Google_Service_MyBusiness_Answer';
  protected $answersDataType = 'array';
  public $nextPageToken;
  public $totalSize;


  public function setAnswers($answers)
  {
    $this->answers = $answers;
  }
  public function getAnswers()
  {
    return $this->answers;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class Google_Service_MyBusiness_ListAttributeMetadataResponse extends Google_Collection
{
  protected $collection_key = 'attributes';
  protected $internal_gapi_mappings = array(
  );
  protected $attributesType = 'Google_Service_MyBusiness_AttributeMetadata';
  protected $attributesDataType = 'array';
  public $nextPageToken;


  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  public function getAttributes()
  {
    return $this->attributes;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Google_Service_MyBusiness_ListBusinessCategoriesResponse extends Google_Collection
{
  protected $collection_key = 'categories';
  protected $internal_gapi_mappings = array(
  );
  protected $categoriesType = 'Google_Service_MyBusiness_Category';
  protected $categoriesDataType = 'array';
  public $nextPageToken;
  public $totalCategoryCount;


  public function setCategories($categories)
  {
    $this->categories = $categories;
  }
  public function getCategories()
  {
    return $this->categories;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setTotalCategoryCount($totalCategoryCount)
  {
    $this->totalCategoryCount = $totalCategoryCount;
  }
  public function getTotalCategoryCount()
  {
    return $this->totalCategoryCount;
  }
}

class Google_Service_MyBusiness_ListCustomerMediaItemsResponse extends Google_Collection
{
  protected $collection_key = 'mediaItems';
  protected $internal_gapi_mappings = array(
  );
  protected $mediaItemsType = 'Google_Service_MyBusiness_MediaItem';
  protected $mediaItemsDataType = 'array';
  public $nextPageToken;
  public $totalMediaItemCount;


  public function setMediaItems($mediaItems)
  {
    $this->mediaItems = $mediaItems;
  }
  public function getMediaItems()
  {
    return $this->mediaItems;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setTotalMediaItemCount($totalMediaItemCount)
  {
    $this->totalMediaItemCount = $totalMediaItemCount;
  }
  public function getTotalMediaItemCount()
  {
    return $this->totalMediaItemCount;
  }
}

class Google_Service_MyBusiness_ListInsuranceNetworksResponse extends Google_Collection
{
  protected $collection_key = 'networks';
  protected $internal_gapi_mappings = array(
  );
  protected $networksType = 'Google_Service_MyBusiness_InsuranceNetwork';
  protected $networksDataType = 'array';
  public $nextPageToken;


  public function setNetworks($networks)
  {
    $this->networks = $networks;
  }
  public function getNetworks()
  {
    return $this->networks;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Google_Service_MyBusiness_ListInvitationsResponse extends Google_Collection
{
  protected $collection_key = 'invitations';
  protected $internal_gapi_mappings = array(
  );
  protected $invitationsType = 'Google_Service_MyBusiness_Invitation';
  protected $invitationsDataType = 'array';


  public function setInvitations($invitations)
  {
    $this->invitations = $invitations;
  }
  public function getInvitations()
  {
    return $this->invitations;
  }
}

class Google_Service_MyBusiness_ListLocalPostsResponse extends Google_Collection
{
  protected $collection_key = 'localPosts';
  protected $internal_gapi_mappings = array(
  );
  protected $localPostsType = 'Google_Service_MyBusiness_LocalPost';
  protected $localPostsDataType = 'array';
  public $nextPageToken;


  public function setLocalPosts($localPosts)
  {
    $this->localPosts = $localPosts;
  }
  public function getLocalPosts()
  {
    return $this->localPosts;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Google_Service_MyBusiness_ListLocationAdminsResponse extends Google_Collection
{
  protected $collection_key = 'admins';
  protected $internal_gapi_mappings = array(
  );
  protected $adminsType = 'Google_Service_MyBusiness_Admin';
  protected $adminsDataType = 'array';


  public function setAdmins($admins)
  {
    $this->admins = $admins;
  }
  public function getAdmins()
  {
    return $this->admins;
  }
}

class Google_Service_MyBusiness_ListLocationsResponse extends Google_Collection
{
  protected $collection_key = 'locations';
  protected $internal_gapi_mappings = array(
  );
  protected $locationsType = 'Google_Service_MyBusiness_Location';
  protected $locationsDataType = 'array';
  public $nextPageToken;
  public $totalSize;


  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  public function getLocations()
  {
    return $this->locations;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class Google_Service_MyBusiness_ListMediaItemsResponse extends Google_Collection
{
  protected $collection_key = 'mediaItems';
  protected $internal_gapi_mappings = array(
  );
  protected $mediaItemsType = 'Google_Service_MyBusiness_MediaItem';
  protected $mediaItemsDataType = 'array';
  public $nextPageToken;
  public $totalMediaItemCount;


  public function setMediaItems($mediaItems)
  {
    $this->mediaItems = $mediaItems;
  }
  public function getMediaItems()
  {
    return $this->mediaItems;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setTotalMediaItemCount($totalMediaItemCount)
  {
    $this->totalMediaItemCount = $totalMediaItemCount;
  }
  public function getTotalMediaItemCount()
  {
    return $this->totalMediaItemCount;
  }
}

class Google_Service_MyBusiness_ListQuestionsResponse extends Google_Collection
{
  protected $collection_key = 'questions';
  protected $internal_gapi_mappings = array(
  );
  public $nextPageToken;
  protected $questionsType = 'Google_Service_MyBusiness_Question';
  protected $questionsDataType = 'array';
  public $totalSize;


  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setQuestions($questions)
  {
    $this->questions = $questions;
  }
  public function getQuestions()
  {
    return $this->questions;
  }
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class Google_Service_MyBusiness_ListRecommendedGoogleLocationsResponse extends Google_Collection
{
  protected $collection_key = 'googleLocations';
  protected $internal_gapi_mappings = array(
  );
  protected $googleLocationsType = 'Google_Service_MyBusiness_GoogleLocation';
  protected $googleLocationsDataType = 'array';
  public $nextPageToken;
  public $totalSize;


  public function setGoogleLocations($googleLocations)
  {
    $this->googleLocations = $googleLocations;
  }
  public function getGoogleLocations()
  {
    return $this->googleLocations;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

class Google_Service_MyBusiness_ListReviewsResponse extends Google_Collection
{
  protected $collection_key = 'reviews';
  protected $internal_gapi_mappings = array(
  );
  public $averageRating;
  public $nextPageToken;
  protected $reviewsType = 'Google_Service_MyBusiness_Review';
  protected $reviewsDataType = 'array';
  public $totalReviewCount;


  public function setAverageRating($averageRating)
  {
    $this->averageRating = $averageRating;
  }
  public function getAverageRating()
  {
    return $this->averageRating;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setReviews($reviews)
  {
    $this->reviews = $reviews;
  }
  public function getReviews()
  {
    return $this->reviews;
  }
  public function setTotalReviewCount($totalReviewCount)
  {
    $this->totalReviewCount = $totalReviewCount;
  }
  public function getTotalReviewCount()
  {
    return $this->totalReviewCount;
  }
}

class Google_Service_MyBusiness_ListVerificationsResponse extends Google_Collection
{
  protected $collection_key = 'verifications';
  protected $internal_gapi_mappings = array(
  );
  public $nextPageToken;
  protected $verificationsType = 'Google_Service_MyBusiness_Verification';
  protected $verificationsDataType = 'array';


  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setVerifications($verifications)
  {
    $this->verifications = $verifications;
  }
  public function getVerifications()
  {
    return $this->verifications;
  }
}

class Google_Service_MyBusiness_LivingArea extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $accessibilityType = 'Google_Service_MyBusiness_LivingAreaAccessibility';
  protected $accessibilityDataType = '';
  protected $eatingType = 'Google_Service_MyBusiness_LivingAreaEating';
  protected $eatingDataType = '';
  protected $featuresType = 'Google_Service_MyBusiness_LivingAreaFeatures';
  protected $featuresDataType = '';
  protected $layoutType = 'Google_Service_MyBusiness_LivingAreaLayout';
  protected $layoutDataType = '';
  protected $sleepingType = 'Google_Service_MyBusiness_LivingAreaSleeping';
  protected $sleepingDataType = '';


  public function setAccessibility(Google_Service_MyBusiness_LivingAreaAccessibility $accessibility)
  {
    $this->accessibility = $accessibility;
  }
  public function getAccessibility()
  {
    return $this->accessibility;
  }
  public function setEating(Google_Service_MyBusiness_LivingAreaEating $eating)
  {
    $this->eating = $eating;
  }
  public function getEating()
  {
    return $this->eating;
  }
  public function setFeatures(Google_Service_MyBusiness_LivingAreaFeatures $features)
  {
    $this->features = $features;
  }
  public function getFeatures()
  {
    return $this->features;
  }
  public function setLayout(Google_Service_MyBusiness_LivingAreaLayout $layout)
  {
    $this->layout = $layout;
  }
  public function getLayout()
  {
    return $this->layout;
  }
  public function setSleeping(Google_Service_MyBusiness_LivingAreaSleeping $sleeping)
  {
    $this->sleeping = $sleeping;
  }
  public function getSleeping()
  {
    return $this->sleeping;
  }
}

class Google_Service_MyBusiness_LivingAreaAccessibility extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $adaCompliantUnit;
  public $adaCompliantUnitException;
  public $hearingAccessibleDoorbell;
  public $hearingAccessibleDoorbellException;
  public $hearingAccessibleFireAlarm;
  public $hearingAccessibleFireAlarmException;
  public $hearingAccessibleUnit;
  public $hearingAccessibleUnitException;
  public $mobilityAccessibleBathtub;
  public $mobilityAccessibleBathtubException;
  public $mobilityAccessibleShower;
  public $mobilityAccessibleShowerException;
  public $mobilityAccessibleToilet;
  public $mobilityAccessibleToiletException;
  public $mobilityAccessibleUnit;
  public $mobilityAccessibleUnitException;


  public function setAdaCompliantUnit($adaCompliantUnit)
  {
    $this->adaCompliantUnit = $adaCompliantUnit;
  }
  public function getAdaCompliantUnit()
  {
    return $this->adaCompliantUnit;
  }
  public function setAdaCompliantUnitException($adaCompliantUnitException)
  {
    $this->adaCompliantUnitException = $adaCompliantUnitException;
  }
  public function getAdaCompliantUnitException()
  {
    return $this->adaCompliantUnitException;
  }
  public function setHearingAccessibleDoorbell($hearingAccessibleDoorbell)
  {
    $this->hearingAccessibleDoorbell = $hearingAccessibleDoorbell;
  }
  public function getHearingAccessibleDoorbell()
  {
    return $this->hearingAccessibleDoorbell;
  }
  public function setHearingAccessibleDoorbellException($hearingAccessibleDoorbellException)
  {
    $this->hearingAccessibleDoorbellException = $hearingAccessibleDoorbellException;
  }
  public function getHearingAccessibleDoorbellException()
  {
    return $this->hearingAccessibleDoorbellException;
  }
  public function setHearingAccessibleFireAlarm($hearingAccessibleFireAlarm)
  {
    $this->hearingAccessibleFireAlarm = $hearingAccessibleFireAlarm;
  }
  public function getHearingAccessibleFireAlarm()
  {
    return $this->hearingAccessibleFireAlarm;
  }
  public function setHearingAccessibleFireAlarmException($hearingAccessibleFireAlarmException)
  {
    $this->hearingAccessibleFireAlarmException = $hearingAccessibleFireAlarmException;
  }
  public function getHearingAccessibleFireAlarmException()
  {
    return $this->hearingAccessibleFireAlarmException;
  }
  public function setHearingAccessibleUnit($hearingAccessibleUnit)
  {
    $this->hearingAccessibleUnit = $hearingAccessibleUnit;
  }
  public function getHearingAccessibleUnit()
  {
    return $this->hearingAccessibleUnit;
  }
  public function setHearingAccessibleUnitException($hearingAccessibleUnitException)
  {
    $this->hearingAccessibleUnitException = $hearingAccessibleUnitException;
  }
  public function getHearingAccessibleUnitException()
  {
    return $this->hearingAccessibleUnitException;
  }
  public function setMobilityAccessibleBathtub($mobilityAccessibleBathtub)
  {
    $this->mobilityAccessibleBathtub = $mobilityAccessibleBathtub;
  }
  public function getMobilityAccessibleBathtub()
  {
    return $this->mobilityAccessibleBathtub;
  }
  public function setMobilityAccessibleBathtubException($mobilityAccessibleBathtubException)
  {
    $this->mobilityAccessibleBathtubException = $mobilityAccessibleBathtubException;
  }
  public function getMobilityAccessibleBathtubException()
  {
    return $this->mobilityAccessibleBathtubException;
  }
  public function setMobilityAccessibleShower($mobilityAccessibleShower)
  {
    $this->mobilityAccessibleShower = $mobilityAccessibleShower;
  }
  public function getMobilityAccessibleShower()
  {
    return $this->mobilityAccessibleShower;
  }
  public function setMobilityAccessibleShowerException($mobilityAccessibleShowerException)
  {
    $this->mobilityAccessibleShowerException = $mobilityAccessibleShowerException;
  }
  public function getMobilityAccessibleShowerException()
  {
    return $this->mobilityAccessibleShowerException;
  }
  public function setMobilityAccessibleToilet($mobilityAccessibleToilet)
  {
    $this->mobilityAccessibleToilet = $mobilityAccessibleToilet;
  }
  public function getMobilityAccessibleToilet()
  {
    return $this->mobilityAccessibleToilet;
  }
  public function setMobilityAccessibleToiletException($mobilityAccessibleToiletException)
  {
    $this->mobilityAccessibleToiletException = $mobilityAccessibleToiletException;
  }
  public function getMobilityAccessibleToiletException()
  {
    return $this->mobilityAccessibleToiletException;
  }
  public function setMobilityAccessibleUnit($mobilityAccessibleUnit)
  {
    $this->mobilityAccessibleUnit = $mobilityAccessibleUnit;
  }
  public function getMobilityAccessibleUnit()
  {
    return $this->mobilityAccessibleUnit;
  }
  public function setMobilityAccessibleUnitException($mobilityAccessibleUnitException)
  {
    $this->mobilityAccessibleUnitException = $mobilityAccessibleUnitException;
  }
  public function getMobilityAccessibleUnitException()
  {
    return $this->mobilityAccessibleUnitException;
  }
}

class Google_Service_MyBusiness_LivingAreaEating extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $coffeeMaker;
  public $coffeeMakerException;
  public $cookware;
  public $cookwareException;
  public $dishwasher;
  public $dishwasherException;
  public $indoorGrill;
  public $indoorGrillException;
  public $kettle;
  public $kettleException;
  public $kitchenAvailable;
  public $kitchenAvailableException;
  public $microwave;
  public $microwaveException;
  public $minibar;
  public $minibarException;
  public $outdoorGrill;
  public $outdoorGrillException;
  public $oven;
  public $ovenException;
  public $refrigerator;
  public $refrigeratorException;
  public $sink;
  public $sinkException;
  public $snackbar;
  public $snackbarException;
  public $stove;
  public $stoveException;
  public $teaStation;
  public $teaStationException;
  public $toaster;
  public $toasterException;


  public function setCoffeeMaker($coffeeMaker)
  {
    $this->coffeeMaker = $coffeeMaker;
  }
  public function getCoffeeMaker()
  {
    return $this->coffeeMaker;
  }
  public function setCoffeeMakerException($coffeeMakerException)
  {
    $this->coffeeMakerException = $coffeeMakerException;
  }
  public function getCoffeeMakerException()
  {
    return $this->coffeeMakerException;
  }
  public function setCookware($cookware)
  {
    $this->cookware = $cookware;
  }
  public function getCookware()
  {
    return $this->cookware;
  }
  public function setCookwareException($cookwareException)
  {
    $this->cookwareException = $cookwareException;
  }
  public function getCookwareException()
  {
    return $this->cookwareException;
  }
  public function setDishwasher($dishwasher)
  {
    $this->dishwasher = $dishwasher;
  }
  public function getDishwasher()
  {
    return $this->dishwasher;
  }
  public function setDishwasherException($dishwasherException)
  {
    $this->dishwasherException = $dishwasherException;
  }
  public function getDishwasherException()
  {
    return $this->dishwasherException;
  }
  public function setIndoorGrill($indoorGrill)
  {
    $this->indoorGrill = $indoorGrill;
  }
  public function getIndoorGrill()
  {
    return $this->indoorGrill;
  }
  public function setIndoorGrillException($indoorGrillException)
  {
    $this->indoorGrillException = $indoorGrillException;
  }
  public function getIndoorGrillException()
  {
    return $this->indoorGrillException;
  }
  public function setKettle($kettle)
  {
    $this->kettle = $kettle;
  }
  public function getKettle()
  {
    return $this->kettle;
  }
  public function setKettleException($kettleException)
  {
    $this->kettleException = $kettleException;
  }
  public function getKettleException()
  {
    return $this->kettleException;
  }
  public function setKitchenAvailable($kitchenAvailable)
  {
    $this->kitchenAvailable = $kitchenAvailable;
  }
  public function getKitchenAvailable()
  {
    return $this->kitchenAvailable;
  }
  public function setKitchenAvailableException($kitchenAvailableException)
  {
    $this->kitchenAvailableException = $kitchenAvailableException;
  }
  public function getKitchenAvailableException()
  {
    return $this->kitchenAvailableException;
  }
  public function setMicrowave($microwave)
  {
    $this->microwave = $microwave;
  }
  public function getMicrowave()
  {
    return $this->microwave;
  }
  public function setMicrowaveException($microwaveException)
  {
    $this->microwaveException = $microwaveException;
  }
  public function getMicrowaveException()
  {
    return $this->microwaveException;
  }
  public function setMinibar($minibar)
  {
    $this->minibar = $minibar;
  }
  public function getMinibar()
  {
    return $this->minibar;
  }
  public function setMinibarException($minibarException)
  {
    $this->minibarException = $minibarException;
  }
  public function getMinibarException()
  {
    return $this->minibarException;
  }
  public function setOutdoorGrill($outdoorGrill)
  {
    $this->outdoorGrill = $outdoorGrill;
  }
  public function getOutdoorGrill()
  {
    return $this->outdoorGrill;
  }
  public function setOutdoorGrillException($outdoorGrillException)
  {
    $this->outdoorGrillException = $outdoorGrillException;
  }
  public function getOutdoorGrillException()
  {
    return $this->outdoorGrillException;
  }
  public function setOven($oven)
  {
    $this->oven = $oven;
  }
  public function getOven()
  {
    return $this->oven;
  }
  public function setOvenException($ovenException)
  {
    $this->ovenException = $ovenException;
  }
  public function getOvenException()
  {
    return $this->ovenException;
  }
  public function setRefrigerator($refrigerator)
  {
    $this->refrigerator = $refrigerator;
  }
  public function getRefrigerator()
  {
    return $this->refrigerator;
  }
  public function setRefrigeratorException($refrigeratorException)
  {
    $this->refrigeratorException = $refrigeratorException;
  }
  public function getRefrigeratorException()
  {
    return $this->refrigeratorException;
  }
  public function setSink($sink)
  {
    $this->sink = $sink;
  }
  public function getSink()
  {
    return $this->sink;
  }
  public function setSinkException($sinkException)
  {
    $this->sinkException = $sinkException;
  }
  public function getSinkException()
  {
    return $this->sinkException;
  }
  public function setSnackbar($snackbar)
  {
    $this->snackbar = $snackbar;
  }
  public function getSnackbar()
  {
    return $this->snackbar;
  }
  public function setSnackbarException($snackbarException)
  {
    $this->snackbarException = $snackbarException;
  }
  public function getSnackbarException()
  {
    return $this->snackbarException;
  }
  public function setStove($stove)
  {
    $this->stove = $stove;
  }
  public function getStove()
  {
    return $this->stove;
  }
  public function setStoveException($stoveException)
  {
    $this->stoveException = $stoveException;
  }
  public function getStoveException()
  {
    return $this->stoveException;
  }
  public function setTeaStation($teaStation)
  {
    $this->teaStation = $teaStation;
  }
  public function getTeaStation()
  {
    return $this->teaStation;
  }
  public function setTeaStationException($teaStationException)
  {
    $this->teaStationException = $teaStationException;
  }
  public function getTeaStationException()
  {
    return $this->teaStationException;
  }
  public function setToaster($toaster)
  {
    $this->toaster = $toaster;
  }
  public function getToaster()
  {
    return $this->toaster;
  }
  public function setToasterException($toasterException)
  {
    $this->toasterException = $toasterException;
  }
  public function getToasterException()
  {
    return $this->toasterException;
  }
}

class Google_Service_MyBusiness_LivingAreaFeatures extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $airConditioning;
  public $airConditioningException;
  public $bathtub;
  public $bathtubException;
  public $bidet;
  public $bidetException;
  public $dryer;
  public $dryerException;
  public $electronicRoomKey;
  public $electronicRoomKeyException;
  public $fireplace;
  public $fireplaceException;
  public $hairdryer;
  public $hairdryerException;
  public $heating;
  public $heatingException;
  public $inunitSafe;
  public $inunitSafeException;
  public $inunitWifiAvailable;
  public $inunitWifiAvailableException;
  public $ironingEquipment;
  public $ironingEquipmentException;
  public $payPerViewMovies;
  public $payPerViewMoviesException;
  public $privateBathroom;
  public $privateBathroomException;
  public $shower;
  public $showerException;
  public $toilet;
  public $toiletException;
  public $tv;
  public $tvCasting;
  public $tvCastingException;
  public $tvException;
  public $tvStreaming;
  public $tvStreamingException;
  public $universalPowerAdapters;
  public $universalPowerAdaptersException;
  public $washer;
  public $washerException;


  public function setAirConditioning($airConditioning)
  {
    $this->airConditioning = $airConditioning;
  }
  public function getAirConditioning()
  {
    return $this->airConditioning;
  }
  public function setAirConditioningException($airConditioningException)
  {
    $this->airConditioningException = $airConditioningException;
  }
  public function getAirConditioningException()
  {
    return $this->airConditioningException;
  }
  public function setBathtub($bathtub)
  {
    $this->bathtub = $bathtub;
  }
  public function getBathtub()
  {
    return $this->bathtub;
  }
  public function setBathtubException($bathtubException)
  {
    $this->bathtubException = $bathtubException;
  }
  public function getBathtubException()
  {
    return $this->bathtubException;
  }
  public function setBidet($bidet)
  {
    $this->bidet = $bidet;
  }
  public function getBidet()
  {
    return $this->bidet;
  }
  public function setBidetException($bidetException)
  {
    $this->bidetException = $bidetException;
  }
  public function getBidetException()
  {
    return $this->bidetException;
  }
  public function setDryer($dryer)
  {
    $this->dryer = $dryer;
  }
  public function getDryer()
  {
    return $this->dryer;
  }
  public function setDryerException($dryerException)
  {
    $this->dryerException = $dryerException;
  }
  public function getDryerException()
  {
    return $this->dryerException;
  }
  public function setElectronicRoomKey($electronicRoomKey)
  {
    $this->electronicRoomKey = $electronicRoomKey;
  }
  public function getElectronicRoomKey()
  {
    return $this->electronicRoomKey;
  }
  public function setElectronicRoomKeyException($electronicRoomKeyException)
  {
    $this->electronicRoomKeyException = $electronicRoomKeyException;
  }
  public function getElectronicRoomKeyException()
  {
    return $this->electronicRoomKeyException;
  }
  public function setFireplace($fireplace)
  {
    $this->fireplace = $fireplace;
  }
  public function getFireplace()
  {
    return $this->fireplace;
  }
  public function setFireplaceException($fireplaceException)
  {
    $this->fireplaceException = $fireplaceException;
  }
  public function getFireplaceException()
  {
    return $this->fireplaceException;
  }
  public function setHairdryer($hairdryer)
  {
    $this->hairdryer = $hairdryer;
  }
  public function getHairdryer()
  {
    return $this->hairdryer;
  }
  public function setHairdryerException($hairdryerException)
  {
    $this->hairdryerException = $hairdryerException;
  }
  public function getHairdryerException()
  {
    return $this->hairdryerException;
  }
  public function setHeating($heating)
  {
    $this->heating = $heating;
  }
  public function getHeating()
  {
    return $this->heating;
  }
  public function setHeatingException($heatingException)
  {
    $this->heatingException = $heatingException;
  }
  public function getHeatingException()
  {
    return $this->heatingException;
  }
  public function setInunitSafe($inunitSafe)
  {
    $this->inunitSafe = $inunitSafe;
  }
  public function getInunitSafe()
  {
    return $this->inunitSafe;
  }
  public function setInunitSafeException($inunitSafeException)
  {
    $this->inunitSafeException = $inunitSafeException;
  }
  public function getInunitSafeException()
  {
    return $this->inunitSafeException;
  }
  public function setInunitWifiAvailable($inunitWifiAvailable)
  {
    $this->inunitWifiAvailable = $inunitWifiAvailable;
  }
  public function getInunitWifiAvailable()
  {
    return $this->inunitWifiAvailable;
  }
  public function setInunitWifiAvailableException($inunitWifiAvailableException)
  {
    $this->inunitWifiAvailableException = $inunitWifiAvailableException;
  }
  public function getInunitWifiAvailableException()
  {
    return $this->inunitWifiAvailableException;
  }
  public function setIroningEquipment($ironingEquipment)
  {
    $this->ironingEquipment = $ironingEquipment;
  }
  public function getIroningEquipment()
  {
    return $this->ironingEquipment;
  }
  public function setIroningEquipmentException($ironingEquipmentException)
  {
    $this->ironingEquipmentException = $ironingEquipmentException;
  }
  public function getIroningEquipmentException()
  {
    return $this->ironingEquipmentException;
  }
  public function setPayPerViewMovies($payPerViewMovies)
  {
    $this->payPerViewMovies = $payPerViewMovies;
  }
  public function getPayPerViewMovies()
  {
    return $this->payPerViewMovies;
  }
  public function setPayPerViewMoviesException($payPerViewMoviesException)
  {
    $this->payPerViewMoviesException = $payPerViewMoviesException;
  }
  public function getPayPerViewMoviesException()
  {
    return $this->payPerViewMoviesException;
  }
  public function setPrivateBathroom($privateBathroom)
  {
    $this->privateBathroom = $privateBathroom;
  }
  public function getPrivateBathroom()
  {
    return $this->privateBathroom;
  }
  public function setPrivateBathroomException($privateBathroomException)
  {
    $this->privateBathroomException = $privateBathroomException;
  }
  public function getPrivateBathroomException()
  {
    return $this->privateBathroomException;
  }
  public function setShower($shower)
  {
    $this->shower = $shower;
  }
  public function getShower()
  {
    return $this->shower;
  }
  public function setShowerException($showerException)
  {
    $this->showerException = $showerException;
  }
  public function getShowerException()
  {
    return $this->showerException;
  }
  public function setToilet($toilet)
  {
    $this->toilet = $toilet;
  }
  public function getToilet()
  {
    return $this->toilet;
  }
  public function setToiletException($toiletException)
  {
    $this->toiletException = $toiletException;
  }
  public function getToiletException()
  {
    return $this->toiletException;
  }
  public function setTv($tv)
  {
    $this->tv = $tv;
  }
  public function getTv()
  {
    return $this->tv;
  }
  public function setTvCasting($tvCasting)
  {
    $this->tvCasting = $tvCasting;
  }
  public function getTvCasting()
  {
    return $this->tvCasting;
  }
  public function setTvCastingException($tvCastingException)
  {
    $this->tvCastingException = $tvCastingException;
  }
  public function getTvCastingException()
  {
    return $this->tvCastingException;
  }
  public function setTvException($tvException)
  {
    $this->tvException = $tvException;
  }
  public function getTvException()
  {
    return $this->tvException;
  }
  public function setTvStreaming($tvStreaming)
  {
    $this->tvStreaming = $tvStreaming;
  }
  public function getTvStreaming()
  {
    return $this->tvStreaming;
  }
  public function setTvStreamingException($tvStreamingException)
  {
    $this->tvStreamingException = $tvStreamingException;
  }
  public function getTvStreamingException()
  {
    return $this->tvStreamingException;
  }
  public function setUniversalPowerAdapters($universalPowerAdapters)
  {
    $this->universalPowerAdapters = $universalPowerAdapters;
  }
  public function getUniversalPowerAdapters()
  {
    return $this->universalPowerAdapters;
  }
  public function setUniversalPowerAdaptersException($universalPowerAdaptersException)
  {
    $this->universalPowerAdaptersException = $universalPowerAdaptersException;
  }
  public function getUniversalPowerAdaptersException()
  {
    return $this->universalPowerAdaptersException;
  }
  public function setWasher($washer)
  {
    $this->washer = $washer;
  }
  public function getWasher()
  {
    return $this->washer;
  }
  public function setWasherException($washerException)
  {
    $this->washerException = $washerException;
  }
  public function getWasherException()
  {
    return $this->washerException;
  }
}

class Google_Service_MyBusiness_LivingAreaLayout extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $balcony;
  public $balconyException;
  public $livingAreaSqMeters;
  public $livingAreaSqMetersException;
  public $loft;
  public $loftException;
  public $nonSmoking;
  public $nonSmokingException;
  public $patio;
  public $patioException;
  public $stairs;
  public $stairsException;


  public function setBalcony($balcony)
  {
    $this->balcony = $balcony;
  }
  public function getBalcony()
  {
    return $this->balcony;
  }
  public function setBalconyException($balconyException)
  {
    $this->balconyException = $balconyException;
  }
  public function getBalconyException()
  {
    return $this->balconyException;
  }
  public function setLivingAreaSqMeters($livingAreaSqMeters)
  {
    $this->livingAreaSqMeters = $livingAreaSqMeters;
  }
  public function getLivingAreaSqMeters()
  {
    return $this->livingAreaSqMeters;
  }
  public function setLivingAreaSqMetersException($livingAreaSqMetersException)
  {
    $this->livingAreaSqMetersException = $livingAreaSqMetersException;
  }
  public function getLivingAreaSqMetersException()
  {
    return $this->livingAreaSqMetersException;
  }
  public function setLoft($loft)
  {
    $this->loft = $loft;
  }
  public function getLoft()
  {
    return $this->loft;
  }
  public function setLoftException($loftException)
  {
    $this->loftException = $loftException;
  }
  public function getLoftException()
  {
    return $this->loftException;
  }
  public function setNonSmoking($nonSmoking)
  {
    $this->nonSmoking = $nonSmoking;
  }
  public function getNonSmoking()
  {
    return $this->nonSmoking;
  }
  public function setNonSmokingException($nonSmokingException)
  {
    $this->nonSmokingException = $nonSmokingException;
  }
  public function getNonSmokingException()
  {
    return $this->nonSmokingException;
  }
  public function setPatio($patio)
  {
    $this->patio = $patio;
  }
  public function getPatio()
  {
    return $this->patio;
  }
  public function setPatioException($patioException)
  {
    $this->patioException = $patioException;
  }
  public function getPatioException()
  {
    return $this->patioException;
  }
  public function setStairs($stairs)
  {
    $this->stairs = $stairs;
  }
  public function getStairs()
  {
    return $this->stairs;
  }
  public function setStairsException($stairsException)
  {
    $this->stairsException = $stairsException;
  }
  public function getStairsException()
  {
    return $this->stairsException;
  }
}

class Google_Service_MyBusiness_LivingAreaSleeping extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $bedsCount;
  public $bedsCountException;
  public $bunkBedsCount;
  public $bunkBedsCountException;
  public $cribsCount;
  public $cribsCountException;
  public $doubleBedsCount;
  public $doubleBedsCountException;
  public $featherPillows;
  public $featherPillowsException;
  public $hypoallergenicBedding;
  public $hypoallergenicBeddingException;
  public $kingBedsCount;
  public $kingBedsCountException;
  public $memoryFoamPillows;
  public $memoryFoamPillowsException;
  public $otherBedsCount;
  public $otherBedsCountException;
  public $queenBedsCount;
  public $queenBedsCountException;
  public $rollAwayBedsCount;
  public $rollAwayBedsCountException;
  public $singleOrTwinBedsCount;
  public $singleOrTwinBedsCountException;
  public $sofaBedsCount;
  public $sofaBedsCountException;
  public $syntheticPillows;
  public $syntheticPillowsException;


  public function setBedsCount($bedsCount)
  {
    $this->bedsCount = $bedsCount;
  }
  public function getBedsCount()
  {
    return $this->bedsCount;
  }
  public function setBedsCountException($bedsCountException)
  {
    $this->bedsCountException = $bedsCountException;
  }
  public function getBedsCountException()
  {
    return $this->bedsCountException;
  }
  public function setBunkBedsCount($bunkBedsCount)
  {
    $this->bunkBedsCount = $bunkBedsCount;
  }
  public function getBunkBedsCount()
  {
    return $this->bunkBedsCount;
  }
  public function setBunkBedsCountException($bunkBedsCountException)
  {
    $this->bunkBedsCountException = $bunkBedsCountException;
  }
  public function getBunkBedsCountException()
  {
    return $this->bunkBedsCountException;
  }
  public function setCribsCount($cribsCount)
  {
    $this->cribsCount = $cribsCount;
  }
  public function getCribsCount()
  {
    return $this->cribsCount;
  }
  public function setCribsCountException($cribsCountException)
  {
    $this->cribsCountException = $cribsCountException;
  }
  public function getCribsCountException()
  {
    return $this->cribsCountException;
  }
  public function setDoubleBedsCount($doubleBedsCount)
  {
    $this->doubleBedsCount = $doubleBedsCount;
  }
  public function getDoubleBedsCount()
  {
    return $this->doubleBedsCount;
  }
  public function setDoubleBedsCountException($doubleBedsCountException)
  {
    $this->doubleBedsCountException = $doubleBedsCountException;
  }
  public function getDoubleBedsCountException()
  {
    return $this->doubleBedsCountException;
  }
  public function setFeatherPillows($featherPillows)
  {
    $this->featherPillows = $featherPillows;
  }
  public function getFeatherPillows()
  {
    return $this->featherPillows;
  }
  public function setFeatherPillowsException($featherPillowsException)
  {
    $this->featherPillowsException = $featherPillowsException;
  }
  public function getFeatherPillowsException()
  {
    return $this->featherPillowsException;
  }
  public function setHypoallergenicBedding($hypoallergenicBedding)
  {
    $this->hypoallergenicBedding = $hypoallergenicBedding;
  }
  public function getHypoallergenicBedding()
  {
    return $this->hypoallergenicBedding;
  }
  public function setHypoallergenicBeddingException($hypoallergenicBeddingException)
  {
    $this->hypoallergenicBeddingException = $hypoallergenicBeddingException;
  }
  public function getHypoallergenicBeddingException()
  {
    return $this->hypoallergenicBeddingException;
  }
  public function setKingBedsCount($kingBedsCount)
  {
    $this->kingBedsCount = $kingBedsCount;
  }
  public function getKingBedsCount()
  {
    return $this->kingBedsCount;
  }
  public function setKingBedsCountException($kingBedsCountException)
  {
    $this->kingBedsCountException = $kingBedsCountException;
  }
  public function getKingBedsCountException()
  {
    return $this->kingBedsCountException;
  }
  public function setMemoryFoamPillows($memoryFoamPillows)
  {
    $this->memoryFoamPillows = $memoryFoamPillows;
  }
  public function getMemoryFoamPillows()
  {
    return $this->memoryFoamPillows;
  }
  public function setMemoryFoamPillowsException($memoryFoamPillowsException)
  {
    $this->memoryFoamPillowsException = $memoryFoamPillowsException;
  }
  public function getMemoryFoamPillowsException()
  {
    return $this->memoryFoamPillowsException;
  }
  public function setOtherBedsCount($otherBedsCount)
  {
    $this->otherBedsCount = $otherBedsCount;
  }
  public function getOtherBedsCount()
  {
    return $this->otherBedsCount;
  }
  public function setOtherBedsCountException($otherBedsCountException)
  {
    $this->otherBedsCountException = $otherBedsCountException;
  }
  public function getOtherBedsCountException()
  {
    return $this->otherBedsCountException;
  }
  public function setQueenBedsCount($queenBedsCount)
  {
    $this->queenBedsCount = $queenBedsCount;
  }
  public function getQueenBedsCount()
  {
    return $this->queenBedsCount;
  }
  public function setQueenBedsCountException($queenBedsCountException)
  {
    $this->queenBedsCountException = $queenBedsCountException;
  }
  public function getQueenBedsCountException()
  {
    return $this->queenBedsCountException;
  }
  public function setRollAwayBedsCount($rollAwayBedsCount)
  {
    $this->rollAwayBedsCount = $rollAwayBedsCount;
  }
  public function getRollAwayBedsCount()
  {
    return $this->rollAwayBedsCount;
  }
  public function setRollAwayBedsCountException($rollAwayBedsCountException)
  {
    $this->rollAwayBedsCountException = $rollAwayBedsCountException;
  }
  public function getRollAwayBedsCountException()
  {
    return $this->rollAwayBedsCountException;
  }
  public function setSingleOrTwinBedsCount($singleOrTwinBedsCount)
  {
    $this->singleOrTwinBedsCount = $singleOrTwinBedsCount;
  }
  public function getSingleOrTwinBedsCount()
  {
    return $this->singleOrTwinBedsCount;
  }
  public function setSingleOrTwinBedsCountException($singleOrTwinBedsCountException)
  {
    $this->singleOrTwinBedsCountException = $singleOrTwinBedsCountException;
  }
  public function getSingleOrTwinBedsCountException()
  {
    return $this->singleOrTwinBedsCountException;
  }
  public function setSofaBedsCount($sofaBedsCount)
  {
    $this->sofaBedsCount = $sofaBedsCount;
  }
  public function getSofaBedsCount()
  {
    return $this->sofaBedsCount;
  }
  public function setSofaBedsCountException($sofaBedsCountException)
  {
    $this->sofaBedsCountException = $sofaBedsCountException;
  }
  public function getSofaBedsCountException()
  {
    return $this->sofaBedsCountException;
  }
  public function setSyntheticPillows($syntheticPillows)
  {
    $this->syntheticPillows = $syntheticPillows;
  }
  public function getSyntheticPillows()
  {
    return $this->syntheticPillows;
  }
  public function setSyntheticPillowsException($syntheticPillowsException)
  {
    $this->syntheticPillowsException = $syntheticPillowsException;
  }
  public function getSyntheticPillowsException()
  {
    return $this->syntheticPillowsException;
  }
}

class Google_Service_MyBusiness_LocalPost extends Google_Collection
{
  protected $collection_key = 'media';
  protected $internal_gapi_mappings = array(
  );
  public $alertType;
  protected $callToActionType = 'Google_Service_MyBusiness_CallToAction';
  protected $callToActionDataType = '';
  public $createTime;
  protected $eventType = 'Google_Service_MyBusiness_LocalPostEvent';
  protected $eventDataType = '';
  public $languageCode;
  protected $mediaType = 'Google_Service_MyBusiness_MediaItem';
  protected $mediaDataType = 'array';
  public $name;
  protected $offerType = 'Google_Service_MyBusiness_LocalPostOffer';
  protected $offerDataType = '';
  public $searchUrl;
  public $state;
  public $summary;
  public $topicType;
  public $updateTime;


  public function setAlertType($alertType)
  {
    $this->alertType = $alertType;
  }
  public function getAlertType()
  {
    return $this->alertType;
  }
  public function setCallToAction(Google_Service_MyBusiness_CallToAction $callToAction)
  {
    $this->callToAction = $callToAction;
  }
  public function getCallToAction()
  {
    return $this->callToAction;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setEvent(Google_Service_MyBusiness_LocalPostEvent $event)
  {
    $this->event = $event;
  }
  public function getEvent()
  {
    return $this->event;
  }
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  public function setMedia($media)
  {
    $this->media = $media;
  }
  public function getMedia()
  {
    return $this->media;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setOffer(Google_Service_MyBusiness_LocalPostOffer $offer)
  {
    $this->offer = $offer;
  }
  public function getOffer()
  {
    return $this->offer;
  }
  public function setSearchUrl($searchUrl)
  {
    $this->searchUrl = $searchUrl;
  }
  public function getSearchUrl()
  {
    return $this->searchUrl;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
  public function setSummary($summary)
  {
    $this->summary = $summary;
  }
  public function getSummary()
  {
    return $this->summary;
  }
  public function setTopicType($topicType)
  {
    $this->topicType = $topicType;
  }
  public function getTopicType()
  {
    return $this->topicType;
  }
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

class Google_Service_MyBusiness_LocalPostEvent extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $scheduleType = 'Google_Service_MyBusiness_TimeInterval';
  protected $scheduleDataType = '';
  public $title;


  public function setSchedule(Google_Service_MyBusiness_TimeInterval $schedule)
  {
    $this->schedule = $schedule;
  }
  public function getSchedule()
  {
    return $this->schedule;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
}

class Google_Service_MyBusiness_LocalPostMetrics extends Google_Collection
{
  protected $collection_key = 'metricValues';
  protected $internal_gapi_mappings = array(
  );
  public $localPostName;
  protected $metricValuesType = 'Google_Service_MyBusiness_MetricValue';
  protected $metricValuesDataType = 'array';


  public function setLocalPostName($localPostName)
  {
    $this->localPostName = $localPostName;
  }
  public function getLocalPostName()
  {
    return $this->localPostName;
  }
  public function setMetricValues($metricValues)
  {
    $this->metricValues = $metricValues;
  }
  public function getMetricValues()
  {
    return $this->metricValues;
  }
}

class Google_Service_MyBusiness_LocalPostOffer extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $couponCode;
  public $redeemOnlineUrl;
  public $termsConditions;


  public function setCouponCode($couponCode)
  {
    $this->couponCode = $couponCode;
  }
  public function getCouponCode()
  {
    return $this->couponCode;
  }
  public function setRedeemOnlineUrl($redeemOnlineUrl)
  {
    $this->redeemOnlineUrl = $redeemOnlineUrl;
  }
  public function getRedeemOnlineUrl()
  {
    return $this->redeemOnlineUrl;
  }
  public function setTermsConditions($termsConditions)
  {
    $this->termsConditions = $termsConditions;
  }
  public function getTermsConditions()
  {
    return $this->termsConditions;
  }
}

class Google_Service_MyBusiness_Location extends Google_Collection
{
  protected $collection_key = 'priceLists';
  protected $internal_gapi_mappings = array(
  );
  protected $adWordsLocationExtensionsType = 'Google_Service_MyBusiness_AdWordsLocationExtensions';
  protected $adWordsLocationExtensionsDataType = '';
  protected $additionalCategoriesType = 'Google_Service_MyBusiness_Category';
  protected $additionalCategoriesDataType = 'array';
  public $additionalPhones;
  protected $addressType = 'Google_Service_MyBusiness_PostalAddress';
  protected $addressDataType = '';
  protected $attributesType = 'Google_Service_MyBusiness_Attribute';
  protected $attributesDataType = 'array';
  public $labels;
  public $languageCode;
  protected $latlngType = 'Google_Service_MyBusiness_LatLng';
  protected $latlngDataType = '';
  protected $locationKeyType = 'Google_Service_MyBusiness_LocationKey';
  protected $locationKeyDataType = '';
  public $locationName;
  protected $locationStateType = 'Google_Service_MyBusiness_LocationState';
  protected $locationStateDataType = '';
  protected $metadataType = 'Google_Service_MyBusiness_Metadata';
  protected $metadataDataType = '';
  protected $moreHoursType = 'Google_Service_MyBusiness_MoreHours';
  protected $moreHoursDataType = 'array';
  public $name;
  protected $openInfoType = 'Google_Service_MyBusiness_OpenInfo';
  protected $openInfoDataType = '';
  protected $priceListsType = 'Google_Service_MyBusiness_PriceList';
  protected $priceListsDataType = 'array';
  protected $primaryCategoryType = 'Google_Service_MyBusiness_Category';
  protected $primaryCategoryDataType = '';
  public $primaryPhone;
  protected $profileType = 'Google_Service_MyBusiness_Profile';
  protected $profileDataType = '';
  protected $regularHoursType = 'Google_Service_MyBusiness_BusinessHours';
  protected $regularHoursDataType = '';
  protected $relationshipDataType = 'Google_Service_MyBusiness_RelationshipData';
  protected $relationshipDataDataType = '';
  protected $serviceAreaType = 'Google_Service_MyBusiness_ServiceAreaBusiness';
  protected $serviceAreaDataType = '';
  protected $specialHoursType = 'Google_Service_MyBusiness_SpecialHours';
  protected $specialHoursDataType = '';
  public $storeCode;
  public $websiteUrl;


  public function setAdWordsLocationExtensions(Google_Service_MyBusiness_AdWordsLocationExtensions $adWordsLocationExtensions)
  {
    $this->adWordsLocationExtensions = $adWordsLocationExtensions;
  }
  public function getAdWordsLocationExtensions()
  {
    return $this->adWordsLocationExtensions;
  }
  public function setAdditionalCategories($additionalCategories)
  {
    $this->additionalCategories = $additionalCategories;
  }
  public function getAdditionalCategories()
  {
    return $this->additionalCategories;
  }
  public function setAdditionalPhones($additionalPhones)
  {
    $this->additionalPhones = $additionalPhones;
  }
  public function getAdditionalPhones()
  {
    return $this->additionalPhones;
  }
  public function setAddress(Google_Service_MyBusiness_PostalAddress $address)
  {
    $this->address = $address;
  }
  public function getAddress()
  {
    return $this->address;
  }
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  public function getAttributes()
  {
    return $this->attributes;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  public function setLatlng(Google_Service_MyBusiness_LatLng $latlng)
  {
    $this->latlng = $latlng;
  }
  public function getLatlng()
  {
    return $this->latlng;
  }
  public function setLocationKey(Google_Service_MyBusiness_LocationKey $locationKey)
  {
    $this->locationKey = $locationKey;
  }
  public function getLocationKey()
  {
    return $this->locationKey;
  }
  public function setLocationName($locationName)
  {
    $this->locationName = $locationName;
  }
  public function getLocationName()
  {
    return $this->locationName;
  }
  public function setLocationState(Google_Service_MyBusiness_LocationState $locationState)
  {
    $this->locationState = $locationState;
  }
  public function getLocationState()
  {
    return $this->locationState;
  }
  public function setMetadata(Google_Service_MyBusiness_Metadata $metadata)
  {
    $this->metadata = $metadata;
  }
  public function getMetadata()
  {
    return $this->metadata;
  }
  public function setMoreHours($moreHours)
  {
    $this->moreHours = $moreHours;
  }
  public function getMoreHours()
  {
    return $this->moreHours;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setOpenInfo(Google_Service_MyBusiness_OpenInfo $openInfo)
  {
    $this->openInfo = $openInfo;
  }
  public function getOpenInfo()
  {
    return $this->openInfo;
  }
  public function setPriceLists($priceLists)
  {
    $this->priceLists = $priceLists;
  }
  public function getPriceLists()
  {
    return $this->priceLists;
  }
  public function setPrimaryCategory(Google_Service_MyBusiness_Category $primaryCategory)
  {
    $this->primaryCategory = $primaryCategory;
  }
  public function getPrimaryCategory()
  {
    return $this->primaryCategory;
  }
  public function setPrimaryPhone($primaryPhone)
  {
    $this->primaryPhone = $primaryPhone;
  }
  public function getPrimaryPhone()
  {
    return $this->primaryPhone;
  }
  public function setProfile(Google_Service_MyBusiness_Profile $profile)
  {
    $this->profile = $profile;
  }
  public function getProfile()
  {
    return $this->profile;
  }
  public function setRegularHours(Google_Service_MyBusiness_BusinessHours $regularHours)
  {
    $this->regularHours = $regularHours;
  }
  public function getRegularHours()
  {
    return $this->regularHours;
  }
  public function setRelationshipData(Google_Service_MyBusiness_RelationshipData $relationshipData)
  {
    $this->relationshipData = $relationshipData;
  }
  public function getRelationshipData()
  {
    return $this->relationshipData;
  }
  public function setServiceArea(Google_Service_MyBusiness_ServiceAreaBusiness $serviceArea)
  {
    $this->serviceArea = $serviceArea;
  }
  public function getServiceArea()
  {
    return $this->serviceArea;
  }
  public function setSpecialHours(Google_Service_MyBusiness_SpecialHours $specialHours)
  {
    $this->specialHours = $specialHours;
  }
  public function getSpecialHours()
  {
    return $this->specialHours;
  }
  public function setStoreCode($storeCode)
  {
    $this->storeCode = $storeCode;
  }
  public function getStoreCode()
  {
    return $this->storeCode;
  }
  public function setWebsiteUrl($websiteUrl)
  {
    $this->websiteUrl = $websiteUrl;
  }
  public function getWebsiteUrl()
  {
    return $this->websiteUrl;
  }
}

class Google_Service_MyBusiness_LocationAssociation extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $category;
  public $priceListItemId;


  public function setCategory($category)
  {
    $this->category = $category;
  }
  public function getCategory()
  {
    return $this->category;
  }
  public function setPriceListItemId($priceListItemId)
  {
    $this->priceListItemId = $priceListItemId;
  }
  public function getPriceListItemId()
  {
    return $this->priceListItemId;
  }
}

class Google_Service_MyBusiness_LocationDrivingDirectionMetrics extends Google_Collection
{
  protected $collection_key = 'topDirectionSources';
  protected $internal_gapi_mappings = array(
  );
  public $locationName;
  public $timeZone;
  protected $topDirectionSourcesType = 'Google_Service_MyBusiness_TopDirectionSources';
  protected $topDirectionSourcesDataType = 'array';


  public function setLocationName($locationName)
  {
    $this->locationName = $locationName;
  }
  public function getLocationName()
  {
    return $this->locationName;
  }
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  public function getTimeZone()
  {
    return $this->timeZone;
  }
  public function setTopDirectionSources($topDirectionSources)
  {
    $this->topDirectionSources = $topDirectionSources;
  }
  public function getTopDirectionSources()
  {
    return $this->topDirectionSources;
  }
}

class Google_Service_MyBusiness_LocationKey extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $explicitNoPlaceId;
  public $placeId;
  public $plusPageId;
  public $requestId;


  public function setExplicitNoPlaceId($explicitNoPlaceId)
  {
    $this->explicitNoPlaceId = $explicitNoPlaceId;
  }
  public function getExplicitNoPlaceId()
  {
    return $this->explicitNoPlaceId;
  }
  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }
  public function getPlaceId()
  {
    return $this->placeId;
  }
  public function setPlusPageId($plusPageId)
  {
    $this->plusPageId = $plusPageId;
  }
  public function getPlusPageId()
  {
    return $this->plusPageId;
  }
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  public function getRequestId()
  {
    return $this->requestId;
  }
}

class Google_Service_MyBusiness_LocationMetrics extends Google_Collection
{
  protected $collection_key = 'metricValues';
  protected $internal_gapi_mappings = array(
  );
  public $locationName;
  protected $metricValuesType = 'Google_Service_MyBusiness_MetricValue';
  protected $metricValuesDataType = 'array';
  public $timeZone;


  public function setLocationName($locationName)
  {
    $this->locationName = $locationName;
  }
  public function getLocationName()
  {
    return $this->locationName;
  }
  public function setMetricValues($metricValues)
  {
    $this->metricValues = $metricValues;
  }
  public function getMetricValues()
  {
    return $this->metricValues;
  }
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  public function getTimeZone()
  {
    return $this->timeZone;
  }
}

class Google_Service_MyBusiness_LocationReview extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $name;
  protected $reviewType = 'Google_Service_MyBusiness_Review';
  protected $reviewDataType = '';


  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setReview(Google_Service_MyBusiness_Review $review)
  {
    $this->review = $review;
  }
  public function getReview()
  {
    return $this->review;
  }
}

class Google_Service_MyBusiness_LocationState extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $canDelete;
  public $canHaveFoodMenus;
  public $canModifyServiceList;
  public $canOperateHealthData;
  public $canOperateLodgingData;
  public $canUpdate;
  public $hasPendingEdits;
  public $hasPendingVerification;
  public $isDisabled;
  public $isDisconnected;
  public $isDuplicate;
  public $isGoogleUpdated;
  public $isLocalPostApiDisabled;
  public $isPendingReview;
  public $isPublished;
  public $isSuspended;
  public $isVerified;
  public $needsReverification;


  public function setCanDelete($canDelete)
  {
    $this->canDelete = $canDelete;
  }
  public function getCanDelete()
  {
    return $this->canDelete;
  }
  public function setCanHaveFoodMenus($canHaveFoodMenus)
  {
    $this->canHaveFoodMenus = $canHaveFoodMenus;
  }
  public function getCanHaveFoodMenus()
  {
    return $this->canHaveFoodMenus;
  }
  public function setCanModifyServiceList($canModifyServiceList)
  {
    $this->canModifyServiceList = $canModifyServiceList;
  }
  public function getCanModifyServiceList()
  {
    return $this->canModifyServiceList;
  }
  public function setCanOperateHealthData($canOperateHealthData)
  {
    $this->canOperateHealthData = $canOperateHealthData;
  }
  public function getCanOperateHealthData()
  {
    return $this->canOperateHealthData;
  }
  public function setCanOperateLodgingData($canOperateLodgingData)
  {
    $this->canOperateLodgingData = $canOperateLodgingData;
  }
  public function getCanOperateLodgingData()
  {
    return $this->canOperateLodgingData;
  }
  public function setCanUpdate($canUpdate)
  {
    $this->canUpdate = $canUpdate;
  }
  public function getCanUpdate()
  {
    return $this->canUpdate;
  }
  public function setHasPendingEdits($hasPendingEdits)
  {
    $this->hasPendingEdits = $hasPendingEdits;
  }
  public function getHasPendingEdits()
  {
    return $this->hasPendingEdits;
  }
  public function setHasPendingVerification($hasPendingVerification)
  {
    $this->hasPendingVerification = $hasPendingVerification;
  }
  public function getHasPendingVerification()
  {
    return $this->hasPendingVerification;
  }
  public function setIsDisabled($isDisabled)
  {
    $this->isDisabled = $isDisabled;
  }
  public function getIsDisabled()
  {
    return $this->isDisabled;
  }
  public function setIsDisconnected($isDisconnected)
  {
    $this->isDisconnected = $isDisconnected;
  }
  public function getIsDisconnected()
  {
    return $this->isDisconnected;
  }
  public function setIsDuplicate($isDuplicate)
  {
    $this->isDuplicate = $isDuplicate;
  }
  public function getIsDuplicate()
  {
    return $this->isDuplicate;
  }
  public function setIsGoogleUpdated($isGoogleUpdated)
  {
    $this->isGoogleUpdated = $isGoogleUpdated;
  }
  public function getIsGoogleUpdated()
  {
    return $this->isGoogleUpdated;
  }
  public function setIsLocalPostApiDisabled($isLocalPostApiDisabled)
  {
    $this->isLocalPostApiDisabled = $isLocalPostApiDisabled;
  }
  public function getIsLocalPostApiDisabled()
  {
    return $this->isLocalPostApiDisabled;
  }
  public function setIsPendingReview($isPendingReview)
  {
    $this->isPendingReview = $isPendingReview;
  }
  public function getIsPendingReview()
  {
    return $this->isPendingReview;
  }
  public function setIsPublished($isPublished)
  {
    $this->isPublished = $isPublished;
  }
  public function getIsPublished()
  {
    return $this->isPublished;
  }
  public function setIsSuspended($isSuspended)
  {
    $this->isSuspended = $isSuspended;
  }
  public function getIsSuspended()
  {
    return $this->isSuspended;
  }
  public function setIsVerified($isVerified)
  {
    $this->isVerified = $isVerified;
  }
  public function getIsVerified()
  {
    return $this->isVerified;
  }
  public function setNeedsReverification($needsReverification)
  {
    $this->needsReverification = $needsReverification;
  }
  public function getNeedsReverification()
  {
    return $this->needsReverification;
  }
}

class Google_Service_MyBusiness_Lodging extends Google_Collection
{
  protected $collection_key = 'guestUnits';
  protected $internal_gapi_mappings = array(
  );
  protected $accessibilityType = 'Google_Service_MyBusiness_Accessibility';
  protected $accessibilityDataType = '';
  protected $activitiesType = 'Google_Service_MyBusiness_Activities';
  protected $activitiesDataType = '';
  protected $allUnitsType = 'Google_Service_MyBusiness_GuestUnitFeatures';
  protected $allUnitsDataType = '';
  protected $businessType = 'Google_Service_MyBusiness_Business';
  protected $businessDataType = '';
  protected $commonLivingAreaType = 'Google_Service_MyBusiness_LivingArea';
  protected $commonLivingAreaDataType = '';
  protected $connectivityType = 'Google_Service_MyBusiness_Connectivity';
  protected $connectivityDataType = '';
  protected $familiesType = 'Google_Service_MyBusiness_Families';
  protected $familiesDataType = '';
  protected $foodAndDrinkType = 'Google_Service_MyBusiness_FoodAndDrink';
  protected $foodAndDrinkDataType = '';
  protected $guestUnitsType = 'Google_Service_MyBusiness_GuestUnitType';
  protected $guestUnitsDataType = 'array';
  protected $healthAndSafetyType = 'Google_Service_MyBusiness_HealthAndSafety';
  protected $healthAndSafetyDataType = '';
  protected $housekeepingType = 'Google_Service_MyBusiness_Housekeeping';
  protected $housekeepingDataType = '';
  protected $metadataType = 'Google_Service_MyBusiness_LodgingMetadata';
  protected $metadataDataType = '';
  public $name;
  protected $parkingType = 'Google_Service_MyBusiness_Parking';
  protected $parkingDataType = '';
  protected $petsType = 'Google_Service_MyBusiness_Pets';
  protected $petsDataType = '';
  protected $policiesType = 'Google_Service_MyBusiness_Policies';
  protected $policiesDataType = '';
  protected $poolsType = 'Google_Service_MyBusiness_Pools';
  protected $poolsDataType = '';
  protected $propertyType = 'Google_Service_MyBusiness_Property';
  protected $propertyDataType = '';
  protected $servicesType = 'Google_Service_MyBusiness_Services';
  protected $servicesDataType = '';
  protected $someUnitsType = 'Google_Service_MyBusiness_GuestUnitFeatures';
  protected $someUnitsDataType = '';
  protected $transportationType = 'Google_Service_MyBusiness_Transportation';
  protected $transportationDataType = '';
  protected $wellnessType = 'Google_Service_MyBusiness_Wellness';
  protected $wellnessDataType = '';


  public function setAccessibility(Google_Service_MyBusiness_Accessibility $accessibility)
  {
    $this->accessibility = $accessibility;
  }
  public function getAccessibility()
  {
    return $this->accessibility;
  }
  public function setActivities(Google_Service_MyBusiness_Activities $activities)
  {
    $this->activities = $activities;
  }
  public function getActivities()
  {
    return $this->activities;
  }
  public function setAllUnits(Google_Service_MyBusiness_GuestUnitFeatures $allUnits)
  {
    $this->allUnits = $allUnits;
  }
  public function getAllUnits()
  {
    return $this->allUnits;
  }
  public function setBusiness(Google_Service_MyBusiness_Business $business)
  {
    $this->business = $business;
  }
  public function getBusiness()
  {
    return $this->business;
  }
  public function setCommonLivingArea(Google_Service_MyBusiness_LivingArea $commonLivingArea)
  {
    $this->commonLivingArea = $commonLivingArea;
  }
  public function getCommonLivingArea()
  {
    return $this->commonLivingArea;
  }
  public function setConnectivity(Google_Service_MyBusiness_Connectivity $connectivity)
  {
    $this->connectivity = $connectivity;
  }
  public function getConnectivity()
  {
    return $this->connectivity;
  }
  public function setFamilies(Google_Service_MyBusiness_Families $families)
  {
    $this->families = $families;
  }
  public function getFamilies()
  {
    return $this->families;
  }
  public function setFoodAndDrink(Google_Service_MyBusiness_FoodAndDrink $foodAndDrink)
  {
    $this->foodAndDrink = $foodAndDrink;
  }
  public function getFoodAndDrink()
  {
    return $this->foodAndDrink;
  }
  public function setGuestUnits($guestUnits)
  {
    $this->guestUnits = $guestUnits;
  }
  public function getGuestUnits()
  {
    return $this->guestUnits;
  }
  public function setHealthAndSafety(Google_Service_MyBusiness_HealthAndSafety $healthAndSafety)
  {
    $this->healthAndSafety = $healthAndSafety;
  }
  public function getHealthAndSafety()
  {
    return $this->healthAndSafety;
  }
  public function setHousekeeping(Google_Service_MyBusiness_Housekeeping $housekeeping)
  {
    $this->housekeeping = $housekeeping;
  }
  public function getHousekeeping()
  {
    return $this->housekeeping;
  }
  public function setMetadata(Google_Service_MyBusiness_LodgingMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  public function getMetadata()
  {
    return $this->metadata;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setParking(Google_Service_MyBusiness_Parking $parking)
  {
    $this->parking = $parking;
  }
  public function getParking()
  {
    return $this->parking;
  }
  public function setPets(Google_Service_MyBusiness_Pets $pets)
  {
    $this->pets = $pets;
  }
  public function getPets()
  {
    return $this->pets;
  }
  public function setPolicies(Google_Service_MyBusiness_Policies $policies)
  {
    $this->policies = $policies;
  }
  public function getPolicies()
  {
    return $this->policies;
  }
  public function setPools(Google_Service_MyBusiness_Pools $pools)
  {
    $this->pools = $pools;
  }
  public function getPools()
  {
    return $this->pools;
  }
  public function setProperty(Google_Service_MyBusiness_Property $property)
  {
    $this->property = $property;
  }
  public function getProperty()
  {
    return $this->property;
  }
  public function setServices(Google_Service_MyBusiness_Services $services)
  {
    $this->services = $services;
  }
  public function getServices()
  {
    return $this->services;
  }
  public function setSomeUnits(Google_Service_MyBusiness_GuestUnitFeatures $someUnits)
  {
    $this->someUnits = $someUnits;
  }
  public function getSomeUnits()
  {
    return $this->someUnits;
  }
  public function setTransportation(Google_Service_MyBusiness_Transportation $transportation)
  {
    $this->transportation = $transportation;
  }
  public function getTransportation()
  {
    return $this->transportation;
  }
  public function setWellness(Google_Service_MyBusiness_Wellness $wellness)
  {
    $this->wellness = $wellness;
  }
  public function getWellness()
  {
    return $this->wellness;
  }
}

class Google_Service_MyBusiness_LodgingMetadata extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $updateTime;


  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

class Google_Service_MyBusiness_MatchedLocation extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $isExactMatch;
  protected $locationType = 'Google_Service_MyBusiness_Location';
  protected $locationDataType = '';


  public function setIsExactMatch($isExactMatch)
  {
    $this->isExactMatch = $isExactMatch;
  }
  public function getIsExactMatch()
  {
    return $this->isExactMatch;
  }
  public function setLocation(Google_Service_MyBusiness_Location $location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
}

class Google_Service_MyBusiness_MediaInsights extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $viewCount;


  public function setViewCount($viewCount)
  {
    $this->viewCount = $viewCount;
  }
  public function getViewCount()
  {
    return $this->viewCount;
  }
}

class Google_Service_MyBusiness_MediaItem extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $attributionType = 'Google_Service_MyBusiness_Attribution';
  protected $attributionDataType = '';
  public $createTime;
  protected $dataRefType = 'Google_Service_MyBusiness_MediaItemDataRef';
  protected $dataRefDataType = '';
  public $description;
  protected $dimensionsType = 'Google_Service_MyBusiness_Dimensions';
  protected $dimensionsDataType = '';
  public $googleUrl;
  protected $insightsType = 'Google_Service_MyBusiness_MediaInsights';
  protected $insightsDataType = '';
  protected $locationAssociationType = 'Google_Service_MyBusiness_LocationAssociation';
  protected $locationAssociationDataType = '';
  public $mediaFormat;
  public $name;
  public $sourceUrl;
  public $thumbnailUrl;


  public function setAttribution(Google_Service_MyBusiness_Attribution $attribution)
  {
    $this->attribution = $attribution;
  }
  public function getAttribution()
  {
    return $this->attribution;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setDataRef(Google_Service_MyBusiness_MediaItemDataRef $dataRef)
  {
    $this->dataRef = $dataRef;
  }
  public function getDataRef()
  {
    return $this->dataRef;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDimensions(Google_Service_MyBusiness_Dimensions $dimensions)
  {
    $this->dimensions = $dimensions;
  }
  public function getDimensions()
  {
    return $this->dimensions;
  }
  public function setGoogleUrl($googleUrl)
  {
    $this->googleUrl = $googleUrl;
  }
  public function getGoogleUrl()
  {
    return $this->googleUrl;
  }
  public function setInsights(Google_Service_MyBusiness_MediaInsights $insights)
  {
    $this->insights = $insights;
  }
  public function getInsights()
  {
    return $this->insights;
  }
  public function setLocationAssociation(Google_Service_MyBusiness_LocationAssociation $locationAssociation)
  {
    $this->locationAssociation = $locationAssociation;
  }
  public function getLocationAssociation()
  {
    return $this->locationAssociation;
  }
  public function setMediaFormat($mediaFormat)
  {
    $this->mediaFormat = $mediaFormat;
  }
  public function getMediaFormat()
  {
    return $this->mediaFormat;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setSourceUrl($sourceUrl)
  {
    $this->sourceUrl = $sourceUrl;
  }
  public function getSourceUrl()
  {
    return $this->sourceUrl;
  }
  public function setThumbnailUrl($thumbnailUrl)
  {
    $this->thumbnailUrl = $thumbnailUrl;
  }
  public function getThumbnailUrl()
  {
    return $this->thumbnailUrl;
  }
}

class Google_Service_MyBusiness_MediaItemDataRef extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $resourceName;


  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  public function getResourceName()
  {
    return $this->resourceName;
  }
}

class Google_Service_MyBusiness_MenuLabel extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $description;
  public $displayName;
  public $languageCode;


  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
}

class Google_Service_MyBusiness_Metadata extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $duplicateType = 'Google_Service_MyBusiness_Duplicate';
  protected $duplicateDataType = '';
  public $mapsUrl;
  public $newReviewUrl;


  public function setDuplicate(Google_Service_MyBusiness_Duplicate $duplicate)
  {
    $this->duplicate = $duplicate;
  }
  public function getDuplicate()
  {
    return $this->duplicate;
  }
  public function setMapsUrl($mapsUrl)
  {
    $this->mapsUrl = $mapsUrl;
  }
  public function getMapsUrl()
  {
    return $this->mapsUrl;
  }
  public function setNewReviewUrl($newReviewUrl)
  {
    $this->newReviewUrl = $newReviewUrl;
  }
  public function getNewReviewUrl()
  {
    return $this->newReviewUrl;
  }
}

class Google_Service_MyBusiness_MetricRequest extends Google_Collection
{
  protected $collection_key = 'options';
  protected $internal_gapi_mappings = array(
  );
  public $metric;
  public $options;


  public function setMetric($metric)
  {
    $this->metric = $metric;
  }
  public function getMetric()
  {
    return $this->metric;
  }
  public function setOptions($options)
  {
    $this->options = $options;
  }
  public function getOptions()
  {
    return $this->options;
  }
}

class Google_Service_MyBusiness_MetricValue extends Google_Collection
{
  protected $collection_key = 'dimensionalValues';
  protected $internal_gapi_mappings = array(
  );
  protected $dimensionalValuesType = 'Google_Service_MyBusiness_DimensionalMetricValue';
  protected $dimensionalValuesDataType = 'array';
  public $metric;
  protected $totalValueType = 'Google_Service_MyBusiness_DimensionalMetricValue';
  protected $totalValueDataType = '';


  public function setDimensionalValues($dimensionalValues)
  {
    $this->dimensionalValues = $dimensionalValues;
  }
  public function getDimensionalValues()
  {
    return $this->dimensionalValues;
  }
  public function setMetric($metric)
  {
    $this->metric = $metric;
  }
  public function getMetric()
  {
    return $this->metric;
  }
  public function setTotalValue(Google_Service_MyBusiness_DimensionalMetricValue $totalValue)
  {
    $this->totalValue = $totalValue;
  }
  public function getTotalValue()
  {
    return $this->totalValue;
  }
}

class Google_Service_MyBusiness_MinimizedContact extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $contactlessCheckinCheckout;
  public $contactlessCheckinCheckoutException;
  public $digitalGuestRoomKeys;
  public $digitalGuestRoomKeysException;
  public $housekeepingScheduledRequestOnly;
  public $housekeepingScheduledRequestOnlyException;
  public $noHighTouchItemsCommonAreas;
  public $noHighTouchItemsCommonAreasException;
  public $noHighTouchItemsGuestRooms;
  public $noHighTouchItemsGuestRoomsException;
  public $plasticKeycardsDisinfected;
  public $plasticKeycardsDisinfectedException;
  public $roomBookingsBuffer;
  public $roomBookingsBufferException;


  public function setContactlessCheckinCheckout($contactlessCheckinCheckout)
  {
    $this->contactlessCheckinCheckout = $contactlessCheckinCheckout;
  }
  public function getContactlessCheckinCheckout()
  {
    return $this->contactlessCheckinCheckout;
  }
  public function setContactlessCheckinCheckoutException($contactlessCheckinCheckoutException)
  {
    $this->contactlessCheckinCheckoutException = $contactlessCheckinCheckoutException;
  }
  public function getContactlessCheckinCheckoutException()
  {
    return $this->contactlessCheckinCheckoutException;
  }
  public function setDigitalGuestRoomKeys($digitalGuestRoomKeys)
  {
    $this->digitalGuestRoomKeys = $digitalGuestRoomKeys;
  }
  public function getDigitalGuestRoomKeys()
  {
    return $this->digitalGuestRoomKeys;
  }
  public function setDigitalGuestRoomKeysException($digitalGuestRoomKeysException)
  {
    $this->digitalGuestRoomKeysException = $digitalGuestRoomKeysException;
  }
  public function getDigitalGuestRoomKeysException()
  {
    return $this->digitalGuestRoomKeysException;
  }
  public function setHousekeepingScheduledRequestOnly($housekeepingScheduledRequestOnly)
  {
    $this->housekeepingScheduledRequestOnly = $housekeepingScheduledRequestOnly;
  }
  public function getHousekeepingScheduledRequestOnly()
  {
    return $this->housekeepingScheduledRequestOnly;
  }
  public function setHousekeepingScheduledRequestOnlyException($housekeepingScheduledRequestOnlyException)
  {
    $this->housekeepingScheduledRequestOnlyException = $housekeepingScheduledRequestOnlyException;
  }
  public function getHousekeepingScheduledRequestOnlyException()
  {
    return $this->housekeepingScheduledRequestOnlyException;
  }
  public function setNoHighTouchItemsCommonAreas($noHighTouchItemsCommonAreas)
  {
    $this->noHighTouchItemsCommonAreas = $noHighTouchItemsCommonAreas;
  }
  public function getNoHighTouchItemsCommonAreas()
  {
    return $this->noHighTouchItemsCommonAreas;
  }
  public function setNoHighTouchItemsCommonAreasException($noHighTouchItemsCommonAreasException)
  {
    $this->noHighTouchItemsCommonAreasException = $noHighTouchItemsCommonAreasException;
  }
  public function getNoHighTouchItemsCommonAreasException()
  {
    return $this->noHighTouchItemsCommonAreasException;
  }
  public function setNoHighTouchItemsGuestRooms($noHighTouchItemsGuestRooms)
  {
    $this->noHighTouchItemsGuestRooms = $noHighTouchItemsGuestRooms;
  }
  public function getNoHighTouchItemsGuestRooms()
  {
    return $this->noHighTouchItemsGuestRooms;
  }
  public function setNoHighTouchItemsGuestRoomsException($noHighTouchItemsGuestRoomsException)
  {
    $this->noHighTouchItemsGuestRoomsException = $noHighTouchItemsGuestRoomsException;
  }
  public function getNoHighTouchItemsGuestRoomsException()
  {
    return $this->noHighTouchItemsGuestRoomsException;
  }
  public function setPlasticKeycardsDisinfected($plasticKeycardsDisinfected)
  {
    $this->plasticKeycardsDisinfected = $plasticKeycardsDisinfected;
  }
  public function getPlasticKeycardsDisinfected()
  {
    return $this->plasticKeycardsDisinfected;
  }
  public function setPlasticKeycardsDisinfectedException($plasticKeycardsDisinfectedException)
  {
    $this->plasticKeycardsDisinfectedException = $plasticKeycardsDisinfectedException;
  }
  public function getPlasticKeycardsDisinfectedException()
  {
    return $this->plasticKeycardsDisinfectedException;
  }
  public function setRoomBookingsBuffer($roomBookingsBuffer)
  {
    $this->roomBookingsBuffer = $roomBookingsBuffer;
  }
  public function getRoomBookingsBuffer()
  {
    return $this->roomBookingsBuffer;
  }
  public function setRoomBookingsBufferException($roomBookingsBufferException)
  {
    $this->roomBookingsBufferException = $roomBookingsBufferException;
  }
  public function getRoomBookingsBufferException()
  {
    return $this->roomBookingsBufferException;
  }
}

class Google_Service_MyBusiness_Money extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $currencyCode;
  public $nanos;
  public $units;


  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }
  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }
  public function setNanos($nanos)
  {
    $this->nanos = $nanos;
  }
  public function getNanos()
  {
    return $this->nanos;
  }
  public function setUnits($units)
  {
    $this->units = $units;
  }
  public function getUnits()
  {
    return $this->units;
  }
}

class Google_Service_MyBusiness_MoreHours extends Google_Collection
{
  protected $collection_key = 'periods';
  protected $internal_gapi_mappings = array(
  );
  public $hoursTypeId;
  protected $periodsType = 'Google_Service_MyBusiness_TimePeriod';
  protected $periodsDataType = 'array';


  public function setHoursTypeId($hoursTypeId)
  {
    $this->hoursTypeId = $hoursTypeId;
  }
  public function getHoursTypeId()
  {
    return $this->hoursTypeId;
  }
  public function setPeriods($periods)
  {
    $this->periods = $periods;
  }
  public function getPeriods()
  {
    return $this->periods;
  }
}

class Google_Service_MyBusiness_MoreHoursType extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $displayName;
  public $hoursTypeId;
  public $localizedDisplayName;


  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setHoursTypeId($hoursTypeId)
  {
    $this->hoursTypeId = $hoursTypeId;
  }
  public function getHoursTypeId()
  {
    return $this->hoursTypeId;
  }
  public function setLocalizedDisplayName($localizedDisplayName)
  {
    $this->localizedDisplayName = $localizedDisplayName;
  }
  public function getLocalizedDisplayName()
  {
    return $this->localizedDisplayName;
  }
}

class Google_Service_MyBusiness_MybusinessEmpty extends Google_Model
{
}

class Google_Service_MyBusiness_Notifications extends Google_Collection
{
  protected $collection_key = 'notificationTypes';
  protected $internal_gapi_mappings = array(
  );
  public $name;
  public $notificationTypes;
  public $topicName;


  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setNotificationTypes($notificationTypes)
  {
    $this->notificationTypes = $notificationTypes;
  }
  public function getNotificationTypes()
  {
    return $this->notificationTypes;
  }
  public function setTopicName($topicName)
  {
    $this->topicName = $topicName;
  }
  public function getTopicName()
  {
    return $this->topicName;
  }
}

class Google_Service_MyBusiness_NutritionFact extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $lowerAmount;
  public $unit;
  public $upperAmount;


  public function setLowerAmount($lowerAmount)
  {
    $this->lowerAmount = $lowerAmount;
  }
  public function getLowerAmount()
  {
    return $this->lowerAmount;
  }
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  public function getUnit()
  {
    return $this->unit;
  }
  public function setUpperAmount($upperAmount)
  {
    $this->upperAmount = $upperAmount;
  }
  public function getUpperAmount()
  {
    return $this->upperAmount;
  }
}

class Google_Service_MyBusiness_NutritionFacts extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $caloriesType = 'Google_Service_MyBusiness_CaloriesFact';
  protected $caloriesDataType = '';
  protected $cholesterolType = 'Google_Service_MyBusiness_NutritionFact';
  protected $cholesterolDataType = '';
  protected $proteinType = 'Google_Service_MyBusiness_NutritionFact';
  protected $proteinDataType = '';
  protected $sodiumType = 'Google_Service_MyBusiness_NutritionFact';
  protected $sodiumDataType = '';
  protected $totalCarbohydrateType = 'Google_Service_MyBusiness_NutritionFact';
  protected $totalCarbohydrateDataType = '';
  protected $totalFatType = 'Google_Service_MyBusiness_NutritionFact';
  protected $totalFatDataType = '';


  public function setCalories(Google_Service_MyBusiness_CaloriesFact $calories)
  {
    $this->calories = $calories;
  }
  public function getCalories()
  {
    return $this->calories;
  }
  public function setCholesterol(Google_Service_MyBusiness_NutritionFact $cholesterol)
  {
    $this->cholesterol = $cholesterol;
  }
  public function getCholesterol()
  {
    return $this->cholesterol;
  }
  public function setProtein(Google_Service_MyBusiness_NutritionFact $protein)
  {
    $this->protein = $protein;
  }
  public function getProtein()
  {
    return $this->protein;
  }
  public function setSodium(Google_Service_MyBusiness_NutritionFact $sodium)
  {
    $this->sodium = $sodium;
  }
  public function getSodium()
  {
    return $this->sodium;
  }
  public function setTotalCarbohydrate(Google_Service_MyBusiness_NutritionFact $totalCarbohydrate)
  {
    $this->totalCarbohydrate = $totalCarbohydrate;
  }
  public function getTotalCarbohydrate()
  {
    return $this->totalCarbohydrate;
  }
  public function setTotalFat(Google_Service_MyBusiness_NutritionFact $totalFat)
  {
    $this->totalFat = $totalFat;
  }
  public function getTotalFat()
  {
    return $this->totalFat;
  }
}

class Google_Service_MyBusiness_OpenInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $canReopen;
  protected $openingDateType = 'Google_Service_MyBusiness_Date';
  protected $openingDateDataType = '';
  public $status;


  public function setCanReopen($canReopen)
  {
    $this->canReopen = $canReopen;
  }
  public function getCanReopen()
  {
    return $this->canReopen;
  }
  public function setOpeningDate(Google_Service_MyBusiness_Date $openingDate)
  {
    $this->openingDate = $openingDate;
  }
  public function getOpeningDate()
  {
    return $this->openingDate;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
}

class Google_Service_MyBusiness_OrganizationInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $phoneNumber;
  protected $postalAddressType = 'Google_Service_MyBusiness_PostalAddress';
  protected $postalAddressDataType = '';
  public $registeredDomain;


  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
  public function setPostalAddress(Google_Service_MyBusiness_PostalAddress $postalAddress)
  {
    $this->postalAddress = $postalAddress;
  }
  public function getPostalAddress()
  {
    return $this->postalAddress;
  }
  public function setRegisteredDomain($registeredDomain)
  {
    $this->registeredDomain = $registeredDomain;
  }
  public function getRegisteredDomain()
  {
    return $this->registeredDomain;
  }
}

class Google_Service_MyBusiness_Parking extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $electricCarChargingStations;
  public $electricCarChargingStationsException;
  public $freeParking;
  public $freeParkingException;
  public $freeSelfParking;
  public $freeSelfParkingException;
  public $freeValetParking;
  public $freeValetParkingException;
  public $parkingAvailable;
  public $parkingAvailableException;
  public $selfParkingAvailable;
  public $selfParkingAvailableException;
  public $valetParkingAvailable;
  public $valetParkingAvailableException;


  public function setElectricCarChargingStations($electricCarChargingStations)
  {
    $this->electricCarChargingStations = $electricCarChargingStations;
  }
  public function getElectricCarChargingStations()
  {
    return $this->electricCarChargingStations;
  }
  public function setElectricCarChargingStationsException($electricCarChargingStationsException)
  {
    $this->electricCarChargingStationsException = $electricCarChargingStationsException;
  }
  public function getElectricCarChargingStationsException()
  {
    return $this->electricCarChargingStationsException;
  }
  public function setFreeParking($freeParking)
  {
    $this->freeParking = $freeParking;
  }
  public function getFreeParking()
  {
    return $this->freeParking;
  }
  public function setFreeParkingException($freeParkingException)
  {
    $this->freeParkingException = $freeParkingException;
  }
  public function getFreeParkingException()
  {
    return $this->freeParkingException;
  }
  public function setFreeSelfParking($freeSelfParking)
  {
    $this->freeSelfParking = $freeSelfParking;
  }
  public function getFreeSelfParking()
  {
    return $this->freeSelfParking;
  }
  public function setFreeSelfParkingException($freeSelfParkingException)
  {
    $this->freeSelfParkingException = $freeSelfParkingException;
  }
  public function getFreeSelfParkingException()
  {
    return $this->freeSelfParkingException;
  }
  public function setFreeValetParking($freeValetParking)
  {
    $this->freeValetParking = $freeValetParking;
  }
  public function getFreeValetParking()
  {
    return $this->freeValetParking;
  }
  public function setFreeValetParkingException($freeValetParkingException)
  {
    $this->freeValetParkingException = $freeValetParkingException;
  }
  public function getFreeValetParkingException()
  {
    return $this->freeValetParkingException;
  }
  public function setParkingAvailable($parkingAvailable)
  {
    $this->parkingAvailable = $parkingAvailable;
  }
  public function getParkingAvailable()
  {
    return $this->parkingAvailable;
  }
  public function setParkingAvailableException($parkingAvailableException)
  {
    $this->parkingAvailableException = $parkingAvailableException;
  }
  public function getParkingAvailableException()
  {
    return $this->parkingAvailableException;
  }
  public function setSelfParkingAvailable($selfParkingAvailable)
  {
    $this->selfParkingAvailable = $selfParkingAvailable;
  }
  public function getSelfParkingAvailable()
  {
    return $this->selfParkingAvailable;
  }
  public function setSelfParkingAvailableException($selfParkingAvailableException)
  {
    $this->selfParkingAvailableException = $selfParkingAvailableException;
  }
  public function getSelfParkingAvailableException()
  {
    return $this->selfParkingAvailableException;
  }
  public function setValetParkingAvailable($valetParkingAvailable)
  {
    $this->valetParkingAvailable = $valetParkingAvailable;
  }
  public function getValetParkingAvailable()
  {
    return $this->valetParkingAvailable;
  }
  public function setValetParkingAvailableException($valetParkingAvailableException)
  {
    $this->valetParkingAvailableException = $valetParkingAvailableException;
  }
  public function getValetParkingAvailableException()
  {
    return $this->valetParkingAvailableException;
  }
}

class Google_Service_MyBusiness_PaymentOptions extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $cash;
  public $cashException;
  public $cheque;
  public $chequeException;
  public $creditCard;
  public $creditCardException;
  public $debitCard;
  public $debitCardException;
  public $mobileNfc;
  public $mobileNfcException;


  public function setCash($cash)
  {
    $this->cash = $cash;
  }
  public function getCash()
  {
    return $this->cash;
  }
  public function setCashException($cashException)
  {
    $this->cashException = $cashException;
  }
  public function getCashException()
  {
    return $this->cashException;
  }
  public function setCheque($cheque)
  {
    $this->cheque = $cheque;
  }
  public function getCheque()
  {
    return $this->cheque;
  }
  public function setChequeException($chequeException)
  {
    $this->chequeException = $chequeException;
  }
  public function getChequeException()
  {
    return $this->chequeException;
  }
  public function setCreditCard($creditCard)
  {
    $this->creditCard = $creditCard;
  }
  public function getCreditCard()
  {
    return $this->creditCard;
  }
  public function setCreditCardException($creditCardException)
  {
    $this->creditCardException = $creditCardException;
  }
  public function getCreditCardException()
  {
    return $this->creditCardException;
  }
  public function setDebitCard($debitCard)
  {
    $this->debitCard = $debitCard;
  }
  public function getDebitCard()
  {
    return $this->debitCard;
  }
  public function setDebitCardException($debitCardException)
  {
    $this->debitCardException = $debitCardException;
  }
  public function getDebitCardException()
  {
    return $this->debitCardException;
  }
  public function setMobileNfc($mobileNfc)
  {
    $this->mobileNfc = $mobileNfc;
  }
  public function getMobileNfc()
  {
    return $this->mobileNfc;
  }
  public function setMobileNfcException($mobileNfcException)
  {
    $this->mobileNfcException = $mobileNfcException;
  }
  public function getMobileNfcException()
  {
    return $this->mobileNfcException;
  }
}

class Google_Service_MyBusiness_PersonalProtection extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $commonAreasOfferSanitizingItems;
  public $commonAreasOfferSanitizingItemsException;
  public $faceMaskRequired;
  public $faceMaskRequiredException;
  public $guestRoomHygieneKitsAvailable;
  public $guestRoomHygieneKitsAvailableException;
  public $protectiveEquipmentAvailable;
  public $protectiveEquipmentAvailableException;


  public function setCommonAreasOfferSanitizingItems($commonAreasOfferSanitizingItems)
  {
    $this->commonAreasOfferSanitizingItems = $commonAreasOfferSanitizingItems;
  }
  public function getCommonAreasOfferSanitizingItems()
  {
    return $this->commonAreasOfferSanitizingItems;
  }
  public function setCommonAreasOfferSanitizingItemsException($commonAreasOfferSanitizingItemsException)
  {
    $this->commonAreasOfferSanitizingItemsException = $commonAreasOfferSanitizingItemsException;
  }
  public function getCommonAreasOfferSanitizingItemsException()
  {
    return $this->commonAreasOfferSanitizingItemsException;
  }
  public function setFaceMaskRequired($faceMaskRequired)
  {
    $this->faceMaskRequired = $faceMaskRequired;
  }
  public function getFaceMaskRequired()
  {
    return $this->faceMaskRequired;
  }
  public function setFaceMaskRequiredException($faceMaskRequiredException)
  {
    $this->faceMaskRequiredException = $faceMaskRequiredException;
  }
  public function getFaceMaskRequiredException()
  {
    return $this->faceMaskRequiredException;
  }
  public function setGuestRoomHygieneKitsAvailable($guestRoomHygieneKitsAvailable)
  {
    $this->guestRoomHygieneKitsAvailable = $guestRoomHygieneKitsAvailable;
  }
  public function getGuestRoomHygieneKitsAvailable()
  {
    return $this->guestRoomHygieneKitsAvailable;
  }
  public function setGuestRoomHygieneKitsAvailableException($guestRoomHygieneKitsAvailableException)
  {
    $this->guestRoomHygieneKitsAvailableException = $guestRoomHygieneKitsAvailableException;
  }
  public function getGuestRoomHygieneKitsAvailableException()
  {
    return $this->guestRoomHygieneKitsAvailableException;
  }
  public function setProtectiveEquipmentAvailable($protectiveEquipmentAvailable)
  {
    $this->protectiveEquipmentAvailable = $protectiveEquipmentAvailable;
  }
  public function getProtectiveEquipmentAvailable()
  {
    return $this->protectiveEquipmentAvailable;
  }
  public function setProtectiveEquipmentAvailableException($protectiveEquipmentAvailableException)
  {
    $this->protectiveEquipmentAvailableException = $protectiveEquipmentAvailableException;
  }
  public function getProtectiveEquipmentAvailableException()
  {
    return $this->protectiveEquipmentAvailableException;
  }
}

class Google_Service_MyBusiness_Pets extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $catsAllowed;
  public $catsAllowedException;
  public $dogsAllowed;
  public $dogsAllowedException;
  public $petsAllowed;
  public $petsAllowedException;
  public $petsAllowedFree;
  public $petsAllowedFreeException;


  public function setCatsAllowed($catsAllowed)
  {
    $this->catsAllowed = $catsAllowed;
  }
  public function getCatsAllowed()
  {
    return $this->catsAllowed;
  }
  public function setCatsAllowedException($catsAllowedException)
  {
    $this->catsAllowedException = $catsAllowedException;
  }
  public function getCatsAllowedException()
  {
    return $this->catsAllowedException;
  }
  public function setDogsAllowed($dogsAllowed)
  {
    $this->dogsAllowed = $dogsAllowed;
  }
  public function getDogsAllowed()
  {
    return $this->dogsAllowed;
  }
  public function setDogsAllowedException($dogsAllowedException)
  {
    $this->dogsAllowedException = $dogsAllowedException;
  }
  public function getDogsAllowedException()
  {
    return $this->dogsAllowedException;
  }
  public function setPetsAllowed($petsAllowed)
  {
    $this->petsAllowed = $petsAllowed;
  }
  public function getPetsAllowed()
  {
    return $this->petsAllowed;
  }
  public function setPetsAllowedException($petsAllowedException)
  {
    $this->petsAllowedException = $petsAllowedException;
  }
  public function getPetsAllowedException()
  {
    return $this->petsAllowedException;
  }
  public function setPetsAllowedFree($petsAllowedFree)
  {
    $this->petsAllowedFree = $petsAllowedFree;
  }
  public function getPetsAllowedFree()
  {
    return $this->petsAllowedFree;
  }
  public function setPetsAllowedFreeException($petsAllowedFreeException)
  {
    $this->petsAllowedFreeException = $petsAllowedFreeException;
  }
  public function getPetsAllowedFreeException()
  {
    return $this->petsAllowedFreeException;
  }
}

class Google_Service_MyBusiness_PhoneInput extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $phoneNumber;


  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
}

class Google_Service_MyBusiness_PhoneVerificationData extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $phoneNumber;


  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }
}

class Google_Service_MyBusiness_PhysicalDistancing extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $commonAreasPhysicalDistancingArranged;
  public $commonAreasPhysicalDistancingArrangedException;
  public $physicalDistancingRequired;
  public $physicalDistancingRequiredException;
  public $safetyDividers;
  public $safetyDividersException;
  public $sharedAreasLimitedOccupancy;
  public $sharedAreasLimitedOccupancyException;
  public $wellnessAreasHavePrivateSpaces;
  public $wellnessAreasHavePrivateSpacesException;


  public function setCommonAreasPhysicalDistancingArranged($commonAreasPhysicalDistancingArranged)
  {
    $this->commonAreasPhysicalDistancingArranged = $commonAreasPhysicalDistancingArranged;
  }
  public function getCommonAreasPhysicalDistancingArranged()
  {
    return $this->commonAreasPhysicalDistancingArranged;
  }
  public function setCommonAreasPhysicalDistancingArrangedException($commonAreasPhysicalDistancingArrangedException)
  {
    $this->commonAreasPhysicalDistancingArrangedException = $commonAreasPhysicalDistancingArrangedException;
  }
  public function getCommonAreasPhysicalDistancingArrangedException()
  {
    return $this->commonAreasPhysicalDistancingArrangedException;
  }
  public function setPhysicalDistancingRequired($physicalDistancingRequired)
  {
    $this->physicalDistancingRequired = $physicalDistancingRequired;
  }
  public function getPhysicalDistancingRequired()
  {
    return $this->physicalDistancingRequired;
  }
  public function setPhysicalDistancingRequiredException($physicalDistancingRequiredException)
  {
    $this->physicalDistancingRequiredException = $physicalDistancingRequiredException;
  }
  public function getPhysicalDistancingRequiredException()
  {
    return $this->physicalDistancingRequiredException;
  }
  public function setSafetyDividers($safetyDividers)
  {
    $this->safetyDividers = $safetyDividers;
  }
  public function getSafetyDividers()
  {
    return $this->safetyDividers;
  }
  public function setSafetyDividersException($safetyDividersException)
  {
    $this->safetyDividersException = $safetyDividersException;
  }
  public function getSafetyDividersException()
  {
    return $this->safetyDividersException;
  }
  public function setSharedAreasLimitedOccupancy($sharedAreasLimitedOccupancy)
  {
    $this->sharedAreasLimitedOccupancy = $sharedAreasLimitedOccupancy;
  }
  public function getSharedAreasLimitedOccupancy()
  {
    return $this->sharedAreasLimitedOccupancy;
  }
  public function setSharedAreasLimitedOccupancyException($sharedAreasLimitedOccupancyException)
  {
    $this->sharedAreasLimitedOccupancyException = $sharedAreasLimitedOccupancyException;
  }
  public function getSharedAreasLimitedOccupancyException()
  {
    return $this->sharedAreasLimitedOccupancyException;
  }
  public function setWellnessAreasHavePrivateSpaces($wellnessAreasHavePrivateSpaces)
  {
    $this->wellnessAreasHavePrivateSpaces = $wellnessAreasHavePrivateSpaces;
  }
  public function getWellnessAreasHavePrivateSpaces()
  {
    return $this->wellnessAreasHavePrivateSpaces;
  }
  public function setWellnessAreasHavePrivateSpacesException($wellnessAreasHavePrivateSpacesException)
  {
    $this->wellnessAreasHavePrivateSpacesException = $wellnessAreasHavePrivateSpacesException;
  }
  public function getWellnessAreasHavePrivateSpacesException()
  {
    return $this->wellnessAreasHavePrivateSpacesException;
  }
}

class Google_Service_MyBusiness_PlaceInfo extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $name;
  public $placeId;


  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }
  public function getPlaceId()
  {
    return $this->placeId;
  }
}

class Google_Service_MyBusiness_Places extends Google_Collection
{
  protected $collection_key = 'placeInfos';
  protected $internal_gapi_mappings = array(
  );
  protected $placeInfosType = 'Google_Service_MyBusiness_PlaceInfo';
  protected $placeInfosDataType = 'array';


  public function setPlaceInfos($placeInfos)
  {
    $this->placeInfos = $placeInfos;
  }
  public function getPlaceInfos()
  {
    return $this->placeInfos;
  }
}

class Google_Service_MyBusiness_PointRadius extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $latlngType = 'Google_Service_MyBusiness_LatLng';
  protected $latlngDataType = '';
  public $radiusKm;


  public function setLatlng(Google_Service_MyBusiness_LatLng $latlng)
  {
    $this->latlng = $latlng;
  }
  public function getLatlng()
  {
    return $this->latlng;
  }
  public function setRadiusKm($radiusKm)
  {
    $this->radiusKm = $radiusKm;
  }
  public function getRadiusKm()
  {
    return $this->radiusKm;
  }
}

class Google_Service_MyBusiness_Policies extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $allInclusiveAvailable;
  public $allInclusiveAvailableException;
  public $allInclusiveOnly;
  public $allInclusiveOnlyException;
  protected $checkinTimeType = 'Google_Service_MyBusiness_TimeOfDay';
  protected $checkinTimeDataType = '';
  public $checkinTimeException;
  protected $checkoutTimeType = 'Google_Service_MyBusiness_TimeOfDay';
  protected $checkoutTimeDataType = '';
  public $checkoutTimeException;
  public $kidsStayFree;
  public $kidsStayFreeException;
  public $maxChildAge;
  public $maxChildAgeException;
  public $maxKidsStayFreeCount;
  public $maxKidsStayFreeCountException;
  protected $paymentOptionsType = 'Google_Service_MyBusiness_PaymentOptions';
  protected $paymentOptionsDataType = '';
  public $smokeFreeProperty;
  public $smokeFreePropertyException;


  public function setAllInclusiveAvailable($allInclusiveAvailable)
  {
    $this->allInclusiveAvailable = $allInclusiveAvailable;
  }
  public function getAllInclusiveAvailable()
  {
    return $this->allInclusiveAvailable;
  }
  public function setAllInclusiveAvailableException($allInclusiveAvailableException)
  {
    $this->allInclusiveAvailableException = $allInclusiveAvailableException;
  }
  public function getAllInclusiveAvailableException()
  {
    return $this->allInclusiveAvailableException;
  }
  public function setAllInclusiveOnly($allInclusiveOnly)
  {
    $this->allInclusiveOnly = $allInclusiveOnly;
  }
  public function getAllInclusiveOnly()
  {
    return $this->allInclusiveOnly;
  }
  public function setAllInclusiveOnlyException($allInclusiveOnlyException)
  {
    $this->allInclusiveOnlyException = $allInclusiveOnlyException;
  }
  public function getAllInclusiveOnlyException()
  {
    return $this->allInclusiveOnlyException;
  }
  public function setCheckinTime(Google_Service_MyBusiness_TimeOfDay $checkinTime)
  {
    $this->checkinTime = $checkinTime;
  }
  public function getCheckinTime()
  {
    return $this->checkinTime;
  }
  public function setCheckinTimeException($checkinTimeException)
  {
    $this->checkinTimeException = $checkinTimeException;
  }
  public function getCheckinTimeException()
  {
    return $this->checkinTimeException;
  }
  public function setCheckoutTime(Google_Service_MyBusiness_TimeOfDay $checkoutTime)
  {
    $this->checkoutTime = $checkoutTime;
  }
  public function getCheckoutTime()
  {
    return $this->checkoutTime;
  }
  public function setCheckoutTimeException($checkoutTimeException)
  {
    $this->checkoutTimeException = $checkoutTimeException;
  }
  public function getCheckoutTimeException()
  {
    return $this->checkoutTimeException;
  }
  public function setKidsStayFree($kidsStayFree)
  {
    $this->kidsStayFree = $kidsStayFree;
  }
  public function getKidsStayFree()
  {
    return $this->kidsStayFree;
  }
  public function setKidsStayFreeException($kidsStayFreeException)
  {
    $this->kidsStayFreeException = $kidsStayFreeException;
  }
  public function getKidsStayFreeException()
  {
    return $this->kidsStayFreeException;
  }
  public function setMaxChildAge($maxChildAge)
  {
    $this->maxChildAge = $maxChildAge;
  }
  public function getMaxChildAge()
  {
    return $this->maxChildAge;
  }
  public function setMaxChildAgeException($maxChildAgeException)
  {
    $this->maxChildAgeException = $maxChildAgeException;
  }
  public function getMaxChildAgeException()
  {
    return $this->maxChildAgeException;
  }
  public function setMaxKidsStayFreeCount($maxKidsStayFreeCount)
  {
    $this->maxKidsStayFreeCount = $maxKidsStayFreeCount;
  }
  public function getMaxKidsStayFreeCount()
  {
    return $this->maxKidsStayFreeCount;
  }
  public function setMaxKidsStayFreeCountException($maxKidsStayFreeCountException)
  {
    $this->maxKidsStayFreeCountException = $maxKidsStayFreeCountException;
  }
  public function getMaxKidsStayFreeCountException()
  {
    return $this->maxKidsStayFreeCountException;
  }
  public function setPaymentOptions(Google_Service_MyBusiness_PaymentOptions $paymentOptions)
  {
    $this->paymentOptions = $paymentOptions;
  }
  public function getPaymentOptions()
  {
    return $this->paymentOptions;
  }
  public function setSmokeFreeProperty($smokeFreeProperty)
  {
    $this->smokeFreeProperty = $smokeFreeProperty;
  }
  public function getSmokeFreeProperty()
  {
    return $this->smokeFreeProperty;
  }
  public function setSmokeFreePropertyException($smokeFreePropertyException)
  {
    $this->smokeFreePropertyException = $smokeFreePropertyException;
  }
  public function getSmokeFreePropertyException()
  {
    return $this->smokeFreePropertyException;
  }
}

class Google_Service_MyBusiness_Pools extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $adultPool;
  public $adultPoolException;
  public $hotTub;
  public $hotTubException;
  public $indoorPool;
  public $indoorPoolException;
  public $indoorPoolsCount;
  public $indoorPoolsCountException;
  public $lazyRiver;
  public $lazyRiverException;
  public $lifeguard;
  public $lifeguardException;
  public $outdoorPool;
  public $outdoorPoolException;
  public $outdoorPoolsCount;
  public $outdoorPoolsCountException;
  public $pool;
  public $poolException;
  public $poolsCount;
  public $poolsCountException;
  public $wadingPool;
  public $wadingPoolException;
  public $waterPark;
  public $waterParkException;
  public $waterslide;
  public $waterslideException;
  public $wavePool;
  public $wavePoolException;


  public function setAdultPool($adultPool)
  {
    $this->adultPool = $adultPool;
  }
  public function getAdultPool()
  {
    return $this->adultPool;
  }
  public function setAdultPoolException($adultPoolException)
  {
    $this->adultPoolException = $adultPoolException;
  }
  public function getAdultPoolException()
  {
    return $this->adultPoolException;
  }
  public function setHotTub($hotTub)
  {
    $this->hotTub = $hotTub;
  }
  public function getHotTub()
  {
    return $this->hotTub;
  }
  public function setHotTubException($hotTubException)
  {
    $this->hotTubException = $hotTubException;
  }
  public function getHotTubException()
  {
    return $this->hotTubException;
  }
  public function setIndoorPool($indoorPool)
  {
    $this->indoorPool = $indoorPool;
  }
  public function getIndoorPool()
  {
    return $this->indoorPool;
  }
  public function setIndoorPoolException($indoorPoolException)
  {
    $this->indoorPoolException = $indoorPoolException;
  }
  public function getIndoorPoolException()
  {
    return $this->indoorPoolException;
  }
  public function setIndoorPoolsCount($indoorPoolsCount)
  {
    $this->indoorPoolsCount = $indoorPoolsCount;
  }
  public function getIndoorPoolsCount()
  {
    return $this->indoorPoolsCount;
  }
  public function setIndoorPoolsCountException($indoorPoolsCountException)
  {
    $this->indoorPoolsCountException = $indoorPoolsCountException;
  }
  public function getIndoorPoolsCountException()
  {
    return $this->indoorPoolsCountException;
  }
  public function setLazyRiver($lazyRiver)
  {
    $this->lazyRiver = $lazyRiver;
  }
  public function getLazyRiver()
  {
    return $this->lazyRiver;
  }
  public function setLazyRiverException($lazyRiverException)
  {
    $this->lazyRiverException = $lazyRiverException;
  }
  public function getLazyRiverException()
  {
    return $this->lazyRiverException;
  }
  public function setLifeguard($lifeguard)
  {
    $this->lifeguard = $lifeguard;
  }
  public function getLifeguard()
  {
    return $this->lifeguard;
  }
  public function setLifeguardException($lifeguardException)
  {
    $this->lifeguardException = $lifeguardException;
  }
  public function getLifeguardException()
  {
    return $this->lifeguardException;
  }
  public function setOutdoorPool($outdoorPool)
  {
    $this->outdoorPool = $outdoorPool;
  }
  public function getOutdoorPool()
  {
    return $this->outdoorPool;
  }
  public function setOutdoorPoolException($outdoorPoolException)
  {
    $this->outdoorPoolException = $outdoorPoolException;
  }
  public function getOutdoorPoolException()
  {
    return $this->outdoorPoolException;
  }
  public function setOutdoorPoolsCount($outdoorPoolsCount)
  {
    $this->outdoorPoolsCount = $outdoorPoolsCount;
  }
  public function getOutdoorPoolsCount()
  {
    return $this->outdoorPoolsCount;
  }
  public function setOutdoorPoolsCountException($outdoorPoolsCountException)
  {
    $this->outdoorPoolsCountException = $outdoorPoolsCountException;
  }
  public function getOutdoorPoolsCountException()
  {
    return $this->outdoorPoolsCountException;
  }
  public function setPool($pool)
  {
    $this->pool = $pool;
  }
  public function getPool()
  {
    return $this->pool;
  }
  public function setPoolException($poolException)
  {
    $this->poolException = $poolException;
  }
  public function getPoolException()
  {
    return $this->poolException;
  }
  public function setPoolsCount($poolsCount)
  {
    $this->poolsCount = $poolsCount;
  }
  public function getPoolsCount()
  {
    return $this->poolsCount;
  }
  public function setPoolsCountException($poolsCountException)
  {
    $this->poolsCountException = $poolsCountException;
  }
  public function getPoolsCountException()
  {
    return $this->poolsCountException;
  }
  public function setWadingPool($wadingPool)
  {
    $this->wadingPool = $wadingPool;
  }
  public function getWadingPool()
  {
    return $this->wadingPool;
  }
  public function setWadingPoolException($wadingPoolException)
  {
    $this->wadingPoolException = $wadingPoolException;
  }
  public function getWadingPoolException()
  {
    return $this->wadingPoolException;
  }
  public function setWaterPark($waterPark)
  {
    $this->waterPark = $waterPark;
  }
  public function getWaterPark()
  {
    return $this->waterPark;
  }
  public function setWaterParkException($waterParkException)
  {
    $this->waterParkException = $waterParkException;
  }
  public function getWaterParkException()
  {
    return $this->waterParkException;
  }
  public function setWaterslide($waterslide)
  {
    $this->waterslide = $waterslide;
  }
  public function getWaterslide()
  {
    return $this->waterslide;
  }
  public function setWaterslideException($waterslideException)
  {
    $this->waterslideException = $waterslideException;
  }
  public function getWaterslideException()
  {
    return $this->waterslideException;
  }
  public function setWavePool($wavePool)
  {
    $this->wavePool = $wavePool;
  }
  public function getWavePool()
  {
    return $this->wavePool;
  }
  public function setWavePoolException($wavePoolException)
  {
    $this->wavePoolException = $wavePoolException;
  }
  public function getWavePoolException()
  {
    return $this->wavePoolException;
  }
}

class Google_Service_MyBusiness_PortionSize extends Google_Collection
{
  protected $collection_key = 'unit';
  protected $internal_gapi_mappings = array(
  );
  public $quantity;
  protected $unitType = 'Google_Service_MyBusiness_MenuLabel';
  protected $unitDataType = 'array';


  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  public function getQuantity()
  {
    return $this->quantity;
  }
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  public function getUnit()
  {
    return $this->unit;
  }
}

class Google_Service_MyBusiness_PostalAddress extends Google_Collection
{
  protected $collection_key = 'recipients';
  protected $internal_gapi_mappings = array(
  );
  public $addressLines;
  public $administrativeArea;
  public $languageCode;
  public $locality;
  public $organization;
  public $postalCode;
  public $recipients;
  public $regionCode;
  public $revision;
  public $sortingCode;
  public $sublocality;


  public function setAddressLines($addressLines)
  {
    $this->addressLines = $addressLines;
  }
  public function getAddressLines()
  {
    return $this->addressLines;
  }
  public function setAdministrativeArea($administrativeArea)
  {
    $this->administrativeArea = $administrativeArea;
  }
  public function getAdministrativeArea()
  {
    return $this->administrativeArea;
  }
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  public function setLocality($locality)
  {
    $this->locality = $locality;
  }
  public function getLocality()
  {
    return $this->locality;
  }
  public function setOrganization($organization)
  {
    $this->organization = $organization;
  }
  public function getOrganization()
  {
    return $this->organization;
  }
  public function setPostalCode($postalCode)
  {
    $this->postalCode = $postalCode;
  }
  public function getPostalCode()
  {
    return $this->postalCode;
  }
  public function setRecipients($recipients)
  {
    $this->recipients = $recipients;
  }
  public function getRecipients()
  {
    return $this->recipients;
  }
  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }
  public function getRegionCode()
  {
    return $this->regionCode;
  }
  public function setRevision($revision)
  {
    $this->revision = $revision;
  }
  public function getRevision()
  {
    return $this->revision;
  }
  public function setSortingCode($sortingCode)
  {
    $this->sortingCode = $sortingCode;
  }
  public function getSortingCode()
  {
    return $this->sortingCode;
  }
  public function setSublocality($sublocality)
  {
    $this->sublocality = $sublocality;
  }
  public function getSublocality()
  {
    return $this->sublocality;
  }
}

class Google_Service_MyBusiness_PriceList extends Google_Collection
{
  protected $collection_key = 'sections';
  protected $internal_gapi_mappings = array(
  );
  protected $labelsType = 'Google_Service_MyBusiness_Label';
  protected $labelsDataType = 'array';
  public $priceListId;
  protected $sectionsType = 'Google_Service_MyBusiness_Section';
  protected $sectionsDataType = 'array';
  public $sourceUrl;


  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setPriceListId($priceListId)
  {
    $this->priceListId = $priceListId;
  }
  public function getPriceListId()
  {
    return $this->priceListId;
  }
  public function setSections($sections)
  {
    $this->sections = $sections;
  }
  public function getSections()
  {
    return $this->sections;
  }
  public function setSourceUrl($sourceUrl)
  {
    $this->sourceUrl = $sourceUrl;
  }
  public function getSourceUrl()
  {
    return $this->sourceUrl;
  }
}

class Google_Service_MyBusiness_Profile extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $description;


  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
}

class Google_Service_MyBusiness_Property extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $builtYear;
  public $builtYearException;
  public $floorsCount;
  public $floorsCountException;
  public $lastRenovatedYear;
  public $lastRenovatedYearException;
  public $roomsCount;
  public $roomsCountException;


  public function setBuiltYear($builtYear)
  {
    $this->builtYear = $builtYear;
  }
  public function getBuiltYear()
  {
    return $this->builtYear;
  }
  public function setBuiltYearException($builtYearException)
  {
    $this->builtYearException = $builtYearException;
  }
  public function getBuiltYearException()
  {
    return $this->builtYearException;
  }
  public function setFloorsCount($floorsCount)
  {
    $this->floorsCount = $floorsCount;
  }
  public function getFloorsCount()
  {
    return $this->floorsCount;
  }
  public function setFloorsCountException($floorsCountException)
  {
    $this->floorsCountException = $floorsCountException;
  }
  public function getFloorsCountException()
  {
    return $this->floorsCountException;
  }
  public function setLastRenovatedYear($lastRenovatedYear)
  {
    $this->lastRenovatedYear = $lastRenovatedYear;
  }
  public function getLastRenovatedYear()
  {
    return $this->lastRenovatedYear;
  }
  public function setLastRenovatedYearException($lastRenovatedYearException)
  {
    $this->lastRenovatedYearException = $lastRenovatedYearException;
  }
  public function getLastRenovatedYearException()
  {
    return $this->lastRenovatedYearException;
  }
  public function setRoomsCount($roomsCount)
  {
    $this->roomsCount = $roomsCount;
  }
  public function getRoomsCount()
  {
    return $this->roomsCount;
  }
  public function setRoomsCountException($roomsCountException)
  {
    $this->roomsCountException = $roomsCountException;
  }
  public function getRoomsCountException()
  {
    return $this->roomsCountException;
  }
}

class Google_Service_MyBusiness_Question extends Google_Collection
{
  protected $collection_key = 'topAnswers';
  protected $internal_gapi_mappings = array(
  );
  protected $authorType = 'Google_Service_MyBusiness_Author';
  protected $authorDataType = '';
  public $createTime;
  public $name;
  public $text;
  protected $topAnswersType = 'Google_Service_MyBusiness_Answer';
  protected $topAnswersDataType = 'array';
  public $totalAnswerCount;
  public $updateTime;
  public $upvoteCount;


  public function setAuthor(Google_Service_MyBusiness_Author $author)
  {
    $this->author = $author;
  }
  public function getAuthor()
  {
    return $this->author;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setText($text)
  {
    $this->text = $text;
  }
  public function getText()
  {
    return $this->text;
  }
  public function setTopAnswers($topAnswers)
  {
    $this->topAnswers = $topAnswers;
  }
  public function getTopAnswers()
  {
    return $this->topAnswers;
  }
  public function setTotalAnswerCount($totalAnswerCount)
  {
    $this->totalAnswerCount = $totalAnswerCount;
  }
  public function getTotalAnswerCount()
  {
    return $this->totalAnswerCount;
  }
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  public function setUpvoteCount($upvoteCount)
  {
    $this->upvoteCount = $upvoteCount;
  }
  public function getUpvoteCount()
  {
    return $this->upvoteCount;
  }
}

class Google_Service_MyBusiness_RegionCount extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $count;
  public $label;
  protected $latlngType = 'Google_Service_MyBusiness_LatLng';
  protected $latlngDataType = '';


  public function setCount($count)
  {
    $this->count = $count;
  }
  public function getCount()
  {
    return $this->count;
  }
  public function setLabel($label)
  {
    $this->label = $label;
  }
  public function getLabel()
  {
    return $this->label;
  }
  public function setLatlng(Google_Service_MyBusiness_LatLng $latlng)
  {
    $this->latlng = $latlng;
  }
  public function getLatlng()
  {
    return $this->latlng;
  }
}

class Google_Service_MyBusiness_RelationshipData extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $parentChain;


  public function setParentChain($parentChain)
  {
    $this->parentChain = $parentChain;
  }
  public function getParentChain()
  {
    return $this->parentChain;
  }
}

class Google_Service_MyBusiness_RepeatedEnumAttributeValue extends Google_Collection
{
  protected $collection_key = 'unsetValues';
  protected $internal_gapi_mappings = array(
  );
  public $setValues;
  public $unsetValues;


  public function setSetValues($setValues)
  {
    $this->setValues = $setValues;
  }
  public function getSetValues()
  {
    return $this->setValues;
  }
  public function setUnsetValues($unsetValues)
  {
    $this->unsetValues = $unsetValues;
  }
  public function getUnsetValues()
  {
    return $this->unsetValues;
  }
}

class Google_Service_MyBusiness_ReportGoogleLocationRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $locationGroupName;
  public $reportReasonBadLocation;
  public $reportReasonBadRecommendation;
  public $reportReasonElaboration;
  public $reportReasonLanguageCode;


  public function setLocationGroupName($locationGroupName)
  {
    $this->locationGroupName = $locationGroupName;
  }
  public function getLocationGroupName()
  {
    return $this->locationGroupName;
  }
  public function setReportReasonBadLocation($reportReasonBadLocation)
  {
    $this->reportReasonBadLocation = $reportReasonBadLocation;
  }
  public function getReportReasonBadLocation()
  {
    return $this->reportReasonBadLocation;
  }
  public function setReportReasonBadRecommendation($reportReasonBadRecommendation)
  {
    $this->reportReasonBadRecommendation = $reportReasonBadRecommendation;
  }
  public function getReportReasonBadRecommendation()
  {
    return $this->reportReasonBadRecommendation;
  }
  public function setReportReasonElaboration($reportReasonElaboration)
  {
    $this->reportReasonElaboration = $reportReasonElaboration;
  }
  public function getReportReasonElaboration()
  {
    return $this->reportReasonElaboration;
  }
  public function setReportReasonLanguageCode($reportReasonLanguageCode)
  {
    $this->reportReasonLanguageCode = $reportReasonLanguageCode;
  }
  public function getReportReasonLanguageCode()
  {
    return $this->reportReasonLanguageCode;
  }
}

class Google_Service_MyBusiness_ReportLocalPostInsightsRequest extends Google_Collection
{
  protected $collection_key = 'localPostNames';
  protected $internal_gapi_mappings = array(
  );
  protected $basicRequestType = 'Google_Service_MyBusiness_BasicMetricsRequest';
  protected $basicRequestDataType = '';
  public $localPostNames;


  public function setBasicRequest(Google_Service_MyBusiness_BasicMetricsRequest $basicRequest)
  {
    $this->basicRequest = $basicRequest;
  }
  public function getBasicRequest()
  {
    return $this->basicRequest;
  }
  public function setLocalPostNames($localPostNames)
  {
    $this->localPostNames = $localPostNames;
  }
  public function getLocalPostNames()
  {
    return $this->localPostNames;
  }
}

class Google_Service_MyBusiness_ReportLocalPostInsightsResponse extends Google_Collection
{
  protected $collection_key = 'localPostMetrics';
  protected $internal_gapi_mappings = array(
  );
  protected $localPostMetricsType = 'Google_Service_MyBusiness_LocalPostMetrics';
  protected $localPostMetricsDataType = 'array';
  public $name;
  public $timeZone;


  public function setLocalPostMetrics($localPostMetrics)
  {
    $this->localPostMetrics = $localPostMetrics;
  }
  public function getLocalPostMetrics()
  {
    return $this->localPostMetrics;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  public function getTimeZone()
  {
    return $this->timeZone;
  }
}

class Google_Service_MyBusiness_ReportLocationInsightsRequest extends Google_Collection
{
  protected $collection_key = 'locationNames';
  protected $internal_gapi_mappings = array(
  );
  protected $basicRequestType = 'Google_Service_MyBusiness_BasicMetricsRequest';
  protected $basicRequestDataType = '';
  protected $drivingDirectionsRequestType = 'Google_Service_MyBusiness_DrivingDirectionMetricsRequest';
  protected $drivingDirectionsRequestDataType = '';
  public $locationNames;


  public function setBasicRequest(Google_Service_MyBusiness_BasicMetricsRequest $basicRequest)
  {
    $this->basicRequest = $basicRequest;
  }
  public function getBasicRequest()
  {
    return $this->basicRequest;
  }
  public function setDrivingDirectionsRequest(Google_Service_MyBusiness_DrivingDirectionMetricsRequest $drivingDirectionsRequest)
  {
    $this->drivingDirectionsRequest = $drivingDirectionsRequest;
  }
  public function getDrivingDirectionsRequest()
  {
    return $this->drivingDirectionsRequest;
  }
  public function setLocationNames($locationNames)
  {
    $this->locationNames = $locationNames;
  }
  public function getLocationNames()
  {
    return $this->locationNames;
  }
}

class Google_Service_MyBusiness_ReportLocationInsightsResponse extends Google_Collection
{
  protected $collection_key = 'locationMetrics';
  protected $internal_gapi_mappings = array(
  );
  protected $locationDrivingDirectionMetricsType = 'Google_Service_MyBusiness_LocationDrivingDirectionMetrics';
  protected $locationDrivingDirectionMetricsDataType = 'array';
  protected $locationMetricsType = 'Google_Service_MyBusiness_LocationMetrics';
  protected $locationMetricsDataType = 'array';


  public function setLocationDrivingDirectionMetrics($locationDrivingDirectionMetrics)
  {
    $this->locationDrivingDirectionMetrics = $locationDrivingDirectionMetrics;
  }
  public function getLocationDrivingDirectionMetrics()
  {
    return $this->locationDrivingDirectionMetrics;
  }
  public function setLocationMetrics($locationMetrics)
  {
    $this->locationMetrics = $locationMetrics;
  }
  public function getLocationMetrics()
  {
    return $this->locationMetrics;
  }
}

class Google_Service_MyBusiness_Review extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $comment;
  public $createTime;
  public $name;
  public $reviewId;
  protected $reviewReplyType = 'Google_Service_MyBusiness_ReviewReply';
  protected $reviewReplyDataType = '';
  protected $reviewerType = 'Google_Service_MyBusiness_Reviewer';
  protected $reviewerDataType = '';
  public $starRating;
  public $updateTime;


  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  public function getComment()
  {
    return $this->comment;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setReviewId($reviewId)
  {
    $this->reviewId = $reviewId;
  }
  public function getReviewId()
  {
    return $this->reviewId;
  }
  public function setReviewReply(Google_Service_MyBusiness_ReviewReply $reviewReply)
  {
    $this->reviewReply = $reviewReply;
  }
  public function getReviewReply()
  {
    return $this->reviewReply;
  }
  public function setReviewer(Google_Service_MyBusiness_Reviewer $reviewer)
  {
    $this->reviewer = $reviewer;
  }
  public function getReviewer()
  {
    return $this->reviewer;
  }
  public function setStarRating($starRating)
  {
    $this->starRating = $starRating;
  }
  public function getStarRating()
  {
    return $this->starRating;
  }
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

class Google_Service_MyBusiness_ReviewReply extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $comment;
  public $updateTime;


  public function setComment($comment)
  {
    $this->comment = $comment;
  }
  public function getComment()
  {
    return $this->comment;
  }
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

class Google_Service_MyBusiness_Reviewer extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $displayName;
  public $isAnonymous;
  public $profilePhotoUrl;


  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setIsAnonymous($isAnonymous)
  {
    $this->isAnonymous = $isAnonymous;
  }
  public function getIsAnonymous()
  {
    return $this->isAnonymous;
  }
  public function setProfilePhotoUrl($profilePhotoUrl)
  {
    $this->profilePhotoUrl = $profilePhotoUrl;
  }
  public function getProfilePhotoUrl()
  {
    return $this->profilePhotoUrl;
  }
}

class Google_Service_MyBusiness_SearchChainsResponse extends Google_Collection
{
  protected $collection_key = 'chains';
  protected $internal_gapi_mappings = array(
  );
  protected $chainsType = 'Google_Service_MyBusiness_Chain';
  protected $chainsDataType = 'array';


  public function setChains($chains)
  {
    $this->chains = $chains;
  }
  public function getChains()
  {
    return $this->chains;
  }
}

class Google_Service_MyBusiness_SearchGoogleLocationsRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $locationType = 'Google_Service_MyBusiness_Location';
  protected $locationDataType = '';
  public $query;
  public $resultCount;


  public function setLocation(Google_Service_MyBusiness_Location $location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setQuery($query)
  {
    $this->query = $query;
  }
  public function getQuery()
  {
    return $this->query;
  }
  public function setResultCount($resultCount)
  {
    $this->resultCount = $resultCount;
  }
  public function getResultCount()
  {
    return $this->resultCount;
  }
}

class Google_Service_MyBusiness_SearchGoogleLocationsResponse extends Google_Collection
{
  protected $collection_key = 'googleLocations';
  protected $internal_gapi_mappings = array(
  );
  protected $googleLocationsType = 'Google_Service_MyBusiness_GoogleLocation';
  protected $googleLocationsDataType = 'array';


  public function setGoogleLocations($googleLocations)
  {
    $this->googleLocations = $googleLocations;
  }
  public function getGoogleLocations()
  {
    return $this->googleLocations;
  }
}

class Google_Service_MyBusiness_Section extends Google_Collection
{
  protected $collection_key = 'labels';
  protected $internal_gapi_mappings = array(
  );
  protected $itemsType = 'Google_Service_MyBusiness_Item';
  protected $itemsDataType = 'array';
  protected $labelsType = 'Google_Service_MyBusiness_Label';
  protected $labelsDataType = 'array';
  public $sectionId;
  public $sectionType;


  public function setItems($items)
  {
    $this->items = $items;
  }
  public function getItems()
  {
    return $this->items;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setSectionId($sectionId)
  {
    $this->sectionId = $sectionId;
  }
  public function getSectionId()
  {
    return $this->sectionId;
  }
  public function setSectionType($sectionType)
  {
    $this->sectionType = $sectionType;
  }
  public function getSectionType()
  {
    return $this->sectionType;
  }
}

class Google_Service_MyBusiness_ServiceAreaBusiness extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $businessType;
  protected $placesType = 'Google_Service_MyBusiness_Places';
  protected $placesDataType = '';
  protected $radiusType = 'Google_Service_MyBusiness_PointRadius';
  protected $radiusDataType = '';


  public function setBusinessType($businessType)
  {
    $this->businessType = $businessType;
  }
  public function getBusinessType()
  {
    return $this->businessType;
  }
  public function setPlaces(Google_Service_MyBusiness_Places $places)
  {
    $this->places = $places;
  }
  public function getPlaces()
  {
    return $this->places;
  }
  public function setRadius(Google_Service_MyBusiness_PointRadius $radius)
  {
    $this->radius = $radius;
  }
  public function getRadius()
  {
    return $this->radius;
  }
}

class Google_Service_MyBusiness_ServiceBusinessContext extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $addressType = 'Google_Service_MyBusiness_PostalAddress';
  protected $addressDataType = '';


  public function setAddress(Google_Service_MyBusiness_PostalAddress $address)
  {
    $this->address = $address;
  }
  public function getAddress()
  {
    return $this->address;
  }
}

class Google_Service_MyBusiness_ServiceItem extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $freeFormServiceItemType = 'Google_Service_MyBusiness_FreeFormServiceItem';
  protected $freeFormServiceItemDataType = '';
  public $isOffered;
  protected $priceType = 'Google_Service_MyBusiness_Money';
  protected $priceDataType = '';
  protected $structuredServiceItemType = 'Google_Service_MyBusiness_StructuredServiceItem';
  protected $structuredServiceItemDataType = '';


  public function setFreeFormServiceItem(Google_Service_MyBusiness_FreeFormServiceItem $freeFormServiceItem)
  {
    $this->freeFormServiceItem = $freeFormServiceItem;
  }
  public function getFreeFormServiceItem()
  {
    return $this->freeFormServiceItem;
  }
  public function setIsOffered($isOffered)
  {
    $this->isOffered = $isOffered;
  }
  public function getIsOffered()
  {
    return $this->isOffered;
  }
  public function setPrice(Google_Service_MyBusiness_Money $price)
  {
    $this->price = $price;
  }
  public function getPrice()
  {
    return $this->price;
  }
  public function setStructuredServiceItem(Google_Service_MyBusiness_StructuredServiceItem $structuredServiceItem)
  {
    $this->structuredServiceItem = $structuredServiceItem;
  }
  public function getStructuredServiceItem()
  {
    return $this->structuredServiceItem;
  }
}

class Google_Service_MyBusiness_ServiceList extends Google_Collection
{
  protected $collection_key = 'serviceItems';
  protected $internal_gapi_mappings = array(
  );
  public $name;
  protected $serviceItemsType = 'Google_Service_MyBusiness_ServiceItem';
  protected $serviceItemsDataType = 'array';


  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setServiceItems($serviceItems)
  {
    $this->serviceItems = $serviceItems;
  }
  public function getServiceItems()
  {
    return $this->serviceItems;
  }
}

class Google_Service_MyBusiness_ServiceType extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $displayName;
  public $serviceTypeId;


  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setServiceTypeId($serviceTypeId)
  {
    $this->serviceTypeId = $serviceTypeId;
  }
  public function getServiceTypeId()
  {
    return $this->serviceTypeId;
  }
}

class Google_Service_MyBusiness_Services extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $baggageStorage;
  public $baggageStorageException;
  public $concierge;
  public $conciergeException;
  public $convenienceStore;
  public $convenienceStoreException;
  public $currencyExchange;
  public $currencyExchangeException;
  public $elevator;
  public $elevatorException;
  public $frontDesk;
  public $frontDeskException;
  public $fullServiceLaundry;
  public $fullServiceLaundryException;
  public $giftShop;
  public $giftShopException;
  protected $languagesSpokenType = 'Google_Service_MyBusiness_LanguagesSpoken';
  protected $languagesSpokenDataType = '';
  public $selfServiceLaundry;
  public $selfServiceLaundryException;
  public $socialHour;
  public $socialHourException;
  public $twentyFourHourFrontDesk;
  public $twentyFourHourFrontDeskException;
  public $wakeUpCalls;
  public $wakeUpCallsException;


  public function setBaggageStorage($baggageStorage)
  {
    $this->baggageStorage = $baggageStorage;
  }
  public function getBaggageStorage()
  {
    return $this->baggageStorage;
  }
  public function setBaggageStorageException($baggageStorageException)
  {
    $this->baggageStorageException = $baggageStorageException;
  }
  public function getBaggageStorageException()
  {
    return $this->baggageStorageException;
  }
  public function setConcierge($concierge)
  {
    $this->concierge = $concierge;
  }
  public function getConcierge()
  {
    return $this->concierge;
  }
  public function setConciergeException($conciergeException)
  {
    $this->conciergeException = $conciergeException;
  }
  public function getConciergeException()
  {
    return $this->conciergeException;
  }
  public function setConvenienceStore($convenienceStore)
  {
    $this->convenienceStore = $convenienceStore;
  }
  public function getConvenienceStore()
  {
    return $this->convenienceStore;
  }
  public function setConvenienceStoreException($convenienceStoreException)
  {
    $this->convenienceStoreException = $convenienceStoreException;
  }
  public function getConvenienceStoreException()
  {
    return $this->convenienceStoreException;
  }
  public function setCurrencyExchange($currencyExchange)
  {
    $this->currencyExchange = $currencyExchange;
  }
  public function getCurrencyExchange()
  {
    return $this->currencyExchange;
  }
  public function setCurrencyExchangeException($currencyExchangeException)
  {
    $this->currencyExchangeException = $currencyExchangeException;
  }
  public function getCurrencyExchangeException()
  {
    return $this->currencyExchangeException;
  }
  public function setElevator($elevator)
  {
    $this->elevator = $elevator;
  }
  public function getElevator()
  {
    return $this->elevator;
  }
  public function setElevatorException($elevatorException)
  {
    $this->elevatorException = $elevatorException;
  }
  public function getElevatorException()
  {
    return $this->elevatorException;
  }
  public function setFrontDesk($frontDesk)
  {
    $this->frontDesk = $frontDesk;
  }
  public function getFrontDesk()
  {
    return $this->frontDesk;
  }
  public function setFrontDeskException($frontDeskException)
  {
    $this->frontDeskException = $frontDeskException;
  }
  public function getFrontDeskException()
  {
    return $this->frontDeskException;
  }
  public function setFullServiceLaundry($fullServiceLaundry)
  {
    $this->fullServiceLaundry = $fullServiceLaundry;
  }
  public function getFullServiceLaundry()
  {
    return $this->fullServiceLaundry;
  }
  public function setFullServiceLaundryException($fullServiceLaundryException)
  {
    $this->fullServiceLaundryException = $fullServiceLaundryException;
  }
  public function getFullServiceLaundryException()
  {
    return $this->fullServiceLaundryException;
  }
  public function setGiftShop($giftShop)
  {
    $this->giftShop = $giftShop;
  }
  public function getGiftShop()
  {
    return $this->giftShop;
  }
  public function setGiftShopException($giftShopException)
  {
    $this->giftShopException = $giftShopException;
  }
  public function getGiftShopException()
  {
    return $this->giftShopException;
  }
  public function setLanguagesSpoken(Google_Service_MyBusiness_LanguagesSpoken $languagesSpoken)
  {
    $this->languagesSpoken = $languagesSpoken;
  }
  public function getLanguagesSpoken()
  {
    return $this->languagesSpoken;
  }
  public function setSelfServiceLaundry($selfServiceLaundry)
  {
    $this->selfServiceLaundry = $selfServiceLaundry;
  }
  public function getSelfServiceLaundry()
  {
    return $this->selfServiceLaundry;
  }
  public function setSelfServiceLaundryException($selfServiceLaundryException)
  {
    $this->selfServiceLaundryException = $selfServiceLaundryException;
  }
  public function getSelfServiceLaundryException()
  {
    return $this->selfServiceLaundryException;
  }
  public function setSocialHour($socialHour)
  {
    $this->socialHour = $socialHour;
  }
  public function getSocialHour()
  {
    return $this->socialHour;
  }
  public function setSocialHourException($socialHourException)
  {
    $this->socialHourException = $socialHourException;
  }
  public function getSocialHourException()
  {
    return $this->socialHourException;
  }
  public function setTwentyFourHourFrontDesk($twentyFourHourFrontDesk)
  {
    $this->twentyFourHourFrontDesk = $twentyFourHourFrontDesk;
  }
  public function getTwentyFourHourFrontDesk()
  {
    return $this->twentyFourHourFrontDesk;
  }
  public function setTwentyFourHourFrontDeskException($twentyFourHourFrontDeskException)
  {
    $this->twentyFourHourFrontDeskException = $twentyFourHourFrontDeskException;
  }
  public function getTwentyFourHourFrontDeskException()
  {
    return $this->twentyFourHourFrontDeskException;
  }
  public function setWakeUpCalls($wakeUpCalls)
  {
    $this->wakeUpCalls = $wakeUpCalls;
  }
  public function getWakeUpCalls()
  {
    return $this->wakeUpCalls;
  }
  public function setWakeUpCallsException($wakeUpCallsException)
  {
    $this->wakeUpCallsException = $wakeUpCallsException;
  }
  public function getWakeUpCallsException()
  {
    return $this->wakeUpCallsException;
  }
}

class Google_Service_MyBusiness_SpecialHourPeriod extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $closeTime;
  protected $endDateType = 'Google_Service_MyBusiness_Date';
  protected $endDateDataType = '';
  public $isClosed;
  public $openTime;
  protected $startDateType = 'Google_Service_MyBusiness_Date';
  protected $startDateDataType = '';


  public function setCloseTime($closeTime)
  {
    $this->closeTime = $closeTime;
  }
  public function getCloseTime()
  {
    return $this->closeTime;
  }
  public function setEndDate(Google_Service_MyBusiness_Date $endDate)
  {
    $this->endDate = $endDate;
  }
  public function getEndDate()
  {
    return $this->endDate;
  }
  public function setIsClosed($isClosed)
  {
    $this->isClosed = $isClosed;
  }
  public function getIsClosed()
  {
    return $this->isClosed;
  }
  public function setOpenTime($openTime)
  {
    $this->openTime = $openTime;
  }
  public function getOpenTime()
  {
    return $this->openTime;
  }
  public function setStartDate(Google_Service_MyBusiness_Date $startDate)
  {
    $this->startDate = $startDate;
  }
  public function getStartDate()
  {
    return $this->startDate;
  }
}

class Google_Service_MyBusiness_SpecialHours extends Google_Collection
{
  protected $collection_key = 'specialHourPeriods';
  protected $internal_gapi_mappings = array(
  );
  protected $specialHourPeriodsType = 'Google_Service_MyBusiness_SpecialHourPeriod';
  protected $specialHourPeriodsDataType = 'array';


  public function setSpecialHourPeriods($specialHourPeriods)
  {
    $this->specialHourPeriods = $specialHourPeriods;
  }
  public function getSpecialHourPeriods()
  {
    return $this->specialHourPeriods;
  }
}

class Google_Service_MyBusiness_StartUploadMediaItemDataRequest extends Google_Model
{
}

class Google_Service_MyBusiness_StructuredServiceItem extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $description;
  public $serviceTypeId;


  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setServiceTypeId($serviceTypeId)
  {
    $this->serviceTypeId = $serviceTypeId;
  }
  public function getServiceTypeId()
  {
    return $this->serviceTypeId;
  }
}

class Google_Service_MyBusiness_TargetLocation extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $locationAddress;
  public $locationName;


  public function setLocationAddress($locationAddress)
  {
    $this->locationAddress = $locationAddress;
  }
  public function getLocationAddress()
  {
    return $this->locationAddress;
  }
  public function setLocationName($locationName)
  {
    $this->locationName = $locationName;
  }
  public function getLocationName()
  {
    return $this->locationName;
  }
}

class Google_Service_MyBusiness_TimeDimension extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $dayOfWeek;
  protected $timeOfDayType = 'Google_Service_MyBusiness_TimeOfDay';
  protected $timeOfDayDataType = '';
  protected $timeRangeType = 'Google_Service_MyBusiness_TimeRange';
  protected $timeRangeDataType = '';


  public function setDayOfWeek($dayOfWeek)
  {
    $this->dayOfWeek = $dayOfWeek;
  }
  public function getDayOfWeek()
  {
    return $this->dayOfWeek;
  }
  public function setTimeOfDay(Google_Service_MyBusiness_TimeOfDay $timeOfDay)
  {
    $this->timeOfDay = $timeOfDay;
  }
  public function getTimeOfDay()
  {
    return $this->timeOfDay;
  }
  public function setTimeRange(Google_Service_MyBusiness_TimeRange $timeRange)
  {
    $this->timeRange = $timeRange;
  }
  public function getTimeRange()
  {
    return $this->timeRange;
  }
}

class Google_Service_MyBusiness_TimeInterval extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $endDateType = 'Google_Service_MyBusiness_Date';
  protected $endDateDataType = '';
  protected $endTimeType = 'Google_Service_MyBusiness_TimeOfDay';
  protected $endTimeDataType = '';
  protected $startDateType = 'Google_Service_MyBusiness_Date';
  protected $startDateDataType = '';
  protected $startTimeType = 'Google_Service_MyBusiness_TimeOfDay';
  protected $startTimeDataType = '';


  public function setEndDate(Google_Service_MyBusiness_Date $endDate)
  {
    $this->endDate = $endDate;
  }
  public function getEndDate()
  {
    return $this->endDate;
  }
  public function setEndTime(Google_Service_MyBusiness_TimeOfDay $endTime)
  {
    $this->endTime = $endTime;
  }
  public function getEndTime()
  {
    return $this->endTime;
  }
  public function setStartDate(Google_Service_MyBusiness_Date $startDate)
  {
    $this->startDate = $startDate;
  }
  public function getStartDate()
  {
    return $this->startDate;
  }
  public function setStartTime(Google_Service_MyBusiness_TimeOfDay $startTime)
  {
    $this->startTime = $startTime;
  }
  public function getStartTime()
  {
    return $this->startTime;
  }
}

class Google_Service_MyBusiness_TimeOfDay extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $hours;
  public $minutes;
  public $nanos;
  public $seconds;


  public function setHours($hours)
  {
    $this->hours = $hours;
  }
  public function getHours()
  {
    return $this->hours;
  }
  public function setMinutes($minutes)
  {
    $this->minutes = $minutes;
  }
  public function getMinutes()
  {
    return $this->minutes;
  }
  public function setNanos($nanos)
  {
    $this->nanos = $nanos;
  }
  public function getNanos()
  {
    return $this->nanos;
  }
  public function setSeconds($seconds)
  {
    $this->seconds = $seconds;
  }
  public function getSeconds()
  {
    return $this->seconds;
  }
}

class Google_Service_MyBusiness_TimePeriod extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $closeDay;
  public $closeTime;
  public $openDay;
  public $openTime;


  public function setCloseDay($closeDay)
  {
    $this->closeDay = $closeDay;
  }
  public function getCloseDay()
  {
    return $this->closeDay;
  }
  public function setCloseTime($closeTime)
  {
    $this->closeTime = $closeTime;
  }
  public function getCloseTime()
  {
    return $this->closeTime;
  }
  public function setOpenDay($openDay)
  {
    $this->openDay = $openDay;
  }
  public function getOpenDay()
  {
    return $this->openDay;
  }
  public function setOpenTime($openTime)
  {
    $this->openTime = $openTime;
  }
  public function getOpenTime()
  {
    return $this->openTime;
  }
}

class Google_Service_MyBusiness_TimeRange extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $endTime;
  public $startTime;


  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  public function getEndTime()
  {
    return $this->endTime;
  }
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  public function getStartTime()
  {
    return $this->startTime;
  }
}

class Google_Service_MyBusiness_TopDirectionSources extends Google_Collection
{
  protected $collection_key = 'regionCounts';
  protected $internal_gapi_mappings = array(
  );
  public $dayCount;
  protected $regionCountsType = 'Google_Service_MyBusiness_RegionCount';
  protected $regionCountsDataType = 'array';


  public function setDayCount($dayCount)
  {
    $this->dayCount = $dayCount;
  }
  public function getDayCount()
  {
    return $this->dayCount;
  }
  public function setRegionCounts($regionCounts)
  {
    $this->regionCounts = $regionCounts;
  }
  public function getRegionCounts()
  {
    return $this->regionCounts;
  }
}

class Google_Service_MyBusiness_TransferLocationRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $toAccount;


  public function setToAccount($toAccount)
  {
    $this->toAccount = $toAccount;
  }
  public function getToAccount()
  {
    return $this->toAccount;
  }
}

class Google_Service_MyBusiness_Transportation extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $airportShuttle;
  public $airportShuttleException;
  public $carRentalOnProperty;
  public $carRentalOnPropertyException;
  public $freeAirportShuttle;
  public $freeAirportShuttleException;
  public $freePrivateCarService;
  public $freePrivateCarServiceException;
  public $localShuttle;
  public $localShuttleException;
  public $privateCarService;
  public $privateCarServiceException;
  public $transfer;
  public $transferException;


  public function setAirportShuttle($airportShuttle)
  {
    $this->airportShuttle = $airportShuttle;
  }
  public function getAirportShuttle()
  {
    return $this->airportShuttle;
  }
  public function setAirportShuttleException($airportShuttleException)
  {
    $this->airportShuttleException = $airportShuttleException;
  }
  public function getAirportShuttleException()
  {
    return $this->airportShuttleException;
  }
  public function setCarRentalOnProperty($carRentalOnProperty)
  {
    $this->carRentalOnProperty = $carRentalOnProperty;
  }
  public function getCarRentalOnProperty()
  {
    return $this->carRentalOnProperty;
  }
  public function setCarRentalOnPropertyException($carRentalOnPropertyException)
  {
    $this->carRentalOnPropertyException = $carRentalOnPropertyException;
  }
  public function getCarRentalOnPropertyException()
  {
    return $this->carRentalOnPropertyException;
  }
  public function setFreeAirportShuttle($freeAirportShuttle)
  {
    $this->freeAirportShuttle = $freeAirportShuttle;
  }
  public function getFreeAirportShuttle()
  {
    return $this->freeAirportShuttle;
  }
  public function setFreeAirportShuttleException($freeAirportShuttleException)
  {
    $this->freeAirportShuttleException = $freeAirportShuttleException;
  }
  public function getFreeAirportShuttleException()
  {
    return $this->freeAirportShuttleException;
  }
  public function setFreePrivateCarService($freePrivateCarService)
  {
    $this->freePrivateCarService = $freePrivateCarService;
  }
  public function getFreePrivateCarService()
  {
    return $this->freePrivateCarService;
  }
  public function setFreePrivateCarServiceException($freePrivateCarServiceException)
  {
    $this->freePrivateCarServiceException = $freePrivateCarServiceException;
  }
  public function getFreePrivateCarServiceException()
  {
    return $this->freePrivateCarServiceException;
  }
  public function setLocalShuttle($localShuttle)
  {
    $this->localShuttle = $localShuttle;
  }
  public function getLocalShuttle()
  {
    return $this->localShuttle;
  }
  public function setLocalShuttleException($localShuttleException)
  {
    $this->localShuttleException = $localShuttleException;
  }
  public function getLocalShuttleException()
  {
    return $this->localShuttleException;
  }
  public function setPrivateCarService($privateCarService)
  {
    $this->privateCarService = $privateCarService;
  }
  public function getPrivateCarService()
  {
    return $this->privateCarService;
  }
  public function setPrivateCarServiceException($privateCarServiceException)
  {
    $this->privateCarServiceException = $privateCarServiceException;
  }
  public function getPrivateCarServiceException()
  {
    return $this->privateCarServiceException;
  }
  public function setTransfer($transfer)
  {
    $this->transfer = $transfer;
  }
  public function getTransfer()
  {
    return $this->transfer;
  }
  public function setTransferException($transferException)
  {
    $this->transferException = $transferException;
  }
  public function getTransferException()
  {
    return $this->transferException;
  }
}

class Google_Service_MyBusiness_UpsertAnswerRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $answerType = 'Google_Service_MyBusiness_Answer';
  protected $answerDataType = '';


  public function setAnswer(Google_Service_MyBusiness_Answer $answer)
  {
    $this->answer = $answer;
  }
  public function getAnswer()
  {
    return $this->answer;
  }
}

class Google_Service_MyBusiness_UrlAttributeValue extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $url;


  public function setUrl($url)
  {
    $this->url = $url;
  }
  public function getUrl()
  {
    return $this->url;
  }
}

class Google_Service_MyBusiness_Verification extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $createTime;
  public $method;
  public $name;
  public $state;


  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setMethod($method)
  {
    $this->method = $method;
  }
  public function getMethod()
  {
    return $this->method;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setState($state)
  {
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
}

class Google_Service_MyBusiness_VerificationOption extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $addressDataType = 'Google_Service_MyBusiness_AddressVerificationData';
  protected $addressDataDataType = '';
  protected $emailDataType = 'Google_Service_MyBusiness_EmailVerificationData';
  protected $emailDataDataType = '';
  protected $phoneDataType = 'Google_Service_MyBusiness_PhoneVerificationData';
  protected $phoneDataDataType = '';
  public $verificationMethod;


  public function setAddressData(Google_Service_MyBusiness_AddressVerificationData $addressData)
  {
    $this->addressData = $addressData;
  }
  public function getAddressData()
  {
    return $this->addressData;
  }
  public function setEmailData(Google_Service_MyBusiness_EmailVerificationData $emailData)
  {
    $this->emailData = $emailData;
  }
  public function getEmailData()
  {
    return $this->emailData;
  }
  public function setPhoneData(Google_Service_MyBusiness_PhoneVerificationData $phoneData)
  {
    $this->phoneData = $phoneData;
  }
  public function getPhoneData()
  {
    return $this->phoneData;
  }
  public function setVerificationMethod($verificationMethod)
  {
    $this->verificationMethod = $verificationMethod;
  }
  public function getVerificationMethod()
  {
    return $this->verificationMethod;
  }
}

class Google_Service_MyBusiness_VerifyLocationRequest extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $addressInputType = 'Google_Service_MyBusiness_AddressInput';
  protected $addressInputDataType = '';
  protected $contextType = 'Google_Service_MyBusiness_ServiceBusinessContext';
  protected $contextDataType = '';
  protected $emailInputType = 'Google_Service_MyBusiness_EmailInput';
  protected $emailInputDataType = '';
  public $languageCode;
  public $method;
  protected $phoneInputType = 'Google_Service_MyBusiness_PhoneInput';
  protected $phoneInputDataType = '';


  public function setAddressInput(Google_Service_MyBusiness_AddressInput $addressInput)
  {
    $this->addressInput = $addressInput;
  }
  public function getAddressInput()
  {
    return $this->addressInput;
  }
  public function setContext(Google_Service_MyBusiness_ServiceBusinessContext $context)
  {
    $this->context = $context;
  }
  public function getContext()
  {
    return $this->context;
  }
  public function setEmailInput(Google_Service_MyBusiness_EmailInput $emailInput)
  {
    $this->emailInput = $emailInput;
  }
  public function getEmailInput()
  {
    return $this->emailInput;
  }
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  public function setMethod($method)
  {
    $this->method = $method;
  }
  public function getMethod()
  {
    return $this->method;
  }
  public function setPhoneInput(Google_Service_MyBusiness_PhoneInput $phoneInput)
  {
    $this->phoneInput = $phoneInput;
  }
  public function getPhoneInput()
  {
    return $this->phoneInput;
  }
}

class Google_Service_MyBusiness_VerifyLocationResponse extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $verificationType = 'Google_Service_MyBusiness_Verification';
  protected $verificationDataType = '';


  public function setVerification(Google_Service_MyBusiness_Verification $verification)
  {
    $this->verification = $verification;
  }
  public function getVerification()
  {
    return $this->verification;
  }
}

class Google_Service_MyBusiness_ViewsFromUnit extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $beachView;
  public $beachViewException;
  public $cityView;
  public $cityViewException;
  public $gardenView;
  public $gardenViewException;
  public $lakeView;
  public $lakeViewException;
  public $landmarkView;
  public $landmarkViewException;
  public $oceanView;
  public $oceanViewException;
  public $poolView;
  public $poolViewException;
  public $valleyView;
  public $valleyViewException;


  public function setBeachView($beachView)
  {
    $this->beachView = $beachView;
  }
  public function getBeachView()
  {
    return $this->beachView;
  }
  public function setBeachViewException($beachViewException)
  {
    $this->beachViewException = $beachViewException;
  }
  public function getBeachViewException()
  {
    return $this->beachViewException;
  }
  public function setCityView($cityView)
  {
    $this->cityView = $cityView;
  }
  public function getCityView()
  {
    return $this->cityView;
  }
  public function setCityViewException($cityViewException)
  {
    $this->cityViewException = $cityViewException;
  }
  public function getCityViewException()
  {
    return $this->cityViewException;
  }
  public function setGardenView($gardenView)
  {
    $this->gardenView = $gardenView;
  }
  public function getGardenView()
  {
    return $this->gardenView;
  }
  public function setGardenViewException($gardenViewException)
  {
    $this->gardenViewException = $gardenViewException;
  }
  public function getGardenViewException()
  {
    return $this->gardenViewException;
  }
  public function setLakeView($lakeView)
  {
    $this->lakeView = $lakeView;
  }
  public function getLakeView()
  {
    return $this->lakeView;
  }
  public function setLakeViewException($lakeViewException)
  {
    $this->lakeViewException = $lakeViewException;
  }
  public function getLakeViewException()
  {
    return $this->lakeViewException;
  }
  public function setLandmarkView($landmarkView)
  {
    $this->landmarkView = $landmarkView;
  }
  public function getLandmarkView()
  {
    return $this->landmarkView;
  }
  public function setLandmarkViewException($landmarkViewException)
  {
    $this->landmarkViewException = $landmarkViewException;
  }
  public function getLandmarkViewException()
  {
    return $this->landmarkViewException;
  }
  public function setOceanView($oceanView)
  {
    $this->oceanView = $oceanView;
  }
  public function getOceanView()
  {
    return $this->oceanView;
  }
  public function setOceanViewException($oceanViewException)
  {
    $this->oceanViewException = $oceanViewException;
  }
  public function getOceanViewException()
  {
    return $this->oceanViewException;
  }
  public function setPoolView($poolView)
  {
    $this->poolView = $poolView;
  }
  public function getPoolView()
  {
    return $this->poolView;
  }
  public function setPoolViewException($poolViewException)
  {
    $this->poolViewException = $poolViewException;
  }
  public function getPoolViewException()
  {
    return $this->poolViewException;
  }
  public function setValleyView($valleyView)
  {
    $this->valleyView = $valleyView;
  }
  public function getValleyView()
  {
    return $this->valleyView;
  }
  public function setValleyViewException($valleyViewException)
  {
    $this->valleyViewException = $valleyViewException;
  }
  public function getValleyViewException()
  {
    return $this->valleyViewException;
  }
}

class Google_Service_MyBusiness_Wellness extends Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $doctorOnCall;
  public $doctorOnCallException;
  public $ellipticalMachine;
  public $ellipticalMachineException;
  public $fitnessCenter;
  public $fitnessCenterException;
  public $freeFitnessCenter;
  public $freeFitnessCenterException;
  public $freeWeights;
  public $freeWeightsException;
  public $massage;
  public $massageException;
  public $salon;
  public $salonException;
  public $sauna;
  public $saunaException;
  public $spa;
  public $spaException;
  public $treadmill;
  public $treadmillException;
  public $weightMachine;
  public $weightMachineException;


  public function setDoctorOnCall($doctorOnCall)
  {
    $this->doctorOnCall = $doctorOnCall;
  }
  public function getDoctorOnCall()
  {
    return $this->doctorOnCall;
  }
  public function setDoctorOnCallException($doctorOnCallException)
  {
    $this->doctorOnCallException = $doctorOnCallException;
  }
  public function getDoctorOnCallException()
  {
    return $this->doctorOnCallException;
  }
  public function setEllipticalMachine($ellipticalMachine)
  {
    $this->ellipticalMachine = $ellipticalMachine;
  }
  public function getEllipticalMachine()
  {
    return $this->ellipticalMachine;
  }
  public function setEllipticalMachineException($ellipticalMachineException)
  {
    $this->ellipticalMachineException = $ellipticalMachineException;
  }
  public function getEllipticalMachineException()
  {
    return $this->ellipticalMachineException;
  }
  public function setFitnessCenter($fitnessCenter)
  {
    $this->fitnessCenter = $fitnessCenter;
  }
  public function getFitnessCenter()
  {
    return $this->fitnessCenter;
  }
  public function setFitnessCenterException($fitnessCenterException)
  {
    $this->fitnessCenterException = $fitnessCenterException;
  }
  public function getFitnessCenterException()
  {
    return $this->fitnessCenterException;
  }
  public function setFreeFitnessCenter($freeFitnessCenter)
  {
    $this->freeFitnessCenter = $freeFitnessCenter;
  }
  public function getFreeFitnessCenter()
  {
    return $this->freeFitnessCenter;
  }
  public function setFreeFitnessCenterException($freeFitnessCenterException)
  {
    $this->freeFitnessCenterException = $freeFitnessCenterException;
  }
  public function getFreeFitnessCenterException()
  {
    return $this->freeFitnessCenterException;
  }
  public function setFreeWeights($freeWeights)
  {
    $this->freeWeights = $freeWeights;
  }
  public function getFreeWeights()
  {
    return $this->freeWeights;
  }
  public function setFreeWeightsException($freeWeightsException)
  {
    $this->freeWeightsException = $freeWeightsException;
  }
  public function getFreeWeightsException()
  {
    return $this->freeWeightsException;
  }
  public function setMassage($massage)
  {
    $this->massage = $massage;
  }
  public function getMassage()
  {
    return $this->massage;
  }
  public function setMassageException($massageException)
  {
    $this->massageException = $massageException;
  }
  public function getMassageException()
  {
    return $this->massageException;
  }
  public function setSalon($salon)
  {
    $this->salon = $salon;
  }
  public function getSalon()
  {
    return $this->salon;
  }
  public function setSalonException($salonException)
  {
    $this->salonException = $salonException;
  }
  public function getSalonException()
  {
    return $this->salonException;
  }
  public function setSauna($sauna)
  {
    $this->sauna = $sauna;
  }
  public function getSauna()
  {
    return $this->sauna;
  }
  public function setSaunaException($saunaException)
  {
    $this->saunaException = $saunaException;
  }
  public function getSaunaException()
  {
    return $this->saunaException;
  }
  public function setSpa($spa)
  {
    $this->spa = $spa;
  }
  public function getSpa()
  {
    return $this->spa;
  }
  public function setSpaException($spaException)
  {
    $this->spaException = $spaException;
  }
  public function getSpaException()
  {
    return $this->spaException;
  }
  public function setTreadmill($treadmill)
  {
    $this->treadmill = $treadmill;
  }
  public function getTreadmill()
  {
    return $this->treadmill;
  }
  public function setTreadmillException($treadmillException)
  {
    $this->treadmillException = $treadmillException;
  }
  public function getTreadmillException()
  {
    return $this->treadmillException;
  }
  public function setWeightMachine($weightMachine)
  {
    $this->weightMachine = $weightMachine;
  }
  public function getWeightMachine()
  {
    return $this->weightMachine;
  }
  public function setWeightMachineException($weightMachineException)
  {
    $this->weightMachineException = $weightMachineException;
  }
  public function getWeightMachineException()
  {
    return $this->weightMachineException;
  }
}
