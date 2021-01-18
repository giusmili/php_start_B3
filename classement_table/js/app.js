document.addEventListener("DOMContentLoaded",()=>{

    //tableau de données
    let languages, table_classement, dates, print_date;
    languages = [
            {
        classement: 1,
        language: "Python",
        type: "Web & application"        
            },
            {
        classement: 2,
        language: "C++",
        type: "Application"        
            },
        {
        classement: 3,
        language: "Node js",
        type: "Web & application"        
        },
        {
        classement: 4,
        language: "PHP",
        type: "Web & application"        
        }
        

    ]
    console.table(languages)
    //itération
    table_classement = document.querySelector('table > tbody')
    console.log(table_classement)

    languages.forEach(element => {
        console.log(`${element.classement} ${element.language} ${element.type}`)
        table_classement.innerHTML+=`<tr><td>${element.classement}</td>
                                            <td>${element.language}</td>
                                            <td>${element.type}</td></tr>`
    });
    
    //gestions events
     let grayScale={
        el: document.querySelector('body'),
        light(){
            this.el.classList.toggle('grayscale')
        }
    };
    console.log(grayScale)
    document.addEventListener('click',()=>{
        grayScale.light();
        //alert('ok');

    })

    //objet date et affichage
    dates = new Date()
    console.log(dates.getFullYear());
    print_date = document.querySelector('footer > p')
    print_date.innerText += dates.getFullYear();



});