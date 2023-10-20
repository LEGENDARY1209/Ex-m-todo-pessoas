<?php
Class Pessoa {

    public $nome;
    public $altura;
    public $nascimento;
    public $hobbie;

// Agora abaixo será criado um método para a classe Pessoa, que trabalhará com as propriedades objeto.
// O método terá o nome MostrarPessoa() e basicamente servirá para mostrar os dados do objeto 
// Lembre-se que método age dentro de escopo de classe.

    public function MostrarPessoa(){ 
        echo "Nome: ".$this->nome."<br/>";
        echo "Altura: ".$this->altura."<br/>";
        echo "Nascimento: ".$this->nascimento."<br/>";
        echo "Hobbie: ".$this->hobbie."<br/>";
    }
    //Temos un novo conceito apresentado acina.
    // Trata-se da pseudo-variável $this, que serve basicamente para diferenciar as propriedades do objeto de variáveis locais.
    // Lembre-se, $this referencia o objeto ATUAL acesse suas propriedades.

    }
?>