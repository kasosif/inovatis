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

Route::get('/', 'PagesController@home')->name('home');
Route::get('a-propos-de-inovatis', 'PagesController@about')->name('about');
Route::get('bts', 'PagesController@bts')->name('bts');
Route::get('btp', 'PagesController@btp')->name('btp');
Route::get('cap', 'PagesController@cap')->name('cap');
Route::get('formation-continue', 'PagesController@freeTraining')->name('free-training');
Route::get('etudiant-international', 'PagesController@internationalStudent')->name('international-student');
Route::get('documents-requis', 'PagesController@requiredDocuments')->name('required-documents');
Route::get('faq', 'PagesController@faq')->name('faq');
Route::get('pre-inscription-en-ligne', 'PagesController@preregistration')->name('preregistration');

Route::get('preinscription', 'PagesController@preinscription')->name('preinscription');
Route::post('preinscription/save', 'PagesController@newdemande')->name('newdemande');
Route::get('preinscription/reprendre', 'PagesController@reprenderpreinscription')->name('reprendrepreinscription');
Route::post('preinscription/reprendre', 'PagesController@reprenderpreinscription')->name('reprendrepreinscription');

Route::post('contact', 'PagesController@contact')->name('contact');
Route::get('ajax/formationsbytype/{type?}', 'PagesController@formationsbytype')->name('ajax.formationsbytype');
Route::get('ajax/specialitesbyformation/{formation_id?}', 'PagesController@specialitesbyformation')->name('ajax.specialitesbyformation');

Auth::routes(['register'=> false]);

Route::group(['middleware' => 'auth','prefix' =>'admin'], function() {

    //dashboard
    Route::get('/', 'Backoffice\DashController@index')->name('backoffice.index');

    //demandes
    Route::get('/demandes', 'Backoffice\DemandeController@index')->name('backoffice.demande.index');
    Route::put('/demandes/accept/{id?}', 'Backoffice\DemandeController@accept')->name('backoffice.demande.accept');
    Route::put('/demandes/deny/{id?}', 'Backoffice\DemandeController@deny')->name('backoffice.demande.deny');
    Route::get('/demandes/ajout', 'Backoffice\DemandeController@create')->name('backoffice.demande.ajout');
    Route::post('/demandes/store', 'Backoffice\DemandeController@store')->name('backoffice.demande.store');
    Route::get('/demandes/edit/{id}', 'Backoffice\DemandeController@edit')->name('backoffice.demande.edit');
    Route::get('/demandes/show/{id?}', 'Backoffice\DemandeController@show')->name('backoffice.demande.show');
    Route::put('/demandes/update/{id}', 'Backoffice\DemandeController@update')->name('backoffice.demande.update');
    Route::delete('/demandes/destroy/{id?}', 'Backoffice\DemandeController@destroy')->name('backoffice.demande.destroy');

    //contact
    Route::get('/contacts', 'Backoffice\ContactController@index')->name('backoffice.contact.index');
    Route::get('/contacts/show/{id?}', 'Backoffice\ContactController@show')->name('backoffice.contact.show');
    Route::delete('/contacts/destroy/{id?}', 'Backoffice\ContactController@destroy')->name('backoffice.contact.destroy');

    //sessions
    Route::get('/sessions', 'Backoffice\SessionController@index')->name('backoffice.session.index');
    Route::get('/sessions/ajout', 'Backoffice\SessionController@create')->name('backoffice.session.ajout');
    Route::post('/sessions/store', 'Backoffice\SessionController@store')->name('backoffice.session.store');
    Route::get('/sessions/edit/{id}', 'Backoffice\SessionController@edit')->name('backoffice.session.edit');
    Route::put('/sessions/update/{id}', 'Backoffice\SessionController@update')->name('backoffice.session.update');
    Route::delete('/sessions/destroy/{id?}', 'Backoffice\SessionController@destroy')->name('backoffice.session.destroy');

    //formations
    Route::get('/formations', 'Backoffice\FormationController@index')->name('backoffice.formation.index');
    Route::get('/formations/ajout', 'Backoffice\FormationController@create')->name('backoffice.formation.ajout');
    Route::post('/formations/store', 'Backoffice\FormationController@store')->name('backoffice.formation.store');
    Route::get('/formations/show/{id}', 'Backoffice\FormationController@show')->name('backoffice.formation.show');
    Route::get('/formations/edit/{id}', 'Backoffice\FormationController@edit')->name('backoffice.formation.edit');
    Route::put('/formations/update/{id}', 'Backoffice\FormationController@update')->name('backoffice.formation.update');
    Route::delete('/formations/destroy/{id?}', 'Backoffice\FormationController@destroy')->name('backoffice.formation.destroy');

});
