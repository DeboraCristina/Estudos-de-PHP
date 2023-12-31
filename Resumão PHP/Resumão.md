# Resumão php

- Variaveis e Constantes;
- Tipos e Converção de Tipos;
- Strings e Manipulação de Strings;
- Operações e Funções Aritiméticas;
- Operadores condicionais;
- Tipos de Condicionais;
- Tipos de Loopings;
- Funções;
- Classes e Paradigma OO;

## Variaveis e Constantes;
> - Variaveis
> - Variaveis de Variaveis
> - Constantes

```php
<?php
    const CONSTANTE = "Um contante!";
    $var = "Uma variavel";
    $nome = "fulano";
    $fulano = "aaa";
    $$nome = "beltrano";

    echo "<p>" . CONSTANTE . "</p>";
    echo "<p>$var</p>";
    echo "<p>" . $nome . "</p>";
    echo "<p>" . $fulano . "</p>";
    echo "<p>" . $$nome . "</p>";
```

## Tipos e Converção de Tipos;
> 

```php
<?php
    // bool
    $bool = True;
    var_dump($bool);

    // int
    $int = 5;
    var_dump($int);

    // double
    $double = 5.8;
    var_dump($double);

    // String
    $str = "Olá";
    var_dump($str);

    // array
    $array = [1, 2];
    var_dump($array);
```

## Manipulação de Strings;

```php
<?php
    // Strings aspas simples
    $str = 'Olá, Mundo!';
    echo "<p>$str</p>";

    // Strings aspas duplas
    $world = "World!";
    $str = "Hello, $world";
    echo "<p>$str</p>";

    // Concatenação
    $str_a = 'Olá, ';
    $str_b = 'Mundo!';
    $str_c = $str_a . $str_b;
    echo "<p>$str_c</p>";

    // len
    strlen($str); // Retorna os bytes
    $len = mb_strlen($str); // Retorna a qntdd de caracteres
    echo "<p>Len de \"$str\" é $len</p>";

    // dividir (split)
    $hello_array = explode(" ", $str);
    echo "<p>";
    foreach($hello_array as $msg)
    {
        echo $msg;
    }
    echo "</p>";
```

## Array e estruturas de dados
>

```php
<?php
    // Array simples
    $array = ["a", 'b', c];
    echo $array[0];
    // Array com chave
    // len
    // pop
    // append
    // remover elemento especifico

```

## Operações e Funções Aritiméticas;
> 

```php
<?php
    $conta = 5 + 5;
    echo "<p><strong>Operador +</strong>  <5 + 5 = $conta></p><bt>";
    $conta = 5 - 2;
    echo "<p><strong>Operador -</strong>  <5 - 2 = $conta></p><bt>";
    $conta = 5 * 2;
    echo "<p><strong>Operador *</strong>  <5 * 2 = $conta></p><bt>";
    $conta = 5 ** 2;
    echo "<p><strong>Operador ** ou ^</strong>  <5 ** 2 = $conta></p><bt>";
    $conta = 5 / 2;
    echo "<p><strong>Operador /</strong>  <5 / 2 = $conta></p><bt>";
    $conta = 5 % 2;
    echo "<p><strong>Operador %</strong>  <5 % 2 = $conta></p><bt>";
```

## Operadores condicionais;
> '>='
>
> '<='
>
> '=='
>
> '!='
>
> '===' Exatamente igual, considera valor&tipo
>
> '!==' Exatamente diferente

```php
<?php
    $idade = 27;

    if ($idade == "27")
        echo "Verdadeiro";
    else
        echo "Falso";

    if ($idade === "27")
        echo "Verdadeiro";
    else
        echo "Falso";
```

## Tipos de Condicionais;
> if ... else
>
> switch ... case

```php
    $a = 1;
    $b = 2;

    if ($a)
        echo "<p>Entrou if</p>";
    else
        echo "<p>Entrou else</p>";

    switch ($a)
    {
        case 0:
            echo "<p>caso 0</p>";
        case 1:
            echo "<p>caso 1</p>";
        case 2:
            echo "<p>caso 2</p>";
        case 3:
            echo "<p>caso 3</p>";
    }

```

## Tipos de Loopings;
> for
>
> foreach
>
> while

```php
<?php
    for ($i = 0; $i < 10; $i ++)
    {
        echo "$i, ";
    }
    echo "<br>";

    $a = [1, 2, 3, 4];
    foreach($a as $b)
    {
        echo "$b, ";
    }
    echo "<br>";

    $i = 0;
    while ($i < 10)
    {
        echo "$i, ";
        $i++;
    }
```

## Funções;
> Podem ser declaradas em qualquer lugar do código

```php
<?php
    // função simples
    funcao_simples(4);
    function funcao_simples ($num)
    {
        echo "<p>Mostrando o número $num <br></p>";
    }
    funcao_simples(49);

    // função com retorno especificado
    function retorno_especificado(): String
    {
        return "Olá, mundo!";
    }

    echo "<p>" . retorno_especificado() . "</p>";

    // função com parâmetros tipoficados
    function parametros_especificado(int $num_1, int $num_2): int
    {
        return $num_1 + $num_2;
    }
    
    echo "<p>" . parametros_especificado(2, 5) . "</p>";

```

## Classes e Paradigma OO;
> Classe 
> Construtor
> importar classe
> Herança
> Interface
> Polimorfismo
> Pacote

```php
<?php
class Pessoa
{
    private nome;
    private idade;
    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    
    public function mostra_dados()
    {
        echo "<p>Nome: $this->nome</p>"
        echo "<p>Idade: $this->idade</p>"
    }
}

$fulano = new Pessoa("Funano", 20);
$fulano->mostra_dados();
```

## Banco de Dados
>

```php
```
