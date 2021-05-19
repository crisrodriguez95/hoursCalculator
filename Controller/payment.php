<?php

class payment
{

    public function getPayment()
    {
        $file = 'horario.txt';
        if (is_file($file)) {

            $week = ['MO', 'TU', 'WE', 'TH', 'FR'];
            $weekend = ['SA', 'SU'];

            if (($fp = fopen($file, "r")) !== FALSE) {

                while (($data = fgets($fp, 4096)) !== FALSE) {
                    $amount = 0;
                    $schedule = explode('=', $data);

                    $schedule[1] = explode(',', $schedule[1]);

                    foreach ($schedule[1] as $value) {

                        $hours = explode('-', substr($value, 2));

                        if (strstr($hours[1], '00:00')) {
                            unset($hours[1]);
                            $hours[1] = '24:00';
                        }

                        $numHours = $hours[1] - $hours[0];

                        for ($i = 1; $i <= $numHours; $i++) {
                            $time = $hours[0] + $i;
                
                            $amount += $this -> getAmount($time,$value, $weekend );
                        }

                    }

                    print_r('The amount to pay to ' . $schedule[0] . ' is ' . $amount . ' USD | ', false);
                }
            }
        } else
            echo 'This is not a file';
    }

    function getAmount($time,$value, $weekend )
    {
         $amount = 0;

            if ($time >= '00:01' && $time <= '09:00') {
                $amount +=  25;
            } else if ($time >= '09:01' && $time <= '18:00') {
                $amount += 15;
            } else if ($time >= '18:01' && $time <= '24:00') {
                $amount += 20;
            }


            if (in_array(substr($value, 0, 2), $weekend)) {
                $amount += 5;
            }
        

        return $amount;
    }
}
