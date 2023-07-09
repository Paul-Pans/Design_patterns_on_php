<?php
namespace FlyweightEgE1;

/**
 * В этом примере паттерн Легковес применяется для минимализации использования оперативной памяти
 * объектами в базе данных животных
 * Данные состоят из двух частей
 * 1. Уникальные (внешние) данные:имя кота, возраст, владелец
 * 2. Общие (внутренние) данные: название породы, цвет, текстура итд
 * 
 * Первая часть хранится непосредственно внутри класса Кот, который играет роль
 * контекста. Эти совместно используемые данные находятся внутри класса РазновидностиКотов,
 * вместо того чтобы хранить повторяющиеся данные в каждом из своих объектов.
 */


class CatVariation
{

/**Так называемое внутренее состояние */

public $breed;

public $image;

public $color;

public $texture;

public $fur;

public $size;

public function __construct(
    string $breed,
    string $image,
    string $color,
    string $texture,
    string $fur,
    string $size
){
 $this->breed;
 $this->image;
 $this->color;
 $this->texture;
 $this->fur;
 $this->size;   
}

/**
 * Этот метод отображает информацию о кошке. метод принимает
 * внешнее состояние в качестве аргументов. Остальная часть состояния
 * хранится внутри полей легковеса.
 */
public function renderProfile(string $name, string $age, string $owner)
{
    echo "= $name =\n";
    echo "Age: $age\n";
    echo "Owner: $owner\n";
    echo "Breed: $this->breed\n";
    echo "Image: $this->image\n";
    echo "Color: $this->color\n";
    echo "Texture: $this->texture\n";
}

}