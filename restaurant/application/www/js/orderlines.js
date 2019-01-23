'use strict'

/////////////////////////////////////////////////////////////
// FONCTIONS
/////////////////////////////////////////////////////////////////

function getId()
{
	/*
	** Recuperation de l'id meal
	*/
	var meal;
	meal = document.getElementById('meal_id');
	var id = meal.value;
	// var text = document.getElementById('test');
	// text.innerHTML = id;
	return id;
	
}

function OnChangeMealId()
{
	var gid = getId();
	console.log(gid);
	/*
	** Récupération du prix de vente de chaque produit
	*/

	var buyprice = document.getElementById('buyprice_'+gid);
	var prixvente = document.getElementById('pvente');

	/*
	** Recuperation de l'url, Recuperation de l'id de l'image
	*/

	var url = document.getElementById('url');
	var image = document.getElementById('img');
	var photo = document.getElementById('photo-'+gid);

	prixvente.innerHTML = buyprice.value + " DH";
	image.src = url.value+'/images/meals/'+photo.value;
}

var p = new Array();

function generatepanier()
{	
	var gid = getId();

	var line = document.querySelector('#panier_body');
	/* *********************** 
	******* Données *********
	************************** */

	var url = document.getElementById('url');
	var image = document.getElementById('img');
	var photo = document.getElementById('photo-'+gid);
	var buyprice = document.getElementById('buyprice_'+gid);
	var prixvente = document.getElementById('pvente');
	var qte = document.getElementById('qte').value;
	
	/* ////////////////////////////
	*	 PANIER
	//////////////////////////// */


	var montant = 0;

	/*
		Traitements
	*/

	prixvente.innerHTML = buyprice.value + " DH";
	image.src = url.value+'/images/meals/'+photo.value;
	montant = qte * buyprice.value;	

	var produit = `<tr name="table_row"><td id="id_produit" name="id">${gid}</td>
		<td>
			<img src="${image.src}" alt="" style="height: 70px; width: 70px;" id="aff_produit" name="photo">
		</td>
		<td id="qte_produit" name="quantity">${qte}</td>
		<td id="buyprice_produit" name="buyprice">${buyprice.value} DH</td>
		<td><input type="number" id="montant_produit" name="montant" value="${montant}"> DH</td>
		<td><button class="button button-disable" id="valide_btn">Supprimer</button></td>
		</tr>`;

	p.push(produit);
	line.innerHTML = p;

	var somme = 0;
	var total = document.getElementById('total');
	var calc = document.getElementsByName('montant');
	var lt = calc.length;

// console.log(lt);
	for (var i = 0; i < lt; i++)
		{
			somme += calc[i].value*1;	
		}
	total.innerHTML = somme;

	var tb_btn = document.querySelectorAll('#panier_body button');
	console.log(tb_btn);
	for(var i=0;i<p.length;i++)
		{
			tb_btn[i].addEventListener('click',function(){
			})	;
		}
}

function SupprimeLine()
{
	p.slice(0, 1);
}

//////////////////////////////////////////////////////////////
// MAIN CODE
/////////////////////////////////////////////////////////////////