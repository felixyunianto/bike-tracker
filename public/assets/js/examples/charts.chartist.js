"use strict";!function(){var e,n,s,r,t,a,i;function o(e){return Array.apply(null,new Array(e))}function l(e,t){return e+t}"undefined"!=typeof Chartist&&(new Chartist.Line("#js-chartist-demo-line-1",{labels:["Monday","Tuesday","Wednesday","Thursday","Friday"],series:[[12,9,7,8,5],[2,1,3.5,7,3],[1,3,4,5,6]]},{fullWidth:!0,chartPadding:{right:40}}),e=new Chartist.Line("#js-chartist-demo-line-2",{labels:["1","2","3","4","5","6","7","8","9","10","11","12"],series:[[12,9,7,8,5,4,6,2,3,3,4,6],[4,5,3,7,3,5,5,3,4,4,5,5],[5,3,4,5,6,3,3,4,5,6,3,4],[3,4,5,6,7,6,4,5,6,7,6,3]]},{low:0}),n=0,s=80,r=500,e.on("created",function(){n=0}),e.on("draw",function(e){var t,a,i;n++,"line"===e.type?e.element.animate({opacity:{begin:n*s+1e3,dur:r,from:0,to:1}}):"label"===e.type&&"x"===e.axis?e.element.animate({y:{begin:n*s,dur:r,from:e.y+100,to:e.y,easing:"easeOutQuart"}}):"label"===e.type&&"y"===e.axis?e.element.animate({x:{begin:n*s,dur:r,from:e.x-100,to:e.x,easing:"easeOutQuart"}}):"point"===e.type?e.element.animate({x1:{begin:n*s,dur:r,from:e.x-10,to:e.x,easing:"easeOutQuart"},x2:{begin:n*s,dur:r,from:e.x-10,to:e.x,easing:"easeOutQuart"},opacity:{begin:n*s,dur:r,from:0,to:1,easing:"easeOutQuart"}}):"grid"===e.type&&(t={begin:n*s,dur:r,from:e[e.axis.units.pos+"1"]-30,to:e[e.axis.units.pos+"1"],easing:"easeOutQuart"},a={begin:n*s,dur:r,from:e[e.axis.units.pos+"2"]-100,to:e[e.axis.units.pos+"2"],easing:"easeOutQuart"},(i={})[e.axis.units.pos+"1"]=t,i[e.axis.units.pos+"2"]=a,i.opacity={begin:n*s,dur:r,from:0,to:1,easing:"easeOutQuart"},e.element.animate(i))}),e.on("created",function(){window.__exampleAnimateTimeout&&(clearTimeout(window.__exampleAnimateTimeout),window.__exampleAnimateTimeout=null),window.__exampleAnimateTimeout=setTimeout(e.update.bind(e),12e3)}),t=o(52).map(Math.random).reduce(function(e,t,a){return e.labels.push(a+1),e.series.forEach(function(e){e.push(100*Math.random())}),e},{labels:[],series:o(4).map(function(){return new Array})}),new Chartist.Line("#js-chartist-demo-line-3",t,{showLine:!1,axisX:{labelInterpolationFnc:function(e,t){return t%13==0?"W"+e:null}}},[["screen and (min-width: 640px)",{axisX:{labelInterpolationFnc:function(e,t){return t%4==0?"W"+e:null}}}]]),new Chartist.Line("#js-chartist-demo-line-4",{labels:[1,2,3,4,5],series:[[12,9,7,8,5]]}).on("draw",function(e){var t;"point"===e.type&&(t=new Chartist.Svg("path",{d:["M",e.x,e.y-15,"L",e.x-15,e.y+8,"L",e.x+15,e.y+8,"z"].join(" "),style:"fill-opacity: 1"},"ct-area"),e.element.replace(t))}),new Chartist.Line("#js-chartist-demo-area-1",{labels:[1,2,3,4,5,6,7,8],series:[[5,9,7,8,5,3,5,4]]},{low:0,showArea:!0}),new Chartist.Line("#js-chartist-demo-area-2",{labels:["Mon","Tue","Wed","Thu","Fri","Sat"],series:[[1,5,2,5,4,3],[2,3,4,8,1,2],[5,4,3,2,1,.5]]},{low:0,showArea:!0,showPoint:!1,fullWidth:!0}).on("draw",function(e){"line"!==e.type&&"area"!==e.type||e.element.animate({d:{begin:2e3*e.index,dur:2e3,from:e.path.clone().scale(1,0).translate(0,e.chartRect.height()).stringify(),to:e.path.clone().stringify(),easing:Chartist.Svg.Easing.easeOutQuint}})}),new Chartist.Line("#js-chartist-demo-area-3",{labels:[1,2,3,4,5,6,7,8],series:[[1,2,3,1,-2,0,1,0],[-2,-1,-2,-1,-2.5,-1,-2,-1],[0,0,0,1,2,2.5,2,1],[2.5,2,1,.5,1,.5,-1,-2.5]]},{high:3,low:-3,showArea:!0,showLine:!1,showPoint:!1,fullWidth:!0,axisX:{showLabel:!1,showGrid:!1}}),new Chartist.Line("#js-chartist-demo-area-4",{labels:["1","2","3","4","5","6","7","8"],series:[{name:"series-1",data:[5,2,-4,2,0,-2,5,-3]},{name:"series-2",data:[4,3,5,3,1,3,6,4]},{name:"series-3",data:[2,4,3,1,4,5,3,2]}]},{fullWidth:!0,series:{"series-1":{lineSmooth:Chartist.Interpolation.step()},"series-2":{lineSmooth:Chartist.Interpolation.simple(),showArea:!0},"series-3":{showPoint:!1}}},[["screen and (max-width: 320px)",{series:{"series-1":{lineSmooth:Chartist.Interpolation.none()},"series-2":{lineSmooth:Chartist.Interpolation.none(),showArea:!1},"series-3":{lineSmooth:Chartist.Interpolation.none(),showPoint:!0}}}]]),new Chartist.Bar("#js-chartist-demo-bar-1",{labels:["W1","W2","W3","W4","W5","W6","W7","W8","W9","W10"],series:[[1,2,4,8,6,-2,-1,-4,-6,-2]]},{high:10,low:-10,axisX:{labelInterpolationFnc:function(e,t){return t%2==0?e:null}}}),new Chartist.Bar("#js-chartist-demo-bar-2",{labels:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],series:[[5,4,3,7,5,10,3,4,8,10,6,8],[3,2,9,5,4,6,4,6,7,8,7,4]]},{seriesBarDistance:10},[["screen and (max-width: 640px)",{seriesBarDistance:5,axisX:{labelInterpolationFnc:function(e){return e[0]}}}]]),new Chartist.Bar("#js-chartist-demo-bar-3",{labels:["Q1","Q2","Q3","Q4"],series:[[8e5,12e5,14e5,13e5],[2e5,4e5,5e5,3e5],[1e5,2e5,4e5,6e5]]},{stackBars:!0,axisY:{labelInterpolationFnc:function(e){return e/1e3+"k"}}}).on("draw",function(e){"bar"===e.type&&e.element.attr({style:"stroke-width: 30px"})}),new Chartist.Bar("#js-chartist-demo-bar-4",{labels:["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],series:[[5,4,3,7,5,10,3],[3,2,9,5,4,6,4]]},{seriesBarDistance:10,reverseData:!0,horizontalBars:!0,axisY:{offset:70}}),new Chartist.Bar("#js-chartist-demo-bar-5",{labels:["Mon","Tue","Wed","Thu","Fri","Sat","Sun"],series:[[5,4,3,7,5,10,3],[3,2,9,5,4,6,4]]},{axisX:{position:"start"},axisY:{position:"end"}}),new Chartist.Bar("#js-chartist-demo-bar-6",{labels:["XS","S","M","L","XL","XXL","XXXL"],series:[20,60,120,200,180,20,10]},{distributeSeries:!0}),new Chartist.Pie("#js-chartist-demo-pie-1",a={series:[5,3,4]},{labelInterpolationFnc:function(e){return Math.round(e/a.series.reduce(l)*100)+"%"}}),new Chartist.Pie("#js-chartist-demo-pie-2",{labels:["Bananas","Apples","Grapes"],series:[20,15,40]},{labelInterpolationFnc:function(e){return e[0]}},[["screen and (min-width: 640px)",{chartPadding:30,labelOffset:100,labelDirection:"explode",labelInterpolationFnc:function(e){return e}}],["screen and (min-width: 1024px)",{labelOffset:80,chartPadding:20}]]),new Chartist.Pie("#js-chartist-demo-pie-3",{series:[20,10,30,40]},{donut:!0,donutWidth:60,startAngle:270,total:200,showLabel:!1}),(i=new Chartist.Pie("#js-chartist-demo-pie-4",{series:[10,20,50,20,5,50,15],labels:[1,2,3,4,5,6,7]},{donut:!0,showLabel:!1})).on("draw",function(e){var t,a;"slice"===e.type&&(t=e.element._node.getTotalLength(),e.element.attr({"stroke-dasharray":t+"px "+t+"px"}),a={"stroke-dashoffset":{id:"anim"+e.index,dur:1e3,from:-t+"px",to:"0px",easing:Chartist.Svg.Easing.easeOutQuint,fill:"freeze"}},0!==e.index&&(a["stroke-dashoffset"].begin="anim"+(e.index-1)+".end"),e.element.attr({"stroke-dashoffset":-t+"px"}),e.element.animate(a,!1))}),i.on("created",function(){window.__anim21278907124&&(clearTimeout(window.__anim21278907124),window.__anim21278907124=null),window.__anim21278907124=setTimeout(i.update.bind(i),1e4)}))}();