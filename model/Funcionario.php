<?php
class Funcionario{

private $idcadastro;
private $nomeFuncionario;
private $contato;
private $email;
private $senha;
private $cpf;
private $dtNasc;
private $perfil;

function getIdcadastro(){
    return $this->idcadastro;

}
function setIdcadastro($idcadastro){
    $this->idcadastro = $idcadastro;
}
function getNomeFuncionario(){
    return $this->nomeFuncionario;

}
function setNomeFuncionario($nomeFuncionario){
    $this->nomeFuncionario = $nomeFuncionario;
}

function getContato(){
    return $this->contato;

}
function setContato($contato){
    $this->contato = $contato;
}

function getEmail(){
    return $this->email;

}
function setEmail($email){
    $this->email = $email;
}


function getSenha(){
    return $this->senha;

}
function setSenha($senha){
    $this->senha = $senha;
}
function getCpf(){
    return $this->cpf;

}
function setCpf($cpf){
    $this->cpf = $cpf;
}
function getDtNasc(){
    return $this->dtNasc;

}
function setDtNasc($dtNasc){
    $this->dtNasc= $dtNasc;
}



public function getPerfil()
{
return $this->perfil;
}
 
public function setPerfil($perfil)
{
$this->perfil = $perfil;

return $this;
}
}
