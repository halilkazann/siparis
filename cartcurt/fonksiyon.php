<?php

function bir($val1)
{
    function iki($val2)
    {
        function uc($val3)
        {
            echo $val3;
        }
        uc($val2);
    }
    iki($val1);
}

bir("mustafayısikim");