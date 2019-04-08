<?php
		$beerArray = [
		[
			'La Chouffe Blonde D\'ardenne',
			'https://www.beerwulf.com/globalassets/catalog/beerwulf/beers/la-chouffe-blonde-d-ardenne_opt.png?h=500&rev=899257661',
			'Bière dorée légèrement trouble à mousse dense, avec un parfum épicé aux notes d’agrumes et de coriandre qui ressortent également au goût.',
			1.91
		],
		[
			'Duvel',
			'https://www.beerwulf.com/globalassets/catalog/beerwulf/beers/duvel_opt.png?h=500&rev=899257661',
			'Robe jaune pâle, légèrement trouble, avec une mousse blanche incroyablement riche. L’arôme associe le citron jaune, le citron vert et les épices. La saveur incorpore des agrumes frais, le sucre de l’alcool et une note épicée due au houblon qui tire sur le poivre. En dépit de son taux d’alcool, c’est une bière fraîche qui se déguste facilement. ',
			1.66
		],
		[
			'Duvel Tripel Hop',
			'https://www.beerwulf.com/globalassets/catalog/beerwulf/beers/duvel-tripel-hop-citra.png?h=500&rev=39990364',
			'Une variété supplémentaire de houblon est ajoutée à cette Duvel traditionnelle. Le HBC 291 lui procure un caractère légèrement plus épicé et poivré. Cette bière présente un fort taux d’alcool mais reste très facile à déguster grâce à ses arômes d’agrumes frais et acides, entre autres.',
			2.24
		],
		[
			'Delirium Tremens',
			'https://www.beerwulf.com/globalassets/catalog/beerwulf/beers/blond/delirium_tremens_2.png?h=500&rev=204392068',
			'Bière dorée, claire à la mousse blanche pleine. Bière belge classique fortement gazéifiée et alcoolisée à la levure fruitée, arrière-goût doux.',
			2.08
		],
		[
			'Delirium Nocturnum',
			'https://www.beerwulf.com/globalassets/catalog/beerwulf/beers/delirium_nocturnum.png?h=500&rev=1038477262',
			'Une bière rouge foncée brassée selon la tradition belge: à la fois forte et accessible. Des saveurs de fruits secs, de caramel et chocolat. Légèrement sucrée avec une touche épicée (réglisse et coriandre). La finale en bouche est chaude et agréable.',
			2.24
		],
		[
			'Cuvée des Trolls',
			'https://www.beerwulf.com/globalassets/catalog/beerwulf/beers/cuvee_des_trolls_2.png?h=500&rev=923839745',
			'Bière brumeuse jaune paille à la mousse blanche consistante. Full body aux arômes fruités d’agrumes et de fruits jaunes. Grande douceur et petite touche acide rafraîchissante, levure. ',
			1.29
		],
		[
			'Chimay Rouge',
			'https://www.beerwulf.com/globalassets/catalog/beerwulf/beers/chimay---rood_v2.png?h=500&rev=420719671',
			'Bière brune à la robe cuivrée avec une mousse durable, délicate et généreuse. Elle présente des arômes fruités de banane. D’autres parfums comme le caramel sucré, le pain frais, le pain grillé et même une touche d’amande sont aussi présents. Les mêmes arômes sucrés se retrouvent au goût et conduisent à une fin de bouche douce et légèrement amère. ',
			1.49
		],
		[
			'Chimay Bleue',
			'https://www.beerwulf.com/globalassets/catalog/beerwulf/beers/chimay---blauw_v2.png?h=500&rev=420719671',
			'La Chimay Blauw, aussi connue sous le nom de Grande Réserve, est une bière trappiste reconnue. Il s’agissait au départ d’une bière de Noël, mais elle est disponible toute l’année depuis 1954. Une bière puissante et chaleureuse aux arômes de caramel et de fruits secs.',
			1.74
		],
		[
			'Chimay Triple',
			'https://www.beerwulf.com/globalassets/catalog/beerwulf/beers/chimay---wit_v2.png?h=500&rev=420719671',
			'Robe de couleur doré clair, légèrement trouble avec une belle mousse blanche qui fera saliver les amateurs. Le nez et la bouche sont chargés de fruits comme le raisin et de levure. Une amertume ronde se dégage en fin de bouche.',
			1.57
		]
	];


	<!DOCTYPE html>
	<html>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<head>
	
			<title>Site bière</title>
		</head>
		<body>
			<ul id="navigation">
	  			<li><a href="index.php" title="aller à Notre bière">LA BROTBIER</a></li>
	  			<li><a href="presentation.php" title="aller à Qui sommes-nous?">JUVUNDKEV</a></li>
			</ul>

			<P>Notre bière est issue d'une réflexion sur le gaspillage d'un des aliments les plus courants : le pain.</P>
			<P>Le pain est récolté 10 kms aux alentours de Stuttgart chaque semaine, ce qui représente en moyenne 1 tonne de pain.
			Ce pain destiné à la poubelle, devient matière première.</P>
			<P>Mélangé dans des cuves avec de l'eau et un apport de houblon et de levure, nous brassons notre bière : la BROTBIER.
			C'est une bière brune de 5°.</P>
			<img src="assets/img/painbiere.jpg">	
			<P>Ayant obtenue la médaille d'argent lors du concours de l'OktoberFest de Munich en 2018, nous sommes fiers de notre bière.</P>
			<h2>En buvant la BROTBIER, vous faites un geste pour la planète.</h2>

</body>
</html>

<?php

foreach ($beerArray as $value){
	echo $value[0].'<br/>';
 	echo $value[1].'<br/>';
 	echo $value[2].'<br/>';
 	echo $value[3].'<br/>';
 } ;
 
?>
			
		
		