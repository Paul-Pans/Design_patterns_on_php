<?php
namespace CommandEgE1;

/**Invoker -  отправитель, призыватель
 * Отправитель связан с одной или несколькими командами. 
 * От отправляет запрос команде
*/

class Invoker
{
    /**
     * @var Command
     */

    private $onStart;

    private $onFinish;

    /**Инициализация команд */

    public function setOnStart(Command $command): void
    {
        $this->onStart = $command;
    }

    public function setOnFinish(Command $command): void
    {
       $this->onFinish = $command;
    }

    /**Отправитель не зависит от классов конкретных команд и получателей. 
     * Отправитель передает запрос получателю косвенно, выполняя команду.
     */

    public function doSomethingImportant(): void
    {
       echo "Invoker: Кто нибудь хочет, чтобы что-то было сделано, 
       прежде чем я начну<br><br>";
       
       if($this->onStart instanceof Command){
         
         $this->onStart->execute();
       }

       echo "Invoker: делать что-то действительно важное <br><br>";

       echo "Invoker: Кто нибудь хочет, чтобы что-то было сделано после того, как я закончю?";
       if($this->onFinish instanceof Command){
         $this->onFinish->execute();
       }

    }

}

