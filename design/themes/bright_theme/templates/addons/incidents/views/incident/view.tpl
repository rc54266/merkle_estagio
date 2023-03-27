{style src="addons/incidents/style.less"}
<head>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container padding-bottom-3x mb-2">
        <div class="row">
            <div class="col-lg-8">
                <div class="padding-top-2x mt-2 hidden-lg-up"></div>
                <div class="table-responsive margin-bottom-2x">
                    <table class="table margin-bottom-none">
                        <thead>
                            <tr>
                                <th>Incident</th>
                                <th>Title</th>
                                <th>Date Submitted</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Id: # {foreach from=$incident_details key="key" item="value"}
                                        <strong>{if $key == 'incident_id'}{$value}{/if}</strong>
                                    {/foreach}
                                </td>
                                <td>{foreach from=$incident_details key="key" item="value"}
                                        {if $key == 'subject'}{$value}{/if}
                                    {/foreach} </td>
                                <td><span class="text-primary">{foreach from=$incident_details key="key" item="value"}
                                            <strong>{if $key == 'created'}{$value}{/if}</strong>
                                        {/foreach}</span></td>
                                {if $incident_details.status_id == 1}
                                    <td><span class="text-primary">Open</span></td>
                                {else}
                                    <td><span class="text-warning">Close</span></td>
                                {/if}

                            </tr>
                        </tbody>
                    </table>
                </div>

                <h4> Incident: </h4>
                <div class="comment">

                    <div class="comment-body">
                        <p class="comment-text"> {foreach from=$incident_details key="key" item="value"}
                                <strong>{if $key == 'content'}{$value}{/if}</strong>
                            {/foreach}
                        </p>
                        <div class="comment-footer"></div>
                    </div>
                </div>
                <h4> Comments: </h4>
                {foreach from=$comment_answer key="key" item="value"}
                    {if $auth.user_id == $value['user_id'] }
                        <div class="comment1">
                            <div class="comment-author-ava">Me:</div>
                            <div class="comment-body1">
                            {else}
                                <div class="comment">
                                    <div class="comment-author-ava">Operator:</div>
                                    <div class="comment-body">
                                    {/if}
                                    <p class="comment-text">{$value['comment']}</p>
                                    <div class="comment-footer"><span class="comment-meta">{$value['firstname']}, {$value['update_time']}</span></div>
                                </div>
                            </div>
                        {/foreach}

                        {if $incident_details['status_id'] != 2}
                            <h5 class="mb-30 padding-top-1x">Leave Comment</h5>
                            <form method="post" action="{""|fn_url}" name="answer_incident">
                                <input type="hidden" name="dispatch" value="incident.view" />
                                {foreach from=$incident_details key="key" item="value"}
                                    {if $key == 'incident_id'}<input type="hidden" name="incident_id" value="{$value}" />
                                    {/if}
                                {/foreach}
                                <div class="form-group">
                                    <textarea class="form-control form-control-rounded" id="review_text" name="comment"
                                        rows="8" placeholder="Write your comment here..." required=""></textarea>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-outline-primary" type="submit">Answer</button>
                                </div>
                                <div class="text-left">
                                    <input type="button" value="Go back!" onclick="history.back()">
                                </div>
                            </form>
                        </div>
                    </div>
                {/if}
</div>