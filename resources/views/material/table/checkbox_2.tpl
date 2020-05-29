{foreach $table_2_config['total_column'] as $key => $value}
    <div class="checkbox checkbox-adv checkbox-inline">
        <label for="checkbox_2_{$key}">
            <input href="javascript:void(0);" onClick="modify_table_visible('checkbox_2_{$key}', '{$key}')"
                   {if in_array($key, $table_2_config['default_show_column']) || count($table_2_config['default_show_column']) == 0}checked=""{/if}
                   class="access-hide" id="checkbox_2_{$key}" name="checkbox_2_{$key}" type="checkbox">{$value}
            <span class="checkbox-circle"></span><span class="checkbox-circle-check"></span><span
                    class="checkbox-circle-icon icon">done</span>
        </label>
    </div>
{/foreach}
