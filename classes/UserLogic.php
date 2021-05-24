<?php

require_once '../dbconnect.php';

class UserLogic{
  /**
   * ユーザーを登録する
   * @param array $userData
   * @return bool $result
   */
  public static function createUser($userData){
    $result = false;
    $sql = 'INSERT INTO users (name, email, password) VALUES(?,?,?)';

    //ユーザーデータを配列に入れる
    $arr = [];
    $arr[] = $userData['username'];
    $arr[] = $userData['email'];
    $arr[] = password_hash($userData['password'], PASSWORD_DEFAULT);

    try{
      $stmt = connect()->prepare($sql);
      $result = $stmt->execute($arr);
      return $result;
    } catch(Exeption $e){
      return $result;
    }
  }

  /**
   * ログイン処理
   * @param string $email
   * @param string $password
   * @return bool $result
   */

  public static function login($email, $password){
    //結果
    $result = false;
    // ユーザーをemailから検索して取得
    $user = self::getUserByEmail($email);
  }

   /**
   * emailからユーザーを取得
   * @param string $email
   * @return array|bool $user|false
   */

  public static function getUserByEmail($email){
    //SQLの準備
    //SQLの実行
    //SQLの結果
    $sql = 'SELECT * FROM users WHERE email = ?';

    //emailを配列に入れる
    $arr = [];
    $arr = $email;

    try{
      $stmt = connect()->prepare($sql);
      $stmt->execute($arr);
      // SQLの結果を返す
      $user = $stmt->fetch();
      return $user;
    }catch(Exeption $e){
      return $result;
    }
  }
}