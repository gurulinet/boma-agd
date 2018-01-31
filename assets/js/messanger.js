(function () {
    var options = {
        facebook: "414433365590302", // Facebook page ID
        company_logo_url: "//boma-agd.pl/wp-content/uploads/2017/08/boma-logo.png", // URL of company logo (png, jpg, gif)
        greeting_message: "Dzień dobry, w czym mogę Ci pomóc?", // Text of greeting message
        call_to_action: "", // Call to action
        position: "right", // Position may be 'right' or 'left'
    };
    var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
    s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
    var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();