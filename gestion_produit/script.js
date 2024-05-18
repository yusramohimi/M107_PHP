// class Achat {
//     constructor(code, titre, description, categorie, quantite, prix ){
//         this.code = code ;
//         this.titre = titre ;
//         this.description = description ;
//         this.categorie = categorie ;
//         this.quantite = quantite ;
//         this.prix = prix ;
        
//     }
// }



// // declaration 
// let achats = []

// const achat1 = new Achat(1,"Toner", "The Ordinary Glycolic Acid 7% Toning Solution 240ml", "SKIN CARE", 1, 270)
// const achat2 = new Achat(2,"KAYALI", "KAYALI Invite Only Amber 23 100ml", "FRAGRANCE", 2, 1300)
// achats.push(achat1)
// achats.push(achat2)
// // console.log(achats)

// events
document.querySelector(".btn-afficher-form").addEventListener("click",afficherFormulaire)
// document.addEventListener("DOMContentLoaded",chargement)
// document.getElementById("save").addEventListener("click",save)
// document.getElementById("add").addEventListener("click",add)



// functions

function afficherFormulaire(){
    document.querySelector(".container").style.display = "block";
}

// function chargement(){
//     let categories;
//     const request = new XMLHttpRequest();
//     request.open("GET","data.json",true)
//     request.onreadystatechange = function(){
//         if(this.readyState == 4 && this.status == 200){
//             let responsedata = JSON.parse(this.responseText)
//             categories = responsedata.categories;
//             // console.log(categories)
//             let categorieOpts;
//             for(let i = 0 ; i < categories.length ; i++){
//                 categorieOpts += `<option value = ${categories[i].libelle}> ${categories[i].libelle} </option>`
//             }
//             document.getElementById("category").innerHTML = categorieOpts
//         }
//     }

//     request.send()
// }


// function save(e){
//     e.preventDefault();
//     let code = document.getElementById("code").value;
//     let titre = document.getElementById("name").value;
//     let description = document.getElementById("description").value;
//     let categorie = document.getElementById("category").value;
//     let quantite = document.getElementById("quantity").value;
//     let prix = document.getElementById("price").value;

//     let achat = new Achat(code, titre, description, categorie, quantite, prix );
//     achats.push(achat)
//     console.log(achats)
//     add();
//     PrixTotal(achats); 
//     // vider les inputs
//     document.getElementById("code").value = "";
//     document.getElementById("name").value = "";
//     description = document.getElementById("description").value = "";
//     categorie = document.getElementById("category").value = "HAIR CARE";
//     quantite = document.getElementById("quantity").value = "";
//     prix = document.getElementById("price").value = "";

// }

// function add(){
   
//     let content = "";
//     for (let i = 0 ; i < achats.length ; i++){

//         content +=
//      `<tr>
//         <th scope="row">${achats[i].code}</th>
//         <td>${achats[i].titre}</td>
//         <td>${achats[i].description}</td>
//         <td>${achats[i].categorie}</td>
//         <td>${achats[i].quantite}</td>
//         <td>${achats[i].prix}</td>
//         <td class="actions-btn">
//             <button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6a3093" class="bi bi-pencil-square" viewBox="0 0 16 16">
//             <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
//             <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
//           </svg></button> 
//             <button class="delete-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#6a3093" class="bi bi-trash3-fill" viewBox="0 0 16 16">
//             <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
//           </svg></button>
//         </td>
//      </tr>`;
//     }
//     document.getElementById("tdata").innerHTML = content ;


//     const deleteButtons = document.querySelectorAll('.delete-btn');
//     deleteButtons.forEach(button => {
//         button.addEventListener('click', function() {
//             const row = button.parentNode.parentNode;
//             row.remove();
            
//         });
//     });

// }



// function PrixTotal(achats) {
//     const TVA = 0.10;
//     let totalHT = 0;

//     achats.forEach(achat => {
//         const sousTotal = achat.prix * achat.quantite;
//         totalHT += sousTotal;
//     });
//     const totalTTC = totalHT * (1 + TVA);
//     const prixTotalTTCElement = document.getElementById('prix-total-ttc');
//     prixTotalTTCElement.textContent = totalTTC
//     const prixTotalElement = document.getElementById('prix-total-ht');
//     prixTotalElement.textContent = totalHT;
// }



