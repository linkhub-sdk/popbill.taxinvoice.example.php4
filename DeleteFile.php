<?php

include 'common.php';

echo '파일첨부 삭제 테스트'.chr(10).'처리결과 : ' ;

//파일 첨부
$FileID = '4EFBE11A-1C18-44A2-82EC-2C3EBC913FFA.PBF'; //GetFiles 결과중 삭제할 파일의 attachedFile.
	
$result = $TaxinvoiceService->DeleteFile('1231212312',MgtKeyType_SELL,'123123',$FileID,'userid');
echo '['.$result->code.'] '.$result->message;

echo chr(10);

?>
