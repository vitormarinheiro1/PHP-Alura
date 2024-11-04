<?php

// Interface Produto:

// Crie uma interface Produto com o método calcularPreco(). Em seguida, desenvolva duas classes que
// implementam essa interface: Livro e Eletronico. Cada classe deve ter seu próprio método para calcular o
// preço (com ou sem desconto, por exemplo).

// Dica: Utilize a palavra-chave implements para garantir que as classes implementem a interface.

interface Produto
{
    public function calcularPreco(int $preco, int $desconto);
}

class Livro implements Produto
{
    private int $preco;
    private int $desconto;

    public function calcularPreco(int $preco, int $desconto)
    {
        $resultado = $preco - $desconto;
        echo $resultado;
    }
}