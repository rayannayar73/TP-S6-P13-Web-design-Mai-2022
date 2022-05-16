<?php 

if(isset($_GET['pageRedirect'])){ 
    //wishlist
    if($_GET['pageRedirect']=="whishlist"){
        if($_GET['methode']=="historique"){
            $olonaW=$_SESSION['idOlona'];
            $reqListeAchatW="SELECT * from Achat join panier on panier.id_panier=achat.id_panier where panier.id_client=$olonaW order by dateAchat desc;";
            $idProduitAchatW=get($reqListeAchatW,"Id_produits");
        }
        if($_GET['methode']=="search"){
            $nomPS=$_SESSION['nomPS'];
            $concatNomPS="'%".$nomPS."%'";
            $reqSearchProduct="SELECT * from produits where nom like $concatNomPS";
            $idProduitAchatW=get($reqSearchProduct,"Id_produits");
        }
    }

    // product listing
    if(($_GET['pageRedirect']=="product-listing")){
        if(isset($_GET['type'])){
            $_SESSION['type']=$_GET['type'];
            $idProductListing=selection('id_typecategorie','typecategorie','nom',$_GET['type']);
            $requeteProductListing="SELECT * from produits where id_typecategorie=$idProductListing";
        }
        if(isset($_GET['cat'])){
            $idCategorieListing=selection('id_categorie','categorie','nom',$_GET['cat']);
            $requeteProductListing=
            "SELECT produits.nom,produits.src,produits.dateSortie,produits.id_produits,produits.prix,typecategorie.id_typecategorie Id_TypeCategorie,typecategorie.id_categorie
            from produits 
            join TypeCategorie 
            on produits.Id_TypeCategorie=typecategorie.Id_TypeCategorie 
            where TypeCategorie.id_categorie=$idCategorieListing";
        }
        $nomProduitsProductListing=get($requeteProductListing,"nom");
        $srcProduitsProductListing=get($requeteProductListing,"src");
        $prixProduitsProductListing=get($requeteProductListing,"prix");
        $IdTypeProduitsProductListing=get($requeteProductListing,"Id_TypeCategorie");
        $dateProduit=get($requeteProductListing,"dateSortie");
    }

    // product details
    if(($_GET['pageRedirect']=="product-detail")){
        $reqProduitProductDetail="SELECT * from produits where nom='".$_GET['product']."'";
        $idProduitProductDetail=get($reqProduitProductDetail,"Id_produits");
        $nomProduitProductDetail=get($reqProduitProductDetail,"nom");
        $srcProduitProductDetail=get($reqProduitProductDetail,"src");
        $prixProduitProductDetail=get($reqProduitProductDetail,"prix");
        $IdTypeProduitProductDetail=get($reqProduitProductDetail,"Id_TypeCategorie");
        $reqTypeProductDetail="SELECT * from typecategorie where Id_typecategorie=$IdTypeProduitProductDetail[0]";
        $type=get($reqTypeProductDetail,"nom");
        $IdCategorieType=get($reqTypeProductDetail,"Id_categorie");
        $reqCat="SELECT * from categorie where Id_categorie=$IdCategorieType[0]";
        $categorie=get($reqCat,"nom");
        $reqDetails="SELECT * from details where id_produits=$idProduitProductDetail[0]";

        $reqListeProduits="SELECT * from produits;";
        $nomListeProduits=get($reqListeProduits,"nom");
        $srcListeProduits=get($reqListeProduits,"src");
        $prixListeProduits=get($reqListeProduits,"prix");
        $IdTypeListeProduits=get($reqListeProduits,"Id_TypeCategorie");
        $dateProduits=get($reqListeProduits,"dateSortie");
    }

    //cart
    if($_GET['pageRedirect']=="cart"){
        if(isset($_GET['add'])){//ajouter produits dans le panier d'achat 
        $idOlona=$_SESSION['idOlona'];
        $idProduit=$_GET['add'];
        $idPanier= $_SESSION['panier'];
        $argAchat="null, $idProduit, $idPanier, 1";
        inserer('achat',$argAchat);
        $argIdStock="stock where id_produits=$idOlona";
        $qtInitial=rechercheId('quantite',$argIdStock);
		$qte=$qtInitial-1;
        $argModifStock="quantite=$qte";
	    modifier('stock',$argModifStock,'Id_produits',$idProduit);
        }
    }
   
}
   // accueil
