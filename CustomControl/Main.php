<?php

namespace {
    use Peachpie\Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Peachpie\Avalonia\Controls\UxWindow;
    use Peachpie\Avalonia\Controls\UxButton;

    class Main extends UxWindow
    {
        public ButtonsControl $buttonsControl;

        public UxWindow $newWindow;

        public UxButton $SetButtonsControl;


        public function __construct()
        {
            //Сначала всегда инициализируем axaml.
            $this->InitializeComponent();

            $this->newWindow = new UxWindow();
            $this->newWindow->Height = 400;
            $this->newWindow->Width = 400;

            $this->buttonsControl = new ButtonsControl();

            $this->SetButtonsControl = $this->FindByName("SetButtonsControl");

            $this->SetButtonsControl->on('Click', function () {
                $this->newWindow->Content = $this->buttonsControl;
            });


            $this->newWindow->Show();
        }

        //Не удаляйте метод, если используете разметку axaml
        public function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load($this);
        }
    }

}