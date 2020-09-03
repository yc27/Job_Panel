<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/jobs/job-details', function () {
    return view('job_details');
});

Route::group(['prefix' => '/jobseeker'], function () {
    Route::get('/create-resume', function () {
        return view('users.jobseeker.create_resume');
    });

    Route::get('/view-resume', function () {
        return view('users.jobseeker.view_resume');
    });

    Route::get('/edit-resume', function () {
        return view('users.jobseeker.edit_resume');
    });

    Route::get('/applied-jobs', function () {
        return view('users.jobseeker.applied_jobs');
    });
});

Route::group(['prefix' => '/employer'], function () {
    Route::get('/edit-company', function () {
        return view('users.employer.edit_company');
    });

    Route::get('/post-job', function () {
        return view('users.employer.post_job');
    });

    Route::get('/applied-candidates', function () {
        return view('users.employer.applied_candidates');
    });
});