<?php

require_once __DIR__.'/inc_application.php';

if(!isset($_SESSION['myusername'])){
    header("location:login.php");
}

if (
    !isset($_POST['submit'])
    || empty($_POST['urls'])
) {

 header('location: annotate.php');
 exit;
}




$urlsString = trim($_POST['urls']);
$fileLocation = APP_DIR.'/downloads/';
$urlArray = explode(',',$urlsString);
$currentTimeStamp = time();
$currentDateTime = date('Y-m-d H:i:s');
$arrContextOptions = array(
    'http' => array('ignore_errors' => true),
    "ssl" => array(
        "verify_peer" => false,
        "verify_peer_name" => false,
    ),
);

$processedList = array();
foreach($urlArray as $url){
    $status = false;
    $preparedFileName = '';

    try{
        $url = trim($url);
        $preparedUrl = 'https://tag.ontotext.com/ces-en/extract?url='.$url;
        $preparedFileName = basename($url).'_'.$currentTimeStamp.'.json';
        $preparedFileLocation = $fileLocation.'/'.$preparedFileName;
        $response = file_get_contents($preparedUrl, false, stream_context_create($arrContextOptions));
        file_put_contents($preparedFileLocation,$response);
        $status = true;
    }catch (\Exception $exception){}
    $tbl_name = 'annotations';
    $sql = "INSERT INTO $tbl_name(url,status,file_name,created_at) VALUES ('$url','$status','$preparedFileName','$currentDateTime')";
    mysqli_query($conn,$sql);

    $processedList[] = array(
        'url' => $url,
        'status' => $status,
        'filename' => $preparedFileName,
    );

}


?>

<table border="1">
    <thead>
        <tr>
            <th>URL</th>
            <th>Status</th>
            <th>JSON filename</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($processedList as $item){ ?>
    <tr>
        <td><?php echo $item['url']?></td>
        <td><?php echo $item['status']?'Success':'Fail'?></td>
        <td><?php echo $item['filename']?></td>
    </tr>
    <?php } ?>
    </tbody>
</table>