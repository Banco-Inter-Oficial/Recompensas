function vTurbChangePlayer(){!vTurbOriginalPlayerIsMobile&&vTurbDeviceIsMobile||vTurbOriginalPlayerIsMobile&&!vTurbDeviceIsMobile?(vTurbPlayer=vTurbAlternativePlayer,vTurbSrcId=vTurbPlayer.id):vTurbPlayer=vTurbOriginalPlayer;var e=document.getElementById(`vid_${vTurbOriginalPlayer.id}`);e&&e.remove();var t=document.getElementById(`scr_${vTurbOriginalPlayer.id}`);t&&t.setAttribute("id",`scr_${vTurbSrcId}`)}function vTurbCreatSmartvdsElements(){var e,t,r;"1.7.9"===vTurbPlayer.version?document.getElementById(`vid_${vTurbPlayer.id}`)||(window,e=document,t=e.getElementById(`scr_${vTurbSrcId}`),(r=e.createElement("DIV")).id=`vid_${vTurbPlayer.id}`,t.parentElement.insertBefore(r,t)):(document.getElementById(`vid_${vTurbPlayer.id}`)||function(e,t,r){t=e.getElementById(`scr_${vTurbSrcId}`),(r=e.createElement("DIV")).id=`vid_${vTurbPlayer.id}`,r.style.position="relative",r.style.width="100%",r.style.padding=`${vTurbPlayer.video_aspect_ratio}% 0 0`,t.parentElement.insertBefore(r,t)}(document),document.getElementById(`thumb_${vTurbPlayer.id}`)||function(e,t,r){t=e.getElementById(`vid_${vTurbPlayer.id}`),(r=e.createElement("IMG")).id=`thumb_${vTurbPlayer.id}`,r.style.top="0",r.style.left="0",r.style.width="100%",r.style.height="100%",r.style.position="absolute",r.style.objectFit="cover",r.src=`https://images.converteai.net/${vTurbPlayer.thumbnail_key}`,t.appendChild(r)}(document),document.getElementById(`backdrop_${vTurbPlayer.id}`)||function(e,t,r){t=e.getElementById(`vid_${vTurbPlayer.id}`),(r=e.createElement("DIV")).id=`backdrop_${vTurbPlayer.id}`,r.style.top="0",r.style.left="0",r.style.width="100%",r.style.height="100%",r.style.position="absolute",r.style.backdropFilter="blur(5px)",r.style.webkitBackdropFilter="blur(5px)",t.appendChild(r)}(document))}function vTurbLoadSmrtvds(){var e,t,r,i;e=window,t=document,e.smrtvds||(r=e.smrtvds=function(){r.callMethod?r.callMethod.apply(r,arguments):r.queue.push(arguments)},e._smrtvds||(e._smrtvds=r),r.push=r,r.loaded=!0,r.version="1.1",r.queue=[],(i=t.createElement("script")).async=!0,i.src=`https://scripts.converteai.net/lib/js/smartplayer/${vTurbPlayer.version}/smartplayer.min.js`,t.getElementsByTagName("head")[0].appendChild(i)),window.smrtvds(`vid_${vTurbPlayer.id}`,vTurbPlayer.org_id,vTurbPlayer.video_id,vTurbPlayer.options)}function vTurbSmrtvds(){vTurbCreatSmartvdsElements(),vTurbLoadSmrtvds()}var vTurbOriginalPlayer={"id":"66d68321050056000b655173","org_id":"57aa8174-331c-4a9f-84e4-e6390429fc62","name":"vsl_youtube_97_reais Kirvano","device_type":"desktop","video_aspect_ratio":"56.25","thumbnail_key":"57aa8174-331c-4a9f-84e4-e6390429fc62/players/66d68321050056000b655173/thumbnail.jpg","cover_key":"57aa8174-331c-4a9f-84e4-e6390429fc62/players/66d68321050056000b655173/cover.jpg","version":"v1","video_id":"66cfd5b2cd646c000b51e954","options":{"autoplay":"smartplay","subtitle_active":!1,"smart_autoplay_template":"image","theme":"#FF0000","foreground_color":"#FFFFFF","video":{"width":1920,"height":1080},"cdn":"cdn.converteai.net","displays":{"big_play":!1,"play_pause":!0,"backward":!1,"subtitle_control":!1,"forward":!1,"volume":!1,"volume_bar":!0,"time":!1,"fullscreen":!1,"seekbar":!1,"seekbar_time":!0,"speed_control":!1},"callAction":[{"id":"callaction_66d68321050056000b655173_0","type":"inner_button","btnText":"QUERO PAGAR A TAXA","position":"bc","link":"https://pay.kirvano.com/9d265770-ca54-4fe2-8895-9ffb9871be10","range":{"start":874,"finish":1084},"color":"#FF0000","show_visit_returns":!1,"colors":{"text":"#FFFFFF","background":"#FF0000","text_hover":"#FFFFFF","background_hover":"#1890FF"}}],"pixels":[{"id":"pixel_66d68321050056000b655173_0","type":"facebook","pixel_id":"548376480845991","pixel_value":"","dispatch":!1,"dispatch_in":0,"dispatch_type":"time"}],"thumbs":[{"id":"thumb_66d68321050056000b655173_0","image":"https://cdn.converteai.net/57aa8174-331c-4a9f-84e4-e6390429fc62/2024/08/20/66c52f62507027000167dc23.gif","start":0,"finish":1025,"has_button":!1,"button_name":"Nome do bot\xe3o","button_size":"sm","button_position":"bc","button_url":"","button_background_color":"#1890FF","button_background_hover_color":"#1890FF","button_text_color":"#FFFFFF"}],"headlines":[],"turbos":[],"smart_autoplay_elements":[{"id":"smart_autoplay_element_66d68321050056000b655173_0","height":661.9118644067796,"width":864,"x":528,"y":209.04406779661016,"order":1,"opacity":1,"rotation":0,"type":"image","properties":{"alt":"Smart AutoPlay","src":"https://cdn.converteai.net/57aa8174-331c-4a9f-84e4-e6390429fc62/2024/08/21/66c69a2abe77030001cc04eb.png"}}],"mini_hooks":!0,"mini_hooks_elements":[{"id":"mini_hooks_element_66d68321050056000b655173_0","height":183.52321140231425,"name":"Gancho","active":!0,"width":1957.580921624687,"range":{"start":804,"finish":816},"x":-18,"y":18,"order":1,"rotation":0,"type":"image","opacity":1,"properties":{"alt":"Imagem","src":"https://cdn.converteai.net/57aa8174-331c-4a9f-84e4-e6390429fc62/2024/08/29/66cfe90bbe77030001cc0b53.gif"}}],"resume":!0,"fake_bar":!0,"headline":!1,"turbo":!0,"turbo_speed":1,"turbo_auto_test":!0,"smartplay_options":{"top_text":"Seu v\xeddeo j\xe1 come\xe7ou","bottom_text":"Clique para ouvir","foreground_color":"#FFFFFF","background_color":"rgba(82, 25, 135, 0.59)","start_at":0,"end_at":1024,"animation":{"animation":"pulse","properties":{"speed":4}},"custom_preview":null},"resume_options":{"play":"Continuar assistindo?","title":"Voc\xea j\xe1 come\xe7ou a assistir esse v\xeddeo","replay":"Assistir do in\xedcio?","disable_pause":!1,"foreground_color":"#FFFFFF","background_color":"rgba(255,0,0,0.64)"},"fake_bar_options":{"height":10,"alpha":2,"vbar_height":!0,"vbar_end":!0,"vbar_network":!0,"vbar_color":"#521987"}}},vTurbSrcId="66d68321050056000b655173",vTurbPlayer=vTurbOriginalPlayer,vTurbDeviceIsMobile=window.navigator.userAgent.match(/Mobile|iP(hone|od|ad)|Android|BlackBerry|IEMobile|Kindle|NetFront|Silk-Accelerated|(hpw|web)OS|Fennec|Minimo|Opera M(obi|ini)|Blazer|Dolfin|Dolphin|Skyfire|Zune/),vTurbOriginalPlayerIsMobile="mobile"===vTurbOriginalPlayer.device_type;vTurbDeviceIsMobile=vTurbDeviceIsMobile&&vTurbDeviceIsMobile[0],vTurbSmrtvds();