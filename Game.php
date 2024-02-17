<?php

class Game{

  private bool $state = false;

  public $player;
  public int $lvl = 0;
  public array $enemys;

  public function launchGame(): void{

    $this->state = true;

    while($this->state){
      $this->render();
      $this->getUserAction();
    }

  }

  private function render(): void{

    system("clear");

    print("Frame\n");

  }

  private function getUserAction(): void{
    
    $action = readline("Action : ");

    print($action);

    sleep(1);
  }

}
