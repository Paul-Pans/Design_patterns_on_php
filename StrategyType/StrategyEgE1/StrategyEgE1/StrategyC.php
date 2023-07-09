<?php
namespace StrategyEgE1;

class StrategyC implements ChoiceStrategy
{

   public function ChoiceNameStrategy($arr)
   {

      shuffle($arr); 

      return $arr;
   }

}