<?php
/**
 *
 * default.inc.php
 *
 * Created using: JetBrains PhpStorm
 * User: Sean Kimball sean@bigblockstudios.ca
 * BigBlock Studios http://www.bigblockstudios.ca
 * http://github.com/BigBlockStudios
 * Date: 15/04/12, 3:59 PM
 *
 */

// for testing lexicon strings, just unset when done testing:
$lex = 'Lexicon zegt: ';


$_lang['modmailchimp'] = $lex . 'MailChimp';

// api messages
$_lang['modmailchimp.apikey_missing'] = $lex . 'Geef een MailChimp API key op.';
$_lang['modmailchimp.apikey_invalid'] = $lex . 'Geef een valide MailChimp API key op.';

// list errors
$_lang['modmailchimp.list_id_invalid'] = $lex . 'Geef een valide MailChimp list ID op.';

// recaptcha errors
$_lang['modmailchimp.recaptcha_incorrect'] = $lex . 'De reCAPTCHA is incorrect. Ga terug en probeer het nogmaals. (reCAPTCHA zegt: ';
$_lang['modmailchimp.recaptcha_enter_text'] = $lex . 'Neem de tekst over.';

// email address messages
$_lang['modmailchimp.email_address_missing'] = $lex . 'Geef een e-mailadres op';
$_lang['modmailchimp.email_address_pending'] = $lex . 'Dit e-mailadres wacht op bevestiging. Controleer of u een e-mailbevestiging hebt ontvangen.';

// misc errors
$_lang['modmailchimp.error_unknown'] = $lex . 'Onbekende fout';

// misc success messages
$_lang['modmailchimp.success_subscription'] = $lex . 'Bedankt! U krijgt nu een e-mail waarmee u uw aanmelding moet bevestigen.';
$_lang['modmailchimp.success_unsubscribe'] = $lex . 'Succesvol uitgeschreven.';

