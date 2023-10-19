<?php

namespace ViewModels;

use Avalonia\Threading\DispatcherTimer;
use Models\Person;
use Peachpie\Avalonia\Collections\UxList;
use Peachpie\Avalonia\Collections\UxObservableDictionary;
use System\TimeSpan;

class MainViewModel extends UxObservableDictionary
{
    public function __construct()
    {
        $this["Title"] = "MVVM App";

        DispatcherTimer::Run( action: function(): bool {
            $this["Title"]  = "MVVM App - ".date("Y-m-d H:i:s");
            return true;
        }, interval: TimeSpan::FromSeconds(1), priority: null);


        $PersonList = new UxList();
        $PersonList->Add(new Person("Fibonacci","Fox", true));

        $this["People"] = $PersonList;
    }
}