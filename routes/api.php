<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api\v1', 'prefix' => 'v1'], function() {
    /**
     * @api {get} /search 1 Hotel search
     * @apiGroup Hotel
     *
     * @apiParam {String} name Hotel Should also match on partial names
     * @apiParam {Number} bedrooms Exact match
     * @apiParam {Number} bathrooms Exact match
     * @apiParam {Number} storeys Exact match
     * @apiParam {Number} garages Exact match
     * @apiParam {Number} minimum_price Minimum price
     * @apiParam {Number} maximum_price Maximum price
     *
     * @apiParamExample {json} Request-Example:
     *   {
     *       "status": "success",
     *       "houses": [{
     *           "name": "The Victoria",
     *           "price": 374662,
     *           "bedrooms": 4,
     *           "bathrooms": 2,
     *           "storeys": 1,
     *           "garages": 2,
     *           "garages": 2
     *      }]
     *   }
     */
     Route::get('search', ['as' => 'house.search', 'uses' => 'HouseController@search']);
});
