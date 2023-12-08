<?php

namespace {
    use Peachpie\Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Avalonia\Threading\DispatcherTimer;
    use Peachpie\Avalonia\Controls\UxTextBlock;
    use Peachpie\Avalonia\Controls\UxWindow;
    use System\TimeSpan;

    class Main extends UxWindow
    {
        public UxTextBlock $HelloApp;

        public function __construct()
        {
            //Сначала всегда инициализируем axaml.
            $this->InitializeComponent();

            $this->HelloApp = $this->FindByName("HelloApp");

            DispatcherTimer::Run( action: function(): bool {
                 $this->HelloApp->Text = date("Y-m-d H:i:s");
                return true;
            }, interval: TimeSpan::FromSeconds(0.1), priority: null);

        }

        //Не удаляйте метод, если используете разметку axaml
        public function InitializeComponent(): void
        {
          AvaloniaXamlLoader::Load($this);
        }
    }

}