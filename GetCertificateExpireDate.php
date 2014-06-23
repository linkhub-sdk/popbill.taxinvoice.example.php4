<?php

include 'common.php';

echo '등록공인인증서의 만료일 확인 테스트'.chr(10).'처리결과 : ' ;


$result = $TaxinvoiceService->GetCertificateExpireDate('1231212312');
if(is_a($result,'PopbillException')) {
	echo '['.$result->code.'] '.$result->message;
}
else {
	echo $result;
}

echo chr(10);
?>
