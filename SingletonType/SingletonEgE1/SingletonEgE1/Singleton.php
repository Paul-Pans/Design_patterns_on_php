<?php
namespace SingletonEgE1;


final class Singleton
{
  
    private static $instance;

    /**
     * Создается при первом использовании
     */
    public static function getinstance()
    {
      if(static::$instance === null){
        static::$instance = new static();
      }
      
      return static::$instance; 
    }

    /**
     * Не разрешенно вызывать из вне чтоб не создали экземпляр
     */
    private function __construct()
    {

    } 

    /**
     * нельзя клонировать
     */
    private function __clone()
    {
        
    }

    /**
     * нельзя десериализировать чтоб не создался второй экземпляр
     */ 
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

}