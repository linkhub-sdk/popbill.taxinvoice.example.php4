<?php

include 'common.php';

echo '세금계산서 요약정보 대량 확인 테스트'.chr(10).'처리결과 : ' ;

$MgtKeyList = array(
		'123123',
		'123123123',
		'123123123123',
		'1',
		'2'
);

$result = $TaxinvoiceService->GetInfos('1231212312',MgtKeyType_SELL,$MgtKeyList);
if(is_a($result,'PopbillException')) {
	echo '['.$result->code.'] '.$result->message;
}
else {

	echo chr(10);
	var_dump($result);
	
}
echo chr(10);
?>