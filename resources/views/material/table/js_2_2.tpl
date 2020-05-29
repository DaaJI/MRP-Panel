table_2 = $('#table_2').DataTable({
ajax: {
url: '{$table_2_config['ajax_url']}',
type: "POST"
},
processing: true,
serverSide: true,
order: [[ 0, 'desc' ]],
stateSave: true,
columnDefs: [
{
targets: [ '_all' ],
className: 'mdl-data-table__cell--non-numeric'
}
],
columns: [
{foreach $table_2_config['total_column'] as $key => $value}
    { "data": "{$key}" },
{/foreach}
],
{include file='table/lang_chinese.tpl'}
})


var has_init = JSON.parse(localStorage.getItem(window.location.href + '-hasinit'));
if (has_init != true) {
localStorage.setItem(window.location.href + '-hasinit', true);
} else {
{foreach $table_2_config['total_column'] as $key => $value}
    var checked = JSON.parse(localStorage.getItem(window.location.href + '-haschecked-checkbox_2_{$key}'));
    if (checked == true) {
    document.getElementById('checkbox_2_{$key}').checked = true;
    } else {
    document.getElementById('checkbox_2_{$key}').checked = true;
    }
{/foreach}
}

{foreach $table_2_config['total_column'] as $key => $value}
    modify_table_visible('checkbox_2_{$key}', '{$key}');
{/foreach}
