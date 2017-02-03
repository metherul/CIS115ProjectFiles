<!-- 
    Author: Ethan Green
    Date: January 25
    File: myFirst.php
    Purpose: PHP Practice
-->
<html>

<head>
    <title>First PHP Example</title>
</head>

<body>
    <h1>Circle Calculations</h1>
    <?php 
            $radius = 15.75;
            $area = pi() * pow ($radius, 2);
            $circumference = 2 * pi() * $radius;

            print("<p>A circle with a radius of $radius has an area of $area and a circumference of $circumference.</p>");

            print("<p>That's all I have been designed to tell you!</p>");            
        ?>
</body>

</html>