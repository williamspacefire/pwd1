<?php
/**
* 
*    Classe simples de Salt para deixar senhas mais seguras
* 
*    Copyright (C) 2015  Spacefire, inc.
*
*    This program is free software; you can redistribute it and/or modify
*    it under the terms of the GNU General Public License as published by
*    the Free Software Foundation; either version 2 of the License, or
*    (at your option) any later version.
*
*    This program is distributed in the hope that it will be useful,
*    but WITHOUT ANY WARRANTY; without even the implied warranty of
*    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*    GNU General Public License for more details.
*
*    You should have received a copy of the GNU General Public License along
*    with this program; if not, write to the Free Software Foundation, Inc.,
*    51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*
* @copyright    Spacefire, inc.
* @author       William Spacefire
* @category     Criptografia
* @version      2.0
*/
class pwd1{
	/**
	* Constante de caracteres aleatórios para
	* fortalecer a Senha
	*
	* Escolha uma senha com caracteres aleatórios
	* e coloque em KEY, isso será a chave para
	* criptografar as senhas, quanto maior melhor ;)
	*/
	const KEY = "escolha uma senha e coloque aqui";
	/**
	* Executa a Criptografia da senha
	* passada pelo parametro $pass
	*
	* @return string
	* @param string $pass
	*/
	public static function encrypt($pass = null){
		$x = self::ArraytoOrd(self::StrtoArray(sha1(sha1($pass.sha1(self::KEY)))));
		$y = self::ArraytoOrd(self::StrtoArray(sha1(sha1(self::KEY).sha1(self::KEY))));
		$z = "";
		for($i=0;$i<=39;$i++){
			$z .= ($x[$i]*$y[$i]);
		}
		$z = md5($z);
		$z = self::StrtoArray($z);
		$for = 1;
		$encrypted = "";
		for($i=0;$i<count($z);$i++){
			if($for===4){
				if($i != (count($z)-1)){
					$encrypted .= $z[$i]."::";
				}
				$for = 1;
			}else{
				$encrypted .= $z[$i];
				$for++;
			}
		}
		return $encrypted;
	}
	/**
	* Coloca cada caractere em uma Array
	*
	* @param string $hash
	* @return array
	*/
	private static function StrtoArray($hash){
		$toArray = [];
		for($i=0;$i<strlen($hash);$i++){
			$toArray[$i] = substr($hash, $i,1);
		}
		return $toArray;
	}
	/**
	* Coloca cada caractere em uma Array
	* com o numero da tabela ASCII correspondente
	* a ele
	*
	* @param array $array
	* @return array
	*/
	private static function ArraytoOrd($array){
		$toOrd = [];
		for($i=0;$i<count($array);$i++){
			$toOrd[$i] = ord($array[$i]);
		}
		return $toOrd;
	}
}
?>
