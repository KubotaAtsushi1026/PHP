<?php
    // コントローラ(C)
    // 外部ファイルの読み込み
    require_once 'User.php';
    // セッション開始
    session_start();
    // $_SESSION['users'] = null;
    
    // セッションからユーザー一覧を取得
    $users = $_SESSION['users'];
    
    // セッションにユーザー一覧が保存されていなければ
    if($users === null){
        
        // 久保田さん誕生
        $kubota = new User('久保田',19);
        // 島さん誕生
        $shima = new User('島', 48);
        // 久保田さんお酒を飲む
        // $kubota->drink();
        // 久保田さんが島さんに話しかける
        // $kubota->talk($shima);
        
        // ユーザー一覧を保存する配列
        $users = array(); // からの配列
        // $users = [];
        // users.push(kubota);
        // array_push($users, $kubota);
        // array_push($users, $shima);
        // array_push($users, new User('木下', 25));
        // console.log(users);
        // var_dump($users);
    }
    
    // // セッションから新規ユーザーを取得
    // $new_user = $_SESSION['new_user'];
    // // セッション情報の破棄
    // $_SESSION['new_user'] = null;
    // // $new_userがいれば
    // if($new_user !== null){
    //     array_push($users, $new_user);
    // }
    // セッションからメッセージを抜き出す
    $flash_message = $_SESSION['flash_message'];
    // セッションからメッセージを削除
    $_SESSION['flash_message'] = null;
    // HTMLファイル表示
    include_once 'index_view.php';
