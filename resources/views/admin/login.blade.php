<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Lynlydesign</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
        }
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://source.unsplash.com/random/1920x1080/?abstract,geometric') no-repeat center center/cover;
            opacity: 0.1;
            filter: blur(5px);
            z-index: 0;
        }
        .login-container {
            position: relative;
            z-index: 1;
            background-color: rgba(255, 255, 255, 0.95);
            max-width: 450px;
            width: 90%;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            animation: fadeIn 0.8s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .login-card-header {
            text-align: center;
            margin-bottom: 2rem;
            color: #333;
        }
        .login-card-header h2 {
            font-weight: 600;
            color: #2575fc;
            margin-bottom: 0.5rem;
        }
        .login-card-header p {
            color: #666;
            font-size: 0.95rem;
        }
        .form-label {
            font-weight: 400;
            color: #555;
            margin-bottom: 0.5rem;
        }
        .form-control {
            border-radius: 8px;
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            border-color: #2575fc;
            box-shadow: 0 0 0 0.25rem rgba(37, 117, 252, 0.25);
            background-color: #e9f4ff;
        }
        .btn-primary {
            background: linear-gradient(45deg, #6a11cb 0%, #2575fc 100%);
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }
        .btn-primary:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .alert {
            border-radius: 8px;
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
            animation: slideIn 0.5s ease-out;
        }
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 1.5rem;
            color: #6a11cb;
            text-decoration: none;
            font-weight: 400;
            transition: color 0.3s ease;
        }
        .back-link:hover {
            color: #2575fc;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card-header">
            <h2>Chào mừng trở lại!</h2>
            <p>Đăng nhập để tiếp tục quản lý Lynlydesign</p>
        </div>
        
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul class="mb-0 ps-3">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.login.post') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Tên người dùng</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Nhập tên người dùng của bạn" required>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Nhập mật khẩu của bạn" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
        </form>
        
        <a href="/" class="back-link">← Quay về trang chủ</a>
    </div>
</body>
</html>