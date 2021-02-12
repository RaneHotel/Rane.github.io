function DoResizex()
{
	var nHeight;
	if (typeof window.innerHeight == 'undefined')
	{
		nHeight = document.body.clientHeight -40;
	}
	else
	{
		nHeight = window.innerHeight -40;
	}
	
	document.getElementById('flash').style.height = nHeight+'px';
}
    FlashExternalInterface.loginLogEnabled = true;
    
    FlashExternalInterface.logLoginStep("web.view.start");
    
    if (top == self) {
        FlashHabboClient.cacheCheck();
    }
    var flashvars = {
     "client.allow.cross.domain" : "1", 
			"client.notify.cross.domain" : "0", 
			"connection.info.host" : "92.222.16.206", 
			"connection.info.port" : "30000", 
			"site.url" : "<?php echo $path; ?>", 
			"url.prefix" : "<?php echo $path; ?>", 
			"client.reload.url" : "<?php echo $path; ?>/client", 
			"client.fatal.error.url" : "<?php echo $path; ?>/clientutils", 
			"client.connection.failed.url" : "<?php echo $path; ?>/clientutils", 
			"external.variables.txt" : "<?php echo $path; ?>/client/external_variables.txt?adff", 
			"external.texts.txt" : "<?php echo $path; ?>/client/external_flash_texts.txt?22df", 
			"productdata.load.url" : "<?php echo $path; ?>/client/productdata.txt?a", 
			"furnidata.load.url" : "<?php echo $path; ?>/client/furnidata.txt?a", 
			"use.sso.ticket" : "1", 
			"sso.ticket" : "<?php echo $ticketrow['auth_ticket']; ?>", 
			"processlog.enabled" : "1", 
			"account_id" : "1", 
			"client.starting" : "Hallo <?php echo $name?>, der Client wird geladen", 
			"flash.client.url" : "<?php echo $path; ?>/client/", 
			"user.hash" : "31385693ae558a03d28fc720be6b41cb1ccfec02", 
			"has.identity" : "1", 
			"flash.client.origin" : "popup" 


    };
    var params = {
        "base" : "<?php echo $path; ?>/client/",
        "allowScriptAccess" : "always",
        "menu" : "false"                
    };
    
    if (!(HabbletLoader.needsFlashKbWorkaround())) {
    	params["wmode"] = "opaque";
    }

    FlashExternalInterface.signoutUrl = "<?php echo $path; ?>/account/logout?token=<?php echo sha1($myrow['password']); ?>";
    
    var clientUrl = "<?php echo $path; ?>/client/Kabbo.swf?abs";

    swfobject.embedSWF(clientUrl, "flash-container", "100%", "100%", "10.0.0", "<?php echo $path; ?>/web-gallery/flash/expressInstall.swf", flashvars, params, null, FlashExternalInterface.embedSwfCallback);

    window.onbeforeunload = unloading;
    function unloading() {
        var clientObject;
        if (navigator.appName.indexOf("Microsoft") != -1) {
            clientObject = window["flash-container"];
        } else {
            clientObject = document["flash-container"];
        }
        try {
            clientObject.unloading();
        } catch (e) {}
    }
    window.onresize = function() {
        HabboClient.storeWindowSize();
    }.debounce(0.5);

    new Ajax.Request(habboReqPath + "/crossdomain.xml", {
        method: 'get',
        requestHeaders: {'Cache-Control': 'no-cache'}
    });
	
	window.onload = DoResizex;
	