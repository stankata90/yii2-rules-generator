<?php

    // PSR-4 Autoloading Standard
    spl_autoload_register( function ( $class ) {

        // project-specific namespace prefix
        $prefix = 'Foo\\Bar\\';
        $prefix = '';

        // base directory for the namespace prefix
        $base_dir = __DIR__ . '/src/';
        $base_dir = __DIR__ . '/';

        // does the class use the namespace prefix?
        $len = strlen( $prefix );
        if ( strncmp( $prefix, $class, $len ) !== 0 ) {
            // no, move to the next registered autoloader
            return;
        }

        // get the relative class name
        $relative_class = substr( $class, $len );

        // replace the namespace prefix with the base directory, replace namespace
        // separators with directory separators in the relative class name, append
        // with .php
        $file = $base_dir . str_replace( '\\', '/', $relative_class ) . '.php';

        // if the file exists, require it
        if ( file_exists( $file ) ) {
            require $file;
        }
    } );


    class test
    {
        use \rulesgenerator\RulesGenerator;

        public function Rules()
        {
            $this->rulesGenerator()->boolean( [ 'name' ] );
            $this->rulesGenerator()->compare( [ 'name' ] );
            $this->rulesGenerator()->date( [ 'name' ] );
            $this->rulesGenerator()->datetime( [ 'name' ] );
            $this->rulesGenerator()->time( [ 'name' ] );
            $this->rulesGenerator()->default( [ 'name' ] );
            $this->rulesGenerator()->double( [ 'name' ] );
            $this->rulesGenerator()->double( [ 'name' ] );
            $this->rulesGenerator()->each( [ 'name' ] );
            $this->rulesGenerator()->email( [ 'name' ] );
            $this->rulesGenerator()->exist( [ 'name' ] );
            $this->rulesGenerator()->file( [ 'name' ] );
            $this->rulesGenerator()->filter( [ 'name' ] );
            $this->rulesGenerator()->image( [ 'name' ] );
            $this->rulesGenerator()->in( [ 'name' ] );
            $this->rulesGenerator()->range( [ 'name' ] );
            $this->rulesGenerator()->integer( [ 'name' ] );
            $this->rulesGenerator()->match( [ 'name' ] );
            $this->rulesGenerator()->regularExpression( [ 'name' ] );
            $this->rulesGenerator()->number( [ 'name' ] );
            $this->rulesGenerator()->required( [ 'name' ] );
            $this->rulesGenerator()->safe( [ 'name' ] );
            $this->rulesGenerator()->string( [ 'name' ] );
            $this->rulesGenerator()->trim( [ 'name' ] );
            $this->rulesGenerator()->unique( [ 'name' ] );
            $this->rulesGenerator()->url( [ 'name' ] );
            $this->rulesGenerator()->ip( [ 'name' ] );
            $this->rulesGenerator()->inline( [ 'name' ] );

            return $this->rulesGenerator()->getRules();
        }
    }

    print_r( ( new test() )->Rules() );

