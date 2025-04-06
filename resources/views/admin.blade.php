<!DOCTYPE html>
<html>
<head>
    <title>Trang Admin</title>
</head>
<body>
    <h2>Trang này chỉ cho admin!</h2>
    <p>Xin chào, {{ Auth::user()->name }}</p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Đăng xuất</button>
    </form>
</body>
</html>
