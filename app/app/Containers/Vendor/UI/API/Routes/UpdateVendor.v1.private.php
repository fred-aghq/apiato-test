<?php

/**
 * @apiGroup           Vendor
 * @apiName            updateVendor
 *
 * @api                {PATCH} /v1/vendors/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->patch('vendors/{id}', [
    'as' => 'api_vendor_update_vendor',
    'uses'  => 'Controller@updateVendor',
    'middleware' => [
      'auth:api',
    ],
]);
