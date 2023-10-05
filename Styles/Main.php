<?php

namespace {
    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Peachpie\Avalonia\Controls\UxButton;
    use Peachpie\Avalonia\Controls\UxTextBlock;
    use Peachpie\Avalonia\Controls\UxWindow;

    class Main extends UxWindow
    {
        public UxTextBlock $HelloApp;
        public UxButton $AddH1Button;
        public UxButton $RemoveH1Button;

        public function __construct()
        {
            //Сначала всегда инициализируем axaml.
            $this->InitializeComponent();
            $this->getComponents();

            $this->HelloApp->Text = "Hello Peachpie Avalonia!";


            $this->AddH1Button->on("Click", function(UxButton $button, $args){
                $this->HelloApp->Classes->Add("h1");
            });

            $this->RemoveH1Button->on("Click", function(UxButton $button, $args){
                $this->HelloApp->Classes->Remove("h1");
            });

        }

        //Не удаляйте метод, если используете разметку axaml
        public function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load($this);
        }

        public function getComponents(){
            $this->HelloApp = $this->FindByName("HelloApp");
            $this->AddH1Button = $this->FindByName("AddH1Button");
            $this->RemoveH1Button = $this->FindByName("RemoveH1Button");
        }
    }

}