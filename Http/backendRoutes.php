<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/faqs'], function (Router $router) {
    $router->bind('faqs', function ($id) {
        return app('Modules\Faqs\Repositories\FaqsRepository')->find($id);
    });
    get('faqs', ['as' => 'admin.faqs.faqs.index', 'uses' => 'FaqsController@index']);
    get('faqs/create', ['as' => 'admin.faqs.faqs.create', 'uses' => 'FaqsController@create']);
    post('faqs', ['as' => 'admin.faqs.faqs.store', 'uses' => 'FaqsController@store']);
    get('faqs/{faqs}/edit', ['as' => 'admin.faqs.faqs.edit', 'uses' => 'FaqsController@edit']);
    put('faqs/{faqs}/edit', ['as' => 'admin.faqs.faqs.update', 'uses' => 'FaqsController@update']);
    delete('faqs/{faqs}', ['as' => 'admin.faqs.faqs.destroy', 'uses' => 'FaqsController@destroy']);
// append

});
