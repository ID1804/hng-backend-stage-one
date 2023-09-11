<?php

$result = array();
$github_file_url = "https://github.com/ID1804/hng-backend-stage-one/blob/main/api.php";
$github_repo_url = "https://github.com/ID1804/hng-backend-stage-one";
$utc_time = gmdate("Y-m-d\TH:i:s\Z");
$current_day = date("l");

if(isset($_GET["slack_name"], $_GET["track"])) {
	extract($_GET);
} else {
	$slack_name = "Slack Name";
	$track = "Track";
}

$result = array(
	"slack_name" => $slack_name,
	"current_day" => $current_day,
	"utc_time" => $utc_time,
	"track" => $track,
	"github_file_url" => $github_file_url,
	"github_repo_url" => $github_repo_url,
	"status_code" => 200
);

header("Content-Type: application/json");
echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

?>
