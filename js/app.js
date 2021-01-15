document.addEventListener("DOMContentLoaded",()=>{
    console.log("loaded")
     
     
     /* objet */
     let Access = {
        el: document.querySelector(".icon"),
        doc: document.querySelector("body"),
        m_toggle(){
            this.doc.classList.toggle("accessible");
        }

     }
     
     console.log(typeof Access)
     
     Access.el.addEventListener("click",(e)=>{
        e.preventDefault();
        console.log("ok")
        Access.m_toggle();
        
     })
    

});