<div id="nhap-hang-container" class="component-container">
    <div class="controll-import">
        <h2>Quản lý Nhập Hàng</h2>
        <form id="nhap-hang-form" action="" method="POST">
            <select name="mat_hang_id" id="mat_hang_id" required>
                <option value="">--Chọn mặt hàng--</option>
            </select>
            <select name="nha_cung_cap_id" id="nha_cung_cap_id" required>
                <option value="">--Chọn nhà cung cấp--</option>
            </select>
            <input type="text" name="so_luong" id="so_luong" placeholder="Nhập số lượng" required />
            <input type="text" name="gia_nhap" id="gia_nhap" placeholder="Nhập giá nhập về" required />
            <select name="trang_thai" id="trang_thai" required>
                <option value="">--Trạng thái--</option>
            </select>
            <button type="submit">Tạo phiếu nhập</button>
        </form>
    </div>

    <table id="nhap-hang-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mặt hàng</th>
                <th>Tên Nhà Cung Cấp</th>
                <th>Địa Chỉ</th>
                <th>Số Điện Thoại</th>
                <th>Email</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{$nhacungcap->MaNhaCungCap }}</td>
                <td>$nhacungcap->TenNhaCungCap }}</td>
                <td>$nhacungcap->DiaChi }}</td>
                <td>$nhacungcap->SoDienThoai }}</td>
                <td> $nhacungcap->Email }}</td>
                <td>
                    <button class="edit-btn">Sửa</button>
                    <button class="delete-btn">Xóa</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>