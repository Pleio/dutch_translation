<?php

if (elgg_is_active_plugin("pages")) {
	$language = array (
	  'pages:parent_guid' => 'Hoofdpagina',
	  'pages:new' => 'Een nieuwe pagina',
	  'pages:notification' => '%s heeft een nieuwe pagina toegevoegd:

%s
%s

Bekijk en reageer op de nieuwe pagina:
%s',
	  'pages:owner' => '%s\'s pagina\'s',
	  'pages:friends' => 'Pagina\'s van vrienden',
	  'pages:add' => 'Voeg pagina toe',
	  'pages:group' => 'Groep pagina\'s',
	  'groups:enablepages' => 'Schakel groep pagina\'s in',
	  'pages:revision' => 'Revisie',
	  'pages:none' => 'Nog geen pagina\'s aangemaakt',
	  'river:create:object:page' => '%s maakte de pagina %s',
	  'river:create:object:page_top' => '%s maakte de pagina %s',
	  'river:update:object:page' => '%s bewerkte de pagina %s',
	  'river:update:object:page_top' => '%s bewerkte de pagina %s',
	  'river:comment:object:page' => '%s reageerde op de pagina %s',
	  'river:comment:object:page_top' => '%s reageerde op de pagina %s',
	  'pages:error:no_title' => 'Je moet een titel opgeven voor deze pagina.',
	  'pages:revision:subtitle' => 'Revisie aangemaakt %s door %s',
	  'pages' => 'Pagina\'s',
	  'pages:all' => 'Alle site pagina\'s',
	  'pages:edit' => 'Bewerk deze pagina',
	  'pages:delete' => 'Verwijder deze pagina',
	  'pages:history' => 'Pagina geschiedenis',
	  'pages:view' => 'Bekijk pagina',
	  'pages:navigation' => 'Pagina navigatie',
	  'item:object:page_top' => 'Hoofd pagina\'s',
	  'item:object:page' => 'Pagina\'s',
	  'pages:nogroup' => 'Deze groep heeft nog geen pagina\'s',
	  'pages:more' => 'Meer pagina\'s',
	  'pages:title' => 'Pagina titel',
	  'pages:description' => 'Jouw tekst',
	  'pages:tags' => 'Tags',
	  'pages:access_id' => 'Toegang',
	  'pages:write_access_id' => 'Schrijf toegang',
	  'pages:noaccess' => 'Geen toegang tot de pagina',
	  'pages:cantedit' => 'Je kunt deze pagina niet bewerken',
	  'pages:saved' => 'Pagina opgeslagen',
	  'pages:notsaved' => 'Pagina kon niet worden opgeslagen',
	  'pages:delete:success' => 'Je pagina is succesvol verwijderd.',
	  'pages:delete:failure' => 'De pagina kon niet worden verwijderd.',
	  'pages:strapline' => 'Laatst bijgewerkt %s door %s',
	  'pages:num' => 'Aantal pagina\'s om weer te geven',
	  'pages:widget:description' => 'Dit is een lijst met jouw pagina\'s.',
	  'pages:label:view' => 'Bekijk pagina',
	  'pages:label:edit' => 'Bewerk pagina',
	  'pages:label:history' => 'Pagina geschiedenis',
	  'pages:sidebar:this' => 'Deze pagina',
	  'pages:sidebar:children' => 'Sub pagina\'s',
	  'pages:sidebar:parent' => 'Hoofdpagina',
	  'pages:newchild' => 'Maak een sub pagina',
	  'pages:backtoparent' => 'Terug naar \'%s\'',
	);
	add_translation("nl", $language);
}
