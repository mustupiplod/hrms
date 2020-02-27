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
    return view('dashboard');
});
//Department routes Starts
Route::get('/admin/department/', 'Admin\DepartmentController@index')->name('admin.department.index');
Route::get('/admin/department/create', 'Admin\DepartmentController@create')->name('admin.department.create');
Route::post('/admin/department/store', 'Admin\DepartmentController@store')->name('admin.department.store');
Route::post('/admin/department/update/{id}', 'Admin\DepartmentController@update')->name('admin.department.update');
Route::get('/admin/department/edit/{id}', 'Admin\DepartmentController@edit')->name('admin.department.edit');
Route::get('/admin/department/delete/{id}', 'Admin\DepartmentController@delete')->name('admin.department.delete');
//Department routes ends

// Parent Department routes start
Route::get('/admin/parentdepartment/', 'Admin\ParentDepartmentController@index')->name('admin.parentdepartment.index');
Route::get('/admin/parentdepartment/create', 'Admin\ParentDepartmentController@create')->name('admin.parentdepartment.create');
Route::post('/admin/parentdepartment/store', 'Admin\ParentDepartmentController@store')->name('admin.parentdepartment.store');
Route::post('/admin/parentdepartment/update/{id}', 'Admin\ParentDepartmentController@update')->name('admin.parentdepartment.update');
Route::get('/admin/parentdepartment/edit/{id}', 'Admin\ParentDepartmentController@edit')->name('admin.parentdepartment.edit');
Route::get('/admin/parentdepartment/delete/{id}', 'Admin\ParentDepartmentController@delete')->name('admin.parentdepartment.delete');
// Parent Department routes end

//Designations routes start
Route::get('/admin/designation/', 'Admin\DesignationController@index')->name('admin.designation.index');
Route::get('/admin/designation/create', 'Admin\DesignationController@create')->name('admin.designation.create');
Route::post('/admin/designation/store', 'Admin\DesignationController@store')->name('admin.designation.store');
Route::post('/admin/designation/update/{id}', 'Admin\DesignationController@update')->name('admin.designation.update');
Route::get('/admin/designation/edit/{id}', 'Admin\DesignationController@edit')->name('admin.designation.edit');
Route::get('/admin/designation/delete/{id}', 'Admin\DesignationController@delete')->name('admin.designation.delete');
//Designations routes end

//Shifts route starts
Route::get('/admin/shift/', 'Admin\ShiftController@index')->name('admin.shift.index');
Route::get('/admin/shift/create', 'Admin\ShiftController@create')->name('admin.shift.create');
Route::post('/admin/shift/store', 'Admin\ShiftController@store')->name('admin.shift.store');
Route::post('/admin/shift/update/{id}', 'Admin\ShiftController@update')->name('admin.shift.update');
Route::get('/admin/shift/edit/{id}', 'Admin\ShiftController@edit')->name('admin.shift.edit');
Route::get('/admin/shift/delete/{id}', 'Admin\ShiftController@delete')->name('admin.shift.delete');
//Shifts routes ends

//Degree route starts
Route::get('/admin/degree/', 'Admin\DegreeController@index')->name('admin.degree.index');
Route::get('/admin/degree/create', 'Admin\DegreeController@create')->name('admin.degree.create');
Route::post('/admin/degree/store', 'Admin\DegreeController@store')->name('admin.degree.store');
Route::post('/admin/degree/update/{id}', 'Admin\DegreeController@update')->name('admin.degree.update');
Route::get('/admin/degree/edit/{id}', 'Admin\DegreeController@edit')->name('admin.degree.edit');
Route::get('/admin/degree/delete/{id}', 'Admin\DegreeController@delete')->name('admin.degree.delete');
//Degree routes ends

