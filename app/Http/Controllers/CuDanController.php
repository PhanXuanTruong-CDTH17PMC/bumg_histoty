<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\CuDan;
use App\CanHo;
use App\QuanHe;
use DB;
class CuDanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canho = CanHo::all();
        // $cudan= DB::select('SELECT cudan.id as cu_dan_id, ho_ten_cd, CMND, email, SDT, ng_sinh, can_ho_id, quanhe.ten_quan_he as quanhe FROM cudan, quanhe where   cudan.quan_he_id=quanhe.id and cudan.deleted_at IS NULL ');
        $cudan = CuDan::select([
            'cudan.id',
             'ho_ten_cd',
              'CMND', 
              'email',  
              'SDT', 
              'ng_sinh',
              'canho.name',
              'quanhe.ten_quan_he'
         ])
         ->join('canho', 'can_ho_id', '=', 'canho.id')
         ->join('quanhe','quan_he_id', '=', 'quanhe.id')
         ->whereNull('cudan.deleted_at')
         ->paginate(5);
         
        return view('cu-dan.danh-sach-cu-dan', compact('cudan', 'canho'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $canho=CanHo::all();
        $quanhe=QuanHe::all();
        return view('cu-dan.them-moi-cu-dan',compact('canho','quanhe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

        'ten_cu_dan'=>'required',
        'cmnd'=>'required',
        'SDT'=>'required',
        'email'=>'required',
        'ngaysinh'=>'required',
        'can_ho'=>'required',
        'quanhe'=>'required',
         
        ]);
        $cudan = new CuDan;
        $cudan->ho_ten_cd =$request ->input('ten_cu_dan');
        $cudan->CMND =$request ->input('cmnd');
        $cudan->email =$request ->input('email');
        $cudan->SDT =$request ->input('SDT');
        $cudan->ng_sinh =$request ->input('ngaysinh');
        $cudan->can_ho_id =$request ->input('can_ho');
        $cudan->quan_he_id =$request ->input('quanhe');
        $cudan->save();

        return redirect('cu-dan')->with('success','Save success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function show(Request $request)
    {
        $canho=CanHo::all();
     
        $ch = $request->input('canho_search'); 
        if(!empty($ch)) {
            $cudan = CuDan::select([
                'cudan.id',
                 'ho_ten_cd',
                  'CMND', 
                  'email',  
                  'SDT', 
                  'ng_sinh',
                  'canho.name',
                  'quanhe.ten_quan_he'
             ])
             ->join('canho', 'can_ho_id', '=', 'canho.id')
             ->join('quanhe','quan_he_id', '=', 'quanhe.id')
             ->where(['can_ho_id' => $ch])
             ->whereNull('cudan.deleted_at')
             ->paginate(5);
        }   
        else {
            $cudan = CuDan::select([
                'cudan.id',
                 'ho_ten_cd',
                  'CMND', 
                  'email',  
                  'SDT', 
                  'ng_sinh',
                  'canho.name',
                  'quanhe.ten_quan_he'
             ])
             ->join('canho', 'can_ho_id', '=', 'canho.id')
             ->join('quanhe','quan_he_id', '=', 'quanhe.id')
             ->whereNull('cudan.deleted_at')
             ->paginate(5);
        }
        
        return view('cu-dan.danh-sach-cu-dan', compact('cudan', 'canho'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $canho=CanHo::all();
        $quanhe=QuanHe::all();
        $cudan=CuDan::find($id);
        return view('cu-dan.sua-cu-dan',compact('cudan','canho','quanhe'));
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
        $this->validate($request,[

        'ten_cu_dan'=>'required',
        'cmnd'=>'required',
        'SDT'=>'required',
        'email'=>'required',
        'ngaysinh'=>'required',
        'can_ho'=>'required',
        'quanhe'=>'required',
         
        ]);
        $cudan =  CuDan::find($id);
        $cudan->ho_ten_cd =$request ->input('ten_cu_dan');
        $cudan->CMND =$request ->input('cmnd');
        $cudan->email =$request ->input('email');
        $cudan->SDT =$request ->input('SDT');
        $cudan->ng_sinh =$request ->input('ngaysinh');
        $cudan->can_ho_id =$request ->input('can_ho');
        $cudan->quan_he_id =$request ->input('quanhe');
        


        $cudan->save();

        return redirect('cu-dan')->with('success','Change success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cudan=CuDan::find($id);
        $cudan->delete();
        return redirect('cu-dan')->with('success','Delete success');
    }
}
