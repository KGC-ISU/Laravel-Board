<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WelCome!</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
</head>
<body>
    <header>
        <div class="wrap">
            <ul class="nav">
                <li class="title"><i class="fas fa-comment-alt"></i></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">게시판</a></li>
                <li><a href="#">테스트</a></li>
            </ul>
            <ul id="login">
                <li><a href="#" class="login">로그인</a></li>
                <li><a href="#" class="register">회원가입</a></li>
            </ul>
        </div>
    </header>

    @yield('content')
</body>
</html>
