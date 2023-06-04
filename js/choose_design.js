function sled_vopr()
{
  var NextBut=document.getElementById('kn_sl');
  var Num=Number(NextBut.getAttribute('number'));
  var current="vopros"+Num;
  var NexNum=Num+1;
  var Next="vopros"+NexNum;


     if(document.getElementById(current).style.display == "block"){
   document.getElementById(current).style.display = "none";
   document.getElementById(Next).style.display = "block";
   NextBut.setAttribute('disabled','true');
   NextBut.setAttribute('Number',NexNum);
   }
}

function YouHavntPass(step){
	var f = document.forms["choose_design"].elements;
	var NextBut=document.getElementById('kn_sl');

	if(f[step-1].value>0){
		NextBut.removeAttribute('disabled');
	}
}
