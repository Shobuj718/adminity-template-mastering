<?php

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
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'FrontController@index');
Route::get('/contact', 'FrontController@contact');
Route::get('/charcount', 'FrontController@charcount');
Route::get('/inputcharcount', 'FrontController@inputcharcount');
 /*
 ===============================================================================
    at a glance all menu route(front end)
 ===============================================================================
 */

Route::get('/teacherinfo', 'AtaglanceController@teacherinfo');
Route::get('/governingcouncil', 'AtaglanceController@governingcouncil');
Route::get('/managingcommitee', 'AtaglanceController@managingcommitee');
Route::get('/studentinfo', 'AtaglanceController@studentinfo');
Route::get('/employeeinfo', 'AtaglanceController@employeeinfo');
Route::get('/assetinfo', 'AtaglanceController@assetinfo');

/*
 ===============================================================================
    About us all menu route
 ===============================================================================
 */

 Route::get('/tnomessage', 'AboutusFrontController@tnomessage');
 Route::get('/presidentmessage', 'AboutusFrontController@presidentmessage');
 Route::get('/principalmessage', 'AboutusFrontController@principalmessage');
 Route::get('/viceprincipalmessage', 'AboutusFrontController@viceprincipalmessage');
 Route::get('/history', 'AboutusFrontController@history');
 Route::get('/founder', 'AboutusFrontController@founder');
 Route::get('/schoollaw', 'AboutusFrontController@schoollaw');
 Route::get('/goalpurpose', 'AboutusFrontController@goalpurpose');
 Route::get('/achievment', 'AboutusFrontController@achievment');
 Route::get('/infrastructure', 'AboutusFrontController@infrastructure');

 /*
 ===============================================================================
    About us all menu route
 ===============================================================================
 */

 Route::get('/vacancy', 'InformationFrontController@vacancy');
 Route::get('/news', 'InformationFrontController@news');
 Route::get('/holiday', 'InformationFrontController@holiday');
 Route::get('/facility', 'InformationFrontController@facility');
 Route::get('/formerPrinciples', 'InformationFrontController@formerPrinciples');
 Route::get('/formerTeachers', 'InformationFrontController@formerTeachers');
 Route::get('/formerCommiteeMembers', 'InformationFrontController@formerCommiteeMembers');


 /*
 ===============================================================================
    Academic all menu route
 ===============================================================================
 */

Route::get('/classRoutine', 'AcademicFrontController@classRoutine');
Route::get('/examRoutine', 'AcademicFrontController@examRoutine');
Route::get('/examResults', 'AcademicFrontController@examResults');
Route::get('/academicCalendar', 'AcademicFrontController@academicCalendar');
Route::get('/parentsGuideline', 'AcademicFrontController@parentsGuideline');
Route::get('/bookList', 'AcademicFrontController@bookList');
Route::get('/photoGallery', 'AcademicFrontController@photoGallery');
Route::get('/videoGallery', 'AcademicFrontController@videoGallery');


/*
 ===============================================================================
    Event all menu route
 ===============================================================================
 */

 Route::get('/yellow', 'EventFrontController@yellow');
 Route::get('/scout', 'EventFrontController@scout');
 Route::get('/girlsGuide', 'EventFrontController@girlsGuide');
 Route::get('/redCresent', 'EventFrontController@redCresent');
 Route::get('/display', 'EventFrontController@display');
 Route::get('/volunteer', 'EventFrontController@volunteer');
 Route::get('/annualMilad', 'EventFrontController@annualMilad');
 Route::get('/studentParlament', 'EventFrontController@studentParlament');
 Route::get('/sportsCompetition', 'EventFrontController@sportsCompetition');
 Route::get('/culturalProgram', 'EventFrontController@culturalProgram');

/*
 ===============================================================================
    Admission all menu route
 ===============================================================================
 */
 Route::get('/admissionNotice', 'AdmissionFrontController@admissionNotice');
 Route::get('/admissionGuideline', 'AdmissionFrontController@admissionGuideline');
 Route::get('/admissionResult', 'AdmissionFrontController@admissionResult');
 Route::get('/feesPayment', 'AdmissionFrontController@feesPayment');


/*
 ===============================================================================
    All Backend Controller below.......
    
    Admission Online apply
 ===============================================================================
 */

Route::get('/applyOnline', 'AdmissionBackendController@applyOnline');

/*
	TNO  Route
*/
Route::resource('tno', 'TnoController');
//Route::resource('tno/all', 'TnoController@index');
Route::resource('tno/emailcheck', 'TnoController@emailcheck');


/*
    email Available check
*/
Route::post('/EmailAvailable', 'EmailAvailableController@emailCheck');
Route::post('/mobileAvailable', 'EmailAvailableController@mobileCheck');

/*
    news route
*/

Route::get('/news/all', 'NewsController@index');
Route::get('/news/add', 'NewsController@add');
Route::post('/news/store', 'NewsController@store');
Route::get('/news/{id}/edit', 'NewsController@edit');
Route::post('/news/update/{id}', 'NewsController@update');
Route::get('/news/delete/{id}', 'NewsController@delete');

/*
    history route
*/
Route::group(['middleware' => 'auth', 'prefix' => 'history'], function(){
    Route::get('/all', 'HistoryController@index');
    Route::get('/add', 'HistoryController@add');
    Route::post('/store', 'HistoryController@store');
    Route::get('/{id}/edit', 'HistoryController@edit');
    Route::post('/update/{id}', 'HistoryController@update');
    Route::get('/delete/{id}', 'HistoryController@delete');
});



/*
    Founder route
*/

Route::group(['middleware' => 'auth', 'prefix' => 'founder'], function(){
    Route::get('/all', 'FounderController@index');
    Route::get('/add', 'FounderController@add');
    Route::post('/store', 'FounderController@store');
    Route::get('/{id}/edit', 'FounderController@edit');
    Route::post('/update/{id}', 'FounderController@update');
    Route::get('/delete/{id}', 'FounderController@delete');
});

/*
    School law route
*/
Route::group(['middleware' => 'auth', 'prefix' => 'schoollaw'], function(){
    Route::get('/all', 'SchoollawController@index');
    Route::get('/add', 'SchoollawController@add');
    Route::post('/store', 'SchoollawController@store');
    Route::get('/{id}/edit', 'SchoollawController@edit');
    Route::post('/update/{id}', 'SchoollawController@update');
    Route::get('/delete/{id}', 'SchoollawController@delete');
});

/*
    goal purpose law route
*/
Route::group(['middleware' => 'auth', 'prefix' => 'goalpurpose'], function(){
    Route::get('/all', 'GoalPurposeController@index');
    Route::get('/add', 'GoalPurposeController@add');
    Route::post('/store', 'GoalPurposeController@store');
    Route::get('/{id}/edit', 'GoalPurposeController@edit');
    Route::post('/update/{id}', 'GoalPurposeController@update');
    Route::get('/delete/{id}', 'GoalPurposeController@delete');
});

/*
    goal purpose law route
*/
Route::group(['middleware' => 'auth', 'prefix' => 'physical_infra'], function(){
    Route::get('/all', 'PhysicalInfrustructure@index');
    Route::get('/add', 'PhysicalInfrustructure@add');
    Route::post('/store', 'PhysicalInfrustructure@store');
    Route::get('/{id}/edit', 'PhysicalInfrustructure@edit');
    Route::post('/update/{id}', 'PhysicalInfrustructure@update');
    Route::get('/delete/{id}', 'PhysicalInfrustructure@delete');
});

