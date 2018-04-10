<!DOCTYPE html>
<html lang="ja">
	<head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<title>@yield('title')</title>
	</head>
	<body>
		<h1><a href="{{ url('/') }}">Skype BBS</a></h1>
        <div class="menu">
            <ul>
                <li><a href="{{ url('/create') }}">投稿</a></li>
                <li><a href="">検索</a></li>
            </ul>
        </div>
        @yield('content')
</html> 