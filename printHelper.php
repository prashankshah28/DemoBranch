<?php 
function getSuccess($data,$message="Success",$code=200) {
    echo "Hello world!";
    $meta = array();
	     $meta = [
            'status' => true,
            'message' => trans('message.'.$message),
            'message_code' => $message,
            'status_code' => $code
        ];
        //return response()->json(['meta' => $meta, 'data' => !is_array($data) ? [$data] : $data], $code);
        echo  "prashank";
}
?>