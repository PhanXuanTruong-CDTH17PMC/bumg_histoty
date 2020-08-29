<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use App\HoaDon;
use Auth;
use DB;
class UserHoaDonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canho=Auth::guard('canho')->user()->id;
        $auth = Auth::guard('canho')->user();  
        $hoadon=DB::select('SELECT * From hoadon where  can_ho_id='.$canho);
        return view('user.user-hoadon', compact('hoadon', 'auth'));
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
        $cthoadon= DB::select('SELECT dichvu.ten_dich_vu as ten_dv, gia as phi_dv, chitiethoadon.so_luong as so_luong, chitiethoadon.thanh_tien as thanh_tien from chitiethoadon, dichvu where dichvu.id=chitiethoadon.dich_vu_id and hoa_don_id='.$id);
        $hoadon=HoaDon::find($id);
        $auth = Auth::guard('canho')->user();  
        return view('user.user-chitiethoadon',compact('cthoadon','hoadon', "auth"));
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

    public function pay($id)
    {
        $hoadon = HoaDon::find($id);
        $endpoint = "https://test-payment.momo.vn/gw_payment/transactionProcessor";
        $partnerCode = 'MOMONFHQ20200821';
        $accessKey = '1VB28iZT6np1JVw0';
        $serectkey = 'rvrfpXYaEx3vW2AVmJqu0PxcaZvcOxmy';
        $orderId = time() . "";
        $orderInfo = "Thanh toán Momo";
        $amount = $hoadon->tong_tien . "";
        $notifyurl = 'Http://'.$_SERVER['HTTP_HOST'].'/user-hoa-don';
        $returnUrl = 'Http://'.$_SERVER['HTTP_HOST'].'/user-hoa-don/momo/'.$hoadon->id;
        // dd($returnUrl);
        $extraData = "merchantName=MOMONFHQ20200821";

        $requestId = time() . "";
        $extraData = "email=phangthi99@gmail.com";
        $requestType = "captureMoMoWallet";
        $rawHash = "partnerCode=" . $partnerCode . "&accessKey=" . $accessKey . "&requestId=" . $requestId . "&amount=" . $amount . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&returnUrl=" . $returnUrl . "&notifyUrl=" . $notifyurl . "&extraData=" . $extraData;
        $signature = hash_hmac("sha256", $rawHash, $serectkey);
        $dataMomo = [
            'partnerCode' => $partnerCode,
            'accessKey' => $accessKey,
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'returnUrl' => $returnUrl,
            'notifyUrl' => $notifyurl,
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        ];
        $response = Http::post($endpoint, $dataMomo);
        $jsonResult = json_decode($response, true);
        // check response OK
        if($jsonResult['errorCode'] == 0) {
            return redirect()->to($jsonResult['payUrl'])->send();
        }

    }   

    public function processResultMomo(Request $request, $id) {
        $hoadon = HoaDon::find($id);
        if($request->errorCode == 0) {
            $hoadon->tinh_trang_tt = 1;
            $hoadon->save();
            return redirect('user-hoa-don')->with('success', $request->localMessage);
        }
        else {
            return redirect('user-hoa-don')->with('error', $request->localMessage);
        }
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
