<?php

abstract class Button
{
    abstract public function show(): string;
    abstract public function click(): void;
}

class UIButton extends Button
{
    public function show(): string
    {
        return 'UIButton';
    }

    public function click(): void
    {
        // A punch of commands to be executed
    }
}

class WebButton extends Button
{
    public function show(): string
    {
        return '<div><button>Web Button</button></div>';
    }

    public function click(): void
    {
        // A punch of commands to be executed
    }
}

class SystemButton extends Button
{
    public function show(): string
    {
        return '# System Button #';
    }

    public function click(): void
    {
        // A punch of commands to be executed
    }
}

// ----------------------------------------------------------
abstract class Dialog
{
    abstract public function createdButton(): Button;

    public function renderDialog(): string
    {
        $button = $this->createdButton();
        return "
            ##########################<br/>
            {$button->show()} <br/>
            ##########################
        ";
    }
}

class MobileDialog extends Dialog
{
    public function createdButton(): Button
    {
        return new UIButton();
    }
}

class WebDialog extends Dialog
{
    public function createdButton(): Button
    {
        return new WebButton();
    }
}

class SystemDialog extends Dialog
{
    public function createdButton(): Button
    {
        return new SystemButton();
    }
}

// --------------------------------------------------------------

// main 


// Mobile
$MobileDialog = new MobileDialog();
echo $MobileDialog->renderDialog() . "<br/>";

// Web
$WebDialog = new WebDialog();
echo $WebDialog->renderDialog() . "<br/>";

// System
$SystemDialog = new SystemDialog();
echo $SystemDialog->renderDialog() . "<br/>";
