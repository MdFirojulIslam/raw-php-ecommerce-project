<?php
include 'db.php';

class Shop 
{
    public function readAll($limit, $offset)
    {
        $sql = "SELECT * FROM product_details LIMIT :limit OFFSET :offset";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function countAll()
    {
        $sql = "SELECT COUNT(*) as count FROM product_details";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'];
    }

    public function cart($id)
    {
        $sql = "SELECT * FROM product_details WHERE product_details.product_id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function searchProducts($searchTerm, $limit, $offset)
    {
        $sql = "SELECT * FROM product_details WHERE product_name LIKE :searchTerm OR product_details LIKE :searchTerm LIMIT :limit OFFSET :offset";
        $stmt = DB::prepare($sql);
        $searchTerm = "%" . $searchTerm . "%";
        $stmt->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function countSearchProducts($searchTerm)
    {
        $sql = "SELECT COUNT(*) as count FROM product_details WHERE product_name LIKE :searchTerm OR product_details LIKE :searchTerm";
        $stmt = DB::prepare($sql);
        $searchTerm = "%" . $searchTerm . "%";
        $stmt->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'];
    }

    public function login($email, $password)
    {
        try {
            $stmt = DB::prepare("SELECT * FROM users WHERE email = :email");
            $stmt->bindValue(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            $fetch_pass = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($fetch_pass && password_verify($password, $fetch_pass['password'])) 
            {
                header("Location: index.php");
                exit(); 
            } 
            else 
            {
                echo "<script>alert('Invalid email or password');</script>";
            }
        } 
        catch (PDOException $e) 
        {
            echo "<script>alert('Database error: " . $e->getMessage() . "');</script>";
        }
    }

    public function register($username, $email, $password, $confirmPassword, $address, $image)
    {
        if ($password !== $confirmPassword) {
            echo "<script>alert('Passwords do not match');</script>";
            return;
        }

        $hashPassword = password_hash($password, PASSWORD_DEFAULT);

        // Handle file upload
        $fileName = $image['name'];
        $imageTemp = $image['tmp_name'];
        $imgDestination = "photos/" . $fileName;

        if (move_uploaded_file($imageTemp, $imgDestination)) {
            try {
                $stmt = DB::prepare("INSERT INTO users (username, email, password, address, image) VALUES (:username, :email, :password, :address, :image)");
                $stmt->bindValue(':username', $username, PDO::PARAM_STR);
                $stmt->bindValue(':email', $email, PDO::PARAM_STR);
                $stmt->bindValue(':password', $hashPassword, PDO::PARAM_STR);
                $stmt->bindValue(':address', $address, PDO::PARAM_STR);
                $stmt->bindValue(':image', $fileName, PDO::PARAM_STR);

                if ($stmt->execute()) {
                    header("Location: index.php");
                    exit();
                } else {
                    echo "<script>alert('Failed to register user');</script>";
                }
            } catch (PDOException $e) {
                echo "<script>alert('Database error: " . $e->getMessage() . "');</script>";
            }
        } else {
            echo "<script>alert('Failed to upload image');</script>";
        }
    }
    public function getUserProfile() {
        // Replace this with actual user data retrieval logic
        if (isset($_SESSION['user_id'])) {
            $userId = $_SESSION['user_id'];
            // Replace with your actual database connection and query
            $stmt = DB::prepare("SELECT username, email, image FROM users WHERE id = :id");
            $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        return null;
    }
}
?>
