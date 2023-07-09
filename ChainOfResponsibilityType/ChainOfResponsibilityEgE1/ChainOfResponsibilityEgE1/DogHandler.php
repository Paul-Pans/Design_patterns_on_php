<?php
namespace ChainOfResponsibilityEgE1;

class DogHandler extends AbstractHandler
{
  public function handle(string $request):? string
  {
    if($request === "MeatBall"){
        return "Dog: i eat the". $request . "<br>";
    }else{
        return parent::handle($request);
    }


  }


}