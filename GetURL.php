<?php

include 'common.php';


echo '세금계산서 URL 확인 테스트'.chr(10).'처리결과 : ' ;


$result = $TaxinvoiceService->GetURL('1231212312','userid','SBOX');
if(is_a($result,'PopbillException')) {
	echo '['.$result->code.'] '.$result->message;
}
else {

	echo chr(10);
	echo substr( $result,0,40) . ' ...생략...';
}
echo chr(10);
?>