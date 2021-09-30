<?php
    class ClearPar{

      

        static function build($str)
		{
			$anterior = ')';
			$retorno = '';

			for ($i=0; $i<strlen($str); $i++) {
				if ($anterior == ')' && $str[$i]=='(') {
					$anterior = '(';
				} else if ($anterior == '(' && $str[$i]==')') {
					$retorno .= '()';
					$anterior = ')';
				}
			}

			return $retorno;
		}
    }
    echo ClearPar::build(')(()()()()()(()()');

?>