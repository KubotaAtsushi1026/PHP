<?php
    // 外部ファイル読み込み
    require_once 'User.php';
    // セッション開始(すべてのファイルが使える情報の共有箱)
    session_start();
    // コントローラ(C)
    // print 'OK';
    // $_POST, $_GET スーパーグローバル変数
    // var_dump($_POST);
    $name = $_POST['name'];
    $age = $_POST['age'];
    // print $name;
    // print $age;
    
    // 入力された値から新しいユーザー作成
    $new_user = new User($name, $age);
    
    // 入力チェック(validation)
    $errors = $new_user->validate();
    // var_dump($errors);
    
    // 名前も年齢も両方正しく入力されていれば
    if(count($errors) === 0){
        
        $users = $_SESSION['users'];
        if($users === null){
            $users = array();            
        }
        
        $users[] = $new_user;
        $_SESSION['users'] = $users;
        
        // セッションからユーザー一覧を取得
        // $users = $_SESSION['users'];
        if($users === null){
            $users = array();
        }
        // 新規会員をユーザー一覧に追加
        $users[] =$new_user;
        // ユーザー一覧をセッションに保存
        $_SESSION['users'] = $users;
        
        // var_dump($new_user);
        // $_SESSION['new_user'] = $new_user;
        // // セッションにメッセージを保存
        $_SESSION['flash_message'] = $name . 'さんが新規登録されました';
        
        // // リダイレクト（画面が変わる）
        header('Location: index.php');
        exit;
        
    }else{ // 入力エラーが1つでもあれば
        // エラー配列をセッションに保存
        $_SESSION['errors'] = $errors;
        // リダイレクト
        header('Location: create.php');
        exit;
    }
    