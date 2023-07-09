<?php
namespace CompositeEgE1;

class Composite extends Component
{
    protected $children;

    public function __construct()
    {
      $this->children = new \SplObjectStorage();

    }
    
    /**
     *  Объект контейнера может как добавлять компоненты в свой
     * список вложенных компонентов, так и удалять их как простые так и сложные.
     */
    
     public function add(Component $component)
     {
         $this->children->attach($component);
         $component->setParent($this);
     }

     public function remove(Component $component)
     {
       $this->children->detach($component);
       $component->setParent(null);
     }

     public function isComposite()
     {
         return true;
     }

      /**Контейнер выполняет свою логику особым образом. 
       * Он проходит рекурсивно через всех своих детей, собирая и суммируя их
       * результаты. Посколько потомки контейнера передают эти вызовы своим потомкам и
       * так далее, в результате обходится всё дерево объектов.
       */


      public function operation()
      {
          $result = [];
          foreach ($this->children as $child){
            $result[] = $child->operation();
          }
        return "Branch(" . implode("+" , $result) . ")";  
      } 
}