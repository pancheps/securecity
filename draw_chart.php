<?php
function show_d($variable)
{
	switch($variable)
	{
	case 1:
	echo('<script type="text/javascript" src="crime_city.js">');
	echo('</script>');
	break;
	case 2:
	echo('<script type="text/javascript" src="crime_prob.js">');
	echo('</script>');
	break;
	case 3:
	echo('<script type="text/javascript" src="Insecurity_rase.js">');
	echo('</script>');
	break;
	case 4:
	echo('<script type="text/javascript" src="hour_crime.js">');
	echo('</script>');
	break;
	case 5:
	echo('<script type="text/javascript" src="weapon_crime.js">');
	echo('</script>');
	break;
	default:
	echo("Chart dont found");
	break;
	}
}
?>
