<?php
header('content-type: application/json');
if (!isset($_SERVER['HTTP_REFERER'])) {
    http_response_code(400);
    die(json_encode(["errors" => [["code" => 400, 'message' => 'BadRequest']]]));
} else {
    die(json_encode(array("previousPageCursor" => null,"nextPageCursor" => null,"data" => array())));
}
?>
