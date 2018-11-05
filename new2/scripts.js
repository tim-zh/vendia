ia=new Array();
for(i=0;i<=4;++i)
{
	ia[i]=new Image();
	ia[i].src='images/logo'+i+'.jpg';
}
timer=0;
dt=20;
d=0;
opacity=1;
curImage=0;

function load()
{
	for(i=0;i<5;++i)
	{
		isOver[i]=false;
		w[i]=0;
	}

	moveText(0);
	if(document.getElementById('curSMI'))
		document.getElementById('curSMI').style.display='block';

	animat(d,dt);
}

function animat(d)
{
	switch(d)
	{
		case 0:
			if(timer<700)
			{
				++timer;
				setTimeout('animat(0)',dt);
			}
			else
			{
				timer=0;
				setTimeout('animat(-1)',dt);
			}
			break;
		case -1:
			if(opacity>0)
			{
				opacity-=0.05;
				document.getElementById('logo').style.opacity=opacity;
				setTimeout('animat(-1)',dt);
			}
			else
			{
				if(curImage==ia.length-1)
					curImage=0;
				else
					++curImage;
				document.getElementById('logo').src=ia[curImage].src;
				setTimeout('animat(1)',dt);
			}
			break;
		case 1:
			if(document.getElementById('logo').style.opacity<1)
			{
				opacity+=0.05;
				document.getElementById('logo').style.opacity=opacity;
				setTimeout('animat(1)',dt);
			}
			else
				setTimeout('animat(0)',dt);
			break;
	}
}

function moveText(curText)
{
	if(document.getElementById('smi'+curText))
	{
		document.getElementById('curSMI').style.left=document.getElementById('smi'+curText).offsetLeft;
		document.getElementById('curSMI').style.width=document.getElementById('smi'+curText).offsetWidth;
	}
	document.getElementById('text').innerHTML=document.getElementById('textBox'+curText).innerHTML;
}

isOver=new Array();
w=new Array();
