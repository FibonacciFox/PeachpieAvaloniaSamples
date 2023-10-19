<?php

namespace Models;
use Peachpie\Avalonia\Collections\UxObservableDictionary;
class Person extends UxObservableDictionary
{
    public function __construct(string $name, string $surname, bool $isTrue  )
    {
        $this["Name"] = $name;
        $this["Surname"] = $surname;
        $this["IsTrue"] = $isTrue;
    }
}