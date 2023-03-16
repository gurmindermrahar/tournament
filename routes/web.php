<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

Auth::routes();
#test routes
Route::get('/test2', 'TestController@index')->name('index');
Route::get('/test', 'TestController@test')->name('test');
Route::post('/payment', 'TestController@payment')->name('payment');

Route::get('login/{provider}', 'TestController@socialLiteLogin');
Route::get('login/{provider}/callback','TestController@Callback');

# ---------------------------------- Frontend Route Start ------------------------------------ #
Route::post('check/userexist','HomeController@checkUserexist')->name('checkUserexist');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/tournaments', 'HomeController@getTournaments')->name('getTournaments');
Route::get('/gametournaments/{game}', 'HomeController@getGameTournaments')->name('getGameTournaments');
Route::get('/cash-matches', 'HomeController@getCashMatches')->name('getCashMatches');
Route::get('/tournament/{id}', 'HomeController@getTournamentDetails')->name('getTournamentDetails');
Route::get('/cash-match/{id}', 'HomeController@getCashMatchesDetails')->name('getCashMatchesDetails');


Route::get('brackets/{tournamentid?}','HomeController@Brackets')->name('getBrackets');

Route::group(['middleware' => 'auth'], function(){

    # ------------------------ HomeController ------------------------ #

    Route::get('/user-profile', 'HomeController@userProfile')->name('userProfile');
    Route::get('/user-settings', 'HomeController@userSettings')->name('userSettings');
    Route::post('/changePassword', 'HomeController@userChangePassword')->name('userChangePassword');
    Route::post('/changeSetting', 'HomeController@userChangeSetting')->name('userChangeSetting');
    Route::post('/create-new-team', 'HomeController@CreateNewTeam')->name('CreateNewTeam');

    # ---------------------- End HomeController ---------------------- #

    # ------------------------ TournamentController ------------------------ #

    Route::get('/add-tournament', 'TournamentController@addTournament')->name('addTournament');
    Route::post('/add-tournament', 'TournamentController@addTournamentPost')->name('addTournamentPost');

    Route::get('/edit-tournament/{id}', 'TournamentController@editTournament')->name('editTournament');
    Route::post('/edit-tournament/{id}', 'TournamentController@addTournamentPost')->name('addTournamentEdit');

    Route::get('/tournament/rules/{id}', 'TournamentController@getTournamentRulesDetails')->name('getTournamentRulesDetails');
    Route::post('/joinTournament/{id}', 'TournamentController@joinTournament')->name('joinTournament');
    Route::get('/tournament-report-dashboard/{id}', 'TournamentController@reportDashboard')->name('reportDashboard');

    # ------------------------ End TournamentController ------------------------ #

    # ------------------------ OrganizationController ------------------------ #

    Route::get('/create-organization', 'OrganizationController@createOrg')->name('createOrg');
    Route::post('/create-organization-post', 'OrganizationController@createOrgPost')->name('createOrgPost');
    Route::post('/create-organization-contact-post', 'OrganizationController@createOrgContactPost')->name('createOrgContactPost');
    Route::get('organization-view', 'OrganizationController@geTorganizationView')->name('geTorganizationView');

    # ------------------------ End OrganizationController ------------------------ #

    # ------------------------ OrdersController ------------------------ #

    Route::post('/create-coin-order', 'OrdersController@createCoinOrder')->name('createCoinOrder');

    # ------------------------ End OrdersController ------------------------ #

    # ------------------------ ChatsController ------------------------ #

    Route::get('/chat-box', 'ChatsController@index')->name('chat-box');
    Route::get('friendlist', 'ChatsController@friendList');
    Route::get('messages', 'ChatsController@fetchMessages');
    Route::post('messages', 'ChatsController@sendMessage');

    # ------------------------ End ChatsController ------------------------ #

    # ------------------------ ReportController ------------------------ #

    Route::post('/updload-sreenshort', 'ReportController@updloadSreenshort')->name('updloadSreenshort');
    Route::post('/update-won-team', 'ReportController@updateWonTeam')->name('updateWonTeam');

    # ------------------------ End ReportController ------------------------ #

});

# ---------------------------------- Frontend Route End -------------------------------------- #
Route::post('/tournament_add', )









# ---------------------------------- Backend Route Start ------------------------------------- #

Route::get('admin/login', function () {
    return view('auth.admin.login');
})->name('admin.login');

Route::group(['prefix' => 'admin','as'=>'admin.', 'middleware' => 'admin'], function(){
    Route::get('/theme-mode/{mode}', 'Admin\HomeController@themeMode')->name('themeMode');

    Route::get('/', 'Admin\HomeController@index')->name('dashboard');
    Route::resource('users', 'Admin\UserController');
    Route::get('users-orglist/{id}', 'Admin\UserController@orgList')->name('users.orgList');
    Route::resource('teams', 'Admin\TeamController');
    Route::resource('gears', 'Admin\GearsController');
    Route::resource('players', 'Admin\PlayerController');
    Route::resource('tournaments','Admin\TournamentController');
    Route::resource('cashmatches','Admin\CashmatchController');
    Route::resource('stream','Admin\StreamController');
    Route::resource('result','Admin\ResultController');
    Route::resource('credits','Admin\CreditController');
});

# ---------------------------------- Backend Route End -------------------------------------- #

// Add Tournament Route
