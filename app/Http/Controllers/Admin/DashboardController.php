<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartamento;
use App\Models\Consumo;
use App\Models\FluxoCaixa;
use App\Models\Funcionario;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $repositoryUser;
    protected $repositoryFluxoCaixa;
    protected $repositoryConsumo;
    protected $repositoryFuncionario;
    protected $repositoryApartamento;
    public function __construct(User $user, FluxoCaixa $fluxoCaixa, Consumo $consumo, Funcionario $funcionario, Apartamento $apartamento)
    {
        $this->repositoryUser = $user;
        $this->repositoryConsumo = $consumo;
        $this->repositoryFluxoCaixa = $fluxoCaixa;
        $this->repositoryFuncionario = $funcionario;
        $this->repositoryApartamento = $apartamento;
    }

    public function dashboard()
    {
        $users = $this->repositoryUser->count();
        $apartamentos = $this->repositoryApartamento->count();
        $consumos = $this->repositoryConsumo->count();
        $apartamentos = $this->repositoryApartamento->count();


        //numeros de usuarios por mês

        $usersMes = User::select(DB::raw("count(*) as count"))
                    ->whereYear('created_at',date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('count');
        $months = User::select(DB::raw("month(created_at) as month"))
                    ->whereYear('created_at',date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('month');
        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($months as $index=>$month)
        {
            $datas[$month] = $usersMes[$index];

        }
        //dd($datas);







        return view('dashboard',compact('users','apartamentos','consumos','apartamentos','datas'));



    }
}
