<?php

namespace App\Controller;

use App\Class\User;
use App\Interface\ControllerInterface;
use Ramsey\Uuid\Uuid;

class UserController implements ControllerInterface
{
    public function index(){
        return "Datos del usuario";
    }
    public function show($id){
        return "Datos del usuario $id";
    }
    public function store(){
        var_dump($_POST);
        $usuario = new User(Uuid::uuid4(),$_POST['username']);
        $usuario->setPassword($_POST['password'])->setEmail($_POST['email']);
        var_dump($usuario);
    }
    public function update($id){

    }
    public function destroy($id){

    }

}