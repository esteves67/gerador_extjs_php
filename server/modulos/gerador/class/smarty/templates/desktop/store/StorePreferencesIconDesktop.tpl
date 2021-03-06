{if $autor == true}
/**
*	@Autor: Maciel Sousa
*	@Email: macielcr7@gmail.com
**/
{/if}

Ext.define('{$app|capitalize}.store.StorePreferencesIconDesktop', {
    extend: 'Ext.data.TreeStore',
    requires: [
        '{$app|capitalize}.model.ModelPreferences'
    ],

    constructor: function(cfg) {
        var me = this;
        cfg = cfg || {};
        me.callParent([Ext.apply({
            model: '{$app|capitalize}.model.ModelPreferences',
            proxy: {
                type: 'ajax',
                extraParams: {
                    action: 'LIST_ICON_DESKTOP'
                },
                url: 'server/modulos/preferences/list.php',
                reader: {
                    type: 'json'
                }
            }
        }, cfg)]);
        
    }
});