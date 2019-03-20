 <?php
$link = mysqli_connect("127.0.0.1","megataiger","","base");

$zap = mysqli_query($link, 'select * from CMS order by page_weight asc');

$menu = "\t<ul>\n";

while($result = mysqli_fetch_assoc($zap))
{
	$stroke = $result;
	$spisok = array(
		"page_id" => $stroke["page_id"], 
		"page_name" =>  $stroke["page_name"],
		"page_text" => $stroke["page_text"]
					);
	if (isset($_GET["temp"]))
	{ 
		if($_GET["temp"] == $spisok["page_id"])
		{	
			$menu .= "\t\t<li>" . $spisok["page_name"] . "</li>\n";
			$body = $spisok["page_text"];
		}
		else
			$menu .= "\t\t<li><a href=?temp=" . $spisok["page_id"] . ">" . $spisok["page_name"]."</a></li>\n";
	}
	else
	{
		$menu .= "\t\t<li><a href=?temp=" . $spisok["page_id"] . ">" . $spisok["page_name"]."</a></li>\n";
		$body = "Добро пожаловать!\n";
	}
}

$menu .= "\t</ul>\n";

 ?>