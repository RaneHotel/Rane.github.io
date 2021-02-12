/* (function() {
	  
        var tryMessage = function() {
		 if(habboRank < 3){
            setTimeout(function() {
                if(!document.getElementsByClassName) return;
                var ads = document.getElementsByClassName('afs_ads'),
                    ad  = ads[ads.length - 1];

                if(!ad || ad.innerHTML.length == 0 || ad.clientHeight === 0) {
                    popup('anti-adblocker');
                } else {
                    ad.style.display = 'none';
                }

            }, 2000);
		 }
        }
		

  
        if(window.addEventListener) {
            window.addEventListener('load', tryMessage, false);
        } else {
            window.attachEvent('onload', tryMessage); 
        }
})(); 
*/
	
// CLIENTLOADER

var jjLoader = {
	'maxStep': 0,
	'currentStep': 1,
	'isInit': false,
	'interval': null,
	'init': function(_wrapperId, _maxStep, _imageUrl, _backgroundUrl){
		jjLoader.maxStep = _maxStep;
		
		var wrapper = document.getElementById(_wrapperId);
		
		wrapper.innerHTML += '<div id="wrapperLoader" style="background: #000000 center no-repeat; position: absolute; z-index: 100; top: 0; left: 0; width: 100%; height: 100%;"><div id="hintergrund" style="background: url(http://imageloader.de/?img=291440955088.png) center center; width: 100%;opacity: 0.5;height: 100%;left: 0;right: 0;margin: auto;background-size: cover;"></div><div id="wrapperLoaderBox" style="width: auto; height: auto; padding: 5px; border-radius: 10px; background: rgba(255, 255, 255, 0.7) center 15px no-repeat; position: absolute; left: 50%; top: 50%; margin-top: -200px; margin-left: -300px; padding: 7px;opacity: 1;"><div id="wrapperLoaderText" style="  text-align: center; font-family: Arial; color: #FFFFFF; font-size: 10px;background: url(/gallery/imgs/client/loader/bg.png);width: 600px;height: 400px;"><div style="width: 1px; height: 100px;"></div><input class="ladekreis knob" readonly data-width="200" data-min="0" data-displayPrevious=true value="0" data-skin="tron" data-thickness="0.15" data-fgColor="#D0D3D8"></div></div></div>';
		//wrapper.innerHTML += '<div id="wrapperLoader" style="background: #000000 center no-repeat; position: absolute; z-index: 100; top: 0; left: 0; width: 100%; height: 100%;"><div id="hintergrund" style="background: url(http://imageloader.de/?img=271443265681.png) center center; width: 100%;opacity: 0.4;height: 100%;left: 0;right: 0;margin: auto;background-size: cover;"></div><div id="wrapperLoaderBox" style="width: 600px; height: 400px;    position: absolute; left: 50%; top: 50%;   border: 7px solid rgba(255, 255, 255, 0.7);border-radius: 7px;margin: -200px 0 0 -300px; text-align: center;"><div id="hintergrund" style="background: url(/gallery/imgs/client/loader/bg.png);width: 600px;height: 400px;position: absolute;"></div><div style="width: 1px; height: 100px;"></div><input class="ladekreis knob" readonly data-width="200" data-min="0" data-displayPrevious=true value="0" data-skin="tron" data-thickness="0.15" data-fgColor="#E4E4E4"></div></div></div>';
		
		jjLoader.interval = window.setInterval(jjLoader.IntervalUpdate, 10);
       $(".knob").knob({
                    change : function (value) {
                        //console.log("change : " + value);
                    },
                    release : function (value) {
                        //console.log(this.$.attr('value'));
                        //console.log("release : " + value);
                    },
                    cancel : function () {
                        //console.log("cancel : ", this);
                    },
                    /*format : function (value) {
                        return value + '%';
                    },*/
                    draw : function () {
                        // "tron" case
                        if(this.$.data('skin') == 'tron') {
                            this.cursorExt = 0.3;
                            var a = this.arc(this.cv)  // Arc
                                , pa                   // Previous arc
                                , r = 1;
                            this.g.lineWidth = this.lineWidth;
                            if (this.o.displayPrevious) {
                                pa = this.arc(this.v);
                                this.g.beginPath();
                                this.g.strokeStyle = this.pColor;
                                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
                                this.g.stroke();
                            }
                            this.g.beginPath();
                            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor ;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
                            this.g.stroke();
                            this.g.lineWidth = 2;
                            this.g.beginPath();
                            this.g.strokeStyle = this.o.fgColor;
                            this.g.arc( this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                            this.g.stroke();
                            return false;
                        }
                    }
                });
                // Example of infinite knob, iPod click wheel
                var v, up=0,down=0,i=0
                    ,$idir = $("div.idir")
                    ,$ival = $("div.ival")
                    ,incr = function() { i++; $idir.show().html("+").fadeOut(); $ival.html(i); }
                    ,decr = function() { i--; $idir.show().html("-").fadeOut(); $ival.html(i); };
                $("input.infinite").knob(
                                    {
                                    min : 0
                                    , max : 20
                                    , stopper : false
                                    , change : function () {
                                                    if(v > this.cv){
                                                        if(up){
                                                            decr();
                                                            up=0;
                                                        }else{up=1;down=0;}
                                                    } else {
                                                        if(v < this.cv){
                                                            if(down){
                                                                incr();
                                                                down=0;
                                                            }else{down=1;up=0;}
                                                        }
                                                    }
                                                    v = this.cv;
                                                }
                                    });		
		jjLoader.isInit = true;
		return true;
	},
	
	'progressNow': 0,
	'progress': 0,
	'IntervalUpdate': function(){
		if (jjLoader.progressNow >= jjLoader.progress || jjLoader.progressNow >= 100)
		{
			return;
		}
		
		jjLoader.progressNow += 2;
		
		var wrapperLoaderProgress = document.getElementById('wrapperLoaderProgress');
		//wrapperLoaderProgress.style.width = jjLoader.progressNow +'%';
		
		jjLoader.fuellen(jjLoader.progressNow);
	},
	
	'fuellen': function(prozent){
	 $('#wrapperLoaderBox .ladekreis').val(prozent).trigger('change');
	 //console.log(prozent + '% geladen!');
	},
	
	'doUpdate': function(_text){
		if (!jjLoader.isInit)
		{
			return false;
		}
		
		jjLoader.currentStep++;
		jjLoader.progress = Math.round((100 / jjLoader.maxStep) *jjLoader.currentStep);
		
		if (jjLoader.progress > 100)
		{
			jjLoader.progress = 100;
		}
		
		//jjLoader.updateText(_text);
		
		return true;
	},
	
	'updateText': function(_text){
		if (!jjLoader.isInit)
		{
			return false;
		}
		
		var text = '';
		if (jjLoader.progress > 0 && jjLoader.progress < 26)
		{
			text = "Verbinde, viel Spaß beim Spielen!<br />Lädt Katalog";
		} 
		else if (jjLoader.progress > 25 && jjLoader.progress < 50) 
		{
			text = "Verbinde, viel Spaß beim Spielen!<br />Lädt Avatare";
		} 
		else if (jjLoader.progress > 49 && jjLoader.progress < 77) 
		{
			text = "Verbinde, viel Spaß beim Spielen!<br />Lädt Möbel";
		} 
		else if (jjLoader.progress > 76 && jjLoader.progress < 93) 
		{
			text = "Verbinde, viel Spaß beim Spielen!<br />Lädt Texturen";
		} 
		else if (jjLoader.progress > 92 && jjLoader.progress < 101) 
		{
			text = "Verbinde, viel Spaß beim Spielen!<br />Lädt Räume";
		}
		
		var wrapperLoaderText = document.getElementById('wrapperLoaderText');
		//wrapperLoaderText.innerHTML = text+' '+jjLoader.progress+'%';
		
		return true;
	},
	
	'finish': function(){
		if (!jjLoader.isInit)
		{
			return false;
		}

		var wrapperLoader = document.getElementById('wrapperLoader');
		wrapperLoader.parentNode.removeChild(wrapperLoader);
		
		window.clearInterval(jjLoader.interval);
		return true;
	}
};

var conectioninfohost = "51.255.41.33";
var connectioninfoport = "3168";