<?php
namespace ProxyEgE1;

/**
 * Интерфейс заместителя идентичен интерфейсу Реального субъекта
 */

class Proxy implements Subject
{
    /**
     * @var RealSubject
     */

     private $realSubject;

     /**
      * Заместитель хранит ссылку на объект класса Реальный субъект. Клиент
      * может либо лениво загрузить его, либо передать заместителю
      */

    public function __construct(RealSubject $realSubject)
    {
       $this->realSubject = $realSubject; 
    }

    /**
     * Наиболее распрастраненными областями паттерна Заместитель является
     * ленивая загрузка, кэширование, контроль доступа, ведение журнала итд. 
     * Заместитель может выполнять одну из этих задач, а затем в зависимости от результата
     * , передать выполнение одноименному методу в связанном объекте реального субъекта.
     */

    public function request(): void
    {
     if($this->checkAccess()){
         $this->realSubject->request();
         $this->logAccess();
     }

    }
    
    private function checkAccess(): bool
    {
      /**некоторые реальные проверки должны проходить здесь */ 
      echo "Proxy: checking access prior to firing f real request </br></br>";


      return true;
    }

    private function logAccess(): void
    {
        echo "Proxy: Loading the time of request. <br>";
    }
}