//Currency Master route starts
Route::get('/admin/currency/', 'Admin\CurrencyController@index')->name('admin.currency.index');
Route::get('/admin/currency/create', 'Admin\CurrencyController@create')->name('admin.currency.create');
Route::post('/admin/currency/store', 'Admin\CurrencyController@store')->name('admin.currency.store');
Route::post('/admin/currency/update/{id}', 'Admin\CurrencyController@update')->name('admin.currency.update');
Route::get('/admin/currency/edit/{id}', 'Admin\CurrencyController@edit')->name('admin.currency.edit');
Route::get('/admin/currency/delete/{id}', 'Admin\CurrencyController@delete')->name('admin.currency.delete');
//Currency Master routes ends

//Education route starts
Route::get('/admin/education/', 'Admin\EducationMasterController@index')->name('admin.education.index');
Route::get('/admin/education/create', 'Admin\EducationMasterController@create')->name('admin.education.create');
Route::post('/admin/education/store', 'Admin\EducationMasterController@store')->name('admin.education.store');
Route::post('/admin/education/update/{id}', 'Admin\EducationMasterController@update')->name('admin.education.update');
Route::get('/admin/education/edit/{id}', 'Admin\EducationMasterController@edit')->name('admin.education.edit');
Route::get('/admin/education/delete/{id}', 'Admin\EducationMasterController@delete')->name('admin.education.delete');
//Education routes ends

//Increament Master route starts
Route::get('/admin/increament/', 'Admin\IncreamentMasterController@index')->name('admin.increament.index');
Route::get('/admin/increament/create', 'Admin\IncreamentMasterController@create')->name('admin.increament.create');
Route::post('/admin/increament/store', 'Admin\IncreamentMasterController@store')->name('admin.increament.store');
Route::post('/admin/increament/update/{id}', 'Admin\IncreamentMasterController@update')->name('admin.increament.update');
Route::get('/admin/increament/edit/{id}', 'Admin\IncreamentMasterController@edit')->name('admin.increament.edit');
Route::get('/admin/increament/delete/{id}', 'Admin\IncreamentMasterController@delete')->name('admin.increament.delete');
//Increament Master routes ends

//Employee-Increament Master route starts
Route::get('/admin/empincreament/', 'Admin\EmpIncreamentController@index')->name('admin.empincreament.index');
Route::get('/admin/empincreament/create', 'Admin\EmpIncreamentController@create')->name('admin.empincreament.create');
Route::post('/admin/empincreament/store', 'Admin\EmpIncreamentController@store')->name('admin.empincreament.store');
Route::post('/admin/empincreament/update/{id}', 'Admin\EmpIncreamentController@update')->name('admin.empincreament.update');
Route::get('/admin/empincreament/edit/{id}', 'Admin\EmpIncreamentController@edit')->name('admin.empincreament.edit');
Route::get('/admin/empincreament/delete/{id}', 'Admin\EmpIncreamentController@delete')->name('admin.empincreament.delete');
//Employee-Increament Master routes ends

//Scale Management route starts
Route::get('/admin/scale/', 'Admin\ScaleController@index')->name('admin.scale.index');
Route::get('/admin/scale/create', 'Admin\ScaleController@create')->name('admin.scale.create');
Route::post('/admin/scale/store', 'Admin\ScaleController@store')->name('admin.scale.store');
Route::post('/admin/scale/update/{id}', 'Admin\ScaleController@update')->name('admin.scale.update');
Route::get('/admin/scale/edit/{id}', 'Admin\ScaleController@edit')->name('admin.scale.edit');
Route::get('/admin/scale/delete/{id}', 'Admin\ScaleController@delete')->name('admin.scale.delete');
//Scale Management routes ends

//StatusMaster route starts
Route::get('/admin/status/', 'Admin\StatusMasterController@index')->name('admin.status.index');
Route::get('/admin/status/create', 'Admin\StatusMasterController@create')->name('admin.status.create');
Route::post('/admin/status/store', 'Admin\StatusMasterController@store')->name('admin.status.store');
Route::post('/admin/status/update/{id}', 'Admin\StatusMasterController@update')->name('admin.status.update');
Route::get('/admin/status/edit/{id}', 'Admin\StatusMasterController@edit')->name('admin.status.edit');
Route::get('/admin/status/delete/{id}', 'Admin\StatusMasterController@delete')->name('admin.status.delete');
//StatusMaster routes ends

