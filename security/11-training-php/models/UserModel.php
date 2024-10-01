<?php

require_once 'BaseModel.php';

class UserModel extends BaseModel {

    public function findUserById($id) {
        $sql = 'SELECT * FROM users WHERE id = '.$id;
        $user = $this->select($sql);

        return $user;
    }

    public function findUser($keyword) {
        $sql = 'SELECT * FROM users WHERE user_name LIKE %'.$keyword.'%'. ' OR user_email LIKE %'.$keyword.'%';
        $user = $this->select($sql);

        return $user;
    }

    /**
     * Authentication user
     * @param $userName
     * @param $password
     * @return array
     */
    public function auth($userName, $password) {
        $md5Password = md5($password);
        $sql = 'SELECT * FROM users WHERE name = "' . $userName . '" AND password = "'.$md5Password.'"';

        $user = $this->select($sql);
        return $user;
    }

    /**
     * Delete user by id
     * @param $id
     * @return mixed
     */
    public function deleteUserById($id) {
        $sql = 'DELETE FROM users WHERE id = '.$id;
        return $this->delete($sql);

    }

    /**
     * Update user
     * @param $input
     * @return mixed
     */
    public function updateUser($input) {
        $sql = 'UPDATE users SET 
                 name = "' . mysqli_real_escape_string(self::$_connection, $input['name']) .'", 
                 password="'. md5($input['password']) .'"
                WHERE id = ' . $input['id'];

        $user = $this->update($sql);

        return $user;
    }

    /**
     * Insert user
     * @param $input
     * @return mixed
     */
    public function insertUser($input) {
        $sql = "INSERT INTO `app_web1`.`users` (`name`, `password`) VALUES (" .
                "'" . $input['name'] . "', '".md5($input['password'])."')";

        $user = $this->insert($sql);

        return $user;
    }

    /**
     * Search users
     * @param array $params
     * @return array
     */
    public function getUsers($params = []) {
        //Keyword
        if (!empty($params['keyword'])) {
            $sql = 'SELECT * FROM users WHERE name LIKE "%' . $params['keyword'] .'%"';

            //Keep this line to use Sql Injection
            //Don't change
            //Example keyword: abcef%";TRUNCATE banks;##
            $users = self::$_connection->multi_query($sql);

            //Get data
            $users = $this->query($sql);
        } else {
            $sql = 'SELECT * FROM users';
            $users = $this->select($sql);
        }

        return $users;
    }

    function decodeId($id) {
        return base64_decode($id);
    }

    function encodeId($id) {
        return base64_encode($id);
    }
    
    function validateName($name) {
        // Kiểm tra: bắt buộc nhập, chỉ chấp nhận ký tự A-Z, a-z, 0-9, và chiều dài từ 5 đến 15 ký tự
        if (empty($name)) {
            return "Cần nhập tên.";
        }
        if (!preg_match("/^[A-Za-z0-9]{5,15}$/", $name)) {
            return "Tên phải dài từ 5 đến 15 ký tự và chỉ chứa chữ cái và số.";
        }
        return null; // Không có lỗi
    }
    
    // Hàm kiểm tra password
    function validatePassword($password) {
        // Kiểm tra: bắt buộc nhập
        if (empty($password)) {
            return "Cần nhập mật khẩu.";
        }
        
        // Kiểm tra phải có ít nhất một chữ thường
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()])[A-Za-z\d~!@#$%^&*()]{5,15}$/", $password)) {
            return "Mật khẩu từ 5 đến 15 ký tự phải có chữ thường, chữ HOA, số và ký tự đặt biệt";
        }
        //                      /^  (?=.*[a-z]) (?=.*[A-Z]) (?=.*\d) (?=.*[~!@#$%^&*()])  [A-Za-z\d~!@#$%^&*()]  {5,15}  $/
        
        return null; // Không có lỗi
    }
}