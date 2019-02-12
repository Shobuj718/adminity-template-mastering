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
/*
Route::get('/', function () {
    return view('welcome');
});*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'FrontController@index');
Route::get('/charcount', 'FrontController@charcount');
Route::get('/inputcharcount', 'FrontController@inputcharcount');


Route::get('/contact', 'ContactController@contact');
Route::post('/contact/store', 'ContactController@store');

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
Route::get('/assets', 'AtaglanceController@assets');

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
    Information all menu route
 ===============================================================================
 */

 Route::get('/studentsummary', 'InformationFrontController@studentsummary');
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
 Route::get('/onlineApply', 'AdmissionFrontController@onlineApply');
 Route::post('/admission/store', 'AdmissionFrontController@admission');
 Route::get('/admitCard', 'AdmissionFrontController@admitCardSearch');
 Route::post('/admitCardDownload', 'AdmissionFrontController@admitCardDownload');


Route::get('/generate-pdf','AdmissionFrontController@generatePDF');

/*
 ===============================================================================
    All Backend Controller below.......
    
    Admission Online apply
 ===============================================================================
 */

/*Route::get('/applyOnline', 'AdmissionBackendController@applyOnline');
Route::get('/showDetails', 'AdmissionBackendController@showDetails');
Route::get('/admissionRegister', 'AdmissionBackendController@admissionRegister');*/

/*
	TNO  Route
*/
Route::resource('tno', 'TnoController');
//Route::resource('tno/all', 'TnoController@index');
Route::resource('tno/emailcheck', 'TnoController@emailcheck');



/*
   School Assets route
*/
Route::group(['middleware' => 'auth', 'prefix' => 'assets'], function(){
    Route::get('/all', 'AssetsController@index');
    Route::get('/add', 'AssetsController@add');
    Route::post('/store', 'AssetsController@store');
    Route::get('/{id}/edit', 'AssetsController@edit');
    Route::post('/update/{id}', 'AssetsController@update');
    Route::get('/delete/{id}', 'AssetsController@delete');
});


/*
 ===============================================================================
    Category route
 ===============================================================================
 */
Route::group(['middleware' => 'auth', 'prefix' => 'category'], function(){
    Route::get('/all', 'CategoryController@index');
    Route::get('/add', 'CategoryController@add');
    Route::post('/store', 'CategoryController@store');
    Route::get('/{id}/edit', 'CategoryController@edit');
    Route::post('/update/{id}', 'CategoryController@update');
    Route::get('/delete/{id}', 'CategoryController@delete');
});
/*
 ===============================================================================
   Sub Category route
 ===============================================================================
 */
Route::group(['middleware' => 'auth', 'prefix' => 'subcategory'], function(){
    Route::get('/all', 'SubCategoryController@index');
    Route::get('/add', 'SubCategoryController@add');
    Route::post('/store', 'SubCategoryController@store');
    Route::get('/{id}/edit', 'SubCategoryController@edit');
    Route::post('/update/{id}', 'SubCategoryController@update');
    Route::get('/delete/{id}', 'SubCategoryController@delete');
});
/*
 ===============================================================================
   Sub Category route
 ===============================================================================
 */
Route::group(['middleware' => 'auth', 'prefix' => 'importanlink'], function(){
    Route::get('/all', 'ImportantLinkController@index');
    Route::get('/add', 'ImportantLinkController@add');
    Route::post('/store', 'ImportantLinkController@store');
    Route::get('/{id}/edit', 'ImportantLinkController@edit');
    Route::post('/update/{id}', 'ImportantLinkController@update');
    Route::get('/delete/{id}', 'ImportantLinkController@delete');
});



/*
    President route
*/

Route::group(['middleware' => 'auth', 'prefix' => 'president'], function(){
    Route::get('/all', 'PresidentController@index');
    Route::get('/add', 'PresidentController@add');
    Route::get('/show/{id}', 'PresidentController@show');
    Route::post('/store', 'PresidentController@store');
    Route::get('/{id}/edit', 'PresidentController@edit');
    Route::post('/update/{id}', 'PresidentController@update');
    Route::get('/delete/{id}', 'PresidentController@delete');
});

/*
    principal route
*/

Route::group(['middleware' => 'auth', 'prefix' => 'principal'], function(){
    Route::get('/all', 'PrincipalController@index');
    Route::get('/add', 'PrincipalController@add');
    Route::post('/store', 'PrincipalController@store');
    Route::get('/{id}/edit', 'PrincipalController@edit');
    Route::post('/update/{id}', 'PrincipalController@update');
    Route::get('/delete/{id}', 'PrincipalController@delete');
});
/*
    Vice principal route
*/

Route::group(['middleware' => 'auth', 'prefix' => 'vicePrincipal'], function(){
    Route::get('/all', 'VicePrincipalController@index');
    Route::get('/add', 'VicePrincipalController@add');
    Route::post('/store', 'VicePrincipalController@store');
    Route::get('/{id}/edit', 'VicePrincipalController@edit');
    Route::post('/update/{id}', 'VicePrincipalController@update');
    Route::get('/delete/{id}', 'VicePrincipalController@delete');
});
/*
    slider route
*/

