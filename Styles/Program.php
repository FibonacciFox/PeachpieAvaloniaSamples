<?php

use Peachpie\Avalonia\Core\AppPhpBuilder;
use Avalonia\Controls\ApplicationLifetimes\ClassicDesktopStyleApplicationLifetime;

$lifetime = new ClassicDesktopStyleApplicationLifetime();

$lifetime->Args = null;
$lifetime->ShutdownMode = \Avalonia\Controls\ShutdownMode::OnLastWindowClose;


AppPhpBuilder::Configure("App, Styles")->UsePlatformDetect()->SetupWithLifetime($lifetime);

$lifetime->Start(args: null);
