<?php
	class Divide extends Caculator{
		function getResult($numA,$numB){
			if($numB==0){
				echo '被除数不能为0！';
			}else{
				$result = $numA / $numB;
				return $result;
			}
			
		}
	}
















?>