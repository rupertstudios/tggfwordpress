<?php

function initCors( $value ) {
  $origin_url = '*';

  // Check if production environment or not
  if (ENVIRONMENT === 'production') {
    $origin_url = 'https://thegreatgrayfunk.com';
  }

  header( 'Access-Control-Allow-Origin: ' . $origin_url );
  header( 'Access-Control-Allow-Methods: GET' );
  header( 'Access-Control-Allow-Credentials: true' );
  return $value;
}

// ... initCors function

add_action( 'rest_api_init', function() {

	remove_filter( 'rest_pre_serve_request', 'rest_send_cors_headers' );

	add_filter( 'rest_pre_serve_request', initCors);
}, 15 );

function initCors( $value ) {
  $origin = get_http_origin();
  $allowed_origins = [ 'site1.example.com', 'site2.example.com', 'localhost:3000' ];

  if ( $origin && in_array( $origin, $allowed_origins ) ) {
    header( 'Access-Control-Allow-Origin: ' . esc_url_raw( $origin ) );
    header( 'Access-Control-Allow-Methods: GET' );
    header( 'Access-Control-Allow-Credentials: true' );
  }

  return $value;
}
