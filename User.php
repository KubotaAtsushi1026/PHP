<?php
    // モデル(M)
    // print("こんにちは\n");
    // print('こんにちは' . PHP_EOL);
    // print 'こんにちは' . PHP_EOL;
    // print('こんにちは\n');
    // ユーザーの設計図を作成
    class User{
        // プロパティ
        public $name; // 名前
        public $age; // 年齢
        // コンストラクタ
        public function __construct($name, $age){
            // this.name = name;
            $this->name = $name;
            $this->age = $age;
            // print $this->name . 'さんが生まれた' . PHP_EOL;
        }
        
        //　お酒を飲むメソッド
        public function drink(){
            if($this->age >= 20){
                print $this->name . 'さんお酒をお楽しみください' . PHP_EOL;
            }else{
                print $this->name . 'さん、お酒は20歳から' . PHP_EOL;

            }
        }
        // someoneに話しかけるメソッド
        public function talk($someone){
            print $this->name . 'さんが' . $someone->name . 'さんに話しかけた' . PHP_EOL;
        }
        
        // 入力チェックをするメソッド
        public function validate(){
            // 空のエラー配列作成
            $errors = array();
            // 名前が入力されていなければ
            if($this->name === ''){
                $errors[] = '名前が入力されていません';
            }
            // 年齢が入力されていなければ
            if($this->age === ''){
                $errors[] = '年齢を入力してください';
            }else if(!preg_match('/^[0-9]+$/', $this->age)){ // 年齢が正の整数でなければ
                $errors[] = '年齢は正の整数を入力してください';
            }
            
            // 完成したエラー配列はいあげる
            return $errors;
        }
    }
