<?php
// Invoker
class Keyboard
{
    private $PlayCommand = null;
    private $StopCommand = null;

    public function setPlayCommand($PlayCommand) {
        $this->PlayCommand = $PlayCommand;
    }

    public function setStopCommand($StopCommand) {
        $this->StopCommand = $StopCommand;
    }

    public function play() {
        $this->PlayCommand->execute();
    }

    public function stop() {
        $this->StopCommand->execute();
    }
}