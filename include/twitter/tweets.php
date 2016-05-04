<?php
session_start();

if( isset( $_GET['AcademicMX'] ) AND $_GET['AcademicMX'] != '' ):

	require_once('oauth/twitteroauth.php'); //Path to twitteroauth library

	$username = $_GET['AcademicMX'];
	$limit = ( isset( $_GET['3'] ) AND $_GET['3'] != '' ) ? $_GET['3'] : 3;
	$consumerkey = "k7ytUz24wBVTKQedru5C9Gopp";
	$consumersecret = "JFZqt3oinKU8CszoGT6OSPF9qQQGrdeWj2CSuehuVOPOubgQIF";
	$accesstoken = "715259731783208960-2etgqnNhzLQG34OWWpxDXpebkrPOGww";
	$accesstokensecret = "CpwoxTs8CxPJvNtPXwwGYlczwKT3kF9ZgGKLdAKA5MYBo";

	function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
	  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
	  return $connection;
	}

	$interval = 600;

	$cache_file = dirname(__FILE__) . '/cache/' . $username . '_' . $limit;

	if (file_exists($cache_file)) {
		$last = filemtime($cache_file);
	} else { $last = false; }

	$now = time();

	if ( !$last || (( $now - $last ) > $interval) ) {

		$context = stream_context_create(array(
			'http' => array(
				'timeout' => 3
			)
		));

		$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
		$twitter_feed = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$username."&count=".$limit);

		$cache_rss = serialize($twitter_feed);

		if (!empty($cache_rss)) {
			$cache_static = fopen($cache_file, 'wb');
			fwrite($cache_static, $cache_rss);
			fclose($cache_static);
		}

		$rss = @unserialize(file_get_contents($cache_file));
	} else {
		$rss = @unserialize(file_get_contents($cache_file));
	}

	echo json_encode($rss);

endif;

?>