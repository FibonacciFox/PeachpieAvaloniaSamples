<?php
namespace {

    use Avalonia\Application;
    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;

    class App extends Application
    {
        public function __construct()
        {
            //Сначала всегда инициализируем axaml.
            $this->InitializeComponent();
        }

        public function OnFrameworkInitializationCompleted() : void {
            $this->ApplicationLifetime->MainWindow = new Main();
        }

        public function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load($this);
        }
    }
}