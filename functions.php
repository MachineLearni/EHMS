<?php

// Useful functions in here
        
// Replaces any HTML special characters with appropriate escape sequences
function make_html_safe($row)
{
        return filter_var_array($row, FILTER_SANITIZE_SPECIAL_CHARS);
}
        
// Takes a string representing a country, and returns an html img tag linking to the country's flag
function get_flag($nationality)
{
        if ($nationality == "British")
        {
                return "<img src=\"./images/flags/flag1.gif\"/>";
        }
        else if ($nationality == "American")
        {
                return "<img src=\"./images/flags/flag2.gif\"/>";
        }
        else if ($nationality == "Canadian")
        {
                return "<img src=\"./images/flags/flag3.gif\"/>";
        }
        else
        {
                return $nationality;
        }
}

function start_div_region($title)
{
		echo "<div class=\"subcontent\">";
		echo "<div class=\"subcontentheader\">" . $title . "</div>";
		echo "<div class=\"subcontentbody\">";
}


function end_div_region()
{
	echo "</div></div>";
}



?>
