<?php

/**
 * @apiGroup           Supplier
 * @apiName            getAllSuppliers
 *
 * @api                {GET} /v1/suppliers Endpoint title here..
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
$router->get('suppliers', [
    'as' => 'api_supplier_get_all_suppliers',
    'uses'  => 'Controller@getAllSuppliers',
    'middleware' => [
      'auth:api',
    ],
]);
