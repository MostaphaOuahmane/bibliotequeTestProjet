Fonctionnalités

    Lister les ouvrages par mots clés
    Lister mes emprunts
    Lister les exemplaires d'un ouvrage
    Lister les ouvrages d'un auteur


# lister par mot clés
=> je peux saisir les mots-clés dans zone de saisie 
=> je dois valider ma saise par la touche entrée ou par un clic sur bouton
=> la liste des ouvrages correspondant aux mots clés est alors affichée 
    1. chaque élément affiche le titre , le prénom et le nom de l'auteur ,et s'il est disponible 
    2. la liste est triée par order alphabétique du titre 
    3. la liste est paginée ,à raison de 5 par pages 
    
Lister mes emprunts
Récit utilisateur

En tant qu'abonné
Je peux gérer mes emprunts
Pour savoir où j'en suis, et prolonger mes emprunts sans me déplacer.
Critères d'acceptation

    Je dois être connecté (en tant qu'abonné)
    Chaque ligne affiche le titre de l'ouvrage, le prénom/nom de l'auteur, le nom de la bibliothèque d'emprunt, et la date de retour prévue
    Si je n'ai pas prolongé 2 fois ou plus un ouvrage, sa ligne affiche un bouton "Prolonger"
    Un clic sur "Prolonger" me demande confirmation
    Si je confirme, la date de retour est décalée du délai de prêt


Lister par auteur
Récit utilisateur

En tant que visiteur
Je peux lister les ouvrages de l'auteur
Pour en connaître plus sur l'auteur.
Critères d'acceptation

    L'adresse de la page contient le id de l'auteur
    Tous les ouvrages écrits par l'auteur sont affichés
    Chaque élément affiche le titre, le prénom et le nom de l'auteur, et s'il est disponible
    (pour plus tard) La liste est paginée, à raison de 5 par pages
    La liste est triée par ordre alphabétique
    Un clic sur le titre affiche la liste des exemplaires
