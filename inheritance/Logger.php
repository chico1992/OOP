<?php

class Logger
{   
    private $informations;
    private $logFile;
    private static $instance;

    private function __construct(string $logFile)
    {
        $this->informations = [];
        $this->logFile = $logFile;
    }

    public function log($message)
    {
        $message = date('[Y-m-d H:i:s]') . $message;
        array_push($this->informations, $message);
    }

    public function destructWithFopen()
    {
        $file = fopen($this->logFile , 'a');
        foreach ($this->informations as $line) {
            fwrite($file,"\n".$line);
        }
        fclose($file);
    }

    public function __destruct()
    {
        $initialContent = [
            file_get_contents($this->logFile),
            implode("\n",$this->informations)
        ];
        file_put_contents(
            $this->logFile,
            implode("\n",$initialContent)
        );
    }

    public static function getInstance()
    {
        if(!isset(self::$instance)){
            self::$instance = new Logger(__DIR__."/dev.log");
        }
        return self::$instance;
    }
}