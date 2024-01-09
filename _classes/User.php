<?php

class User
{
    public $id;
    public $email;
    public $name;
    private $password;

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    static function getAll()
    {
        global $db;
        $result = $db->query("SELECT * FROM users");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function edit()
    {
        global $db;
        return $db->query("UPDATE users SET email = '$this->email', name = '$this->name' WHERE id = '$this->id'");
    }


    static function login($email, $password)
    {
        global $db;
        $stmt = $db->prepare("SELECT id, name, password, role FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($userId, $name, $hashedPass, $role);
        $stmt->fetch();
        $stmt->close();

        if (password_verify($password, $hashedPass)) {
            $_SESSION["id"] = $userId;
            $_SESSION["name"] = $name;
            $_SESSION["role"] = $role;

            if ($role == 'admin') {
                header("Location: index.php?page=dashboard");
                exit;
            } else {
                header("Location: index.php?page=home");
                exit;
            }
        } else {
            echo  password_hash("123", PASSWORD_DEFAULT);
            echo "Invalid email or password121.";
        }
    }

    public function register()
    {
        global $db;

        // Check if email already exists
        $stmt = $db->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $this->email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "Email already exists.";
            return false;
        }

        // Check total number of users to determine the role
        $result = $db->query("SELECT COUNT(*) as total FROM users");
        $row = $result->fetch_assoc();
        $totalUsers = $row['total'];

        if ($totalUsers === '0') {
            $role = 'admin';
        } else {
            $role = 'auteur';
        }

        // Hash the password
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);

        // Prepare the SQL query for inserting a new user
        $stmt = $db->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $this->name, $this->email, $hashedPassword, $role);

        if ($stmt->execute()) {
            return true;
        } else {
            echo "Error: " . $stmt->error;
            return false;
        }
    }


}