<div id="loai-mat-hang-container" class="component-container">
    <div class="controll-category">
        <h2>Quản lý Loại Mặt Hàng</h2>
        <form id="loai-mat-hang-form" action="{{ route('loai-mat-hang.store') }}" method="POST">
            @csrf
            <input type="text" name="ten_loai" id="ten_loai" placeholder="Nhập tên loại mặt hàng" required />
            <button type="submit">Thêm mới</button>
        </form>
    </div>

    <table id="loai-mat-hang-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Loại</th>
                <th>Ngày Thêm</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($loaiMatHangs as $loai)
            <tr>
                <td>{{ $loai->MaLoaiMatHang }}</td>
                <td>{{ $loai->TenLoaiMatHang }}</td>
                <td>{{ $loai->ngay_them }}</td>
                <td>
                    <button class="edit-btn">Sửa</button>
                    <button class="delete-btn">Xóa</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>