<?php

class View
{   
    protected string $view;
    protected array $params = [];
    public function __construct(
        string $view, array $params 
    ) {
        $this->view = $view;
        $this->params = $params;
        $this->render();
    }

    public static function make(string $view, array $params = []): static
    {
        return new static($view, $params);
    }

    public function render(): string
    {   
        
        $view_file = 'views/IT_JOB' .'/' . $this->view . '.php';
        

        if (! file_exists($view_file)) {
            header('Location: index.php?controller=home&action=error');
        }
        else{

            foreach($this->params as $key => $value) {
                $$key = $value;
            }
    
            ob_start();
    
            include_once($view_file);
    
            return (string) ob_get_clean();
        }

    }

    public function __toString(): string
    {
        return $this->render();
    }

    public function __get(string $name)
    {
        return $this->params[$name] ?? null;
    }
}
