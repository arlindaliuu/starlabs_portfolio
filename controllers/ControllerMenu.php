<?php
require_once ('./config/database.php');

    //Controller Class.
    class ControllerMenu
    {
        public $db;

        //Constructor.
        public function __construct()
        {
            $this->db = new Database;
        }

        //CRUD OPERATIONS 

        //Contact form 

        //Create 
        public function insertContactForm($request){
            $query = $this->db->pdo->prepare('INSERT INTO contact (Emri, Mbiemri, Email, NumriTel, Mesazhi) VALUES (:Emri, :Mbiemri, :Email, :NumriTel, :Mesazhi)');
            $query->bindParam(':Emri', $request['emri']);
            $query->bindParam(':Mbiemri', $request['mbiemri']);
            $query->bindParam(':Email', $request['email']);
            $query->bindParam(':NumriTel', $request['numri']);
            $query->bindParam(':Mesazhi', $request['mesazhi']);

            $query->execute();
            
        }

        //Read
        public function getUser()
        {
            $admins = $this->db->pdo->query('SELECT * FROM user');
            return $admins->fetchAll();
        }

        //Fetching user data
        public function editUser($id)
        {
            $query = $this->db->pdo->prepare('SELECT * from user Where id = :id');
            $query->bindParam(':id', $id);
            $query->execute();
            return $query->fetch();
        }

        //Update
        public function update($request, $id)
        {
            $query = $this->db->pdo->prepare('UPDATE user SET Emri = :Emri, Mbiemri = :Mbiemri, Email = :Email, Mosha = :Mosha, Bio = :Bio, Roli = :Roli, RethMeje = :RethMeje WHERE ID = :id');
            $query->bindParam(':Emri', $request['emri']);
            $query->bindParam(':Mbiemri', $request['mbiemri']);
            $query->bindParam(':Email', $request['email']);
            $query->bindParam(':Mosha', $request['mosha']);
            $query->bindParam(':Bio', $request['bio']);
            $query->bindParam(':Roli', $request['roli']);
            $query->bindParam(':RethMeje', $request['rethmeje']);
            $query->bindParam(':id', $id);
            $query->execute();
            return header('Location: ./dashboard.php');
        }

        //Delete
        public function delete($id)
        {
            $query = $this->db->pdo->prepare('DELETE from user where id = :id');
            $query->bindParam(':id', $id);
            $query->execute();
            return header('Location: ./dashboard.php');
        }

        //Validate admin credentials
        function validateData($email, $password)
        {
    
    
            $allUsers = $this->db->pdo->query("SELECT Email, Password, Roli FROM user where '$email' = Email and '$password' = Password");
            foreach ($allUsers as $user) {
                if ($user['Email'] == $email && $user['Password'] == $password) {
                    $_SESSION['Roli'] = $user['Roli'];
                    $_SESSION['email'] = $user['Email'];
                    return true;
                }
            }
            return false;
        }
    }

?>