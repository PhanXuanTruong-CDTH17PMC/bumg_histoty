<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Auth;
use App\HoaDon;
use App\CanHo;
use App\DichVu;
use App\ChiTietHoaDon;
use DB;

class HoaDonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canho=CanHo::all();
        $hoadon = DB::select('SELECT  hoadon.tong_tien, hoadon.id, canho.name as canhoname, hoadon.created_at, hoadon.tinh_trang_tt FROM hoadon, canho WHERE hoadon.can_ho_id=canho.id  ');
        return view('hoa-don.danh-sach-hoa-don',  compact('hoadon','canho'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $canho = CanHo::all();
        $dichvu = DichVu::all();
        $tongtien = DB::select('SELECT SUM(thanh_tien) as tongtien from chitiethoadon,hoadon where chitiethoadon.hoa_don_id=hoadon.id');
        $thanhtien = DB::select('SELECT dichvu.phi_dv*so_luong as thanhtien from chitiethoadon,dichvu where chitiethoadon.dich_vu_id=dichvu.id' );
        return view('hoa-don.them-moi-hoa-don',compact('canho','dichvu','tongtien','thanhtien'));
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
            'can_ho'=>'required',
            'dich_vu'=>'required',
            'so_luong'=>'required',
            'tinh_trang_tt'=>'required'
        ]);

        $tt = 0;
        for($i=0; $i<count($request->input('dich_vu'));$i++){
            $dichvu =DichVu::find($request->input('dich_vu.'.$i.'.id'));
            $tt += $request->input('so_luong.'.$i.'.soluong')  * $dichvu->phi_dv; 
        }
            
         $hoadon = new HoaDon;
         $hoadon->can_ho_id = $request->input('can_ho');
         $hoadon->tinh_trang_tt = $request->input('tinh_trang_tt');
         $hoadon->nhan_vien_id = Auth::guard('nhanvien')->user()->id;
         $hoadon->tong_tien = $tt;
         $hoadon->save();
        
        
        for($i=0; $i<count($request->input('dich_vu'));$i++){
            $cthoadon = new ChiTietHoaDon;
            $hoadon_id=(DB::table('hoadon')->max('id'));
            $cthoadon->hoa_don_id=$hoadon_id;
            $cthoadon->can_ho_id =$request ->input('can_ho');
            $cthoadon->dich_vu_id = ($request->input('dich_vu.'.$i.'.id'));
            $dichvu =DichVu::find($request->input('dich_vu.'.$i.'.id'));
            $cthoadon->so_luong = $request->input('so_luong.'.$i.'.soluong');   
            $cthoadon->thanh_tien = $cthoadon->so_luong * $dichvu->phi_dv; 
            $cthoadon->save();
         }
         
        $ch_mail = DB::select('SELECT cudan.email from canho, cudan where cudan.id = canho.chu_ho_id and canho.id ='.$hoadon->can_ho_id);
        $chuho = DB::select('SELECT cudan.ho_ten_cd from canho, cudan where cudan.id = canho.chu_ho_id and canho.id ='.$hoadon->can_ho_id);
        $ch_name = DB::select('SELECT canho.name from canho where canho.id ='.$hoadon->can_ho_id);
       $tong = number_format($hoadon->tong_tien, 0, ',', '.');
        $data = [
            'name'      => $chuho[0]->ho_ten_cd,
            'message'   =>   'Please pay your bill !',
            'mach'  => $ch_name[0]->name,
            'tt' =>  $tong
        ];
        Mail::to($ch_mail)->send(new SendMail($data));
        return redirect('hoa-don')->with('success','Add success');
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
        $tt = $request->input('tinh_trang_searrch');
        // dd($tt);
        if(!empty($ch)) {
            $hoadon = DB::select('SELECT Distinct hoadon.tong_tien, hoadon.id, canho.name as canhoname, hoadon.created_at, hoadon.tinh_trang_tt FROM hoadon, canho WHERE hoadon.can_ho_id = canho.id and hoadon.can_ho_id =  '.$ch );
        }   
        else if(!empty($tt) ) {
            if($tt == 1){
                $hoadon = DB::select('SELECT  hoadon.tong_tien, hoadon.id, canho.name as canhoname, hoadon.created_at, hoadon.tinh_trang_tt FROM hoadon, canho WHERE hoadon.can_ho_id=canho.id and hoadon.tinh_trang_tt = 0' );
            }
            else{ 
                $hoadon = DB::select('SELECT  hoadon.tong_tien, hoadon.id, canho.name as canhoname, hoadon.created_at, hoadon.tinh_trang_tt FROM hoadon, canho WHERE hoadon.can_ho_id=canho.id and hoadon.tinh_trang_tt = 1');
            }   
        }
        else {
            $hoadon = DB::select('SELECT Distinct hoadon.tong_tien, hoadon.id, canho.name as canhoname, hoadon.created_at, hoadon.tinh_trang_tt FROM hoadon, canho WHERE hoadon.can_ho_id=canho.id  '); 
        }

        if(!empty($ch) && !empty($tt)) {
            if ($tt == 1) {
                 $hoadon = DB::select('SELECT Distinct hoadon.tong_tien, hoadon.id, canho.name as canhoname, hoadon.created_at, hoadon.tinh_trang_tt FROM hoadon, canho WHERE hoadon.can_ho_id = canho.id and hoadon.tinh_trang_tt = 0 and hoadon.can_ho_id =  '.$ch );
            }
            else if ($tt == 2) {
                $hoadon = DB::select('SELECT Distinct hoadon.tong_tien, hoadon.id, canho.name as canhoname, hoadon.created_at, hoadon.tinh_trang_tt FROM hoadon, canho WHERE hoadon.can_ho_id = canho.id and hoadon.tinh_trang_tt = 1 and hoadon.can_ho_id =  '.$ch );
            }
        }   

        return view('hoa-don.danh-sach-hoa-don',  compact('hoadon','canho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cthoadon= DB::select('SELECT dichvu.ten_dich_vu as ten_dv, dichvu.don_vi as don_vi, dichvu.phi_dv as phi_dv, chitiethoadon.so_luong as so_luong, chitiethoadon.thanh_tien as thanh_tien from chitiethoadon, dichvu where dichvu.id=chitiethoadon.dich_vu_id and hoa_don_id='.$id);
        $hoadon=HoaDon::find($id);
        return view('hoa-don.chi-tiet-hoa-don',compact('cthoadon','hoadon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $hoadon = HoaDon::find($id);
        if( $hoadon->tinh_trang_tt == 1) {
            $hoadon->tinh_trang_tt = 0;
        }
        else {
            $hoadon->tinh_trang_tt = 1;
        }        
        $hoadon->save();

        return redirect('hoa-don')->with('success','Delete success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hoadon = HoaDon::find($id);
        $hoadon->delete();

        return redirect('hoa-don')->with('success','Delete success');
    }
}
