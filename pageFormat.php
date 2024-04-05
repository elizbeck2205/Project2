<!--This PHP function, named pageHeader, is designed to generate a header section for a webpage. It takes three parameters: $title (presumably the title of the page), $logo (the URL of the logo image), and $itemArr (an array of items for navigation).

The function first outputs the logo image with a fixed width and height. Then, it iterates through each item in the $itemArr array, generating a navigation link for each item. Each link is created as an anchor (<a>) tag with a corresponding PHP file ($item.php) as the href attribute.

Finally, the function adds a horizontal line (<hr>) to visually separate the header from the rest of the page content.-->


<?php 
function pageHeader($title, $img, $itemArr)
{
	echo "<img src=\"$img\" alt=\"$img\" width=\"100\" height=\"100\">";
	foreach($itemArr as $item)
	{
		$mLink=$item.".php";
		echo "<a href = \"$mLink\" style=\"margin-right: 30px; text-decoration: none;\"><span class=\"m-3\" style=\"font-size: 30px;\">$item</span></a>";	
	}
	echo"<hr>";
}
?>