# Isendpro
[1] Liste des fonctionnalités : - envoi de SMS à un ou plusieurs destinataires, - lookup HLR, - récupération des récapitulatifs de campagne, - gestion des répertoires, - ajout en liste noire. - comptage du nombre de caractères des SMS  [2] Pour utiliser cette API vous devez: - Créer un compte iSendPro sur https://isendpro.com/ - Créditer votre compte      - Remarque: obtention d'un crédit de test possible sous conditions - Noter votre clé de compte (keyid)   - Elle vous sera indispensable à l'utilisation de l'API   - Vous pouvez la trouver dans le rubrique mon \"compte\", sous-rubrique \"mon API\" - Configurer le contrôle IP   - Le contrôle IP est configurable dans le rubrique mon \"compte\", sous-rubrique \"mon API\"   - Il s'agit d'un système de liste blanche, vous devez entrer les IP utilisées pour appeler l'API   - Vous pouvez également désactiver totalement le contrôle IP

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [https://www.isendpro.com/](https://www.isendpro.com/)

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/iSendPro/php-packagist-api"
    }
  ],
  "require": {
    "isendpro/sms-api": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/Isendpro/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Isendpro\Api\CampagneApi();
$keyid = "keyid_example"; // string | Clé API
$rapport_campagne = "rapport_campagne_example"; // string | Doit valoir \"1\"
$date_deb = "date_deb_example"; // string | date de debut au format YYYY-MM-DD hh:mm
$date_fin = "date_fin_example"; // string | date de fin au format YYYY-MM-DD hh:mm

try {
    $result = $api_instance->getCampagne($keyid, $rapport_campagne, $date_deb, $date_fin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampagneApi->getCampagne: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://apirest.isendpro.com/cgi-bin*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CampagneApi* | [**getCampagne**](docs/Api/CampagneApi.md#getcampagne) | **GET** /campagne | Retourne les SMS envoyés sur une période donnée
*ComptageApi* | [**comptage**](docs/Api/ComptageApi.md#comptage) | **POST** /comptage | Compter le nombre de caractère
*CreditApi* | [**getCredit**](docs/Api/CreditApi.md#getcredit) | **GET** /credit | Interrogation credit
*DelListeNoireApi* | [**delListeNoire**](docs/Api/DelListeNoireApi.md#dellistenoire) | **POST** /dellistenoire | Ajoute un numero en liste noire
*GetListeNoireApi* | [**getListeNoire**](docs/Api/GetListeNoireApi.md#getlistenoire) | **POST** /getlistenoire | Retourne le liste noire
*HlrApi* | [**getHlr**](docs/Api/HlrApi.md#gethlr) | **POST** /hlr | Vérifier la validité d&#39;un numéro
*RepertoireApi* | [**repertoire**](docs/Api/RepertoireApi.md#repertoire) | **PUT** /repertoire | Gestion repertoire (modification)
*RepertoireApi* | [**repertoireCrea**](docs/Api/RepertoireApi.md#repertoirecrea) | **POST** /repertoire | Gestion repertoire (creation)
*SetListeNoireApi* | [**setListeNoire**](docs/Api/SetListeNoireApi.md#setlistenoire) | **POST** /setlistenoire | Ajoute un numero en liste noire
*SmsApi* | [**sendSms**](docs/Api/SmsApi.md#sendsms) | **POST** /sms | Envoyer un sms
*SmsApi* | [**sendSmsMulti**](docs/Api/SmsApi.md#sendsmsmulti) | **POST** /smsmulti | Envoyer des SMS


## Documentation For Models

 - [ComptageReponse](docs/Model/ComptageReponse.md)
 - [ComptageReponseEtat](docs/Model/ComptageReponseEtat.md)
 - [ComptageReponseEtatEtat](docs/Model/ComptageReponseEtatEtat.md)
 - [ComptageRequest](docs/Model/ComptageRequest.md)
 - [CreditResponse](docs/Model/CreditResponse.md)
 - [CreditResponseEtat](docs/Model/CreditResponseEtat.md)
 - [Erreur](docs/Model/Erreur.md)
 - [ErreurEtat](docs/Model/ErreurEtat.md)
 - [ErreurEtatEtat](docs/Model/ErreurEtatEtat.md)
 - [HLRReponse](docs/Model/HLRReponse.md)
 - [HLRReponseEtat](docs/Model/HLRReponseEtat.md)
 - [HLRReponseEtatEtat](docs/Model/HLRReponseEtatEtat.md)
 - [HLRrequest](docs/Model/HLRrequest.md)
 - [LISTENOIREReponse](docs/Model/LISTENOIREReponse.md)
 - [LISTENOIREReponseEtat](docs/Model/LISTENOIREReponseEtat.md)
 - [LISTENOIREReponseEtatEtat](docs/Model/LISTENOIREReponseEtatEtat.md)
 - [REPERTOIREcreatereponse](docs/Model/REPERTOIREcreatereponse.md)
 - [REPERTOIREcreatereponseEtat](docs/Model/REPERTOIREcreatereponseEtat.md)
 - [REPERTOIREcreatereponseEtatEtat](docs/Model/REPERTOIREcreatereponseEtatEtat.md)
 - [REPERTOIREcreaterequest](docs/Model/REPERTOIREcreaterequest.md)
 - [REPERTOIREmodifreponse](docs/Model/REPERTOIREmodifreponse.md)
 - [REPERTOIREmodifreponseEtat](docs/Model/REPERTOIREmodifreponseEtat.md)
 - [REPERTOIREmodifreponseEtatEtat](docs/Model/REPERTOIREmodifreponseEtatEtat.md)
 - [REPERTOIREmodifrequest](docs/Model/REPERTOIREmodifrequest.md)
 - [SMSReponse](docs/Model/SMSReponse.md)
 - [SMSReponseEtat](docs/Model/SMSReponseEtat.md)
 - [SMSReponseEtatEtat](docs/Model/SMSReponseEtatEtat.md)
 - [SMSRequest](docs/Model/SMSRequest.md)
 - [SmsUniqueRequest](docs/Model/SmsUniqueRequest.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author

support@isendpro.com


