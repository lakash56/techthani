"use strict";(()=>{var __async=(__this,__arguments,generator)=>new Promise((resolve,reject)=>{var fulfilled=value=>{try{step(generator.next(value))}catch(e){reject(e)}},rejected=value=>{try{step(generator.throw(value))}catch(e){reject(e)}},step=x=>x.done?resolve(x.value):Promise.resolve(x.value).then(fulfilled,rejected);step((generator=generator.apply(__this,__arguments)).next())});var{__}=wp.i18n,ShortcodeForm=class{constructor(elementIdentifier){this.handle=e=>__async(this,null,function*(){e.preventDefault(),this.messageContainer.classList.add("hide");let response=yield fetch(shopmagic_form.ajax_url,{method:"POST",body:new FormData(this.form)});if(!response.ok){this.displayError(__("An error occurred during form submission. Try again later.","shopmagic-for-woocommerce"));return}let json=yield response.json();if(json.success){typeof json.data=="string"&&this.displaySuccess(json.data);return}typeof json.data=="string"&&this.displayError(json.data)});let form=document.querySelector(elementIdentifier);if(!(form instanceof HTMLFormElement))throw new Error("Invalid element. Must be <form>");this.form=form;let messageContainer=this.form.querySelector(".shopmagic-message");if(!messageContainer)throw new Error("Missing message container with class `.shopmagic-message`");this.messageContainer=messageContainer}init(){this.form.addEventListener("submit",this.handle)}displaySuccess(message){this.displayMessage(message,"success")}displayError(message){this.displayMessage(message,"error")}displayMessage(message,type){type==="success"?(this.messageContainer.classList.remove("error"),this.messageContainer.classList.add("success")):(this.messageContainer.classList.remove("success"),this.messageContainer.classList.add("error")),this.messageContainer.innerText=message,this.messageContainer.classList.remove("hide")}};(function(){window.ShopMagic=window.ShopMagic||{},window.ShopMagic.shortcodeForm=elementIdentifier=>{new ShortcodeForm(elementIdentifier).init()}})();})();
