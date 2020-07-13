<?php

Route::get('/convocatoria/{associateid?}', 'Convocatoria\convController@index');
Route::get('/genconvnypers', 'Convocatoria\convController@genconvnypers');
Route::get('/genconvny', 'Convocatoria\convController@genconvny');
Route::get('/repoconvny', 'Convocatoria\convController@repoconvny');
Route::get('/getPuVi', 'Convocatoria\convController@getPuVi');
Route::get('/reportegral', 'Convocatoria\convController@reportegral');
Route::get('/getrankdirexe', 'Convocatoria\convController@getRankDirExe');
Route::get('/getrankplaadel', 'Convocatoria\convController@getRankPlaAdel');