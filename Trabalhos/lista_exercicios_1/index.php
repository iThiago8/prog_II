<?php

spl_autoload_register(function ($classe){
    $arquivo = 'models/' . $classe  . '.php';

    if (file_exists($arquivo)){
        require_once ($arquivo);
    }
});

$p1 = new Produto();

$p1->nome = "salame italiano";
$p1->setValor(54.25);

echo "Nome do produto: $p1->nome <br>Valor do produto: " . $p1->getValor() . "<br><br>";

$cb1 = new ContaBancaria();

$cb1->setSaldo(123);
echo "Saldo da conta bancária 1: " . $cb1->getSaldo() . "<br>";

echo "Serão depositado 27 reais na conta bancária 1<br>";
echo $cb1->depositar(27) . "<br><br>";

echo "Tentativa de depósito de valor negativo (-5)<br>";
echo $cb1->depositar(-5) . "<br><br>";

echo "Tentativa de saque de valor maior do que o disponível (170)<br>";
echo $cb1->sacar(170) . "<br>";

echo "Sacando valor disponível em conta (120)<br>";
echo $cb1->sacar(120) . "<br><br>";

echo "Criando um funcionário<br>";
$g1 = new Gerente();
$g1->nome = "Thiago Pedro Padilha";
echo "Funcionário criado! Nome do funcionário: $g1->nome <br><br>";


$g1->setSalario(2500);
echo "Nome do funcionário: $g1->nome<br>";
echo "Salário do funcionário: " . $g1->getSalario() . " <br><br>";

echo "Criando novo usuário<br>";
$u1 = new Usuario();
$u1->nome_usuario = "pthiago8";
echo "Usuário criado! Nome de usuário: $u1->nome_usuario<br><br>";

$u1->setSenha("senha123");
echo "Verificando a senha atual (senha123) com a senha inserida (senha12)<br>";
echo $u1->verificaSenha("senha12") ? "Senhas conferem!<br><br>" : "Senhas não conferem.<br><br>";

echo "Verificando a senha atual (senha123) com a senha inserida (senha123)<br>";
echo $u1->verificaSenha("senha123") ? "Senhas conferem!<br><br>" : "Senhas não conferem.<br><br>";

$configuracoesIniciais = [
    'config_1' => 'valor da config 1',
    'config_2' => 'valor da config2'
];

$config = new ConfigAvancada($configuracoesIniciais);

$config->exibeParametros();

$novasConfigs = [
    'config_3' => 'valor da config 3'
];

foreach ($novasConfigs as $chave => $valor){
    $config->adicionaParametro($chave, $valor);
}

echo "<br>";

$config->exibeParametros();

echo "<br>";

$p2 = new Produto();
$p2->nome = "Queijo";
$p2->setValor(25);

$pedido1 = new Pedido();
$pedido1->adicionarItem($p1);
$pedido1->adicionarItem($p2);
$pedido1->listarItens();

$c1 = new Cliente();
$c1->nome = 'João da Silva';
echo $c1->nome;


// Por favor tirar os comentários para testar
// Causa erro por ser protegido
//$c1->cpf = '123.456.789-00';
//echo $c1->cpf;

// Causa erro por ser privado
//$c1->telefone = '(49) 99999-8888';
//echo $c1->telefone;

$conexao = new ConexaoDB();
$conexao->conectar();