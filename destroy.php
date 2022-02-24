<?php
    // コントローラー(C)
    session_start();
    // セッションからユーザー一覧を破棄
    $_SESSION['users'] = null;
    
    // メッセージをセッションに保存
    $_SESSION['flash_message'] = '全ユーザーを削除しました';
    
    // リダイレクト
    header('Location: index.php');
    exit;
    