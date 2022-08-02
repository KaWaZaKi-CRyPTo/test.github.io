<?php

use App\Http\Controllers\Admin\AuditLogController;
use App\Http\Controllers\Admin\BusController;
use App\Http\Controllers\Admin\BusParkController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\ContactCompanyController;
use App\Http\Controllers\Admin\ContactContactController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\EntryTicketController;
use App\Http\Controllers\Admin\ExitTicketController;
use App\Http\Controllers\Admin\FourniseurController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\OilController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProdouitController;
use App\Http\Controllers\Admin\ProvenanceController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\RouteController;
use App\Http\Controllers\Admin\StockWarehouseController;
use App\Http\Controllers\Admin\UserAlertController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\VidangeControleController;
use App\Http\Controllers\Auth\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/login');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Permissions
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Roles
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Users
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Audit Logs
    Route::resource('audit-logs', AuditLogController::class, ['except' => ['store', 'update', 'destroy', 'create', 'edit']]);

    // Prodouit
    Route::resource('prodouits', ProdouitController::class, ['except' => ['store', 'update', 'destroy']]);

    // Fourniseur
    Route::resource('fourniseurs', FourniseurController::class, ['except' => ['store', 'update', 'destroy']]);

    // Bus
    Route::resource('buses', BusController::class, ['except' => ['store', 'update', 'destroy']]);

    // Oil
    Route::resource('oils', OilController::class, ['except' => ['store', 'update', 'destroy']]);

    // Provenance
    Route::resource('provenances', ProvenanceController::class, ['except' => ['store', 'update', 'destroy']]);

    // Routes
    Route::resource('routes', RouteController::class, ['except' => ['store', 'update', 'destroy']]);

    // Vidange Controle
    Route::resource('vidange-controles', VidangeControleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Entry Ticket
    Route::resource('entry-tickets', EntryTicketController::class, ['except' => ['store', 'update', 'destroy']]);

    // Exit Ticket
    Route::resource('exit-tickets', ExitTicketController::class, ['except' => ['store', 'update', 'destroy']]);

    // Inventory
    Route::resource('inventories', InventoryController::class, ['except' => ['store', 'update', 'destroy']]);

    // Country
    Route::resource('countries', CountryController::class, ['except' => ['store', 'update', 'destroy']]);

    // City
    Route::resource('cities', CityController::class, ['except' => ['store', 'update', 'destroy']]);

    // Stock Warehouse
    Route::resource('stock-warehouses', StockWarehouseController::class, ['except' => ['store', 'update', 'destroy']]);

    // Contact Company
    Route::resource('contact-companies', ContactCompanyController::class, ['except' => ['store', 'update', 'destroy']]);

    // Contact Contacts
    Route::resource('contact-contacts', ContactContactController::class, ['except' => ['store', 'update', 'destroy']]);

    // Bus Park
    Route::resource('bus-parks', BusParkController::class, ['except' => ['store', 'update', 'destroy']]);

    // User Alert
    Route::get('user-alerts/seen', [UserAlertController::class, 'seen'])->name('user-alerts.seen');
    Route::resource('user-alerts', UserAlertController::class, ['except' => ['store', 'update', 'destroy']]);

    // Messages
    Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
    Route::post('messages', [MessageController::class, 'store'])->name('messages.store');
    Route::get('messages/inbox', [MessageController::class, 'inbox'])->name('messages.inbox');
    Route::get('messages/outbox', [MessageController::class, 'outbox'])->name('messages.outbox');
    Route::get('messages/create', [MessageController::class, 'create'])->name('messages.create');
    Route::get('messages/{conversation}', [MessageController::class, 'show'])->name('messages.show');
    Route::post('messages/{conversation}', [MessageController::class, 'update'])->name('messages.update');
    Route::post('messages/{conversation}/destroy', [MessageController::class, 'destroy'])->name('messages.destroy');
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    if (file_exists(app_path('Http/Controllers/Auth/UserProfileController.php'))) {
        Route::get('/', [UserProfileController::class, 'show'])->name('show');
    }
});
