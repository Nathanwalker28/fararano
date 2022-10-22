<?php

namespace Models;

require_once('libraries/autoload.php');

class Users extends Model
{

    /**
     * insertion des utilisateurs dans la base de données
     *
     * @param  objet $user
     * @return void
     */
    public function insert($user)
    {
        $req = $this->pdo->prepare("INSERT INTO 
        users(name, firstname, phone, adress, email, password, role)
        VALUES (:name, :firstname, :phone, :adress, :email, :password, :role)");
    
        $req->bindValue('name', $user->getName());
        $req->bindValue('firstname', $user->getFirstname());
        $req->bindValue('phone', $user->getPhone());
        $req->bindValue('adress', $user->getAdress());
        $req->bindValue('email', $user->getEmail());
        $req->bindValue('password', $user->getPassword());
        $req->bindValue('role', $user->getRole());
    
        $req->execute();
    }


    /**
     * récuperation de tous les utilisateurs
     */
    public function findAll()
    {
        $query = $this->pdo->prepare("SELECT * FROM users");
        $users = $query->fetchAll();

        return $users;
    }

    /**
     * recuperer un utilisateur grâce à son identifiant
     *
     * @param  int $id
     * @return array
     */
    public function find($id)
    {

        $query = $this->pdo->prepare('SELECT * FROM users WHERE id = :id');
        $query->execute(['id' => $id]);

        $user = $query->fetch();
        return $user;
    }

    /**
     * supprime un utilisateur avec son identifiant
     *
     * @param  int $id
     * @return void
     */
    public function delete($id)
    {
        $query = $this->pdo->prepare('DELETE FROM users WHERE id = :id');
        $query->execute(['id' => $id]);
    }

    public function checkUser($username)
    {
        $req= $this->pdo->prepare("SELECT * FROM users WHERE name = :name OR email = :email");
        $req->bindValue(':name', $username);
        $req->bindValue(':email', $username);
        $req->execute();

        return $req->fetch();
    }

    
}
