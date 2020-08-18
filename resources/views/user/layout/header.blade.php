<header>
<div class="tab">
<div class="logo-box topnav-menu  mb-0">
            <a  class="logo text-center">
                <span class="logo-lg">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" height="72">
                </span>
                <span class="logo-sm">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" height="52">
                </span>
            </a>
        </div>
        <div class="logo-box topnav-menu  mb-0">
            <a  class="btn text-center">
                <label style="font-size:30px; color:white"><b> PT Home's</b> </label>
            </a>
        </div>
        <div>
            <a class="button " href="/thong-bao">Thông báo</a>
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
<style>
    .tab{
        background-color:#1E01FF;
        overflow: hidden;
        border: none;
    }
    .logo-sm{
        marging-left:15px;
    }
    .tab .button {
        float: left;
        outline: none;
        padding: 15px 15px;
        pading: center;
        color: white;
        font-size:20px;
    }
    .tab .name {
    float: right;
    outline: none;
    padding: 15px 16px;
    transition: 0.5s;
    color: white;
    font-size:18px;
    }
    .tab .button2 {
    float: right;
    border: 3px solid white;
    border-radius:50px;
    color: white;
    }
    .tab .button:hover {
    background-color: white;
    color:#1E90FF;
    height:62.5px;
    }
</style>
</header>
