<?php

function greetTeamMember($name)
{
	echo ("Hello ". $name . "<br>");
}

//The team is coming into town. Say hello to everyone on the team!

$teamMemberName = array("Chris K", "Chris S", "Claudia", "Eric", "Jason", "Sean", "Shweta", "Srini", "BIG_Thomas!");

foreach($teamMemberName as $name)
{
 	greetTeamMember($name);
}

?>