<?php
/**
 * Created by PhpStorm.
 * User: Lukasz
 * Date: 01/10/2016
 * Time: 08:22
 */
class Bmi{

    public $finalBmi;

    
    public function getBmi($height,$weight){
        if (!empty($_POST['height']) and !empty($_POST['weight'])) {
            $height = $this->sanitize($height);
            $weight = $this->sanitize($weight);
            $this->finalBmi = number_format(($weight / (($height * (0.01))*($height * (0.01)))), 1, ',', '');
            
            return $this->finalBmi;
        }
    }
    
    public function bmiPerfect($height){
        if(!empty($height)) {
            $height = $this->sanitize($height);
            $perfectBmi = number_format(((($height * (0.01)) * ($height * (0.01))) * 21.75), 1, ',', ' ');

            return $perfectBmi;
        }
    }

    public function bmiCategory(){
        if(!empty($this->finalBmi)) {
            switch ($this->finalBmi) {
                case ($this->finalBmi <= 18.5):
                    return 'Underweight';
                    break;
                case ($this->finalBmi >= 18.6 && $this->finalBmi <= 24.9):
                    return 'Normal';
                    break;
                case ($this->finalBmi >= 25 && $this->finalBmi <= 29.9):
                    return 'Overweight';
                    break;
                case ($this->finalBmi >= 30):
                    return 'Obese';
                    break;
            }
        }

    }
    
    private function sanitize($input){
       return htmlentities($input);
    }

}