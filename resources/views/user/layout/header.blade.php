 <div >
    <div class="text-center" id="nav">
        <span class="logo-lg"style="font-size:40px; padding-top:20px;margin-top:20px">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" height="90">
            
        </span>
        <label style="font-size:35px;font-family:Georgia "> PT Home's </label>
    </div>
    <div class="tab">
        <div>
            <a class="button" href="/thong-bao">Thông báo</a>
        </div>
        <div>
            <a class="button" href="/user-hoa-don">Hóa đơn</a>
        </div>
        <div>
            <a class="button" href="/user-phuong-tien">Phương tiện</a>
        </div>
        <div>
            <a class="button" href="/phan-anh">Phản ánh</a>
        </div>
        <div>
            <a class="button button2 "  href="user-logout">Đăng xuất</a>
        </div>
        <div>
            <a class=" name" style="" href="#">Xin chào {{Auth('canho')->user()->name}}</a>
        </div>
    </div>
</div>
<link href="{{ asset('assets/css/user-style.css') }}" rel="stylesheet') }}" />

