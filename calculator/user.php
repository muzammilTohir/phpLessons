<?php
    class Calculator{
        public $num1;
        public $num2;
        public $op;

        public function __construct(int $num1,int $num2,string $op){
            $this->num1 = $num1;
            $this->num2 = $num2;
            $this->op = $op;
        }

        public function simplecalculator(){
            switch($this->op){
                case 'add':
                    $result = $this->num1 + $this->num2;
                    return $result;
                    break;
                case 'sub':
                        $result = $this->num1 - $this->num2;
                        return $result;
                        break;
                case 'div':
                            $result = $this->num1 / $this->num2;
                            return $result;
                            break;
                case 'mul':
                                $result = $this->num1 * $this->num2;
                                return $result;
                                break;  
                default:
                    echo "Error!";
                    break;                        
            }
        }
    }
?>
