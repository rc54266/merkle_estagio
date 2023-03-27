{style src="addons/incidents/style.less"}

{if $incident_details.operator_id != null & $auth.user_id == 1}
    <form method="post" action="{"incident.unsign"|fn_url}" name="unsign">
        {foreach from=$incident_details key="key" item="value"}
            {if $key == 'incident_id'}<input type="hidden" name="incident_id" value="{$value}" />
            {/if}
        {/foreach}
        <div class="buttons-container">
            <input type="submit" value="Unsign">
        </div>
    </form>
{/if}

{if $auth.user_id == 1}
    <form method="post" action="{"incident.delete"|fn_url}" name="delete">
        <input type="hidden" name="incident_id" value="{$incident_details.incident_id}" />
        <div class="buttons-container">
            <input type="submit" onclick="return confirm('Are you sure?')" value="Delete">
        </div>
    </form>
{/if}


{*<form method="post" action="{""|fn_url}" name="operators">
    <select name="operators" id="oper">
        {section name=operator loop=$operators}
            <option value={$operators['firstname']}>
        {/section}
    </select>
</form>*}

<form method="post" action="{""|fn_url}" name="operators">
    <select name="operators" id="oper">
    {foreach from=$operators item="value"}
            <option value={$operators['firstname']}>
            {/foreach}
    </select>
</form>





{if $incident_details.operator_id == null }
    <form method="post" action="{"incident.asign"|fn_url}" name="asign">
        {foreach from=$incident_details key="key" item="value"}
            {if $key == 'incident_id'}<input type="hidden" name="incident_id" value="{$value}" />
            {/if}
        {/foreach}
        <div class="buttons-container">
            <input type="submit" value="Asign">
        </div>
    </form>
{/if}


{if $incident_details.operator_id != null}

    {if $incident_details.status_id == 1}
        {$is_open="close"}
    {elseif $incident_details.status_id == 2}
        {$is_open="open"}
    {/if}

    <form method="post" action="{""|fn_url}" name="{$is_open}">
        <input type="hidden" name="dispatch" value="incident.{$is_open}" />
        <input type="hidden" name="incident_id" value="{$incident_details.incident_id}" />
        <div class="buttons-container">
            <input type="submit" value="{$is_open|ucfirst}">
        </div>
    </form>

{/if}

<h1 class="ty-mainbox-title ty-vendor-communication-post__title">
    Incident # {$incident_details.incident_id}
</h1>

<div class="container">
    <div class="row-fluid">
        <div class="col-4">
            <label for="subject">Created by:</label>
        </div>
        <div class="col-8">
            {foreach from=$incident_firstname key="key" item="value"}
                <strong>{if $key == 'firstname'}{$value}{/if}</strong>
            {/foreach}
        </div>
    </div>
    <div class="row-fluid">
        <div class="col-4">
            <label for="subject">Created at:</label>
        </div>
        <div class="col-8">
            {foreach from=$incident_details key="key" item="value"}
                <strong>{if $key == 'created'}{$value}{/if}</strong>
            {/foreach}
        </div>
    </div>
    <div class="row-fluid">
        <div class="col-4">
            <label for="subject">Subject:</label>
        </div>
        <div class="col-8">
            {foreach from=$incident_details key="key" item="value"}
                <strong>{if $key == 'subject'}{$value}{/if}</strong>
            {/foreach}
        </div>
    </div>
    <div class="row-fluid">
        <div class="col-4">
            <label for="content">Message:</label>
        </div>
        <div class="col-8">
            {foreach from=$incident_details key="key" item="value"}
                <strong>{if $key == 'content'}{$value}{/if}</strong>
            {/foreach}
        </div>
    </div>
    <br>
    <br>

    <div class="row-fluid ">
        <div class="col-4 ">
            <label for="subject">Comments:</label>
        </div>
        {foreach from=$comment_answer key="key" item="value"}
            {if $auth.user_id == $value['user_id'] }
                <div class="col-8 position_right">
                {else}
                    <div class="col-8">
                    {/if}
                    <label for="firstname"><strong> Name: {$value['firstname']}</strong> || Time: {$value['update_time']}
                    </label>
                    <label for="comment">Message: {$value['comment']} </label>
                    <br>
                </div>
            {/foreach}
        </div>



        {if $incident_details.operator_id != null}

            <div class="cm-tabs-content">


                <form method="post" action="{""|fn_url}" name="answer_incident">
                    <input type="hidden" name="dispatch" value="incident.answer" />
                    {foreach from=$incident_details key="key" item="value"}
                        {if $key == 'incident_id'}<input type="hidden" name="incident_id" value="{$value}" />
                        {/if}
                    {/foreach}
                    <div id="content_detailed" class="form-horizontal form-edit cm-processed-form cm-check-changes">
                        <h3 class="subheader   hand" data-toggle="collapse" data-target="#acc_information">
                            Answer Incident
                        </h3>
                    </div>
                    <div class="fixed-bottom-wrapper" id="new_message_form_1">
                        <div class="cm-ajax add_message_form cm-processed-form cm-check-changes" name="add_message_form_1">
                            <div id="new_message_1" class="add_message_form--wrapper">
                                <textarea id="thread_message_1" name="comment" class="cm-focus add_message_form--textarea"
                                    rows="5" autofocus="" placeholder="Type a message..."
                                    data-ca-vendor-communication="threadMessage" required></textarea>
                                <div class="buttons-container">
                                    <input class="btn btn btn-primary btn-send cm-post pull-right" type="submit"
                                        value="Answer">
                                </div>
                                <div class="buttons-container">
                                    <input type="button" value="Go back!" onclick="history.back()">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </form>
{/if}