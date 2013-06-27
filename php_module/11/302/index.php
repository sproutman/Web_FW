<?PHP
session_start();
class counter
 {
    private $filename;
	public function __construct($x)
	 {
	  $this->filename=$x;
	 }
    
	public function getcoun()
	{ 
       $countfile=$this->filename;
       $fp=fopen($countfile,"r");
       $num=fgets($fp,10);
       if($_SESSION["count_id"]=="")
	    {
	     $num+=1;
	     $_SESSION["count_id"]="count_id";
        }
	
	   $imagenum=intval($num);
	   for($i=0;$i<8-strlen($imagenum);$i++)
	    {
	      echo "<img src=images/count/0.gif>";
	    }
	   for($i=0;$i<strlen($imagenum);$i++)
	    {
	      echo "<img src=images/count/".substr($imagenum,$i,1).".gif>"; 
	    }
	   $fp1=fopen($countfile,"w"); 
	   fputs($fp1,$num);
	}
 }

$coun=new counter("./count.txt");
echo "您是明日科技第";
$coun->getcoun();
echo "位访客!";
?>	
	