Route::group(['middleware' => 'auth', 'prefix' => 'slider'], function(){
    Route::get('/all', 'SliderController@index');
    Route::get('/add', 'SliderController@add');
    Route::post('/store', 'SliderController@store');
    Route::get('/{id}/edit', 'SliderController@edit');
    Route::post('/update/{id}', 'SliderController@update');
    Route::get('/delete/{id}', 'SliderController@delete');
});

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
    Route::get('/show/{id}', 'HistoryController@show');
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
    physical_infra route
*/
Route::group(['middleware' => 'auth', 'prefix' => 'physical_infra'], function(){
    Route::get('/all', 'PhysicalInfrustructure@index');
    Route::get('/add', 'PhysicalInfrustructure@add');
    Route::post('/store', 'PhysicalInfrustructure@store');
    Route::get('/{id}/edit', 'PhysicalInfrustructure@edit');
    Route::post('/update/{id}', 'PhysicalInfrustructure@update');
    Route::get('/delete/{id}', 'PhysicalInfrustructure@delete');
});
/*
    information menu route
*/
Route::group(['middleware' => 'auth', 'prefix' => 'studentsummary'], function(){
    Route::get('/all', 'StudentsummaryController@index');
    
});

/*
    vacancy route
*/
Route::group(['middleware' => 'auth', 'prefix' => 'vacancy'], function(){
    Route::get('/all', 'VacancyController@index');
    Route::get('/add', 'VacancyController@add');
    Route::post('/store', 'VacancyController@store');
    Route::get('/{id}/edit', 'VacancyController@edit');
    Route::post('/update/{id}', 'VacancyController@update');
    Route::get('/delete/{id}', 'VacancyController@delete');
});

/*
    holiday route
*/
Route::group(['middleware' => 'auth', 'prefix' => 'holiday'], function(){
    Route::get('/all', 'HolidayListController@index');
    Route::get('/add', 'HolidayListController@add');
    Route::post('/store', 'HolidayListController@store');
    Route::get('/{id}/edit', 'HolidayListController@edit');
    Route::post('/update/{id}', 'HolidayListController@update');
    Route::get('/delete/{id}', 'HolidayListController@delete');
});

/*
    facility route
*/
Route::group(['middleware' => 'auth', 'prefix' => 'facility'], function(){
    Route::get('/all', 'FacilityController@index');
    Route::get('/add', 'FacilityController@add');
    Route::post('/store', 'FacilityController@store');
    Route::get('/{id}/edit', 'FacilityController@edit');
    Route::post('/update/{id}', 'FacilityController@update');
    Route::get('/delete/{id}', 'FacilityController@delete');
});


/*
    parentsGuideline route
*/
Route::group(['middleware' => 'auth', 'prefix' => 'parentsGuideline'], function(){
    Route::get('/all', 'ParentsGuidelineController@index');
    Route::get('/add', 'ParentsGuidelineController@add');
    Route::post('/store', 'ParentsGuidelineController@store');
    Route::get('/{id}/edit', 'ParentsGuidelineController@edit');
    Route::post('/update/{id}', 'ParentsGuidelineController@update');
    Route::get('/delete/{id}', 'ParentsGuidelineController@delete');
});

/*
    Event route
*/
Route::group(['middleware' => 'auth', 'prefix' => 'event'], function(){
    Route::get('/all', 'EventController@index');
    Route::get('/add', 'EventController@add');
    Route::post('/store', 'EventController@store');
    Route::get('/{id}/edit', 'EventController@edit');
    Route::post('/update/{id}', 'EventController@update');
    Route::get('/delete/{id}', 'EventController@delete');
});

/*
    Event route
*/
Route::group(['middleware' => 'auth', 'prefix' => 'eventInfo'], function(){
    Route::get('/all', 'EventInfoController@index');
    Route::get('/add', 'EventInfoController@add');
    Route::post('/store', 'EventInfoController@store');
    Route::get('/{id}/edit', 'EventInfoController@edit');
    Route::post('/update/{id}', 'EventInfoController@update');
    Route::get('/delete/{id}', 'EventInfoController@delete');
});


/*
    Event route
*/
Route::group(['middleware' => 'auth', 'prefix' => 'volunteer'], function(){
    Route::get('/all', 'VolunteerController@index');
    Route::get('/add', 'VolunteerController@add');
    Route::post('/store', 'VolunteerController@store');
    Route::get('/{id}/edit', 'VolunteerController@edit');
    Route::post('/update/{id}', 'VolunteerController@update');
    Route::get('/delete/{id}', 'VolunteerController@delete');
});



/*
   Admission management route
*/
Route::group(['middleware' => 'auth', 'prefix' => 'admission'], function(){
    Route::get('/all', 'AdmissionBackendController@admissionManagement');
    Route::get('/show/{id}', 'AdmissionBackendController@show');
    Route::get('/{id}/edit', 'AdmissionBackendController@edit');
    Route::get('/update/{id}/{status}', 'AdmissionBackendController@update');
    Route::get('/delete/{id}', 'AdmissionBackendController@delete');
    
});