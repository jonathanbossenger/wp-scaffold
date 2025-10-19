<?php

if ( ! class_exists( 'WP_CLI' ) ) {
    return;
}

// Register the 'scaffold hello' command
WP_CLI::add_command( 'scaffold hello', 'WP_Scaffold\HelloCommand' );
