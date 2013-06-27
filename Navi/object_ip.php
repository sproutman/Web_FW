<HTML>
    <HEAD>
        <TITLE>调用文本文件内容</TITLE>
    </HEAD>
    <BODY>

        <!--echo 'Object config';-->
        Config Object
        <!--echo "</br>";-->

        <h1> IP_Host </h1>
        <form name="object_ip" action="writeFile.php" method="post">
            ip_name: 
            <input type="text" name="ip_name" />
            <!--<br />-->
            ip_address: 
            <input type="text" name="ip_address" />

            <input type="submit" value="Submit" />
        </form>
    <LEFT>
        <?
// 打开文件同时，打印每一行
        $myFile = file("ip_Object.txt");
        for ($index = 0; $index < count($myFile); $index++) {
            print($myFile[$index] . "<BR>");
//            $temp = $myFile[$index];
//            list($name, $addr) = explode(" ", $temp);        
//                echo "$name,$addr <br>";
            
        }
        ?>
    </LEFT>
</BODY>
</HTML>
