<?php

$chapeus_de_palha= array(
	array(
		//chapeus de palha
		'posicao'=>'capitao',
		'poder'=>'gomu gomu no mi',
		'nome_cargo'=>'luffy',
		'subordinados'=>array(
			//nami
			array(
				'posicao'=>'navegadora',
				'poder'=>'clima',
				'nome_cargo'=>'nami',
				'subordinados'=>array(
					//nojiko
					array(
						'posicao'=>'irma',
						'nome_cargo'=>'nojiko',
						'poder'=>'nenhum'
					),
					//catavento
					array(
						'posicao'=>'padastro',
						'nome_cargo'=>'catavento',
						'poder'=>'nenhum'
					)
				)
			),
			//zoro
			array(
				'posicao'=>'imediato',
				'poder'=>'espadachim',
				'nome_cargo'=>'zoro',
				'subordinados'=>array(
					//irmaos do arco baratie
					array(
						'posicao'=>'amigos',
						'nome_cargo'=>'irmaos do arco baratie',
						'poder'=>'espadachins'
					),
					//mihawk
					array(
						'posicao'=>'mestre',
						'nome_cargo'=>'mihawk',
						'poder'=>'espadachim'
					)
				)
			),
			//sanji
			array(
				'posicao'=>'cozinheiro',
				'poder'=>'pernas',
				'nome_cargo'=>'sanji',
				'subordinados'=>array(
					//zefe perna negra do baratie
					array(
						'posicao'=>'padastro',
						'poder'=>'pernas',
						'nome_cargo'=>'zefe',
						'subordinados'=>array(
							array(
							'posicao'=>'cozinheiros',
							'nome_cargo'=>'cozinheiros',
							'poder'=>'força'
							)
						)
					),
					//germa
					array(
						'posicao'=>'familia',
						'poder'=>'tecnologia',
						'nome_cargo'=>'germa 66',
						'subordinados'=>array(
							//judge
							array(
								'posicao'=>'pai',
								'nome_cargo'=>'judge',
								'poder'=>'força'
							),
							//irmaos babacas
							array(
								'posicao'=>'irmaos',
								'nome_cargo'=>'ionji, niji e ichiji',
								'poder'=>'tecnologia'
							),
							//reiju
							array(
								'posicao'=>'irma',
								'nome_cargo'=>'reiju',
								'poder'=>'tecnologia e empatia'
							)
						)
					),
					//kamabaka
					array(
						'posicao'=>'mestre',
						'poder'=>'kama kempo',
						'nome_cargo'=>'ivankof',
						'subordinados'=>array(
							array(
							'posicao'=>'okamas',
							'nome_cargo'=>'okamas',
							'poder'=>'força'
							)
						)
					)
				)
			)
		)

	)




);

function exibe($cargos){

	$html = '<ul>';

	foreach ($cargos as $cargo) {
		$html.= "<li>";
		$html.="<b>Posição: </b>".$cargo['posicao']."<br>";
		$html.="<b>Poder: </b>".$cargo['poder']."<br>";
		$html.="<b>Nome: </b>".$cargo['nome_cargo']."<br>";
		if (isset($cargo['subordinados']) && count($cargo['subordinados'])>0) {
			$html.=exibe($cargo['subordinados']);
		}
		$html.="</li>";
	}

	$html .= '</ul>';

	return $html;
}

echo exibe($chapeus_de_palha);

?>