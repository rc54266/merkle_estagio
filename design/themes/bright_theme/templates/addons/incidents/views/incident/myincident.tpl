
<div class="">

	<h2>My Incidents</h2>
    
    {*{capture name="section"}
        {include file="views/orders/components/orders_search_form.tpl"}
    {/capture} *}
    <form action="{""|fn_url}" class="ty-orders-search-options" name="orders_search_form" method="get">
    <input type="hidden" name="result_ids" value="table_incident" />
    <div class="ty-control-group">
        <label class="ty-control-group__title">{__("order_status")}</label>
            {*{include file="common/status.tpl"  status=$search.status display="checkboxes" name="status" checkboxes_meta="ty-orders-search__options-status"}*}    
        {html_checkboxes name='status' options=$incident_status selected=array_keys($incident_status) }
    </div>
    <div class="buttons-container ty-search-form__buttons-container">
        {include file="buttons/button.tpl" 
        but_meta="ty-btn__secondary"
        but_text=__("storefront_search_button")
        but_name="dispatch[incident.myincident]"
        }
    </div>
    </form>

    {include file="common/pagination.tpl"}

	<table id="table_incident" class="ty-table ty-orders-search">
    <thead>
        <tr>
            <th><a class="{$ajax_class}" data-ca-target-id="pagination_contents">{__("ID")}</a></th>
            <th><a class="{$ajax_class}" data-ca-target-id="pagination_contents">{__("Subject")}</a></th>
            <th><a class="{$ajax_class}" data-ca-target-id="pagination_contents">{__("Date")}</a></th>
			<th><a class="{$ajax_class}" data-ca-target-id="pagination_contents">{__("Status")}</a></th>
            <th><a class="{$ajax_class}" data-ca-target-id="pagination_contents">{("Assigned to")}</a></th>
          {*<th><a class="{$ajax_class}" data-ca-target-id="pagination_contents">{__("Category")}</a></th>*}  
           {* <th class="ty-orders-search__header ty-orders-search__header--actions">{__("actions")}</th> *}
        </tr>
    </thead>

    
    {foreach from=$incidents item="o"}
        <tr>
            <td class="ty-orders-search__item"><a href="{"incident.view?incident_id=`$o.incident_id`"|fn_url}"><strong>#{$o.incident_id}</strong></a></td>
			<td class="ty-orders-search__item"><a href="{"incident.view?incident_id=`$o.incident_id`"|fn_url}"><strong>{$o.subject}</strong></a></td>
			<td class="ty-orders-search__item"><strong>{$o.created}</strong></td>
            <td class="ty-orders-search__item"><strong>{$o.status_name}</strong></td>
            <td class="ty-orders-search__item"><strong>{$o.firstname}</strong></td>
            {*<td class="ty-orders-search__item"><a href="{}"><strong>{$o.category_name}</strong></a></td>*}
        	
             {*   {include file="buttons/button.tpl"
                        but_meta="cm-new-window ty-btn-icon"
                        but_role="text"
                        but_title=__("print_invoice")
                        but_href="orders.print_invoice?order_id=`$o.order_id`"
                        but_icon="ty-orders__actions-icon ty-icon-print"}

                {include file="buttons/button.tpl"
                        but_meta="ty-btn-icon"
                        but_role="text"
                        but_title=__("re_order")
                        but_href="orders.reorder?order_id=`$o.order_id`"
                        but_icon="ty-orders__actions-icon ty-icon-cw"}
*}
			
        </tr>
    {foreachelse}
        <tr class="ty-table__no-items">
            <td colspan="7">
                <p class="ty-no-items">{("No Incidents Found")}</p>
            </td>
        </tr>
    {/foreach}
</table>






</div>