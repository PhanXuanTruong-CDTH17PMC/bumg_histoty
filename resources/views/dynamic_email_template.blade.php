<form > 
<PTHome's>Trân Trọntrg Kính Chào!!</tr>
<table style= 'boder: 2px  solid;'>
    <tr><b>Khách hàng: </b> {{ $data['name'] }}</tr>
    <tr><b>Căn Hộ: </b> {{ $data['mach'] }}</tr>
    <tr><b>Tổng Tiền: </b> {{ $data['tt'] }}</tr>
    <tr>***************<b>PT Home's<b>**************</tr>
    <tr><h5 style = 'color:red'>{{ $data['message'] }}</h5></tr>
    <button class = "btn btn-primary"><a href = "">Xem Chi Tiết</a></button>
</table>
</form>