//Emplpoyee routes starts
Route::get('/admin/employee/', 'Admin\EmployeeController@index')->name('admin.employee.index');
Route::get('/admin/employee/create', 'Admin\EmployeeController@create')->name('admin.employee.create');
Route::post('/admin/employee/store', 'Admin\EmployeeController@store')->name('admin.employee.store');
Route::get('/admin/employee/show/{id}','Admin\EmployeeController@show')->name('admin.employee.show');
Route::post('/admin/employee/update/{id}', 'Admin\EmployeeController@update')->name('admin.employee.update');
Route::get('/admin/employee/edit/{id}', 'Admin\EmployeeController@edit')->name('admin.employee.edit');
Route::get('/admin/employee/delete/{id}', 'Admin\EmployeeController@delete')->name('admin.employee.delete');
//Employee routes ends

//StatusMaster route starts
Route::get('/admin/maritalstatus/', 'Admin\MaritalStatusController@index')->name('admin.maritalstatus.index');
Route::get('/admin/maritalstatus/create', 'Admin\MaritalStatusController@create')->name('admin.maritalstatus.create');
Route::post('/admin/maritalstatus/store', 'Admin\MaritalStatusController@store')->name('admin.maritalstatus.store');
Route::post('/admin/maritalstatus/update/{id}', 'Admin\MaritalStatusController@update')->name('admin.maritalstatus.update');
Route::get('/admin/maritalstatus/edit/{id}', 'Admin\MaritalStatusController@edit')->name('admin.maritalstatus.edit');
Route::get('/admin/maritalstatus/delete/{id}', 'Admin\MaritalStatusController@delete')->name('admin.maritalstatus.delete');
//StatusMaster routes ends

//// Course Management routes Start
//Route::get('/admin/course/', 'Admin\CourseController@index')->name('admin.course.index');
//Route::get('/admin/course/create', 'Admin\CourseController@create')->name('admin.course.create');
//Route::post('/admin/course/store', 'Admin\CourseController@store')->name('admin.course.store');
//Route::post('/admin/course/update/{id}', 'Admin\CourseController@update')->name('admin.course.update');
//Route::get('/admin/course/edit/{id}', 'Admin\CourseController@edit')->name('admin.course.edit');
//Route::get('/admin/course/delete/{id}', 'Admin\CourseController@delete')->name('admin.course.delete');
////Course management routes ends

//Team routes start
Route::get('/admin/team/', 'Admin\TeamController@index')->name('admin.team.index');
Route::get('/admin/team/create', 'Admin\TeamController@create')->name('admin.team.create');
Route::post('/admin/team/store', 'Admin\TeamController@store')->name('admin.team.store');
Route::post('/admin/team/update/{id}', 'Admin\TeamController@update')->name('admin.team.update');
Route::get('/admin/team/edit/{id}', 'Admin\TeamController@edit')->name('admin.team.edit');
Route::get('/admin/team/delete/{id}', 'Admin\TeamController@delete')->name('admin.team.delete');
//team routes ends

//Events Route starts
Route::get('/events/', 'EventController@index')->name('events.index');
Route::get('/events/add', 'EventController@create')->name('events.add');
Route::post('/events/store', 'EventController@store')->name('events.store');

//Events Routes End

//Exit Details routes start
Route::get('/admin/exitdetails/', 'Admin\ExitDetailsController@index')->name('admin.exitdetails.index');
Route::get('/admin/exitdetails/create', 'Admin\ExitDetailsController@create')->name('admin.exitdetails.create');
Route::post('/admin/exitdetails/store', 'Admin\ExitDetailsController@store')->name('admin.exitdetails.store');
Route::post('/admin/exitdetails/update/{id}', 'Admin\ExitDetailsController@update')->name('admin.exitdetails.update');
Route::get('/admin/exitdetails/edit/{id}', 'Admin\ExitDetailsController@edit')->name('admin.exitdetails.edit');
Route::get('/admin/exitdetails/delete/{id}', 'Admin\ExitDetailsController@delete')->name('admin.exitdetails.delete');
//Exit details routes ends

