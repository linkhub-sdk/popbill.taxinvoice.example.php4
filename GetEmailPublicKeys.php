<?php

include 'common.php';


echo 'ASP사업자 유통메일 목록 확인 테스트'.chr(10).'처리결과 : ' ;

$result = $TaxinvoiceService->GetEmailPublicKeys('1231212312');
if(is_a($result,'PopbillException')) {
	echo '['.$result->code.'] '.$result->message;
}
else {

	echo chr(10);
	var_dump($result);
	
}
echo chr(10);
?>