else{
    $reqListeProduits="SELECT * from produits order by prix;";
    $nomListeProduits=get($reqListeProduits,"nom");$srcListeProduits=get($reqListeProduits,"src");
    $prixListeProduits=get($reqListeProduits,"prix");$IdTypeListeProduits=get($reqListeProduits,"Id_TypeCategorie");
    $dateProduits=get($reqListeProduits,"dateSortie");
    if(filesize('cache/cache.txt')==0){
        $nomtest=get($reqListeProduits,"nom");
        $prixtest=get($reqListeProduits,"prix");
        $imagetest=get($reqListeProduits,"src");
        $isa=0;
        $valiny="test";
        while($isa<count($nomtest)){
            $valiny=$valiny.$nomtest[$isa].' text lava be mitsy'.$prixtest[$isa]." adia".$imagetest[$isa];
            $isa++;
        }
        $fichier=fopen('cache/cache.txt','a');
        fwrite($fichier,$valiny);
        fclose($fichier);

    }else {
        $fichier=fopen('cache/cache.txt','r');
        $cache=fread($fichier,filesize('cache/cache.txt'));
        fclose($fichier);
        $valiny=$cache;
    }
    // $isa=0;
    // $valiny="test";
    // $nomtest=get($reqListeProduits,"nom");
    // $prixtest=get($reqListeProduits,"prix");
    // $imagetest=get($reqListeProduits,"src");
    // while($isa<count($nomtest)){
    //     $valiny=$valiny.$nomtest[$isa].' text lava be mitsy'.$prixtest[$isa]." adia".$imagetest[$isa];
    //     $isa++;
    // }

    // $reqListeProduitRecent="SELECT * from produits where DATEDIFF(SUBDATE(NOW(),INTERVAL 3 MONTH),dateSortie)<0";
    $reqListeProduitRecent="SELECT * from produits";
    $nomProduitFeaturded=get($reqListeProduitRecent,"nom");$srcListeProduitRecent=get($reqListeProduitRecent,"src");
    $prixListeProduitFeaturded=get($reqListeProduitRecent,"prix");$IdTypeListeProduitFeaturded=get($reqListeProduitRecent,"Id_TypeCategorie");
    $dateProduitRecent=get($reqListeProduitRecent,"dateSortie");
}
if(isset($_SESSION['idOlona'])){
    $idOlona=$_SESSION['idOlona'];
    $reqNouveauPanier="SELECT * from panier  where id_client=$idOlona order by dateAchat desc limit 1;";
    $idPanierArray=get($reqNouveauPanier,'Id_panier');$idPanier=$idPanierArray[0];
    $_SESSION['panier']=$idPanier;
    $reqListeAchat2="SELECT * from Achat where id_panier= $idPanier;";
    $idProduitEfamisy=get($reqListeAchat2,'Id_produits');
    $reqListeAchat="SELECT sum(quantite) quantite,Id_achat,Id_produits from Achat where id_panier= $idPanier group by id_produits;";
    $quantite=get($reqListeAchat,"quantite");
    $idAchat=get($reqListeAchat,"Id_achat");
    $idProduitAchat=get($reqListeAchat,"Id_produits");

    $reqSommePrix="SELECT
    sum(achat.quantite*produits.prix) prix,
    panier.id_panier
    from achat
    join panier
        on panier.id_panier=achat.id_panier
    join produits
        on produits.Id_produits =achat.id_produits
    where panier.id_panier=$idPanier;";
    $totalPrix=get($reqSommePrix,'prix');

    $reqQteTotal="SELECT
    sum(achat.quantite) isa,
    panier.id_panier
    from achat
    join panier
        on panier.id_panier=achat.id_panier
    join produits
        on produits.Id_produits =achat.id_produits
    where panier.id_panier=$idPanier";
    $quantiteTotal=get($reqQteTotal,"isa");
}
?>