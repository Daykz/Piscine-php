SELECT count(`id_abo`) AS `nb_abo`, floor(avg(`prix`)) AS `moy_abo`, MOD(SUM(`duree_abo`), 42) AS `ft` FROM `abonnement`;
