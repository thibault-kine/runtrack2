UPDATE salles SET nom="Biggest Room"
WHERE capacite=100;

SELECT MAX(capacite) AS maxcap, salles.nom, etage.nom
FROM salles INNER JOIN etage