<?php

$result = array();
$github_file_url = "https://github.com/ID1804/hng-backend-stage-one/blob/main/api.php";
$github_repo_url = "https://github.com/ID1804/hng-backend-stage-one/tree/main";
$utc_time = gmdate("Y-m-d\TH:i:s\Z");
$current_day = date("l");

if(isset($_GET["slack_name"], $_GET["track"])) {
	extract($_GET);
} else {
	$slack_name = "Slack Name";
	$track = "Track";
}

$result["slack_name"] = $slack_name;
$result["current_day"] = $current_day;
$result["utc_time"] = $utc_time;
$result["track"] = $track;
$result["github_file_url"] = $github_file_url;
$result["github_repo_url"] = $github_repo_url;
$result["status_code"] = 200;

echo json_encode($result);
//echo $result;

?>
