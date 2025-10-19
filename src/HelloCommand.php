<?php

namespace WP_Scaffold;

/**
 * Hello World command for WP CLI.
 */
class HelloCommand {

    /**
     * Prints "Hello World" to the console.
     *
     * ## EXAMPLES
     *
     *     wp scaffold hello
     *
     * @when after_wp_load
     */
    public function __invoke() {
        \WP_CLI::success( 'Hello World' );
    }
}
