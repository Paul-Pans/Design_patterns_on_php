<?php
namespace FlyweightEgE1;
include_once 'autoload.php';


echo "
Структурный шаблон проектирования<br>
Приспособленец (англ. flyweight, «легковесный (элемент)») — структурный шаблон проектирования, 
при котором объект, представляющий себя как уникальный экземпляр в разных местах программы, 
по факту не является таковым.<i>[Электронный ресурс]: Википедия. Свободная энциклопедия.</i>
<br>
Применяется для оптимизации памяти когда очень много одинаковых объектов могут 
перегрузить память. Но дает нагрузку на процессор.
<br><br><br>";

$t = new testclass();
echo $t->test();

$db = new CatDataBase();

echo "Client: Let's see what we have in \"cats.csv\".\n";

// Чтобы увидеть реальный эффект паттерна, вы должны иметь большую базу данных с
// несколькими миллионами записей. Не стесняйтесь экспериментировать с кодом,
// чтобы увидеть реальные масштабы паттерна.
$handle = fopen(__DIR__ . "/cats.csv", "r");
$row = 0;
$columns = [];
while (($data = fgetcsv($handle)) !== false) {
    if ($row == 0) {
        for ($c = 0; $c < count($data); $c++) {
            $columnIndex = $c;
            $columnKey = strtolower($data[$c]);
            $columns[$columnKey] = $columnIndex;
        }
        $row++;
        continue;
    }

    $db->addCat(
        $data[$columns['name']],
        $data[$columns['age']],
        $data[$columns['owner']],
        $data[$columns['breed']],
        $data[$columns['image']],
        $data[$columns['color']],
        $data[$columns['texture']],
        $data[$columns['fur']],
        $data[$columns['size']],
    );
    $row++;
}
fclose($handle);

// ...

echo "\nClient: Let's look for a cat named \"Siri\".\n";
$cat = $db->findCat(['name' => "Siri"]);
if ($cat) {
    $cat->render();
}

echo "\nClient: Let's look for a cat named \"Bob\".\n";
$cat = $db->findCat(['name' => "Bob"]);
if ($cat) {
    $cat->render();
}
?>
