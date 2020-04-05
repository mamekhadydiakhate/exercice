<?php

function moy($t1)
{
	$x=count($t1);
	$som=0;
	for ($i=0; $i <$x ; $i++) 
	{ 
		$som=$som+$t1[$i];
	}
	$moy=$som/$x;
	return $moy;
}
function premier($nombre)
{
	$tmp=0;
	for ($i=2; $i <$nombre ; $i++) 
	{ 
		if ($nombre%$i==0) 
		{
			$tmp=1;
		}
	}
	if ($tmp==0) 
	{
		return 1;
	}
	else
		return 0;
}
function caractere ($mots)
	{
		$i=0;
		while (!empty($mots["$i"]))	
		{
	
			$i++;
		}
		return $i;
	}
function taille ($tableau)
	{
		$tmp=0;
		foreach ($mots as $tableau) 
		{
			
		}

	}

?>