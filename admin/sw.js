self.addEventListener("install",()=>{self.skipWaiting()});self.addEventListener("push",event=>{const json=event.data.json(),showing=self.registration.showNotification(json.title,{body:json.body,data:json.data});event.waitUntil(showing)});self.addEventListener("notificationclick",event=>{const clickedNotification=event.notification;if(clickedNotification&&(clickedNotification.close(),clickedNotification.data&&clickedNotification.data.url)){const urlToOpen=new URL(clickedNotification.data.url,self.location.href).href,opening=clients.matchAll({type:"window",includeUncontrolled:!0}).then(windowClients=>{let matchingClient=null;for(let i=0;i<windowClients.length;i++){const windowClient=windowClients[i];if(windowClient.url===urlToOpen){matchingClient=windowClient;break}}return matchingClient?(matchingClient.postMessage("refresh"),matchingClient.focus()):clients.openWindow(urlToOpen)});event.waitUntil(opening)}})