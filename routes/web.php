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

//Route::get('/', 'PagesController@home');

Route::get('/',
    function () {
        echo "test";
    });

Route::resource('projects', 'ProjectsController');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');