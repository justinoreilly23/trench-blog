<?php

/*
 *
 *  GET /projects (index)
 *  GET /projects/create (create)
 *  GET /projects/1 (show)
 *  POST /projects (store)
 *  GET /projects/1/edit (edit)
 *  PUT
 *  PATCH /projects/1 (update)
 *  DELETE /projects/1 (destroy)
 *
 */

/* Live: https://ethereal-personal.herokuapp.com/ */

Route::get('/test',
    function () {
        return view('test');
    });

Route::get('/', 'PagesController@home');
Route::resource('projects', 'ProjectsController');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');