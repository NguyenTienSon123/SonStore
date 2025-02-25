<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ url('img/favicon.png')}}">
    <link rel="stylesheet" href="fonts/fontawesome-free-6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/grid.css') }}">    
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>SonStore - Giới thiệu</title>
</head>
<body>
    @include('layouts.header')
    <div id="banner2" class="grid wide row"></div>
    <div id="contenabout1" class="contenabout grid wide row">
        <div class="contenabout--text col l-6">
            <h1>Giới thiệu về SonStore</h1>
            <h1>Về chúng tôi</h1>
            <p>Cửa hàng online của chúng tôi là nơi cung cấp các sản phẩm thời trang, đồ gia dụng, đồ công nghệ, thực phẩm, mỹ phẩm, v.v. chất lượng với giá cả hợp lý. Chúng tôi cam kết mang lại trải nghiệm mua sắm dễ dàng, tiện lợi và nhanh chóng cho khách hàng trên toàn quốc.</p>
        </div>
        <div class="contenabout--img col l-6">
            <img src="img/Logo.png" alt="">
        </div>
    </div>
    <div id="contenabout2" class="contenabout grid wide row">
        <div class="contenabout--img col l-6">
            <img src="img/prop.webp" alt="">
        </div>
        <div class="contenabout--text col l-6">
            <h1>Điểm nổi bật</h1>
            <p>Sản phẩm phong phú: Chúng tôi cung cấp đa dạng các sản phẩm phù hợp với mọi đối tượng khách hàng.
                Giá cả cạnh tranh: Các sản phẩm luôn có mức giá hợp lý với nhiều chương trình ưu đãi, giảm giá hấp dẫn.
                Giao hàng nhanh chóng: Cửa hàng cam kết giao hàng đúng hẹn và đảm bảo chất lượng trong quá trình vận chuyển.
                Dịch vụ khách hàng: Đội ngũ hỗ trợ khách hàng 24/7, luôn sẵn sàng lắng nghe và giải quyết mọi vấn đề.</p>
        </div>
    </div>
    <div id="contenabout3" class="contenabout grid wide row">
        <div class="contenabout--text col l-6">
            <h1>Tầm nhìn và sứ mệnh</h1>
            <p>Tầm nhìn: Trở thành nền tảng mua sắm trực tuyến hàng đầu, nơi khách hàng có thể tìm thấy mọi thứ họ cần chỉ với một vài cú nhấp chuột.
                Sứ mệnh: Đáp ứng mọi nhu cầu của khách hàng bằng những sản phẩm chất lượng, giao hàng nhanh chóng và dịch vụ chăm sóc tận tình.</p>
        </div>
        <div class="contenabout--img col l-6">
            <img src="img/mvc.webp" alt="">
        </div>
    </div>
    <div id="contenabout4" class="contenabout grid wide row">
        <div class="contenabout--img col l-6">
            <img src="img/cachThuc.webp" alt="">
        </div>
        <div class="contenabout--text col l-6">
            <h1>Cách thức mua sắm</h1>
            <p>Truy cập vào trang web :https://SonStore.mall.vn.
                Tìm kiếm sản phẩm bạn yêu thích và thêm vào giỏ hàng.
                Thanh toán dễ dàng qua nhiều phương thức như thẻ tín dụng, ví điện tử, hoặc chuyển khoản.
                Theo dõi đơn hàng và nhận sản phẩm tại nhà.</p>
        </div>
    </div>
    @include('layouts.footer')
    <script src="js/main.js"></script>
</body>
</html>