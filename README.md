# ACME Payment

In this proposed exercise, the total payment must be calculated depending on the time and day in which the work was done

# Solution

The code that I have developed in php consists of a controller composed of two functions, the main one that is in charge
of loading the file and obtaining information and the function for calculating the amount depending on the characteristics.
In the index.php file the controller is instantiated to obtain the results.

## Requirements

PHP 7.3.27

## Program execution

In the cmd located in the project root, run this command:

`php index.php`

If you need to edit the Inputs, then open the schedule.txt file

## Test
I use PHPUnit to test getAmount() function so in the cmd locate in the tests folder and run this code:

`vendor/bin/phpunit paymentTest.php --color`

The test file is located in Tests folder.





