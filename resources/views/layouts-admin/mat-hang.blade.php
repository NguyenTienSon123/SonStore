<div id="mat-hang-container" class="component-container">
    <div class="controll-product">
        <h2>Quản lý Mặt Hàng</h2>
        <form id="mat-hang-form" action="{{ route('mat-hang.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="ten" id="ten" placeholder="Nhập tên mặt hàng" required />
            <select name="loai_mat_hang_id" id="loai_mat_hang_id" required>
                <option value="">--Chọn loại mặt hàng--</option>
                @foreach ($loaiMatHangs as $loai)
                <option value="{{ $loai->MaLoaiMatHang }}">{{ $loai->TenLoaiMatHang }}</option>
                @endforeach
            </select>
            <input type="number" name="gia" id="gia" placeholder="Nhập giá" required />
            <textarea name="mo_ta" id="mo_ta" placeholder="Nhập mô tả"></textarea>
            <input type="file" name="hinh_anh" id="hinh_anh" required />
            <button type="submit">Thêm mới</button>
        </form>

    </div>

    <table id="mat-hang-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Hình ảnh</th>
                <th>Tên Sản Phẩm</th>
                <th>Loại Mặt Hàng</th>
                <th>Giá</th>
                <th>Trạng thái</th>
                <th>Mô tả</th>
                <th>Số lượng</th>
                <th>Ngày thêm</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matHangs as $hang)
            <tr>
                <td>{{ $hang->MaMatHang }}</td>
                <td><img src="{{ asset('storage/'.$hang->Anh) }}" alt="{{ $hang->TenMatHang }}" width="100"></td>
                <td>{{ $hang->TenMatHang }}</td>
                <td>{{ $hang->loaiMatHang->TenLoaiMatHang }}</td>
                <td>{{ $hang->Gia }}</td>
                <td>{{ $hang->TrangThai }}</td>
                <td>{{ $hang->MoTa }}</td>
                <td>{{ $hang->SoLuongTon }}</td>
                <td>{{ $hang->ngay_them }}</td>
                <td>
                    <button class="edit-btn">Sửa</button>
                    <button class="delete-btn">Xóa</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
