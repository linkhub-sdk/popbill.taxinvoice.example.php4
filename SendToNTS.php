<?php

include 'common.php';


echo '국세청 전송 요청 테스트'.chr(10).'처리결과 : ' ;

$result = $TaxinvoiceService->SendToNTS('1231212312',MgtKeyType_SELL,'123123','userid');
echo '['.$result->code.'] '.$result->message;

echo chr(10);
?>