<form > 
<>Trân Trọntrg Kính Chào!!</tr>
<table style= 'boder: 2px  solid;'>
    <tr><b> {{ $data['name'] }}</b><br/></tr>
    <tr><p>Căn Hộ: {{ $data['mach'] }}</p></tr>
    <tr> <p>Tổng Tiền: {{ $data['tt'] }}</p></tr>
    <tr><p>*****************************</p></tr>
    <tr><p style = 'color:red'>{{ $data['message'] }}</p></tr>
</table>
</form>
