<?php
function hapus_simbol($result) {
$result = strtolower($result);
    $result = preg_replace('/&amp;.+?;/', '', $result);
    $result = preg_replace('/\s+/', '', $result);
        $result = preg_replace('|%([a-fA-F0-9][a-fA-F0-9])|', '+', $result);
    $result = preg_replace('|-+|', '', $result);
        $result = preg_replace('/&amp;#?[a-z0-9]+;/i','',$result);
        $result = preg_replace('/[^%A-Za-z0-9 _-]/', '', $result);
    $result = trim($result, '');
    return $result;
}

function kgram($teks21,$gram)
{
$length=strlen($teks21);
$teksSplit=null;
if(strlen($teks21) < $gram){
	$teksSplit[]=$teks21;
}else{
	for($i=0;$i<=$length-$gram;$i++){
		$teksSplit[]=substr($teks21,$i,$gram);
		echo"{";
		echo $teksSplit[$i];
	echo "}";
	}
}
}
function kgrams($teks21,$gram)
{
$length=strlen($teks21);
$teksSplit=null;
if(strlen($teks21) < $gram){
	$teksSplit[]=$teks21;
}else{
	for($i=0;$i<=$length-$gram;$i++){
		$teksSplit[]=substr($teks21,$i,$gram);
		echo"{";
		echo $teksSplit[$i];
		
	echo "}";
	}
}
}
function rollingHash($string, $h4nk)
{
	$basis=$h4nk;
	$pjgKarakter=strlen($string);
	{
		$basis=$h4nk;
		$pjgKarakter=strlen($string);
		$hash=0;
		for ($i=0;$i<$pjgKarakter;$i++){
			$ascii=ord($string[$i]);
			$hash+=$ascii*pow($basis,$pjgKarakter-($i+1));
			}
			$a=$pjgKarakter-2;
			$ascii1=ord($string[$a]);
			$c=$pjgKarakter-1;
			$ascii2=ord($string[$c]);
			$b=$ascii1*$basis+($ascii2);
			return $hash + $b;
	}
}
function hasing($teks21,$gram, $h4nk)
{
$length=strlen($teks21);
$teksSplit=null;
if(strlen($teks21) < $gram){
	$teksSplit[]=$teks21;
}else{
	for($i=0;$i<=$length-$gram;$i++){
		$teksSplit[]=substr($teks21,$i,$gram);
		echo"{";
		echo rollingHash($teksSplit[$i], $h4nk);
	echo "}";
	}
}
}

function hapus($a)
{
	$h4nk = $a;
	$fingerPrint=null;
	$sudah = false;
	for($i=0;$i<count($h4nk);$i++){
		if ($fingerPrint!=null){
			foreach ($fingerprint as $row =>$value){
				if ($value ==$h4nk[$i]){
					$sudah=true;
				}
			}
		}
	 }
if ($sudah==false){
	$fingerPrint[]=$h4nk[$i];
	}
	$sudah=false;
	{
	return $fingerPrint
	;
	}
}
function h4nkhapus($teks21,$gram)
{
$length=strlen($teks21);
$teksSplit=null;
if(strlen($teks21) < $gram){
	$teksSplit[]=$teks21;
}else{
	for($i=0;$i<=$length-$gram;$i++){
		$teksSplit[]=substr($teks21,$i,$gram);

		echo $teksSplit[$i];

	}
}
}
function hashx($teks,$gram,$h4nk)
{
	$hashGram=null;
	foreach($gram as $a=>$teks){
		$hashGram[]= rollingHash($teks);
		}
	return $hashGram;
	}
	
	function fingerPrint($hash1,$hash2)
	{
		$fingerPrint=null;
		$hashUdahDicek=null;
		$sama=false;
		$countHash1=count($hash2);
		for ($i=0; $i<count($hash1);$i++){
			for($j=0;$j<$countHash1;$j++){
				if($hash1[$i]==$hash2[$j]){
					$fingerPrint[]=$hash1[$i];
				}
			}
		}
		return $fingerPrint;
	}
?>