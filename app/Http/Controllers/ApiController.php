<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Pria;
use App\Models\Wanita;
use App\Models\TempatAcara;
use Illuminate\Http\Request;
use DB;


class ApiController extends Controller
{
    public function getDataAppliedCompany(Request $request)
    {
        
        $DataAppliedCompany['data'] = DB::table('applied')
        ->select('users.name', 'jobfair.id')
        ->join('jobfair', 'applied.id_jobfair', '=', 'jobfair.id')
        ->join('company', 'jobfair.id_company', '=', 'company.id')
        ->join('users', 'applied.id_user', '=', 'users.id')
        ->where('jobfair.id', $request->id)
        ->where('applied.status', 1)
        ->get();

        echo json_encode($DataAppliedCompany);
        exit;
    }

    public function getDataCompany(Request $request)
    {
        
        $DataCompany['data'] = DB::table('applied')
        ->select('company.nama_perusahaan', 'company.id as id_company', 'applied.id_user')
        ->join('jobfair', 'applied.id_jobfair', '=', 'jobfair.id')
        ->join('company', 'jobfair.id', '=', 'company.id')
        ->join('users', 'applied.id_user', '=', 'users.id')
        ->where('applied.id_user', $request->id)
        ->where('applied.status', 1)
        // ->groupBy('company.nama_perusahaan', 'company.id', 'applied.id_user')
        ->get();

        // $DataCompany['data'] = Company::where('id_company', $request->id)->get();
        echo json_encode($DataCompany);
        exit;
    }

    public function getDataJobfair(Request $request)
    {
        $AppliedDetail['data'] = DB::table('applied')
        ->select('company.nama_perusahaan', 'jobfair.position')
        ->join('jobfair', 'applied.id_jobfair', '=', 'jobfair.id')
        ->join('company', 'jobfair.id_company', '=', 'company.id')
        ->join('users', 'applied.id_user', '=', 'users.id')
        ->where('applied.status', 1)
        ->where('applied.id_user', $request->id_user)
        ->where('company.id',  $request->id_company)
        ->get();

        echo json_encode($AppliedDetail);
        exit;
    }

    public function getDataPria(Request $request)
    {
        $DataPria['data'] = Pria::where('id', $request->id)->first();
        echo json_encode($DataPria);
        exit;
        
        // $DataEmployee = Employee::where([
        //     ['id', '=', $request->id]
        //     ])->get();

        // foreach ($DataEmployee as $v) {
        //     $datainsm = $v->gaji;
        // }
        // return response()->json([
        //     'DataEmployee' => $DataEmployee
        // ]);
    }

    public function getDataWanita(Request $request)
    {
        $DataWanita['data'] = Wanita::where('id', $request->id)->first();
        echo json_encode($DataWanita);
        exit;
    }

    public function getDataTempatAcara(Request $request)
    {
        $DataTempatAcara['data'] = TempatAcara::where('id', $request->id)->first();
        echo json_encode($DataTempatAcara);
        exit;
    }
}
