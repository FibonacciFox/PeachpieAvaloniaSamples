<?php

namespace {
    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Peachpie\Avalonia\Collections\UxDictionary;
    use Peachpie\Avalonia\Controls\UxTextBlock;
    use Peachpie\Avalonia\Controls\UxWindow;

    class Main extends UxWindow
    {
        public UxTextBlock $HelloApp;

        public function __construct()
        {
            //Сначала всегда инициализируем axaml.
            $this->InitializeComponent();

            $this->HelloApp = $this->FindByName("HelloApp");

            $this->HelloApp->Text = "Stylized UxTextBlock!";


        }

        //Не удаляйте метод, если используете разметку axaml
        public function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load($this);
        }
    }

}