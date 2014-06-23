<?php

include 'common.php';

echo '발행예정 공급받는자 승인 테스트'.chr(10).'처리결과 : ' ;

$result = $TaxinvoiceService->Accept('1231212312',MgtKeyType_SELL,'123123','발행예정 승인 메모','userid');
echo '['.$result->code.'] '.$result->message;

echo chr(10);
?>
