<?php

    require_once 'Model.php';

    class User extends Model {

        protected static $table = 'users';

        public function save()
        {
            self::dbConnect();
            // ensure attributes array contains stuff before saving
            if (isset($this->attributes)) {
                if (isset($this->attributes['id'])) {
                    $this->update();
                } else {
                    $this->insert();
                }
            }

        }

        public function update()
        {

        }

        public function insert()
        {
            $query = 'INSERT INTO users (first_name, last_name) VALUES (:first, :last)';
            $stmt = self::$dbc->prepare($query);
            $stmt->bindValue(':first', $this->attributes['first_name'], PDO::PARAM_STR);
            $stmt->bindValue(':last', $this->attributes['last_name'], PDO::PARAM_STR);
            $stmt->execute();
        }

        public function delete()
        {
            $query = 'DELETE FROM users WHERE id = :id';
            $stmt = self::$dbc->prepare($query);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        }
        public static function find($id)
        {
            self::dbConnect();
            $query = 'SELECT * FROM users WHERE id = :id';
            $stmt = self::$dbc->prepare($query);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $instance = null;
            if ($result) {
                $instance = new static;
                $instance->attributes = $result;
            }
            return $instance;
        }

        // Get all rows from the users table
        public static function all()
        {
            // Connect to the DB
            self::dbConnect();

            // Get all rows
            $stmt = self::$dbc->query('SELECT * FROM users');

            // Assign results to a variable
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $instance = null;
            if ($result) {
                $instance = new static;
                $instance->attributes = $result;
            }
            return $instance;
        }

    }

?>