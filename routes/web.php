<?php


Route::get('/','HomeController@index');

  Route::get('/#rent','HomeController@indexRent');
  Route::get('/#sale','HomeController@indexSale');
  Route::get('/#auction','HomeController@indexAuction');

  
Route::resource('properties', 'PostedPropertyController');

Route::resource('agents', 'AgentsController');
           
Route::resource('auctionparticipants','BidderController');

Route::resource('auctionbidders','PropertyBidderController');

Route::resource('topsliders', 'TopSliderController');

Route::resource('postingplans', 'PostingPlanController');

Route::resource('services', 'ServiceController');

Route::resource('bannerads', 'BannerAdsController');



 
