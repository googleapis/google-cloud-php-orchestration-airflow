<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START composer_v1_generated_Environments_ListWorkloads_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\Orchestration\Airflow\Service\V1\Client\EnvironmentsClient;
use Google\Cloud\Orchestration\Airflow\Service\V1\ListWorkloadsRequest;
use Google\Cloud\Orchestration\Airflow\Service\V1\ListWorkloadsResponse\ComposerWorkload;

/**
 * Lists workloads in a Cloud Composer environment. Workload is a unit that
 * runs a single Composer component.
 *
 * This method is supported for Cloud Composer environments in versions
 * composer-2.*.*-airflow-*.*.* and newer.
 *
 * @param string $formattedParent The environment name to get workloads for, in the form:
 *                                "projects/{projectId}/locations/{locationId}/environments/{environmentId}"
 *                                Please see {@see EnvironmentsClient::environmentName()} for help formatting this field.
 */
function list_workloads_sample(string $formattedParent): void
{
    // Create a client.
    $environmentsClient = new EnvironmentsClient();

    // Prepare the request message.
    $request = (new ListWorkloadsRequest())
        ->setParent($formattedParent);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $environmentsClient->listWorkloads($request);

        /** @var ComposerWorkload $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = EnvironmentsClient::environmentName('[PROJECT]', '[LOCATION]', '[ENVIRONMENT]');

    list_workloads_sample($formattedParent);
}
// [END composer_v1_generated_Environments_ListWorkloads_sync]
