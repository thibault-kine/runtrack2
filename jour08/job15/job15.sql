SELECT `salles`.`nom`, `etage`.`nom` 
FROM `salles` INNER JOIN `etage` 
WHERE `id_etage`=`etage`.`id`