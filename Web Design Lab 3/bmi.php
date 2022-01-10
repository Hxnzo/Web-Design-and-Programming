<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="BMIStylesheet">
            <title>BMI Calculator</title>
    </head>

    <body>
        <form method="post" action="">
            
            <h1>BMI Calculator</h1>

            <fieldset>
                <legend align="left">
                    check your BMI now!
                </legend>

                Weight in kg: <input type="text" name="weight"><br><br>
                Height in m: <input type="text" name="height"><br><br>

                <input type="submit" value="Calculate"><br><br>

            </fieldset>

            <fieldset>

                <legend align="left">Check Your BMI Now!</legend>

                Weight in lbs: <input type="text" name="weight2"><br/><br/>
                Height in Inches: <input type="text" name="height2"><br/><br/>

                <input type="submit" value="Calculate"><br/><br>

            </fieldset>
            
            <!-- This is for kg and m-->

            <?php
                if(!empty($_POST))
                {
                    $weight=$_POST['weight'];
                    $height=$_POST['height'];

                    $bmi=$weight/(pow($height, 2));

                    echo<<<_END
                    The answer for kg and m is: <input  type="text" value="$bmi">
                    _END;
                }
            ?>

            <script type="text/javascript">

                var bmi = "<?php echo ($bmi); ?>";

                if(bmi<18.5)
                {
                    document.write("You are underweight");
                }
                else if(bmi>=18.5 && bmi <= 14.9)
                {
                    document.write("Your weight is normal");
                }
                else if(bmi>=25 && bmi <= 29.9)
                {
                    document.write("You are overweight");
                }
                else
                {
                    document.write("Obesity");
                }

            </script>

            <!-- This is for in and pounds-->

            <?php
                if(!empty($_POST))
                {
                    $weight2=$_POST['weight2'];
                    $height2=$_POST['height2'];

                    $bmi2=703*$weight2/(pow($height2,2));

                    echo <<<_END
                    "The answer for lbs and in is: <input type='text' value='" . $bmi2 . "'>";
                    _END;
                }
            ?>

            <script>

                var bmi2 = "<?php echo($bmi2);?>";

                if(bmi<18.5)
                {
                    document.write("You are underweight");
                }
                else if(bmi>=18.5 && bmi <= 14.9)
                {
                    document.write("Your weight is normal");
                }
                else if(bmi>=25 && bmi <= 29.9)
                {
                    document.write("You are overweight");
                }
                else
                {
                    document.write("Obesity");
                }

            </script>   
        </form>
    </body>
</html>
