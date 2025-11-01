function miseAJourDesLiens(nouveauType) {


    const nt = nouveauType.textContent.toLowerCase().trim();

    console.log("miseAJourDesLiens - Type d'ouvrage sélectionné : " + nt);

    const links = document.querySelectorAll('.btn-warning');

    links.forEach(link => {
        link.classList.remove('disabled'); // Retirer la classe active de tous les liens       
    });

    // Désactiver le lien sélectionné
    nouveauType.classList.add('disabled'); // Ajouter la classe disabled au lien sélectionné

    fetchOuvragesByType(nt);
}



async function fetchOuvragesByType(typeOuvrage) {

    try {
        const response = await fetch('api/types/' + typeOuvrage + '/ouvrages/');

        console.log(response);

        if (!response.ok) {
            throw new Error('Erreur lors de la récupération des données');
        }

        const ouvrages = await response.json();
        console.log(ouvrages);

        const contentDiv = document.getElementById('les_livres'); // Éléments cible à mettre à jour
        contentDiv.innerHTML = ''; // Vider le contenu précédent

        const contentBadge = document.getElementById('badge_nombre'); // Éléments cible à mettre à jour
        contentBadge.textContent = ouvrages.length;

        ouvrages.forEach(item => {

           
                console.log(item);
                // Créer le conteneur de la carte
                const colDiv = document.createElement('div');
                colDiv.className = 'col-md-3 d-flex';

                const cardDiv = document.createElement('div');
                cardDiv.className = 'card mb-4 flex-fill card-options';

                // Créer et configurer l'image
                const img = document.createElement('img');

                img.src = 'images/couvertures/livre.png'; // Utilisez l'URL de l'image fournie
                img.className = 'card-img-top custom-card-image';
                img.alt = item.titre; // Ajouter un attribut alt
                img.title = item.titre; // Ajouter un attribut title

                // Créer le corps de la carte
                const cardBody = document.createElement('div');
                cardBody.className = 'card-body card-fond-sombre';

                // Créer le titre de la carte
                const cardTitle = document.createElement('h5');
                cardTitle.className = 'card-title card-titre-jaune';
                cardTitle.textContent = item.titre; // Ajouter le titre

                // Créer le texte de la carte
                const cardText = document.createElement('p');
                cardText.className = 'card-text';
                cardText.textContent = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";

                // Assembler les éléments
                cardBody.appendChild(cardTitle);
                cardBody.appendChild(cardText);
                cardDiv.appendChild(img);
                cardDiv.appendChild(cardBody);
                colDiv.appendChild(cardDiv);

                contentDiv.appendChild(colDiv);
            
        });


        return ouvrages;

    } catch (error) {
        console.error('Erreur:', error);
    }
}


//méthodes pour tester l'API
async function ajouterOuvrage() {

    const nouvelOuvrage = {
        "cote": "11H",
        "auteur": "Auteur Inconnu",
        "titre": "Nouveau Livre",
        "anneeParution": "1989",
        "type": "livre"
    };

    const formData = new FormData();
    formData.append('cote', nouvelOuvrage.cote);
    formData.append('auteur', nouvelOuvrage.auteur);
    formData.append('titre', nouvelOuvrage.titre);
    formData.append('anneeParution', nouvelOuvrage.anneeParution);
    formData.append('type', nouvelOuvrage.type);

    try {
        const reponse = await fetch('api/ouvrages', {
            method: 'POST',
            body: formData,
        });

        if (!reponse.ok) {
            throw new Error(`Erreur HTTP : ${reponse.status}` + " => " + nouvelOuvrage.cote + " - " +
                nouvelOuvrage.auteur + " - " +
                nouvelOuvrage.titre + " - " +
                nouvelOuvrage.anneeParution + " - " +
                nouvelOuvrage.type
            );
        }

        const resultat = await reponse.json();
        console.log('Ouvrage ajouté avec succès :', resultat);
    } catch (error) {
        console.error('Erreur lors de l\'ajout de l\'ouvrage :', error);
    }
}

async function supprimerOuvrage() {
    const coteASupprimer = "11H"; // Remplacez par la cote de l'ouvrage à supprimer

    try {
        const reponse = await fetch(`api/ouvrages/${coteASupprimer}`, {
            method: 'DELETE',
        });

        if (!reponse.ok) {
            throw new Error(`Erreur HTTP : ${reponse.status}` + " => " + coteASupprimer);
        }

        const resultat = await reponse.json();
        console.log('Ouvrage supprimé avec succès :', resultat);
    } catch (error) {
        console.error('Erreur lors de la suppression de l\'ouvrage :', error);
    }
}


async function modifierOuvrage() {
    const coteAModifier = "11H"; // Remplacez par la cote de l'ouvrage à modifier

    const ouvrageModifie = {
        "auteur": "Mon auteur favori ",
        "titre": "Livre Modifié",
        "anneeParution": "2000",
        "type": "magazine"
    };

    const formData = new FormData();
    formData.append('auteur', ouvrageModifie.auteur);
    //formData.append('titre', ouvrageModifie.titre);
    //formData.append('anneeParution', ouvrageModifie.anneeParution);
    //formData.append('type', ouvrageModifie.type);

    formData.append('_method', 'PATCH'); // Méthode de remplacement    

    try {
        const reponse = await fetch(`api/ouvrages/${coteAModifier}`, {
            method: 'POST',
            body: formData,
        });

        if (!reponse.ok) {
            throw new Error(`Erreur HTTP : ${reponse.status}` + " => " + coteAModifier + " - " +
                ouvrageModifie.cote + " - " +
                ouvrageModifie.auteur + " - " +
                ouvrageModifie.titre + " - " +
                ouvrageModifie.anneeParution + " - " +
                ouvrageModifie.type
            );
        }

        const resultat = await reponse.json();
        console.log('Ouvrage modifié avec succès :', resultat);
    } catch (error) {
        console.error('Erreur lors de la modification de l\'ouvrage :', error);
    }
}

async function voirUnOuvrage() {
    const coteAVoir = "11H"; // Remplacez par la cote de l'ouvrage à voir
    
    try {
        const reponse = await fetch(`api/ouvrages/${coteAVoir}`, {
            method: 'GET',
        });

        if (!reponse.ok) {
            throw new Error(`Erreur HTTP : ${reponse.status}` + " => " + coteAVoir);
        }

        const resultat = await reponse.json();
        console.log('Ouvrage récupéré avec succès :', resultat);
    } catch (error) {
        console.error('Erreur lors de la récupération de l\'ouvrage :', error);
    }
}


async function voirTousLesOuvrages() {
    
    try {
        const reponse = await fetch(`api/ouvrages`, {
            method: 'GET',
        });

        if (!reponse.ok) {
            throw new Error(`Erreur HTTP : ${reponse.status}`);
        }

        const resultat = await reponse.json();
        console.log('Ouvrages récupérés avec succès :', resultat);
    } catch (error) {
        console.error('Erreur lors de la récupération des ouvrages :', error);
    }
}