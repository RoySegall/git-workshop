<?php

class calc {

  protected $first;
  protected $second;

  function plus() {
    return $this->first + $this->second;
  }

  function minus() {
    return $this->first - $this->second;
  }

  function divide() {
    return $this->first / $this->second;
  }

  function multiple() {
    return $this->first * $this->second;
  }
	
}

echo "hello";
