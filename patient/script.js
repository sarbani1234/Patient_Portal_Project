/* a Pen by Diaco m.lotfollahi  : https://diacodesign.com */

var S = document.getElementById('mySVG') , container = document.getElementById('container') ;

for (i=0; i<80; i++){ 
  var I=i&1 , C = I?'#fff':'hsl('+R(130,170)+',100%,65%)';
  var Div=document.createElement('div');
  TweenLite.set(Div,{attr:{class:'dot'},x:I?90:210,y:130,scale:R(0.1,1),opacity:R(0.5,1),backgroundColor:C});
  container.insertBefore(Div,S);
};

var Dots = container.querySelectorAll(".dot");
function particles(){
  for (i=0; i<Dots.length; i++){var I=i&1 , Div=Dots[i]; anim(Div,I);};
}

function anim(E,X){
  TweenMax.to(E,R(2,4),{y:R(250,350),x:X?R(100,200):R(100,200),scale:0.5,opacity:0,ease:Linear.easeNone,repeat:-1,delay:R(0,4)});
  TweenMax.to(E,2,{xPercent:X?400:-400,repeat:-1,yoyo:true,ease:Sine.easeInOut,delay:R(1,5)});
};

var tl = new TimelineMax()
  .staggerTo(['.CW','.CG'],1,{cycle:{rotation:[45,-45],x:[-20,15],y:[-5,10]},transformOrigin:'center',ease:Back.easeOut},0,1.5)
  .addCallback(particles,'-=0.5')
  .to('.Capsule',1,{y:'+=15',repeat:-1,yoyo:true,ease:Sine.easeInOut})

function R(min,max){return min+(Math.random()*(max-min))};

/* a Pen by Diaco m.lotfollahi  : https://diacodesign.com */