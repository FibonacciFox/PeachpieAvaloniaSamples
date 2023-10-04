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
        public UxButton $MyUxButton;
        public UxStackPanel $MyUxStackPanel;
        private UxListBox $MyListBox;


        public function __construct()
        {
            //Сначала всегда инициализируем axaml.
            $this->InitializeComponent();
            
            $this->MyUxButton = $this->FindByName("MyUxButton");
            $this->OpenDemo = $this->FindByName("OpenDemo");
            $this->MyUxStackPanel = $this->FindByName("MyUxStackPanel");
            $this->MyListBox = $this->FindByName("MyListBox");

            $list = new UxList();

            $this->MyListBox->ItemsSource = $list;
            $this->MyUxButton->on("Click", function (UxButton $button, $args) {
                $text = new UxTextBlock();
                $text->HorizontalAlignment = HorizontalAlignment::Center;
                $text->VerticalAlignment = VerticalAlignment::Center;
                $text->Text = "Added New Text Block";
                $this->MyUxStackPanel->Children->Add($text);
            });
            
        }


        public function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load($this);
        }
    }

}