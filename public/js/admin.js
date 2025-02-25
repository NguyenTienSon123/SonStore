// xử lý sự kiện đăng xuất
document.addEventListener("DOMContentLoaded", function () {
    // Kiểm tra nếu phần tử tồn tại trước khi gán sự kiện
    let logoutFormContainer = document.getElementById('logout-form-container');

    function showLogoutForm(event) {
        event.preventDefault(); // Ngăn chặn điều hướng
        if (logoutFormContainer) {
            logoutFormContainer.style.display = 'block';
        }
    }

    function hideLogoutForm() {
        if (logoutFormContainer) {
            logoutFormContainer.style.display = 'none';
        }
    }

    // Gán sự kiện cho nút "Đăng xuất"
    let logoutLink = document.getElementById('logout-link');
    if (logoutLink) {
        logoutLink.addEventListener('click', showLogoutForm);
    }

    // Gán sự kiện cho nút "Hủy"
    let cancelLogoutButton = document.getElementById('cancel-logout');
    if (cancelLogoutButton) {
        cancelLogoutButton.addEventListener('click', hideLogoutForm);
    }
});


// xử lý sự kiện tải nội dung trang admin
document.querySelectorAll('#navbar li').forEach(function (navItem) {
    navItem.addEventListener('click', function () {
        var page = this.getAttribute('data-page');

        // Lấy nội dung chế độ xem Blade bằng AJAX
        fetch('/admin/' + page)
            .then(response => response.text())
            .then(data => {
                document.getElementById('dynamic-content').innerHTML = data;
            })
            .catch(error => console.log(error));
    });
});
