function masonry_pluginAppObj_16_15(){function loadImage(){$grid.imagesLoaded().progress(function(imgLoad,image){$grid.masonry("layout");effect==="none"&&$(image.img).delay(500).animate({opacity:1})}).done(function(){effect!=="none"&&(loaders.push(new GridLoaderFx($grid)),applyFx());resized_pluginAppObj_16_15()})}function init_resize(){resize_masonry();$grid.masonry("layout")}function resize_masonry(){var columns=4,width,container_width=$("#pluginAppObj_16_15").width(),item_width;item_width=276.25;width=100/Math.ceil(container_width/item_width)+"%";$("#masonry_pluginAppObj_16_15 .grid-item").css("width",width);resized_pluginAppObj_16_15()}function resized_pluginAppObj_16_15(){$("#masonry_pluginAppObj_16_15 .grid-item .item-wrapper").each(function(){$(this).find(".overlay-content").css({width:$(this).width(),height:$(this).height()})})}function create_showbox(){$("#masonry_pluginAppObj_16_15 .grid-item.showbox").off("click");$("#masonry_pluginAppObj_16_15 .grid-item.showbox").on("click",function(){for(var starting_index=parseInt($(this).attr("data-index"),10),images=["pluginAppObj/pluginAppObj_16_15/mebel--1-.webp","pluginAppObj/pluginAppObj_16_15/mebel--2-.webp","pluginAppObj/pluginAppObj_16_15/mebel--3-.webp","pluginAppObj/pluginAppObj_16_15/mebel--4-.webp","pluginAppObj/pluginAppObj_16_15/mebel--5-.webp","pluginAppObj/pluginAppObj_16_15/mebel--6-.webp","pluginAppObj/pluginAppObj_16_15/mebel--7-.webp","pluginAppObj/pluginAppObj_16_15/mebel--8-.webp","pluginAppObj/pluginAppObj_16_15/mebel--9-.webp","pluginAppObj/pluginAppObj_16_15/mebel--10-.webp","pluginAppObj/pluginAppObj_16_15/mebel--11-.webp","pluginAppObj/pluginAppObj_16_15/mebel--12-.webp","pluginAppObj/pluginAppObj_16_15/mebel--13-.webp","pluginAppObj/pluginAppObj_16_15/mebel--14-.webp","pluginAppObj/pluginAppObj_16_15/mebel--15-.webp","pluginAppObj/pluginAppObj_16_15/mebel--16-.webp","pluginAppObj/pluginAppObj_16_15/mebel--17-.webp","pluginAppObj/pluginAppObj_16_15/mebel--18-.webp","pluginAppObj/pluginAppObj_16_15/mebel--19-.webp","pluginAppObj/pluginAppObj_16_15/mebel--20-.webp","pluginAppObj/pluginAppObj_16_15/mebel--21-.webp","pluginAppObj/pluginAppObj_16_15/mebel--22-.webp","pluginAppObj/pluginAppObj_16_15/mebel--23-.webp","pluginAppObj/pluginAppObj_16_15/mebel--24-.webp","pluginAppObj/pluginAppObj_16_15/mebel--25-.webp","pluginAppObj/pluginAppObj_16_15/mebel--26-.webp","pluginAppObj/pluginAppObj_16_15/mebel--27-.webp","pluginAppObj/pluginAppObj_16_15/mebel--28-.webp","pluginAppObj/pluginAppObj_16_15/mebel--29-.webp","pluginAppObj/pluginAppObj_16_15/mebel--30-.webp"],medias=[],i=0;i<images.length;i++)medias[i]={url:x5engine.settings.currentPath+images[i],type:"image"};return x5engine.imShowBox({media:medias},starting_index,$(this)),!1})}function applyFx(){loadingTimeout=setTimeout(function(){loaders[0]._render()},500)}function GridLoaderFx(el){this.el=el;this.items=$(el).find(".grid-item .item-img")}var $grid,grid="",loaders=[],loadingTimeout,effect="Hapi";x5engine.boot.push(function(){if(resize_masonry(),grid=$("#masonry_pluginAppObj_16_15 .grid"),$grid=$("#masonry_pluginAppObj_16_15 .grid").masonry({itemSelector:"#masonry_pluginAppObj_16_15 .grid-item",percentPosition:!0,columnWidth:$("#masonry_pluginAppObj_16_15 .grid-item")[0],transitionDuration:0}),$("#masonry_pluginAppObj_16_15 .grid-item .item-wrapper img").each(function(){$(this).attr("src",x5engine.settings.currentPath+$(this).attr("src"))}),!0)x5engine.utils.onElementInViewPort($("#masonry_pluginAppObj_16_15")[0],loadImage,$("#masonry_pluginAppObj_16_15 .grid-item:lt(1)").height()/3);else loadImage();var pluginAppObj_16_15_resizeTo=null,pluginAppObj_16_15_width=0;x5engine.utils.onElementResize(document.getElementById("pluginAppObj_16_15"),function(rect){pluginAppObj_16_15_width!=rect.width&&(pluginAppObj_16_15_width=rect.width,!pluginAppObj_16_15_resizeTo||clearTimeout(pluginAppObj_16_15_resizeTo),pluginAppObj_16_15_resizeTo=setTimeout(function(){init_resize()},50))});create_showbox()});GridLoaderFx.prototype._render=function(){var animeLineDrawingOpts,animeRevealerOpts;this._resetStyles();var self=this,effectSettings=this.effects[effect],animeOpts=effectSettings.animeOpts;effectSettings.perspective!=undefined&&[].slice.call(this.items).forEach(function(item){item.parentNode.style.WebkitPerspective=item.parentNode.style.perspective=effectSettings.perspective+"px"});effectSettings.origin!=undefined&&[].slice.call(this.items).forEach(function(item){item.style.WebkitTransformOrigin=item.style.transformOrigin=effectSettings.origin});effectSettings.lineDrawing!=undefined&&([].slice.call(this.items).forEach(function(item){var svg=document.createElementNS("http://www.w3.org/2000/svg","svg"),path=document.createElementNS("http://www.w3.org/2000/svg","path"),itemW=item.offsetWidth-.1,itemH=item.offsetHeight;svg.setAttribute("width",itemW+"px");svg.setAttribute("height",itemH+"px");svg.setAttribute("viewBox","0 0 "+itemW+" "+itemH);svg.setAttribute("class","grid__deco");path.setAttribute("d","M0,0 l"+itemW+",0 0,"+itemH+" -"+itemW+",0 0,-"+itemH);path.setAttribute("stroke-dashoffset",anime.setDashoffset(path));svg.appendChild(path);item.parentNode.appendChild(svg)}),animeLineDrawingOpts=effectSettings.animeLineDrawingOpts,animeLineDrawingOpts.targets=document.querySelectorAll("#masonry_pluginAppObj_16_15 .grid__deco > path"),anime.remove(animeLineDrawingOpts.targets),anime(animeLineDrawingOpts));effectSettings.revealer!=undefined&&([].slice.call(this.items).forEach(function(item){var revealer=document.createElement("div");revealer.className="grid__reveal";effectSettings.revealerOrigin!=undefined&&(revealer.style.transformOrigin=effectSettings.revealerOrigin);effectSettings.revealerColor!=undefined&&(revealer.style.backgroundColor="rgba(159, 171, 176, 1)");item.parentNode.appendChild(revealer)}),animeRevealerOpts=effectSettings.animeRevealerOpts,animeRevealerOpts.targets=document.querySelectorAll("#masonry_pluginAppObj_16_15 .grid__reveal"),animeRevealerOpts.begin=function(obj){for(var i=0,len=obj.animatables.length;i<len;++i)obj.animatables[i].target.style.opacity=1},anime.remove(animeRevealerOpts.targets),anime(animeRevealerOpts));effectSettings.itemOverflowHidden&&[].slice.call(this.items).forEach(function(item){item.parentNode.style.overflow="hidden"});animeOpts.targets=effectSettings.sortTargetsFn&&typeof effectSettings.sortTargetsFn=="function"?[].slice.call(this.items).sort(effectSettings.sortTargetsFn):document.querySelectorAll("#masonry_pluginAppObj_16_15 .item-img");animeOpts.complete=function(){for(var i=0;i<loaders[0].items.length;i++)loaders[0].items[i].style="",loaders[0].items[i].style.opacity="1",loaders[0].items[i].style.transition="all 300ms ease"};anime.remove(animeOpts.targets);anime(animeOpts)};GridLoaderFx.prototype._resetStyles=function(){this.el.style="";this.el.style.perspective="";this.el.style.WebkitPerspective=this.el.style.perspective="none";[].slice.call(this.items).forEach(function(item){var gItem=item.parentNode,svg,revealer;item.style.opacity=0;item.style.WebkitTransformOrigin=item.style.transformOrigin="50% 50%";item.style.transform="none";svg=item.parentNode.querySelector("svg.grid__deco");svg&&gItem.removeChild(svg);revealer=item.parentNode.querySelector(".grid__reveal");revealer&&gItem.removeChild(revealer);gItem.style.overflow=""})};GridLoaderFx.prototype.effects={Hapi:{animeOpts:{duration:function(t,i){return 600+i*75},easing:"easeOutExpo",delay:function(t,i){return i*50},opacity:{value:[0,1],easing:"linear"},scale:[0,1]}},Amun:{sortTargetsFn:function(a,b){var aBounds=a.getBoundingClientRect(),bBounds=b.getBoundingClientRect();return aBounds.left-bBounds.left||aBounds.top-bBounds.top},animeOpts:{duration:function(t,i){return 500+i*50},easing:"easeOutExpo",delay:function(t,i){return i*20},opacity:{value:[0,1],duration:function(t,i){return 250+i*50},easing:"linear"},translateY:[400,0]}},Kek:{sortTargetsFn:function(a,b){return b.getBoundingClientRect().left-a.getBoundingClientRect().left},animeOpts:{duration:800,easing:[.1,1,.3,1],delay:function(t,i){return i*20},opacity:{value:[0,1],duration:600,easing:"linear"},translateX:[-500,0],rotateZ:[15,0]}},Isis:{animeOpts:{duration:900,elasticity:500,delay:function(t,i){return i*15},opacity:{value:[0,1],duration:300,easing:"linear"},translateX:function(){return[anime.random(0,1)===0?100:-100,0]},translateY:function(){return[anime.random(0,1)===0?100:-100,0]}}},Montu:{perspective:800,origin:"50% 0%",animeOpts:{duration:1500,elasticity:400,delay:function(t,i){return i*75},opacity:{value:[0,1],duration:1e3,easing:"linear"},rotateX:[-90,0]}},Osiris:{perspective:3e3,animeOpts:{duration:function(){return anime.random(500,1e3)},easing:[.2,1,.3,1],delay:function(t,i){return i*50},opacity:{value:[0,1],duration:700,easing:"linear"},translateZ:{value:[-3e3,0],duration:1e3},rotateY:["-1turns",0]}},Satet:{animeOpts:{duration:800,elasticity:600,delay:function(t,i){return i*100},opacity:{value:[0,1],duration:600,easing:"linear"},scaleX:{value:[.4,1]},scaleY:{value:[.6,1],duration:1e3}}},Atum:{sortTargetsFn:function(a,b){var docScrolls={top:document.body.scrollTop+document.documentElement.scrollTop},y1=window.innerHeight+docScrolls.top,aBounds=a.getBoundingClientRect(),ay1=aBounds.top+docScrolls.top+aBounds.height/2,bBounds=b.getBoundingClientRect(),by1=bBounds.top+docScrolls.top+bBounds.height/2;return Math.abs(y1-ay1)-Math.abs(y1-by1)},perspective:1e3,origin:"50% 0%",animeOpts:{duration:800,easing:[.1,1,.3,1],delay:function(t,i){return i*35},opacity:{value:[0,1],duration:600,easing:"linear"},translateX:[100,0],translateY:[-100,0],translateZ:[400,0],rotateZ:[10,0],rotateX:[75,0]}},Ra:{origin:"50% 0%",animeOpts:{duration:500,easing:"easeOutBack",delay:function(t,i){return i*100},opacity:{value:[0,1],easing:"linear"},translateY:[400,0],scaleY:[{value:[3,.6],delay:function(t,i){return i*100+120},duration:300,easing:"easeOutExpo"},{value:[.6,1],duration:1400,easing:"easeOutElastic"}],scaleX:[{value:[.9,1.05],delay:function(t,i){return i*100+120},duration:300,easing:"easeOutExpo"},{value:[1.05,1],duration:1400,easing:"easeOutElastic"}]}},Sobek:{animeOpts:{duration:600,easing:"easeOutExpo",delay:function(t,i){return i*100},opacity:{value:[0,1],duration:100,easing:"linear"},translateX:function(t){var docScrolls={left:document.body.scrollLeft+document.documentElement.scrollLeft},x1=window.innerWidth/2+docScrolls.left,tBounds=t.getBoundingClientRect(),x2=tBounds.left+docScrolls.left+tBounds.width/2;return[x1-x2,0]},translateY:function(t){var docScrolls={top:document.body.scrollTop+document.documentElement.scrollTop},y1=window.innerHeight+docScrolls.top,tBounds=t.getBoundingClientRect(),y2=tBounds.top+docScrolls.top+tBounds.height/2;return[y1-y2,0]},rotate:function(t){var x1=window.innerWidth/2,tBounds=t.getBoundingClientRect(),x2=tBounds.left+tBounds.width/2;return[x2<x1?90:-90,0]},scale:[0,1]}},Ptah:{itemOverflowHidden:!0,sortTargetsFn:function(a,b){return b.getBoundingClientRect().left-a.getBoundingClientRect().left},origin:"100% 0%",animeOpts:{duration:500,easing:"easeOutExpo",delay:function(t,i){return i*20},opacity:{value:[0,1],duration:400,easing:"linear"},rotateZ:[45,0]}},Bes:{revealer:!0,revealerOrigin:"100% 50%",animeRevealerOpts:{duration:800,delay:function(t,i){return i*75},easing:"easeInOutQuart",scaleX:[1,0]},animeOpts:{duration:800,easing:"easeInOutQuart",delay:function(t,i){return i*75},opacity:{value:[0,1],easing:"linear"},scale:[.8,1]}},Seker:{revealer:!0,revealerOrigin:"50% 100%",animeRevealerOpts:{duration:500,delay:function(t,i){return i*50},easing:[.7,0,.3,1],translateY:[100,0],scaleY:[1,0]},animeOpts:{duration:500,easing:[.7,0,.3,1],delay:function(t,i){return i*50},opacity:{value:[0,1],duration:400,easing:"linear"},translateY:[100,0],scale:[.8,1]}},Nut:{revealer:!0,revealerColor:"#1d1d1d",itemOverflowHidden:!0,animeRevealerOpts:{easing:"easeOutCubic",delay:function(t,i){return i*100},translateX:[{value:["101%","0%"],duration:400},{value:["0%","-101%"],duration:400}]},animeOpts:{duration:900,easing:"easeOutCubic",delay:function(t,i){return 400+i*100},opacity:{value:1,duration:1,easing:"linear"},scale:[.8,1]}},Shu:{lineDrawing:!0,animeLineDrawingOpts:{duration:800,delay:function(t,i){return i*150},easing:"easeInOutSine",strokeDashoffset:[anime.setDashoffset,0],opacity:[{value:[0,1]},{value:[1,0],duration:200,easing:"linear",delay:500}]},animeOpts:{duration:800,easing:[.2,1,.3,1],delay:function(t,i){return i*150+800},opacity:{value:[0,1],easing:"linear"},scale:[.5,1]}}}}