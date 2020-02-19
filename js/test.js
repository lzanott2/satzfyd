function popitup(a){
  newwindow=window.open(a,"name","height=400,width=500");
  window.focus&&newwindow.focus();
  return!1
}

window.fbAsyncInit=function(){
  FB.init({appId:"1109229852438664",xfbml:!0,version:"v2.4"})
};

(function(a,c,b){
  var d=a.getElementsByTagName(c)[0];
  a.getElementById(b)||(a=a.createElement(c),a.id=b,a.src="//connect.facebook.net/en_US/sdk.js",d.parentNode.insertBefore(a,d))
})

(document,"script","facebook-jssdk");

jQuery(function(){
  $(".sectionSocial .socialContainer").css("padding-top",$(".sectionHeader").height()-$(".socialContainer").height()-5);

  $("#fblink").click(function(){
    FB.ui({
      method:"share",href:document.URL
    },
    function(a){});
    return!1
  })
});

(function(a,c,b){a(b).ready(function(){a(".sectionTout").matchHeight({byRow:!1});
a(".solutionsProvidedBox").matchHeight({byRow:!1});
a(".mapImages").matchHeight({byRow:!1})})})

(jQuery,window,document);

function pushFormTopicToDataLayer(a){dataLayer.push({topicValue:a});window.name=a};
