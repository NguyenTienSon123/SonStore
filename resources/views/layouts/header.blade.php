@if(session('user') && session('user.Role') === 'admin')
    <a href="{{ route('admin') }}">Trang Quản Trị</a>
@endif

<div id="header">
    <div class="grid wide row">
        <div id="header--logo" class="col l-2">
            <a href="{{ url('/') }}"><img class="logo" src="{{ asset('img/Logo-ngang.png') }}" alt="Logo"></a>
        </div>
        <div id="header--search" class="col l-7">
            <label for="search"><i class="fa-solid fa-magnifying-glass"></i></label>
            <input type="text" placeholder="  Tìm kiếm sản phẩm..." id="search">
            <button type="submit">Tìm kiếm</button>
        </div>
        @if (session('user'))
        <div id="header--logintrue" class="col l-3">
            <div class="row">
                <div class="cart col l-3">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class="badge">4</span>
                </div>
                <div class="bar col l-4">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="avata col l-4">
                    <img src="{{ session('user.Avata') }}" alt="Avatar">
                </div>
            </div>
        </div>
        @else
        <div id="header--sign" class="col l-3">
            <div class="row">
                <div class="sign-in">
                    <button id="showSignin">Đăng nhập</button>
                </div>
                <div class="sign-up">
                    <button id="showSignup">Đăng ký</button>
                </div>
            </div>
        </div>
        @endif
    </div>
    <div class="seluser">
        <div class="seluser--chirld">
            <div class="seluser--chirld__ac">
                <img src="{{ session('user.Avata') ? asset(session('user.Avata')) : asset('img/user.png') }}" alt="Avatar">
                <h3>{{ session('user.HoVaTen') ?? 'Họ và tên' }}</h3>
            </div>
            <div class="seluser--chirld__menu">
                <ul>
                    <li><a href="#">Tài khoản của tôi</a></li>
                    <li><a href="#">Đơn hàng của tôi</a></li>
                    <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="signin">
        <div class="sign">
            <div class="grid">
                <i class="fa-solid fa-xmark"></i>
                <form method="post" action="{{ url('/dang-nhap') }}">
                    @csrf
                    <header class="modal-header">
                        Đăng nhập
                    </header>
                    <div class="modal-body">
                        <label for="gmail2" class="modal-label">Email</label>
                        <input id="gmail2" type="email" name="gmail2" class="modal-input" placeholder="Nhập email" value="{{ old('gmail') }}">
                        <label for="MatKhau2" class="modal-label">Mật khẩu</label>
                        <input id="MatKhau2" type="password" name="MatKhau2" class="modal-input" placeholder="Nhập mật khẩu">
                        @if(session('error'))
                        <span class="text-danger">{{ session('error') }}</span>
                        @endif
                        @error('MatKhau2')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <button class="buy-ticket" type="submit" name="submit">Đăng nhập</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="signup">
        <div class="sign">
            <div class="grid">
                <i class="fa-solid fa-xmark"></i>
                <form method="post" action="{{ url('/dang-ky') }}">
                    @csrf

                    <header class="modal-header">Đăng ký</header>
                    <div class="modal-body">
                        <!-- Họ và tên -->
                        <label for="HoVaTen" class="modal-label">Họ và tên</label>
                        <input id="HoVaTen" type="text" name="HoVaTen" class="modal-input" placeholder="Nhập họ và tên" value="{{ old('HoVaTen') }}" required>
                        @error('HoVaTen')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Email -->
                        <label for="gmail" class="modal-label">Email</label>
                        <input id="gmail" type="email" name="gmail" class="modal-input" placeholder="Nhập email" value="{{ old('gmail') }}" required>
                        @error('gmail')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Mật khẩu -->
                        <label for="MatKhau" class="modal-label">Mật khẩu</label>
                        <input id="MatKhau" type="password" name="MatKhau" class="modal-input" placeholder="Nhập mật khẩu" required>
                        @error('MatKhau')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- Xác nhận mật khẩu -->
                        <label for="MatKhau_confirmation" class="modal-label">Xác nhận mật khẩu</label>
                        <input id="MatKhau_confirmation" type="password" name="MatKhau_confirmation" class="modal-input" placeholder="Nhập lại mật khẩu" required>
                        @error('MatKhau_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <button class="buy-ticket" type="submit" name="submit">Đăng ký</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        if (document.querySelector('.text-danger')) {
            document.getElementById("signin").style.display = "block";
        }
    });
</script>