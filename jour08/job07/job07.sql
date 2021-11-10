-- Selectionne toutes les infos sur les étudiants dont la différence entre la date d'aujourd'hui
-- et leur date de naissance est supérieure à 365 jours * 18
SELECT * FROM etudiants WHERE DATEDIFF(CURRENT_DATE, naissance)>=365*18