<!doctype HTML>
<html lang="ja">
    
<head>
    <meta charset="utf-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    
<?php
  
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
$stmt = $pdo->query("select * from 4each_keijiban");
?>

    <div class="header">

        <div class="img">
            <img src="4eachblog_logo.jpg">
        </div>
        <div class="menu">
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </div>

    </div>
    
    <div class="main">

            <div class="left">
            
                <h1>プログラミングに役立つ掲示板</h1>

                <div class="enter_form">
                    <h2 class="enter_form2">入力フォーム</h2>

                   <form method="post" action="insert.php">            
                    <div class="handlename">
                        <label>ハンドルネーム</label>
                        <br>

                        <input type="text" class="text" size="40" name="handlename">
           
                    </div>
                    <div class="title">
                        <label>タイトル</label>
                        <br>

                        <input type="text" class="text" size="40" name="title">

                    </div>
                    <div class="contents">
                        <label>コメント</label>
                        <br>

                        <textarea cols="65" rows="10" name="comments"></textarea>

                    </div>
                    <div>
                        <input type="submit" class="submit" value="投稿する">   
                    </div>
                    </form>

<?php
                    while($row = $stmt->fetch()) {
                        echo "<div class='kiji'>";
                            echo "<h2>".$row['title']."</h2>";
                            echo "<div class='contents'>";
                                echo $row['comments'];
                                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                            echo "</div>";
                        echo "</div>";
                    }
?>

                    
                </div>  
                                       
            </div>


        <div class="right">

                        <h2>人気の記事</h2>
                        <ul>
                            <li>PHPオススメ本</li>
                            <li>PHP Myadminの使い方</li>
                            <li>今人気のエディタ</li>
                            <li>HTMLの基礎</li>
                        </ul>

                        <h2>オススメリンク</h2>

                        <ul>
                            <li>インターノウス株式会社</li>
                            <li>XAMPPのダウンロード</li>
                            <li>Eclipseのダウンロード</li>
                            <li>Bracketsのダウンロード</li>
                        </ul>

                        <h2 class="category">カテゴリ</h2>

                        <ul>
                            <li>HTML</li>
                            <li>PHP</li>
                            <li>MySQL</li>
                            <li>JavaScript</li>
                        </ul>
                </div>       
    </div>
    
    <div class="footer">

        copyright@internous | 4each blog the which provides A to Z about programming

    </div>
    
</body>
</html>

