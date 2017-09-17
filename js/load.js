// JavaScript Document

     function autoResizeDiv()
        {
var w=window.innerWidth
|| document.documentElement.clientWidth
|| document.body.clientWidth;

var h=window.innerHeight
|| document.documentElement.clientHeight
|| document.body.clientHeight;

document.getElementById('auto').style.marginTop = window.innerHeight*6/10 +'px';

 }
        window.onresize = autoResizeDiv;
        autoResizeDiv();
		



function autoResizeDiv()
        {
var w=window.innerWidth
|| document.documentElement.clientWidth
|| document.body.clientWidth;

var h=window.innerHeight
|| document.documentElement.clientHeight
|| document.body.clientHeight;

document.getElementById('demo').style.marginTop = window.innerHeight-80 +'px';


 }
        window.onresize = autoResizeDiv;
        autoResizeDiv();
	




