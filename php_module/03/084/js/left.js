	var adve=0.15
	var collection;
	function motion() {
		this.items	= [];
		this.addItem	= function(id,x,y,content)
				  {
					document.write('<DIV id='+id+' style="Z-INDEX: 10; POSITION: absolute;  width:80px; height:60px;left:'+(typeof(x)=='string'?eval(x):x)+';top:'+(typeof(y)=='string'?eval(y):y)+'">'+content+'</DIV>');
					
					var newItem				= {};
					newItem.object			= document.getElementById(id);
					newItem.x				= x;
					newItem.y				= y;

					this.items[this.items.length]		= newItem;
				  }
		this.play	= function()
				  {
					collection				= this.items
					setInterval('play()',10);
				  }
		}
		function play()
		{

			for(var i=0;i<collection.length;i++)
			{
				var followObj		= collection[i].object;
				var followObj_x		= (typeof(collection[i].x)=='string'?eval(collection[i].x):collection[i].x);
				var followObj_y		= (typeof(collection[i].y)=='string'?eval(collection[i].y):collection[i].y);

				if(followObj.offsetLeft!=(document.body.scrollLeft+followObj_x)) {
					var dx=(document.body.scrollLeft+followObj_x-followObj.offsetLeft)*adve;
					dx=(dx>0?1:-1)*Math.ceil(Math.abs(dx));
					followObj.style.left=followObj.offsetLeft+dx;
					}

				if(followObj.offsetTop!=(document.body.scrollTop+followObj_y)) {
					var dy=(document.body.scrollTop+followObj_y-followObj.offsetTop)*adve;
					dy=(dy>0?1:-1)*Math.ceil(Math.abs(dy));
					followObj.style.top=followObj.offsetTop+dy;
					}
				followObj.style.display	= '';
			}
		}	
		
	var themotion		= new motion();
	themotion.addItem('followDiv1',200,200,'<a href="http://wpa.qq.com/msgrd?V=1&Uin=228691050&Site=在线咨询&Menu=no" title="在线即时交谈"><img src=./images/qqhelp.gif  height=70 width="80" border=0></a>');
	themotion.play();