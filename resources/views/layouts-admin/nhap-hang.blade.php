
<div class="container">
    <h2 class="mb-4">Quản Lý Nhập Hàng</h2>

    <!-- Form nhập hàng -->
    <form id="nhapHangForm">
        <div class="mb-3">
            <label for="nhaCungCap" class="form-label">Nhà Cung Cấp</label>
            <select class="form-control" id="nhaCungCap" name="nhaCungCap" required>
                <option value="">-- Chọn Nhà Cung Cấp --</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="ngayNhap" class="form-label">Ngày Nhập</label>
            <input type="date" class="form-control" id="ngayNhap" name="ngayNhap" required>
        </div>

        <h4>Danh Sách Sản Phẩm</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sản Phẩm</th>
                    <th>Số Lượng</th>
                    <th>Giá Nhập</th>
                    <th>Thành Tiền</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody id="productList">
                <!-- Danh sách sản phẩm nhập hàng -->
            </tbody>
        </table>

        <button type="button" class="btn btn-primary">Thêm Sản Phẩm</button>

        <div class="mt-3">
            <strong>Tổng Giá Trị Nhập: </strong>
            <span id="tongGiaTriNhap">0</span> VNĐ
        </div>

        <button type="submit" class="btn btn-success mt-3">Lưu Phiếu Nhập</button>
    </form>
</div>
