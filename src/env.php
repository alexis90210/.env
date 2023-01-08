<?php 

namespace Hisoka\Env;

class Data
{
    static $envLine;

    static $envs = [];

    static $filename = '.env';

    /**
     * @description Will create the file if not exists
     * @return object
     * @param string $filename (optionnal) default : .env
     */
    
    static function getEnv( string $filename = '.env' ) : object {

        $working_file = $filename ?? self::$filename;

        if ( !is_file( $working_file ))  file_put_contents( $working_file ,'');
        
        self::$envLine = file( $working_file );        
        
        foreach ( self::$envLine as $key => $env) {
    
            if ( !empty( trim($env) ) ) {
                $option = explode("=", $env);
                
                if ( count( $option ) > 0 ) {
                    self::$envs = array_merge( self::$envs , [
                        trim( $option[0] ) => trim( $option[1] )
                    ]);
                }
            }
                    
        }        

        return (object) self::$envs;
    }


}