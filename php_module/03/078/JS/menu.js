scores = new Array(20);var numTotal=0;NS4 = (document.layers) ? 1 : 0;
IE4 = (document.all) ? 1 : 0;
ver4 = (NS4 || IE4) ? 1 : 0;
if (ver4) { with (document) { 
    write("<STYLE TYPE='text/css'>");
    if (NS4) { 
	    write(".parent {position:absolute; visibility:visible}");  
        write(".child {position:absolute; visibility:visible}");         
		write(".regular {position:absolute; visibility:visible}")
	} 
	else {
	    write(".child {display:none}")
	} 
write("</STYLE>");  
 }
}

function assort() { 
  nextY = document.layers[firstInd].pageY +document.layers[firstInd].document.height;
  for (i=firstInd+1; i<document.layers.length; i++) {
       info = document.layers[i];
	   if (info.visibility != "hide") {
	        info.pageY = nextY;			 
            nextY += info.document.height;
         }
  }
}


function initIt(){
    if (!ver4) return;
	    if (NS4) {
		       for (i=0; i<document.layers.length; i++) { 
		           info = document.layers[i];
				   if (info.id.indexOf("Child") != -1) info.visibility = "hide";
				}
				assort();
		 }
		 else {
		       divColl = document.all.tags("DIV");
			   for (i=0; i<divColl.length; i++) {
			        info = divColl(i);
					if (info.className == "child") info.style.display = "none";
				}
		  }
}

function dilate(el) {
	if (!ver4) return;
	     if (IE4) { 
		      info1 = eval(el + "Child");
			  		for(i=1;i<=numTotal;i++){
						info = eval(scores[i] + "Child");
						if(info!=info1) {
						 	info.style.display = "none";
						}
					}
				info1 = eval(el + "Child");
				if (info1.style.display == "none") {
				       info1.style.display = "block";
	            }
				else {
				       info1.style.display = "none";
			    }
		    }
			else {
			        info = eval("document." + el + "Child");
					    for(i=1;i<=numTotal;i++){info = eval("document." + scores[i] + "Child");
							if(info!=info1) {
								info.visibility = "hide";
							}
						}
					if ( info.visibility == "hide") {
					      info.visibility = "show";
					}
					else {
					      info.visibility = "hide";
					}
				    assort();
		   }
}
onload = initIt;