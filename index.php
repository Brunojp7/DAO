<?php 

require_once("config.php");

//Carrega um usuario

// $root = new Usuario();
// $root->loadById(1);
// echo $root;

//Carrega uma lista de usuarios

// $lista = Usuario::getList();
// echo json_encode($lista);


//Carrega uma lista de usuarios buscando pelo usuario

// $user = "admin";
// $search = Usuario::search($user);
// echo json_encode($search);

//Carrega um usu[ario usando o login e a senha

// $usuario = new Usuario();
// $usuario->login("bruno","4321");
// echo $usuario;


//Insert de novo usuario

// $newuser = new Usuario("Aluno7", "4lun07");
// $newuser->insert();
// echo $newuser;

//Atualizando um usuario

// $usuario = new Usuario();
// $usuario->loadById(7);
// $usuario->update("AlunoUpdate","asdasd");
// echo $usuario;

//Deletando um usuario

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario . "<br> Usuario deletado";

?>

