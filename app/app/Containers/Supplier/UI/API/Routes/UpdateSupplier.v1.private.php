<?php

/**
 * @apiGroup           Supplier
 * @apiName            updateSupplier
 *
 * @api                {PATCH} /v1/suppliers/:id Endpoint title here..
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
$router->patch('suppliers/{id}', [
    'as' => 'api_supplier_update_supplier',
    'uses'  => 'Controller@updateSupplier',
    'middleware' => [
      'auth:api',
    ],
]);
