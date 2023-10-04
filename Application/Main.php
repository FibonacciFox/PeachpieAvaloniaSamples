<?php

namespace {

    use Avalonia\Layout\HorizontalAlignment;
    use Avalonia\Layout\VerticalAlignment;
    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Peachpie\Avalonia\Collections\UxList;
    use Peachpie\Avalonia\Controls\UxButton;
    use Peachpie\Avalonia\Controls\UxListBox;
    use Peachpie\Avalonia\Controls\UxStackPanel;
    use Peachpie\Avalonia\Controls\UxTextBlock;
    use Peachpie\Avalonia\Controls\UxWindow;

    class Main extends UxWindow
    {
        public UxButton $Button;
        public UxStackPanel $StackPanel;


        public function __construct()
        {
            //Сначала всегда инициализируем axaml.
            $this->InitializeComponent();

            $this->Button = $this->FindByName("Button");

            $this->Button->on("Click", function (UxButton $button, $args) {
                $this->Title = "Clicked!";
            });
        }

        public function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load($this);
        }
    }

}