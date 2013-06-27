<?php
 class pop3
 {
  public  $hostname="";
  public $port=110;
  public $timeout=5;
  public $connection=0;
  public $state="DISCONNECTED";
  public $debug=0;
  public $err_str='';
  public $err_no='';
  public $resp;
  public $apop;
  public $messages;
  public $size;
  public $mail_list;
  public $head=array();
  public $body=array();
  
   function __construct($server="192.168.1.42",$port=110,$time_out=5)
    {
	  $this->hostname=$server;
	  $this->port=$port;
	  $this->timeout=$time_out;
	  return true;
	
	}
	
	function open()
	{
	  if($this->hostname=="")
	   {
	     $this->err_str="��������������";
		 return false;
	   }
	   if($this->debug)
	  
	    echo "�������ӷ�������";
		
	 
	    if(!$this->connection=@fsockopen($this->hostname,$this->port,&$err_no,&$err_str,$this->timeout))
	    {
		 $this->err_str="���ӷ�����ʧ�ܣ�������Ϣ��".$err_str."����ţ�".$err_no;
		 return false;
		
		 }
		else
		{
		  $this->getresp();
		  if($this->debug)
		   
		     $this->outdebug($this->resp);
			 
	
		   if(substr($this->resp,0,3)!="+OK")
		   {
		    $this->err_str="������������Ч��Ϣ��".$this->resp."����������Ƿ���ȷ!";
			return false;
		   
		   }
		   $this->state="AUTHORIZATION";
		   return true;
		   
		  }
	 }
	
	  
	  function getresp()
	  {
	    for($this->resp="";;)
		{
		  if(feof($this->connection))
		     return false;
		  $this->resp.=fgets($this->connection,100);
		  $length=strlen($this->resp);
		  
		  if($length>=2 && substr($this->resp,$length-2,2)=="\r\n")
		    {
			  $this->resp=strtok($this->resp,"\r\n");
			  return true;
			 } 
			}
	     }
	
	
	function outdebug($message)
	 {
	   echo htmlspecialchars($message)."<br>\n";
	 
	 }
	 
	 
	 function command($command,$return_length=1,$return_code='+')
	 {
	    if($this->connection==0)
		{
		 $this->err_str="û���������κη�������������������!";
		 return false;
		
		}
		if($this->debug)
	     $this->outdebug(">>> $command");
		
		if(!fputs($this->connection,"$command\r\n"))
		 {
		   $this->err_str="�޷���������".$command;
		   return false;
		 }
		 else
		 {
		   $this->getresp();
		   if($this->debug)
		      $this->outdebug($this->resp);
			if(substr($this->resp,0,$return_length)!=$return_code)
			{
			   $this->err_str=$command."���������������Ч��".$this->resp;
			   return false;
			}
			else
			  return true;  
		 }
	 
	 }
	  
	  
	   function login($user,$password)
	   {
	     if($this->state!="AUTHORIZATION")
		 {
		   $this->err_str="��û�����ӵ���������״̬����!";
		   return false;
		 
		 }
		 if(!$this->apop)
		  {
		    if(!$this->command("USER $user",3,"+OK"))
			   return false;
			if(!$this->command("PASS $password",3,"+OK"))
			   return false;   
		  
		  }
		 else
		  {
		    
			 if(!$this->command("APOP $user".md5($this->greeting.$password),3,"+OK"))
		          return false;           
		 
		  } 
		  $this->state="TRANSACTION";
		  return true;
	     
	   }
	   
	   
	   function stat()
	   {
	      if($this->state!="TRANSACTION")
		  {
		    $this->err_str="��û�����ӵ���������û�е�¼�ɹ���";
			return false;
		  
		  }
	      if(!$this->command("STAT",3,"+OK"))
		     return false;
		  else
		    {
			  $this->resp=strtok($this->resp," ");
			  $this->messages=strtok(" ");
			  $this->size=strtok(" ");
			  return true;
			}	 
	   
	   }
	   
	   function listmail($mess=NULL,$uni_id=NULL)
	    {
		 if($this->state!="TRANSACTION")
		 {
		   $this->err_str="��û�����ӵ���������û�е�¼�ɹ�!";
		   return false;
		 
		 }
		 if($uni_id)
		  $command="UIDL";
		 else
		 $command="LIST";
		 if($mess)
		   $command.=$mess;
		  if(!$this->command($command,3,"+OK"))
		   {
		    
		     return false;
		   } 
		   else
		   {
		    $i=0;
			$this->mail_list=array();
			$this->getresp();
			while($this->resp!=".")
			{
			 $i++;
			 if($this->debug)
			  {
			    $this->outdebug($this->resp);
			  }
			 if($uni_id)
			 {
			  $this->mail_list[$i][num]=strtok($this->resp," ");
			  $this->mail_list[$i][size]=strtok(" ");
			 } 
			 else
			  {
			   $this->mail_list[$i]["num"]=intval(strtok($this->resp," "));
			   $this->mail_list[$i]["size"]=intval(strtok(" "));
			  }
			 $this->getresp(); 
			}
			return true;
			}
		  }
	  
	  function getmail($num=1,$line=-1)
	   {
	     if($this->state!="TRANSACTION")
		  {
		    $this->err_str="�������ʼ�����û�����ӷ��������¼�ɹ���";
		    return false;
		  }
	      if($line<0)
		   $command="RETR $num";
	      else
		  $command="TOP $num $line";
		  if(!$this->command("$command",3,"+OK"))
		    return false;
		 else
		   {
		     $this->getresp();
			 $is_head=true;
			 while($this->resp!=".")
			  {
			   if($this->debug)
			    $this->outdebug($this->resp);
			   if(substr($this->resp,0,1)==".")
			     $this->resp=substr($this->resp,1,strlen($this->resp)-1);	
			   if(trim($this->resp)=="")
				  $is_head=false;
			   if($is_head)
				$this->head[]=$this->resp;
			   else
			    $this->body[]=$this->resp;
				$this->getresp();	 
			  
			  }
		   
		     return true;
		   }	
		 }
	  
	   function dele($num)
	    {
		  if($this->state!="TRANSACTION")
		   {
		   $this->err_str="����ɾ���ʼ�";
		   return false;
		   }
		   if(!$num)
		    {
			  $this->err_str="ɾ�����ʼ��������ԣ�";
			  return false;
			
			} 
		  if($this->command("DELE $num",3,"+OK"))
		    return true;
		  else 
		    return false;		
		
		}
	  
	  function close()
	   {
	    if($this->connection!=0)
		 {
		   if($this->state=="TRANSACTION")
		   $this->command("QUIT",3,"+OK");
		   fclose($this->connection);
		   $this->connection=NULL;
		   $this->state="DISCONNECTED";
		 }
	   
	   }
	    
	 }
  
?>
