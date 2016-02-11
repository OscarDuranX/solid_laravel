<?php


use Barryvdh\Debugbar\Middleware\Debugbar;

Route::group(['middleware' => ['web']], function () {

Route::get('testSendEmail','ContactEmailController@sendEmail');

    Route::get('/testSendeEmail2',function(){
        Debugbar::startMeasure("SendSubscriptionEmail");
        dispatch(new \App\Jobs\SendSusbscriptionEmail());
    });


});