<?php

namespace App;

use App\Database\DB;
use App\Database\MeekroDB;
// use App\Database\MeekroDBEval;


class Application{

    public function __construct(){
        $this->loadConfig();

        $this->mount();
    }

    protected function mount(){
        $router = new Router();
        $router->executeUrl();
        

        
    }

    /**
     * check that the .env file exists
     */
    protected function checkConfig(){
        if(!\file_exists(DOT_ENV_FILE)){
            throw new \Exception("you must create a .env file in the root folder");
            
        }
    }

    /**
     * load the .env file
     */

    protected function loadConfig(){

        $this->checkConfig();

        $fp = \fopen(DOT_ENV_FILE, "r");

        if(!$fp) throw new Exception("unable to open .env file");

        $lines = [];

        while(!\feof($fp)){

            $line = trim(fgets($fp));

            if($line) $lines[] = $line; 

        }

        \fclose($fp);

        $this->parseConfigLines($lines);

    
    }


    protected function parseConfigLines(array $lines):void{
        foreach($lines as $line){
            $parts = \explode('=', $line);
            $key = $parts[0];
            $value = $parts[1];
            
            $_ENV[$key] = $value;
        }
    }


}