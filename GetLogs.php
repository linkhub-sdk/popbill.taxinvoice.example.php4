<?php

include 'common.php';


echo '세금계산서 문서이력 확인 테스트'.chr(10).'처리결과 : ' ;


$result = $TaxinvoiceService->GetLogs('1231212312',MgtKeyType_SELL,'123123');
if(is_a($result,'PopbillException')) {
	echo '['.$result->code.'] '.$result->message;
}
else {

	echo chr(10);
	var_dump($result);
	
}
echo chr(10);
?>