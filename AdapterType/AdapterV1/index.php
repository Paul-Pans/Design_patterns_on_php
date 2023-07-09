<?php
namespace AdapterV1;
include_once 'autoload.php';

echo "1. Адаптер структурный шаблон проектирования,
предназначенный для организации использования объекта,
недоступного для модификации, через специально созданный интерфейс.
Другими словами - это структрурный паттерн проектирования, который позволяет
 объектам с несовместимым интерфейсами работать вместе.
 <br>
 Адаптер предусматривает создания класса обвертки с требуемым интерфейсом.
 <i>[Электронный ресурс]: Википедия. Свободная энциклопедия.</i>
<br><br><br>";


/*function testCanTurnPageOnBook()
{
    $book = new PaperBook();
    $book->open();
    $book->turnPage();


}
*/

function testCanTurnPageOnKindleLikeInANormalBook()
{
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

}


//$t = new testclass();
$t = new PaperBook();
$ta = new Kindle();
//echo $t->test();

//echo testCanTurnPageOnBook();


?>
