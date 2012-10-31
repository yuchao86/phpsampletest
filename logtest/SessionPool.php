<?php

/**
 * Session pool
 **/
class SessionPool
{
  public $_log;

  function __construct($log)
  {
    $this->_log = $log;
    // code...
  }
  public function logIn($username)
  {
    //
    $this->_log->message("User $username logged in.");
  }

  public function Debug()
  {
    var_dump($this->_log);
  }
}
?>
