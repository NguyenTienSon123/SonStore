<div id="nha-cung-cap-container" class="component-container">
    <div class="controll-supplier">
        <h2>Quản lý Nhà Cung Cấp</h2>
        <form id="nha-cung-cap-form" action="{{ route('nha-cung-cap.store') }}" method="POST">
            @csrf
            <input type="text" name="ten" id="ten" placeholder="Nhập tên nhà cung cấp" required />
            <input type="text" name="dia_chi" id="dia_chi" placeholder="Nhập địa chỉ" required />
            <input type="text" name="so_dien_thoai" id="so_dien_thoai" placeholder="Nhập số điện thoại" required />
            <input type="text" name="email" id="email" placeholder="Nhập email" required />
            <button type="submit">Thêm mới</button>
        </form>
    </div>

    <table id="nha-cung-cap-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Nhà Cung Cấp</th>
                <th>Địa Chỉ</th>
                <th>Số Điện Thoại</th>
                <th>Email</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nhacungcaps as $nhacungcap)
            <tr>
                <td>{{ $nhacungcap->MaNhaCungCap }}</td>
                <td>{{ $nhacungcap->TenNhaCungCap }}</td>
                <td>{{ $nhacungcap->DiaChi }}</td>
                <td>{{ $nhacungcap->SoDienThoai }}</td>
                <td>{{ $nhacungcap->Email }}</td>
                <td>
                    <button class="edit-btn">Sửa</button>
                    <button class="delete-btn">Xóa</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>