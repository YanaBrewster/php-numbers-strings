<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PHP Day 1 Task</title>
  </head>
  <body class="bg-light text-dark">


    <div class="container">

    <?php
    echo '<h2 class="display-2 text-primary text-center"> String Functions </h2>';

      echo '<h3 class="text-primary mt-5 text-center">Return the Length of a String</h3>';

      echo '<h5 class="text-dark mt-5">echo strlen("Put your left foot in, Your left foot out, Your left foot in, And shake it all about"); //Returns the length of the string</h5>';
      echo strlen("Put your left foot in, Your left foot out, Your left foot in, And shake it all about");

      echo '<h3 class="text-primary mt-5 text-center">Count Words in a String</h3>';

      echo '<h5 class="text-dark mt-5">echo str_word_count("She sells sea shells on the seashore"); //Counts the number of words in the string</h5>';
      echo str_word_count("She sells sea shells on the seashore");

      echo '<h3 class="text-primary mt-5 text-center">Replace Text Within a String</h3>';

      echo '<h5 class="text-primary mt-5">Before</h5>';
      echo  '<p>Hello world!</p>';

      echo '<h5 class="text-primary mt-5">After using "echo str_replace("Hello", "Goodbye", "Hello world!");"</h5>';
      echo str_replace("Hello", "Goodbye", "Hello world!");

    echo '<h2 class="display-2 text-primary mt-5 text-center"> Number Functions </h2>';

      echo '<h3 class="text-primary mt-5 text-center">Integers</h3>';
        echo '<ul><li>An integer must have at least one digit</li><li>An integer must not have a decimal point</li>
<li>An integer can be either positive or negative</li></ul>';
        $x = 9;
        echo  '<p>Is the following variable an integer?</p>';
        echo  '<p>$x = 9</p>';
        echo var_dump(is_int($x));

      echo '<h3 class="text-primary mt-5 text-center">Floats</h3>';
        echo '<h5 class="text-dark mt-5">A float is a number with a decimal point or a number in exponential form.</h5>';
        echo '<ul><li>is_float()</li><li>is_double()</li></ul>';
        $y = 14;
        echo  '<p>Is the following variable an integer?</p>';
        echo  '<p>$y = 14</p>';
        echo var_dump(is_float($y));

      echo '<h3 class="text-primary mt-5 text-center">Numerical Strings</h3>';
        echo '<h5 class="text-dark mt-5">is_numeric() function can be used to find out if a variable is numeric</h5>';
        $a = "Number";
        echo  '<p>Is the following variable numeric?</p>';
        echo  '<p>$a = "Number"</p>';
        echo var_dump(is_numeric($a));
    ?> <!--end of php-->


    </div>

  </body>
</html>
