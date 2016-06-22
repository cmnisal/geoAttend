<?php
/*
**	NC
**	22/06/2016
*/

// Path to move uploaded files
$target_path = "uploads/";
 
// array for final json respone
$response = array();
 
// getting server ip address
$server_ip = gethostbyname(gethostname());
 
// final file url that is being uploaded
$file_upload_url = 'http://' . $server_ip . '/' . 'AndroidFileUpload' . '/' . $target_path;

// array for final json respone
$response = array();

 if (isset($_POST['image'])){
    $post_img = $_POST['image'];
    $img = base64_decode($post_img);
    $imgpath = $target_path  .time() ".jpg";
    file_put_contents($target_path, $img);
    $response =  $imgpath;
}
 
// echo final json response to client
echo json_encode($response);
?>