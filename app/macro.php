<?php

//macro pour les vues bootsrap

//macro pour les champs textes de formulaires
Form::macro('control', function($type, $errors, $nom, $id, $placeholder, $taille, $taille_mobile)
{
    $valeur = Request::old($nom) ? Request::old($nom) : null;
	$attributes = array('class' => 'form-control', 'placeholder' => $placeholder, 'id' => $id);
	return sprintf('
		<div class="col-xs-%d col-sm-%d col-md-%d">
			<small class="text-danger">%s</small>
			<div class="form-group %s">
				%s
			</div>
		</div>',
		$taille_mobile,
		$taille,
		$taille,
		$errors->first($nom),
		$errors->has($nom) ? 'has-error has-feedback' : '',
		call_user_func_array(array('Form', $type), array($nom, $valeur, $attributes))
	);
});

Form::macro('button_submit', function($texte)
{
	return Form::submit($texte, array('class' => 'btn btn-primary btn-block btn-lg pull-right'));
});

HTML::macro('button_back', function()
{
	return '<a href="javascript:history.back()" class="btn btn-primary btn-block btn-lg pull-left">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>';
});