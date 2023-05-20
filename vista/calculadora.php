
<?php
class Calculator {
    private $num1;
    private $num2;
    private $operation;

    public function __construct($num1, $num2, $operation) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operation = $operation;
    }

    public function calculate() {
        switch ($this->operation) {
            case 'add':
                return $this->num1 + $this->num2;
            case 'subtract':
                return $this->num1 - $this->num2;
                case 'multiply': 
                    return $this->num1 * $this->num2;
             case 'divide':
                if ($this->num2 == 0) {
                        return 'No se puede dividir por cero';
                    } else {
                        return $this->num1 / $this->num2;
                    }
            case 'percentage':
                return ($this->num1 * $this->num2) / 100;
            default:
                return 'Invalid operation';
        }
    }
}

