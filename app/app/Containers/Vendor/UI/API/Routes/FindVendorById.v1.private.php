<?php

/**
 * @apiGroup           Vendor
 * @apiName            findVendorById
 *
 * @api                {GET} /v1/vendors/:id Endpoint title here..
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
$router->get('vendors/{id}', [
    'as' => 'api_vendor_find_vendor_by_id',
    'uses'  => 'Controller@findVendorById',
    'middleware' => [
      'auth:api',
    ],
]);
