<?php
	require_once 'bootstrap.php';
	$phpWord = new \PhpOffice\PhpWord\PhpWord();
	$defFont = 'oneUserDefinedStyle';
	$phpWord->addFontStyle(
		$defFont,
		array('name' => 'Times New Roman', 'size' => 12, 'color' => '000000', 'underline' => 'single')
	);
	$phpWord->setDefaultFontName($defFont);
	$doc = $phpWord->loadTemplate('template.docx'); //шаблон
		
	//принимаем данные
	$cName=$_POST['cName'];
	$cAddr=$_POST['cAddr'];
	$uName=$_POST['uName'];
	$uPhone=$_POST['uPhone'];
	$uAddr=$_POST['uAddr'];
	$cNum=$_POST['cNum'];
	$cPayment=$_POST['cPayment'];
	$cReciever=$_POST['cReciever'];
	$bName=$_POST['bName'];
	$bAcc=$_POST['bAcc'];
	$bID=$_POST['bID'];
	$uAcc=$_POST['uAcc'];
	$pDate=$_POST['pDate'];
	$pBank=$_POST['pBank'];
	$cDate=$_POST['cDate'];

	//вставка в шаблон
	$doc->setValue('cName', $cName);
	$doc->setValue('cAddr', $cAddr);
	$doc->setValue('uName', $uName);
	$doc->setValue('uPhone', $uName);
	$doc->setValue('uAddr', $uAddr);
	$doc->setValue('cNum', $cNum);
	$doc->setValue('cPayment', $cPayment);
	$doc->setValue('cReciever', $cReciever);
	$doc->setValue('bName', $bName);
	$doc->setValue('bAcc', $bAcc);
	$doc->setValue('bID', $bID);
	$doc->setValue('uAcc', $uAcc);
	$doc->setValue('pDate', $pDate);
	$doc->setValue('pBank', $pBank);
	
	if(empty($cDate)) $cDate=date("d.m.y");
	$doc->setValue('cDate', $cDate);
	
	//сохранение копии
	$doc->saveAs('Zayavlenie_na_vozvrat_strakhovki_ekzemplyar.docx');
?>