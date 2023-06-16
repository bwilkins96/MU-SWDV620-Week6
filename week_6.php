<!DOCTYPE html>

<html lang="en-US">
    <!-- SWDV 620: Web Applications -->
    <!-- HTML/PHP page for week 6 assignment -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Week 6</title>
        <script type=text/javascript>
            // JavaScript functions for adding and resetting text
            function addText() {
                const pEle = document.createElement('p');
                pEle.style.color = 'brown';
                pEle.innerText = 'This was written by JavaScript!';
                
                const container = document.getElementById('textContainer');
                container.appendChild(pEle);
            }

            function resetText() {
                const container = document.getElementById('textContainer');
                container.innerHTML = '';
            }
        </script>
    </head>

    <body>
        <?php
            echo '<p style="color: blue;">This was written by PHP!</p>';
        ?>
        
        <!-- Elements for adding / resetting text via JavaScript -->
        <button type="button" onclick="addText();">Click to execute JavaScript</button>
        <div id="textContainer"></div>
        <button type="button" onclick="resetText();">Reset</button>

        <?php
            // PHP using arithmetic operators
            function printPEle($msg, $color='black') {
                echo '<p style="color: ' . $color . ';">' . $msg . '</p>';
            }

            printPEle('2 + 2 = ' . 2 + 2, 'red');
            printPEle('57.75 - 27.25 = ' . 57.75 - 27.25, 'darkorange');
            printPEle('5 * 5 = ' . 5 * 5, 'green');
            printPEle('100 / 5 = ' . 100 / 5, 'blue');
            printPEle('51 % 2 = ' . 51 % 2, 'purple');
        ?>
        
        <?php
            // PHP using a for loop and switch statement to display images 
            function isEven($num) {
                return $num % 2 == 0;
            }

            echo '<br>';
            for($i = 1; $i <= 5; $i++) {
                switch (true) {
                    case $i == 3:
                        echo '<img alt="random image" src="https://picsum.photos/150/450?random=' . $i . '">';
                        break;
                    case isEven($i):
                        echo '<img alt="random image" src="https://picsum.photos/300/200?random=' . $i . '">';
                        break;
                    case !isEven($i):
                        echo '<img alt="random image" src="https://picsum.photos/200/300?random=' . $i . '">';
                        break;
                }
            } 
        ?>
    </body>
</html>