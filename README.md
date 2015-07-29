# PWD1 - Classe de salt em PHP
pwd1 é uma classe php criada para deixar a senha mais segura, usando uma senha criada pelo administrador, assim o salt será diferente para mesma senha para cada um que usar a classe.

O nome pwd vem de password e o 1 é porque é a primeira verão.
<br>
# Configuração
Primeiro abra a classe e atribua uma senha com caracteres aleatórios
para a constante KEY.
<br>const KEY = "inclua caracteres aleatórios aqui";

# Exemplo de Uso
<?php<br>
include("pwd1.class.php");<br>
$senha = pwd1::encrypt(md5("Aqui fica a senha"));<br>
?>
