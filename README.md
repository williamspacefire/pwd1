# PWD1 - Classe de Salt em PHP
PWD1 é uma classe php criada para deixar a senha mais segura, usando uma chave definida por você para gerar as hash, assim a hash da senha gerada será diferente para cada chave definida por você

# Configuração
Primeiro abra a classe e atribua uma chave digitando caracteres aleatórios, não tem limite de caracteres
para a constante KEY.
```php
const KEY = "inclua caracteres aleatórios aqui";
```

# Exemplo de Uso

### 1) Exemplo 1
```php
include("pwd1.class.php");
$senha = pwd1::encrypt(md5("Aqui fica a senha"));
```

### 2) Exemplo 2

Execute o código abaixo para fazer os testes
```php
<?php
include("pwd1.class.php");
$senha = $_GET["pass"];
echo pwd1::encrypt(md5($senha));
?>
```
