<?php /* Smarty version Smarty-3.1.8, created on 2013-09-27 09:46:12
         compiled from "class/smarty/templates/desktop/permissoes_br/usuarios/model.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116707636852457e140bf654-83280423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c5275e2545f1d95d426d86f90297fe73488fc47' => 
    array (
      0 => 'class/smarty/templates/desktop/permissoes_br/usuarios/model.tpl',
      1 => 1380126225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116707636852457e140bf654-83280423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52457e140e6478_65441706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52457e140e6478_65441706')) {function content_52457e140e6478_65441706($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/home/maciel/www/maciel/gerador_extjs_php/server/modulos/gerador/class/smarty/libs/plugins/modifier.capitalize.php';
?>/**
*	@Autor: Maciel Sousa
*	@Email: macielcr7@gmail.com
**/

Ext.define('<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['app']->value);?>
.model.ModelUsuarios', {
    extend: 'Ext.data.Model',

    fields: [
		{
			name: 'id',								 
			type: 'int'
		},				
		{
			name: 'nome',								 
			type: 'string'
		},				
		{
			name: 'perfil',								 
			type: 'string'
		},				
		{
			name: 'perfil_id',								 
			type: 'int'
		},				
		{
			name: 'email',								 
			type: 'string'
		},				
		{
			name: 'login',								 
			type: 'string'
		},				
		{
			name: 'senha',								 
			type: 'string'
		},				
		{
			name: 'administrador',								 
			type: 'string'
		},				
		{
			name: 'status',								 
			type: 'string'
		}				
    ]
});<?php }} ?>