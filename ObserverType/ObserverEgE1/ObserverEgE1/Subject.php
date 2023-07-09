<?php
namespace ObserverEgE1;


/**
 * PHP имеет несколько встроенных интерфейсов, связанных с 
 * паттерном Наблюдатель 
 * 
 * Вот как выглядит интерфейс издателя:
 * @link http://php.net/manual/ru/class.splsubject.php
 * 
 *   interface SplSubject
 *   {
 *     //присоединяет наблюдателя к издателю
 *     public function attach(SplObserver $observer);
 * 
 *    //Отсоединяет наблюдателя от издателя
 *    public function detach(SplObserver $observer);
 * 
 *    //Уведомляет всех наблюдателей о событии
 *    public function notify();
 * 
 *   }
 * 
 * Также имеется встроенный интерфейс для наблюдателей
 * @link http://php.net/manual/ru/class.splobserver.php
 * 
*   interface SplObserver
*   {
*     public function update(SplSubject $subject);
*   }
 * 
*/

/**Издатель владеет некоторым важным состоянием и оповещает наблюдателей
 * о его изменениях.
 */

class Subject implements \SplSubject
{
  /**
   * @var int Для удобства в этой переменной хранится состояние Издателя, 
   * необходимое всем подписчикам.
   */

   public $state;

   /**@var \SplObjectStorage Список подписчиков. В реальной жизни список
    * подписчиков может храниться в более подробном виде (классифицируется по типу события и т.д)
    */
   private $observers;

   public function __construct()
   {
       $this->observers = new \SplObjectStorage();
   }

   /**Методы управления подпиской */
   public function attach(\SplObserver $observer): void
   {
    $this->observers->detach($observer); 
    echo "Прикрепил наблюдателя <br>";
   }

   public function detach(\SplObserver $observer): void
   {
     $this->observers->detach($observer);
     echo "Subject: Отключил наблюдателя <br>";
   }

   /**Запуск обновления в каждом подписчике. */

   public function notify(): void
   {
       echo "Subject: Уведомление наблюдателей...</br>";
       foreach ($this->observers as $observer){
           $observer->update($this);
       }
   }

   /**Обычно логика подписки - только часть того, что делает Издатель. 
    * Издатели часто содержат некоторую важную бизнес логику, которая запускает метод 
    * уведомления всякий раз, когда должно произойти что-то важное или после этого
    */
    public function someBusinessLogic(): void
    {
        echo "<br> Subject: Я делаю что-то важное <br>";
        $this->state = rand(0, 10);

        echo "Subject: Мое состояние только что изменилось на: {$this->state}<br>";
        $this->notify();
    }


    
}

