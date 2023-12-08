<?php

use Avalonia\Controls\ShutdownMode;
use Peachpie\Avalonia\Core\AppPhpBuilder;
use Avalonia\Controls\ApplicationLifetimes\ClassicDesktopStyleApplicationLifetime;

use Avalonia\AppBuilder;

// Avalonia configuration, don't remove; also used by visual designer.
     function BuildAvaloniaApp() : AppBuilder  {

    }


$lifetime = new ClassicDesktopStyleApplicationLifetime();

$lifetime->Args = null;
$lifetime->ShutdownMode = ShutdownMode::OnLastWindowClose;




AppPhpBuilder::Configure("App, CustomControl")->UsePlatformDetect()->WithInterFont()->SetupWithLifetime($lifetime);

$lifetime->Start(args: null);
