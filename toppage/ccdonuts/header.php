<body class="bodyM">

<header>
    <div class="test">
        <nav class="gMenu">
            <input class="menuBtn" type="checkbox" id="menuBtn">
            <label class="menuIcon" for="menuBtn"> 
                <span class="navicon"></span>
            </label>
            <ul class="menu">
                <li><a href="#TOP">TOP</a></li>
                <li><a href="#商品一覧">商品一覧</a></li>
                <li><a href="#よくある質問">よくある質問</a></li>
                <li><a href="#問い合わせ">問い合わせ</a></li>
                <li><a href="#当サイトのポリシー">当サイトのポリシー</a></li>
            </ul>
        </nav>
        
        <form action="index.php" method="post">
            <input type="image" src="images/mein.png" alt="メインの画像">
        </form>
    </div>

    <div class="testT">
        <form action="rogin.php" method="post">
            <input type="image" src="images/rogin.png" name="rogin">
        </form>

        <form action="cart.php" method="post">        
            <input type="image" src="images/cart.png" name="cart">
        </form>
    </div>
</header>

<div class="formS">
    <form action="index.php" method="post" class="flexH">
        <button class="search" type="search">🔍</button>
        <input type="text" class="backWhite" name="user" value="">
    </form>
</div>

</body>
</html>
