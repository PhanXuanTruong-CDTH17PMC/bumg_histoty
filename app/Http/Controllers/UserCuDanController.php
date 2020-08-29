<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\CuDan;
use App\CanHo;
use App\QuanHe;
use Auth;
use DB;

class UserCuDanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $auth = Auth::guard('canho')->user();
         $cudan = CuDan::select([
            'cudan.id',
             'ho_ten_cd',
              'CMND', 
              'email',  
              'SDT', 
              'ng_sinh',
              'quanhe.ten_quan_he'
         ])
         ->join('canho', 'can_ho_id', '=', 'canho.id')
         ->join('quanhe','quan_he_id', '=', 'quanhe.id')
         ->where(['can_ho_id' => $auth->id])
         ->where(['chu_ho_id' => $auth->chu_ho_id])
         ->whereNull('cudan.deleted_at')
         ->orderby('quan_he_id')
         ->paginate(5);
      
        return view('user.user-cudan',compact('cudan','auth'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
