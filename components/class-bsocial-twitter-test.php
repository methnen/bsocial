<?php

class bSocialTwitter_Test extends bSocial
{
	public function __construct()
	{
		add_action( 'wp_ajax_bsocial-test-twitter-api', array( $this, 'bsocial_test_twitter_api_ajax' ) );
		add_action( 'wp_ajax_bsocial-test-post-twitter-api', array( $this, 'bsocial_test_post_twitter_api_ajax' ) );
	}//END __construct

	public function bsocial_test_twitter_api_ajax()
	{
		// permissions check
		if( ! current_user_can( 'activate_plugins' ))
		{
			die( 0 );
		}

		?>
		<h2>Getting user info for <a href="https://twitter.com/misterbisson">@misterbisson</a></h2>
		<pre>print_r( bsocial()->twitter_user_info()->get( 'misterbisson' ) );</pre>
		<pre><?php print_r( bsocial()->twitter_user_info()->get( 'misterbisson' ) ); ?></pre>


		<h2>Getting tweet stream for <a href="https://twitter.com/Gigaom">@gigaom</a></h2>
		<pre>
$twitter_feed = bsocial()->new_twitter_user_stream();
$twitter_feed->stream(
	array(
		'screen_name' => 'gigaom',
		'count' => 2,
	)
);
print_r( $twitter_feed->tweets() );
		</pre>

		<pre><?php
		$twitter_feed = bsocial()->new_twitter_user_stream();
		$twitter_feed->stream(
			array(
				'screen_name' => 'gigaom',
				'count' => 2,
			)
		);
		print_r( $twitter_feed->tweets() );
		?></pre>

		<h2>Searching for tweets matching <a href="https://twitter.com/search?q=gigaom.com%20-from%3Agigaom">gigaom.com -from:gigaom</a></h2>
		<pre>
$twitter_search = bsocial()->new_twitter_search();
$twitter_search->search(
	array(
		'q' => 'gigaom.com%20-from%3Agigaom',
		'count' => 5,
	)
);
print_r( $twitter_search->tweets() );
		</pre>
		<pre><?php
		$twitter_search = bsocial()->new_twitter_search();
		$twitter_search->search(
			array(
				'q' => 'gigaom.com%20-from%3Agigaom',
				'count' => 2,
			)
		);
		print_r( $twitter_search->tweets() );

		?>
<p>
<a href="<?php echo admin_url( 'admin-ajax.php?action=bsocial-test-post-twitter-api', 'https' ); ?>">tweet something</a>
</p>
		</pre>
		<?php
		die;
	}//END bsocial_test_twitter_api_ajax

	/**
	 * tweet something to the current test account. we have to append
	 * a generated string (timestamp) with each tweet since twitter
	 * won't allow consecutively duplicate tweets.
	 */
	public function bsocial_test_post_twitter_api_ajax()
	{
?>
		<h2>Tweet a test update to the authenticated user's account</h2>
<pre>print_r( bsocial()->twitter_user_post_status()->post( 'test from gigaom! ' . date( DATE_RFC2822 ) ) );
<?php print_r( bsocial()->twitter_user_post_status()->post( 'test from gigaom! ' . date( DATE_RFC2822 ) ) ); ?>
</pre>
<?php
		die;
	}//END bsocial_test_post_twitter_api_ajax
}//END class
