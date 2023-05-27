<?php
include("./banco.php");
// session_start();

class Cliente extends Banco { //pegar metodos de banco e copiar
    public $nome;
    public $cpf;

    public $valorEmprestimoAtivo;

    private $possui_emprestimo = false;

    public function emprestimo($valor)
    {
        if ($this->possui_emprestimo) {
            echo "<br/>O cliente já possui emprestimo ativo";
        } else {
            $this->possui_emprestimo = true;
            $this->valorEmprestimoAtivo = $valor;
            echo "<br/>Emprestimo de R$" . $valor . ", Realizado com sulcesso. ";
            $this->depositar($valor);
        }
    }

    public function quitar_emprestimo($valor)
    {

        if ($this->possui_emprestimo) {
            if ($this->valorEmprestimoAtivo == $valor) {
                $this->possui_emprestimo = false;
                $this->valorEmprestimoAtivo = 0;
                echo "<br/>Emprestimo de R$" . $valor . ", Quitado com sulcesso. ";
                $this->depositar($valor);
            } else {

                echo "<br/>O valor do emprestimo ativo é de R$" . $this->valorEmprestimoAtivo . ",tente novamente. ";
            }

        } else {
            echo "<br/>O cliente não possui emprestimo ativo";
        }

    }
}


?>

