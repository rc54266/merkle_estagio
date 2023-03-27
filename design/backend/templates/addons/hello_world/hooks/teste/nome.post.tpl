 <td class="center" data-th="{__($area)} ({__("read")}" data-ca-profile-fields-area-group="{$area}" width="{$area_col_width}%">
                                    <input type="hidden"
                                        name="fields_data[{$field.field_id}][read_only]"
                                        value="Y"/>
                                    <input type="checkbox"
                                        name="fields_data[{$field.field_id}][read_only]"
                                        value="Y"
                                        id="sw_read{$area}_{$field.field_id}"
                                        class="cm-switch-availability"
                                        data-ca-profile-fields-area="{$area}"
                                        {if $field.field_name === "read_only"}
                                            checked="checked"
                                        {/if}
                                        />
                                        </td>