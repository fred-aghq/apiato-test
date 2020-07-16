<?php

/**
 * @apiGroup           Supplier
 * @apiName            findSupplierById
 *
 * @api                {GET} /v1/suppliers/:id Endpoint title here..
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
$router->get('suppliers/{id}', [
    'as' => 'api_supplier_find_supplier_by_id',
    'uses'  => 'Controller@findSupplierById',
    'middleware' => [
      'auth:api',
    ],
]);
