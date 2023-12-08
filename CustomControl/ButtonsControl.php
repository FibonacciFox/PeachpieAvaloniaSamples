<?php

namespace {
    use Peachpie\Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Peachpie\Avalonia\Controls\UxButton;

    class ButtonsControl extends UxUserControl
    {

        public UxButton $button1;
        public UxButton $button2;
        public UxButton $button3;
        public UxButton $button4;

        public function __construct()
        {
            //Сначала всегда инициализируем axaml.
            $this->InitializeComponent();

            $this->button1 = $this->FindByName("button1");
            $this->button2 = $this->FindByName("button2");
            $this->button3 = $this->FindByName("button3");
            $this->button4 = $this->FindByName("button4");

        }

        //Не удаляйте метод, если используете разметку axaml
        public function InitializeComponent(): void
        {
          AvaloniaXamlLoader::Load($this);
        }
    }

}