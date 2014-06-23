<?php

include 'common.php';


echo '역)발행요청 거부 테스트'.chr(10).'처리결과 : ' ;


$result = $TaxinvoiceService->Refuse('1231212312',MgtKeyType_SELL,'123123','역)발행요청 거부 메모','userid');
echo '['.$result->code.'] '.$result->message;

echo chr(10);
?>