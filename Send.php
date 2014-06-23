<?php

include 'common.php';


echo '발행예정 테스트'.chr(10).'처리결과 : ' ;

$result = $TaxinvoiceService->Send('1231212312',MgtKeyType_SELL,'123123','발행예정 메모','userid');
echo '['.$result->code.'] '.$result->message;

echo chr(10);
?>
