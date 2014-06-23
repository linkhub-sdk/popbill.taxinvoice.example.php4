<?php

require_once 'PopbillTaxinvoice/PopbillTaxinvoice.php';

//연동 아이디
$LinkID = 'TESTER';
//발급받은 비밀키. 유출에 주의하시기 바랍니다.
$SecretKey = 'ap8uni5yTdZaO5/TR7yBo8S1zCuIRUQdNTwnkH5tDpk=';

$TaxinvoiceService = new TaxinvoiceService($LinkID,$SecretKey);

//테스트모드로 설정되면 test.popbill.com으로 연결됩니다.
//작업을 완료한 후에는 테스트모드설정을 해제하여 사용합니다. ex)아래 라인 주석처리하거나, false처리.
$TaxinvoiceService->IsTest(true);

?>
