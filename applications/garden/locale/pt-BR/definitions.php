<?php if (!defined('APPLICATION')) exit();
/*
Copyright 2008, 2009 Vanilla Forums Inc.
This file is part of Garden.
Garden is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
Garden is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with Garden.  If not, see <http://www.gnu.org/licenses/>.
Contact Vanilla Forums Inc. at support [at] vanillaforums [dot] com
*/


/**
 * English version of object possession. (ie. "Bob's thing" VS "Jess' thing").
 *
 * @param string The word to format.
 */
if (!function_exists('FormatPossessive')) {
   function FormatPossessive($Word) {
      return substr($Word, -1) == 's' ? $Word."'" : $Word."'s";
   }
}

if (!function_exists('Plural')) {
   function Plural($Number, $Singular, $Plural) {
      return T($Number == 1 ? $Singular : $Plural);
   }
}

$Definition['Locale'] = 'pt-BR';

// THESE ARE RELATED TO VALIDATION FUNCTIONS IN /garden/library/core/validation.functions.php
$Definition['ValidateRegex'] = '%s não parece estar presente no formato correto.';
$Definition['ValidateRequired'] = '%s é necessário.';
$Definition['ValidateRequiredArray'] = 'Você deve selecionar pelo menos um %s.';
$Definition['ValidateEmail'] = '%s parece ser inválido.';
$Definition['ValidateDate'] = '%s não é uma data válida.';
$Definition['ValidateInteger'] = '%s não é um número inteiro válido.';
$Definition['ValidateBoolean'] = '%s não é uma variável booleana válida.';
$Definition['ValidateDecimal'] = '%s não é um decimal válido.';
$Definition['ValidateTime'] = '%s não é uma hora válida.';
$Definition['ValidateTimestamp'] = '%s não é um Timestamp válido.';
$Definition['ValidateLength'] = '%1$s de %2$s caracteres.';
$Definition['ValidateEnum'] = '%s é inválido.';
$Definition['ValidateOneOrMoreArrayItemRequired'] = 'Você deve selecionar pelo menos um %s.';
$Definition['ValidateConnection'] = 'Os parâmetros escolhidos para a conexão de banco de dados estão incorretos. O banco de dados informa o seguinte erro: %s';
$Definition['ValidateMinimumAge'] = 'Você deve ter pelo menos 16 anos para continuar.';
$Definition['ValidateMatch'] = 'Os campos %s não correspondem.';

$Definition['ErrorPermission'] = 'Desculpas, acesso proibido.';
$Definition['ErrorCredentials'] = 'Por favor, verifique endereço de e-mail ou senha ou registre-se!';
$Definition['ErrorPluginVersionMatch'] = 'O plugin {0} (versão {1}) não suporta os seguintes versões: ({2}).';
$Definition['ErrorPluginDisableRequired'] = 'Para ativar o plugin {0}, ele requer o plugin {1} esteja desabilitado.';
$Definition['ErrorPluginEnableRequired'] = 'Para ativar este plugin é necessário que o plugin {0} já esteja ativado.';
$Definition['ErrorTermsOfService'] = 'Você deve aceitar os termos de serviço.';
$Definition['ErrorRecordNotFound'] = 'Registro não encontrado.';

$Definition['PageDetailsMessageFull'] = '%1$s e %2$s de %3$s';
$Definition['PageDetailsMessage'] = '%1$s e %2$s';
$Definition['RoleID'] = 'Permissão';
$Definition['Garden.Registration.DefaultRoles'] = 'Permissão padrão';

$Definition['EmailInvitation'] = 'Olá!

%1$s convidou para o fórum [%2$s]. Se deseja participar, clique no link:

  %3$s

Tenha um bom dia!';
$Definition['EmailMembershipApproved'] = 'Olá %1$s,

Você pediu uma conta. Por favor, clique no link abaixo para confirmar:

  %2$s
  
Tenha um bom dia!';
$Definition['EmailWelcome'] = 'Olá %1$s,

%2$s criou para você uma conta no fórum [%3$s]. Seguem os dados de acesso:

  Email: %6$s
  Senha: %5$s
  Url: %4$s

Tenha um bom dia!';
$Definition['EmailPassword'] = 'Olá %1$s,

%2$s reiniciou sua senha no fórum [%3$s]. Seguem os novos dados de acesso:

  Email: %6$s
  Senha: %5$s
  Url: %4$s

Tenha um bom dia!';
$Definition['PasswordRequest'] = 'Olá %1$s,

Alguém solicitou a redefinição de sua senha em [%2$s]. Para redefinir uma nova senha, clique no link:

  %3$s

Se você não solicitou este email, simplesmente ignore-o.';
$Definition['EmailNotification'] = '%1$s

Clique no link abaixo e experimente:
%2$s

Tenha um bom dia!';
$Definition['EmailStoryNotification'] = '%1$s

"%3$s"

Clique no link abaixo e experimente:
%2$s

Tenha um bom dia!';

//////////////////////////////
// Dashboard Help Infos
// Attention: These values get overridden by the values in /conf/locale.php
$Definition['PluginHelp'] = 'Plugins servem para expandir seu fórum, com novas funções.<br />Se você tem um plugin na pasta %s, você poderá (de)ativa-lo.';
$Definition['ApplicationHelp'] = "Apps expandem seu fórum para uma série de novas funções todas de uma vez só.<br />Se você tem um app na pasta %s, você poderá (de)ativa-lo.";
$Definition['ThemeHelp'] = 'Temas são para alterar o design de seu fórum.<br />Se você tem um tema na sua pasta %s, você poderá seleciona-lo aqui.';
$Definition['AddonProblems'] = '';

//////////////////////////////
// Time Format - http://php.net/manual/en/function.strftime.php
$Definition['Date.DefaultFormat'] = '%d/%m/%Y';
$Definition['Date.DefaultDayFormat'] = '%d/%m';
$Definition['Date.DefaultYearFormat'] = '%m/%Y';
$Definition['Date.DefaultTimeFormat'] = '%H:%i';