<?php
namespace ChainOfResponsibilityEgE1;

class SquirrelHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
      if($request === "Nut"){
          return "Squirrel: eat the" . $request . "<br>";
      }else{
          return parent::handle($request);
      }

    }
}