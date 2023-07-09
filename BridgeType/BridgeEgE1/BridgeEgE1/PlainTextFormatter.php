<?php

namespace BridgeEgE1;

class PlainTextFormatter implements Formatter
{
  public function format(string $text) : string
  {
      return $text;
  }

}