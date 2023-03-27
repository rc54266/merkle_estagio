<div class="cm-tabs-content">


    <form method="post" action="{""|fn_url}" name="create_incident">
        <input type="hidden" name="dispatch" value="incident.create" />
        <div id="content_detailed" class="form-horizontal form-edit cm-processed-form cm-check-changes">

            <h3 class="subheader   hand" data-toggle="collapse" data-target="#acc_information">
                Create Incident
            </h3>
            <div id="acc_information" class="collapsed in">

                <div class="control-group">
                    <label for="elm_category_name" class="control-label cm-required">Subject:</label>
                    <div class="controls">
                        <input type="text" name="subject" id="elm_category_name" placeholder="Subject" size="55"
                            value="" required class="input-large">
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed-bottom-wrapper" id="new_message_form_1">
            <div class="cm-ajax add_message_form cm-processed-form cm-check-changes" name="add_message_form_1">
                <div id="new_message_1" class="add_message_form--wrapper">
                    <textarea id="thread_message_1" name="content" class="cm-focus add_message_form--textarea"
                        rows="5" autofocus="" placeholder="Type a message..."
                        data-ca-vendor-communication="threadMessage" required></textarea>
                    <div class="buttons-container">
                        <input class="btn btn btn-primary btn-send cm-post pull-right" type="submit" value="Create">
                    </div>
                </div>
            </div>
        </div>
    </form>
