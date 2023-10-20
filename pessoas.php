<?php

$pessoas = [
    array("nome" => "Ana Clara Ferreira", "altura" => "1.55", "nascimento" => "21-03-2007", "hobbie" => "Pintar"),
array("nome" => "Ana Clara Maciel", "altura" => "1.50", "nascimento" => "19-01-2007", "hobbie" => "Ler e ouvir música"),
array("nome" => "Ana Zinatto", "altura" => "1.60", "nascimento" => "03-11-2006", "hobbie" => "Treinar/Ouvir música"),
array("nome" => "Beatriz Baccaro", "altura" => "1.60", "nascimento" => "02-08-2006", "hobbie" => "Esporte"),
array("nome" => "Beatriz Mayumi", "altura" => "1.65", "nascimento" => "03-03-2007", "hobbie" => "Ler livros/Jogar viodegame/Ouvir música"),
array("nome" => "Bruno Alves", "altura" => "1.78", "nascimento" => "28-05-2007", "hobbie" => "Tocar instrumentos"),
array("nome" => "Camilly Vitória de Oliveira", "altura" => "1.60", "nascimento" => "22-01-2007", "hobbie" => "Ouvir música/Fazer aula de jazz"),
array("nome" => "Duda", "altura" => "1.65", "nascimento" => "02-04-2007", "hobbie" => "Ver séries e jogar vôlei"),
array("nome" => "Felipe Wilbert", "altura" => "1.78", "nascimento" => "06-12-2006", "hobbie" => "Academia"),
array("nome" => "Gabriel Alves Santos", "altura" => "1.84", "nascimento" => "03-08-2006", "hobbie" => "Jogar videogame/Praticar esportes"),
array("nome" => "Gabriel Credendio", "altura" => "1.70", "nascimento" => "28-07-2006", "hobbie" => "Video game"),
array("nome" => "Gabriel Diaz", "altura" => "1.74", "nascimento" => "21-03-2007", "hobbie" => "Jogar"),
array("nome" => "Giovana Lupo", "altura" => "1.62", "nascimento" => "14-05-2007", "hobbie" => "Pintar"),
array("nome" => "Guilherme Carvalho", "altura" => "1.75", "nascimento" => "09-06-2007", "hobbie" => "Jogar Videogame"),
array("nome" => "Gustavo Otaviano", "altura" => "1.85", "nascimento" => "14-03-2007", "hobbie" => "Esportes"),
array("nome" => "Henrique Nagata", "altura" => "1.58", "nascimento" => "25-10-2006", "hobbie" => "Andar de bicicleta"),
array("nome" => "Henrique Tavares", "altura" => "1.63", "nascimento" => "26-07-2006", "hobbie" => "Jogar/Ouvir música"),
array("nome" => "José Luiz Oliveira Costa", "altura" => "1.71", "nascimento" => "15-09-2006", "hobbie" => "Assistir/Crítica de filme"),
array("nome" => "Júlia Mogi", "altura" => "1.70", "nascimento" => "08-11-2006", "hobbie" => "Cozinhar"),
array("nome" => "Kauan Silva Vieira", "altura" => "1.68", "nascimento" => "02-09-2006", "hobbie" => "Jogar videogame"),
array("nome" => "Kauã Lira", "altura" => "1.63", "nascimento" => "05-01-2007", "hobbie" => "Tocar guitarra"),
array("nome" => "Laura Perez", "altura" => "1.70", "nascimento" => "03-08-2006", "hobbie" => "Ler"),
array("nome" => "Letícia Gabrielle", "altura" => "1.65", "nascimento" => "30-09-2006", "hobbie" => "Ouvir música e assistir série"),
array("nome" => "Luis Gustavo Magela", "altura" => "1.77", "nascimento" => "06-03-2007", "hobbie" => "Dormir e jogar videogame"),
array("nome" => "Miguel Romero", "altura" => "1.70", "nascimento" => "14-04-2007", "hobbie" => "Jogar futebol"),
array("nome" => "Natally Reis", "altura" => "1.60", "nascimento" => "07-01-2007", "hobbie" => "Ouvir música"),
array("nome" => "Pedro Araujo", "altura" => "1.68", "nascimento" => "24-09-2006", "hobbie" => "Jogar videogame/Andar de bike"),
array("nome" => "Pedro Grechi", "altura" => "1.69", "nascimento" => "23-03-2007", "hobbie" => "Jogar/Desenhar"),
array("nome" => "Pedro Santos", "altura" => "1.80", "nascimento" => "24-10-2006", "hobbie" => "Tocar violão"),
array("nome" => "Raí Franca", "altura" => "1.82", "nascimento" => "12-09-2006", "hobbie" => "Esporte/Ouvir música/Jogos eletrônicos"),
array("nome" => "Ryan Silveira", "altura" => "1.72", "nascimento" => "02-09-2006", "hobbie" => "Jogar videogame"),
array("nome" => "Samuel Américo", "altura" => "1.85", "nascimento" => "26-01-2007", "hobbie" => "Tocar Piano"),
array("nome" => "Thell Zardi", "altura" => "1.65", "nascimento" => "31-10-2006", "hobbie" => "Jogar")
   
];

// Função para comparar as pessoas por nome
function compararPorNome($a, $b) {
    return strcmp($a['nome'], $b['nome']);
}

// Ordena o array de pessoas
usort($pessoas, 'compararPorNome');

// Inclua o arquivo com a classe Pessoa
include('classemétodo.php');

// Cria instâncias de Pessoa para cada pessoa no array e exibe as informações
foreach ($pessoas as $pessoaInfo) {
    $pessoa = new Pessoa();
    $pessoa->nome = $pessoaInfo['nome'];
    $pessoa->altura = $pessoaInfo['altura'];
    $pessoa->nascimento = $pessoaInfo['nascimento'];
    $pessoa->hobbie = $pessoaInfo['hobbie'];
    $pessoa->MostrarPessoa();
    echo "<br><br>";
}

?>
