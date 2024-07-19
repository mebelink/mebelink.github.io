!function(){function showSection(section){loading.style.display="none";installation.style.display="none";denied.style.display="none";activate.style.display="none";settings.style.display="none";error.style.display="none";section.style.display=""}function updatePushState(sw){"pushManager"in sw?sw.pushManager.permissionState(pushOptions).then(state=>{switch(state){case"prompt":showActivate(sw);break;case"granted":askPermission(sw);break;case"denied":showSection(denied);break;default:showSection(installation)}}).catch(()=>{showSection(installation)}):showSection(installation)}function showActivate(sw){showSection(activate);typeof activateButton.onclick=="function"&&activateButton.removeEventListener("click");activateButton.addEventListener("click",()=>{askPermission(sw)})}function submitEvent(e){return e.preventDefault(),saveSettings(),!1}function savePermission(pushSubscription){fetch("notifications.php?permission",{method:"POST",body:JSON.stringify(pushSubscription)}).then(response=>{if(!response.ok)throw"not saved";showSection(settings);typeof settingsForm.onsubmit=="function"&&settingsForm.removeEventListener("submit");settingsForm.addEventListener("submit",submitEvent)}).catch(()=>{showSection(error)})}function saveSettings(){showSection(loading);fetch("notifications.php?settings",{method:"POST",body:JSON.stringify({ecommerce:ecommerceCheck.checked,low_stock:lowStockCheck.checked,blog_comments:blogCheck.checked,products_comments:productsCheck.checked,pages_comments:pagesCheck.checked,users:usersCheck.checked})}).then(response=>{if(!response.ok)throw"not saved";showSection(settings)}).catch(()=>{showSection(error)})}function askPermission(sw){showSection(loading);sw.pushManager.getSubscription().then(existingPushSubscription=>{sw.pushManager.subscribe(pushOptions).then(pushSubscription=>{pushSubscription?savePermission(pushSubscription):updatePushState(sw)}).catch(()=>{existingPushSubscription===null?updatePushState(sw):showSection(subscriptionError)})}).catch(()=>{showSection(error)})}const loading=document.getElementById("loading-notifications-settings"),installation=document.getElementById("installation-needed"),denied=document.getElementById("denied-notifications"),activate=document.getElementById("activate-notifications"),activateButton=document.getElementById("activate-notifications-button"),settings=document.getElementById("set-notifications"),settingsForm=document.getElementById("set-notifications-form"),error=document.getElementById("error-notifications"),subscriptionError=document.getElementById("subscription-error-notifications"),ecommerceCheck=document.getElementById("ecommerce_check"),lowStockCheck=document.getElementById("low_stock_check"),blogCheck=document.getElementById("blog_comments_check"),productsCheck=document.getElementById("products_comments_check"),pagesCheck=document.getElementById("pages_comments_check"),usersCheck=document.getElementById("users_check");"serviceWorker"in navigator&&navigator.serviceWorker.getRegistration().then(sw=>{updatePushState(sw)}).catch(()=>{showSection(installation)})}()