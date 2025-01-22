<?php
namespace KPO\Models;

class UserModel extends Model {
    public function get(int $id = 0, string $username = '', string $email = '', bool $active = true, bool $deleted = false) :array {
        $query = 'SELECT `id`, `username`, `email`, `password`, `administrator`, `active`, `created_at`, `updated_at` 
                  FROM `users`
                  WHERE `active` = :active 
                    AND `deleted` = :deleted';

        $query_params = [
            ':active' => $active,
            ':deleted' => $deleted
        ];

        if ($id > 0) {
            $query .= ' AND `id` = :id';
            $query_params [':id'] = $id;
        }

        if (!empty($username)) {
            $query .= ' AND `username` = :username';
            $query_params [':username'] = $username;
        }

        if (!empty($email)) {
            $query .= ' AND `email` = :email';
            $query_params [':email'] = $email;
        }

        $statement = $this->db->prepare($query);
        $statement->execute($query_params);
        $result = $statement->fetchAll();

        return !empty($result) && ($id > 0 || !empty($username) || !empty($email)) ? $result[0] : $result;
    }

    public function create(array $data) :bool {
        $query = 'INSERT INTO `users` (`username`, `email`, `password`, `administrator`, `active`)
                  VALUES (:username, :email, :password, :administrator, :active)';

        $query_params = [
            ':username' => $data['username'],
            ':email' => $data['email'],
            ':password' => $data['password'],
            ':administrator' => $data['administrator'],
            ':active' => $data['active']
        ];

        return $this->db->prepare($query)->execute($query_params);
    }

    public function update(int $id, array $data) :bool {
        $query = 'UPDATE `users` SET `username` = :username, `email` = :email, `password` = :password, 
                                     `administrator` = :administrator, `active` = :active, `deleted` = :deleted
                  WHERE `id` = :id';

        $query_params = [
            ':username' => $data['username'],
            ':email' => $data['email'],
            ':password' => $data['password'],
            ':administrator' => $data['administrator'],
            ':active' => $data['active'],
            ':deleted' => $data['deleted'],
            ':id' => $id
        ];

        return $this->db->prepare($query)->execute($query_params);
    }
}