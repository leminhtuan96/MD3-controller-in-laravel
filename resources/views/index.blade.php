<div class="main-content">
    <h1>Ứng dụng kiểm tra email hợp lệ</h1>
    <form action="" method="post">
        <label for="email-input">Email:</label>
        <input type="text" id="email-input" name="email" placeholder="Nhập email cần kiểm tra ...">
        <button>Check</button>
    </form>
    @if(isset($isEmail))
        Kết quả: {{$isEmail ? "Đúng định dạng Email":"Sai định dạng Email"}}
    @endif
</div>
