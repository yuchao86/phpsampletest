<?php
/**
 * Test log
 **/
class Log
{
  public $file_path;


  public function Log($file_path)
  {
    // code...
    $this->file_path = $file_path;

  }
  public function message($message)
  {
    // code...
    //echo $this->file_path;
    $file = fopen($this->file_path,'a+');
    fwrite($file,$message.'\n');
    fclose($file);
  }
}
?>
