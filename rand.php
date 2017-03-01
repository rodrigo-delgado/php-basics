<html>
    <p>
    <?php
    // Use rand() to print a random number to the screen
     print rand(1, 4);

    ?>
    </p>
    <p>
    <?php
    // Use your knowledge of strlen(), substr(), and rand() to
    // print a random character from your name to the screen.
    $myName = "Rodrigo";
    echo rand(0, 4);
    echo substr($myName, rand(0, strlen($myName)-1), 4);
    ?>
    </p>
</html>
