<!-- resources/views/components/logout-form.blade.php -->
<div id="logout-form-container" class="logout-form">
    <div class="logout-box">
        <p>Bạn có chắc chắn muốn đăng xuất?</p>
        <form id="logout-form" action="{{ route('logout') }}" method="GET">
            @csrf
            <button type="submit">Xác nhận</button>
        </form>
    </div>
</div>

<style>
    /* .logout-form {
        position: absolute;
        right: 810px;
        top: 50px;
        background: white;
        border: 1px solid #ccc;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    } */
    #logout-form-container .logout-box {
        text-align: center;
    }
    #logout-form-container .logout-box button {
        margin: 5px;
        padding: 8px 15px;
        border: none;
        cursor: pointer;
    }
    #logout-form-container .logout-box button[type="submit"] {
        background: red;
        color: white;
    }
</style>
