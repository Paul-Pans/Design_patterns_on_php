<?php
namespace BridgeEgE1;

class HelloWorldService extends Service
{
 
 
 public function get(): string
 {
     return $this->implementation->format('Hello world jjjj');
 }

}