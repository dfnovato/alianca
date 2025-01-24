SELECT 
tbl_classe_vantagens.cd,
tbl_classe_vantagens.cd_classe,
tbl_classe_vantagens.cd_vantagem,
tbl_classe.cd_classe,
tbl_vantagens.cd_vantagem,
tbl_vantagens.nm_vantagem,
tbl_vantagens.ds_vantagem
FROM ((tbl_classe_vantagens
       INNER JOIN tbl_vantagens ON tbl_classe_vantagens.cd_vantagem = tbl_vantagens.cd_vantagem)
 	   INNER JOIN tbl_classe ON tbl_classe_vantagens.cd_classe = tbl_classe.cd_classe)

CREATE VIEW vw_vantagens as SELECT 
tbl_classe_vantagens.cd,
tbl_classe.cd_classe,
tbl_vantagens.cd_vantagem,
tbl_vantagens.nm_vantagem,
tbl_vantagens.ds_vantagem
FROM ((tbl_classe_vantagens
       INNER JOIN tbl_vantagens ON tbl_classe_vantagens.cd_vantagem = tbl_vantagens.cd_vantagem)
 	   INNER JOIN tbl_classe ON tbl_classe_vantagens.cd_classe = tbl_classe.cd_classe)

SELECT
tbl_classe_desvantagens.cd,
tbl_classe_desvantagens.cd_classe,
tbl_classe_desvantagens.cd_desvantagem,
tbl_classe.cd_classe,
tbl_desvantagens.cd_desvantagem,
tbl_desvantagens.nm_desvantagem,
tbl_desvantagens.ds_desvantagem
FROM ((tbl_classe_desvantagens
    INNER JOIN tbl_desvantagens ON tbl_classe_desvantagens.cd_desvantagem = tbl_desvantagens.cd_desvantagem)
    INNER JOIN tbl_classe ON tbl_classe_desvantagens.cd_classe = tbl_classe.cd_classe)


CREATE VIEW vw_desvantages as SELECT
tbl_classe_desvantagens.cd,
tbl_classe.cd_classe,
tbl_desvantagens.cd_desvantagem,
tbl_desvantagens.nm_desvantagem,
tbl_desvantagens.ds_desvantagem
FROM ((tbl_classe_desvantagens
    INNER JOIN tbl_desvantagens ON tbl_classe_desvantagens.cd_desvantagem = tbl_desvantagens.cd_desvantagem)
    INNER JOIN tbl_classe ON tbl_classe_desvantagens.cd_classe = tbl_classe.cd_classe)

SELECT
tbl_classe_magias.cd,
tbl_classe_magias.cd_classe,
tbl_classe_magias.cd_magias,
tbl_magias.cd_magia,
tbl_magias.ds_magia,
tbl_magias.lvl_magia,
tbl_magias.nm_magia,
tbl_magias.tp_magia,
tbl_magias.custo_magia,
tbl_magias.recarga_magia,
tbl_magias.distancia_magia,
tbl_magias.area_magia,
tbl_magias.img_magia,
tbl_magias.dano_magia,
tbl_classe.cd_classe
FROM ((tbl_classe_magias
       INNER JOIN tbl_classe ON tbl_classe_magias.cd_classe = tbl_classe.cd_classe)
      INNER JOIN tbl_magias ON tbl_classe_magias.cd_magias = tbl_magias.cd_magia)

      CREATE VIEW vw_magias_classe as SELECT
tbl_classe_magias.cd,
tbl_magias.cd_magia,
tbl_magias.ds_magia,
tbl_magias.lvl_magia,
tbl_magias.nm_magia,
tbl_magias.tp_magia,
tbl_magias.custo_magia,
tbl_magias.recarga_magia,
tbl_magias.distancia_magia,
tbl_magias.area_magia,
tbl_magias.img_magia,
tbl_magias.dano_magia,
tbl_classe.cd_classe
FROM ((tbl_classe_magias
       INNER JOIN tbl_classe ON tbl_classe_magias.cd_classe = tbl_classe.cd_classe)
      INNER JOIN tbl_magias ON tbl_classe_magias.cd_magias = tbl_magias.cd_magia)