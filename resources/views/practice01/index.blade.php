<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>BBアシスタントカンパニー</title>

	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700,900&display=swap&subset=japanese" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/practice01.css') }}">
    {{-- 対応してないブラウザのために２つ設定する --}}
	<link rel="icon" href="img/bb.png" type="image/png">
	<link rel="icon" href="img/bb.svg" type="image/svg+xml">
</head>
<body>

<header class="header">
    <div class="container">

        <div class="site">
            <img src="{{ asset('images_practice01/bb.png')}}" alt="" />
            <div>
                <p class="corp">BB アシスタントカンパニー</p>
                <p class="desc">確かなスタッフによる業務サポート</p>
            </div>

        </div>
        <button type="button" class="nav-button">
            <span class="sr-only" >MENU</span>
        </button>

    </div>
</header>

<section class="hero">
    <div class="catch">
        <div class="container">
            <h1>
                <img src="{{ asset('images_practice01/hero.svg')}}" alt="BB Assistant Company" >
            </h1>
            <p>縁の下の力持ちとしてお仕事を支えます</p>
        </div>
    </div>
</section>

<section class="message">
    <h2>ビジネスアシスタントとして <br /> サポートを続けて20年</h2>
    <p>
        プロのビジネスアシステントとして独立プロのビジネスアシステントとして独立プロのビジネスアシステントとして独立
        プロのビジネスアシステントとして独立プロのビジネスアシステントとして独立
    </p>
</section>



</body>
</html>
