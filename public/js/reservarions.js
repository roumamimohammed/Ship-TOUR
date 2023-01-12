$(document).ready(function () {
    $.post("../Reservations/getMyreservation",{},
        function (response) {
            var data=JSON.parse(response);
            for (let i = 0; i < data.length; i++) {
                document.getElementById('croisieres').innerHTML+=`
                <div class="row croisiere mb-5">
                    <div class="col-md-4">
                    <img src="../img/${data[i].image}" width="100%" height="100%"">
                    </div>
                    <div class="col-md-5 p-3">
                    <p class="nuit">${data[i].nbr_nuit} Nuits</p>
                    <h4 class="title_vg">${data[i].nom_crois}</h4>
                    <p><img width="30px" height="30px" src="../img/cruise.png" alt="cruise"> ${data[i].nom_nav}</p>
                    <p><span class="depart_dep">Port de départ :</span> ${data[i].port_dep} - ${data[i].pays} </p>
                    <p><span class="depart_dep">L'escale à :</span><p class='trajet${data[i].id_croisiere}'></p></p>
                    </div>
                    <div class="col-md-3 text-center p-3" id="prix_div">
                    <p class="prix">${data[i].prix} <span class="mad">MAD</span></p>
                    <p class="mad">Type de chambre :${data[i].type}</p>
                    <a href="../Reservations/deleteReservation/${data[i].id_reserv}" value="${data[i].id_reserv}" class="btn btn-outline-danger mb-3 delete">Annuler</a>
                    <p class="depart_dep">${data[i].date_depart}<p>
                    </div>
                </div>
                `;
                $.post("../Croisieres/gettrajet",{id_croi:data[i].id_croisiere},
                    function (trajet) {
                        var trajet=JSON.parse(trajet);
                        for (let j = 0; j < trajet.length; j++) {
                            document.querySelector('.trajet'+data[i].id_croisiere).innerText+=' '+trajet[j].nom +' - '+trajet[j].pays;
                        }
                    },
                );  
            }
        },
    );

})
