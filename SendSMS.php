<?php

include 'common.php';


echo '알림문자 전송 테스트'.chr(10).'처리결과 : ' ;

$result = $TaxinvoiceService->SendSMS('1231212312',MgtKeyType_SELL,'123123','07075106766','01011112222','문자내용','userid');
echo '['.$result->code.'] '.$result->message;

echo chr(10);
?>