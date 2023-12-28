# Strings
## Concatenar Strings

```php
echo "Olá, " . "php"
# Saída: Olá, php
```

## Tipos de Strings

- Double quoted
- Simple quoted
- Heredoc
- Nowdoc

### Double vs. Simple Quoted
```php
// doble quoted (aspas duplas)
echo "<p>PHP \u{1F418}</p>"; #indica pro php interpretar os conteudo
// simple quoted (aspas simples)
echo '<p>PHP \u{1F418}</p>'; #indica pro php não interpretar os conteudo

// Variaveis
$nome = "Fulano";
echo "<p>Olá, $nome</p>";
echo '<p>Olá, $nome</p>';
//Constantes
const MENSAGEM = "Mundo";
echo "<p>Olá, " . MENSAGEM . "</p>";
echo '<p>Olá, ' . MENSAGEM . '</p>';
```

**Double Quoted**
Aceita sequências de escape.
> \n
> \\
> \t

### Heredoc
```php
$nome = "Curso de PHP";
$ano = date("Y");

echo <<< TESTE
    $nome - $ano
Teste de Heredoc.
        O Heredoc é uma String de multiplas linhas.
    Quase não é usado e não faz diferença no HTML
TESTE;
```

### Nowdoc
```php
$nome = "Curso de PHP";
$ano = date("Y");

echo <<< 'TESTE'
    $nome - $ano
Teste de Nowdoc.
        O Nowdoc é uma String de multiplas linhas que não interpreta o conteúdo.
    Quase não é usado e não faz diferença no HTML
TESTE;
```