<div class="table-responsive-wrapper longtap-selection">

    <div class="table-responsive-wrapper longtap-selection">
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
        <table width="100%" class="table table-middle table--relative table-responsive table--overflow-hidden">
            <thead data-ca-bulkedit-default-object="true" data-ca-bulkedit-component="defaultObject">
                <tr>
                    {*                    <th class="center  mobile-hide table__check-items-column">
                        <div class="btn-group btn-checkbox cm-check-items table__check-items">
                            <a href="" data-toggle="dropdown" class="btn dropdown-toggle">
                                <span class="caret"></span>
                            </a>
                            <input type="checkbox" name="check_all" value="Y" title="Check / uncheck all"
                                class="pull-left cm-check-items ">

                            <ul class="dropdown-menu ">
                            </ul>
                        </div>
                        <input type="checkbox" class="bulkedit-toggler hide"
                            data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                            data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                            data-ca-bulkedit-dispatch-parameter="user_ids[]">
                    </th>*}

                    <th width="11%" class="nowrap">
                        <a class="cm-ajax th-text-overflow  " href="" data-ca-target-id="pagination_contents">ID</a>
                    </th>
                    <th width="35%">
                        <a class="cm-ajax th-text-overflow th-text-overflow--desc " href=""
                            data-ca-target-id="pagination_contents">Subject</a>
                    </th>
                    {*<th width="26%">
                        <a class="cm-ajax th-text-overflow  " href="" data-ca-target-id="pagination_contents">Name</a>
                    </th>*}
                    <th width="35%">
                        <a class="cm-ajax th-text-overflow  " href="" data-ca-target-id="pagination_contents">Date</a>
                    </th>
                    <th width="15%" class="cm-ajax th-text-overflow">
                        <a class="cm-ajax th-text-overflow  " href="" data-ca-target-id="pagination_contents"
                            title="Status">Status</a>
                    </th>

                </tr>
            </thead>
            <tbody>
                {foreach from=$incidents item="o"}
                    <tr class="cm-row-status-a cm-longtap-target cm-hide-inputs" data-ca-longtap-action="setCheckBox"
                        data-ca-longtap-target="input.cm-item" data-ca-id="1" id="uid_SEaVaWtKtJmHp865">
                        {*<td class="center  mobile-hide table__check-items-cell">
                            <input type="checkbox" name="user_ids[]" value="1" class="cm-item cm-item-status-a hide"
                                disabled="">
                        </td>*}
                        <td width="11%" data-th="ID" class="table__first-column"><a
                                href="{"incident.answer?incident_id=`$o.incident_id`"|fn_url}" class="row-status">
                                <strong>#{$o.incident_id}</strong>
                            </a>
                        </td>
                        <td width="35%" class="row-status wrap" data-th="Subject"><a
                                href="{"incident.answer?incident_id=`$o.incident_id`"|fn_url}">
                            </a>
                            <strong>{$o.subject}</strong>
                        </td>
                        {*<td width="26%" data-th="E-mail"><a class="row-status" href=""></a>
                            <strong>{$o.status_name}</strong>
                        </td>*}
                        <td width="35%" class="row-status" data-th="Phone">
                            <a href="{"incident.answer?incident_id=`$o.incident_id`"|fn_url}"><bdi></bdi></a>
                            <strong>{$o.created}</strong>
                        </td>
                        <td width="15%" class="row-status" data-th="Phone">
                            <a href="{"incident.answer?incident_id=`$o.incident_id`"|fn_url}"><bdi></bdi></a>
                            <strong>{$o.status_name}</strong>
                        </td>
                    </tr>

                {foreachelse}
                    <tr class="ty-table__no-items">
                        <td colspan="7">
                            <p class="ty-no-items">{__("text_no_incidents")}</p>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>

</div>