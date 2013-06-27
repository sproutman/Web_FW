

<HTML>
    <HEAD>
        <TITLE>调用文本文件内容</TITLE>
    </HEAD>
    <BODY>
        Config MAC Object
        <h1> IP_Host </h1>
        <form name="object_ip" action="xml_mac.php" method="post">
            ip_name: 
            <input type="text" name="mac_name" />
            <!--<br />-->
            ip_address: 
            <input type="text" name="mac_address" />

            <input type="submit" value="Submit" />
        </form>
    </BODY>
</HTML>


<?
$doc = new DOMDocument();
$doc->load('demo_demo.xml');

//echo 'abc';

$ip_obj = $doc->getElementsByTagName("MAC对象");
echo "</br>";

foreach ($ip_obj as $ipo) {
    $titles = $ipo->getElementsByTagName("MAC名称");
    $title = $titles->item(0)->nodeValue;

    $authors = $ipo->getElementsByTagName("MAC值");
    $author = $authors->item(0)->nodeValue;


    echo "$title - $author\n";
    echo "</br>";
}
?>

