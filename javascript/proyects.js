( window.onload = () => {
         
        const lista_from = []; 
        //formulario
            const box_form = document.getElementById("box_form");
            box_form.onsubmit = (e) =>{
            e.preventDefault();
            const name = document.getElementById("name");
             
            name.value= "";
            const email = document.getElementById("email");
            
            email.value = ""; 

            const textarea = document.getElementById("textarea");
            
            textarea.value = "";

          }
          
                      
       
                                 

} )();