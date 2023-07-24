<?php
    function cariAdmin($role){
        global $conn;

        $query = $conn->prepare("SELECT * FROM users where role = :role");
        $query->execute(array(
            'role' => $role
        ));
        return $query->fetchAll();
    }

    function addAdmin($username, $password, $no_telp){
        global $conn;

        $query = $conn->prepare("INSERT INTO users (username, password, no_telp, role) VALUES (:username , :password , :no_telp , :role)");
        $query->execute(array(
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'username' => $username,
            'no_telp' => $no_telp,
            'role' => "Admin"));
        return header("location: ../manage-admin.php");
    }

    function akunAdminbyId($id){
        global $conn;

        $query = $conn->prepare("SELECT * FROM users where id = :id");
        $query->execute(array(
            'id' => $id
        ));
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    
    function updateAdmin($id,$username,$no_telpon){
        global $conn;

        $query = $conn->prepare("UPDATE users SET  username = :username, no_telp= :no_telp WHERE id = :id");
        return $query->execute(array(
            'id' => $id,
            'username' => $username,
            'no_telp' => $no_telpon));
    }

    function hapusAdmin($id){
        global $conn;
        $query = $conn->prepare("DELETE FROM users WHERE id = :id");
        
        return $query->execute(array(
                                'id' => $id));
    }

    function akunAdminbyUser($username){
        global $conn;

        $query = $conn->prepare("SELECT * FROM users where username = :username");
        $query->execute(array(
            'username' => $username
        ));
        return $query->fetch(PDO::FETCH_ASSOC);
    }
?>