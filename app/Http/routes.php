<?php
Route::get('/', ['middleware' => ['auth', 'needsPermission:userss.index'], function()
{
    return 'Yes I can!';
}]);