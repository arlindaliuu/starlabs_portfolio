<?php
require_once ('./config/database.php');
    class ControllerMenu
    {
        public $db;

        public function __construct()
        {
            $this->db = new Database;
        }
        public function insertContactForm($request){
            $query = $this->db->pdo->prepare('INSERT INTO contact (Emri, Mbiemri, Email, NumriTel, Mesazhi) VALUES (:Emri, :Mbiemri, :Email, :NumriTel, :Mesazhi)');
            $query->bindParam(':Emri', $request['emri']);
            $query->bindParam(':Mbiemri', $request['mbiemri']);
            $query->bindParam(':Email', $request['email']);
            $query->bindParam(':NumriTel', $request['numri']);
            $query->bindParam(':Mesazhi', $request['mesazhi']);

            $query->execute();
            
        }
        public function getUser()
        {
            $admins = $this->db->pdo->query('SELECT * FROM user');
            return $admins->fetchAll();
        }
        public function editUser($id)
        {
            $query = $this->db->pdo->prepare('SELECT * from user Where id = :id');
            $query->bindParam(':id', $id);
            $query->execute();
            return $query->fetch();
        }
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
        public function delete($id)
        {
            $query = $this->db->pdo->prepare('DELETE from user where id = :id');
            $query->bindParam(':id', $id);
            $query->execute();
            return header('Location: ./dashboard.php');
        }
    }

?>