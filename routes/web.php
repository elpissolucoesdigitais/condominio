<?php

use App\Http\Controllers\Subscriptions\SubscriptionController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ACL\PermissionController;
use App\Http\Controllers\Admin\ACL\PermissionProfileController;
use App\Http\Controllers\Admin\ACL\ProfileController;
use App\Http\Controllers\Admin\ApartamentoController;
use App\Http\Controllers\Admin\ApartamentoHabitadoController;
use App\Http\Controllers\Admin\BlocoController;
use App\Http\Controllers\Admin\CompraController;
use App\Http\Controllers\Admin\CondominioController;
use App\Http\Controllers\Admin\ConsumoController;
use App\Http\Controllers\Admin\ControlePagamentoController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\FinanceiroController;
use App\Http\Controllers\Admin\FluxoCaixaController;
use App\Http\Controllers\Admin\FullCalendarController;
use App\Http\Controllers\Admin\FuncionarioController;
use App\Http\Controllers\Admin\ImpostoController;
use App\Http\Controllers\Admin\MoradorController;
use App\Http\Controllers\Admin\ProprietarioController;
use App\Http\Controllers\Admin\ReservaItemController;
use App\Http\Controllers\Admin\VagaController;
use App\Http\Controllers\Admin\VisitaController;
use App\Http\Controllers\Admin\VeiculoController;


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
Route::get('subscriptions/cancel',[SubscriptionController::class, 'cancel'])->name('subscriptions.cancel');
Route::get('subscriptions/resume',[SubscriptionController::class, 'resume'])->name('subscriptions.resume');
Route::get('subscriptions/invoice/{invoice}',[SubscriptionController::class, 'downloadInvoice'])->name('subscriptions.invoice.download');
Route::get('subscriptions/account',[SubscriptionController::class, 'account'])->name('subscriptions.account');
Route::post('subscriptions/store',[SubscriptionController::class, 'store'])->name('subscriptions.store')->middleware('check.choice');
Route::get('subscriptions/checkout',[SubscriptionController::class, 'index'])->name('subscriptions.checkout')->middleware('check.choice');
Route::get('subscriptions/premium',[SubscriptionController::class, 'premium'])->name('subscriptions.premium')->middleware('subscribed');
Route::get('assinar/{url}',[SiteController::class,'createSessionPlan'])->name('choice.plan');

Route::get('/', [SiteController::class, 'index'])->name('site.home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';





Route::middleware(['auth'])->group(function ()
{
//ROTAS RESOURCES

    Route::resource('blocos', BlocoController::class);
    Route::resource('financeiros', FinanceiroController::class);
    Route::resource('apartamentos', ApartamentoController::class);
    Route::resource('moradores', MoradorController::class);
    Route::resource('apartamentohabitado', ApartamentoHabitadoController::class);
    Route::resource('vagas', VagaController::class);
    Route::resource('funcionarios', FuncionarioController::class);
    Route::resource('visitas', VisitaController::class);
    Route::resource('veiculos', VeiculoController::class);
    Route::resource('proprietarios', ProprietarioController::class);
    Route::resource('condominios', CondominioController::class);
    Route::resource('impostos', ImpostoController::class);
    Route::resource('consumos', ConsumoController::class);
    Route::resource('fluxoCaixas', FluxoCaixaController::class);
    Route::resource('controlePagamentos', ControlePagamentoController::class);
    Route::resource('profiles', ProfileController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('compras', CompraController::class);
    Route::resource('reservaItems', ReservaItemController::class);

    Route::get('/eventos', [FullCalendarController::class,'index'])->name('index');
    Route::get('/load-events', [EventController::class,'loadEvents'])->name('routeLoadEvents');
    Route::put('/event-update', [EventController::class,'update'])->name('routeEventUpdate');
    Route::post('/event-store', [EventController::class,'store'])->name('routeEventStore');
    Route::delete('/event-destroy', [EventController::class,'destroy'])->name('routeEventDelete');

    /**
     * Permissão X Perfil
     */
    Route::get('profiles/{id}/permission/{idPermission}/detach',[PermissionProfileController::class,'detachPermissionsProfile'])->name('profiles.permissions.detach');

    Route::post('profiles/{id}/permissions',[PermissionProfileController::class,'attachPermissionsProfile'])->name('profiles.permissions.attach');

    Route::get('profiles/{id}/permissions/create',[PermissionProfileController::class,'permissionsAvailable'])->name('profiles.permissions.available');

    Route::get('profiles/{id}/permissions',[PermissionProfileController::class,'permissions'])->name('profile.permissions');

    Route::get('permissions/{id}/profiles',[PermissionProfileController::class,'profiles'])->name('permissions.profile');


    Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
});
